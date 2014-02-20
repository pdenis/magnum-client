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

use Snide\Magnum\Model\Project;

/**
 * Class Build
 *
 * @author Pascal DENIS <pascal.denis.75@gmail.com>
 */
class Build
{
    /**
     * Build ID
     *
     * @var string
     */
    protected $id;

    /**
     * Project
     *
     * @var Project
     */
    protected $project;

    /**
     * Build number
     *
     * @var int
     */
    protected $number;

    /**
     * Commit SHA
     *
     * @var string
     */
    protected $commit;

    /**
     * Commit author
     *
     * @var string
     */
    protected $author;

    /**
     * Committer
     *
     * @var string
     */
    protected $committer;

    /**
     * Commit message
     *
     * @var string
     */
    protected $message;

    /**
     * Branch name
     *
     * @var string
     */
    protected $branch;

    /**
     * Build state
     *
     * @var string
     */
    protected $state;

    /**
     * Started Date
     *
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * Finished Date
     *
     * @var \DateTime
     */
    protected $finishedAt;

    /**
     * Build result
     *
     * @var mixed
     */
    protected $result;

    /**
     * Created Date
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Updated Date
     *
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $branch
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param string $commit
     */
    public function setCommit($commit)
    {
        $this->commit = $commit;
    }

    /**
     * @return string
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param string $committer
     */
    public function setCommitter($committer)
    {
        $this->committer = $committer;
    }

    /**
     * @return string
     */
    public function getCommitter()
    {
        return $this->committer;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        if (!is_object($createdAt)) {
            $this->createdAt = new \DateTime($createdAt);
        } else {
            $this->createdAt = $createdAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $finishedAt
     */
    public function setFinishedAt($finishedAt)
    {
        if (!is_object($finishedAt)) {
            $this->finishedAt = new \DateTime($finishedAt);
        } else {
            $this->finishedAt = $finishedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param \Snide\Magnum\Model\Project $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return \Snide\Magnum\Model\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        if (!is_object($startedAt)) {
            $this->startedAt = new \DateTime($startedAt);
        } else {
            $this->startedAt = $startedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        if (!is_object($updatedAt)) {
            $this->updatedAt = new \DateTime($updatedAt);
        } else {
            $this->updatedAt = $updatedAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
