<?php
/**
 * Class file for PayPalTypeBankAccountTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBankAccountTypeType
 * @date 14/07/2012
 */
class PayPalTypeBankAccountTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Checking'
	 * @return string 'Checking'
	 */
	const VALUE_CHECKING = 'Checking';
	/**
	 * Constant for value 'Savings'
	 * @return string 'Savings'
	 */
	const VALUE_SAVINGS = 'Savings';
	/**
	 * Constructor
	 * @return PayPalTypeBankAccountTypeType
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
		return in_array($_value,array(self::VALUE_CHECKING,self::VALUE_SAVINGS));
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