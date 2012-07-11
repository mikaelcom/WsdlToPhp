<?php
/**
 * Class file for BingGeoTypeDeviceType
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeDeviceType
 * @date 02/07/2012
 */
class BingGeoTypeDeviceType extends BingGeoWsdlClass
{
	/**
	 * Constant for value 'Desktop'
	 * @return string 'Desktop'
	 */
	const VALUE_DESKTOP = 'Desktop';
	/**
	 * Constant for value 'Mobile'
	 * @return string 'Mobile'
	 */
	const VALUE_MOBILE = 'Mobile';
	/**
	 * Constructor
	 * @return BingGeoTypeDeviceType
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
		return in_array($_value,array(self::VALUE_DESKTOP,self::VALUE_MOBILE));
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