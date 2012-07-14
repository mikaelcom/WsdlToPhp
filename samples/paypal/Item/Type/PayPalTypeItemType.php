<?php
/**
 * Class file for PayPalTypeItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeItemType
 * @date 14/07/2012
 */
class PayPalTypeItemType extends PayPalWsdlClass
{
	/**
	 * The ApplicationData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns custom, application-specific data associated with the item. The data in this field is stored with the item in the items table at eBay, but is not used in any way by eBay. Use ApplicationData to store such special information as a part or SKU number. Maximum 32 characters in length.
	 * @var string
	 */
	public $ApplicationData;
	/**
	 * The ListOfAttributeSets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Carries one or more instances of the AttributeSet in a list.
	 * @var PayPalTypeListOfAttributeSetType
	 */
	public $ListOfAttributeSets;
	/**
	 * The AutoPay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true (1), indicates that the seller requested immediate payment for the item. False (0) if immediate payment was not requested. (Does not indicate whether the item is still a candidate for puchase via immediate payment.) Only applicable for items listed on US and UK sites in categories that support immediate payment, when seller has a Premier or Business PayPal account.
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * The BuyerProtection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the status of the item's eligibility for the Buyer Protection Program. Possible values: ItemIneligible - Item is ineligible (e.g., category not applicable) ItemEligible - Item is eligible per standard criteria ItemMarkedIneligible - Item marked ineligible per special criteria (e.g., seller's account closed) ItemMarkedIneligible - Item marked elegible per other criteria Applicable for items listed to the US site and for the Parts and Accessories category (6028) or Everything Else category (10368) (or their subcategories) on the eBay Motors site.
	 * @var PayPalTypeBuyerProtectionCodeType
	 */
	public $BuyerProtection;
	/**
	 * The BuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount a Buyer would need to bid to take advantage of the Buy It Now feature. Not applicable to Fixed-Price items (Type = 7 or 9) or AdFormat-type listings. For Fixed-Price items, see StartPrice instead.
	 * @var PayPalTypeAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The Charity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Charity listing container.
	 * @var PayPalTypeCharityType
	 */
	public $Charity;
	/**
	 * The Country
	 * @var PayPalTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The CrossPromotion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : CrossPromotions container, if applicable shows promoted items
	 * @var PayPalTypeCrossPromotionsType
	 */
	public $CrossPromotion;
	/**
	 * The Currency
	 * @var PayPalTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item Description.
	 * @var string
	 */
	public $Description;
	/**
	 * The Escrow
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Online Escrow paid for by buyer or seller. Cannot use with real estate auctions. Escrow is recommended for for transactions over $500. Escrow service, available via Escrow.com, protects both buyer and seller by acting as a trusted third-party during the transaction and managing the payment process from start to finish. Also, if escrow by seller option used, then for Motors, this means that Escrow will be negotiated at the end of the auction.
	 * @var PayPalTypeEscrowCodeType
	 */
	public $Escrow;
	/**
	 * The GiftIcon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If set, a generic gift icon displays in the listing's Title. GiftIcon must be set to to be able to use GiftServices options (e.g., GiftExpressShipping, GiftShipToRecipient, or GiftWrap).
	 * @var int
	 */
	public $GiftIcon;
	/**
	 * The GiftServices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Gift service options offered by the seller of the listed item.
	 * @var PayPalTypeGiftServicesCodeType
	 */
	public $GiftServices;
	/**
	 * The HitCounter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Optional hit counter for the item's listing page. Possible values are: "NoHitCounter" "HonestyStyle" "GreenLED" "Hidden"
	 * @var PayPalTypeHitCounterCodeType
	 */
	public $HitCounter;
	/**
	 * The ItemID
	 * @var PayPalTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ListingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Includes listing details in terms of start and end time of listing (in GMT) as well as other details (e.g., orginal item for second chance, converted start price, etc.).
	 * @var PayPalTypeListingDetailsType
	 */
	public $ListingDetails;
	/**
	 * The ListingDesigner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When an item is first listed (using AddItem), a Layout template or a Theme template (or both) can be assigned to the item. A Layout template is assigned to a new item by specifying the Layout template ID (in the AddItem input argument LayoutID). Similarly, a Theme template is assigned to the item using the ThemeID argument.
	 * @var PayPalTypeListingDesignerType
	 */
	public $ListingDesigner;
	/**
	 * The ListingDuration
	 * @var PayPalTypeListingDurationCodeType
	 */
	public $ListingDuration;
	/**
	 * The ListingEnhancement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Describes the types of enhancment supported for the item's listing.
	 * @var PayPalTypeListingEnhancementsCodeType
	 */
	public $ListingEnhancement;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the type of listing for the item a seller has chosen (e.g., Chinese, Dutch, FixedPrice, etc.).
	 * @var PayPalTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the geographical location of the item.
	 * @var string
	 */
	public $Location;
	/**
	 * The PartnerCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Needed for add item only for partners.
	 * @var string
	 */
	public $PartnerCode;
	/**
	 * The PartnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Needed for add item only for partners.
	 * @var string
	 */
	public $PartnerName;
	/**
	 * The PaymentMethods
	 * @var PayPalTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The PayPalEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Valid PayPal e-mail address if seller has chosen PayPal as a payment method for the listed item.
	 * @var string
	 */
	public $PayPalEmailAddress;
	/**
	 * The PrimaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for data on the primary category of listing.
	 * @var PayPalTypeCategoryType
	 */
	public $PrimaryCategory;
	/**
	 * The PrivateListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Private auction. Not applicable to Fixed Price items.
	 * @var boolean
	 */
	public $PrivateListing;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items being sold in the auction.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The RegionID
	 * @var string
	 */
	public $RegionID;
	/**
	 * The RelistLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, creates a link from the old listing for the item to the new relist page, which accommodates users who might still look for the item under its old item ID. Also adds the relist ID to the old listing's record in the eBay database, which can be returned by calling GetItem for the old ItemId. If your application creates the listing page for the user, you need to add the relist link option to your application for your users.
	 * @var boolean
	 */
	public $RelistLink;
	/**
	 * The ReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
	 * @var PayPalTypeAmountType
	 */
	public $ReservePrice;
	/**
	 * The ReviseStatus
	 * @var PayPalTypeReviseStatusType
	 */
	public $ReviseStatus;
	/**
	 * The ScheduleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $ScheduleTime;
	/**
	 * The SecondaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for data on the secondary category of listing. Secondary category is optional.
	 * @var PayPalTypeCategoryType
	 */
	public $SecondaryCategory;
	/**
	 * The SiteHostedPicture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item picture information for pictures hosted at eBay site.
	 * @var PayPalTypeSiteHostedPictureType
	 */
	public $SiteHostedPicture;
	/**
	 * The Seller
	 * @var PayPalTypeUserType
	 */
	public $Seller;
	/**
	 * The SellingStatus
	 * @var PayPalTypeSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The ShippingOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies where the seller is willing to ship the item. Default "SiteOnly". Valid values are: SiteOnly (the default) WorldWide SitePlusRegions WillNotShip If SitePlusRegions is selected, then at least one regions argument (ShipToNorthAmerica, ShipToEurope, etc.) must also be set.
	 * @var PayPalTypeShippingOptionCodeType
	 */
	public $ShippingOption;
	/**
	 * The ShippingDetails
	 * @var PayPalTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ShippingRegions
	 * @var PayPalTypeShippingRegionCodeType
	 */
	public $ShippingRegions;
	/**
	 * The ShippingTerms
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes who pays for the delivery of an item (e.g., buyer or seller).
	 * @var PayPalTypeShippingTermsCodeType
	 */
	public $ShippingTerms;
	/**
	 * The Site
	 * @var PayPalTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Starting price for the item. For Type=7 or Type=9 (Fixed Price) items, if the item price (MinimumBid) is revised, this field returns the new price.
	 * @var PayPalTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The Storefront
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Storefront is shown for any item that belongs to an eBay Store owner, regardless of whether it is fixed price or auction type. Not returned for International Fixed Price items.
	 * @var PayPalTypeStorefrontType
	 */
	public $Storefront;
	/**
	 * The SubTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions.
	 * @var string
	 */
	public $SubTitle;
	/**
	 * The TimeLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time until the the end of the listing (e.g., the amount of time left in an active auction).
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the item as it appears for auctions.
	 * @var string
	 */
	public $Title;
	/**
	 * The UUID
	 * @var PayPalTypeUUIDType
	 */
	public $UUID;
	/**
	 * The VATDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT info container.
	 * @var PayPalTypeVATDetailsType
	 */
	public $VATDetails;
	/**
	 * The VendorHostedPicture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item picture information for pictures hosted at vendor (i.e., remote) site.
	 * @var PayPalTypeVendorHostedPictureType
	 */
	public $VendorHostedPicture;
	/**
	 * Constructor
	 * @param string ApplicationData
	 * @param PayPalTypeListOfAttributeSetType ListOfAttributeSets
	 * @param boolean AutoPay
	 * @param PayPalTypeBuyerProtectionCodeType BuyerProtection
	 * @param PayPalTypeAmountType BuyItNowPrice
	 * @param PayPalTypeCharityType Charity
	 * @param PayPalTypeCountryCodeType Country
	 * @param PayPalTypeCrossPromotionsType CrossPromotion
	 * @param PayPalTypeCurrencyCodeType Currency
	 * @param string Description
	 * @param PayPalTypeEscrowCodeType Escrow
	 * @param int GiftIcon
	 * @param PayPalTypeGiftServicesCodeType GiftServices
	 * @param PayPalTypeHitCounterCodeType HitCounter
	 * @param PayPalTypeItemIDType ItemID
	 * @param PayPalTypeListingDetailsType ListingDetails
	 * @param PayPalTypeListingDesignerType ListingDesigner
	 * @param PayPalTypeListingDurationCodeType ListingDuration
	 * @param PayPalTypeListingEnhancementsCodeType ListingEnhancement
	 * @param PayPalTypeListingTypeCodeType ListingType
	 * @param string Location
	 * @param string PartnerCode
	 * @param string PartnerName
	 * @param PayPalTypeBuyerPaymentMethodCodeType PaymentMethods
	 * @param string PayPalEmailAddress
	 * @param PayPalTypeCategoryType PrimaryCategory
	 * @param boolean PrivateListing
	 * @param int Quantity
	 * @param string RegionID
	 * @param boolean RelistLink
	 * @param PayPalTypeAmountType ReservePrice
	 * @param PayPalTypeReviseStatusType ReviseStatus
	 * @param dateTime ScheduleTime
	 * @param PayPalTypeCategoryType SecondaryCategory
	 * @param PayPalTypeSiteHostedPictureType SiteHostedPicture
	 * @param PayPalTypeUserType Seller
	 * @param PayPalTypeSellingStatusType SellingStatus
	 * @param PayPalTypeShippingOptionCodeType ShippingOption
	 * @param PayPalTypeShippingDetailsType ShippingDetails
	 * @param PayPalTypeShippingRegionCodeType ShippingRegions
	 * @param PayPalTypeShippingTermsCodeType ShippingTerms
	 * @param PayPalTypeSiteCodeType Site
	 * @param PayPalTypeAmountType StartPrice
	 * @param PayPalTypeStorefrontType Storefront
	 * @param string SubTitle
	 * @param duration TimeLeft
	 * @param string Title
	 * @param PayPalTypeUUIDType UUID
	 * @param PayPalTypeVATDetailsType VATDetails
	 * @param PayPalTypeVendorHostedPictureType VendorHostedPicture
	 * @return PayPalTypeItemType
	 */
	public function __construct($_ApplicationData = null,$_ListOfAttributeSets = null,$_AutoPay = null,$_BuyerProtection = null,$_BuyItNowPrice = null,$_Charity = null,$_Country = null,$_CrossPromotion = null,$_Currency = null,$_Description = null,$_Escrow = null,$_GiftIcon = null,$_GiftServices = null,$_HitCounter = null,$_ItemID = null,$_ListingDetails = null,$_ListingDesigner = null,$_ListingDuration = null,$_ListingEnhancement = null,$_ListingType = null,$_Location = null,$_PartnerCode = null,$_PartnerName = null,$_PaymentMethods = null,$_PayPalEmailAddress = null,$_PrimaryCategory = null,$_PrivateListing = null,$_Quantity = null,$_RegionID = null,$_RelistLink = null,$_ReservePrice = null,$_ReviseStatus = null,$_ScheduleTime = null,$_SecondaryCategory = null,$_SiteHostedPicture = null,$_Seller = null,$_SellingStatus = null,$_ShippingOption = null,$_ShippingDetails = null,$_ShippingRegions = null,$_ShippingTerms = null,$_Site = null,$_StartPrice = null,$_Storefront = null,$_SubTitle = null,$_TimeLeft = null,$_Title = null,$_UUID = null,$_VATDetails = null,$_VendorHostedPicture = null)
	{
		parent::__construct(array('ApplicationData'=>$_ApplicationData,'ListOfAttributeSets'=>$_ListOfAttributeSets,'AutoPay'=>$_AutoPay,'BuyerProtection'=>$_BuyerProtection,'BuyItNowPrice'=>$_BuyItNowPrice,'Charity'=>$_Charity,'Country'=>$_Country,'CrossPromotion'=>$_CrossPromotion,'Currency'=>$_Currency,'Description'=>$_Description,'Escrow'=>$_Escrow,'GiftIcon'=>$_GiftIcon,'GiftServices'=>$_GiftServices,'HitCounter'=>$_HitCounter,'ItemID'=>$_ItemID,'ListingDetails'=>$_ListingDetails,'ListingDesigner'=>$_ListingDesigner,'ListingDuration'=>$_ListingDuration,'ListingEnhancement'=>$_ListingEnhancement,'ListingType'=>$_ListingType,'Location'=>$_Location,'PartnerCode'=>$_PartnerCode,'PartnerName'=>$_PartnerName,'PaymentMethods'=>$_PaymentMethods,'PayPalEmailAddress'=>$_PayPalEmailAddress,'PrimaryCategory'=>$_PrimaryCategory,'PrivateListing'=>$_PrivateListing,'Quantity'=>$_Quantity,'RegionID'=>$_RegionID,'RelistLink'=>$_RelistLink,'ReservePrice'=>$_ReservePrice,'ReviseStatus'=>$_ReviseStatus,'ScheduleTime'=>$_ScheduleTime,'SecondaryCategory'=>$_SecondaryCategory,'SiteHostedPicture'=>$_SiteHostedPicture,'Seller'=>$_Seller,'SellingStatus'=>$_SellingStatus,'ShippingOption'=>$_ShippingOption,'ShippingDetails'=>$_ShippingDetails,'ShippingRegions'=>$_ShippingRegions,'ShippingTerms'=>$_ShippingTerms,'Site'=>$_Site,'StartPrice'=>$_StartPrice,'Storefront'=>$_Storefront,'SubTitle'=>$_SubTitle,'TimeLeft'=>$_TimeLeft,'Title'=>$_Title,'UUID'=>$_UUID,'VATDetails'=>$_VATDetails,'VendorHostedPicture'=>$_VendorHostedPicture));
	}
	/**
	 * Set ApplicationData
	 * @param string ApplicationData
	 * @return string
	 */
	public function setApplicationData($_ApplicationData)
	{
		return ($this->ApplicationData = $_ApplicationData);
	}
	/**
	 * Get ApplicationData
	 * @return string
	 */
	public function getApplicationData()
	{
		return $this->ApplicationData;
	}
	/**
	 * Set ListOfAttributeSets
	 * @param ListOfAttributeSetType ListOfAttributeSets
	 * @return ListOfAttributeSetType
	 */
	public function setListOfAttributeSets($_ListOfAttributeSets)
	{
		return ($this->ListOfAttributeSets = $_ListOfAttributeSets);
	}
	/**
	 * Get ListOfAttributeSets
	 * @return PayPalTypeListOfAttributeSetType
	 */
	public function getListOfAttributeSets()
	{
		return $this->ListOfAttributeSets;
	}
	/**
	 * Set AutoPay
	 * @param boolean AutoPay
	 * @return boolean
	 */
	public function setAutoPay($_AutoPay)
	{
		return ($this->AutoPay = $_AutoPay);
	}
	/**
	 * Get AutoPay
	 * @return boolean
	 */
	public function getAutoPay()
	{
		return $this->AutoPay;
	}
	/**
	 * Set BuyerProtection
	 * @param BuyerProtectionCodeType BuyerProtection
	 * @return BuyerProtectionCodeType
	 */
	public function setBuyerProtection($_BuyerProtection)
	{
		return ($this->BuyerProtection = PayPalTypeBuyerProtectionCodeType::valueIsValid($_BuyerProtection)?$_BuyerProtection:null);
	}
	/**
	 * Get BuyerProtection
	 * @return PayPalTypeBuyerProtectionCodeType
	 */
	public function getBuyerProtection()
	{
		return $this->BuyerProtection;
	}
	/**
	 * Set BuyItNowPrice
	 * @param AmountType BuyItNowPrice
	 * @return AmountType
	 */
	public function setBuyItNowPrice($_BuyItNowPrice)
	{
		return ($this->BuyItNowPrice = $_BuyItNowPrice);
	}
	/**
	 * Get BuyItNowPrice
	 * @return PayPalTypeAmountType
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * Set Charity
	 * @param CharityType Charity
	 * @return CharityType
	 */
	public function setCharity($_Charity)
	{
		return ($this->Charity = $_Charity);
	}
	/**
	 * Get Charity
	 * @return PayPalTypeCharityType
	 */
	public function getCharity()
	{
		return $this->Charity;
	}
	/**
	 * Set Country
	 * @param CountryCodeType Country
	 * @return CountryCodeType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = PayPalTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return PayPalTypeCountryCodeType
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set CrossPromotion
	 * @param CrossPromotionsType CrossPromotion
	 * @return CrossPromotionsType
	 */
	public function setCrossPromotion($_CrossPromotion)
	{
		return ($this->CrossPromotion = $_CrossPromotion);
	}
	/**
	 * Get CrossPromotion
	 * @return PayPalTypeCrossPromotionsType
	 */
	public function getCrossPromotion()
	{
		return $this->CrossPromotion;
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = PayPalTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return PayPalTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Escrow
	 * @param EscrowCodeType Escrow
	 * @return EscrowCodeType
	 */
	public function setEscrow($_Escrow)
	{
		return ($this->Escrow = PayPalTypeEscrowCodeType::valueIsValid($_Escrow)?$_Escrow:null);
	}
	/**
	 * Get Escrow
	 * @return PayPalTypeEscrowCodeType
	 */
	public function getEscrow()
	{
		return $this->Escrow;
	}
	/**
	 * Set GiftIcon
	 * @param int GiftIcon
	 * @return int
	 */
	public function setGiftIcon($_GiftIcon)
	{
		return ($this->GiftIcon = $_GiftIcon);
	}
	/**
	 * Get GiftIcon
	 * @return int
	 */
	public function getGiftIcon()
	{
		return $this->GiftIcon;
	}
	/**
	 * Set GiftServices
	 * @param GiftServicesCodeType GiftServices
	 * @return GiftServicesCodeType
	 */
	public function setGiftServices($_GiftServices)
	{
		return ($this->GiftServices = PayPalTypeGiftServicesCodeType::valueIsValid($_GiftServices)?$_GiftServices:null);
	}
	/**
	 * Get GiftServices
	 * @return PayPalTypeGiftServicesCodeType
	 */
	public function getGiftServices()
	{
		return $this->GiftServices;
	}
	/**
	 * Set HitCounter
	 * @param HitCounterCodeType HitCounter
	 * @return HitCounterCodeType
	 */
	public function setHitCounter($_HitCounter)
	{
		return ($this->HitCounter = PayPalTypeHitCounterCodeType::valueIsValid($_HitCounter)?$_HitCounter:null);
	}
	/**
	 * Get HitCounter
	 * @return PayPalTypeHitCounterCodeType
	 */
	public function getHitCounter()
	{
		return $this->HitCounter;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = PayPalTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return PayPalTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ListingDetails
	 * @param ListingDetailsType ListingDetails
	 * @return ListingDetailsType
	 */
	public function setListingDetails($_ListingDetails)
	{
		return ($this->ListingDetails = $_ListingDetails);
	}
	/**
	 * Get ListingDetails
	 * @return PayPalTypeListingDetailsType
	 */
	public function getListingDetails()
	{
		return $this->ListingDetails;
	}
	/**
	 * Set ListingDesigner
	 * @param ListingDesignerType ListingDesigner
	 * @return ListingDesignerType
	 */
	public function setListingDesigner($_ListingDesigner)
	{
		return ($this->ListingDesigner = $_ListingDesigner);
	}
	/**
	 * Get ListingDesigner
	 * @return PayPalTypeListingDesignerType
	 */
	public function getListingDesigner()
	{
		return $this->ListingDesigner;
	}
	/**
	 * Set ListingDuration
	 * @param ListingDurationCodeType ListingDuration
	 * @return ListingDurationCodeType
	 */
	public function setListingDuration($_ListingDuration)
	{
		return ($this->ListingDuration = PayPalTypeListingDurationCodeType::valueIsValid($_ListingDuration)?$_ListingDuration:null);
	}
	/**
	 * Get ListingDuration
	 * @return PayPalTypeListingDurationCodeType
	 */
	public function getListingDuration()
	{
		return $this->ListingDuration;
	}
	/**
	 * Set ListingEnhancement
	 * @param ListingEnhancementsCodeType ListingEnhancement
	 * @return ListingEnhancementsCodeType
	 */
	public function setListingEnhancement($_ListingEnhancement)
	{
		return ($this->ListingEnhancement = PayPalTypeListingEnhancementsCodeType::valueIsValid($_ListingEnhancement)?$_ListingEnhancement:null);
	}
	/**
	 * Get ListingEnhancement
	 * @return PayPalTypeListingEnhancementsCodeType
	 */
	public function getListingEnhancement()
	{
		return $this->ListingEnhancement;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = PayPalTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return PayPalTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set Location
	 * @param string Location
	 * @return string
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set PartnerCode
	 * @param string PartnerCode
	 * @return string
	 */
	public function setPartnerCode($_PartnerCode)
	{
		return ($this->PartnerCode = $_PartnerCode);
	}
	/**
	 * Get PartnerCode
	 * @return string
	 */
	public function getPartnerCode()
	{
		return $this->PartnerCode;
	}
	/**
	 * Set PartnerName
	 * @param string PartnerName
	 * @return string
	 */
	public function setPartnerName($_PartnerName)
	{
		return ($this->PartnerName = $_PartnerName);
	}
	/**
	 * Get PartnerName
	 * @return string
	 */
	public function getPartnerName()
	{
		return $this->PartnerName;
	}
	/**
	 * Set PaymentMethods
	 * @param BuyerPaymentMethodCodeType PaymentMethods
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethods($_PaymentMethods)
	{
		return ($this->PaymentMethods = PayPalTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethods)?$_PaymentMethods:null);
	}
	/**
	 * Get PaymentMethods
	 * @return PayPalTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethods()
	{
		return $this->PaymentMethods;
	}
	/**
	 * Set PayPalEmailAddress
	 * @param string PayPalEmailAddress
	 * @return string
	 */
	public function setPayPalEmailAddress($_PayPalEmailAddress)
	{
		return ($this->PayPalEmailAddress = $_PayPalEmailAddress);
	}
	/**
	 * Get PayPalEmailAddress
	 * @return string
	 */
	public function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}
	/**
	 * Set PrimaryCategory
	 * @param CategoryType PrimaryCategory
	 * @return CategoryType
	 */
	public function setPrimaryCategory($_PrimaryCategory)
	{
		return ($this->PrimaryCategory = $_PrimaryCategory);
	}
	/**
	 * Get PrimaryCategory
	 * @return PayPalTypeCategoryType
	 */
	public function getPrimaryCategory()
	{
		return $this->PrimaryCategory;
	}
	/**
	 * Set PrivateListing
	 * @param boolean PrivateListing
	 * @return boolean
	 */
	public function setPrivateListing($_PrivateListing)
	{
		return ($this->PrivateListing = $_PrivateListing);
	}
	/**
	 * Get PrivateListing
	 * @return boolean
	 */
	public function getPrivateListing()
	{
		return $this->PrivateListing;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set RegionID
	 * @param string RegionID
	 * @return string
	 */
	public function setRegionID($_RegionID)
	{
		return ($this->RegionID = $_RegionID);
	}
	/**
	 * Get RegionID
	 * @return string
	 */
	public function getRegionID()
	{
		return $this->RegionID;
	}
	/**
	 * Set RelistLink
	 * @param boolean RelistLink
	 * @return boolean
	 */
	public function setRelistLink($_RelistLink)
	{
		return ($this->RelistLink = $_RelistLink);
	}
	/**
	 * Get RelistLink
	 * @return boolean
	 */
	public function getRelistLink()
	{
		return $this->RelistLink;
	}
	/**
	 * Set ReservePrice
	 * @param AmountType ReservePrice
	 * @return AmountType
	 */
	public function setReservePrice($_ReservePrice)
	{
		return ($this->ReservePrice = $_ReservePrice);
	}
	/**
	 * Get ReservePrice
	 * @return PayPalTypeAmountType
	 */
	public function getReservePrice()
	{
		return $this->ReservePrice;
	}
	/**
	 * Set ReviseStatus
	 * @param ReviseStatusType ReviseStatus
	 * @return ReviseStatusType
	 */
	public function setReviseStatus($_ReviseStatus)
	{
		return ($this->ReviseStatus = $_ReviseStatus);
	}
	/**
	 * Get ReviseStatus
	 * @return PayPalTypeReviseStatusType
	 */
	public function getReviseStatus()
	{
		return $this->ReviseStatus;
	}
	/**
	 * Set ScheduleTime
	 * @param dateTime ScheduleTime
	 * @return dateTime
	 */
	public function setScheduleTime($_ScheduleTime)
	{
		return ($this->ScheduleTime = $_ScheduleTime);
	}
	/**
	 * Get ScheduleTime
	 * @return dateTime
	 */
	public function getScheduleTime()
	{
		return $this->ScheduleTime;
	}
	/**
	 * Set SecondaryCategory
	 * @param CategoryType SecondaryCategory
	 * @return CategoryType
	 */
	public function setSecondaryCategory($_SecondaryCategory)
	{
		return ($this->SecondaryCategory = $_SecondaryCategory);
	}
	/**
	 * Get SecondaryCategory
	 * @return PayPalTypeCategoryType
	 */
	public function getSecondaryCategory()
	{
		return $this->SecondaryCategory;
	}
	/**
	 * Set SiteHostedPicture
	 * @param SiteHostedPictureType SiteHostedPicture
	 * @return SiteHostedPictureType
	 */
	public function setSiteHostedPicture($_SiteHostedPicture)
	{
		return ($this->SiteHostedPicture = $_SiteHostedPicture);
	}
	/**
	 * Get SiteHostedPicture
	 * @return PayPalTypeSiteHostedPictureType
	 */
	public function getSiteHostedPicture()
	{
		return $this->SiteHostedPicture;
	}
	/**
	 * Set Seller
	 * @param UserType Seller
	 * @return UserType
	 */
	public function setSeller($_Seller)
	{
		return ($this->Seller = $_Seller);
	}
	/**
	 * Get Seller
	 * @return PayPalTypeUserType
	 */
	public function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * Set SellingStatus
	 * @param SellingStatusType SellingStatus
	 * @return SellingStatusType
	 */
	public function setSellingStatus($_SellingStatus)
	{
		return ($this->SellingStatus = $_SellingStatus);
	}
	/**
	 * Get SellingStatus
	 * @return PayPalTypeSellingStatusType
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
	}
	/**
	 * Set ShippingOption
	 * @param ShippingOptionCodeType ShippingOption
	 * @return ShippingOptionCodeType
	 */
	public function setShippingOption($_ShippingOption)
	{
		return ($this->ShippingOption = PayPalTypeShippingOptionCodeType::valueIsValid($_ShippingOption)?$_ShippingOption:null);
	}
	/**
	 * Get ShippingOption
	 * @return PayPalTypeShippingOptionCodeType
	 */
	public function getShippingOption()
	{
		return $this->ShippingOption;
	}
	/**
	 * Set ShippingDetails
	 * @param ShippingDetailsType ShippingDetails
	 * @return ShippingDetailsType
	 */
	public function setShippingDetails($_ShippingDetails)
	{
		return ($this->ShippingDetails = $_ShippingDetails);
	}
	/**
	 * Get ShippingDetails
	 * @return PayPalTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShippingRegions
	 * @param ShippingRegionCodeType ShippingRegions
	 * @return ShippingRegionCodeType
	 */
	public function setShippingRegions($_ShippingRegions)
	{
		return ($this->ShippingRegions = PayPalTypeShippingRegionCodeType::valueIsValid($_ShippingRegions)?$_ShippingRegions:null);
	}
	/**
	 * Get ShippingRegions
	 * @return PayPalTypeShippingRegionCodeType
	 */
	public function getShippingRegions()
	{
		return $this->ShippingRegions;
	}
	/**
	 * Set ShippingTerms
	 * @param ShippingTermsCodeType ShippingTerms
	 * @return ShippingTermsCodeType
	 */
	public function setShippingTerms($_ShippingTerms)
	{
		return ($this->ShippingTerms = PayPalTypeShippingTermsCodeType::valueIsValid($_ShippingTerms)?$_ShippingTerms:null);
	}
	/**
	 * Get ShippingTerms
	 * @return PayPalTypeShippingTermsCodeType
	 */
	public function getShippingTerms()
	{
		return $this->ShippingTerms;
	}
	/**
	 * Set Site
	 * @param SiteCodeType Site
	 * @return SiteCodeType
	 */
	public function setSite($_Site)
	{
		return ($this->Site = PayPalTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return PayPalTypeSiteCodeType
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set StartPrice
	 * @param AmountType StartPrice
	 * @return AmountType
	 */
	public function setStartPrice($_StartPrice)
	{
		return ($this->StartPrice = $_StartPrice);
	}
	/**
	 * Get StartPrice
	 * @return PayPalTypeAmountType
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set Storefront
	 * @param StorefrontType Storefront
	 * @return StorefrontType
	 */
	public function setStorefront($_Storefront)
	{
		return ($this->Storefront = $_Storefront);
	}
	/**
	 * Get Storefront
	 * @return PayPalTypeStorefrontType
	 */
	public function getStorefront()
	{
		return $this->Storefront;
	}
	/**
	 * Set SubTitle
	 * @param string SubTitle
	 * @return string
	 */
	public function setSubTitle($_SubTitle)
	{
		return ($this->SubTitle = $_SubTitle);
	}
	/**
	 * Get SubTitle
	 * @return string
	 */
	public function getSubTitle()
	{
		return $this->SubTitle;
	}
	/**
	 * Set TimeLeft
	 * @param duration TimeLeft
	 * @return duration
	 */
	public function setTimeLeft($_TimeLeft)
	{
		return ($this->TimeLeft = $_TimeLeft);
	}
	/**
	 * Get TimeLeft
	 * @return duration
	 */
	public function getTimeLeft()
	{
		return $this->TimeLeft;
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
	 * Set UUID
	 * @param UUIDType UUID
	 * @return UUIDType
	 */
	public function setUUID($_UUID)
	{
		return ($this->UUID = PayPalTypeUUIDType::valueIsValid($_UUID)?$_UUID:null);
	}
	/**
	 * Get UUID
	 * @return PayPalTypeUUIDType
	 */
	public function getUUID()
	{
		return $this->UUID;
	}
	/**
	 * Set VATDetails
	 * @param VATDetailsType VATDetails
	 * @return VATDetailsType
	 */
	public function setVATDetails($_VATDetails)
	{
		return ($this->VATDetails = $_VATDetails);
	}
	/**
	 * Get VATDetails
	 * @return PayPalTypeVATDetailsType
	 */
	public function getVATDetails()
	{
		return $this->VATDetails;
	}
	/**
	 * Set VendorHostedPicture
	 * @param VendorHostedPictureType VendorHostedPicture
	 * @return VendorHostedPictureType
	 */
	public function setVendorHostedPicture($_VendorHostedPicture)
	{
		return ($this->VendorHostedPicture = $_VendorHostedPicture);
	}
	/**
	 * Get VendorHostedPicture
	 * @return PayPalTypeVendorHostedPictureType
	 */
	public function getVendorHostedPicture()
	{
		return $this->VendorHostedPicture;
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