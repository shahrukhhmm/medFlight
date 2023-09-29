<?php

use App\Http\Controllers\Admin\MedFlightController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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

Route::redirect('/', 'admin/login');


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});



Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {

        // med flight index

        Route::get('/med-flight',     [MedFlightController::class,'index'])->name('medFlightindex');

        // yajra datatable
        
        Route::get('/med-flight-list',     [MedFlightController::class,'medList'])->name('medList');

        // from  

        Route::get('/med-form',     [MedFlightController::class,'form'])->name('form');

        // form submit

        Route::post('/med-flight-form-submit',     [MedFlightController::class,'medFormSubmit'])->name('medFormSubmit');

        // delete medflight

        Route::get('/medFlight-delete/{id}',     [MedFlightController::class,'medDelete'])->name('deletemdF');

        // detail medflight

        Route::get('/detail-page/{id}',     [MedFlightController::class,'detail'])->name('detailmdF');

        // update page

        Route::get('/update-page/{id}',     [MedFlightController::class,'update'])->name('updatedF');

        
        // form submit

        Route::post('/update-form',     [MedFlightController::class,'updateform'])->name('updateform');

    });
});