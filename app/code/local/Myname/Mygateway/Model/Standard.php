<?php
class Myname_Mygateway_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	protected $_code = 'mygateway';
	
	protected $_isInitializeNeeded      = true;
	protected $_canUseInternal          = true;
	protected $_canUseForMultishipping  = false;
	
	public function getOrderPlaceRedirectUrl() {
		return Mage::getUrl('mygateway/payment/redirect', array('_secure' => true));
	}
}
?>