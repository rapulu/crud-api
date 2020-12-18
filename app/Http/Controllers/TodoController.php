<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function all(Request $request)
    {
        return response()->json([
            'message' => 'successful',
            'data' => Todo::all(),
        ]);
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->todo = $request->get('text');
        $todo->save();

        return response()->json([
            'message' => 'successful',
        ]);
    }

    public function get(Todo $todo)
    {
        # code...
    }

    public function update(Todo $todo)
    {
        # code...
    }

    public function delete(Todo $todo)
    {
        # code...
    }
}
