<?php
/**
 * Class file for PayPalTypeDoDirectPaymentRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoDirectPaymentRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoDirectPaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- documentation : How you want to obtain payment. Required Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. NOTE: Order is not allowed for Direct Payment. Character length and limit: Up to 13 single-byte alphabetic characters
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- documentation : Information about the payment Required
	 * @var PayPalTypePaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- documentation : Information about the credit card to be charged. Required
	 * @var PayPalTypeCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- documentation : IP address of the payer's browser as recorded in its HTTP request to your website. PayPal records this IP addresses as a means to detect possible fraud. Required Character length and limitations: 15 single-byte characters, including periods, in dotted-quad format: ???.???.???.???
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The MerchantSessionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your customer session identification token. PayPal records this optional session identification token as an additional means to detect possible fraud. Optional Character length and limitations: 64 single-byte numeric characters
	 * @var string
	 */
	public $MerchantSessionId;
	/**
	 * The ReturnFMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var boolean
	 */
	public $ReturnFMFDetails;
	/**
	 * Constructor
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param PayPalTypePaymentDetailsType PaymentDetails
	 * @param PayPalTypeCreditCardDetailsType CreditCard
	 * @param string IPAddress
	 * @param string MerchantSessionId
	 * @param boolean ReturnFMFDetails
	 * @return PayPalTypeDoDirectPaymentRequestDetailsType
	 */
	public function __construct($_PaymentAction = null,$_PaymentDetails = null,$_CreditCard = null,$_IPAddress = null,$_MerchantSessionId = null,$_ReturnFMFDetails = null)
	{
		parent::__construct(array('PaymentAction'=>$_PaymentAction,'PaymentDetails'=>$_PaymentDetails,'CreditCard'=>$_CreditCard,'IPAddress'=>$_IPAddress,'MerchantSessionId'=>$_MerchantSessionId,'ReturnFMFDetails'=>$_ReturnFMFDetails));
	}
	/**
	 * Set PaymentAction
	 * @param PaymentActionCodeType PaymentAction
	 * @return PaymentActionCodeType
	 */
	public function setPaymentAction($_PaymentAction)
	{
		return ($this->PaymentAction = PayPalTypePaymentActionCodeType::valueIsValid($_PaymentAction)?$_PaymentAction:null);
	}
	/**
	 * Get PaymentAction
	 * @return PayPalTypePaymentActionCodeType
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentDetails
	 * @param PaymentDetailsType PaymentDetails
	 * @return PaymentDetailsType
	 */
	public function setPaymentDetails($_PaymentDetails)
	{
		return ($this->PaymentDetails = $_PaymentDetails);
	}
	/**
	 * Get PaymentDetails
	 * @return PayPalTypePaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set CreditCard
	 * @param CreditCardDetailsType CreditCard
	 * @return CreditCardDetailsType
	 */
	public function setCreditCard($_CreditCard)
	{
		return ($this->CreditCard = $_CreditCard);
	}
	/**
	 * Get CreditCard
	 * @return PayPalTypeCreditCardDetailsType
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set MerchantSessionId
	 * @param string MerchantSessionId
	 * @return string
	 */
	public function setMerchantSessionId($_MerchantSessionId)
	{
		return ($this->MerchantSessionId = $_MerchantSessionId);
	}
	/**
	 * Get MerchantSessionId
	 * @return string
	 */
	public function getMerchantSessionId()
	{
		return $this->MerchantSessionId;
	}
	/**
	 * Set ReturnFMFDetails
	 * @param boolean ReturnFMFDetails
	 * @return boolean
	 */
	public function setReturnFMFDetails($_ReturnFMFDetails)
	{
		return ($this->ReturnFMFDetails = $_ReturnFMFDetails);
	}
	/**
	 * Get ReturnFMFDetails
	 * @return boolean
	 */
	public function getReturnFMFDetails()
	{
		return $this->ReturnFMFDetails;
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