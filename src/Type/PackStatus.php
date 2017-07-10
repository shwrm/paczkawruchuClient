<?php
namespace mirolabs\ruch\client\Type;

use mirolabs\ruch\client\Configuration;

class PackStatus
{

    protected $packCode;

    protected $phoneNumber;

    public function getPackCode()
    {
        return $this->packCode;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPackCode($packCode)
    {
        $this->packCode = $packCode;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    

    public function toArray(Configuration $configuration)
    {
        $data = $configuration->getAuthData();
        foreach($this as $filed => $value) {
            if (!is_null($value)) {
                $data[ucfirst($filed)] = $value;
            }
        }
        return $data;
    }
}