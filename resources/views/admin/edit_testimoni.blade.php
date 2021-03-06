@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Anggota Mekanik</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ $form_update }}">
                                    <!--upload file-->
                                    
                                    <label>Upload Foto</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    
                                    <br>
                                    
                                    
                                    <label>Nama Anggota</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama anggota" name="judul" value="{{ $testimoni->nama }}">

                                    <br>
                                    
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama jabatan" name="jabatan" value="{{ $testimoni->jabatan }}">

                                    <br>
                                    <label>Isi Testimoni</label>
                                    <textarea class="form-control" placeholder="Tulis penjelasan layanan" name="testimoni">{{ $testimoni->isi_testimoni }}</textarea>
                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop