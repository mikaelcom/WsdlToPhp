<?php
/**
 * Class file for YMailTypeSendMessage
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSendMessage
 * @date 02/07/2012
 */
class YMailTypeSendMessage extends YMailWsdlClass
{
	/**
	 * The message
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeComposeMessage
	 */
	public $message;
	/**
	 * The savecopy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $savecopy;
	/**
	 * Constructor
	 * @param YMailTypeComposeMessage message
	 * @param boolean savecopy
	 * @return YMailTypeSendMessage
	 */
	public function __construct($_message,$_savecopy = null)
	{
		parent::__construct(array('message'=>$_message,'savecopy'=>$_savecopy));
	}
	/**
	 * Set message
	 * @param ComposeMessage message
	 * @return ComposeMessage
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return YMailTypeComposeMessage
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set savecopy
	 * @param boolean savecopy
	 * @return boolean
	 */
	public function setSavecopy($_savecopy)
	{
		return ($this->savecopy = $_savecopy);
	}
	/**
	 * Get savecopy
	 * @return boolean
	 */
	public function getSavecopy()
	{
		return $this->savecopy;
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