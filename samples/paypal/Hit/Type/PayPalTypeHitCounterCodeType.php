<?php
/**
 * Class file for PayPalTypeHitCounterCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeHitCounterCodeType
 * @date 14/07/2012
 */
class PayPalTypeHitCounterCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'NoHitCounter'
	 * Meta informations :
	 * 	- documentation : No hit counter
	 * @return string 'NoHitCounter'
	 */
	const VALUE_NOHITCOUNTER = 'NoHitCounter';
	/**
	 * Constant for value 'HonestyStyle'
	 * Meta informations :
	 * 	- documentation : Honesty Style Hit Counter
	 * @return string 'HonestyStyle'
	 */
	const VALUE_HONESTYSTYLE = 'HonestyStyle';
	/**
	 * Constant for value 'GreenLED'
	 * Meta informations :
	 * 	- documentation : Green LED counter.
	 * @return string 'GreenLED'
	 */
	const VALUE_GREENLED = 'GreenLED';
	/**
	 * Constant for value 'Hidden'
	 * Meta informations :
	 * 	- documentation : Hidden counter.
	 * @return string 'Hidden'
	 */
	const VALUE_HIDDEN = 'Hidden';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeHitCounterCodeType
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
		return in_array($_value,array(self::VALUE_NOHITCOUNTER,self::VALUE_HONESTYSTYLE,self::VALUE_GREENLED,self::VALUE_HIDDEN,self::VALUE_CUSTOMCODE));
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