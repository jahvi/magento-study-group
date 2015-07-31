<?php
class Jvs_Meeting0304_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('jvs_meeting0304');
        $this->renderLayout();
    }
}