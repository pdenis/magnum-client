<?php

/*
 * This file is part of the Snide magnum-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Magnum\Model;

/**
 * Class UserTest
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var User
     */
    protected $object;


    /**
     * Set up the test
     */
    protected function setUp()
    {
        $this->object = new User();
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
     * Test email
     */
    public function testEmail()
    {
        $this->assertNull($this->object->getEmail());
        $email = 'pascal.denis.75@gmail.com';
        $this->object->setEmail($email);
        $this->assertEquals($email, $this->object->getEmail());
    }

    /**
     * Test login
     */
    public function testLogin()
    {
        $this->assertNull($this->object->getLogin());
        $login = 'snide';
        $this->object->setLogin($login);
        $this->assertEquals($login, $this->object->getLogin());
    }

    /**
     * Test projects count
     */
    public function testProjects()
    {
        $this->assertNull($this->object->getProjects());
        $count = '10';
        $this->object->setProjects($count);
        $this->assertEquals($count, $this->object->getProjects());
    }

    /**
     * Test time used
     */
    public function testTimeUsed()
    {
        $this->assertNull($this->object->getTimeUsed());
        $timeUsed = 10.1;
        $this->object->setTimeUsed($timeUsed);
        $this->assertEquals($timeUsed, $this->object->getTimeUsed());
    }

    /**
     * Test time quota
     */
    public function testTimeQuota()
    {
        $this->assertNull($this->object->getTimeQuota());
        $timeQuota = 20;
        $this->object->setTimeQuota($timeQuota);
        $this->assertEquals($timeQuota, $this->object->getTimeQuota());
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
}