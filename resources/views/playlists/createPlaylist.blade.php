@section('content')
@extends('layouts.app')

<div class="container">
    <form action="/{{$post_id}}/addplaylist" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <h1> Add new playlist!</h1>     
            </div>
        </div>
    </div>
        <div class ="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="Title" class="col-md-4 col-form-label "><h3>{{ __('Title') }}</h3></label>
                        <input id="Title" 
                        type="text" class="form-control @error('Title') is-invalid @enderror" 
                        name="Title" value="{{ old('Title') }}"  
                        autocomplete="Title" autofocus>

                        @error('Title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>                     
            </div>
        </div>

        <div class ="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="Description" class="col-md-4 col-form-label "><h3>{{ __('Description') }}</h3></label>
                        <input id="Description" 
                        type="text" class="form-control @error('Description') is-invalid @enderror" 
                        name="Description" value="{{ old('Description') }}"  
                        autocomplete="Description" autofocus>

                        @error('Description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>                     
            </div>
        </div>


        
        <div class="row pt-4">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <button class="btn btn-primary">Add new post</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

