


@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Testimoni</h4>
                                
                                
                             <button type="button" class="btn btn-info btn-fill pull-right" onclick="location.href='{{url('testimoni/create')}}'">Tambah Data</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Testimoni</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                         @foreach($testimoni as $t)                    
                                        <tr>
                                            <td>{{$t->id}}</td>
                                            <td><a onclick="location.href='{{ url('testimoni/show/'.$t->id.'') }}'">{{$t->foto_path}}</a></td>
                                            <td>{{$t->nama}}</td>
                                            <td>{{$t->jabatan}}</td>
                                            <td>{{$t->isi_testimoni}}</td>
                                            <td><button class="btn btn-primary btn-fill btn-sm" onclick="location.href='{{ url('testimoni/edit/'.$t->id.'') }}'">Edit</button> 
                                                 <button class="btn btn-danger btn-fill btn-sm" onclick="location.href='{{ url('testimoni/destroy/'.$t->id.'') }}'" >Delete</button></td>
                                                
                                        </tr>
 </div>

  </div>
</div>

                              
                             @endforeach        

                                    </tbody>
                                </table>
<?php echo $testimoni->links(); ?>
                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>
@stop