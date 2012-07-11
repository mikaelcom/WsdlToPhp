<?php
/**
 * Class file for EbayTradingTypeDateSpecifierCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDateSpecifierCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDateSpecifierCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'M'
	 * Meta informations :
	 * 	- documentation : (in) The month subcomponent of a date.
	 * @return string 'M'
	 */
	const VALUE_M = 'M';
	/**
	 * Constant for value 'D'
	 * Meta informations :
	 * 	- documentation : (in) The day subcomponent of a date.
	 * @return string 'D'
	 */
	const VALUE_D = 'D';
	/**
	 * Constant for value 'Y'
	 * Meta informations :
	 * 	- documentation : (in) The year subcomponent of a date.
	 * @return string 'Y'
	 */
	const VALUE_Y = 'Y';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDateSpecifierCodeType
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
		return in_array($_value,array(self::VALUE_M,self::VALUE_D,self::VALUE_Y,self::VALUE_CUSTOMCODE));
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