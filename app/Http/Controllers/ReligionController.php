<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Religion;
use Input, Session, Redirect;

class ReligionController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $religions = Religion::all();
        return view('dashboard.admin.religion.index', ['religion' => $religions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.religion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $religions = new Religion;
        $religions->name = Input::get('name');
        $religions->active = Input::get('active');
        $religions->save();
        Session::flash('message', 'You have successfully added religion');
        return Redirect::to('dashboard/admin/religions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $religions = Religion::find($id);
        return view('dashboard.admin.religion.edit', [
          'religion' => $religions
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $religions = Religion::find($id);
      $religions->name = Input::get('name');
      $religions->active = Input::get('active');
      $religions->save();
      Session::flash('message', 'You have successfully updated religion');
      return Redirect::to('dashboard/admin/religions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $religions = Religion::find($id);
      $religions->delete();
      Session::flash('message', 'You have successfully deleted customer');
      return Redirect::to('dashboard/admin/religions');
    }
}
