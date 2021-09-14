@extends('layouts.app')
@section('content')

<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <h1> Add new tribe!</h1>     
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
                    <label for="Genre" class="col-md-4 col-form-label "><h3>{{ __('Genre') }}</h3></label>
                        <input id="Genre" 
                        type="text" class="form-control @error('Genre') is-invalid @enderror" 
                        name="Genre" value="{{ old('Genre') }}"  
                        autocomplete="Genre" autofocus>

                        @error('Genre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>                     
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="Image" class="col-md-4 col-form-label "><h3>{{ __('Image') }}</h3></label>

                    <input type="file", class="form-control-file" id="Image" name="Image">

                    @error('Image')
                        
                            <strong>{{ $message }}</strong>
                        
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
