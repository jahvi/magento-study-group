<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$installer->getConnection()->addColumn($installer->getTable('meeting0401/comment'), 'path_url', array(
    'type'     => Varien_Db_Ddl_Table::TYPE_TEXT,
    'nullable' => false,
    'comment'  => 'Comment URL path'
));

$installer->getConnection()->addColumn($installer->getTable('meeting0401/comment'), 'created_at', array(
    'type'     => Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    'nullable' => false,
    'comment'  => 'Comment created time'
));

$installer->getConnection()->addColumn($installer->getTable('meeting0401/comment'), 'updated_at', array(
    'type'     => Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    'nullable' => false,
    'comment'  => 'Comment updated time'
));

$installer->endSetup();