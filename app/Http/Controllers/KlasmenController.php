<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Klasmen;
use Session;
use Image;
use Storage;


class KlasmenController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $klasmen = Klasmen::OrderBy('poin', 'DESC')->paginate(10);

        return view('klasmens.index')->withKlasmen($klasmen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('klasmens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, array(

          'liga' => 'required',
          'klub' => 'required',
          'main' => 'required',
          'menang' => 'required',
          'seri' => 'required',
          'kalah' => 'required',
          'goal_cetak' => 'required',
          'goal_masuk' => 'required',
          'poin' => 'required'

        ));

        $klasmen = new Klasmen;

        $klasmen->liga = $request->liga;
        $klasmen->klub = $request->klub;
        $klasmen->main = $request->main;
        $klasmen->menang = $request->menang;
        $klasmen->seri = $request->seri;
        $klasmen->kalah = $request->kalah;
        $klasmen->goal_cetak = $request->goal_cetak;
        $klasmen->goal_masuk = $request->goal_masuk;
        $klasmen->poin = $request->poin;

        if ($request->hasFile('featured_image')) {
          $image = $request->file('featured_image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(150, 150)->save($location);

          $klasmen->image = $filename;

        }
        $klasmen->save();

        Session::flash('success', 'daftar klasmen berhasil dibuat');
        return redirect()->route('klasmen.index', $klasmen->id);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
