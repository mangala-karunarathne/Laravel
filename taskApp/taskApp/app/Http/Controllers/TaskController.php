<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
   public function Store(Request $request){
    //    dd($request->all());

    // Creating new object from Task Model and take as variable called task
    $task=new Task;
    $this->validate($request,[
        'task'=>'required|max:100|min:5',
    ]);

   

    $task->task=$request->task;
    $task->save();
    // return back to same route
    return redirect()->back();

    // here data can be any name and it's just a variable to retrieve the data
    $data=Task::all(); 
    dd($data);

    return view('tasks')->with('tasks',$data);
   }

   public function UpdateTaskAsCompleted($id){

//     $task=DB::table('tasks')->where('id',$id)->get();
//     $update=[
//         'iscompleted'=> '1',
//     ];
//     Task::where('id',$id)->update($update);
//    // dd($task);
//     return redirect()->back();

        $task_to_b_complete=Task::find($id);
        $task_to_b_complete->iscompleted=1;
        $task_to_b_complete->save();
        // Back to the same view again
        return redirect()->back();

   }
} 
