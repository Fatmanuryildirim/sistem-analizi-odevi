<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::orderBy('created_at','ASC')->get();
      return view('back.pages.index',compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('back.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $page=new page;
      $page->title=$request->title;
      $page->image=$request->image;
      $page->content=$request->content;
      $page->slug=$request->slug;
      $page->order=$request->order;

      $page->save();
      return redirect()->route('admin.sayfalar.index');
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
      $pages=Page::orderBy('created_at','ASC')->get();
      $pages=Page::findOrFail($id);
      return view('back.pages.update',compact('pages'));
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
      $page=Page::findOrFail($id);
      $page->title=$request->title;
      $page->image=$request->image;
      $page->content=$request->content;
      $page->slug=$request->slug;
      $page->order=$request->order;

      $page->save();
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
       Page::find($id)->delete();

       return redirect()->route('admin.sayfalar.index');
     }

    public function destroy($id)
    {

    }
}
