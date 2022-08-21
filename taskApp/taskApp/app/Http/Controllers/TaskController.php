<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   public function Store(Request $request){
    //    dd($request->all());
    $task=new Task;
    $this->validate($request,[
        'task'=>'required|max:100|min:5',
    ]);
    $task->task=$request->task;
    $task->save();

    // return redirect()->back();
    $data=Task::all(); 
    //dd($data);

    return view('tasks')->with('tasks',$data);
   }
} 
