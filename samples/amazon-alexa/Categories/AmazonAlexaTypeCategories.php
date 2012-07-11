<?php
/**
 * Class file for AmazonAlexaTypeCategories
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategories
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategories extends AmazonAlexaWsdlClass
{
	/**
	 * The CategoryData
	 * @var AmazonAlexaTypeCategoryData
	 */
	public $CategoryData;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoryData CategoryData
	 * @return AmazonAlexaTypeCategories
	 */
	public function __construct($_CategoryData = null)
	{
		parent::__construct(array('CategoryData'=>$_CategoryData));
	}
	/**
	 * Set CategoryData
	 * @param CategoryData CategoryData
	 * @return CategoryData
	 */
	public function setCategoryData($_CategoryData)
	{
		return ($this->CategoryData = $_CategoryData);
	}
	/**
	 * Get CategoryData
	 * @return AmazonAlexaTypeCategoryData
	 */
	public function getCategoryData()
	{
		return $this->CategoryData;
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