<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessageBatchRequestEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessageBatchRequestEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessageBatchRequestEntry extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
	/**
	 * The MessageBody
	 * @var string
	 */
	public $MessageBody;
	/**
	 * The DelaySeconds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $DelaySeconds;
	/**
	 * Constructor
	 * @param string Id
	 * @param string MessageBody
	 * @param integer DelaySeconds
	 * @return AmazonQueueServiceTypeSendMessageBatchRequestEntry
	 */
	public function __construct($_Id = null,$_MessageBody = null,$_DelaySeconds = null)
	{
		parent::__construct(array('Id'=>$_Id,'MessageBody'=>$_MessageBody,'DelaySeconds'=>$_DelaySeconds));
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
	 * Set MessageBody
	 * @param string MessageBody
	 * @return string
	 */
	public function setMessageBody($_MessageBody)
	{
		return ($this->MessageBody = $_MessageBody);
	}
	/**
	 * Get MessageBody
	 * @return string
	 */
	public function getMessageBody()
	{
		return $this->MessageBody;
	}
	/**
	 * Set DelaySeconds
	 * @param integer DelaySeconds
	 * @return integer
	 */
	public function setDelaySeconds($_DelaySeconds)
	{
		return ($this->DelaySeconds = $_DelaySeconds);
	}
	/**
	 * Get DelaySeconds
	 * @return integer
	 */
	public function getDelaySeconds()
	{
		return $this->DelaySeconds;
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