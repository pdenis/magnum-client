<?php

namespace Snide\Magnum\Model;

/**
 * Class BuildTest
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class BuildTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Build
     */
    protected $object;


    /**
     * Set up the test
     */
    protected function setUp()
    {
        $this->object = new Build();
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
     * Test number
     */
    public function testNumber()
    {
        $this->assertNull($this->object->getNumber());
        $number = '2';
        $this->object->setNumber($number);
        $this->assertEquals($number, $this->object->getNumber());
    }

    /**
     * Test author
     */
    public function testAuthor()
    {
        $this->assertNull($this->object->getAuthor());
        $author = 'Pascal DENIS';
        $this->object->setAuthor($author);
        $this->assertEquals($author, $this->object->getAuthor());
    }

    /**
     * Test commit
     */
    public function testCommit()
    {
        $this->assertNull($this->object->getCommit());
        $commit = 'e45fdd0ca143439dd2c9648e70ce1a585ca79607';
        $this->object->setCommit($commit);
        $this->assertEquals($commit, $this->object->getCommit());
    }


    /**
     * Test committer
     */
    public function testCommitter()
    {
        $this->assertNull($this->object->getCommitter());
        $committer = 'Pascal DENIS';
        $this->object->setCommitter($committer);
        $this->assertEquals($committer, $this->object->getCommitter());
    }

    /**
     * Test message
     */
    public function testMessage()
    {
        $this->assertNull($this->object->getMessage());
        $msg = 'Add build test';
        $this->object->setMessage($msg);
        $this->assertEquals($msg, $this->object->getMessage());
    }

    /**
     * Test branch
     */
    public function testBranch()
    {
        $this->assertNull($this->object->getBranch());
        $branch = 'master';
        $this->object->setBranch($branch);
        $this->assertEquals($branch, $this->object->getBranch());
    }

    /**
     * Test state
     */
    public function testState()
    {
        $this->assertNull($this->object->getState());
        $state = 'pending';
        $this->object->setState($state);
        $this->assertEquals($state, $this->object->getState());
    }

    /**
     * Test result
     */
    public function testResult()
    {
        $this->assertNull($this->object->getResult());
        $result = 'null';
        $this->object->setResult($result);
        $this->assertEquals($result, $this->object->getResult());
    }

    /**
     * Test project
     */
    public function testProject()
    {
        $this->assertNull($this->object->getProject());
        $project = new \Snide\Magnum\Model\Project();
        $project->setId(1);
        $this->object->setProject($project);
        $this->assertEquals($project, $this->object->getProject());
    }

    /**
     * Test startedAt
     */
    public function testStartedAt()
    {
        $this->assertNull($this->object->getStartedAt());
        $date = '2014-02-15T04:36:59-06:00';
        $startedAt = new \DateTime($date);

        $this->object->setStartedAt($date);
        $this->assertEquals($startedAt, $this->object->getStartedAt());
        $this->object->setStartedAt($startedAt);
        $this->assertEquals($startedAt, $this->object->getStartedAt());
    }

    /**
     * Test finishedAt
     */
    public function testFinishedAt()
    {
        $this->assertNull($this->object->getFinishedAt());
        $date = '2014-02-15T04:36:59-06:00';
        $finishedAt = new \DateTime($date);

        $this->object->setFinishedAt($date);
        $this->assertEquals($finishedAt, $this->object->getFinishedAt());
        $this->object->setFinishedAt($finishedAt);
        $this->assertEquals($finishedAt, $this->object->getFinishedAt());
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
}