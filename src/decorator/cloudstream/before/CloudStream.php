<?php

namespace App\decorator\cloudstream\before;

class CloudStream
{
    public function write(string $data): string
    {
        return $data.' stored'; 
    }
}