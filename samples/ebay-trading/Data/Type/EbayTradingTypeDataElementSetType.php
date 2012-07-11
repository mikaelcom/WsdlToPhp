<?php
/**
 * Class file for EbayTradingTypeDataElementSetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDataElementSetType
 * Documentation : Matches the AttributeSetID associated with a response returned from the same call that returned the data element set. As calls like GetProductSearchResults can perform batch searches, this ID helps you determine which attribute set the data element set is associated with.
 * @date 04/07/2012
 */
class EbayTradingTypeDataElementSetType extends EbayTradingWsdlClass
{
	/**
	 * The DataElement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An HTML snippet that specifies hints for the user, help links, help graphics, and other supplemental information that varies per characteristic set. In GetProductSearchPage, one DataElement value contains a hint (including an empty HTML achor element), one DataElement value may contain a URL to insert into the HTML anchor as the href value, and one DataElement value may contain a URL that eBay uses as a help graphic. If no value is available in the meta-data, a dash ("--") is returned instead. Usage of this information is optional and may require developers to inspect the information to determine how it can be applied in an application. Because this is returned as a string, the HTML markup elements are escaped with character entity references (e.g.,&lt;a href=""&gt;&lt;Attributes&gt;...). See the appendices in the eBay Web Services guide for general information about string data types.
	 * @var string
	 */
	public $DataElement;
	/**
	 * The DataElementID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for a data element. This is primarily for internal use by eBay. Developers can choose to inspect this information and determine how it can be applied in their applications.
	 * @var int
	 */
	public $DataElementID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The attributeSetID
	 * @var int
	 */
	public $attributeSetID;
	/**
	 * Constructor
	 * @param string DataElement
	 * @param int DataElementID
	 * @param DOMDocument any
	 * @param int attributeSetID
	 * @return EbayTradingTypeDataElementSetType
	 */
	public function __construct($_DataElement = null,$_DataElementID = null,$_any = null,$_attributeSetID = null)
	{
		parent::__construct(array('DataElement'=>$_DataElement,'DataElementID'=>$_DataElementID,'any'=>$_any,'attributeSetID'=>$_attributeSetID));
	}
	/**
	 * Set DataElement
	 * @param string DataElement
	 * @return string
	 */
	public function setDataElement($_DataElement)
	{
		return ($this->DataElement = $_DataElement);
	}
	/**
	 * Get DataElement
	 * @return string
	 */
	public function getDataElement()
	{
		return $this->DataElement;
	}
	/**
	 * Set DataElementID
	 * @param int DataElementID
	 * @return int
	 */
	public function setDataElementID($_DataElementID)
	{
		return ($this->DataElementID = $_DataElementID);
	}
	/**
	 * Get DataElementID
	 * @return int
	 */
	public function getDataElementID()
	{
		return $this->DataElementID;
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
	 * Set attributeSetID
	 * @param int attributeSetID
	 * @return int
	 */
	public function setAttributeSetID($_attributeSetID)
	{
		return ($this->attributeSetID = $_attributeSetID);
	}
	/**
	 * Get attributeSetID
	 * @return int
	 */
	public function getAttributeSetID()
	{
		return $this->attributeSetID;
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