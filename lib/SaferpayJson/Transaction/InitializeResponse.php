<?php
namespace Ticketpark\SaferpayJson\Transaction;

use Ticketpark\SaferpayJson\Container\Redirect;
use Ticketpark\SaferpayJson\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class InitializeResponse
 * @package Ticketpark\SaferpayJson\Transaction
 */
class InitializeResponse extends Response
{
    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    protected $token;

    /**
     * @var \DateTime
     * @SerializedName("Expiration")
     * @Type("string")
     */
    protected $expiration;

    /**
     * @var bool
     * @SerializedName("LiabilityShift")
     * @Type("boolean")
     */
    protected $liabilityShift;

    /**
     * @var bool
     * @SerializedName("RedirectRequired")
     * @Type("boolean")
     */
    protected $redirectRequired;

    /**
     * @var Redirect
     * @SerializedName("Redirect")
     * @Type("Ticketpark\SaferpayJson\Container\Redirect")
     */
    protected $redirect;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param \DateTime $expiration
     * @return self
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * @param boolean $liabilityShift
     * @return self
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRedirectRequired()
    {
        return $this->redirectRequired;
    }

    /**
     * @param bool $redirectRequired
     *
     * @return self
     */
    public function setRedirectRequired($redirectRequired)
    {
        $this->redirectRequired = $redirectRequired;

        return $this;
    }

    /**
     * @param Redirect $redirect
     * @return self
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }

    /**
     * @return Redirect
     */
    public function getRedirect()
    {
        return $this->redirect;
    }
}
