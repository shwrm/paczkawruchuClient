<?php
namespace mirolabs\ruch\client\Type;

use mirolabs\ruch\client\Configuration;

class Protocol
{

    /**
     *
     * @var array
     */
    protected $parcels;

    public function getParcels()
    {
        return $this->parcels;
    }

    public function setParcels($parcels)
    {
        $this->parcels = $parcels;
    }



    public function toArray(Configuration $configuration)
    {
        $data = $configuration->getAuthData();
        $data['parcels'] = $this->parcels;
        return $data;
    }
}