<?php

namespace Test\Unit\decorator\cloudstream\before;

use App\decorator\cloudstream\before\CloudStream;
use App\decorator\cloudstream\before\CompressedCloudStream;
use App\decorator\cloudstream\before\EncryptedCloudStream;
use Test\Support\CustomTestCase;

class decoratorTest extends CustomTestCase
{
    public function test_cloud_stream_should_be_able_to_write_data()
    {
        $cloudStream = new CloudStream();
        $this->assertSame('mehdi stored', $cloudStream->write('mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_encrypt_and_write_data()
    {
        $encryptedCloudStream = new EncryptedCloudStream();
        $this->assertSame('encrypted mehdi stored', $encryptedCloudStream->write('mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_compress_and_write_data()
    {
        $encryptedCloudStream = new CompressedCloudStream();
        $this->assertSame('compressed mehdi stored', $encryptedCloudStream->write('mehdi'));
    }
}
