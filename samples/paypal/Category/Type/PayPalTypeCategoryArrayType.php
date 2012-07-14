<?php
/**
 * Class file for PayPalTypeCategoryArrayType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCategoryArrayType
 * @date 14/07/2012
 */
class PayPalTypeCategoryArrayType extends PayPalWsdlClass
{
	/**
	 * The Category
	 * @var PayPalTypeCategoryType
	 */
	public $Category;
	/**
	 * Constructor
	 * @param PayPalTypeCategoryType Category
	 * @return PayPalTypeCategoryArrayType
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
	 * @return PayPalTypeCategoryType
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