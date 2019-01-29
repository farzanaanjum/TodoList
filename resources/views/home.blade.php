@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }} </td>
                            <td><a href="/home/delete/{{ $contact->id}}" class="btn btn-danger btn-xs">Delete</a></td>
                        </tr>   
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
