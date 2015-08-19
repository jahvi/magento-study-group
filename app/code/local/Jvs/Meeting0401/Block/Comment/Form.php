<?php
class Jvs_Meeting0401_Block_Comment_Form extends Mage_Core_Block_Template
{

    public function getAction()
    {
        return Mage::getUrl('meeting0401/comment/post', array('_secure' => $this->_isSecure()));
    }

}