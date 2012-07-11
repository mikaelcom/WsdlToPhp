<?php
/**
 * Class file for EbayShoppingTypeGetCategoryInfoResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetCategoryInfoResponseType
 * Documentation : Contains the category data for the eBay site specified as input. The category data is returned as a CategoryArrayType object, that contains zero, one, or multiple CategoryType objects. Each CategoryType object contains the detail data for one category. Other fields indicate how many categories are returned in a call, when the category hierarchy was last updated, and the version of the category hierarchy (all three of which can differ from one eBay site to the next).
 * @date 05/07/2012
 */
class EbayShoppingTypeGetCategoryInfoResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The CategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of the returned categories. The category array contains one CategoryType object for each returned category. Returns empty if no detail level is specified.
	 * @var EbayShoppingTypeCategoryArrayType
	 */
	public $CategoryArray;
	/**
	 * The CategoryCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of categories returned (i.e., the number of CategoryType objects in CategoryArray).
	 * @var int
	 */
	public $CategoryCount;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the last date and time that eBay modified the category hierarchy for the specified eBay site.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The CategoryVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the version of the category hierarchy on the specified eBay site.
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * Constructor
	 * @param EbayShoppingTypeCategoryArrayType CategoryArray
	 * @param int CategoryCount
	 * @param dateTime UpdateTime
	 * @param string CategoryVersion
	 * @return EbayShoppingTypeGetCategoryInfoResponseType
	 */
	public function __construct($_CategoryArray = null,$_CategoryCount = null,$_UpdateTime = null,$_CategoryVersion = null)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryArray'=>$_CategoryArray,'CategoryCount'=>$_CategoryCount,'UpdateTime'=>$_UpdateTime,'CategoryVersion'=>$_CategoryVersion));
	}
	/**
	 * Set CategoryArray
	 * @param CategoryArrayType CategoryArray
	 * @return CategoryArrayType
	 */
	public function setCategoryArray($_CategoryArray)
	{
		return ($this->CategoryArray = $_CategoryArray);
	}
	/**
	 * Get CategoryArray
	 * @return EbayShoppingTypeCategoryArrayType
	 */
	public function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * Set CategoryCount
	 * @param int CategoryCount
	 * @return int
	 */
	public function setCategoryCount($_CategoryCount)
	{
		return ($this->CategoryCount = $_CategoryCount);
	}
	/**
	 * Get CategoryCount
	 * @return int
	 */
	public function getCategoryCount()
	{
		return $this->CategoryCount;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set CategoryVersion
	 * @param string CategoryVersion
	 * @return string
	 */
	public function setCategoryVersion($_CategoryVersion)
	{
		return ($this->CategoryVersion = $_CategoryVersion);
	}
	/**
	 * Get CategoryVersion
	 * @return string
	 */
	public function getCategoryVersion()
	{
		return $this->CategoryVersion;
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