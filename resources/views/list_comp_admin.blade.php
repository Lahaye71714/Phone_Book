@extends('layouts.app')

@section('content')

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Company</td>
            <td>Phone</td>
            <td>Email</td>
            <td>ZIP code</td>
            <td colspan="2">Operation</td>
        </tr>
        @foreach($company as $company)
        <tr>
            <td>{{ $company['company'] }}</td>
            <td>+33 {{ $company['phone_nb'] }}</td>
            <td>{{ $company['comp_email'] }}</td> 
            <td>{{ $company['zip_code'] }}</td>
            
            <td><form method="POST" action="delete/{{ $company['id'] }}" class="delete_upgrade">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="">
                    <input type="submit" name="id" value="Delete">
                </div>
            </form></td>

            <td><form method="POST" action="update/{{ $company['id'] }}" class="delete_upgrade">
                {{ csrf_field() }}
                {{ method_field('GET') }} 
                <div class="">
                    <input type="submit" name="id" value="Update">
                </div>
            </form></td>
        </tr>
        @endforeach
    </table>
</div>

@endsection