<?php
/**
 * Class file for EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SalesRecordID'
	 * Meta informations :
	 * 	- documentation : Sorts listings by sales Record ID.
	 * @return string 'SalesRecordID'
	 */
	const VALUE_SALESRECORDID = 'SalesRecordID';
	/**
	 * Constant for value 'BuyerEmail'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Buyer email or ID.
	 * @return string 'BuyerEmail'
	 */
	const VALUE_BUYEREMAIL = 'BuyerEmail';
	/**
	 * Constant for value 'SaleFormat'
	 * Meta informations :
	 * 	- documentation : Sorts listings by sale format.
	 * @return string 'SaleFormat'
	 */
	const VALUE_SALEFORMAT = 'SaleFormat';
	/**
	 * Constant for value 'CustomLabel'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Custom label.
	 * @return string 'CustomLabel'
	 */
	const VALUE_CUSTOMLABEL = 'CustomLabel';
	/**
	 * Constant for value 'TotalPrice'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Total Price.
	 * @return string 'TotalPrice'
	 */
	const VALUE_TOTALPRICE = 'TotalPrice';
	/**
	 * Constant for value 'SaleDate'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Sale Date.
	 * @return string 'SaleDate'
	 */
	const VALUE_SALEDATE = 'SaleDate';
	/**
	 * Constant for value 'PaidDate'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Paid Date.
	 * @return string 'PaidDate'
	 */
	const VALUE_PAIDDATE = 'PaidDate';
	/**
	 * Constant for value 'EmailsSent'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Emails sent.
	 * @return string 'EmailsSent'
	 */
	const VALUE_EMAILSSENT = 'EmailsSent';
	/**
	 * Constant for value 'CheckoutState'
	 * Meta informations :
	 * 	- documentation : Sorts listings by Checkout status.
	 * @return string 'CheckoutState'
	 */
	const VALUE_CHECKOUTSTATE = 'CheckoutState';
	/**
	 * Constant for value 'PaidState'
	 * Meta informations :
	 * 	- documentation : Sorts by Paid status.
	 * @return string 'PaidState'
	 */
	const VALUE_PAIDSTATE = 'PaidState';
	/**
	 * Constant for value 'ShippedState'
	 * Meta informations :
	 * 	- documentation : Sorts by Shipped state.
	 * @return string 'ShippedState'
	 */
	const VALUE_SHIPPEDSTATE = 'ShippedState';
	/**
	 * Constant for value 'FeedbackLeft'
	 * Meta informations :
	 * 	- documentation : Sorts by feedback left.
	 * @return string 'FeedbackLeft'
	 */
	const VALUE_FEEDBACKLEFT = 'FeedbackLeft';
	/**
	 * Constant for value 'FeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Sorts by FeedbackReceived.
	 * @return string 'FeedbackReceived'
	 */
	const VALUE_FEEDBACKRECEIVED = 'FeedbackReceived';
	/**
	 * Constant for value 'ShippedDate'
	 * Meta informations :
	 * 	- documentation : Sorts by Shipped Date.
	 * @return string 'ShippedDate'
	 */
	const VALUE_SHIPPEDDATE = 'ShippedDate';
	/**
	 * Constant for value 'BuyerPostalCode'
	 * Meta informations :
	 * 	- documentation : Sorts by buyer Postal code.
	 * @return string 'BuyerPostalCode'
	 */
	const VALUE_BUYERPOSTALCODE = 'BuyerPostalCode';
	/**
	 * Constant for value 'DaysSinceSale'
	 * Meta informations :
	 * 	- documentation : Sorts by Days since sale.
	 * @return string 'DaysSinceSale'
	 */
	const VALUE_DAYSSINCESALE = 'DaysSinceSale';
	/**
	 * Constant for value 'StartPrice'
	 * Meta informations :
	 * 	- documentation : Sort by Start price.
	 * @return string 'StartPrice'
	 */
	const VALUE_STARTPRICE = 'StartPrice';
	/**
	 * Constant for value 'ReservePrice'
	 * Meta informations :
	 * 	- documentation : Sort by ReservePrice.
	 * @return string 'ReservePrice'
	 */
	const VALUE_RESERVEPRICE = 'ReservePrice';
	/**
	 * Constant for value 'SoldOn'
	 * Meta informations :
	 * 	- documentation : Sorts by Sold site.
	 * @return string 'SoldOn'
	 */
	const VALUE_SOLDON = 'SoldOn';
	/**
	 * Constant for value 'ShippingCost'
	 * Meta informations :
	 * 	- documentation : Sorts by Shipping cost.
	 * @return string 'ShippingCost'
	 */
	const VALUE_SHIPPINGCOST = 'ShippingCost';
	/**
	 * Constant for value 'ListedOn'
	 * Meta informations :
	 * 	- documentation : Sorts by Listed site.
	 * @return string 'ListedOn'
	 */
	const VALUE_LISTEDON = 'ListedOn';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType
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
		return in_array($_value,array(self::VALUE_SALESRECORDID,self::VALUE_BUYEREMAIL,self::VALUE_SALEFORMAT,self::VALUE_CUSTOMLABEL,self::VALUE_TOTALPRICE,self::VALUE_SALEDATE,self::VALUE_PAIDDATE,self::VALUE_EMAILSSENT,self::VALUE_CHECKOUTSTATE,self::VALUE_PAIDSTATE,self::VALUE_SHIPPEDSTATE,self::VALUE_FEEDBACKLEFT,self::VALUE_FEEDBACKRECEIVED,self::VALUE_SHIPPEDDATE,self::VALUE_BUYERPOSTALCODE,self::VALUE_DAYSSINCESALE,self::VALUE_STARTPRICE,self::VALUE_RESERVEPRICE,self::VALUE_SOLDON,self::VALUE_SHIPPINGCOST,self::VALUE_LISTEDON,self::VALUE_CUSTOMCODE));
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