<?php
/**
 * Class file for EbayTradingTypeAbstractRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAbstractRequestType
 * Documentation : Base type definition of the request payload, which can carry any type of payload content plus optional versioning information and detail level requirements. All concrete request types (e.g., AddItemRequestType) are derived from the abstract request type. The naming convention we use for the concrete type names is the name of the service (the verb or call name) followed by "RequestType": VerbNameRequestType
 * @date 04/07/2012
 */
class EbayTradingTypeAbstractRequestType extends EbayTradingWsdlClass
{
	/**
	 * The DetailLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Detail levels are instructions that define standard subsets of data to return for particular data components (e.g., each Item, Transaction, or User) within the response payload. For example, a particular detail level might cause the response to include buyer-related data in every result (e.g., for every Item), but no seller-related data. Specifying a detail level is like using a predefined attribute list in the SELECT clause of an SQL query. Use the DetailLevel element to specify the required detail level that the client application needs pertaining to the data components that are applicable to the request.<br> <br> The DetailLevelCodeType defines the global list of available detail levels for all request types. Most request types support certain detail levels or none at all. If you pass a detail level that exists in the schema but that isn't valid for a particular request, eBay ignores it processes the request without it. For each request type, see the detail level tables in the Input/Output Reference to determine which detail levels are applicable and which elements are returned for each applicable detail level. (Some detail level tables are still in the eBay Web Services guide. They will be moved to the Input/Output Reference in a future release.)<br> <br>Note that DetailLevel is required input for GetMyMessages. <br> <br> With GetSellerList and other calls that retrieve large data sets, please avoid using ReturnAll when possible. For example, if you use GetSellerList, use a GranularityLevel or use the GetSellerEvents call instead. If you do use ReturnAll with GetSellerList, use a small EntriesPerPage value and a short EndTimeFrom/EndTimeTo range for better performance.
	 * @var EbayTradingTypeDetailLevelCodeType
	 */
	public $DetailLevel;
	/**
	 * The ErrorLanguage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use ErrorLanguage to return error strings for the call in a different language from the language commonly associated with the site that the requesting user is registered with. Specify the standard RFC 3066 language identification tag (e.g., en_US). <br> ID--- country<br> ----- -----<br> de_AT Austria<br> de_CH Switzerland<br> de_DE Germany <br> en_AU Australia <br> en_CA Canada <br> en_GB United Kingdom<br> en_SG Singapore<br> en_US United States <br> es_ES Spain <br> fr_BE Belgium (French)<br> fr_CA Canada (French) <br> fr_FR France <br> it_IT Italy <br> nl_BE Belgium (Dutch)<br> nl_NL Netherlands <br> zh_CN China<br> en_IN India<br> en_IE Ireland<br> zh_HK Hong Kong
	 * @var string
	 */
	public $ErrorLanguage;
	/**
	 * The MessageID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In most cases, all calls support a MessageID element in the request and a CorrelationID element in the response. If you pass a message ID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to particular requests. If you do not pass MessageID in the request, CorrelationID is not returned. <br> <br> <span class="tablenote"><b>Note:</b> GetCategories, GetAttributesCS, GetCategory2CS, GetAttributesXSL, GetProductFinder, GetProductFinderXSL, and GetProductSearchPage are designed to retrieve very large sets of metadata that change once a day or less often. To improve performance, these calls return cached responses when you request all available data (with no filters). When this occurs, the MessageID and CorrelationID fields aren't applicable. However, if you specify an input filter to reduce the amount of data returned, the calls retrieve the latest data (not cached). When this occurs, MessageID and CorrelationID are applicable. </span>
	 * @var string
	 */
	public $MessageID;
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The version number of the API code that you are programming against (e.g., 549). The version you specify for a call has these basic effects:<br> - It indicates the version of the code lists and other data that eBay should use to process your request.<br> - It indicates the schema version you are using.<br> You need to use a version that is greater than or equal to the lowest supported version.<br> <br> <b>For the SOAP API:</b> If you are using the SOAP API, this field is required. Specify the version of the WSDL your application is using.<br> <br> <b>For the XML API:</b> If you are using the XML API, this field has no effect. Instead, specify the version in the X-EBAY-API-COMPATIBILITY-LEVEL HTTP header. (If you specify Version in the body of an XML API request and it is different from the value in the HTTP header, eBay returns an informational warning that the value in the HTTP header was used instead.)
	 * @var string
	 */
	public $Version;
	/**
	 * The EndUserIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The public IP address of the machine from which the request is sent. Your application captures that IP address and includes it in a call request. eBay evaluates requests for safety (also see the BotBlock container in the request and response of this call).
	 * @var string
	 */
	public $EndUserIP;
	/**
	 * The ErrorHandling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Error tolerance level for the call. This is a preference that specifies how eBay should handle requests that contain invalid data or that could partially fail. This gives you some control over whether eBay returns warnings or blocking errors and how eBay processes the invalid data.<br> <br> For AddItem and related calls, this field is only applicable when the listing includes Item Specifics and Pre-filled Item Information (such as AttributeSetArray and ProductListingDetails).
	 * @var EbayTradingTypeErrorHandlingCodeType
	 */
	public $ErrorHandling;
	/**
	 * The InvocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifer for a particular call. If the same InvocationID is passed in after it has been passed in once on a call that succeeded for a particular application and user, then an error will be returned. The identifier can only contain digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 1FB02B2-9D27-3acb-ABA2-9D539C374228.
	 * @var EbayTradingTypeUUIDType
	 */
	public $InvocationID;
	/**
	 * The OutputSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : You can use the OutputSelector field to restrict the data returned by this call. When you make a call such as GetItem that retrieves data from eBay, the OutputSelector field is useful for restricting the data returned. This field makes the call response easier to use, especially when a large payload would be returned. If you use the OutputSelector field, the output data will include only the fields you specified in the request. For example, if you are using GetItem and you want the item data in the response to be restricted to the ViewItemURL (the URL where a user can view the listing) and BuyItNowPrice, then within the GetItem request, specify those output fields. To use this field, see the information at the following link.
	 * @var string
	 */
	public $OutputSelector;
	/**
	 * The WarningLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Controls whether or not to return warnings when the application passes unrecognized or deprecated elements in a request.<br> <br> An unrecognized element is one that is not defined in any supported version of the schema. Schema element names are case-sensitive, so using WarningLevel can also help you remove any potential hidden bugs within your application due to incorrect case or spelling in field names before you put your application into the Production environment.<br> <br> WarningLevel only validates elements; it doesn't validate XML attributes. It also doesn't control warnings related to user-entered strings or numbers, or warnings for logical errors.<br> <br> We recommend that you only use this during development and debugging. Do not use this in requests in your production code.
	 * @var EbayTradingTypeWarningLevelCodeType
	 */
	public $WarningLevel;
	/**
	 * The BotBlock
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for a token and for user input.
	 * @var EbayTradingTypeBotBlockRequestType
	 */
	public $BotBlock;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDetailLevelCodeType DetailLevel
	 * @param string ErrorLanguage
	 * @param string MessageID
	 * @param string Version
	 * @param string EndUserIP
	 * @param EbayTradingTypeErrorHandlingCodeType ErrorHandling
	 * @param EbayTradingTypeUUIDType InvocationID
	 * @param string OutputSelector
	 * @param EbayTradingTypeWarningLevelCodeType WarningLevel
	 * @param EbayTradingTypeBotBlockRequestType BotBlock
	 * @param DOMDocument any
	 * @return EbayTradingTypeAbstractRequestType
	 */
	public function __construct($_DetailLevel = null,$_ErrorLanguage = null,$_MessageID = null,$_Version = null,$_EndUserIP = null,$_ErrorHandling = null,$_InvocationID = null,$_OutputSelector = null,$_WarningLevel = null,$_BotBlock = null,$_any = null)
	{
		parent::__construct(array('DetailLevel'=>$_DetailLevel,'ErrorLanguage'=>$_ErrorLanguage,'MessageID'=>$_MessageID,'Version'=>$_Version,'EndUserIP'=>$_EndUserIP,'ErrorHandling'=>$_ErrorHandling,'InvocationID'=>$_InvocationID,'OutputSelector'=>$_OutputSelector,'WarningLevel'=>$_WarningLevel,'BotBlock'=>$_BotBlock,'any'=>$_any));
	}
	/**
	 * Set DetailLevel
	 * @param DetailLevelCodeType DetailLevel
	 * @return DetailLevelCodeType
	 */
	public function setDetailLevel($_DetailLevel)
	{
		return ($this->DetailLevel = EbayTradingTypeDetailLevelCodeType::valueIsValid($_DetailLevel)?$_DetailLevel:null);
	}
	/**
	 * Get DetailLevel
	 * @return EbayTradingTypeDetailLevelCodeType
	 */
	public function getDetailLevel()
	{
		return $this->DetailLevel;
	}
	/**
	 * Set ErrorLanguage
	 * @param string ErrorLanguage
	 * @return string
	 */
	public function setErrorLanguage($_ErrorLanguage)
	{
		return ($this->ErrorLanguage = $_ErrorLanguage);
	}
	/**
	 * Get ErrorLanguage
	 * @return string
	 */
	public function getErrorLanguage()
	{
		return $this->ErrorLanguage;
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
	 * Set EndUserIP
	 * @param string EndUserIP
	 * @return string
	 */
	public function setEndUserIP($_EndUserIP)
	{
		return ($this->EndUserIP = $_EndUserIP);
	}
	/**
	 * Get EndUserIP
	 * @return string
	 */
	public function getEndUserIP()
	{
		return $this->EndUserIP;
	}
	/**
	 * Set ErrorHandling
	 * @param ErrorHandlingCodeType ErrorHandling
	 * @return ErrorHandlingCodeType
	 */
	public function setErrorHandling($_ErrorHandling)
	{
		return ($this->ErrorHandling = EbayTradingTypeErrorHandlingCodeType::valueIsValid($_ErrorHandling)?$_ErrorHandling:null);
	}
	/**
	 * Get ErrorHandling
	 * @return EbayTradingTypeErrorHandlingCodeType
	 */
	public function getErrorHandling()
	{
		return $this->ErrorHandling;
	}
	/**
	 * Set InvocationID
	 * @param UUIDType InvocationID
	 * @return UUIDType
	 */
	public function setInvocationID($_InvocationID)
	{
		return ($this->InvocationID = EbayTradingTypeUUIDType::valueIsValid($_InvocationID)?$_InvocationID:null);
	}
	/**
	 * Get InvocationID
	 * @return EbayTradingTypeUUIDType
	 */
	public function getInvocationID()
	{
		return $this->InvocationID;
	}
	/**
	 * Set OutputSelector
	 * @param string OutputSelector
	 * @return string
	 */
	public function setOutputSelector($_OutputSelector)
	{
		return ($this->OutputSelector = $_OutputSelector);
	}
	/**
	 * Get OutputSelector
	 * @return string
	 */
	public function getOutputSelector()
	{
		return $this->OutputSelector;
	}
	/**
	 * Set WarningLevel
	 * @param WarningLevelCodeType WarningLevel
	 * @return WarningLevelCodeType
	 */
	public function setWarningLevel($_WarningLevel)
	{
		return ($this->WarningLevel = EbayTradingTypeWarningLevelCodeType::valueIsValid($_WarningLevel)?$_WarningLevel:null);
	}
	/**
	 * Get WarningLevel
	 * @return EbayTradingTypeWarningLevelCodeType
	 */
	public function getWarningLevel()
	{
		return $this->WarningLevel;
	}
	/**
	 * Set BotBlock
	 * @param BotBlockRequestType BotBlock
	 * @return BotBlockRequestType
	 */
	public function setBotBlock($_BotBlock)
	{
		return ($this->BotBlock = $_BotBlock);
	}
	/**
	 * Get BotBlock
	 * @return EbayTradingTypeBotBlockRequestType
	 */
	public function getBotBlock()
	{
		return $this->BotBlock;
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