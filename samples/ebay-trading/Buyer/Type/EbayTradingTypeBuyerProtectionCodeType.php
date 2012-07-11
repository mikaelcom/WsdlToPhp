<?php
/**
 * Class file for EbayTradingTypeBuyerProtectionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerProtectionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerProtectionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemIneligible'
	 * Meta informations :
	 * 	- documentation : (out) Item is ineligible (e.g., category not applicable).
	 * @return string 'ItemIneligible'
	 */
	const VALUE_ITEMINELIGIBLE = 'ItemIneligible';
	/**
	 * Constant for value 'ItemEligible'
	 * Meta informations :
	 * 	- documentation : (out) Item is eligible per standard criteria.
	 * @return string 'ItemEligible'
	 */
	const VALUE_ITEMELIGIBLE = 'ItemEligible';
	/**
	 * Constant for value 'ItemMarkedIneligible'
	 * Meta informations :
	 * 	- documentation : (out) Item marked ineligible per special criteria (e.g., seller's account closed).
	 * @return string 'ItemMarkedIneligible'
	 */
	const VALUE_ITEMMARKEDINELIGIBLE = 'ItemMarkedIneligible';
	/**
	 * Constant for value 'ItemMarkedEligible'
	 * Meta informations :
	 * 	- documentation : (out) Item marked eligible per other criteria.
	 * @return string 'ItemMarkedEligible'
	 */
	const VALUE_ITEMMARKEDELIGIBLE = 'ItemMarkedEligible';
	/**
	 * Constant for value 'NoCoverage'
	 * Meta informations :
	 * 	- documentation : (out) For the Australia site, indicates that there is no PayPal Buyer Protection coverage. Coverage details would be in the following sections of the View Item page: the Buy Safely section and the Payment Details section.
	 * @return string 'NoCoverage'
	 */
	const VALUE_NOCOVERAGE = 'NoCoverage';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBuyerProtectionCodeType
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
		return in_array($_value,array(self::VALUE_ITEMINELIGIBLE,self::VALUE_ITEMELIGIBLE,self::VALUE_ITEMMARKEDINELIGIBLE,self::VALUE_ITEMMARKEDELIGIBLE,self::VALUE_NOCOVERAGE,self::VALUE_CUSTOMCODE));
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