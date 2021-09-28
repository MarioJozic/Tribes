@section('content')
@extends('layouts.app')

<div class="container">
    <form action="/playlist/songs" enctype="multipart/form-data" method="post">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <h1> Add new song!</h1>     
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
                    <label for="url" class="col-md-4 col-form-label "><h3>{{ __('url') }}</h3></label>
                        <input id="url" 
                        type="text" class="form-control @error('url') is-invalid @enderror" 
                        name="url" value="{{ old('url') }}"  
                        autocomplete="url" autofocus>

                        @error('URL')
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
                    <label for="Artist" class="col-md-4 col-form-label "><h3>{{ __('Artist') }}</h3></label>
                        <input id="Artist" 
                        type="text" class="form-control @error('Artist') is-invalid @enderror" 
                        name="Artist" value="{{ old('Artist') }}"  
                        autocomplete="Artist" autofocus>

                        @error('Artist')
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
                    <label for="Duration" class="col-md-4 col-form-label "><h3>{{ __('Duration') }}</h3></label>
                        <input id="Duration" 
                        type="text" class="form-control @error('Duration') is-invalid @enderror" 
                        name="Duration" value="{{ old('Duration') }}"  
                        autocomplete="Duration" autofocus>

                        @error('Duration')
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
                    <button class="btn btn-primary">Add new song</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

