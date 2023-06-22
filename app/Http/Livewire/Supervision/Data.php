<?php

namespace App\Http\Livewire\Supervision;

use Livewire\Component;
use App\Models\Supervision\Milestone;

class Data extends Component
{
    public $miles, $tekan;
    public function render()
    {
        $this->miles = Milestone::all();
        return view('livewire.supervision.data');
    }
    public function tekan()
    {
        dd('here');
    }
}
