<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\User;
use App\Models\UserPost;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $users = User::with('nidcard')->get();

        return view('home', [
            'page_name' => 'Home Page',
            'name' => 'Larael 9 Course',
            'users' => $users
        ]);
    }

    public function about()
    {
        return view('about', [
            'page_name' => 'About Page',
        ]);
    }

    public function contact()
    {
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
    }

    public function service()
    {
        $services = [
            'Web Design',
            'Web Development',
            'App Development',
            'Graphics Design',
        ];


        return view('service', compact('services'));
    }



    public function userIndex()
    {
        $users = User::all();

        return view('home', [
            'users' => $users
        ]);
    }


    public function books()
    {
        // $books = Book::with(['author', 'publisher', 'booktype'])->get();
       $publishers = Publisher::withCount('books')->get();
       return $publishers;
    }

    public function positions()
    {
        // $books = Book::with(['author', 'publisher', 'booktype'])->get();

        // long way
        // $positions = UserPost::with('user.country')->get();
        // short way
       $positions = UserPost::with('country')->get();
       return $positions;
    }

}
