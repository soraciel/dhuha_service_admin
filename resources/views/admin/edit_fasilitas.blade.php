@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Fasilitas</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ $form_update }}">
                                    <!--upload file-->
                                    
                                    <label>Upload Gambar Fasilitas</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    

                                    <br>
                                    
                                    
                                    <label>Nama Fasilitas</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama fasilitas" name="judul" value="{{ $fasilitas->nama }}">

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