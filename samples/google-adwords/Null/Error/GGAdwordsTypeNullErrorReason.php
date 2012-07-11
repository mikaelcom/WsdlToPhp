<?php
/**
 * Class file for GGAdwordsTypeNullErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNullErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeNullErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'NULL_CONTENT'
	 * Meta informations :
	 * 	- documentation : Specified list/container must not contain any null elements
	 * @return string 'NULL_CONTENT'
	 */
	const VALUE_NULL_CONTENT = 'NULL_CONTENT';
	/**
	 * Constructor
	 * @return GGAdwordsTypeNullErrorReason
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
		return in_array($_value,array(self::VALUE_NULL_CONTENT));
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