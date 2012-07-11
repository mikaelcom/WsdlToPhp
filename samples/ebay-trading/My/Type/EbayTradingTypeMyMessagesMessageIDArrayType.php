<?php
/**
 * Class file for EbayTradingTypeMyMessagesMessageIDArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesMessageIDArrayType
 * Documentation : Contains a list of up to 10 MessageID values.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesMessageIDArrayType extends EbayTradingWsdlClass
{
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An ID that uniquely identifies a message for a given user.
	 * @var EbayTradingTypeMyMessagesMessageIDType
	 */
	public $MessageID;
	/**
	 * Constructor
	 * @param EbayTradingTypeMyMessagesMessageIDType MessageID
	 * @return EbayTradingTypeMyMessagesMessageIDArrayType
	 */
	public function __construct($_MessageID = null)
	{
		parent::__construct(array('MessageID'=>$_MessageID));
	}
	/**
	 * Set MessageID
	 * @param MyMessagesMessageIDType MessageID
	 * @return MyMessagesMessageIDType
	 */
	public function setMessageID($_MessageID)
	{
		return ($this->MessageID = EbayTradingTypeMyMessagesMessageIDType::valueIsValid($_MessageID)?$_MessageID:null);
	}
	/**
	 * Get MessageID
	 * @return EbayTradingTypeMyMessagesMessageIDType
	 */
	public function getMessageID()
	{
		return $this->MessageID;
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