<?php
/**
 * Class file for EbayShoppingTypeProductSortCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeProductSortCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeProductSortCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Popularity'
	 * Meta informations :
	 * 	- documentation : Sort by product popularity (as determined by eBay). (This is the default sort order.)
	 * @return string 'Popularity'
	 */
	const VALUE_POPULARITY = 'Popularity';
	/**
	 * Constant for value 'Rating'
	 * Meta informations :
	 * 	- documentation : Sort by average rating.
	 * @return string 'Rating'
	 */
	const VALUE_RATING = 'Rating';
	/**
	 * Constant for value 'ReviewCount'
	 * Meta informations :
	 * 	- documentation : Sort by the number of reviews on eBay.
	 * @return string 'ReviewCount'
	 */
	const VALUE_REVIEWCOUNT = 'ReviewCount';
	/**
	 * Constant for value 'ItemCount'
	 * Meta informations :
	 * 	- documentation : Sort by the number of active items listed with this product.
	 * @return string 'ItemCount'
	 */
	const VALUE_ITEMCOUNT = 'ItemCount';
	/**
	 * Constant for value 'Title'
	 * Meta informations :
	 * 	- documentation : Sort by the product title.
	 * @return string 'Title'
	 */
	const VALUE_TITLE = 'Title';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for values that are not available in the version of the schema you are using. If eBay adds a new value to this code type as of a newer version, we return CustomCode instead when you specify a lower request version.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeProductSortCodeType
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
		return in_array($_value,array(self::VALUE_POPULARITY,self::VALUE_RATING,self::VALUE_REVIEWCOUNT,self::VALUE_ITEMCOUNT,self::VALUE_TITLE,self::VALUE_CUSTOMCODE));
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