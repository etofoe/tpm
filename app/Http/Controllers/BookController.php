<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //
    public function create()
    {
        return view('bookcreate');
    }
    public function store(Request $request)
    {
        $book=new Book();
        $book->author = $request->get('author');
        $book->title = $request->get('title');
        $book->save();
        return redirect('book')->with('success', 'Book has been successfully added');
    }
    public function index()
    {
        $books=Book::all();
        return view('bookindex',compact('books'));
    }
    public function edit($id)
    {
        $book = Book::find($id);
        return view('bookedit',compact('book','id'));
    }
    public function update(Request $request, $id)
    {
        $book= Book::find($id);
        $book->author = $request->get('author');
        $book->title = $request->get('title');
        $book->save();
        return redirect('book')->with('success', 'Book has been successfully update');
    }
    public function destroy($id)
    {
        $animal = Book::find($id);
        $animal->delete();
        return redirect('book')->with('success','Book has been  deleted');
    }

}
