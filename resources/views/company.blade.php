@extends('layouts.app')

@section('content')

<h1 class="list_view">Company directory:</h1>
<br>

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Name</td>
            <td>Phone</td> 
            <td>Email</td>
            <td>Zip_code</td>
            <td>View</td>
        </tr>

        @if(count($all_company)>=1)
            @foreach($all_company as $company)
            <tr>
                <td>{{ $company['company'] }}</td>
                <td>+33 {{ $company['phone_nb'] }}</td>
                <td>{{ $company['comp_email'] }}</td> 
                <td>{{ $company['zip_code'] }}</td>

                <td><form method="POST" action="{{ route('company.view', ['id' => $company->id]) }}" class="delete_upgrade">
                    {{ csrf_field() }}
                    {{ method_field('GET') }}
                    <div class="">
                        <input type="submit" value="View">
                    </div>
                </form></td>
            </tr>
        @endforeach
@endif
</div>
@endsection