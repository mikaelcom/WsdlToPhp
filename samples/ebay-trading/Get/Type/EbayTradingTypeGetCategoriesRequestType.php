<?php
/**
 * Class file for EbayTradingTypeGetCategoriesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoriesRequestType
 * Documentation : Retrieves the latest eBay category hierarchy for a given eBay site. Information returned for each category includes the category name and the unique ID for the category (unique within the eBay site for which categories are retrieved). A category ID is a required input when you list most items.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoriesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategorySiteID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the eBay site for which to retrieve the category hierarchy. Use the numeric site code (e.g., 77 for eBay Germany). Only necessary if you want to retrieve category data for a site other than the site from which you are submitting the request. <br> <br> NOTE: If you are using the GetCategories call with eBay Motors, you must set the Site ID in the Request Header to 0, and then set the CategorySiteID to 100. These are both required fields when using GetCategories with eBay Motors.
	 * @var string
	 */
	public $CategorySiteID;
	/**
	 * The CategoryParent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the ID of the highest-level category to return, along with its subcategories. If no parent category is specified, all categories are returned for the specified site. (Please do not pass a value of 0; zero (0) is an invalid value for CategoryParent.) To determine available category IDs, call GetCategories with no filters and use a DetailLevel value of ReturnAll. If you specify multiple parent categories, the hierarchy for each one is returned.
	 * @var string
	 */
	public $CategoryParent;
	/**
	 * The LevelLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum depth of the category hierarchy to retrieve, where the top-level categories (meta-categories) are at level 1. Retrieves all category nodes with a category level less than or equal to this value. If not specified, retrieves categories at all applicable levels. As with all calls, the actual data returned will vary depending on how you configure other fields in the request (including DetailLevel).
	 * @var int
	 */
	public $LevelLimit;
	/**
	 * The ViewAllNodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If false or omitted, retrieves only leaf categories. (You can only list in leaf categories.) If true, retrieves both leaf and internal (non-leaf) categories. As with all calls, the actual data returned will vary depending on how you configure other fields in the request.
	 * @var boolean
	 */
	public $ViewAllNodes;
	/**
	 * Constructor
	 * @param string CategorySiteID
	 * @param string CategoryParent
	 * @param int LevelLimit
	 * @param boolean ViewAllNodes
	 * @return EbayTradingTypeGetCategoriesRequestType
	 */
	public function __construct($_CategorySiteID = null,$_CategoryParent = null,$_LevelLimit = null,$_ViewAllNodes = null)
	{
		EbayTradingWsdlClass::__construct(array('CategorySiteID'=>$_CategorySiteID,'CategoryParent'=>$_CategoryParent,'LevelLimit'=>$_LevelLimit,'ViewAllNodes'=>$_ViewAllNodes));
	}
	/**
	 * Set CategorySiteID
	 * @param string CategorySiteID
	 * @return string
	 */
	public function setCategorySiteID($_CategorySiteID)
	{
		return ($this->CategorySiteID = $_CategorySiteID);
	}
	/**
	 * Get CategorySiteID
	 * @return string
	 */
	public function getCategorySiteID()
	{
		return $this->CategorySiteID;
	}
	/**
	 * Set CategoryParent
	 * @param string CategoryParent
	 * @return string
	 */
	public function setCategoryParent($_CategoryParent)
	{
		return ($this->CategoryParent = $_CategoryParent);
	}
	/**
	 * Get CategoryParent
	 * @return string
	 */
	public function getCategoryParent()
	{
		return $this->CategoryParent;
	}
	/**
	 * Set LevelLimit
	 * @param int LevelLimit
	 * @return int
	 */
	public function setLevelLimit($_LevelLimit)
	{
		return ($this->LevelLimit = $_LevelLimit);
	}
	/**
	 * Get LevelLimit
	 * @return int
	 */
	public function getLevelLimit()
	{
		return $this->LevelLimit;
	}
	/**
	 * Set ViewAllNodes
	 * @param boolean ViewAllNodes
	 * @return boolean
	 */
	public function setViewAllNodes($_ViewAllNodes)
	{
		return ($this->ViewAllNodes = $_ViewAllNodes);
	}
	/**
	 * Get ViewAllNodes
	 * @return boolean
	 */
	public function getViewAllNodes()
	{
		return $this->ViewAllNodes;
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