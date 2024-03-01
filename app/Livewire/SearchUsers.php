<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUsers extends Component
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.search-users', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
