<?php
namespace mirolabs\ruch\client;

class Converter
{
    /**
     *
     * @param string $response
     * @param string $responseType
     * @param string $returnType
     * @return mixed
     */
    public function execute($response, $responseType, $returnType) {
        $method = 'build' . $responseType;
        return $this->{$method}($response, $returnType);
    }


    private function deserialize($xml, $type)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        return $serializer->deserialize($xml, $type, 'xml');
    }


    private function buildNewDataSet($response, $returnType)
    {
        $xml = str_replace('xmlns=""', '', simplexml_load_string($response)->NewDataSet->asXML());
        if (empty($xml)) {
            $xml = "<NewDataSet></NewDataSet>";
        }
        return $this->deserialize($xml, $returnType);
    }

    private function buildObject($response, $returnType)
    {
        $children = simplexml_load_string($response)->NewDataSet->children();
        if (count($children) > 0) {
            $xml = $children[0]->asXML();
            return $this->deserialize($xml, $returnType);
        }
        throw new Exception('Invalid response');
    }

}