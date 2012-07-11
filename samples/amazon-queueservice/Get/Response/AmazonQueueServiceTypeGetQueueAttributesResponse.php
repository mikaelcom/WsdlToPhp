<?php
/**
 * Class file for AmazonQueueServiceTypeGetQueueAttributesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeGetQueueAttributesResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeGetQueueAttributesResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The GetQueueAttributesResult
	 * @var AmazonQueueServiceTypeGetQueueAttributesResult
	 */
	public $GetQueueAttributesResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeGetQueueAttributesResult GetQueueAttributesResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeGetQueueAttributesResponse
	 */
	public function __construct($_GetQueueAttributesResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('GetQueueAttributesResult'=>$_GetQueueAttributesResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set GetQueueAttributesResult
	 * @param GetQueueAttributesResult GetQueueAttributesResult
	 * @return GetQueueAttributesResult
	 */
	public function setGetQueueAttributesResult($_GetQueueAttributesResult)
	{
		return ($this->GetQueueAttributesResult = $_GetQueueAttributesResult);
	}
	/**
	 * Get GetQueueAttributesResult
	 * @return AmazonQueueServiceTypeGetQueueAttributesResult
	 */
	public function getGetQueueAttributesResult()
	{
		return $this->GetQueueAttributesResult;
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