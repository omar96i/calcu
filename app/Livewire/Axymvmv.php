<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Axy_mv_mv;

class Axymvmv extends Component
{
    public function render()
    {
        return view('livewire.axymvmv',[
        'data' => Axy_mv_mv::paginate($this->perPage),
        ]);
    }
}
