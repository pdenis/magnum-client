<?php

namespace Snide\Magnum;

use Snide\Magnum\Model\Build;
use Snide\Magnum\Model\User;
use Snide\Magnum\Model\Project;
use Snide\Magnum\Hydrator\SimpleHydrator;

/**
 * Class Client
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Client
{
    /**
     * Magnum CI API host
     *
     * @var string
     */
    protected $endpoint = 'https://magnum-ci.com';

    /**
     * Hydrate object from array  data
     *
     * @var SimpleHydrator
     */
    protected $hydrator;

    /**
     * Constructor
     *
     * @param SimpleHydrator $hydrator
     */
    public function __construct(SimpleHydrator $hydrator = null)
    {
        if(!$this->hydrator) {
            $this->hydrator = new Hydrator\SimpleHydrator();
        }else {
            $this->hydrator = $hydrator;
        }
    }

    /**
     * Fetch project into project instance
     *
     * @param Project $project
     * @param bool $withBuild (Indicate if builds should be retrieve
     * @return \Snide\Magnum\Model\Project
     */
    public function fetchProject(Project $project, $withBuild = true)
    {
        $response = $this->getResponse('/api/v1/project', array('token' => $project->getApiToken()));

        $project = $this->hydrate($project, $response);
        if(!$withBuild) {
            return $project;
        }

        return $this->fetchBuilds($project);
    }

    /**
     * Fetch builds into proejct instance
     *
     * @param Project $project
     * @return \Snide\Magnum\Model\Project
     */
    public function fetchBuilds(Project $project)
    {
        $response = $this->getResponse('/api/v1/project/builds', array('token' => $project->getApiToken()));
        if(is_array($response)) {
            foreach($response as $buildData) {
                $build = new Build();
                $project->addBuild($this->hydrate($build, $buildData));
            }
        }

        return $project;
    }

    /**
     * Fetch user into User instance
     *
     * @param User $user
     * @return mixed
     */
    public function fetchUser(User $user)
    {
        $response = $this->getResponse('/api/v1/profile', array('api_token' => $user->getApiToken()));

        return $this->hydrate($user, $response);
    }

    /**
     * Get Response from API
     * Response is an array (Result of json_decode)
     *
     * @param string $uri API URI
     * @param array $queryParams Query params
     * @return mixed
     */
    protected function getResponse($uri, array $queryParams = array())
    {
        $client = new \Guzzle\Http\Client($this->endpoint, array('ssl.certificate_authority' => false));

        $request = $client->get($uri, array(), array('query' => $queryParams));

        return $request->send()->json();
    }

    /**
     * Hydrate object with data
     *
     * @param mised $object An object
     * @param array $data data to inject
     * @return mixed
     */
    protected function hydrate($object, $data)
    {
        return $this->hydrator->hydrate($object, $data);
    }
}
