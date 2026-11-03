<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\UserChatMessage;
use Illuminate\Support\Facades\Auth;

class UserChat extends Component
{
    public $users = [];
    public $selectedUser = null;
    public $messages = [];
    public $newMessage = '';
    
    public function mount()
    {
        // Logged-in user ko list se hata do
        $this->users = User::where('id', '!=', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.admin.user-chat')
            ->layout('admin.layouts.app');
    }
}