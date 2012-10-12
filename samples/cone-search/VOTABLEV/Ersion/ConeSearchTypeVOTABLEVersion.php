<?php
/**
 * Class file for ConeSearchTypeVOTABLEVersion
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeVOTABLEVersion
 * @date 13/10/2012
 */
class ConeSearchTypeVOTABLEVersion extends ConeSearchWsdlClass
{
	/**
	 * Constant for value '1.1'
	 * @return string '1.1'
	 */
	const VALUE_1_1 = '1.1';
	/**
	 * Constructor
	 * @return ConeSearchTypeVOTABLEVersion
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
		return in_array($_value,array(self::VALUE_1_1));
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