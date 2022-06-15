<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoCollection;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::query()->orderBy('created_at', 'DESC')->get();

        return new TodoCollection($todos);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => ['required'],
        ]);

        $todo = Todo::create($data)->fresh();

        return TodoResource::make($todo);
    }


    public function show(Todo $todo)
    {
        //
    }


    public function update(Request $request, Todo $todo)
    {
        $data = $request->validate([
            'completed' => ['sometimes', 'required', 'bool'],
            'description' => ['sometimes', 'required'],
        ]);

        if(isset($data['completed']) && $data['completed']==1){
            $data['completed_at'] =  Carbon::now();
        }elseif(isset($data['completed']) && $data['completed']==0){
            $data['completed_at'] =  null;
        }

        $todo->update($data);
        return TodoResource::make($todo);
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response('todo successfully deleted', Response::HTTP_NO_CONTENT);
//
    }
}
