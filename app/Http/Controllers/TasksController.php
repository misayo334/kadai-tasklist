<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;    // 追加

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $tasks = $user->tasks()->orderBy('id', 'desc')->paginate(25);
            
            $data = [
                'user' => $user,
                'tasks' => $tasks,
            ];
            
            return view('tasks.index', [
                'tasks' => $tasks,
            ]);
        }
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;
        
        return view('tasks.create',[
            'task' => $task,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
            'title' => 'max:191',
            'details' => 'max:191',
            'content' => 'required|max:191',
            'status' => 'required|max:191',
            'status_short' => 'required|max:10',
            ]);
            
            

        
// //        if($request->Title <> null) {

//             $task = new Task;
            
// //            $task->title = $request->Title;
//             $task->title = "no details provided";
            
//             if($request->details <> null){
//                 $task->details = $request->details;  
//             }
//             else {
//                 $task->details = "no details provided"; 
//             }
            
//             if($request->content <> null){
//                 $task->content = $request->content;  
//             }
//             else {
//                 $task->content = "no details provided"; 
//             }
            
//             if($request->status <> null){
//                 $task->status = $request->status;  
//             }
//             else {
//                 $task->status = "no status comment provided"; 
//             }
            
//             $task->status_short = $request->status_short;
            
//             $task->save();

            $request->user()->tasks()->create([
            'title' => "no title provided",
            'details' => "no details provided", 
            'status' => $request->status, 
            'status_short' => $request->status_short,  
            'content' => $request->content,
            ]);
            
            return redirect('/');
            
//        }
//        else {
//            echo 'You did not fill out the form properly.  Use browser "return" button to return to the previous page.';
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        
        return view('tasks.show', [
            'task' => $task,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        
        return view('tasks.edit', [
            'task' => $task,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'max:191',
            'details' => 'max:191',
            'content' => 'required|max:191',
            'status' => 'max:191',
            'status_short' => 'required|max:10',
        ]);
            
        $task = Task::find($id);
        
        $task->title = $task->title;
        
        if($request->details <> null){
            $task->details = $request->details;  
        }
        else {
            $task->details = "no details provided"; 
        }
        
        if($request->status <> null){
            $task->status = $request->status;  
        }
        else {
            $task->status = "no status comment provided"; 
        }
        
        if($request->content <> null){
            $task->content = $request->content;  
        }
        else {
            $task->content = "no details provided"; 
        }
        
            $task->status_short = $request->status_short;
            
            if (\Auth::id() === $task->user_id) {
                $task->save();
            }
            
            return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if (\Auth::id() === $task->user_id) {
            $task->delete();
        }
        return redirect('/');
    }
}
