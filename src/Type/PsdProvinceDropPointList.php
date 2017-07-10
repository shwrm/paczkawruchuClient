<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("NewDataSet")
 */
class PsdProvinceDropPointList
{
    /**
     * @JMS\XmlList(inline = true, entry = "PSDProvince")
     * @JMS\Type("array<mirolabs\ruch\client\Type\DropPoint>")
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