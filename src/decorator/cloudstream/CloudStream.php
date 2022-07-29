<?php

namespace App\decorator\cloudstream;

class CloudStream
{
    public function write(string $data): string
    {
        return $data.' stored'; 
    }
}