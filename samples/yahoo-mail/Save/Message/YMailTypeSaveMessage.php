<?php
/**
 * Class file for YMailTypeSaveMessage
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSaveMessage
 * @date 02/07/2012
 */
class YMailTypeSaveMessage extends YMailWsdlClass
{
	/**
	 * The destination
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeSaveMessageDestination
	 */
	public $destination;
	/**
	 * The message
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeComposeMessage
	 */
	public $message;
	/**
	 * Constructor
	 * @param YMailTypeSaveMessageDestination destination
	 * @param YMailTypeComposeMessage message
	 * @return YMailTypeSaveMessage
	 */
	public function __construct($_destination,$_message)
	{
		parent::__construct(array('destination'=>$_destination,'message'=>$_message));
	}
	/**
	 * Set destination
	 * @param SaveMessageDestination destination
	 * @return SaveMessageDestination
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return YMailTypeSaveMessageDestination
	 */
	public function getDestination()
	{
		return $this->destination;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>