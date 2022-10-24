<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.users.index');
    }
}
