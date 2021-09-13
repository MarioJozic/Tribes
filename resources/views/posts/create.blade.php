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

<!--
<div class="container">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add a new Tribe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                                <label for="Name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                    <div class="col-md-6">
                                                    <input id="Name" type="Name" Title="Name">
                                                </div>
                                             
                                             <label for="Genre" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>
                                                    <div class="col-md-6">
                                                    <input id="Genre" type="Genre" Genre="Genre">
                                                </div>
                                             
                                             <label for="Logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                                                    <div class="col-md-6">
                                                    <input id="Logo" type="Logo" Logo="Logo">
                                                </div>
                                             </div>
                                                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Add</button>
                        </div>
                        </div>
                    </div>
</div>

-->