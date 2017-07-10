<?php
namespace mirolabs\ruch\client\Type;

use mirolabs\ruch\client\Configuration;

class BusinessPack
{
    /**
     * @var string kod POPeR (REQUIRED)15 char
     */
    protected $destinationCode;

    /**
     * @var string alternatywny kod POPeR 15 char
     */
    protected $alternativeDestinationCode;

    /**
     * @var string kod POPeR do zwrotu 15 char
     */
    protected $returnDestinationCode;

    /**
     * @var string wielkość paczki 10 char
     */
    protected $boxSize;

    /**
     * @var string wartość przesyłki (w groszach) 6 char
     */
    protected $packValue;

    /**
     * @var boolean paczka za pobraniem (true/false) boolean
     */
    protected $cashOnDelivery = false;

    /**
     * @var string kwota pobrania (w groszach) 6 char
     */
    protected $amountCashOnDelivery;

    /**
     * @var boolean ubezpieczenie paczki (true/false) boolean
     */
    protected $insurance = false;

    /**
     * @var string adres email odbiorcy 60 char
     */
    protected $eMail;

    /**
     * @var string imię odbiorcy 30 char
     */
    protected $firstName;

    /**
     * @var string nazwisko odbiorcy 30 char
     */
    protected $lastName;

    /**
     * @var string firma odbiorcy 70 char
     */
    protected $companyName;

    /**
     * @var string ulica z adresu odbiorcy 30 char
     */
    protected $streetName;

    /**
     * @var string numer budynku z adresu odbiorcy 10 char
     */
    protected $buildingNumber;

    /**
     * @var string numer mieszkania z adresu odbiorcy 10 char
     */
    protected $flatNumber;

    /**
     * @var string miasto z adresu odbiorcy 30 char
     */
    protected $city;

    /**
     * @var string kod pocztowy z adresu odbiorcy 6 char
     */
    protected $postCode;

    /**
     * @var string numer telefonu odbiorcy (REQUIRED) 9 char
     */
    protected $phoneNumber;

    /**
     * @var string adres email nadawcy (REQUIRED)60 char
     */
    protected $senderEMail;

    /**
     * @var string imię nadawcy (REQUIRED)30 char
     */
    protected $senderFirstName;

    /**
     * @var string nazwisko nadawcy (REQUIRED)30 char
     */
    protected $senderLastName;

    /**
     * @var string firma nadawcy 70 char
     */
    protected $senderCompanyName;

    /**
     * @var string ulica z adresu nadawcy (REQUIRED)30 char
     */
    protected $senderStreetName;

    /**
     * @var string numer budynku z adresu nadawcy (REQUIRED)10 char
     */
    protected $senderBuildingNumber;

    /**
     * @var string numer mieszkania z adresu nadawcy 10 char
     */
    protected $senderFlatNumber;

    /**
     * @var string miasto z adresu nadawcy (REQUIRED)30 char
     */
    protected $senderCity;

    /**
     * @var string kod pocztowy z adresu nadawcy (REQUIRED) 6 char
     */
    protected $senderPostCode;

    /**
     * @var string numer telefonu nadawcy (REQUIRED) 9 char
     */
    protected $senderPhoneNumber;

    /**
     * @var string nr zamówienia nadawcy 30 char
     */
    protected $senderOrders;

    /**
     * @var string adres email do zwrotu 60 char
     */
    protected $returnEMail;

    /**
     * @var string imię osoby do zwrotu 30 char
     */
    protected $returnFirstName;

    /**
     * @var string nazwisko osoby do zwrotu 30 char
     */
    protected $returnLastName;

    /**
     * @var string nazwa firm do zwrotu 70 char
     */
    protected $returnCompanyName;

    /**
     * @var string ulica z adresu do zwrotu 30 char
     */
    protected $returnStreetName;

    /**
     * @var string numer budynku z adresu do zwrotu 10 char
     */
    protected $returnBuildingNumber;

