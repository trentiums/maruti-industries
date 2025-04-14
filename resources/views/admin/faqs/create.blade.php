@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.faq.title_singular') }}
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.faqs.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="required" for="product_ids">{{ trans('cruds.faq.fields.product_id') }}</label>
                    <div style="padding-bottom: 4px">
                        <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                    </div>
                    <select class="form-control select2 {{ $errors->has('product_id') ? 'is-invalid' : '' }}" name="product_ids[]" id="product_ids" multiple required>
                        @foreach($product_ids as $id => $product_id)
                            <option value="{{ $id }}" {{ in_array($id, old('product_ids', [])) ? 'selected' : '' }}>{{ $product_id }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('product_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('product_id') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.faq.fields.product_helper') }}</span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" id="faqableType">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="required" for="question">{{ trans('cruds.faq.fields.question') }}</label>
                            <textarea class="form-control{{ $errors->has('question') ? 'is-invalid' : '' }}"
                                      name="question"
                                      id="question" oninput="checkValidInput(this)"
                                      rows="1" required>{{ old('question') }}</textarea>
                            @if ($errors->has('question'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('question') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.faq.fields.question_helper') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="required"
                                   for="answer">{{ trans('cruds.faq.fields.answer') }}</label>
                            <textarea class="form-control {{ $errors->has('answer') ? 'is-invalid' : '' }}"
                                      name="answer"
                                      id="answer" oninput="checkValidInput(this)"
                                      rows="1" required>{{ old('answer') }}</textarea>
                            @if ($errors->has('answer'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('answer') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.faq.fields.answer_helper') }}</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-light" type="submit">
                        {{ trans('global.cancel') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection