<?php

namespace Test\Unit\adapter\imageFilter\after;

use App\adapter\imagefilter\after\AvaFilterAdapter;
use App\adapter\imagefilter\after\avaFilters\CaramelFilter as AvaFiltersCaramelFilter;
use App\adapter\imagefilter\after\CaramelFilter;
use App\adapter\imagefilter\after\Image;
use App\adapter\imagefilter\after\ImageView;
use App\adapter\imagefilter\after\VividFilter;
use Test\Support\CustomTestCase;

class imageFilterTest extends CustomTestCase
{
    public function test_vivid_filter_should_be_applied_to_every_image()
    {
        $imageView = new ImageView(new Image());
        $this->assertSame('vivid filter applied', $imageView->apply(new VividFilter()));
    }

    public function test_caramel_filter_should_be_applied_to_every_image()
    {
        $imageView = new ImageView(new Image());
        $this->assertSame('caramel filter applied', $imageView->apply(new AvaFilterAdapter(new AvaFiltersCaramelFilter)));
    }
}