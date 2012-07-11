<?php
/**
 * Class file for AmazonFPSTypeCancelSubscriptionAndRefundResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelSubscriptionAndRefundResult
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelSubscriptionAndRefundResult extends AmazonFPSWsdlClass
{
	/**
	 * The RefundTransactionId
	 * @var string
	 */
	public $RefundTransactionId;
	/**
	 * Constructor
	 * @param string RefundTransactionId
	 * @return AmazonFPSTypeCancelSubscriptionAndRefundResult
	 */
	public function __construct($_RefundTransactionId = null)
	{
		parent::__construct(array('RefundTransactionId'=>$_RefundTransactionId));
	}
	/**
	 * Set RefundTransactionId
	 * @param string RefundTransactionId
	 * @return string
	 */
	public function setRefundTransactionId($_RefundTransactionId)
	{
		return ($this->RefundTransactionId = $_RefundTransactionId);
	}
	/**
	 * Get RefundTransactionId
	 * @return string
	 */
	public function getRefundTransactionId()
	{
		return $this->RefundTransactionId;
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