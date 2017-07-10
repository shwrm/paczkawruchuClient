<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("AllRUCHLocation")
 */
class DropPoint
{
    /**
     * @JMS\SerializedName("DestinationCode")
     * @JMS\Type("string")
     * @var string
     */
    private $destinationCode;

    /**
     * @JMS\SerializedName("StreetName")
     * @JMS\Type("string")
     * @var string
     */
    private $streetName;

        /**
     * @JMS\SerializedName("City")
     * @JMS\Type("string")
     * @var string
     */
    private $city;

    /**
     * @JMS\SerializedName("District")
     * @JMS\Type("string")
     * @var string
     */
    private $district;

    /**
     * @JMS\SerializedName("Longitude")
     * @JMS\Type("double")
     * @var double
     */
    private $longitude;

    /**
     * @JMS\SerializedName("Latitude")
     * @JMS\Type("double")
     * @var double
     */
    private $latitude;

    /**
     * @JMS\SerializedName("Province")
     * @JMS\Type("string")
     * @var string
     */
    private $province;

    /**
     * @JMS\SerializedName("CashOnDelivery")
     * @JMS\Type("boolean")
     * @var boolean
     */
    private $cashOnDelivery;

    /**
     * @JMS\SerializedName("OpeningHours")
     * @JMS\Type("string")
     * @var string
     */
    private $openingHours;


    /**
     * @JMS\SerializedName("Location")
     * @JMS\Type("string")
     * @var string
     */
    private $location;

    /**
     * @JMS\SerializedName("PSD")
     * @JMS\Type("integer")
     * @var integer
     */
    private $psd;

    /**
     * @JMS\SerializedName("Available")
     * @JMS\Type("string")
     * @var string
     */
    private $available;

    /**
     * @JMS\SerializedName("PointType")
     * @JMS\Type("string")
     * @var string
     */
    private $pointType;

    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getProvince()
    {
        return $this->province;
    }

    public function getCashOnDelivery()
    {
        return $this->cashOnDelivery;
    }

    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPsd()
    {
        return $this->psd;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function getPointType()
    {
        return $this->pointType;
    }

    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function setProvince($province)
    {
        $this->province = $province;
    }

    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
    }

    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setPsd($psd)
    {
        $this->psd = $psd;
    }

    public function setAvailable($available)
    {
        $this->available = $available;
    }

    public function setPointType($pointType)
    {
        $this->pointType = $pointType;
    }
}