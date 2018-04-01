@extends('layouts.master')
 
@section('Orders', 'Page Title')
 
@section('sidebar')
    @parent
@endsection
 
@section('content')
{!! Breadcrumbs::render('home') !!}
<div class="container">
    <div class="whitebackground">
        <h1>Welkom!</h1>
        <p>Welkom op onze bordspellen en puzzels webshop.<br><br>
            Bij ons staat de kwaliteit van het product voorop samen met de klant.
            Wij van bordspellen en puzzels vinden een avond met een bordspel of een puzzel
            een essentieel deel van het leven. Al ontzettend lang groeien kinderen op met deze 
            spellen en puzzels daarom willen wij de ideale ervaring bieden bij het bestelling van deze dingen.
            Ook zijn we er natuurlijk voor de ouderen die van een rustige puzzel middag houden of een wild spelletje
            risk.
        </p>
    </div>
</div>
 
@endsection