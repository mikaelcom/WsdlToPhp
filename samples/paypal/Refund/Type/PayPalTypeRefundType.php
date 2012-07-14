<?php
/**
 * Class file for PayPalTypeRefundType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundType
 * @date 14/07/2012
 */
class PayPalTypeRefundType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Full'
	 * Meta informations :
	 * 	- documentation : Full Refund
	 * @return string 'Full'
	 */
	const VALUE_FULL = 'Full';
	/**
	 * Constant for value 'Partial'
	 * Meta informations :
	 * 	- documentation : Partial Refund
	 * @return string 'Partial'
	 */
	const VALUE_PARTIAL = 'Partial';
	/**
	 * Constant for value 'ExternalDispute'
	 * Meta informations :
	 * 	- documentation : External Dispute
	 * @return string 'ExternalDispute'
	 */
	const VALUE_EXTERNALDISPUTE = 'ExternalDispute';
	/**
	 * Constructor
	 * @return PayPalTypeRefundType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_FULL,self::VALUE_PARTIAL,self::VALUE_EXTERNALDISPUTE));
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