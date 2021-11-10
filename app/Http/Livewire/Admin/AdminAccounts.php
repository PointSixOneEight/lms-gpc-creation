<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\UserDetail;
use Livewire\WithPagination;

class AdminAccounts extends Component
{
    use WithPagination;

    protected $listeners = ['deleteConfirmed' => 'deleteUser'];
    protected $paginationTheme = 'bootstrap';
    public $state=[];
    public $user;
    public $userIdBeingRemoved = null; 
    public $searchTerm = null;
    
   
   public function render()
   {
      return view('livewire.admin.admin-accounts' , [
         'users' => User::query()
             ->where('first_name' , 'like' , '%'  . $this->searchTerm.'%')
             ->orWhere('middle_name' , 'like' , '%'  . $this->searchTerm.'%')
             ->orWhere('last_name' , 'like' , '%'  . $this->searchTerm.'%')
             ->latest()
             ->paginate(5), 
      ]);
         
   }

   public function deleteUser()
   {

      $user = User::findOrFail($this->userIdBeingRemoved);
      $user->delete();
      $detail = UserDetail::where('user_id', $user->id)->delete();
      $this->dispatchBrowserEvent('deleted', [ 'message' => 'User deleted successfully!']);
   }

   public function confirmUserRemoval($userId)
   {
      $this->userIdBeingRemoved = $userId;
      $this->dispatchBrowserEvent('show-delete-confirmation');
   }
}

