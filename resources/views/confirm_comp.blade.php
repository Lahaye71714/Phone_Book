@extends('layouts.app')

@section('content')
<div class="form">
<h1 class="">Company information</h1>
    <div class="message">
        <p class="">The new company is successfully registered !</p>
        <br>
        <form action="/company/" method="get">
            <input type="submit" value="Back to the list" class="bouton_form">
        </form>
    </div>
</div>

@endsection