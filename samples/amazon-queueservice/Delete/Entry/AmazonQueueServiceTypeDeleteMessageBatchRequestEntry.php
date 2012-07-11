<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteMessageBatchRequestEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteMessageBatchRequestEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteMessageBatchRequestEntry extends AmazonQueueServiceWsdlClass
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
	 * Constructor
	 * @param string Id
	 * @param string ReceiptHandle
	 * @return AmazonQueueServiceTypeDeleteMessageBatchRequestEntry
	 */
	public function __construct($_Id = null,$_ReceiptHandle = null)
	{
		parent::__construct(array('Id'=>$_Id,'ReceiptHandle'=>$_ReceiptHandle));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>