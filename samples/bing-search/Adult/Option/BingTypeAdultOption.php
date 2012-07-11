<?php
/**
 * Class file for BingTypeAdultOption
 * @date 02/07/2012
 */
/**
 * Class BingTypeAdultOption
 * @date 02/07/2012
 */
class BingTypeAdultOption extends BingWsdlClass
{
	/**
	 * Constant for value 'Off'
	 * @return string 'Off'
	 */
	const VALUE_OFF = 'Off';
	/**
	 * Constant for value 'Moderate'
	 * @return string 'Moderate'
	 */
	const VALUE_MODERATE = 'Moderate';
	/**
	 * Constant for value 'Strict'
	 * @return string 'Strict'
	 */
	const VALUE_STRICT = 'Strict';
	/**
	 * Constructor
	 * @return BingTypeAdultOption
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
		return in_array($_value,array(self::VALUE_OFF,self::VALUE_MODERATE,self::VALUE_STRICT));
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