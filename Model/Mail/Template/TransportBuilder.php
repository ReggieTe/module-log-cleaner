<?php
namespace Future\LogCleaner\Model\Mail\Template;
use \Zend_Mime;

class TransportBuilder extends \Magento\Framework\Mail\Template\TransportBuilder
{
    public function addAttachment($body,
    $mimeType = Zend_Mime::TYPE_OCTETSTREAM,
    $disposition = Zend_Mime::DISPOSITION_ATTACHMENT,
    $encoding = Zend_Mime::ENCODING_BASE64,
    $filename = "logs.zip") {         
        $this->message->createAttachment($body, $mimeType, $disposition,$encoding, $filename);
        return $this;
    }
}