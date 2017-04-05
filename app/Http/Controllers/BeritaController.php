<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = berita::paginate(20);
        $view =  view('admin/berita')->with('berita',$berita);
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
        $view = view('admin/add_berita');
        $view->form_add = url('berita/store');
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
        $tambah = new berita;
        $tambah->judul = $request['judul'];
        $tambah->tanggal = $request['tanggal'];
        $tambah->isi = $request['isi_berita'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/berita", $fileName);
        

        $tambah->foto_path = $fileName;
        $tambah->save();

        return redirect()->to('/berita');
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
        $berita  = berita::find($id);
        $berita_gambar=$berita->foto_path;
        $berita_gambar2='image/berita/'.$berita_gambar;
        $view =  view('admin/view')->with('view',$berita_gambar2);
       
        
        return $view;
    }

    public function show_isi($id)
    {
        //
        $berita  = berita::find($id);
        
        
        $view =  view('admin/view_isi')->with('berita',$berita);
       
        
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
        $berita  = berita::find($id);
        $view = View('admin/edit_berita')->with('berita', $berita);
        $view->form_update = url('berita/update/'.$id);
        return $view;
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
         $berita = berita::find($id);

        if($request->hasFile('gambar')){
            //var_dump($_FILES);
        $old_gambar = $berita->foto_path;
        $old_path = 'image/berita/'.$old_gambar;
        File::delete($old_path);

        $gambar = $request->file('gambar');
        $filename = $gambar->getClientOriginalName();
        $path = 'image/berita/'.$filename;
        $request->file('gambar')->move("image/berita", $filename);
        $berita->foto_path = $filename;
        }

            //ubah db
        $berita->judul = $request['judul'] ;
        $berita->tanggal = $request['tanggal'] ;
        $berita->isi = $request['isi_berita'] ;
        $berita->save();

        return redirect()->to('/berita');
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
        $berita = berita::find($id);
        $filename = $berita->foto_path ;
        berita::where('id', $id)->delete();
        $path = 'image/berita/'.$filename;
        File::delete($path);

        return redirect()->to('/berita');
    }
}
