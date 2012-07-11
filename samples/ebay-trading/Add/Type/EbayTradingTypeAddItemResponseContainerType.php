<?php
/**
 * Class file for EbayTradingTypeAddItemResponseContainerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddItemResponseContainerType
 * Documentation : This container has all of the resulting information from an AddItems call. There will be one container per container specified in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeAddItemResponseContainerType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID for the new listing. Also applicable to Half.com. <br><br> <span class="tablenote"><b>Note:</b> Although we represent item IDs as strings in the schema, we recommend you store them as 64-bit signed integers. If you choose to store item IDs as strings, allocate at least 19 characters (assuming decimal digits are used) to hold them. eBay will increase the size of IDs over time. Your code should be prepared to handle IDs of up to 19 digits. For more information about item IDs, see <a href="http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=468">Common FAQs on eBay Item IDs and other eBay IDs</a> in the Knowledge Base.</span>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Starting date and time for the new listing. Also returned for Half.com (for Half.com, the start time is always the time the item was listed).
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time when the new listing ends. This is the starting time plus the listing duration. Also returned for Half.com, but for Half.com the actual end time is GTC (not the end time returned in the response).
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. Also returned for Half.com, but the values are not applicable to Half.com listings.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or it has expired with no replacement, CategoryID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * The CorrelationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : CorrelationID is used to correlate each item request container with its corresponding response container.
	 * @var string
	 */
	public $CorrelationID;
	/**
	 * The Errors
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
	 * @var EbayTradingTypeErrorType
	 */
	public $Errors;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Supplemental information from eBay, if applicable. May elaborate on errors or provide useful hints for the seller. This data can accompany the call's normal data result set or a result set that contains only errors. The string can return HTML, including TABLE, IMG, and HREF elements. In this case, an HTML- based application should be able to include the HTML as-is in the HTML page that displays the results. A non-HTML application would need to parse the HTML and convert the table elements and image references into UI elements particular to the programming language used. Because this data is returned as a string, the HTML markup elements are escaped with character entity references (e.g.,&lt;table&gt;&lt;tr&gt;...). See the appendices in the eBay Web Services guide for general information about string data types.
	 * @var string
	 */
	public $Message;
	/**
	 * The DiscountReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The nature of the discount, if a discount applied.
	 * @var EbayTradingTypeDiscountReasonCodeType
	 */
	public $DiscountReason;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeFeesType Fees
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param string CorrelationID
	 * @param EbayTradingTypeErrorType Errors
	 * @param string Message
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @param DOMDocument any
	 * @return EbayTradingTypeAddItemResponseContainerType
	 */
	public function __construct($_ItemID = null,$_StartTime = null,$_EndTime = null,$_Fees = null,$_CategoryID = null,$_Category2ID = null,$_CorrelationID = null,$_Errors = null,$_Message = null,$_DiscountReason = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Fees'=>$_Fees,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'CorrelationID'=>$_CorrelationID,'Errors'=>$_Errors,'Message'=>$_Message,'DiscountReason'=>$_DiscountReason,'any'=>$_any));
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
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set Fees
	 * @param FeesType Fees
	 * @return FeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeFeesType
	 */
	public function getFees()
	{
		return $this->Fees;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set Category2ID
	 * @param string Category2ID
	 * @return string
	 */
	public function setCategory2ID($_Category2ID)
	{
		return ($this->Category2ID = $_Category2ID);
	}
	/**
	 * Get Category2ID
	 * @return string
	 */
	public function getCategory2ID()
	{
		return $this->Category2ID;
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
	 * Set DiscountReason
	 * @param DiscountReasonCodeType DiscountReason
	 * @return DiscountReasonCodeType
	 */
	public function setDiscountReason($_DiscountReason)
	{
		return ($this->DiscountReason = EbayTradingTypeDiscountReasonCodeType::valueIsValid($_DiscountReason)?$_DiscountReason:null);
	}
	/**
	 * Get DiscountReason
	 * @return EbayTradingTypeDiscountReasonCodeType
	 */
	public function getDiscountReason()
	{
		return $this->DiscountReason;
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