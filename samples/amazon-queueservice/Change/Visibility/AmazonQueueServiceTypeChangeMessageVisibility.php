<?php
/**
 * Class file for AmazonQueueServiceTypeChangeMessageVisibility
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeChangeMessageVisibility
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeChangeMessageVisibility extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ReceiptHandle
	 * @var string
	 */
	public $ReceiptHandle;
	/**
	 * The VisibilityTimeout
	 * @var integer
	 */
	public $VisibilityTimeout;
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string ReceiptHandle
	 * @param integer VisibilityTimeout
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeChangeMessageVisibility
	 */
	public function __construct($_ReceiptHandle = null,$_VisibilityTimeout = null,$_Attribute = null)
	{
		parent::__construct(array('ReceiptHandle'=>$_ReceiptHandle,'VisibilityTimeout'=>$_VisibilityTimeout,'Attribute'=>$_Attribute));
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
	 * Set Attribute
	 * @param Attribute Attribute
	 * @return Attribute
	 */
	public function setAttribute($_Attribute)
	{
		return ($this->Attribute = $_Attribute);
	}
	/**
	 * Get Attribute
	 * @return AmazonQueueServiceTypeAttribute
	 */
	public function getAttribute()
	{
		return $this->Attribute;
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