<?php
/**
 * Class file for EbayShoppingTypeFindHalfProductsResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindHalfProductsResponseType
 * Documentation : Returns stock product information in Half.com catalogs, such as information about a particular DVD or book. Optionally, also returns items that match the product.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindHalfProductsResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The DomainHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A histogram that lists the number of matching products found and the domains in which they were found. A <i>domain</i> is essentially a set of categories that share certain common features (as determined by Half.com). Each domain has its own name and ID.
	 * @var EbayShoppingTypeDomainHistogramType
	 */
	public $DomainHistogram;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with ApproximatePages and HasMore to decide which page to retrieve next. As FindHalfProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set EntriesPerPage to 1 in the request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ApproximatePages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of pages that can be returned, given the same query and filters in the request. As FindHalfProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
	 * @var int
	 */
	public $ApproximatePages;
	/**
	 * The MoreResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, more pages of results are available. That is, PageNumber is less than ApproximatePages.
	 * @var boolean
	 */
	public $MoreResults;
	/**
	 * The TotalProducts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of matching products found. (If more than 2000 products are found, the call fails with an error.)
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The Products
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An set of Half.com catalog products. This contains stock information about a particular DVD, book, or other product. When you use QueryKeywords in the request, FindHalfProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindHalfProducts usually only returns 1 product. ItemCount is only returned if you use ProductID with IncludeSelector set to Items or Details. (If more than one product matches the same ProductID, FindHalfProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * @var EbayShoppingTypeHalfProductsType
	 */
	public $Products;
	/**
	 * The ProductSearchURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A URL for product search results that corresponds to your search request. This is similar to ItemSearchURL in FindItems and FindItemsAdvanced.
	 * @var anyURI
	 */
	public $ProductSearchURL;
	/**
	 * Constructor
	 * @param EbayShoppingTypeDomainHistogramType DomainHistogram
	 * @param int PageNumber
	 * @param int ApproximatePages
	 * @param boolean MoreResults
	 * @param int TotalProducts
	 * @param EbayShoppingTypeHalfProductsType Products
	 * @param anyURI ProductSearchURL
	 * @return EbayShoppingTypeFindHalfProductsResponseType
	 */
	public function __construct($_DomainHistogram = null,$_PageNumber = null,$_ApproximatePages = null,$_MoreResults = null,$_TotalProducts = null,$_Products = null,$_ProductSearchURL = null)
	{
		EbayShoppingWsdlClass::__construct(array('DomainHistogram'=>$_DomainHistogram,'PageNumber'=>$_PageNumber,'ApproximatePages'=>$_ApproximatePages,'MoreResults'=>$_MoreResults,'TotalProducts'=>$_TotalProducts,'Products'=>$_Products,'ProductSearchURL'=>$_ProductSearchURL));
	}
	/**
	 * Set DomainHistogram
	 * @param DomainHistogramType DomainHistogram
	 * @return DomainHistogramType
	 */
	public function setDomainHistogram($_DomainHistogram)
	{
		return ($this->DomainHistogram = $_DomainHistogram);
	}
	/**
	 * Get DomainHistogram
	 * @return EbayShoppingTypeDomainHistogramType
	 */
	public function getDomainHistogram()
	{
		return $this->DomainHistogram;
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
	 * Set ApproximatePages
	 * @param int ApproximatePages
	 * @return int
	 */
	public function setApproximatePages($_ApproximatePages)
	{
		return ($this->ApproximatePages = $_ApproximatePages);
	}
	/**
	 * Get ApproximatePages
	 * @return int
	 */
	public function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * Set MoreResults
	 * @param boolean MoreResults
	 * @return boolean
	 */
	public function setMoreResults($_MoreResults)
	{
		return ($this->MoreResults = $_MoreResults);
	}
	/**
	 * Get MoreResults
	 * @return boolean
	 */
	public function getMoreResults()
	{
		return $this->MoreResults;
	}
	/**
	 * Set TotalProducts
	 * @param int TotalProducts
	 * @return int
	 */
	public function setTotalProducts($_TotalProducts)
	{
		return ($this->TotalProducts = $_TotalProducts);
	}
	/**
	 * Get TotalProducts
	 * @return int
	 */
	public function getTotalProducts()
	{
		return $this->TotalProducts;
	}
	/**
	 * Set Products
	 * @param HalfProductsType Products
	 * @return HalfProductsType
	 */
	public function setProducts($_Products)
	{
		return ($this->Products = $_Products);
	}
	/**
	 * Get Products
	 * @return EbayShoppingTypeHalfProductsType
	 */
	public function getProducts()
	{
		return $this->Products;
	}
	/**
	 * Set ProductSearchURL
	 * @param anyURI ProductSearchURL
	 * @return anyURI
	 */
	public function setProductSearchURL($_ProductSearchURL)
	{
		return ($this->ProductSearchURL = $_ProductSearchURL);
	}
	/**
	 * Get ProductSearchURL
	 * @return anyURI
	 */
	public function getProductSearchURL()
	{
		return $this->ProductSearchURL;
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