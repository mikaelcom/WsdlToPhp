<?php
/**
 * Class file for EbayTradingTypeGetProductsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductsResponseType
 * Documentation : Returns stock product information in eBay catalogs, such as information about a particular DVD or camera. Optionally, also returns product reviews, buying guides, and items that match the product.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CharacteristicsSetProductHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A histogram that lists the number of matching products found and the domains in which they were found. A <i>domain</i> is essentially a set of categories that share certain common features (as determined by eBay). Each domain has its own name and ID.
	 * @var EbayTradingTypeCharacteristicsSetProductHistogramType
	 */
	public $CharacteristicsSetProductHistogram;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with ApproximatePages and HasMore to decide which page to retrieve next. As GetProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set EntriesPerPage to 1 in the request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ApproximatePages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of pages that can be returned, given the same query and filters in the request. As GetProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set EntriesPerPage to 1 in the request).
	 * @var int
	 */
	public $ApproximatePages;
	/**
	 * The HasMore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, more pages of results are available. That is, PageNumber is less than ApproximatePages.
	 * @var boolean
	 */
	public $HasMore;
	/**
	 * The TotalProducts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of matching products found. (If more than 2000 products are found, the call fails with an error.)
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The Product
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An eBay catalog product. This contains stock information about a particular DVD, camera, set of golf clubs, or other product. When you use QueryKeywords in the request, GetProducts returns a maximum of 20 products per page. When you use ExternalProductID or ProductReferenceID in the request, GetProducts usually only returns 1 product. (If more than one product matches the same ExternalProductID, GetProducts will return all of those products. As of the time of this writing, we expect this to be a rare case.)
	 * @var EbayTradingTypeCatalogProductType
	 */
	public $Product;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of items (if any) that match the product identified in ExternalProductID or ProductReferenceID in the request. Only returned when you set IncludeItemArray to true. The items are sorted by end time (ending soonest), and this order is not configurable in the request. Up to 200 items can be returned. All items are returned on the first page (page 1). Not returned when you use QueryKeywords.<br> <br> If ItemCount is greater than 200, use the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a> if you want to retrieve more matching items.
	 * @var EbayTradingTypeItemArrayType
	 */
	public $ItemArray;
	/**
	 * The BuyingGuideDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information for up to 5 buying guides that match the query. Only returned when you set IncludeBuyingGuideDetails to true. Buying guides provide useful information about shopping in a particular domain, like Digital Cameras. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them. If no buying guides are associated with the product, this only returns a link to the buying guide hub (the main Guides page).
	 * @var EbayTradingTypeBuyingGuideDetailsType
	 */
	public $BuyingGuideDetails;
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
	 * @param EbayTradingTypeCharacteristicsSetProductHistogramType CharacteristicsSetProductHistogram
	 * @param int PageNumber
	 * @param int ApproximatePages
	 * @param boolean HasMore
	 * @param int TotalProducts
	 * @param EbayTradingTypeCatalogProductType Product
	 * @param EbayTradingTypeItemArrayType ItemArray
	 * @param EbayTradingTypeBuyingGuideDetailsType BuyingGuideDetails
	 * @param boolean DuplicateItems
	 * @return EbayTradingTypeGetProductsResponseType
	 */
	public function __construct($_CharacteristicsSetProductHistogram = null,$_PageNumber = null,$_ApproximatePages = null,$_HasMore = null,$_TotalProducts = null,$_Product = null,$_ItemArray = null,$_BuyingGuideDetails = null,$_DuplicateItems = null)
	{
		EbayTradingWsdlClass::__construct(array('CharacteristicsSetProductHistogram'=>$_CharacteristicsSetProductHistogram,'PageNumber'=>$_PageNumber,'ApproximatePages'=>$_ApproximatePages,'HasMore'=>$_HasMore,'TotalProducts'=>$_TotalProducts,'Product'=>$_Product,'ItemArray'=>$_ItemArray,'BuyingGuideDetails'=>$_BuyingGuideDetails,'DuplicateItems'=>$_DuplicateItems));
	}
	/**
	 * Set CharacteristicsSetProductHistogram
	 * @param CharacteristicsSetProductHistogramType CharacteristicsSetProductHistogram
	 * @return CharacteristicsSetProductHistogramType
	 */
	public function setCharacteristicsSetProductHistogram($_CharacteristicsSetProductHistogram)
	{
		return ($this->CharacteristicsSetProductHistogram = $_CharacteristicsSetProductHistogram);
	}
	/**
	 * Get CharacteristicsSetProductHistogram
	 * @return EbayTradingTypeCharacteristicsSetProductHistogramType
	 */
	public function getCharacteristicsSetProductHistogram()
	{
		return $this->CharacteristicsSetProductHistogram;
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
	 * Set HasMore
	 * @param boolean HasMore
	 * @return boolean
	 */
	public function setHasMore($_HasMore)
	{
		return ($this->HasMore = $_HasMore);
	}
	/**
	 * Get HasMore
	 * @return boolean
	 */
	public function getHasMore()
	{
		return $this->HasMore;
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
	 * @return EbayTradingTypeCatalogProductType
	 */
	public function getProduct()
	{
		return $this->Product;
	}
	/**
	 * Set ItemArray
	 * @param ItemArrayType ItemArray
	 * @return ItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * Set BuyingGuideDetails
	 * @param BuyingGuideDetailsType BuyingGuideDetails
	 * @return BuyingGuideDetailsType
	 */
	public function setBuyingGuideDetails($_BuyingGuideDetails)
	{
		return ($this->BuyingGuideDetails = $_BuyingGuideDetails);
	}
	/**
	 * Get BuyingGuideDetails
	 * @return EbayTradingTypeBuyingGuideDetailsType
	 */
	public function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
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