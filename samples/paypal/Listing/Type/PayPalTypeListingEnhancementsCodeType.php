<?php
/**
 * Class file for PayPalTypeListingEnhancementsCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListingEnhancementsCodeType
 * @date 14/07/2012
 */
class PayPalTypeListingEnhancementsCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Border'
	 * Meta informations :
	 * 	- documentation : Indicates whether an item will be displayed with a border that will go around the item (e.g., for category-based search result page or store search that brings up multiple items) to differentiate it from the rest of list.
	 * @return string 'Border'
	 */
	const VALUE_BORDER = 'Border';
	/**
	 * Constant for value 'BoldTitle'
	 * Meta informations :
	 * 	- documentation : Indicates whether the bolding option was used.
	 * @return string 'BoldTitle'
	 */
	const VALUE_BOLDTITLE = 'BoldTitle';
	/**
	 * Constant for value 'Featured'
	 * Meta informations :
	 * 	- documentation : Indicates whether it is a featured item.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Highlight'
	 * Meta informations :
	 * 	- documentation : Indicates item's listing is highlighted.
	 * @return string 'Highlight'
	 */
	const VALUE_HIGHLIGHT = 'Highlight';
	/**
	 * Constant for value 'HomePageFeatured'
	 * Meta informations :
	 * 	- documentation : Indicates item's listing is home page featured.
	 * @return string 'HomePageFeatured'
	 */
	const VALUE_HOMEPAGEFEATURED = 'HomePageFeatured';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeListingEnhancementsCodeType
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
		return in_array($_value,array(self::VALUE_BORDER,self::VALUE_BOLDTITLE,self::VALUE_FEATURED,self::VALUE_HIGHLIGHT,self::VALUE_HOMEPAGEFEATURED,self::VALUE_CUSTOMCODE));
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