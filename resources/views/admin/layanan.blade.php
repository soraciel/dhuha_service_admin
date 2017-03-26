

@extends('layout.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Layanan Kami</h4>
                                
                                
                             <button type="button" class="btn btn-info btn-fill pull-right" onclick="location.href=#">Tambah Data</button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Layanan</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                         
                                        <tr>
                                            <td>1</td>
                                            <td><a onclick="location.href=#">Link Gambar</a></td>
                                            <td>Isi Nama</td>
                                            <td>Isi Layanan</td>
                                            <td><button class="btn btn-primary btn-fill btn-sm" onclick="location.href='#'">Lihat</button> 
                                                 <button class="btn btn-danger btn-fill btn-sm" onclick="location.href='#'" >delete</button></td>
                                                
                                        </tr>
 </div>

  </div>
</div>

                              
                                     

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                   


                </div>
            </div>
        </div>
@stop