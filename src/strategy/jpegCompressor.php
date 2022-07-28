<?php

namespace App\strategy;

class jpegCompressor implements compressorInterface
{
    public function compress():string
    {
        return 'jpeg';
    }
}