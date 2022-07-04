<?php

namespace App\memento;

class Editor 
{
    private string $content;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state): void
    {
        $this->content = $state->getContent();
    }
}
