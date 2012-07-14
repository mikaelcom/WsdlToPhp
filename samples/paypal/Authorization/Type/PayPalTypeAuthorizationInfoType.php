<?php
/**
 * Class file for PayPalTypeAuthorizationInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAuthorizationInfoType
 * Documentation : Authorization details
 * @date 14/07/2012
 */
class PayPalTypeAuthorizationInfoType extends PayPalWsdlClass
{
	/**
	 * The PaymentStatus
	 * Meta informations :
	 * 	- documentation : The status of the payment: Pending: The payment is pending. See "PendingReason" for more information.
	 * @var PayPalTypePaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The PendingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason the payment is pending:none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: The authorization is pending at time of creation if payment is not under review echeck: The payment is pending because it was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. payment_review: The payment is pending because it is under payment review. other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 * @var PayPalTypePendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The ProtectionEligibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Protection Eligibility for this Transaction - None, SPP or ESPP
	 * @var string
	 */
	public $ProtectionEligibility;
	/**
	 * The ProtectionEligibilityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Protection Eligibility Type for this Transaction
	 * @var string
	 */
	public $ProtectionEligibilityType;
	/**
	 * Constructor
	 * @param PayPalTypePaymentStatusCodeType PaymentStatus
	 * @param PayPalTypePendingStatusCodeType PendingReason
	 * @param string ProtectionEligibility
	 * @param string ProtectionEligibilityType
	 * @return PayPalTypeAuthorizationInfoType
	 */
	public function __construct($_PaymentStatus = null,$_PendingReason = null,$_ProtectionEligibility = null,$_ProtectionEligibilityType = null)
	{
		parent::__construct(array('PaymentStatus'=>$_PaymentStatus,'PendingReason'=>$_PendingReason,'ProtectionEligibility'=>$_ProtectionEligibility,'ProtectionEligibilityType'=>$_ProtectionEligibilityType));
	}
	/**
	 * Set PaymentStatus
	 * @param PaymentStatusCodeType PaymentStatus
	 * @return PaymentStatusCodeType
	 */
	public function setPaymentStatus($_PaymentStatus)
	{
		return ($this->PaymentStatus = PayPalTypePaymentStatusCodeType::valueIsValid($_PaymentStatus)?$_PaymentStatus:null);
	}
	/**
	 * Get PaymentStatus
	 * @return PayPalTypePaymentStatusCodeType
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set PendingReason
	 * @param PendingStatusCodeType PendingReason
	 * @return PendingStatusCodeType
	 */
	public function setPendingReason($_PendingReason)
	{
		return ($this->PendingReason = PayPalTypePendingStatusCodeType::valueIsValid($_PendingReason)?$_PendingReason:null);
	}
	/**
	 * Get PendingReason
	 * @return PayPalTypePendingStatusCodeType
	 */
	public function getPendingReason()
	{
		return $this->PendingReason;
	}
	/**
	 * Set ProtectionEligibility
	 * @param string ProtectionEligibility
	 * @return string
	 */
	public function setProtectionEligibility($_ProtectionEligibility)
	{
		return ($this->ProtectionEligibility = $_ProtectionEligibility);
	}
	/**
	 * Get ProtectionEligibility
	 * @return string
	 */
	public function getProtectionEligibility()
	{
		return $this->ProtectionEligibility;
	}
	/**
	 * Set ProtectionEligibilityType
	 * @param string ProtectionEligibilityType
	 * @return string
	 */
	public function setProtectionEligibilityType($_ProtectionEligibilityType)
	{
		return ($this->ProtectionEligibilityType = $_ProtectionEligibilityType);
	}
	/**
	 * Get ProtectionEligibilityType
	 * @return string
	 */
	public function getProtectionEligibilityType()
	{
		return $this->ProtectionEligibilityType;
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