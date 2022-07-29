<?php

namespace App\decorator\cloudstream;

class EncryptedCloudStream extends CloudStream
{
    public function write(string $data): string
    {
        return $this->encrypt($data).' stored';
    }

    private function encrypt(string $data): string
    {
        return 'encrypted '.$data;
    }
}
