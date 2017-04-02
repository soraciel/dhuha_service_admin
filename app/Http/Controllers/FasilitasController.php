<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitas;
use File;
class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fasilitas = fasilitas::paginate(20);
        $view =  view('admin/fasilitas')->with('fasilitas',$fasilitas);
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
        $view = view('admin/add_fasilitas');
        $view->form_add = url('fasilitas/store');
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
        $tambah = new fasilitas;
        $tambah->nama = $request['judul'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/fasilitas", $fileName);
        //$file_path='image/fasilitas/'.$fileName;

        $tambah->foto_path = $fileName;
        $tambah->save();

        return redirect()->to('/fasilitas');
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
        $fasilitas  = fasilitas::find($id);
        $fasilitas_gambar=$fasilitas->foto_path;
        $fasilitas_gambar2='image/fasilitas/'.$fasilitas_gambar;
        $view =  view('admin/view')->with('view',$fasilitas_gambar2);
       // echo "<img src={{ asset(".$fasilitas_gambar.") }}>";
        
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
        $fasilitas  = fasilitas::find($id);
        $view = View('admin/edit_fasilitas')->with('fasilitas', $fasilitas);
        $view->form_update = url('fasilitas/update/'.$id);
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

        $fasilitas = fasilitas::find($id);

        if($request->hasFile('gambar')){
            //var_dump($_FILES);
        $old_gambar = $fasilitas->foto_path;
        $old_path = 'image/fasilitas/'.$old_gambar;
        File::delete($old_path);

        $gambar = $request->file('gambar');
        $filename = $gambar->getClientOriginalName();
        $path = 'image/fasilitas/'.$filename;
        $request->file('gambar')->move("image/fasilitas", $filename);
        $fasilitas->foto_path = $filename;
        }

            //ubah db
        $fasilitas->nama = $request['judul'] ;
        $fasilitas->save();

        return redirect()->to('/fasilitas');
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
        $fasilitas = fasilitas::find($id);
        $filename = $fasilitas->foto_path ;
        fasilitas::where('id', $id)->delete();
        $path = 'image/fasilitas/'.$filename;
        File::delete($path);

        return redirect()->to('/fasilitas');
    }
}
