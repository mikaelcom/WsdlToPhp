<?php
/**
 * Class file for EbayTradingTypeSellingManagerPaidStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerPaidStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerPaidStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Paid'
	 * Meta informations :
	 * 	- documentation : The status of the order is "paid."
	 * @return string 'Paid'
	 */
	const VALUE_PAID = 'Paid';
	/**
	 * Constant for value 'PartiallyPaid'
	 * Meta informations :
	 * 	- documentation : The status of the order is "partially paid."
	 * @return string 'PartiallyPaid'
	 */
	const VALUE_PARTIALLYPAID = 'PartiallyPaid';
	/**
	 * Constant for value 'Unpaid'
	 * Meta informations :
	 * 	- documentation : The status of the order is "unpaid."
	 * @return string 'Unpaid'
	 */
	const VALUE_UNPAID = 'Unpaid';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : The status of the order is "pending."
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Refunded'
	 * Meta informations :
	 * 	- documentation : The status of the order is "refunded."
	 * @return string 'Refunded'
	 */
	const VALUE_REFUNDED = 'Refunded';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerPaidStatusCodeType
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
		return in_array($_value,array(self::VALUE_PAID,self::VALUE_PARTIALLYPAID,self::VALUE_UNPAID,self::VALUE_PENDING,self::VALUE_REFUNDED,self::VALUE_CUSTOMCODE));
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