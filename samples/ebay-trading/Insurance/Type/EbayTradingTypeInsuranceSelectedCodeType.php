<?php
/**
 * Class file for EbayTradingTypeInsuranceSelectedCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInsuranceSelectedCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeInsuranceSelectedCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotOffered'
	 * Meta informations :
	 * 	- documentation : Shipping insurance was not offered.
	 * @return string 'NotOffered'
	 */
	const VALUE_NOTOFFERED = 'NotOffered';
	/**
	 * Constant for value 'OfferedNotSelected'
	 * Meta informations :
	 * 	- documentation : Shipping insurance was offered but not selected.
	 * @return string 'OfferedNotSelected'
	 */
	const VALUE_OFFEREDNOTSELECTED = 'OfferedNotSelected';
	/**
	 * Constant for value 'OfferedSelected'
	 * Meta informations :
	 * 	- documentation : Shipping insurance was offered and selected.
	 * @return string 'OfferedSelected'
	 */
	const VALUE_OFFEREDSELECTED = 'OfferedSelected';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : Shipping insurance was required.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'IncludedInShippingHandling'
	 * Meta informations :
	 * 	- documentation : Shipping insurance was included in Shipping and Handling fee.
	 * @return string 'IncludedInShippingHandling'
	 */
	const VALUE_INCLUDEDINSHIPPINGHANDLING = 'IncludedInShippingHandling';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeInsuranceSelectedCodeType
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
		return in_array($_value,array(self::VALUE_NOTOFFERED,self::VALUE_OFFEREDNOTSELECTED,self::VALUE_OFFEREDSELECTED,self::VALUE_REQUIRED,self::VALUE_INCLUDEDINSHIPPINGHANDLING,self::VALUE_CUSTOMCODE));
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