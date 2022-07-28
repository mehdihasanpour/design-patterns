<?php

namespace App\strategy;

class imageStorage
{
    public function store(string $fileName, compressorInterface $compressor, filterInterface $filter)
    {
        return $fileName.' saved with '.$compressor->compress().'-'.$filter->filter();
    }
}
