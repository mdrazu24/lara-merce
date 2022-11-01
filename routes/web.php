<?php

use App\Models\Product;
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
    return view('home');
});



Route::get('/products/{id}', function ($id) {
    // get the product
    $product = Product::with(["user" => function ($query) {$query->select("id", "name", "email");}])->where("id", intVal($id))->get();

    // dd($product);
    // dd($product->toArray());



    return view('singleproduct', ['product' => $product[0]]);
})->name("singleproduct");
