<?php

namespace App\Http\Livewire\Teacher;

use Livewire\Component;
use App\Models\Subject;

class ShowSubjects extends Component
{
    public $subject;

    public function mount(Subject $subject)
    {
        $this->subject = $subject;
    }

    public function render()
    {
        return view('livewire.teacher.show-subjects');
    }

    public function showFileModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('show-form');
    }

    public function hideFileModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('hide-form');
    }

    public function addFiles()
    {
        dd('here');
    }
}
