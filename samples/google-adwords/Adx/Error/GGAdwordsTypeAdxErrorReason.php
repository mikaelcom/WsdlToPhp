<?php
/**
 * Class file for GGAdwordsTypeAdxErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeAdxErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeAdxErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'UNSUPPORTED_FEATURE'
	 * Meta informations :
	 * 	- documentation : Attempt to use non-AdX feature by AdX customer.
	 * @return string 'UNSUPPORTED_FEATURE'
	 */
	const VALUE_UNSUPPORTED_FEATURE = 'UNSUPPORTED_FEATURE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeAdxErrorReason
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
		return in_array($_value,array(self::VALUE_UNSUPPORTED_FEATURE));
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