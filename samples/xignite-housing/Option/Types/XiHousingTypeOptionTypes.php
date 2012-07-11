<?php
/**
 * Class file for XiHousingTypeOptionTypes
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeOptionTypes
 * @date 08/07/2012
 */
class XiHousingTypeOptionTypes extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'ByUnits'
	 * @return string 'ByUnits'
	 */
	const VALUE_BYUNITS = 'ByUnits';
	/**
	 * Constant for value 'ByValue'
	 * @return string 'ByValue'
	 */
	const VALUE_BYVALUE = 'ByValue';
	/**
	 * Constructor
	 * @return XiHousingTypeOptionTypes
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
		return in_array($_value,array(self::VALUE_BYUNITS,self::VALUE_BYVALUE));
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