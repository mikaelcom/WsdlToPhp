<?php
/**
 * Class file for EbayTradingTypeDisputeCreditEligibilityCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeCreditEligibilityCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeCreditEligibilityCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'InEligible'
	 * Meta informations :
	 * 	- documentation : (out) The seller is not currently eligible for a Final Value Fee credit.
	 * @return string 'InEligible'
	 */
	const VALUE_INELIGIBLE = 'InEligible';
	/**
	 * Constant for value 'Eligible'
	 * Meta informations :
	 * 	- documentation : (out) The seller is eligible for a Final Value Fee credit.
	 * @return string 'Eligible'
	 */
	const VALUE_ELIGIBLE = 'Eligible';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeCreditEligibilityCodeType
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
		return in_array($_value,array(self::VALUE_INELIGIBLE,self::VALUE_ELIGIBLE,self::VALUE_CUSTOMCODE));
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