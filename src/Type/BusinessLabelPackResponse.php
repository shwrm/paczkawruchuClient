<?php
namespace mirolabs\ruch\client\Type;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("GenerateLabelBusinessPack")
 */
class BusinessLabelPackResponse extends BusinessPackResponse
{
    /**
     * @JMS\SerializedName("FileData")
     * @JMS\Type("string")
     * @var string
     */
    private $fileData;

    public function getFileData()
    {
        return $this->fileData;
    }

    public function setFileData($fileData)
    {
        $this->fileData = $fileData;
    }




}