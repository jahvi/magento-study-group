<?php

/* @var $installer Mage_Eav_Model_Entity_Setup */
$installer = $this;

$installer->startSetup();

$setup = Mage::getModel('customer/entity_setup', 'core_setup');

$setup->removeAttribute('customer', 'meeting0501_custom_multi');

$setup->addAttribute('customer', 'meeting0501_custom', array(
    'type'     => 'text',
    'input'    => 'multiselect',
    'label'    => 'Choose',
    'required' => false,
    'backend'  => 'meeting0501/entity_attribute_backend_custom',
    'source'   => 'meeting0501/entity_attribute_source_custom',
));

Mage::getSingleton('eav/config')
    ->getAttribute('customer', 'meeting0501_custom')
    ->setData('used_in_forms', array(
        'adminhtml_customer',
        'customer_account_create',
        'customer_account_edit',
        'checkout_register'
    ))->save();

$installer->endSetup();