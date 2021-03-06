<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class UMKMDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
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
        //show profileUMKM
        $profileUMKM = $this->dataUMKM($id);
        $activity    = $this->tUMKM($id);
        $jkMasalah   = $this->jkMasalah($activity);

        return view('dashboard/profileUMKM',[
            'profileUMKM' => $profileUMKM,
            'activity'  => $activity
        ]);
    }
    // Method
    private function dataUMKM($idUMKM){
        return DB::table('users')
        ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.*', 'profileusers.*')
        ->where('PROFILE_ID','=', $idUMKM)
        ->get();
    }

    private function tUMKM($idUMKM){
        return DB::table('profileusers')
        ->join('pmt_umkm','profileusers.PROFILE_ID', '=', 'pmt_umkm.IDUMKM')
        ->select('profileusers.*','pmt_umkm.*')
        ->where('IDUMKM', '=', $idUMKM)
        ->orderBy('pmt_umkm.created_at','desc')
        ->get();
    }

    private function jkMasalah($idMasalah){
        foreach ($idMasalah as $key => $value) {
            $saveMasalah = DB::table('pmt_jp')
            ->where('IDMASALAHJP', '=', $value->IDMASALAH)
            ->get();
            
            $value->masalah = $saveMasalah;
            $idMasalah[$key] = $value;

        }

        return $idMasalah;
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
