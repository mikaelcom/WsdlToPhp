<?php
/**
 * Class file for XiHousingTypeRegions
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeRegions
 * @date 08/07/2012
 */
class XiHousingTypeRegions extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'UnitedStates'
	 * @return string 'UnitedStates'
	 */
	const VALUE_UNITEDSTATES = 'UnitedStates';
	/**
	 * Constant for value 'Northeast'
	 * @return string 'Northeast'
	 */
	const VALUE_NORTHEAST = 'Northeast';
	/**
	 * Constant for value 'Midwest'
	 * @return string 'Midwest'
	 */
	const VALUE_MIDWEST = 'Midwest';
	/**
	 * Constant for value 'South'
	 * @return string 'South'
	 */
	const VALUE_SOUTH = 'South';
	/**
	 * Constant for value 'West'
	 * @return string 'West'
	 */
	const VALUE_WEST = 'West';
	/**
	 * Constructor
	 * @return XiHousingTypeRegions
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
		return in_array($_value,array(self::VALUE_UNITEDSTATES,self::VALUE_NORTHEAST,self::VALUE_MIDWEST,self::VALUE_SOUTH,self::VALUE_WEST));
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