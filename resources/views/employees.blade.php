@extends('layouts.app')

@section('content')

<h1 class="list_view">Employees directory:</h1>
<br>

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Name</td>
            <td>Phone</td> 
            <td>Email</td>
            <td>View</td>
        </tr>

        @if(count($all_employees)>=1)
            @foreach($all_employees as $employees)
            <tr>
                <td>{{ $employees['firstname'] }} {{ $employees['lastname'] }}</td>
                <td>+33 {{ $employees['phone_nb'] }}</td> 
                <td>{{ $employees['email'] }}</td>
                <td><form method="POST" action="{{ route('employees.view', ['id' => $employees->id]) }}" class="delete_upgrade">
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