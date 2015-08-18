<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('meeting0401/comment'))
    ->addColumn('comment_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
    ), 'Comment ID')
    ->addColumn('comment', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable'  => false,
    ), 'Comment Text')
    ->setComment('Meeting Comment table');

$installer->getConnection()->createTable($table);

$installer->endSetup();