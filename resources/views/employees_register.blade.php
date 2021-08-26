@extends('layouts.app')

@section('content')

<div class="form">

<form action="{{ url('employees/register') }}" method="POST">
    {{ csrf_field() }}

    <fieldset>
        <legend>&nbsp &nbsp Please fill in the following fields the employee information &nbsp &nbsp</legend>

        <!-- Civility & personnal information -->
        <label for="civility">Civility: </label>
            <select name='civility'>
                <option value='Mr'>Mr</option>
                <option value='Ms'>Ms</option>
                <option value='N-B'>Non-binary</option>
            </select>
        <br><br>
        <label for="firstname">Firstname (required): </label>
            <input type="text" name="firstname" placeholder="ex: Julie" class="input_label" required>
        <br>
        <label for="lastname">Lastname (required): </label>
            <input type="text" name="lastname" placeholder="ex: POUNY" class="input_label" required>
        <br>
        
        <label for="adress_street">Address street (required) : </label>
            <input type="text" name="adress_street" placeholder="address" class="input_label" required>
        <br>
        <label for="zip_code">ZIP code (required) : </label>
            <input type="text" name="zip_code" placeholder="ZIP code" pattern="[0-9]{5}" class="input_label" required>
        <br>
        <label for="city">City (required) : </label>
            <input type="text" name="city" placeholder="city" class="input_label" required>
        <br>

        <label for="email">Email (required) : </label>
            <input type="email" name="email" placeholder="email" class="input_label" required>
        <br>

        <label for="phone_nb">Phone number : </label>
            <input type="tel" name="phone_nb" placeholder="phone number" pattern="[0-9]{10}" class="input_label" >
        <br>

        <!-- Company attachement -->
        <label for="company">Company (required) : </label>
            <select name='company'>
                @foreach($companies as $company)
                <option value='{{ $company->company }}'>{{ $company->company }}</option>
                @endforeach
            </select>
        <br><br>

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