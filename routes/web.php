<?php

use App\Http\Controllers\Front\InquiryController;
use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('faq',[HomeController::class,'faq'])->name('faq');
Route::get('privacy-policy',[HomeController::class,'privacy_policy'])->name('privacy-policy');
Route::get('terms-condition',[HomeController::class,'terms_condition'])->name('terms-condition');
Route::get('blog/{any?}',[HomeController::class,'blog'])->name('blog');
Route::get('blog/category/{slug}', [HomeController::class, 'blogsByCategory'])->name('category.blogs');
Route::get('/blog/page/{page}', [HomeController::class, 'blogPaginated'])->name('blog.paginated');
Route::get('product/{product?}',[HomeController::class,'product'])->name('product');
Route::post('/save-inquiry', [InquiryController::class, 'saveInquiry'])->name('save-inquiry');
Route::post('/save-modal-inquiry',[InquiryController::class,'saveModalInquiry'])->name('save-modal-inquiry');


use App\Http\Middleware\AuthGates;

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\\Http\\Controllers\\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
// Permissions
Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
Route::resource('permissions', 'PermissionsController');

// Roles
Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
Route::resource('roles', 'RolesController');

// Users
Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
Route::resource('users', 'UsersController');

  // Products
  Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
  Route::post('products/media', 'ProductsController@storeMedia')->name('products.storeMedia');
  Route::post('products/ckmedia', 'ProductsController@storeCKEditorImages')->name('products.storeCKEditorImages');
  Route::resource('products', 'ProductsController');

  //Faqs
  Route::delete('faqs/destroy', 'FaqsController@massDestroy')->name('faqs.massDestroy');
  Route::resource('faqs', 'FaqsController');

 // Blog Category
 Route::delete('blog-categories/destroy', 'BlogCategoryController@massDestroy')->name('blog-categories.massDestroy');
 Route::post('blog-categories/media', 'BlogCategoryController@storeMedia')->name('blog-categories.storeMedia');
 Route::post('blog-categories/ckmedia', 'BlogCategoryController@storeCKEditorImages')->name('blog-categories.storeCKEditorImages');
 Route::resource('blog-categories', 'BlogCategoryController');

 // Blog Post
 Route::delete('blog-posts/destroy', 'BlogPostController@massDestroy')->name('blog-posts.massDestroy');
 Route::post('blog-posts/media', 'BlogPostController@storeMedia')->name('blog-posts.storeMedia');
 Route::post('blog-posts/ckmedia', 'BlogPostController@storeCKEditorImages')->name('blog-posts.storeCKEditorImages');
 Route::resource('blog-posts', 'BlogPostController');


   // Inquiry
   Route::delete('inquiries/destroy', 'InquiryController@massDestroy')->name('inquiries.massDestroy');
   Route::resource('inquiries', 'InquiryController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'App\\Http\\Controllers\\Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

?>