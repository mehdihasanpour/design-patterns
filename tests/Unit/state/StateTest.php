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
            'brush' => [
                'canvasType' => new brushCanvas,
                'result' => 'brush'
            ],
            'selection' => [
                'canvasType' => new selectionCanvas,
                'result' => 'selection'
            ],
            'erase' => [
                'canvasType' => new eraseCanvas,
                'result' => 'erase'
            ],
        ];
    }
    /**
     * @dataProvider dataProvider
     */
    public function test_we_should_see_proper_response($canvasType, $result)
    {
        $canvas = new canvas($canvasType);
        $this->assertSame($result, $canvas->mouseUp());
    }
}
