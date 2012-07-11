<?php
/**
 * Class file for EbayTradingTypeProductListingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductListingDetailsType
 * Documentation : Contains product information that can be included in a listing. Applicable for listings that use eBay's Pre-filled Item Information feature. See the Developer's Guide for details on working with Pre-filled Item Information.
 * @date 04/07/2012
 */
class EbayTradingTypeProductListingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay's unique identifier for a specific version of a product. This is the long alphanumeric ID that is returned from GetProductSearchResults and related calls. See the Trading API Guide for information about finding this type of product ID. (For the shorter product ID (ePID) value that is displayed on the eBay Web site, see ProductReferenceID instead.)<br> <br> If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category).<br> <br> In item-listing requests, if you pass in an old product ID, eBay lists the item with the latest version of the product and the latest product ID, and the call returns a warning indicating that the data has changed.<br> <br> Some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products in a request, the call may return the product with a warning, or it may fail with an error if the product has been deleted.
	 * @var string
	 */
	public $ProductID;
	/**
	 * The IncludeStockPhotoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the item listing includes the stock photo. To use an eBay stock photo in an item listing, set IncludeStockPhotoURL to true. If a stock photo is available, it is used at the top of the View Item page and in the Item Specifics section of the listing. If you also include Item.PictureDetails.PictureURL, the stock photo only appears in the Item Specifics section of the listing. Other pictures you specify by using Item.PictureDetails.PictureURL appear in a separate section of the listing. If you use Item.ExternalProductID instead of Item.ProductListingDetails, eBay sets IncludeStockPhotoURL to true (and you cannot set it to false). In GetItem, the URL of the stock photo will be returned in StockPhotoURL. If you set IncludeStockPhotoURL to false, the stock photo does not appear in the listing at all.<br> <br> <span class="tablenote"><b>Note:</b> The following sites offer free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On these sites, eBay selects a Gallery thumbnail from image URLs included in the request (i.e. either GalleryURL or the first PictureURL), using selection rules that consider which of these URLs has been specified and whether an eBay stock photo exists for the item. Also, eBay selects an image regardless of whether you have specified either GalleryType or GalleryURL. A Gallery fee will only apply if you have set GalleryType to Plus or Featured (as basic Gallery is free).<br> <br> Along with these changes, IncludeStockPhotoURL will be used in the request. In some cases, if IncludeStockPhotoURL is set to false, no image will be generated for the Gallery. A common example of this occurrence is when only GalleryURL has been set in the request (i.e., no PictureURL elements are defined). In this case, eBay will not use a stock photo, even if it is available. See "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide for complete information. </span> <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $IncludeStockPhotoURL;
	/**
	 * The IncludePrefilledItemInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, specifies that the listing should include additional information about the product, such as a publisher's description or film credits. Such information is hosted through the eBay site and cannot be edited. If true, Item.Description is optional in item-listing requests. <br><br> <b>For GetItem and related calls</b>: The eBay site shows the catalog product description in the product details section of a listing. You cannot download this pre-filled description text via the API. To retrieve a URL for the catalog product details page, see DetailsURL in GetProductSearchResults, GetProductFamilyMembers, or GetProductSellingPages. Or see DetailsURL in FindProducts in the Shopping API (which may be easier to use if your application doesn't support eBay Attributes).
	 * @var boolean
	 */
	public $IncludePrefilledItemInformation;
	/**
	 * The UseStockPhotoURLAsGallery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the stock photo for an item (if available) is used as the gallery thumbnail. When listing an item, IncludeStockPhotoURL must also be true and Item.PictureDetails.GalleryType must be passed in with a value of Gallery or Gallery Featured (but not both). Passing in Item.PictureDetails.GalleryURL takes precedence over UseStockPhotoURLAsGallery. See the eBay Trading API guide for additional validation rules for pictures. <br> <br> <span class="tablenote"><b>Note:</b> The following sites offer free Gallery: US (site ID 0), the Parts & Accessories Category on US Motors (site ID 100), CA (site ID 2), CAFR (site ID 210), ES (site ID 186), FR (site ID 71), IT (site ID 101),and NL (site ID 146). <br><br> On these sites, eBay selects a Gallery thumbnail from image URLs included in the request (i.e. either GalleryURL or the first PictureURL), using selection rules that consider which of these URLs has been specified and whether an eBay stock photo exists for the item. Also, eBay selects an image regardless of whether you have specified either GalleryType or GalleryURL. A Gallery fee will only apply if you have set GalleryType to Plus or Featured (as basic Gallery is free).<br> <br> Along with these changes, UseStockPhotoURLAsGallery will be used in the request. In some cases, if UseStockPhotoURLAsGallery is set to false, no image will be generated for the Gallery. A common example of this occurrence is when only GalleryURL has been set in the request (i.e., no PictureURL elements are defined). In this case, eBay will not use a stock photo, even if it is available. See "Using Gallery Features on Sites with Free Gallery" in the eBay Web Services Guide for complete information. </span> <br>
	 * @var boolean
	 */
	public $UseStockPhotoURLAsGallery;
	/**
	 * The StockPhotoURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for a standard image (if any) that is associated with the product. A seller includes the stock photo in the listing by setting IncludeStockPhotoURL.
	 * @var anyURI
	 */
	public $StockPhotoURL;
	/**
	 * The Copyright
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Copyright statement indicating the source of the product information. This information will be included in the listing with Pre-filled Item Information. Your application should also display the copyright statement when rendering the Pre-filled Item Information. If more than one copyright statement is applicable, they can be presented to the user in alphabetical order. Returned as HTML. Output only.
	 * @var string
	 */
	public $Copyright;
	/**
	 * The ProductReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay's short global reference ID for a catalog product. On the eBay Web site, this is known as the "ePID" or "Product ID". This type of product ID is a fixed reference to a product (regardless of version). Multiple (versioned) ProductID values can be associated with a single product reference ID. You can find product reference IDs for products by using GetProducts (or FindProducts in the Shopping API). You can also find the product ID on eBay's Web site (a numeric value prefixed with "EPID"). You can pass the value with or without the "EPID" prefix; for example "EPID228742" or "228742" (without quotes). <br><br> If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category). <br><br> Some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products in a request, the call may return the product with a warning, or it may return an error if the product has been deleted.
	 * @var string
	 */
	public $ProductReferenceID;
	/**
	 * The DetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for eBay's product details page, which contains optional information about the product (such as a movie's description or film credits). This information is hosted through the eBay Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link so that end users can view additional descriptive details about the product.<br>
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The ProductDetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for eBay's product details page, which contains optional information about the product (such as a movie's description or film credits). This information is hosted through the eBay Web site and it cannot be edited. Portions of the content are protected by copyright. Applications can include this URL as a link so that end users can view additional descriptive details about the product.
	 * @var anyURI
	 */
	public $ProductDetailsURL;
	/**
	 * The ReturnSearchResultOnDuplicates
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates what eBay should do if more than one product matches the external product ID (ISBN, UPC, EAN, BrandMPN, or TicketListingDetails). Also see UseFirstProduct as an alternative.<br> <br> If true and more than one match is found, the call fails and the response returns an error and all matching ProductID values. This lets you choose one of the ProductIDs to pass in instead. If false and more than one match is found, the call fails and the response includes an error but does not return the matching ProductID values. (This flag has no effect when only one match is found.)
	 * @var boolean
	 */
	public $ReturnSearchResultOnDuplicates;
	/**
	 * The ListIfNoProduct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates what eBay should do if no product match has been found. If no product match was found and ListIfNoProduct is true, the item is listed without product information. (By default, eBay attempts to list the item with product information.)<br> <br> <span class="tablenote"><b>Note:</b> If you omit PrimaryCategory and no product match is found, the listing will fail because eBay won't be able to determine a category without a product ID. </span>
	 * @var boolean
	 */
	public $ListIfNoProduct;
	/**
	 * The GTIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A universal format for identifying products. GTIN is a unique 8, 12, 13, or 14-digit identifier that some external catalogs use instead of ISBN, UPC, EAN, or other values. When you pass in GTIN, eBay attempts to map the value to an ISBN, UPC, or EAN. When you know that a value is an ISBN, UPC, or EAN, we recommend that you use those fields directly instead of GTIN, for better performance and accuracy.<br> <br> Only used to match catalog products when creating listings. (In some categories, eBay may also copy the ISBN, UPC, or EAN to the listing's item specifics. The GTIN is not stored.)
	 * @var string
	 */
	public $GTIN;
	/**
	 * The ISBN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ISBN is a unique identifer for books (an international standard). Specify a 10 or 13-character ISBN. If you specify the 13-character ISBN, the value must begin with either 978 pr 979. If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category).<br> <br> Only used to match catalog products when creating listings. (In some categories, eBay may also copy the ISBN, UPC, or EAN to the listing's item specifics.)
	 * @var string
	 */
	public $ISBN;
	/**
	 * The UPC
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : UPC is a unique, 12-character identifier that many industries use to identify products. <br><br> If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category). <br> <br> Only used to match catalog products when creating listings. (In some categories, eBay may also copy the ISBN, UPC, or EAN to the listing's item specifics.)
	 * @var string
	 */
	public $UPC;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : EAN is a unique 8 or 13 digit identifier that many industries (such as book publishers) use to identify products. If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category).<br> <br> Only used to match catalog products when creating listings. (In some categories, eBay may also copy the ISBN, UPC, or EAN to the listing's item specifics.)
	 * @var string
	 */
	public $EAN;
	/**
	 * The BrandMPN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The combination of Brand and MPN (manufacturer part number) can be used as a unique identifier for a product. Please specify both Brand and MPN to ensure a unique product match.<br> <br> Only used to match catalog products when creating listings (not for buy-side searching).
	 * @var EbayTradingTypeBrandMPNType
	 */
	public $BrandMPN;
	/**
	 * The TicketListingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Only applicable when you are listing event tickets. Please note that the US eBay site and other sites may also require you to specify additional Item Specifics by using AttributeSetArray. This may depend on the location of the event. See the eBay Trading API Guide for more information about how to specify and troubleshoot these values.<br> <br> Only used to match catalog products when creating listings (not for buy-side searching).
	 * @var EbayTradingTypeTicketListingDetailsType
	 */
	public $TicketListingDetails;
	/**
	 * The UseFirstProduct
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates what eBay should do if more than one product matches the external product ID (ISBN, UPC, EAN, BrandMPN, or TicketListingDetails). Also see ReturnSearchResultOnDuplicates as an alternative. If more than one product match was found and UseFirstProduct is true, item will be listed with first product information. If false, the rules for ReturnSearchResultOnDuplicates are used.
	 * @var boolean
	 */
	public $UseFirstProduct;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ProductID
	 * @param boolean IncludeStockPhotoURL
	 * @param boolean IncludePrefilledItemInformation
	 * @param boolean UseStockPhotoURLAsGallery
	 * @param anyURI StockPhotoURL
	 * @param string Copyright
	 * @param string ProductReferenceID
	 * @param anyURI DetailsURL
	 * @param anyURI ProductDetailsURL
	 * @param boolean ReturnSearchResultOnDuplicates
	 * @param boolean ListIfNoProduct
	 * @param string GTIN
	 * @param string ISBN
	 * @param string UPC
	 * @param string EAN
	 * @param EbayTradingTypeBrandMPNType BrandMPN
	 * @param EbayTradingTypeTicketListingDetailsType TicketListingDetails
	 * @param boolean UseFirstProduct
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductListingDetailsType
	 */
	public function __construct($_ProductID = null,$_IncludeStockPhotoURL = null,$_IncludePrefilledItemInformation = null,$_UseStockPhotoURLAsGallery = null,$_StockPhotoURL = null,$_Copyright = null,$_ProductReferenceID = null,$_DetailsURL = null,$_ProductDetailsURL = null,$_ReturnSearchResultOnDuplicates = null,$_ListIfNoProduct = null,$_GTIN = null,$_ISBN = null,$_UPC = null,$_EAN = null,$_BrandMPN = null,$_TicketListingDetails = null,$_UseFirstProduct = null,$_any = null)
	{
		parent::__construct(array('ProductID'=>$_ProductID,'IncludeStockPhotoURL'=>$_IncludeStockPhotoURL,'IncludePrefilledItemInformation'=>$_IncludePrefilledItemInformation,'UseStockPhotoURLAsGallery'=>$_UseStockPhotoURLAsGallery,'StockPhotoURL'=>$_StockPhotoURL,'Copyright'=>$_Copyright,'ProductReferenceID'=>$_ProductReferenceID,'DetailsURL'=>$_DetailsURL,'ProductDetailsURL'=>$_ProductDetailsURL,'ReturnSearchResultOnDuplicates'=>$_ReturnSearchResultOnDuplicates,'ListIfNoProduct'=>$_ListIfNoProduct,'GTIN'=>$_GTIN,'ISBN'=>$_ISBN,'UPC'=>$_UPC,'EAN'=>$_EAN,'BrandMPN'=>$_BrandMPN,'TicketListingDetails'=>$_TicketListingDetails,'UseFirstProduct'=>$_UseFirstProduct,'any'=>$_any));
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
	 * Set IncludeStockPhotoURL
	 * @param boolean IncludeStockPhotoURL
	 * @return boolean
	 */
	public function setIncludeStockPhotoURL($_IncludeStockPhotoURL)
	{
		return ($this->IncludeStockPhotoURL = $_IncludeStockPhotoURL);
	}
	/**
	 * Get IncludeStockPhotoURL
	 * @return boolean
	 */
	public function getIncludeStockPhotoURL()
	{
		return $this->IncludeStockPhotoURL;
	}
	/**
	 * Set IncludePrefilledItemInformation
	 * @param boolean IncludePrefilledItemInformation
	 * @return boolean
	 */
	public function setIncludePrefilledItemInformation($_IncludePrefilledItemInformation)
	{
		return ($this->IncludePrefilledItemInformation = $_IncludePrefilledItemInformation);
	}
	/**
	 * Get IncludePrefilledItemInformation
	 * @return boolean
	 */
	public function getIncludePrefilledItemInformation()
	{
		return $this->IncludePrefilledItemInformation;
	}
	/**
	 * Set UseStockPhotoURLAsGallery
	 * @param boolean UseStockPhotoURLAsGallery
	 * @return boolean
	 */
	public function setUseStockPhotoURLAsGallery($_UseStockPhotoURLAsGallery)
	{
		return ($this->UseStockPhotoURLAsGallery = $_UseStockPhotoURLAsGallery);
	}
	/**
	 * Get UseStockPhotoURLAsGallery
	 * @return boolean
	 */
	public function getUseStockPhotoURLAsGallery()
	{
		return $this->UseStockPhotoURLAsGallery;
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
	 * Set Copyright
	 * @param string Copyright
	 * @return string
	 */
	public function setCopyright($_Copyright)
	{
		return ($this->Copyright = $_Copyright);
	}
	/**
	 * Get Copyright
	 * @return string
	 */
	public function getCopyright()
	{
		return $this->Copyright;
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
	 * Set ProductDetailsURL
	 * @param anyURI ProductDetailsURL
	 * @return anyURI
	 */
	public function setProductDetailsURL($_ProductDetailsURL)
	{
		return ($this->ProductDetailsURL = $_ProductDetailsURL);
	}
	/**
	 * Get ProductDetailsURL
	 * @return anyURI
	 */
	public function getProductDetailsURL()
	{
		return $this->ProductDetailsURL;
	}
	/**
	 * Set ReturnSearchResultOnDuplicates
	 * @param boolean ReturnSearchResultOnDuplicates
	 * @return boolean
	 */
	public function setReturnSearchResultOnDuplicates($_ReturnSearchResultOnDuplicates)
	{
		return ($this->ReturnSearchResultOnDuplicates = $_ReturnSearchResultOnDuplicates);
	}
	/**
	 * Get ReturnSearchResultOnDuplicates
	 * @return boolean
	 */
	public function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}
	/**
	 * Set ListIfNoProduct
	 * @param boolean ListIfNoProduct
	 * @return boolean
	 */
	public function setListIfNoProduct($_ListIfNoProduct)
	{
		return ($this->ListIfNoProduct = $_ListIfNoProduct);
	}
	/**
	 * Get ListIfNoProduct
	 * @return boolean
	 */
	public function getListIfNoProduct()
	{
		return $this->ListIfNoProduct;
	}
	/**
	 * Set GTIN
	 * @param string GTIN
	 * @return string
	 */
	public function setGTIN($_GTIN)
	{
		return ($this->GTIN = $_GTIN);
	}
	/**
	 * Get GTIN
	 * @return string
	 */
	public function getGTIN()
	{
		return $this->GTIN;
	}
	/**
	 * Set ISBN
	 * @param string ISBN
	 * @return string
	 */
	public function setISBN($_ISBN)
	{
		return ($this->ISBN = $_ISBN);
	}
	/**
	 * Get ISBN
	 * @return string
	 */
	public function getISBN()
	{
		return $this->ISBN;
	}
	/**
	 * Set UPC
	 * @param string UPC
	 * @return string
	 */
	public function setUPC($_UPC)
	{
		return ($this->UPC = $_UPC);
	}
	/**
	 * Get UPC
	 * @return string
	 */
	public function getUPC()
	{
		return $this->UPC;
	}
	/**
	 * Set EAN
	 * @param string EAN
	 * @return string
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return string
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set BrandMPN
	 * @param BrandMPNType BrandMPN
	 * @return BrandMPNType
	 */
	public function setBrandMPN($_BrandMPN)
	{
		return ($this->BrandMPN = $_BrandMPN);
	}
	/**
	 * Get BrandMPN
	 * @return EbayTradingTypeBrandMPNType
	 */
	public function getBrandMPN()
	{
		return $this->BrandMPN;
	}
	/**
	 * Set TicketListingDetails
	 * @param TicketListingDetailsType TicketListingDetails
	 * @return TicketListingDetailsType
	 */
	public function setTicketListingDetails($_TicketListingDetails)
	{
		return ($this->TicketListingDetails = $_TicketListingDetails);
	}
	/**
	 * Get TicketListingDetails
	 * @return EbayTradingTypeTicketListingDetailsType
	 */
	public function getTicketListingDetails()
	{
		return $this->TicketListingDetails;
	}
	/**
	 * Set UseFirstProduct
	 * @param boolean UseFirstProduct
	 * @return boolean
	 */
	public function setUseFirstProduct($_UseFirstProduct)
	{
		return ($this->UseFirstProduct = $_UseFirstProduct);
	}
	/**
	 * Get UseFirstProduct
	 * @return boolean
	 */
	public function getUseFirstProduct()
	{
		return $this->UseFirstProduct;
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