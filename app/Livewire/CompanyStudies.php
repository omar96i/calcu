<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CompanyStudy;

class CompanyStudies extends Component
{
    use WithPagination;

    public int | string $perPage = 10;

    public function render()
    {
        
        return view('livewire.company-studies',[
        'data' => CompanyStudy::with('company','actuarial_group')->paginate($this->perPage),
    ]);
 } 
}
