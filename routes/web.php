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

Route::get('/', function (Request $request) {


    // dd(
    //     //"Laravel 9"
    //     $request->path(),  // path name
    //     $request->is('/'), // 1 0r 0

    //     $request->fullUrl(),
    //     $request->host(),
    //     $request->httpHost(),
    //     $request->schemeAndHttpHost(),

    //     $request->routeIs('home'),  // 1 or 0
    //     $request->header('X-Header-Name'),
    //     $request->header('X-Header-Name', 'default'),
    //     $request->bearerToken(),  // Used in API building

    //     $request->ip(),
    //     $request->prefers(['text/html', 'application/json']),
    // );

    // $data = [
    //     'page_name' => 'Home Page',
    //     'name' => 'Larael 9 Course'
    // ];

    // return response($data)
    // ->header('Content-Type', 'application/json')
    // ->cookie('My_IDCard', 'Mahmud Ibrahim', 3600);

    //dd($request->collect());

    return view('home', [
        'page_name' => 'Home Page',
        'name' => 'Larael 9 Course'
    ]);


})->name('home')->middleware('auth');

Route::get('login', function(){
    return "Login";
})->name('login');

Route::get('/about-us', function () {
    return view('about', [
        'page_name' => 'About Page',
    ]);
})->name('about');

Route::get('/contact-page', function () {
    $page_name = "Contact Page";
    $products=[
       1 => [
        'name' => 'Bag',
        'color' => 'Red',
        'price' => '1200',
       ],
       2 => [
        'name' => 'Sunglass',
        'color' => 'Black',
        'price' => '550',
       ],
       3 => [
        'name' => 'BodySpray',
        'color' => 'Blue',
        'price' => '850',
       ],
    ];
    $product_count = count($products);

    return response()->json([
        'products' => $products,
        'product_count' => $product_count,
    ], 200);
    // return view('contact', compact(
    //     'page_name',
    //     'product_count',
    //     'products'
    // ));
})->name('contact');

Route::get('/service-page', function () {

    $services = [
        'Web Design',
        'Web Development',
        'App Development',
        'Graphics Design',
    ];


    return view('service', compact('services'));
})->name('service');




