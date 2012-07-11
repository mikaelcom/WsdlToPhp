<?php
/**
 * Class file for BingGeoTypeDistanceUnit
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeDistanceUnit
 * @date 02/07/2012
 */
class BingGeoTypeDistanceUnit extends BingGeoWsdlClass
{
	/**
	 * Constant for value 'Kilometer'
	 * @return string 'Kilometer'
	 */
	const VALUE_KILOMETER = 'Kilometer';
	/**
	 * Constant for value 'Mile'
	 * @return string 'Mile'
	 */
	const VALUE_MILE = 'Mile';
	/**
	 * Constructor
	 * @return BingGeoTypeDistanceUnit
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
		return in_array($_value,array(self::VALUE_KILOMETER,self::VALUE_MILE));
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