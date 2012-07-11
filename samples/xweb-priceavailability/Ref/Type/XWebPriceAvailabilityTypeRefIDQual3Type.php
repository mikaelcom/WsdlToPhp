<?php
/**
 * Class file for XWebPriceAvailabilityTypeRefIDQual3Type
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeRefIDQual3Type
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeRefIDQual3Type extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * Constant for value '1Q'
	 * @return string '1Q'
	 */
	const VALUE_1Q = '1Q';
	/**
	 * Constructor
	 * @return XWebPriceAvailabilityTypeRefIDQual3Type
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
		return in_array($_value,array(self::VALUE_1Q));
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