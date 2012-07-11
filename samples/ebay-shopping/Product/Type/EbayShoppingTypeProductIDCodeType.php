<?php
/**
 * Class file for EbayShoppingTypeProductIDCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeProductIDCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeProductIDCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'ISBN'
	 * Meta informations :
	 * 	- documentation : ISBN-10 or ISBN-13 value for books. (The string length of ProductID indicates whether the ID is 10 or 13 characters.) If you know a book's ISBN, you can use this instead of the eBay CatalogItem or Reference ID to search for that book. Max length of corresponding value: 13
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'EAN'
	 * Meta informations :
	 * 	- documentation : EAN value for books. (This is used more commonly in European countries.) If you know a book's EAN, you can use this instead of the eBay CatalogItem or Reference ID to search for that book. Max length of corresponding value: 13
	 * @return string 'EAN'
	 */
	const VALUE_EAN = 'EAN';
	/**
	 * Constant for value 'UPC'
	 * Meta informations :
	 * 	- documentation : UPC value for products in Music (e.g., CDs), DVDs & Movies, and Video Games categories (or domains). If you know a product's UPC, you can use this instead of the eBay CatalogItem or Reference ID to search for that product. Max length of corresponding value: 12
	 * @return string 'UPC'
	 */
	const VALUE_UPC = 'UPC';
	/**
	 * Constant for value 'MPN'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'MPN'
	 */
	const VALUE_MPN = 'MPN';
	/**
	 * Constant for value 'Keywords'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'Keywords'
	 */
	const VALUE_KEYWORDS = 'Keywords';
	/**
	 * Constant for value 'CatalogItem'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CatalogItem'
	 */
	const VALUE_CATALOGITEM = 'CatalogItem';
	/**
	 * Constant for value 'Reference'
	 * Meta informations :
	 * 	- documentation : The global reference ID for an eBay catalog product. A reference ID is a fixed reference to a product (regardless of version). One reference ID can be associated with multiple CatalogItem IDs. To determine valid reference IDs for products to use as input to FindProducts, first call FindProducts with QueryKeywords (or ProductID). Each product in the response includes a reference ID.<br> <br> As of mid-2008, some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products in a request, the call may return the product with a warning, or it may return an error if the product has been deleted.
	 * @return string 'Reference'
	 */
	const VALUE_REFERENCE = 'Reference';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeProductIDCodeType
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
		return in_array($_value,array(self::VALUE_ISBN,self::VALUE_EAN,self::VALUE_UPC,self::VALUE_MPN,self::VALUE_KEYWORDS,self::VALUE_CATALOGITEM,self::VALUE_REFERENCE,self::VALUE_CUSTOMCODE));
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