<?php

namespace App\strategy;

class imageStorage
{
    public function store(string $fileName, compressor $compressor, Filter $filter)
    {
        return $fileName.' saved with '.$compressor->compress().'-'.$filter->filter();
    }
}
