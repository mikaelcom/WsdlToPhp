<?php
/**
 * Class file for AmazonQueueServiceTypeGetQueueUrlResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeGetQueueUrlResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeGetQueueUrlResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The GetQueueUrlResult
	 * @var AmazonQueueServiceTypeGetQueueUrlResult
	 */
	public $GetQueueUrlResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeGetQueueUrlResult GetQueueUrlResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeGetQueueUrlResponse
	 */
	public function __construct($_GetQueueUrlResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetQueueUrlResult'=>$_GetQueueUrlResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetQueueUrlResult
	 * @param GetQueueUrlResult GetQueueUrlResult
	 * @return GetQueueUrlResult
	 */
	public function setGetQueueUrlResult($_GetQueueUrlResult)
	{
		return ($this->GetQueueUrlResult = $_GetQueueUrlResult);
	}
	/**
	 * Get GetQueueUrlResult
	 * @return AmazonQueueServiceTypeGetQueueUrlResult
	 */
	public function getGetQueueUrlResult()
	{
		return $this->GetQueueUrlResult;
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
	 * @return AmazonQueueServiceTypeResponseMetadata
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