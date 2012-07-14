<?php
/**
 * Class file for PayPalTypeButtonCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonCodeType
 * @date 14/07/2012
 */
class PayPalTypeButtonCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'HOSTED'
	 * Meta informations :
	 * 	- documentation : Creates Hosted Button
	 * @return string 'HOSTED'
	 */
	const VALUE_HOSTED = 'HOSTED';
	/**
	 * Constant for value 'ENCRYPTED'
	 * Meta informations :
	 * 	- documentation : Creates Encrypted Button
	 * @return string 'ENCRYPTED'
	 */
	const VALUE_ENCRYPTED = 'ENCRYPTED';
	/**
	 * Constant for value 'CLEARTEXT'
	 * Meta informations :
	 * 	- documentation : Creates Cleartext Button
	 * @return string 'CLEARTEXT'
	 */
	const VALUE_CLEARTEXT = 'CLEARTEXT';
	/**
	 * Constant for value 'TOKEN'
	 * Meta informations :
	 * 	- documentation : Creates Token or temporary Button
	 * @return string 'TOKEN'
	 */
	const VALUE_TOKEN = 'TOKEN';
	/**
	 * Constructor
	 * @return PayPalTypeButtonCodeType
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
		return in_array($_value,array(self::VALUE_HOSTED,self::VALUE_ENCRYPTED,self::VALUE_CLEARTEXT,self::VALUE_TOKEN));
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