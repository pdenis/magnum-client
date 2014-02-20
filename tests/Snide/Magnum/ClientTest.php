<?php

/*
 * This file is part of the Snide magnum-client package.
 *
 * (c) Pascal DENIS <pascal.denis.75@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Snide\Magnum;

use Snide\Magnum\Hydrator\SimpleHydrator;
use Snide\Magnum\Model\Project;
use Snide\Magnum\Model\User;

/**
 * Class ClientTest
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Client
     */
    protected $object;


    /**
     * Set up the test
     */
    protected function setUp()
    {
        $this->object = new Client();
    }

    /**
     * Test fetch User
     *
     * /api/v1/profile
     */
    public function testFetchUser()
    {
        $this->object = new Client(new SimpleHydrator());
        $u = new User();
        $u->setId(260);
        $u->setLogin('Pdenis');
        $u->setEmail('pascal.denis.75@gmail.com');
        $u->setCreatedAt('2014-02-15T03:50:06-06:00');
        $user = new User();
        $user->setApiToken('f2f1e5ffc506002f546eedfdd80f324c');

        $this->object->fetchUser($user);
        $this->assertEquals($u->getId(), $user->getId());
        $this->assertEquals($u->getLogin(), $user->getLogin());
        $this->assertEquals($u->getEmail(), $user->getEmail());
    }

    /**
     * Test fetch Project
     *
     * /api/v1/project
     */
    public function testFetchProject()
    {
        $p = new Project();
        $p->setId(392);
        $p->setName('magnum-client');
        $p->setProvider('github');
        $p->setProjectType('php');
        $p->setSourceType('git');
        $p->setSourceUrl('https://github.com/pdenis/magnum-client');
        $p->setCreatedAt('2014-02-21T02:52:14-06:00');
        $p->setEnabled(true);
        $project = new Project();
        $project->setApiToken('588067ab677935266b318d6e7e6ff45f');

        $this->object->fetchProject($project, false);
        // Test hydrate object
        $this->assertEquals($p->getProvider(), $project->getProvider());
        $this->assertEquals($p->getProjectType(), $project->getProjectType());
        $this->assertEquals($p->getSourceType(), $project->getSourceType());
        $this->assertEquals($p->getSourceUrl(), $project->getSourceUrl());
        $this->assertEquals($p->getEnabled(), $project->getEnabled());
        $this->assertEquals($p->getCreatedAt(), $project->getCreatedAt());
    }

    /**
     * Test project not found
     */
    public function testProjectNotFound()
    {
        try {
            $project = new Project();
            $project->setApiToken('unknown_token', false);
            $this->object->fetchProject($project);
            $this->fail('API send 404 for unknown token');
        } catch(\Exception $e) {
            $this->assertInstanceOf('Guzzle\Common\Exception\GuzzleException', $e);
        }
    }

    /**
     * Test user not found
     */
    public function testUserNotFound()
    {
        try {
            $user = new User();
            $user->setApiToken('unknown_token');
            $this->object->fetchUser($user);
            $this->fail('API send 404 for unknown token');
        } catch(\Exception $e) {
            $this->assertInstanceOf('Guzzle\Common\Exception\GuzzleException', $e);
        }
    }

    /**
     * Test builds not found
     */
    public function testBuildsNotFound()
    {
        try {
            $project = new Project();
            $project->setApiToken('unknown_token');
            $this->object->fetchBuilds($project);
            $this->fail('API send 404 for unknown token');
        } catch(\Exception $e) {
            $this->assertInstanceOf('Guzzle\Common\Exception\GuzzleException', $e);
        }
    }

    /**
     * Test fetch builds
     *
     * /api/v1/builds
     */
    public function testFetchBuilds()
    {
        $p = new Project();
        $p->setId(392);
        $p->setName('magnum-client');
        $p->setProvider('github');
        $p->setProjectType('php');
        $p->setSourceType('git');
        $p->setSourceUrl('https://github.com/pdenis/magnum-client');
        $p->setCreatedAt('2014-02-21T02:52:14-06:00');
        $p->setEnabled(true);
        $project = new Project();
        $project->setApiToken('588067ab677935266b318d6e7e6ff45f');

        $this->object->fetchProject($project);
        // Test hydrate object
        $this->assertEquals($p->getProvider(), $project->getProvider());
        $this->assertEquals($p->getProjectType(), $project->getProjectType());
        $this->assertEquals($p->getSourceType(), $project->getSourceType());
        $this->assertEquals($p->getSourceUrl(), $project->getSourceUrl());
        $this->assertEquals($p->getEnabled(), $project->getEnabled());
        $this->assertEquals($p->getCreatedAt(), $project->getCreatedAt());
        $this->assertTrue(sizeof($project->getBuilds()) == $project->getBuildsCount());
    }
}
