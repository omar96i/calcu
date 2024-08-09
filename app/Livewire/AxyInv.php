<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Axy_inv;

class AxyInv extends Component
{
    public function render()
    {
        return view('livewire.axy-inv', [
            'data' => Axy_inv::paginate($this->perPage),
        ]);
            
            
    }
}
