<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("AllRUCHZipcode")
 */

class DropPointZipcode extends DropPoint
{
    /**
     * @JMS\SerializedName("Zipcode")
     * @JMS\Type("string")
     * @var string
     */
    private $zipCode;


    function getZipCode()
    {
        return $this->zipCode;
    }

    function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

}