<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tintuc;
use DateTime;

class tintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tintuc::all();
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
        $db =new tintuc();
        $db->TenTinTuc = $request->TenTinTuc;
        $db->NoiDung = $request->NoiDung;
        $db->Img = $request->Img;
        $db->LoaiTinTuc = $request->LoaiTinTuc;
        $db->NgayThem = $request->NgayThem;
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tintuc::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $db = tintuc::findOrFail($id);
        $db->TenTinTuc = $request->TenTinTuc;
        $db->NoiDung = $request->NoiDung;
        $db->Img = $request->Img;
        $db->LoaiTinTuc = $request->LoaiTinTuc;
        $db->NgayThem = $request->NgayThem;
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tintuc::findOrFail($id)->delete();
        return "Deleted";
    }
}
