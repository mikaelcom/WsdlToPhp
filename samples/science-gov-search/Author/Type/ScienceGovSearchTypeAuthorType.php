<?php
/**
 * Class file for ScienceGovSearchTypeAuthorType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeAuthorType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeAuthorType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'primary'
	 * @return string 'primary'
	 */
	const VALUE_PRIMARY = 'primary';
	/**
	 * Constant for value 'secondary'
	 * @return string 'secondary'
	 */
	const VALUE_SECONDARY = 'secondary';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeAuthorType
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
		return in_array($_value,array(self::VALUE_PRIMARY,self::VALUE_SECONDARY));
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