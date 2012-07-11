<?php
/**
 * Class file for XiOFACTypeCriteriaTypes
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeCriteriaTypes
 * @date 08/07/2012
 */
class XiOFACTypeCriteriaTypes extends XiOFACWsdlClass
{
	/**
	 * Constant for value 'Country'
	 * @return string 'Country'
	 */
	const VALUE_COUNTRY = 'Country';
	/**
	 * Constant for value 'City'
	 * @return string 'City'
	 */
	const VALUE_CITY = 'City';
	/**
	 * Constant for value 'Program'
	 * @return string 'Program'
	 */
	const VALUE_PROGRAM = 'Program';
	/**
	 * Constructor
	 * @return XiOFACTypeCriteriaTypes
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
		return in_array($_value,array(self::VALUE_COUNTRY,self::VALUE_CITY,self::VALUE_PROGRAM));
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