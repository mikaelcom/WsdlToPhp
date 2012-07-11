<?php
/**
 * Class file for EbayTradingTypeCategoryArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryArrayType
 * Documentation : Container for a list of categories.
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains details about one category. For GetCategories, this node is not returned when no detail level is specified.
	 * @var EbayTradingTypeCategoryType
	 */
	public $Category;
	/**
	 * Constructor
	 * @param EbayTradingTypeCategoryType Category
	 * @return EbayTradingTypeCategoryArrayType
	 */
	public function __construct($_Category = null)
	{
		parent::__construct(array('Category'=>$_Category));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>