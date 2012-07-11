<?php
/**
 * Class file for EbayFindTypeCategory
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeCategory
 * Documentation : Contains details about a category.
 * @date 04/07/2012
 */
class EbayFindTypeCategory extends EbayFindWsdlClass
{
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique ID of a category on the specified eBay site.
	 * @var string
	 */
	public $categoryId;
	/**
	 * The categoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of a category as it appears on the eBay Web site.
	 * @var string
	 */
	public $categoryName;
	/**
	 * Constructor
	 * @param string categoryId
	 * @param string categoryName
	 * @return EbayFindTypeCategory
	 */
	public function __construct($_categoryId = null,$_categoryName = null)
	{
		parent::__construct(array('categoryId'=>$_categoryId,'categoryName'=>$_categoryName));
	}
	/**
	 * Set categoryId
	 * @param string categoryId
	 * @return string
	 */
	public function setCategoryId($_categoryId)
	{
		return ($this->categoryId = $_categoryId);
	}
	/**
	 * Get categoryId
	 * @return string
	 */
	public function getCategoryId()
	{
		return $this->categoryId;
	}
	/**
	 * Set categoryName
	 * @param string categoryName
	 * @return string
	 */
	public function setCategoryName($_categoryName)
	{
		return ($this->categoryName = $_categoryName);
	}
	/**
	 * Get categoryName
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->categoryName;
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