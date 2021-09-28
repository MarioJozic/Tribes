@extends('layouts.app')
@section('content')




                   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    
                
                
                

               
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    
                                 <div class="col-sm-9 mr-7 pb-4">
                                                                        @foreach(Auth::user()->posts as $post)
                                        <div class="row">
                                            <div class="col-sm-3 mr-7 pb-4">
                                                <img src="/storage/{{$post->Image}}" width=100 height=100;>
                                            </div>

                                            <div class="col-sm-3 mr-10">
                                                
                                                {{$playlist->Title}}</a>  
                                            </div>

                                            <div class="col-sm-3">
                                            {{$playlist->Genre}}
                                            </div>

                                            
                                        </div>
                                        @endforeach
                                    </div>
                    
                                </div>
                            </div>
                        </ul>
                    </li>        


                </div>
            </div>
        </div>
    </div>
</div>
@endsection