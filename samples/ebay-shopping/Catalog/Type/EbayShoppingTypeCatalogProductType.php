<?php
/**
 * Class file for EbayShoppingTypeCatalogProductType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeCatalogProductType
 * Documentation : Information about an eBay catalog product.
 * @date 05/07/2012
 */
class EbayShoppingTypeCatalogProductType extends EbayShoppingWsdlClass
{
	/**
	 * The DomainName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the domain in which the product was found. If the product is mapped to multiple domains, eBay returns the most applicable domain (as determined by eBay). Always returned when Product is returned.
	 * @var string
	 */
	public $DomainName;
	/**
	 * The DetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the eBay Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product. This is usually always returned when Product is returned, but it may be safest to check for the existence of this field.
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The DisplayStockPhotos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, your application can attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not necessarily applicable or available. An application with a graphical user interface can use this flag to determine when to hide customized stock photo widgets. Always returned when Product is returned.
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The eBay or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of listings on the requested eBay site that use stock information from this catalog product. This value can be greater than the number of listings returned in ItemArray. To retrieve more listings, use the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a>. Only returned when you search by ProductID (and you pass Items or Details in IncludeSelector).
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of name/value pairs that are included in the product's pre-filled Item Specifics. These indicate common aspects or characteristics of the product, such as Publisher (for a book). Also see ProductID for ISBN, UPC, or EAN values, if applicable. This is usually returned. (We are not aware of any cases in which this node is not be returned. However, it may be safest to check for the existence of this node.)
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The ReviewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of reviews that are available for this product on the eBay Web site. This can be greater than the number of reviews returned by FindProducts. In a future release, we will provide the capability to retrieve details about reviews. Always returned when Product is returned.
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The StockPhotoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it. Only returned if a URL is available for the product.
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the product, as specified in the catalog. Always returned when Product is returned.
	 * @var string
	 */
	public $Title;
	/**
	 * The ProductState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the product has changed or will soon change (usually due to a migration from one catalog to another catalog). Typically, this field is returned for up to 90 days for a given product. After that, the product either no longer returns this field or the product is no longer returned (depending on the state change). As of mid-2008, this data is primarily applicable to catalogs used by the US, Germany, Austria, and Switzerland sites. Other sites may undergo catalog changes in the future.
	 * @var EbayShoppingTypeProductStateCodeType
	 */
	public $ProductState;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string DomainName
	 * @param anyURI DetailsURL
	 * @param boolean DisplayStockPhotos
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param int ItemCount
	 * @param EbayShoppingTypeNameValueListArrayType ItemSpecifics
	 * @param int ReviewCount
	 * @param anyURI StockPhotoURL
	 * @param string Title
	 * @param EbayShoppingTypeProductStateCodeType ProductState
	 * @param DOMDocument any
	 * @return EbayShoppingTypeCatalogProductType
	 */
	public function __construct($_DomainName = null,$_DetailsURL = null,$_DisplayStockPhotos = null,$_ProductID = null,$_ItemCount = null,$_ItemSpecifics = null,$_ReviewCount = null,$_StockPhotoURL = null,$_Title = null,$_ProductState = null,$_any = null)
	{
		parent::__construct(array('DomainName'=>$_DomainName,'DetailsURL'=>$_DetailsURL,'DisplayStockPhotos'=>$_DisplayStockPhotos,'ProductID'=>$_ProductID,'ItemCount'=>$_ItemCount,'ItemSpecifics'=>$_ItemSpecifics,'ReviewCount'=>$_ReviewCount,'StockPhotoURL'=>$_StockPhotoURL,'Title'=>$_Title,'ProductState'=>$_ProductState,'any'=>$_any));
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
	 * Set ProductState
	 * @param ProductStateCodeType ProductState
	 * @return ProductStateCodeType
	 */
	public function setProductState($_ProductState)
	{
		return ($this->ProductState = EbayShoppingTypeProductStateCodeType::valueIsValid($_ProductState)?$_ProductState:null);
	}
	/**
	 * Get ProductState
	 * @return EbayShoppingTypeProductStateCodeType
	 */
	public function getProductState()
	{
		return $this->ProductState;
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