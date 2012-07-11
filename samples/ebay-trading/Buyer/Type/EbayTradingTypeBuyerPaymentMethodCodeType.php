<?php
/**
 * Class file for EbayTradingTypeBuyerPaymentMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerPaymentMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerPaymentMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No payment method specified. For example, no payment methods would be specified for Ad format listings.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MOCC'
	 * Meta informations :
	 * 	- documentation : Money order/cashiers check. Not applicable to US/CA eBay Motors listings.
	 * @return string 'MOCC'
	 */
	const VALUE_MOCC = 'MOCC';
	/**
	 * Constant for value 'AmEx'
	 * Meta informations :
	 * 	- documentation : American Express. Not applicable to US/CA eBay Motors listings.
	 * @return string 'AmEx'
	 */
	const VALUE_AMEX = 'AmEx';
	/**
	 * Constant for value 'PaymentSeeDescription'
	 * Meta informations :
	 * 	- documentation : Payment instructions are contained in the item's description.
	 * @return string 'PaymentSeeDescription'
	 */
	const VALUE_PAYMENTSEEDESCRIPTION = 'PaymentSeeDescription';
	/**
	 * Constant for value 'CCAccepted'
	 * Meta informations :
	 * 	- documentation : Credit card. Not applicable to Real Estate or US/CA eBay Motors listings.
	 * @return string 'CCAccepted'
	 */
	const VALUE_CCACCEPTED = 'CCAccepted';
	/**
	 * Constant for value 'PersonalCheck'
	 * Meta informations :
	 * 	- documentation : Personal check.
	 * @return string 'PersonalCheck'
	 */
	const VALUE_PERSONALCHECK = 'PersonalCheck';
	/**
	 * Constant for value 'COD'
	 * Meta informations :
	 * 	- documentation : Cash on delivery. This payment method is obsolete (ignored) for the US, US eBay Motors, UK, and Canada sites. See "Field Differences for eBay Sites" in the eBay Web Services Guide for a list of sites that accept COD as a payment method. Not applicable to Real Estate listings. When revising an item (on sites that still support COD), you can add or change its value.
	 * @return string 'COD'
	 */
	const VALUE_COD = 'COD';
	/**
	 * Constant for value 'VisaMC'
	 * Meta informations :
	 * 	- documentation : Visa/Mastercard. These qualify as safe payment methods. Not applicable to US/CA eBay Motors listings.
	 * @return string 'VisaMC'
	 */
	const VALUE_VISAMC = 'VisaMC';
	/**
	 * Constant for value 'PaisaPayAccepted'
	 * Meta informations :
	 * 	- documentation : PaisaPay (for India site only). This qualifies as a safe payment method and is required for all categories on the IN site.
	 * @return string 'PaisaPayAccepted'
	 */
	const VALUE_PAISAPAYACCEPTED = 'PaisaPayAccepted';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other forms of payment. Some custom methods are accepted by seller as the payment method in the transaction. Not applicable to US/CA eBay Motors listings (see PaymentSeeDescription instead).
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal is accepted as a payment method. This qualifies as a safe payment method. If true in listing requests, Item.PayPalEmailAddress must also be specified.<br> <br> If you don't pass PayPal in the listing request but the seller's eBay preferences are set to accept PayPal on all listings, eBay will add PayPal as a payment method for you in most cases, and we may return a warning. <br> <br> PayPal must be accepted when the seller requires immediate payment (Item.AutoPay) or offers other PayPal-based features, such as a finance offer (Item.FinanceOfferID). PayPal must be accepted for charity listings. PayPal must be accepted for event ticket listings when the venue is in New York state or Illinois, so that eBay can offer buyer protection (per state law). (For some applications, it may be simplest to use errors returned from VerifyAddItem to flag the PayPal requirement for New York and Illinois ticket listings.) PayPal must be accepted for US eBay Motors listings that require a deposit (and it will not be set automatically based on the seller's preferences). Conversely, if PayPal is specified for US eBay Motors listings, deposit attributes must be specified.<br> <br> For additional information about features that depend on PayPal, see the eBay Web Services Guide.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'Discover'
	 * Meta informations :
	 * 	- documentation : Discover card. Not applicable to US/CA eBay Motors listings.
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'CashOnPickup'
	 * Meta informations :
	 * 	- documentation : Payment on delivery. Not applicable to Real Estate or US/CA eBay Motors listings.
	 * @return string 'CashOnPickup'
	 */
	const VALUE_CASHONPICKUP = 'CashOnPickup';
	/**
	 * Constant for value 'MoneyXferAccepted'
	 * Meta informations :
	 * 	- documentation : Direct transfer of money. Not applicable to US/CA eBay Motors listings.
	 * @return string 'MoneyXferAccepted'
	 */
	const VALUE_MONEYXFERACCEPTED = 'MoneyXferAccepted';
	/**
	 * Constant for value 'MoneyXferAcceptedInCheckout'
	 * Meta informations :
	 * 	- documentation : If the seller has bank account information on file, and MoneyXferAcceptedInCheckout = true, then the bank account information will be displayed in Checkout. Applicable only to certain global eBay sites. See the "International Differences Overview" in the eBay Web Services Guide.
	 * @return string 'MoneyXferAcceptedInCheckout'
	 */
	const VALUE_MONEYXFERACCEPTEDINCHECKOUT = 'MoneyXferAcceptedInCheckout';
	/**
	 * Constant for value 'OtherOnlinePayments'
	 * Meta informations :
	 * 	- documentation : All other online payments. Not applicable to US/CA eBay Motors listings.
	 * @return string 'OtherOnlinePayments'
	 */
	const VALUE_OTHERONLINEPAYMENTS = 'OtherOnlinePayments';
	/**
	 * Constant for value 'Escrow'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'Escrow'
	 */
	const VALUE_ESCROW = 'Escrow';
	/**
	 * Constant for value 'PrePayDelivery'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'PrePayDelivery'
	 */
	const VALUE_PREPAYDELIVERY = 'PrePayDelivery';
	/**
	 * Constant for value 'CODPrePayDelivery'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CODPrePayDelivery'
	 */
	const VALUE_CODPREPAYDELIVERY = 'CODPrePayDelivery';
	/**
	 * Constant for value 'PostalTransfer'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'PostalTransfer'
	 */
	const VALUE_POSTALTRANSFER = 'PostalTransfer';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'LoanCheck'
	 * Meta informations :
	 * 	- documentation : Loan check option (applicable only to the US eBay Motors site, except in the Parts and Accessories category, and the eBay Canada site for motors).
	 * @return string 'LoanCheck'
	 */
	const VALUE_LOANCHECK = 'LoanCheck';
	/**
	 * Constant for value 'CashInPerson'
	 * Meta informations :
	 * 	- documentation : Cash-in-person option. Applicable only to US and Canada eBay Motors vehicles, (not the Parts and Accessories category).
	 * @return string 'CashInPerson'
	 */
	const VALUE_CASHINPERSON = 'CashInPerson';
	/**
	 * Constant for value 'ELV'
	 * Meta informations :
	 * 	- documentation : Elektronisches Lastschriftverfahren (direct debit). Only applicable to the Express Germany site, which has been shut down.
	 * @return string 'ELV'
	 */
	const VALUE_ELV = 'ELV';
	/**
	 * Constant for value 'PaisaPayEscrow'
	 * Meta informations :
	 * 	- documentation : PaisaPayEscrow payment option. Applicable on selected categories on the India site only.
	 * @return string 'PaisaPayEscrow'
	 */
	const VALUE_PAISAPAYESCROW = 'PaisaPayEscrow';
	/**
	 * Constant for value 'PaisaPayEscrowEMI'
	 * Meta informations :
	 * 	- documentation : PaisaPayEscrowEMI (Equal Monthly Installments) Payment option. Must be specified with PaisaPayEscrow. Applicable only to India site.
	 * @return string 'PaisaPayEscrowEMI'
	 */
	const VALUE_PAISAPAYESCROWEMI = 'PaisaPayEscrowEMI';
	/**
	 * Constant for value 'IntegratedMerchantCreditCard'
	 * Meta informations :
	 * 	- documentation : This payment method can be added only if a seller has a payment gateway account. You can use GetUser.User.SellerInfo.IntegratedMerchantCreditCardInfo to determine if a seller has a payment gateway account. If a seller successfully uses AddItem with IntegratedMerchantCreditCard, then for the resulting item, the IntegratedMerchantCreditCard value is a replacement for a credit-card payment method such as VisaMC. In such a case, the listing displays (to potential buyers) the credit cards that the seller specified in the seller's preferences for their payment gateway account (in My eBay). Additionally, a buyer's credit-card payment is integrated into eBay checkout.
	 * @return string 'IntegratedMerchantCreditCard'
	 */
	const VALUE_INTEGRATEDMERCHANTCREDITCARD = 'IntegratedMerchantCreditCard';
	/**
	 * Constant for value 'Moneybookers'
	 * Meta informations :
	 * 	- documentation : The Moneybookers payment method. For more information, see http://www.moneybookers.com/partners/us/ebay. Only applicable to the US site (and to the Parts and Accessories category of the US eBay Motors site).
	 * @return string 'Moneybookers'
	 */
	const VALUE_MONEYBOOKERS = 'Moneybookers';
	/**
	 * Constant for value 'Paymate'
	 * Meta informations :
	 * 	- documentation : The Paymate payment method. For more information, see http://www.paymate.com/eBay. Only applicable to the US site (and to the Parts and Accessories category of the US eBay Motors site).
	 * @return string 'Paymate'
	 */
	const VALUE_PAYMATE = 'Paymate';
	/**
	 * Constant for value 'ProPay'
	 * Meta informations :
	 * 	- documentation : The ProPay payment method. US site only. For more information, see http://www.Propay.com/eBay.
	 * @return string 'ProPay'
	 */
	const VALUE_PROPAY = 'ProPay';
	/**
	 * Constant for value 'PayOnPickup'
	 * Meta informations :
	 * 	- documentation : PayOnPickup payment method. PayOnPickup is the same as CashOnPickup. For listings on the eBay US site, the user interface refers to this feature as Pay on pickup. In the user interface of your application, please refer to the feature as Pay on pickup so that the name in your user interface corresponds to the name on the eBay US site.
	 * @return string 'PayOnPickup'
	 */
	const VALUE_PAYONPICKUP = 'PayOnPickup';
	/**
	 * Constant for value 'Diners'
	 * Meta informations :
	 * 	- documentation : This payment method can be added only if a seller has a IMCC payment gateway account and Diners Club card is selected in credit card preference. Currently Dines card is enabled for CyberSource Gateway sellers.
	 * @return string 'Diners'
	 */
	const VALUE_DINERS = 'Diners';
	/**
	 * Constant for value 'StandardPayment'
	 * Meta informations :
	 * 	- documentation : Unless the buyer and seller agree to COD (Cash On Delivery) or POP (Pay on Pickup) as the form of payment for an order, StandardPayment is always the buyer payment method returned to the seller when the order is part of the new payment process on the German and Austrian sites. Beginning August 22, 2011, sellers new to listing on the German and Austrian sites are subject to the new payment process.
	 * @return string 'StandardPayment'
	 */
	const VALUE_STANDARDPAYMENT = 'StandardPayment';
	/**
	 * Constructor
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MOCC,self::VALUE_AMEX,self::VALUE_PAYMENTSEEDESCRIPTION,self::VALUE_CCACCEPTED,self::VALUE_PERSONALCHECK,self::VALUE_COD,self::VALUE_VISAMC,self::VALUE_PAISAPAYACCEPTED,self::VALUE_OTHER,self::VALUE_PAYPAL,self::VALUE_DISCOVER,self::VALUE_CASHONPICKUP,self::VALUE_MONEYXFERACCEPTED,self::VALUE_MONEYXFERACCEPTEDINCHECKOUT,self::VALUE_OTHERONLINEPAYMENTS,self::VALUE_ESCROW,self::VALUE_PREPAYDELIVERY,self::VALUE_CODPREPAYDELIVERY,self::VALUE_POSTALTRANSFER,self::VALUE_CUSTOMCODE,self::VALUE_LOANCHECK,self::VALUE_CASHINPERSON,self::VALUE_ELV,self::VALUE_PAISAPAYESCROW,self::VALUE_PAISAPAYESCROWEMI,self::VALUE_INTEGRATEDMERCHANTCREDITCARD,self::VALUE_MONEYBOOKERS,self::VALUE_PAYMATE,self::VALUE_PROPAY,self::VALUE_PAYONPICKUP,self::VALUE_DINERS,self::VALUE_STANDARDPAYMENT));
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