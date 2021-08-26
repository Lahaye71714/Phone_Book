@extends('layouts.app')

@section('content')

<div class="list_myphone">
    <table>
        <tr class="list_head">
            <td>Name</td>
            <td>Phone</td> 
            <td>Email</td>
            <td colspan="2">Operation</td>
        </tr>

        @foreach($employees as $employees)
        <tr>
            <td>{{ $employees['firstname'] }} {{ $employees['lastname'] }}</td>
            <td>+33 {{ $employees['phone_nb'] }}</td> 
            <td>{{ $employees['email'] }}</td>
            <td><form method="POST" action="delete/{{ $employees['id'] }}" class="delete_upgrade">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="">
                    <input type="submit" name="id" value="Delete">
                </div>
            </form></td>
            <td><form method="POST" action="update/{{ $employees['id'] }}" class="delete_upgrade">
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