<?php
/**
 * Class file for EbayShoppingTypeHalfCatalogProductType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeHalfCatalogProductType
 * Documentation : Information about an Half.com catalog product.
 * @date 05/07/2012
 */
class EbayShoppingTypeHalfCatalogProductType extends EbayShoppingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the product, as specified in the catalog. Always returned when Product is returned.
	 * @var string
	 */
	public $Title;
	/**
	 * The DetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the Half.com Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product. This is usually always returned when Product is returned, but it may be safest to check for the existence of this field.
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The StockPhotoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for a stock image (if any) that is associated with the Half.com catalog product. The URL is for the image Half.com usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it. Only returned if a URL is available for the product.
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The ShippingCostSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains basic shipping-related costs for the item. If Item.Quantity is greater than 1, this is the shipping cost for one item. If the seller offers a choice of more than one shipping service (such as USPS Ground or Expediated), this is the cost of the "first" shipping option (usually the lowest cost option).
	 * @var EbayShoppingTypeShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * The DisplayStockPhotos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, your application can attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not necessarily applicable or available. An application with a graphical user interface can use this flag to determine when to hide customized stock photo widgets. Always returned when Product is returned.
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of listings on the Half.com site that use stock information from this catalog product. This value can be greater than the number of listings returned in ItemArray. <br /> <br /> <span class="tablenote"><strong>Note:</strong> ItemCount is always returned, however, it's value will be zero unless you use ProductID in the search request and you set IncludeSelector to Items. Although ItemCount always returns 0 if you search using QueryKeyword, check for the presence of MinPrice; if the response contains MinPrice, you can retrieve a value for ItemCount as described. </span>
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The Half.com or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The DomainName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the domain in which the product was found. If the product is mapped to multiple domains, Half.com returns the most applicable domain (as determined by Half.com). Always returned when Product is returned.
	 * @var string
	 */
	public $DomainName;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of name/value pairs that are included in the product's pre-filled Item Specifics. These indicate common aspects or characteristics of the product, such as Publisher (for a book). Also see ProductID for ISBN, UPC, or EAN values, if applicable. This is usually returned. (We are not aware of any cases in which this node is not be returned. However, it may be safest to check for the existence of this node.)
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of active items that were listed with the requested product. Results are sorted by current price (lowest first), then by recent positive feedback (highest first). <br> <br> Only returned when you specify Items in IncludeSelector, and the product has matching items that are currently active on Half.com.
	 * @var EbayShoppingTypeSimpleItemArrayType
	 */
	public $ItemArray;
	/**
	 * The ReviewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of reviews that are available for this product on the Half.com Web site. This can be greater than the number of reviews returned by FindProducts. In a future release, we will provide the capability to retrieve details about reviews. Always returned when Product is returned.
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The MinPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum price for all active items listed under this product. This field is only returned when QueryKeywords is specified in the request.
	 * @var EbayShoppingTypeAmountType
	 */
	public $MinPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Title
	 * @param anyURI DetailsURL
	 * @param anyURI StockPhotoURL
	 * @param EbayShoppingTypeShippingCostSummaryType ShippingCostSummary
	 * @param boolean DisplayStockPhotos
	 * @param int ItemCount
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param string DomainName
	 * @param EbayShoppingTypeNameValueListArrayType ItemSpecifics
	 * @param EbayShoppingTypeSimpleItemArrayType ItemArray
	 * @param int ReviewCount
	 * @param EbayShoppingTypeAmountType MinPrice
	 * @param DOMDocument any
	 * @return EbayShoppingTypeHalfCatalogProductType
	 */
	public function __construct($_Title = null,$_DetailsURL = null,$_StockPhotoURL = null,$_ShippingCostSummary = null,$_DisplayStockPhotos = null,$_ItemCount = null,$_ProductID = null,$_DomainName = null,$_ItemSpecifics = null,$_ItemArray = null,$_ReviewCount = null,$_MinPrice = null,$_any = null)
	{
		parent::__construct(array('Title'=>$_Title,'DetailsURL'=>$_DetailsURL,'StockPhotoURL'=>$_StockPhotoURL,'ShippingCostSummary'=>$_ShippingCostSummary,'DisplayStockPhotos'=>$_DisplayStockPhotos,'ItemCount'=>$_ItemCount,'ProductID'=>$_ProductID,'DomainName'=>$_DomainName,'ItemSpecifics'=>$_ItemSpecifics,'ItemArray'=>$_ItemArray,'ReviewCount'=>$_ReviewCount,'MinPrice'=>$_MinPrice,'any'=>$_any));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set DetailsURL
	 * @param anyURI DetailsURL
	 * @return anyURI
	 */
	public function setDetailsURL($_DetailsURL)
	{
		return ($this->DetailsURL = $_DetailsURL);
	}
	/**
	 * Get DetailsURL
	 * @return anyURI
	 */
	public function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * Set StockPhotoURL
	 * @param anyURI StockPhotoURL
	 * @return anyURI
	 */
	public function setStockPhotoURL($_StockPhotoURL)
	{
		return ($this->StockPhotoURL = $_StockPhotoURL);
	}
	/**
	 * Get StockPhotoURL
	 * @return anyURI
	 */
	public function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * Set ShippingCostSummary
	 * @param ShippingCostSummaryType ShippingCostSummary
	 * @return ShippingCostSummaryType
	 */
	public function setShippingCostSummary($_ShippingCostSummary)
	{
		return ($this->ShippingCostSummary = $_ShippingCostSummary);
	}
	/**
	 * Get ShippingCostSummary
	 * @return EbayShoppingTypeShippingCostSummaryType
	 */
	public function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
	}
	/**
	 * Set DisplayStockPhotos
	 * @param boolean DisplayStockPhotos
	 * @return boolean
	 */
	public function setDisplayStockPhotos($_DisplayStockPhotos)
	{
		return ($this->DisplayStockPhotos = $_DisplayStockPhotos);
	}
	/**
	 * Get DisplayStockPhotos
	 * @return boolean
	 */
	public function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * Set ItemCount
	 * @param int ItemCount
	 * @return int
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return int
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
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
	 * Set ItemSpecifics
	 * @param NameValueListArrayType ItemSpecifics
	 * @return NameValueListArrayType
	 */
	public function setItemSpecifics($_ItemSpecifics)
	{
		return ($this->ItemSpecifics = $_ItemSpecifics);
	}
	/**
	 * Get ItemSpecifics
	 * @return EbayShoppingTypeNameValueListArrayType
	 */
	public function getItemSpecifics()
	{
		return $this->ItemSpecifics;
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
	 * Set ReviewCount
	 * @param int ReviewCount
	 * @return int
	 */
	public function setReviewCount($_ReviewCount)
	{
		return ($this->ReviewCount = $_ReviewCount);
	}
	/**
	 * Get ReviewCount
	 * @return int
	 */
	public function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * Set MinPrice
	 * @param AmountType MinPrice
	 * @return AmountType
	 */
	public function setMinPrice($_MinPrice)
	{
		return ($this->MinPrice = $_MinPrice);
	}
	/**
	 * Get MinPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getMinPrice()
	{
		return $this->MinPrice;
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