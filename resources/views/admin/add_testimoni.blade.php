@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Anggota Mekanik</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ $form_add }}">
                                    <!--upload file-->
                                    
                                    <label>Upload Foto</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    
                                    <br>
                                    
                                    
                                    <label>Nama Anggota</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama anggota" name="judul">

                                    <br>
                                    
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama jabatan" name="jabatan">

                                    <br>
                                    <label>Isi Testimoni</label>
                                    <textarea class="form-control" placeholder="Tulis testimoni" name="testimoni"></textarea>
                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Testimoni</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop