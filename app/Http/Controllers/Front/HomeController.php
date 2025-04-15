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
        /* $blogs = BlogPost::orderBy('id', 'DESC')->take(3)->get();*/
        $data['meta_title'] = 'Industrial Abrasive Products | Flint, Sandpaper, Emery & Aloxide Rolls';
        $data['meta_description'] = 'Leading supplier of abrasive products – Flint Paper, Sandpaper, Emery Paper, Aloxide Cloth Rolls, Emery Rolls. Request a quote or callback today.';
        return view('front.home', compact('data')); 
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
    public function blog()
    {
        $data['meta_title']='Abrasive Blog | Tips, Uses & Guides for Flint Paper, Emery & Sandpaper';
        $data['meta_description']='Read helpful articles about abrasive products including Emery Rolls, Flint Paper, Aloxide Cloth, and more. Learn how to choose the right abrasive material.';
        return view('front.blog',compact('data'));
    }
    public function product()
    {
        $data['meta_title']='Abrasive Products | Flint, Sandpaper, Emery, Aloxide Cloth & Rolls';
        $data['meta_description']='Explore our full range of industrial abrasives including Flint Paper, Sandpaper, Emery Paper, Emery Roll, and Aloxide Cloth Roll. Request a quote directly from each product page.';
        return view('front.product',compact('data'));
    }
}
?>