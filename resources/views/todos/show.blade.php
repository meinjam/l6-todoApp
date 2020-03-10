@extends('layout.layout')
@section('content')

    <h1 class="text-center display-4">Todos Details Page</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            <div class="card my-2">
                <div class="card-header">
                    <h3> Details</h3>
                </div>
                <div class="card-body">
                    <p class="lead">Todo name: <strong>{{$todos->data}}</strong></p>
                    <small>Added date & time: <strong>{{$todos->created_at}}</strong></small>
                </div>
            </div>
            <div> 
                <form action="{{route('todos.destroy', $todos->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/todos/{{$todos->id}}/edit" class="btn btn-info float-right">Edit</a> 
            </div>
        </div>
    </div>

@endsection