    /**
     * @var string numer mieszkania z adresu do zwrotu 10 char
     */
    protected $returnFlatNumber;

    /**
     * @var string miasto z adresu do zwrotu 30 char
     */
    protected $returnCity;

    /**
     * @var string kod pocztowy z adresu do zwrotu 6 char
     */
    protected $returnPostCode;

    /**
     * @var string numer telefonu do zwrotu 9 char
     */
    protected $returnPhoneNumber;

    /**
     * @var string wybór adresu do wydruku przy zwrocie
     * (1- adres nadania, 2 - adres zwrotu ) (REQUIRED) 1 char
     */
    protected $printAdress;

    /**
     * @var string - paczka zwrotna (T -jeśli zwrotna) 1 char
     */
    protected $returnPack;

    /**
     * @var string tytuł przelewu dla paczki za pobraniem 70 char
     */
    protected $transferDescription;

    /**
     * @var string możliwość nadania paczki zwrotnej (T -jeśli tak) 1 char
     */
    protected $returnAvailable;

    /**
     * @var string liczba paczek zwrotnych 1 char
     */
    protected $returnQuantity;



    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    public function getAlternativeDestinationCode()
    {
        return $this->alternativeDestinationCode;
    }

    public function getReturnDestinationCode()
    {
        return $this->returnDestinationCode;
    }

    public function getBoxSize()
    {
        return $this->boxSize;
    }

    public function getPackValue()
    {
        return $this->packValue;
    }

    public function getCashOnDelivery()
    {
        return $this->cashOnDelivery;
    }

    public function getAmountCashOnDelivery()
    {
        return $this->amountCashOnDelivery;
    }

    public function getInsurance()
    {
        return $this->insurance;
    }

