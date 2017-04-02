<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tim;
use File;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tim = tim::paginate(20);
        $view =  view('admin/tim')->with('tim',$tim);
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
        $view = view('admin/add_tim');
        $view->form_add = url('tim/store');
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
        $tambah = new tim;
        $tambah->nama = $request['judul'];
        $tambah->jabatan = $request['jabatan'];
        

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/tim", $fileName);
        //$file_path='image/tim/'.$fileName;

        $tambah->foto_path = $fileName;
        $tambah->save();

        return redirect()->to('/tim');
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
        $tim  = tim::find($id);
        $tim_gambar=$tim->foto_path;
        $tim_gambar2='image/tim/'.$tim_gambar;
        $view =  view('admin/view')->with('view',$tim_gambar2);
       // echo "<img src={{ asset(".$tim_gambar.") }}>";
        
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
        $tim  = tim::find($id);
        $view = View('admin/edit_tim')->with('tim', $tim);
        $view->form_update = url('tim/update/'.$id);
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
        $tim = tim::find($id);

        if($request->hasFile('gambar')){
            //var_dump($_FILES);
        $old_gambar = $tim->foto_path;
        $old_path = 'image/tim/'.$old_gambar;
        File::delete($old_path);

        $gambar = $request->file('gambar');
        $filename = $gambar->getClientOriginalName();
        $path = 'image/tim/'.$filename;
        $request->file('gambar')->move("image/tim", $filename);
        $tim->foto_path = $filename;
        }

            //ubah db
        $tim->nama = $request['judul'] ;
        $tim->jabatan = $request['jabatan'] ;
        $tim->save();

        return redirect()->to('/tim');
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
        $tim = tim::find($id);
        $filename = $tim->foto_path ;
        tim::where('id', $id)->delete();
        $path = 'image/tim/'.$filename;
        File::delete($path);

        return redirect()->to('/tim');
    }
}
