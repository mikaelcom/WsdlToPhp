<?php
/**
 * Class file for EbayTradingTypeCheckoutStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCheckoutStatusType
 * @date 04/07/2012
 */
class EbayTradingTypeCheckoutStatusType extends EbayTradingWsdlClass
{
	/**
	 * The eBayPaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the success or failure of a buyer's payment for an order. <br><br> Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypePaymentStatusCodeType
	 */
	public $eBayPaymentStatus;
	/**
	 * The LastModifiedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the last time that there was a change in value of the CheckoutStatus.Status field, such as Pending to Complete. <br><br> This field is also applicable to Half.com listing when using GetOrders.
	 * @var dateTime
	 */
	public $LastModifiedTime;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The payment method that the buyer selected to pay for the order. <br> <br> This field is also applicable to Half.com listing when using GetOrders.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the Status reads Incomplete when payment has yet to be initiated, Pending when payment has been initiated but is in process, and Complete when the payment process has completed. <br><br> <b>Note</b>: If the PaymentMethod is CashOnPickup, the Status value will read Complete right at Checkout, even though the seller may not have been officially paid yet, and the eBayPaymentStatus field will read NoPaymentFailure. The CheckoutStatus.Status value will remain as Complete even if the seller uses ReviseCheckoutStatus to change the checkout status to Pending. However, the eBayPaymentStatus value in GetOrders will change from NoPaymentFailure to PaymentInProcess. <br><br> This field is also applicable to Half.com listing when using GetOrders.
	 * @var EbayTradingTypeCompleteStatusCodeType
	 */
	public $Status;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway (Payflow) account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The eBayPaymentMismatchDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container is returned when a buyer's payment does not match the total cost of an order going through the new eBay payment process. This container is only applicable for German and Austrian orders going through the new eBay payment process, and if the buyer has selected EFT as the payment method.
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
	 * @param dateTime LastModifiedTime
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethod
	 * @param EbayTradingTypeCompleteStatusCodeType Status
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param EbayTradingTypeEBayPaymentMismatchDetailsType eBayPaymentMismatchDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeCheckoutStatusType
	 */
	public function __construct($_eBayPaymentStatus = null,$_LastModifiedTime = null,$_PaymentMethod = null,$_Status = null,$_IntegratedMerchantCreditCardEnabled = null,$_eBayPaymentMismatchDetails = null,$_any = null)
	{
		parent::__construct(array('eBayPaymentStatus'=>$_eBayPaymentStatus,'LastModifiedTime'=>$_LastModifiedTime,'PaymentMethod'=>$_PaymentMethod,'Status'=>$_Status,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'eBayPaymentMismatchDetails'=>$_eBayPaymentMismatchDetails,'any'=>$_any));
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
	 * Set LastModifiedTime
	 * @param dateTime LastModifiedTime
	 * @return dateTime
	 */
	public function setLastModifiedTime($_LastModifiedTime)
	{
		return ($this->LastModifiedTime = $_LastModifiedTime);
	}
	/**
	 * Get LastModifiedTime
	 * @return dateTime
	 */
	public function getLastModifiedTime()
	{
		return $this->LastModifiedTime;
	}
	/**
	 * Set PaymentMethod
	 * @param BuyerPaymentMethodCodeType PaymentMethod
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set Status
	 * @param CompleteStatusCodeType Status
	 * @return CompleteStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeCompleteStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeCompleteStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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