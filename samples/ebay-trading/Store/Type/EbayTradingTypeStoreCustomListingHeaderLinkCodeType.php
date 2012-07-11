<?php
/**
 * Class file for EbayTradingTypeStoreCustomListingHeaderLinkCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomListingHeaderLinkCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomListingHeaderLinkCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No type.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'AboutMePage'
	 * Meta informations :
	 * 	- documentation : Link is to an About Me page.
	 * @return string 'AboutMePage'
	 */
	const VALUE_ABOUTMEPAGE = 'AboutMePage';
	/**
	 * Constant for value 'CustomPage'
	 * Meta informations :
	 * 	- documentation : Link is to a custom page.
	 * @return string 'CustomPage'
	 */
	const VALUE_CUSTOMPAGE = 'CustomPage';
	/**
	 * Constant for value 'CustomCategory'
	 * Meta informations :
	 * 	- documentation : Link is to a custom category.
	 * @return string 'CustomCategory'
	 */
	const VALUE_CUSTOMCATEGORY = 'CustomCategory';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreCustomListingHeaderLinkCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ABOUTMEPAGE,self::VALUE_CUSTOMPAGE,self::VALUE_CUSTOMCATEGORY,self::VALUE_CUSTOMCODE));
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