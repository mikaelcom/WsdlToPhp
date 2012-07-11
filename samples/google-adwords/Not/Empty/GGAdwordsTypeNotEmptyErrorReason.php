<?php
/**
 * Class file for GGAdwordsTypeNotEmptyErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeNotEmptyErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeNotEmptyErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'EMPTY_LIST'
	 * @return string 'EMPTY_LIST'
	 */
	const VALUE_EMPTY_LIST = 'EMPTY_LIST';
	/**
	 * Constructor
	 * @return GGAdwordsTypeNotEmptyErrorReason
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
		return in_array($_value,array(self::VALUE_EMPTY_LIST));
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