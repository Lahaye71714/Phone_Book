@extends('layouts.app')

@section('content')

    <div class="form">
        <form action="{{ route('employees.update', ['id' => $employees->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <fieldset>
                <legend>&nbsp &nbsp Edition - Please fill in the following fields &nbsp &nbsp</legend>

                <!-- Civility & personnal information -->
                <label for="civility">Civility: </label>
                    <select name='civility'>
                        <option value='Mr' {{ ($employees['civility']=='Mr') ? 'selected' : '' }}>Mr</option>
                        <option value='Ms' {{ ($employees['civility']=='Ms') ? 'selected' : '' }}>Ms</option>
                        <option value='N-B' {{ ($employees['civility']=='N-B') ? 'selected' : '' }}>Non-binary</option>
                    </select>
                <br><br>
                <label for="firstname">Firstname (required): </label><br>
                    <input type="text" name="firstname" placeholder="ex: Julie" value="{{$employees['firstname']}}" class="input_label" required>
                <br>
                <label for="lastname">Lastname (required): </label><br>
                    <input type="text" name="lastname" placeholder="ex: POUNY" value="{{$employees['lastname']}}" class="input_label" required>
                <br>
                
                <label for="adress_street">Address street (required) : </label><br>
                    <input type="text" name="adress_street" placeholder="address" value="{{$employees['adress_street']}}" class="input_label" required>
                <br>
                <label for="zip_code">ZIP code (required) : </label><br>
                    <input type="text" name="zip_code" placeholder="ZIP code" pattern="[0-9]{5}" value="{{$employees['zip_code']}}" class="input_label" required>
                <br>
                <label for="city">City (required) : </label><br>
                    <input type="text" name="city" placeholder="city" value="{{$employees['city']}}" class="input_label" required>
                <br>

                <label for="email">Email (required) : </label><br>
                    <input type="email" name="email" placeholder="email" value="{{$employees['email']}}" class="input_label" required>
                <br>

                <label for="phone_nb">Phone number : </label><br>
                    <input type="tel" name="phone_nb" placeholder="phone number" pattern="[0-9]{10}" value="0{{$employees['phone_nb']}}" class="input_label">
                <br>

                <!-- Company attachement -->
                <label for="company">Company (required) : </label>
                    <select name='company'>
                        @foreach($companies as $company)
                        <option value='{{ $company->company }}'>{{ $company->company }}</option>
                        @endforeach
                    </select>
                <br><br>


                <input type="submit" value="Edit" class="bouton_form">
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