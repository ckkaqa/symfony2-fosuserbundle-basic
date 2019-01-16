<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="github_id", type="string", length=255, nullable=true) */
    protected $github_id;

    /** @ORM\Column(name="github_access_token", type="string", length=255, nullable=true) */
    protected $github_access_token;

    /** @ORM\Column(name="facebook_id", type="string", length=255, nullable=true) */
    protected $facebook_id;

    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;

    /** @ORM\Column(name="googleplus_id", type="string", length=255, nullable=true) */
    protected $googleplus_id;

    /** @ORM\Column(name="googleplus_access_token", type="string", length=255, nullable=true) */
    protected $googleplus_access_token;

    /** @ORM\Column(name="stackexchange_id", type="string", length=255, nullable=true) */
    protected $stackexchange_id;

    /** @ORM\Column(name="stackexchange_access_token", type="string", length=255, nullable=true) */
    protected $stackexchange_access_token;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set githubId
     *
     * @param string $githubId
     *
     * @return User
     */
    public function setGithubId($githubId)
    {
        $this->github_id = $githubId;

        return $this;
    }

    /**
     * Get githubId
     *
     * @return string
     */
    public function getGithubId()
    {
        return $this->github_id;
    }

    /**
     * Set githubAccessToken
     *
     * @param string $githubAccessToken
     *
     * @return User
     */
    public function setGithubAccessToken($githubAccessToken)
    {
        $this->github_access_token = $githubAccessToken;

        return $this;
    }

    /**
     * Get githubAccessToken
     *
     * @return string
     */
    public function getGithubAccessToken()
    {
        return $this->github_access_token;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     *
     * @return User
     */
    public function setFacebookId($facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set facebookAccessToken
     *
     * @param string $facebookAccessToken
     *
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebook_access_token = $facebookAccessToken;

        return $this;
    }

    /**
     * Get facebookAccessToken
     *
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * Set googleplusId
     *
     * @param string $googleplusId
     *
     * @return User
     */
    public function setGoogleplusId($googleplusId)
    {
        $this->googleplus_id = $googleplusId;

        return $this;
    }

    /**
     * Get googleplusId
     *
     * @return string
     */
    public function getGoogleplusId()
    {
        return $this->googleplus_id;
    }

    /**
     * Set googleplusAccessToken
     *
     * @param string $googleplusAccessToken
     *
     * @return User
     */
    public function setGoogleplusAccessToken($googleplusAccessToken)
    {
        $this->googleplus_access_token = $googleplusAccessToken;

        return $this;
    }

    /**
     * Get googleplusAccessToken
     *
     * @return string
     */
    public function getGoogleplusAccessToken()
    {
        return $this->googleplus_access_token;
    }

    /**
     * Set stackexchangeId
     *
     * @param string $stackexchangeId
     *
     * @return User
     */
    public function setStackexchangeId($stackexchangeId)
    {
        $this->stackexchange_id = $stackexchangeId;

        return $this;
    }

    /**
     * Get stackexchangeId
     *
     * @return string
     */
    public function getStackexchangeId()
    {
        return $this->stackexchange_id;
    }

    /**
     * Set stackexchangeAccessToken
     *
     * @param string $stackexchangeAccessToken
     *
     * @return User
     */
    public function setStackexchangeAccessToken($stackexchangeAccessToken)
    {
        $this->stackexchange_access_token = $stackexchangeAccessToken;

        return $this;
    }

    /**
     * Get stackexchangeAccessToken
     *
     * @return string
     */
    public function getStackexchangeAccessToken()
    {
        return $this->stackexchange_access_token;
    }
}
