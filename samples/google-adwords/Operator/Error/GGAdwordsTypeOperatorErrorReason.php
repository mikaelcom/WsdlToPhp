<?php
/**
 * Class file for GGAdwordsTypeOperatorErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOperatorErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeOperatorErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'OPERATOR_NOT_SUPPORTED'
	 * @return string 'OPERATOR_NOT_SUPPORTED'
	 */
	const VALUE_OPERATOR_NOT_SUPPORTED = 'OPERATOR_NOT_SUPPORTED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeOperatorErrorReason
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
		return in_array($_value,array(self::VALUE_OPERATOR_NOT_SUPPORTED));
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