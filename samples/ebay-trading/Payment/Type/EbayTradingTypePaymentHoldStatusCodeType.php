<?php
/**
 * Class file for EbayTradingTypePaymentHoldStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentHoldStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaymentHoldStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PaymentReview'
	 * Meta informations :
	 * 	- documentation : This value indicates a possible issue with a buyer. If this value is returned, the TransactionArray.Transaction.SellerPaidStatus field is returned as NotPaid in GetMyeBaySelling, and the TransactionArray.Transaction.BuyerPaidStatus field is returned as PaidWithPayPal in GetMyeBayBuying.
	 * @return string 'PaymentReview'
	 */
	const VALUE_PAYMENTREVIEW = 'PaymentReview';
	/**
	 * Constant for value 'MerchantHold'
	 * Meta informations :
	 * 	- documentation : This value indicates a possible issue with a seller. If this value is returned, the TransactionArray.Transaction.SellerPaidStatus field is returned as PaidWithPayPal in GetMyeBaySelling, and the TransactionArray.Transaction.BuyerPaidStatus field is returned as PaidWithPayPal in GetMyeBayBuying.
	 * @return string 'MerchantHold'
	 */
	const VALUE_MERCHANTHOLD = 'MerchantHold';
	/**
	 * Constant for value 'Released'
	 * Meta informations :
	 * 	- documentation : This value indicates that a payment hold on the item has been released.
	 * @return string 'Released'
	 */
	const VALUE_RELEASED = 'Released';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : This value indicates that there is no payment hold on the item.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'NewSellerHold'
	 * Meta informations :
	 * 	- documentation : This value indicates that there is a "new seller hold" on the item. PayPal may hold payments to a new seller for up to 21 days.
	 * @return string 'NewSellerHold'
	 */
	const VALUE_NEWSELLERHOLD = 'NewSellerHold';
	/**
	 * Constant for value 'PaymentHold'
	 * Meta informations :
	 * 	- documentation : This value indicates that there is a payment hold on the item.
	 * @return string 'PaymentHold'
	 */
	const VALUE_PAYMENTHOLD = 'PaymentHold';
	/**
	 * Constant for value 'ReleasePending'
	 * Meta informations :
	 * 	- documentation : This value indicates that the payout distribution to the seller's account is pending. This value is only applicable to DE/AT sellers subject to the new eBay payment process.
	 * @return string 'ReleasePending'
	 */
	const VALUE_RELEASEPENDING = 'ReleasePending';
	/**
	 * Constant for value 'ReleaseConfirmed'
	 * Meta informations :
	 * 	- documentation : This value indicates that the payout distribution to the seller's account is confirmed. This value is only applicable to DE/AT sellers subject to the new eBay payment process.
	 * @return string 'ReleaseConfirmed'
	 */
	const VALUE_RELEASECONFIRMED = 'ReleaseConfirmed';
	/**
	 * Constant for value 'ReleaseFailed'
	 * Meta informations :
	 * 	- documentation : This value indicates that the payout distribution to the seller's account failed. This value is only applicable to DE/AT sellers subject to the new eBay payment process.
	 * @return string 'ReleaseFailed'
	 */
	const VALUE_RELEASEFAILED = 'ReleaseFailed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePaymentHoldStatusCodeType
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
		return in_array($_value,array(self::VALUE_PAYMENTREVIEW,self::VALUE_MERCHANTHOLD,self::VALUE_RELEASED,self::VALUE_NONE,self::VALUE_NEWSELLERHOLD,self::VALUE_PAYMENTHOLD,self::VALUE_RELEASEPENDING,self::VALUE_RELEASECONFIRMED,self::VALUE_RELEASEFAILED,self::VALUE_CUSTOMCODE));
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