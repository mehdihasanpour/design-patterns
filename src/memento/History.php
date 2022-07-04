<?php

namespace App\memento;

class History
{
    private array $states = [];

    public function push(EditorState $state)
    {
        array_push($this->states,$state);
    }

    public function pop(): EditorState
    {
        array_pop($this->states);

        return end($this->states);
    }
}