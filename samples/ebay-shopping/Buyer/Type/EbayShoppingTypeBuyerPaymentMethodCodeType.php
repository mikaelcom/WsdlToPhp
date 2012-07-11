<?php
/**
 * Class file for EbayShoppingTypeBuyerPaymentMethodCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeBuyerPaymentMethodCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeBuyerPaymentMethodCodeType extends EbayShoppingWsdlClass
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
	 * 	- documentation : Cash on delivery. Only applicable to the following eBay sites: AT (16), BEFR (24), BENL (123), CH (193), DE (77), ES (186), FR (71), HK (201), IN (203), IT (101), PL (212), and SG (216). Not applicable to Real Estate listings.
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
	 * 	- documentation : PaisaPay (for India site only). This qualifies as a safe payment method.
	 * @return string 'PaisaPayAccepted'
	 */
	const VALUE_PAISAPAYACCEPTED = 'PaisaPayAccepted';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other forms of payment. Not applicable to US/CA eBay Motors listings (see PaymentSeeDescription instead).
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal is accepted as a payment method. This qualifies as a safe payment method. <br> <br> If PayPal is specified for US/CA eBay Motors vehicles, it is for the vehicle deposit (not for purchasing the vehicle).
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
	 * 	- documentation : This payment method is equivalent to the PayOnPickup payment method. CashOnPickup applies even for listings on the eBay US site that refer to "Pay on pickup."
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
	 * 	- documentation : If the seller has bank account information on file, and MoneyXferAcceptedInCheckout = true, then the bank account information will be displayed in Checkout.
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
	 * 	- documentation : Deprecated.
	 * @return string 'Escrow'
	 */
	const VALUE_ESCROW = 'Escrow';
	/**
	 * Constant for value 'PrePayDelivery'
	 * Meta informations :
	 * 	- documentation : Deprecated.
	 * @return string 'PrePayDelivery'
	 */
	const VALUE_PREPAYDELIVERY = 'PrePayDelivery';
	/**
	 * Constant for value 'CODPrePayDelivery'
	 * Meta informations :
	 * 	- documentation : Deprecated.
	 * @return string 'CODPrePayDelivery'
	 */
	const VALUE_CODPREPAYDELIVERY = 'CODPrePayDelivery';
	/**
	 * Constant for value 'PostalTransfer'
	 * Meta informations :
	 * 	- documentation : Deprecated.
	 * @return string 'PostalTransfer'
	 */
	const VALUE_POSTALTRANSFER = 'PostalTransfer';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
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
	 * 	- documentation : Elektronisches Lastschriftverfahren (direct debit). Only applicable to Express Germany.
	 * @return string 'ELV'
	 */
	const VALUE_ELV = 'ELV';
	/**
	 * Constant for value 'PaisaPayEscrowEMI'
	 * Meta informations :
	 * 	- documentation : PaisaPayEscrow EMI (Equal Monthly Installment) payment method. The PaisaPayEscrowEMI payment method is only for the India site (site ID 203).
	 * @return string 'PaisaPayEscrowEMI'
	 */
	const VALUE_PAISAPAYESCROWEMI = 'PaisaPayEscrowEMI';
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
	 * Constant for value 'StandardPayment'
	 * Meta informations :
	 * 	- documentation : For all payment intermediated transactions, If the authenticated caller is a seller then Standard Payment Method is returned to as Payment Method Used to sellers. OrderArray.Order.CheckoutStatus.PaymentMethod (GetOrders, GetOrderTransaction) and OrderArray.Order .TransactionArray.Transaction.Status (For all the 4 APIs). The COD (Cash on Demand) or POP (Pay on Pickup) should be shown as is to the buyers and sellers, these payment methods are not intermediated.
	 * @return string 'StandardPayment'
	 */
	const VALUE_STANDARDPAYMENT = 'StandardPayment';
	/**
	 * Constructor
	 * @return EbayShoppingTypeBuyerPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MOCC,self::VALUE_AMEX,self::VALUE_PAYMENTSEEDESCRIPTION,self::VALUE_CCACCEPTED,self::VALUE_PERSONALCHECK,self::VALUE_COD,self::VALUE_VISAMC,self::VALUE_PAISAPAYACCEPTED,self::VALUE_OTHER,self::VALUE_PAYPAL,self::VALUE_DISCOVER,self::VALUE_CASHONPICKUP,self::VALUE_MONEYXFERACCEPTED,self::VALUE_MONEYXFERACCEPTEDINCHECKOUT,self::VALUE_OTHERONLINEPAYMENTS,self::VALUE_ESCROW,self::VALUE_PREPAYDELIVERY,self::VALUE_CODPREPAYDELIVERY,self::VALUE_POSTALTRANSFER,self::VALUE_CUSTOMCODE,self::VALUE_LOANCHECK,self::VALUE_CASHINPERSON,self::VALUE_ELV,self::VALUE_PAISAPAYESCROWEMI,self::VALUE_MONEYBOOKERS,self::VALUE_PAYMATE,self::VALUE_PROPAY,self::VALUE_STANDARDPAYMENT));
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