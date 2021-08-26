@extends('layouts.app')

@section('content')

<div class="home">

    <h1>Pages Bleues</h1>
    <br>
    <form class="form" action="">
        <legend>Which company / Which employee</legend>
        <br>
        <input type="text" name="search" placeholder="ex: Julie / CGI / 0601885001" class="input_label" required>
        <br>

        <div class="label_radio">
            <input type="radio" name="choice_searching" value="employees"><label>Employee</label>
            <input type="radio" name="choice_searching" value="company" class="input_radio_right"><label>Company</label>
        </div>
        <br>
        <input type="submit" value="search" class="bouton_form">
    </form>

</div>

@endsection