<?php

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Redirect
 * @package Ticketpark\SaferpayJson\Container
 */
class Redirect
{
    /**
     * @var string
     * @SerializedName("RedirectUrl")
     * @Type("string")
     */
    protected $redirectUrl;

    /**
     * @var bool
     * @SerializedName("PaymentMeansRequired")
     * @Type("boolean")
     */
    protected $paymentMeansRequired;

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentMeansRequired()
    {
        return $this->paymentMeansRequired;
    }

    /**
     * @param bool $paymentMeansRequired
     *
     * @return self
     */
    public function setPaymentMeansRequired($paymentMeansRequired)
    {
        $this->paymentMeansRequired = $paymentMeansRequired;

        return $this;
    }
}
