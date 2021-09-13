@extends('layouts.app')
@section('content')


                   

                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header float-left col-12">{{ __("My tribes") }}
                    <button type="button" class="btn btn-success rounded-circle float-right">
                            <a href="/posts/create"> + </a>
                    </button>
                </div>
                    
                
                
                

               
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    <div class="col-sm-3 mr-7 pb-4">
                                    @foreach(Auth::user()->posts as $post)
                                        <img src="/storage/{{$post->Image}}" width=100 height=100;>

                                     @endforeach
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                    @foreach(Auth::user()->posts as $post)
                                        {{$post->Title}}

                                     @endforeach
                                    </div>
                    

                                    <div class="col-sm-3">
                                    @foreach(Auth::user()->posts as $post)
                                        {{$post->Genre}}
                                     @endforeach

                                     
                                    </div>
                                    <div class="col-sm-3">

                                    @foreach(Auth::user()->posts as $post)
                                       {{ $post->user->Username}}

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
