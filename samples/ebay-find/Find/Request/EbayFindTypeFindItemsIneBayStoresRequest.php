<?php
/**
 * Class file for EbayFindTypeFindItemsIneBayStoresRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsIneBayStoresRequest
 * Documentation : Use findItemsIneBayStores to find items listed in eBay stores. Specify storeName in the request to retrieve all listings within a single store. You can combine storeName with keywords to find specific items, or use keywords without storeName to search for items in all eBay stores. <br><br> Search results can be filtered by item details or aspects and sorted by a variety of criteria.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsIneBayStoresRequest extends EbayFindTypeBaseFindingServiceRequest
{
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it doesn't matter whether you use uppercase or lowercase letters. <br><br> You can incorporate wildcards in a multi-word search. For example, "ap*%20ip*" returns results for "apple ipod" among other matches. The words "and" and "or" are treated like any other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those specific words. <br><br> You must specify keywords when you are searching across all eBay stores. That is, <b class="con">keywords</b> is required if <b class="con">storeName</b> is not specified in the request.
	 * @var string
	 */
	public $keywords;
	/**
	 * The storeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The name of the eBay store to search. Returns all items in the store, or can be used with keywords to search for specific items in an eBay store. If you do not specify keywords, you must specify storeName. <br><br> <span class="tablenote"><strong>Note:</strong> Store names are case sensitive. Also, if the store name contains an ampersand (&), you must use the & character entity (& amp;) in its place. </span> If you do not specify <b class="con">storeName</b> in the request, the search is across all eBay stores. When searching across all stores, you must specify keywords. <br><br> The results can be filtered by item listing details or aspects.
	 * @var string
	 */
	public $storeName;
	/**
	 * The itemFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reduce the number of items returned by a find request using item filters. Use <b class="con">itemFilter</b> to specify name/value pairs. You can include multiple item filters in a single request.
	 * @var EbayFindTypeItemFilter
	 */
	public $itemFilter;
	/**
	 * The outputSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines what data to return, in addition to the default set of data, in a response. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use outputSelector to include more information in the response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can affect the call's response time (performance), including in the case with feedback data.
	 * @var EbayFindTypeOutputSelectorType
	 */
	public $outputSelector;
	/**
	 * The aspectFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for aspectFilter fields from an aspectHistogramContainer returned in the response of a previous query. <br><br> By issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br/> For example, the aspectHistogramContainer in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating aspectFilter fields with the values returned in an aspectHistogramContainer, you can refine the item results returned by your new query.
	 * @var EbayFindTypeAspectFilter
	 */
	public $aspectFilter;
	/**
	 * The domainFilter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Restricts results to items listed within the specified domain. Domains are a buy-side grouping of items. such as shoes or digital cameras. A domain can span multiple eBay categories.
	 * @var EbayFindTypeDomainFilter
	 */
	public $domainFilter;
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid categories, use the Trading API <b class="con">GetCategories</b> call. <br><br> Up to three (3) categories can be specified. <br><br> Category searches are not supported on the eBay Italy site (global ID EBAY-IT) at this time.
	 * @var string
	 */
	public $categoryId;
	/**
	 * Constructor
	 * @param string keywords
	 * @param string storeName
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @param EbayFindTypeAspectFilter aspectFilter
	 * @param EbayFindTypeDomainFilter domainFilter
	 * @param string categoryId
	 * @return EbayFindTypeFindItemsIneBayStoresRequest
	 */
	public function __construct($_keywords = null,$_storeName = null,$_itemFilter = null,$_outputSelector = null,$_aspectFilter = null,$_domainFilter = null,$_categoryId = null)
	{
		EbayFindWsdlClass::__construct(array('keywords'=>$_keywords,'storeName'=>$_storeName,'itemFilter'=>$_itemFilter,'outputSelector'=>$_outputSelector,'aspectFilter'=>$_aspectFilter,'domainFilter'=>$_domainFilter,'categoryId'=>$_categoryId));
	}
	/**
	 * Set keywords
	 * @param string keywords
	 * @return string
	 */
	public function setKeywords($_keywords)
	{
		return ($this->keywords = $_keywords);
	}
	/**
	 * Get keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}
	/**
	 * Set storeName
	 * @param string storeName
	 * @return string
	 */
	public function setStoreName($_storeName)
	{
		return ($this->storeName = $_storeName);
	}
	/**
	 * Get storeName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->storeName;
	}
	/**
	 * Set itemFilter
	 * @param ItemFilter itemFilter
	 * @return ItemFilter
	 */
	public function setItemFilter($_itemFilter)
	{
		return ($this->itemFilter = $_itemFilter);
	}
	/**
	 * Get itemFilter
	 * @return EbayFindTypeItemFilter
	 */
	public function getItemFilter()
	{
		return $this->itemFilter;
	}
	/**
	 * Set outputSelector
	 * @param OutputSelectorType outputSelector
	 * @return OutputSelectorType
	 */
	public function setOutputSelector($_outputSelector)
	{
		return ($this->outputSelector = EbayFindTypeOutputSelectorType::valueIsValid($_outputSelector)?$_outputSelector:null);
	}
	/**
	 * Get outputSelector
	 * @return EbayFindTypeOutputSelectorType
	 */
	public function getOutputSelector()
	{
		return $this->outputSelector;
	}
	/**
	 * Set aspectFilter
	 * @param AspectFilter aspectFilter
	 * @return AspectFilter
	 */
	public function setAspectFilter($_aspectFilter)
	{
		return ($this->aspectFilter = $_aspectFilter);
	}
	/**
	 * Get aspectFilter
	 * @return EbayFindTypeAspectFilter
	 */
	public function getAspectFilter()
	{
		return $this->aspectFilter;
	}
	/**
	 * Set domainFilter
	 * @param DomainFilter domainFilter
	 * @return DomainFilter
	 */
	public function setDomainFilter($_domainFilter)
	{
		return ($this->domainFilter = $_domainFilter);
	}
	/**
	 * Get domainFilter
	 * @return EbayFindTypeDomainFilter
	 */
	public function getDomainFilter()
	{
		return $this->domainFilter;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>