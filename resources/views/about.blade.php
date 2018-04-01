@extends('layouts.master')
 
@section('Orders', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
{!! Breadcrumbs::render('about') !!}
<div class="container">
    <div class="whitebackground">
        <h1>About</h1>
        <p>Bordspellen en puzzels bestaat uit een super enthausiast team van twee 
            jonge developers. Wij hebben beide een passie voor bordspellen en puzzels
            daarom hebben wij besloten deze webshop te beginnen.<br> Onze eerste founder
            is Luuk, Luuk heeft al zijn hele leven een passie voor bordspellen en met
            name het spel Kolonisten van Catan.<br> Onze andere founder is Ryan, Ryan puzzelt
            er al jaren lustig op los en geniet ook van een rustig avondje kaarten.
        
        </p>
    </div>
</div>
 
@endsection