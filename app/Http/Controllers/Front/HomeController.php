<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = BlogPost::orderBy('id', 'DESC')->take(3)->get();
        $data['meta_title'] = 'Industrial Abrasive Products | Flint, Sandpaper, Emery & Aloxide Rolls';
        $data['meta_description'] = 'Leading supplier of abrasive products – Flint Paper, Sandpaper, Emery Paper, Aloxide Cloth Rolls, Emery Rolls. Request a quote or callback today.';
        return view('front.home', compact('data','blogs')); 
    }
    public function about_us()
    {
        $data['meta_title'] = 'About Us | Leading Abrasive Products Supplier in India';
        $data['meta_description'] = 'Learn more about our experience, manufacturing standards, and commitment to quality in delivering Flint Paper, Emery Paper, Sandpaper Rolls, and more.';
        return view('front.about-us', compact('data'));
    }
    
    public function contact_us()
    {
        $data['meta_title'] = 'Contact Us | Request a Quote for Abrasive Products';
        $data['meta_description'] = 'Get in touch with us to inquire about Flint Paper, Emery Rolls, Sandpaper, and more. Request a callback, ask for a quote, or message us on WhatsApp.';
        return view('front.contact-us', compact('data'));
    }
    public function faq()
    {
        $data['meta_title']='Maruti Industries | Industrial Abrasives & Solutions';
        $data['meta_description']='Find answers to frequently asked questions about Maruti Industries eabrasive products like Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls. Get expert insights, product support, and more.';
        return view('front.faq',compact('data'));
    }
    public function terms_condition()
    {
        $data['meta_title']='Maruti Industries | Industrial Abrasives & Solutions';
        $data['meta_description']='Find answers to frequently asked questions about Maruti Industries eabrasive products like Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls. Get expert insights, product support, and more.';
        return view('front.terms-condition',compact('data'));
    }
    public function privacy_policy()
    {
        $data['meta_title']='Maruti Industries | Industrial Abrasives & Solutions';
        $data['meta_description']='Find answers to frequently asked questions about Maruti Industries eabrasive products like Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls. Get expert insights, product support, and more.';
        return view('front.privacy-policy',compact('data'));
    }
    public function blog(Request $request, $any = NULL)
    {

        if (isset($any) && !empty($any)) {
            $blog_details = BlogPost::where('slug', $any)->orderBy('created_at', 'desc')->first();
            $latest_blogs = BlogPost::orderBy('created_at', 'desc')->take(3)->get();
            $categoriesWithCounts = BlogCategory::withCount('blogPosts')->get();
            $data['meta_title'] = $blog_details->meta_title;
            $data['meta_description'] = $blog_details->meta_description;
            return view('front.blog-details', compact('blog_details', 'data', 'latest_blogs', 'categoriesWithCounts'));
        } else {
            $blogs = BlogPost::orderBy('id', 'DESC')->paginate(3);
            $latest_blogs = BlogPost::orderBy('created_at', 'desc')->take(3)->get();
            $categoriesWithCounts = BlogCategory::withCount('blogPosts')->get();
            $data['meta_title'] = 'Vulcan Engineering Blog | Machinery Innovations & Industry Trends';
            $data['meta_description'] = 'Stay updated with the latest in machinery innovations, engineering breakthroughs, and industry trends from Vulcan Engineering. Read our blog for expert insights.';
            return view('front.blog', compact('data', 'blogs', 'latest_blogs', 'categoriesWithCounts'));
        }
    }
    public function product($product = NULL)
    {

        if ((isset($product) && !empty($product)) ){
            $product = Product::where('slug', $product)->first();
            $data['meta_title'] = $product->meta_title;
            $data['meta_description'] = $product->meta_description;
            return view('front.product-details', compact('data','product'));
        }
        else
        {
            $data['meta_title']='Abrasive Products | Flint, Sandpaper, Emery, Aloxide Cloth & Rolls';
            $data['meta_description']='Explore our full range of industrial abrasives including Flint Paper, Sandpaper, Emery Paper, Emery Roll, and Aloxide Cloth Roll. Request a quote directly from each product page.';
            return view('front.product',compact('data'));
        }

    }
}
?>