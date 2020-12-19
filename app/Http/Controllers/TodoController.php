<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all Todos
        try {
            return response()->json([
                'message' => 'successful',
                'data' => Todo::all(),
            ], 200);
        } catch (\Exception $th) {
            //Error message;
            return response()->json([
                'message' => 'Something went wrong.'], 500);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create a Todo
        try {
            return response()->json([
                'message' => 'successful',
                'data' => Todo::create($request->all())
            ]);
        } catch (\Exception $th) {
            //Error message;
            return response()->json([
                'message' => 'Something went wrong.'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //show a todo
        return response()->json([
            'message' => 'successful',
            'data' => $todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //update todo
        if($todo->update($request->all())){
            return response()->json([
                'message' => 'successful',
            ]);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //delete a todo
        if($todo->delete()){
            return response()->json([
                'message' => 'successful',
            ]);
        }
    }
}
