<?php
/**
 * Class file for EbayShoppingTypeFindPopularSearchesRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindPopularSearchesRequestType
 * Documentation : Retrieves the words most frequently used by eBay users when searching for listings. These keywords are generated weekly by eBay. Thus, calls retrieve static data. FindPopularSearches is not available for the following sites: FR, HK, MY, PH, PL, SG, SE.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindPopularSearchesRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specify CategoryID to restrict your query to a specific category. Up to 10 categories may be specified If you are using a URL, and you want to specify multiple values, use a comma. For example, if you want to specify Fiction Books and Children's Books, specify CategoryID=377,279. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another <b>findItemsAdvanced</b> call with the ID of a matching category. <br> <br> CategoryID can be used in combination with QueryKeywords and IncludeChildCategories. When IncludeChildCategories is true and used in conjunction with CategoryID, one and only one CategoryID is allowed. Otherwise, up to 10 CategoryIDs are allowed. To retrieve the most popular keywords for a root category, set one of the CategoryIDs to -1 or do not include CategoryID in the Request.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A query that specifies a string for searching titles of items on eBay. If you are using a URL, then to search for multiple words, use "%20". For example, use Harry%20Potter to search for items containing those words in any order. You can incorporate wildcards into a multi-word search, as in the following: ap*%20ip*. The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for listings containing these words. <br> <br> QueryKeywords can be used in combination with CategoryID and IncludeChildCategories.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The MaxKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of keywords to be retrieved per category for this call.
	 * @var int
	 */
	public $MaxKeywords;
	/**
	 * The MaxResultsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of PopularSearchResults per page in the returned list. If not specified, the default returns 20 results per page.
	 * @var int
	 */
	public $MaxResultsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of the page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The IncludeChildCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, only one CategoryID can be specified, and keywords are returned for that category and its subcategories. When IncludeChildCategories is true and used in conjunction with CategoryID, one and only one CategoryID is allowed. <br> <br> If false, keywords are returned only for the categories identified by CategoryID. The default is false.
	 * @var boolean
	 */
	public $IncludeChildCategories;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string QueryKeywords
	 * @param int MaxKeywords
	 * @param int MaxResultsPerPage
	 * @param int PageNumber
	 * @param boolean IncludeChildCategories
	 * @return EbayShoppingTypeFindPopularSearchesRequestType
	 */
	public function __construct($_CategoryID = null,$_QueryKeywords = null,$_MaxKeywords = null,$_MaxResultsPerPage = null,$_PageNumber = null,$_IncludeChildCategories = null)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'QueryKeywords'=>$_QueryKeywords,'MaxKeywords'=>$_MaxKeywords,'MaxResultsPerPage'=>$_MaxResultsPerPage,'PageNumber'=>$_PageNumber,'IncludeChildCategories'=>$_IncludeChildCategories));
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
	 * Set MaxKeywords
	 * @param int MaxKeywords
	 * @return int
	 */
	public function setMaxKeywords($_MaxKeywords)
	{
		return ($this->MaxKeywords = $_MaxKeywords);
	}
	/**
	 * Get MaxKeywords
	 * @return int
	 */
	public function getMaxKeywords()
	{
		return $this->MaxKeywords;
	}
	/**
	 * Set MaxResultsPerPage
	 * @param int MaxResultsPerPage
	 * @return int
	 */
	public function setMaxResultsPerPage($_MaxResultsPerPage)
	{
		return ($this->MaxResultsPerPage = $_MaxResultsPerPage);
	}
	/**
	 * Get MaxResultsPerPage
	 * @return int
	 */
	public function getMaxResultsPerPage()
	{
		return $this->MaxResultsPerPage;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set IncludeChildCategories
	 * @param boolean IncludeChildCategories
	 * @return boolean
	 */
	public function setIncludeChildCategories($_IncludeChildCategories)
	{
		return ($this->IncludeChildCategories = $_IncludeChildCategories);
	}
	/**
	 * Get IncludeChildCategories
	 * @return boolean
	 */
	public function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
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