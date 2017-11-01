<?php
namespace Ticketpark\SaferpayJson\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Message\Request;
use Ticketpark\SaferpayJson\Container\RegisterAlias;

/**
 * Class AuthorizeRequest
 * @package Ticketpark\SaferpayJson\Transaction
 */
class AuthorizeRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Authorize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\AuthorizeResponse';

    /**
     * @var string
     * @SerializedName("Token")
     * @Type("string")
     */
    protected $token;

    /**
     * @var RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

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
     * @return RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param RegisterAlias $registerAlias
     *
     * @return self
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }
}
