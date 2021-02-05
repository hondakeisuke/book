<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
  {
      $books = Book::all();
      return view('book/index', compact('books'));
  }

  public function edit($id)
  {
      $book = Book::find($id);
      return view('book/edit', compact('book'));
  }
  public function show($id)
  {
      $book = Book::find($id);
      return redirect('book/{$id}', compact('book'));
  }
  public function create()
  {
      $book = new Book;
      return view('book/create', compact('book'));
  }

  public function store(Request $request){
      $book = new Book;
      $book->title = $request->title;
      $book->description = $request->description;
      $book->author = $request->author;
      $book->user_id = $request->user()->id;
      $book->save();
      return redirect('/');
  }

  public function update(Request $request, $id)
  {
      $book = Book::find($id);
      $book->title = $request->title;
      $book->description = $request->description;
      $book->author = $request->author;
      $book->save();
      return redirect('/');
  }
  public function destroy($id)
  {
      $book = Book::find($id);
      $book->delete();
      return redirect('/');
  }
}
