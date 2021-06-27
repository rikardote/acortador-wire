<?php

namespace App\Http\Livewire;


use App\Models\Date;
use Livewire\Component;

class Picaday extends Component
{
    public $date;
    public $datefinale;

    public $rules = [
        'date' => 'required:date'
    ];

    public function render()
    {
        return view('livewire.picaday');
    }

    public function save()
    {
        $this->validate();

        Date::create([
            'date' => $this->date
        ]);

        $this->reset('date');

    }
}
