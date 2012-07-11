<?php
/**
 * Class file for EbayTradingTypeVariationPictureRuleCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationPictureRuleCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeVariationPictureRuleCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : If the name is used in VariationSpecifics, then it must be used as the Pictures.VariationSpecificName.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : If the name is used in VariationSpecifics, then it can be used as the Pictures.VariationSpecificName. This is the default for variation-enabled categories.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : The name cannot be used as the Pictures.VariationSpecificName.
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
	 * @return EbayTradingTypeVariationPictureRuleCodeType
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
		return in_array($_value,array(self::VALUE_REQUIRED,self::VALUE_ENABLED,self::VALUE_DISABLED,self::VALUE_CUSTOMCODE));
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