<?php
$results = DB::select('select * from users where id = ?', [1]);
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-header float-left col-12 ">{{ __('My tribes') }}
                
                <button type="button" class="btn btn-success rounded-circle float-right" data-toggle="modal" data-target="#exampleModalCenter">
                    +
                </button>
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
                                                    <input id="Name" type="Name" name="Name">
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
                

                

                </div>

                <div class="card-body">
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    <div class="col-sm-3 mr-7">
                                    {{ Auth::user()->tribe->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->tribe->genre }}
                                    </div>
                    

                                    <div class="col-sm-3">
                                        {{ Auth::user()->Username }}
                                    </div>
                    
                                </div>
                            </div>
                        </ul>
                    </li>
                
                    

               

                    <li class="list-group-item"> 
                    
                        <ul class="list-group list-group-flush">
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->genre }}
                                        </div>
                        

                                        <div class="col-sm-3">
                                            {{ Auth::user()->Username }}
                                        </div>
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
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header float-left col-12">{{ __("Tribes I'm a part of") }}
                
                
                

                <div class="card-body">
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->tribe->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->tribe->genre }}
                                    </div>
                    

                                    <div class="col-sm-3">
                                        {{ Auth::user()->Username }}
                                    </div>
                    
                                </div>
                            </div>
                        </ul>
                    </li>
                
                    

               

                    <li class="list-group-item"> 
                    
                        <ul class="list-group list-group-flush">
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->genre }}
                                        </div>
                        

                                        <div class="col-sm-3">
                                            {{ Auth::user()->Username }}
                                        </div>
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
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header float-left col-12">{{ __("Foreign tribes") }}
                
                
                

                <div class="card-body">
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->tribe->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->tribe->genre }}
                                    </div>
                    

                                    <div class="col-sm-3">
                                        {{{ Auth::user()->Username }}}
                                    </div>
                    
                                </div>
                            </div>
                        </ul>
                    </li>
                
                    

               

                    <li class="list-group-item"> 
                    
                        <ul class="list-group list-group-flush">
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->tribe->genre }}
                                        </div>
                        

                                        <div class="col-sm-3">
                                            {{ Auth::user()->Username }}
                                        </div>
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
    
</div>
@endsection
