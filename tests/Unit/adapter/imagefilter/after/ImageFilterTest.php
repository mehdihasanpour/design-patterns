<?php

namespace Test\Unit\adapter\imageFilter\before;

use App\adapter\imagefilter\before\CaramelFilter;
use App\adapter\imagefilter\before\Image;
use App\adapter\imagefilter\before\ImageView;
use App\adapter\imagefilter\before\VividFilter;
use Test\Support\CustomTestCase;

class imageFilterTest extends CustomTestCase
{
    public function test_vivid_filter_should_be_applied_to_every_image()
    {
        $imageView = new ImageView(new Image());
        $this->assertSame('vivid filter applied', $imageView->apply(new VividFilter()));
    }

    // public function test_caramel_filter_should_be_applied_to_every_image()
    // {
    //     $imageView = new ImageView(new Image());
    //     $this->assertSame('caramel filter applied', $imageView->apply(new CaramelFilter()));
    // }
}