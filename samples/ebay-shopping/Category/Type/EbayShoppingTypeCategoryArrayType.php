<?php
/**
 * Class file for EbayShoppingTypeCategoryArrayType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCategoryArrayType
 * Documentation : Container for a list of categories.
 * @date 05/07/2012
 */
class EbayShoppingTypeCategoryArrayType extends EbayShoppingWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains details about a category.
	 * @var EbayShoppingTypeCategoryType
	 */
	public $Category;
	/**
	 * Constructor
	 * @param EbayShoppingTypeCategoryType Category
	 * @return EbayShoppingTypeCategoryArrayType
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
	 * @return EbayShoppingTypeCategoryType
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