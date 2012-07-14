<?php
/**
 * Class file for PayPalTypeBuyerPaymentMethodCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBuyerPaymentMethodCodeType
 * @date 14/07/2012
 */
class PayPalTypeBuyerPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No payment method specified
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'MOCC'
	 * Meta informations :
	 * 	- documentation : Money order/cashiers check
	 * @return string 'MOCC'
	 */
	const VALUE_MOCC = 'MOCC';
	/**
	 * Constant for value 'AmEx'
	 * Meta informations :
	 * 	- documentation : American Express
	 * @return string 'AmEx'
	 */
	const VALUE_AMEX = 'AmEx';
	/**
	 * Constant for value 'PaymentSeeDescription'
	 * Meta informations :
	 * 	- documentation : Payment See Description
	 * @return string 'PaymentSeeDescription'
	 */
	const VALUE_PAYMENTSEEDESCRIPTION = 'PaymentSeeDescription';
	/**
	 * Constant for value 'CCAccepted'
	 * Meta informations :
	 * 	- documentation : American Express
	 * @return string 'CCAccepted'
	 */
	const VALUE_CCACCEPTED = 'CCAccepted';
	/**
	 * Constant for value 'PersonalCheck'
	 * Meta informations :
	 * 	- documentation : Personal check
	 * @return string 'PersonalCheck'
	 */
	const VALUE_PERSONALCHECK = 'PersonalCheck';
	/**
	 * Constant for value 'COD'
	 * Meta informations :
	 * 	- documentation : COD
	 * @return string 'COD'
	 */
	const VALUE_COD = 'COD';
	/**
	 * Constant for value 'VisaMC'
	 * Meta informations :
	 * 	- documentation : Visa/Mastercard
	 * @return string 'VisaMC'
	 */
	const VALUE_VISAMC = 'VisaMC';
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other forms of payment. Some custom method is accepted by seller as payment method in the transaction. For Motors vehicle items, this field refers to the Deposit payment method.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'Discover'
	 * Meta informations :
	 * 	- documentation : Discover
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'CashOnPickup'
	 * Meta informations :
	 * 	- documentation : Payment on delivery acceptable payment term.
	 * @return string 'CashOnPickup'
	 */
	const VALUE_CASHONPICKUP = 'CashOnPickup';
	/**
	 * Constant for value 'MoneyXferAccepted'
	 * Meta informations :
	 * 	- documentation : Direct transfer of money acceptable payment term.
	 * @return string 'MoneyXferAccepted'
	 */
	const VALUE_MONEYXFERACCEPTED = 'MoneyXferAccepted';
	/**
	 * Constant for value 'MoneyXferAcceptedinCheckout'
	 * Meta informations :
	 * 	- documentation : If the seller has bank account information on file, and MoneyXferAcceptedinCheckout = true, then the bank account information will be displayed in Checkout. Applicable to German site only.
	 * @return string 'MoneyXferAcceptedinCheckout'
	 */
	const VALUE_MONEYXFERACCEPTEDINCHECKOUT = 'MoneyXferAcceptedinCheckout';
	/**
	 * Constant for value 'OtherOnlinePayments'
	 * Meta informations :
	 * 	- documentation : Online Escrow paid for by seller.
	 * @return string 'OtherOnlinePayments'
	 */
	const VALUE_OTHERONLINEPAYMENTS = 'OtherOnlinePayments';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeBuyerPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_MOCC,self::VALUE_AMEX,self::VALUE_PAYMENTSEEDESCRIPTION,self::VALUE_CCACCEPTED,self::VALUE_PERSONALCHECK,self::VALUE_COD,self::VALUE_VISAMC,self::VALUE_OTHER,self::VALUE_PAYPAL,self::VALUE_DISCOVER,self::VALUE_CASHONPICKUP,self::VALUE_MONEYXFERACCEPTED,self::VALUE_MONEYXFERACCEPTEDINCHECKOUT,self::VALUE_OTHERONLINEPAYMENTS,self::VALUE_CUSTOMCODE));
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