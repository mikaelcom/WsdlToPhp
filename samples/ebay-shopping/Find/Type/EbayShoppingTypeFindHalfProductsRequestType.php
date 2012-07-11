<?php
/**
 * Class file for EbayShoppingTypeFindHalfProductsRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindHalfProductsRequestType
 * Documentation : Searches Half.com for stock product information (stock description and Item Specifics), such as information about a particular kind of DVD or book. Also, retrieves up to 30 Half.com listings associated with a product.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindHalfProductsRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields, focusing on product details only (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Items</p> <p class="edef">Include a brief set of item fields in the response. Only applicable when you are searching by ProductID. Not applicable with QueryKeywords.</p> <p class="ename">&bull;&nbsp;&nbsp; DomainHistogram</p> <p class="edef">Include the DomainHistogram in the response. The histogram lists the number of matching products found and the domains in which they were found. (A domain is like a high-level category.) When many matching products are found, you may see significantly slower response times when you include the histogram.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "FindHalfProducts Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * The AvailableItemsOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, only retrieve data for products that have been used to pre-fill active listings on the Half.com site. If false, retrieve all products that match the query. This is useful when you use QueryKeywords and you only want to find products that have associated items (that is, where ItemArray would not be empty).<br> <br> By default, AvailableItemsOnly does not retrieve an ItemArray; it only controls which products are returned (or counted). When you use QueryKeywords in your request, only products are returned, ItemArray is never returned. To retrieve an ItemArray, use a ProductID in your request instead of a QueryKeyword and specify Items in the IncludeSelector field.
	 * @var boolean
	 */
	public $AvailableItemsOnly;
	/**
	 * The DomainName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A domain to search in. This is like searching a section of a catalog. If not specified, the product search is conducted across all domains. DomainName is an unbounded field. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To determine valid domain names, first use this call with QueryKeywords. Domain names are returned for each product (and summarized in the domain histogram, if you specify DomainHistogram in IncludeSelector).<br> <br> A domain is a named grouping of categories whose items share common product characteristics. For example, all bound books have a binding or format (e.g., Hardcover), but audiobooks don't. So audiobooks would have their own domain. To limit your search to audiobooks, you would specify Audiobooks as the domain.<br> <br> Only useful when QueryKeywords is specified. If you use this with ProductID, AND logic is applied. In this case, if you specify an ID that doesn't match the domain (as Half.com has defined it), no matching product will be found. Therefore, we recommend that you only use DomainName with QueryKeywords.
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this to retrieve product details for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. <br> <br> In general, you can request up to 10 IDs of the same type by separating them with commas, as in the following: 014633155310,014633145496. However, if you specify a ProductID type of Reference (which specifies a global reference ID for an eBay catalog product), only one ID in ProductID can be used. <br> <br> The request requires either QueryKeywords or ProductID, but these fields cannot be used together. <br> ItemCount is only returned when ProductID is used in the request and the IncludeSelector is set to Items or Details.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One or more keywords to search for. When you use a keyword search, Half.com searches the product catalogs for matching words in the product title, description, and/or Item Specifics, and it returns a list of matching products, with no items. To retrieve items, use ProductID instead. (If you don't already have a product ID, you can get product IDs from the response after conducting a keyword search.)<br> <br> If specified, you must pass in at least 3 alphanumeric characters.<br> <br> The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for products containing these words. To use AND or OR logic, use Half.com's standard search string modifiers. Wildcards (+, -, or *) are also supported. Be careful when using spaces before or after modifiers and wildcards.<br> <br> Some keyword queries can result in response times of 30 seconds or longer. If more than 2000 matches are found, the call fails with an error. If this kind of error occurs, refine the search by passing in more keywords and/or by using DomainName to restrict the search to certain domains (such as DVDs). If you are searching for a particular book, DVD, CD, or video game and you already know its ISBN or EAN (for a book) or UPC, consider using ProductID instead to retrieve more precise results. <br> <br> The request requires either QueryKeywords or ProductID, but these fields cannot be used together. <br> When QueryKeywords is used in the request, ItemCount is not returned.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of a specific seller. Specify this value in combination with ProductID if you want search results to be filtered so that the items returned are only items in a specific product, sold by a specific seller. To specify SellerID, use SellerID and ProductID together.
	 * @var string
	 */
	public $SellerID;
	/**
	 * The ProductSort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts the list of products returned. This is mostly only useful with QueryKeywords. (When you use ProductID, Half.com usually only returns one product.)
	 * @var EbayShoppingTypeProductSortCodeType
	 */
	public $ProductSort;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts the list of products returned.
	 * @var EbayShoppingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The MaxEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of products to return per page in a single call. This is mostly only useful with QueryKeywords. (When you use ProductID, Half.com usually only returns one product, and up to 30 items for that product.)
	 * @var int
	 */
	public $MaxEntries;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request). Use this only when specifying QueryKeywords.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * Constructor
	 * @param string IncludeSelector
	 * @param boolean AvailableItemsOnly
	 * @param string DomainName
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param string QueryKeywords
	 * @param string SellerID
	 * @param EbayShoppingTypeProductSortCodeType ProductSort
	 * @param EbayShoppingTypeSortOrderCodeType SortOrder
	 * @param int MaxEntries
	 * @param int PageNumber
	 * @return EbayShoppingTypeFindHalfProductsRequestType
	 */
	public function __construct($_IncludeSelector = null,$_AvailableItemsOnly = null,$_DomainName = null,$_ProductID = null,$_QueryKeywords = null,$_SellerID = null,$_ProductSort = null,$_SortOrder = null,$_MaxEntries = null,$_PageNumber = null)
	{
		EbayShoppingWsdlClass::__construct(array('IncludeSelector'=>$_IncludeSelector,'AvailableItemsOnly'=>$_AvailableItemsOnly,'DomainName'=>$_DomainName,'ProductID'=>$_ProductID,'QueryKeywords'=>$_QueryKeywords,'SellerID'=>$_SellerID,'ProductSort'=>$_ProductSort,'SortOrder'=>$_SortOrder,'MaxEntries'=>$_MaxEntries,'PageNumber'=>$_PageNumber));
	}
	/**
	 * Set IncludeSelector
	 * @param string IncludeSelector
	 * @return string
	 */
	public function setIncludeSelector($_IncludeSelector)
	{
		return ($this->IncludeSelector = $_IncludeSelector);
	}
	/**
	 * Get IncludeSelector
	 * @return string
	 */
	public function getIncludeSelector()
	{
		return $this->IncludeSelector;
	}
	/**
	 * Set AvailableItemsOnly
	 * @param boolean AvailableItemsOnly
	 * @return boolean
	 */
	public function setAvailableItemsOnly($_AvailableItemsOnly)
	{
		return ($this->AvailableItemsOnly = $_AvailableItemsOnly);
	}
	/**
	 * Get AvailableItemsOnly
	 * @return boolean
	 */
	public function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}
	/**
	 * Set DomainName
	 * @param string DomainName
	 * @return string
	 */
	public function setDomainName($_DomainName)
	{
		return ($this->DomainName = $_DomainName);
	}
	/**
	 * Get DomainName
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->DomainName;
	}
	/**
	 * Set ProductID
	 * @param ProductIDType ProductID
	 * @return ProductIDType
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return EbayShoppingTypeProductIDType
	 */
	public function getProductID()
	{
		return $this->ProductID;
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
	 * Set SellerID
	 * @param string SellerID
	 * @return string
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = $_SellerID);
	}
	/**
	 * Get SellerID
	 * @return string
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set ProductSort
	 * @param ProductSortCodeType ProductSort
	 * @return ProductSortCodeType
	 */
	public function setProductSort($_ProductSort)
	{
		return ($this->ProductSort = EbayShoppingTypeProductSortCodeType::valueIsValid($_ProductSort)?$_ProductSort:null);
	}
	/**
	 * Get ProductSort
	 * @return EbayShoppingTypeProductSortCodeType
	 */
	public function getProductSort()
	{
		return $this->ProductSort;
	}
	/**
	 * Set SortOrder
	 * @param SortOrderCodeType SortOrder
	 * @return SortOrderCodeType
	 */
	public function setSortOrder($_SortOrder)
	{
		return ($this->SortOrder = EbayShoppingTypeSortOrderCodeType::valueIsValid($_SortOrder)?$_SortOrder:null);
	}
	/**
	 * Get SortOrder
	 * @return EbayShoppingTypeSortOrderCodeType
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>