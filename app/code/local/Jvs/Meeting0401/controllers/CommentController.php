<?php
class Jvs_Meeting0401_CommentController extends Mage_Core_Controller_Front_Action
{
    public function postAction()
    {
        if (!$this->_validateFormKey()) {
            $this->_redirectReferer();
            return;
        }

        $commentData = $this->getRequest()->getPost('comment');

        $session = Mage::getSingleton('core/session');
        $session->setRefererUrl($this->_getRefererUrl());

        if (!empty($commentData)) {
            try {
                $comment = Mage::getModel('meeting0401/comment')
                    ->setComment($commentData)
                    ->save();

                $session->addSuccess($this->__('Your comment has been posted.'));
            }
            catch (Exception $e) {
                $session->setFormData(array('comment' => $commentData));
                $session->addError($this->__('Unable to post the comment.'));
            }
        }

        $this->_redirectReferer();
    }
}