<?php

use App\Http\Controllers\About_usController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Blog_standardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\Tour_detailsController;
use App\Http\Controllers\Tour_standardController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourSearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

//------------ Front-end Controllers------------------------------------------
Route::get('/home',[UserController::class,"index"])->name("home");
// ------------package-standard------------------------------------------------
Route::get('/standard-package',[Tour_standardController::class,"index"])->name("standard-package");
// ------------package-details------------------------------------------------
Route::get('/package-details-{id}',[Tour_standardController::class,"view_details"])->name("package-details");
// ------------package-search------------------------------------------------
// Route::get('/search_tour',[Tour_standardController::class,"search"])->name("search_tour");

// ------------book tour------------------------------------------------
Route::post('/book-tour',[Tour_standardController::class,"store"])->name("book.store");

// ------------Destinations------------------------------------------------
Route::get('/destination',[DestinationController::class,"index"])->name("destination");
//--------------------Tour_search-----------------------------------------------------
Route::get('/tour-search',[TourSearchController::class,"index"])->name("tour-search");

// ------------Blog Controllers------------------------------------------------
// ------------Blog standard------------------------------------------------
Route::get('/standard-blog',[Blog_standardController::class,"index"])->name("standard-blog");
// ------------Blog details------------------------------------------------
Route::get('/blog-details-{id}',[Blog_standardController::class,"view_details"])->name("blog-details");
//--------------------Comment-----------------------------------------------------
 Route::post('/comment',[Blog_standardController::class,"store"])->name("comment.store");

 //--------------------Contact Us-----------------------------------------------------
Route::get('/contact-us',[ContactUsController::class,"index"])->name("contact-us");
 //--------------------Contact Us Store-----------------------------------------------------
Route::post('/message-us',[ContactUsController::class,"store"])->name("contact.store");

//--------------------About Us-----------------------------------------------------
Route::get('/about-us',[About_usController::class,"index"])->name("about-us");
//--------------------Gallery-----------------------------------------------------
Route::get('/gallary',[AlbumController::class,"index"])->name("gallary");
 



/******************************************************************************/ 
/********************************************************************/ 
/*************************************************************/ 

//-----------Admin Controller--------------------------------------
//------Admin-Home Controller--------
// Route::get('/dash',[HomeController::class,"index"])->name('dash');
Route::get('/redirects',[HomeController::class,"redirects"])->name("redirects");
//--------Category Controller-------------------------------------
Route::get('/category',[CategoryController::class,"index"])->name("category");
//---------------store--------------------------------------------------------------------------
Route::post('/category',[CategoryController::class,"store"])->name("CategoryController.store");
//------------------update----------------------------------------------------------------------
Route::get('/edit_cat{id}',[CategoryController::class,"edit"])->name("edit_category");
Route::put('/update_cat{id}',[CategoryController::class,"update"])->name("update_cat");
//-----------------delete------------------------------------------------------------------------
Route::get('/delete_cat{id}',[CategoryController::class,"delete"])->name("delete_cat");
//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
//-----------------City Controller--------------------------------------------------
Route::get('/city',[CityController::class,"index"])->name("city");
//---------------store--------------------------------------------------------------------------
Route::post('/',[CityController::class,"store"])->name("CityController.store");
//------------------update----------------------------------------------------------------------
Route::get('/edit_city{id}',[CityController::class,"edit"])->name("edit_city");
Route::put('/update_city{id}',[CityController::class,"update"])->name("update_city");
//-----------------delete------------------------------------------------------------------------
Route::get('/delete_city{id}',[CityController::class,"delete"])->name("delete_city");
//----------------------------------------------------------------------------------------

//--------------------Tour Controller-----------------------------------------------------------------------
Route::get('/add_tour',[TourController::class,"index"])->name("add_tour");
//------------------view all tours---------------------------------------------
 Route::get('/all_tours',[TourController::class,"viewTours"])->name("all_tours");
// -----------------store----------------------------------------------------------------------
Route::post('/add_tour',[TourController::class,"store"])->name("TourController.store");
//--------------------edit------------------------------------------------------------------
Route::get('/edit_tour{id}',[TourController::class,"edit"])->name("edit_tour");
//--------------------update------------------------------------------------------------------
Route::put('/update_tour{id}',[TourController::class,"update"])->name("update_tour");
// -----------------delete----------------------------------------------------------------------
Route::get('/delete_tour{id}',[TourController::class,"delete"])->name("delete_tour");


//--------------------TourPlans Controller-----------------------------------------------------
// -----------------index----------------------------------------------------------------------
Route::get('/add_Tour-plan',[PlanController::class,"index"])->name("add_Tour_plan");
//------------------view all tours---------------------------------------------
 Route::get('/all_Tour-plan',[PlanController::class,"viewPlans"])->name("all_plans");
// -----------------store----------------------------------------------------------------------
Route::post('/add_Tour-plan',[PlanController::class,"store"])->name("store");
// -----------------edit----------------------------------------------------------------------
Route::get('/edit_plan{id}',[PlanController::class,"edit"])->name("edit_plan");
//--------------------update------------------------------------------------------------------
Route::put('/update_plan{id}',[PlanController::class,"update"])->name("update_plan");
// -----------------delete----------------------------------------------------------------------
Route::get('/delete_plan{id}',[PlanController::class,"delete"])->name("delete_plan");

//--------------------Blog Controller-----------------------------------------------------
// -----------------index----------------------------------------------------------------------
Route::get('/add_blog',[BlogController::class,"add_view"])->name("add_blog");

// -----------------Check slug----------------------------------------------------------------------
Route::get('/check_slug',[BlogController::class,"checkSlug"])->name("blogs.checkSlug");
//------------------view all tours---------------------------------------------
 Route::get('/all_blogs',[BlogController::class,"index"])->name("all_blogs");
// // -----------------store----------------------------------------------------------------------
 Route::post('/add',[BlogController::class,"store"])->name("BlogController.store");
// // -----------------edit----------------------------------------------------------------------
 Route::get('/edit_blog{id}',[BlogController::class,"edit"])->name("edit_blog");
// //--------------------update------------------------------------------------------------------
 Route::put('/update_blog{id}',[BlogController::class,"update"])->name("update_blog");
// // -----------------delete----------------------------------------------------------------------
 Route::get('/delete_blog{id}',[BlogController::class,"delete"])->name("delete_blog");
//  -----------------------------------------------------------------------------------------------
//--------------------booking Controller-----------------------------------------------------
// -----------------index----------------------------------------------------------------------
 Route::get('/all_bookings',[BookingController::class,"index"])->name("all_bookings");
// // -----------------delete----------------------------------------------------------------------
 Route::get('/delete_order{booking_id}',[BookingController::class,"delete"])->name("delete_order");
 // -----------------order details----------------------------------------------------------------------
 Route::get('/order_details{id}',[BookingController::class,"details"])->name("order_details");
 
 //--------------------Comments Controller-----------------------------------------------------
 Route::get('/comments',[CommentsController::class,"index"])->name("comments");
Route::get('/edit_comment{comment_id}',[CommentsController::class,"edit"])->name("edit_comment");
Route::put('/update_comment{comment_id}',[CommentsController::class,"update"])->name("update_comment");
Route::put('/delete_comment{comment_id}',[CommentsController::class,"delete"])->name("delete_comment");

 //--------------------Settings Controller-----------------------------------------------------
 Route::get('/settings',[SettingsController::class,"index"])->name("settings");
Route::post('/update_about',[SettingsController::class,"update"])->name("update_about");
Route::post('/update_footer',[SettingsController::class,"update_footer"])->name("update_footer");
Route::post('/update_meta',[SettingsController::class,"update_meta"])->name("update_meta");
Route::post('/update_contact',[SettingsController::class,"update_contact"])->name("update_contact");
Route::post('/update_logo',[SettingsController::class,"update_logo"])->name("update_logo");
Route::post('/update_favicon',[SettingsController::class,"update_favicon"])->name("update_favicon");

 //--------------------Social Media Links Controller-----------------------------------------------------
 Route::get('/social-media',[SocialMediaController::class,"index"])->name("social-media");
Route::post('/update_socialMedia',[SocialMediaController::class,"update"])->name("update_socialMedia");



 //--------------------Gallery Controller-----------------------------------------------------
 Route::get('/gallery',[GalleryController::class,"index"])->name("gallery");
 Route::post('/image-upload', [GalleryController::class, 'fileUpload'])->name('imageUpload');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
