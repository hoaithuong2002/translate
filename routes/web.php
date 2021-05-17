<?php

use Illuminate\Http\Request;
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


Route::get('/',function (){
    return view('translate');
});
Route::post('/', function (Request $request){
    $english =[
        'english'=>'tieng anh',
        'framework'=>' khuon mau',
        'price'=>'gia',
        'alone'=>'mot minh',
    ];
    $word = $request->input('word');
    $result = (isset($english[$word])) ?("$word=>".$english[$word]) : 'Không dịch được từ này';
    return view('translate', compact('result'));
});
