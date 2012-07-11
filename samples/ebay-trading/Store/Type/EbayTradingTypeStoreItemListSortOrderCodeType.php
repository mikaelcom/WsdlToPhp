<?php
/**
 * Class file for EbayTradingTypeStoreItemListSortOrderCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreItemListSortOrderCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreItemListSortOrderCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EndingFirst'
	 * Meta informations :
	 * 	- documentation : Lists items with those ending soon listed first.
	 * @return string 'EndingFirst'
	 */
	const VALUE_ENDINGFIRST = 'EndingFirst';
	/**
	 * Constant for value 'NewlyListed'
	 * Meta informations :
	 * 	- documentation : Lists items with those newly listed appearing in the list first.
	 * @return string 'NewlyListed'
	 */
	const VALUE_NEWLYLISTED = 'NewlyListed';
	/**
	 * Constant for value 'LowestPriced'
	 * Meta informations :
	 * 	- documentation : Lists items by price in ascending order. The item with the lowest starting price is listed first.
	 * @return string 'LowestPriced'
	 */
	const VALUE_LOWESTPRICED = 'LowestPriced';
	/**
	 * Constant for value 'HighestPriced'
	 * Meta informations :
	 * 	- documentation : Lists items by price in descending order. The item with the highest starting price is listed first.
	 * @return string 'HighestPriced'
	 */
	const VALUE_HIGHESTPRICED = 'HighestPriced';
	/**
	 * Constant for value 'LowestPricedPlusShipping'
	 * Meta informations :
	 * 	- documentation : Lists items by combined price and shipping cost in ascending order. The item with the lowest combined starting price plus shipping cost is listed first.
	 * @return string 'LowestPricedPlusShipping'
	 */
	const VALUE_LOWESTPRICEDPLUSSHIPPING = 'LowestPricedPlusShipping';
	/**
	 * Constant for value 'HighestPricedPlusShipping'
	 * Meta informations :
	 * 	- documentation : Reserved for future use. Lists items by combined price and shipping cost in descending order. The item with the highest combined starting price plus shipping cost is listed first.
	 * @return string 'HighestPricedPlusShipping'
	 */
	const VALUE_HIGHESTPRICEDPLUSSHIPPING = 'HighestPricedPlusShipping';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreItemListSortOrderCodeType
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
		return in_array($_value,array(self::VALUE_ENDINGFIRST,self::VALUE_NEWLYLISTED,self::VALUE_LOWESTPRICED,self::VALUE_HIGHESTPRICED,self::VALUE_LOWESTPRICEDPLUSSHIPPING,self::VALUE_HIGHESTPRICEDPLUSSHIPPING,self::VALUE_CUSTOMCODE));
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