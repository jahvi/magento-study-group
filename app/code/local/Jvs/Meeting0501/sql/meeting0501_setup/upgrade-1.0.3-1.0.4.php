<?php

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$setup = Mage::getModel('customer/entity_setup', 'core_setup');
$setup->removeAttribute('customer', 'meeting0501_custom_field');

$installer->endSetup();
