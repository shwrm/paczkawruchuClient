<?php
namespace mirolabs\ruch\client\Type;

use mirolabs\ruch\client\Configuration;

class BusinessLabelPack extends BusinessPack
{
    /**
     *
     * @var wybór etykiety do wydruku
     * (1- pełny adres, 2 - adres anonimowy)
     */
    protected $printType;

    public function getPrintType()
    {
        return $this->printType;
    }

    public function setPrintType($printType)
    {
        $this->printType = $printType;
    }


}