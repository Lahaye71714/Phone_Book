@extends('layouts.app')

@section('content')

<div class="form">

<form action="{{ url('company/register') }}" method="POST">
    {{ csrf_field() }}

    <fieldset>
        <legend>&nbsp &nbsp Please fill in the following fields &nbsp &nbsp</legend>

        <label for="company">Company name (required): </label>
            <input type="text" name="company" placeholder="company name" class="input_label" required>
        <br><br>
        <!--Company information-->
        <label for="adress_street">Address street (required) : </label>
            <input type="text" name="adress_street" placeholder="address" class="input_label" required>
        <br>
        <label for="zip_code">ZIP code (required) : </label>
            <input type="text" name="zip_code" placeholder="ZIP code" pattern="[0-9]{5}" class="input_label" required>
        <br>
        <label for="city">City (required) : </label>
            <input type="text" name="city" placeholder="city" class="input_label" required>
        <br>

        <label for="phone_nb">Phone number (required) : </label>
            <input type="tel" name="phone_nb" placeholder="phone number" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="input_label">
        <br>

        <label for="comp_emal">Email (required) : </label>
            <input type="email" name="comp_email" placeholder="email" class="input_label" required>
        <br>

        <input type="submit" value="Register" class="bouton_form">
    </fielset>

</form>

    @if ($errors->any())
        <div class="">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>

@endsection