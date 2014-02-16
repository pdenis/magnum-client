<?php

namespace Snide\Magnum\Model;

/**
 * Class User
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class User
{

    /**
     * User ID
     *
     * @var string
     */
    protected $id;

    /**
     * Email
     *
     * @var string
     */
    protected $email;

    /**
     * Login
     *
     * @var string
     */
    protected $login;

    /**
     * Projects count
     *
     * @var int
     */
    protected $projects;

    /**
     * Time used by User
     * @var float
     */
    protected $timeUsed;

    /**
     * Time that user can use
     *
     * @var int
     */
    protected $timeQuota;

    /**
     * API User token
     * @var string
     */
    protected $apiToken;

    /**
     * User created date
     *
     * @var \DateTime
     */
    protected $createdAt;

    public function __construct()
    {}

    /**
     * @param mixed $apiToken
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * @return mixed
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        if(!is_object($createdAt)) {
            $this->createdAt = new \DateTime($createdAt);
        }else {
           $this->createdAt = $createdAt;
        }
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $projects
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
    }

    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * @param mixed $timeQuota
     */
    public function setTimeQuota($timeQuota)
    {
        $this->timeQuota = $timeQuota;
    }

    /**
     * @return mixed
     */
    public function getTimeQuota()
    {
        return $this->timeQuota;
    }

    /**
     * @param mixed $timeUsed
     */
    public function setTimeUsed($timeUsed)
    {
        $this->timeUsed = $timeUsed;
    }

    /**
     * @return mixed
     */
    public function getTimeUsed()
    {
        return $this->timeUsed;
    }
}
