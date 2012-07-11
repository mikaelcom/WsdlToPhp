<?php
/**
 * Class file for AmazonFPSTypeGetSubscriptionDetailsResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetSubscriptionDetailsResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeGetSubscriptionDetailsResponse extends AmazonFPSWsdlClass
{
	/**
	 * The GetSubscriptionDetailsResult
	 * @var AmazonFPSTypeGetSubscriptionDetailsResult
	 */
	public $GetSubscriptionDetailsResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeGetSubscriptionDetailsResult GetSubscriptionDetailsResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeGetSubscriptionDetailsResponse
	 */
	public function __construct($_GetSubscriptionDetailsResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetSubscriptionDetailsResult'=>$_GetSubscriptionDetailsResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetSubscriptionDetailsResult
	 * @param GetSubscriptionDetailsResult GetSubscriptionDetailsResult
	 * @return GetSubscriptionDetailsResult
	 */
	public function setGetSubscriptionDetailsResult($_GetSubscriptionDetailsResult)
	{
		return ($this->GetSubscriptionDetailsResult = $_GetSubscriptionDetailsResult);
	}
	/**
	 * Get GetSubscriptionDetailsResult
	 * @return AmazonFPSTypeGetSubscriptionDetailsResult
	 */
	public function getGetSubscriptionDetailsResult()
	{
		return $this->GetSubscriptionDetailsResult;
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