<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;


/**
 * @JMS\XmlRoot("PackStatus")
 */
class PackStatusResponse
{
    /**
     * @JMS\SerializedName("PackCode")
     * @JMS\Type("string")
     * @var string
     */
    private $code;

    /**
     * @JMS\SerializedName("Trans")
     * @JMS\Type("string")
     * @var string
     */
    private $status;

    /**
     * @JMS\SerializedName("Trans_Des")
     * @JMS\Type("string")
     * @var string
     */
    private $description;

    /**
     * @JMS\SerializedName("Data")
     * @JMS\Type("string")
     * @var string
     */
    private $date;

    /**
     * @JMS\SerializedName("Destinstion")
     * @JMS\Type("string")
     * @var string
     */
    private $destination;



    public function getCode()
    {
        return $this->code;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }



}