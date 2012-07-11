<?php
/**
 * Class file for AmazonQueueServiceTypeListQueuesResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeListQueuesResponse
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeListQueuesResponse extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ListQueuesResult
	 * @var AmazonQueueServiceTypeListQueuesResult
	 */
	public $ListQueuesResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonQueueServiceTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonQueueServiceTypeListQueuesResult ListQueuesResult
	 * @param AmazonQueueServiceTypeResponseMetadata ResponseMetadata
	 * @return AmazonQueueServiceTypeListQueuesResponse
	 */
	public function __construct($_ListQueuesResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ListQueuesResult'=>$_ListQueuesResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ListQueuesResult
	 * @param ListQueuesResult ListQueuesResult
	 * @return ListQueuesResult
	 */
	public function setListQueuesResult($_ListQueuesResult)
	{
		return ($this->ListQueuesResult = $_ListQueuesResult);
	}
	/**
	 * Get ListQueuesResult
	 * @return AmazonQueueServiceTypeListQueuesResult
	 */
	public function getListQueuesResult()
	{
		return $this->ListQueuesResult;
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