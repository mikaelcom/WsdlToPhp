<?php
/**
 * Class file for EbayTradingTypeSuggestedCategoryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSuggestedCategoryType
 * Documentation : Defines a suggested category, returned in response to a search for categories that contain listings with certain keywords in their titles and descriptions.
 * @date 04/07/2012
 */
class EbayTradingTypeSuggestedCategoryType extends EbayTradingWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes a category that contains items that match the query.
	 * @var EbayTradingTypeCategoryType
	 */
	public $Category;
	/**
	 * The PercentItemFound
	 * Meta informations :
	 * 	- documentation : Percentage of the matching items that were found in this category, relative to other categories in which matching items were also found. Indicates the distribution of matching items across the suggested categories.
	 * @var int
	 */
	public $PercentItemFound;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCategoryType Category
	 * @param int PercentItemFound
	 * @param DOMDocument any
	 * @return EbayTradingTypeSuggestedCategoryType
	 */
	public function __construct($_Category = null,$_PercentItemFound = null,$_any = null)
	{
		parent::__construct(array('Category'=>$_Category,'PercentItemFound'=>$_PercentItemFound,'any'=>$_any));
	}
	/**
	 * Set Category
	 * @param CategoryType Category
	 * @return CategoryType
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return EbayTradingTypeCategoryType
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set PercentItemFound
	 * @param int PercentItemFound
	 * @return int
	 */
	public function setPercentItemFound($_PercentItemFound)
	{
		return ($this->PercentItemFound = $_PercentItemFound);
	}
	/**
	 * Get PercentItemFound
	 * @return int
	 */
	public function getPercentItemFound()
	{
		return $this->PercentItemFound;
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