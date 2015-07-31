<?php
class Jvs_Meeting0307_Block_Widget_Picker
    extends Mage_Core_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $element->addClass('color');

        $html = '<tr>' .
                    '<td class="label"><label for="' . $element->getId() . '">Color</label></td>' .
                    '<td class="value">' .
                        $element->getElementHtml() .
                        '<script type="text/javascript">' .
                            'jscolor.init();' .
                        '</script>' .
                    '</td>' .
                '</tr>';

        return $html;
    }
}