<?php
/**
 * Class file for AmazonFPSTypeCancelSubscriptionAndRefund
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelSubscriptionAndRefund
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelSubscriptionAndRefund extends AmazonFPSWsdlClass
{
	/**
	 * The SubscriptionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SubscriptionId;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $RefundAmount;
	/**
	 * The CallerReference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The CancelReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CancelReason;
	/**
	 * Constructor
	 * @param string SubscriptionId
	 * @param AmazonFPSTypeAmount RefundAmount
	 * @param string CallerReference
	 * @param string CancelReason
	 * @return AmazonFPSTypeCancelSubscriptionAndRefund
	 */
	public function __construct($_SubscriptionId = null,$_RefundAmount = null,$_CallerReference = null,$_CancelReason = null)
	{
		parent::__construct(array('SubscriptionId'=>$_SubscriptionId,'RefundAmount'=>$_RefundAmount,'CallerReference'=>$_CallerReference,'CancelReason'=>$_CancelReason));
	}
	/**
	 * Set SubscriptionId
	 * @param string SubscriptionId
	 * @return string
	 */
	public function setSubscriptionId($_SubscriptionId)
	{
		return ($this->SubscriptionId = $_SubscriptionId);
	}
	/**
	 * Get SubscriptionId
	 * @return string
	 */
	public function getSubscriptionId()
	{
		return $this->SubscriptionId;
	}
	/**
	 * Set RefundAmount
	 * @param Amount RefundAmount
	 * @return Amount
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set CancelReason
	 * @param string CancelReason
	 * @return string
	 */
	public function setCancelReason($_CancelReason)
	{
		return ($this->CancelReason = $_CancelReason);
	}
	/**
	 * Get CancelReason
	 * @return string
	 */
	public function getCancelReason()
	{
		return $this->CancelReason;
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