<?php
/**
 * Class file for EbayShoppingTypeFindPopularItemsRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindPopularItemsRequestType
 * Documentation : Find popular items
 * @date 05/07/2012
 */
class EbayShoppingTypeFindPopularItemsRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specify CategoryID to restrict your query to a specific category. Up to 10 categories may be specified. If you are using a URL, and you want to specify more than one CategoryID, separate the values with a comma. For example, to specify Fiction Books and Children's Books, specify CategoryID=377,279. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another <b>findItemsAdvanced</b> call with the ID of a matching category. <br> <br> CategoryID can be used in combination with QueryKeywords and CategoryIDExclude. To retrieve the most popular items across all categorys, do not submit a CategoryID.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A query that specifies a string for searching titles of items on eBay. If you are using a URL, then to search for multiple words, use "%20". For example, use Harry%20Potter to search for items containing those words in any order. You can incorporate wildcards into a multi-word search, as in the following: ap*%20ip*. The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for listings containing these words. QueryKeywords can be used in combination with CategoryID and CategoryIDExclude.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The CategoryIDExclude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specify this value if you want search results to be filtered so that the popular items returned do not include items that belong to a specific category. <br> <br> CategoryIDExclude is an unbounded field. If you are using a URL, you can separate multiple values with a comma. For example, if you want to specify Records and SuperAudio CDs, specify CategoryIDExclude=306,46354. <br> <br> If you use CategoryIDExclude, it must be used in with QueryKeywords or CategoryID. The CategoryIDExclude input field need not be used if you specified the CategoryID input field.
	 * @var string
	 */
	public $CategoryIDExclude;
	/**
	 * The MaxEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of entries to return in a single call.
	 * @var int
	 */
	public $MaxEntries;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string QueryKeywords
	 * @param string CategoryIDExclude
	 * @param int MaxEntries
	 * @return EbayShoppingTypeFindPopularItemsRequestType
	 */
	public function __construct($_CategoryID = null,$_QueryKeywords = null,$_CategoryIDExclude = null,$_MaxEntries = null)
	{
		EbayShoppingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'QueryKeywords'=>$_QueryKeywords,'CategoryIDExclude'=>$_CategoryIDExclude,'MaxEntries'=>$_MaxEntries));
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
	 * Set CategoryIDExclude
	 * @param string CategoryIDExclude
	 * @return string
	 */
	public function setCategoryIDExclude($_CategoryIDExclude)
	{
		return ($this->CategoryIDExclude = $_CategoryIDExclude);
	}
	/**
	 * Get CategoryIDExclude
	 * @return string
	 */
	public function getCategoryIDExclude()
	{
		return $this->CategoryIDExclude;
	}
	/**
	 * Set MaxEntries
	 * @param int MaxEntries
	 * @return int
	 */
	public function setMaxEntries($_MaxEntries)
	{
		return ($this->MaxEntries = $_MaxEntries);
	}
	/**
	 * Get MaxEntries
	 * @return int
	 */
	public function getMaxEntries()
	{
		return $this->MaxEntries;
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