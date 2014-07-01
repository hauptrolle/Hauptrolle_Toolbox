<?php
class Hauptrolle_Toolbox_ToolController extends Mage_Core_Controller_Front_Action
{
    public function clearCacheAction()
    {
        Mage::app()->getCacheInstance()->flush();
        Mage::getSingleton('core/session')->addSuccess($this->__('Cache successfully cleared'));
        $this->_redirectReferer();
    }

    public function toggleTemplateHintsAction()
    {

        $storeId =  Mage::app()->getStore()->getStoreId();

        if(Mage::getStoreConfig('dev/debug/template_hints') == 0) {
            Mage::getModel('core/config')->saveConfig('dev/debug/template_hints', 1, 'stores', $storeId);
        }
        else {
            Mage::getModel('core/config')->saveConfig('dev/debug/template_hints', 0, 'stores', $storeId);
        }
        Mage::getConfig()->cleanCache();
        $this->_redirectReferer();
    }
}
