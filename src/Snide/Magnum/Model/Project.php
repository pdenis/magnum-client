<?php

namespace Snide\Magnum\Model;

/**
 * Class Project
 *
 * @author Pascal DENIS <pascal.denis@businessdecision.com>
 */
class Project
{
    /**
     * Project ID
     *
     * @var string
     */
    protected $id;

    /**
     * Project name
     *
     * @var string
     */
    protected $name;

    /**
     * Source versioning type
     *
     * @var string
     */
    protected $sourceType;

    /**
     * Source versioning URL
     *
     * @var string
     */
    protected $sourceUrl;

    /**
     * Project status
     *
     * @var boolean
     */
    protected $enabled;

    /**
     * Buids count
     *
     * @var int
     */
    protected $buildsCount;

    /**
     * Subscribers count
     *
     * @var int
     */
    protected $subscribersCount;

    /**
     * Created date
     *
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * Updated date
     *
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Builds list
     *
     * @var array
     */
    protected $builds;

    /**
     * Project API token
     *
     * @var string
     */
    protected $apiToken;

    /**
     * Versioning provider
     *
     * @var string
     */
    protected $provider;

    /**
     * Project language
     *
     * @var string
     */
    protected $projectType;

    /**
     * Failed builds count
     *
     * @var int
     */
    protected $failedBuildsCount;

    /**
     * Last build date
     *
     * @var \DateTime
     */
    protected $lastBuildAt;

    /**
     * @param int $failedBuildsCount
     */
    public function setFailedBuildsCount($failedBuildsCount)
    {
        $this->failedBuildsCount = $failedBuildsCount;
    }

    /**
     * @return int
     */
    public function getFailedBuildsCount()
    {
        return $this->failedBuildsCount;
    }

    /**
     * @param \DateTime $lastBuildAt
     */
    public function setLastBuildAt($lastBuildAt)
    {
        if(!is_object($lastBuildAt)) {
            $this->lastBuildAt = new \DateTime($lastBuildAt);
        }else {
            $this->lastBuildAt = $lastBuildAt;
        }
    }

    /**
     * @return \DateTime
     */
    public function getLastBuildAt()
    {
        return $this->lastBuildAt;
    }

    /**
     * @param string $projectType
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;
    }

    /**
     * @return string
     */
    public function getProjectType()
    {
        return $this->projectType;
    }

    /**
     * @param string $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param string $apiToken
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }

    /**
     * @param int $buildsCount
     */
    public function setBuildsCount($buildsCount)
    {
        $this->buildsCount = $buildsCount;
    }

    /**
     * @return int
     */
    public function getBuildsCount()
    {
        return $this->buildsCount;
    }

    /**
     * @param \DateTime $createdAt
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
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $sourceType
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
    }

    /**
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * @param string $sourceUrl
     */
    public function setSourceUrl($sourceUrl)
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * @param int $subscribersCount
     */
    public function setSubscribersCount($subscribersCount)
    {
        $this->subscribersCount = $subscribersCount;
    }

    /**
     * @return int
     */
    public function getSubscribersCount()
    {
        return $this->subscribersCount;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        if(!is_object($updatedAt)) {
            $this->updatedAt = new \DateTime($updatedAt);
        }else {
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

    /**
     * Add build to the list
     *
     * @param Build $build
     */
    public function addBuild(Build $build)
    {
        $this->getBuilds();
        $build->setProject($this);
        $this->builds[$build->getId()] = $build;
    }

    /**
     * Remove build from the list
     *
     * @param Build $build
     */
    public function removeBuild(Build $build)
    {
        if(isset($this->builds[$build->getId()])) {
            unset($this->builds[$build->getId()]);
        }
    }

    /**
     * Get builds
     *
     * @return array
     */
    public function getBuilds()
    {
        if(!is_array($this->builds)) {
            $this->builds = array();
        }

        return $this->builds;
    }

    /**
     * Set builds
     *
     * @param array $builds
     */
    public function setBuilds(array $builds = array())
    {
        $this->builds = $builds;
    }
}
