<?php

namespace Dynamic\Elements\PullQuote\Test\Elements;

use Dynamic\Elements\PullQuote\Elements\ElementPullQuote;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

class ElementPullQuoteTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementPullQuote::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }
}
