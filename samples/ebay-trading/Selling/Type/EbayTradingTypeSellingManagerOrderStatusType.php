<?php
/**
 * Class file for EbayTradingTypeSellingManagerOrderStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerOrderStatusType
 * Documentation : Status of a Selling manager order.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerOrderStatusType extends EbayTradingWsdlClass
{
	/**
	 * The CheckoutStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current status of checkout for the order.
	 * @var EbayTradingTypeCheckoutStatusCodeType
	 */
	public $CheckoutStatus;
	/**
	 * The PaidStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The paid status of the order.
	 * @var EbayTradingTypeSellingManagerPaidStatusCodeType
	 */
	public $PaidStatus;
	/**
	 * The ShippedStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipped status of the order.
	 * @var EbayTradingTypeSellingManagerShippedStatusCodeType
	 */
	public $ShippedStatus;
	/**
	 * The eBayPaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The success or failure of a buyer's online payment.
	 * @var EbayTradingTypePaymentStatusCodeType
	 */
	public $eBayPaymentStatus;
	/**
	 * The PayPalTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PayPal transaction ID. This value is not returned to new DE and AT sellers who are subject to the new payment process being implemented on the DE and AT sites in late August 2011.
	 * @var string
	 */
	public $PayPalTransactionID;
	/**
	 * The PaymentMethodUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The payment method the buyer selected for paying the seller for the order. If checkout is incomplete, PaymentMethodUsed is set to whatever the buyer selected as his or her preference on the Review Your Purchase page.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;
	/**
	 * The FeedbackReceived
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of feedback received (if feedback was received).
	 * @var EbayTradingTypeCommentTypeCodeType
	 */
	public $FeedbackReceived;
	/**
	 * The FeedbackSent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller has left feedback.
	 * @var boolean
	 */
	public $FeedbackSent;
	/**
	 * The TotalEmailsSent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total emails sent.
	 * @var int
	 */
	public $TotalEmailsSent;
	/**
	 * The PaymentHoldStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the current status of a hold on a PayPal payment. The payment hold that is referred to as a "payment review" hold results from a possible issue with a buyer. The payment hold referred to as a "merchant hold" results from a possible issue with a seller. For more information, please see the link below.
	 * @var EbayTradingTypePaymentHoldStatusCodeType
	 */
	public $PaymentHoldStatus;
	/**
	 * The SellerInvoiceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The custom invoice number.
	 * @var string
	 */
	public $SellerInvoiceNumber;
	/**
	 * The ShippedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date on which the seller marks the item as shipped, either set by default as the date date the item was marked shipped or set explicitly by the seller using the Edit Sales Record page. Note that sellers have the ability to set this value up to 3 calendar days in the future.
	 * @var dateTime
	 */
	public $ShippedTime;
	/**
	 * The PaidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date on which the order was paid.
	 * @var dateTime
	 */
	public $PaidTime;
	/**
	 * The LastEmailSentTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time that the last email was sent.
	 * @var dateTime
	 */
	public $LastEmailSentTime;
	/**
	 * The SellerInvoiceTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time the invoice was sent. This is a seller-entered value for VAT-enabled sites. It is returned only for business sellers in VAT-enabled sites.
	 * @var dateTime
	 */
	public $SellerInvoiceTime;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway (Payflow) account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account. A payment gateway account is used by sellers to accept online credit cards (Visa, MasterCard, American Express, and Discover).
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCheckoutStatusCodeType CheckoutStatus
	 * @param EbayTradingTypeSellingManagerPaidStatusCodeType PaidStatus
	 * @param EbayTradingTypeSellingManagerShippedStatusCodeType ShippedStatus
	 * @param EbayTradingTypePaymentStatusCodeType eBayPaymentStatus
	 * @param string PayPalTransactionID
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethodUsed
	 * @param EbayTradingTypeCommentTypeCodeType FeedbackReceived
	 * @param boolean FeedbackSent
	 * @param int TotalEmailsSent
	 * @param EbayTradingTypePaymentHoldStatusCodeType PaymentHoldStatus
	 * @param string SellerInvoiceNumber
	 * @param dateTime ShippedTime
	 * @param dateTime PaidTime
	 * @param dateTime LastEmailSentTime
	 * @param dateTime SellerInvoiceTime
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerOrderStatusType
	 */
	public function __construct($_CheckoutStatus = null,$_PaidStatus = null,$_ShippedStatus = null,$_eBayPaymentStatus = null,$_PayPalTransactionID = null,$_PaymentMethodUsed = null,$_FeedbackReceived = null,$_FeedbackSent = null,$_TotalEmailsSent = null,$_PaymentHoldStatus = null,$_SellerInvoiceNumber = null,$_ShippedTime = null,$_PaidTime = null,$_LastEmailSentTime = null,$_SellerInvoiceTime = null,$_IntegratedMerchantCreditCardEnabled = null,$_any = null)
	{
		parent::__construct(array('CheckoutStatus'=>$_CheckoutStatus,'PaidStatus'=>$_PaidStatus,'ShippedStatus'=>$_ShippedStatus,'eBayPaymentStatus'=>$_eBayPaymentStatus,'PayPalTransactionID'=>$_PayPalTransactionID,'PaymentMethodUsed'=>$_PaymentMethodUsed,'FeedbackReceived'=>$_FeedbackReceived,'FeedbackSent'=>$_FeedbackSent,'TotalEmailsSent'=>$_TotalEmailsSent,'PaymentHoldStatus'=>$_PaymentHoldStatus,'SellerInvoiceNumber'=>$_SellerInvoiceNumber,'ShippedTime'=>$_ShippedTime,'PaidTime'=>$_PaidTime,'LastEmailSentTime'=>$_LastEmailSentTime,'SellerInvoiceTime'=>$_SellerInvoiceTime,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'any'=>$_any));
	}
	/**
	 * Set CheckoutStatus
	 * @param CheckoutStatusCodeType CheckoutStatus
	 * @return CheckoutStatusCodeType
	 */
	public function setCheckoutStatus($_CheckoutStatus)
	{
		return ($this->CheckoutStatus = EbayTradingTypeCheckoutStatusCodeType::valueIsValid($_CheckoutStatus)?$_CheckoutStatus:null);
	}
	/**
	 * Get CheckoutStatus
	 * @return EbayTradingTypeCheckoutStatusCodeType
	 */
	public function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * Set PaidStatus
	 * @param SellingManagerPaidStatusCodeType PaidStatus
	 * @return SellingManagerPaidStatusCodeType
	 */
	public function setPaidStatus($_PaidStatus)
	{
		return ($this->PaidStatus = EbayTradingTypeSellingManagerPaidStatusCodeType::valueIsValid($_PaidStatus)?$_PaidStatus:null);
	}
	/**
	 * Get PaidStatus
	 * @return EbayTradingTypeSellingManagerPaidStatusCodeType
	 */
	public function getPaidStatus()
	{
		return $this->PaidStatus;
	}
	/**
	 * Set ShippedStatus
	 * @param SellingManagerShippedStatusCodeType ShippedStatus
	 * @return SellingManagerShippedStatusCodeType
	 */
	public function setShippedStatus($_ShippedStatus)
	{
		return ($this->ShippedStatus = EbayTradingTypeSellingManagerShippedStatusCodeType::valueIsValid($_ShippedStatus)?$_ShippedStatus:null);
	}
	/**
	 * Get ShippedStatus
	 * @return EbayTradingTypeSellingManagerShippedStatusCodeType
	 */
	public function getShippedStatus()
	{
		return $this->ShippedStatus;
	}
	/**
	 * Set eBayPaymentStatus
	 * @param PaymentStatusCodeType eBayPaymentStatus
	 * @return PaymentStatusCodeType
	 */
	public function setEBayPaymentStatus($_eBayPaymentStatus)
	{
		return ($this->eBayPaymentStatus = EbayTradingTypePaymentStatusCodeType::valueIsValid($_eBayPaymentStatus)?$_eBayPaymentStatus:null);
	}
	/**
	 * Get eBayPaymentStatus
	 * @return EbayTradingTypePaymentStatusCodeType
	 */
	public function getEBayPaymentStatus()
	{
		return $this->eBayPaymentStatus;
	}
	/**
	 * Set PayPalTransactionID
	 * @param string PayPalTransactionID
	 * @return string
	 */
	public function setPayPalTransactionID($_PayPalTransactionID)
	{
		return ($this->PayPalTransactionID = $_PayPalTransactionID);
	}
	/**
	 * Get PayPalTransactionID
	 * @return string
	 */
	public function getPayPalTransactionID()
	{
		return $this->PayPalTransactionID;
	}
	/**
	 * Set PaymentMethodUsed
	 * @param BuyerPaymentMethodCodeType PaymentMethodUsed
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethodUsed($_PaymentMethodUsed)
	{
		return ($this->PaymentMethodUsed = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethodUsed)?$_PaymentMethodUsed:null);
	}
	/**
	 * Get PaymentMethodUsed
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * Set FeedbackReceived
	 * @param CommentTypeCodeType FeedbackReceived
	 * @return CommentTypeCodeType
	 */
	public function setFeedbackReceived($_FeedbackReceived)
	{
		return ($this->FeedbackReceived = EbayTradingTypeCommentTypeCodeType::valueIsValid($_FeedbackReceived)?$_FeedbackReceived:null);
	}
	/**
	 * Get FeedbackReceived
	 * @return EbayTradingTypeCommentTypeCodeType
	 */
	public function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}
	/**
	 * Set FeedbackSent
	 * @param boolean FeedbackSent
	 * @return boolean
	 */
	public function setFeedbackSent($_FeedbackSent)
	{
		return ($this->FeedbackSent = $_FeedbackSent);
	}
	/**
	 * Get FeedbackSent
	 * @return boolean
	 */
	public function getFeedbackSent()
	{
		return $this->FeedbackSent;
	}
	/**
	 * Set TotalEmailsSent
	 * @param int TotalEmailsSent
	 * @return int
	 */
	public function setTotalEmailsSent($_TotalEmailsSent)
	{
		return ($this->TotalEmailsSent = $_TotalEmailsSent);
	}
	/**
	 * Get TotalEmailsSent
	 * @return int
	 */
	public function getTotalEmailsSent()
	{
		return $this->TotalEmailsSent;
	}
	/**
	 * Set PaymentHoldStatus
	 * @param PaymentHoldStatusCodeType PaymentHoldStatus
	 * @return PaymentHoldStatusCodeType
	 */
	public function setPaymentHoldStatus($_PaymentHoldStatus)
	{
		return ($this->PaymentHoldStatus = EbayTradingTypePaymentHoldStatusCodeType::valueIsValid($_PaymentHoldStatus)?$_PaymentHoldStatus:null);
	}
	/**
	 * Get PaymentHoldStatus
	 * @return EbayTradingTypePaymentHoldStatusCodeType
	 */
	public function getPaymentHoldStatus()
	{
		return $this->PaymentHoldStatus;
	}
	/**
	 * Set SellerInvoiceNumber
	 * @param string SellerInvoiceNumber
	 * @return string
	 */
	public function setSellerInvoiceNumber($_SellerInvoiceNumber)
	{
		return ($this->SellerInvoiceNumber = $_SellerInvoiceNumber);
	}
	/**
	 * Get SellerInvoiceNumber
	 * @return string
	 */
	public function getSellerInvoiceNumber()
	{
		return $this->SellerInvoiceNumber;
	}
	/**
	 * Set ShippedTime
	 * @param dateTime ShippedTime
	 * @return dateTime
	 */
	public function setShippedTime($_ShippedTime)
	{
		return ($this->ShippedTime = $_ShippedTime);
	}
	/**
	 * Get ShippedTime
	 * @return dateTime
	 */
	public function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * Set PaidTime
	 * @param dateTime PaidTime
	 * @return dateTime
	 */
	public function setPaidTime($_PaidTime)
	{
		return ($this->PaidTime = $_PaidTime);
	}
	/**
	 * Get PaidTime
	 * @return dateTime
	 */
	public function getPaidTime()
	{
		return $this->PaidTime;
	}
	/**
	 * Set LastEmailSentTime
	 * @param dateTime LastEmailSentTime
	 * @return dateTime
	 */
	public function setLastEmailSentTime($_LastEmailSentTime)
	{
		return ($this->LastEmailSentTime = $_LastEmailSentTime);
	}
	/**
	 * Get LastEmailSentTime
	 * @return dateTime
	 */
	public function getLastEmailSentTime()
	{
		return $this->LastEmailSentTime;
	}
	/**
	 * Set SellerInvoiceTime
	 * @param dateTime SellerInvoiceTime
	 * @return dateTime
	 */
	public function setSellerInvoiceTime($_SellerInvoiceTime)
	{
		return ($this->SellerInvoiceTime = $_SellerInvoiceTime);
	}
	/**
	 * Get SellerInvoiceTime
	 * @return dateTime
	 */
	public function getSellerInvoiceTime()
	{
		return $this->SellerInvoiceTime;
	}
	/**
	 * Set IntegratedMerchantCreditCardEnabled
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function setIntegratedMerchantCreditCardEnabled($_IntegratedMerchantCreditCardEnabled)
	{
		return ($this->IntegratedMerchantCreditCardEnabled = $_IntegratedMerchantCreditCardEnabled);
	}
	/**
	 * Get IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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