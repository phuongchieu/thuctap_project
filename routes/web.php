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

Route::get('/', function () {
        if(session()->exists('admin') && session()->has('admin') == "Admin"){
            return view('index');
        }else 
            return view('home');          
});

Route::resource('/donvi','DonviController');

Route::resource('/nguoidung','NguoidungController');

Route::resource('/chucvu','chucvuController');

Route::resource('/doimatkhau','DoimatkhauController');

Route::resource('/phanloaithongke','phanloaithongkeController');

Route::resource('/hinhthuckhenthuong','HinhthuckhenthuongController');

Route::resource('/taotaikhoan','taotaikhoanController');

Route::resource('/phanquyen','phanquyenController');

Route::resource('/danhsachdangvien','danhsachdangvienController');

Route::resource('/hosolylich','hosolylichController');

//login
Route::get('/home', 'Homecontroller@home');

Route::post('/login', 'UserController@postlogin');

Route::get('/logout', 'UserController@logout');

