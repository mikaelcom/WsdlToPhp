<?php
/**
 * Class file for PayPalTypeRefundInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundInfoType
 * Documentation : Holds refunds payment status information
 * @date 14/07/2012
 */
class PayPalTypeRefundInfoType extends PayPalWsdlClass
{
	/**
	 * The RefundStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Refund status whether it is Instant or Delayed.
	 * @var PayPalTypePaymentStatusCodeType
	 */
	public $RefundStatus;
	/**
	 * The PendingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Tells us the reason when refund payment status is Delayed.
	 * @var PayPalTypePendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * Constructor
	 * @param PayPalTypePaymentStatusCodeType RefundStatus
	 * @param PayPalTypePendingStatusCodeType PendingReason
	 * @return PayPalTypeRefundInfoType
	 */
	public function __construct($_RefundStatus = null,$_PendingReason = null)
	{
		parent::__construct(array('RefundStatus'=>$_RefundStatus,'PendingReason'=>$_PendingReason));
	}
	/**
	 * Set RefundStatus
	 * @param PaymentStatusCodeType RefundStatus
	 * @return PaymentStatusCodeType
	 */
	public function setRefundStatus($_RefundStatus)
	{
		return ($this->RefundStatus = PayPalTypePaymentStatusCodeType::valueIsValid($_RefundStatus)?$_RefundStatus:null);
	}
	/**
	 * Get RefundStatus
	 * @return PayPalTypePaymentStatusCodeType
	 */
	public function getRefundStatus()
	{
		return $this->RefundStatus;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>