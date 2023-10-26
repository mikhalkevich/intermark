<?php

namespace App\Livewire\Items;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Create extends Component
{
    public $coordinates = [];
    public $name;
    public $longitude;
    public $latitude;
    protected $listeners = ['saved' => 'render', 'getLatitudeForInput'];
    protected $rules = [
        'longitude' => 'required|numeric|between:-180,180',
        'latitude' => 'required|numeric|between:-90,90',
        'name' => 'required|string|max:255|unique:items,name',
    ];

// One custom message per rule, it's not mandatory, otherwise, default messages will be shown
    protected $messages = [
        'longitude.required' => 'The longitude is required.',
        'longitude.between' => 'The longitude must be between -180 and 180.',
        'latitude.required' => 'The latitude is required.',
        'latitude.between' => 'The latitude must be between -90 and 90.',
        'name.required' => 'The name is required.',
        'name.string' => 'The name must be a string.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'name.unique' => 'The name has already been taken.',
    ];

    public function save(Request $request)
    {
        dd($this->latitude, $this->longitude, $request->all());
        $this->validate();
        dd($this->coordinates, $this->name, DB::raw("ST_GeomFromText('POINT({$this->coordinates[0]} {$this->coordinates[1]})')"));
    }
    public function startLongitudeChanged(){
        dd($this->latitude, $this->longitude);
    }
    public function getLatitudeForInput($value)
    {
        if(!is_null($value))
            $this->latitud = $value;
    }
    public function render()
    {
        return view('livewire.items.create');
    }
}
