<?php
/**
 * Class file for EbayTradingTypeCatalogProductType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCatalogProductType
 * Documentation : Information about an eBay catalog product.
 * @date 04/07/2012
 */
class EbayTradingTypeCatalogProductType extends EbayTradingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the product. Always returned when Product is returned.
	 * @var string
	 */
	public $Title;
	/**
	 * The DetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the eBay Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product.<br> <br> <span class="tablenote"><b>Note:</b> You can use the ProductMementoString parameter in this URL as the ProductID value in GetSearchResults requests. This parameter is a colon-delimited alphanumeric value. For an example of how to use this string, see the GetProducts samples in the eBay Web Services guide.</span>
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The StockPhotoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for a stock image (if any) that is associated with the eBay catalog product. The URL is for the image eBay usually displays in product search results (usually 70px tall). It may be helpful to calculate the dimensions of the photo programmatically before displaying it.
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The DisplayStockPhotos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, your application can attempt to display stock photos that are returned. If false, your application should not attempt to display any stock photos that are returned. This recommendation is useful for catalog data related to products like coins, where stock photos are not necessarily applicable or available. An application with a graphical user interface can use this flag to determine when to hide customized stock photo widgets.
	 * @var boolean
	 */
	public $DisplayStockPhotos;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of listings on the specified eBay site that use stock information from this catalog product. This value can be greater than the number of listings returned in ItemArray. To retrieve more listings, use GetSearchResults. Only returned when you use ExternalProductID or ProductReferenceID and you set IncludeItemArray to true.
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The ExternalProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ISBN, UPC, or EAN value that is associated with this eBay catalog product (if any). These values are only returned for products in "media" domains (Books, DVDs and Movies, Music, and Video Games). Products in other domains don't return this value (even if a UPC is available in the Item Specifics.) Please note that as of February 2007, GetProducts may temporarily return two ExternalProductID nodes for ISBN for some sites (one with a 13-digit value and one with a 10-digit value). This is a bug and it will be fixed in an upcoming release. Instead, one ExternalProductID node will be returned with an additional field. Do not code your application to expect multiple ExternalProductID nodes to be returned for ISBN values on an ongoing basis.
	 * @var EbayTradingTypeExternalProductIDType
	 */
	public $ExternalProductID;
	/**
	 * The ProductReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The numeric ID for the eBay catalog product. After selecting a product returned from a keyword query, pass this value in GetProducts to retrieve more information about that product.
	 * @var long
	 */
	public $ProductReferenceID;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric ID for the product's domain (characteristic set). When you use GetProducts by itself, this can be useful when you want to group product results by domain (e.g., all book products together). For a mapping of attribute set IDs to names, see the eBay Web Services guide. Alternatively, use GetCategory2CS to retrieve the mappings periodically (e.g., once a day) and store them locally. (We do not recommend using the product histogram, for this purpose.)
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of attribute and value pairs that are included in the product's pre-filled Item Specifics. Also see ExternalProductID for ISBN, UPC, or MPN values, if applicable. This is usually returned. (We are not aware of any cases in which this node is not be returned. However, it may be safest to check for the existence of this node.)
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The ReviewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of reviews that are available for this product on the eBay Web site. This can be greater than the number of reviews returned by GetProducts. See ReviewDetails.Review.URL for information about viewing more reviews.
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The ReviewDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The product's most helpful reviews, if any. The reviews are sorted by most helpful review (most votes) first. Only returned when you pass in ExternalProductID or ProductReferenceID and you set IncludeReviewDetails to true. Up to 20 of the reviews are returned. If more reviews are available, (that is, if ReviewCount is greater than 20), the user can look at additional reviews on the eBay Web site. See ReviewDetails.Review.URL for information about viewing more reviews.
	 * @var EbayTradingTypeReviewDetailsType
	 */
	public $ReviewDetails;
	/**
	 * The ProductState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the product has changed or will soon change (usually due to a migration from one catalog to another catalog). Typically, this field is returned for up to 90 days for a given product. After that, the product either no longer returns this field or the product is no longer returned (depending on the state change). <br><br> This data is primarily applicable to catalogs used by the US, Germany, Austria, and Switzerland sites. Other sites may undergo catalog changes in the future.
	 * @var EbayTradingTypeProductStateCodeType
	 */
	public $ProductState;
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
	 * @param boolean DisplayStockPhotos
	 * @param int ItemCount
	 * @param EbayTradingTypeExternalProductIDType ExternalProductID
	 * @param long ProductReferenceID
	 * @param int AttributeSetID
	 * @param EbayTradingTypeNameValueListArrayType ItemSpecifics
	 * @param int ReviewCount
	 * @param EbayTradingTypeReviewDetailsType ReviewDetails
	 * @param EbayTradingTypeProductStateCodeType ProductState
	 * @param DOMDocument any
	 * @return EbayTradingTypeCatalogProductType
	 */
	public function __construct($_Title = null,$_DetailsURL = null,$_StockPhotoURL = null,$_DisplayStockPhotos = null,$_ItemCount = null,$_ExternalProductID = null,$_ProductReferenceID = null,$_AttributeSetID = null,$_ItemSpecifics = null,$_ReviewCount = null,$_ReviewDetails = null,$_ProductState = null,$_any = null)
	{
		parent::__construct(array('Title'=>$_Title,'DetailsURL'=>$_DetailsURL,'StockPhotoURL'=>$_StockPhotoURL,'DisplayStockPhotos'=>$_DisplayStockPhotos,'ItemCount'=>$_ItemCount,'ExternalProductID'=>$_ExternalProductID,'ProductReferenceID'=>$_ProductReferenceID,'AttributeSetID'=>$_AttributeSetID,'ItemSpecifics'=>$_ItemSpecifics,'ReviewCount'=>$_ReviewCount,'ReviewDetails'=>$_ReviewDetails,'ProductState'=>$_ProductState,'any'=>$_any));
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
	 * Set ProductReferenceID
	 * @param long ProductReferenceID
	 * @return long
	 */
	public function setProductReferenceID($_ProductReferenceID)
	{
		return ($this->ProductReferenceID = $_ProductReferenceID);
	}
	/**
	 * Get ProductReferenceID
	 * @return long
	 */
	public function getProductReferenceID()
	{
		return $this->ProductReferenceID;
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
	 * @return EbayTradingTypeNameValueListArrayType
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
	 * Set ReviewDetails
	 * @param ReviewDetailsType ReviewDetails
	 * @return ReviewDetailsType
	 */
	public function setReviewDetails($_ReviewDetails)
	{
		return ($this->ReviewDetails = $_ReviewDetails);
	}
	/**
	 * Get ReviewDetails
	 * @return EbayTradingTypeReviewDetailsType
	 */
	public function getReviewDetails()
	{
		return $this->ReviewDetails;
	}
	/**
	 * Set ProductState
	 * @param ProductStateCodeType ProductState
	 * @return ProductStateCodeType
	 */
	public function setProductState($_ProductState)
	{
		return ($this->ProductState = EbayTradingTypeProductStateCodeType::valueIsValid($_ProductState)?$_ProductState:null);
	}
	/**
	 * Get ProductState
	 * @return EbayTradingTypeProductStateCodeType
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