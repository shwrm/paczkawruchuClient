<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("NewDataSet")
 */
class DropPointZipCodeList
{
    /**
     * @JMS\XmlList(inline = true, entry = "AllRUCHZipcode")
     * @JMS\Type("array<mirolabs\ruch\client\Type\DropPointZipcode>")
     * @var array
     */
    private $list = [];


    public function getList()
    {
        return $this->list;
    }

    public function setList($list)
    {
        $this->list = $list;
    }
}