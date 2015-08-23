<?php
class Jvs_Meeting0501_Model_Entity_Attribute_Source_Select extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    protected $_optionsDefault = array();

    public function getAllOptions()
    {
        if (empty($this->_optionsDefault)) {
            $this->_optionsDefault = array(
                array(
                    'label' => 'Option 1',
                    'value' => 1
                ),
                array(
                    'label' => 'Option 2',
                    'value' => 2
                ),
            );
        }
        return $this->_optionsDefault;
    }

    public function getFlatColums()
   {
       $attributeCode = $this->getAttribute()->getAttributeCode();
       $column = array(
           'unsigned'  => false,
           'default'   => null,
           'extra'     => null
       );

       if (Mage::helper('core')->useDbCompatibleMode()) {
           $column['type']     = 'INT';
           $column['is_null']  = true;
       } else {
           $column['type']     = Varien_Db_Ddl_Table::TYPE_INTEGER;
           $column['nullable'] = true;
           $column['comment']  = $attributeCode . ' column';
       }

       return array($attributeCode => $column);
   }

   public function getFlatUpdateSelect($store)
   {
       return Mage::getResourceModel('eav/entity_attribute')
           ->getFlatUpdateSelect($this->getAttribute(), $store);
   }
}