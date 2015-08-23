<?php

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$installer->addAttribute('customer', 'meeting0501_custom', array(
    'type'     => 'int',
    'input'    => 'select',
    'label'    => 'Choose',
    'required' => false,
    'backend'  => 'meeting0501/entity_attribute_source_custom',
    'source'   => 'meeting0501/entity_attribute_backend_custom',
));

$installer->endSetup();