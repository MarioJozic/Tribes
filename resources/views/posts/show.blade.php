@extends('layouts.app')
@section('content')




                   

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header float-left col-12">{{ $post->Title }} {{$post->user->Username}}
                    <a href="/{{$post->id}}/createPlaylist"><button type="button" class="btn btn-success rounded-circle float-right">+</button> </a>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection