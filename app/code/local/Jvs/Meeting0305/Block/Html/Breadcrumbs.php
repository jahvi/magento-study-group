<?php
class Jvs_Meeting0305_Block_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    public function _construct()
    {
        $this->addCrumb('google', array(
            'label' => $this->__('Google'),
            'link'  => 'http://www.google.com',
            'first' => true,
        ));
    }
}
