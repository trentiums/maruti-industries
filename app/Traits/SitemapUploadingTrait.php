<?php

namespace App\Traits;

use App\Models\Product;
use App\Models\BlogPost;
use App\Models\BlogCategory;

trait SitemapUploadingTrait
{
   public function generate_xml_products()
{
    $products = Product::all(); // no need for 'with(categories)' if not using them

    $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
    $strRoutes .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" ";
    $strRoutes .= "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" ";
    $strRoutes .= "xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 ";
    $strRoutes .= "http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\r\n";

    foreach ($products as $product) {
        if ($product->slug) {
            $url = "https://emeryroll.in/product/" . urlencode($product->slug);

            $strRoutes .= "<url>\r\n";
            $strRoutes .= "<loc>{$url}</loc>\r\n";
            $strRoutes .= "<lastmod>" . $product->updated_at->toAtomString() . "</lastmod>\r\n";
            $strRoutes .= "<changefreq>daily</changefreq>\r\n";
            $strRoutes .= "<priority>1.0</priority>\r\n";
            $strRoutes .= "</url>\r\n";
        }
    }

    $strRoutes .= "</urlset>\r\n";

    file_put_contents(public_path('sitemap/sitemap-0.xml'), trim($strRoutes));
}

 
    public function generate_xml_blogs()
    {
        $blogs = BlogPost::all();

        $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
        $strRoutes .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" ";
        $strRoutes .= "xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" ";
        $strRoutes .= "xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 ";
        $strRoutes .= "http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">\r\n";

        foreach ($blogs as $blog) {
            $url = "https://emeryroll.in/blog/" . $blog->slug;

            $strRoutes .= "<url>\r\n";
            $strRoutes .= "<loc>{$url}</loc>\r\n";
            $strRoutes .= "<lastmod>" . $blog->updated_at->toAtomString() . "</lastmod>\r\n";
            $strRoutes .= "<changefreq>daily</changefreq>\r\n";
            $strRoutes .= "<priority>1.0</priority>\r\n";
            $strRoutes .= "</url>\r\n";
        }

        $strRoutes .= "</urlset>\r\n";
        file_put_contents(public_path('sitemap/sitemap-1.xml'), trim($strRoutes));
    }

    public function generate_blog_category_sitemap()
    {
        $categories = BlogCategory::all();

        $strRoutes = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n";
        $strRoutes .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\r\n";

        foreach ($categories as $category) {
            $url = "https://emeryroll.in/blog/category/" . $category->slug;

            $strRoutes .= "<url>\r\n";
            $strRoutes .= "<loc>{$url}</loc>\r\n";
            $strRoutes .= "<lastmod>" . $category->updated_at->toAtomString() . "</lastmod>\r\n";
            $strRoutes .= "<changefreq>weekly</changefreq>\r\n";
            $strRoutes .= "<priority>0.8</priority>\r\n";
            $strRoutes .= "</url>\r\n";
        }

        $strRoutes .= "</urlset>\r\n";
        file_put_contents(public_path('sitemap/sitemap-2.xml'), trim($strRoutes));
    }
}
