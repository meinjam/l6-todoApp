@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4">Todos Page</h1>
    <div class="row">
        <div class="col-md-7 m-auto">
            @include('layout.messages')
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Todos</h3>
                </div>
                <div class="card-body">
                    @if (count($todos) > 0)
                        @foreach ($todos as $row)
                            <p class="lead rounded p-3" style="border: 1px solid #eee; font-family: 'Hind Siliguri', ;">{{$row->data}} <span class="float-right"> <a href="{{route('todos.show', $row->id)}}" class="btn btn-primary">View</a> <a href=""  class="btn btn-warning">Complete</a> </span> </p>
                        @endforeach
                    @else
                        <h5 class="lead">No todos found.</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection