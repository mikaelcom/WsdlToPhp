<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemListFailedAutomationRules'
	 * Meta informations :
	 * 	- documentation : Item failed to be listed using automation rules.
	 * @return string 'ItemListFailedAutomationRules'
	 */
	const VALUE_ITEMLISTFAILEDAUTOMATIONRULES = 'ItemListFailedAutomationRules';
	/**
	 * Constant for value 'ItemRelistFailedAutomationRules'
	 * Meta informations :
	 * 	- documentation : Relist item automation rule failed.
	 * @return string 'ItemRelistFailedAutomationRules'
	 */
	const VALUE_ITEMRELISTFAILEDAUTOMATIONRULES = 'ItemRelistFailedAutomationRules';
	/**
	 * Constant for value 'ItemListFailedSecondChanceOfferAutoRules'
	 * Meta informations :
	 * 	- documentation : Item failed to be listed with Second Chance offer automation rule.
	 * @return string 'ItemListFailedSecondChanceOfferAutoRules'
	 */
	const VALUE_ITEMLISTFAILEDSECONDCHANCEOFFERAUTORULES = 'ItemListFailedSecondChanceOfferAutoRules';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerAutomationPropertyTypeCodeType
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
		return in_array($_value,array(self::VALUE_ITEMLISTFAILEDAUTOMATIONRULES,self::VALUE_ITEMRELISTFAILEDAUTOMATIONRULES,self::VALUE_ITEMLISTFAILEDSECONDCHANCEOFFERAUTORULES,self::VALUE_CUSTOMCODE));
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