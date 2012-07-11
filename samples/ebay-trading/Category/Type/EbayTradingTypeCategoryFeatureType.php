<?php
/**
 * Class file for EbayTradingTypeCategoryFeatureType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryFeatureType
 * Documentation : A container node that identifies a category that has one of the features specified in FeatureID (in GetCategoryFeaturesRequest).
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryFeatureType extends EbayTradingWsdlClass
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the identifier of the category that has the feature.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The ListingDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Identifies the listing duration set that applies to the category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeListingDurationReferenceType
	 */
	public $ListingDuration;
	/**
	 * The ShippingTermsRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether sellers are required to specify shipping items for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ShippingTermsRequired;
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether best offers is allowed for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent..
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The DutchBINEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether Buy It Now is allowed in this category for Dutch (multi-item) auctions. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var boolean
	 */
	public $DutchBINEnabled;
	/**
	 * The UserConsentRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $UserConsentRequired;
	/**
	 * The HomePageFeaturedEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $HomePageFeaturedEnabled;
	/**
	 * The ProPackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether ProPackBundle (a feature pack) is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ProPackEnabled;
	/**
	 * The BasicUpgradePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not applicable to any site. Indicated whether the Basic Upgrade Pack bundle feature was enabled for this category. Formerly, Australia site (site ID 15, abbreviation AU) only.
	 * @var boolean
	 */
	public $BasicUpgradePackEnabled;
	/**
	 * The ValuePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether ValuePack bundle (a feature pack) is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ValuePackEnabled;
	/**
	 * The ProPackPlusEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the ProPackPlus bundle (a feature pack) is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ProPackPlusEnabled;
	/**
	 * The AdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the Classified Ad format feature is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAdFormatEnabledCodeType
	 */
	public $AdFormatEnabled;
	/**
	 * The BestOfferCounterEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on best offers for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $BestOfferCounterEnabled;
	/**
	 * The BestOfferAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether auto decline for best offers is allowed for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $BestOfferAutoDeclineEnabled;
	/**
	 * The LocalMarketSpecialitySubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether LocalMarketSpecialitySubscription feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketSpecialitySubscription;
	/**
	 * The LocalMarketRegularSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether LocalMarketRegularSubscription feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketRegularSubscription;
	/**
	 * The LocalMarketPremiumSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether LocalMarketPremiumSubscription feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketPremiumSubscription;
	/**
	 * The LocalMarketNonSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether LocalMarketNonSubscription feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketNonSubscription;
	/**
	 * The ExpressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether listings in this category are eligible for eBay Express (assuming other item and user eligibility requirements are also met). <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ExpressEnabled;
	/**
	 * The ExpressPicturesRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a listing requires a picture (or gallery image) in order to qualify for eBay Express when listed in this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ExpressPicturesRequired;
	/**
	 * The ExpressConditionRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a listing requires the Item Condition to be specified (using Item Specifics in AttributeSetArray) in order to qualify for eBay Express when listed in this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ExpressConditionRequired;
	/**
	 * The MinimumReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether Minimum Reserve Price is enabled for this category. On the Germany, Austria, Belgium French, and Belgium Dutch sites, Minimum Reserve Price is supported for the Art and Antiques, Watches and Jewelry, and Motorbikes categories. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var double
	 */
	public $MinimumReservePrice;
	/**
	 * The SellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports seller-level contact information for Classified Ad format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $SellerContactDetailsEnabled;
	/**
	 * The TransactionConfirmationRequestEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the Transaction Confirmation Request feature is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $TransactionConfirmationRequestEnabled;
	/**
	 * The StoreInventoryEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether Store Inventory Format is enabled for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $StoreInventoryEnabled;
	/**
	 * The SkypeMeTransactionalEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the addition of Skype buttons to listings is supported for this category for sales listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $SkypeMeTransactionalEnabled;
	/**
	 * The SkypeMeNonTransactionalEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the addition of Skype buttons to listings is supported for this category for ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $SkypeMeNonTransactionalEnabled;
	/**
	 * The ClassifiedAdPaymentMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the payment method should be displayed to the user for Classified Ad format listings. Even if enabled, checkout may or may not be enabled. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public $ClassifiedAdPaymentMethodEnabled;
	/**
	 * The ClassifiedAdShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for Classified Ad listings in the category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdShippingMethodEnabled;
	/**
	 * The ClassifiedAdBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if Best offer is enabled for Classified Ad listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public $ClassifiedAdBestOfferEnabled;
	/**
	 * The ClassifiedAdCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on Classified Ad listings for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdCounterOfferEnabled;
	/**
	 * The ClassifiedAdAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether automatic decline for best offers for Classified Ad listings is allowed for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdAutoDeclineEnabled;
	/**
	 * The ClassifiedAdContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the telephone is supported as a contact method for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdContactByPhoneEnabled;
	/**
	 * The ClassifiedAdContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports email as a contact method. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdContactByEmailEnabled;
	/**
	 * The SafePaymentRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether listings in this category need to have a safe payment method, for all sellers registered after January 17,2007. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $SafePaymentRequired;
	/**
	 * The ClassifiedAdPayPerLeadEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if pay-per-lead listings are allowed for this category. Pay-per-lead listings can be applicable if the ListingType is LeadGeneration and the ListingSubtype is ClassifiedAd. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdPayPerLeadEnabled;
	/**
	 * The ItemSpecificsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports custom Item Specifics. If enabled, sellers can use the Item.ItemSpecifics node in AddItem and related calls to fill in Item Specifics. If your application supports the older ID-based Attribute format, please remove all dependencies on that format by May 2012. Also see AttributeConversionEnabled. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeItemSpecificsEnabledCodeType
	 */
	public $ItemSpecificsEnabled;
	/**
	 * The PaisaPayFullEscrowEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The presence of this field indicates that the category supports the PaisaPayEscrow payment method. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $PaisaPayFullEscrowEnabled;
	/**
	 * The UPCIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The presence of this field indicates that the category supports the Universal Parcel Code (UPC) listing feature. This feature allows the seller to pass in a UPC value through the Item.ProductListingDetails.UPC field to identify and pre- fill information for a product when adding, revising, or relisting an item. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $UPCIdentifierEnabled;
	/**
	 * The EANIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The presence of this field indicates that the category supports the European Article Number (EAN) listing feature. This feature allows the seller to pass in an EAN value through the Item.ProductListingDetails.EAN field to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $EANIdentifierEnabled;
	/**
	 * The ISBNIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The presence of this field indicates that the category supports the International Standard Book Number (ISBN) listing feature. This feature allows the seller to pass in an ISBN value through the Item.ProductListingDetails.ISBN field to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ISBNIdentifierEnabled;
	/**
	 * The BrandMPNIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The presence of this field indicates that the category supports the Brand/Manufacturer Part Number listing feature. This feature allows the seller to pass in a brand and MPN value through the Item.ProductListingDetails.BrandMPN container to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $BrandMPNIdentifierEnabled;
	/**
	 * The ClassifiedAdAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports setting a price at which best offers are automatically accepted for Classified Ads. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdAutoAcceptEnabled;
	/**
	 * The BestOfferAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports setting a price at which best offers are automatically accepted. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $BestOfferAutoAcceptEnabled;
	/**
	 * The CrossBorderTradeNorthAmericaEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports specifying that listings be displayed in the default search results of North America sites. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $CrossBorderTradeNorthAmericaEnabled;
	/**
	 * The CrossBorderTradeGBEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports specifying that listings be displayed in the default search results of the UK site. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $CrossBorderTradeGBEnabled;
	/**
	 * The CrossBorderTradeAustraliaEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports specifying that listings be displayed in the default search results of the Australia site. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $CrossBorderTradeAustraliaEnabled;
	/**
	 * The PayPalBuyerProtectionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, if both PayPalBuyerProtectionEnabled and BuyerGuaranteeEnabled are returned, then buyer protection is allowed for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $PayPalBuyerProtectionEnabled;
	/**
	 * The BuyerGuaranteeEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, if both PayPalBuyerProtectionEnabled and BuyerGuaranteeEnabled are returned, then buyer protection is allowed for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $BuyerGuaranteeEnabled;
	/**
	 * The CombinedFixedPriceTreatmentEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports combined fixed price treatment for the following two listing types: Store Inventory Format and Basic Fixed Price. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $CombinedFixedPriceTreatmentEnabled;
	/**
	 * The GalleryFeaturedDurations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports durations for "Gallery Featured". <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeListingEnhancementDurationReferenceType
	 */
	public $GalleryFeaturedDurations;
	/**
	 * The PayPalRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category requires PayPal as a payment method. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $PayPalRequired;
	/**
	 * The eBayMotorsProAdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category allows Classified Ad listings. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAdFormatEnabledCodeType
	 */
	public $eBayMotorsProAdFormatEnabled;
	/**
	 * The eBayMotorsProContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including the telephone in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProContactByPhoneEnabled;
	/**
	 * The eBayMotorsProPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is enabled for the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $eBayMotorsProPhoneCount;
	/**
	 * The eBayMotorsProContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including the address in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProContactByAddressEnabled;
	/**
	 * The eBayMotorsProStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option is enabled for the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $eBayMotorsProStreetCount;
	/**
	 * The eBayMotorsProCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including the company name in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProCompanyNameEnabled;
	/**
	 * The eBayMotorsProContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including an email address in the seller's contact information. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProContactByEmailEnabled;
	/**
	 * The eBayMotorsProBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if Best Offer is supported for Classified Ad listings in this category. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public $eBayMotorsProBestOfferEnabled;
	/**
	 * The eBayMotorsProAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category allows auto-accept for Best Offers for Classified Ads. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProAutoAcceptEnabled;
	/**
	 * The eBayMotorsProAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category allows auto-decline for Best Offers for Classified Ads. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProAutoDeclineEnabled;
	/**
	 * The eBayMotorsProPaymentMethodCheckOutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the payment method should be displayed to the user for this category. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public $eBayMotorsProPaymentMethodCheckOutEnabled;
	/**
	 * The eBayMotorsProShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for this category. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProShippingMethodEnabled;
	/**
	 * The eBayMotorsProCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on Best Offers for this category. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProCounterOfferEnabled;
	/**
	 * The eBayMotorsProSellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category allows seller-level contact information for Classified Ad listings. A value of true means seller-level contact information is available for Classified Ad listings. This element is for eBay Motors Pro users. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $eBayMotorsProSellerContactDetailsEnabled;
	/**
	 * The LocalMarketAdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category supports Classified Ad listings. This is added for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAdFormatEnabledCodeType
	 */
	public $LocalMarketAdFormatEnabled;
	/**
	 * The LocalMarketContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including a telephone number in the seller's contact information. This element is added for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketContactByPhoneEnabled;
	/**
	 * The LocalMarketPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is enabled for the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $LocalMarketPhoneCount;
	/**
	 * The LocalMarketContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an address in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketContactByAddressEnabled;
	/**
	 * The LocalMarketStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option for is included in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $LocalMarketStreetCount;
	/**
	 * The LocalMarketCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a company name in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketCompanyNameEnabled;
	/**
	 * The LocalMarketContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an email address in the seller's contact information. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketContactByEmailEnabled;
	/**
	 * The LocalMarketBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if Best Offer is enabled for Classified Ad listings in this category. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public $LocalMarketBestOfferEnabled;
	/**
	 * The LocalMarketAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category supports auto-accept for best offers for Classified Ads. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketAutoAcceptEnabled;
	/**
	 * The LocalMarketAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether this category supports auto-decline for best offers for Classified Ads. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketAutoDeclineEnabled;
	/**
	 * The LocalMarketPaymentMethodCheckOutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the payment method should be displayed to the user for this category. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public $LocalMarketPaymentMethodCheckOutEnabled;
	/**
	 * The LocalMarketShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for this category. This element is for Local market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketShippingMethodEnabled;
	/**
	 * The LocalMarketCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on best offers for this category. This element is for Local market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketCounterOfferEnabled;
	/**
	 * The LocalMarketSellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the whether this category allows seller-level contact information for Classified Ad listings. This element is for Local Market dealers. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $LocalMarketSellerContactDetailsEnabled;
	/**
	 * The ClassifiedAdPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is included in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $ClassifiedAdPhoneCount;
	/**
	 * The ClassifiedAdContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including an address in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdContactByAddressEnabled;
	/**
	 * The ClassifiedAdStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option is included in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $ClassifiedAdStreetCount;
	/**
	 * The ClassifiedAdCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this category supports including a company name in the seller's contact information. This element is for For Sale By Owner listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ClassifiedAdCompanyNameEnabled;
	/**
	 * The SpecialitySubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies this speciality subscription feature for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeGeographicExposureCodeType
	 */
	public $SpecialitySubscription;
	/**
	 * The RegularSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the regular lsubscription feature that is supported for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeGeographicExposureCodeType
	 */
	public $RegularSubscription;
	/**
	 * The PremiumSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the premium subscription feature for this category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeGeographicExposureCodeType
	 */
	public $PremiumSubscription;
	/**
	 * The NonSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the supported local listing distances for this category, for users who have not subscribed to either Regular or Specialty vehicles. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeGeographicExposureCodeType
	 */
	public $NonSubscription;
	/**
	 * The INEscrowWorkflowTimeline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the escrow workflow version that applies to the category on the India site: Default Workflow, Workflow A or Workflow B. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeINEscrowWorkflowTimelineCodeType
	 */
	public $INEscrowWorkflowTimeline;
	/**
	 * The PayPalRequiredForStoreOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines if PayPal is required for Store Owner listings in this category. Applies to Fixed Price Listings as well as Store Inventory Format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $PayPalRequiredForStoreOwner;
	/**
	 * The ReviseQuantityAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item quantity for listings in this category can be revised while the listing is in semi or fully restricted mode. Applies to Fixed Price Listings as well as Store Inventory Format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ReviseQuantityAllowed;
	/**
	 * The RevisePriceAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the start price for items in this category can be revised while the listing is in semi or fully restricted mode. Applies to Fixed Price Listings as well as Store Inventory Format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $RevisePriceAllowed;
	/**
	 * The StoreOwnerExtendedListingDurationsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines if extended store owner listing durations are enabled in a given category. When the value of this element is true, it means the listing duration values defined in StoreOwnerExtendedListingDurations are applicable to fixed price listings in a given category. Applies to Fixed Price Listings as well as Store Inventory Format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $StoreOwnerExtendedListingDurationsEnabled;
	/**
	 * The StoreOwnerExtendedListingDurations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides additional listings durations that are supported by Store Owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the ListingDurations element. Applies to Fixed Price Listings as well as Store Inventory Format listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeStoreOwnerExtendedListingDurationsType
	 */
	public $StoreOwnerExtendedListingDurations;
	/**
	 * The ReturnPolicyEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>For most sites:</b> If true, listings in this category require a return policy. <br> <br> <b>For eBay India (IN), Australia (AU), and US eBay Motors Parts and Accessories:</b> If true, the category supports but does not require a return policy. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ReturnPolicyEnabled;
	/**
	 * The HandlingTimeEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If false, listings in this category require a handling time (see DispatchTimeMax in AddItem) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.)<br> <br> The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). <br> For a list of the handling time values allowed for each site, use DispatchTimeMaxDetails in GeteBayDetails.<br> <br> <span class="tablenote"><b>Note:</b> Although the field name ends with "Enabled", a value of true means that a handling time is NOT supported, and value of false means that a handling time IS supported.</span> <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $HandlingTimeEnabled;
	/**
	 * The MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum cost the seller can charge for the first domestic flat rate shipping service. The total shipping cost is the seller's base flat rate shipping cost plus the cost of insurance, if insurance is required. Only returned if MaxFlatShippingCostEnabled is true. Mutually exclusive with the GroupNMaxFlatShippingCost elements. <br><br> Returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxFlatShippingCost;
	/**
	 * The Group1MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group1. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAmountType
	 */
	public $Group1MaxFlatShippingCost;
	/**
	 * The Group2MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group2. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAmountType
	 */
	public $Group2MaxFlatShippingCost;
	/**
	 * The Group3MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group3. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAmountType
	 */
	public $Group3MaxFlatShippingCost;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : One <b>PaymentMethod</b> field is returned for each acceptable payment method. Acceptable payment methods for an item are dependent on the listing site and the category. If the seller making the call is a new to listing on the DE or AT sites, hence is subject to the new payment process, only one <b>PaymentMethod</b> field will be returned, and the value will always be <b>StandardPayment</b>. Starting in late August 2011, a new payment begins for new sellers listing on the German (DE) or Austrian (AT) sites. <br><br> The seller can specify one or more of the acceptable payment methods when making an Add/Revise/RelistItem API call. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethod;
	/**
	 * The VariationsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in this category.<br> <br> Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $VariationsEnabled;
	/**
	 * The AttributeConversionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now.<br> <br> Indicates whether eBay has converted the category from ID-based attributes to custom Item Specifics. Only applicable to categories that previously supported ID-based attributes.<br> <br> If conversion is Enabled or Disabled and the category is flagged as CatalogEnabled in GetCategory2CS, you can use GetItemRecommendations to retrieve product details in the custom Item Specifics format instead of using GetProductSellingPages to retrieve product details in the ID-based attributes format.<br> <br> With version 607 and lower, categories with attribute conversion Enabled or Disabled do not return recommendations in GetCategorySpecifics. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeAttributeConversionEnabledCodeType
	 */
	public $AttributeConversionEnabled;
	/**
	 * The FreeGalleryPlusEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports free, automatic upgrades for Gallery Plus, which enhances pictures in search results. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $FreeGalleryPlusEnabled;
	/**
	 * The FreePicturePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $FreePicturePackEnabled;
	/**
	 * The ItemCompatibilityEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports parts compatibility by application (ByApplication), by specification (BySpecification), or not at all (Disabled). Categories cannot support both types of parts compatibility. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeItemCompatibilityEnabledCodeType
	 */
	public $ItemCompatibilityEnabled;
	/**
	 * The MinItemCompatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field specifies the minimum number of required compatible applications for listing items. A value of "0" indicates it is not mandatory to specify parts compatibilities when listing. <br><br> This applies to categories that are enabled for compatibility by application only. Parts compatiblity by application can be specified by listing with a catalog product that supports parts compatibility or by specifying parts compatibility by application manually (<b class="con"> Item.ItemCompatibilityList</b>). <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $MinItemCompatibility;
	/**
	 * The MaxItemCompatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field specifies the maximum number of compatible applications allowed per item when adding or revising items. This is relevant for specifying parts compatibility by application manually (<b class="con"> Item.ItemCompatibilityList</b>) only. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var int
	 */
	public $MaxItemCompatibility;
	/**
	 * The ConditionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports (or requires) using Item.ConditionID to specify an item's condition in AddItem and related calls. See ConditionValues for a list of valid IDs.<br> <br> <span class="tablenote"><b>Note:</b> Some categories may still support using the older Attribute model and/or Custom Item Specifics model for item condition. If ConditionEnabled=Enabled (or Required) for a category, you should stop using these other fields to specify the condition in your listings. </span> <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeConditionEnabledCodeType
	 */
	public $ConditionEnabled;
	/**
	 * The ConditionValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the supported item conditions for the category, plus related policies and other details. Only returned if ConditionEnabled is Enabled or Required for the category (and the condition values are different than the site defaults). <br><br> Returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeConditionValuesType
	 */
	public $ConditionValues;
	/**
	 * The ValueCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some eBay sites may select a few categories and designate them as "value categories". These are typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time. <br> <br> While a category is designated as a value category (i.e., when ValueCategory is true), it is subject to the following rule: Items in value categories can only be listed in one category.<br> <br> For example, if you attempt to list in two categories and the PrimaryCategory or SecondaryCategory is a value category, then eBay drops the SecondaryCategory and lists the item in the PrimaryCategory only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $ValueCategory;
	/**
	 * The ProductCreationEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a category supports product creation, the ability to add products to the eBay catalog associated with the category. Also indicates whether sellers must list with a product in categories that support product creation. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypeProductCreationEnabledCodeType
	 */
	public $ProductCreationEnabled;
	/**
	 * The MaxGranularFitmentCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates, for the given category the total number of fine grained item compatibilities that can be applied to a listing. <br><br> When you list with parts compatibility, using only the high-level compatibility search names, such as Year, Make, and Model, the fitment applies to the various unspecified lower-level compatiblity search names and values, such as Trim and Engine, as well. This means that specifying a single coarsely defined item compatibility may result in multiple fitments applying to the listing at the lowest level of granularity. Up to 300 (or whatever maximum is indicated by MaxItemCompatibility) coarse parts compatiblities can be specified for a given listing. <br><br> Alternatively, you can explicitly specify up to 1000 (or whatever maximum is indicated by MaxGranularFitmentCount) parts compatibilities at the lowest level of granularity. That is, if you specify your parts compatibilities using all of the supported compatiblity search names (e.g., Year, Make, Model, Trim, and Engine), you can specify up to 1000 compatibilities.
	 * @var int
	 */
	public $MaxGranularFitmentCount;
	/**
	 * The CompatibleVehicleType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which vehicle type, Cars and Trucks or Motorcycles, is supported for specfying parts compatibility for listings in this category.
	 * @var string
	 */
	public $CompatibleVehicleType;
	/**
	 * The PaymentOptionsGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the GetCategoryFeature response if the Payment Options Group feature applies to the category. The Payment Options Group feature is only applicable to DE and AT listings. <br><br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var EbayTradingTypePaymentOptionsGroupEnabledCodeType
	 */
	public $PaymentOptionsGroup;
	/**
	 * The ShippingProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if <b>ShippingProfileCategoryGroup</b> is passed in as a <b>FeatureID</b> value in the request, and if a Business Policies Shipping Profile is defined for and applicable to the category. <br><br> The <b>ShippingProfileCategoryGroup</b> value indicates the Business Policies category group linked to the Shipping Profile. In the initial release of Business Policies, there are only two category groups: MOTORS_VEHICLE (for motor vehicle categories on eBay Motors (US and CA) and ALL (for all other, non-motor vehicle categories). <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public $ShippingProfileCategoryGroup;
	/**
	 * The PaymentProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if <b>PaymentProfileCategoryGroup</b> is passed in as a <b>FeatureID</b> value in the request, and if a Business Policies Payment Profile is defined for and applicable to the category. <br><br> The <b>PaymentProfileCategoryGroup</b> value indicates the Business Policies category group linked to the Payment Profile. In the initial release of Business Policies, there are only two category groups: MOTORS_VEHICLE (for motor vehicle categories on eBay Motors (US and CA) and ALL (for all other, non-motor vehicle categories). <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public $PaymentProfileCategoryGroup;
	/**
	 * The ReturnPolicyProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if <b>ReturnPolicyProfileCategoryGroup</b> is passed in as a <b>FeatureID</b> value in the request, and if a Business Policies Return Policy Profile is defined for and applicable to the category. <br><br> The <b>ReturnPolicyProfileCategoryGroup</b> value indicates the Business Policies category group linked to the Return Policy Profile. In the initial release of Business Policies, there are only two category groups: MOTORS_VEHICLE (for motor vehicle categories on eBay Motors (US and CA) and ALL (for all other, non-motor vehicle categories). <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public $ReturnPolicyProfileCategoryGroup;
	/**
	 * The VINSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the category supports a Vehicle Identification Number (VIN) in US, CA, and CAFR eBay Motors listings, and that you should use the VIN field in AddItem (instead of the deprecated ID-based attribute).<br> <br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $VINSupported;
	/**
	 * The VRMSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the category supports a Vehicle Registration Mark (VRM) in UK eBay Motors listings, and that you should use the VRM field in AddItem (instead of the deprecated ID-based attribute).<br> <br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $VRMSupported;
	/**
	 * The SellerProvidedTitleSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the category allows sellers to specify a custom title for a US or CA eBay Motors vehicle listing, and that you should use the SellerProvidedTitle field in AddItem (instead of the deprecated ID-based attribute).<br> <br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $SellerProvidedTitleSupported;
	/**
	 * The DepositSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the category supports a vehicle deposit for US eBay Motors vehicle listings, and that you should use the PaymentDetails.DepositAmount and PaymentDetails.DepositAmount fields in AddItem (instead of the deprecated ID-based attributes).<br> <br> Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
	 * @var boolean
	 */
	public $DepositSupported;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param EbayTradingTypeListingDurationReferenceType ListingDuration
	 * @param boolean ShippingTermsRequired
	 * @param boolean BestOfferEnabled
	 * @param boolean DutchBINEnabled
	 * @param boolean UserConsentRequired
	 * @param boolean HomePageFeaturedEnabled
	 * @param boolean ProPackEnabled
	 * @param boolean BasicUpgradePackEnabled
	 * @param boolean ValuePackEnabled
	 * @param boolean ProPackPlusEnabled
	 * @param EbayTradingTypeAdFormatEnabledCodeType AdFormatEnabled
	 * @param boolean BestOfferCounterEnabled
	 * @param boolean BestOfferAutoDeclineEnabled
	 * @param boolean LocalMarketSpecialitySubscription
	 * @param boolean LocalMarketRegularSubscription
	 * @param boolean LocalMarketPremiumSubscription
	 * @param boolean LocalMarketNonSubscription
	 * @param boolean ExpressEnabled
	 * @param boolean ExpressPicturesRequired
	 * @param boolean ExpressConditionRequired
	 * @param double MinimumReservePrice
	 * @param boolean SellerContactDetailsEnabled
	 * @param boolean TransactionConfirmationRequestEnabled
	 * @param boolean StoreInventoryEnabled
	 * @param boolean SkypeMeTransactionalEnabled
	 * @param boolean SkypeMeNonTransactionalEnabled
	 * @param EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType ClassifiedAdPaymentMethodEnabled
	 * @param boolean ClassifiedAdShippingMethodEnabled
	 * @param EbayTradingTypeClassifiedAdBestOfferEnabledCodeType ClassifiedAdBestOfferEnabled
	 * @param boolean ClassifiedAdCounterOfferEnabled
	 * @param boolean ClassifiedAdAutoDeclineEnabled
	 * @param boolean ClassifiedAdContactByPhoneEnabled
	 * @param boolean ClassifiedAdContactByEmailEnabled
	 * @param boolean SafePaymentRequired
	 * @param boolean ClassifiedAdPayPerLeadEnabled
	 * @param EbayTradingTypeItemSpecificsEnabledCodeType ItemSpecificsEnabled
	 * @param boolean PaisaPayFullEscrowEnabled
	 * @param boolean UPCIdentifierEnabled
	 * @param boolean EANIdentifierEnabled
	 * @param boolean ISBNIdentifierEnabled
	 * @param boolean BrandMPNIdentifierEnabled
	 * @param boolean ClassifiedAdAutoAcceptEnabled
	 * @param boolean BestOfferAutoAcceptEnabled
	 * @param boolean CrossBorderTradeNorthAmericaEnabled
	 * @param boolean CrossBorderTradeGBEnabled
	 * @param boolean CrossBorderTradeAustraliaEnabled
	 * @param boolean PayPalBuyerProtectionEnabled
	 * @param boolean BuyerGuaranteeEnabled
	 * @param boolean CombinedFixedPriceTreatmentEnabled
	 * @param EbayTradingTypeListingEnhancementDurationReferenceType GalleryFeaturedDurations
	 * @param boolean PayPalRequired
	 * @param EbayTradingTypeAdFormatEnabledCodeType eBayMotorsProAdFormatEnabled
	 * @param boolean eBayMotorsProContactByPhoneEnabled
	 * @param int eBayMotorsProPhoneCount
	 * @param boolean eBayMotorsProContactByAddressEnabled
	 * @param int eBayMotorsProStreetCount
	 * @param boolean eBayMotorsProCompanyNameEnabled
	 * @param boolean eBayMotorsProContactByEmailEnabled
	 * @param EbayTradingTypeClassifiedAdBestOfferEnabledCodeType eBayMotorsProBestOfferEnabled
	 * @param boolean eBayMotorsProAutoAcceptEnabled
	 * @param boolean eBayMotorsProAutoDeclineEnabled
	 * @param EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType eBayMotorsProPaymentMethodCheckOutEnabled
	 * @param boolean eBayMotorsProShippingMethodEnabled
	 * @param boolean eBayMotorsProCounterOfferEnabled
	 * @param boolean eBayMotorsProSellerContactDetailsEnabled
	 * @param EbayTradingTypeAdFormatEnabledCodeType LocalMarketAdFormatEnabled
	 * @param boolean LocalMarketContactByPhoneEnabled
	 * @param int LocalMarketPhoneCount
	 * @param boolean LocalMarketContactByAddressEnabled
	 * @param int LocalMarketStreetCount
	 * @param boolean LocalMarketCompanyNameEnabled
	 * @param boolean LocalMarketContactByEmailEnabled
	 * @param EbayTradingTypeClassifiedAdBestOfferEnabledCodeType LocalMarketBestOfferEnabled
	 * @param boolean LocalMarketAutoAcceptEnabled
	 * @param boolean LocalMarketAutoDeclineEnabled
	 * @param EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType LocalMarketPaymentMethodCheckOutEnabled
	 * @param boolean LocalMarketShippingMethodEnabled
	 * @param boolean LocalMarketCounterOfferEnabled
	 * @param boolean LocalMarketSellerContactDetailsEnabled
	 * @param int ClassifiedAdPhoneCount
	 * @param boolean ClassifiedAdContactByAddressEnabled
	 * @param int ClassifiedAdStreetCount
	 * @param boolean ClassifiedAdCompanyNameEnabled
	 * @param EbayTradingTypeGeographicExposureCodeType SpecialitySubscription
	 * @param EbayTradingTypeGeographicExposureCodeType RegularSubscription
	 * @param EbayTradingTypeGeographicExposureCodeType PremiumSubscription
	 * @param EbayTradingTypeGeographicExposureCodeType NonSubscription
	 * @param EbayTradingTypeINEscrowWorkflowTimelineCodeType INEscrowWorkflowTimeline
	 * @param boolean PayPalRequiredForStoreOwner
	 * @param boolean ReviseQuantityAllowed
	 * @param boolean RevisePriceAllowed
	 * @param boolean StoreOwnerExtendedListingDurationsEnabled
	 * @param EbayTradingTypeStoreOwnerExtendedListingDurationsType StoreOwnerExtendedListingDurations
	 * @param boolean ReturnPolicyEnabled
	 * @param boolean HandlingTimeEnabled
	 * @param EbayTradingTypeAmountType MaxFlatShippingCost
	 * @param EbayTradingTypeAmountType Group1MaxFlatShippingCost
	 * @param EbayTradingTypeAmountType Group2MaxFlatShippingCost
	 * @param EbayTradingTypeAmountType Group3MaxFlatShippingCost
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethod
	 * @param boolean VariationsEnabled
	 * @param EbayTradingTypeAttributeConversionEnabledCodeType AttributeConversionEnabled
	 * @param boolean FreeGalleryPlusEnabled
	 * @param boolean FreePicturePackEnabled
	 * @param EbayTradingTypeItemCompatibilityEnabledCodeType ItemCompatibilityEnabled
	 * @param int MinItemCompatibility
	 * @param int MaxItemCompatibility
	 * @param EbayTradingTypeConditionEnabledCodeType ConditionEnabled
	 * @param EbayTradingTypeConditionValuesType ConditionValues
	 * @param boolean ValueCategory
	 * @param EbayTradingTypeProductCreationEnabledCodeType ProductCreationEnabled
	 * @param int MaxGranularFitmentCount
	 * @param string CompatibleVehicleType
	 * @param EbayTradingTypePaymentOptionsGroupEnabledCodeType PaymentOptionsGroup
	 * @param EbayTradingTypeProfileCategoryGroupCodeType ShippingProfileCategoryGroup
	 * @param EbayTradingTypeProfileCategoryGroupCodeType PaymentProfileCategoryGroup
	 * @param EbayTradingTypeProfileCategoryGroupCodeType ReturnPolicyProfileCategoryGroup
	 * @param boolean VINSupported
	 * @param boolean VRMSupported
	 * @param boolean SellerProvidedTitleSupported
	 * @param boolean DepositSupported
	 * @param DOMDocument any
	 * @return EbayTradingTypeCategoryFeatureType
	 */
	public function __construct($_CategoryID = null,$_ListingDuration = null,$_ShippingTermsRequired = null,$_BestOfferEnabled = null,$_DutchBINEnabled = null,$_UserConsentRequired = null,$_HomePageFeaturedEnabled = null,$_ProPackEnabled = null,$_BasicUpgradePackEnabled = null,$_ValuePackEnabled = null,$_ProPackPlusEnabled = null,$_AdFormatEnabled = null,$_BestOfferCounterEnabled = null,$_BestOfferAutoDeclineEnabled = null,$_LocalMarketSpecialitySubscription = null,$_LocalMarketRegularSubscription = null,$_LocalMarketPremiumSubscription = null,$_LocalMarketNonSubscription = null,$_ExpressEnabled = null,$_ExpressPicturesRequired = null,$_ExpressConditionRequired = null,$_MinimumReservePrice = null,$_SellerContactDetailsEnabled = null,$_TransactionConfirmationRequestEnabled = null,$_StoreInventoryEnabled = null,$_SkypeMeTransactionalEnabled = null,$_SkypeMeNonTransactionalEnabled = null,$_ClassifiedAdPaymentMethodEnabled = null,$_ClassifiedAdShippingMethodEnabled = null,$_ClassifiedAdBestOfferEnabled = null,$_ClassifiedAdCounterOfferEnabled = null,$_ClassifiedAdAutoDeclineEnabled = null,$_ClassifiedAdContactByPhoneEnabled = null,$_ClassifiedAdContactByEmailEnabled = null,$_SafePaymentRequired = null,$_ClassifiedAdPayPerLeadEnabled = null,$_ItemSpecificsEnabled = null,$_PaisaPayFullEscrowEnabled = null,$_UPCIdentifierEnabled = null,$_EANIdentifierEnabled = null,$_ISBNIdentifierEnabled = null,$_BrandMPNIdentifierEnabled = null,$_ClassifiedAdAutoAcceptEnabled = null,$_BestOfferAutoAcceptEnabled = null,$_CrossBorderTradeNorthAmericaEnabled = null,$_CrossBorderTradeGBEnabled = null,$_CrossBorderTradeAustraliaEnabled = null,$_PayPalBuyerProtectionEnabled = null,$_BuyerGuaranteeEnabled = null,$_CombinedFixedPriceTreatmentEnabled = null,$_GalleryFeaturedDurations = null,$_PayPalRequired = null,$_eBayMotorsProAdFormatEnabled = null,$_eBayMotorsProContactByPhoneEnabled = null,$_eBayMotorsProPhoneCount = null,$_eBayMotorsProContactByAddressEnabled = null,$_eBayMotorsProStreetCount = null,$_eBayMotorsProCompanyNameEnabled = null,$_eBayMotorsProContactByEmailEnabled = null,$_eBayMotorsProBestOfferEnabled = null,$_eBayMotorsProAutoAcceptEnabled = null,$_eBayMotorsProAutoDeclineEnabled = null,$_eBayMotorsProPaymentMethodCheckOutEnabled = null,$_eBayMotorsProShippingMethodEnabled = null,$_eBayMotorsProCounterOfferEnabled = null,$_eBayMotorsProSellerContactDetailsEnabled = null,$_LocalMarketAdFormatEnabled = null,$_LocalMarketContactByPhoneEnabled = null,$_LocalMarketPhoneCount = null,$_LocalMarketContactByAddressEnabled = null,$_LocalMarketStreetCount = null,$_LocalMarketCompanyNameEnabled = null,$_LocalMarketContactByEmailEnabled = null,$_LocalMarketBestOfferEnabled = null,$_LocalMarketAutoAcceptEnabled = null,$_LocalMarketAutoDeclineEnabled = null,$_LocalMarketPaymentMethodCheckOutEnabled = null,$_LocalMarketShippingMethodEnabled = null,$_LocalMarketCounterOfferEnabled = null,$_LocalMarketSellerContactDetailsEnabled = null,$_ClassifiedAdPhoneCount = null,$_ClassifiedAdContactByAddressEnabled = null,$_ClassifiedAdStreetCount = null,$_ClassifiedAdCompanyNameEnabled = null,$_SpecialitySubscription = null,$_RegularSubscription = null,$_PremiumSubscription = null,$_NonSubscription = null,$_INEscrowWorkflowTimeline = null,$_PayPalRequiredForStoreOwner = null,$_ReviseQuantityAllowed = null,$_RevisePriceAllowed = null,$_StoreOwnerExtendedListingDurationsEnabled = null,$_StoreOwnerExtendedListingDurations = null,$_ReturnPolicyEnabled = null,$_HandlingTimeEnabled = null,$_MaxFlatShippingCost = null,$_Group1MaxFlatShippingCost = null,$_Group2MaxFlatShippingCost = null,$_Group3MaxFlatShippingCost = null,$_PaymentMethod = null,$_VariationsEnabled = null,$_AttributeConversionEnabled = null,$_FreeGalleryPlusEnabled = null,$_FreePicturePackEnabled = null,$_ItemCompatibilityEnabled = null,$_MinItemCompatibility = null,$_MaxItemCompatibility = null,$_ConditionEnabled = null,$_ConditionValues = null,$_ValueCategory = null,$_ProductCreationEnabled = null,$_MaxGranularFitmentCount = null,$_CompatibleVehicleType = null,$_PaymentOptionsGroup = null,$_ShippingProfileCategoryGroup = null,$_PaymentProfileCategoryGroup = null,$_ReturnPolicyProfileCategoryGroup = null,$_VINSupported = null,$_VRMSupported = null,$_SellerProvidedTitleSupported = null,$_DepositSupported = null,$_any = null)
	{
		parent::__construct(array('CategoryID'=>$_CategoryID,'ListingDuration'=>$_ListingDuration,'ShippingTermsRequired'=>$_ShippingTermsRequired,'BestOfferEnabled'=>$_BestOfferEnabled,'DutchBINEnabled'=>$_DutchBINEnabled,'UserConsentRequired'=>$_UserConsentRequired,'HomePageFeaturedEnabled'=>$_HomePageFeaturedEnabled,'ProPackEnabled'=>$_ProPackEnabled,'BasicUpgradePackEnabled'=>$_BasicUpgradePackEnabled,'ValuePackEnabled'=>$_ValuePackEnabled,'ProPackPlusEnabled'=>$_ProPackPlusEnabled,'AdFormatEnabled'=>$_AdFormatEnabled,'BestOfferCounterEnabled'=>$_BestOfferCounterEnabled,'BestOfferAutoDeclineEnabled'=>$_BestOfferAutoDeclineEnabled,'LocalMarketSpecialitySubscription'=>$_LocalMarketSpecialitySubscription,'LocalMarketRegularSubscription'=>$_LocalMarketRegularSubscription,'LocalMarketPremiumSubscription'=>$_LocalMarketPremiumSubscription,'LocalMarketNonSubscription'=>$_LocalMarketNonSubscription,'ExpressEnabled'=>$_ExpressEnabled,'ExpressPicturesRequired'=>$_ExpressPicturesRequired,'ExpressConditionRequired'=>$_ExpressConditionRequired,'MinimumReservePrice'=>$_MinimumReservePrice,'SellerContactDetailsEnabled'=>$_SellerContactDetailsEnabled,'TransactionConfirmationRequestEnabled'=>$_TransactionConfirmationRequestEnabled,'StoreInventoryEnabled'=>$_StoreInventoryEnabled,'SkypeMeTransactionalEnabled'=>$_SkypeMeTransactionalEnabled,'SkypeMeNonTransactionalEnabled'=>$_SkypeMeNonTransactionalEnabled,'ClassifiedAdPaymentMethodEnabled'=>$_ClassifiedAdPaymentMethodEnabled,'ClassifiedAdShippingMethodEnabled'=>$_ClassifiedAdShippingMethodEnabled,'ClassifiedAdBestOfferEnabled'=>$_ClassifiedAdBestOfferEnabled,'ClassifiedAdCounterOfferEnabled'=>$_ClassifiedAdCounterOfferEnabled,'ClassifiedAdAutoDeclineEnabled'=>$_ClassifiedAdAutoDeclineEnabled,'ClassifiedAdContactByPhoneEnabled'=>$_ClassifiedAdContactByPhoneEnabled,'ClassifiedAdContactByEmailEnabled'=>$_ClassifiedAdContactByEmailEnabled,'SafePaymentRequired'=>$_SafePaymentRequired,'ClassifiedAdPayPerLeadEnabled'=>$_ClassifiedAdPayPerLeadEnabled,'ItemSpecificsEnabled'=>$_ItemSpecificsEnabled,'PaisaPayFullEscrowEnabled'=>$_PaisaPayFullEscrowEnabled,'UPCIdentifierEnabled'=>$_UPCIdentifierEnabled,'EANIdentifierEnabled'=>$_EANIdentifierEnabled,'ISBNIdentifierEnabled'=>$_ISBNIdentifierEnabled,'BrandMPNIdentifierEnabled'=>$_BrandMPNIdentifierEnabled,'ClassifiedAdAutoAcceptEnabled'=>$_ClassifiedAdAutoAcceptEnabled,'BestOfferAutoAcceptEnabled'=>$_BestOfferAutoAcceptEnabled,'CrossBorderTradeNorthAmericaEnabled'=>$_CrossBorderTradeNorthAmericaEnabled,'CrossBorderTradeGBEnabled'=>$_CrossBorderTradeGBEnabled,'CrossBorderTradeAustraliaEnabled'=>$_CrossBorderTradeAustraliaEnabled,'PayPalBuyerProtectionEnabled'=>$_PayPalBuyerProtectionEnabled,'BuyerGuaranteeEnabled'=>$_BuyerGuaranteeEnabled,'CombinedFixedPriceTreatmentEnabled'=>$_CombinedFixedPriceTreatmentEnabled,'GalleryFeaturedDurations'=>$_GalleryFeaturedDurations,'PayPalRequired'=>$_PayPalRequired,'eBayMotorsProAdFormatEnabled'=>$_eBayMotorsProAdFormatEnabled,'eBayMotorsProContactByPhoneEnabled'=>$_eBayMotorsProContactByPhoneEnabled,'eBayMotorsProPhoneCount'=>$_eBayMotorsProPhoneCount,'eBayMotorsProContactByAddressEnabled'=>$_eBayMotorsProContactByAddressEnabled,'eBayMotorsProStreetCount'=>$_eBayMotorsProStreetCount,'eBayMotorsProCompanyNameEnabled'=>$_eBayMotorsProCompanyNameEnabled,'eBayMotorsProContactByEmailEnabled'=>$_eBayMotorsProContactByEmailEnabled,'eBayMotorsProBestOfferEnabled'=>$_eBayMotorsProBestOfferEnabled,'eBayMotorsProAutoAcceptEnabled'=>$_eBayMotorsProAutoAcceptEnabled,'eBayMotorsProAutoDeclineEnabled'=>$_eBayMotorsProAutoDeclineEnabled,'eBayMotorsProPaymentMethodCheckOutEnabled'=>$_eBayMotorsProPaymentMethodCheckOutEnabled,'eBayMotorsProShippingMethodEnabled'=>$_eBayMotorsProShippingMethodEnabled,'eBayMotorsProCounterOfferEnabled'=>$_eBayMotorsProCounterOfferEnabled,'eBayMotorsProSellerContactDetailsEnabled'=>$_eBayMotorsProSellerContactDetailsEnabled,'LocalMarketAdFormatEnabled'=>$_LocalMarketAdFormatEnabled,'LocalMarketContactByPhoneEnabled'=>$_LocalMarketContactByPhoneEnabled,'LocalMarketPhoneCount'=>$_LocalMarketPhoneCount,'LocalMarketContactByAddressEnabled'=>$_LocalMarketContactByAddressEnabled,'LocalMarketStreetCount'=>$_LocalMarketStreetCount,'LocalMarketCompanyNameEnabled'=>$_LocalMarketCompanyNameEnabled,'LocalMarketContactByEmailEnabled'=>$_LocalMarketContactByEmailEnabled,'LocalMarketBestOfferEnabled'=>$_LocalMarketBestOfferEnabled,'LocalMarketAutoAcceptEnabled'=>$_LocalMarketAutoAcceptEnabled,'LocalMarketAutoDeclineEnabled'=>$_LocalMarketAutoDeclineEnabled,'LocalMarketPaymentMethodCheckOutEnabled'=>$_LocalMarketPaymentMethodCheckOutEnabled,'LocalMarketShippingMethodEnabled'=>$_LocalMarketShippingMethodEnabled,'LocalMarketCounterOfferEnabled'=>$_LocalMarketCounterOfferEnabled,'LocalMarketSellerContactDetailsEnabled'=>$_LocalMarketSellerContactDetailsEnabled,'ClassifiedAdPhoneCount'=>$_ClassifiedAdPhoneCount,'ClassifiedAdContactByAddressEnabled'=>$_ClassifiedAdContactByAddressEnabled,'ClassifiedAdStreetCount'=>$_ClassifiedAdStreetCount,'ClassifiedAdCompanyNameEnabled'=>$_ClassifiedAdCompanyNameEnabled,'SpecialitySubscription'=>$_SpecialitySubscription,'RegularSubscription'=>$_RegularSubscription,'PremiumSubscription'=>$_PremiumSubscription,'NonSubscription'=>$_NonSubscription,'INEscrowWorkflowTimeline'=>$_INEscrowWorkflowTimeline,'PayPalRequiredForStoreOwner'=>$_PayPalRequiredForStoreOwner,'ReviseQuantityAllowed'=>$_ReviseQuantityAllowed,'RevisePriceAllowed'=>$_RevisePriceAllowed,'StoreOwnerExtendedListingDurationsEnabled'=>$_StoreOwnerExtendedListingDurationsEnabled,'StoreOwnerExtendedListingDurations'=>$_StoreOwnerExtendedListingDurations,'ReturnPolicyEnabled'=>$_ReturnPolicyEnabled,'HandlingTimeEnabled'=>$_HandlingTimeEnabled,'MaxFlatShippingCost'=>$_MaxFlatShippingCost,'Group1MaxFlatShippingCost'=>$_Group1MaxFlatShippingCost,'Group2MaxFlatShippingCost'=>$_Group2MaxFlatShippingCost,'Group3MaxFlatShippingCost'=>$_Group3MaxFlatShippingCost,'PaymentMethod'=>$_PaymentMethod,'VariationsEnabled'=>$_VariationsEnabled,'AttributeConversionEnabled'=>$_AttributeConversionEnabled,'FreeGalleryPlusEnabled'=>$_FreeGalleryPlusEnabled,'FreePicturePackEnabled'=>$_FreePicturePackEnabled,'ItemCompatibilityEnabled'=>$_ItemCompatibilityEnabled,'MinItemCompatibility'=>$_MinItemCompatibility,'MaxItemCompatibility'=>$_MaxItemCompatibility,'ConditionEnabled'=>$_ConditionEnabled,'ConditionValues'=>$_ConditionValues,'ValueCategory'=>$_ValueCategory,'ProductCreationEnabled'=>$_ProductCreationEnabled,'MaxGranularFitmentCount'=>$_MaxGranularFitmentCount,'CompatibleVehicleType'=>$_CompatibleVehicleType,'PaymentOptionsGroup'=>$_PaymentOptionsGroup,'ShippingProfileCategoryGroup'=>$_ShippingProfileCategoryGroup,'PaymentProfileCategoryGroup'=>$_PaymentProfileCategoryGroup,'ReturnPolicyProfileCategoryGroup'=>$_ReturnPolicyProfileCategoryGroup,'VINSupported'=>$_VINSupported,'VRMSupported'=>$_VRMSupported,'SellerProvidedTitleSupported'=>$_SellerProvidedTitleSupported,'DepositSupported'=>$_DepositSupported,'any'=>$_any));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set ListingDuration
	 * @param ListingDurationReferenceType ListingDuration
	 * @return ListingDurationReferenceType
	 */
	public function setListingDuration($_ListingDuration)
	{
		return ($this->ListingDuration = $_ListingDuration);
	}
	/**
	 * Get ListingDuration
	 * @return EbayTradingTypeListingDurationReferenceType
	 */
	public function getListingDuration()
	{
		return $this->ListingDuration;
	}
	/**
	 * Set ShippingTermsRequired
	 * @param boolean ShippingTermsRequired
	 * @return boolean
	 */
	public function setShippingTermsRequired($_ShippingTermsRequired)
	{
		return ($this->ShippingTermsRequired = $_ShippingTermsRequired);
	}
	/**
	 * Get ShippingTermsRequired
	 * @return boolean
	 */
	public function getShippingTermsRequired()
	{
		return $this->ShippingTermsRequired;
	}
	/**
	 * Set BestOfferEnabled
	 * @param boolean BestOfferEnabled
	 * @return boolean
	 */
	public function setBestOfferEnabled($_BestOfferEnabled)
	{
		return ($this->BestOfferEnabled = $_BestOfferEnabled);
	}
	/**
	 * Get BestOfferEnabled
	 * @return boolean
	 */
	public function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * Set DutchBINEnabled
	 * @param boolean DutchBINEnabled
	 * @return boolean
	 */
	public function setDutchBINEnabled($_DutchBINEnabled)
	{
		return ($this->DutchBINEnabled = $_DutchBINEnabled);
	}
	/**
	 * Get DutchBINEnabled
	 * @return boolean
	 */
	public function getDutchBINEnabled()
	{
		return $this->DutchBINEnabled;
	}
	/**
	 * Set UserConsentRequired
	 * @param boolean UserConsentRequired
	 * @return boolean
	 */
	public function setUserConsentRequired($_UserConsentRequired)
	{
		return ($this->UserConsentRequired = $_UserConsentRequired);
	}
	/**
	 * Get UserConsentRequired
	 * @return boolean
	 */
	public function getUserConsentRequired()
	{
		return $this->UserConsentRequired;
	}
	/**
	 * Set HomePageFeaturedEnabled
	 * @param boolean HomePageFeaturedEnabled
	 * @return boolean
	 */
	public function setHomePageFeaturedEnabled($_HomePageFeaturedEnabled)
	{
		return ($this->HomePageFeaturedEnabled = $_HomePageFeaturedEnabled);
	}
	/**
	 * Get HomePageFeaturedEnabled
	 * @return boolean
	 */
	public function getHomePageFeaturedEnabled()
	{
		return $this->HomePageFeaturedEnabled;
	}
	/**
	 * Set ProPackEnabled
	 * @param boolean ProPackEnabled
	 * @return boolean
	 */
	public function setProPackEnabled($_ProPackEnabled)
	{
		return ($this->ProPackEnabled = $_ProPackEnabled);
	}
	/**
	 * Get ProPackEnabled
	 * @return boolean
	 */
	public function getProPackEnabled()
	{
		return $this->ProPackEnabled;
	}
	/**
	 * Set BasicUpgradePackEnabled
	 * @param boolean BasicUpgradePackEnabled
	 * @return boolean
	 */
	public function setBasicUpgradePackEnabled($_BasicUpgradePackEnabled)
	{
		return ($this->BasicUpgradePackEnabled = $_BasicUpgradePackEnabled);
	}
	/**
	 * Get BasicUpgradePackEnabled
	 * @return boolean
	 */
	public function getBasicUpgradePackEnabled()
	{
		return $this->BasicUpgradePackEnabled;
	}
	/**
	 * Set ValuePackEnabled
	 * @param boolean ValuePackEnabled
	 * @return boolean
	 */
	public function setValuePackEnabled($_ValuePackEnabled)
	{
		return ($this->ValuePackEnabled = $_ValuePackEnabled);
	}
	/**
	 * Get ValuePackEnabled
	 * @return boolean
	 */
	public function getValuePackEnabled()
	{
		return $this->ValuePackEnabled;
	}
	/**
	 * Set ProPackPlusEnabled
	 * @param boolean ProPackPlusEnabled
	 * @return boolean
	 */
	public function setProPackPlusEnabled($_ProPackPlusEnabled)
	{
		return ($this->ProPackPlusEnabled = $_ProPackPlusEnabled);
	}
	/**
	 * Get ProPackPlusEnabled
	 * @return boolean
	 */
	public function getProPackPlusEnabled()
	{
		return $this->ProPackPlusEnabled;
	}
	/**
	 * Set AdFormatEnabled
	 * @param AdFormatEnabledCodeType AdFormatEnabled
	 * @return AdFormatEnabledCodeType
	 */
	public function setAdFormatEnabled($_AdFormatEnabled)
	{
		return ($this->AdFormatEnabled = EbayTradingTypeAdFormatEnabledCodeType::valueIsValid($_AdFormatEnabled)?$_AdFormatEnabled:null);
	}
	/**
	 * Get AdFormatEnabled
	 * @return EbayTradingTypeAdFormatEnabledCodeType
	 */
	public function getAdFormatEnabled()
	{
		return $this->AdFormatEnabled;
	}
	/**
	 * Set BestOfferCounterEnabled
	 * @param boolean BestOfferCounterEnabled
	 * @return boolean
	 */
	public function setBestOfferCounterEnabled($_BestOfferCounterEnabled)
	{
		return ($this->BestOfferCounterEnabled = $_BestOfferCounterEnabled);
	}
	/**
	 * Get BestOfferCounterEnabled
	 * @return boolean
	 */
	public function getBestOfferCounterEnabled()
	{
		return $this->BestOfferCounterEnabled;
	}
	/**
	 * Set BestOfferAutoDeclineEnabled
	 * @param boolean BestOfferAutoDeclineEnabled
	 * @return boolean
	 */
	public function setBestOfferAutoDeclineEnabled($_BestOfferAutoDeclineEnabled)
	{
		return ($this->BestOfferAutoDeclineEnabled = $_BestOfferAutoDeclineEnabled);
	}
	/**
	 * Get BestOfferAutoDeclineEnabled
	 * @return boolean
	 */
	public function getBestOfferAutoDeclineEnabled()
	{
		return $this->BestOfferAutoDeclineEnabled;
	}
	/**
	 * Set LocalMarketSpecialitySubscription
	 * @param boolean LocalMarketSpecialitySubscription
	 * @return boolean
	 */
	public function setLocalMarketSpecialitySubscription($_LocalMarketSpecialitySubscription)
	{
		return ($this->LocalMarketSpecialitySubscription = $_LocalMarketSpecialitySubscription);
	}
	/**
	 * Get LocalMarketSpecialitySubscription
	 * @return boolean
	 */
	public function getLocalMarketSpecialitySubscription()
	{
		return $this->LocalMarketSpecialitySubscription;
	}
	/**
	 * Set LocalMarketRegularSubscription
	 * @param boolean LocalMarketRegularSubscription
	 * @return boolean
	 */
	public function setLocalMarketRegularSubscription($_LocalMarketRegularSubscription)
	{
		return ($this->LocalMarketRegularSubscription = $_LocalMarketRegularSubscription);
	}
	/**
	 * Get LocalMarketRegularSubscription
	 * @return boolean
	 */
	public function getLocalMarketRegularSubscription()
	{
		return $this->LocalMarketRegularSubscription;
	}
	/**
	 * Set LocalMarketPremiumSubscription
	 * @param boolean LocalMarketPremiumSubscription
	 * @return boolean
	 */
	public function setLocalMarketPremiumSubscription($_LocalMarketPremiumSubscription)
	{
		return ($this->LocalMarketPremiumSubscription = $_LocalMarketPremiumSubscription);
	}
	/**
	 * Get LocalMarketPremiumSubscription
	 * @return boolean
	 */
	public function getLocalMarketPremiumSubscription()
	{
		return $this->LocalMarketPremiumSubscription;
	}
	/**
	 * Set LocalMarketNonSubscription
	 * @param boolean LocalMarketNonSubscription
	 * @return boolean
	 */
	public function setLocalMarketNonSubscription($_LocalMarketNonSubscription)
	{
		return ($this->LocalMarketNonSubscription = $_LocalMarketNonSubscription);
	}
	/**
	 * Get LocalMarketNonSubscription
	 * @return boolean
	 */
	public function getLocalMarketNonSubscription()
	{
		return $this->LocalMarketNonSubscription;
	}
	/**
	 * Set ExpressEnabled
	 * @param boolean ExpressEnabled
	 * @return boolean
	 */
	public function setExpressEnabled($_ExpressEnabled)
	{
		return ($this->ExpressEnabled = $_ExpressEnabled);
	}
	/**
	 * Get ExpressEnabled
	 * @return boolean
	 */
	public function getExpressEnabled()
	{
		return $this->ExpressEnabled;
	}
	/**
	 * Set ExpressPicturesRequired
	 * @param boolean ExpressPicturesRequired
	 * @return boolean
	 */
	public function setExpressPicturesRequired($_ExpressPicturesRequired)
	{
		return ($this->ExpressPicturesRequired = $_ExpressPicturesRequired);
	}
	/**
	 * Get ExpressPicturesRequired
	 * @return boolean
	 */
	public function getExpressPicturesRequired()
	{
		return $this->ExpressPicturesRequired;
	}
	/**
	 * Set ExpressConditionRequired
	 * @param boolean ExpressConditionRequired
	 * @return boolean
	 */
	public function setExpressConditionRequired($_ExpressConditionRequired)
	{
		return ($this->ExpressConditionRequired = $_ExpressConditionRequired);
	}
	/**
	 * Get ExpressConditionRequired
	 * @return boolean
	 */
	public function getExpressConditionRequired()
	{
		return $this->ExpressConditionRequired;
	}
	/**
	 * Set MinimumReservePrice
	 * @param double MinimumReservePrice
	 * @return double
	 */
	public function setMinimumReservePrice($_MinimumReservePrice)
	{
		return ($this->MinimumReservePrice = $_MinimumReservePrice);
	}
	/**
	 * Get MinimumReservePrice
	 * @return double
	 */
	public function getMinimumReservePrice()
	{
		return $this->MinimumReservePrice;
	}
	/**
	 * Set SellerContactDetailsEnabled
	 * @param boolean SellerContactDetailsEnabled
	 * @return boolean
	 */
	public function setSellerContactDetailsEnabled($_SellerContactDetailsEnabled)
	{
		return ($this->SellerContactDetailsEnabled = $_SellerContactDetailsEnabled);
	}
	/**
	 * Get SellerContactDetailsEnabled
	 * @return boolean
	 */
	public function getSellerContactDetailsEnabled()
	{
		return $this->SellerContactDetailsEnabled;
	}
	/**
	 * Set TransactionConfirmationRequestEnabled
	 * @param boolean TransactionConfirmationRequestEnabled
	 * @return boolean
	 */
	public function setTransactionConfirmationRequestEnabled($_TransactionConfirmationRequestEnabled)
	{
		return ($this->TransactionConfirmationRequestEnabled = $_TransactionConfirmationRequestEnabled);
	}
	/**
	 * Get TransactionConfirmationRequestEnabled
	 * @return boolean
	 */
	public function getTransactionConfirmationRequestEnabled()
	{
		return $this->TransactionConfirmationRequestEnabled;
	}
	/**
	 * Set StoreInventoryEnabled
	 * @param boolean StoreInventoryEnabled
	 * @return boolean
	 */
	public function setStoreInventoryEnabled($_StoreInventoryEnabled)
	{
		return ($this->StoreInventoryEnabled = $_StoreInventoryEnabled);
	}
	/**
	 * Get StoreInventoryEnabled
	 * @return boolean
	 */
	public function getStoreInventoryEnabled()
	{
		return $this->StoreInventoryEnabled;
	}
	/**
	 * Set SkypeMeTransactionalEnabled
	 * @param boolean SkypeMeTransactionalEnabled
	 * @return boolean
	 */
	public function setSkypeMeTransactionalEnabled($_SkypeMeTransactionalEnabled)
	{
		return ($this->SkypeMeTransactionalEnabled = $_SkypeMeTransactionalEnabled);
	}
	/**
	 * Get SkypeMeTransactionalEnabled
	 * @return boolean
	 */
	public function getSkypeMeTransactionalEnabled()
	{
		return $this->SkypeMeTransactionalEnabled;
	}
	/**
	 * Set SkypeMeNonTransactionalEnabled
	 * @param boolean SkypeMeNonTransactionalEnabled
	 * @return boolean
	 */
	public function setSkypeMeNonTransactionalEnabled($_SkypeMeNonTransactionalEnabled)
	{
		return ($this->SkypeMeNonTransactionalEnabled = $_SkypeMeNonTransactionalEnabled);
	}
	/**
	 * Get SkypeMeNonTransactionalEnabled
	 * @return boolean
	 */
	public function getSkypeMeNonTransactionalEnabled()
	{
		return $this->SkypeMeNonTransactionalEnabled;
	}
	/**
	 * Set ClassifiedAdPaymentMethodEnabled
	 * @param ClassifiedAdPaymentMethodEnabledCodeType ClassifiedAdPaymentMethodEnabled
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function setClassifiedAdPaymentMethodEnabled($_ClassifiedAdPaymentMethodEnabled)
	{
		return ($this->ClassifiedAdPaymentMethodEnabled = EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($_ClassifiedAdPaymentMethodEnabled)?$_ClassifiedAdPaymentMethodEnabled:null);
	}
	/**
	 * Get ClassifiedAdPaymentMethodEnabled
	 * @return EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function getClassifiedAdPaymentMethodEnabled()
	{
		return $this->ClassifiedAdPaymentMethodEnabled;
	}
	/**
	 * Set ClassifiedAdShippingMethodEnabled
	 * @param boolean ClassifiedAdShippingMethodEnabled
	 * @return boolean
	 */
	public function setClassifiedAdShippingMethodEnabled($_ClassifiedAdShippingMethodEnabled)
	{
		return ($this->ClassifiedAdShippingMethodEnabled = $_ClassifiedAdShippingMethodEnabled);
	}
	/**
	 * Get ClassifiedAdShippingMethodEnabled
	 * @return boolean
	 */
	public function getClassifiedAdShippingMethodEnabled()
	{
		return $this->ClassifiedAdShippingMethodEnabled;
	}
	/**
	 * Set ClassifiedAdBestOfferEnabled
	 * @param ClassifiedAdBestOfferEnabledCodeType ClassifiedAdBestOfferEnabled
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 */
	public function setClassifiedAdBestOfferEnabled($_ClassifiedAdBestOfferEnabled)
	{
		return ($this->ClassifiedAdBestOfferEnabled = EbayTradingTypeClassifiedAdBestOfferEnabledCodeType::valueIsValid($_ClassifiedAdBestOfferEnabled)?$_ClassifiedAdBestOfferEnabled:null);
	}
	/**
	 * Get ClassifiedAdBestOfferEnabled
	 * @return EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public function getClassifiedAdBestOfferEnabled()
	{
		return $this->ClassifiedAdBestOfferEnabled;
	}
	/**
	 * Set ClassifiedAdCounterOfferEnabled
	 * @param boolean ClassifiedAdCounterOfferEnabled
	 * @return boolean
	 */
	public function setClassifiedAdCounterOfferEnabled($_ClassifiedAdCounterOfferEnabled)
	{
		return ($this->ClassifiedAdCounterOfferEnabled = $_ClassifiedAdCounterOfferEnabled);
	}
	/**
	 * Get ClassifiedAdCounterOfferEnabled
	 * @return boolean
	 */
	public function getClassifiedAdCounterOfferEnabled()
	{
		return $this->ClassifiedAdCounterOfferEnabled;
	}
	/**
	 * Set ClassifiedAdAutoDeclineEnabled
	 * @param boolean ClassifiedAdAutoDeclineEnabled
	 * @return boolean
	 */
	public function setClassifiedAdAutoDeclineEnabled($_ClassifiedAdAutoDeclineEnabled)
	{
		return ($this->ClassifiedAdAutoDeclineEnabled = $_ClassifiedAdAutoDeclineEnabled);
	}
	/**
	 * Get ClassifiedAdAutoDeclineEnabled
	 * @return boolean
	 */
	public function getClassifiedAdAutoDeclineEnabled()
	{
		return $this->ClassifiedAdAutoDeclineEnabled;
	}
	/**
	 * Set ClassifiedAdContactByPhoneEnabled
	 * @param boolean ClassifiedAdContactByPhoneEnabled
	 * @return boolean
	 */
	public function setClassifiedAdContactByPhoneEnabled($_ClassifiedAdContactByPhoneEnabled)
	{
		return ($this->ClassifiedAdContactByPhoneEnabled = $_ClassifiedAdContactByPhoneEnabled);
	}
	/**
	 * Get ClassifiedAdContactByPhoneEnabled
	 * @return boolean
	 */
	public function getClassifiedAdContactByPhoneEnabled()
	{
		return $this->ClassifiedAdContactByPhoneEnabled;
	}
	/**
	 * Set ClassifiedAdContactByEmailEnabled
	 * @param boolean ClassifiedAdContactByEmailEnabled
	 * @return boolean
	 */
	public function setClassifiedAdContactByEmailEnabled($_ClassifiedAdContactByEmailEnabled)
	{
		return ($this->ClassifiedAdContactByEmailEnabled = $_ClassifiedAdContactByEmailEnabled);
	}
	/**
	 * Get ClassifiedAdContactByEmailEnabled
	 * @return boolean
	 */
	public function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}
	/**
	 * Set SafePaymentRequired
	 * @param boolean SafePaymentRequired
	 * @return boolean
	 */
	public function setSafePaymentRequired($_SafePaymentRequired)
	{
		return ($this->SafePaymentRequired = $_SafePaymentRequired);
	}
	/**
	 * Get SafePaymentRequired
	 * @return boolean
	 */
	public function getSafePaymentRequired()
	{
		return $this->SafePaymentRequired;
	}
	/**
	 * Set ClassifiedAdPayPerLeadEnabled
	 * @param boolean ClassifiedAdPayPerLeadEnabled
	 * @return boolean
	 */
	public function setClassifiedAdPayPerLeadEnabled($_ClassifiedAdPayPerLeadEnabled)
	{
		return ($this->ClassifiedAdPayPerLeadEnabled = $_ClassifiedAdPayPerLeadEnabled);
	}
	/**
	 * Get ClassifiedAdPayPerLeadEnabled
	 * @return boolean
	 */
	public function getClassifiedAdPayPerLeadEnabled()
	{
		return $this->ClassifiedAdPayPerLeadEnabled;
	}
	/**
	 * Set ItemSpecificsEnabled
	 * @param ItemSpecificsEnabledCodeType ItemSpecificsEnabled
	 * @return ItemSpecificsEnabledCodeType
	 */
	public function setItemSpecificsEnabled($_ItemSpecificsEnabled)
	{
		return ($this->ItemSpecificsEnabled = EbayTradingTypeItemSpecificsEnabledCodeType::valueIsValid($_ItemSpecificsEnabled)?$_ItemSpecificsEnabled:null);
	}
	/**
	 * Get ItemSpecificsEnabled
	 * @return EbayTradingTypeItemSpecificsEnabledCodeType
	 */
	public function getItemSpecificsEnabled()
	{
		return $this->ItemSpecificsEnabled;
	}
	/**
	 * Set PaisaPayFullEscrowEnabled
	 * @param boolean PaisaPayFullEscrowEnabled
	 * @return boolean
	 */
	public function setPaisaPayFullEscrowEnabled($_PaisaPayFullEscrowEnabled)
	{
		return ($this->PaisaPayFullEscrowEnabled = $_PaisaPayFullEscrowEnabled);
	}
	/**
	 * Get PaisaPayFullEscrowEnabled
	 * @return boolean
	 */
	public function getPaisaPayFullEscrowEnabled()
	{
		return $this->PaisaPayFullEscrowEnabled;
	}
	/**
	 * Set UPCIdentifierEnabled
	 * @param boolean UPCIdentifierEnabled
	 * @return boolean
	 */
	public function setUPCIdentifierEnabled($_UPCIdentifierEnabled)
	{
		return ($this->UPCIdentifierEnabled = $_UPCIdentifierEnabled);
	}
	/**
	 * Get UPCIdentifierEnabled
	 * @return boolean
	 */
	public function getUPCIdentifierEnabled()
	{
		return $this->UPCIdentifierEnabled;
	}
	/**
	 * Set EANIdentifierEnabled
	 * @param boolean EANIdentifierEnabled
	 * @return boolean
	 */
	public function setEANIdentifierEnabled($_EANIdentifierEnabled)
	{
		return ($this->EANIdentifierEnabled = $_EANIdentifierEnabled);
	}
	/**
	 * Get EANIdentifierEnabled
	 * @return boolean
	 */
	public function getEANIdentifierEnabled()
	{
		return $this->EANIdentifierEnabled;
	}
	/**
	 * Set ISBNIdentifierEnabled
	 * @param boolean ISBNIdentifierEnabled
	 * @return boolean
	 */
	public function setISBNIdentifierEnabled($_ISBNIdentifierEnabled)
	{
		return ($this->ISBNIdentifierEnabled = $_ISBNIdentifierEnabled);
	}
	/**
	 * Get ISBNIdentifierEnabled
	 * @return boolean
	 */
	public function getISBNIdentifierEnabled()
	{
		return $this->ISBNIdentifierEnabled;
	}
	/**
	 * Set BrandMPNIdentifierEnabled
	 * @param boolean BrandMPNIdentifierEnabled
	 * @return boolean
	 */
	public function setBrandMPNIdentifierEnabled($_BrandMPNIdentifierEnabled)
	{
		return ($this->BrandMPNIdentifierEnabled = $_BrandMPNIdentifierEnabled);
	}
	/**
	 * Get BrandMPNIdentifierEnabled
	 * @return boolean
	 */
	public function getBrandMPNIdentifierEnabled()
	{
		return $this->BrandMPNIdentifierEnabled;
	}
	/**
	 * Set ClassifiedAdAutoAcceptEnabled
	 * @param boolean ClassifiedAdAutoAcceptEnabled
	 * @return boolean
	 */
	public function setClassifiedAdAutoAcceptEnabled($_ClassifiedAdAutoAcceptEnabled)
	{
		return ($this->ClassifiedAdAutoAcceptEnabled = $_ClassifiedAdAutoAcceptEnabled);
	}
	/**
	 * Get ClassifiedAdAutoAcceptEnabled
	 * @return boolean
	 */
	public function getClassifiedAdAutoAcceptEnabled()
	{
		return $this->ClassifiedAdAutoAcceptEnabled;
	}
	/**
	 * Set BestOfferAutoAcceptEnabled
	 * @param boolean BestOfferAutoAcceptEnabled
	 * @return boolean
	 */
	public function setBestOfferAutoAcceptEnabled($_BestOfferAutoAcceptEnabled)
	{
		return ($this->BestOfferAutoAcceptEnabled = $_BestOfferAutoAcceptEnabled);
	}
	/**
	 * Get BestOfferAutoAcceptEnabled
	 * @return boolean
	 */
	public function getBestOfferAutoAcceptEnabled()
	{
		return $this->BestOfferAutoAcceptEnabled;
	}
	/**
	 * Set CrossBorderTradeNorthAmericaEnabled
	 * @param boolean CrossBorderTradeNorthAmericaEnabled
	 * @return boolean
	 */
	public function setCrossBorderTradeNorthAmericaEnabled($_CrossBorderTradeNorthAmericaEnabled)
	{
		return ($this->CrossBorderTradeNorthAmericaEnabled = $_CrossBorderTradeNorthAmericaEnabled);
	}
	/**
	 * Get CrossBorderTradeNorthAmericaEnabled
	 * @return boolean
	 */
	public function getCrossBorderTradeNorthAmericaEnabled()
	{
		return $this->CrossBorderTradeNorthAmericaEnabled;
	}
	/**
	 * Set CrossBorderTradeGBEnabled
	 * @param boolean CrossBorderTradeGBEnabled
	 * @return boolean
	 */
	public function setCrossBorderTradeGBEnabled($_CrossBorderTradeGBEnabled)
	{
		return ($this->CrossBorderTradeGBEnabled = $_CrossBorderTradeGBEnabled);
	}
	/**
	 * Get CrossBorderTradeGBEnabled
	 * @return boolean
	 */
	public function getCrossBorderTradeGBEnabled()
	{
		return $this->CrossBorderTradeGBEnabled;
	}
	/**
	 * Set CrossBorderTradeAustraliaEnabled
	 * @param boolean CrossBorderTradeAustraliaEnabled
	 * @return boolean
	 */
	public function setCrossBorderTradeAustraliaEnabled($_CrossBorderTradeAustraliaEnabled)
	{
		return ($this->CrossBorderTradeAustraliaEnabled = $_CrossBorderTradeAustraliaEnabled);
	}
	/**
	 * Get CrossBorderTradeAustraliaEnabled
	 * @return boolean
	 */
	public function getCrossBorderTradeAustraliaEnabled()
	{
		return $this->CrossBorderTradeAustraliaEnabled;
	}
	/**
	 * Set PayPalBuyerProtectionEnabled
	 * @param boolean PayPalBuyerProtectionEnabled
	 * @return boolean
	 */
	public function setPayPalBuyerProtectionEnabled($_PayPalBuyerProtectionEnabled)
	{
		return ($this->PayPalBuyerProtectionEnabled = $_PayPalBuyerProtectionEnabled);
	}
	/**
	 * Get PayPalBuyerProtectionEnabled
	 * @return boolean
	 */
	public function getPayPalBuyerProtectionEnabled()
	{
		return $this->PayPalBuyerProtectionEnabled;
	}
	/**
	 * Set BuyerGuaranteeEnabled
	 * @param boolean BuyerGuaranteeEnabled
	 * @return boolean
	 */
	public function setBuyerGuaranteeEnabled($_BuyerGuaranteeEnabled)
	{
		return ($this->BuyerGuaranteeEnabled = $_BuyerGuaranteeEnabled);
	}
	/**
	 * Get BuyerGuaranteeEnabled
	 * @return boolean
	 */
	public function getBuyerGuaranteeEnabled()
	{
		return $this->BuyerGuaranteeEnabled;
	}
	/**
	 * Set CombinedFixedPriceTreatmentEnabled
	 * @param boolean CombinedFixedPriceTreatmentEnabled
	 * @return boolean
	 */
	public function setCombinedFixedPriceTreatmentEnabled($_CombinedFixedPriceTreatmentEnabled)
	{
		return ($this->CombinedFixedPriceTreatmentEnabled = $_CombinedFixedPriceTreatmentEnabled);
	}
	/**
	 * Get CombinedFixedPriceTreatmentEnabled
	 * @return boolean
	 */
	public function getCombinedFixedPriceTreatmentEnabled()
	{
		return $this->CombinedFixedPriceTreatmentEnabled;
	}
	/**
	 * Set GalleryFeaturedDurations
	 * @param ListingEnhancementDurationReferenceType GalleryFeaturedDurations
	 * @return ListingEnhancementDurationReferenceType
	 */
	public function setGalleryFeaturedDurations($_GalleryFeaturedDurations)
	{
		return ($this->GalleryFeaturedDurations = $_GalleryFeaturedDurations);
	}
	/**
	 * Get GalleryFeaturedDurations
	 * @return EbayTradingTypeListingEnhancementDurationReferenceType
	 */
	public function getGalleryFeaturedDurations()
	{
		return $this->GalleryFeaturedDurations;
	}
	/**
	 * Set PayPalRequired
	 * @param boolean PayPalRequired
	 * @return boolean
	 */
	public function setPayPalRequired($_PayPalRequired)
	{
		return ($this->PayPalRequired = $_PayPalRequired);
	}
	/**
	 * Get PayPalRequired
	 * @return boolean
	 */
	public function getPayPalRequired()
	{
		return $this->PayPalRequired;
	}
	/**
	 * Set eBayMotorsProAdFormatEnabled
	 * @param AdFormatEnabledCodeType eBayMotorsProAdFormatEnabled
	 * @return AdFormatEnabledCodeType
	 */
	public function setEBayMotorsProAdFormatEnabled($_eBayMotorsProAdFormatEnabled)
	{
		return ($this->eBayMotorsProAdFormatEnabled = EbayTradingTypeAdFormatEnabledCodeType::valueIsValid($_eBayMotorsProAdFormatEnabled)?$_eBayMotorsProAdFormatEnabled:null);
	}
	/**
	 * Get eBayMotorsProAdFormatEnabled
	 * @return EbayTradingTypeAdFormatEnabledCodeType
	 */
	public function getEBayMotorsProAdFormatEnabled()
	{
		return $this->eBayMotorsProAdFormatEnabled;
	}
	/**
	 * Set eBayMotorsProContactByPhoneEnabled
	 * @param boolean eBayMotorsProContactByPhoneEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProContactByPhoneEnabled($_eBayMotorsProContactByPhoneEnabled)
	{
		return ($this->eBayMotorsProContactByPhoneEnabled = $_eBayMotorsProContactByPhoneEnabled);
	}
	/**
	 * Get eBayMotorsProContactByPhoneEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProContactByPhoneEnabled()
	{
		return $this->eBayMotorsProContactByPhoneEnabled;
	}
	/**
	 * Set eBayMotorsProPhoneCount
	 * @param int eBayMotorsProPhoneCount
	 * @return int
	 */
	public function setEBayMotorsProPhoneCount($_eBayMotorsProPhoneCount)
	{
		return ($this->eBayMotorsProPhoneCount = $_eBayMotorsProPhoneCount);
	}
	/**
	 * Get eBayMotorsProPhoneCount
	 * @return int
	 */
	public function getEBayMotorsProPhoneCount()
	{
		return $this->eBayMotorsProPhoneCount;
	}
	/**
	 * Set eBayMotorsProContactByAddressEnabled
	 * @param boolean eBayMotorsProContactByAddressEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProContactByAddressEnabled($_eBayMotorsProContactByAddressEnabled)
	{
		return ($this->eBayMotorsProContactByAddressEnabled = $_eBayMotorsProContactByAddressEnabled);
	}
	/**
	 * Get eBayMotorsProContactByAddressEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProContactByAddressEnabled()
	{
		return $this->eBayMotorsProContactByAddressEnabled;
	}
	/**
	 * Set eBayMotorsProStreetCount
	 * @param int eBayMotorsProStreetCount
	 * @return int
	 */
	public function setEBayMotorsProStreetCount($_eBayMotorsProStreetCount)
	{
		return ($this->eBayMotorsProStreetCount = $_eBayMotorsProStreetCount);
	}
	/**
	 * Get eBayMotorsProStreetCount
	 * @return int
	 */
	public function getEBayMotorsProStreetCount()
	{
		return $this->eBayMotorsProStreetCount;
	}
	/**
	 * Set eBayMotorsProCompanyNameEnabled
	 * @param boolean eBayMotorsProCompanyNameEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProCompanyNameEnabled($_eBayMotorsProCompanyNameEnabled)
	{
		return ($this->eBayMotorsProCompanyNameEnabled = $_eBayMotorsProCompanyNameEnabled);
	}
	/**
	 * Get eBayMotorsProCompanyNameEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProCompanyNameEnabled()
	{
		return $this->eBayMotorsProCompanyNameEnabled;
	}
	/**
	 * Set eBayMotorsProContactByEmailEnabled
	 * @param boolean eBayMotorsProContactByEmailEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProContactByEmailEnabled($_eBayMotorsProContactByEmailEnabled)
	{
		return ($this->eBayMotorsProContactByEmailEnabled = $_eBayMotorsProContactByEmailEnabled);
	}
	/**
	 * Get eBayMotorsProContactByEmailEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProContactByEmailEnabled()
	{
		return $this->eBayMotorsProContactByEmailEnabled;
	}
	/**
	 * Set eBayMotorsProBestOfferEnabled
	 * @param ClassifiedAdBestOfferEnabledCodeType eBayMotorsProBestOfferEnabled
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 */
	public function setEBayMotorsProBestOfferEnabled($_eBayMotorsProBestOfferEnabled)
	{
		return ($this->eBayMotorsProBestOfferEnabled = EbayTradingTypeClassifiedAdBestOfferEnabledCodeType::valueIsValid($_eBayMotorsProBestOfferEnabled)?$_eBayMotorsProBestOfferEnabled:null);
	}
	/**
	 * Get eBayMotorsProBestOfferEnabled
	 * @return EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public function getEBayMotorsProBestOfferEnabled()
	{
		return $this->eBayMotorsProBestOfferEnabled;
	}
	/**
	 * Set eBayMotorsProAutoAcceptEnabled
	 * @param boolean eBayMotorsProAutoAcceptEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProAutoAcceptEnabled($_eBayMotorsProAutoAcceptEnabled)
	{
		return ($this->eBayMotorsProAutoAcceptEnabled = $_eBayMotorsProAutoAcceptEnabled);
	}
	/**
	 * Get eBayMotorsProAutoAcceptEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProAutoAcceptEnabled()
	{
		return $this->eBayMotorsProAutoAcceptEnabled;
	}
	/**
	 * Set eBayMotorsProAutoDeclineEnabled
	 * @param boolean eBayMotorsProAutoDeclineEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProAutoDeclineEnabled($_eBayMotorsProAutoDeclineEnabled)
	{
		return ($this->eBayMotorsProAutoDeclineEnabled = $_eBayMotorsProAutoDeclineEnabled);
	}
	/**
	 * Get eBayMotorsProAutoDeclineEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProAutoDeclineEnabled()
	{
		return $this->eBayMotorsProAutoDeclineEnabled;
	}
	/**
	 * Set eBayMotorsProPaymentMethodCheckOutEnabled
	 * @param ClassifiedAdPaymentMethodEnabledCodeType eBayMotorsProPaymentMethodCheckOutEnabled
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function setEBayMotorsProPaymentMethodCheckOutEnabled($_eBayMotorsProPaymentMethodCheckOutEnabled)
	{
		return ($this->eBayMotorsProPaymentMethodCheckOutEnabled = EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($_eBayMotorsProPaymentMethodCheckOutEnabled)?$_eBayMotorsProPaymentMethodCheckOutEnabled:null);
	}
	/**
	 * Get eBayMotorsProPaymentMethodCheckOutEnabled
	 * @return EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function getEBayMotorsProPaymentMethodCheckOutEnabled()
	{
		return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
	}
	/**
	 * Set eBayMotorsProShippingMethodEnabled
	 * @param boolean eBayMotorsProShippingMethodEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProShippingMethodEnabled($_eBayMotorsProShippingMethodEnabled)
	{
		return ($this->eBayMotorsProShippingMethodEnabled = $_eBayMotorsProShippingMethodEnabled);
	}
	/**
	 * Get eBayMotorsProShippingMethodEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProShippingMethodEnabled()
	{
		return $this->eBayMotorsProShippingMethodEnabled;
	}
	/**
	 * Set eBayMotorsProCounterOfferEnabled
	 * @param boolean eBayMotorsProCounterOfferEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProCounterOfferEnabled($_eBayMotorsProCounterOfferEnabled)
	{
		return ($this->eBayMotorsProCounterOfferEnabled = $_eBayMotorsProCounterOfferEnabled);
	}
	/**
	 * Get eBayMotorsProCounterOfferEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProCounterOfferEnabled()
	{
		return $this->eBayMotorsProCounterOfferEnabled;
	}
	/**
	 * Set eBayMotorsProSellerContactDetailsEnabled
	 * @param boolean eBayMotorsProSellerContactDetailsEnabled
	 * @return boolean
	 */
	public function setEBayMotorsProSellerContactDetailsEnabled($_eBayMotorsProSellerContactDetailsEnabled)
	{
		return ($this->eBayMotorsProSellerContactDetailsEnabled = $_eBayMotorsProSellerContactDetailsEnabled);
	}
	/**
	 * Get eBayMotorsProSellerContactDetailsEnabled
	 * @return boolean
	 */
	public function getEBayMotorsProSellerContactDetailsEnabled()
	{
		return $this->eBayMotorsProSellerContactDetailsEnabled;
	}
	/**
	 * Set LocalMarketAdFormatEnabled
	 * @param AdFormatEnabledCodeType LocalMarketAdFormatEnabled
	 * @return AdFormatEnabledCodeType
	 */
	public function setLocalMarketAdFormatEnabled($_LocalMarketAdFormatEnabled)
	{
		return ($this->LocalMarketAdFormatEnabled = EbayTradingTypeAdFormatEnabledCodeType::valueIsValid($_LocalMarketAdFormatEnabled)?$_LocalMarketAdFormatEnabled:null);
	}
	/**
	 * Get LocalMarketAdFormatEnabled
	 * @return EbayTradingTypeAdFormatEnabledCodeType
	 */
	public function getLocalMarketAdFormatEnabled()
	{
		return $this->LocalMarketAdFormatEnabled;
	}
	/**
	 * Set LocalMarketContactByPhoneEnabled
	 * @param boolean LocalMarketContactByPhoneEnabled
	 * @return boolean
	 */
	public function setLocalMarketContactByPhoneEnabled($_LocalMarketContactByPhoneEnabled)
	{
		return ($this->LocalMarketContactByPhoneEnabled = $_LocalMarketContactByPhoneEnabled);
	}
	/**
	 * Get LocalMarketContactByPhoneEnabled
	 * @return boolean
	 */
	public function getLocalMarketContactByPhoneEnabled()
	{
		return $this->LocalMarketContactByPhoneEnabled;
	}
	/**
	 * Set LocalMarketPhoneCount
	 * @param int LocalMarketPhoneCount
	 * @return int
	 */
	public function setLocalMarketPhoneCount($_LocalMarketPhoneCount)
	{
		return ($this->LocalMarketPhoneCount = $_LocalMarketPhoneCount);
	}
	/**
	 * Get LocalMarketPhoneCount
	 * @return int
	 */
	public function getLocalMarketPhoneCount()
	{
		return $this->LocalMarketPhoneCount;
	}
	/**
	 * Set LocalMarketContactByAddressEnabled
	 * @param boolean LocalMarketContactByAddressEnabled
	 * @return boolean
	 */
	public function setLocalMarketContactByAddressEnabled($_LocalMarketContactByAddressEnabled)
	{
		return ($this->LocalMarketContactByAddressEnabled = $_LocalMarketContactByAddressEnabled);
	}
	/**
	 * Get LocalMarketContactByAddressEnabled
	 * @return boolean
	 */
	public function getLocalMarketContactByAddressEnabled()
	{
		return $this->LocalMarketContactByAddressEnabled;
	}
	/**
	 * Set LocalMarketStreetCount
	 * @param int LocalMarketStreetCount
	 * @return int
	 */
	public function setLocalMarketStreetCount($_LocalMarketStreetCount)
	{
		return ($this->LocalMarketStreetCount = $_LocalMarketStreetCount);
	}
	/**
	 * Get LocalMarketStreetCount
	 * @return int
	 */
	public function getLocalMarketStreetCount()
	{
		return $this->LocalMarketStreetCount;
	}
	/**
	 * Set LocalMarketCompanyNameEnabled
	 * @param boolean LocalMarketCompanyNameEnabled
	 * @return boolean
	 */
	public function setLocalMarketCompanyNameEnabled($_LocalMarketCompanyNameEnabled)
	{
		return ($this->LocalMarketCompanyNameEnabled = $_LocalMarketCompanyNameEnabled);
	}
	/**
	 * Get LocalMarketCompanyNameEnabled
	 * @return boolean
	 */
	public function getLocalMarketCompanyNameEnabled()
	{
		return $this->LocalMarketCompanyNameEnabled;
	}
	/**
	 * Set LocalMarketContactByEmailEnabled
	 * @param boolean LocalMarketContactByEmailEnabled
	 * @return boolean
	 */
	public function setLocalMarketContactByEmailEnabled($_LocalMarketContactByEmailEnabled)
	{
		return ($this->LocalMarketContactByEmailEnabled = $_LocalMarketContactByEmailEnabled);
	}
	/**
	 * Get LocalMarketContactByEmailEnabled
	 * @return boolean
	 */
	public function getLocalMarketContactByEmailEnabled()
	{
		return $this->LocalMarketContactByEmailEnabled;
	}
	/**
	 * Set LocalMarketBestOfferEnabled
	 * @param ClassifiedAdBestOfferEnabledCodeType LocalMarketBestOfferEnabled
	 * @return ClassifiedAdBestOfferEnabledCodeType
	 */
	public function setLocalMarketBestOfferEnabled($_LocalMarketBestOfferEnabled)
	{
		return ($this->LocalMarketBestOfferEnabled = EbayTradingTypeClassifiedAdBestOfferEnabledCodeType::valueIsValid($_LocalMarketBestOfferEnabled)?$_LocalMarketBestOfferEnabled:null);
	}
	/**
	 * Get LocalMarketBestOfferEnabled
	 * @return EbayTradingTypeClassifiedAdBestOfferEnabledCodeType
	 */
	public function getLocalMarketBestOfferEnabled()
	{
		return $this->LocalMarketBestOfferEnabled;
	}
	/**
	 * Set LocalMarketAutoAcceptEnabled
	 * @param boolean LocalMarketAutoAcceptEnabled
	 * @return boolean
	 */
	public function setLocalMarketAutoAcceptEnabled($_LocalMarketAutoAcceptEnabled)
	{
		return ($this->LocalMarketAutoAcceptEnabled = $_LocalMarketAutoAcceptEnabled);
	}
	/**
	 * Get LocalMarketAutoAcceptEnabled
	 * @return boolean
	 */
	public function getLocalMarketAutoAcceptEnabled()
	{
		return $this->LocalMarketAutoAcceptEnabled;
	}
	/**
	 * Set LocalMarketAutoDeclineEnabled
	 * @param boolean LocalMarketAutoDeclineEnabled
	 * @return boolean
	 */
	public function setLocalMarketAutoDeclineEnabled($_LocalMarketAutoDeclineEnabled)
	{
		return ($this->LocalMarketAutoDeclineEnabled = $_LocalMarketAutoDeclineEnabled);
	}
	/**
	 * Get LocalMarketAutoDeclineEnabled
	 * @return boolean
	 */
	public function getLocalMarketAutoDeclineEnabled()
	{
		return $this->LocalMarketAutoDeclineEnabled;
	}
	/**
	 * Set LocalMarketPaymentMethodCheckOutEnabled
	 * @param ClassifiedAdPaymentMethodEnabledCodeType LocalMarketPaymentMethodCheckOutEnabled
	 * @return ClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function setLocalMarketPaymentMethodCheckOutEnabled($_LocalMarketPaymentMethodCheckOutEnabled)
	{
		return ($this->LocalMarketPaymentMethodCheckOutEnabled = EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($_LocalMarketPaymentMethodCheckOutEnabled)?$_LocalMarketPaymentMethodCheckOutEnabled:null);
	}
	/**
	 * Get LocalMarketPaymentMethodCheckOutEnabled
	 * @return EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
	 */
	public function getLocalMarketPaymentMethodCheckOutEnabled()
	{
		return $this->LocalMarketPaymentMethodCheckOutEnabled;
	}
	/**
	 * Set LocalMarketShippingMethodEnabled
	 * @param boolean LocalMarketShippingMethodEnabled
	 * @return boolean
	 */
	public function setLocalMarketShippingMethodEnabled($_LocalMarketShippingMethodEnabled)
	{
		return ($this->LocalMarketShippingMethodEnabled = $_LocalMarketShippingMethodEnabled);
	}
	/**
	 * Get LocalMarketShippingMethodEnabled
	 * @return boolean
	 */
	public function getLocalMarketShippingMethodEnabled()
	{
		return $this->LocalMarketShippingMethodEnabled;
	}
	/**
	 * Set LocalMarketCounterOfferEnabled
	 * @param boolean LocalMarketCounterOfferEnabled
	 * @return boolean
	 */
	public function setLocalMarketCounterOfferEnabled($_LocalMarketCounterOfferEnabled)
	{
		return ($this->LocalMarketCounterOfferEnabled = $_LocalMarketCounterOfferEnabled);
	}
	/**
	 * Get LocalMarketCounterOfferEnabled
	 * @return boolean
	 */
	public function getLocalMarketCounterOfferEnabled()
	{
		return $this->LocalMarketCounterOfferEnabled;
	}
	/**
	 * Set LocalMarketSellerContactDetailsEnabled
	 * @param boolean LocalMarketSellerContactDetailsEnabled
	 * @return boolean
	 */
	public function setLocalMarketSellerContactDetailsEnabled($_LocalMarketSellerContactDetailsEnabled)
	{
		return ($this->LocalMarketSellerContactDetailsEnabled = $_LocalMarketSellerContactDetailsEnabled);
	}
	/**
	 * Get LocalMarketSellerContactDetailsEnabled
	 * @return boolean
	 */
	public function getLocalMarketSellerContactDetailsEnabled()
	{
		return $this->LocalMarketSellerContactDetailsEnabled;
	}
	/**
	 * Set ClassifiedAdPhoneCount
	 * @param int ClassifiedAdPhoneCount
	 * @return int
	 */
	public function setClassifiedAdPhoneCount($_ClassifiedAdPhoneCount)
	{
		return ($this->ClassifiedAdPhoneCount = $_ClassifiedAdPhoneCount);
	}
	/**
	 * Get ClassifiedAdPhoneCount
	 * @return int
	 */
	public function getClassifiedAdPhoneCount()
	{
		return $this->ClassifiedAdPhoneCount;
	}
	/**
	 * Set ClassifiedAdContactByAddressEnabled
	 * @param boolean ClassifiedAdContactByAddressEnabled
	 * @return boolean
	 */
	public function setClassifiedAdContactByAddressEnabled($_ClassifiedAdContactByAddressEnabled)
	{
		return ($this->ClassifiedAdContactByAddressEnabled = $_ClassifiedAdContactByAddressEnabled);
	}
	/**
	 * Get ClassifiedAdContactByAddressEnabled
	 * @return boolean
	 */
	public function getClassifiedAdContactByAddressEnabled()
	{
		return $this->ClassifiedAdContactByAddressEnabled;
	}
	/**
	 * Set ClassifiedAdStreetCount
	 * @param int ClassifiedAdStreetCount
	 * @return int
	 */
	public function setClassifiedAdStreetCount($_ClassifiedAdStreetCount)
	{
		return ($this->ClassifiedAdStreetCount = $_ClassifiedAdStreetCount);
	}
	/**
	 * Get ClassifiedAdStreetCount
	 * @return int
	 */
	public function getClassifiedAdStreetCount()
	{
		return $this->ClassifiedAdStreetCount;
	}
	/**
	 * Set ClassifiedAdCompanyNameEnabled
	 * @param boolean ClassifiedAdCompanyNameEnabled
	 * @return boolean
	 */
	public function setClassifiedAdCompanyNameEnabled($_ClassifiedAdCompanyNameEnabled)
	{
		return ($this->ClassifiedAdCompanyNameEnabled = $_ClassifiedAdCompanyNameEnabled);
	}
	/**
	 * Get ClassifiedAdCompanyNameEnabled
	 * @return boolean
	 */
	public function getClassifiedAdCompanyNameEnabled()
	{
		return $this->ClassifiedAdCompanyNameEnabled;
	}
	/**
	 * Set SpecialitySubscription
	 * @param GeographicExposureCodeType SpecialitySubscription
	 * @return GeographicExposureCodeType
	 */
	public function setSpecialitySubscription($_SpecialitySubscription)
	{
		return ($this->SpecialitySubscription = EbayTradingTypeGeographicExposureCodeType::valueIsValid($_SpecialitySubscription)?$_SpecialitySubscription:null);
	}
	/**
	 * Get SpecialitySubscription
	 * @return EbayTradingTypeGeographicExposureCodeType
	 */
	public function getSpecialitySubscription()
	{
		return $this->SpecialitySubscription;
	}
	/**
	 * Set RegularSubscription
	 * @param GeographicExposureCodeType RegularSubscription
	 * @return GeographicExposureCodeType
	 */
	public function setRegularSubscription($_RegularSubscription)
	{
		return ($this->RegularSubscription = EbayTradingTypeGeographicExposureCodeType::valueIsValid($_RegularSubscription)?$_RegularSubscription:null);
	}
	/**
	 * Get RegularSubscription
	 * @return EbayTradingTypeGeographicExposureCodeType
	 */
	public function getRegularSubscription()
	{
		return $this->RegularSubscription;
	}
	/**
	 * Set PremiumSubscription
	 * @param GeographicExposureCodeType PremiumSubscription
	 * @return GeographicExposureCodeType
	 */
	public function setPremiumSubscription($_PremiumSubscription)
	{
		return ($this->PremiumSubscription = EbayTradingTypeGeographicExposureCodeType::valueIsValid($_PremiumSubscription)?$_PremiumSubscription:null);
	}
	/**
	 * Get PremiumSubscription
	 * @return EbayTradingTypeGeographicExposureCodeType
	 */
	public function getPremiumSubscription()
	{
		return $this->PremiumSubscription;
	}
	/**
	 * Set NonSubscription
	 * @param GeographicExposureCodeType NonSubscription
	 * @return GeographicExposureCodeType
	 */
	public function setNonSubscription($_NonSubscription)
	{
		return ($this->NonSubscription = EbayTradingTypeGeographicExposureCodeType::valueIsValid($_NonSubscription)?$_NonSubscription:null);
	}
	/**
	 * Get NonSubscription
	 * @return EbayTradingTypeGeographicExposureCodeType
	 */
	public function getNonSubscription()
	{
		return $this->NonSubscription;
	}
	/**
	 * Set INEscrowWorkflowTimeline
	 * @param INEscrowWorkflowTimelineCodeType INEscrowWorkflowTimeline
	 * @return INEscrowWorkflowTimelineCodeType
	 */
	public function setINEscrowWorkflowTimeline($_INEscrowWorkflowTimeline)
	{
		return ($this->INEscrowWorkflowTimeline = EbayTradingTypeINEscrowWorkflowTimelineCodeType::valueIsValid($_INEscrowWorkflowTimeline)?$_INEscrowWorkflowTimeline:null);
	}
	/**
	 * Get INEscrowWorkflowTimeline
	 * @return EbayTradingTypeINEscrowWorkflowTimelineCodeType
	 */
	public function getINEscrowWorkflowTimeline()
	{
		return $this->INEscrowWorkflowTimeline;
	}
	/**
	 * Set PayPalRequiredForStoreOwner
	 * @param boolean PayPalRequiredForStoreOwner
	 * @return boolean
	 */
	public function setPayPalRequiredForStoreOwner($_PayPalRequiredForStoreOwner)
	{
		return ($this->PayPalRequiredForStoreOwner = $_PayPalRequiredForStoreOwner);
	}
	/**
	 * Get PayPalRequiredForStoreOwner
	 * @return boolean
	 */
	public function getPayPalRequiredForStoreOwner()
	{
		return $this->PayPalRequiredForStoreOwner;
	}
	/**
	 * Set ReviseQuantityAllowed
	 * @param boolean ReviseQuantityAllowed
	 * @return boolean
	 */
	public function setReviseQuantityAllowed($_ReviseQuantityAllowed)
	{
		return ($this->ReviseQuantityAllowed = $_ReviseQuantityAllowed);
	}
	/**
	 * Get ReviseQuantityAllowed
	 * @return boolean
	 */
	public function getReviseQuantityAllowed()
	{
		return $this->ReviseQuantityAllowed;
	}
	/**
	 * Set RevisePriceAllowed
	 * @param boolean RevisePriceAllowed
	 * @return boolean
	 */
	public function setRevisePriceAllowed($_RevisePriceAllowed)
	{
		return ($this->RevisePriceAllowed = $_RevisePriceAllowed);
	}
	/**
	 * Get RevisePriceAllowed
	 * @return boolean
	 */
	public function getRevisePriceAllowed()
	{
		return $this->RevisePriceAllowed;
	}
	/**
	 * Set StoreOwnerExtendedListingDurationsEnabled
	 * @param boolean StoreOwnerExtendedListingDurationsEnabled
	 * @return boolean
	 */
	public function setStoreOwnerExtendedListingDurationsEnabled($_StoreOwnerExtendedListingDurationsEnabled)
	{
		return ($this->StoreOwnerExtendedListingDurationsEnabled = $_StoreOwnerExtendedListingDurationsEnabled);
	}
	/**
	 * Get StoreOwnerExtendedListingDurationsEnabled
	 * @return boolean
	 */
	public function getStoreOwnerExtendedListingDurationsEnabled()
	{
		return $this->StoreOwnerExtendedListingDurationsEnabled;
	}
	/**
	 * Set StoreOwnerExtendedListingDurations
	 * @param StoreOwnerExtendedListingDurationsType StoreOwnerExtendedListingDurations
	 * @return StoreOwnerExtendedListingDurationsType
	 */
	public function setStoreOwnerExtendedListingDurations($_StoreOwnerExtendedListingDurations)
	{
		return ($this->StoreOwnerExtendedListingDurations = $_StoreOwnerExtendedListingDurations);
	}
	/**
	 * Get StoreOwnerExtendedListingDurations
	 * @return EbayTradingTypeStoreOwnerExtendedListingDurationsType
	 */
	public function getStoreOwnerExtendedListingDurations()
	{
		return $this->StoreOwnerExtendedListingDurations;
	}
	/**
	 * Set ReturnPolicyEnabled
	 * @param boolean ReturnPolicyEnabled
	 * @return boolean
	 */
	public function setReturnPolicyEnabled($_ReturnPolicyEnabled)
	{
		return ($this->ReturnPolicyEnabled = $_ReturnPolicyEnabled);
	}
	/**
	 * Get ReturnPolicyEnabled
	 * @return boolean
	 */
	public function getReturnPolicyEnabled()
	{
		return $this->ReturnPolicyEnabled;
	}
	/**
	 * Set HandlingTimeEnabled
	 * @param boolean HandlingTimeEnabled
	 * @return boolean
	 */
	public function setHandlingTimeEnabled($_HandlingTimeEnabled)
	{
		return ($this->HandlingTimeEnabled = $_HandlingTimeEnabled);
	}
	/**
	 * Get HandlingTimeEnabled
	 * @return boolean
	 */
	public function getHandlingTimeEnabled()
	{
		return $this->HandlingTimeEnabled;
	}
	/**
	 * Set MaxFlatShippingCost
	 * @param AmountType MaxFlatShippingCost
	 * @return AmountType
	 */
	public function setMaxFlatShippingCost($_MaxFlatShippingCost)
	{
		return ($this->MaxFlatShippingCost = $_MaxFlatShippingCost);
	}
	/**
	 * Get MaxFlatShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getMaxFlatShippingCost()
	{
		return $this->MaxFlatShippingCost;
	}
	/**
	 * Set Group1MaxFlatShippingCost
	 * @param AmountType Group1MaxFlatShippingCost
	 * @return AmountType
	 */
	public function setGroup1MaxFlatShippingCost($_Group1MaxFlatShippingCost)
	{
		return ($this->Group1MaxFlatShippingCost = $_Group1MaxFlatShippingCost);
	}
	/**
	 * Get Group1MaxFlatShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getGroup1MaxFlatShippingCost()
	{
		return $this->Group1MaxFlatShippingCost;
	}
	/**
	 * Set Group2MaxFlatShippingCost
	 * @param AmountType Group2MaxFlatShippingCost
	 * @return AmountType
	 */
	public function setGroup2MaxFlatShippingCost($_Group2MaxFlatShippingCost)
	{
		return ($this->Group2MaxFlatShippingCost = $_Group2MaxFlatShippingCost);
	}
	/**
	 * Get Group2MaxFlatShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getGroup2MaxFlatShippingCost()
	{
		return $this->Group2MaxFlatShippingCost;
	}
	/**
	 * Set Group3MaxFlatShippingCost
	 * @param AmountType Group3MaxFlatShippingCost
	 * @return AmountType
	 */
	public function setGroup3MaxFlatShippingCost($_Group3MaxFlatShippingCost)
	{
		return ($this->Group3MaxFlatShippingCost = $_Group3MaxFlatShippingCost);
	}
	/**
	 * Get Group3MaxFlatShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getGroup3MaxFlatShippingCost()
	{
		return $this->Group3MaxFlatShippingCost;
	}
	/**
	 * Set PaymentMethod
	 * @param BuyerPaymentMethodCodeType PaymentMethod
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set VariationsEnabled
	 * @param boolean VariationsEnabled
	 * @return boolean
	 */
	public function setVariationsEnabled($_VariationsEnabled)
	{
		return ($this->VariationsEnabled = $_VariationsEnabled);
	}
	/**
	 * Get VariationsEnabled
	 * @return boolean
	 */
	public function getVariationsEnabled()
	{
		return $this->VariationsEnabled;
	}
	/**
	 * Set AttributeConversionEnabled
	 * @param AttributeConversionEnabledCodeType AttributeConversionEnabled
	 * @return AttributeConversionEnabledCodeType
	 */
	public function setAttributeConversionEnabled($_AttributeConversionEnabled)
	{
		return ($this->AttributeConversionEnabled = EbayTradingTypeAttributeConversionEnabledCodeType::valueIsValid($_AttributeConversionEnabled)?$_AttributeConversionEnabled:null);
	}
	/**
	 * Get AttributeConversionEnabled
	 * @return EbayTradingTypeAttributeConversionEnabledCodeType
	 */
	public function getAttributeConversionEnabled()
	{
		return $this->AttributeConversionEnabled;
	}
	/**
	 * Set FreeGalleryPlusEnabled
	 * @param boolean FreeGalleryPlusEnabled
	 * @return boolean
	 */
	public function setFreeGalleryPlusEnabled($_FreeGalleryPlusEnabled)
	{
		return ($this->FreeGalleryPlusEnabled = $_FreeGalleryPlusEnabled);
	}
	/**
	 * Get FreeGalleryPlusEnabled
	 * @return boolean
	 */
	public function getFreeGalleryPlusEnabled()
	{
		return $this->FreeGalleryPlusEnabled;
	}
	/**
	 * Set FreePicturePackEnabled
	 * @param boolean FreePicturePackEnabled
	 * @return boolean
	 */
	public function setFreePicturePackEnabled($_FreePicturePackEnabled)
	{
		return ($this->FreePicturePackEnabled = $_FreePicturePackEnabled);
	}
	/**
	 * Get FreePicturePackEnabled
	 * @return boolean
	 */
	public function getFreePicturePackEnabled()
	{
		return $this->FreePicturePackEnabled;
	}
	/**
	 * Set ItemCompatibilityEnabled
	 * @param ItemCompatibilityEnabledCodeType ItemCompatibilityEnabled
	 * @return ItemCompatibilityEnabledCodeType
	 */
	public function setItemCompatibilityEnabled($_ItemCompatibilityEnabled)
	{
		return ($this->ItemCompatibilityEnabled = EbayTradingTypeItemCompatibilityEnabledCodeType::valueIsValid($_ItemCompatibilityEnabled)?$_ItemCompatibilityEnabled:null);
	}
	/**
	 * Get ItemCompatibilityEnabled
	 * @return EbayTradingTypeItemCompatibilityEnabledCodeType
	 */
	public function getItemCompatibilityEnabled()
	{
		return $this->ItemCompatibilityEnabled;
	}
	/**
	 * Set MinItemCompatibility
	 * @param int MinItemCompatibility
	 * @return int
	 */
	public function setMinItemCompatibility($_MinItemCompatibility)
	{
		return ($this->MinItemCompatibility = $_MinItemCompatibility);
	}
	/**
	 * Get MinItemCompatibility
	 * @return int
	 */
	public function getMinItemCompatibility()
	{
		return $this->MinItemCompatibility;
	}
	/**
	 * Set MaxItemCompatibility
	 * @param int MaxItemCompatibility
	 * @return int
	 */
	public function setMaxItemCompatibility($_MaxItemCompatibility)
	{
		return ($this->MaxItemCompatibility = $_MaxItemCompatibility);
	}
	/**
	 * Get MaxItemCompatibility
	 * @return int
	 */
	public function getMaxItemCompatibility()
	{
		return $this->MaxItemCompatibility;
	}
	/**
	 * Set ConditionEnabled
	 * @param ConditionEnabledCodeType ConditionEnabled
	 * @return ConditionEnabledCodeType
	 */
	public function setConditionEnabled($_ConditionEnabled)
	{
		return ($this->ConditionEnabled = EbayTradingTypeConditionEnabledCodeType::valueIsValid($_ConditionEnabled)?$_ConditionEnabled:null);
	}
	/**
	 * Get ConditionEnabled
	 * @return EbayTradingTypeConditionEnabledCodeType
	 */
	public function getConditionEnabled()
	{
		return $this->ConditionEnabled;
	}
	/**
	 * Set ConditionValues
	 * @param ConditionValuesType ConditionValues
	 * @return ConditionValuesType
	 */
	public function setConditionValues($_ConditionValues)
	{
		return ($this->ConditionValues = $_ConditionValues);
	}
	/**
	 * Get ConditionValues
	 * @return EbayTradingTypeConditionValuesType
	 */
	public function getConditionValues()
	{
		return $this->ConditionValues;
	}
	/**
	 * Set ValueCategory
	 * @param boolean ValueCategory
	 * @return boolean
	 */
	public function setValueCategory($_ValueCategory)
	{
		return ($this->ValueCategory = $_ValueCategory);
	}
	/**
	 * Get ValueCategory
	 * @return boolean
	 */
	public function getValueCategory()
	{
		return $this->ValueCategory;
	}
	/**
	 * Set ProductCreationEnabled
	 * @param ProductCreationEnabledCodeType ProductCreationEnabled
	 * @return ProductCreationEnabledCodeType
	 */
	public function setProductCreationEnabled($_ProductCreationEnabled)
	{
		return ($this->ProductCreationEnabled = EbayTradingTypeProductCreationEnabledCodeType::valueIsValid($_ProductCreationEnabled)?$_ProductCreationEnabled:null);
	}
	/**
	 * Get ProductCreationEnabled
	 * @return EbayTradingTypeProductCreationEnabledCodeType
	 */
	public function getProductCreationEnabled()
	{
		return $this->ProductCreationEnabled;
	}
	/**
	 * Set MaxGranularFitmentCount
	 * @param int MaxGranularFitmentCount
	 * @return int
	 */
	public function setMaxGranularFitmentCount($_MaxGranularFitmentCount)
	{
		return ($this->MaxGranularFitmentCount = $_MaxGranularFitmentCount);
	}
	/**
	 * Get MaxGranularFitmentCount
	 * @return int
	 */
	public function getMaxGranularFitmentCount()
	{
		return $this->MaxGranularFitmentCount;
	}
	/**
	 * Set CompatibleVehicleType
	 * @param string CompatibleVehicleType
	 * @return string
	 */
	public function setCompatibleVehicleType($_CompatibleVehicleType)
	{
		return ($this->CompatibleVehicleType = $_CompatibleVehicleType);
	}
	/**
	 * Get CompatibleVehicleType
	 * @return string
	 */
	public function getCompatibleVehicleType()
	{
		return $this->CompatibleVehicleType;
	}
	/**
	 * Set PaymentOptionsGroup
	 * @param PaymentOptionsGroupEnabledCodeType PaymentOptionsGroup
	 * @return PaymentOptionsGroupEnabledCodeType
	 */
	public function setPaymentOptionsGroup($_PaymentOptionsGroup)
	{
		return ($this->PaymentOptionsGroup = EbayTradingTypePaymentOptionsGroupEnabledCodeType::valueIsValid($_PaymentOptionsGroup)?$_PaymentOptionsGroup:null);
	}
	/**
	 * Get PaymentOptionsGroup
	 * @return EbayTradingTypePaymentOptionsGroupEnabledCodeType
	 */
	public function getPaymentOptionsGroup()
	{
		return $this->PaymentOptionsGroup;
	}
	/**
	 * Set ShippingProfileCategoryGroup
	 * @param ProfileCategoryGroupCodeType ShippingProfileCategoryGroup
	 * @return ProfileCategoryGroupCodeType
	 */
	public function setShippingProfileCategoryGroup($_ShippingProfileCategoryGroup)
	{
		return ($this->ShippingProfileCategoryGroup = EbayTradingTypeProfileCategoryGroupCodeType::valueIsValid($_ShippingProfileCategoryGroup)?$_ShippingProfileCategoryGroup:null);
	}
	/**
	 * Get ShippingProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public function getShippingProfileCategoryGroup()
	{
		return $this->ShippingProfileCategoryGroup;
	}
	/**
	 * Set PaymentProfileCategoryGroup
	 * @param ProfileCategoryGroupCodeType PaymentProfileCategoryGroup
	 * @return ProfileCategoryGroupCodeType
	 */
	public function setPaymentProfileCategoryGroup($_PaymentProfileCategoryGroup)
	{
		return ($this->PaymentProfileCategoryGroup = EbayTradingTypeProfileCategoryGroupCodeType::valueIsValid($_PaymentProfileCategoryGroup)?$_PaymentProfileCategoryGroup:null);
	}
	/**
	 * Get PaymentProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public function getPaymentProfileCategoryGroup()
	{
		return $this->PaymentProfileCategoryGroup;
	}
	/**
	 * Set ReturnPolicyProfileCategoryGroup
	 * @param ProfileCategoryGroupCodeType ReturnPolicyProfileCategoryGroup
	 * @return ProfileCategoryGroupCodeType
	 */
	public function setReturnPolicyProfileCategoryGroup($_ReturnPolicyProfileCategoryGroup)
	{
		return ($this->ReturnPolicyProfileCategoryGroup = EbayTradingTypeProfileCategoryGroupCodeType::valueIsValid($_ReturnPolicyProfileCategoryGroup)?$_ReturnPolicyProfileCategoryGroup:null);
	}
	/**
	 * Get ReturnPolicyProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupCodeType
	 */
	public function getReturnPolicyProfileCategoryGroup()
	{
		return $this->ReturnPolicyProfileCategoryGroup;
	}
	/**
	 * Set VINSupported
	 * @param boolean VINSupported
	 * @return boolean
	 */
	public function setVINSupported($_VINSupported)
	{
		return ($this->VINSupported = $_VINSupported);
	}
	/**
	 * Get VINSupported
	 * @return boolean
	 */
	public function getVINSupported()
	{
		return $this->VINSupported;
	}
	/**
	 * Set VRMSupported
	 * @param boolean VRMSupported
	 * @return boolean
	 */
	public function setVRMSupported($_VRMSupported)
	{
		return ($this->VRMSupported = $_VRMSupported);
	}
	/**
	 * Get VRMSupported
	 * @return boolean
	 */
	public function getVRMSupported()
	{
		return $this->VRMSupported;
	}
	/**
	 * Set SellerProvidedTitleSupported
	 * @param boolean SellerProvidedTitleSupported
	 * @return boolean
	 */
	public function setSellerProvidedTitleSupported($_SellerProvidedTitleSupported)
	{
		return ($this->SellerProvidedTitleSupported = $_SellerProvidedTitleSupported);
	}
	/**
	 * Get SellerProvidedTitleSupported
	 * @return boolean
	 */
	public function getSellerProvidedTitleSupported()
	{
		return $this->SellerProvidedTitleSupported;
	}
	/**
	 * Set DepositSupported
	 * @param boolean DepositSupported
	 * @return boolean
	 */
	public function setDepositSupported($_DepositSupported)
	{
		return ($this->DepositSupported = $_DepositSupported);
	}
	/**
	 * Get DepositSupported
	 * @return boolean
	 */
	public function getDepositSupported()
	{
		return $this->DepositSupported;
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