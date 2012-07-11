<?php
/**
 * Class file for EbayTradingTypeProductSortCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSortCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeProductSortCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PopularityAsc'
	 * Meta informations :
	 * 	- documentation : Sort by product popularity (as determined by eBay), and return the most popular products first.
	 * @return string 'PopularityAsc'
	 */
	const VALUE_POPULARITYASC = 'PopularityAsc';
	/**
	 * Constant for value 'PopularityDesc'
	 * Meta informations :
	 * 	- documentation : Sort by product popularity (as determined by eBay), and return the least popular products first.
	 * @return string 'PopularityDesc'
	 */
	const VALUE_POPULARITYDESC = 'PopularityDesc';
	/**
	 * Constant for value 'RatingAsc'
	 * Meta informations :
	 * 	- documentation : Sort by average rating, and return the lowest rated products first.
	 * @return string 'RatingAsc'
	 */
	const VALUE_RATINGASC = 'RatingAsc';
	/**
	 * Constant for value 'RatingDesc'
	 * Meta informations :
	 * 	- documentation : Sort by average rating, and return the highest rated products first.
	 * @return string 'RatingDesc'
	 */
	const VALUE_RATINGDESC = 'RatingDesc';
	/**
	 * Constant for value 'ReviewCountAsc'
	 * Meta informations :
	 * 	- documentation : Sort by the number of reviews, and return products with the fewest reviews first.
	 * @return string 'ReviewCountAsc'
	 */
	const VALUE_REVIEWCOUNTASC = 'ReviewCountAsc';
	/**
	 * Constant for value 'ReviewCountDesc'
	 * Meta informations :
	 * 	- documentation : Sort by the number of reviews, and return products with the most reviews first.
	 * @return string 'ReviewCountDesc'
	 */
	const VALUE_REVIEWCOUNTDESC = 'ReviewCountDesc';
	/**
	 * Constant for value 'ItemCountAsc'
	 * Meta informations :
	 * 	- documentation : Sort by the number of active items listed with this product, and return products with the fewest items first.
	 * @return string 'ItemCountAsc'
	 */
	const VALUE_ITEMCOUNTASC = 'ItemCountAsc';
	/**
	 * Constant for value 'ItemCountDesc'
	 * Meta informations :
	 * 	- documentation : Sort by the number of active items listed with this product, and return products with the most items first.
	 * @return string 'ItemCountDesc'
	 */
	const VALUE_ITEMCOUNTDESC = 'ItemCountDesc';
	/**
	 * Constant for value 'TitleAsc'
	 * Meta informations :
	 * 	- documentation : Sort by the product title, and return products in ascending order. For example, with Western character sets, this means alphabetical order (e.g., A to Z), where titles that start with the word "A" appear before titles that start with the word "The".
	 * @return string 'TitleAsc'
	 */
	const VALUE_TITLEASC = 'TitleAsc';
	/**
	 * Constant for value 'TitleDesc'
	 * Meta informations :
	 * 	- documentation : Sort by the product title, and return products in reverse order (e.g., Z to A).
	 * @return string 'TitleDesc'
	 */
	const VALUE_TITLEDESC = 'TitleDesc';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for values that are not available in the version of the schema you are using. If eBay adds a new value to this code type as of a particular version, we return CustomCode when you specify a lower request version.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeProductSortCodeType
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
		return in_array($_value,array(self::VALUE_POPULARITYASC,self::VALUE_POPULARITYDESC,self::VALUE_RATINGASC,self::VALUE_RATINGDESC,self::VALUE_REVIEWCOUNTASC,self::VALUE_REVIEWCOUNTDESC,self::VALUE_ITEMCOUNTASC,self::VALUE_ITEMCOUNTDESC,self::VALUE_TITLEASC,self::VALUE_TITLEDESC,self::VALUE_CUSTOMCODE));
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