<?php
/**
 * Class file for EbayTradingTypeGetMemberMessagesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMemberMessagesRequestType
 * Documentation : Retrieves a list of the messages buyers have posted about your active item listings.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMemberMessagesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item the message is about. <br><br> For ASQ messages, either the ItemID, or a date range (specified with StartCreationTime and EndCreationTime), or both must be included. ItemID is otherwise ignored.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The MailMessageType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of message. Note that GetMemberMessages does not return messages when this field is set to AskSellerQuestion.
	 * @var EbayTradingTypeMessageTypeCodeType
	 */
	public $MailMessageType;
	/**
	 * The MessageStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the message.
	 * @var EbayTradingTypeMessageStatusTypeCodeType
	 */
	public $MessageStatus;
	/**
	 * The DisplayToPublic
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included in the request and set to True, only public messages (viewable in the Item listing) are returned. If omitted or set to False in the request, all messages (that match other filters in the request) are returned in the response.
	 * @var boolean
	 */
	public $DisplayToPublic;
	/**
	 * The StartCreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used as beginning of date range filter. If specified, filters the returned messages to only those with a creation date greater than or equal to the specified date and time. <br><br> For CEM messages, StartCreationTime and EndCreationTime must be provided. <br><br> For ASQ messages, either the ItemID, or a date range (specified with StartCreationTime and EndCreationTime), or both must be included.
	 * @var dateTime
	 */
	public $StartCreationTime;
	/**
	 * The EndCreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used as end of date range filter. If specified, filters the returned messages to only those with a creation date less than or equal to the specified date and time. <br><br> For CEM messages, StartCreationTime and EndCreationTime must be provided. <br><br> For ASQ messages, either the ItemID, or a date range (specified with StartCreationTime and EndCreationTime), or both must be included.
	 * @var dateTime
	 */
	public $EndCreationTime;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Standard pagination argument used to reduce response.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The MemberMessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies the message for a given user to be retrieved. Used for the AskSellerQuestion notification only.
	 * @var string
	 */
	public $MemberMessageID;
	/**
	 * The SenderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An eBay ID that uniquely identifies a user. For GetMemberMessages, this is the sender of the message. If included in the request, returns only messages from the specified sender.
	 * @var EbayTradingTypeUserIDType
	 */
	public $SenderID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeMessageTypeCodeType MailMessageType
	 * @param EbayTradingTypeMessageStatusTypeCodeType MessageStatus
	 * @param boolean DisplayToPublic
	 * @param dateTime StartCreationTime
	 * @param dateTime EndCreationTime
	 * @param EbayTradingTypePaginationType Pagination
	 * @param string MemberMessageID
	 * @param EbayTradingTypeUserIDType SenderID
	 * @return EbayTradingTypeGetMemberMessagesRequestType
	 */
	public function __construct($_ItemID = null,$_MailMessageType = null,$_MessageStatus = null,$_DisplayToPublic = null,$_StartCreationTime = null,$_EndCreationTime = null,$_Pagination = null,$_MemberMessageID = null,$_SenderID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'MailMessageType'=>$_MailMessageType,'MessageStatus'=>$_MessageStatus,'DisplayToPublic'=>$_DisplayToPublic,'StartCreationTime'=>$_StartCreationTime,'EndCreationTime'=>$_EndCreationTime,'Pagination'=>$_Pagination,'MemberMessageID'=>$_MemberMessageID,'SenderID'=>$_SenderID));
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
	 * Set MailMessageType
	 * @param MessageTypeCodeType MailMessageType
	 * @return MessageTypeCodeType
	 */
	public function setMailMessageType($_MailMessageType)
	{
		return ($this->MailMessageType = EbayTradingTypeMessageTypeCodeType::valueIsValid($_MailMessageType)?$_MailMessageType:null);
	}
	/**
	 * Get MailMessageType
	 * @return EbayTradingTypeMessageTypeCodeType
	 */
	public function getMailMessageType()
	{
		return $this->MailMessageType;
	}
	/**
	 * Set MessageStatus
	 * @param MessageStatusTypeCodeType MessageStatus
	 * @return MessageStatusTypeCodeType
	 */
	public function setMessageStatus($_MessageStatus)
	{
		return ($this->MessageStatus = EbayTradingTypeMessageStatusTypeCodeType::valueIsValid($_MessageStatus)?$_MessageStatus:null);
	}
	/**
	 * Get MessageStatus
	 * @return EbayTradingTypeMessageStatusTypeCodeType
	 */
	public function getMessageStatus()
	{
		return $this->MessageStatus;
	}
	/**
	 * Set DisplayToPublic
	 * @param boolean DisplayToPublic
	 * @return boolean
	 */
	public function setDisplayToPublic($_DisplayToPublic)
	{
		return ($this->DisplayToPublic = $_DisplayToPublic);
	}
	/**
	 * Get DisplayToPublic
	 * @return boolean
	 */
	public function getDisplayToPublic()
	{
		return $this->DisplayToPublic;
	}
	/**
	 * Set StartCreationTime
	 * @param dateTime StartCreationTime
	 * @return dateTime
	 */
	public function setStartCreationTime($_StartCreationTime)
	{
		return ($this->StartCreationTime = $_StartCreationTime);
	}
	/**
	 * Get StartCreationTime
	 * @return dateTime
	 */
	public function getStartCreationTime()
	{
		return $this->StartCreationTime;
	}
	/**
	 * Set EndCreationTime
	 * @param dateTime EndCreationTime
	 * @return dateTime
	 */
	public function setEndCreationTime($_EndCreationTime)
	{
		return ($this->EndCreationTime = $_EndCreationTime);
	}
	/**
	 * Get EndCreationTime
	 * @return dateTime
	 */
	public function getEndCreationTime()
	{
		return $this->EndCreationTime;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * Set MemberMessageID
	 * @param string MemberMessageID
	 * @return string
	 */
	public function setMemberMessageID($_MemberMessageID)
	{
		return ($this->MemberMessageID = $_MemberMessageID);
	}
	/**
	 * Get MemberMessageID
	 * @return string
	 */
	public function getMemberMessageID()
	{
		return $this->MemberMessageID;
	}
	/**
	 * Set SenderID
	 * @param UserIDType SenderID
	 * @return UserIDType
	 */
	public function setSenderID($_SenderID)
	{
		return ($this->SenderID = EbayTradingTypeUserIDType::valueIsValid($_SenderID)?$_SenderID:null);
	}
	/**
	 * Get SenderID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getSenderID()
	{
		return $this->SenderID;
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