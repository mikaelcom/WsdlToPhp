<?php
/**
 * Class file for GGAdwordsTypeRequiredErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRequiredErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeRequiredErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'REQUIRED'
	 * Meta informations :
	 * 	- documentation : Missing required field.
	 * @return string 'REQUIRED'
	 */
	const VALUE_REQUIRED = 'REQUIRED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeRequiredErrorReason
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
		return in_array($_value,array(self::VALUE_REQUIRED));
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