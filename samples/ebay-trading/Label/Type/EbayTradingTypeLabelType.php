<?php
/**
 * Class file for EbayTradingTypeLabelType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLabelType
 * Documentation : If true, the label name is visible on the eBay site. If false, the label is not visible. Usage of this information is optional. You are not required to display labels in the same manner as eBay.
 * @date 04/07/2012
 */
class EbayTradingTypeLabelType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The label to display when presenting the attribute to a user (e.g., "Title" or "Manufacturer"). <br> <br> The label is defined for the product, and is therefore not necessarily the same as the label that is defined in the characteristic set returned by another call like GetAttributesCS.<br> <br> <b>For GetProductSearchPage</b>: If the attribute's label is "Keyword", it means you can enter the attribute's ID and a string value in the SearchAttributes node of GetProductSearchResults, and then eBay will search for the string against one or more attributes in the catalog. For example, for strollers, GetProductSearchPage only returns a Keyword attribute instead of separate Brand, Product Type, and Model attributes (for the US site). So, you can use the single Keyword attribute to search against all of those attributes.<br> <br>
	 * @var string
	 */
	public $Name;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The visible
	 * @var boolean
	 */
	public $visible;
	/**
	 * Constructor
	 * @param string Name
	 * @param DOMDocument any
	 * @param boolean visible
	 * @return EbayTradingTypeLabelType
	 */
	public function __construct($_Name = null,$_any = null,$_visible = null)
	{
		parent::__construct(array('Name'=>$_Name,'any'=>$_any,'visible'=>$_visible));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set visible
	 * @param boolean visible
	 * @return boolean
	 */
	public function setVisible($_visible)
	{
		return ($this->visible = $_visible);
	}
	/**
	 * Get visible
	 * @return boolean
	 */
	public function getVisible()
	{
		return $this->visible;
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