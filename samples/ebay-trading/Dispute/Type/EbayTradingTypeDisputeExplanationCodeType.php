<?php
/**
 * Class file for EbayTradingTypeDisputeExplanationCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeExplanationCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeExplanationCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BuyerHasNotResponded'
	 * Meta informations :
	 * 	- documentation : The buyer has not responded within the 7-day waiting period. Allowed when DisputeReason is BuyerHasNotPaid.
	 * @return string 'BuyerHasNotResponded'
	 */
	const VALUE_BUYERHASNOTRESPONDED = 'BuyerHasNotResponded';
	/**
	 * Constant for value 'BuyerRefusedToPay'
	 * Meta informations :
	 * 	- documentation : The buyer has refused to pay. Allowed when DisputeReason is BuyerHasNotPaid.
	 * @return string 'BuyerRefusedToPay'
	 */
	const VALUE_BUYERREFUSEDTOPAY = 'BuyerRefusedToPay';
	/**
	 * Constant for value 'BuyerNotClearedToPay'
	 * Meta informations :
	 * 	- documentation : The buyer is not cleared to pay. Allowed when DisputeReason is BuyerHasNotPaid.
	 * @return string 'BuyerNotClearedToPay'
	 */
	const VALUE_BUYERNOTCLEAREDTOPAY = 'BuyerNotClearedToPay';
	/**
	 * Constant for value 'BuyerReturnedItemForRefund'
	 * Meta informations :
	 * 	- documentation : The buyer returned the item for a refund. Allowed when DisputeReason is TransactionMutuallyCanceled.
	 * @return string 'BuyerReturnedItemForRefund'
	 */
	const VALUE_BUYERRETURNEDITEMFORREFUND = 'BuyerReturnedItemForRefund';
	/**
	 * Constant for value 'UnableToResolveTerms'
	 * Meta informations :
	 * 	- documentation : The buyer and seller were unable to resolve a disagreement over terms. Allowed when DisputeReason is TransactionMutuallyCanceled.
	 * @return string 'UnableToResolveTerms'
	 */
	const VALUE_UNABLETORESOLVETERMS = 'UnableToResolveTerms';
	/**
	 * Constant for value 'BuyerNoLongerWantsItem'
	 * Meta informations :
	 * 	- documentation : The buyer no longer wants the item. Allowed when DisputeReason is TransactionMutuallyCanceled.
	 * @return string 'BuyerNoLongerWantsItem'
	 */
	const VALUE_BUYERNOLONGERWANTSITEM = 'BuyerNoLongerWantsItem';
	/**
	 * Constant for value 'BuyerPurchasingMistake'
	 * Meta informations :
	 * 	- documentation : The buyer made a mistake. Allowed when DisputeReason is TransactionMutuallyCanceled.
	 * @return string 'BuyerPurchasingMistake'
	 */
	const VALUE_BUYERPURCHASINGMISTAKE = 'BuyerPurchasingMistake';
	/**
	 * Constant for value 'ShipCountryNotSupported'
	 * Meta informations :
	 * 	- documentation : The buyer requests shipment to a country that the seller does not ship to. Allowed when DisputeReason is BuyerHasNotPaid. Deprecated.
	 * @return string 'ShipCountryNotSupported'
	 */
	const VALUE_SHIPCOUNTRYNOTSUPPORTED = 'ShipCountryNotSupported';
	/**
	 * Constant for value 'ShippingAddressNotConfirmed'
	 * Meta informations :
	 * 	- documentation : The buyer requests shipment to an unconfirmed address. Allowed when DisputeReason is BuyerHasNotPaid or TransactionMutuallyCanceled.
	 * @return string 'ShippingAddressNotConfirmed'
	 */
	const VALUE_SHIPPINGADDRESSNOTCONFIRMED = 'ShippingAddressNotConfirmed';
	/**
	 * Constant for value 'PaymentMethodNotSupported'
	 * Meta informations :
	 * 	- documentation : The buyer requests a payment method that the seller does not accept. Allowed when DisputeReason is BuyerHasNotPaid or TransactionMutuallyCanceled. Deprecated.
	 * @return string 'PaymentMethodNotSupported'
	 */
	const VALUE_PAYMENTMETHODNOTSUPPORTED = 'PaymentMethodNotSupported';
	/**
	 * Constant for value 'BuyerNoLongerRegistered'
	 * Meta informations :
	 * 	- documentation : The buyer is no longer a registered user. Allowed when DisputeReason is BuyerHasNotPaid.
	 * @return string 'BuyerNoLongerRegistered'
	 */
	const VALUE_BUYERNOLONGERREGISTERED = 'BuyerNoLongerRegistered';
	/**
	 * Constant for value 'OtherExplanation'
	 * Meta informations :
	 * 	- documentation : Some other reason not specified in this code list. Allowed when DisputeReason is either BuyerHasNotPaid OR TransactionMutuallyCanceled.
	 * @return string 'OtherExplanation'
	 */
	const VALUE_OTHEREXPLANATION = 'OtherExplanation';
	/**
	 * Constant for value 'Unspecified'
	 * Meta informations :
	 * 	- documentation : Used when DisputeReason is ItemNotReceived or SignificantlyNotAsDescribed.
	 * @return string 'Unspecified'
	 */
	const VALUE_UNSPECIFIED = 'Unspecified';
	/**
	 * Constant for value 'UPIAssistance'
	 * Meta informations :
	 * 	- documentation : The dispute was opened by the Unpaid Item Assistance mechanism. This can only be set by eBay.
	 * @return string 'UPIAssistance'
	 */
	const VALUE_UPIASSISTANCE = 'UPIAssistance';
	/**
	 * Constant for value 'BuyerPaymentNotReceivedOrCleared'
	 * Meta informations :
	 * 	- documentation : Payment was not received or didn't clear.
	 * @return string 'BuyerPaymentNotReceivedOrCleared'
	 */
	const VALUE_BUYERPAYMENTNOTRECEIVEDORCLEARED = 'BuyerPaymentNotReceivedOrCleared';
	/**
	 * Constant for value 'SellerDoesntShipToCountry'
	 * Meta informations :
	 * 	- documentation : Seller doesn't ship to the country requested by buyer.
	 * @return string 'SellerDoesntShipToCountry'
	 */
	const VALUE_SELLERDOESNTSHIPTOCOUNTRY = 'SellerDoesntShipToCountry';
	/**
	 * Constant for value 'BuyerNotPaid'
	 * Meta informations :
	 * 	- documentation : Buyer has not paid for the item.
	 * @return string 'BuyerNotPaid'
	 */
	const VALUE_BUYERNOTPAID = 'BuyerNotPaid';
	/**
	 * Constant for value 'UPIAssistanceDisabled'
	 * Meta informations :
	 * 	- documentation : The dispute was opened by the Unpaid Item Assistance mechanism and was subsequently converted to a manual dispute, either by the seller or by eBay. This can only be set by eBay.
	 * @return string 'UPIAssistanceDisabled'
	 */
	const VALUE_UPIASSISTANCEDISABLED = 'UPIAssistanceDisabled';
	/**
	 * Constant for value 'SellerRanOutOfStock'
	 * Meta informations :
	 * 	- documentation : This dispute explanation can be used by the seller when the seller has to cancel an order due to one or more order line items being out of stock. This value is only valid if using Version 741 (or later) of the Trading WSDL.
	 * @return string 'SellerRanOutOfStock'
	 */
	const VALUE_SELLERRANOUTOFSTOCK = 'SellerRanOutOfStock';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeExplanationCodeType
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
		return in_array($_value,array(self::VALUE_BUYERHASNOTRESPONDED,self::VALUE_BUYERREFUSEDTOPAY,self::VALUE_BUYERNOTCLEAREDTOPAY,self::VALUE_BUYERRETURNEDITEMFORREFUND,self::VALUE_UNABLETORESOLVETERMS,self::VALUE_BUYERNOLONGERWANTSITEM,self::VALUE_BUYERPURCHASINGMISTAKE,self::VALUE_SHIPCOUNTRYNOTSUPPORTED,self::VALUE_SHIPPINGADDRESSNOTCONFIRMED,self::VALUE_PAYMENTMETHODNOTSUPPORTED,self::VALUE_BUYERNOLONGERREGISTERED,self::VALUE_OTHEREXPLANATION,self::VALUE_UNSPECIFIED,self::VALUE_UPIASSISTANCE,self::VALUE_BUYERPAYMENTNOTRECEIVEDORCLEARED,self::VALUE_SELLERDOESNTSHIPTOCOUNTRY,self::VALUE_BUYERNOTPAID,self::VALUE_UPIASSISTANCEDISABLED,self::VALUE_SELLERRANOUTOFSTOCK,self::VALUE_CUSTOMCODE));
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