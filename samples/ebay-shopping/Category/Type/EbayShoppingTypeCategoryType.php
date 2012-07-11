<?php
/**
 * Class file for EbayShoppingTypeCategoryType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCategoryType
 * Documentation : Contains details about a category.
 * @date 05/07/2012
 */
class EbayShoppingTypeCategoryType extends EbayShoppingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The numeric ID of a category on eBay. <br> <br> Use an ID of -1 to retrieve the root category and the top-level (level 1) meta categories. You can determine other CategoryIDs from the response from this call, or from a specific item (retrieved from another call like GetSingleItem), or from the eBay website.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The level where the category fits in the site's category hierarchy. For example, if this field has a value of 2, then the category is 2 levels below the root category. <br> <br> Note that the value of CategoryLevel will always be 1 level below the level of the requested category. To retrieve a category's children, pass its CategoryID back into the request. <br>
	 * @var int
	 */
	public $CategoryLevel;
	/**
	 * The CategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of the category as it would appear on the eBay Web site.
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category ID identifying a category that is an ancestor of the category indicated in CategoryID.
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The CategoryParentName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of the category indicated in CategoryParentID.
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total quantity of matching items in the category. In the FindItemsAdvanced response, matching categories at the same level (i.e., sibling categories) are sorted by ItemCount. That is, if the request specifies that fewer categories or subcategories should be returned, the ones with the most matching items are returned first.
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The CategoryNamePath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fully qualified category display name as it would appear on the eBay site (e.g., Home & Garden:Kitchen:Tools & Gadgets).
	 * @var string
	 */
	public $CategoryNamePath;
	/**
	 * The CategoryIDPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fully qualified category ID (e.g., 11700:20625:20635 for Home & Garden:Kitchen:Tools & Gadgets).
	 * @var string
	 */
	public $CategoryIDPath;
	/**
	 * The LeafCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the category indicated in CategoryID is a leaf category, in which items may be listed (if the category is not also expired or virtual).
	 * @var boolean
	 */
	public $LeafCategory;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param int CategoryLevel
	 * @param string CategoryName
	 * @param string CategoryParentID
	 * @param string CategoryParentName
	 * @param int ItemCount
	 * @param string CategoryNamePath
	 * @param string CategoryIDPath
	 * @param boolean LeafCategory
	 * @param DOMDocument any
	 * @return EbayShoppingTypeCategoryType
	 */
	public function __construct($_CategoryID = null,$_CategoryLevel = null,$_CategoryName = null,$_CategoryParentID = null,$_CategoryParentName = null,$_ItemCount = null,$_CategoryNamePath = null,$_CategoryIDPath = null,$_LeafCategory = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'CategoryLevel'=>$_CategoryLevel,'CategoryName'=>$_CategoryName,'CategoryParentID'=>$_CategoryParentID,'CategoryParentName'=>$_CategoryParentName,'ItemCount'=>$_ItemCount,'CategoryNamePath'=>$_CategoryNamePath,'CategoryIDPath'=>$_CategoryIDPath,'LeafCategory'=>$_LeafCategory,'any'=>$_any));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryLevel
	 * @param int CategoryLevel
	 * @return int
	 */
	public function setCategoryLevel($_CategoryLevel)
	{
		return ($this->CategoryLevel = $_CategoryLevel);
	}
	/**
	 * Get CategoryLevel
	 * @return int
	 */
	public function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * Set CategoryName
	 * @param string CategoryName
	 * @return string
	 */
	public function setCategoryName($_CategoryName)
	{
		return ($this->CategoryName = $_CategoryName);
	}
	/**
	 * Get CategoryName
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryParentID
	 * @param string CategoryParentID
	 * @return string
	 */
	public function setCategoryParentID($_CategoryParentID)
	{
		return ($this->CategoryParentID = $_CategoryParentID);
	}
	/**
	 * Get CategoryParentID
	 * @return string
	 */
	public function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * Set CategoryParentName
	 * @param string CategoryParentName
	 * @return string
	 */
	public function setCategoryParentName($_CategoryParentName)
	{
		return ($this->CategoryParentName = $_CategoryParentName);
	}
	/**
	 * Get CategoryParentName
	 * @return string
	 */
	public function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * Set ItemCount
	 * @param int ItemCount
	 * @return int
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return int
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set CategoryNamePath
	 * @param string CategoryNamePath
	 * @return string
	 */
	public function setCategoryNamePath($_CategoryNamePath)
	{
		return ($this->CategoryNamePath = $_CategoryNamePath);
	}
	/**
	 * Get CategoryNamePath
	 * @return string
	 */
	public function getCategoryNamePath()
	{
		return $this->CategoryNamePath;
	}
	/**
	 * Set CategoryIDPath
	 * @param string CategoryIDPath
	 * @return string
	 */
	public function setCategoryIDPath($_CategoryIDPath)
	{
		return ($this->CategoryIDPath = $_CategoryIDPath);
	}
	/**
	 * Get CategoryIDPath
	 * @return string
	 */
	public function getCategoryIDPath()
	{
		return $this->CategoryIDPath;
	}
	/**
	 * Set LeafCategory
	 * @param boolean LeafCategory
	 * @return boolean
	 */
	public function setLeafCategory($_LeafCategory)
	{
		return ($this->LeafCategory = $_LeafCategory);
	}
	/**
	 * Get LeafCategory
	 * @return boolean
	 */
	public function getLeafCategory()
	{
		return $this->LeafCategory;
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