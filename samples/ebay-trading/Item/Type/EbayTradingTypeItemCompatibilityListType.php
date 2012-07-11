<?php
/**
 * Class file for EbayTradingTypeItemCompatibilityListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemCompatibilityListType
 * Documentation : A list of compatible applications specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle, the name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would desribe the specific vehicle, such as a 2006 Honda Accord.
 * @date 04/07/2012
 */
class EbayTradingTypeItemCompatibilityListType extends EbayTradingWsdlClass
{
	/**
	 * The Compatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details for an individual compatible application, consisting of the name- value pair and related compatibility notes. When revising or relisting, the <b class="con">Delete</b> field can be used to delete individual compatibility nodes.
	 * @var EbayTradingTypeItemCompatibilityType
	 */
	public $Compatibility;
	/**
	 * The ReplaceAll
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item compatibility nodes are removed from the listing. If new item compatibilities are specified in the request, they replace the removed compatibilities. You cannot delete or replace an item compatibility list if the listing has bids or if it ends within 12 hours.
	 * @var boolean
	 */
	public $ReplaceAll;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemCompatibilityType Compatibility
	 * @param boolean ReplaceAll
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemCompatibilityListType
	 */
	public function __construct($_Compatibility = null,$_ReplaceAll = null,$_any = null)
	{
		parent::__construct(array('Compatibility'=>$_Compatibility,'ReplaceAll'=>$_ReplaceAll,'any'=>$_any));
	}
	/**
	 * Set Compatibility
	 * @param ItemCompatibilityType Compatibility
	 * @return ItemCompatibilityType
	 */
	public function setCompatibility($_Compatibility)
	{
		return ($this->Compatibility = $_Compatibility);
	}
	/**
	 * Get Compatibility
	 * @return EbayTradingTypeItemCompatibilityType
	 */
	public function getCompatibility()
	{
		return $this->Compatibility;
	}
	/**
	 * Set ReplaceAll
	 * @param boolean ReplaceAll
	 * @return boolean
	 */
	public function setReplaceAll($_ReplaceAll)
	{
		return ($this->ReplaceAll = $_ReplaceAll);
	}
	/**
	 * Get ReplaceAll
	 * @return boolean
	 */
	public function getReplaceAll()
	{
		return $this->ReplaceAll;
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