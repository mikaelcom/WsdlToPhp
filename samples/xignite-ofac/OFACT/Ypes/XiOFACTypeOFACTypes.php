<?php
/**
 * Class file for XiOFACTypeOFACTypes
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeOFACTypes
 * @date 08/07/2012
 */
class XiOFACTypeOFACTypes extends XiOFACWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'Organization'
	 * @return string 'Organization'
	 */
	const VALUE_ORGANIZATION = 'Organization';
	/**
	 * Constant for value 'Individual'
	 * @return string 'Individual'
	 */
	const VALUE_INDIVIDUAL = 'Individual';
	/**
	 * Constant for value 'Vessel'
	 * @return string 'Vessel'
	 */
	const VALUE_VESSEL = 'Vessel';
	/**
	 * Constructor
	 * @return XiOFACTypeOFACTypes
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_ORGANIZATION,self::VALUE_INDIVIDUAL,self::VALUE_VESSEL));
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