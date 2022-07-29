<?php

namespace App\decorator\cloudstream\after;

class CloudStream implements Stream
{
    public function write(string $data): string
    {
        return $data.' stored in cloud'; 
    }
}