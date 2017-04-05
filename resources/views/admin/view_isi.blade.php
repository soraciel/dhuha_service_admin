

@extends('layout.master')
@section('content')
       

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">{{ $berita->judul }}</h4>
                            </div>
                            <div class="content">
                                  
                            
                                    <!--<textarea class="form-control" placeholder="Tulis list detail slider disini"></textarea>-->

                                    <div> {!! $berita->isi !!} </div>

                                    <br>

                                    
                                 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop