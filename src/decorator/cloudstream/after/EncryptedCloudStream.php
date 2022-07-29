<?php

namespace App\decorator\cloudstream\after;

class EncryptedCloudStream implements Stream
{
    public function __construct(private Stream $cloudStream)
    {
    }

    public function write(string $data): string
    {
        $encryptedData = $this->encrypt($data);

        return $this->cloudStream->write($encryptedData);
    }

    private function encrypt(string $data): string
    {
        return 'encrypted '.$data;
    }
}
