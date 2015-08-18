<?php
class Jvs_Meeting0401_Model_Resource_Comment extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('meeting0401/comment', 'comment_id');
    }
}