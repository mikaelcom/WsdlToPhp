<?php
/**
 * Class file for EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeClassifiedAdBestOfferEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : The Best Offer feature is disabled for the category.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : The Best Offer feature is enabled for the category.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : The category supports the Best Offer feature only.
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
	 * @return EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
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