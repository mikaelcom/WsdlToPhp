<?php
/**
 * Class file for EbayShoppingTypeFindProductsRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindProductsRequestType
 * Documentation : Searches for stock product information.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindProductsRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The IncludeSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines standard subsets of fields to return within the response.<br> <br> If you don't specify this field, the call returns a default set of fields, focusing on product details only (see the "Detail Controls" link below). If you specify this field, the additional fields you retrieve can affect the call's response time (performance).<br> <br> <b>Applicable values</b>: <p class="ename">&bull;&nbsp;&nbsp; Details</p> <p class="edef">Include all available item fields in the response. Only applicable when you are searching by ProductID. Not applicable with QueryKeywords.</p> <p class="ename">&bull;&nbsp;&nbsp; DomainHistogram</p> <p class="edef">Include the DomainHistogram in the response. The histogram lists the number of matching products found and the domains in which they were found. (A domain is like a high-level category.) When many matching products are found, you may see significantly slower response times when you include the histogram.</p> <p class="ename">&bull;&nbsp;&nbsp; Items</p> <p class="edef">Include a brief set of item fields in the response. Only applicable when you are searching by ProductID. Not applicable with QueryKeywords.</p> <br> <br> Use a comma to specify multiple values. (In this case, the results are cumulative.) See "FindProducts Samples" for an example of how to use this field.<br> <br> See "Detail Controls" for a complete list of fields that can be returned for each selector.
	 * @var string
	 */
	public $IncludeSelector;
	/**
	 * The AvailableItemsOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, only retrieve data for products that have been used to pre-fill active listings on the specified eBay site. If false, retrieve all products that match the query. This is useful when you use QueryKeywords and you only want to find products that have associated items (that is, where ItemArray would not beempty).<br> <br> This does not retrieve ItemArray; this only controls which products are returned (or counted). To retrieve ItemArray, pass Items in IncludeSelector.
	 * @var boolean
	 */
	public $AvailableItemsOnly;
	/**
	 * The DomainName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A domain to search in. This is like searching a section of a catalog. If not specified, the product search is conducted across all domains. DomainName is an unbounded field. If you are using a URL, and you want to specify multiple values, use an index value (not a comma). For example, to specify DomainName=Textbooks,Education, specify DomainName(0)=Textbooks,%20Education. To determine valid domain names, first use this call with QueryKeywords. Domain names are returned for each product (and summarized in the domain histogram, if you specify DomainHistogram in IncludeSelector).<br> <br> A domain is a named grouping of categories whose items share common product characteristics. For example, all bound books have a binding or format (e.g., Hardcover), but audiobooks don't. So audiobooks would have their own domain. To limit your search to audiobooks, you would specify Audiobooks as the domain.<br> <br> Only useful when QueryKeywords is specified. If you use this with ProductID, AND logic is applied. In this case, if you specify an ID that doesn't match the domain (as eBay has defined it), no matching product will be found. Therefore, we recommend that you only use DomainName with QueryKeywords.
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this to retrieve product details for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. <br> <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One or more keywords to search for. When you use a keyword search, eBay searches the product catalogs for matching words in the product title, description, and/or Item Specifics, and it returns a list of matching products, with no items. To retrieve items, use ProductID instead. (If you don't already have a product ID, you can get product IDs from the response after conducting a keyword search.)<br> <br> If specified, you must pass in at least 3 alphanumeric characters.<br> <br> The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for products containing these words. To use AND or OR logic, use eBay's standard search string modifiers. Wildcards (+, -, or *) are also supported. Be careful when using spaces before or after modifiers and wildcards.<br> <br> Some keyword queries can result in response times of 30 seconds or longer. If more than 2000 matches are found, the call fails with an error. If this kind of error occurs, refine the search by passing in more keywords and/or by using DomainName to restrict the search to certain domains (such as DVDs). If you are searching for a particular book, DVD, CD, or video game and you already know its ISBN or EAN (for a book) or UPC, consider using ProductID instead to retrieve more precise results. <br> <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The ProductSort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts the list of products returned. This is mostly only useful with QueryKeywords. (When you use ProductID, eBay usually only returns one product.) Also see SortOrder. If ProductSort and SortOrder are not specified, products are sorted by popularity in descending order.
	 * @var EbayShoppingTypeProductSortCodeType
	 */
	public $ProductSort;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts search results in ascending or descending order. Only applicable with ProductSort. If you specify ProductSort without SortOrder, the order defaults to Descending for all criteria except Title (which defaults to Ascending).
	 * @var EbayShoppingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The MaxEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of products to return per page in a single call. This is mostly only useful with QueryKeywords. (When you use ProductID, eBay usually only returns one product, and up to 200 items for that product.)
	 * @var int
	 */
	public $MaxEntries;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Include a Category ID number in your request to restrict your query to a specific category. <br> The request requires a single one of these three elements: QueryKeywords, ProductID, or CategoryID, and can only include one of the three.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The HideDuplicateItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to remove duplicate items from search results. When set to true, and there are duplicate items for an item in the search results, the subsequent duplicates will not appear in the results. Item listings are considered duplicates in the following conditions: <br> <ul> <li>Items are listed by the same seller</li> <li>Items have exactly the same item title</li> <li>Items have similar listing formats</li> <ul> <li>Auctions: Auction Items, Auction BIN items, Multi-Quantity Auctions, and Multi-Quantity Auctions BIN items</li> <li>Fixed Price: Fixed Price, Multi-quantity Fixed Price, Fixed Price with Best Offer, and Store Inventory Format items</li> <li>Classified Ads</li> </ul> </ul><br> For Auctions, items must also have the same price and number of bids to be considered duplicates. <br> Filtering of duplicate item listings is not supported on all sites. For FindProducts, this filter only works when IncludeSelector is set to Items or Details.
	 * @var boolean
	 */
	public $HideDuplicateItems;
	/**
	 * Constructor
	 * @param string IncludeSelector
	 * @param boolean AvailableItemsOnly
	 * @param string DomainName
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param string QueryKeywords
	 * @param EbayShoppingTypeProductSortCodeType ProductSort
	 * @param EbayShoppingTypeSortOrderCodeType SortOrder
	 * @param int MaxEntries
	 * @param int PageNumber
	 * @param string CategoryID
	 * @param boolean HideDuplicateItems
	 * @return EbayShoppingTypeFindProductsRequestType
	 */
	public function __construct($_IncludeSelector = null,$_AvailableItemsOnly = null,$_DomainName = null,$_ProductID = null,$_QueryKeywords = null,$_ProductSort = null,$_SortOrder = null,$_MaxEntries = null,$_PageNumber = null,$_CategoryID = null,$_HideDuplicateItems = null)
	{
		EbayShoppingWsdlClass::__construct(array('IncludeSelector'=>$_IncludeSelector,'AvailableItemsOnly'=>$_AvailableItemsOnly,'DomainName'=>$_DomainName,'ProductID'=>$_ProductID,'QueryKeywords'=>$_QueryKeywords,'ProductSort'=>$_ProductSort,'SortOrder'=>$_SortOrder,'MaxEntries'=>$_MaxEntries,'PageNumber'=>$_PageNumber,'CategoryID'=>$_CategoryID,'HideDuplicateItems'=>$_HideDuplicateItems));
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
	 * Set HideDuplicateItems
	 * @param boolean HideDuplicateItems
	 * @return boolean
	 */
	public function setHideDuplicateItems($_HideDuplicateItems)
	{
		return ($this->HideDuplicateItems = $_HideDuplicateItems);
	}
	/**
	 * Get HideDuplicateItems
	 * @return boolean
	 */
	public function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
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