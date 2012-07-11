<?php
/**
 * Class file for AmazonQueueServiceTypeReceiveMessage
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeReceiveMessage
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeReceiveMessage extends AmazonQueueServiceWsdlClass
{
	/**
	 * The MaxNumberOfMessages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $MaxNumberOfMessages;
	/**
	 * The VisibilityTimeout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $VisibilityTimeout;
	/**
	 * The AttributeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AttributeName;
	/**
	 * The Unused
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Unused;
	/**
	 * Constructor
	 * @param integer MaxNumberOfMessages
	 * @param integer VisibilityTimeout
	 * @param string AttributeName
	 * @param string Unused
	 * @return AmazonQueueServiceTypeReceiveMessage
	 */
	public function __construct($_MaxNumberOfMessages = null,$_VisibilityTimeout = null,$_AttributeName = null,$_Unused = null)
	{
		parent::__construct(array('MaxNumberOfMessages'=>$_MaxNumberOfMessages,'VisibilityTimeout'=>$_VisibilityTimeout,'AttributeName'=>$_AttributeName,'Unused'=>$_Unused));
	}
	/**
	 * Set MaxNumberOfMessages
	 * @param integer MaxNumberOfMessages
	 * @return integer
	 */
	public function setMaxNumberOfMessages($_MaxNumberOfMessages)
	{
		return ($this->MaxNumberOfMessages = $_MaxNumberOfMessages);
	}
	/**
	 * Get MaxNumberOfMessages
	 * @return integer
	 */
	public function getMaxNumberOfMessages()
	{
		return $this->MaxNumberOfMessages;
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
	 * Set AttributeName
	 * @param string AttributeName
	 * @return string
	 */
	public function setAttributeName($_AttributeName)
	{
		return ($this->AttributeName = $_AttributeName);
	}
	/**
	 * Get AttributeName
	 * @return string
	 */
	public function getAttributeName()
	{
		return $this->AttributeName;
	}
	/**
	 * Set Unused
	 * @param string Unused
	 * @return string
	 */
	public function setUnused($_Unused)
	{
		return ($this->Unused = $_Unused);
	}
	/**
	 * Get Unused
	 * @return string
	 */
	public function getUnused()
	{
		return $this->Unused;
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