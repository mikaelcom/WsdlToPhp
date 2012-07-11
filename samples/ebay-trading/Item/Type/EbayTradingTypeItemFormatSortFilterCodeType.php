<?php
/**
 * Class file for EbayTradingTypeItemFormatSortFilterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemFormatSortFilterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemFormatSortFilterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ShowAnyItems'
	 * Meta informations :
	 * 	- documentation : Show any items, in no particular order.
	 * @return string 'ShowAnyItems'
	 */
	const VALUE_SHOWANYITEMS = 'ShowAnyItems';
	/**
	 * Constant for value 'ShowItemsWithBINFirst'
	 * Meta informations :
	 * 	- documentation : Show items with a Buy It Now price first.
	 * @return string 'ShowItemsWithBINFirst'
	 */
	const VALUE_SHOWITEMSWITHBINFIRST = 'ShowItemsWithBINFirst';
	/**
	 * Constant for value 'ShowOnlyItemsWithBIN'
	 * Meta informations :
	 * 	- documentation : Show only items with a Buy It Now price.
	 * @return string 'ShowOnlyItemsWithBIN'
	 */
	const VALUE_SHOWONLYITEMSWITHBIN = 'ShowOnlyItemsWithBIN';
	/**
	 * Constant for value 'ShowOnlyStoreItems'
	 * Meta informations :
	 * 	- documentation : Show only store inventory items.
	 * @return string 'ShowOnlyStoreItems'
	 */
	const VALUE_SHOWONLYSTOREITEMS = 'ShowOnlyStoreItems';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemFormatSortFilterCodeType
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
		return in_array($_value,array(self::VALUE_SHOWANYITEMS,self::VALUE_SHOWITEMSWITHBINFIRST,self::VALUE_SHOWONLYITEMSWITHBIN,self::VALUE_SHOWONLYSTOREITEMS,self::VALUE_CUSTOMCODE));
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