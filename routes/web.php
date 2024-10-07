<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();


// Define a group of routes with 'auth' middleware applied
Route::middleware(['auth'])->group(function () {
    // Define a GET route for the root URL ('/')
    Route::group(["prefix", "admin"],function(){

        Route::get('admin/', function () {
            // Return a view named 'index' when accessing the root URL
            return view('index');
        });
        
        // Define a GET route with dynamic placeholders for route parameters
        Route::get('admin/{routeName}/{name?}', [HomeController::class, 'pageView']);
    });
});




Route::get('/', function () {
    return view('frontend.index');
})->name("home");

Route::view("/home-2", "frontend.index_2")->name("home2");
Route::view("/about-us", "frontend.about_us")->name("about");
Route::view("/contact", "frontend.contact")->name("contact");
Route::view("/services", "frontend.services")->name("services");
Route::view("/services-detail", "frontend.service_details")->name("services.detail");
Route::view("/portfolio", "frontend.portfolio")->name("portfolio");
Route::view("/portfolio-grid", "frontend.portfolio_2")->name("portfolio.grid");
Route::view("/portfolio-detail", "frontend.portfolio_details")->name("portfolio.detail");
Route::view("/team", "frontend.team_page")->name("team");
Route::view("/blog-list", "frontend.blog_list")->name("blog.list");
Route::view("/blog-grid", "frontend.blog_grid")->name("blog.grid");
Route::view("/blog-detail", "frontend.blog_details")->name("blog.detail");
