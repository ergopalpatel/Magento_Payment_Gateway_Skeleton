# Magento_Payment_Gateway_Skeleton

Module provides the skeleton for integrate custom payment in Magento 1.x

In <code> Myname_Mygateway_PaymentController </code>

<code>redirectAction()</code> is triggered when someone places an order

<code>responseAction()</code> is triggered when your gateway sends back a response after processing the customer's payment

<code>cancelAction()</code> is triggered when an order is to be cancelled

In <code>Myname_Mygateway_Model_Standard extends Mage_Payment_Model_Method_Abstract<code>

<code>getOrderPlaceRedirectUrl()</code> is called to get redirecturl of your gateway.
