<?php
class Jvs_Meeting0202_Model_Observer
{
    /**
     * Redirect to base url when hitting "/home"
     *
     * @param  Varien_Event_Observer $observer
     * @return void
     */
    public function redirectToHomeUrl(Varien_Event_Observer $observer)
    {
        if ($observer->getEvent()->getControllerAction()->getRequest()->getRequestString() === '/home') {
            $observer->getControllerAction()->getResponse()->setRedirect('/');
        }
    }
}