<?php
/**
 * Class file for EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ProductsOutOfStock'
	 * Meta informations :
	 * 	- documentation : Products which are out of stock.
	 * @return string 'ProductsOutOfStock'
	 */
	const VALUE_PRODUCTSOUTOFSTOCK = 'ProductsOutOfStock';
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : Products that are active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'InActive'
	 * Meta informations :
	 * 	- documentation : Products that are inactive.
	 * @return string 'InActive'
	 */
	const VALUE_INACTIVE = 'InActive';
	/**
	 * Constant for value 'LowStock'
	 * Meta informations :
	 * 	- documentation : Products in low stock.
	 * @return string 'LowStock'
	 */
	const VALUE_LOWSTOCK = 'LowStock';
	/**
	 * Constant for value 'WithListings'
	 * Meta informations :
	 * 	- documentation : Products with listings.
	 * @return string 'WithListings'
	 */
	const VALUE_WITHLISTINGS = 'WithListings';
	/**
	 * Constant for value 'WithoutListings'
	 * Meta informations :
	 * 	- documentation : Products without listings.
	 * @return string 'WithoutListings'
	 */
	const VALUE_WITHOUTLISTINGS = 'WithoutListings';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
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
		return in_array($_value,array(self::VALUE_PRODUCTSOUTOFSTOCK,self::VALUE_ACTIVE,self::VALUE_INACTIVE,self::VALUE_LOWSTOCK,self::VALUE_WITHLISTINGS,self::VALUE_WITHOUTLISTINGS,self::VALUE_CUSTOMCODE));
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