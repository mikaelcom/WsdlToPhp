<?php
/**
 * Class file for PayPalTypeBankIDCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBankIDCodeType
 * @date 14/07/2012
 */
class PayPalTypeBankIDCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CMB'
	 * @return string 'CMB'
	 */
	const VALUE_CMB = 'CMB';
	/**
	 * Constant for value 'ICBC'
	 * @return string 'ICBC'
	 */
	const VALUE_ICBC = 'ICBC';
	/**
	 * Constant for value 'CCB'
	 * @return string 'CCB'
	 */
	const VALUE_CCB = 'CCB';
	/**
	 * Constant for value 'ChinaPay'
	 * @return string 'ChinaPay'
	 */
	const VALUE_CHINAPAY = 'ChinaPay';
	/**
	 * Constructor
	 * @return PayPalTypeBankIDCodeType
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
		return in_array($_value,array(self::VALUE_CMB,self::VALUE_ICBC,self::VALUE_CCB,self::VALUE_CHINAPAY));
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