<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\AstrologerController;
use App\Http\Controllers\ChatController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 //Clear route cache
 Route::get('/route-cache', function() {
    \Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache
Route::get('/config-cache', function() {
    \Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache
Route::get('/clear-cache', function() {
    \Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache
Route::get('/view-clear', function() {
    \Artisan::call('view:clear');
    return 'View cache cleared';
});

// Clear cache using reoptimized class
Route::get('/optimize-clear', function() {
    \Artisan::call('optimize:clear');
    return 'View cache cleared';
});


Route::get('/', function () {
    return view('frontend.index');
});

//Chat Route
Route::controller(ChatController::class)->group(function () {
    Route::get('/chat', 'showChat')->name('chat.show');
});


 // Astrologer Route 
 Route::controller(AstrologerController::class)->group(function () {
    Route::get('/astrologer/register', 'RegisterForm')->name('page.registerform');
    Route::post('/astrologer/store', 'StoreAstrologer')->name('store.astrologer');
    Route::get('dropdown', [AstrologerController::class, 'index']);
    Route::post('api/fetch-states', [AstrologerController::class, 'fetchState']);
    Route::post('api/fetch-cities', [AstrologerController::class, 'fetchCity']);
});

 // Home Slide All Route 
 Route::controller(PageController::class)->group(function () {
    Route::get('/about-us', 'AboutUs')->name('page.aboutus');
    Route::get('/blog', 'Blog')->name('page.blog');
    Route::get('/blog/details/{id}', 'BlogDetail')->name('page.blogdetail');
    Route::get('/blog/category/{id}', 'BlogCategory')->name('page.blogcategory');
    Route::get('/kundali', 'FreeKundali')->name('page.kundali');
});

 // Home Slide All Route 
 Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlider')->name('home.slide');
    Route::get('/add/home/slide', 'AddHomeSlide')->name('add.home.slide');
    Route::post('/store/home/slide', 'StoreHomeSlide')->name('store.home.slide');
    Route::get('/edit/home/slide/{id}', 'EditHomeSlide')->name('edit.home.slide');
    Route::post('/update/home/slide', 'UpdateSlider')->name('update.slider');
});

 // Blog All Route 
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blog', 'AllBlog')->name('all.blog');
    Route::get('/add/blog', 'AddBlog')->name('add.blog');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');


});


 // Blog Category All Routes 
 Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
    Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
});
//All Admin Controllers
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
