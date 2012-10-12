<?php
/**
 * Class file for ConeSearchTypeVALUESType
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeVALUESType
 * @date 13/10/2012
 */
class ConeSearchTypeVALUESType extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'legal'
	 * @return string 'legal'
	 */
	const VALUE_LEGAL = 'legal';
	/**
	 * Constant for value 'actual'
	 * @return string 'actual'
	 */
	const VALUE_ACTUAL = 'actual';
	/**
	 * Constructor
	 * @return ConeSearchTypeVALUESType
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
		return in_array($_value,array(self::VALUE_LEGAL,self::VALUE_ACTUAL));
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