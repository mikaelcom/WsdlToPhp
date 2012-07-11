<?php
/**
 * Class file for EbayTradingTypeAddMemberMessageAAQToPartnerRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddMemberMessageAAQToPartnerRequestType
 * Documentation : Enables a buyer and seller in an order relationship to send messages to each other's My Messages Inboxes.
 * @date 04/07/2012
 */
class EbayTradingTypeAddMemberMessageAAQToPartnerRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of the item about which the question was asked.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The MemberMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for the message. Includes the message body, plus other values related to the message.
	 * @var EbayTradingTypeMemberMessageType
	 */
	public $MemberMessage;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeMemberMessageType MemberMessage
	 * @return EbayTradingTypeAddMemberMessageAAQToPartnerRequestType
	 */
	public function __construct($_ItemID = null,$_MemberMessage = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'MemberMessage'=>$_MemberMessage));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
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