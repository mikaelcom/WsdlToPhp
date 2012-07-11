<?php
/**
 * Class file for EbayTradingTypeMyMessagesMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesMessageType
 * Documentation : Contains the message information for each message specified in MessageIDs. The amount and type of information returned varies based on the requested detail level.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesMessageType extends EbayTradingWsdlClass
{
	/**
	 * The Sender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The display name of the eBay user that sent the message.
	 * @var string
	 */
	public $Sender;
	/**
	 * The RecipientUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The displayable user ID of the recipient.
	 * @var string
	 */
	public $RecipientUserID;
	/**
	 * The SendToName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The displayable name of the user or eBay application to which the message is sent. Only returned for M2M, and if a value exists.
	 * @var string
	 */
	public $SendToName;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The subject of the message.
	 * @var string
	 */
	public $Subject;
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies a message for a given user. <br/> <br/> This value is not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages value (used as the GetMyMessages ExternalID) instead.
	 * @var EbayTradingTypeMyMessagesMessageIDType
	 */
	public $MessageID;
	/**
	 * The ExternalMessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID used by an external application to uniquely identify a message. Returned only when specified by the external application on message creation. <br><br> This value is equivalent to the value used for MessageID in GetMemberMessages.
	 * @var string
	 */
	public $ExternalMessageID;
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The content type of the body text. The three acceptable values are "TEXT", "HTML", and "XML" (case sensitive).
	 * @var string
	 */
	public $ContentType;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field contains message content, and can contain a threaded message. This field can contain plain text or HTML, depending on the format of the original message. The API does not check the email-format preferences in My Messages on the eBay Web site.
	 * @var string
	 */
	public $Text;
	/**
	 * The Flagged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When the Flagged field is true, it means the message is displayed with a flag in the seller's My Messages mailbox on eBay. It is strongly recommended that the seller act on the message by the specified date (or within 60 days, if not specified).
	 * @var boolean
	 */
	public $Flagged;
	/**
	 * The Read
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether or not a message has been viewed by a given user. Note that retrieving a message with the API does not mark it as read.
	 * @var boolean
	 */
	public $Read;
	/**
	 * The CreationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that a message was created by the sender.
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * The ReceiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that a message was received by My Messages and stored in a database for the recipient.
	 * @var dateTime
	 */
	public $ReceiveDate;
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time at which a message expires.
	 * @var dateTime
	 */
	public $ExpirationDate;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique item ID. Not returned for messages that haven't been associated with a specific item.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ResponseDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details relating to the response to a message.
	 * @var EbayTradingTypeMyMessagesResponseDetailsType
	 */
	public $ResponseDetails;
	/**
	 * The ForwardDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details relating to the forwarding of a message. Only returned if the message is forwarded.
	 * @var EbayTradingTypeMyMessagesForwardDetailsType
	 */
	public $ForwardDetails;
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details relating to a My Messages folder.
	 * @var EbayTradingTypeMyMessagesFolderType
	 */
	public $Folder;
	/**
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The message body. Plain text. The API does not currently check the user email format preferences that can be specified in My Messages on the eBay.com Web site.
	 * @var string
	 */
	public $Content;
	/**
	 * The MessageType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currently available on the US site. Specifies the type of message being retrieved through GetMyMessages.
	 * @var EbayTradingTypeMessageTypeCodeType
	 */
	public $MessageType;
	/**
	 * The ListingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the listing. <br><br> <span class="tablenote"><b>Note:</b> For GetMyMessages, the listing status reflects the status of the listing at the time the question was created. The listing status for this call must not match the listing status returned by other calls (such as GetItemTransactions). This is returned only if Messages.Message.MessageType is AskSellerQuestion. This tag is no longer returned in the Sandbox environment. </span>
	 * @var EbayTradingTypeListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * The QuestionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currently available on the US site. Specifies the context of the question. Corresponds to the message subject. Applies if Messages.Message.MessageType is
	 * @var EbayTradingTypeQuestionTypeCodeType
	 */
	public $QuestionType;
	/**
	 * The Replied
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether or not a message has been replied.
	 * @var boolean
	 */
	public $Replied;
	/**
	 * The HighPriority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Set this boolean to true to mark the message as a high-priority message.
	 * @var boolean
	 */
	public $HighPriority;
	/**
	 * The ItemEndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time for the ended item
	 * @var dateTime
	 */
	public $ItemEndTime;
	/**
	 * The ItemTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the item listing. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title is increasing to 80 characters in Version 735. </span>
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Sender
	 * @param string RecipientUserID
	 * @param string SendToName
	 * @param string Subject
	 * @param EbayTradingTypeMyMessagesMessageIDType MessageID
	 * @param string ExternalMessageID
	 * @param string ContentType
	 * @param string Text
	 * @param boolean Flagged
	 * @param boolean Read
	 * @param dateTime CreationDate
	 * @param dateTime ReceiveDate
	 * @param dateTime ExpirationDate
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeMyMessagesResponseDetailsType ResponseDetails
	 * @param EbayTradingTypeMyMessagesForwardDetailsType ForwardDetails
	 * @param EbayTradingTypeMyMessagesFolderType Folder
	 * @param string Content
	 * @param EbayTradingTypeMessageTypeCodeType MessageType
	 * @param EbayTradingTypeListingStatusCodeType ListingStatus
	 * @param EbayTradingTypeQuestionTypeCodeType QuestionType
	 * @param boolean Replied
	 * @param boolean HighPriority
	 * @param dateTime ItemEndTime
	 * @param string ItemTitle
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesMessageType
	 */
	public function __construct($_Sender = null,$_RecipientUserID = null,$_SendToName = null,$_Subject = null,$_MessageID = null,$_ExternalMessageID = null,$_ContentType = null,$_Text = null,$_Flagged = null,$_Read = null,$_CreationDate = null,$_ReceiveDate = null,$_ExpirationDate = null,$_ItemID = null,$_ResponseDetails = null,$_ForwardDetails = null,$_Folder = null,$_Content = null,$_MessageType = null,$_ListingStatus = null,$_QuestionType = null,$_Replied = null,$_HighPriority = null,$_ItemEndTime = null,$_ItemTitle = null,$_any = null)
	{
		parent::__construct(array('Sender'=>$_Sender,'RecipientUserID'=>$_RecipientUserID,'SendToName'=>$_SendToName,'Subject'=>$_Subject,'MessageID'=>$_MessageID,'ExternalMessageID'=>$_ExternalMessageID,'ContentType'=>$_ContentType,'Text'=>$_Text,'Flagged'=>$_Flagged,'Read'=>$_Read,'CreationDate'=>$_CreationDate,'ReceiveDate'=>$_ReceiveDate,'ExpirationDate'=>$_ExpirationDate,'ItemID'=>$_ItemID,'ResponseDetails'=>$_ResponseDetails,'ForwardDetails'=>$_ForwardDetails,'Folder'=>$_Folder,'Content'=>$_Content,'MessageType'=>$_MessageType,'ListingStatus'=>$_ListingStatus,'QuestionType'=>$_QuestionType,'Replied'=>$_Replied,'HighPriority'=>$_HighPriority,'ItemEndTime'=>$_ItemEndTime,'ItemTitle'=>$_ItemTitle,'any'=>$_any));
	}
	/**
	 * Set Sender
	 * @param string Sender
	 * @return string
	 */
	public function setSender($_Sender)
	{
		return ($this->Sender = $_Sender);
	}
	/**
	 * Get Sender
	 * @return string
	 */
	public function getSender()
	{
		return $this->Sender;
	}
	/**
	 * Set RecipientUserID
	 * @param string RecipientUserID
	 * @return string
	 */
	public function setRecipientUserID($_RecipientUserID)
	{
		return ($this->RecipientUserID = $_RecipientUserID);
	}
	/**
	 * Get RecipientUserID
	 * @return string
	 */
	public function getRecipientUserID()
	{
		return $this->RecipientUserID;
	}
	/**
	 * Set SendToName
	 * @param string SendToName
	 * @return string
	 */
	public function setSendToName($_SendToName)
	{
		return ($this->SendToName = $_SendToName);
	}
	/**
	 * Get SendToName
	 * @return string
	 */
	public function getSendToName()
	{
		return $this->SendToName;
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
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
	 * Set ExternalMessageID
	 * @param string ExternalMessageID
	 * @return string
	 */
	public function setExternalMessageID($_ExternalMessageID)
	{
		return ($this->ExternalMessageID = $_ExternalMessageID);
	}
	/**
	 * Get ExternalMessageID
	 * @return string
	 */
	public function getExternalMessageID()
	{
		return $this->ExternalMessageID;
	}
	/**
	 * Set ContentType
	 * @param string ContentType
	 * @return string
	 */
	public function setContentType($_ContentType)
	{
		return ($this->ContentType = $_ContentType);
	}
	/**
	 * Get ContentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->ContentType;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
	}
	/**
	 * Set Flagged
	 * @param boolean Flagged
	 * @return boolean
	 */
	public function setFlagged($_Flagged)
	{
		return ($this->Flagged = $_Flagged);
	}
	/**
	 * Get Flagged
	 * @return boolean
	 */
	public function getFlagged()
	{
		return $this->Flagged;
	}
	/**
	 * Set Read
	 * @param boolean Read
	 * @return boolean
	 */
	public function setRead($_Read)
	{
		return ($this->Read = $_Read);
	}
	/**
	 * Get Read
	 * @return boolean
	 */
	public function getRead()
	{
		return $this->Read;
	}
	/**
	 * Set CreationDate
	 * @param dateTime CreationDate
	 * @return dateTime
	 */
	public function setCreationDate($_CreationDate)
	{
		return ($this->CreationDate = $_CreationDate);
	}
	/**
	 * Get CreationDate
	 * @return dateTime
	 */
	public function getCreationDate()
	{
		return $this->CreationDate;
	}
	/**
	 * Set ReceiveDate
	 * @param dateTime ReceiveDate
	 * @return dateTime
	 */
	public function setReceiveDate($_ReceiveDate)
	{
		return ($this->ReceiveDate = $_ReceiveDate);
	}
	/**
	 * Get ReceiveDate
	 * @return dateTime
	 */
	public function getReceiveDate()
	{
		return $this->ReceiveDate;
	}
	/**
	 * Set ExpirationDate
	 * @param dateTime ExpirationDate
	 * @return dateTime
	 */
	public function setExpirationDate($_ExpirationDate)
	{
		return ($this->ExpirationDate = $_ExpirationDate);
	}
	/**
	 * Get ExpirationDate
	 * @return dateTime
	 */
	public function getExpirationDate()
	{
		return $this->ExpirationDate;
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
	 * Set ResponseDetails
	 * @param MyMessagesResponseDetailsType ResponseDetails
	 * @return MyMessagesResponseDetailsType
	 */
	public function setResponseDetails($_ResponseDetails)
	{
		return ($this->ResponseDetails = $_ResponseDetails);
	}
	/**
	 * Get ResponseDetails
	 * @return EbayTradingTypeMyMessagesResponseDetailsType
	 */
	public function getResponseDetails()
	{
		return $this->ResponseDetails;
	}
	/**
	 * Set ForwardDetails
	 * @param MyMessagesForwardDetailsType ForwardDetails
	 * @return MyMessagesForwardDetailsType
	 */
	public function setForwardDetails($_ForwardDetails)
	{
		return ($this->ForwardDetails = $_ForwardDetails);
	}
	/**
	 * Get ForwardDetails
	 * @return EbayTradingTypeMyMessagesForwardDetailsType
	 */
	public function getForwardDetails()
	{
		return $this->ForwardDetails;
	}
	/**
	 * Set Folder
	 * @param MyMessagesFolderType Folder
	 * @return MyMessagesFolderType
	 */
	public function setFolder($_Folder)
	{
		return ($this->Folder = $_Folder);
	}
	/**
	 * Get Folder
	 * @return EbayTradingTypeMyMessagesFolderType
	 */
	public function getFolder()
	{
		return $this->Folder;
	}
	/**
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
	}
	/**
	 * Set MessageType
	 * @param MessageTypeCodeType MessageType
	 * @return MessageTypeCodeType
	 */
	public function setMessageType($_MessageType)
	{
		return ($this->MessageType = EbayTradingTypeMessageTypeCodeType::valueIsValid($_MessageType)?$_MessageType:null);
	}
	/**
	 * Get MessageType
	 * @return EbayTradingTypeMessageTypeCodeType
	 */
	public function getMessageType()
	{
		return $this->MessageType;
	}
	/**
	 * Set ListingStatus
	 * @param ListingStatusCodeType ListingStatus
	 * @return ListingStatusCodeType
	 */
	public function setListingStatus($_ListingStatus)
	{
		return ($this->ListingStatus = EbayTradingTypeListingStatusCodeType::valueIsValid($_ListingStatus)?$_ListingStatus:null);
	}
	/**
	 * Get ListingStatus
	 * @return EbayTradingTypeListingStatusCodeType
	 */
	public function getListingStatus()
	{
		return $this->ListingStatus;
	}
	/**
	 * Set QuestionType
	 * @param QuestionTypeCodeType QuestionType
	 * @return QuestionTypeCodeType
	 */
	public function setQuestionType($_QuestionType)
	{
		return ($this->QuestionType = EbayTradingTypeQuestionTypeCodeType::valueIsValid($_QuestionType)?$_QuestionType:null);
	}
	/**
	 * Get QuestionType
	 * @return EbayTradingTypeQuestionTypeCodeType
	 */
	public function getQuestionType()
	{
		return $this->QuestionType;
	}
	/**
	 * Set Replied
	 * @param boolean Replied
	 * @return boolean
	 */
	public function setReplied($_Replied)
	{
		return ($this->Replied = $_Replied);
	}
	/**
	 * Get Replied
	 * @return boolean
	 */
	public function getReplied()
	{
		return $this->Replied;
	}
	/**
	 * Set HighPriority
	 * @param boolean HighPriority
	 * @return boolean
	 */
	public function setHighPriority($_HighPriority)
	{
		return ($this->HighPriority = $_HighPriority);
	}
	/**
	 * Get HighPriority
	 * @return boolean
	 */
	public function getHighPriority()
	{
		return $this->HighPriority;
	}
	/**
	 * Set ItemEndTime
	 * @param dateTime ItemEndTime
	 * @return dateTime
	 */
	public function setItemEndTime($_ItemEndTime)
	{
		return ($this->ItemEndTime = $_ItemEndTime);
	}
	/**
	 * Get ItemEndTime
	 * @return dateTime
	 */
	public function getItemEndTime()
	{
		return $this->ItemEndTime;
	}
	/**
	 * Set ItemTitle
	 * @param string ItemTitle
	 * @return string
	 */
	public function setItemTitle($_ItemTitle)
	{
		return ($this->ItemTitle = $_ItemTitle);
	}
	/**
	 * Get ItemTitle
	 * @return string
	 */
	public function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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