<?php
class Jvs_Meeting0307_Block_Widget_ColorPicker
    extends Mage_Core_Block_Abstract
    implements Mage_Widget_Block_Interface
{
    protected function _toHtml()
    {
        $image = $this->getData('image') ?: 'http://placehold.it/150x150';
        $borderColor = $this->getData('border_color') ?: 'FFFFFF';

        return '<div class="picker-image"><img style="border: 5px solid #' . $borderColor . '" src="' . $image . '"></div>';
    }
}