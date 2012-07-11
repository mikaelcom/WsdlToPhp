<?php
/**
 * Class file for EbayTradingTypeProductSearchType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSearchType
 * Documentation : Container for a product query and pagination instructions. This data is applicable when searching eBay catalogs for stock product information (to use in listings with Pre-filled Item Information.) Input only.
 * @date 04/07/2012
 */
class EbayTradingTypeProductSearchType extends EbayTradingWsdlClass
{
	/**
	 * The ProductSearchID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique alphanumeric key help you distinguish between query results in the response. You define the key. Each search request ID must be unique within the same call. Primarily useful when conducting multiple searches in the same call. If not specified, the ProductSearchResult.ID values in the response are indexed starting from 0 (zero).
	 * @var string
	 */
	public $ProductSearchID;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- documentation : <b>For GetProductFinder and GetProductSearchResults only:</b> Identifier for a characteristic set (an attribute set) that is mapped to a catalog-enabled category (unique across all eBay sites). Required when you use SearchAttributes (for searches based on product search page and product finder data). Returns an error with QueryKeywords (use CharacteristicSetIDs instead). Use GetProductSearchPage or GetProductFinder to determine valid IDs for the type of search you are performing. <br> <br> <b>For GetProducts only:</b> This field is not applicable to GetProducts. However, if you are using a SOAP toolkit and you get an error indicating that this field is required for GetProducts, you can specify this field with any integer value. It will be ignored by eBay.
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * The ProductFinderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Required when you are performing a sell-side product finder search. (Not applicable to product search page searches.) Numeric identifier for a sell-side product finder that was used to retrieve the search attributes being used in the request. The product finder must be mapped to a catalog-enabled category (i.e., it cannot be a buy-side product finder ID) associated with the characteristics set. Use a product finder when you want to specify multiple attributes in a product search query. Call GetCategory2CS to determine which categories support sell-side product finder searches.
	 * @var int
	 */
	public $ProductFinderID;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for a representative stock product in a product family. Used as input in GetProductFamilyMembers requests to identify a product family. Use GetProductSearchResults to determine the available IDs.
	 * @var string
	 */
	public $ProductID;
	/**
	 * The SortAttributeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a sortable attribute. Use GetProductSearchPage or GetProductFinder to determine the valid sort attribute IDs for the specified characteristic set (including the default sort attribute that will be used if you do not specify this field).
	 * @var int
	 */
	public $SortAttributeID;
	/**
	 * The MaxChildrenPerFamily
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Pagination instruction that specifies the maximum quantity of products to return for each product family within the search response whose ID matches the current request's ID. In the response, if the last family returned contains MaxChildrenPerFamily or fewer additional products, those additional products are also returned (i.e., the actual quantity returned for the last family can exceed the specified maximum value). See "Limit the Quantity of Products Returned Per Family" in the eBay Web Services Guide. The value should not include punctuation (i.e., a thousands separator is not valid).
	 * @var int
	 */
	public $MaxChildrenPerFamily;
	/**
	 * The SearchAttributes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A predefined attribute against which to search (e.g., Author). Use this to create a query based on a set of Item Specifics from the catalog. Both the product title and product Item Specifics are searched. If the query includes multiple SearchAttributes fields (one for each attribute), the search engine will apply "AND" logic to the query. Call GetProductSearchPage or GetProductFinder to determine the list of valid attributes and how many are permitted for the specified characteristic set. See the eBay Web Services guide for details. For each ProductSearch, either SearchAttributes or QueryKeywords is required (but do not pass both).
	 * @var EbayTradingTypeSearchAttributesType
	 */
	public $SearchAttributes;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Pagination instruction that specifies the virtual page of data to return per search request. For GetProducts, this is primarily useful when you use QueryKeywords. When you use ExternalProductID or ProductReferenceID, only one page of data is typically returned.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The AvailableItemsOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, only retrieve products that have been used to pre-fill active listings on the specified eBay site. If false, retrieve all products that match the query. <b>For GetProducts</b> This is useful when you use QueryKeywords and you only want to find products that have items (that is, where ItemArray is not empty).<br> <br> <b>For GetProductSearchResults:</b> Ths can be useful when you want to find products that other sellers have recently used to pre-fill similar listings.
	 * @var boolean
	 */
	public $AvailableItemsOnly;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : One or more keywords to search for. The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for products containing these words. To use AND or OR logic, use eBay's standard search string modifiers. Wildcards (+, -, or *) are also supported. Be careful when using spaces before or after modifiers and wildcards. <br><br> <b>For GetProducts</b> When you use a keyword search, eBay searches the product database for matching words in the product title, description, and/or Item Specifics, and it returns a list of matching products (with no items, reviews, or guides). (To retrieve items, reviews, and/or guides for a particular product, use ProductReferenceID instead.) If specified, you must pass in at least 3 alphanumeric characters. Some keyword queries can result in response times of 30 seconds or longer. If more than 2000 matches are found, the call fails with an error. If this kind of error occurs, refine the search by passing in more keywords and/or by using CharacteristicSetIDs to restrict the search to certain domains (such as DVDs). If you are searching for a particular book, DVD, CD, or video game and you already know its ISBN (for a book) or UPC, consider using ExternalProductID instead to retrieve more precise results. The request requires either QueryKeywords, ProductReferenceID, or ExternalProductID, but these fields cannot be used together. <br><br> <b>For GetProductSearchResults:</b> eBay searches only in the characteristic set specified in CharacteristicSetIDs. Both the product title and Item Specifics are searched. For each ProductSearch, either SearchAttributes or QueryKeywords is required (but do not pass both). Blank searches are not applicable (and result in a warning). If your search is using a Keyword attribute returned by GetProductSearchPage, use SearchAttributes instead.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The CharacteristicSetIDs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of one or more IDs that indicate which domain (characteristic set) to search in. <br> <br> <b>For GetProducts</b> Only useful when QueryKeywords is specified. If you use this with ProductReferenceID or ExternalProductID, AND logic is applied. In this case, if you specify an ID that doesn't match the product, no matching product will be found. Therefore, we recommend that you only use this with QueryKeywords. If not specified, the search is conducted across all domains (characteristic sets).<br> <br> <b>For GetProductSearchResults:</b> Required and only applicable when QueryKeywords is specified. Ignored when SearchAttributes is specified.
	 * @var EbayTradingTypeCharacteristicSetIDsType
	 */
	public $CharacteristicSetIDs;
	/**
	 * The ProductReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The global reference ID for an eBay catalog product. Use this query to retrieve basic details about one catalog product. The results can optionally include items, reviews, and/or buying guides that match that product. (Specifically, the items returned are items that sellers listed with the specified product's stock information.) <br><br> To determine valid reference IDs, call GetProducts with QueryKeywords (or ExternalProductID). Each matching product returns a reference ID in Product.ProductReferenceID. <br><br> <span class="tablenote"><b>Note:</b> This value is not the same as the ProductID used in AddItem and related calls. A ProductID represents a particular version of a catalog product. (A given version could have an older or newer description, set of Item Specifics, or other details.) A ProductReferenceID is a more generic or global reference to a product (regardless of version), which is useful for buy-side searching. One product reference ID can be associated with multiple product IDs. </span> <br><br> Some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products, the call may return a warning, or it may return an error if the product has been deleted. <br><br> The request requires either QueryKeywords, ProductReferenceID, or ExternalProductID, but these fields cannot be used together.
	 * @var string
	 */
	public $ProductReferenceID;
	/**
	 * The ExternalProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A query that only retrieves items that were listed with stock products that have ISBN or UPC values (such as books, DVDs, CDs, and video game products). Use this query to retrieve basic details about one catalog product (or a very limited number of products). The results can optionally include items, reviews, and/or buying guides that match that product. (Specifically, the items returned are items that sellers listed with the specified product's stock information.)<br> <br> If you have gotten the ISBN or UPC from another Web site or resource, you can use that ID. Otherwise, call GetProducts with QueryKeywords (or ProductReferenceID). Any matching products that include ISBN or UPC values will return those values in Product.ExternalProductID.<br> <br> The request requires either QueryKeywords, ProductReferenceID, or ExternalProductID, but these fields cannot be used together.
	 * @var EbayTradingTypeExternalProductIDType
	 */
	public $ExternalProductID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ProductSearchID
	 * @param int AttributeSetID
	 * @param int ProductFinderID
	 * @param string ProductID
	 * @param int SortAttributeID
	 * @param int MaxChildrenPerFamily
	 * @param EbayTradingTypeSearchAttributesType SearchAttributes
	 * @param EbayTradingTypePaginationType Pagination
	 * @param boolean AvailableItemsOnly
	 * @param string QueryKeywords
	 * @param EbayTradingTypeCharacteristicSetIDsType CharacteristicSetIDs
	 * @param string ProductReferenceID
	 * @param EbayTradingTypeExternalProductIDType ExternalProductID
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductSearchType
	 */
	public function __construct($_ProductSearchID = null,$_AttributeSetID = null,$_ProductFinderID = null,$_ProductID = null,$_SortAttributeID = null,$_MaxChildrenPerFamily = null,$_SearchAttributes = null,$_Pagination = null,$_AvailableItemsOnly = null,$_QueryKeywords = null,$_CharacteristicSetIDs = null,$_ProductReferenceID = null,$_ExternalProductID = null,$_any = null)
	{
		parent::__construct(array('ProductSearchID'=>$_ProductSearchID,'AttributeSetID'=>$_AttributeSetID,'ProductFinderID'=>$_ProductFinderID,'ProductID'=>$_ProductID,'SortAttributeID'=>$_SortAttributeID,'MaxChildrenPerFamily'=>$_MaxChildrenPerFamily,'SearchAttributes'=>$_SearchAttributes,'Pagination'=>$_Pagination,'AvailableItemsOnly'=>$_AvailableItemsOnly,'QueryKeywords'=>$_QueryKeywords,'CharacteristicSetIDs'=>$_CharacteristicSetIDs,'ProductReferenceID'=>$_ProductReferenceID,'ExternalProductID'=>$_ExternalProductID,'any'=>$_any));
	}
	/**
	 * Set ProductSearchID
	 * @param string ProductSearchID
	 * @return string
	 */
	public function setProductSearchID($_ProductSearchID)
	{
		return ($this->ProductSearchID = $_ProductSearchID);
	}
	/**
	 * Get ProductSearchID
	 * @return string
	 */
	public function getProductSearchID()
	{
		return $this->ProductSearchID;
	}
	/**
	 * Set AttributeSetID
	 * @param int AttributeSetID
	 * @return int
	 */
	public function setAttributeSetID($_AttributeSetID)
	{
		return ($this->AttributeSetID = $_AttributeSetID);
	}
	/**
	 * Get AttributeSetID
	 * @return int
	 */
	public function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * Set ProductFinderID
	 * @param int ProductFinderID
	 * @return int
	 */
	public function setProductFinderID($_ProductFinderID)
	{
		return ($this->ProductFinderID = $_ProductFinderID);
	}
	/**
	 * Get ProductFinderID
	 * @return int
	 */
	public function getProductFinderID()
	{
		return $this->ProductFinderID;
	}
	/**
	 * Set ProductID
	 * @param string ProductID
	 * @return string
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return string
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set SortAttributeID
	 * @param int SortAttributeID
	 * @return int
	 */
	public function setSortAttributeID($_SortAttributeID)
	{
		return ($this->SortAttributeID = $_SortAttributeID);
	}
	/**
	 * Get SortAttributeID
	 * @return int
	 */
	public function getSortAttributeID()
	{
		return $this->SortAttributeID;
	}
	/**
	 * Set MaxChildrenPerFamily
	 * @param int MaxChildrenPerFamily
	 * @return int
	 */
	public function setMaxChildrenPerFamily($_MaxChildrenPerFamily)
	{
		return ($this->MaxChildrenPerFamily = $_MaxChildrenPerFamily);
	}
	/**
	 * Get MaxChildrenPerFamily
	 * @return int
	 */
	public function getMaxChildrenPerFamily()
	{
		return $this->MaxChildrenPerFamily;
	}
	/**
	 * Set SearchAttributes
	 * @param SearchAttributesType SearchAttributes
	 * @return SearchAttributesType
	 */
	public function setSearchAttributes($_SearchAttributes)
	{
		return ($this->SearchAttributes = $_SearchAttributes);
	}
	/**
	 * Get SearchAttributes
	 * @return EbayTradingTypeSearchAttributesType
	 */
	public function getSearchAttributes()
	{
		return $this->SearchAttributes;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
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
	 * Set CharacteristicSetIDs
	 * @param CharacteristicSetIDsType CharacteristicSetIDs
	 * @return CharacteristicSetIDsType
	 */
	public function setCharacteristicSetIDs($_CharacteristicSetIDs)
	{
		return ($this->CharacteristicSetIDs = $_CharacteristicSetIDs);
	}
	/**
	 * Get CharacteristicSetIDs
	 * @return EbayTradingTypeCharacteristicSetIDsType
	 */
	public function getCharacteristicSetIDs()
	{
		return $this->CharacteristicSetIDs;
	}
	/**
	 * Set ProductReferenceID
	 * @param string ProductReferenceID
	 * @return string
	 */
	public function setProductReferenceID($_ProductReferenceID)
	{
		return ($this->ProductReferenceID = $_ProductReferenceID);
	}
	/**
	 * Get ProductReferenceID
	 * @return string
	 */
	public function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
	/**
	 * Set ExternalProductID
	 * @param ExternalProductIDType ExternalProductID
	 * @return ExternalProductIDType
	 */
	public function setExternalProductID($_ExternalProductID)
	{
		return ($this->ExternalProductID = $_ExternalProductID);
	}
	/**
	 * Get ExternalProductID
	 * @return EbayTradingTypeExternalProductIDType
	 */
	public function getExternalProductID()
	{
		return $this->ExternalProductID;
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