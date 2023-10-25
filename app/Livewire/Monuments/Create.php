<?php

namespace App\Livewire\Monuments;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class Create extends Component
{
    public $coordinates = [];
    public $name;
    protected $listeners = ['saved' => 'render'];
    protected $rules = [
        'coordinates.0' => 'required|numeric|between:-180,180',
        'coordinates.1' => 'required|numeric|between:-90,90',
        'name' => 'required|string|max:255|unique:monuments,name',
    ];

// One custom message per rule, it's not mandatory, otherwise, default messages will be shown
    protected $messages = [
        'coordinates.0.required' => 'The longitude is required.',
        'coordinates.0.numeric' => 'The longitude must be a number.',
        'coordinates.0.between' => 'The longitude must be between -180 and 180.',
        'coordinates.1.required' => 'The latitude is required.',
        'coordinates.1.numeric' => 'The latitude must be a number.',
        'coordinates.1.between' => 'The latitude must be between -90 and 90.',
        'name.required' => 'The name is required.',
        'name.string' => 'The name must be a string.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'name.unique' => 'The name has already been taken.',
    ];
    public function save()
    {
        dd($this->coordinates, $this->name, DB::raw("ST_GeomFromText('POINT({$this->coordinates[0]} {$this->coordinates[1]})')"));
    }
    public function render()
    {
        return view('livewire.monuments.create');
    }
}
