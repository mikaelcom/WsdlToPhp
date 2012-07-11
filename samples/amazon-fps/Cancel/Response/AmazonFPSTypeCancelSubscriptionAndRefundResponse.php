<?php
/**
 * Class file for AmazonFPSTypeCancelSubscriptionAndRefundResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelSubscriptionAndRefundResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelSubscriptionAndRefundResponse extends AmazonFPSWsdlClass
{
	/**
	 * The CancelSubscriptionAndRefundResult
	 * @var AmazonFPSTypeCancelSubscriptionAndRefundResult
	 */
	public $CancelSubscriptionAndRefundResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeCancelSubscriptionAndRefundResult CancelSubscriptionAndRefundResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeCancelSubscriptionAndRefundResponse
	 */
	public function __construct($_CancelSubscriptionAndRefundResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CancelSubscriptionAndRefundResult'=>$_CancelSubscriptionAndRefundResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CancelSubscriptionAndRefundResult
	 * @param CancelSubscriptionAndRefundResult CancelSubscriptionAndRefundResult
	 * @return CancelSubscriptionAndRefundResult
	 */
	public function setCancelSubscriptionAndRefundResult($_CancelSubscriptionAndRefundResult)
	{
		return ($this->CancelSubscriptionAndRefundResult = $_CancelSubscriptionAndRefundResult);
	}
	/**
	 * Get CancelSubscriptionAndRefundResult
	 * @return AmazonFPSTypeCancelSubscriptionAndRefundResult
	 */
	public function getCancelSubscriptionAndRefundResult()
	{
		return $this->CancelSubscriptionAndRefundResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonFPSTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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