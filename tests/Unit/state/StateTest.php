<?php

namespace Test\Unit;

use App\state\canvas;
use App\state\toolType;
use Test\Support\CustomTestCase;

class StateTest extends CustomTestCase
{
    public function test_we_should_see_proper_response()
    {
        $canvas = new canvas(toolType::BRUSH);
        $this->assertSame('brush',$canvas->giveCanvas()->mouseUp());
    }
}
