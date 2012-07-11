<?php
/**
 * Class file for EbayTradingTypeListingEnhancementsCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingEnhancementsCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingEnhancementsCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Border'
	 * Meta informations :
	 * 	- documentation : If specified, the seller wants the item to be displayed with a border that goes around the item in search result pages that return multiple items. The border differentiates the item from other items in the list. Applicable listing fees apply.
	 * @return string 'Border'
	 */
	const VALUE_BORDER = 'Border';
	/**
	 * Constant for value 'BoldTitle'
	 * Meta informations :
	 * 	- documentation : If specified, the seller wants the title for the item's listing to be in boldface type. Applicable listing fees apply. Does not affect the item subtitle (Item.SubTitle), if any. Not applicable to eBay Motors.
	 * @return string 'BoldTitle'
	 */
	const VALUE_BOLDTITLE = 'BoldTitle';
	/**
	 * Constant for value 'Featured'
	 * Meta informations :
	 * 	- documentation : Listing is a "Featured Plus" item. The item will display prominently in the Featured Items section of its category list, and it will stand out on search results pages. It will also display in the regular, non- featured item list. Only available to users with a Feedback rating of 10 or greater.
	 * @return string 'Featured'
	 */
	const VALUE_FEATURED = 'Featured';
	/**
	 * Constant for value 'Highlight'
	 * Meta informations :
	 * 	- documentation : Listing is highlighted in a different color in lists.
	 * @return string 'Highlight'
	 */
	const VALUE_HIGHLIGHT = 'Highlight';
	/**
	 * Constant for value 'HomePageFeatured'
	 * Meta informations :
	 * 	- documentation : Listing will have a chance to rotate into a special display on eBay's Home page. Your item is very likely to show up on the Home page, although eBay does not guarantee that your item will be highlighted in this way. This is the highest level of visibility on eBay. <br><br> Not applicable for eBay Motors (SiteId 100). In order to feature the listing on eBay Motors home page, use PictureDetails.GalleryType.Featured instead. See GalleryTypeCodeType for more information.
	 * @return string 'HomePageFeatured'
	 */
	const VALUE_HOMEPAGEFEATURED = 'HomePageFeatured';
	/**
	 * Constant for value 'ProPackBundle'
	 * Meta informations :
	 * 	- documentation : Listing is using ProPackBundle (a feature pack). Applies only to US and Canadian eBay motor vehicle sellers, except in the US eBay Motors Parts and Accessories category. Contains the BoldTitle, Border, Featured and Highlight features.
	 * @return string 'ProPackBundle'
	 */
	const VALUE_PROPACKBUNDLE = 'ProPackBundle';
	/**
	 * Constant for value 'BasicUpgradePackBundle'
	 * Meta informations :
	 * 	- documentation : No longer applicable to any site. Formerly, a feature pack applicable to the Australia site (site ID 15, abbreviation AU) only. Contained the Gallery and Subtitle features.
	 * @return string 'BasicUpgradePackBundle'
	 */
	const VALUE_BASICUPGRADEPACKBUNDLE = 'BasicUpgradePackBundle';
	/**
	 * Constant for value 'ValuePackBundle'
	 * Meta informations :
	 * 	- documentation : Listing is using ValuePack bundle (a feature pack), which combines the features Gallery, Subtitle, and Listing Designer for a discounted price. Support for this feature varies by site and category. <br><br> <span class="tablenote"><b>Note:</b> The following sites offer free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On these sites (starting on the same production date), whenever ValuePackBundle is selected in a request, the basic Gallery feature included in the Value Pack bundle is now automatically upgraded to the Gallery Plus feature at no extra cost (see Item.PictureDetails.GalleryType.Plus for more information on Gallery Plus). <br><br> If ValuePackBundle is selected and no Gallery picture is found, the request is still accepted and the ValuePackBundle fee will still apply. Whenever a listing with ValuePackBundle is created on a site that offers free Gallery, the Gallery Plus upgrade will display on all sites and categories that support ValuePackBundle. <br><br> Note that if Gallery Showcase is automatically included with Gallery Plus, it will be extended to listings with ValuePackBundle that upgrade Gallery to Gallery Plus (see Item.PictureDetails.GalleryType.Plus for more information on Gallery Plus). </span>
	 * @return string 'ValuePackBundle'
	 */
	const VALUE_VALUEPACKBUNDLE = 'ValuePackBundle';
	/**
	 * Constant for value 'ProPackPlusBundle'
	 * Meta informations :
	 * 	- documentation : Support for this feature varies by site and category. A ProPackPlusBundle listing is using ProPackPlus bundle (a feature pack), which combines the features of BoldTitle, Border, Highlight, Featured (which is equivalent to a GalleryType value of Featured), and Gallery, for a discounted price. Note that if, for example, in AddItem, if you use ProPackPlusBundle and a GalleryType value of Gallery, then the resulting item will have a GalleryType value of Featured.
	 * @return string 'ProPackPlusBundle'
	 */
	const VALUE_PROPACKPLUSBUNDLE = 'ProPackPlusBundle';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingEnhancementsCodeType
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
		return in_array($_value,array(self::VALUE_BORDER,self::VALUE_BOLDTITLE,self::VALUE_FEATURED,self::VALUE_HIGHLIGHT,self::VALUE_HOMEPAGEFEATURED,self::VALUE_PROPACKBUNDLE,self::VALUE_BASICUPGRADEPACKBUNDLE,self::VALUE_VALUEPACKBUNDLE,self::VALUE_PROPACKPLUSBUNDLE,self::VALUE_CUSTOMCODE));
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