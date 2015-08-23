<?php

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('catalog_product', 'meeting0501_choose', array(
    'type'     => 'int',
    'input'    => 'select',
    'label'    => 'Choose',
    'required' => false,
    'backend'  => 'eav/entity_attribute_source_table',
    'option'   => array(
        'values' => array(
            0 => 'Option 1',
            1 => 'Option 2',
            2 => 'Option 3',
            3 => 'Option 4',
        )
    )
));

$installer->endSetup();