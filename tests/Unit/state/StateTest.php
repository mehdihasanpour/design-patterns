<?php

namespace Test\Unit;

use App\state\brushCanvas;
use App\state\canvas;
use App\state\eraseCanvas;
use App\state\selectionCanvas;
use App\state\toolType;
use Test\Support\CustomTestCase;

class StateTest extends CustomTestCase
{
    public function dataProvider()
    {
        return [
            [
            'canvasType'=> new brushCanvas,
            'result'=> 'brush'
            ],
            [
            'canvasType'=> new selectionCanvas,
            'result'=> 'selection'
            ],
            [
            'canvasType'=> new eraseCanvas,
            'result'=> 'erase'
            ],
        ];
    }
    /**
     * @dataProvider dataProvider
     */
    public function test_we_should_see_proper_response($canvasType,$result)
    {
        $canvas = new canvas($canvasType);
        $this->assertSame($result,$canvas->mouseUp());
    }
}
