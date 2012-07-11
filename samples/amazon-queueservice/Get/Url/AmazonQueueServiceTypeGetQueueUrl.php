<?php
/**
 * Class file for AmazonQueueServiceTypeGetQueueUrl
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeGetQueueUrl
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeGetQueueUrl extends AmazonQueueServiceWsdlClass
{
	/**
	 * The QueueName
	 * @var string
	 */
	public $QueueName;
	/**
	 * The QueueOwnerAWSAccountId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $QueueOwnerAWSAccountId;
	/**
	 * Constructor
	 * @param string QueueName
	 * @param string QueueOwnerAWSAccountId
	 * @return AmazonQueueServiceTypeGetQueueUrl
	 */
	public function __construct($_QueueName = null,$_QueueOwnerAWSAccountId = null)
	{
		parent::__construct(array('QueueName'=>$_QueueName,'QueueOwnerAWSAccountId'=>$_QueueOwnerAWSAccountId));
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
	 * Set QueueOwnerAWSAccountId
	 * @param string QueueOwnerAWSAccountId
	 * @return string
	 */
	public function setQueueOwnerAWSAccountId($_QueueOwnerAWSAccountId)
	{
		return ($this->QueueOwnerAWSAccountId = $_QueueOwnerAWSAccountId);
	}
	/**
	 * Get QueueOwnerAWSAccountId
	 * @return string
	 */
	public function getQueueOwnerAWSAccountId()
	{
		return $this->QueueOwnerAWSAccountId;
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