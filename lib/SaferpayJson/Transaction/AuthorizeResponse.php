<?php
namespace Ticketpark\SaferpayJson\Transaction;

use Ticketpark\SaferpayJson\Container;
use Ticketpark\SaferpayJson\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class AuthorizeResponse
 * @package Ticketpark\SaferpayJson\Transaction
 */
class AuthorizeResponse extends Response
{
    /**
     * @var Container\Transaction
     * @SerializedName("Transaction")
     * @Type("Ticketpark\SaferpayJson\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Ticketpark\SaferpayJson\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Container\RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Ticketpark\SaferpayJson\Container\RegistrationResult")
     */
    protected $registrationResult;

    /**
     * @var Container\ThreeDs
     * @SerializedName("ThreeDs")
     * @Type("Ticketpark\SaferpayJson\Container\ThreeDs")
     */
    protected $threeDs;

    /**
     * @return Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Container\Transaction $transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Container\PaymentMeans $paymentMeans
     *
     * @return self
     */
    public function setPaymentMeans($paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return Container\RegistrationResult
     */
    public function getRegistrationResult()
    {
        return $this->registrationResult;
    }

    /**
     * @param Container\RegistrationResult $registrationResult
     *
     * @return self
     */
    public function setRegistrationResult($registrationResult)
    {
        $this->registrationResult = $registrationResult;

        return $this;
    }

    /**
     * @return Container\ThreeDs
     */
    public function getThreeDs()
    {
        return $this->threeDs;
    }

    /**
     * @param Container\ThreeDs $threeDs
     *
     * @return self
     */
    public function setThreeDs($threeDs)
    {
        $this->threeDs = $threeDs;

        return $this;
    }
}
