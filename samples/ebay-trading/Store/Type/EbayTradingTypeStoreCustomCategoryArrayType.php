<?php
/**
 * Class file for EbayTradingTypeStoreCustomCategoryArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreCustomCategoryArrayType
 * Documentation : Set of custom categories for the Store.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreCustomCategoryArrayType extends EbayTradingWsdlClass
{
	/**
	 * The CustomCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A custom category for your eBay Store.
	 * @var EbayTradingTypeStoreCustomCategoryType
	 */
	public $CustomCategory;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreCustomCategoryType CustomCategory
	 * @return EbayTradingTypeStoreCustomCategoryArrayType
	 */
	public function __construct($_CustomCategory = null)
	{
		parent::__construct(array('CustomCategory'=>$_CustomCategory));
	}
	/**
	 * Set CustomCategory
	 * @param StoreCustomCategoryType CustomCategory
	 * @return StoreCustomCategoryType
	 */
	public function setCustomCategory($_CustomCategory)
	{
		return ($this->CustomCategory = $_CustomCategory);
	}
	/**
	 * Get CustomCategory
	 * @return EbayTradingTypeStoreCustomCategoryType
	 */
	public function getCustomCategory()
	{
		return $this->CustomCategory;
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