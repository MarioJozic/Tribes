<?php
$results = DB::select('select * from users where id = ?', [1]);
?>

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
                    
                
                
                

                <div class="card-body">
                    <li class="list-group-item"> 
                  
                        <ul class="list-group list-group-flush">
                             <div class="card-body">
                                 <div class="row">
                

                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->profile->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->profile->genre }}
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
                                            {{ Auth::user()->profile->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->profile->genre }}
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
                                        {{ Auth::user()->profile->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->profile->genre }}
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
                                            {{ Auth::user()->profile->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->profile->genre }}
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
                                        {{ Auth::user()->profile->title }}
                                    </div>
                   


                                    <div class="col-sm-3 mr-7">
                                        {{ Auth::user()->profile->genre }}
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
                                            {{ Auth::user()->profile->title }}
                                        </div>
                        


                                        <div class="col-sm-3 mr-7">
                                            {{ Auth::user()->profile->genre }}
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
