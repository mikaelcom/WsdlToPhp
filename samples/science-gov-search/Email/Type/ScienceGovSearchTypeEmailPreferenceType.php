<?php
/**
 * Class file for ScienceGovSearchTypeEmailPreferenceType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeEmailPreferenceType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeEmailPreferenceType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'ALWAYS'
	 * @return string 'ALWAYS'
	 */
	const VALUE_ALWAYS = 'ALWAYS';
	/**
	 * Constant for value 'IF_NEW'
	 * @return string 'IF_NEW'
	 */
	const VALUE_IF_NEW = 'IF_NEW';
	/**
	 * Constant for value 'NEVER'
	 * @return string 'NEVER'
	 */
	const VALUE_NEVER = 'NEVER';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeEmailPreferenceType
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
		return in_array($_value,array(self::VALUE_ALWAYS,self::VALUE_IF_NEW,self::VALUE_NEVER));
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