<?php
/**
 * Class file for EbayTradingTypeConditionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeConditionType
 * Documentation : Fields in this type provide IDs and values for item conditions (in GetCategoryFeatures).
 * @date 04/07/2012
 */
class EbayTradingTypeConditionType extends EbayTradingWsdlClass
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The numeric ID of a condition (e.g., 1000). Use the ID in AddItem and related calls.
	 * @var int
	 */
	public $ID;
	/**
	 * The DisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The human-readable label for the condition (e.g., "New"). This value is typically localized for each site. The display name can vary by category. For example, condition ID 1000 could be called "New: with Tags" in one category and "Brand New" in another.
	 * @var string
	 */
	public $DisplayName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ID
	 * @param string DisplayName
	 * @param DOMDocument any
	 * @return EbayTradingTypeConditionType
	 */
	public function __construct($_ID = null,$_DisplayName = null,$_any = null)
	{
		parent::__construct(array('ID'=>$_ID,'DisplayName'=>$_DisplayName,'any'=>$_any));
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set DisplayName
	 * @param string DisplayName
	 * @return string
	 */
	public function setDisplayName($_DisplayName)
	{
		return ($this->DisplayName = $_DisplayName);
	}
	/**
	 * Get DisplayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
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