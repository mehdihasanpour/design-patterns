<?php

namespace Test\Unit\iterator;

use App\iterator\BrowseHistory;
use Test\Support\CustomTestCase;

class IteratorTest extends CustomTestCase
{
    public function test_we_should_can_see_all_history()
    {
        $history = new BrowseHistory();
        $urls = ['a','b','c'];
        $history->push($urls[0]);
        $history->push($urls[1]);
        $history->push($urls[2]);

        $iterator = $history->createIterator();
        while ($iterator->hasNext()) {
            $this->assertSame($urls[$iterator->index],$iterator->current());
            $iterator->next();
        }
    }
}
