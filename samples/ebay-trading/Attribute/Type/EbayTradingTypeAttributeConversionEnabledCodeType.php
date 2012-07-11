<?php
/**
 * Class file for EbayTradingTypeAttributeConversionEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeConversionEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeConversionEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotApplicable'
	 * Meta informations :
	 * 	- documentation : Please note that we no longer recommend passing both ID-based attributes and custom Item specifics in the same request.<br> <br> eBay has not converted the category from ID-based attributes to only support custom Item Specifics. AddItem and related calls may support passing both formats in the same request (if the category supports both formats.)
	 * @return string 'NotApplicable'
	 */
	const VALUE_NOTAPPLICABLE = 'NotApplicable';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : As previously announced in 2011 and early 2012, most categories no longer perform this conversion, so very few categories return this value.<br> <br> eBay has converted the category from ID-based attributes to only support custom Item Specifics. With this setting:<br> <br> You can pass one format or the other in the same AddItem request, but you can't pass both formats together. If you pass in ID-based attributes in the AddItem family of calls, eBay will convert them to custom Item Specifics on your behalf.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : eBay has converted the category from ID-based attributes to only support custom Item Specifics. ID-based attributes are no longer supported. AddItem and related calls will fail if you pass ID-based attributes in the request.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAttributeConversionEnabledCodeType
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
		return in_array($_value,array(self::VALUE_NOTAPPLICABLE,self::VALUE_ENABLED,self::VALUE_DISABLED,self::VALUE_CUSTOMCODE));
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