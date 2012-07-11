<?php
/**
 * Class file for EbayTradingTypeOrderStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeOrderStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : The cart is active. Items can only be added, deleted, or updated in the cart when status is Active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Inactive'
	 * Meta informations :
	 * 	- documentation : The cart is invalid; it does not exist. An example is a cart that has expired.
	 * @return string 'Inactive'
	 */
	const VALUE_INACTIVE = 'Inactive';
	/**
	 * Constant for value 'Completed'
	 * Meta informations :
	 * 	- documentation : The order is completed.
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'Cancelled'
	 * Meta informations :
	 * 	- documentation : The cart was cancelled.
	 * @return string 'Cancelled'
	 */
	const VALUE_CANCELLED = 'Cancelled';
	/**
	 * Constant for value 'Shipped'
	 * Meta informations :
	 * 	- documentation : The order was shipped. Half.com users can specify this in the GetOrders input.
	 * @return string 'Shipped'
	 */
	const VALUE_SHIPPED = 'Shipped';
	/**
	 * Constant for value 'Default'
	 * Meta informations :
	 * 	- documentation : Default status.
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constant for value 'Authenticated'
	 * Meta informations :
	 * 	- documentation : The cart was authenticated.
	 * @return string 'Authenticated'
	 */
	const VALUE_AUTHENTICATED = 'Authenticated';
	/**
	 * Constant for value 'InProcess'
	 * Meta informations :
	 * 	- documentation : After placing the order and before completion of checkout, the card is "in process."
	 * @return string 'InProcess'
	 */
	const VALUE_INPROCESS = 'InProcess';
	/**
	 * Constant for value 'Invalid'
	 * Meta informations :
	 * 	- documentation : Invalid.
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'All'
	 * Meta informations :
	 * 	- documentation : All the orders with active and completed status
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return EbayTradingTypeOrderStatusCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_INACTIVE,self::VALUE_COMPLETED,self::VALUE_CANCELLED,self::VALUE_SHIPPED,self::VALUE_DEFAULT,self::VALUE_AUTHENTICATED,self::VALUE_INPROCESS,self::VALUE_INVALID,self::VALUE_CUSTOMCODE,self::VALUE_ALL));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>