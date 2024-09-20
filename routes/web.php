<?php

use Illuminate\Support\Facades\Route;

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