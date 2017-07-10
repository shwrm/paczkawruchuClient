<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;


/**
 * @JMS\XmlRoot("GenerateBusinessPack")
 */
class BusinessPackResponse
{

    /**
     * @JMS\SerializedName("Err")
     * @JMS\Type("string")
     * @var string
     */
    private $errorCode;

    /**
     * @JMS\SerializedName("ErrDes")
     * @JMS\Type("string")
     * @var string
     */
    private $errorMessage;

    /**
     * @JMS\SerializedName("DestinationCode")
     * @JMS\Type("string")
     * @var string
     */
    private $destinationCode;

    /**
     * @JMS\SerializedName("DestinationId")
     * @JMS\Type("string")
     * @var string
     */
    private $destinationId;

    /**
     * @JMS\SerializedName("PackPrice")
     * @JMS\Type("integer")
     * @var integer
     */
    private $packPrice;

    /**
     * @JMS\SerializedName("PackPaid")
     * @JMS\Type("boolean")
     * @var boolean
     */
    private $packPaid;

    /**
     * @JMS\SerializedName("PackCode_RUCH")
     * @JMS\Type("string")
     * @var string
     */
    private $code;

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    public function getDestinationId()
    {
        return $this->destinationId;
    }

    public function getPackPrice()
    {
        return $this->packPrice;
    }

    public function getPackPaid()
    {
        return $this->packPaid;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    public function setDestinationId($destinationId)
    {
        $this->destinationId = $destinationId;
    }

    public function setPackPrice($packPrice)
    {
        $this->packPrice = $packPrice;
    }

    public function setPackPaid($packPaid)
    {
        $this->packPaid = $packPaid;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }



}