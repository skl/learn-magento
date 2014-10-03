<?php

class Skl_Configviewer_Model_Observer
{
    const FLAG_SHOW_CONFIG = 'showConfig';
    const FLAG_SHOW_CONFIG_FORMAT = 'showConfigFormat';

    private $request;

    public function checkForConfigRequest($observer)
    {
        $this->request = $observer->getEvent()->getData('front')->getRequest();

        if ($this->request->{self::FLAG_SHOW_CONFIG} === 'true') {
            $this->setHeader();
            $this->outputConfig();
        }
    }

    public function setHeader()
    {
        $format = isset($this->request->{self::FLAG_SHOW_CONFIG_FORMAT}) ?
            $this->request->{self::FLAG_SHOW_CONFIG_FORMAT} : 'xml';

        switch ($format) {
            case 'text':
                header('Content-Type: text/plain');
                break;

            default:
                header('Content-Type: text/xml');
                break;
        }
    }

    private function outputConfig()
    {
        die(Mage::app()->getConfig()->getNode()->asXML());
    }
}
