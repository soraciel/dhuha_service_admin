

@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Berita</h4>
                                
                                
                             <button type="button" class="btn btn-info btn-fill pull-right" onclick="location.href='{{url('berita/create')}}'">Tambah Data</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                         @foreach($berita as $b)  
                                        <tr>
                                            <td>{{$b->id}}</td>
                                            <td><a onclick="location.href='{{ url('berita/show/'.$b->id.'') }}'">{{$b->foto_path}}</a></td>
                                            <td>{{$b->tanggal}}</td>
                                            <td><a onclick="location.href='{{ url('berita/show_isi/'.$b->id.'') }}'">{{$b->judul}}</a></td>
                                            
                                            <td><button class="btn btn-primary btn-fill btn-sm" onclick="location.href='{{ url('berita/edit/'.$b->id.'') }}'">Edit</button> 
                                                 <button class="btn btn-danger btn-fill btn-sm" onclick="location.href='{{ url('berita/destroy/'.$b->id.'') }}'" >delete</button></td>
                                                
                                        </tr>
 </div>

  </div>
</div>

                              
                                     
                                @endforeach
                                    </tbody>
                                </table>
<?php echo $berita->links(); ?>
                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>
@stop