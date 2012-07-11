<?php
/**
 * Class file for BingGeoTypeConfidence
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeConfidence
 * @date 02/07/2012
 */
class BingGeoTypeConfidence extends BingGeoWsdlClass
{
	/**
	 * Constant for value 'High'
	 * @return string 'High'
	 */
	const VALUE_HIGH = 'High';
	/**
	 * Constant for value 'Medium'
	 * @return string 'Medium'
	 */
	const VALUE_MEDIUM = 'Medium';
	/**
	 * Constant for value 'Low'
	 * @return string 'Low'
	 */
	const VALUE_LOW = 'Low';
	/**
	 * Constructor
	 * @return BingGeoTypeConfidence
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
		return in_array($_value,array(self::VALUE_HIGH,self::VALUE_MEDIUM,self::VALUE_LOW));
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