<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimoni;
use File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimoni = testimoni::paginate(20);
        $view =  view('admin/testimoni')->with('testimoni',$testimoni);
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
         $view = view('admin/add_testimoni');
        $view->form_add = url('testimoni/store');
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
        $tambah = new testimoni;
        $tambah->nama = $request['judul'];
        $tambah->jabatan = $request['jabatan'];
        $tambah->isi_testimoni = $request['testimoni'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/testimoni", $fileName);
        

        $tambah->foto_path = $fileName;
        $tambah->save();

        return redirect()->to('/testimoni');
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
        $testimoni  = testimoni::find($id);
        $testimoni_gambar=$testimoni->foto_path;
        $testimoni_gambar2='image/testimoni/'.$testimoni_gambar;
        $view =  view('admin/view')->with('view',$testimoni_gambar2);
       
        
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
        $testimoni  = testimoni::find($id);
        $view = View('admin/edit_testimoni')->with('testimoni', $testimoni);
        $view->form_update = url('testimoni/update/'.$id);
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
         $testimoni = testimoni::find($id);

        if($request->hasFile('gambar')){
            //var_dump($_FILES);
        $old_gambar = $testimoni->foto_path;
        $old_path = 'image/testimoni/'.$old_gambar;
        File::delete($old_path);

        $gambar = $request->file('gambar');
        $filename = $gambar->getClientOriginalName();
        $path = 'image/testimoni/'.$filename;
        $request->file('gambar')->move("image/testimoni", $filename);
        $testimoni->foto_path = $filename;
        }

            //ubah db
        $testimoni->nama = $request['judul'] ;
        $testimoni->jabatan = $request['jabatan'] ;
        $testimoni->isi_testimoni = $request['testimoni'] ;
        $testimoni->save();

        return redirect()->to('/testimoni');
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
        $testimoni = testimoni::find($id);
        $filename = $testimoni->foto_path ;
        testimoni::where('id', $id)->delete();
        $path = 'image/testimoni/'.$filename;
        File::delete($path);

        return redirect()->to('/testimoni');
    }
}
