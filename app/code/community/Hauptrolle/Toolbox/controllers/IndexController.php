<?php
class Hauptrolle_Toolbox_IndexController extends Mage_Core_Controller_Front_Action
{
    public function clearCacheAction()
    {
        Mage::app()->getCacheInstance()->flush();
        Mage::getSingleton('core/session')->addSuccess($this->__('Cache successfully cleared'));
        $this->_redirectReferer();
    }

}
