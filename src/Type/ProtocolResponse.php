<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;


/**
 * @JMS\XmlRoot("Protocol")
 */
class ProtocolResponse
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
     * @JMS\SerializedName("ProtocolCode")
     * @JMS\Type("string")
     * @var string
     */
    private $protocolCode;


    /**
     * @JMS\SerializedName("PackCodeRUCH")
     * @JMS\Type("string")
     * @var string
     */
    private $code;


    /**
     * @JMS\SerializedName("DATA_MOD")
     * @JMS\Type("string")
     * @var string
     */
    private $modified;

        /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @var string
     */
    private $status;

    /**
     * @JMS\SerializedName("status_opis")
     * @JMS\Type("string")
     * @var string
     */
    private $description;


    /**
     * @JMS\SerializedName("file")
     * @JMS\Type("string")
     * @var string
     */
    private $fileData;

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function getProtocolCode()
    {
        return $this->protocolCode;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function setProtocolCode($protocolCode)
    {
        $this->protocolCode = $protocolCode;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFileData()
    {
        return $this->fileData;
    }

    public function setFileData($fileData)
    {
        $this->fileData = $fileData;
    }



}