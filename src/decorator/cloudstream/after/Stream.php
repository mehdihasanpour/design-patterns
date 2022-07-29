<?php

namespace App\decorator\cloudstream\after;

interface Stream
{
    public function write(string $data): string;
}