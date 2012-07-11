<?php
/**
 * Class file for AmazonQueueServiceTypeSendMessage
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeSendMessage
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeSendMessage extends AmazonQueueServiceWsdlClass
{
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
	 * The Attribute
	 * @var AmazonQueueServiceTypeAttribute
	 */
	public $Attribute;
	/**
	 * Constructor
	 * @param string MessageBody
	 * @param integer DelaySeconds
	 * @param AmazonQueueServiceTypeAttribute Attribute
	 * @return AmazonQueueServiceTypeSendMessage
	 */
	public function __construct($_MessageBody = null,$_DelaySeconds = null,$_Attribute = null)
	{
		parent::__construct(array('MessageBody'=>$_MessageBody,'DelaySeconds'=>$_DelaySeconds,'Attribute'=>$_Attribute));
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