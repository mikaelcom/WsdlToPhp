<?php
/**
 * Class file for ConeSearchTypeSTREAMType
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeSTREAMType
 * @date 13/10/2012
 */
class ConeSearchTypeSTREAMType extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'locator'
	 * @return string 'locator'
	 */
	const VALUE_LOCATOR = 'locator';
	/**
	 * Constant for value 'other'
	 * @return string 'other'
	 */
	const VALUE_OTHER = 'other';
	/**
	 * Constructor
	 * @return ConeSearchTypeSTREAMType
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
		return in_array($_value,array(self::VALUE_LOCATOR,self::VALUE_OTHER));
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