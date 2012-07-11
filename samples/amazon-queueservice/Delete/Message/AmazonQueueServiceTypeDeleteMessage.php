<?php
/**
 * Class file for AmazonQueueServiceTypeDeleteMessage
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeDeleteMessage
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeDeleteMessage extends AmazonQueueServiceWsdlClass
{
	/**
	 * The ReceiptHandle
	 * @var string
	 */
	public $ReceiptHandle;
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string ReceiptHandle
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeDeleteMessage
	 */
	public function __construct($_ReceiptHandle = null,$_Attribute = null)
	{
		parent::__construct(array('ReceiptHandle'=>$_ReceiptHandle,'Attribute'=>$_Attribute));
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