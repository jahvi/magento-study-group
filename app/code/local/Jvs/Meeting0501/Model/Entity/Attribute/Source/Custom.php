<?php
class Jvs_Meeting0501_Model_Entity_Attribute_Source_Custom extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{

    protected $_optionsDefault = array();

    public function getAllOptions()
    {
        if (empty($this->_optionsDefault)) {
            $this->_optionsDefault = array(
                array(
                    'label' => 'Option 1',
                    'value' => 'option-1'
                ),
                array(
                    'label' => 'Option 2',
                    'value' => 'option-2'
                ),
            );
        }
        return $this->_optionsDefault;
    }
}