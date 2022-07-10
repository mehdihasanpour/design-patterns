<?php

namespace App\strategy;

class pngCompressor implements compressor
{
    public function compress():string
    {
        return 'png';
    }
}