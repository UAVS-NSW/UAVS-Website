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

Route::get('/', 'Customer\DisplayController@index')->name('customer.index');
Route::get('about', 'Customer\DisplayController@about')->name('customer.about');
Route::get('event', 'Customer\DisplayController@event')->name('customer.event');
Route::get('sponsor', 'Customer\DisplayController@sponsor')->name('customer.sponsor');
Route::get('blog', 'Customer\DisplayController@blog')->name('customer.blog');
Route::get('contact', 'Customer\DisplayController@contact')->name('customer.contact'); 
Route::get('newsletter', 'Customer\DisplayController@newsletter')->name('customer.newsletter'); 
Route::get('event-list', 'Customer\DisplayController@eventlist')->name('customer.eventlist'); 
Route::get('register', 'Customer\DisplayController@register')->name('customer.register'); 

Route::get('news', 'Customer\DisplayController@news')->name('customer.news');
Route::get('news-detail', 'Customer\DisplayController@news_detail')->name('customer.news_detail');

Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () {
        
    });
});

Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});

Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@index')->name('admin.index');
 
        Route::prefix('sponsor')->group(function () {
            Route::get('/', 'Admin\SponsorController@index')->name('admin.sponsor.index');
        }); 
        Route::prefix('school')->group(function () {
            Route::get('/', 'Admin\SchoolController@index')->name('admin.school.index');
        }); 
        Route::prefix('member')->group(function () {
            Route::get('/', 'Admin\MemberController@index')->name('admin.member.index');
        }); 
        Route::prefix('event')->group(function () {
            Route::get('/', 'Admin\EventController@index')->name('admin.event.index');
        }); 
        Route::prefix('news')->group(function () {
            Route::get('/', 'Admin\NewsController@index')->name('admin.news.index');
        }); 
    });

    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\DisplayController@image')->name('admin.image.post');

        Route::prefix('about')->group(function () {
            Route::get('/get', 'Admin\AboutController@get')->name('admin.about.get'); 
            Route::post('/update', 'Admin\AboutController@update')->name('admin.about.update'); 
        });

        Route::prefix('sponsor')->group(function () {
            Route::get('/get', 'Admin\SponsorController@get')->name('admin.sponsor.get');
            Route::post('/store', 'Admin\SponsorController@store')->name('admin.sponsor.store');
            Route::get('/get-one/{id}', 'Admin\SponsorController@get_one')->name('admin.sponsor.get_one');
            Route::post('/update', 'Admin\SponsorController@update')->name('admin.sponsor.update');
            Route::get('/delete/{id}', 'Admin\SponsorController@delete')->name('admin.sponsor.delete');
        });

        Route::prefix('school')->group(function () {
            Route::get('/get', 'Admin\SchoolController@get')->name('admin.school.get');
            Route::post('/store', 'Admin\SchoolController@store')->name('admin.school.store');
            Route::get('/get-one/{id}', 'Admin\SchoolController@get_one')->name('admin.school.get_one');
            Route::post('/update', 'Admin\SchoolController@update')->name('admin.school.update');
            Route::get('/delete/{id}', 'Admin\SchoolController@delete')->name('admin.school.delete');
        });

        Route::prefix('member')->group(function () {
            Route::get('/get', 'Admin\MemberController@get')->name('admin.member.get');
            Route::post('/store', 'Admin\MemberController@store')->name('admin.member.store');
            Route::get('/get-one/{id}', 'Admin\MemberController@get_one')->name('admin.member.get_one');
            Route::post('/update', 'Admin\MemberController@update')->name('admin.member.update');
            Route::get('/delete/{id}', 'Admin\MemberController@delete')->name('admin.member.delete');
        });

        Route::prefix('event')->group(function () {
            Route::get('/get', 'Admin\EventController@get')->name('admin.event.get');
            Route::post('/store', 'Admin\EventController@store')->name('admin.event.store');
            Route::get('/get-one/{id}', 'Admin\EventController@get_one')->name('admin.event.get_one');
            Route::post('/update', 'Admin\EventController@update')->name('admin.event.update');
            Route::get('/delete/{id}', 'Admin\EventController@delete')->name('admin.event.delete');
        });

        Route::prefix('news')->group(function () {
            Route::get('/get', 'Admin\NewsController@get')->name('admin.news.get');
            Route::post('/store', 'Admin\NewsController@store')->name('admin.news.store');
            Route::get('/get-one/{id}', 'Admin\NewsController@get_one')->name('admin.news.get_one');
            Route::post('/update', 'Admin\NewsController@update')->name('admin.news.update');
            Route::get('/delete/{id}', 'Admin\NewsController@delete')->name('admin.news.delete');
        });
 
    });
});