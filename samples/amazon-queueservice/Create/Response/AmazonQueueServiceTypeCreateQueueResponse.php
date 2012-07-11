<?php
/**
 * Class file for AmazonQueueServiceTypeCreateQueueResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeCreateQueueResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeCreateQueueResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The CreateQueueResult
	 * @var AmazonQueueServiceTypeCreateQueueResult
	 */
	public $CreateQueueResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeCreateQueueResult CreateQueueResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeCreateQueueResponse
	 */
	public function __construct($_CreateQueueResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateQueueResult'=>$_CreateQueueResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateQueueResult
	 * @param CreateQueueResult CreateQueueResult
	 * @return CreateQueueResult
	 */
	public function setCreateQueueResult($_CreateQueueResult)
	{
		return ($this->CreateQueueResult = $_CreateQueueResult);
	}
	/**
	 * Get CreateQueueResult
	 * @return AmazonQueueServiceTypeCreateQueueResult
	 */
	public function getCreateQueueResult()
	{
		return $this->CreateQueueResult;
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