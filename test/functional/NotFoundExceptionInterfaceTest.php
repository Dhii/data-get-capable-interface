<?php

namespace Dhii\Data\UnitTest;

/**
 * Tests {@see Dhii\Data\NotFoundExceptionInterface}.
 *
 * @since [*next-version*]
 */
class NotFoundExceptionInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Data\\NotFoundExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \Dhii\Data\NotFoundExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->getMock(self::TEST_SUBJECT_CLASSNAME);

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
