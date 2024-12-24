<?php

namespace App\Livewire\Dashboard\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function placeholder(): string
    {
        return view('livewire.dashboard.users.skeleton');
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $users = User::query()->where("type", 0)->orderBy("created_at", "desc")->paginate(7);

        return view('livewire.dashboard.users.users-list', [
            "users" => $users
        ]);
    }
}
