<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Task;
use App\Models\File;
use Livewire\WithFileUploads;
use Livewire\withPagination;

class TeacherFile extends Component
{
    use WithFileUploads;
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['deleteConfirmed' => 'deleteFile'];
    public $name, $description, $file_path;
    public $fileIdBeingRemoved = null; 
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
        $file = File::where('subject_id' , $id)
               ->where('name' , 'like' , '%'  . $this->searchTerm.'%')
               ->latest()
               ->paginate(2);
       
               
        return view('livewire.teacher.teacher-file' , ['files' => $file]);
    }

    public function showFileModal()
    {
        // dd('here');
        $this->dispatchBrowserEvent('show-form');
    }


    public function hideFileModal()
    {
        
        $this->dispatchBrowserEvent('hide-form');
    }

    public function addFiles()
    {
        $validatedData = $this->validate();
        $filename = $this->file_path->getClientOriginalName();
        $file = $this->file_path->storeAs('file',  $filename);
        $validatedData['file_path'] = $file;
        $subject1 = $this->subject;
        $file = new File;
        $file = File::create($validatedData);
        $file->subject()->associate($subject1);
        $file->save();
     
        $this->dispatchBrowserEvent('hide-modal', ['message' => 'File added successfully!']);
    }

    public function confirmFileRemoval($fileId)
    {
       
        $this->fileIdBeingRemoved = $fileId;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteFile()
    {
 
       $file = File::findOrFail($this->fileIdBeingRemoved);
    //    dd($file);
       $file->delete();
       $this->dispatchBrowserEvent('deleted', [ 'message' => 'File deleted successfully!']);
    }
}
