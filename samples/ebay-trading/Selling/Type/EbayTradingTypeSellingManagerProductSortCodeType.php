<?php
/**
 * Class file for EbayTradingTypeSellingManagerProductSortCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerProductSortCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerProductSortCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ActiveQuantity'
	 * Meta informations :
	 * 	- documentation : Sort products by by quantity currently listed.
	 * @return string 'ActiveQuantity'
	 */
	const VALUE_ACTIVEQUANTITY = 'ActiveQuantity';
	/**
	 * Constant for value 'AvailableToList'
	 * Meta informations :
	 * 	- documentation : Sort unlisted products by availability to list.
	 * @return string 'AvailableToList'
	 */
	const VALUE_AVAILABLETOLIST = 'AvailableToList';
	/**
	 * Constant for value 'AveragePrice'
	 * Meta informations :
	 * 	- documentation : Sort by average price of sold items.
	 * @return string 'AveragePrice'
	 */
	const VALUE_AVERAGEPRICE = 'AveragePrice';
	/**
	 * Constant for value 'AverageUnitCost'
	 * Meta informations :
	 * 	- documentation : Sort by average unit cost of items.
	 * @return string 'AverageUnitCost'
	 */
	const VALUE_AVERAGEUNITCOST = 'AverageUnitCost';
	/**
	 * Constant for value 'CustomLabel'
	 * Meta informations :
	 * 	- documentation : Sort products by label.
	 * @return string 'CustomLabel'
	 */
	const VALUE_CUSTOMLABEL = 'CustomLabel';
	/**
	 * Constant for value 'ProductName'
	 * Meta informations :
	 * 	- documentation : Sort by product name.
	 * @return string 'ProductName'
	 */
	const VALUE_PRODUCTNAME = 'ProductName';
	/**
	 * Constant for value 'LastSubmittedDate'
	 * Meta informations :
	 * 	- documentation : Sort by submitted date.
	 * @return string 'LastSubmittedDate'
	 */
	const VALUE_LASTSUBMITTEDDATE = 'LastSubmittedDate';
	/**
	 * Constant for value 'ScheduledQuantity'
	 * Meta informations :
	 * 	- documentation : Sort by quantity scheduled to be listed.
	 * @return string 'ScheduledQuantity'
	 */
	const VALUE_SCHEDULEDQUANTITY = 'ScheduledQuantity';
	/**
	 * Constant for value 'SoldQuantity'
	 * Meta informations :
	 * 	- documentation : Sort by quantity sold.
	 * @return string 'SoldQuantity'
	 */
	const VALUE_SOLDQUANTITY = 'SoldQuantity';
	/**
	 * Constant for value 'SuccessPercent'
	 * Meta informations :
	 * 	- documentation : Sort by the percentage of ended listings that had a sale.
	 * @return string 'SuccessPercent'
	 */
	const VALUE_SUCCESSPERCENT = 'SuccessPercent';
	/**
	 * Constant for value 'UnsoldQuantity'
	 * Meta informations :
	 * 	- documentation : Sort by number of unsold items.
	 * @return string 'UnsoldQuantity'
	 */
	const VALUE_UNSOLDQUANTITY = 'UnsoldQuantity';
	/**
	 * Constant for value 'FolderName'
	 * Meta informations :
	 * 	- documentation : Sort products by folder name.
	 * @return string 'FolderName'
	 */
	const VALUE_FOLDERNAME = 'FolderName';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerProductSortCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVEQUANTITY,self::VALUE_AVAILABLETOLIST,self::VALUE_AVERAGEPRICE,self::VALUE_AVERAGEUNITCOST,self::VALUE_CUSTOMLABEL,self::VALUE_PRODUCTNAME,self::VALUE_LASTSUBMITTEDDATE,self::VALUE_SCHEDULEDQUANTITY,self::VALUE_SOLDQUANTITY,self::VALUE_SUCCESSPERCENT,self::VALUE_UNSOLDQUANTITY,self::VALUE_FOLDERNAME,self::VALUE_CUSTOMCODE));
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