@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Berita</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="#">
                                    <!--upload file-->
                                    
                                    <label>Upload Foto</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    
                                    <br>
                                    
                                    
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control"  name="tanggal">

                                    <br>
                                    
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Tulis Judul" name="judul">

                                    <br>
                                    <label>Isi Berita</label>
                                    <textarea class="form-control" placeholder="Tulis isi berita" name="isi"></textarea>
                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Tambah Berita</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop