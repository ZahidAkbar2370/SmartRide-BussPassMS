<?php

use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $aboutUs = Setting::where("id", 1)->first();
    return view('about',compact('aboutUs'));
});

Route::get('contact-us', function () {
    $setting = Setting::where("id", 1)->first();
    return view('contact_us',compact('setting'));
});

Route::post('send-contact-message', function (Request $request) {
    ContactMessage::create([
        "name" => $request->name,
        "email" => $request->email,
        "message" => $request->message,
    ]);

    Session::flash("message", "Message Sent Successfully!");
    return redirect()->back();
});

Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, "index"]);

Route::get('admin/create-category', [App\Http\Controllers\Admin\CategoryController::class, "create"]);
Route::post('admin/save-category', [App\Http\Controllers\Admin\CategoryController::class, "save"]);
Route::get('admin/view-category', [App\Http\Controllers\Admin\CategoryController::class, "index"]);
Route::get('admin/edit-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, "edit"]);
Route::post('admin/update-category', [App\Http\Controllers\Admin\CategoryController::class, "update"]);
Route::get('admin/delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, "destroy"]);

Route::get('admin/create-pass', [App\Http\Controllers\Admin\PassController::class, "create"]);
Route::get('admin/view-passes', [App\Http\Controllers\Admin\PassController::class, "index"]);
Route::post('admin/save-pass', [App\Http\Controllers\Admin\PassController::class, "save"]);
Route::get('admin/edit-pass/{id}', [App\Http\Controllers\Admin\PassController::class, "edit"]);
Route::post('admin/update-pass', [App\Http\Controllers\Admin\PassController::class, "update"]);
Route::get('admin/delete-pass/{id}', [App\Http\Controllers\Admin\PassController::class, "destroy"]);
Route::get('admin/show-pass/{id}', [App\Http\Controllers\Admin\PassController::class, "show"]);

Route::get('admin/about-us-page', [App\Http\Controllers\Admin\PageController::class, "aboutUs"]);
Route::post('admin/update-about-us', [App\Http\Controllers\Admin\PageController::class, "saveAboutUs"]);
Route::get('admin/contact-us-page', [App\Http\Controllers\Admin\PageController::class, "contactUs"]);
Route::post('admin/update-contact-us-page', [App\Http\Controllers\Admin\PageController::class, "updateContactUs"]);

Route::get('admin/contact-messages', [App\Http\Controllers\Admin\ContactMessageController::class, "index"]);
Route::get('admin/mark-as-reply/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, "updateStatus"]);
Route::get('admin/delete-message/{id}', [App\Http\Controllers\Admin\ContactMessageController::class, "destroy"]);

Route::post('admin/search', [App\Http\Controllers\Admin\SearchController::class, "search"]);
Route::get('admin/change-password', [App\Http\Controllers\Admin\SearchController::class, "changePassword"]);
Route::post('admin/update-password', [App\Http\Controllers\Admin\SearchController::class, "updatePassword"]);
Route::get('admin/profile', [App\Http\Controllers\Admin\SearchController::class, "profile"]);
Route::post('admin/update-profile', [App\Http\Controllers\Admin\SearchController::class, "updateProfile"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
