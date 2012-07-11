<?php
/**
 * Class file for EbayTradingTypeCompleteStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCompleteStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCompleteStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Incomplete'
	 * Meta informations :
	 * 	- documentation : The order is incomplete. Generally speaking, an order is incomplete when payment from the buyer has yet to be initiated.
	 * @return string 'Incomplete'
	 */
	const VALUE_INCOMPLETE = 'Incomplete';
	/**
	 * Constant for value 'Complete'
	 * Meta informations :
	 * 	- documentation : The order is complete. Generally speaking, an order is complete when payment from the buyer has been initiated and processed. <br><br> <b>Note</b>: If the PaymentMethod is CashOnPickup, the CheckoutStatus.Status value in GetOrders will read Complete right at Checkout, even though the seller may not have been officially paid yet. The CheckoutStatus.Status value in GetOrders will remain as Complete even if the seller uses ReviseCheckoutStatus to change the checkout status to Pending. However, the eBayPaymentStatus value in GetOrders will change from NoPaymentFailure to PaymentInProcess.
	 * @return string 'Complete'
	 */
	const VALUE_COMPLETE = 'Complete';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : The order is pending. Generally speaking, an order is pending when payment from the buyer has been initiated but has yet to be fully processed. <br><br> <b>Note</b>: If the PaymentMethod is CashOnPickup, the CheckoutStatus.Status value in GetOrders will read Complete right at Checkout, even though the seller may not have been officially paid yet. The CheckoutStatus.Status value in GetOrders will remain as Complete even if the seller uses ReviseCheckoutStatus to change the checkout status to Pending. However, the eBayPaymentStatus value in GetOrders will change from NoPaymentFailure to PaymentInProcess.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCompleteStatusCodeType
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
		return in_array($_value,array(self::VALUE_INCOMPLETE,self::VALUE_COMPLETE,self::VALUE_PENDING,self::VALUE_CUSTOMCODE));
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