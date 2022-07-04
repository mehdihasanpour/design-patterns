<?php

namespace Test\Unit;

use App\memento\Editor;
use App\memento\History;
use PHPUnit\Framework\TestCase;

class EditorTest extends TestCase
{
    public function test_we_should_be_able_to_undo()
    {
        $editor = new Editor;
        $history = new History;

        $editor->setContent('a');
        $history->push($editor->createState());

        $editor->setContent('b');
        $history->push($editor->createState());

        $editor->setContent('c');
        $history->push($editor->createState());
        $editor->restore($history->pop());

        $this->assertSame('b', $editor->getContent());
    }
}
