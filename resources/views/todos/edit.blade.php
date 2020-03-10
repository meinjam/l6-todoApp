@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Edit Todos</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card my-2">
                <div class="card-header">
                    <h3> Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('todos.update', $todos->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <textarea name="data" rows="3" class="form-control mb-2">{{$todos->data}}</textarea>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection