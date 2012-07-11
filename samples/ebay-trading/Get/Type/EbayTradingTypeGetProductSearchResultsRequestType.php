<?php
/**
 * Class file for EbayTradingTypeGetProductSearchResultsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSearchResultsRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Searches for Pre-filled Item Information within one or more characteristic sets. This kind of search is only applicable in the context of the Sell Your Item use case. Use the response to present the seller with a list of products found in a catalog. (For buy-side searches, use the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>.)<br> <br> See the Attributes and Catalogs section of the eBay Web Services guide for background information and terminology definitions, as well as information about how to use this call in the Sell Your Item flow.<br> <br> You can use this call to search for different products at the same time. That is, this call can perform batch searches.<br> <br> Given an array of ProductSearch properties that are configured with a list of search attributes or keywords (and other information), GetProductSearchResults searches an eBay catalog for products that match each query. Some queries can be configured to also specify a sort order for the results.<br> <br> To configure a ProductSearch object to search by attributes, you need a valid combination of search attributes. If you want to use a sort order other than the default order, you also need a valid sort attribute. We offer two calls that return product search and sort attributes. Use GetCategory2CS to determine which one of these calls you can use for a given category. At least one approach is offered for each catalog-enabled category, and some cases, both are offered.<br> <br> <b>GetProductSearchPage</b>: Use this call when you want to configure a simple query that consists of a single search attribute (with a value). This retrieves a single product or a very short list of search results to choose from. Some products are fairly easy to find based on a single attribute. For example, in Consumer Electronics categories (Digital Cameras, Cell Phones, and PDAs), you can specify a unique (or nearly unique) identifier, like a part number. In Media categories (Books, DVDs & Movies, Music, and Video Games), you can specify a descriptive name, like a title. <br> <br> <b>GetProductFinder</b>: Use this call when you want to configure a complex query. In the Sell Your Item flow, this is a complex query against the eBay product catalog. Currently, this type of search is available in Consumer Electronics categories only. In this type of search, you specify values for multiple attributes, like Brand and Resolution (i.e., number of megapixels). This retrieves a list of matching products. This approach is useful when the user does not know the part number, or a product does not have a single, distinguishing feature that is easy to search on. For example, searching for a digital camera based solely on the brand would likely yield far too many results to be useful. Searching on the brand, product line, and resolution will retrieve a much shorter list of results. <br> <br> Alternatively, you can search on a particular keyword that appears in a product's title or Item Specifics. For this, you use GetProductSearchResults and and pass in one or more text strings (with optional wildcards) in ProductSearch.QueryKeywords. <br> <br> When you use a keyword query, the search criteria are not restricted to the results of a product search page or product finder, so the criteria are not tied to a particular characteristic set. This means you can search across multiple characteristic sets using the same query. This is useful when the user wants to broaden their search across multiple categories. For example, a seller who sells Jazz books, Jazz CDs, and Jazz movies may want to search for "Bird" across multiple categories. Specify the characteristic set IDs of interest by using CharacteristicSetIDs. <br> <br> GetProductSearchResults returns a list of matching products, if any. Each product is represented as a list of attributes (Item Specifics) plus other identifying information, such as a product ID and a stock photo. <br> <br> Once the user selects a product from the list (this may require a call to GetProductFamilyMembers to retrieve additional products to choose from), pass its ID in a GetProductSellingPages request to retrieve more detailed information about each product, including a set of optional Item Specifics that the seller can use in addition to the pre-filled Item Specifics (see GetProductSellingPages). <br> <br> To use this data in a listing, pass the product ID and the optional Item Specifics in the seller's listing request (AddItem).
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSearchResultsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ProductSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the keywords or attributes that make up the product query, with pagination instructions. ProductSearch is a required input. To search for multiple different products at the same time (i.e., to perform a batch search), pass in multiple ProductSearch properties.
	 * @var EbayTradingTypeProductSearchType
	 */
	public $ProductSearch;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductSearchType ProductSearch
	 * @return EbayTradingTypeGetProductSearchResultsRequestType
	 */
	public function __construct($_ProductSearch = null)
	{
		EbayTradingWsdlClass::__construct(array('ProductSearch'=>$_ProductSearch));
	}
	/**
	 * Set ProductSearch
	 * @param ProductSearchType ProductSearch
	 * @return ProductSearchType
	 */
	public function setProductSearch($_ProductSearch)
	{
		return ($this->ProductSearch = $_ProductSearch);
	}
	/**
	 * Get ProductSearch
	 * @return EbayTradingTypeProductSearchType
	 */
	public function getProductSearch()
	{
		return $this->ProductSearch;
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