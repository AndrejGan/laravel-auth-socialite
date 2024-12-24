<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;

class UserItem extends Component
{
    public User $user;

    public function mount(User $user): void
    {
        $this->user = $user;
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('livewire.dashboard.users.user-item');
    }
}
