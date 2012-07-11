<?php
/**
 * Class file for EbayTradingTypeAddressRecordTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddressRecordTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAddressRecordTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Residential'
	 * @return string 'Residential'
	 */
	const VALUE_RESIDENTIAL = 'Residential';
	/**
	 * Constant for value 'Business'
	 * @return string 'Business'
	 */
	const VALUE_BUSINESS = 'Business';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAddressRecordTypeCodeType
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
		return in_array($_value,array(self::VALUE_RESIDENTIAL,self::VALUE_BUSINESS,self::VALUE_CUSTOMCODE));
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