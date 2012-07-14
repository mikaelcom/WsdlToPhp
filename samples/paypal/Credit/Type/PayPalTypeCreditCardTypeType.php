<?php
/**
 * Class file for PayPalTypeCreditCardTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreditCardTypeType
 * @date 14/07/2012
 */
class PayPalTypeCreditCardTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Visa'
	 * @return string 'Visa'
	 */
	const VALUE_VISA = 'Visa';
	/**
	 * Constant for value 'MasterCard'
	 * @return string 'MasterCard'
	 */
	const VALUE_MASTERCARD = 'MasterCard';
	/**
	 * Constant for value 'Discover'
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'Amex'
	 * @return string 'Amex'
	 */
	const VALUE_AMEX = 'Amex';
	/**
	 * Constant for value 'Switch'
	 * @return string 'Switch'
	 */
	const VALUE_SWITCH = 'Switch';
	/**
	 * Constant for value 'Solo'
	 * @return string 'Solo'
	 */
	const VALUE_SOLO = 'Solo';
	/**
	 * Constant for value 'Maestro'
	 * @return string 'Maestro'
	 */
	const VALUE_MAESTRO = 'Maestro';
	/**
	 * Constructor
	 * @return PayPalTypeCreditCardTypeType
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
		return in_array($_value,array(self::VALUE_VISA,self::VALUE_MASTERCARD,self::VALUE_DISCOVER,self::VALUE_AMEX,self::VALUE_SWITCH,self::VALUE_SOLO,self::VALUE_MAESTRO));
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