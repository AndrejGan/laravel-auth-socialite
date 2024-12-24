<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard')]
class ShowOne extends Component
{
    public User $user;

    public function mount($id): void
    {
        $this->user = User::findOrFail($id);
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('livewire.dashboard.users.show-one')
            ->title($this->user->name);
    }
}
