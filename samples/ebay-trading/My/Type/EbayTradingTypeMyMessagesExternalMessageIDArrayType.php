<?php
/**
 * Class file for EbayTradingTypeMyMessagesExternalMessageIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesExternalMessageIDArrayType
 * Documentation : Contains a list of up to 10 external message IDs.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesExternalMessageIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ExternalMessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Currently available on the US site. A message ID that uniquely identifies a message for a given user. If provided at the time of message creation, this ID can be used to retrieve messages, and will take precedence over the message ID. A total of 10 message IDs can be specified.
	 * @var EbayTradingTypeMyMessagesExternalMessageIDType
	 */
	public $ExternalMessageID;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesExternalMessageIDType ExternalMessageID
	 * @return EbayTradingTypeMyMessagesExternalMessageIDArrayType
	 */
	public function __construct($_ExternalMessageID = null)
	{
		parent::__construct(array('ExternalMessageID'=>$_ExternalMessageID));
	}
	/**
	 * Set ExternalMessageID
	 * @param MyMessagesExternalMessageIDType ExternalMessageID
	 * @return MyMessagesExternalMessageIDType
	 */
	public function setExternalMessageID($_ExternalMessageID)
	{
		return ($this->ExternalMessageID = EbayTradingTypeMyMessagesExternalMessageIDType::valueIsValid($_ExternalMessageID)?$_ExternalMessageID:null);
	}
	/**
	 * Get ExternalMessageID
	 * @return EbayTradingTypeMyMessagesExternalMessageIDType
	 */
	public function getExternalMessageID()
	{
		return $this->ExternalMessageID;
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