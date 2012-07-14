<?php
/**
 * Class file for PayPalTypeButtonImageType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonImageType
 * @date 14/07/2012
 */
class PayPalTypeButtonImageType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'REG'
	 * Meta informations :
	 * 	- documentation : button image type is REG
	 * @return string 'REG'
	 */
	const VALUE_REG = 'REG';
	/**
	 * Constant for value 'SML'
	 * Meta informations :
	 * 	- documentation : button image type is SML
	 * @return string 'SML'
	 */
	const VALUE_SML = 'SML';
	/**
	 * Constant for value 'CC'
	 * Meta informations :
	 * 	- documentation : button image type is CC
	 * @return string 'CC'
	 */
	const VALUE_CC = 'CC';
	/**
	 * Constructor
	 * @return PayPalTypeButtonImageType
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
		return in_array($_value,array(self::VALUE_REG,self::VALUE_SML,self::VALUE_CC));
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