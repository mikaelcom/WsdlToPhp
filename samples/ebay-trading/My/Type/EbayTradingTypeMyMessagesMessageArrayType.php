<?php
/**
 * Class file for EbayTradingTypeMyMessagesMessageArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesMessageArrayType
 * Documentation : Contains a list of message data.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesMessageArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one message.
	 * @var EbayTradingTypeMyMessagesMessageType
	 */
	public $Message;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesMessageType Message
	 * @return EbayTradingTypeMyMessagesMessageArrayType
	 */
	public function __construct($_Message = null)
	{
		parent::__construct(array('Message'=>$_Message));
	}
	/**
	 * Set Message
	 * @param MyMessagesMessageType Message
	 * @return MyMessagesMessageType
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return EbayTradingTypeMyMessagesMessageType
	 */
	public function getMessage()
	{
		return $this->Message;
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