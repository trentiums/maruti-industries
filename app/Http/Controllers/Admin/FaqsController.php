<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFaqRequest;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FaqsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Faq::with(['products'])->select(sprintf('%s.*', (new Faq)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'faq_show';
                $editGate      = 'faq_edit';
                $deleteGate    = 'faq_delete';
                $crudRoutePart = 'faqs';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });

            $table->editColumn('question', function ($row) {
                return $row->question ? $row->question : '';
            });

            $table->editColumn('products', function ($row) {
                $labels = [];
                foreach ($row->products as $product) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $product->title);
                }
                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder','products']);

            return $table->make(true);
        }

        return view('admin.faqs.index');
    }

    public function create()
    {
        
        abort_if(Gate::denies('faq_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
          
        $product_ids = Product::pluck('title', 'id');
      
        return view('admin.faqs.create', compact('product_ids'));

    }

    public function store(StoreFaqRequest $request)
    {
      
        $faq = Faq::create($request->all());
        $faq->products()->sync($request->input('product_ids', []));
    
        return redirect()->route('admin.faqs.index');
    }
    
    public function edit(Faq $faq)
    {
        abort_if(Gate::denies('faq_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product_ids= Product::pluck('title', 'id');
        $faq->load('products');
        return view('admin.faqs.edit', compact('faq', 'product_ids'));
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
       
        $faq->update($request->all());
        $faq->products()->sync($request->input('product_ids', []));

        return redirect()->route('admin.faqs.index');
    }

    public function show(Faq $faq)
    {
        abort_if(Gate::denies('faq_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $faq->load('products');

        return view('admin.faqs.show', compact('faq'));
    }

    public function destroy(Faq $faq)
    {
        abort_if(Gate::denies('faq_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $faq->delete();

        return back();
    }

     public function massDestroy(MassDestroyFaqRequest $request)
    {
        $faq = Faq::find(request('ids'));

        foreach ($faq as $faq) {
            $faq->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    
}
