@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Video Profile</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{url('video/update/1')}}">
                                    <!--upload file-->
                                     <?php 
                                    
                                    $path = 'image/video/'. $video->foto_path;
                                    ?>
                                    <!-- resize display image-->

                                    
                                    <img src="{{ asset($path) }}" alt="">
                                    
                                  
                                    <label>Upload Gambar Video Baru</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    

                                    <br>
                                    
                                    
                                    <label>Link Video</label>
                                    <input type="text" class="form-control" placeholder="Tulis nama fasilitas" name="judul" value="{{ $video->link }}">

                                    <br>
                                    
                                    

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop