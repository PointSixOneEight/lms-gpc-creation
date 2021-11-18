<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Subject;
use App\Models\File;
use App\Models\Task;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class TeacherTask extends Component
{
    use WithFileUploads;
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteTask'];
    public $name, $description, $file_path;
    public $taskIdBeingRemoved = null; 
    public $subject = null;
    public $searchTerm;
   

    protected $rules =  [ 
        'name' => 'required',
        'description' => 'max:50',
        'file_path' => 'required',
    ];

    

    public function render()
    {   
        $id = $this->subject->id;
        $task = Task::where('subject_id' , $id)
               ->where('name' , 'like' , '%'  . $this->searchTerm.'%')
               ->latest()
               ->paginate(2);
        
        return view('livewire.teacher.teacher-task' , ['tasks' => $task]);
    }

    public function showTaskModal()
    {
        $this->dispatchBrowserEvent('show-form');
    }


    public function hideFileModal()
    {
        
        $this->dispatchBrowserEvent('hide-form');
    }

    public function addTask()
    {
        $validatedData = $this->validate();
        $taskname = $this->file_path->getClientOriginalName();
        $task = $this->file_path->storeAs('task',  $taskname);
        $validatedData['file_path'] =$task;
        $subject1 = $this->subject;
        $task = new Task;
        $task = Task::create($validatedData);
        $task->subject()->associate($subject1);
        $task->save();
       
     
        $this->dispatchBrowserEvent('hide-modal', ['message' => 'Task added successfully!']);
    }

    public function confirmTaskRemoval($fileId)
    {
       
        $this->taskIdBeingRemoved = $fileId;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteTask()
    {
 
       $task = Task::findOrFail($this->taskIdBeingRemoved);
    //    dd($file);
       $task->delete();
       $this->dispatchBrowserEvent('deleted', [ 'message' => 'Task deleted successfully!']);
    }
 
}
