<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\TryCatch;

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

    $products = Product::all();

    return view('home', ['products' => $products->toArray()]);
});

Route::get('/login', function () {



    return view('login');
});

Route::get('/signup', function () {



    return view('signup');
});


Route::get('/products/{id}', function ($id) {
    // get the product
    $product = Product::with(["user" => function ($query) {
        $query->select("id", "name", "email");
    }])->where("id", intVal($id))->get();

    // dd($product);
    // dd($product->toArray());



    return view('singleproduct', ['product' => $product[0]]);
})->name("singleproduct");


Route::post('/login', function (Request $request, Response $response) {

    try {
        Auth::attempt(["email" => $request->email, "password" => $request->password]);
        $user = Auth::user();
        dd($user);
        // return redirect('/');
    } catch (\Throwable $th) {
        return redirect('/login');
    }
});

Route::post('/signup', function () {



    return view('signup');
});
