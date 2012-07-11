<?php
/**
 * Class file for AmazonAlexaTypeLetterBarsType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeLetterBarsType
 * @date 10/07/2012
 */
class AmazonAlexaTypeLetterBarsType extends AmazonAlexaWsdlClass
{
	/**
	 * The Category
	 * @var AmazonAlexaTypeCategoryType
	 */
	public $Category;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoryType Category
	 * @return AmazonAlexaTypeLetterBarsType
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
	 * @return AmazonAlexaTypeCategoryType
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