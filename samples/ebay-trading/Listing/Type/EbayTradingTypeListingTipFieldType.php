<?php
/**
 * Class file for EbayTradingTypeListingTipFieldType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingTipFieldType
 * Documentation : (out) Identifies the item field that the tip relates to.
 * @date 04/07/2012
 */
class EbayTradingTypeListingTipFieldType extends EbayTradingWsdlClass
{
	/**
	 * The ListingTipFieldID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier associated with the item field. Primarily for internal use. This value may change over time.
	 * @var string
	 */
	public $ListingTipFieldID;
	/**
	 * The FieldTip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Related text that appears near a field or at the top of the section within which the field appears in the selling flow.
	 * @var string
	 */
	public $FieldTip;
	/**
	 * The CurrentFieldText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A label used to preface the current value of a field. For example, "Current value" would be the CurrentValueText in "Current value: 25". If no label exists, this element is not returned.
	 * @var string
	 */
	public $CurrentFieldText;
	/**
	 * The CurrentFieldValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current value of the field (in the listing or in the candidate item) or meta-data about the value. For example, if the tip is recommending a longer item title, the CurrentFieldValue might specify the current length of the title. If no current value is available, this information is not returned.
	 * @var string
	 */
	public $CurrentFieldValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ListingTipFieldID
	 * @param string FieldTip
	 * @param string CurrentFieldText
	 * @param string CurrentFieldValue
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingTipFieldType
	 */
	public function __construct($_ListingTipFieldID = null,$_FieldTip = null,$_CurrentFieldText = null,$_CurrentFieldValue = null,$_any = null)
	{
		parent::__construct(array('ListingTipFieldID'=>$_ListingTipFieldID,'FieldTip'=>$_FieldTip,'CurrentFieldText'=>$_CurrentFieldText,'CurrentFieldValue'=>$_CurrentFieldValue,'any'=>$_any));
	}
	/**
	 * Set ListingTipFieldID
	 * @param string ListingTipFieldID
	 * @return string
	 */
	public function setListingTipFieldID($_ListingTipFieldID)
	{
		return ($this->ListingTipFieldID = $_ListingTipFieldID);
	}
	/**
	 * Get ListingTipFieldID
	 * @return string
	 */
	public function getListingTipFieldID()
	{
		return $this->ListingTipFieldID;
	}
	/**
	 * Set FieldTip
	 * @param string FieldTip
	 * @return string
	 */
	public function setFieldTip($_FieldTip)
	{
		return ($this->FieldTip = $_FieldTip);
	}
	/**
	 * Get FieldTip
	 * @return string
	 */
	public function getFieldTip()
	{
		return $this->FieldTip;
	}
	/**
	 * Set CurrentFieldText
	 * @param string CurrentFieldText
	 * @return string
	 */
	public function setCurrentFieldText($_CurrentFieldText)
	{
		return ($this->CurrentFieldText = $_CurrentFieldText);
	}
	/**
	 * Get CurrentFieldText
	 * @return string
	 */
	public function getCurrentFieldText()
	{
		return $this->CurrentFieldText;
	}
	/**
	 * Set CurrentFieldValue
	 * @param string CurrentFieldValue
	 * @return string
	 */
	public function setCurrentFieldValue($_CurrentFieldValue)
	{
		return ($this->CurrentFieldValue = $_CurrentFieldValue);
	}
	/**
	 * Get CurrentFieldValue
	 * @return string
	 */
	public function getCurrentFieldValue()
	{
		return $this->CurrentFieldValue;
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