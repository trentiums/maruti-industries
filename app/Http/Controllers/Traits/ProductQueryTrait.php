<?php

namespace App\Http\Controllers\Traits;

use App\Models\Product;
trait ProductQueryTrait
{
    public function getProductQuery()
    {

        $products =Product::orderby('id','desc')->get();

        $products->map(function ($product) {
                $product->main_image = $product->getMedia('main_image')->last();
                $product->gallery = $product->getMedia('gallery');
                $product->documents = $product->getMedia('documents');
            });
            

        return $products;

    }
}
?>