    public function getEMail()
    {
        return $this->eMail;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    public function getFlatNumber()
    {
        return $this->flatNumber;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getSenderEMail()
    {
        return $this->senderEMail;
    }

    public function getSenderFirstName()
    {
        return $this->senderFirstName;
    }

    public function getSenderLastName()
    {
        return $this->senderLastName;
    }

    public function getSenderCompanyName()
    {
        return $this->senderCompanyName;
    }

    public function getSenderStreetName()
    {
        return $this->senderStreetName;
    }

    public function getSenderBuildingNumber()
    {
        return $this->senderBuildingNumber;
    }

    public function getSenderFlatNumber()
    {
        return $this->senderFlatNumber;
    }

    public function getSenderCity()
    {
        return $this->senderCity;
    }

    public function getSenderPostCode()
    {
        return $this->senderPostCode;
    }

    public function getSenderPhoneNumber()
    {
        return $this->senderPhoneNumber;
    }

    public function getSenderOrders()
    {
        return $this->senderOrders;
    }

    public function getReturnEMail()
    {
        return $this->returnEMail;
    }

    public function getReturnFirstName()
    {
        return $this->returnFirstName;
    }

    public function getReturnLastName()
    {
        return $this->returnLastName;
    }

    public function getReturnCompanyName()
    {
        return $this->returnCompanyName;
    }

    public function getReturnStreetName()
    {
        return $this->returnStreetName;
    }

    public function getReturnBuildingNumber()
    {
        return $this->returnBuildingNumber;
    }

    public function getReturnFlatNumber()
    {
        return $this->returnFlatNumber;
    }

    public function getReturnCity()
    {
        return $this->returnCity;
    }

    public function getReturnPostCode()
    {
        return $this->returnPostCode;
    }

    public function getReturnPhoneNumber()
    {
        return $this->returnPhoneNumber;
    }

    public function getPrintAdress()
    {
        return $this->printAdress;
    }

    public function getReturnPack()
    {
        return $this->returnPack;
    }

    public function getTransferDescription()
    {
        return $this->transferDescription;
    }

    public function getReturnAvailable()
    {
        return $this->returnAvailable;
    }

    public function getReturnQuantity()
    {
        return $this->returnQuantity;
    }

    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    public function setAlternativeDestinationCode($alternativeDestinationCode)
    {
        $this->alternativeDestinationCode = $alternativeDestinationCode;
    }

    public function setReturnDestinationCode($returnDestinationCode)
    {
        $this->returnDestinationCode = $returnDestinationCode;
    }

    public function setBoxSize($boxSize)
    {
        $this->boxSize = $boxSize;
    }

    public function setPackValue($packValue)
    {
        $this->packValue = $packValue;
    }

    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
    }

    public function setAmountCashOnDelivery($amountCashOnDelivery)
    {
        $this->amountCashOnDelivery = $amountCashOnDelivery;
    }

    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
    }

    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
    }

    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
    }

    public function setFlatNumber($flatNumber)
    {
        $this->flatNumber = $flatNumber;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function setSenderEMail($senderEMail)
    {
        $this->senderEMail = $senderEMail;
    }

    public function setSenderFirstName($senderFirstName)
    {
        $this->senderFirstName = $senderFirstName;
    }

    public function setSenderLastName($senderLastName)
    {
        $this->senderLastName = $senderLastName;
    }

    public function setSenderCompanyName($senderCompanyName)
    {
        $this->senderCompanyName = $senderCompanyName;
    }

    public function setSenderStreetName($senderStreetName)
    {
        $this->senderStreetName = $senderStreetName;
    }

    public function setSenderBuildingNumber($senderBuildingNumber)
    {
        $this->senderBuildingNumber = $senderBuildingNumber;
    }

    public function setSenderFlatNumber($senderFlatNumber)
    {
        $this->senderFlatNumber = $senderFlatNumber;
    }

    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
    }

    public function setSenderPostCode($senderPostCode)
    {
        $this->senderPostCode = $senderPostCode;
    }

    public function setSenderPhoneNumber($senderPhoneNumber)
    {
        $this->senderPhoneNumber = $senderPhoneNumber;
    }

    public function setSenderOrders($senderOrders)
    {
        $this->senderOrders = $senderOrders;
    }

    public function setReturnEMail($returnEMail)
    {
        $this->returnEMail = $returnEMail;
    }

    public function setReturnFirstName($returnFirstName)
    {
        $this->returnFirstName = $returnFirstName;
    }

    public function setReturnLastName($returnLastName)
    {
        $this->returnLastName = $returnLastName;
    }

    public function setReturnCompanyName($returnCompanyName)
    {
        $this->returnCompanyName = $returnCompanyName;
    }

    public function setReturnStreetName($returnStreetName)
    {
        $this->returnStreetName = $returnStreetName;
    }

    public function setReturnBuildingNumber($returnBuildingNumber)
    {
        $this->returnBuildingNumber = $returnBuildingNumber;
    }

    public function setReturnFlatNumber($returnFlatNumber)
    {
        $this->returnFlatNumber = $returnFlatNumber;
    }

    public function setReturnCity($returnCity)
    {
        $this->returnCity = $returnCity;
    }

    public function setReturnPostCode($returnPostCode)
    {
        $this->returnPostCode = $returnPostCode;
    }

    public function setReturnPhoneNumber($returnPhoneNumber)
    {
        $this->returnPhoneNumber = $returnPhoneNumber;
    }

    public function setPrintAdress($printAdress)
    {
        $this->printAdress = $printAdress;
    }

    public function setReturnPack($returnPack)
    {
        $this->returnPack = $returnPack;
    }

    public function setTransferDescription($transferDescription)
    {
        $this->transferDescription = $transferDescription;
    }

    public function setReturnAvailable($returnAvailable)
    {
        $this->returnAvailable = $returnAvailable;
    }

    public function setReturnQuantity($returnQuantity)
    {
        $this->returnQuantity = $returnQuantity;
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