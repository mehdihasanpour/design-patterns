<?php

namespace Test\Unit\decorator\after;

use App\decorator\cloudstream\after\CloudStream;
use App\decorator\cloudstream\after\CompressedCloudStream;
use App\decorator\cloudstream\after\EncryptedCloudStream;
use Test\Support\CustomTestCase;

class decoratorTest extends CustomTestCase
{
    public function test_cloud_stream_should_be_able_to_write_data()
    {
        $cloudStream = new CloudStream();
        $this->assertSame('mehdi stored in cloud', $cloudStream->write('mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_encrypt_and_write_data()
    {
        $encryptedCloudStream = new EncryptedCloudStream(new CloudStream());
        $this->assertSame('encrypted mehdi stored in cloud', $encryptedCloudStream->write('mehdi'));
    }

    public function test_cloud_stream_should_be_able_to_compress_and_write_data()
    {
        $encryptedCloudStream = new CompressedCloudStream(new CloudStream);
        $this->assertSame('compressed mehdi stored in cloud', $encryptedCloudStream->write('mehdi'));
    }
}
