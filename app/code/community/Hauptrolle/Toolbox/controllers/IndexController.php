<?php
class Hauptrolle_Toolbox_IndexController extends Mage_Core_Controller_Front_Action
{
    public function clearCacheAction()
    {
        Mage::app()->getCacheInstance()->flush();
        Mage::getSingleton('core/session')->addSuccess($this->__('Cache successfully cleared'));
        $this->_redirectReferer();
    }

    public function toggleTemplateHintsAction()
    {
        if(Mage::getStoreConfig('dev/debug/template_hints') == 0) {
            $write = Mage::getSingleton('core/resource')->getConnection('core_write');
            $write->query("UPDATE core_config_data SET value = 1 WHERE scope='websites' AND scope_id = 1 AND path ='dev/debug/template_hints'");
            Mage::app()->getCacheInstance()->flush();
            $this->_redirectReferer();
        }
        else {
            $write = Mage::getSingleton('core/resource')->getConnection('core_write');
            $write->query("UPDATE core_config_data SET value = 0 WHERE scope='websites' AND scope_id = 1 AND path ='dev/debug/template_hints'");
            Mage::app()->getCacheInstance()->flush();
            $this->_redirectReferer();
        }

    }
}
