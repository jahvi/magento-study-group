# Magento Study Group Excercises

## Meeting 1

Introductions and objectives.

## Meeting 2

- Rewrite the `sales/order` model to add the customer group model as an email template variable in the `sendNewOrderEmail()`
method, so the group code can be added to the email using `{{var customer_group.getCode()}}`.
  - Get all groups and filter them by customer group id, if it's not in array THEN load group. (Not sure why not just load them all the time and skip the first step)
- Create an observer that redirects the visitor to the base URL if the CMS home page URL key is accessed directly (i.e. /home -> /).
  - Observe `controller_action_predispatch_cms_page_view` so observer doesn't fire unnecessarily.
  - Run `$action->getRequest()->setDispatched(true)` after redirect to skip all subsequent actions.
- Add a new frontend route and create an index controller and an index action that set the return value of `$this->getFullActionName()` to the response body.
  - Use `$this->getResponse()->setBody()` to output data instead of just `echo` to avoid sending data out too early.
- Rewrite the `Mage_Customer_AccountController::loginAction()` method to set a category view of your choice as the `before_auth_url`.
  - Hardcode category ID using `Mage::getUrl()` instead of fetching category from database.
- Create a dynamic rewrite of the `payment/data` helper only if the version of Magento is older than version 1.4, and if the `ccsave` payment option is enabled for the current store.
  - Use `version_compare` function to check versions instead of type casting to float.
- Create a diagram of the important classes involved in a request dispatch.
  - Missed classes involving layout and templates
- Magento can use several ways to specify the current store view for a given request. List the priority of all the different ways.
  - Store code in URL is highest priority (missed)
  - `Mage::run` is second to last in priority.
