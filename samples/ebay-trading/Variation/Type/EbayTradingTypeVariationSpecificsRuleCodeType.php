<?php
/**
 * Class file for EbayTradingTypeVariationSpecificsRuleCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationSpecificsRuleCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeVariationSpecificsRuleCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : The recommended name (and values, if any) can be used either in the Item Specifics or VariationSpecifics context in listing calls. This is the default for variation-enabled categories.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : The recommended name/values can't be used in VariationSpecifics (but they can be used in ItemSpecifics). Typically, this occurs when the category doesn't support variations, or if the category requires the name to be the same for all variations in the listing.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeVariationSpecificsRuleCodeType
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
		return in_array($_value,array(self::VALUE_ENABLED,self::VALUE_DISABLED,self::VALUE_CUSTOMCODE));
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