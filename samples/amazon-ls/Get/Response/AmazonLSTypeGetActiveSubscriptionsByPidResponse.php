<?php
/**
 * Class file for AmazonLSTypeGetActiveSubscriptionsByPidResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeGetActiveSubscriptionsByPidResponse
 * @date 10/07/2012
 */
class AmazonLSTypeGetActiveSubscriptionsByPidResponse extends AmazonLSWsdlClass
{
	/**
	 * The GetActiveSubscriptionsByPidResult
	 * @var AmazonLSTypeGetActiveSubscriptionsByPidResult
	 */
	public $GetActiveSubscriptionsByPidResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeGetActiveSubscriptionsByPidResult GetActiveSubscriptionsByPidResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeGetActiveSubscriptionsByPidResponse
	 */
	public function __construct($_GetActiveSubscriptionsByPidResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetActiveSubscriptionsByPidResult'=>$_GetActiveSubscriptionsByPidResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetActiveSubscriptionsByPidResult
	 * @param GetActiveSubscriptionsByPidResult GetActiveSubscriptionsByPidResult
	 * @return GetActiveSubscriptionsByPidResult
	 */
	public function setGetActiveSubscriptionsByPidResult($_GetActiveSubscriptionsByPidResult)
	{
		return ($this->GetActiveSubscriptionsByPidResult = $_GetActiveSubscriptionsByPidResult);
	}
	/**
	 * Get GetActiveSubscriptionsByPidResult
	 * @return AmazonLSTypeGetActiveSubscriptionsByPidResult
	 */
	public function getGetActiveSubscriptionsByPidResult()
	{
		return $this->GetActiveSubscriptionsByPidResult;
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