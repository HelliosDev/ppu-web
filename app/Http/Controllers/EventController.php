<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataKegiatan = DB::table('inptkegiatan')->get();
        /*date now */
        $dateNow = Carbon::now()->toDateTimeString();
            /*date Now */
            $cvDateNow      = date("d",strtotime($dateNow));
            $cvDateMonthNow = date("m",strtotime($dateNow));
            /*count */
        return view('pages.eventPg',[
            'dataKegiatan' => $dataKegiatan,
            'dateNow' => $dateNow,
            'cvDateNow' => $cvDateNow,
            'cvDateMonthNow' =>$cvDateMonthNow
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = DB::table('inptkegiatan')
        ->select('IDNARASUMBER','JKKEGIATAN','NAMANARASUMBER','JUDULACARA','GAMBAR','KETKEGIATAN','LOKASI','TGLMULAI','TGLSELESAI')
        ->where('JUDULACARA', 'LIKE', '%'.$id.'%')
        ->get();

        return $data;
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
