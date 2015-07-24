<?php
require_once Mage::getModuleDir('controllers', 'Mage_Customer') . DS . 'AccountController.php';

class Jvs_Meeting0204_AccountController extends Mage_Customer_AccountController
{
    /**
     * Customer login form page
     */
    public function loginAction()
    {
        $session = $this->_getSession();

        // Set women category as before URL
        $categoryUrl = Mage::getModel('catalog/category')->load(4)->getUrl();
        $session->setBeforeAuthUrl($categoryUrl);

        parent::loginAction();
    }
}