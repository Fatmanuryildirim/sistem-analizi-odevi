<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $admins=Admin::orderBy('created_at','ASC')->get();
      return view('back.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $admin=new Admin;
      $admin->name=$request->name;
      $admin->email=$request->email;
      $admin->password=$request->password;
      $admin->save();
      return redirect()->route('admin.kullanicilar.index');
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
      $admins=Admin::orderBy('created_at','ASC')->get();
      $admins=Admin::findOrFail($id);
      return view('back.admins.update',compact('admins'));
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
      $admin=Admin::findOrFail($id);
      $admin->name=$request->name;
      $admin->email=$request->email;
      $admin->password=$request->password;


      $admin->save();
      return redirect()->route('admin.kullanicilar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete($id)
     {
       Admin::find($id)->delete();
       return redirect()->route('admin.kullanicilar.index');
     }

    public function destroy($id)
    {
        //
    }
}
