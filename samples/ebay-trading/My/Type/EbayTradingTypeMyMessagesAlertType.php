<?php
/**
 * Class file for EbayTradingTypeMyMessagesAlertType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyMessagesAlertType
 * Documentation : To be deprecated in an upcoming release. Formerly, contained an alert header and full alert information.
 * @date 04/07/2012
 */
class EbayTradingTypeMyMessagesAlertType extends EbayTradingWsdlClass
{
	/**
	 * The Sender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the display name of the eBay application that sends the alert.
	 * @var string
	 */
	public $Sender;
	/**
	 * The RecipientUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the displayable user ID of the recipient.
	 * @var string
	 */
	public $RecipientUserID;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the subject of the alert.
	 * @var string
	 */
	public $Subject;
	/**
	 * The Priority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained a number ranging from 0 to 10000 (inclusive), with 10000 having the highest priority.
	 * @var string
	 */
	public $Priority;
	/**
	 * The AlertID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained an ID that uniquely identifies an alert for a given user.
	 * @var EbayTradingTypeMyMessagesAlertIDType
	 */
	public $AlertID;
	/**
	 * The ExternalAlertID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained an ID used by an external application to uniquely identify an alert.
	 * @var string
	 */
	public $ExternalAlertID;
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the content type of the body text. The two acceptable values are "TEXT" and "HTML" (case sensitive).
	 * @var string
	 */
	public $ContentType;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the alert body. This can be either plain text or HTML, depending on which format the alert was originally written in. Note that the API does not currently check the user email format preferences that can be specified in My Messages on the eBay.com Web site.
	 * @var string
	 */
	public $Text;
	/**
	 * The ResolutionStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained whether or not an alert was resolved, and how.
	 * @var EbayTradingTypeMyMessagesAlertResolutionStatusCode
	 */
	public $ResolutionStatus;
	/**
	 * The Read
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained whether or not an alert was viewed by a given user. Note that retrieving an alert with the API does not mark it as read.
	 * @var boolean
	 */
	public $Read;
	/**
	 * The CreationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the date and time an alert was created by a sender.
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * The ReceiveDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time that an alert was received by My Messages and stored in a database for the recipient.
	 * @var dateTime
	 */
	public $ReceiveDate;
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the date and time at which an alert expires.
	 * @var dateTime
	 */
	public $ExpirationDate;
	/**
	 * The ResolutionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the date and time at which an alert is resolved.
	 * @var dateTime
	 */
	public $ResolutionDate;
	/**
	 * The LastReadDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained the date and time an alert was last viewed by a given user.
	 * @var dateTime
	 */
	public $LastReadDate;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained a unique eBay item ID associated with an alert.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The IsTimedResolution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained whether or not a time-delayed resolution is applicable for an alert.
	 * @var boolean
	 */
	public $IsTimedResolution;
	/**
	 * The ActionURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained a URL that the recipient must visit to resolve an alert. May be returned as an empty tag if there is no applicable URL.
	 * @var string
	 */
	public $ActionURL;
	/**
	 * The ResponseDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained details relating to the response to an alert or message.
	 * @var EbayTradingTypeMyMessagesResponseDetailsType
	 */
	public $ResponseDetails;
	/**
	 * The ForwardDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained details relating to the forwarding of an alert or message. Only returned if the alert or message is forwarded.
	 * @var EbayTradingTypeMyMessagesForwardDetailsType
	 */
	public $ForwardDetails;
	/**
	 * The Folder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field will be deprecated in an upcoming release. This field formerly contained details relating to a My Messages folder.
	 * @var EbayTradingTypeMyMessagesFolderType
	 */
	public $Folder;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Sender
	 * @param string RecipientUserID
	 * @param string Subject
	 * @param string Priority
	 * @param EbayTradingTypeMyMessagesAlertIDType AlertID
	 * @param string ExternalAlertID
	 * @param string ContentType
	 * @param string Text
	 * @param EbayTradingTypeMyMessagesAlertResolutionStatusCode ResolutionStatus
	 * @param boolean Read
	 * @param dateTime CreationDate
	 * @param dateTime ReceiveDate
	 * @param dateTime ExpirationDate
	 * @param dateTime ResolutionDate
	 * @param dateTime LastReadDate
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean IsTimedResolution
	 * @param string ActionURL
	 * @param EbayTradingTypeMyMessagesResponseDetailsType ResponseDetails
	 * @param EbayTradingTypeMyMessagesForwardDetailsType ForwardDetails
	 * @param EbayTradingTypeMyMessagesFolderType Folder
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyMessagesAlertType
	 */
	public function __construct($_Sender = null,$_RecipientUserID = null,$_Subject = null,$_Priority = null,$_AlertID = null,$_ExternalAlertID = null,$_ContentType = null,$_Text = null,$_ResolutionStatus = null,$_Read = null,$_CreationDate = null,$_ReceiveDate = null,$_ExpirationDate = null,$_ResolutionDate = null,$_LastReadDate = null,$_ItemID = null,$_IsTimedResolution = null,$_ActionURL = null,$_ResponseDetails = null,$_ForwardDetails = null,$_Folder = null,$_any = null)
	{
		parent::__construct(array('Sender'=>$_Sender,'RecipientUserID'=>$_RecipientUserID,'Subject'=>$_Subject,'Priority'=>$_Priority,'AlertID'=>$_AlertID,'ExternalAlertID'=>$_ExternalAlertID,'ContentType'=>$_ContentType,'Text'=>$_Text,'ResolutionStatus'=>$_ResolutionStatus,'Read'=>$_Read,'CreationDate'=>$_CreationDate,'ReceiveDate'=>$_ReceiveDate,'ExpirationDate'=>$_ExpirationDate,'ResolutionDate'=>$_ResolutionDate,'LastReadDate'=>$_LastReadDate,'ItemID'=>$_ItemID,'IsTimedResolution'=>$_IsTimedResolution,'ActionURL'=>$_ActionURL,'ResponseDetails'=>$_ResponseDetails,'ForwardDetails'=>$_ForwardDetails,'Folder'=>$_Folder,'any'=>$_any));
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
	 * Set Priority
	 * @param string Priority
	 * @return string
	 */
	public function setPriority($_Priority)
	{
		return ($this->Priority = $_Priority);
	}
	/**
	 * Get Priority
	 * @return string
	 */
	public function getPriority()
	{
		return $this->Priority;
	}
	/**
	 * Set AlertID
	 * @param MyMessagesAlertIDType AlertID
	 * @return MyMessagesAlertIDType
	 */
	public function setAlertID($_AlertID)
	{
		return ($this->AlertID = EbayTradingTypeMyMessagesAlertIDType::valueIsValid($_AlertID)?$_AlertID:null);
	}
	/**
	 * Get AlertID
	 * @return EbayTradingTypeMyMessagesAlertIDType
	 */
	public function getAlertID()
	{
		return $this->AlertID;
	}
	/**
	 * Set ExternalAlertID
	 * @param string ExternalAlertID
	 * @return string
	 */
	public function setExternalAlertID($_ExternalAlertID)
	{
		return ($this->ExternalAlertID = $_ExternalAlertID);
	}
	/**
	 * Get ExternalAlertID
	 * @return string
	 */
	public function getExternalAlertID()
	{
		return $this->ExternalAlertID;
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
	 * Set ResolutionStatus
	 * @param MyMessagesAlertResolutionStatusCode ResolutionStatus
	 * @return MyMessagesAlertResolutionStatusCode
	 */
	public function setResolutionStatus($_ResolutionStatus)
	{
		return ($this->ResolutionStatus = EbayTradingTypeMyMessagesAlertResolutionStatusCode::valueIsValid($_ResolutionStatus)?$_ResolutionStatus:null);
	}
	/**
	 * Get ResolutionStatus
	 * @return EbayTradingTypeMyMessagesAlertResolutionStatusCode
	 */
	public function getResolutionStatus()
	{
		return $this->ResolutionStatus;
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
	 * Set ResolutionDate
	 * @param dateTime ResolutionDate
	 * @return dateTime
	 */
	public function setResolutionDate($_ResolutionDate)
	{
		return ($this->ResolutionDate = $_ResolutionDate);
	}
	/**
	 * Get ResolutionDate
	 * @return dateTime
	 */
	public function getResolutionDate()
	{
		return $this->ResolutionDate;
	}
	/**
	 * Set LastReadDate
	 * @param dateTime LastReadDate
	 * @return dateTime
	 */
	public function setLastReadDate($_LastReadDate)
	{
		return ($this->LastReadDate = $_LastReadDate);
	}
	/**
	 * Get LastReadDate
	 * @return dateTime
	 */
	public function getLastReadDate()
	{
		return $this->LastReadDate;
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
	 * Set IsTimedResolution
	 * @param boolean IsTimedResolution
	 * @return boolean
	 */
	public function setIsTimedResolution($_IsTimedResolution)
	{
		return ($this->IsTimedResolution = $_IsTimedResolution);
	}
	/**
	 * Get IsTimedResolution
	 * @return boolean
	 */
	public function getIsTimedResolution()
	{
		return $this->IsTimedResolution;
	}
	/**
	 * Set ActionURL
	 * @param string ActionURL
	 * @return string
	 */
	public function setActionURL($_ActionURL)
	{
		return ($this->ActionURL = $_ActionURL);
	}
	/**
	 * Get ActionURL
	 * @return string
	 */
	public function getActionURL()
	{
		return $this->ActionURL;
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