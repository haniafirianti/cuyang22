<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\User;

class Users extends Component
{
    public $users, $name, $email, $user_id, $password;
    public $updateMode = false;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.user.users');
    }
}
