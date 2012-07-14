<?php
/**
 * Class file for PayPalTypeUserWithdrawalLimitTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUserWithdrawalLimitTypeType
 * @date 14/07/2012
 */
class PayPalTypeUserWithdrawalLimitTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Limited'
	 * @return string 'Limited'
	 */
	const VALUE_LIMITED = 'Limited';
	/**
	 * Constant for value 'Unlimited'
	 * @return string 'Unlimited'
	 */
	const VALUE_UNLIMITED = 'Unlimited';
	/**
	 * Constructor
	 * @return PayPalTypeUserWithdrawalLimitTypeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_LIMITED,self::VALUE_UNLIMITED));
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