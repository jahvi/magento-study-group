<?php
class Jvs_Meeting0401_Model_Resource_Comment_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('meeting0401/comment');
    }

    public function addPageFilter($currentPage = null)
    {
        if (!$currentPage) {
            $currentPage = Mage::helper('core/url')->getCurrentUrl();
        }

        $this->_select->where('path_url = ?', $currentPage);

        return $this;
    }
}