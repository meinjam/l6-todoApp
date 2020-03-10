<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // $todos = Todo::all();
        $todos = Todo::orderBy('created_at', 'desc')->get();
        // return view('todos.index', compact('todos'));
        return view('todos.index')->with('todos', $todos);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'data' => 'required'
        ];

        $this->validate($request, $rules);
        Todo::create($request->all());

        return redirect('/todos')->with('success','Todo added successfully.');
    }

    public function show($id)
    {
        $todos = Todo::findOrFail($id);
        return view('todos.show', compact('todos'));
    }

    public function edit($id)
    {
        $todos = Todo::find($id);
        return view('todos.edit', compact('todos'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'data' => 'required'
        ];

        $record = Todo::find($id);
        $record->update($request->all());

        return redirect('/todos')->with('success','Todo updated successfully.');
    }

    public function destroy($id)
    {
        Todo::where('id', $id)->delete();
        return redirect('/todos')->with('success','Todo deleted successfully.');
    }
}
