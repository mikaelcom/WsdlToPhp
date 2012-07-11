<?php
/**
 * Class file for EbayTradingTypeAccessRuleStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccessRuleStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccessRuleStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'RuleOff'
	 * Meta informations :
	 * 	- documentation : (out) The rule is turned off, and no rule validation was performed.
	 * @return string 'RuleOff'
	 */
	const VALUE_RULEOFF = 'RuleOff';
	/**
	 * Constant for value 'RuleOn'
	 * Meta informations :
	 * 	- documentation : (out) The rule is turned on, and rule validation was performed.
	 * @return string 'RuleOn'
	 */
	const VALUE_RULEON = 'RuleOn';
	/**
	 * Constant for value 'ApplicationBlocked'
	 * Meta informations :
	 * 	- documentation : (out) The application is blocked from making requests to the call named in this rule.
	 * @return string 'ApplicationBlocked'
	 */
	const VALUE_APPLICATIONBLOCKED = 'ApplicationBlocked';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccessRuleStatusCodeType
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
		return in_array($_value,array(self::VALUE_RULEOFF,self::VALUE_RULEON,self::VALUE_APPLICATIONBLOCKED,self::VALUE_CUSTOMCODE));
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