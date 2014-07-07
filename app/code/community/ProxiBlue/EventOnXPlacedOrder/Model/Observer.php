<?php

/**
 * Observer to fire event denoting X placed order
 * 
 * @category   ProxiBlue
 * @package    ProxiBlue_EventOnXPlacedOrder
 * @author     Lucas van Staden (support@proxiblue.com.au)
 */

class ProxiBlue_EventOnXPlacedOrder_Model_Observer {

    /**
     * Stop sending order events after this order count has been reached
     * @var integer
     */
    private $_stopPushingEventsOnCounter = 10;

    /**
     * Push event denoting customers X placed order
     *
     * @param Varien_Event_Observer $observer
     * @return ProxiBlue_EventFirstPlacedOrder_Model_Adminhtml_Observer
     */
    public function customer_x_placed_order($observer) {
	$orders = Mage::getModel('sales/order')
		->getCollection()
		->addFieldToSelect('increment_id')
		->addFieldToFilter('customer_id', array('eq' => $observer->getEvent()->getOrder()->getCustomerId()));
	$orders->getSelect()->limit($this->_stopPushingEventsOnCounter);
	if ($orders->getSize() <= $this->_stopPushingEventsOnCounter) {
	    Mage::dispatchEvent('customer_' . $orders->getSize() . '_placed_order', array('order' => $observer->getEvent()->getOrder()));
	}
	return $this;
    }

}
