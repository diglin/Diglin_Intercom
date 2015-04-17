<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     Diglin_Intercom
 * @copyright   Copyright (c) 2011-2015 Diglin (http://www.diglin.com)
 */

/**
 * Class Diglin_Intercom_Block_Widget
 */
class Diglin_Intercom_Block_Widget extends Mage_Core_Block_Template
{
    protected $_template = 'diglin/intercom/widget.phtml';

    /**
     * @return string | null
     */
    public function getAppId()
    {
        return Mage::getStoreConfig(Diglin_Intercom_Helper_Data::CFG_APPID);
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->getCustomer()->getName();
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->getCustomer()->getEmail();
    }

    /**
     * @return int|null
     */
    public function getCustomerCreatedAt()
    {
        return $this->getCustomer()->getCreatedAtTimestamp();
    }

    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return (bool) Mage::getSingleton('customer/session')->isLoggedIn();
    }

    /**
     * @return Mage_Customer_Model_Customer
     */
    public function getCustomer()
    {
        return Mage::getSingleton('customer/session')->getCustomer();
    }
}
