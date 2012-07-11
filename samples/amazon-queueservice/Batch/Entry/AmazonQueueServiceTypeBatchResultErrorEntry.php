<?php
/**
 * Class file for AmazonQueueServiceTypeBatchResultErrorEntry
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeBatchResultErrorEntry
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeBatchResultErrorEntry extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Id
	 * @var string
	 */
	public $Id;
	/**
	 * The Code
	 * @var string
	 */
	public $Code;
	/**
	 * The Message
	 * @var string
	 */
	public $Message;
	/**
	 * The SenderFault
	 * @var boolean
	 */
	public $SenderFault;
	/**
	 * Constructor
	 * @param string Id
	 * @param string Code
	 * @param string Message
	 * @param boolean SenderFault
	 * @return AmazonQueueServiceTypeBatchResultErrorEntry
	 */
	public function __construct($_Id = null,$_Code = null,$_Message = null,$_SenderFault = null)
	{
		parent::__construct(array('Id'=>$_Id,'Code'=>$_Code,'Message'=>$_Message,'SenderFault'=>$_SenderFault));
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
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set SenderFault
	 * @param boolean SenderFault
	 * @return boolean
	 */
	public function setSenderFault($_SenderFault)
	{
		return ($this->SenderFault = $_SenderFault);
	}
	/**
	 * Get SenderFault
	 * @return boolean
	 */
	public function getSenderFault()
	{
		return $this->SenderFault;
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