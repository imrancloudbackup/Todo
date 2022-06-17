<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\TodoModel;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function AddTask(Request $request)
    {
        $validatedData = $request->validate([
            'todolist' => 'required',
        ],
        [
            'todolist.required' => 'Please input your task',
        ]);

        $todolistquery = DB::table('todo_tasks_list')->insert([

            'user_id' => Auth::user()->id,
   
            'task_name' => $request->todolist,
   
            'created_by' => Auth::user()->id,
   
            'created_date' => Carbon::now(),
   
            'task_status' => 1,
   
            'task_source' => 1,
        ]);

        if($todolistquery)
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Task Added Successfully');
            return Redirect()->back();
        }
        else
        {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');
            return Redirect()->back();
        }
    }

    public function TaskEdit($id)
    {
        $result = DB::table('todo_tasks_list')->where('id',$id)->get();
        return json_encode($result);
    }

    public function TaskUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'edittodolist' => 'required',
        ],
        [
            'edittodolist.required' => 'Please input your task',
        ]);

        $edittodolisttableid = $request->todolisttableid;

        $updatetask = DB::table('todo_tasks_list')->where('id', $edittodolisttableid)->update([
            
   
            'task_name' => $request->edittodolist,
   
            'updated_by' => Auth::user()->id,
   
            'updated_date' => Carbon::now(),
   
            'task_status' => 1,
   
            'task_source' => 1,
        ]);

        if($updatetask)
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Task Updated Successfully');
            return Redirect()->back();
        }
        else
        {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Something went wrong. Please try agian later');
            return Redirect()->back();
        }
    }

    public function TaskDelete(Request $request,$id)
    {
        $tasktable = DB::table('todo_tasks_list')->where('id',$id);
        if ($tasktable != null)
        {
            $tasktable->delete();
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'successfully deleted!');
            return Redirect()->back();
        }
        else
        {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content','Something went wrong please try again!');
            return Redirect()->back();
        }
    }

    public function AllTask()
    {
        $userid = Auth::user()->id;
        $alltasks = DB::table('todo_tasks_list')->where('user_id',$userid)->orderBy('task_status', 'ASC')->orderBy('id', 'desc')->get();
        return view('body.todolist.todolist', compact('alltasks'));
    }

    public function TaskComplete(Request $request,$id)
    {
        $updatetask = DB::table('todo_tasks_list')->where('id', $id)->update([
   
            'updated_by' => Auth::user()->id,
   
            'updated_date' => Carbon::now(),
   
            'task_status' => 2,
        ]);

        if($updatetask)
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Task Completed Successfully');
            return Redirect()->back();
        }
        else
        {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Something went wrong. Please try agian later');
            return Redirect()->back();
        }
    }

    public function TaskRecover(Request $request,$id)
    {
        $updatetask = DB::table('todo_tasks_list')->where('id', $id)->update([
   
            'updated_by' => Auth::user()->id,
   
            'updated_date' => Carbon::now(),
   
            'task_status' => 1,
        ]);

        if($updatetask)
        {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Recover Completed Successfully');
            return Redirect()->back();
        }
        else
        {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Something went wrong. Please try agian later');
            return Redirect()->back();
        }
    }
}
