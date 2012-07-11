<?php
/**
 * Class file for EbayTradingTypeOrderStatusFilterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderStatusFilterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeOrderStatusFilterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'All'
	 * Meta informations :
	 * 	- documentation : All applicable sold listings, regardless of their Paid or Shipped status.
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'AwaitingPayment'
	 * Meta informations :
	 * 	- documentation : Sold listings that have not yet been marked as Paid in My eBay.
	 * @return string 'AwaitingPayment'
	 */
	const VALUE_AWAITINGPAYMENT = 'AwaitingPayment';
	/**
	 * Constant for value 'AwaitingShipment'
	 * Meta informations :
	 * 	- documentation : Sold listings that have not yet been marked as Shipped in My eBay.
	 * @return string 'AwaitingShipment'
	 */
	const VALUE_AWAITINGSHIPMENT = 'AwaitingShipment';
	/**
	 * Constant for value 'PaidAndShipped'
	 * Meta informations :
	 * 	- documentation : Sold listings that have been marked as Paid and Shipped in My eBay.
	 * @return string 'PaidAndShipped'
	 */
	const VALUE_PAIDANDSHIPPED = 'PaidAndShipped';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future or internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeOrderStatusFilterCodeType
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_AWAITINGPAYMENT,self::VALUE_AWAITINGSHIPMENT,self::VALUE_PAIDANDSHIPPED,self::VALUE_CUSTOMCODE));
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