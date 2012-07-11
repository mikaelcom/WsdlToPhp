<?php
/**
 * Class file for XiHousingTypeValueTypes
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeValueTypes
 * @date 08/07/2012
 */
class XiHousingTypeValueTypes extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'TotalUnits'
	 * @return string 'TotalUnits'
	 */
	const VALUE_TOTALUNITS = 'TotalUnits';
	/**
	 * Constant for value 'OneUnit'
	 * @return string 'OneUnit'
	 */
	const VALUE_ONEUNIT = 'OneUnit';
	/**
	 * Constant for value 'TwoUnits'
	 * @return string 'TwoUnits'
	 */
	const VALUE_TWOUNITS = 'TwoUnits';
	/**
	 * Constant for value 'ThreeOrFourUnits'
	 * @return string 'ThreeOrFourUnits'
	 */
	const VALUE_THREEORFOURUNITS = 'ThreeOrFourUnits';
	/**
	 * Constant for value 'FiveUnitsOrMore'
	 * @return string 'FiveUnitsOrMore'
	 */
	const VALUE_FIVEUNITSORMORE = 'FiveUnitsOrMore';
	/**
	 * Constant for value 'StructuresWithFiveUnitsOrMore'
	 * @return string 'StructuresWithFiveUnitsOrMore'
	 */
	const VALUE_STRUCTURESWITHFIVEUNITSORMORE = 'StructuresWithFiveUnitsOrMore';
	/**
	 * Constructor
	 * @return XiHousingTypeValueTypes
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
		return in_array($_value,array(self::VALUE_TOTALUNITS,self::VALUE_ONEUNIT,self::VALUE_TWOUNITS,self::VALUE_THREEORFOURUNITS,self::VALUE_FIVEUNITSORMORE,self::VALUE_STRUCTURESWITHFIVEUNITSORMORE));
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