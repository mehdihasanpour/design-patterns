<?php

namespace App\strategy;

class pngCompressor implements compressorInterface
{
    public function compress():string
    {
        return 'png';
    }
}