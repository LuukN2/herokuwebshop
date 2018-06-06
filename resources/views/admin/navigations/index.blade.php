@extends('layouts.master')
 
@section('Digital shop', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
@if(Auth::User()->admin == 1)
    <div class="whitebackground">
        <div class="row">
            <div class="col-md-12">
               
                <h1>Navigations</h1>
                <a class="btn btn-primary" href="navigations/new">Nieuwe Navigatie</a>
                @foreach ($navigations as $navigation)
                <div class="card">
                    <div class="row">
                        <h3>{{$navigation->name}}</h3>
                        <a class="btn btn-primary" href="navigations/edit/{{$navigation->id}}">Bewerken</a>
                        <a class="btn btn-danger" href="navigations/destroy/{{$navigation->id}}">Verwijderen</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
 @endif
@endsection