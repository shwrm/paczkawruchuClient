<?php
namespace mirolabs\ruch\client;

class Client
{

    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     *
     * @var Converter;
     */
    private $converter;

    public function __construct($partnerId, $partnerKey, $environment = 'prod')
    {
        $this->configuration = new Configuration($partnerId, $partnerKey, $environment);
        $this->converter = new Converter();
    }


    /**
     * @return \mirolabs\ruch\client\Type\DropPointList
     */
    public function getDropPoints()
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GiveMeAllRUCHLocation($this->configuration->getAuthData())
                ->GiveMeAllRUCHLocationResult->any,
            'NewDataSet',
            'mirolabs\ruch\client\Type\DropPointList'
        );
    }

    /**
     * @return \mirolabs\ruch\client\Type\DropPointZipCodeList
     */
    public function getDropPointsWithZipcode()
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GiveMeAllRUCHZipcode($this->configuration->getAuthData())
                ->GiveMeAllRUCHZipcodeResult->any,
            'NewDataSet',
            'mirolabs\ruch\client\Type\DropPointZipCodeList'
        );
    }


    /**
     * @return \mirolabs\ruch\client\Type\DropPointZipCodeList
     */
    public function getAllPsdDropPoints()
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GiveMeAllPSDLocation()
                ->GiveMeAllPSDLocationResult->any,
            'NewDataSet',
            'mirolabs\ruch\client\Type\PsdDropPointList'
        );
    }


    /**
     * @param string $province
     * @return \mirolabs\ruch\client\Type\DropPointZipCodeList
     */
    public function findPsdDropPointsByProvince($province)
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GiveMePSDProvince(['Province' => $province])
                ->GiveMePSDProvinceResult->any,
            'NewDataSet',
            'mirolabs\ruch\client\Type\PsdProvinceDropPointList'
        );
    }



    public function generateBusinessPack(Type\BusinessPack $businessPack)
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GenerateBusinessPack($businessPack->toArray($this->configuration))
                ->GenerateBusinessPackResult->any,
            'Object',
            'mirolabs\ruch\client\Type\BusinessPackResponse'
        );
    }

    public function generateLabelBusinessPack(Type\BusinessPack $businessPack)
    {
        $soapResponse = $this->getSoapClient()
                ->GenerateLabelBusinessPack($businessPack->toArray($this->configuration));
        $result = $this->converter->execute(
            $soapResponse->GenerateLabelBusinessPackResult->any,
            'Object',
            'mirolabs\ruch\client\Type\BusinessLabelPackResponse'
        );

        if (isset($soapResponse->LabelData)) {
            $result->setFileData($soapResponse->LabelData);
        }
        return $result;
    }



    public function getPackStatus(Type\PackStatus $status)
    {
        return $this->converter->execute(
            $this->getSoapClient()
                ->GiveMePackStatus($status->toArray($this->configuration))
                ->GiveMePackStatusResult->any,
            'Object',
            'mirolabs\ruch\client\Type\PackStatusResponse'
        );
    }

    public function generateProtocol(Type\Protocol $protocol)
    {
        $soapResponse = $this->getSoapClient()
                ->GenerateProtocol($protocol->toArray($this->configuration));
        $result = $this->converter->execute(
            $soapResponse->GenerateProtocolResult->any,
            'Object',
            'mirolabs\ruch\client\Type\ProtocolResponse'
        );
        $result->setFileData($soapResponse->LabelData);
        return $result;
    }





    private function getSoapClient()
    {
        $context = stream_context_create([
            'ssl' => [
                // set some SSL/TLS specific options
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);


        if (is_null($this->soapClient)) {
            $this->soapClient = new \SoapClient($this->configuration->getWsdl(),['trace' => 1, 'stream_context' => $context]);
        }
        return $this->soapClient;
    }



    
}