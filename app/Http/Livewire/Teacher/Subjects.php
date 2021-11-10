<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Subjects extends Component
{

    public $subject_name, $class, $schedule, $code;

    public function render()
    {
        $id  = Auth::id();
        return view('livewire.teacher.subjects', [
            'subjects' => Subject::where('teacher_id' , $id)->get()
        ]);
    }
    
    public function showSubjectModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('show-form');
    }

    public function hideSubjectModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('hide-form');
    }

    protected $rules =  [
        'subject_name' => 'required|max:100',
        'class' => 'required|max:100',
        'schedule' => 'required|max:100',
        'code' => 'required|min:3|max:10|unique:subjects',
    ];

    public function create()
    {

        $validatedData = $this->validate();
 
        $user = Auth::user('id');
        $subject = new Subject;
            
        $subject = Subject::create($validatedData);
        $subject->user()->associate($user);
        $subject->save();
      
        $this->dispatchBrowserEvent('hide-modal', ['message' => 'User added successfully!']);

    } 
}
