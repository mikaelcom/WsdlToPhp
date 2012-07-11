<?php
/**
 * Class file for EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType
 * Documentation : Holds the content of the request.
 * @date 04/07/2012
 */
class EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType extends EbayTradingWsdlClass
{
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use to track that a response is returned for every request and to match particular responses to particular requests.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay ID that uniquely identifies a given item. Must be a currently active item.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The MemberMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Holds the content of the message.
	 * @var EbayTradingTypeMemberMessageType
	 */
	public $MemberMessage;
	/**
	 * Constructor
	 * @param string CorrelationID
	 * @param string ItemID
	 * @param EbayTradingTypeMemberMessageType MemberMessage
	 * @return EbayTradingTypeAddMemberMessagesAAQToBidderRequestContainerType
	 */
	public function __construct($_CorrelationID = null,$_ItemID = null,$_MemberMessage = null)
	{
		parent::__construct(array('CorrelationID'=>$_CorrelationID,'ItemID'=>$_ItemID,'MemberMessage'=>$_MemberMessage));
	}
	/**
	 * Set CorrelationID
	 * @param string CorrelationID
	 * @return string
	 */
	public function setCorrelationID($_CorrelationID)
	{
		return ($this->CorrelationID = $_CorrelationID);
	}
	/**
	 * Get CorrelationID
	 * @return string
	 */
	public function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set MemberMessage
	 * @param MemberMessageType MemberMessage
	 * @return MemberMessageType
	 */
	public function setMemberMessage($_MemberMessage)
	{
		return ($this->MemberMessage = $_MemberMessage);
	}
	/**
	 * Get MemberMessage
	 * @return EbayTradingTypeMemberMessageType
	 */
	public function getMemberMessage()
	{
		return $this->MemberMessage;
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