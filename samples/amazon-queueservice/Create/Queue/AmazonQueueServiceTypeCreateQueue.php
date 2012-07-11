<?php
/**
 * Class file for AmazonQueueServiceTypeCreateQueue
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeCreateQueue
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeCreateQueue extends AmazonQueueServiceWsdlClass
{
	/**
	 * The QueueName
	 * @var string
	 */
	public $QueueName;
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string QueueName
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeCreateQueue
	 */
	public function __construct($_QueueName = null,$_Attribute = null)
	{
		parent::__construct(array('QueueName'=>$_QueueName,'Attribute'=>$_Attribute));
	}
	/**
	 * Set QueueName
	 * @param string QueueName
	 * @return string
	 */
	public function setQueueName($_QueueName)
	{
		return ($this->QueueName = $_QueueName);
	}
	/**
	 * Get QueueName
	 * @return string
	 */
	public function getQueueName()
	{
		return $this->QueueName;
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