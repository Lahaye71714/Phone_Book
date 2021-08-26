@extends('layouts.app')

@section('content')
<div class="form">
<h1 class="">Employee information</h1>
    <div class="">
        <p class="">The new employee is successfully registered !</p>
        <br>
        <form action="/employees/" method="get">
            <input type="submit" value="Back to the list" class="bouton_form">
        </form>
    </div>
</div>

@endsection