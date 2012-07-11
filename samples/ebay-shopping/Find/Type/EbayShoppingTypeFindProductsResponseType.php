<?php
/**
 * Class file for EbayShoppingTypeFindProductsResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindProductsResponseType
 * Documentation : Returns stock product information in eBay catalogs, such as information about a particular DVD or camera. Optionally, also returns items that match the product.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindProductsResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The ApproximatePages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of pages that can be returned, given the same query and filters in the request. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
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
	 * The DomainHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A histogram that lists the number of matching products found and the domains in which they were found. A <i>domain</i> describes a set of categories that share certain common characteristics (as determined by eBay). Each domain has its own name and ID. Only returned when you specify DomainHistogram in IncludeSelector.
	 * @var EbayShoppingTypeDomainHistogramType
	 */
	public $DomainHistogram;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of active items that were listed with the requested product. <br /> <br /> <span class="tablenote"><strong>Note:</strong> ItemArray is returned only when you use ProductID in the search request (not QueryKeywords) and you set IncludeSelector to Details or Items. Returned only if eBay has currently matching items. </span> <br />
	 * @var EbayShoppingTypeSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with ApproximatePages and MoreResults to decide which page to retrieve next. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxEntries to 1 in the request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The Product
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An eBay catalog product. This contains stock information about a particular DVD, camera, set of golf clubs, or other product. When you use QueryKeywords in the request, FindProducts returns a maximum of 20 products per page. When you use ProductID in the request, FindProducts usually only returns 1 product by default. (If more than one product matches the same ProductID, FindProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * @var EbayShoppingTypeCatalogProductType
	 */
	public $Product;
	/**
	 * The TotalProducts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of matching products found. (If more than 2000 products are found, the call fails with an error.)
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The DuplicateItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether there are duplicated items not returned by this response when HideDuplicateItems is true in the request.
	 * @var boolean
	 */
	public $DuplicateItems;
	/**
	 * Constructor
	 * @param int ApproximatePages
	 * @param boolean MoreResults
	 * @param EbayShoppingTypeDomainHistogramType DomainHistogram
	 * @param EbayShoppingTypeSimpleItemArrayType ItemArray
	 * @param int PageNumber
	 * @param EbayShoppingTypeCatalogProductType Product
	 * @param int TotalProducts
	 * @param boolean DuplicateItems
	 * @return EbayShoppingTypeFindProductsResponseType
	 */
	public function __construct($_ApproximatePages = null,$_MoreResults = null,$_DomainHistogram = null,$_ItemArray = null,$_PageNumber = null,$_Product = null,$_TotalProducts = null,$_DuplicateItems = null)
	{
		EbayShoppingWsdlClass::__construct(array('ApproximatePages'=>$_ApproximatePages,'MoreResults'=>$_MoreResults,'DomainHistogram'=>$_DomainHistogram,'ItemArray'=>$_ItemArray,'PageNumber'=>$_PageNumber,'Product'=>$_Product,'TotalProducts'=>$_TotalProducts,'DuplicateItems'=>$_DuplicateItems));
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
	 * Set ItemArray
	 * @param SimpleItemArrayType ItemArray
	 * @return SimpleItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayShoppingTypeSimpleItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
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
	 * Set Product
	 * @param CatalogProductType Product
	 * @return CatalogProductType
	 */
	public function setProduct($_Product)
	{
		return ($this->Product = $_Product);
	}
	/**
	 * Get Product
	 * @return EbayShoppingTypeCatalogProductType
	 */
	public function getProduct()
	{
		return $this->Product;
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
	 * Set DuplicateItems
	 * @param boolean DuplicateItems
	 * @return boolean
	 */
	public function setDuplicateItems($_DuplicateItems)
	{
		return ($this->DuplicateItems = $_DuplicateItems);
	}
	/**
	 * Get DuplicateItems
	 * @return boolean
	 */
	public function getDuplicateItems()
	{
		return $this->DuplicateItems;
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