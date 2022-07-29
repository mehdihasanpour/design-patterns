<?php

namespace App\decorator\cloudstream\after;

use App\decorator\cloudstream\after\Stream;

class CompressedCloudStream implements Stream
{
    public function __construct(private Stream $stream)
    {
    }

    public function write(string $data): string
    {
        return $this->stream->write($this->compress($data));
    }

    private function compress(string $data): string
    {
        return 'compressed ' . $data;
    }
}
