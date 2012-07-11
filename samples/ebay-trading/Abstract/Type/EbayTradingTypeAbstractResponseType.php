<?php
/**
 * Class file for EbayTradingTypeAbstractResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAbstractResponseType
 * Documentation : Base type definition of a response payload that can carry any type of payload content with following optional elements:<br> - timestamp of response message<br> - application-level acknowledgement<br> - application-level (business-level) errors and warnings
 * @date 04/07/2012
 */
class EbayTradingTypeAbstractResponseType extends EbayTradingWsdlClass
{
	/**
	 * The Timestamp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value represents the date and time when eBay processed the request. The time zone of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See Time Values in the eBay Web Services guide for information about this time format and converting to and from the GMT time zone. <br> <br> <span class="tablenote"><b>Note:</b> GetCategories, GetAttributesCS, GetCategory2CS, GetAttributesXSL, GetProductFinder, GetProductFinderXSL, and GetProductSearchPage are designed to retrieve very large sets of metadata that change once a day or less often. To improve performance, these calls return cached responses when you request all available data (with no filters). When this occurs, this time value reflects the time the cached response was created. Thus, this value is not necessarily when the request was processed. However, if you specify an input filter to reduce the amount of data returned, the calls retrieve the latest data (not cached). When this occurs, this time value does reflect when the request was processed.</span>
	 * @var dateTime
	 */
	public $Timestamp;
	/**
	 * The Ack
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The AckCodeType list specifies the possible values for Ack.
	 * @var EbayTradingTypeAckCodeType
	 */
	public $Ack;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In most cases, all calls support a MessageID element in the request and a CorrelationID element in the response. If you pass a message ID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to particular requests. If you do not pass MessageID in the request, CorrelationID is not returned.<br> <br> <span class="tablenote"><b>Note:</b> GetCategories, GetAttributesCS, GetCategory2CS, GetAttributesXSL, GetProductFinder, GetProductFinderXSL, and GetProductSearchPage are designed to retrieve very large sets of metadata that change once a day or less often. To improve performance, these calls return cached responses when you request all available data (with no filters). When this occurs, the MessageID and CorrelationID fields aren't applicable. However, if you specify an input filter to reduce the amount of data returned, the calls retrieve the latest data (not cached). When this occurs, MessageID and CorrelationID are applicable. </span>
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Errors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of application-level errors (if any) that occurred when eBay processed the request.
	 * @var EbayTradingTypeErrorType
	 */
	public $Errors;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Supplemental information from eBay, if applicable. May elaborate on errors (such as how a listing violates eBay policies) or provide useful hints that may help a seller increase sales. This data can accompany the call's normal data result set or a result set that contains only errors. <br> <br> Applications must recognize when the Message field is returned and provide a means to display the listing hints and error message explanations to the user. <br> <br> The string can return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML-based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the table elements and image references into UI elements particular to the programming language used. As usual for string data types, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...).
	 * @var string
	 */
	public $Message;
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The version of the response payload schema. Indicates the version of the schema that eBay used to process the request. See "Standard Data for All Calls" in the eBay Web Services Guide for information on using the response version when troubleshooting "CustomCode" values that appear in the response.
	 * @var string
	 */
	public $Version;
	/**
	 * The Build
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This refers to the specific software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build information when helping you resolve technical issues.
	 * @var string
	 */
	public $Build;
	/**
	 * The NotificationEventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Event name of the notification. Only returned by Platform Notifications.
	 * @var string
	 */
	public $NotificationEventName;
	/**
	 * The DuplicateInvocationDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information that explains a failure due to a duplicate InvocationID being passed in.
	 * @var EbayTradingTypeDuplicateInvocationDetailsType
	 */
	public $DuplicateInvocationDetails;
	/**
	 * The RecipientUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Recipient user ID of the notification. Only returned by Platform Notifications.
	 * @var string
	 */
	public $RecipientUserID;
	/**
	 * The EIASToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique Identifier of Recipient user ID of the notification. Only returned by Platform Notifications (not for regular API call responses).
	 * @var string
	 */
	public $EIASToken;
	/**
	 * The NotificationSignature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A Base64-encoded MD5 hash that allows the recipient of a Platform Notification to verify this is a valid Platform Notification sent by eBay.
	 * @var string
	 */
	public $NotificationSignature;
	/**
	 * The HardExpirationWarning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Expiration date of the user's authentication token. Only returned within the 7-day period prior to a token's expiration. To ensure that user authentication tokens are secure and to help avoid a user's token being compromised, tokens have a limited life span. A token is only valid for a period of time (set by eBay). After this amount of time has passed, the token expires and must be replaced with a new token.
	 * @var string
	 */
	public $HardExpirationWarning;
	/**
	 * The BotBlock
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container of token, image URL and audio URL.
	 * @var EbayTradingTypeBotBlockResponseType
	 */
	public $BotBlock;
	/**
	 * The ExternalUserData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An application subscribing to notifications can include an XML-compliant string, not to exceed 256 characters, which will be returned. The string can identify a particular user. Any sensitive information should be passed with due caution. <br><br> To subscribe to and receive eBay Buyer Protection notifications, this field is required, and you must pass in 'eBP notification' as a string.
	 * @var string
	 */
	public $ExternalUserData;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param dateTime Timestamp
	 * @param EbayTradingTypeAckCodeType Ack
	 * @param string CorrelationID
	 * @param EbayTradingTypeErrorType Errors
	 * @param string Message
	 * @param string Version
	 * @param string Build
	 * @param string NotificationEventName
	 * @param EbayTradingTypeDuplicateInvocationDetailsType DuplicateInvocationDetails
	 * @param string RecipientUserID
	 * @param string EIASToken
	 * @param string NotificationSignature
	 * @param string HardExpirationWarning
	 * @param EbayTradingTypeBotBlockResponseType BotBlock
	 * @param string ExternalUserData
	 * @param DOMDocument any
	 * @return EbayTradingTypeAbstractResponseType
	 */
	public function __construct($_Timestamp = null,$_Ack = null,$_CorrelationID = null,$_Errors = null,$_Message = null,$_Version = null,$_Build = null,$_NotificationEventName = null,$_DuplicateInvocationDetails = null,$_RecipientUserID = null,$_EIASToken = null,$_NotificationSignature = null,$_HardExpirationWarning = null,$_BotBlock = null,$_ExternalUserData = null,$_any = null)
	{
		parent::__construct(array('Timestamp'=>$_Timestamp,'Ack'=>$_Ack,'CorrelationID'=>$_CorrelationID,'Errors'=>$_Errors,'Message'=>$_Message,'Version'=>$_Version,'Build'=>$_Build,'NotificationEventName'=>$_NotificationEventName,'DuplicateInvocationDetails'=>$_DuplicateInvocationDetails,'RecipientUserID'=>$_RecipientUserID,'EIASToken'=>$_EIASToken,'NotificationSignature'=>$_NotificationSignature,'HardExpirationWarning'=>$_HardExpirationWarning,'BotBlock'=>$_BotBlock,'ExternalUserData'=>$_ExternalUserData,'any'=>$_any));
	}
	/**
	 * Set Timestamp
	 * @param dateTime Timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_Timestamp)
	{
		return ($this->Timestamp = $_Timestamp);
	}
	/**
	 * Get Timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->Timestamp;
	}
	/**
	 * Set Ack
	 * @param AckCodeType Ack
	 * @return AckCodeType
	 */
	public function setAck($_Ack)
	{
		return ($this->Ack = EbayTradingTypeAckCodeType::valueIsValid($_Ack)?$_Ack:null);
	}
	/**
	 * Get Ack
	 * @return EbayTradingTypeAckCodeType
	 */
	public function getAck()
	{
		return $this->Ack;
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
	 * Set Errors
	 * @param ErrorType Errors
	 * @return ErrorType
	 */
	public function setErrors($_Errors)
	{
		return ($this->Errors = $_Errors);
	}
	/**
	 * Get Errors
	 * @return EbayTradingTypeErrorType
	 */
	public function getErrors()
	{
		return $this->Errors;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Build
	 * @param string Build
	 * @return string
	 */
	public function setBuild($_Build)
	{
		return ($this->Build = $_Build);
	}
	/**
	 * Get Build
	 * @return string
	 */
	public function getBuild()
	{
		return $this->Build;
	}
	/**
	 * Set NotificationEventName
	 * @param string NotificationEventName
	 * @return string
	 */
	public function setNotificationEventName($_NotificationEventName)
	{
		return ($this->NotificationEventName = $_NotificationEventName);
	}
	/**
	 * Get NotificationEventName
	 * @return string
	 */
	public function getNotificationEventName()
	{
		return $this->NotificationEventName;
	}
	/**
	 * Set DuplicateInvocationDetails
	 * @param DuplicateInvocationDetailsType DuplicateInvocationDetails
	 * @return DuplicateInvocationDetailsType
	 */
	public function setDuplicateInvocationDetails($_DuplicateInvocationDetails)
	{
		return ($this->DuplicateInvocationDetails = $_DuplicateInvocationDetails);
	}
	/**
	 * Get DuplicateInvocationDetails
	 * @return EbayTradingTypeDuplicateInvocationDetailsType
	 */
	public function getDuplicateInvocationDetails()
	{
		return $this->DuplicateInvocationDetails;
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
	 * Set EIASToken
	 * @param string EIASToken
	 * @return string
	 */
	public function setEIASToken($_EIASToken)
	{
		return ($this->EIASToken = $_EIASToken);
	}
	/**
	 * Get EIASToken
	 * @return string
	 */
	public function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * Set NotificationSignature
	 * @param string NotificationSignature
	 * @return string
	 */
	public function setNotificationSignature($_NotificationSignature)
	{
		return ($this->NotificationSignature = $_NotificationSignature);
	}
	/**
	 * Get NotificationSignature
	 * @return string
	 */
	public function getNotificationSignature()
	{
		return $this->NotificationSignature;
	}
	/**
	 * Set HardExpirationWarning
	 * @param string HardExpirationWarning
	 * @return string
	 */
	public function setHardExpirationWarning($_HardExpirationWarning)
	{
		return ($this->HardExpirationWarning = $_HardExpirationWarning);
	}
	/**
	 * Get HardExpirationWarning
	 * @return string
	 */
	public function getHardExpirationWarning()
	{
		return $this->HardExpirationWarning;
	}
	/**
	 * Set BotBlock
	 * @param BotBlockResponseType BotBlock
	 * @return BotBlockResponseType
	 */
	public function setBotBlock($_BotBlock)
	{
		return ($this->BotBlock = $_BotBlock);
	}
	/**
	 * Get BotBlock
	 * @return EbayTradingTypeBotBlockResponseType
	 */
	public function getBotBlock()
	{
		return $this->BotBlock;
	}
	/**
	 * Set ExternalUserData
	 * @param string ExternalUserData
	 * @return string
	 */
	public function setExternalUserData($_ExternalUserData)
	{
		return ($this->ExternalUserData = $_ExternalUserData);
	}
	/**
	 * Get ExternalUserData
	 * @return string
	 */
	public function getExternalUserData()
	{
		return $this->ExternalUserData;
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