<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Hotel;
use App\Models\City;
use App\Models\Guide;
use App\Models\User;
use App\Models\Transport;

class SelectComponent extends Component
{
    public $to_city, $guide;
    public $to_cities = [], $guides = [];

    public function mount(){
        $this->to_cities = City::all();
        $this->guides = collect();
    }

    public function udpatedCity($value){
        $this->guides = Guide::where('city_id',$value)->get();
        $this->guide = $this->guides->first()->id ?? null;
    }

    public function render()
    {
        return view('livewire.select-component');
    }
}
