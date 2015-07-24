<?php
class Jvs_Meeting0205_Model_Observer
{
    /**
     * Create dynamic rewirte of payment/data if ccsave option is enabled
     * and the Magento version is older than 1.4
     *
     * @param  Varien_Event_Observer $observer
     * @return void
     */
    public function checkPaymentAndMagentoVersion(Varien_Event_Observer $observer)
    {
        if ((float) Mage::getVersion() > 1.4 && Mage::getStoreConfig('payment/ccsave/active')) {
            Mage::getConfig()->setNode('global/helpers/payment/rewrite/data', 'Jvs_Meeting0205_Helper_Data');
        }
    }
}