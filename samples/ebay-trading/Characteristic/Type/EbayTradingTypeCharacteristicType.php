<?php
/**
 * Class file for EbayTradingTypeCharacteristicType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharacteristicType
 * Documentation : A salient aspect or feature of an item. Used to describe an item in a standard way so that buyers can find it more easily. An individual, standardized characteristic that is common to all items within the specified characteristics set. Applicable when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs) functionality. See the eBay Web Services guide for more information.
 * @date 04/07/2012
 */
class EbayTradingTypeCharacteristicType extends EbayTradingWsdlClass
{
	/**
	 * The AttributeID
	 * Meta informations :
	 * 	- documentation : Constant value that identifies the characteristic in a language-independent way. Unique within the characteristic set.
	 * @var int
	 */
	public $AttributeID;
	/**
	 * The DateFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable when working with Pre-filled Item Information (Catalogs) functionality. Returned if the characteristic is a Date data type. Specifies the pattern to use when presenting the date to a user. Possible values: Day/Month/Year, Month/Year, Year Only. For example, the Year Only format would indicate that the date should be a value like 1999. Output only.
	 * @var string
	 */
	public $DateFormat;
	/**
	 * The DisplaySequence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The suggested order in which the characteristic should be presented to the user in a list. Indicates the relative position of the sort key in the list of characteristics. The characteristic with the lowest display sequence is considered the default sort key in calls to GetProductSearchResults. Aside from that, usage of this display sequence information is optional. For example, in an application with a graphical user interface, a characteristic with a display sequence of 2 could be presented before one with a display sequence of 3 in a drop-down list. If multiple sort characteristics are returned for a characteristic set, compare their display sequence values to determine the lowest available value (usually 0) and the overall sequence.
	 * @var string
	 */
	public $DisplaySequence;
	/**
	 * The DisplayUOM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable when working with Pre-filled Item Information (Catalogs) functionality. The unit of measure (e.g., Inch) to use when the characteristic is numeric indicates a measurement. Not returned if not applicable. Output only.
	 * @var string
	 */
	public $DisplayUOM;
	/**
	 * The Label
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable when working with Pre-filled Item Information (Catalogs) functionality. The label to display when presenting the attribute to a user. Not necessarily the same as the attribute's label as defined in the characteristic set (i.e., the label could be overridden by the catalog).
	 * @var EbayTradingTypeLabelType
	 */
	public $Label;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable when working with Pre-filled Item Information (Catalogs) functionality. Indicates the order in which eBay's search engine will sort the results if you pass this characteristic as a sort attribute in GetProductSearchResults. You cannot change the sort order of a characteristic when you perform a search. (Of course, you can change the sort order when you present results in your own application.) In GetProductSearchPage, if SortOrder is not returned at all, it means the results will be returned in the order in which they are stored on eBay (which can be useful for international sites that use ideographic characters). Output only.
	 * @var EbayTradingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The ValueList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : List of one or more valid values for the characteristic.
	 * @var EbayTradingTypeValType
	 */
	public $ValueList;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int AttributeID
	 * @param string DateFormat
	 * @param string DisplaySequence
	 * @param string DisplayUOM
	 * @param EbayTradingTypeLabelType Label
	 * @param EbayTradingTypeSortOrderCodeType SortOrder
	 * @param EbayTradingTypeValType ValueList
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharacteristicType
	 */
	public function __construct($_AttributeID = null,$_DateFormat = null,$_DisplaySequence = null,$_DisplayUOM = null,$_Label = null,$_SortOrder = null,$_ValueList = null,$_any = null)
	{
		parent::__construct(array('AttributeID'=>$_AttributeID,'DateFormat'=>$_DateFormat,'DisplaySequence'=>$_DisplaySequence,'DisplayUOM'=>$_DisplayUOM,'Label'=>$_Label,'SortOrder'=>$_SortOrder,'ValueList'=>$_ValueList,'any'=>$_any));
	}
	/**
	 * Set AttributeID
	 * @param int AttributeID
	 * @return int
	 */
	public function setAttributeID($_AttributeID)
	{
		return ($this->AttributeID = $_AttributeID);
	}
	/**
	 * Get AttributeID
	 * @return int
	 */
	public function getAttributeID()
	{
		return $this->AttributeID;
	}
	/**
	 * Set DateFormat
	 * @param string DateFormat
	 * @return string
	 */
	public function setDateFormat($_DateFormat)
	{
		return ($this->DateFormat = $_DateFormat);
	}
	/**
	 * Get DateFormat
	 * @return string
	 */
	public function getDateFormat()
	{
		return $this->DateFormat;
	}
	/**
	 * Set DisplaySequence
	 * @param string DisplaySequence
	 * @return string
	 */
	public function setDisplaySequence($_DisplaySequence)
	{
		return ($this->DisplaySequence = $_DisplaySequence);
	}
	/**
	 * Get DisplaySequence
	 * @return string
	 */
	public function getDisplaySequence()
	{
		return $this->DisplaySequence;
	}
	/**
	 * Set DisplayUOM
	 * @param string DisplayUOM
	 * @return string
	 */
	public function setDisplayUOM($_DisplayUOM)
	{
		return ($this->DisplayUOM = $_DisplayUOM);
	}
	/**
	 * Get DisplayUOM
	 * @return string
	 */
	public function getDisplayUOM()
	{
		return $this->DisplayUOM;
	}
	/**
	 * Set Label
	 * @param LabelType Label
	 * @return LabelType
	 */
	public function setLabel($_Label)
	{
		return ($this->Label = $_Label);
	}
	/**
	 * Get Label
	 * @return EbayTradingTypeLabelType
	 */
	public function getLabel()
	{
		return $this->Label;
	}
	/**
	 * Set SortOrder
	 * @param SortOrderCodeType SortOrder
	 * @return SortOrderCodeType
	 */
	public function setSortOrder($_SortOrder)
	{
		return ($this->SortOrder = EbayTradingTypeSortOrderCodeType::valueIsValid($_SortOrder)?$_SortOrder:null);
	}
	/**
	 * Get SortOrder
	 * @return EbayTradingTypeSortOrderCodeType
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * Set ValueList
	 * @param ValType ValueList
	 * @return ValType
	 */
	public function setValueList($_ValueList)
	{
		return ($this->ValueList = $_ValueList);
	}
	/**
	 * Get ValueList
	 * @return EbayTradingTypeValType
	 */
	public function getValueList()
	{
		return $this->ValueList;
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