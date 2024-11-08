<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todolist extends Component
{
    public function render()
    {
        return view('livewire.todolist', [
            'todos' => Todo::orderBy('id','desc')->get()
        ]);
    }
}
