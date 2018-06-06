@extends('layouts.master')
 
@section('Nieuwe Navigatie', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
@if(Auth::User()->admin == 1)
   
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Nieuwe Navigatie</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/admin/navigations/create" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Naam</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Naam Navigatie" class="form-control input-md" required="true" >
    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Url</label>
                        <div class="col-md-9">
                            <input id="url" name="url" type="text" placeholder="Url Navigatie" class="form-control input-md" required="true">
    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Is admin</label>
                        <div class="col-md-9">
                            {!! Form::checkbox('admin', '1'); !!}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-primary" value="Maak Navigatie">
                        </div>
                    </div>
                    
                </fieldset>
            </form>
        </div>
    </div>
@endif
@endsection
 