<?php

namespace App\strategy;

class jpegCompressor implements compressor
{
    public function compress():string
    {
        return 'jpeg';
    }
}