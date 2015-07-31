<?php
class Jvs_Meeting0302_Helper_Url extends Mage_Core_Helper_Abstract
{
    public function getCheckoutUrl()
    {
        return $this->_getUrl('checkout');
    }
}