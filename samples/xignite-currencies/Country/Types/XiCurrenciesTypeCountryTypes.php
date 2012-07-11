<?php
/**
 * Class file for XiCurrenciesTypeCountryTypes
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCountryTypes
 * @date 08/07/2012
 */
class XiCurrenciesTypeCountryTypes extends XiCurrenciesWsdlClass
{
	/**
	 * Constant for value 'Mexico'
	 * @return string 'Mexico'
	 */
	const VALUE_MEXICO = 'Mexico';
	/**
	 * Constant for value 'UnitedStatesAM'
	 * @return string 'UnitedStatesAM'
	 */
	const VALUE_UNITEDSTATESAM = 'UnitedStatesAM';
	/**
	 * Constant for value 'UnitedStatesPM'
	 * @return string 'UnitedStatesPM'
	 */
	const VALUE_UNITEDSTATESPM = 'UnitedStatesPM';
	/**
	 * Constant for value 'Canada'
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constant for value 'Europe'
	 * @return string 'Europe'
	 */
	const VALUE_EUROPE = 'Europe';
	/**
	 * Constant for value 'Russia'
	 * @return string 'Russia'
	 */
	const VALUE_RUSSIA = 'Russia';
	/**
	 * Constant for value 'Poland'
	 * @return string 'Poland'
	 */
	const VALUE_POLAND = 'Poland';
	/**
	 * Constant for value 'Romania'
	 * @return string 'Romania'
	 */
	const VALUE_ROMANIA = 'Romania';
	/**
	 * Constant for value 'Hungary'
	 * @return string 'Hungary'
	 */
	const VALUE_HUNGARY = 'Hungary';
	/**
	 * Constant for value 'Chile'
	 * @return string 'Chile'
	 */
	const VALUE_CHILE = 'Chile';
	/**
	 * Constant for value 'Czech'
	 * @return string 'Czech'
	 */
	const VALUE_CZECH = 'Czech';
	/**
	 * Constructor
	 * @return XiCurrenciesTypeCountryTypes
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
		return in_array($_value,array(self::VALUE_MEXICO,self::VALUE_UNITEDSTATESAM,self::VALUE_UNITEDSTATESPM,self::VALUE_CANADA,self::VALUE_EUROPE,self::VALUE_RUSSIA,self::VALUE_POLAND,self::VALUE_ROMANIA,self::VALUE_HUNGARY,self::VALUE_CHILE,self::VALUE_CZECH));
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