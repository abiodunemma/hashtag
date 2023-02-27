<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;
class BookController extends Controller
{
    
    
 

    public function index(){


        return view('Book.create');
    }

     
    public function show($id){

        $book = Book::find($id);


   $books = Book::latest()->get();
   return view('Book.Show', [
   'books' => $books,
 

]);
    }

        
    public function play(){
        
   $books = Book::latest()->get();

        return view('Book.play');

    }
    
    public function profile(){

        return view('Book.profile');

    }

    
    public function store(){

$book = new Book();

$book->name = request('name');
$book->category = request('category');
$book->about = request('about');

$book->save();

        return redirect('Book/show')->with('mssg', 'Thanks for the upload');
    }


}
