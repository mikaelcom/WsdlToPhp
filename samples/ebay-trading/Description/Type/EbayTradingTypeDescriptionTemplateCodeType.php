<?php
/**
 * Class file for EbayTradingTypeDescriptionTemplateCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDescriptionTemplateCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDescriptionTemplateCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Layout'
	 * Meta informations :
	 * 	- documentation : The template details establish how pictures are to be positioned relative to the description text.
	 * @return string 'Layout'
	 */
	const VALUE_LAYOUT = 'Layout';
	/**
	 * Constant for value 'Theme'
	 * Meta informations :
	 * 	- documentation : The template determines which eBay-provided theme (e.g. Valentine's Day) is to be applied for presenting pictures and description text.
	 * @return string 'Theme'
	 */
	const VALUE_THEME = 'Theme';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDescriptionTemplateCodeType
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
		return in_array($_value,array(self::VALUE_LAYOUT,self::VALUE_THEME,self::VALUE_CUSTOMCODE));
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