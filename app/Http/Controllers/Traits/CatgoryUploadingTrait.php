<?php

namespace App\Http\Controllers\Traits;

use App\Models\BlogCategory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
trait CatgoryUploadingTrait{
    public function generate_dynamic_categories()
    {
        $categories = Cache::remember('blog_categories', config('settings.cache_data_limit')['seconds'] * config('settings.cache_data_limit')['days'], function () {
            return BlogCategory::withCount('blogposts')->get();
        });
    
        $strRoutes = '';
    
        foreach ($categories as $category) {
            $strRoutes .= "
            <li class=\"d-flex justify-content-between align-items-center py-2\">
                <a href=\"" . url('/' . $category->slug) . "\" class=\"text-decoration-none\">
                    <span>{$category->title}</span>
                </a>
                <span class=\"badge bg-secondary\">{$category->blogposts_count}</span>
            </li>";
        }
    
        $strRoutes = trim($strRoutes);
    
        $fp = fopen(base_path('resources/views/front/dynamic-categories.blade.php'), "w+");
        if (is_resource($fp)) {
            fwrite($fp, $strRoutes);
            fclose($fp);
        }
    }
    
}    
?>