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

Route::get('/','gosterme@slidergöster', function () {
    return view('welcome');
});

Route::get('/xiaomi', function(){

return view('pages.xiaomi');

});

Route::get('/kutuicerigi', function(){

return view('pages.kutuiceriği');

});

Route::get('/specs', function(){

return view('pages.specs');

});



Route::group(['middleware'=>'visitor'],function(){


Route::get('/kaydol','register@kaydol');
Route::post('/kaydol','register@store');

Route::get('/girisyap','logincontroller@girisyap');
Route::post('/girisyap','logincontroller@girisyapma');

});

Route::get('/cikisyap','logincontroller@cikisyapma');



Route::get('/contact', [
    'uses' => 'iletisim@createForm'
]);
Route::post('/contact', [
    'uses' => 'iletisim@ContactUsForm',
    'as' => 'contact.store'
]);
Route::resource('contacts','contactcontroller');


Route::get('/cikisyap','logincontroller@cikisyapma');

Route::get('/icerik','icerikcontroller@index');
Route::get('/edit/{id}','icerikcontroller@edit');
Route::get('/show/{id}','icerikcontroller@show');
Route::get('/create','icerikcontroller@create');
Route::post('/store','icerikcontroller@store');
Route::post('/update/{id}','icerikcontroller@update');

Route::get('/slider','sliderimage@index');
Route::post('/sliderekle','sliderimage@store')->name('sliderekle');
Route::get('/sliderresimler','sliderimage@display');
Route::get('/editimage/{id}','sliderimage@edit');
Route::put('/updateimage/{id}','sliderimage@update');
Route::get('/deleteimage/{id}','sliderimage@delete');

Route::get('/image-cropper','imagecropcontroller@index');
Route::post('/image-cropper/uploads','imagecropcontroller@upload');