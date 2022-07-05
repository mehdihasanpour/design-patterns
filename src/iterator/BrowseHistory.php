<?php

namespace App\iterator;

class BrowseHistory
{
    public array $urls = [];

    public function push(string $url)
    {
        array_push($this->urls, $url);
    }

    public function pop()
    {
        $lastItem = end($this->urls);
        array_pop($this->urls);
        return $lastItem;
    }

    public function createIterator(): IteratorInterface
    {
        return new ListIterator($this);
    }
}

class ListIterator implements IteratorInterface
{
    public int $index = 0;

    public function __construct(private BrowseHistory $history)
    {
    }

    public function hasNext(): bool
    {
        return count($this->history->urls) > $this->index;
    }

    public function current(): string
    {
        return ($this->history->urls)[$this->index];
    }

    public function next(): void
    {
        $this->index++;
    }
}
