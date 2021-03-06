@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Layanan</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ $form_update }}">
                                    <!--upload file-->
                                    
                                    <label>Upload Gambar Layanan</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    

                                    <br>
                                    
                                    
                                    <label>Nama Layanan</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama layanan" name="judul" value="{{ $layanan->nama }}">

                                    <br>
                                    
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="detail">{{ $layanan->detail_layanan }}</textarea>

                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Layanan</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop