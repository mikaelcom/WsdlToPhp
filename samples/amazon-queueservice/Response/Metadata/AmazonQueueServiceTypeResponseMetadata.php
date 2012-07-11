<?php
/**
 * Class file for AmazonQueueServiceTypeResponseMetadata
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeResponseMetadata
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeResponseMetadata extends AmazonQueueServiceWsdlClass
{
	/**
	 * The RequestId
	 * @var string
	 */
	public $RequestId;
	/**
	 * Constructor
	 * @param string RequestId
	 * @return AmazonQueueServiceTypeResponseMetadata
	 */
	public function __construct($_RequestId = null)
	{
		parent::__construct(array('RequestId'=>$_RequestId));
	}
	/**
	 * Set RequestId
	 * @param string RequestId
	 * @return string
	 */
	public function setRequestId($_RequestId)
	{
		return ($this->RequestId = $_RequestId);
	}
	/**
	 * Get RequestId
	 * @return string
	 */
	public function getRequestId()
	{
		return $this->RequestId;
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