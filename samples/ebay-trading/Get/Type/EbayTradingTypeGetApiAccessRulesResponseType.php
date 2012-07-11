<?php
/**
 * Class file for EbayTradingTypeGetApiAccessRulesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetApiAccessRulesResponseType
 * Documentation : Responds to a call to GetApiAccessRules.
 * @date 04/07/2012
 */
class EbayTradingTypeGetApiAccessRulesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ApiAccessRule
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the description of an API access rule, including the call name, the application's current daily and hourly usage, and other values.
	 * @var EbayTradingTypeApiAccessRuleType
	 */
	public $ApiAccessRule;
	/**
	 * Constructor
	 * @param EbayTradingTypeApiAccessRuleType ApiAccessRule
	 * @return EbayTradingTypeGetApiAccessRulesResponseType
	 */
	public function __construct($_ApiAccessRule = null)
	{
		EbayTradingWsdlClass::__construct(array('ApiAccessRule'=>$_ApiAccessRule));
	}
	/**
	 * Set ApiAccessRule
	 * @param ApiAccessRuleType ApiAccessRule
	 * @return ApiAccessRuleType
	 */
	public function setApiAccessRule($_ApiAccessRule)
	{
		return ($this->ApiAccessRule = $_ApiAccessRule);
	}
	/**
	 * Get ApiAccessRule
	 * @return EbayTradingTypeApiAccessRuleType
	 */
	public function getApiAccessRule()
	{
		return $this->ApiAccessRule;
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