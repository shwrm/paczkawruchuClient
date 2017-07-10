<?php
namespace mirolabs\ruch\client;

use Doctrine\Common\Annotations\AnnotationRegistry;

class Configuration
{
    const WSDL = 'https://api.paczkawruchu.pl/WebServicePwRProd/WebServicePwR.asmx?wsdl';
    const WSDL_TEST = 'https://api-test.paczkawruchu.pl/WebServicePwR/WebServicePwRTest.asmx?WSDL';


    /**
     * @var string
     */
    private $partnerId;

    /**
     * @var string
     */
    private $partnerKey;

    /**
     *
     * @var string
     */
    private $environment;

    /**
     *
     * @param string $partnerId
     * @param string $partnerKey
     * @param string $environment
     */
    public function __construct($partnerId, $partnerKey, $environment = 'prod')
    {
        $this->partnerId   = $partnerId;
        $this->partnerKey  = $partnerKey;
        $this->environment = $environment;

        $reflection = new \ReflectionClass('\JMS\Serializer\Annotation\Type');
        $path       = str_replace('/JMS/Serializer/Annotation/Type.php', '', $reflection->getFileName());
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', $path);
    }


    public function getWsdl()
    {
        return $this->environment == "prod" ? self::WSDL : self::WSDL_TEST;
    }

    public function getAuthData()
    {
        return [
            'PartnerID' =>  $this->partnerId,
            'PartnerKey' => $this->partnerKey
        ];
    }
    
}