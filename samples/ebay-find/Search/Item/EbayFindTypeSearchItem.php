<?php
/**
 * Class file for EbayFindTypeSearchItem
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeSearchItem
 * Documentation : Container for the data of a single item that matches the search criteria.
 * @date 04/07/2012
 */
class EbayFindTypeSearchItem extends EbayFindWsdlClass
{
	/**
	 * The itemId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : The ID that uniquely identifies the item listing. eBay generates this ID when an item is listed. ID values are unique across all eBay sites.
	 * @var string
	 */
	public $itemId;
	/**
	 * The title
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : Name of the item as it appears in the listing title, or in search and browse results.
	 * @var string
	 */
	public $title;
	/**
	 * The globalId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The identifier for the site on which the item is listed. Returns a Global ID, which is a unique identifier that specifies the combination of the site, language, and territory. In other eBay APIs (such as the Shopping API), this value is know as the site ID.
	 * @var token
	 */
	public $globalId;
	/**
	 * The subtitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subtitle of the item. Only returned if the seller included a subtitle for the listing.
	 * @var string
	 */
	public $subtitle;
	/**
	 * The primaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about the first (or only) category in which the item is listed. Note that items can be listed in more than a single category.
	 * @var EbayFindTypeCategory
	 */
	public $primaryCategory;
	/**
	 * The secondaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about the second category in which the item is listed. This element is not returned if the seller did not specify a secondary category.
	 * @var EbayFindTypeCategory
	 */
	public $secondaryCategory;
	/**
	 * The isMultiVariationListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns true if the item is a multi-variation listing, otherwise it returns false.
	 * @var boolean
	 */
	public $isMultiVariationListing;
	/**
	 * The galleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the Gallery thumbnail image. Returned only if the seller uploaded images for the item or the item was listed using a product identifier.
	 * @var anyURI
	 */
	public $galleryURL;
	/**
	 * The galleryInfoContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains three URLs for item thumbnail images in standard sizes. Not returned if the item has no images. That is, if the item was not listed using a product identifier and the seller has not uploaded images, the container will not be returned, even when the outputSelector is set to GalleryInfo.
	 * @var EbayFindTypeGalleryInfoContainer
	 */
	public $galleryInfoContainer;
	/**
	 * The pictureURLSuperSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to a picture of the item that is 800x800 pixels in size.
	 * @var anyURI
	 */
	public $pictureURLSuperSize;
	/**
	 * The pictureURLLarge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to a picture of the item that is 400x400 pixels in size.
	 * @var anyURI
	 */
	public $pictureURLLarge;
	/**
	 * The viewItemURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL to view this specific listing on eBay. <br><br> The returned URL is optimized to support natural search. That is, the URL is designed to make items on eBay easier to find via popular internet search engines. The URL includes the item title along with other optimizations. <br><br> If you enabled affiliate tracking in the call, viewItemURL contains a string that includes affiliate tracking information. <br><br> <span class="tablenote"><strong>Note:</strong> eBay URLs returned in fields, such as <b class="con">viewItemURL</b>, are subject to syntax and other changes without notice. To avoid problems in your application when eBay alters the URL format, we advise you to avoid parsing eBay URLs programmatically. We strive to ensure that other fields in the response contain all the information that is encoded in the URL, and more. </span>
	 * @var anyURI
	 */
	public $viewItemURL;
	/**
	 * The charityId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identification number assigned by eBay to a registered non-profit charity organization.
	 * @var string
	 */
	public $charityId;
	/**
	 * The productId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the eBay catalog product with which the item was listed. An eBay catalog product consists of pre-filled Item Specifics, additional descriptive information, plus a stock photo (if available). These product details are used to pre-fill item information, which is used to describe the item and can also help surface the item in searches. <br><br> eBay supports the following types of product ID types: ISBN, UPC, EAN, and ReferenceID (ePID, also known as an eBay Product Reference ID). ReferenceID values are returned when available. A UPC, ISBN, or EAN product identifier will be returned only when a ReferenceID is not available. <br><br> This productId value can be used as input with findItemsByProduct to retrieve items that were listed with the specified eBay catalog product. <br><br> This field is only returned when a product was used to list the item.
	 * @var EbayFindTypeProductId
	 */
	public $productId;
	/**
	 * The paymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Identifies the payment method (or methods) the seller will accept for the item (such as PayPal). <br><br> <span class="tablenote"><strong>Note:</strong> If the seller accepts only PayPal, the buyer can still pay with a credit card. PayPal supports major credit cards. </span> Payment methods are not applicable to eBay Real Estate advertisement listings or other Classified Ad listing formats.
	 * @var token
	 */
	public $paymentMethod;
	/**
	 * The autoPay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the seller requires immediate payment for the item. If false (or not specified), immediate payment is not requested. Buyers must have a PayPal account to purchase items that require immediate payment. <br><br> A seller can choose to require immediate payment for Fixed Price and Buy It Now listings, including eBay Stores Inventory listings. If a Buy It Now item ends as an auction (that is, if the Buy It Now option is removed due to bids being placed on the listing), the immediate payment requirement does not apply. <br><br> <span class="tablenote"><strong>Note:</strong> The value of the AutoPay flag indicates the seller's stated preference only. It does not indicate whether the listing is still a candidate for purchase via immediate payment. For example, if a listing receives bids and no longer qualifies for immediate payment, the value of the AutoPay flag does not change. </span> <br> Only applicable to items listed on PayPal-enabled sites and in categories that support immediate payment.
	 * @var boolean
	 */
	public $autoPay;
	/**
	 * The postalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The postal code where the listed item is located. This field is returned only if a postal code has been specified by the seller. eBay proximity and local search behavior can use the combination of buyerPostalCode and postalCode values.
	 * @var string
	 */
	public $postalCode;
	/**
	 * The location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Physical location of the item, as specified by the seller. This gives a general indication from where the item will be shipped (or delivered).
	 * @var string
	 */
	public $location;
	/**
	 * The country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Two-letter ISO 3166 country code to indicate the country where the item is located (e.g., "US" for the United States or "GB" for the United Kingdom).
	 * @var token
	 */
	public $country;
	/**
	 * The storeInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the eBay store in which the item is listed. Only returned if the item is listed in a store and StoreInfo is specified in the outputSelector field in the request.
	 * @var EbayFindTypeStorefront
	 */
	public $storeInfo;
	/**
	 * The sellerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the item's seller. Only returned if SellerInfo is specified in the outputSelector field in the request.
	 * @var EbayFindTypeSellerInfo
	 */
	public $sellerInfo;
	/**
	 * The shippingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for data about a listing's shipping details.
	 * @var EbayFindTypeShippingInfo
	 */
	public $shippingInfo;
	/**
	 * The sellingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the item's selling status with regards to eBay's processing workflow.
	 * @var EbayFindTypeSellingStatus
	 */
	public $sellingStatus;
	/**
	 * The listingInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format type of the listing, such as online auction, fixed price, or advertisement.
	 * @var EbayFindTypeListingInfo
	 */
	public $listingInfo;
	/**
	 * The discountPriceInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns information on the item if it is listed as a discount price item by the seller.
	 * @var EbayFindTypeDiscountPriceInfo
	 */
	public $discountPriceInfo;
	/**
	 * The returnsAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is set to true if the seller accepts return of the item.
	 * @var boolean
	 */
	public $returnsAccepted;
	/**
	 * The galleryPlusPictureURL
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : URL for the Gallery Plus image. The size of Gallery Plus images (up to 500 pixels on the longest side) is bigger than the size of standard gallery images. In site search results, you can view the Gallery Plus image by hovering over or clicking the Enlarge link or magifying glass icon. This field is only returned when the seller has opted for the Gallery Plus option for the given item.
	 * @var anyURI
	 */
	public $galleryPlusPictureURL;
	/**
	 * The compatibility
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Starting in March 2010, parts compatibility will be supported in limited Parts & Accessories categories for eBay Motors in the Production environment. For these categories, a compatible application will always be a vehicle, which is specified by a combination of make, model, and year. Optionally, trim and engine data may also be specifed for a vehicle. <br><br> This field returns terms from the keywords in the request that match values in one of the item's compatible applications (vehicles). If the keywords match more than one compatible application for an item, the field returns "Two or more of your vehicles" to indicate multiple matches. <br><br> For example, keyword queries that contain vehicle details, such as make and model (e.g., Honda Accord), in addition to keywords for the part or accessory, will search through structured parts compatibility information for matching listings. If an item has a 2007 Honda Accord (any trim or engine) specified as a compatible application, and the item matches the part or accessory terms in the query, this field will return the matching terms from the query (i.e., Honda Accord). <br><br> Parts compatibility is an eBay feature that uses structured data to associate compatible assemblies with parts and accessories listed on eBay. For example, parts compatibility enables sellers to specify accurately and comprehensively the vehicles on which a side mirror or a rim fit. Parts compatibility improves search relevancy and frees up item titles and descriptions for more useful descriptions of the part.
	 * @var string
	 */
	public $compatibility;
	/**
	 * The distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The distance that the item is from the buyer, calculated using buyerPostalCode. The unit for distance varies by site, and is either miles or kilometers. If the country whose site you are searching uses kilometers to measure distance (for example, India/EBAY-IN), the unit is kilometers. If the site is either the US or UK, the distance unit is miles. <br><br> This value is only returned for distance-based searches. You must specify a buyerPostalCode and either sort by Distance, or use a combination of the MaxDistance LocalSearch itemFilters.
	 * @var EbayFindTypeDistance
	 */
	public $distance;
	/**
	 * The condition
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the item's condition. Only returned when the seller listed the item with an item condition.<br> <br> Different categories can support different condition choices. If a listing is in two categories, the seller uses condition details that are supported in the primary category. Thus, even if two nearly identical items are found in the same category search, they could support different condition details if they have different primary categories. For example, suppose Seller A lists a concert T-shirt in clothing, and also in music accessories as the secondary category. Seller B lists an identical shirt in music accessories only. If you search against the music accessories category, you will find both items, but seller A's shirt may have condition details that are slightly different from seller B's shirt, because the listings have different primary categories.
	 * @var EbayFindTypeCondition
	 */
	public $condition;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string itemId
	 * @param string title
	 * @param token globalId
	 * @param string subtitle
	 * @param EbayFindTypeCategory primaryCategory
	 * @param EbayFindTypeCategory secondaryCategory
	 * @param boolean isMultiVariationListing
	 * @param anyURI galleryURL
	 * @param EbayFindTypeGalleryInfoContainer galleryInfoContainer
	 * @param anyURI pictureURLSuperSize
	 * @param anyURI pictureURLLarge
	 * @param anyURI viewItemURL
	 * @param string charityId
	 * @param EbayFindTypeProductId productId
	 * @param token paymentMethod
	 * @param boolean autoPay
	 * @param string postalCode
	 * @param string location
	 * @param token country
	 * @param EbayFindTypeStorefront storeInfo
	 * @param EbayFindTypeSellerInfo sellerInfo
	 * @param EbayFindTypeShippingInfo shippingInfo
	 * @param EbayFindTypeSellingStatus sellingStatus
	 * @param EbayFindTypeListingInfo listingInfo
	 * @param EbayFindTypeDiscountPriceInfo discountPriceInfo
	 * @param boolean returnsAccepted
	 * @param anyURI galleryPlusPictureURL
	 * @param string compatibility
	 * @param EbayFindTypeDistance distance
	 * @param EbayFindTypeCondition condition
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeSearchItem
	 */
	public function __construct($_itemId,$_title,$_globalId = null,$_subtitle = null,$_primaryCategory = null,$_secondaryCategory = null,$_isMultiVariationListing = null,$_galleryURL = null,$_galleryInfoContainer = null,$_pictureURLSuperSize = null,$_pictureURLLarge = null,$_viewItemURL = null,$_charityId = null,$_productId = null,$_paymentMethod = null,$_autoPay = null,$_postalCode = null,$_location = null,$_country = null,$_storeInfo = null,$_sellerInfo = null,$_shippingInfo = null,$_sellingStatus = null,$_listingInfo = null,$_discountPriceInfo = null,$_returnsAccepted = null,$_galleryPlusPictureURL = null,$_compatibility = null,$_distance = null,$_condition = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('itemId'=>$_itemId,'title'=>$_title,'globalId'=>$_globalId,'subtitle'=>$_subtitle,'primaryCategory'=>$_primaryCategory,'secondaryCategory'=>$_secondaryCategory,'isMultiVariationListing'=>$_isMultiVariationListing,'galleryURL'=>$_galleryURL,'galleryInfoContainer'=>$_galleryInfoContainer,'pictureURLSuperSize'=>$_pictureURLSuperSize,'pictureURLLarge'=>$_pictureURLLarge,'viewItemURL'=>$_viewItemURL,'charityId'=>$_charityId,'productId'=>$_productId,'paymentMethod'=>$_paymentMethod,'autoPay'=>$_autoPay,'postalCode'=>$_postalCode,'location'=>$_location,'country'=>$_country,'storeInfo'=>$_storeInfo,'sellerInfo'=>$_sellerInfo,'shippingInfo'=>$_shippingInfo,'sellingStatus'=>$_sellingStatus,'listingInfo'=>$_listingInfo,'discountPriceInfo'=>$_discountPriceInfo,'returnsAccepted'=>$_returnsAccepted,'galleryPlusPictureURL'=>$_galleryPlusPictureURL,'compatibility'=>$_compatibility,'distance'=>$_distance,'condition'=>$_condition,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set itemId
	 * @param string itemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set globalId
	 * @param token globalId
	 * @return token
	 */
	public function setGlobalId($_globalId)
	{
		return ($this->globalId = $_globalId);
	}
	/**
	 * Get globalId
	 * @return token
	 */
	public function getGlobalId()
	{
		return $this->globalId;
	}
	/**
	 * Set subtitle
	 * @param string subtitle
	 * @return string
	 */
	public function setSubtitle($_subtitle)
	{
		return ($this->subtitle = $_subtitle);
	}
	/**
	 * Get subtitle
	 * @return string
	 */
	public function getSubtitle()
	{
		return $this->subtitle;
	}
	/**
	 * Set primaryCategory
	 * @param Category primaryCategory
	 * @return Category
	 */
	public function setPrimaryCategory($_primaryCategory)
	{
		return ($this->primaryCategory = $_primaryCategory);
	}
	/**
	 * Get primaryCategory
	 * @return EbayFindTypeCategory
	 */
	public function getPrimaryCategory()
	{
		return $this->primaryCategory;
	}
	/**
	 * Set secondaryCategory
	 * @param Category secondaryCategory
	 * @return Category
	 */
	public function setSecondaryCategory($_secondaryCategory)
	{
		return ($this->secondaryCategory = $_secondaryCategory);
	}
	/**
	 * Get secondaryCategory
	 * @return EbayFindTypeCategory
	 */
	public function getSecondaryCategory()
	{
		return $this->secondaryCategory;
	}
	/**
	 * Set isMultiVariationListing
	 * @param boolean isMultiVariationListing
	 * @return boolean
	 */
	public function setIsMultiVariationListing($_isMultiVariationListing)
	{
		return ($this->isMultiVariationListing = $_isMultiVariationListing);
	}
	/**
	 * Get isMultiVariationListing
	 * @return boolean
	 */
	public function getIsMultiVariationListing()
	{
		return $this->isMultiVariationListing;
	}
	/**
	 * Set galleryURL
	 * @param anyURI galleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_galleryURL)
	{
		return ($this->galleryURL = $_galleryURL);
	}
	/**
	 * Get galleryURL
	 * @return anyURI
	 */
	public function getGalleryURL()
	{
		return $this->galleryURL;
	}
	/**
	 * Set galleryInfoContainer
	 * @param GalleryInfoContainer galleryInfoContainer
	 * @return GalleryInfoContainer
	 */
	public function setGalleryInfoContainer($_galleryInfoContainer)
	{
		return ($this->galleryInfoContainer = $_galleryInfoContainer);
	}
	/**
	 * Get galleryInfoContainer
	 * @return EbayFindTypeGalleryInfoContainer
	 */
	public function getGalleryInfoContainer()
	{
		return $this->galleryInfoContainer;
	}
	/**
	 * Set pictureURLSuperSize
	 * @param anyURI pictureURLSuperSize
	 * @return anyURI
	 */
	public function setPictureURLSuperSize($_pictureURLSuperSize)
	{
		return ($this->pictureURLSuperSize = $_pictureURLSuperSize);
	}
	/**
	 * Get pictureURLSuperSize
	 * @return anyURI
	 */
	public function getPictureURLSuperSize()
	{
		return $this->pictureURLSuperSize;
	}
	/**
	 * Set pictureURLLarge
	 * @param anyURI pictureURLLarge
	 * @return anyURI
	 */
	public function setPictureURLLarge($_pictureURLLarge)
	{
		return ($this->pictureURLLarge = $_pictureURLLarge);
	}
	/**
	 * Get pictureURLLarge
	 * @return anyURI
	 */
	public function getPictureURLLarge()
	{
		return $this->pictureURLLarge;
	}
	/**
	 * Set viewItemURL
	 * @param anyURI viewItemURL
	 * @return anyURI
	 */
	public function setViewItemURL($_viewItemURL)
	{
		return ($this->viewItemURL = $_viewItemURL);
	}
	/**
	 * Get viewItemURL
	 * @return anyURI
	 */
	public function getViewItemURL()
	{
		return $this->viewItemURL;
	}
	/**
	 * Set charityId
	 * @param string charityId
	 * @return string
	 */
	public function setCharityId($_charityId)
	{
		return ($this->charityId = $_charityId);
	}
	/**
	 * Get charityId
	 * @return string
	 */
	public function getCharityId()
	{
		return $this->charityId;
	}
	/**
	 * Set productId
	 * @param ProductId productId
	 * @return ProductId
	 */
	public function setProductId($_productId)
	{
		return ($this->productId = $_productId);
	}
	/**
	 * Get productId
	 * @return EbayFindTypeProductId
	 */
	public function getProductId()
	{
		return $this->productId;
	}
	/**
	 * Set paymentMethod
	 * @param token paymentMethod
	 * @return token
	 */
	public function setPaymentMethod($_paymentMethod)
	{
		return ($this->paymentMethod = $_paymentMethod);
	}
	/**
	 * Get paymentMethod
	 * @return token
	 */
	public function getPaymentMethod()
	{
		return $this->paymentMethod;
	}
	/**
	 * Set autoPay
	 * @param boolean autoPay
	 * @return boolean
	 */
	public function setAutoPay($_autoPay)
	{
		return ($this->autoPay = $_autoPay);
	}
	/**
	 * Get autoPay
	 * @return boolean
	 */
	public function getAutoPay()
	{
		return $this->autoPay;
	}
	/**
	 * Set postalCode
	 * @param string postalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->postalCode = $_postalCode);
	}
	/**
	 * Get postalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}
	/**
	 * Set location
	 * @param string location
	 * @return string
	 */
	public function setLocation($_location)
	{
		return ($this->location = $_location);
	}
	/**
	 * Get location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->location;
	}
	/**
	 * Set country
	 * @param token country
	 * @return token
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return token
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set storeInfo
	 * @param Storefront storeInfo
	 * @return Storefront
	 */
	public function setStoreInfo($_storeInfo)
	{
		return ($this->storeInfo = $_storeInfo);
	}
	/**
	 * Get storeInfo
	 * @return EbayFindTypeStorefront
	 */
	public function getStoreInfo()
	{
		return $this->storeInfo;
	}
	/**
	 * Set sellerInfo
	 * @param SellerInfo sellerInfo
	 * @return SellerInfo
	 */
	public function setSellerInfo($_sellerInfo)
	{
		return ($this->sellerInfo = $_sellerInfo);
	}
	/**
	 * Get sellerInfo
	 * @return EbayFindTypeSellerInfo
	 */
	public function getSellerInfo()
	{
		return $this->sellerInfo;
	}
	/**
	 * Set shippingInfo
	 * @param ShippingInfo shippingInfo
	 * @return ShippingInfo
	 */
	public function setShippingInfo($_shippingInfo)
	{
		return ($this->shippingInfo = $_shippingInfo);
	}
	/**
	 * Get shippingInfo
	 * @return EbayFindTypeShippingInfo
	 */
	public function getShippingInfo()
	{
		return $this->shippingInfo;
	}
	/**
	 * Set sellingStatus
	 * @param SellingStatus sellingStatus
	 * @return SellingStatus
	 */
	public function setSellingStatus($_sellingStatus)
	{
		return ($this->sellingStatus = $_sellingStatus);
	}
	/**
	 * Get sellingStatus
	 * @return EbayFindTypeSellingStatus
	 */
	public function getSellingStatus()
	{
		return $this->sellingStatus;
	}
	/**
	 * Set listingInfo
	 * @param ListingInfo listingInfo
	 * @return ListingInfo
	 */
	public function setListingInfo($_listingInfo)
	{
		return ($this->listingInfo = $_listingInfo);
	}
	/**
	 * Get listingInfo
	 * @return EbayFindTypeListingInfo
	 */
	public function getListingInfo()
	{
		return $this->listingInfo;
	}
	/**
	 * Set discountPriceInfo
	 * @param DiscountPriceInfo discountPriceInfo
	 * @return DiscountPriceInfo
	 */
	public function setDiscountPriceInfo($_discountPriceInfo)
	{
		return ($this->discountPriceInfo = $_discountPriceInfo);
	}
	/**
	 * Get discountPriceInfo
	 * @return EbayFindTypeDiscountPriceInfo
	 */
	public function getDiscountPriceInfo()
	{
		return $this->discountPriceInfo;
	}
	/**
	 * Set returnsAccepted
	 * @param boolean returnsAccepted
	 * @return boolean
	 */
	public function setReturnsAccepted($_returnsAccepted)
	{
		return ($this->returnsAccepted = $_returnsAccepted);
	}
	/**
	 * Get returnsAccepted
	 * @return boolean
	 */
	public function getReturnsAccepted()
	{
		return $this->returnsAccepted;
	}
	/**
	 * Set galleryPlusPictureURL
	 * @param anyURI galleryPlusPictureURL
	 * @return anyURI
	 */
	public function setGalleryPlusPictureURL($_galleryPlusPictureURL)
	{
		return ($this->galleryPlusPictureURL = $_galleryPlusPictureURL);
	}
	/**
	 * Get galleryPlusPictureURL
	 * @return anyURI
	 */
	public function getGalleryPlusPictureURL()
	{
		return $this->galleryPlusPictureURL;
	}
	/**
	 * Set compatibility
	 * @param string compatibility
	 * @return string
	 */
	public function setCompatibility($_compatibility)
	{
		return ($this->compatibility = $_compatibility);
	}
	/**
	 * Get compatibility
	 * @return string
	 */
	public function getCompatibility()
	{
		return $this->compatibility;
	}
	/**
	 * Set distance
	 * @param Distance distance
	 * @return Distance
	 */
	public function setDistance($_distance)
	{
		return ($this->distance = $_distance);
	}
	/**
	 * Get distance
	 * @return EbayFindTypeDistance
	 */
	public function getDistance()
	{
		return $this->distance;
	}
	/**
	 * Set condition
	 * @param Condition condition
	 * @return Condition
	 */
	public function setCondition($_condition)
	{
		return ($this->condition = $_condition);
	}
	/**
	 * Get condition
	 * @return EbayFindTypeCondition
	 */
	public function getCondition()
	{
		return $this->condition;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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