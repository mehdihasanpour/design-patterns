<?php

namespace App\decorator\cloudstream\before;

class EncryptedCloudStream extends CloudStream
{
    public function write(string $data): string
    {
        return parent::write($this->encrypt($data));
    }

    private function encrypt(string $data): string
    {
        return 'encrypted '.$data;
    }
}
