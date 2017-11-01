<?php
namespace Ticketpark\SaferpayJson\Transaction;

use Ticketpark\SaferpayJson\Message\Request;
use JMS\Serializer\Annotation\SerializedName;
use  Ticketpark\SaferpayJson\Container;

/**
 * Class InitializeRequest
 * @package Ticketpark\SaferpayJson\Transaction
 */
class InitializeRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Initialize';

    const RESPONSE_CLASS = 'Ticketpark\SaferpayJson\Transaction\InitializeResponse';

    /**
     * @var string
     * @SerializedName("TerminalId")
     */
    protected $terminalId;

    /**
     * @var Container\Payment
     * @SerializedName("Payment")
     */
    protected $payment;

    /**
     * @var Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var Container\Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @return Container\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Container\Payment $payment
     * @return InitializeRequest
     */
    public function setPayment(Container\Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @param string $terminalId
     * @return self
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    /**
     * @return Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param Container\ReturnUrls $returnUrls
     * @return self
     */
    public function setReturnUrls(Container\ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }

    /**
     * @return Container\Styling
     */
    public function getStyling()
    {
        return $this->styling;
    }

    /**
     * @param Container\Styling $styling
     * @return self
     */
    public function setStyling(Container\Styling $styling)
    {
        $this->styling = $styling;

        return $this;
    }
}
