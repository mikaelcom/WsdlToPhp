<?php
/**
 * Class file for GGAdwordsTypeReadOnlyErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeReadOnlyErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeReadOnlyErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'READ_ONLY'
	 * @return string 'READ_ONLY'
	 */
	const VALUE_READ_ONLY = 'READ_ONLY';
	/**
	 * Constructor
	 * @return GGAdwordsTypeReadOnlyErrorReason
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
		return in_array($_value,array(self::VALUE_READ_ONLY));
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