<?php

namespace Dhii\Data\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\HasCapableInterface}.
 *
 * @since [*next-version*]
 */
class HasCapableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\HasCapableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\HasCapableInterface The new instance.
     */
    public function createInstance()
    {
        $mock = $this->mock(self::TEST_SUBJECT_CLASSNAME)
                ->has()
                ->new();

        return $mock;
    }

    /**
     * Tests whether a correct instance of a descendant can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(self::TEST_SUBJECT_CLASSNAME, $subject, 'Subject does not implement required interface');
    }
}
