<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;

class UpdateProfile extends Component
{
    public $input = [];

    public function render()
    {
        return view('livewire.update-profile');
    }

    public function updateProfile()
    {
       
        
        $user = Auth::user('id');
        
        
        $userInput = Validator::make($this->input, [
             'first_name' => 'max:100',
             'middle_name' => 'max:100',
             'last_name' => 'max:100',
             'email' => 'max:100|email',
            
             
        ])->validate();
        
        $user->update($userInput);

        $id = Auth::id();
        
        $userDetailInput = Validator::make($this->input, [
            'sex' => 'max:100',
            'nationality' => 'max:100',
            'religion' => 'max:100',
            'date_of_birth' => 'max:100',
            'place_of_birth' => 'max:100',
            'phone_number' => 'max:100',
            'street' => 'max:100',
            'city' => 'max:100',
            'province' => 'max:100',
            'state' => 'max:100',
            'phone_number' => 'max:100',
            
       ])->validate();
        $userDetail = UserDetail::where('user_id' , $id)->update($userDetailInput);

        session()->flash('message' ,'User Updated successfully!');

    }
   
}
