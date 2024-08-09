<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Axy_mi_mi;

class Axymimi extends Component
{
    public function render()
    {
        return view('livewire.axymimi',[
        'data' => Axy_mi_mi::paginate($this->perPage),
        ]);
        
    }
}
