<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $layanan = layanan::paginate(20);
        $view =  view('admin/layanan')->with('layanan',$layanan);
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $view = view('admin/add_layanan');
        $view->form_add = url('layanan/store');
        return $view;
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

       $tambah = new layanan;
        $tambah->nama = $request['judul'];
        $tambah->detail_layanan = $request['detail_layanan'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/layanan", $fileName);
        $file_path='image/layanan/'.$fileName;

        $tambah->foto_path = $file_path;
        $tambah->save();

        return redirect()->to('/');
        echo "ini store";
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
        $layanan  = layanan::find($id);
        $layanan_gambar=$layanan->foto_path;
        //$layanan_gambar2='"'.$layanan_gambar.'"';
        $view =  view('admin/view')->with('view',$layanan_gambar);
       // echo "<img src={{ asset(".$layanan_gambar.") }}>";
        
        return $view;
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
