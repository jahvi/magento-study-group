<?php

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_product', 'meeting0501_select', array(
    'type'       => 'int',
    'input'      => 'select',
    'label'      => 'Choose',
    'required'   => false,
    'filterable' => true,
    'backend'    => 'eav/entity_attribute_source_table',
    'source'     => 'meeting0501/entity_attribute_source_select'
));

$installer->endSetup();