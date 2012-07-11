<?php
/**
 * Class file for EbayTradingTypePromotionSchemeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePromotionSchemeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePromotionSchemeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemToItem'
	 * Meta informations :
	 * 	- documentation : The seller specifies individual items in the store that are promoted when a buyer views, bids on, or purchases a store item.
	 * @return string 'ItemToItem'
	 */
	const VALUE_ITEMTOITEM = 'ItemToItem';
	/**
	 * Constant for value 'ItemToStoreCat'
	 * Meta informations :
	 * 	- documentation : The seller specifies a store category from which items are promoted when a buyer views, bids on, or purchases an individual item in the store.
	 * @return string 'ItemToStoreCat'
	 */
	const VALUE_ITEMTOSTORECAT = 'ItemToStoreCat';
	/**
	 * Constant for value 'StoreToStoreCat'
	 * Meta informations :
	 * 	- documentation : The seller specifies referring and promoted categories, both from the store. When a buyer views or acts on any item from that category, items from the promoted category are also displayed.
	 * @return string 'StoreToStoreCat'
	 */
	const VALUE_STORETOSTORECAT = 'StoreToStoreCat';
	/**
	 * Constant for value 'ItemToDefaultRule'
	 * Meta informations :
	 * 	- documentation : The seller specifies a referring item and defines promoted items selected from a store category, eBay category, or keywords.
	 * @return string 'ItemToDefaultRule'
	 */
	const VALUE_ITEMTODEFAULTRULE = 'ItemToDefaultRule';
	/**
	 * Constant for value 'DefaultRule'
	 * Meta informations :
	 * 	- documentation : The seller specifies a store category or eBay category, with optional keywords, for referring items and one for promoted items. When a referring item is selected from the category and keywords, items from the promoted category and keywords are also displayed.
	 * @return string 'DefaultRule'
	 */
	const VALUE_DEFAULTRULE = 'DefaultRule';
	/**
	 * Constant for value 'CategoryProximity'
	 * Meta informations :
	 * 	- documentation : This scheme is returned as a backfill scheme used to promote items.
	 * @return string 'CategoryProximity'
	 */
	const VALUE_CATEGORYPROXIMITY = 'CategoryProximity';
	/**
	 * Constant for value 'RelatedCategoryRule'
	 * Meta informations :
	 * 	- documentation : This scheme is returned as related category scheme used to promote items.
	 * @return string 'RelatedCategoryRule'
	 */
	const VALUE_RELATEDCATEGORYRULE = 'RelatedCategoryRule';
	/**
	 * Constant for value 'DefaultUpSellLogic'
	 * Meta informations :
	 * 	- documentation : This scheme is returned as a backfill scheme used to promote items.
	 * @return string 'DefaultUpSellLogic'
	 */
	const VALUE_DEFAULTUPSELLLOGIC = 'DefaultUpSellLogic';
	/**
	 * Constant for value 'DefaultCrossSellLogic'
	 * Meta informations :
	 * 	- documentation : This scheme is returned as a backfill scheme used to promote items.
	 * @return string 'DefaultCrossSellLogic'
	 */
	const VALUE_DEFAULTCROSSSELLLOGIC = 'DefaultCrossSellLogic';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePromotionSchemeCodeType
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
		return in_array($_value,array(self::VALUE_ITEMTOITEM,self::VALUE_ITEMTOSTORECAT,self::VALUE_STORETOSTORECAT,self::VALUE_ITEMTODEFAULTRULE,self::VALUE_DEFAULTRULE,self::VALUE_CATEGORYPROXIMITY,self::VALUE_RELATEDCATEGORYRULE,self::VALUE_DEFAULTUPSELLLOGIC,self::VALUE_DEFAULTCROSSSELLLOGIC,self::VALUE_CUSTOMCODE));
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