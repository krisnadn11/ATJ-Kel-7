<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;
use App\Models\Supervisor\Data1;

class Data extends Component
{
    public function render()
    {
        $this->miles = Data1::all();
        return view('livewire.supervisor.data');
    }
    public function tekan()
    {
        dd($this->miles);
    }
}
