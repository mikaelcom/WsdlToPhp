<?php
/**
 * Class file for PayPalTypeOptionTypeListType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeOptionTypeListType
 * @date 14/07/2012
 */
class PayPalTypeOptionTypeListType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoOptionType'
	 * @return string 'NoOptionType'
	 */
	const VALUE_NOOPTIONTYPE = 'NoOptionType';
	/**
	 * Constant for value 'FULL'
	 * @return string 'FULL'
	 */
	const VALUE_FULL = 'FULL';
	/**
	 * Constant for value 'EMI'
	 * @return string 'EMI'
	 */
	const VALUE_EMI = 'EMI';
	/**
	 * Constant for value 'VARIABLE'
	 * @return string 'VARIABLE'
	 */
	const VALUE_VARIABLE = 'VARIABLE';
	/**
	 * Constructor
	 * @return PayPalTypeOptionTypeListType
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
		return in_array($_value,array(self::VALUE_NOOPTIONTYPE,self::VALUE_FULL,self::VALUE_EMI,self::VALUE_VARIABLE));
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