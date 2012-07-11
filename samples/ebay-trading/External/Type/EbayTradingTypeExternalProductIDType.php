<?php
/**
 * Class file for EbayTradingTypeExternalProductIDType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExternalProductIDType
 * Documentation : Contains an ISBN value, EAN value, UPC value, ticket keywords, or eBay catalog product ID, plus other meta-data. For event tickets, this type can contain a set of keywords that uniquely identify the product. Only applicable to certain categories that support Pre-filled Item Information.
 * @date 04/07/2012
 */
class EbayTradingTypeExternalProductIDType extends EbayTradingWsdlClass
{
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An industry-standard value that uniquely identifies the product. The valid values are dictated by the Type property. Required if Type is specified. Max length 13 for ISBN (as of February 2007), 13 for EAN, 12 for UPC, and 4000 for ProductID. No max length for ticket keywords (but passing too much data can result in "no match found" errors).<br> <br> <b>For AddItem and related calls:</b> If the primary and secondary categories are both catalog-enabled, the value must apply to the primary category. Event tickets listings support a set of keywords that uniquely identify the listing. The ticket keywords specify the event name (the title shown on the ticket), venue name, and event date and time. See the eBay Web Services guide for more information and validation rules. For convenience, you can pass an eBay product ID as input (not limited to media categories).<br> <br> Required for Half.com listing use cases, and this can only be an ISBN, UPC, or EAN value.<br> <br> <b>For GetProducts input only:</b> Only ISBN, EAN, and UPC values are currently supported as input.<br> <br> <b>For GetProducts and GetSellerPayments output only:</b> Also see AlternateValue, which is returned if the catalog defines multiple ISBN values (e.g., one for ISBN-13 and one for ISBN-10). Please note that some catalogs return ISBN values that are not 10 or 13 characters, and some values contain non-alphanumeric symbols (e.g., $).
	 * @var string
	 */
	public $Value;
	/**
	 * The ReturnSearchResultOnDuplicates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable for listing use cases only (not buy-side searching). Indicates what eBay should do if more than one product matches the value passed in Value. Only takes effect when more than one match is found. If true, the response should include an error and all matching product IDs. If false, the response should include an error but should not return the matching product IDs. This field is also applicable when listing Half.com items.
	 * @var boolean
	 */
	public $ReturnSearchResultOnDuplicates;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The kind of identifier being used. The choices are listed For requests, required if Value is specified. For Half.com listing use cases, only ISBN, UPC, and EAN are supported.<br> <br> GetProducts supports ISBN, UPC, and EAN.
	 * @var EbayTradingTypeExternalProductCodeType
	 */
	public $Type;
	/**
	 * The AlternateValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An industry-standard value that provides an alternate identification for the product, if any. Currently, this only returns an alternate ISBN value. If the catalog defines both an ISBN-13 and ISBN-10, then the ISBN-13 is returned in Value and the ISBN-10 is returned in AlternateValue. (That is, the ISBN-13 is considered to be the preferred identifier.) If the catalog only defines one ISBN, it is returned in Value (and AlternateValue is not returned). Please note that some catalogs return ISBN values that are not 10 or 13 characters, and some values contain non-alphanumeric symbols (e.g., $).
	 * @var string
	 */
	public $AlternateValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Value
	 * @param boolean ReturnSearchResultOnDuplicates
	 * @param EbayTradingTypeExternalProductCodeType Type
	 * @param string AlternateValue
	 * @param DOMDocument any
	 * @return EbayTradingTypeExternalProductIDType
	 */
	public function __construct($_Value = null,$_ReturnSearchResultOnDuplicates = null,$_Type = null,$_AlternateValue = null,$_any = null)
	{
		parent::__construct(array('Value'=>$_Value,'ReturnSearchResultOnDuplicates'=>$_ReturnSearchResultOnDuplicates,'Type'=>$_Type,'AlternateValue'=>$_AlternateValue,'any'=>$_any));
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set ReturnSearchResultOnDuplicates
	 * @param boolean ReturnSearchResultOnDuplicates
	 * @return boolean
	 */
	public function setReturnSearchResultOnDuplicates($_ReturnSearchResultOnDuplicates)
	{
		return ($this->ReturnSearchResultOnDuplicates = $_ReturnSearchResultOnDuplicates);
	}
	/**
	 * Get ReturnSearchResultOnDuplicates
	 * @return boolean
	 */
	public function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}
	/**
	 * Set Type
	 * @param ExternalProductCodeType Type
	 * @return ExternalProductCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeExternalProductCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeExternalProductCodeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set AlternateValue
	 * @param string AlternateValue
	 * @return string
	 */
	public function setAlternateValue($_AlternateValue)
	{
		return ($this->AlternateValue = $_AlternateValue);
	}
	/**
	 * Get AlternateValue
	 * @return string
	 */
	public function getAlternateValue()
	{
		return $this->AlternateValue;
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