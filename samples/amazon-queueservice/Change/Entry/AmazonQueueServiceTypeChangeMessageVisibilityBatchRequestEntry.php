<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
	/**
	 * The ReceiptHandle
	 * @var string
	 */
	public $ReceiptHandle;
	/**
	 * The VisibilityTimeout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $VisibilityTimeout;
	/**
	 * Constructor
	 * @param string Id
	 * @param string ReceiptHandle
	 * @param integer VisibilityTimeout
	 * @return AmazonQueueServiceTypeChangeMessageVisibilityBatchRequestEntry
	 */
	public function __construct($_Id = null,$_ReceiptHandle = null,$_VisibilityTimeout = null)
	{
		parent::__construct(array('Id'=>$_Id,'ReceiptHandle'=>$_ReceiptHandle,'VisibilityTimeout'=>$_VisibilityTimeout));
	}
	/**
	 * Set Id
	 * @param string Id
	 * @return string
	 */
	public function setId($_Id)
	{
		return ($this->Id = $_Id);
	}
	/**
	 * Get Id
	 * @return string
	 */
	public function getId()
	{
		return $this->Id;
	}
	/**
	 * Set ReceiptHandle
	 * @param string ReceiptHandle
	 * @return string
	 */
	public function setReceiptHandle($_ReceiptHandle)
	{
		return ($this->ReceiptHandle = $_ReceiptHandle);
	}
	/**
	 * Get ReceiptHandle
	 * @return string
	 */
	public function getReceiptHandle()
	{
		return $this->ReceiptHandle;
	}
	/**
	 * Set VisibilityTimeout
	 * @param integer VisibilityTimeout
	 * @return integer
	 */
	public function setVisibilityTimeout($_VisibilityTimeout)
	{
		return ($this->VisibilityTimeout = $_VisibilityTimeout);
	}
	/**
	 * Get VisibilityTimeout
	 * @return integer
	 */
	public function getVisibilityTimeout()
	{
		return $this->VisibilityTimeout;
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