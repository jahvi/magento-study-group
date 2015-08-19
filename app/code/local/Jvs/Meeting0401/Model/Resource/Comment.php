<?php
class Jvs_Meeting0401_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('meeting0401/comment', 'comment_id');
    }

    /**
     * Process comment data before saving
     *
     * @param Mage_Core_Model_Abstract $object
     * @return Mage_Cms_Model_Resource_Page
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
        // modify create / update dates
        if ($object->isObjectNew() && !$object->hasCreationTime()) {
            $object->setCreatedAt(Mage::getSingleton('core/date')->gmtDate());
        }

        $object->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());

        $session = Mage::getSingleton('core/session');

        $object->setPathUrl($session->getRefererUrl());

        return parent::_beforeSave($object);
    }
}