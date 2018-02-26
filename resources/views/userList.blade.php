@extends('app')
@include('layouts.navigation')
@section('content')
    <div class="container">
    <h2>User Data</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>  
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
             </tr>
        </thead>
        <tbody>
            @foreach($haveUserData as $userDataKey)
                <tr>
                    <td>{{ $userDataKey->id }}</td>
                    <td>{{ $userDataKey->name }}</td>
                    <td>{{ $userDataKey->email }}</td>
                    <td><a href="{{ url('/editUserDataRequest',$userDataKey->id) }}" class="btn btn-primary btn-xs"  onclick="return confirm('Are you sure you want to edit it?')"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="{{ url('/destroy',$userDataKey->id) }}" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" onclick="return confirm('Are you sure you want delete it?')"><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection