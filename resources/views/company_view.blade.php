@extends('layouts.app')

@section('content')

<h1 class="list_view">Company directory:</h1>
<br>

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Name</td>
            <td>Address</td>
            <td>zip_code</td>
            <td>city</td>
            <td>Phone</td> 
            <td>Email</td>
        </tr>

        <tr>
            <td>{{ $company['company'] }}</td>
            <td>{{ $company['adress_street'] }}</td>
            <td>{{ $company['zip_code'] }}</td>
            <td>{{ $company['city'] }}</td>
            <td>+33 {{ $company['phone_nb'] }}</td>
            <td>{{ $company['comp_email'] }}</td> 
        </tr>

        <br>
</div>
<div class="form">
    <form action="/company" method="get">
        <input type="submit" value="Back to the list" class="bouton_form">
    </form>
</div>

@endsection

