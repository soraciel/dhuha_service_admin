

@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Fasilitas</h4>
                                
                                
                             <button type="button" class="btn btn-info btn-fill pull-right" onclick="location.href='{{url('fasilitas/create')}}'">Tambah Data</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama Fasilitas</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                            @foreach($fasilitas as $f)              
                                        <tr>
                                            <td>{{$f->id}}</td>
                                            <td><a onclick="location.href='{{ url('fasilitas/show/'.$f->id.'') }}'">{{$f->foto_path}}</a></td>
                                            <td>{{$f->nama}}</td>
                                            <td><button class="btn btn-primary btn-fill btn-sm" onclick="location.href='{{ url('fasilitas/edit/'.$f->id.'') }}'">Edit</button> 
                                                 <button class="btn btn-danger btn-fill btn-sm" onclick="location.href='{{ url('fasilitas/destroy/'.$f->id.'') }}'" >delete</button></td>
                                                
                                        </tr>
 </div>

  </div>
</div>

                              
                                     @endforeach

                                    </tbody>
                                </table>
<?php echo $fasilitas->links(); ?>
                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>
@stop