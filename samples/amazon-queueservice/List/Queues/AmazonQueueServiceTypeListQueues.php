<?php
/**
 * Class file for AmazonQueueServiceTypeListQueues
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeListQueues
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeListQueues extends AmazonQueueServiceWsdlClass
{
	/**
	 * The QueueNamePrefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $QueueNamePrefix;
	/**
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string QueueNamePrefix
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeListQueues
	 */
	public function __construct($_QueueNamePrefix = null,$_Attribute = null)
	{
		parent::__construct(array('QueueNamePrefix'=>$_QueueNamePrefix,'Attribute'=>$_Attribute));
	}
	/**
	 * Set QueueNamePrefix
	 * @param string QueueNamePrefix
	 * @return string
	 */
	public function setQueueNamePrefix($_QueueNamePrefix)
	{
		return ($this->QueueNamePrefix = $_QueueNamePrefix);
	}
	/**
	 * Get QueueNamePrefix
	 * @return string
	 */
	public function getQueueNamePrefix()
	{
		return $this->QueueNamePrefix;
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