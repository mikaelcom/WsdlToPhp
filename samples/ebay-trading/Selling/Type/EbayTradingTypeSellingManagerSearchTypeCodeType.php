<?php
/**
 * Class file for EbayTradingTypeSellingManagerSearchTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSearchTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSearchTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BuyerUserID'
	 * Meta informations :
	 * 	- documentation : Search for listings based on Buyer ID.
	 * @return string 'BuyerUserID'
	 */
	const VALUE_BUYERUSERID = 'BuyerUserID';
	/**
	 * Constant for value 'BuyerEmail'
	 * Meta informations :
	 * 	- documentation : Search for listings based on Buyers email.
	 * @return string 'BuyerEmail'
	 */
	const VALUE_BUYEREMAIL = 'BuyerEmail';
	/**
	 * Constant for value 'BuyerFullName'
	 * Meta informations :
	 * 	- documentation : Search for listings based on Buyers full name.
	 * @return string 'BuyerFullName'
	 */
	const VALUE_BUYERFULLNAME = 'BuyerFullName';
	/**
	 * Constant for value 'ItemID'
	 * Meta informations :
	 * 	- documentation : Search for listings based on ItemID.
	 * @return string 'ItemID'
	 */
	const VALUE_ITEMID = 'ItemID';
	/**
	 * Constant for value 'Title'
	 * Meta informations :
	 * 	- documentation : Search for listings based on Item Title.
	 * @return string 'Title'
	 */
	const VALUE_TITLE = 'Title';
	/**
	 * Constant for value 'ProductID'
	 * Meta informations :
	 * 	- documentation : Search for listings based on Product ID.
	 * @return string 'ProductID'
	 */
	const VALUE_PRODUCTID = 'ProductID';
	/**
	 * Constant for value 'ProductName'
	 * Meta informations :
	 * 	- documentation : Search for listings based on ProductName.
	 * @return string 'ProductName'
	 */
	const VALUE_PRODUCTNAME = 'ProductName';
	/**
	 * Constant for value 'CustomLabel'
	 * Meta informations :
	 * 	- documentation : Search for listings based on SKU.
	 * @return string 'CustomLabel'
	 */
	const VALUE_CUSTOMLABEL = 'CustomLabel';
	/**
	 * Constant for value 'SaleRecordID'
	 * Meta informations :
	 * 	- documentation : Search for listings based on the sale record ID. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold view in Selling Manager. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for a single or multiple line item order. <br/><br/> For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container must also be used, passing in a date range that includes the date on which the specific sale occurred.
	 * @return string 'SaleRecordID'
	 */
	const VALUE_SALERECORDID = 'SaleRecordID';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerSearchTypeCodeType
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
		return in_array($_value,array(self::VALUE_BUYERUSERID,self::VALUE_BUYEREMAIL,self::VALUE_BUYERFULLNAME,self::VALUE_ITEMID,self::VALUE_TITLE,self::VALUE_PRODUCTID,self::VALUE_PRODUCTNAME,self::VALUE_CUSTOMLABEL,self::VALUE_SALERECORDID,self::VALUE_CUSTOMCODE));
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