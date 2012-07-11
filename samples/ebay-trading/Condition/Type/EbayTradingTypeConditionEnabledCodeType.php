<?php
/**
 * Class file for EbayTradingTypeConditionEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeConditionEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeConditionEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : Item condition is not supported for the category. Do not pass ConditionID in AddItem and related calls.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : Item condition is supported for the category. You can pass ConditionID to specify the condition in AddItem and related calls.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : Item condition is required for the category. You must use ConditionID to specify the condition in AddItem and related calls.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeConditionEnabledCodeType
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
		return in_array($_value,array(self::VALUE_DISABLED,self::VALUE_ENABLED,self::VALUE_REQUIRED,self::VALUE_CUSTOMCODE));
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