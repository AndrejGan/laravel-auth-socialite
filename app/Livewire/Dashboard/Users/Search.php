<?php

namespace App\Livewire\Dashboard\Users;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Search extends Component
{

    public string $search = '';


    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {

        return view('livewire.dashboard.users.search', [
                'users' =>  DB::table('users')
                    ->whereFullText('name', $this->search)
                    ->get()
            ]
        );
    }
}
