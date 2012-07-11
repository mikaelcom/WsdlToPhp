<?php
/**
 * Class file for XiMetalsTypePureMetalTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypePureMetalTypes
 * @date 08/07/2012
 */
class XiMetalsTypePureMetalTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'XAU'
	 * @return string 'XAU'
	 */
	const VALUE_XAU = 'XAU';
	/**
	 * Constant for value 'XPD'
	 * @return string 'XPD'
	 */
	const VALUE_XPD = 'XPD';
	/**
	 * Constant for value 'XPT'
	 * @return string 'XPT'
	 */
	const VALUE_XPT = 'XPT';
	/**
	 * Constant for value 'XAG'
	 * @return string 'XAG'
	 */
	const VALUE_XAG = 'XAG';
	/**
	 * Constructor
	 * @return XiMetalsTypePureMetalTypes
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
		return in_array($_value,array(self::VALUE_XAU,self::VALUE_XPD,self::VALUE_XPT,self::VALUE_XAG));
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