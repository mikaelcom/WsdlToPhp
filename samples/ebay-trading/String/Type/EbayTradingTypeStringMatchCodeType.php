<?php
/**
 * Class file for EbayTradingTypeStringMatchCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStringMatchCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStringMatchCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (in) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'StartsWith'
	 * Meta informations :
	 * 	- documentation : (in) Matches strings that begin with the submitted value. For example, submitting a CharityName value of "heart" matches "Heart of Gold," but not "Open Hearts." Default behavior if no value is specified.
	 * @return string 'StartsWith'
	 */
	const VALUE_STARTSWITH = 'StartsWith';
	/**
	 * Constant for value 'Contains'
	 * Meta informations :
	 * 	- documentation : (in) Matches strings that contain the submitted value. For example, submitting a CharityName value of "heart" matches both "Heart of Gold" and "Open Hearts."
	 * @return string 'Contains'
	 */
	const VALUE_CONTAINS = 'Contains';
	/**
	 * Constructor
	 * @return EbayTradingTypeStringMatchCodeType
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
		return in_array($_value,array(self::VALUE_CUSTOMCODE,self::VALUE_STARTSWITH,self::VALUE_CONTAINS));
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