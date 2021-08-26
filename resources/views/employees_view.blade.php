@extends('layouts.app')

@section('content')

<h1 class="list_view">Employees directory:</h1>
<br>

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Name</td>
            <td>address</td>
            <td>Zip_code</td> 
            <td>City</td>
            <td>Phone</td> 
            <td>Email</td>
            <td>Company</td> 
        </tr>

        
       <tr>
            <td>{{ $employees['civility'] }} {{ $employees['firstname'] }} {{ $employees['lastname'] }}</td>
            <td>{{ $employees['adress_street'] }}</td>
            <td>{{ $employees['zip_code'] }}</td>
            <td>{{ $employees['city'] }}</td> 
            <td>+33 {{ $employees['phone_nb'] }}</td> 
            <td>{{ $employees['email'] }}</td>
            <td>{{ $employees['company'] }}</td> 
        </tr>

<div class="form">
    <form action="/employees" method="get">
        <input type="submit" value="Back to the list" class="bouton_form">
    </form>
</div>

@endsection