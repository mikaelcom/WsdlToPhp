<?php
/**
 * Class file for EbayTradingTypeTransactionStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTransactionStatusType
 * Documentation : Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is complete.
 * @date 04/07/2012
 */
class EbayTradingTypeTransactionStatusType extends EbayTradingWsdlClass
{
	/**
	 * The eBayPaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the success or failure of the buyer's online payment for an order. Applicable for the payment method that the buyer chose for the order. If the payment failed, the value returned indicates the reason for the failure. Output only.
	 * @var EbayTradingTypePaymentStatusCodeType
	 */
	public $eBayPaymentStatus;
	/**
	 * The CheckoutStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the current status of the checkout flow for the order.
	 * @var EbayTradingTypeCheckoutStatusCodeType
	 */
	public $CheckoutStatus;
	/**
	 * The LastTimeModified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates date and time an order's status was last updated (in GMT).
	 * @var dateTime
	 */
	public $LastTimeModified;
	/**
	 * The PaymentMethodUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The payment method that the buyer selected to pay for the order. If checkout is not yet complete, PaymentMethodUsed is set to whatever the buyer selected as his or her preference on the Review Your Purchase page.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;
	/**
	 * The CompleteStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether checkout is complete, incomplete, or pending for an order.
	 * @var EbayTradingTypeCompleteStatusCodeType
	 */
	public $CompleteStatus;
	/**
	 * The BuyerSelectedShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page, he has not picked a shipping service. If it is false, the application should ignore ShippingServiceCost and ShippingServiceSelected (items whose values are defaulted by eBay).
	 * @var boolean
	 */
	public $BuyerSelectedShipping;
	/**
	 * The PaymentHoldStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the status of a PayPal payment hold on the item.
	 * @var EbayTradingTypePaymentHoldStatusCodeType
	 */
	public $PaymentHoldStatus;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a payment gateway (Payflow) account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The eBayPaymentMismatchDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container is returned when a buyer's payment does not match the total cost of an order going through the new payment process. This container is only applicable for German and Austrian orders going through the new eBay payment process, and when the buyer has selected EFT as the payment method.
	 * @var EbayTradingTypeEBayPaymentMismatchDetailsType
	 */
	public $eBayPaymentMismatchDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypePaymentStatusCodeType eBayPaymentStatus
	 * @param EbayTradingTypeCheckoutStatusCodeType CheckoutStatus
	 * @param dateTime LastTimeModified
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethodUsed
	 * @param EbayTradingTypeCompleteStatusCodeType CompleteStatus
	 * @param boolean BuyerSelectedShipping
	 * @param EbayTradingTypePaymentHoldStatusCodeType PaymentHoldStatus
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param EbayTradingTypeEBayPaymentMismatchDetailsType eBayPaymentMismatchDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeTransactionStatusType
	 */
	public function __construct($_eBayPaymentStatus = null,$_CheckoutStatus = null,$_LastTimeModified = null,$_PaymentMethodUsed = null,$_CompleteStatus = null,$_BuyerSelectedShipping = null,$_PaymentHoldStatus = null,$_IntegratedMerchantCreditCardEnabled = null,$_eBayPaymentMismatchDetails = null,$_any = null)
	{
		parent::__construct(array('eBayPaymentStatus'=>$_eBayPaymentStatus,'CheckoutStatus'=>$_CheckoutStatus,'LastTimeModified'=>$_LastTimeModified,'PaymentMethodUsed'=>$_PaymentMethodUsed,'CompleteStatus'=>$_CompleteStatus,'BuyerSelectedShipping'=>$_BuyerSelectedShipping,'PaymentHoldStatus'=>$_PaymentHoldStatus,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'eBayPaymentMismatchDetails'=>$_eBayPaymentMismatchDetails,'any'=>$_any));
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
	 * Set LastTimeModified
	 * @param dateTime LastTimeModified
	 * @return dateTime
	 */
	public function setLastTimeModified($_LastTimeModified)
	{
		return ($this->LastTimeModified = $_LastTimeModified);
	}
	/**
	 * Get LastTimeModified
	 * @return dateTime
	 */
	public function getLastTimeModified()
	{
		return $this->LastTimeModified;
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
	 * Set CompleteStatus
	 * @param CompleteStatusCodeType CompleteStatus
	 * @return CompleteStatusCodeType
	 */
	public function setCompleteStatus($_CompleteStatus)
	{
		return ($this->CompleteStatus = EbayTradingTypeCompleteStatusCodeType::valueIsValid($_CompleteStatus)?$_CompleteStatus:null);
	}
	/**
	 * Get CompleteStatus
	 * @return EbayTradingTypeCompleteStatusCodeType
	 */
	public function getCompleteStatus()
	{
		return $this->CompleteStatus;
	}
	/**
	 * Set BuyerSelectedShipping
	 * @param boolean BuyerSelectedShipping
	 * @return boolean
	 */
	public function setBuyerSelectedShipping($_BuyerSelectedShipping)
	{
		return ($this->BuyerSelectedShipping = $_BuyerSelectedShipping);
	}
	/**
	 * Get BuyerSelectedShipping
	 * @return boolean
	 */
	public function getBuyerSelectedShipping()
	{
		return $this->BuyerSelectedShipping;
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
	 * Set eBayPaymentMismatchDetails
	 * @param eBayPaymentMismatchDetailsType eBayPaymentMismatchDetails
	 * @return eBayPaymentMismatchDetailsType
	 */
	public function setEBayPaymentMismatchDetails($_eBayPaymentMismatchDetails)
	{
		return ($this->eBayPaymentMismatchDetails = $_eBayPaymentMismatchDetails);
	}
	/**
	 * Get eBayPaymentMismatchDetails
	 * @return EbayTradingTypeeBayPaymentMismatchDetailsType
	 */
	public function getEBayPaymentMismatchDetails()
	{
		return $this->eBayPaymentMismatchDetails;
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