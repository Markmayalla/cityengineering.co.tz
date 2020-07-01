<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "WebController@home")->name("index");
Route::get("/about", "WebController@about")->name("about");
Route::get("/services", "WebController@services")->name("services");
Route::get("/services/single")->name("services_single")->name("services.single");
Route::get("/projects", "WebController@projects")->name("projects");
Route::get('/projects/single', 'WebController@projects_single')->name("projects.singie");
Route::get("/contacts", "WebController@contacts")->name("contacts");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('services', 'ServiceController');
    Route::resource('clients', 'ClientController');
    Route::resource('projects', 'ProjectController');
    Route::resource('slides', 'SlideController');
    Route::resource('certificates', 'CertificateController');
    Route::resource('settings', 'SettingController');
});
