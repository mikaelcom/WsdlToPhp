<?php
/**
 * Class file for GGAdwordsTypeDistinctErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDistinctErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeDistinctErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DUPLICATE_ELEMENT'
	 * @return string 'DUPLICATE_ELEMENT'
	 */
	const VALUE_DUPLICATE_ELEMENT = 'DUPLICATE_ELEMENT';
	/**
	 * Constant for value 'DUPLICATE_TYPE'
	 * @return string 'DUPLICATE_TYPE'
	 */
	const VALUE_DUPLICATE_TYPE = 'DUPLICATE_TYPE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeDistinctErrorReason
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
		return in_array($_value,array(self::VALUE_DUPLICATE_ELEMENT,self::VALUE_DUPLICATE_TYPE));
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