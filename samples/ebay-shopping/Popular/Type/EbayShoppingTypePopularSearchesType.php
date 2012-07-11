<?php
/**
 * Class file for EbayShoppingTypePopularSearchesType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypePopularSearchesType
 * Documentation : Contains search word information, as it is related to a category.
 * @date 05/07/2012
 */
class EbayShoppingTypePopularSearchesType extends EbayShoppingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric ID of a category on eBay.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryParentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category ID identifying a category that is the parent category of the category indicated in the request.
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which QueryKeywords corresponds to this PopularSearchResult. Query Keywords are returned in the output to clarify which result set corresponds to which QueryKeyword inputs (as there can be more than one set of keywords in the input).
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The AlternativeSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Alternative search keywords for the query keywords, separated by semicolons. You can use this to find other search terms buyers and sellers may be interested in. For example, if a seller lists an item with "wedding" in the title, they may also be interested in adding "bridal" to the title because bridal is an alternative search keyword which buyers have used.
	 * @var string
	 */
	public $AlternativeSearches;
	/**
	 * The RelatedSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Keywords related to the query keywords, separated by semicolons. You can use this to find more detailed related keywords. For example, the query keyword "wedding" is related to searches for "wedding decorations;wedding favors;wedding supplies;wedding dresses..." which helps the seller and buyer specify their query with more detail and precision.
	 * @var string
	 */
	public $RelatedSearches;
	/**
	 * The CategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category Name identifying the name of current CategoryID.
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of category which is a parent category to the CategoryID specified in the request.
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string CategoryParentID
	 * @param string QueryKeywords
	 * @param string AlternativeSearches
	 * @param string RelatedSearches
	 * @param string CategoryName
	 * @param string CategoryParentName
	 * @param DOMDocument any
	 * @return EbayShoppingTypePopularSearchesType
	 */
	public function __construct($_CategoryID = null,$_CategoryParentID = null,$_QueryKeywords = null,$_AlternativeSearches = null,$_RelatedSearches = null,$_CategoryName = null,$_CategoryParentName = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'CategoryParentID'=>$_CategoryParentID,'QueryKeywords'=>$_QueryKeywords,'AlternativeSearches'=>$_AlternativeSearches,'RelatedSearches'=>$_RelatedSearches,'CategoryName'=>$_CategoryName,'CategoryParentName'=>$_CategoryParentName,'any'=>$_any));
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
	 * Set QueryKeywords
	 * @param string QueryKeywords
	 * @return string
	 */
	public function setQueryKeywords($_QueryKeywords)
	{
		return ($this->QueryKeywords = $_QueryKeywords);
	}
	/**
	 * Get QueryKeywords
	 * @return string
	 */
	public function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * Set AlternativeSearches
	 * @param string AlternativeSearches
	 * @return string
	 */
	public function setAlternativeSearches($_AlternativeSearches)
	{
		return ($this->AlternativeSearches = $_AlternativeSearches);
	}
	/**
	 * Get AlternativeSearches
	 * @return string
	 */
	public function getAlternativeSearches()
	{
		return $this->AlternativeSearches;
	}
	/**
	 * Set RelatedSearches
	 * @param string RelatedSearches
	 * @return string
	 */
	public function setRelatedSearches($_RelatedSearches)
	{
		return ($this->RelatedSearches = $_RelatedSearches);
	}
	/**
	 * Get RelatedSearches
	 * @return string
	 */
	public function getRelatedSearches()
	{
		return $this->RelatedSearches;
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