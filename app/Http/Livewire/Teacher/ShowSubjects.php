<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Subject;
use App\Models\File;
use App\Models\Task;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ShowSubjects extends Component
{
    
    public Subject $subject;
    public $show = 1;

    public function showFile()
    {
        $this->show = 1;
        //dd($this->showFile);
    }

    public function showTask()
    {
        
        $this->show = 2;
        //dd($this->showFile);
    }

    public function mount($subject)
    {
        $this->subject = $subject;
    }

    public function render()
    {
       
        //$id = $this->subject->id;
        // $file = File::where('subject_id' , $id)->get();
        //$task = Task::where('subject_id' , $id)->get();
        return view('livewire.teacher.show-subjects');
        // $id  = Auth::id();
        // return view('livewire.teacher.subjects', [
        //     'subjects' => Subject::where('teacher_id' , $id)->get()
        // ]);
    }

    /** 
     * 
     * Task 
     * 
     * */
    public function showTaskModal()
    {
        // dd('here');
        
        $this->dispatchBrowserEvent('show-task');
    }

    public function hideTaskModal()
    {
        // dd('here');
        
        $this->dispatchBrowserEvent('hide-task-modal');
    }

    public function addTask()
    {
        $validatedData = $this->validate();
        $taskname = $this->file_path->getClientOriginalName();
        $task = $this->file_path->storeAs('file',  $taskname);
        $validatedData['file_path'] = $task;
        $subject1 = $this->subject;
        $task = new task;
        $task = Task::create($validatedData);
        $task->subject()->associate($subject1);
        $task->save();
        $this->dispatchBrowserEvent('hide-task', ['message' => 'Task added successfully!']);
    }

    public function confirmTaskRemoval($taskId)
    {
        $this->taskIdBeingRemoved = $taskId;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteTask()
    {
     dd($this->taskIdBeingRemoved);
       $task = Task::findOrFail($this->taskIdBeingRemoved);
       $task->delete();
       $this->dispatchBrowserEvent('deleted', [ 'message' => 'Task deleted successfully!']);
    }

}
