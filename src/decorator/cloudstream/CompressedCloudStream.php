<?php

namespace App\decorator\cloudstream;

class CompressedCloudStream extends CloudStream
{
    public function write(string $data): string
    {
        return parent::write($this->compress($data));
    }

    private function compress(string $data): string
    {
        return 'compressed '.$data;
    }
}
