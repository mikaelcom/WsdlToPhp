<?php
/**
 * Class file for EbayTradingTypeMemberMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMemberMessageType
 * Documentation : Container for individual message information.
 * @date 04/07/2012
 */
class EbayTradingTypeMemberMessageType extends EbayTradingWsdlClass
{
	/**
	 * The MessageType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of message being retrieved. Note that some message types can only be created via the eBay Web site.
	 * @var EbayTradingTypeMessageTypeCodeType
	 */
	public $MessageType;
	/**
	 * The QuestionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The context of the question (e.g. Shipping, General).
	 * @var EbayTradingTypeQuestionTypeCodeType
	 */
	public $QuestionType;
	/**
	 * The EmailCopyToSender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to email a copy of the message to the sender. If omitted, this defaults to whatever the user set in preferences.
	 * @var boolean
	 */
	public $EmailCopyToSender;
	/**
	 * The HideSendersEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to hide sender's email address from the recipient. If omitted, this defaults to whatever the user set in preferences--or on site policy, which determines whether or not this field is recognized. <br><br> <span class="tablenote"><b>Note:</b> This tag is no longer operational. </span>
	 * @var boolean
	 */
	public $HideSendersEmailAddress;
	/**
	 * The DisplayToPublic
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If True, the member message is viewable in the item listing.
	 * @var boolean
	 */
	public $DisplayToPublic;
	/**
	 * The SenderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay user ID of the person who asked the question or sent the message.
	 * @var string
	 */
	public $SenderID;
	/**
	 * The SenderEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : SenderEmail contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email address.) SenderEmail is returned if MessageType is AskSellerQuestion. SenderEmail is also returned in the AskSellerQuestion notification. The following functionality of this field has been deprecated: return of a dynamic email address.
	 * @var string
	 */
	public $SenderEmail;
	/**
	 * The RecipientID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Recipient's eBay user ID. For AddMemberMessagesAAQToBidder, it must be the seller of an item, that item's bidder, or a user who has made an offer on that item using Best Offer. Note: maxOccurs is a shared schema element and needs to be unbounded for AddMemberMessagesAAQToBidder. For AddMemberMessageRTQ, this field is mandatory if ItemID is not in the request. For all other uses, there can only be one RecipientID.
	 * @var string
	 */
	public $RecipientID;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subject of this email message.
	 * @var string
	 */
	public $Subject;
	/**
	 * The Body
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The content of the message. Please note the following for the GetMemberMessages call: If you use an API version of 653 or higher, then the content of the field can be up to 4000 characters in size. However, if the API version is less than 653, the limit is 2000, so if the actual message had more than 2000 characters, a warning message is returned and the message is truncated. If the API version is less than 653, the limit remains at 1000 for AddMemberMessageAAQToPartner and 2000 for AddMemberMessageRTQ.
	 * @var string
	 */
	public $Body;
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies a message for a given user. <br><br> This value is not the same as the value used for the GetMyMessages MessageID. However, this MessageID value can be used as the GetMyMessages ExternalID.
	 * @var string
	 */
	public $MessageID;
	/**
	 * The ParentMessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID number of the question this message is responding to.
	 * @var string
	 */
	public $ParentMessageID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMessageTypeCodeType MessageType
	 * @param EbayTradingTypeQuestionTypeCodeType QuestionType
	 * @param boolean EmailCopyToSender
	 * @param boolean HideSendersEmailAddress
	 * @param boolean DisplayToPublic
	 * @param string SenderID
	 * @param string SenderEmail
	 * @param string RecipientID
	 * @param string Subject
	 * @param string Body
	 * @param string MessageID
	 * @param string ParentMessageID
	 * @param DOMDocument any
	 * @return EbayTradingTypeMemberMessageType
	 */
	public function __construct($_MessageType = null,$_QuestionType = null,$_EmailCopyToSender = null,$_HideSendersEmailAddress = null,$_DisplayToPublic = null,$_SenderID = null,$_SenderEmail = null,$_RecipientID = null,$_Subject = null,$_Body = null,$_MessageID = null,$_ParentMessageID = null,$_any = null)
	{
		parent::__construct(array('MessageType'=>$_MessageType,'QuestionType'=>$_QuestionType,'EmailCopyToSender'=>$_EmailCopyToSender,'HideSendersEmailAddress'=>$_HideSendersEmailAddress,'DisplayToPublic'=>$_DisplayToPublic,'SenderID'=>$_SenderID,'SenderEmail'=>$_SenderEmail,'RecipientID'=>$_RecipientID,'Subject'=>$_Subject,'Body'=>$_Body,'MessageID'=>$_MessageID,'ParentMessageID'=>$_ParentMessageID,'any'=>$_any));
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
	 * Set EmailCopyToSender
	 * @param boolean EmailCopyToSender
	 * @return boolean
	 */
	public function setEmailCopyToSender($_EmailCopyToSender)
	{
		return ($this->EmailCopyToSender = $_EmailCopyToSender);
	}
	/**
	 * Get EmailCopyToSender
	 * @return boolean
	 */
	public function getEmailCopyToSender()
	{
		return $this->EmailCopyToSender;
	}
	/**
	 * Set HideSendersEmailAddress
	 * @param boolean HideSendersEmailAddress
	 * @return boolean
	 */
	public function setHideSendersEmailAddress($_HideSendersEmailAddress)
	{
		return ($this->HideSendersEmailAddress = $_HideSendersEmailAddress);
	}
	/**
	 * Get HideSendersEmailAddress
	 * @return boolean
	 */
	public function getHideSendersEmailAddress()
	{
		return $this->HideSendersEmailAddress;
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
	 * Set SenderID
	 * @param string SenderID
	 * @return string
	 */
	public function setSenderID($_SenderID)
	{
		return ($this->SenderID = $_SenderID);
	}
	/**
	 * Get SenderID
	 * @return string
	 */
	public function getSenderID()
	{
		return $this->SenderID;
	}
	/**
	 * Set SenderEmail
	 * @param string SenderEmail
	 * @return string
	 */
	public function setSenderEmail($_SenderEmail)
	{
		return ($this->SenderEmail = $_SenderEmail);
	}
	/**
	 * Get SenderEmail
	 * @return string
	 */
	public function getSenderEmail()
	{
		return $this->SenderEmail;
	}
	/**
	 * Set RecipientID
	 * @param string RecipientID
	 * @return string
	 */
	public function setRecipientID($_RecipientID)
	{
		return ($this->RecipientID = $_RecipientID);
	}
	/**
	 * Get RecipientID
	 * @return string
	 */
	public function getRecipientID()
	{
		return $this->RecipientID;
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
	 * Set Body
	 * @param string Body
	 * @return string
	 */
	public function setBody($_Body)
	{
		return ($this->Body = $_Body);
	}
	/**
	 * Get Body
	 * @return string
	 */
	public function getBody()
	{
		return $this->Body;
	}
	/**
	 * Set MessageID
	 * @param string MessageID
	 * @return string
	 */
	public function setMessageID($_MessageID)
	{
		return ($this->MessageID = $_MessageID);
	}
	/**
	 * Get MessageID
	 * @return string
	 */
	public function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * Set ParentMessageID
	 * @param string ParentMessageID
	 * @return string
	 */
	public function setParentMessageID($_ParentMessageID)
	{
		return ($this->ParentMessageID = $_ParentMessageID);
	}
	/**
	 * Get ParentMessageID
	 * @return string
	 */
	public function getParentMessageID()
	{
		return $this->ParentMessageID;
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