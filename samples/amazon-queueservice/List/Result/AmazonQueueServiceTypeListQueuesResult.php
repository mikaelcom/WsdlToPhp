<?php
/**
 * Class file for AmazonQueueServiceTypeListQueuesResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeListQueuesResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeListQueuesResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The QueueUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var anyURI
	 */
	public $QueueUrl;
	/**
	 * Constructor
	 * @param anyURI QueueUrl
	 * @return AmazonQueueServiceTypeListQueuesResult
	 */
	public function __construct($_QueueUrl = null)
	{
		parent::__construct(array('QueueUrl'=>$_QueueUrl));
	}
	/**
	 * Set QueueUrl
	 * @param anyURI QueueUrl
	 * @return anyURI
	 */
	public function setQueueUrl($_QueueUrl)
	{
		return ($this->QueueUrl = $_QueueUrl);
	}
	/**
	 * Get QueueUrl
	 * @return anyURI
	 */
	public function getQueueUrl()
	{
		return $this->QueueUrl;
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