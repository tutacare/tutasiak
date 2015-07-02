<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use Input, Session, Redirect;

class AnnouncementController extends Controller
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
      $announcements = Announcement::all();
      return view('dashboard.admin.announcement.index', ['announcement' => $announcements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $announcements = new Announcement;
      $announcements->title = Input::get('title');
      $announcements->content = Input::get('content');
      $announcements->active = Input::get('active');
      $announcements->save();
      Session::flash('message', 'You have successfully added announcement');
      return Redirect::to('dashboard/admin/announcements');
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
      $announcements = Announcement::find($id);
      return view('dashboard.admin.announcement.edit', [
        'announcement' => $announcements
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
      $announcements = Announcement::find($id);
      $announcements->title = Input::get('title');
      $announcements->content = Input::get('content');
      $announcements->active = Input::get('active');
      $announcements->save();
      Session::flash('message', 'You have successfully updated announcement');
      return Redirect::to('dashboard/admin/announcements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $announcements = Announcement::find($id);
      $announcements->delete();
      Session::flash('message', 'You have successfully deleted announcement');
      return Redirect::to('dashboard/admin/announcements');
    }
}
