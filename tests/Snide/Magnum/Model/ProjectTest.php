<?php

namespace Snide\Magnum\Model;

/**
 * Class ProjectTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class ProjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Project
     */
    protected $object;


    /**
     * Set up the test
     */
    protected function setUp()
    {
        $this->object = new Project();
    }

    /**
     * Test ID
     */
    public function testId()
    {
        $this->assertNull($this->object->getId());
        $id = '12';
        $this->object->setId($id);
        $this->assertEquals($id, $this->object->getId());
    }

    /**
     * Test createdAt
     */
    public function testCreatedAt()
    {
        $this->assertNull($this->object->getCreatedAt());
        $date = '2014-02-15T04:36:59-06:00';
        $createdAt = new \DateTime($date);

        $this->object->setCreatedAt($date);
        $this->assertEquals($createdAt, $this->object->getCreatedAt());
        $this->object->setCreatedAt($createdAt);
        $this->assertEquals($createdAt, $this->object->getCreatedAt());
    }

    /**
     * Test updatedAt
     */
    public function testUpdatedAt()
    {
        $this->assertNull($this->object->getUpdatedAt());
        $date = '2014-02-15T04:36:59-06:00';
        $updatedAt = new \DateTime($date);

        $this->object->setUpdatedAt($date);
        $this->assertEquals($updatedAt, $this->object->getUpdatedAt());
        $this->object->setUpdatedAt($updatedAt);
        $this->assertEquals($updatedAt, $this->object->getUpdatedAt());
    }

    /**
     * Test API token
     */
    public function testApiToken()
    {
        $this->assertNull($this->object->getApiToken());
        $token = 'fa1231daezfae14dc';
        $this->object->setApiToken($token);
        $this->assertEquals($token, $this->object->getApiToken());
    }

    /**
     * Test name
     */
    public function testName()
    {
        $this->assertNull($this->object->getName());
        $name = 'magnum-client';
        $this->object->setName($name);
        $this->assertEquals($name, $this->object->getName());
    }

    /**
     * Test source type
     */
    public function testSourceType()
    {
        $this->assertNull($this->object->getSourceType());
        $srcType = 'git';
        $this->object->setSourceType($srcType);
        $this->assertEquals($srcType, $this->object->getSourceType());
    }

    /**
     * Test source type
     */
    public function testSourceUrl()
    {
        $this->assertNull($this->object->getSourceUrl());
        $srcUrl = 'git@github.com:pdenis/magnum-client';
        $this->object->setSourceUrl($srcUrl);
        $this->assertEquals($srcUrl, $this->object->getSourceUrl());
    }

    /**
     * Test enabled
     */
    public function testEnabled()
    {
        $this->assertNull($this->object->getEnabled());
        $enabled = true;
        $this->object->setEnabled($enabled);
        $this->assertEquals($enabled, $this->object->getEnabled());
    }

    /**
     * Test builds count
     */
    public function testBuildsCount()
    {
        $this->assertNull($this->object->getBuildsCount());
        $count = 12;
        $this->object->setBuildsCount($count);
        $this->assertEquals($count, $this->object->getBuildsCount());
    }

    /**
     * Test subscribers count
     */
    public function testSubscribersCount()
    {
        $this->assertNull($this->object->getSubscribersCount());
        $count = 2;
        $this->object->setSubscribersCount($count);
        $this->assertEquals($count, $this->object->getSubscribersCount());
    }

    /**
     * Test builds
     */
    public function testBuilds()
    {
        $this->assertEquals(array(), $this->object->getBuilds());

        $builds = array();
        $build = new Build();
        $build->setId(1);
        $builds[1] = $build;
        $this->object->setBuilds($builds);
        $this->assertEquals($builds, $this->object->getBuilds());
    }

    /**
     * Test add build
     */
    public function testAddBuild()
    {
        $builds = array();
        $build = new Build();
        $build->setId(1);
        $builds[1] = $build;

        $this->object->addBuild($build);
        $this->assertEquals($builds, $this->object->getBuilds());
        $build->setNumber(2);
        $builds[1] = $build;
        $this->object->addBuild($build); // Insert a build with an existing ID replace the older
        $this->assertEquals($builds, $this->object->getBuilds());
        $build = new Build();
        $build->setId(2);
        $this->object->addBuild($build);
        $builds[2] = $build;
        $this->assertEquals($builds, $this->object->getBuilds());
    }

    /**
     * Test remove build
     */
    public function removeBuild()
    {
        $builds = array();
        $build = new Build();
        $build->setId(1);
        $builds[1] = $build;
        $this->object->setBuilds($builds);
        $this->assertEquals($builds, $this->object->getBuilds());
        $secondBuild = new Build();
        $secondBuild->setId(12);
        $this->object->removeBuild($secondBuild);
        $this->assertEquals($builds, $this->object->getBuilds());
        $this->object->removeBuild($build);
        $this->assertEquals(array(), $this->object->getBuilds());
    }


    /**
     * Builds list
     *
     * @var array
     */
    protected $builds;

}