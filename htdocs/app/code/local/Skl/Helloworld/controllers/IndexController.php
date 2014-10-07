<?php

class Skl_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function paramsAction()
    {
        echo '<dl>';
        foreach ($this->getRequest()->getParams() as $key => $value) {
            echo '<dt><strong>Param: </strong>' . $key . '</dt>';
            echo '<dd><strong>Value: </strong>' . $value . '</dd>';
        }
        echo '</dl>';
    }
}
