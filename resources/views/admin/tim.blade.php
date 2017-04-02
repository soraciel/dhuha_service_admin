


@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tim Mekanik</h4>
                                
                                
                             <button type="button" class="btn btn-info btn-fill pull-right" onclick="location.href='{{url('tim/create')}}'">Tambah Data</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                     @foreach($tim as $t)                   
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td><a onclick="location.href='{{ url('tim/show/'.$t->id.'') }}'">{{$t->foto_path}}</a></td>
                                            <td>{{$t->nama}}</td>
                                            <td>{{$t->jabatan}}</td>
                                            <td><button class="btn btn-primary btn-fill btn-sm" onclick="location.href='{{ url('tim/edit/'.$t->id.'') }}'">Edit</button> 
                                                 <button class="btn btn-danger btn-fill btn-sm" onclick="location.href='{{ url('tim/destroy/'.$t->id.'') }}'" >delete</button></td>
                                                
                                        </tr>
 </div>

  </div>
</div>

                              
                                     @endforeach

                                    </tbody>
                                </table>
<?php echo $tim->links(); ?>
                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>
@stop