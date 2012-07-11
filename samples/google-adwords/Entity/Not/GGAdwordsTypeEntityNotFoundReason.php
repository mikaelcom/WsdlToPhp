<?php
/**
 * Class file for GGAdwordsTypeEntityNotFoundReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeEntityNotFoundReason
 * @date 03/07/2012
 */
class GGAdwordsTypeEntityNotFoundReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'INVALID_ID'
	 * Meta informations :
	 * 	- documentation : The specified id refered to an entity which either doesn't exist or is not accessible to the customer. e.g. campaign belongs to another customer.
	 * @return string 'INVALID_ID'
	 */
	const VALUE_INVALID_ID = 'INVALID_ID';
	/**
	 * Constructor
	 * @return GGAdwordsTypeEntityNotFoundReason
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
		return in_array($_value,array(self::VALUE_INVALID_ID));
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