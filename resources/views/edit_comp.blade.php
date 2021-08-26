@extends('layouts.app')

@section('content')

    <div class="form">
        <form action="{{ route('company.update', ['id' => $company->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <fieldset>
                <legend>&nbsp &nbsp Edition - Please fill in the following fields &nbsp &nbsp</legend>
                

                <label for="company">Company name (required): </label><br>
                    <input type="text" name="company" placeholder="company name" value="{{$company['company']}}" class="input_label" required>
                <br><br>
                <!--Company information-->
                <label for="adress_street">Address street (required) : </label><br>
                    <input type="text" name="adress_street" placeholder="address" value="{{$company['adress_street']}}" class="input_label" required>
                <br>
                <label for="zip_code">ZIP code (required) : </label><br>
                    <input type="text" name="zip_code" placeholder="ZIP code" pattern="[0-9]{5}" value="{{$company['zip_code']}}" class="input_label" required>
                <br>
                <label for="city">City (required) : </label><br>
                    <input type="text" name="city" placeholder="city" value="{{$company['city']}}" class="input_label" required>
                <br>

                <label for="phone_nb">Phone number (required) : </label><br>
                    <input type="tel" name="phone_nb" placeholder="phone number" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" value="0{{$company['phone_nb']}}" class="input_label">
                <br>

                <label for="comp_emal">Email (required) : </label><br>
                    <input type="email" name="comp_email" placeholder="email" value="{{$company['comp_email']}}" class="input_label" required>
                <br><br>

                <input type="submit" value="Register" class="bouton_form">
            </fielset>

        </form>
    </div>

@endsection