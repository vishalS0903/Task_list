<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index(){
    $tasks = Task::all();
    return view('tasks.index',compact('tasks'));
   }

   public function store(Request $request){
    $request->validate([
        'title'=>'required',
    ]);
    Task::create([
        'title'=>$request->title
    ]);
    session()->flash('msg','task has been added');
    return redirect()->route('tasks.index');
   }
   public function destroy($id){
    Task::destroy($id);
    return redirect()->back()->with('msg','task has been deleted ');
   }
}
