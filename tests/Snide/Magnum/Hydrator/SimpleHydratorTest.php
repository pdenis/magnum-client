<?php

namespace Snide\Magnum\Hydrator;

use Snide\Magnum\Model\Build;

/**
 * Class SimpleHydratorTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class SimpleHydratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SimpleHydrator
     */
    protected $object;


    /**
     * Set up the test
     */
    protected function setUp()
    {
        $this->object = new SimpleHydrator();
    }

    /**
     * Test hydrate object 
     */
    public function testHydrate()
    {
        $data = array(
            'id' => 12,
            'number' => 24,
            'unknown' => 'test'
        );

        $build = new Build();
        $this->object->hydrate($build, $data);

        $this->assertEquals(12, $build->getId());
        $this->assertEquals(24, $build->getNumber());
    }

    /**
     * Test camel case transform
     */
    public function testToCamelCase()
    {
        $result = 'camelCaseTest';

        $this->assertEquals($result, $this->object->toCamelCase('camel_case_test'));
    }

    /**
     * Test setter call
     */
    public function testCallSetter()
    {
        $build = new Build();
        $this->assertNull($build->getId());
        $this->object->callSetter($build, 'id', 12);
        $this->assertEquals(12, $build->getId());
    }
}