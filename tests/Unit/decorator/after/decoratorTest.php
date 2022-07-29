<?php

namespace Test\Unit\decorator\after;

use App\decorator\cloudstream\after\CloudStream;
use App\decorator\cloudstream\after\CompressedCloudStream;
use App\decorator\cloudstream\after\EncryptedCloudStream;
use App\decorator\cloudstream\after\Stream;
use Test\Support\CustomTestCase;

class decoratorTest extends CustomTestCase
{
    public function test_cloud_stream_should_be_able_to_write_data()
    {
        $this->assertSame('mehdi stored in cloud', $this->storeCreditCard(new CloudStream,'mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_encrypt_and_write_data()
    {
        $this->assertSame('encrypted mehdi stored in cloud', $this->storeCreditCard(new EncryptedCloudStream(new CloudStream()),'mehdi'));
    }
 
    public function test_cloud_stream_should_be_able_to_compress_and_write_data()
    {
        $this->assertSame('compressed mehdi stored in cloud', $this->storeCreditCard(new CompressedCloudStream(new CloudStream()),'mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_compress_and_encrypt_and_write_data()
    {
        $this->assertSame('compressed encrypted mehdi stored in cloud', $this->storeCreditCard(new EncryptedCloudStream(new CompressedCloudStream(new CloudStream())),'mehdi'));
    }

    private function storeCreditCard(Stream $stream,string $data)
    {
        return $stream->write($data);
    }
}
