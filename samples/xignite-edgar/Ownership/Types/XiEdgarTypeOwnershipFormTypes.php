<?php
/**
 * Class file for XiEdgarTypeOwnershipFormTypes
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeOwnershipFormTypes
 * @date 08/07/2012
 */
class XiEdgarTypeOwnershipFormTypes extends XiEdgarWsdlClass
{
	/**
	 * Constant for value 'Include'
	 * @return string 'Include'
	 */
	const VALUE_INCLUDE = 'Include';
	/**
	 * Constant for value 'Exclude'
	 * @return string 'Exclude'
	 */
	const VALUE_EXCLUDE = 'Exclude';
	/**
	 * Constant for value 'Only'
	 * @return string 'Only'
	 */
	const VALUE_ONLY = 'Only';
	/**
	 * Constructor
	 * @return XiEdgarTypeOwnershipFormTypes
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
		return in_array($_value,array(self::VALUE_INCLUDE,self::VALUE_EXCLUDE,self::VALUE_ONLY));
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