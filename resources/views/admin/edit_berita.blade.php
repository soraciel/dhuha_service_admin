@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Berita</h4>
                            </div>
                            <div class="content">
                           
                             <form  method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="{{ $form_update }}">
                                    <!--upload file-->
                                    
                                    <label>Upload Foto</label>
                                    <input type="file" class="btn btn-outline" name="gambar">
                                    
                                    <br>
                                    
                                    
                                    <label>Tanggal</label>
                                    <input type="date" class="form-control"  name="tanggal" value="{{ $berita->tanggal }}">

                                    <br>
                                    
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Tulis Judul" name="judul" value="{{ $berita->judul }}">

                                    <br>
                                    <label>Isi Berita</label>
                                    <textarea  class="form-control" id="summernote" name="isi_berita" >{{ $berita->isi }}</textarea>
                                    <br>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Simpan Berita</button>
                                    <div class="clearfix"></div>

                                </form> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
     height: 200, 
  }

    );
});
</script>
@stop