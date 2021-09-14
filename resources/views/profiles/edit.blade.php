@extends('layouts.app')

@section('content')
<form action="/profile/{{$user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="form-group row">
                <h1> Edit profile</h1>     
            </div>
        </div>
    </div>
        <div class ="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="Username" class="col-md-4 col-form-label "><h3>{{ __('Username') }}</h3></label>
                        <input id="Username" 
                        type="text" class="form-control @error('Username') is-invalid @enderror" 
                        name="Username" value="{{ old('Username')??$user->Username }}"  
                        autocomplete="Username" autofocus>

                        @error('Username')
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
                    <label for="email" class="col-md-4 col-form-label "><h3>{{ __('E-mail address ') }}</h3></label>
                        <input id="email" 
                        type="text" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') ?? $user->email}}"  
                        autocomplete="email" autofocus>

                        @error('email')
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
                    <button class="btn btn-primary">Apply changes</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
