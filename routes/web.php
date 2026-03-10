<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Site\CarController as FleetController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Site\BlogController as BController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CarBookingController;
use App\Http\Controllers\Site\ContactController;



Route::get('/', [HomeController::class, 'homePage'])->name('index');

Route::get('/cars', [FleetController::class, 'ourFleets'])->name('our.fleet');
Route::get('/car/{slug}', [FleetController::class, 'carDetails'])->name('car.details');
Route::get('/cars/brand/{slug}', [FleetController::class, 'carByBrand'])->name('car.brand');
// Route::get('/cars/body-type/{slug}', [FleetController::class, 'carByBodyType'])->name('car.bodyType');
Route::get('/cars/type/{slug}', [FleetController::class, 'carByCategory'])->name('car.category');


Route::get('/blogs', [BController::class, 'ourBlogs'])->name('blogs');
Route::get('/blog/{slug}', [BController::class, 'blogDetails'])->name('blog.details');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact.us');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/home/enquiry', [ContactController::class, 'homeEnquiry'])->name('home.enquiry');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about.us');
Route::post('/booking/store', [CarBookingController::class, 'store'])->name('booking.store');
// Admin Routes

Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/cars', [CarController::class, 'index'])->name('admin.cars.index');
    Route::get('/admin/cars/create', [CarController::class, 'create'])->name('admin.car.create');
    Route::post('/admin/car/store', [CarController::class, 'createOrUpdateCar'])->name('admin.car.store');
    Route::get('/admin/car/{id}/edit', [CarController::class, 'edit'])->name('admin.car.edit');
    Route::put('/admin/car/{id}', [CarController::class, 'createOrUpdateCar'])->name('admin.car.update');
    Route::delete('/admin/car/{id}', [CarController::class, 'destroy'])->name('admin.car.destroy');
    Route::post('/admin/car/status/{id}', [CarController::class, 'toggleStatus'])->name('admin.car.toggleStatus');
    
    Route::get('/admin/brands', [BrandController::class, 'index'])->name('admin.brands.index');
    Route::get('/admin/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
    Route::post('/admin/brand/store', [BrandController::class, 'store'])->name('admin.brand.store');
    Route::get('/admin/brand/{id}/edit', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::put('/admin/brand/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::delete('/admin/brand/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');
    Route::post('/admin/brand/status/{id}', [BrandController::class, 'toggleStatus'])->name('admin.brand.toggleStatus');

    Route::get('/admin/models', [ModelController::class, 'index'])->name('admin.models.index');
    Route::get('/admin/model/create', [ModelController::class, 'create'])->name('admin.model.create');
    Route::post('/admin/model/store', [ModelController::class, 'store'])->name('admin.model.store');
    Route::get('/admin/model/{id}/edit', [ModelController::class, 'edit'])->name('admin.model.edit');
    Route::put('/admin/model/{id}', [ModelController::class, 'update'])->name('admin.model.update');
    Route::delete('/admin/model/{id}', [ModelController::class, 'destroy'])->name('admin.model.destroy');
    Route::post('/admin/model/status/{id}', [ModelController::class, 'toggleStatus'])->name('admin.model.toggleStatus');
    
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::post('/admin/category/status/{id}', [CategoryController::class, 'toggleStatus'])->name('admin.category.toggleStatus');


    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::put('/admin/blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::delete('/admin/blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::get('/admin/leads', function () {
        return view('admin.leads.index');
    })->name('admin.leads.index');
    Route::get('/admin/inquiries', function () {
        return view('admin.inquiries.index');
    })->name('admin.inquiries.index');

    Route::get('/admin/inquiry/detail', function () {
        return view('admin.inquiries.detail');
    })->name('admin.inquiry.detail');

    Route::get('/admin/car-discount', function () {
        return view('admin.cardiscount.index');
    })->name('admin.cardiscount.index');
    
});
