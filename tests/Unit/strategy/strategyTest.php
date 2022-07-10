<?php

namespace Test\Unit\strategy;

use App\strategy\blackAndWhiteFilter;
use App\strategy\imageStorage;
use App\strategy\jpegCompressor;
use Test\Support\CustomTestCase;

class strategyTest extends CustomTestCase
{
    public function test_we_should_be_able_to_save_image_base_on_filter_and_compressor()
    {
        $imageStorage = new imageStorage();
        $this->assertSame('mehdi saved with jpeg-b&w',$imageStorage->store('mehdi',new jpegCompressor, new blackAndWhiteFilter));
    }
}