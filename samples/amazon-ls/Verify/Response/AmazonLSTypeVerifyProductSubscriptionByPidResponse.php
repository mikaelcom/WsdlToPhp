<?php
/**
 * Class file for AmazonLSTypeVerifyProductSubscriptionByPidResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeVerifyProductSubscriptionByPidResponse
 * @date 10/07/2012
 */
class AmazonLSTypeVerifyProductSubscriptionByPidResponse extends AmazonLSWsdlClass
{
	/**
	 * The VerifyProductSubscriptionByPidResult
	 * @var AmazonLSTypeVerifyProductSubscriptionByPidResult
	 */
	public $VerifyProductSubscriptionByPidResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeVerifyProductSubscriptionByPidResult VerifyProductSubscriptionByPidResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeVerifyProductSubscriptionByPidResponse
	 */
	public function __construct($_VerifyProductSubscriptionByPidResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('VerifyProductSubscriptionByPidResult'=>$_VerifyProductSubscriptionByPidResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set VerifyProductSubscriptionByPidResult
	 * @param VerifyProductSubscriptionByPidResult VerifyProductSubscriptionByPidResult
	 * @return VerifyProductSubscriptionByPidResult
	 */
	public function setVerifyProductSubscriptionByPidResult($_VerifyProductSubscriptionByPidResult)
	{
		return ($this->VerifyProductSubscriptionByPidResult = $_VerifyProductSubscriptionByPidResult);
	}
	/**
	 * Get VerifyProductSubscriptionByPidResult
	 * @return AmazonLSTypeVerifyProductSubscriptionByPidResult
	 */
	public function getVerifyProductSubscriptionByPidResult()
	{
		return $this->VerifyProductSubscriptionByPidResult;
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
	 * @return AmazonLSTypeResponseMetadata
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