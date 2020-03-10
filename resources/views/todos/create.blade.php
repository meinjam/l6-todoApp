@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Add New Todo</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Add Todo</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('todos.store')}}" method="post">
                        @csrf
                        <textarea name="data" rows="3" class="form-control"></textarea>
                        <button type="submit" class="btn btn-success mt-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection