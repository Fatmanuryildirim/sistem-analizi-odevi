<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books=Book::orderBy('created_at','ASC')->get();
        return view('back.books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $book=new book;
      $book->name=$request->name;
      $book->image=$request->image;
      $book->category_id=$request->category_id;
      $book->content=$request->content;
      $book->slug=$request->slug;
      $book->book_code=$request->book_code;
      $book->price=$request->price;

      $book->save();
      return redirect()->route('admin.kitaplar.index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=Book::orderBy('created_at','ASC')->get();
        $books=Book::findOrFail($id);
        return view('back.books.update',compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $book=Book::findOrFail($id);
      $book->name=$request->name;
      $book->image=$request->image;
      $book->category_id=$request->category_id;
      $book->content=$request->content;
      $book->slug=$request->slug;
      $book->book_code=$request->book_code;
      $book->price=$request->price;

      $book->save();
      return redirect()->route('admin.sayfalar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete($id)
     {
         Book::find($id)->delete();
         return redirect()->route('admin.kitaplar.index');
     }

    public function destroy($id)
    {

    }
}
