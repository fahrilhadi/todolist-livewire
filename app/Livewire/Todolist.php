<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todolist extends Component
{
    public $title = '';

    public function save()
    {
        Todo::create(['title' => $this->title]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.todolist', [
            'todos' => Todo::orderBy('id','desc')->get()
        ]);
    }
}
