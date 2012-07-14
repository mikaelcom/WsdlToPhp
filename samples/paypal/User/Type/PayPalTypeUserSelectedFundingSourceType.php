<?php
/**
 * Class file for PayPalTypeUserSelectedFundingSourceType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUserSelectedFundingSourceType
 * @date 14/07/2012
 */
class PayPalTypeUserSelectedFundingSourceType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'ELV'
	 * @return string 'ELV'
	 */
	const VALUE_ELV = 'ELV';
	/**
	 * Constant for value 'CreditCard'
	 * @return string 'CreditCard'
	 */
	const VALUE_CREDITCARD = 'CreditCard';
	/**
	 * Constant for value 'ChinaUnionPay'
	 * @return string 'ChinaUnionPay'
	 */
	const VALUE_CHINAUNIONPAY = 'ChinaUnionPay';
	/**
	 * Constant for value 'BML'
	 * @return string 'BML'
	 */
	const VALUE_BML = 'BML';
	/**
	 * Constructor
	 * @return PayPalTypeUserSelectedFundingSourceType
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
		return in_array($_value,array(self::VALUE_ELV,self::VALUE_CREDITCARD,self::VALUE_CHINAUNIONPAY,self::VALUE_BML));
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