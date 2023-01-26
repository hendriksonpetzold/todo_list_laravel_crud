<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TodoListModel;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        return TodoListModel::all();
    }


    public function store(Request $request)
    {
        TodoListModel::create($request->all());
    }


    public function show($id)
    {
        return TodoListModel::findOrFail($id);
    }



    public function update(Request $request, $id)
    {
        $todo = TodoListModel::findOrFail($id);
        $todo->update($request->all());
    }


    public function destroy($id)
    {
        TodoListModel::destroy($id);
        return response()->json(
            [
                'response' => 'deleted'
            ]
        );
    }
}
