<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{

    public function index(){
        
        $book = Book::all();
        return response()->json($book);

    }

    public function show(Book $book){

        $book->get();
        return response()->json($book);
    }

    public function store(StoreBookRequest $request){

        $book = Book::create($request->validated());

        return response()->json($book, 201);

    }

        public function destroy( Book $book){

        $book->delete();

        return response()->json(null, 204);

        }


    public function update(UpdateBookRequest $request, Book $book){

        $book->update($request->validated());

        return response()->json($book);

    }



}
