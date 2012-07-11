<?php
/**
 * Class file for EbayTradingTypeItemSortFilterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemSortFilterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemSortFilterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EndingLast'
	 * Meta informations :
	 * 	- documentation : Sort items by ending time, with items ending last first.
	 * @return string 'EndingLast'
	 */
	const VALUE_ENDINGLAST = 'EndingLast';
	/**
	 * Constant for value 'EndingSoonest'
	 * Meta informations :
	 * 	- documentation : Sort items by ending time, with items ending soonest first.
	 * @return string 'EndingSoonest'
	 */
	const VALUE_ENDINGSOONEST = 'EndingSoonest';
	/**
	 * Constant for value 'HighestPrice'
	 * Meta informations :
	 * 	- documentation : Sort items by price, with the highest price first.
	 * @return string 'HighestPrice'
	 */
	const VALUE_HIGHESTPRICE = 'HighestPrice';
	/**
	 * Constant for value 'LowestPrice'
	 * Meta informations :
	 * 	- documentation : Sort items by price, with the lowest price first.
	 * @return string 'LowestPrice'
	 */
	const VALUE_LOWESTPRICE = 'LowestPrice';
	/**
	 * Constant for value 'NewlyListed'
	 * Meta informations :
	 * 	- documentation : Sort items by listing time, with newly listed items first.
	 * @return string 'NewlyListed'
	 */
	const VALUE_NEWLYLISTED = 'NewlyListed';
	/**
	 * Constant for value 'RandomlySelected'
	 * Meta informations :
	 * 	- documentation : Sort items in a randomly selected order.
	 * @return string 'RandomlySelected'
	 */
	const VALUE_RANDOMLYSELECTED = 'RandomlySelected';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemSortFilterCodeType
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
		return in_array($_value,array(self::VALUE_ENDINGLAST,self::VALUE_ENDINGSOONEST,self::VALUE_HIGHESTPRICE,self::VALUE_LOWESTPRICE,self::VALUE_NEWLYLISTED,self::VALUE_RANDOMLYSELECTED,self::VALUE_CUSTOMCODE));
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