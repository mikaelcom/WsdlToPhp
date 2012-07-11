<?php
/**
 * Class file for EbayTradingTypeFeatureDefinitionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeatureDefinitionsType
 * Documentation : A container node for definitions of the features specified in FeatureID in the GetCategoryFeatures request. If no feature ID was specified, all definitions are returned.
 * @date 04/07/2012
 */
class EbayTradingTypeFeatureDefinitionsType extends EbayTradingWsdlClass
{
	/**
	 * The ListingDurations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies one or more sets of listing durations. Each set gives durations for listing types a category could allow. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Use the data provided in SiteDefaults and Category to determine which listing formats support each listing duration and whether any categories override the standard settings. <br><br> <bold>Note:</bold> Durations for Local Market listings are not supported by GetCategoryFeatures.
	 * @var EbayTradingTypeListingDurationDefinitionsType
	 */
	public $ListingDurations;
	/**
	 * The ShippingTermsRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some categories may require the seller to specify at least one domestic shipping service and associated cost for an listing. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeShippingTermRequiredDefinitionType
	 */
	public $ShippingTermsRequired;
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This feature enables the seller to accept (or reject) a lower-priced offer on a fixed-price item. That is, buyers can send offers to the seller that are lower in value than the fixed-price value, and then it is up to the seller whether or not he/she wants to accept or reject the offer, or make a counter offer to the prospective buyer. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeBestOfferEnabledDefinitionType
	 */
	public $BestOfferEnabled;
	/**
	 * The DutchBINEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the associated category supports Buy It Now for Dutch (multi-item) auctions. This field contains no other special meta-data (an empty element is returned). Use the data provided in SiteDefaults and Category to determine which categories (if any) support Dutch BIN. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var EbayTradingTypeDutchBINEnabledDefinitionType
	 */
	public $DutchBINEnabled;
	/**
	 * The UserConsentRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeUserConsentRequiredDefinitionType
	 */
	public $UserConsentRequired;
	/**
	 * The HomePageFeaturedEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some categories allow you to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Item or feedback restrictions may apply.<br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeHomePageFeaturedEnabledDefinitionType
	 */
	public $HomePageFeaturedEnabled;
	/**
	 * The ProPackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the ProPack feature (a feature pack). If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeProPackEnabledDefinitionType
	 */
	public $ProPackEnabled;
	/**
	 * The BasicUpgradePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not applicable to any site. Defines the BasicUpgradePack bundle feature (a feature pack). Formerly, applicable to the Australia site (site ID 15, abbreviation AU) only.
	 * @var EbayTradingTypeBasicUpgradePackEnabledDefinitionType
	 */
	public $BasicUpgradePackEnabled;
	/**
	 * The ValuePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the ValuePack bundle feature (a feature pack). If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeValuePackEnabledDefinitionType
	 */
	public $ValuePackEnabled;
	/**
	 * The ProPackPlusEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the ProPackPlus bundle feature (a feature pack). If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeProPackPlusEnabledDefinitionType
	 */
	public $ProPackPlusEnabled;
	/**
	 * The AdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a category is Ad Format-enabled, it indicates that a Classified Ad can be created in that category (as opposed to an auction or fixed-price listing). <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeAdFormatEnabledDefinitionType
	 */
	public $AdFormatEnabled;
	/**
	 * The BestOfferCounterEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This feature enables the seller to offer a prospective buyer a "counter offer" to that buyer's "best offer" on a fixed-price listing. If this feature is not enabled, the seller can only accept or reject best offers. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeBestOfferCounterEnabledDefinitionType
	 */
	public $BestOfferCounterEnabled;
	/**
	 * The BestOfferAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This feature enables the seller to automatically decline a best offer whose value does not meet a minimum threshold. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeBestOfferAutoDeclineEnabledDefinitionType
	 */
	public $BestOfferAutoDeclineEnabled;
	/**
	 * The LocalMarketSpecialitySubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Specialty Vehicles. If the field is present, the category supports Local Market listings by sellers with a Local Market for Specialty Vehicles subscription. The field is returned as an empty element (i.e., a boolean value is not returned). <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. Support in some categories is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalMarketSpecialitySubscriptionDefinitionType
	 */
	public $LocalMarketSpecialitySubscription;
	/**
	 * The LocalMarketRegularSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Vehicles. If the field is present, the category supports Local Market listings by sellers with a Local Market for Vehicles subscription. The field is returned as an empty element (i.e., a boolean value is not returned). <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. Support in some categories is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType
	 */
	public $LocalMarketRegularSubscription;
	/**
	 * The LocalMarketPremiumSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers with premium Local Market subscriptions. If the field is present, the category supports Local Market listings by sellers with a premium Local Market subscription. The field is returned as an empty element (i.e., a boolean value is not returned). <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. Support in some categories is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalMarketPremiumSubscriptionDefinitionType
	 */
	public $LocalMarketPremiumSubscription;
	/**
	 * The LocalMarketNonSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers who have not subscribed to either Local Market for Vehicles or Local Market for Specialty Vehicles. If the field is present, the category supports Local Market listings by sellers without a Local Market subscription. The field is returned as an empty element (i.e., a boolean value is not returned). <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. Support in some categories is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalMarketNonSubscriptionDefinitionType
	 */
	public $LocalMarketNonSubscription;
	/**
	 * The ExpressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the US and Germany sites, an eBay item must meet a number of eligibility requirements in order to also be included on eBay Express. One requirement is that the category needs to support Express. For example, categories that are not covered by PayPal Buyer Protection (e.g., Live Auctions and Motors vehicles) are excluded from Express.<br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories are enabled for Express.
	 * @var EbayTradingTypeExpressEnabledDefinitionType
	 */
	public $ExpressEnabled;
	/**
	 * The ExpressPicturesRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the US and Germany sites, an eBay item must meet a number of eligibility requirements in order to also be included on eBay Express. One requirement is that the item must include a picture (or gallery image). Some categories (e.g., Event Tickets) may waive this requirement if a picture is not normally expected.<br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories requires an item to include a picture in order to be eligible for Express.
	 * @var EbayTradingTypeExpressPicturesRequiredDefinitionType
	 */
	public $ExpressPicturesRequired;
	/**
	 * The ExpressConditionRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the US and Germany sites, an eBay item must meet a number of eligibility requirements in order to also be included on eBay Express. One requirement is that the item must include the Item Condition attribute (using Item Specifics). Some categories may waive this requirement.<br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories require an item to include the Item Condition attribute in order to be eligible for Express.
	 * @var EbayTradingTypeExpressConditionRequiredDefinitionType
	 */
	public $ExpressConditionRequired;
	/**
	 * The MinimumReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This feature enables the seller to set a reserve price for an auction listing. The reserve price is the minimum price that the seller will accept at the end of the auction. If the high bid at the end of the auction does not meet this price, the auction ends without a winning bidder. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). On the Germany, Austria, Belgium French, and Belgium Dutch sites, Minimum Reserve Price is supported for the Art and Antiques, Watches and Jewelry, and Motorbikes categories.
	 * @var EbayTradingTypeMinimumReservePriceDefinitionType
	 */
	public $MinimumReservePrice;
	/**
	 * The TransactionConfirmationRequestEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applies to the US eBay Motors site (except Parts and Accessories category). Defines the Transaction Confirmation Request feature. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (i.e., a boolean value is not returned).
	 * @var EbayTradingTypeTCREnabledDefinitionType
	 */
	public $TransactionConfirmationRequestEnabled;
	/**
	 * The SellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the SellerContactDetails feature. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Classified Ad format listings.
	 * @var EbayTradingTypeSellerContactDetailsEnabledDefinitionType
	 */
	public $SellerContactDetailsEnabled;
	/**
	 * The StoreInventoryEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeStoreInventoryEnabledDefinitionType
	 */
	public $StoreInventoryEnabled;
	/**
	 * The SkypeMeTransactionalEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeSkypeMeTransactionalEnabledDefinitionType
	 */
	public $SkypeMeTransactionalEnabled;
	/**
	 * The SkypeMeNonTransactionalEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeSkypeMeNonTransactionalEnabledDefinitionType
	 */
	public $SkypeMeNonTransactionalEnabled;
	/**
	 * The LocalListingDistancesRegular
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the valid local listing distances allowed for listing Local Market items by sellers subscribed to Local Market for Vehicles. <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. The set of valid distances (radii) supported by a category is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalListingDistancesRegularDefinitionType
	 */
	public $LocalListingDistancesRegular;
	/**
	 * The LocalListingDistancesSpecialty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the valid local listing distances allowed for listing Local Market items by sellers subscribed to Local Market for Specialty Vehicles. <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. The set of valid distances (radii) supported by a category is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalListingDistancesSpecialtyDefinitionType
	 */
	public $LocalListingDistancesSpecialty;
	/**
	 * The LocalListingDistancesNonSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the valid local listing distances allowed for listing Local Market items by sellers who have not subscribed to either Local Market for Vehicles or Local Market for Specialty Vehicles. <br> Some categories support listing vehicles for the eBay Motors Local Market only, where Local Market is defined as the area within a set radius about a specified postal code. The set of valid distances (radii) supported by a category is based on subscription level. <br> Local Market listings are supported for vehicle categories on the US eBay Motors site only and for US postal codes only.
	 * @var EbayTradingTypeLocalListingDistancesNonSubscriptionDefinitionType
	 */
	public $LocalListingDistancesNonSubscription;
	/**
	 * The ClassifiedAdPaymentMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the payment method should be displayed to the user for Classified Ad format listings. Even if enabled, checkout may or may not be enabled.
	 * @var EbayTradingTypeClassifiedAdPaymentMethodEnabledDefinitionType
	 */
	public $ClassifiedAdPaymentMethodEnabled;
	/**
	 * The ClassifiedAdShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for Classified Ad listings in this category.
	 * @var EbayTradingTypeClassifiedAdShippingMethodEnabledDefinitionType
	 */
	public $ClassifiedAdShippingMethodEnabled;
	/**
	 * The ClassifiedAdBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if Best Offer is enabled for Classified Ad listings in this category.
	 * @var EbayTradingTypeClassifiedAdBestOfferEnabledDefinitionType
	 */
	public $ClassifiedAdBestOfferEnabled;
	/**
	 * The ClassifiedAdCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on Best Offers for Classified Ad listings in this category. Returned only if this category overrides the site default.
	 * @var EbayTradingTypeClassifiedAdCounterOfferEnabledDefinitionType
	 */
	public $ClassifiedAdCounterOfferEnabled;
	/**
	 * The ClassifiedAdAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether automatic decline for Best Offers is allowed for Classified Ad listings in this category. Returned only if this category overrides the site default.
	 * @var EbayTradingTypeClassifiedAdAutoDeclineEnabledDefinitionType
	 */
	public $ClassifiedAdAutoDeclineEnabled;
	/**
	 * The ClassifiedAdContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a telephone number in the seller's contact information for Classified Ad listings.
	 * @var EbayTradingTypeClassifiedAdContactByPhoneEnabledDefinitionType
	 */
	public $ClassifiedAdContactByPhoneEnabled;
	/**
	 * The ClassifiedAdContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an email address in the seller's contact information for Classified Ad listings.
	 * @var EbayTradingTypeClassifiedAdContactByEmailEnabledDefintionType
	 */
	public $ClassifiedAdContactByEmailEnabled;
	/**
	 * The SafePaymentRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the US, Canada and Australia sites, users registered after January 17,2007 are required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one of the credit cards specified in Item.PaymentMethods). <br> If a seller has a 'SafePaymentExempt' status, they are exempt from the category requirement to offer at least one safe payment method when listing an item on a site that has the safe payment requirement. <br> The safe payment requirement also applies to two-category listings that have one ship-to or available-to location in the US, Canada, or Australia. The French Canadian (CAFR) site is a special case, because listings on the CAFR site with ship-to or available-to locations in Canada do not require a Safe Payment method, yet listings on the CAFR site with ship-to or available-to locations in the US or Australia do require a Safe Payment method. <br> The Business and Industrial, Motors, Real Estate, and Mature Audiences categories, and all listings that don't support Item.PaymentMethods are exempt from this requirement. Therefore, listings in those categories do not require a safe payment method. <br> Currently, this field contains no other special meta-data.(An empty element is returned.) <br> Use SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine which categories require a safe payment method.
	 * @var EbayTradingTypeSafePaymentRequiredDefinitionType
	 */
	public $SafePaymentRequired;
	/**
	 * The ClassifiedAdPayPerLeadEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some categories can support pay-per-lead listings. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeClassifiedAdPayPerLeadEnabledDefinitionType
	 */
	public $ClassifiedAdPayPerLeadEnabled;
	/**
	 * The ItemSpecificsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some categories can support custom Item Specifics. Item Specifics are typical aspects of items in the same category. They enable users to classify items by presenting descriptive details in a structured way. For example, in a jewelry category, sellers might describe lockets with specifics like "Chain Length=18 in." and "Main Shape=Heart", but in a Washers & Dryers category, sellers might include "Type=Top-Loading" instead of "Main Shape=Heart".<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeItemSpecificsEnabledDefinitionType
	 */
	public $ItemSpecificsEnabled;
	/**
	 * The PaisaPayFullEscrowEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports Paisapay Escrow payment method. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypePaisaPayFullEscrowEnabledDefinitionType
	 */
	public $PaisaPayFullEscrowEnabled;
	/**
	 * The ISBNIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This listing feature allows the seller to pass in a International Standard Book Number (ISBN) (through the Item.ProductListingDetails.ISBN field) to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> An empty ISBNIdentifierEnabled field is returned if the International Standard Book Number feature is applicable to the site and if ISBNIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned). <br><br> This field only defines the feature. To determine if the feature can be used for a specific category, pass in the CategoryID in the request, and then look for the appearance of the Category.ISBNIdentifierEnabled field in the response. Or, to determine if the feature can be used for most categories on the site, look for the appearance of the SiteDefaults.ISBNIdentifierEnabled field in the response.
	 * @var EbayTradingTypeISBNIdentifierEnabledDefinitionType
	 */
	public $ISBNIdentifierEnabled;
	/**
	 * The UPCIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This listing feature allows the seller to pass in a Universal Product Code (UPC) (through the Item.ProductListingDetails.UPC field) to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> An empty UPCIdentifierEnabled field is returned if the Universal Product Code feature is applicable to the site and if UPCIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned). <br><br> This field only defines the feature. To determine if the feature can be used for a specific category, pass in the CategoryID in the request, and then look for the appearance of the Category.UPCIdentifierEnabled field in the response. Or, to determine if the feature can be used for most categories on the site, look for the appearance of the SiteDefaults.UPCIdentifierEnabled field in the response.
	 * @var EbayTradingTypeUPCIdentifierEnabledDefinitionType
	 */
	public $UPCIdentifierEnabled;
	/**
	 * The EANIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This listing feature allows the seller to pass in a European Article Number (EAN) (through the Item.ProductListingDetails.EAN field) to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> An empty EANIdentifierEnabled field is returned if the European Article Number feature is applicable to the site and if EANIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned). <br><br> This field only defines the feature. To determine if the feature can be used for a specific category, pass in the CategoryID in the request, and then look for the appearance of the Category.EANIdentifierEnabled field in the response. Or, to determine if the feature can be used for most categories on the site, look for the appearance of the SiteDefaults.EANIdentifierEnabled field in the response.
	 * @var EbayTradingTypeEANIdentifierEnabledDefinitionType
	 */
	public $EANIdentifierEnabled;
	/**
	 * The BrandMPNIdentifierEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This listing feature allows the seller to pass in the brand and Manufacturer Part Number (MPN) (through the Item.ProductListingDetails.BrandMPN container) to identify and pre-fill information for a product when adding, revising, or relisting an item. <br><br> An empty BrandMPNIdentifierEnabled field is returned if the Brand/Manufacturer Part Number feature is applicable to the site and if BrandMPNIdentifierEnabled is passed in as a FeatureID (or if no FeatureID is passed in, hence all features are returned). <br><br> This field only defines the feature. To determine if the feature can be used for a specific category, pass in the CategoryID in the request, and then look for the appearance of the Category.BrandMPNIdentifierEnabled field in the response. Or, to determine if the feature can be used for most categories on the site, look for the appearance of the SiteDefaults.BrandMPNIdentifierEnabled field in the response.
	 * @var EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType
	 */
	public $BrandMPNIdentifierEnabled;
	/**
	 * The BestOfferAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows sellers to set a price at which best offers are automatically accepted. If present, the corresponding feature ID is passed in the request or all features are requested (i.e., no feature IDs are specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeBestOfferAutoAcceptEnabledDefinitionType
	 */
	public $BestOfferAutoAcceptEnabled;
	/**
	 * The ClassifiedAdAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows sellers to set a price at which best offers are automatically accepted for Classified Ads. If present, the corresponding feature ID is passed in the request or all features are requested (i.e., no feature IDs are specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeClassifiedAdAutoAcceptEnabledDefinitionType
	 */
	public $ClassifiedAdAutoAcceptEnabled;
	/**
	 * The CrossBorderTradeNorthAmericaEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows you to specify that listings be displayed in the default search results of the respective site. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeCrossBorderTradeNorthAmericaEnabledDefinitionType
	 */
	public $CrossBorderTradeNorthAmericaEnabled;
	/**
	 * The CrossBorderTradeGBEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows you to specify that listings be displayed in the default search results of the respective site. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeCrossBorderTradeGBEnabledDefinitionType
	 */
	public $CrossBorderTradeGBEnabled;
	/**
	 * The CrossBorderTradeAustraliaEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows you to specify that listings be displayed in the default search results of the respective site. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeCrossBorderTradeAustraliaEnabledDefinitionType
	 */
	public $CrossBorderTradeAustraliaEnabled;
	/**
	 * The PayPalBuyerProtectionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, PayPalBuyerProtectionEnabled and BuyerGuaranteeEnabled define the feature that allows buyer protection. If PayPalBuyerProtectionEnabled present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypePayPalBuyerProtectionEnabledDefinitionType
	 */
	public $PayPalBuyerProtectionEnabled;
	/**
	 * The BuyerGuaranteeEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, PayPalBuyerProtectionEnabled and BuyerGuaranteeEnabled define the feature that allows buyer protection. If BuyerGuaranteeEnabled present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeBuyerGuaranteeEnabledDefinitionType
	 */
	public $BuyerGuaranteeEnabled;
	/**
	 * The CombinedFixedPriceTreatmentEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that combines the following two listing types: Store Inventory Format and Basic Fixed Price. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature
	 * @var EbayTradingTypeCombinedFixedPriceTreatmentEnabledDefinitionType
	 */
	public $CombinedFixedPriceTreatmentEnabled;
	/**
	 * The GalleryFeaturedDurations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that enables durations for "Gallery Featured". If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeListingEnhancementDurationDefinitionType
	 */
	public $GalleryFeaturedDurations;
	/**
	 * The INEscrowWorkflowTimeline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the workflow timeline applicable for the given category on the India site, if the category supports PaisaPayFullEscrow. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeINEscrowWorkflowTimelineDefinitionType
	 */
	public $INEscrowWorkflowTimeline;
	/**
	 * The PayPalRequired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines PayPal as a required payment method. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypePayPalRequiredDefinitionType
	 */
	public $PayPalRequired;
	/**
	 * The eBayMotorsProAdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.Added for eBay Motors Pro users
	 * @var EbayTradingTypeEBayMotorsProAdFormatEnabledDefinitionType
	 */
	public $eBayMotorsProAdFormatEnabled;
	/**
	 * The eBayMotorsProContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a phone number in the seller's contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProContactByPhoneEnabledDefinitionType
	 */
	public $eBayMotorsProContactByPhoneEnabled;
	/**
	 * The eBayMotorsProPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is enabled for the seller's contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProPhoneCountDefinitionType
	 */
	public $eBayMotorsProPhoneCount;
	/**
	 * The eBayMotorsProContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an address in the seller's contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProContactByAddressEnabledDefinitionType
	 */
	public $eBayMotorsProContactByAddressEnabled;
	/**
	 * The eBayMotorsProStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option this category supports for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProStreetCountDefinitionType
	 */
	public $eBayMotorsProStreetCount;
	/**
	 * The eBayMotorsProCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a company name in the seller's contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProCompanyNameEnabledDefinitionType
	 */
	public $eBayMotorsProCompanyNameEnabled;
	/**
	 * The eBayMotorsProContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an email address in the seller's contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProContactByEmailEnabledDefinitionType
	 */
	public $eBayMotorsProContactByEmailEnabled;
	/**
	 * The eBayMotorsProBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if Best Offer is enabled for Classified Ad listings in this category. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProBestOfferEnabledDefinitionType
	 */
	public $eBayMotorsProBestOfferEnabled;
	/**
	 * The eBayMotorsProAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of auto accept for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProAutoAcceptEnabledDefinitionType
	 */
	public $eBayMotorsProAutoAcceptEnabled;
	/**
	 * The eBayMotorsProAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of auto decline for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProAutoDeclineEnabledDefinitionType
	 */
	public $eBayMotorsProAutoDeclineEnabled;
	/**
	 * The eBayMotorsProPaymentMethodCheckOutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of payment method checkOut for Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
	 */
	public $eBayMotorsProPaymentMethodCheckOutEnabled;
	/**
	 * The eBayMotorsProShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for Classified Ad format listings in this category. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProShippingMethodEnabledDefinitionType
	 */
	public $eBayMotorsProShippingMethodEnabled;
	/**
	 * The eBayMotorsProCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on Best Offers for Classified Ad listings in this category. Returned only if this category overrides the site default. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProCounterOfferEnabledDefinitionType
	 */
	public $eBayMotorsProCounterOfferEnabled;
	/**
	 * The eBayMotorsProSellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the SellerContactDetails feature. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Classified Ad listings. Added for eBay Motors Pro users.
	 * @var EbayTradingTypeEBayMotorsProSellerContactDetailsEnabledDefinitionType
	 */
	public $eBayMotorsProSellerContactDetailsEnabled;
	/**
	 * The LocalMarketAdFormatEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketAdFormatEnabledDefinitionType
	 */
	public $LocalMarketAdFormatEnabled;
	/**
	 * The LocalMarketContactByPhoneEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a phone number in the seller's contact information for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketContactByPhoneEnabledDefinitionType
	 */
	public $LocalMarketContactByPhoneEnabled;
	/**
	 * The LocalMarketPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is enabled for the seller's contact information for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketPhoneCountDefinitionType
	 */
	public $LocalMarketPhoneCount;
	/**
	 * The LocalMarketContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an address in the seller's contact information for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketContactByAddressEnabledDefinitionType
	 */
	public $LocalMarketContactByAddressEnabled;
	/**
	 * The LocalMarketStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option is enabled for the seller's contact information for Classified Ad format listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketStreetCountDefinitionType
	 */
	public $LocalMarketStreetCount;
	/**
	 * The LocalMarketCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including a company name in the seller's contact information for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketCompanyNameEnabledDefinitionType
	 */
	public $LocalMarketCompanyNameEnabled;
	/**
	 * The LocalMarketContactByEmailEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an email address in the seller's contact information for Classified Ad format listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketContactByEmailEnabledDefinitionType
	 */
	public $LocalMarketContactByEmailEnabled;
	/**
	 * The LocalMarketBestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketBestOfferEnabledDefinitionType
	 */
	public $LocalMarketBestOfferEnabled;
	/**
	 * The LocalMarketAutoAcceptEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of auto accept for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketAutoAcceptEnabledDefinitionType
	 */
	public $LocalMarketAutoAcceptEnabled;
	/**
	 * The LocalMarketAutoDeclineEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of auto decline for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType
	 */
	public $LocalMarketAutoDeclineEnabled;
	/**
	 * The LocalMarketPaymentMethodCheckOutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports the use of payment method checkOut for Classified Ad listings. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketPaymentMethodCheckOutEnabledDefinitionType
	 */
	public $LocalMarketPaymentMethodCheckOutEnabled;
	/**
	 * The LocalMarketShippingMethodEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if shipping options are available for Classified Ad format listings in this category. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketShippingMethodEnabledDefinitionType
	 */
	public $LocalMarketShippingMethodEnabled;
	/**
	 * The LocalMarketCounterOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether counter offers are allowed on Best Offers for Classified Ad listings in this category. Returned only if this category overrides the site default. Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketCounterOfferEnabledDefinitionType
	 */
	public $LocalMarketCounterOfferEnabled;
	/**
	 * The LocalMarketSellerContactDetailsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the SellerContactDetails feature. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Added for Local Market users.
	 * @var EbayTradingTypeLocalMarketSellerContactDetailsEnabledDefinitionType
	 */
	public $LocalMarketSellerContactDetailsEnabled;
	/**
	 * The ClassifiedAdPhoneCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which telephone option is enabled for the seller's contact information for Classified Ad listings. Added for For Sale By Owner.
	 * @var EbayTradingTypeClassifiedAdPhoneCountDefinitionType
	 */
	public $ClassifiedAdPhoneCount;
	/**
	 * The ClassifiedAdContactByAddressEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including an address in the seller's contact information for Classified Ad listings. Added for For Sale By Owner.
	 * @var EbayTradingTypeClassifiedAdContactByAddressEnabledDefinitionType
	 */
	public $ClassifiedAdContactByAddressEnabled;
	/**
	 * The ClassifiedAdStreetCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which address option is enabled for the seller's contact information for Classified Ad format listings. Added for For Sale By Owner.
	 * @var EbayTradingTypeClassifiedAdStreetCountDefinitionType
	 */
	public $ClassifiedAdStreetCount;
	/**
	 * The ClassifiedAdCompanyNameEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the category supports including the company name in the seller's contact information for Classified Ad listings. Added for For Sale By Owner.
	 * @var EbayTradingTypeClassifiedAdCompanyNameEnabledDefinitionType
	 */
	public $ClassifiedAdCompanyNameEnabled;
	/**
	 * The SpecialitySubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Specialty Vehicles. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
	 * @var EbayTradingTypeSpecialitySubscriptionDefinitionType
	 */
	public $SpecialitySubscription;
	/**
	 * The RegularSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Regular Vehicles. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
	 * @var EbayTradingTypeRegularSubscriptionDefinitionType
	 */
	public $RegularSubscription;
	/**
	 * The PremiumSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates category support for listing of Local Market items by sellers subscribed to Local Market for Premium Vehicles. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
	 * @var EbayTradingTypePremiumSubscriptionDefinitionType
	 */
	public $PremiumSubscription;
	/**
	 * The NonSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is for For Sale By Owner. Each of the subscriptions will have following options, which will define "National" vs "Local" ad format listing. "LocalOptional" : This will allow national and local listing. "LocalOnly" : Seller can have Local listings only. "NationalOnly" : Seller can not opt into local only exposure. It has to be national listing.
	 * @var EbayTradingTypeNonSubscriptionDefinitionType
	 */
	public $NonSubscription;
	/**
	 * The ReturnPolicyEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that specifies whether a return policy could be required on the site. If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeReturnPolicyEnabledDefinitionType
	 */
	public $ReturnPolicyEnabled;
	/**
	 * The HandlingTimeEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that specifies whether a handling time (dispatch time) could be required on the site. The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time).<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeHandlingTimeEnabledDefinitionType
	 */
	public $HandlingTimeEnabled;
	/**
	 * The PayPalRequiredForStoreOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that specifies whether PayPal is required for Store Owners. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Fixed Price Listings as well as Sif Listings.
	 * @var EbayTradingTypePayPalRequiredForStoreOwnerDefinitionType
	 */
	public $PayPalRequiredForStoreOwner;
	/**
	 * The ReviseQuantityAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines if quantity can be revised while a listing is in semi or fully restricted mode. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Fixed Price Listings as well as Store Inventory Format Listings.
	 * @var EbayTradingTypeReviseQuantityAllowedDefinitionType
	 */
	public $ReviseQuantityAllowed;
	/**
	 * The RevisePriceAllowed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines if price can be revised while a listing is in semi or fully restricted mode. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Fixed Price Listings as well as Store Inventory Format Listings.
	 * @var EbayTradingTypeRevisePriceAllowedDefinitionType
	 */
	public $RevisePriceAllowed;
	/**
	 * The StoreOwnerExtendedListingDurationsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides additional listings durations that are supported by Business Sellers. A Business Seller constitutes a seller who has completed Business Seller Registration on an eBay site that supports the Business Seller Registration framework. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the ListingDurations element.
	 * @var EbayTradingTypeStoreOwnerExtendedListingDurationsEnabledDefinitionType
	 */
	public $StoreOwnerExtendedListingDurationsEnabled;
	/**
	 * The StoreOwnerExtendedListingDurations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides additional listings durations that are supported by eBay Store Owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the ListingDurations element.
	 * @var EbayTradingTypeStoreOwnerExtendedListingDurationsDefinitionType
	 */
	public $StoreOwnerExtendedListingDurations;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the payment methods feature.
	 * @var EbayTradingTypePaymentMethodDefinitionType
	 */
	public $PaymentMethod;
	/**
	 * The Group1MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the applicable max cap per shipping cost for shipping service group1. The field is returned as an empty element (e.g., a boolean value is not returned).
	 * @var EbayTradingTypeGroup1MaxFlatShippingCostDefinitionType
	 */
	public $Group1MaxFlatShippingCost;
	/**
	 * The Group2MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the applicable max cap per shipping cost for shipping service group2. The field is returned as an empty element (e.g., a boolean value is not returned).
	 * @var EbayTradingTypeGroup2MaxFlatShippingCostDefinitionType
	 */
	public $Group2MaxFlatShippingCost;
	/**
	 * The Group3MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the applicable max cap per shipping cost for shipping service group3. The field is returned as an empty element (e.g., a boolean value is not returned). Applies to Fixed Price Listings as well as Store Inventory Format Listings.
	 * @var EbayTradingTypeGroup3MaxFlatShippingCostDefinitionType
	 */
	public $Group3MaxFlatShippingCost;
	/**
	 * The MaxFlatShippingCostCBTExempt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the default site setting for whether a maximum flat rate shipping cost is imposed on sellers who list in categories on this site yet are shipping an item into the country of this site from another country.
	 * @var EbayTradingTypeMaxFlatShippingCostCBTExemptDefinitionType
	 */
	public $MaxFlatShippingCostCBTExempt;
	/**
	 * The MaxFlatShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A maximum flat rate shipping cost is applied to some categories (or combination of category and shipping service group). This feature returns elements related to maximum flat rate shipping cost.
	 * @var EbayTradingTypeMaxFlatShippingCostDefinitionType
	 */
	public $MaxFlatShippingCost;
	/**
	 * The VariationsEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the the specified site defines settings for multi-variation listings.<br> <br> Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as "large blue" and "medium black" variations.<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeVariationsEnabledDefinitionType
	 */
	public $VariationsEnabled;
	/**
	 * The AttributeConversionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the the specified site defines settings for the conversion of ID-based attributes to custom Item Specifics. <br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeAttributeConversionEnabledFeatureDefinitionType
	 */
	public $AttributeConversionEnabled;
	/**
	 * The FreeGalleryPlusEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows free, automatic upgrades for Gallery Plus. If present, the corresponding feature ID is passed in the request or all features are requested (i.e., no feature IDs are specified). This field contains no meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeFreeGalleryPlusEnabledDefinitionType
	 */
	public $FreeGalleryPlusEnabled;
	/**
	 * The FreePicturePackEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the feature that allows free, automatic upgrades for Picture Pack. If present, the corresponding feature ID is passed in the request or all features are requested (i.e., no feature IDs are specified). This field contains no meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeFreePicturePackEnabledDefinitionType
	 */
	public $FreePicturePackEnabled;
	/**
	 * The ItemCompatibilityEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the specified site defines settings for items listed with parts compatibilities. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeItemCompatibilityEnabledDefinitionType
	 */
	public $ItemCompatibilityEnabled;
	/**
	 * The MaxItemCompatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the specified site defines a maximum limit for the number of compatible applications for items listed with parts compatibilities by application. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeMaxItemCompatibilityDefinitionType
	 */
	public $MaxItemCompatibility;
	/**
	 * The MinItemCompatibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the specified site defines a minimum number of required compatible applications for listing items. <br><br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeMinItemCompatibilityDefinitionType
	 */
	public $MinItemCompatibility;
	/**
	 * The ConditionEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the the specified site defines settings for item condition support.<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs are specified). This field contains no meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeConditionEnabledDefinitionType
	 */
	public $ConditionEnabled;
	/**
	 * The ConditionValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the specified site defines settings for item condition values.<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs are specified). This field contains no meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeConditionValuesDefinitionType
	 */
	public $ConditionValues;
	/**
	 * The ValueCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the the specified site defines settings for value categories.<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs were specified). Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeValueCategoryDefinitionType
	 */
	public $ValueCategory;
	/**
	 * The ProductCreationEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the the specified site defines settings for product creation support.<br> <br> If present, the corresponding feature ID was passed in the request or all features were requested (i.e., no feature IDs are specified). This field contains no meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeProductCreationEnabledDefinitionType
	 */
	public $ProductCreationEnabled;
	/**
	 * The CompatibleVehicleType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which vehicle type, Cars and Trucks or Motorcycles, is supported for specfying parts compatibility.
	 * @var EbayTradingTypeCompatibleVehicleTypeDefinitionType
	 */
	public $CompatibleVehicleType;
	/**
	 * The MaxGranularFitmentCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates, for the given category the total number of fine grained item compatibilities that can be applied to a listing when the seller provides more than 300 item compatibilities. <br><br> When you list with parts compatibility, using only the high-level compatibility search names, such as Year, Make, and Model, the fitment applies to the various unspecified lower-level compatiblity search names and values, such as Trim and Engine, as well. This means that specifying a single coarsely defined item compatibility may result in multiple fitments applying to the listing at the lowest level of granularity. Up to 300 (or whatever maximum is indicated by MaxItemCompatibility) coarse parts compatiblities can be specified for a given listing. <br><br> Alternatively, you can explicitly specify up to 1000 (or whatever maximum is indicated by MaxGranularFitmentCount) parts compatibilities at the lowest level of granularity. That is, if you specify your parts compatibilities using all of the supported compatiblity search names (e.g., Year, Make, Model, Trim, and Engine), you can specify up to 1000 compatibilities.
	 * @var EbayTradingTypeMaxGranularFitmentCountDefinitionType
	 */
	public $MaxGranularFitmentCount;
	/**
	 * The PaymentOptionsGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the GetCategoryFeature response if the Payment Options Group feature applies to the category. The field is returned as an empty element. The Payment Options Group feature is only applicable to DE and AT listings.
	 * @var EbayTradingTypePaymentOptionsGroupEnabledDefinitionType
	 */
	public $PaymentOptionsGroup;
	/**
	 * The ShippingProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if Business Policies shipping profiles are enabled for the site. The field is returned as an empty element. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public $ShippingProfileCategoryGroup;
	/**
	 * The PaymentProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if Business Policies payment profiles are enabled for the site. The field is returned as an empty element. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public $PaymentProfileCategoryGroup;
	/**
	 * The ReturnPolicyProfileCategoryGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned in the <b>GetCategoryFeature</b> response if Business Policies return policy profiles are enabled for the site. The field is returned as an empty element. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @var EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public $ReturnPolicyProfileCategoryGroup;
	/**
	 * The VINSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned when the site defines settings for whether a seller can specify a Vehicle Identification Number (VIN) in their US, CA, and CAFR eBay Motors listings, and you passed VINSupported in the request (or you requested all features by default).<br> <br> Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeVINSupportedDefinitionType
	 */
	public $VINSupported;
	/**
	 * The VRMSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned when the site defines settings for whether a seller can specify a Vehicle Registration Mark (VRM) in their UK eBay Motors listing, and you passed VRMSupported in the request (or you requested all features by default).<br> <br> Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeVRMSupportedDefinitionType
	 */
	public $VRMSupported;
	/**
	 * The SellerProvidedTitleSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned when the site defines settings for whether a seller can specify a custom title for a US or CA eBay Motors vehicle listing, and you passed SellerProvidedTitleSupported in the request (or you requested all features by default).<br> <br> Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeSellerProvidedTitleSupportedDefinitionType
	 */
	public $SellerProvidedTitleSupported;
	/**
	 * The DepositSupported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned when the site defines settings for whether a seller can specify a vehicle deposit for a US eBay Motors vehicle listing, and you passed DepositSupported in the request (or you requested all features by default).<br> <br> Currently, this field contains no other special meta-data. (An empty element is returned.) Use the data provided in SiteDefaults and Category to determine which categories (if any) support this feature.
	 * @var EbayTradingTypeDepositSupportedDefinitionType
	 */
	public $DepositSupported;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingDurationDefinitionsType ListingDurations
	 * @param EbayTradingTypeShippingTermRequiredDefinitionType ShippingTermsRequired
	 * @param EbayTradingTypeBestOfferEnabledDefinitionType BestOfferEnabled
	 * @param EbayTradingTypeDutchBINEnabledDefinitionType DutchBINEnabled
	 * @param EbayTradingTypeUserConsentRequiredDefinitionType UserConsentRequired
	 * @param EbayTradingTypeHomePageFeaturedEnabledDefinitionType HomePageFeaturedEnabled
	 * @param EbayTradingTypeProPackEnabledDefinitionType ProPackEnabled
	 * @param EbayTradingTypeBasicUpgradePackEnabledDefinitionType BasicUpgradePackEnabled
	 * @param EbayTradingTypeValuePackEnabledDefinitionType ValuePackEnabled
	 * @param EbayTradingTypeProPackPlusEnabledDefinitionType ProPackPlusEnabled
	 * @param EbayTradingTypeAdFormatEnabledDefinitionType AdFormatEnabled
	 * @param EbayTradingTypeBestOfferCounterEnabledDefinitionType BestOfferCounterEnabled
	 * @param EbayTradingTypeBestOfferAutoDeclineEnabledDefinitionType BestOfferAutoDeclineEnabled
	 * @param EbayTradingTypeLocalMarketSpecialitySubscriptionDefinitionType LocalMarketSpecialitySubscription
	 * @param EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType LocalMarketRegularSubscription
	 * @param EbayTradingTypeLocalMarketPremiumSubscriptionDefinitionType LocalMarketPremiumSubscription
	 * @param EbayTradingTypeLocalMarketNonSubscriptionDefinitionType LocalMarketNonSubscription
	 * @param EbayTradingTypeExpressEnabledDefinitionType ExpressEnabled
	 * @param EbayTradingTypeExpressPicturesRequiredDefinitionType ExpressPicturesRequired
	 * @param EbayTradingTypeExpressConditionRequiredDefinitionType ExpressConditionRequired
	 * @param EbayTradingTypeMinimumReservePriceDefinitionType MinimumReservePrice
	 * @param EbayTradingTypeTCREnabledDefinitionType TransactionConfirmationRequestEnabled
	 * @param EbayTradingTypeSellerContactDetailsEnabledDefinitionType SellerContactDetailsEnabled
	 * @param EbayTradingTypeStoreInventoryEnabledDefinitionType StoreInventoryEnabled
	 * @param EbayTradingTypeSkypeMeTransactionalEnabledDefinitionType SkypeMeTransactionalEnabled
	 * @param EbayTradingTypeSkypeMeNonTransactionalEnabledDefinitionType SkypeMeNonTransactionalEnabled
	 * @param EbayTradingTypeLocalListingDistancesRegularDefinitionType LocalListingDistancesRegular
	 * @param EbayTradingTypeLocalListingDistancesSpecialtyDefinitionType LocalListingDistancesSpecialty
	 * @param EbayTradingTypeLocalListingDistancesNonSubscriptionDefinitionType LocalListingDistancesNonSubscription
	 * @param EbayTradingTypeClassifiedAdPaymentMethodEnabledDefinitionType ClassifiedAdPaymentMethodEnabled
	 * @param EbayTradingTypeClassifiedAdShippingMethodEnabledDefinitionType ClassifiedAdShippingMethodEnabled
	 * @param EbayTradingTypeClassifiedAdBestOfferEnabledDefinitionType ClassifiedAdBestOfferEnabled
	 * @param EbayTradingTypeClassifiedAdCounterOfferEnabledDefinitionType ClassifiedAdCounterOfferEnabled
	 * @param EbayTradingTypeClassifiedAdAutoDeclineEnabledDefinitionType ClassifiedAdAutoDeclineEnabled
	 * @param EbayTradingTypeClassifiedAdContactByPhoneEnabledDefinitionType ClassifiedAdContactByPhoneEnabled
	 * @param EbayTradingTypeClassifiedAdContactByEmailEnabledDefintionType ClassifiedAdContactByEmailEnabled
	 * @param EbayTradingTypeSafePaymentRequiredDefinitionType SafePaymentRequired
	 * @param EbayTradingTypeClassifiedAdPayPerLeadEnabledDefinitionType ClassifiedAdPayPerLeadEnabled
	 * @param EbayTradingTypeItemSpecificsEnabledDefinitionType ItemSpecificsEnabled
	 * @param EbayTradingTypePaisaPayFullEscrowEnabledDefinitionType PaisaPayFullEscrowEnabled
	 * @param EbayTradingTypeISBNIdentifierEnabledDefinitionType ISBNIdentifierEnabled
	 * @param EbayTradingTypeUPCIdentifierEnabledDefinitionType UPCIdentifierEnabled
	 * @param EbayTradingTypeEANIdentifierEnabledDefinitionType EANIdentifierEnabled
	 * @param EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType BrandMPNIdentifierEnabled
	 * @param EbayTradingTypeBestOfferAutoAcceptEnabledDefinitionType BestOfferAutoAcceptEnabled
	 * @param EbayTradingTypeClassifiedAdAutoAcceptEnabledDefinitionType ClassifiedAdAutoAcceptEnabled
	 * @param EbayTradingTypeCrossBorderTradeNorthAmericaEnabledDefinitionType CrossBorderTradeNorthAmericaEnabled
	 * @param EbayTradingTypeCrossBorderTradeGBEnabledDefinitionType CrossBorderTradeGBEnabled
	 * @param EbayTradingTypeCrossBorderTradeAustraliaEnabledDefinitionType CrossBorderTradeAustraliaEnabled
	 * @param EbayTradingTypePayPalBuyerProtectionEnabledDefinitionType PayPalBuyerProtectionEnabled
	 * @param EbayTradingTypeBuyerGuaranteeEnabledDefinitionType BuyerGuaranteeEnabled
	 * @param EbayTradingTypeCombinedFixedPriceTreatmentEnabledDefinitionType CombinedFixedPriceTreatmentEnabled
	 * @param EbayTradingTypeListingEnhancementDurationDefinitionType GalleryFeaturedDurations
	 * @param EbayTradingTypeINEscrowWorkflowTimelineDefinitionType INEscrowWorkflowTimeline
	 * @param EbayTradingTypePayPalRequiredDefinitionType PayPalRequired
	 * @param EbayTradingTypeEBayMotorsProAdFormatEnabledDefinitionType eBayMotorsProAdFormatEnabled
	 * @param EbayTradingTypeEBayMotorsProContactByPhoneEnabledDefinitionType eBayMotorsProContactByPhoneEnabled
	 * @param EbayTradingTypeEBayMotorsProPhoneCountDefinitionType eBayMotorsProPhoneCount
	 * @param EbayTradingTypeEBayMotorsProContactByAddressEnabledDefinitionType eBayMotorsProContactByAddressEnabled
	 * @param EbayTradingTypeEBayMotorsProStreetCountDefinitionType eBayMotorsProStreetCount
	 * @param EbayTradingTypeEBayMotorsProCompanyNameEnabledDefinitionType eBayMotorsProCompanyNameEnabled
	 * @param EbayTradingTypeEBayMotorsProContactByEmailEnabledDefinitionType eBayMotorsProContactByEmailEnabled
	 * @param EbayTradingTypeEBayMotorsProBestOfferEnabledDefinitionType eBayMotorsProBestOfferEnabled
	 * @param EbayTradingTypeEBayMotorsProAutoAcceptEnabledDefinitionType eBayMotorsProAutoAcceptEnabled
	 * @param EbayTradingTypeEBayMotorsProAutoDeclineEnabledDefinitionType eBayMotorsProAutoDeclineEnabled
	 * @param EbayTradingTypeEBayMotorsProPaymentMethodCheckOutEnabledDefinitionType eBayMotorsProPaymentMethodCheckOutEnabled
	 * @param EbayTradingTypeEBayMotorsProShippingMethodEnabledDefinitionType eBayMotorsProShippingMethodEnabled
	 * @param EbayTradingTypeEBayMotorsProCounterOfferEnabledDefinitionType eBayMotorsProCounterOfferEnabled
	 * @param EbayTradingTypeEBayMotorsProSellerContactDetailsEnabledDefinitionType eBayMotorsProSellerContactDetailsEnabled
	 * @param EbayTradingTypeLocalMarketAdFormatEnabledDefinitionType LocalMarketAdFormatEnabled
	 * @param EbayTradingTypeLocalMarketContactByPhoneEnabledDefinitionType LocalMarketContactByPhoneEnabled
	 * @param EbayTradingTypeLocalMarketPhoneCountDefinitionType LocalMarketPhoneCount
	 * @param EbayTradingTypeLocalMarketContactByAddressEnabledDefinitionType LocalMarketContactByAddressEnabled
	 * @param EbayTradingTypeLocalMarketStreetCountDefinitionType LocalMarketStreetCount
	 * @param EbayTradingTypeLocalMarketCompanyNameEnabledDefinitionType LocalMarketCompanyNameEnabled
	 * @param EbayTradingTypeLocalMarketContactByEmailEnabledDefinitionType LocalMarketContactByEmailEnabled
	 * @param EbayTradingTypeLocalMarketBestOfferEnabledDefinitionType LocalMarketBestOfferEnabled
	 * @param EbayTradingTypeLocalMarketAutoAcceptEnabledDefinitionType LocalMarketAutoAcceptEnabled
	 * @param EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType LocalMarketAutoDeclineEnabled
	 * @param EbayTradingTypeLocalMarketPaymentMethodCheckOutEnabledDefinitionType LocalMarketPaymentMethodCheckOutEnabled
	 * @param EbayTradingTypeLocalMarketShippingMethodEnabledDefinitionType LocalMarketShippingMethodEnabled
	 * @param EbayTradingTypeLocalMarketCounterOfferEnabledDefinitionType LocalMarketCounterOfferEnabled
	 * @param EbayTradingTypeLocalMarketSellerContactDetailsEnabledDefinitionType LocalMarketSellerContactDetailsEnabled
	 * @param EbayTradingTypeClassifiedAdPhoneCountDefinitionType ClassifiedAdPhoneCount
	 * @param EbayTradingTypeClassifiedAdContactByAddressEnabledDefinitionType ClassifiedAdContactByAddressEnabled
	 * @param EbayTradingTypeClassifiedAdStreetCountDefinitionType ClassifiedAdStreetCount
	 * @param EbayTradingTypeClassifiedAdCompanyNameEnabledDefinitionType ClassifiedAdCompanyNameEnabled
	 * @param EbayTradingTypeSpecialitySubscriptionDefinitionType SpecialitySubscription
	 * @param EbayTradingTypeRegularSubscriptionDefinitionType RegularSubscription
	 * @param EbayTradingTypePremiumSubscriptionDefinitionType PremiumSubscription
	 * @param EbayTradingTypeNonSubscriptionDefinitionType NonSubscription
	 * @param EbayTradingTypeReturnPolicyEnabledDefinitionType ReturnPolicyEnabled
	 * @param EbayTradingTypeHandlingTimeEnabledDefinitionType HandlingTimeEnabled
	 * @param EbayTradingTypePayPalRequiredForStoreOwnerDefinitionType PayPalRequiredForStoreOwner
	 * @param EbayTradingTypeReviseQuantityAllowedDefinitionType ReviseQuantityAllowed
	 * @param EbayTradingTypeRevisePriceAllowedDefinitionType RevisePriceAllowed
	 * @param EbayTradingTypeStoreOwnerExtendedListingDurationsEnabledDefinitionType StoreOwnerExtendedListingDurationsEnabled
	 * @param EbayTradingTypeStoreOwnerExtendedListingDurationsDefinitionType StoreOwnerExtendedListingDurations
	 * @param EbayTradingTypePaymentMethodDefinitionType PaymentMethod
	 * @param EbayTradingTypeGroup1MaxFlatShippingCostDefinitionType Group1MaxFlatShippingCost
	 * @param EbayTradingTypeGroup2MaxFlatShippingCostDefinitionType Group2MaxFlatShippingCost
	 * @param EbayTradingTypeGroup3MaxFlatShippingCostDefinitionType Group3MaxFlatShippingCost
	 * @param EbayTradingTypeMaxFlatShippingCostCBTExemptDefinitionType MaxFlatShippingCostCBTExempt
	 * @param EbayTradingTypeMaxFlatShippingCostDefinitionType MaxFlatShippingCost
	 * @param EbayTradingTypeVariationsEnabledDefinitionType VariationsEnabled
	 * @param EbayTradingTypeAttributeConversionEnabledFeatureDefinitionType AttributeConversionEnabled
	 * @param EbayTradingTypeFreeGalleryPlusEnabledDefinitionType FreeGalleryPlusEnabled
	 * @param EbayTradingTypeFreePicturePackEnabledDefinitionType FreePicturePackEnabled
	 * @param EbayTradingTypeItemCompatibilityEnabledDefinitionType ItemCompatibilityEnabled
	 * @param EbayTradingTypeMaxItemCompatibilityDefinitionType MaxItemCompatibility
	 * @param EbayTradingTypeMinItemCompatibilityDefinitionType MinItemCompatibility
	 * @param EbayTradingTypeConditionEnabledDefinitionType ConditionEnabled
	 * @param EbayTradingTypeConditionValuesDefinitionType ConditionValues
	 * @param EbayTradingTypeValueCategoryDefinitionType ValueCategory
	 * @param EbayTradingTypeProductCreationEnabledDefinitionType ProductCreationEnabled
	 * @param EbayTradingTypeCompatibleVehicleTypeDefinitionType CompatibleVehicleType
	 * @param EbayTradingTypeMaxGranularFitmentCountDefinitionType MaxGranularFitmentCount
	 * @param EbayTradingTypePaymentOptionsGroupEnabledDefinitionType PaymentOptionsGroup
	 * @param EbayTradingTypeProfileCategoryGroupDefinitionType ShippingProfileCategoryGroup
	 * @param EbayTradingTypeProfileCategoryGroupDefinitionType PaymentProfileCategoryGroup
	 * @param EbayTradingTypeProfileCategoryGroupDefinitionType ReturnPolicyProfileCategoryGroup
	 * @param EbayTradingTypeVINSupportedDefinitionType VINSupported
	 * @param EbayTradingTypeVRMSupportedDefinitionType VRMSupported
	 * @param EbayTradingTypeSellerProvidedTitleSupportedDefinitionType SellerProvidedTitleSupported
	 * @param EbayTradingTypeDepositSupportedDefinitionType DepositSupported
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeatureDefinitionsType
	 */
	public function __construct($_ListingDurations = null,$_ShippingTermsRequired = null,$_BestOfferEnabled = null,$_DutchBINEnabled = null,$_UserConsentRequired = null,$_HomePageFeaturedEnabled = null,$_ProPackEnabled = null,$_BasicUpgradePackEnabled = null,$_ValuePackEnabled = null,$_ProPackPlusEnabled = null,$_AdFormatEnabled = null,$_BestOfferCounterEnabled = null,$_BestOfferAutoDeclineEnabled = null,$_LocalMarketSpecialitySubscription = null,$_LocalMarketRegularSubscription = null,$_LocalMarketPremiumSubscription = null,$_LocalMarketNonSubscription = null,$_ExpressEnabled = null,$_ExpressPicturesRequired = null,$_ExpressConditionRequired = null,$_MinimumReservePrice = null,$_TransactionConfirmationRequestEnabled = null,$_SellerContactDetailsEnabled = null,$_StoreInventoryEnabled = null,$_SkypeMeTransactionalEnabled = null,$_SkypeMeNonTransactionalEnabled = null,$_LocalListingDistancesRegular = null,$_LocalListingDistancesSpecialty = null,$_LocalListingDistancesNonSubscription = null,$_ClassifiedAdPaymentMethodEnabled = null,$_ClassifiedAdShippingMethodEnabled = null,$_ClassifiedAdBestOfferEnabled = null,$_ClassifiedAdCounterOfferEnabled = null,$_ClassifiedAdAutoDeclineEnabled = null,$_ClassifiedAdContactByPhoneEnabled = null,$_ClassifiedAdContactByEmailEnabled = null,$_SafePaymentRequired = null,$_ClassifiedAdPayPerLeadEnabled = null,$_ItemSpecificsEnabled = null,$_PaisaPayFullEscrowEnabled = null,$_ISBNIdentifierEnabled = null,$_UPCIdentifierEnabled = null,$_EANIdentifierEnabled = null,$_BrandMPNIdentifierEnabled = null,$_BestOfferAutoAcceptEnabled = null,$_ClassifiedAdAutoAcceptEnabled = null,$_CrossBorderTradeNorthAmericaEnabled = null,$_CrossBorderTradeGBEnabled = null,$_CrossBorderTradeAustraliaEnabled = null,$_PayPalBuyerProtectionEnabled = null,$_BuyerGuaranteeEnabled = null,$_CombinedFixedPriceTreatmentEnabled = null,$_GalleryFeaturedDurations = null,$_INEscrowWorkflowTimeline = null,$_PayPalRequired = null,$_eBayMotorsProAdFormatEnabled = null,$_eBayMotorsProContactByPhoneEnabled = null,$_eBayMotorsProPhoneCount = null,$_eBayMotorsProContactByAddressEnabled = null,$_eBayMotorsProStreetCount = null,$_eBayMotorsProCompanyNameEnabled = null,$_eBayMotorsProContactByEmailEnabled = null,$_eBayMotorsProBestOfferEnabled = null,$_eBayMotorsProAutoAcceptEnabled = null,$_eBayMotorsProAutoDeclineEnabled = null,$_eBayMotorsProPaymentMethodCheckOutEnabled = null,$_eBayMotorsProShippingMethodEnabled = null,$_eBayMotorsProCounterOfferEnabled = null,$_eBayMotorsProSellerContactDetailsEnabled = null,$_LocalMarketAdFormatEnabled = null,$_LocalMarketContactByPhoneEnabled = null,$_LocalMarketPhoneCount = null,$_LocalMarketContactByAddressEnabled = null,$_LocalMarketStreetCount = null,$_LocalMarketCompanyNameEnabled = null,$_LocalMarketContactByEmailEnabled = null,$_LocalMarketBestOfferEnabled = null,$_LocalMarketAutoAcceptEnabled = null,$_LocalMarketAutoDeclineEnabled = null,$_LocalMarketPaymentMethodCheckOutEnabled = null,$_LocalMarketShippingMethodEnabled = null,$_LocalMarketCounterOfferEnabled = null,$_LocalMarketSellerContactDetailsEnabled = null,$_ClassifiedAdPhoneCount = null,$_ClassifiedAdContactByAddressEnabled = null,$_ClassifiedAdStreetCount = null,$_ClassifiedAdCompanyNameEnabled = null,$_SpecialitySubscription = null,$_RegularSubscription = null,$_PremiumSubscription = null,$_NonSubscription = null,$_ReturnPolicyEnabled = null,$_HandlingTimeEnabled = null,$_PayPalRequiredForStoreOwner = null,$_ReviseQuantityAllowed = null,$_RevisePriceAllowed = null,$_StoreOwnerExtendedListingDurationsEnabled = null,$_StoreOwnerExtendedListingDurations = null,$_PaymentMethod = null,$_Group1MaxFlatShippingCost = null,$_Group2MaxFlatShippingCost = null,$_Group3MaxFlatShippingCost = null,$_MaxFlatShippingCostCBTExempt = null,$_MaxFlatShippingCost = null,$_VariationsEnabled = null,$_AttributeConversionEnabled = null,$_FreeGalleryPlusEnabled = null,$_FreePicturePackEnabled = null,$_ItemCompatibilityEnabled = null,$_MaxItemCompatibility = null,$_MinItemCompatibility = null,$_ConditionEnabled = null,$_ConditionValues = null,$_ValueCategory = null,$_ProductCreationEnabled = null,$_CompatibleVehicleType = null,$_MaxGranularFitmentCount = null,$_PaymentOptionsGroup = null,$_ShippingProfileCategoryGroup = null,$_PaymentProfileCategoryGroup = null,$_ReturnPolicyProfileCategoryGroup = null,$_VINSupported = null,$_VRMSupported = null,$_SellerProvidedTitleSupported = null,$_DepositSupported = null,$_any = null)
	{
		parent::__construct(array('ListingDurations'=>$_ListingDurations,'ShippingTermsRequired'=>$_ShippingTermsRequired,'BestOfferEnabled'=>$_BestOfferEnabled,'DutchBINEnabled'=>$_DutchBINEnabled,'UserConsentRequired'=>$_UserConsentRequired,'HomePageFeaturedEnabled'=>$_HomePageFeaturedEnabled,'ProPackEnabled'=>$_ProPackEnabled,'BasicUpgradePackEnabled'=>$_BasicUpgradePackEnabled,'ValuePackEnabled'=>$_ValuePackEnabled,'ProPackPlusEnabled'=>$_ProPackPlusEnabled,'AdFormatEnabled'=>$_AdFormatEnabled,'BestOfferCounterEnabled'=>$_BestOfferCounterEnabled,'BestOfferAutoDeclineEnabled'=>$_BestOfferAutoDeclineEnabled,'LocalMarketSpecialitySubscription'=>$_LocalMarketSpecialitySubscription,'LocalMarketRegularSubscription'=>$_LocalMarketRegularSubscription,'LocalMarketPremiumSubscription'=>$_LocalMarketPremiumSubscription,'LocalMarketNonSubscription'=>$_LocalMarketNonSubscription,'ExpressEnabled'=>$_ExpressEnabled,'ExpressPicturesRequired'=>$_ExpressPicturesRequired,'ExpressConditionRequired'=>$_ExpressConditionRequired,'MinimumReservePrice'=>$_MinimumReservePrice,'TransactionConfirmationRequestEnabled'=>$_TransactionConfirmationRequestEnabled,'SellerContactDetailsEnabled'=>$_SellerContactDetailsEnabled,'StoreInventoryEnabled'=>$_StoreInventoryEnabled,'SkypeMeTransactionalEnabled'=>$_SkypeMeTransactionalEnabled,'SkypeMeNonTransactionalEnabled'=>$_SkypeMeNonTransactionalEnabled,'LocalListingDistancesRegular'=>$_LocalListingDistancesRegular,'LocalListingDistancesSpecialty'=>$_LocalListingDistancesSpecialty,'LocalListingDistancesNonSubscription'=>$_LocalListingDistancesNonSubscription,'ClassifiedAdPaymentMethodEnabled'=>$_ClassifiedAdPaymentMethodEnabled,'ClassifiedAdShippingMethodEnabled'=>$_ClassifiedAdShippingMethodEnabled,'ClassifiedAdBestOfferEnabled'=>$_ClassifiedAdBestOfferEnabled,'ClassifiedAdCounterOfferEnabled'=>$_ClassifiedAdCounterOfferEnabled,'ClassifiedAdAutoDeclineEnabled'=>$_ClassifiedAdAutoDeclineEnabled,'ClassifiedAdContactByPhoneEnabled'=>$_ClassifiedAdContactByPhoneEnabled,'ClassifiedAdContactByEmailEnabled'=>$_ClassifiedAdContactByEmailEnabled,'SafePaymentRequired'=>$_SafePaymentRequired,'ClassifiedAdPayPerLeadEnabled'=>$_ClassifiedAdPayPerLeadEnabled,'ItemSpecificsEnabled'=>$_ItemSpecificsEnabled,'PaisaPayFullEscrowEnabled'=>$_PaisaPayFullEscrowEnabled,'ISBNIdentifierEnabled'=>$_ISBNIdentifierEnabled,'UPCIdentifierEnabled'=>$_UPCIdentifierEnabled,'EANIdentifierEnabled'=>$_EANIdentifierEnabled,'BrandMPNIdentifierEnabled'=>$_BrandMPNIdentifierEnabled,'BestOfferAutoAcceptEnabled'=>$_BestOfferAutoAcceptEnabled,'ClassifiedAdAutoAcceptEnabled'=>$_ClassifiedAdAutoAcceptEnabled,'CrossBorderTradeNorthAmericaEnabled'=>$_CrossBorderTradeNorthAmericaEnabled,'CrossBorderTradeGBEnabled'=>$_CrossBorderTradeGBEnabled,'CrossBorderTradeAustraliaEnabled'=>$_CrossBorderTradeAustraliaEnabled,'PayPalBuyerProtectionEnabled'=>$_PayPalBuyerProtectionEnabled,'BuyerGuaranteeEnabled'=>$_BuyerGuaranteeEnabled,'CombinedFixedPriceTreatmentEnabled'=>$_CombinedFixedPriceTreatmentEnabled,'GalleryFeaturedDurations'=>$_GalleryFeaturedDurations,'INEscrowWorkflowTimeline'=>$_INEscrowWorkflowTimeline,'PayPalRequired'=>$_PayPalRequired,'eBayMotorsProAdFormatEnabled'=>$_eBayMotorsProAdFormatEnabled,'eBayMotorsProContactByPhoneEnabled'=>$_eBayMotorsProContactByPhoneEnabled,'eBayMotorsProPhoneCount'=>$_eBayMotorsProPhoneCount,'eBayMotorsProContactByAddressEnabled'=>$_eBayMotorsProContactByAddressEnabled,'eBayMotorsProStreetCount'=>$_eBayMotorsProStreetCount,'eBayMotorsProCompanyNameEnabled'=>$_eBayMotorsProCompanyNameEnabled,'eBayMotorsProContactByEmailEnabled'=>$_eBayMotorsProContactByEmailEnabled,'eBayMotorsProBestOfferEnabled'=>$_eBayMotorsProBestOfferEnabled,'eBayMotorsProAutoAcceptEnabled'=>$_eBayMotorsProAutoAcceptEnabled,'eBayMotorsProAutoDeclineEnabled'=>$_eBayMotorsProAutoDeclineEnabled,'eBayMotorsProPaymentMethodCheckOutEnabled'=>$_eBayMotorsProPaymentMethodCheckOutEnabled,'eBayMotorsProShippingMethodEnabled'=>$_eBayMotorsProShippingMethodEnabled,'eBayMotorsProCounterOfferEnabled'=>$_eBayMotorsProCounterOfferEnabled,'eBayMotorsProSellerContactDetailsEnabled'=>$_eBayMotorsProSellerContactDetailsEnabled,'LocalMarketAdFormatEnabled'=>$_LocalMarketAdFormatEnabled,'LocalMarketContactByPhoneEnabled'=>$_LocalMarketContactByPhoneEnabled,'LocalMarketPhoneCount'=>$_LocalMarketPhoneCount,'LocalMarketContactByAddressEnabled'=>$_LocalMarketContactByAddressEnabled,'LocalMarketStreetCount'=>$_LocalMarketStreetCount,'LocalMarketCompanyNameEnabled'=>$_LocalMarketCompanyNameEnabled,'LocalMarketContactByEmailEnabled'=>$_LocalMarketContactByEmailEnabled,'LocalMarketBestOfferEnabled'=>$_LocalMarketBestOfferEnabled,'LocalMarketAutoAcceptEnabled'=>$_LocalMarketAutoAcceptEnabled,'LocalMarketAutoDeclineEnabled'=>$_LocalMarketAutoDeclineEnabled,'LocalMarketPaymentMethodCheckOutEnabled'=>$_LocalMarketPaymentMethodCheckOutEnabled,'LocalMarketShippingMethodEnabled'=>$_LocalMarketShippingMethodEnabled,'LocalMarketCounterOfferEnabled'=>$_LocalMarketCounterOfferEnabled,'LocalMarketSellerContactDetailsEnabled'=>$_LocalMarketSellerContactDetailsEnabled,'ClassifiedAdPhoneCount'=>$_ClassifiedAdPhoneCount,'ClassifiedAdContactByAddressEnabled'=>$_ClassifiedAdContactByAddressEnabled,'ClassifiedAdStreetCount'=>$_ClassifiedAdStreetCount,'ClassifiedAdCompanyNameEnabled'=>$_ClassifiedAdCompanyNameEnabled,'SpecialitySubscription'=>$_SpecialitySubscription,'RegularSubscription'=>$_RegularSubscription,'PremiumSubscription'=>$_PremiumSubscription,'NonSubscription'=>$_NonSubscription,'ReturnPolicyEnabled'=>$_ReturnPolicyEnabled,'HandlingTimeEnabled'=>$_HandlingTimeEnabled,'PayPalRequiredForStoreOwner'=>$_PayPalRequiredForStoreOwner,'ReviseQuantityAllowed'=>$_ReviseQuantityAllowed,'RevisePriceAllowed'=>$_RevisePriceAllowed,'StoreOwnerExtendedListingDurationsEnabled'=>$_StoreOwnerExtendedListingDurationsEnabled,'StoreOwnerExtendedListingDurations'=>$_StoreOwnerExtendedListingDurations,'PaymentMethod'=>$_PaymentMethod,'Group1MaxFlatShippingCost'=>$_Group1MaxFlatShippingCost,'Group2MaxFlatShippingCost'=>$_Group2MaxFlatShippingCost,'Group3MaxFlatShippingCost'=>$_Group3MaxFlatShippingCost,'MaxFlatShippingCostCBTExempt'=>$_MaxFlatShippingCostCBTExempt,'MaxFlatShippingCost'=>$_MaxFlatShippingCost,'VariationsEnabled'=>$_VariationsEnabled,'AttributeConversionEnabled'=>$_AttributeConversionEnabled,'FreeGalleryPlusEnabled'=>$_FreeGalleryPlusEnabled,'FreePicturePackEnabled'=>$_FreePicturePackEnabled,'ItemCompatibilityEnabled'=>$_ItemCompatibilityEnabled,'MaxItemCompatibility'=>$_MaxItemCompatibility,'MinItemCompatibility'=>$_MinItemCompatibility,'ConditionEnabled'=>$_ConditionEnabled,'ConditionValues'=>$_ConditionValues,'ValueCategory'=>$_ValueCategory,'ProductCreationEnabled'=>$_ProductCreationEnabled,'CompatibleVehicleType'=>$_CompatibleVehicleType,'MaxGranularFitmentCount'=>$_MaxGranularFitmentCount,'PaymentOptionsGroup'=>$_PaymentOptionsGroup,'ShippingProfileCategoryGroup'=>$_ShippingProfileCategoryGroup,'PaymentProfileCategoryGroup'=>$_PaymentProfileCategoryGroup,'ReturnPolicyProfileCategoryGroup'=>$_ReturnPolicyProfileCategoryGroup,'VINSupported'=>$_VINSupported,'VRMSupported'=>$_VRMSupported,'SellerProvidedTitleSupported'=>$_SellerProvidedTitleSupported,'DepositSupported'=>$_DepositSupported,'any'=>$_any));
	}
	/**
	 * Set ListingDurations
	 * @param ListingDurationDefinitionsType ListingDurations
	 * @return ListingDurationDefinitionsType
	 */
	public function setListingDurations($_ListingDurations)
	{
		return ($this->ListingDurations = $_ListingDurations);
	}
	/**
	 * Get ListingDurations
	 * @return EbayTradingTypeListingDurationDefinitionsType
	 */
	public function getListingDurations()
	{
		return $this->ListingDurations;
	}
	/**
	 * Set ShippingTermsRequired
	 * @param ShippingTermRequiredDefinitionType ShippingTermsRequired
	 * @return ShippingTermRequiredDefinitionType
	 */
	public function setShippingTermsRequired($_ShippingTermsRequired)
	{
		return ($this->ShippingTermsRequired = $_ShippingTermsRequired);
	}
	/**
	 * Get ShippingTermsRequired
	 * @return EbayTradingTypeShippingTermRequiredDefinitionType
	 */
	public function getShippingTermsRequired()
	{
		return $this->ShippingTermsRequired;
	}
	/**
	 * Set BestOfferEnabled
	 * @param BestOfferEnabledDefinitionType BestOfferEnabled
	 * @return BestOfferEnabledDefinitionType
	 */
	public function setBestOfferEnabled($_BestOfferEnabled)
	{
		return ($this->BestOfferEnabled = $_BestOfferEnabled);
	}
	/**
	 * Get BestOfferEnabled
	 * @return EbayTradingTypeBestOfferEnabledDefinitionType
	 */
	public function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * Set DutchBINEnabled
	 * @param DutchBINEnabledDefinitionType DutchBINEnabled
	 * @return DutchBINEnabledDefinitionType
	 */
	public function setDutchBINEnabled($_DutchBINEnabled)
	{
		return ($this->DutchBINEnabled = $_DutchBINEnabled);
	}
	/**
	 * Get DutchBINEnabled
	 * @return EbayTradingTypeDutchBINEnabledDefinitionType
	 */
	public function getDutchBINEnabled()
	{
		return $this->DutchBINEnabled;
	}
	/**
	 * Set UserConsentRequired
	 * @param UserConsentRequiredDefinitionType UserConsentRequired
	 * @return UserConsentRequiredDefinitionType
	 */
	public function setUserConsentRequired($_UserConsentRequired)
	{
		return ($this->UserConsentRequired = $_UserConsentRequired);
	}
	/**
	 * Get UserConsentRequired
	 * @return EbayTradingTypeUserConsentRequiredDefinitionType
	 */
	public function getUserConsentRequired()
	{
		return $this->UserConsentRequired;
	}
	/**
	 * Set HomePageFeaturedEnabled
	 * @param HomePageFeaturedEnabledDefinitionType HomePageFeaturedEnabled
	 * @return HomePageFeaturedEnabledDefinitionType
	 */
	public function setHomePageFeaturedEnabled($_HomePageFeaturedEnabled)
	{
		return ($this->HomePageFeaturedEnabled = $_HomePageFeaturedEnabled);
	}
	/**
	 * Get HomePageFeaturedEnabled
	 * @return EbayTradingTypeHomePageFeaturedEnabledDefinitionType
	 */
	public function getHomePageFeaturedEnabled()
	{
		return $this->HomePageFeaturedEnabled;
	}
	/**
	 * Set ProPackEnabled
	 * @param ProPackEnabledDefinitionType ProPackEnabled
	 * @return ProPackEnabledDefinitionType
	 */
	public function setProPackEnabled($_ProPackEnabled)
	{
		return ($this->ProPackEnabled = $_ProPackEnabled);
	}
	/**
	 * Get ProPackEnabled
	 * @return EbayTradingTypeProPackEnabledDefinitionType
	 */
	public function getProPackEnabled()
	{
		return $this->ProPackEnabled;
	}
	/**
	 * Set BasicUpgradePackEnabled
	 * @param BasicUpgradePackEnabledDefinitionType BasicUpgradePackEnabled
	 * @return BasicUpgradePackEnabledDefinitionType
	 */
	public function setBasicUpgradePackEnabled($_BasicUpgradePackEnabled)
	{
		return ($this->BasicUpgradePackEnabled = $_BasicUpgradePackEnabled);
	}
	/**
	 * Get BasicUpgradePackEnabled
	 * @return EbayTradingTypeBasicUpgradePackEnabledDefinitionType
	 */
	public function getBasicUpgradePackEnabled()
	{
		return $this->BasicUpgradePackEnabled;
	}
	/**
	 * Set ValuePackEnabled
	 * @param ValuePackEnabledDefinitionType ValuePackEnabled
	 * @return ValuePackEnabledDefinitionType
	 */
	public function setValuePackEnabled($_ValuePackEnabled)
	{
		return ($this->ValuePackEnabled = $_ValuePackEnabled);
	}
	/**
	 * Get ValuePackEnabled
	 * @return EbayTradingTypeValuePackEnabledDefinitionType
	 */
	public function getValuePackEnabled()
	{
		return $this->ValuePackEnabled;
	}
	/**
	 * Set ProPackPlusEnabled
	 * @param ProPackPlusEnabledDefinitionType ProPackPlusEnabled
	 * @return ProPackPlusEnabledDefinitionType
	 */
	public function setProPackPlusEnabled($_ProPackPlusEnabled)
	{
		return ($this->ProPackPlusEnabled = $_ProPackPlusEnabled);
	}
	/**
	 * Get ProPackPlusEnabled
	 * @return EbayTradingTypeProPackPlusEnabledDefinitionType
	 */
	public function getProPackPlusEnabled()
	{
		return $this->ProPackPlusEnabled;
	}
	/**
	 * Set AdFormatEnabled
	 * @param AdFormatEnabledDefinitionType AdFormatEnabled
	 * @return AdFormatEnabledDefinitionType
	 */
	public function setAdFormatEnabled($_AdFormatEnabled)
	{
		return ($this->AdFormatEnabled = $_AdFormatEnabled);
	}
	/**
	 * Get AdFormatEnabled
	 * @return EbayTradingTypeAdFormatEnabledDefinitionType
	 */
	public function getAdFormatEnabled()
	{
		return $this->AdFormatEnabled;
	}
	/**
	 * Set BestOfferCounterEnabled
	 * @param BestOfferCounterEnabledDefinitionType BestOfferCounterEnabled
	 * @return BestOfferCounterEnabledDefinitionType
	 */
	public function setBestOfferCounterEnabled($_BestOfferCounterEnabled)
	{
		return ($this->BestOfferCounterEnabled = $_BestOfferCounterEnabled);
	}
	/**
	 * Get BestOfferCounterEnabled
	 * @return EbayTradingTypeBestOfferCounterEnabledDefinitionType
	 */
	public function getBestOfferCounterEnabled()
	{
		return $this->BestOfferCounterEnabled;
	}
	/**
	 * Set BestOfferAutoDeclineEnabled
	 * @param BestOfferAutoDeclineEnabledDefinitionType BestOfferAutoDeclineEnabled
	 * @return BestOfferAutoDeclineEnabledDefinitionType
	 */
	public function setBestOfferAutoDeclineEnabled($_BestOfferAutoDeclineEnabled)
	{
		return ($this->BestOfferAutoDeclineEnabled = $_BestOfferAutoDeclineEnabled);
	}
	/**
	 * Get BestOfferAutoDeclineEnabled
	 * @return EbayTradingTypeBestOfferAutoDeclineEnabledDefinitionType
	 */
	public function getBestOfferAutoDeclineEnabled()
	{
		return $this->BestOfferAutoDeclineEnabled;
	}
	/**
	 * Set LocalMarketSpecialitySubscription
	 * @param LocalMarketSpecialitySubscriptionDefinitionType LocalMarketSpecialitySubscription
	 * @return LocalMarketSpecialitySubscriptionDefinitionType
	 */
	public function setLocalMarketSpecialitySubscription($_LocalMarketSpecialitySubscription)
	{
		return ($this->LocalMarketSpecialitySubscription = $_LocalMarketSpecialitySubscription);
	}
	/**
	 * Get LocalMarketSpecialitySubscription
	 * @return EbayTradingTypeLocalMarketSpecialitySubscriptionDefinitionType
	 */
	public function getLocalMarketSpecialitySubscription()
	{
		return $this->LocalMarketSpecialitySubscription;
	}
	/**
	 * Set LocalMarketRegularSubscription
	 * @param LocalMarketRegularSubscriptionDefinitionType LocalMarketRegularSubscription
	 * @return LocalMarketRegularSubscriptionDefinitionType
	 */
	public function setLocalMarketRegularSubscription($_LocalMarketRegularSubscription)
	{
		return ($this->LocalMarketRegularSubscription = $_LocalMarketRegularSubscription);
	}
	/**
	 * Get LocalMarketRegularSubscription
	 * @return EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType
	 */
	public function getLocalMarketRegularSubscription()
	{
		return $this->LocalMarketRegularSubscription;
	}
	/**
	 * Set LocalMarketPremiumSubscription
	 * @param LocalMarketPremiumSubscriptionDefinitionType LocalMarketPremiumSubscription
	 * @return LocalMarketPremiumSubscriptionDefinitionType
	 */
	public function setLocalMarketPremiumSubscription($_LocalMarketPremiumSubscription)
	{
		return ($this->LocalMarketPremiumSubscription = $_LocalMarketPremiumSubscription);
	}
	/**
	 * Get LocalMarketPremiumSubscription
	 * @return EbayTradingTypeLocalMarketPremiumSubscriptionDefinitionType
	 */
	public function getLocalMarketPremiumSubscription()
	{
		return $this->LocalMarketPremiumSubscription;
	}
	/**
	 * Set LocalMarketNonSubscription
	 * @param LocalMarketNonSubscriptionDefinitionType LocalMarketNonSubscription
	 * @return LocalMarketNonSubscriptionDefinitionType
	 */
	public function setLocalMarketNonSubscription($_LocalMarketNonSubscription)
	{
		return ($this->LocalMarketNonSubscription = $_LocalMarketNonSubscription);
	}
	/**
	 * Get LocalMarketNonSubscription
	 * @return EbayTradingTypeLocalMarketNonSubscriptionDefinitionType
	 */
	public function getLocalMarketNonSubscription()
	{
		return $this->LocalMarketNonSubscription;
	}
	/**
	 * Set ExpressEnabled
	 * @param ExpressEnabledDefinitionType ExpressEnabled
	 * @return ExpressEnabledDefinitionType
	 */
	public function setExpressEnabled($_ExpressEnabled)
	{
		return ($this->ExpressEnabled = $_ExpressEnabled);
	}
	/**
	 * Get ExpressEnabled
	 * @return EbayTradingTypeExpressEnabledDefinitionType
	 */
	public function getExpressEnabled()
	{
		return $this->ExpressEnabled;
	}
	/**
	 * Set ExpressPicturesRequired
	 * @param ExpressPicturesRequiredDefinitionType ExpressPicturesRequired
	 * @return ExpressPicturesRequiredDefinitionType
	 */
	public function setExpressPicturesRequired($_ExpressPicturesRequired)
	{
		return ($this->ExpressPicturesRequired = $_ExpressPicturesRequired);
	}
	/**
	 * Get ExpressPicturesRequired
	 * @return EbayTradingTypeExpressPicturesRequiredDefinitionType
	 */
	public function getExpressPicturesRequired()
	{
		return $this->ExpressPicturesRequired;
	}
	/**
	 * Set ExpressConditionRequired
	 * @param ExpressConditionRequiredDefinitionType ExpressConditionRequired
	 * @return ExpressConditionRequiredDefinitionType
	 */
	public function setExpressConditionRequired($_ExpressConditionRequired)
	{
		return ($this->ExpressConditionRequired = $_ExpressConditionRequired);
	}
	/**
	 * Get ExpressConditionRequired
	 * @return EbayTradingTypeExpressConditionRequiredDefinitionType
	 */
	public function getExpressConditionRequired()
	{
		return $this->ExpressConditionRequired;
	}
	/**
	 * Set MinimumReservePrice
	 * @param MinimumReservePriceDefinitionType MinimumReservePrice
	 * @return MinimumReservePriceDefinitionType
	 */
	public function setMinimumReservePrice($_MinimumReservePrice)
	{
		return ($this->MinimumReservePrice = $_MinimumReservePrice);
	}
	/**
	 * Get MinimumReservePrice
	 * @return EbayTradingTypeMinimumReservePriceDefinitionType
	 */
	public function getMinimumReservePrice()
	{
		return $this->MinimumReservePrice;
	}
	/**
	 * Set TransactionConfirmationRequestEnabled
	 * @param TCREnabledDefinitionType TransactionConfirmationRequestEnabled
	 * @return TCREnabledDefinitionType
	 */
	public function setTransactionConfirmationRequestEnabled($_TransactionConfirmationRequestEnabled)
	{
		return ($this->TransactionConfirmationRequestEnabled = $_TransactionConfirmationRequestEnabled);
	}
	/**
	 * Get TransactionConfirmationRequestEnabled
	 * @return EbayTradingTypeTCREnabledDefinitionType
	 */
	public function getTransactionConfirmationRequestEnabled()
	{
		return $this->TransactionConfirmationRequestEnabled;
	}
	/**
	 * Set SellerContactDetailsEnabled
	 * @param SellerContactDetailsEnabledDefinitionType SellerContactDetailsEnabled
	 * @return SellerContactDetailsEnabledDefinitionType
	 */
	public function setSellerContactDetailsEnabled($_SellerContactDetailsEnabled)
	{
		return ($this->SellerContactDetailsEnabled = $_SellerContactDetailsEnabled);
	}
	/**
	 * Get SellerContactDetailsEnabled
	 * @return EbayTradingTypeSellerContactDetailsEnabledDefinitionType
	 */
	public function getSellerContactDetailsEnabled()
	{
		return $this->SellerContactDetailsEnabled;
	}
	/**
	 * Set StoreInventoryEnabled
	 * @param StoreInventoryEnabledDefinitionType StoreInventoryEnabled
	 * @return StoreInventoryEnabledDefinitionType
	 */
	public function setStoreInventoryEnabled($_StoreInventoryEnabled)
	{
		return ($this->StoreInventoryEnabled = $_StoreInventoryEnabled);
	}
	/**
	 * Get StoreInventoryEnabled
	 * @return EbayTradingTypeStoreInventoryEnabledDefinitionType
	 */
	public function getStoreInventoryEnabled()
	{
		return $this->StoreInventoryEnabled;
	}
	/**
	 * Set SkypeMeTransactionalEnabled
	 * @param SkypeMeTransactionalEnabledDefinitionType SkypeMeTransactionalEnabled
	 * @return SkypeMeTransactionalEnabledDefinitionType
	 */
	public function setSkypeMeTransactionalEnabled($_SkypeMeTransactionalEnabled)
	{
		return ($this->SkypeMeTransactionalEnabled = $_SkypeMeTransactionalEnabled);
	}
	/**
	 * Get SkypeMeTransactionalEnabled
	 * @return EbayTradingTypeSkypeMeTransactionalEnabledDefinitionType
	 */
	public function getSkypeMeTransactionalEnabled()
	{
		return $this->SkypeMeTransactionalEnabled;
	}
	/**
	 * Set SkypeMeNonTransactionalEnabled
	 * @param SkypeMeNonTransactionalEnabledDefinitionType SkypeMeNonTransactionalEnabled
	 * @return SkypeMeNonTransactionalEnabledDefinitionType
	 */
	public function setSkypeMeNonTransactionalEnabled($_SkypeMeNonTransactionalEnabled)
	{
		return ($this->SkypeMeNonTransactionalEnabled = $_SkypeMeNonTransactionalEnabled);
	}
	/**
	 * Get SkypeMeNonTransactionalEnabled
	 * @return EbayTradingTypeSkypeMeNonTransactionalEnabledDefinitionType
	 */
	public function getSkypeMeNonTransactionalEnabled()
	{
		return $this->SkypeMeNonTransactionalEnabled;
	}
	/**
	 * Set LocalListingDistancesRegular
	 * @param LocalListingDistancesRegularDefinitionType LocalListingDistancesRegular
	 * @return LocalListingDistancesRegularDefinitionType
	 */
	public function setLocalListingDistancesRegular($_LocalListingDistancesRegular)
	{
		return ($this->LocalListingDistancesRegular = $_LocalListingDistancesRegular);
	}
	/**
	 * Get LocalListingDistancesRegular
	 * @return EbayTradingTypeLocalListingDistancesRegularDefinitionType
	 */
	public function getLocalListingDistancesRegular()
	{
		return $this->LocalListingDistancesRegular;
	}
	/**
	 * Set LocalListingDistancesSpecialty
	 * @param LocalListingDistancesSpecialtyDefinitionType LocalListingDistancesSpecialty
	 * @return LocalListingDistancesSpecialtyDefinitionType
	 */
	public function setLocalListingDistancesSpecialty($_LocalListingDistancesSpecialty)
	{
		return ($this->LocalListingDistancesSpecialty = $_LocalListingDistancesSpecialty);
	}
	/**
	 * Get LocalListingDistancesSpecialty
	 * @return EbayTradingTypeLocalListingDistancesSpecialtyDefinitionType
	 */
	public function getLocalListingDistancesSpecialty()
	{
		return $this->LocalListingDistancesSpecialty;
	}
	/**
	 * Set LocalListingDistancesNonSubscription
	 * @param LocalListingDistancesNonSubscriptionDefinitionType LocalListingDistancesNonSubscription
	 * @return LocalListingDistancesNonSubscriptionDefinitionType
	 */
	public function setLocalListingDistancesNonSubscription($_LocalListingDistancesNonSubscription)
	{
		return ($this->LocalListingDistancesNonSubscription = $_LocalListingDistancesNonSubscription);
	}
	/**
	 * Get LocalListingDistancesNonSubscription
	 * @return EbayTradingTypeLocalListingDistancesNonSubscriptionDefinitionType
	 */
	public function getLocalListingDistancesNonSubscription()
	{
		return $this->LocalListingDistancesNonSubscription;
	}
	/**
	 * Set ClassifiedAdPaymentMethodEnabled
	 * @param ClassifiedAdPaymentMethodEnabledDefinitionType ClassifiedAdPaymentMethodEnabled
	 * @return ClassifiedAdPaymentMethodEnabledDefinitionType
	 */
	public function setClassifiedAdPaymentMethodEnabled($_ClassifiedAdPaymentMethodEnabled)
	{
		return ($this->ClassifiedAdPaymentMethodEnabled = $_ClassifiedAdPaymentMethodEnabled);
	}
	/**
	 * Get ClassifiedAdPaymentMethodEnabled
	 * @return EbayTradingTypeClassifiedAdPaymentMethodEnabledDefinitionType
	 */
	public function getClassifiedAdPaymentMethodEnabled()
	{
		return $this->ClassifiedAdPaymentMethodEnabled;
	}
	/**
	 * Set ClassifiedAdShippingMethodEnabled
	 * @param ClassifiedAdShippingMethodEnabledDefinitionType ClassifiedAdShippingMethodEnabled
	 * @return ClassifiedAdShippingMethodEnabledDefinitionType
	 */
	public function setClassifiedAdShippingMethodEnabled($_ClassifiedAdShippingMethodEnabled)
	{
		return ($this->ClassifiedAdShippingMethodEnabled = $_ClassifiedAdShippingMethodEnabled);
	}
	/**
	 * Get ClassifiedAdShippingMethodEnabled
	 * @return EbayTradingTypeClassifiedAdShippingMethodEnabledDefinitionType
	 */
	public function getClassifiedAdShippingMethodEnabled()
	{
		return $this->ClassifiedAdShippingMethodEnabled;
	}
	/**
	 * Set ClassifiedAdBestOfferEnabled
	 * @param ClassifiedAdBestOfferEnabledDefinitionType ClassifiedAdBestOfferEnabled
	 * @return ClassifiedAdBestOfferEnabledDefinitionType
	 */
	public function setClassifiedAdBestOfferEnabled($_ClassifiedAdBestOfferEnabled)
	{
		return ($this->ClassifiedAdBestOfferEnabled = $_ClassifiedAdBestOfferEnabled);
	}
	/**
	 * Get ClassifiedAdBestOfferEnabled
	 * @return EbayTradingTypeClassifiedAdBestOfferEnabledDefinitionType
	 */
	public function getClassifiedAdBestOfferEnabled()
	{
		return $this->ClassifiedAdBestOfferEnabled;
	}
	/**
	 * Set ClassifiedAdCounterOfferEnabled
	 * @param ClassifiedAdCounterOfferEnabledDefinitionType ClassifiedAdCounterOfferEnabled
	 * @return ClassifiedAdCounterOfferEnabledDefinitionType
	 */
	public function setClassifiedAdCounterOfferEnabled($_ClassifiedAdCounterOfferEnabled)
	{
		return ($this->ClassifiedAdCounterOfferEnabled = $_ClassifiedAdCounterOfferEnabled);
	}
	/**
	 * Get ClassifiedAdCounterOfferEnabled
	 * @return EbayTradingTypeClassifiedAdCounterOfferEnabledDefinitionType
	 */
	public function getClassifiedAdCounterOfferEnabled()
	{
		return $this->ClassifiedAdCounterOfferEnabled;
	}
	/**
	 * Set ClassifiedAdAutoDeclineEnabled
	 * @param ClassifiedAdAutoDeclineEnabledDefinitionType ClassifiedAdAutoDeclineEnabled
	 * @return ClassifiedAdAutoDeclineEnabledDefinitionType
	 */
	public function setClassifiedAdAutoDeclineEnabled($_ClassifiedAdAutoDeclineEnabled)
	{
		return ($this->ClassifiedAdAutoDeclineEnabled = $_ClassifiedAdAutoDeclineEnabled);
	}
	/**
	 * Get ClassifiedAdAutoDeclineEnabled
	 * @return EbayTradingTypeClassifiedAdAutoDeclineEnabledDefinitionType
	 */
	public function getClassifiedAdAutoDeclineEnabled()
	{
		return $this->ClassifiedAdAutoDeclineEnabled;
	}
	/**
	 * Set ClassifiedAdContactByPhoneEnabled
	 * @param ClassifiedAdContactByPhoneEnabledDefinitionType ClassifiedAdContactByPhoneEnabled
	 * @return ClassifiedAdContactByPhoneEnabledDefinitionType
	 */
	public function setClassifiedAdContactByPhoneEnabled($_ClassifiedAdContactByPhoneEnabled)
	{
		return ($this->ClassifiedAdContactByPhoneEnabled = $_ClassifiedAdContactByPhoneEnabled);
	}
	/**
	 * Get ClassifiedAdContactByPhoneEnabled
	 * @return EbayTradingTypeClassifiedAdContactByPhoneEnabledDefinitionType
	 */
	public function getClassifiedAdContactByPhoneEnabled()
	{
		return $this->ClassifiedAdContactByPhoneEnabled;
	}
	/**
	 * Set ClassifiedAdContactByEmailEnabled
	 * @param ClassifiedAdContactByEmailEnabledDefintionType ClassifiedAdContactByEmailEnabled
	 * @return ClassifiedAdContactByEmailEnabledDefintionType
	 */
	public function setClassifiedAdContactByEmailEnabled($_ClassifiedAdContactByEmailEnabled)
	{
		return ($this->ClassifiedAdContactByEmailEnabled = $_ClassifiedAdContactByEmailEnabled);
	}
	/**
	 * Get ClassifiedAdContactByEmailEnabled
	 * @return EbayTradingTypeClassifiedAdContactByEmailEnabledDefintionType
	 */
	public function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}
	/**
	 * Set SafePaymentRequired
	 * @param SafePaymentRequiredDefinitionType SafePaymentRequired
	 * @return SafePaymentRequiredDefinitionType
	 */
	public function setSafePaymentRequired($_SafePaymentRequired)
	{
		return ($this->SafePaymentRequired = $_SafePaymentRequired);
	}
	/**
	 * Get SafePaymentRequired
	 * @return EbayTradingTypeSafePaymentRequiredDefinitionType
	 */
	public function getSafePaymentRequired()
	{
		return $this->SafePaymentRequired;
	}
	/**
	 * Set ClassifiedAdPayPerLeadEnabled
	 * @param ClassifiedAdPayPerLeadEnabledDefinitionType ClassifiedAdPayPerLeadEnabled
	 * @return ClassifiedAdPayPerLeadEnabledDefinitionType
	 */
	public function setClassifiedAdPayPerLeadEnabled($_ClassifiedAdPayPerLeadEnabled)
	{
		return ($this->ClassifiedAdPayPerLeadEnabled = $_ClassifiedAdPayPerLeadEnabled);
	}
	/**
	 * Get ClassifiedAdPayPerLeadEnabled
	 * @return EbayTradingTypeClassifiedAdPayPerLeadEnabledDefinitionType
	 */
	public function getClassifiedAdPayPerLeadEnabled()
	{
		return $this->ClassifiedAdPayPerLeadEnabled;
	}
	/**
	 * Set ItemSpecificsEnabled
	 * @param ItemSpecificsEnabledDefinitionType ItemSpecificsEnabled
	 * @return ItemSpecificsEnabledDefinitionType
	 */
	public function setItemSpecificsEnabled($_ItemSpecificsEnabled)
	{
		return ($this->ItemSpecificsEnabled = $_ItemSpecificsEnabled);
	}
	/**
	 * Get ItemSpecificsEnabled
	 * @return EbayTradingTypeItemSpecificsEnabledDefinitionType
	 */
	public function getItemSpecificsEnabled()
	{
		return $this->ItemSpecificsEnabled;
	}
	/**
	 * Set PaisaPayFullEscrowEnabled
	 * @param PaisaPayFullEscrowEnabledDefinitionType PaisaPayFullEscrowEnabled
	 * @return PaisaPayFullEscrowEnabledDefinitionType
	 */
	public function setPaisaPayFullEscrowEnabled($_PaisaPayFullEscrowEnabled)
	{
		return ($this->PaisaPayFullEscrowEnabled = $_PaisaPayFullEscrowEnabled);
	}
	/**
	 * Get PaisaPayFullEscrowEnabled
	 * @return EbayTradingTypePaisaPayFullEscrowEnabledDefinitionType
	 */
	public function getPaisaPayFullEscrowEnabled()
	{
		return $this->PaisaPayFullEscrowEnabled;
	}
	/**
	 * Set ISBNIdentifierEnabled
	 * @param ISBNIdentifierEnabledDefinitionType ISBNIdentifierEnabled
	 * @return ISBNIdentifierEnabledDefinitionType
	 */
	public function setISBNIdentifierEnabled($_ISBNIdentifierEnabled)
	{
		return ($this->ISBNIdentifierEnabled = $_ISBNIdentifierEnabled);
	}
	/**
	 * Get ISBNIdentifierEnabled
	 * @return EbayTradingTypeISBNIdentifierEnabledDefinitionType
	 */
	public function getISBNIdentifierEnabled()
	{
		return $this->ISBNIdentifierEnabled;
	}
	/**
	 * Set UPCIdentifierEnabled
	 * @param UPCIdentifierEnabledDefinitionType UPCIdentifierEnabled
	 * @return UPCIdentifierEnabledDefinitionType
	 */
	public function setUPCIdentifierEnabled($_UPCIdentifierEnabled)
	{
		return ($this->UPCIdentifierEnabled = $_UPCIdentifierEnabled);
	}
	/**
	 * Get UPCIdentifierEnabled
	 * @return EbayTradingTypeUPCIdentifierEnabledDefinitionType
	 */
	public function getUPCIdentifierEnabled()
	{
		return $this->UPCIdentifierEnabled;
	}
	/**
	 * Set EANIdentifierEnabled
	 * @param EANIdentifierEnabledDefinitionType EANIdentifierEnabled
	 * @return EANIdentifierEnabledDefinitionType
	 */
	public function setEANIdentifierEnabled($_EANIdentifierEnabled)
	{
		return ($this->EANIdentifierEnabled = $_EANIdentifierEnabled);
	}
	/**
	 * Get EANIdentifierEnabled
	 * @return EbayTradingTypeEANIdentifierEnabledDefinitionType
	 */
	public function getEANIdentifierEnabled()
	{
		return $this->EANIdentifierEnabled;
	}
	/**
	 * Set BrandMPNIdentifierEnabled
	 * @param BrandMPNIdentifierEnabledDefinitionType BrandMPNIdentifierEnabled
	 * @return BrandMPNIdentifierEnabledDefinitionType
	 */
	public function setBrandMPNIdentifierEnabled($_BrandMPNIdentifierEnabled)
	{
		return ($this->BrandMPNIdentifierEnabled = $_BrandMPNIdentifierEnabled);
	}
	/**
	 * Get BrandMPNIdentifierEnabled
	 * @return EbayTradingTypeBrandMPNIdentifierEnabledDefinitionType
	 */
	public function getBrandMPNIdentifierEnabled()
	{
		return $this->BrandMPNIdentifierEnabled;
	}
	/**
	 * Set BestOfferAutoAcceptEnabled
	 * @param BestOfferAutoAcceptEnabledDefinitionType BestOfferAutoAcceptEnabled
	 * @return BestOfferAutoAcceptEnabledDefinitionType
	 */
	public function setBestOfferAutoAcceptEnabled($_BestOfferAutoAcceptEnabled)
	{
		return ($this->BestOfferAutoAcceptEnabled = $_BestOfferAutoAcceptEnabled);
	}
	/**
	 * Get BestOfferAutoAcceptEnabled
	 * @return EbayTradingTypeBestOfferAutoAcceptEnabledDefinitionType
	 */
	public function getBestOfferAutoAcceptEnabled()
	{
		return $this->BestOfferAutoAcceptEnabled;
	}
	/**
	 * Set ClassifiedAdAutoAcceptEnabled
	 * @param ClassifiedAdAutoAcceptEnabledDefinitionType ClassifiedAdAutoAcceptEnabled
	 * @return ClassifiedAdAutoAcceptEnabledDefinitionType
	 */
	public function setClassifiedAdAutoAcceptEnabled($_ClassifiedAdAutoAcceptEnabled)
	{
		return ($this->ClassifiedAdAutoAcceptEnabled = $_ClassifiedAdAutoAcceptEnabled);
	}
	/**
	 * Get ClassifiedAdAutoAcceptEnabled
	 * @return EbayTradingTypeClassifiedAdAutoAcceptEnabledDefinitionType
	 */
	public function getClassifiedAdAutoAcceptEnabled()
	{
		return $this->ClassifiedAdAutoAcceptEnabled;
	}
	/**
	 * Set CrossBorderTradeNorthAmericaEnabled
	 * @param CrossBorderTradeNorthAmericaEnabledDefinitionType CrossBorderTradeNorthAmericaEnabled
	 * @return CrossBorderTradeNorthAmericaEnabledDefinitionType
	 */
	public function setCrossBorderTradeNorthAmericaEnabled($_CrossBorderTradeNorthAmericaEnabled)
	{
		return ($this->CrossBorderTradeNorthAmericaEnabled = $_CrossBorderTradeNorthAmericaEnabled);
	}
	/**
	 * Get CrossBorderTradeNorthAmericaEnabled
	 * @return EbayTradingTypeCrossBorderTradeNorthAmericaEnabledDefinitionType
	 */
	public function getCrossBorderTradeNorthAmericaEnabled()
	{
		return $this->CrossBorderTradeNorthAmericaEnabled;
	}
	/**
	 * Set CrossBorderTradeGBEnabled
	 * @param CrossBorderTradeGBEnabledDefinitionType CrossBorderTradeGBEnabled
	 * @return CrossBorderTradeGBEnabledDefinitionType
	 */
	public function setCrossBorderTradeGBEnabled($_CrossBorderTradeGBEnabled)
	{
		return ($this->CrossBorderTradeGBEnabled = $_CrossBorderTradeGBEnabled);
	}
	/**
	 * Get CrossBorderTradeGBEnabled
	 * @return EbayTradingTypeCrossBorderTradeGBEnabledDefinitionType
	 */
	public function getCrossBorderTradeGBEnabled()
	{
		return $this->CrossBorderTradeGBEnabled;
	}
	/**
	 * Set CrossBorderTradeAustraliaEnabled
	 * @param CrossBorderTradeAustraliaEnabledDefinitionType CrossBorderTradeAustraliaEnabled
	 * @return CrossBorderTradeAustraliaEnabledDefinitionType
	 */
	public function setCrossBorderTradeAustraliaEnabled($_CrossBorderTradeAustraliaEnabled)
	{
		return ($this->CrossBorderTradeAustraliaEnabled = $_CrossBorderTradeAustraliaEnabled);
	}
	/**
	 * Get CrossBorderTradeAustraliaEnabled
	 * @return EbayTradingTypeCrossBorderTradeAustraliaEnabledDefinitionType
	 */
	public function getCrossBorderTradeAustraliaEnabled()
	{
		return $this->CrossBorderTradeAustraliaEnabled;
	}
	/**
	 * Set PayPalBuyerProtectionEnabled
	 * @param PayPalBuyerProtectionEnabledDefinitionType PayPalBuyerProtectionEnabled
	 * @return PayPalBuyerProtectionEnabledDefinitionType
	 */
	public function setPayPalBuyerProtectionEnabled($_PayPalBuyerProtectionEnabled)
	{
		return ($this->PayPalBuyerProtectionEnabled = $_PayPalBuyerProtectionEnabled);
	}
	/**
	 * Get PayPalBuyerProtectionEnabled
	 * @return EbayTradingTypePayPalBuyerProtectionEnabledDefinitionType
	 */
	public function getPayPalBuyerProtectionEnabled()
	{
		return $this->PayPalBuyerProtectionEnabled;
	}
	/**
	 * Set BuyerGuaranteeEnabled
	 * @param BuyerGuaranteeEnabledDefinitionType BuyerGuaranteeEnabled
	 * @return BuyerGuaranteeEnabledDefinitionType
	 */
	public function setBuyerGuaranteeEnabled($_BuyerGuaranteeEnabled)
	{
		return ($this->BuyerGuaranteeEnabled = $_BuyerGuaranteeEnabled);
	}
	/**
	 * Get BuyerGuaranteeEnabled
	 * @return EbayTradingTypeBuyerGuaranteeEnabledDefinitionType
	 */
	public function getBuyerGuaranteeEnabled()
	{
		return $this->BuyerGuaranteeEnabled;
	}
	/**
	 * Set CombinedFixedPriceTreatmentEnabled
	 * @param CombinedFixedPriceTreatmentEnabledDefinitionType CombinedFixedPriceTreatmentEnabled
	 * @return CombinedFixedPriceTreatmentEnabledDefinitionType
	 */
	public function setCombinedFixedPriceTreatmentEnabled($_CombinedFixedPriceTreatmentEnabled)
	{
		return ($this->CombinedFixedPriceTreatmentEnabled = $_CombinedFixedPriceTreatmentEnabled);
	}
	/**
	 * Get CombinedFixedPriceTreatmentEnabled
	 * @return EbayTradingTypeCombinedFixedPriceTreatmentEnabledDefinitionType
	 */
	public function getCombinedFixedPriceTreatmentEnabled()
	{
		return $this->CombinedFixedPriceTreatmentEnabled;
	}
	/**
	 * Set GalleryFeaturedDurations
	 * @param ListingEnhancementDurationDefinitionType GalleryFeaturedDurations
	 * @return ListingEnhancementDurationDefinitionType
	 */
	public function setGalleryFeaturedDurations($_GalleryFeaturedDurations)
	{
		return ($this->GalleryFeaturedDurations = $_GalleryFeaturedDurations);
	}
	/**
	 * Get GalleryFeaturedDurations
	 * @return EbayTradingTypeListingEnhancementDurationDefinitionType
	 */
	public function getGalleryFeaturedDurations()
	{
		return $this->GalleryFeaturedDurations;
	}
	/**
	 * Set INEscrowWorkflowTimeline
	 * @param INEscrowWorkflowTimelineDefinitionType INEscrowWorkflowTimeline
	 * @return INEscrowWorkflowTimelineDefinitionType
	 */
	public function setINEscrowWorkflowTimeline($_INEscrowWorkflowTimeline)
	{
		return ($this->INEscrowWorkflowTimeline = $_INEscrowWorkflowTimeline);
	}
	/**
	 * Get INEscrowWorkflowTimeline
	 * @return EbayTradingTypeINEscrowWorkflowTimelineDefinitionType
	 */
	public function getINEscrowWorkflowTimeline()
	{
		return $this->INEscrowWorkflowTimeline;
	}
	/**
	 * Set PayPalRequired
	 * @param PayPalRequiredDefinitionType PayPalRequired
	 * @return PayPalRequiredDefinitionType
	 */
	public function setPayPalRequired($_PayPalRequired)
	{
		return ($this->PayPalRequired = $_PayPalRequired);
	}
	/**
	 * Get PayPalRequired
	 * @return EbayTradingTypePayPalRequiredDefinitionType
	 */
	public function getPayPalRequired()
	{
		return $this->PayPalRequired;
	}
	/**
	 * Set eBayMotorsProAdFormatEnabled
	 * @param eBayMotorsProAdFormatEnabledDefinitionType eBayMotorsProAdFormatEnabled
	 * @return eBayMotorsProAdFormatEnabledDefinitionType
	 */
	public function setEBayMotorsProAdFormatEnabled($_eBayMotorsProAdFormatEnabled)
	{
		return ($this->eBayMotorsProAdFormatEnabled = $_eBayMotorsProAdFormatEnabled);
	}
	/**
	 * Get eBayMotorsProAdFormatEnabled
	 * @return EbayTradingTypeeBayMotorsProAdFormatEnabledDefinitionType
	 */
	public function getEBayMotorsProAdFormatEnabled()
	{
		return $this->eBayMotorsProAdFormatEnabled;
	}
	/**
	 * Set eBayMotorsProContactByPhoneEnabled
	 * @param eBayMotorsProContactByPhoneEnabledDefinitionType eBayMotorsProContactByPhoneEnabled
	 * @return eBayMotorsProContactByPhoneEnabledDefinitionType
	 */
	public function setEBayMotorsProContactByPhoneEnabled($_eBayMotorsProContactByPhoneEnabled)
	{
		return ($this->eBayMotorsProContactByPhoneEnabled = $_eBayMotorsProContactByPhoneEnabled);
	}
	/**
	 * Get eBayMotorsProContactByPhoneEnabled
	 * @return EbayTradingTypeeBayMotorsProContactByPhoneEnabledDefinitionType
	 */
	public function getEBayMotorsProContactByPhoneEnabled()
	{
		return $this->eBayMotorsProContactByPhoneEnabled;
	}
	/**
	 * Set eBayMotorsProPhoneCount
	 * @param eBayMotorsProPhoneCountDefinitionType eBayMotorsProPhoneCount
	 * @return eBayMotorsProPhoneCountDefinitionType
	 */
	public function setEBayMotorsProPhoneCount($_eBayMotorsProPhoneCount)
	{
		return ($this->eBayMotorsProPhoneCount = $_eBayMotorsProPhoneCount);
	}
	/**
	 * Get eBayMotorsProPhoneCount
	 * @return EbayTradingTypeeBayMotorsProPhoneCountDefinitionType
	 */
	public function getEBayMotorsProPhoneCount()
	{
		return $this->eBayMotorsProPhoneCount;
	}
	/**
	 * Set eBayMotorsProContactByAddressEnabled
	 * @param eBayMotorsProContactByAddressEnabledDefinitionType eBayMotorsProContactByAddressEnabled
	 * @return eBayMotorsProContactByAddressEnabledDefinitionType
	 */
	public function setEBayMotorsProContactByAddressEnabled($_eBayMotorsProContactByAddressEnabled)
	{
		return ($this->eBayMotorsProContactByAddressEnabled = $_eBayMotorsProContactByAddressEnabled);
	}
	/**
	 * Get eBayMotorsProContactByAddressEnabled
	 * @return EbayTradingTypeeBayMotorsProContactByAddressEnabledDefinitionType
	 */
	public function getEBayMotorsProContactByAddressEnabled()
	{
		return $this->eBayMotorsProContactByAddressEnabled;
	}
	/**
	 * Set eBayMotorsProStreetCount
	 * @param eBayMotorsProStreetCountDefinitionType eBayMotorsProStreetCount
	 * @return eBayMotorsProStreetCountDefinitionType
	 */
	public function setEBayMotorsProStreetCount($_eBayMotorsProStreetCount)
	{
		return ($this->eBayMotorsProStreetCount = $_eBayMotorsProStreetCount);
	}
	/**
	 * Get eBayMotorsProStreetCount
	 * @return EbayTradingTypeeBayMotorsProStreetCountDefinitionType
	 */
	public function getEBayMotorsProStreetCount()
	{
		return $this->eBayMotorsProStreetCount;
	}
	/**
	 * Set eBayMotorsProCompanyNameEnabled
	 * @param eBayMotorsProCompanyNameEnabledDefinitionType eBayMotorsProCompanyNameEnabled
	 * @return eBayMotorsProCompanyNameEnabledDefinitionType
	 */
	public function setEBayMotorsProCompanyNameEnabled($_eBayMotorsProCompanyNameEnabled)
	{
		return ($this->eBayMotorsProCompanyNameEnabled = $_eBayMotorsProCompanyNameEnabled);
	}
	/**
	 * Get eBayMotorsProCompanyNameEnabled
	 * @return EbayTradingTypeeBayMotorsProCompanyNameEnabledDefinitionType
	 */
	public function getEBayMotorsProCompanyNameEnabled()
	{
		return $this->eBayMotorsProCompanyNameEnabled;
	}
	/**
	 * Set eBayMotorsProContactByEmailEnabled
	 * @param eBayMotorsProContactByEmailEnabledDefinitionType eBayMotorsProContactByEmailEnabled
	 * @return eBayMotorsProContactByEmailEnabledDefinitionType
	 */
	public function setEBayMotorsProContactByEmailEnabled($_eBayMotorsProContactByEmailEnabled)
	{
		return ($this->eBayMotorsProContactByEmailEnabled = $_eBayMotorsProContactByEmailEnabled);
	}
	/**
	 * Get eBayMotorsProContactByEmailEnabled
	 * @return EbayTradingTypeeBayMotorsProContactByEmailEnabledDefinitionType
	 */
	public function getEBayMotorsProContactByEmailEnabled()
	{
		return $this->eBayMotorsProContactByEmailEnabled;
	}
	/**
	 * Set eBayMotorsProBestOfferEnabled
	 * @param eBayMotorsProBestOfferEnabledDefinitionType eBayMotorsProBestOfferEnabled
	 * @return eBayMotorsProBestOfferEnabledDefinitionType
	 */
	public function setEBayMotorsProBestOfferEnabled($_eBayMotorsProBestOfferEnabled)
	{
		return ($this->eBayMotorsProBestOfferEnabled = $_eBayMotorsProBestOfferEnabled);
	}
	/**
	 * Get eBayMotorsProBestOfferEnabled
	 * @return EbayTradingTypeeBayMotorsProBestOfferEnabledDefinitionType
	 */
	public function getEBayMotorsProBestOfferEnabled()
	{
		return $this->eBayMotorsProBestOfferEnabled;
	}
	/**
	 * Set eBayMotorsProAutoAcceptEnabled
	 * @param eBayMotorsProAutoAcceptEnabledDefinitionType eBayMotorsProAutoAcceptEnabled
	 * @return eBayMotorsProAutoAcceptEnabledDefinitionType
	 */
	public function setEBayMotorsProAutoAcceptEnabled($_eBayMotorsProAutoAcceptEnabled)
	{
		return ($this->eBayMotorsProAutoAcceptEnabled = $_eBayMotorsProAutoAcceptEnabled);
	}
	/**
	 * Get eBayMotorsProAutoAcceptEnabled
	 * @return EbayTradingTypeeBayMotorsProAutoAcceptEnabledDefinitionType
	 */
	public function getEBayMotorsProAutoAcceptEnabled()
	{
		return $this->eBayMotorsProAutoAcceptEnabled;
	}
	/**
	 * Set eBayMotorsProAutoDeclineEnabled
	 * @param eBayMotorsProAutoDeclineEnabledDefinitionType eBayMotorsProAutoDeclineEnabled
	 * @return eBayMotorsProAutoDeclineEnabledDefinitionType
	 */
	public function setEBayMotorsProAutoDeclineEnabled($_eBayMotorsProAutoDeclineEnabled)
	{
		return ($this->eBayMotorsProAutoDeclineEnabled = $_eBayMotorsProAutoDeclineEnabled);
	}
	/**
	 * Get eBayMotorsProAutoDeclineEnabled
	 * @return EbayTradingTypeeBayMotorsProAutoDeclineEnabledDefinitionType
	 */
	public function getEBayMotorsProAutoDeclineEnabled()
	{
		return $this->eBayMotorsProAutoDeclineEnabled;
	}
	/**
	 * Set eBayMotorsProPaymentMethodCheckOutEnabled
	 * @param eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType eBayMotorsProPaymentMethodCheckOutEnabled
	 * @return eBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
	 */
	public function setEBayMotorsProPaymentMethodCheckOutEnabled($_eBayMotorsProPaymentMethodCheckOutEnabled)
	{
		return ($this->eBayMotorsProPaymentMethodCheckOutEnabled = $_eBayMotorsProPaymentMethodCheckOutEnabled);
	}
	/**
	 * Get eBayMotorsProPaymentMethodCheckOutEnabled
	 * @return EbayTradingTypeeBayMotorsProPaymentMethodCheckOutEnabledDefinitionType
	 */
	public function getEBayMotorsProPaymentMethodCheckOutEnabled()
	{
		return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
	}
	/**
	 * Set eBayMotorsProShippingMethodEnabled
	 * @param eBayMotorsProShippingMethodEnabledDefinitionType eBayMotorsProShippingMethodEnabled
	 * @return eBayMotorsProShippingMethodEnabledDefinitionType
	 */
	public function setEBayMotorsProShippingMethodEnabled($_eBayMotorsProShippingMethodEnabled)
	{
		return ($this->eBayMotorsProShippingMethodEnabled = $_eBayMotorsProShippingMethodEnabled);
	}
	/**
	 * Get eBayMotorsProShippingMethodEnabled
	 * @return EbayTradingTypeeBayMotorsProShippingMethodEnabledDefinitionType
	 */
	public function getEBayMotorsProShippingMethodEnabled()
	{
		return $this->eBayMotorsProShippingMethodEnabled;
	}
	/**
	 * Set eBayMotorsProCounterOfferEnabled
	 * @param eBayMotorsProCounterOfferEnabledDefinitionType eBayMotorsProCounterOfferEnabled
	 * @return eBayMotorsProCounterOfferEnabledDefinitionType
	 */
	public function setEBayMotorsProCounterOfferEnabled($_eBayMotorsProCounterOfferEnabled)
	{
		return ($this->eBayMotorsProCounterOfferEnabled = $_eBayMotorsProCounterOfferEnabled);
	}
	/**
	 * Get eBayMotorsProCounterOfferEnabled
	 * @return EbayTradingTypeeBayMotorsProCounterOfferEnabledDefinitionType
	 */
	public function getEBayMotorsProCounterOfferEnabled()
	{
		return $this->eBayMotorsProCounterOfferEnabled;
	}
	/**
	 * Set eBayMotorsProSellerContactDetailsEnabled
	 * @param eBayMotorsProSellerContactDetailsEnabledDefinitionType eBayMotorsProSellerContactDetailsEnabled
	 * @return eBayMotorsProSellerContactDetailsEnabledDefinitionType
	 */
	public function setEBayMotorsProSellerContactDetailsEnabled($_eBayMotorsProSellerContactDetailsEnabled)
	{
		return ($this->eBayMotorsProSellerContactDetailsEnabled = $_eBayMotorsProSellerContactDetailsEnabled);
	}
	/**
	 * Get eBayMotorsProSellerContactDetailsEnabled
	 * @return EbayTradingTypeeBayMotorsProSellerContactDetailsEnabledDefinitionType
	 */
	public function getEBayMotorsProSellerContactDetailsEnabled()
	{
		return $this->eBayMotorsProSellerContactDetailsEnabled;
	}
	/**
	 * Set LocalMarketAdFormatEnabled
	 * @param LocalMarketAdFormatEnabledDefinitionType LocalMarketAdFormatEnabled
	 * @return LocalMarketAdFormatEnabledDefinitionType
	 */
	public function setLocalMarketAdFormatEnabled($_LocalMarketAdFormatEnabled)
	{
		return ($this->LocalMarketAdFormatEnabled = $_LocalMarketAdFormatEnabled);
	}
	/**
	 * Get LocalMarketAdFormatEnabled
	 * @return EbayTradingTypeLocalMarketAdFormatEnabledDefinitionType
	 */
	public function getLocalMarketAdFormatEnabled()
	{
		return $this->LocalMarketAdFormatEnabled;
	}
	/**
	 * Set LocalMarketContactByPhoneEnabled
	 * @param LocalMarketContactByPhoneEnabledDefinitionType LocalMarketContactByPhoneEnabled
	 * @return LocalMarketContactByPhoneEnabledDefinitionType
	 */
	public function setLocalMarketContactByPhoneEnabled($_LocalMarketContactByPhoneEnabled)
	{
		return ($this->LocalMarketContactByPhoneEnabled = $_LocalMarketContactByPhoneEnabled);
	}
	/**
	 * Get LocalMarketContactByPhoneEnabled
	 * @return EbayTradingTypeLocalMarketContactByPhoneEnabledDefinitionType
	 */
	public function getLocalMarketContactByPhoneEnabled()
	{
		return $this->LocalMarketContactByPhoneEnabled;
	}
	/**
	 * Set LocalMarketPhoneCount
	 * @param LocalMarketPhoneCountDefinitionType LocalMarketPhoneCount
	 * @return LocalMarketPhoneCountDefinitionType
	 */
	public function setLocalMarketPhoneCount($_LocalMarketPhoneCount)
	{
		return ($this->LocalMarketPhoneCount = $_LocalMarketPhoneCount);
	}
	/**
	 * Get LocalMarketPhoneCount
	 * @return EbayTradingTypeLocalMarketPhoneCountDefinitionType
	 */
	public function getLocalMarketPhoneCount()
	{
		return $this->LocalMarketPhoneCount;
	}
	/**
	 * Set LocalMarketContactByAddressEnabled
	 * @param LocalMarketContactByAddressEnabledDefinitionType LocalMarketContactByAddressEnabled
	 * @return LocalMarketContactByAddressEnabledDefinitionType
	 */
	public function setLocalMarketContactByAddressEnabled($_LocalMarketContactByAddressEnabled)
	{
		return ($this->LocalMarketContactByAddressEnabled = $_LocalMarketContactByAddressEnabled);
	}
	/**
	 * Get LocalMarketContactByAddressEnabled
	 * @return EbayTradingTypeLocalMarketContactByAddressEnabledDefinitionType
	 */
	public function getLocalMarketContactByAddressEnabled()
	{
		return $this->LocalMarketContactByAddressEnabled;
	}
	/**
	 * Set LocalMarketStreetCount
	 * @param LocalMarketStreetCountDefinitionType LocalMarketStreetCount
	 * @return LocalMarketStreetCountDefinitionType
	 */
	public function setLocalMarketStreetCount($_LocalMarketStreetCount)
	{
		return ($this->LocalMarketStreetCount = $_LocalMarketStreetCount);
	}
	/**
	 * Get LocalMarketStreetCount
	 * @return EbayTradingTypeLocalMarketStreetCountDefinitionType
	 */
	public function getLocalMarketStreetCount()
	{
		return $this->LocalMarketStreetCount;
	}
	/**
	 * Set LocalMarketCompanyNameEnabled
	 * @param LocalMarketCompanyNameEnabledDefinitionType LocalMarketCompanyNameEnabled
	 * @return LocalMarketCompanyNameEnabledDefinitionType
	 */
	public function setLocalMarketCompanyNameEnabled($_LocalMarketCompanyNameEnabled)
	{
		return ($this->LocalMarketCompanyNameEnabled = $_LocalMarketCompanyNameEnabled);
	}
	/**
	 * Get LocalMarketCompanyNameEnabled
	 * @return EbayTradingTypeLocalMarketCompanyNameEnabledDefinitionType
	 */
	public function getLocalMarketCompanyNameEnabled()
	{
		return $this->LocalMarketCompanyNameEnabled;
	}
	/**
	 * Set LocalMarketContactByEmailEnabled
	 * @param LocalMarketContactByEmailEnabledDefinitionType LocalMarketContactByEmailEnabled
	 * @return LocalMarketContactByEmailEnabledDefinitionType
	 */
	public function setLocalMarketContactByEmailEnabled($_LocalMarketContactByEmailEnabled)
	{
		return ($this->LocalMarketContactByEmailEnabled = $_LocalMarketContactByEmailEnabled);
	}
	/**
	 * Get LocalMarketContactByEmailEnabled
	 * @return EbayTradingTypeLocalMarketContactByEmailEnabledDefinitionType
	 */
	public function getLocalMarketContactByEmailEnabled()
	{
		return $this->LocalMarketContactByEmailEnabled;
	}
	/**
	 * Set LocalMarketBestOfferEnabled
	 * @param LocalMarketBestOfferEnabledDefinitionType LocalMarketBestOfferEnabled
	 * @return LocalMarketBestOfferEnabledDefinitionType
	 */
	public function setLocalMarketBestOfferEnabled($_LocalMarketBestOfferEnabled)
	{
		return ($this->LocalMarketBestOfferEnabled = $_LocalMarketBestOfferEnabled);
	}
	/**
	 * Get LocalMarketBestOfferEnabled
	 * @return EbayTradingTypeLocalMarketBestOfferEnabledDefinitionType
	 */
	public function getLocalMarketBestOfferEnabled()
	{
		return $this->LocalMarketBestOfferEnabled;
	}
	/**
	 * Set LocalMarketAutoAcceptEnabled
	 * @param LocalMarketAutoAcceptEnabledDefinitionType LocalMarketAutoAcceptEnabled
	 * @return LocalMarketAutoAcceptEnabledDefinitionType
	 */
	public function setLocalMarketAutoAcceptEnabled($_LocalMarketAutoAcceptEnabled)
	{
		return ($this->LocalMarketAutoAcceptEnabled = $_LocalMarketAutoAcceptEnabled);
	}
	/**
	 * Get LocalMarketAutoAcceptEnabled
	 * @return EbayTradingTypeLocalMarketAutoAcceptEnabledDefinitionType
	 */
	public function getLocalMarketAutoAcceptEnabled()
	{
		return $this->LocalMarketAutoAcceptEnabled;
	}
	/**
	 * Set LocalMarketAutoDeclineEnabled
	 * @param LocalMarketAutoDeclineEnabledDefinitionType LocalMarketAutoDeclineEnabled
	 * @return LocalMarketAutoDeclineEnabledDefinitionType
	 */
	public function setLocalMarketAutoDeclineEnabled($_LocalMarketAutoDeclineEnabled)
	{
		return ($this->LocalMarketAutoDeclineEnabled = $_LocalMarketAutoDeclineEnabled);
	}
	/**
	 * Get LocalMarketAutoDeclineEnabled
	 * @return EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType
	 */
	public function getLocalMarketAutoDeclineEnabled()
	{
		return $this->LocalMarketAutoDeclineEnabled;
	}
	/**
	 * Set LocalMarketPaymentMethodCheckOutEnabled
	 * @param LocalMarketPaymentMethodCheckOutEnabledDefinitionType LocalMarketPaymentMethodCheckOutEnabled
	 * @return LocalMarketPaymentMethodCheckOutEnabledDefinitionType
	 */
	public function setLocalMarketPaymentMethodCheckOutEnabled($_LocalMarketPaymentMethodCheckOutEnabled)
	{
		return ($this->LocalMarketPaymentMethodCheckOutEnabled = $_LocalMarketPaymentMethodCheckOutEnabled);
	}
	/**
	 * Get LocalMarketPaymentMethodCheckOutEnabled
	 * @return EbayTradingTypeLocalMarketPaymentMethodCheckOutEnabledDefinitionType
	 */
	public function getLocalMarketPaymentMethodCheckOutEnabled()
	{
		return $this->LocalMarketPaymentMethodCheckOutEnabled;
	}
	/**
	 * Set LocalMarketShippingMethodEnabled
	 * @param LocalMarketShippingMethodEnabledDefinitionType LocalMarketShippingMethodEnabled
	 * @return LocalMarketShippingMethodEnabledDefinitionType
	 */
	public function setLocalMarketShippingMethodEnabled($_LocalMarketShippingMethodEnabled)
	{
		return ($this->LocalMarketShippingMethodEnabled = $_LocalMarketShippingMethodEnabled);
	}
	/**
	 * Get LocalMarketShippingMethodEnabled
	 * @return EbayTradingTypeLocalMarketShippingMethodEnabledDefinitionType
	 */
	public function getLocalMarketShippingMethodEnabled()
	{
		return $this->LocalMarketShippingMethodEnabled;
	}
	/**
	 * Set LocalMarketCounterOfferEnabled
	 * @param LocalMarketCounterOfferEnabledDefinitionType LocalMarketCounterOfferEnabled
	 * @return LocalMarketCounterOfferEnabledDefinitionType
	 */
	public function setLocalMarketCounterOfferEnabled($_LocalMarketCounterOfferEnabled)
	{
		return ($this->LocalMarketCounterOfferEnabled = $_LocalMarketCounterOfferEnabled);
	}
	/**
	 * Get LocalMarketCounterOfferEnabled
	 * @return EbayTradingTypeLocalMarketCounterOfferEnabledDefinitionType
	 */
	public function getLocalMarketCounterOfferEnabled()
	{
		return $this->LocalMarketCounterOfferEnabled;
	}
	/**
	 * Set LocalMarketSellerContactDetailsEnabled
	 * @param LocalMarketSellerContactDetailsEnabledDefinitionType LocalMarketSellerContactDetailsEnabled
	 * @return LocalMarketSellerContactDetailsEnabledDefinitionType
	 */
	public function setLocalMarketSellerContactDetailsEnabled($_LocalMarketSellerContactDetailsEnabled)
	{
		return ($this->LocalMarketSellerContactDetailsEnabled = $_LocalMarketSellerContactDetailsEnabled);
	}
	/**
	 * Get LocalMarketSellerContactDetailsEnabled
	 * @return EbayTradingTypeLocalMarketSellerContactDetailsEnabledDefinitionType
	 */
	public function getLocalMarketSellerContactDetailsEnabled()
	{
		return $this->LocalMarketSellerContactDetailsEnabled;
	}
	/**
	 * Set ClassifiedAdPhoneCount
	 * @param ClassifiedAdPhoneCountDefinitionType ClassifiedAdPhoneCount
	 * @return ClassifiedAdPhoneCountDefinitionType
	 */
	public function setClassifiedAdPhoneCount($_ClassifiedAdPhoneCount)
	{
		return ($this->ClassifiedAdPhoneCount = $_ClassifiedAdPhoneCount);
	}
	/**
	 * Get ClassifiedAdPhoneCount
	 * @return EbayTradingTypeClassifiedAdPhoneCountDefinitionType
	 */
	public function getClassifiedAdPhoneCount()
	{
		return $this->ClassifiedAdPhoneCount;
	}
	/**
	 * Set ClassifiedAdContactByAddressEnabled
	 * @param ClassifiedAdContactByAddressEnabledDefinitionType ClassifiedAdContactByAddressEnabled
	 * @return ClassifiedAdContactByAddressEnabledDefinitionType
	 */
	public function setClassifiedAdContactByAddressEnabled($_ClassifiedAdContactByAddressEnabled)
	{
		return ($this->ClassifiedAdContactByAddressEnabled = $_ClassifiedAdContactByAddressEnabled);
	}
	/**
	 * Get ClassifiedAdContactByAddressEnabled
	 * @return EbayTradingTypeClassifiedAdContactByAddressEnabledDefinitionType
	 */
	public function getClassifiedAdContactByAddressEnabled()
	{
		return $this->ClassifiedAdContactByAddressEnabled;
	}
	/**
	 * Set ClassifiedAdStreetCount
	 * @param ClassifiedAdStreetCountDefinitionType ClassifiedAdStreetCount
	 * @return ClassifiedAdStreetCountDefinitionType
	 */
	public function setClassifiedAdStreetCount($_ClassifiedAdStreetCount)
	{
		return ($this->ClassifiedAdStreetCount = $_ClassifiedAdStreetCount);
	}
	/**
	 * Get ClassifiedAdStreetCount
	 * @return EbayTradingTypeClassifiedAdStreetCountDefinitionType
	 */
	public function getClassifiedAdStreetCount()
	{
		return $this->ClassifiedAdStreetCount;
	}
	/**
	 * Set ClassifiedAdCompanyNameEnabled
	 * @param ClassifiedAdCompanyNameEnabledDefinitionType ClassifiedAdCompanyNameEnabled
	 * @return ClassifiedAdCompanyNameEnabledDefinitionType
	 */
	public function setClassifiedAdCompanyNameEnabled($_ClassifiedAdCompanyNameEnabled)
	{
		return ($this->ClassifiedAdCompanyNameEnabled = $_ClassifiedAdCompanyNameEnabled);
	}
	/**
	 * Get ClassifiedAdCompanyNameEnabled
	 * @return EbayTradingTypeClassifiedAdCompanyNameEnabledDefinitionType
	 */
	public function getClassifiedAdCompanyNameEnabled()
	{
		return $this->ClassifiedAdCompanyNameEnabled;
	}
	/**
	 * Set SpecialitySubscription
	 * @param SpecialitySubscriptionDefinitionType SpecialitySubscription
	 * @return SpecialitySubscriptionDefinitionType
	 */
	public function setSpecialitySubscription($_SpecialitySubscription)
	{
		return ($this->SpecialitySubscription = $_SpecialitySubscription);
	}
	/**
	 * Get SpecialitySubscription
	 * @return EbayTradingTypeSpecialitySubscriptionDefinitionType
	 */
	public function getSpecialitySubscription()
	{
		return $this->SpecialitySubscription;
	}
	/**
	 * Set RegularSubscription
	 * @param RegularSubscriptionDefinitionType RegularSubscription
	 * @return RegularSubscriptionDefinitionType
	 */
	public function setRegularSubscription($_RegularSubscription)
	{
		return ($this->RegularSubscription = $_RegularSubscription);
	}
	/**
	 * Get RegularSubscription
	 * @return EbayTradingTypeRegularSubscriptionDefinitionType
	 */
	public function getRegularSubscription()
	{
		return $this->RegularSubscription;
	}
	/**
	 * Set PremiumSubscription
	 * @param PremiumSubscriptionDefinitionType PremiumSubscription
	 * @return PremiumSubscriptionDefinitionType
	 */
	public function setPremiumSubscription($_PremiumSubscription)
	{
		return ($this->PremiumSubscription = $_PremiumSubscription);
	}
	/**
	 * Get PremiumSubscription
	 * @return EbayTradingTypePremiumSubscriptionDefinitionType
	 */
	public function getPremiumSubscription()
	{
		return $this->PremiumSubscription;
	}
	/**
	 * Set NonSubscription
	 * @param NonSubscriptionDefinitionType NonSubscription
	 * @return NonSubscriptionDefinitionType
	 */
	public function setNonSubscription($_NonSubscription)
	{
		return ($this->NonSubscription = $_NonSubscription);
	}
	/**
	 * Get NonSubscription
	 * @return EbayTradingTypeNonSubscriptionDefinitionType
	 */
	public function getNonSubscription()
	{
		return $this->NonSubscription;
	}
	/**
	 * Set ReturnPolicyEnabled
	 * @param ReturnPolicyEnabledDefinitionType ReturnPolicyEnabled
	 * @return ReturnPolicyEnabledDefinitionType
	 */
	public function setReturnPolicyEnabled($_ReturnPolicyEnabled)
	{
		return ($this->ReturnPolicyEnabled = $_ReturnPolicyEnabled);
	}
	/**
	 * Get ReturnPolicyEnabled
	 * @return EbayTradingTypeReturnPolicyEnabledDefinitionType
	 */
	public function getReturnPolicyEnabled()
	{
		return $this->ReturnPolicyEnabled;
	}
	/**
	 * Set HandlingTimeEnabled
	 * @param HandlingTimeEnabledDefinitionType HandlingTimeEnabled
	 * @return HandlingTimeEnabledDefinitionType
	 */
	public function setHandlingTimeEnabled($_HandlingTimeEnabled)
	{
		return ($this->HandlingTimeEnabled = $_HandlingTimeEnabled);
	}
	/**
	 * Get HandlingTimeEnabled
	 * @return EbayTradingTypeHandlingTimeEnabledDefinitionType
	 */
	public function getHandlingTimeEnabled()
	{
		return $this->HandlingTimeEnabled;
	}
	/**
	 * Set PayPalRequiredForStoreOwner
	 * @param PayPalRequiredForStoreOwnerDefinitionType PayPalRequiredForStoreOwner
	 * @return PayPalRequiredForStoreOwnerDefinitionType
	 */
	public function setPayPalRequiredForStoreOwner($_PayPalRequiredForStoreOwner)
	{
		return ($this->PayPalRequiredForStoreOwner = $_PayPalRequiredForStoreOwner);
	}
	/**
	 * Get PayPalRequiredForStoreOwner
	 * @return EbayTradingTypePayPalRequiredForStoreOwnerDefinitionType
	 */
	public function getPayPalRequiredForStoreOwner()
	{
		return $this->PayPalRequiredForStoreOwner;
	}
	/**
	 * Set ReviseQuantityAllowed
	 * @param ReviseQuantityAllowedDefinitionType ReviseQuantityAllowed
	 * @return ReviseQuantityAllowedDefinitionType
	 */
	public function setReviseQuantityAllowed($_ReviseQuantityAllowed)
	{
		return ($this->ReviseQuantityAllowed = $_ReviseQuantityAllowed);
	}
	/**
	 * Get ReviseQuantityAllowed
	 * @return EbayTradingTypeReviseQuantityAllowedDefinitionType
	 */
	public function getReviseQuantityAllowed()
	{
		return $this->ReviseQuantityAllowed;
	}
	/**
	 * Set RevisePriceAllowed
	 * @param RevisePriceAllowedDefinitionType RevisePriceAllowed
	 * @return RevisePriceAllowedDefinitionType
	 */
	public function setRevisePriceAllowed($_RevisePriceAllowed)
	{
		return ($this->RevisePriceAllowed = $_RevisePriceAllowed);
	}
	/**
	 * Get RevisePriceAllowed
	 * @return EbayTradingTypeRevisePriceAllowedDefinitionType
	 */
	public function getRevisePriceAllowed()
	{
		return $this->RevisePriceAllowed;
	}
	/**
	 * Set StoreOwnerExtendedListingDurationsEnabled
	 * @param StoreOwnerExtendedListingDurationsEnabledDefinitionType StoreOwnerExtendedListingDurationsEnabled
	 * @return StoreOwnerExtendedListingDurationsEnabledDefinitionType
	 */
	public function setStoreOwnerExtendedListingDurationsEnabled($_StoreOwnerExtendedListingDurationsEnabled)
	{
		return ($this->StoreOwnerExtendedListingDurationsEnabled = $_StoreOwnerExtendedListingDurationsEnabled);
	}
	/**
	 * Get StoreOwnerExtendedListingDurationsEnabled
	 * @return EbayTradingTypeStoreOwnerExtendedListingDurationsEnabledDefinitionType
	 */
	public function getStoreOwnerExtendedListingDurationsEnabled()
	{
		return $this->StoreOwnerExtendedListingDurationsEnabled;
	}
	/**
	 * Set StoreOwnerExtendedListingDurations
	 * @param StoreOwnerExtendedListingDurationsDefinitionType StoreOwnerExtendedListingDurations
	 * @return StoreOwnerExtendedListingDurationsDefinitionType
	 */
	public function setStoreOwnerExtendedListingDurations($_StoreOwnerExtendedListingDurations)
	{
		return ($this->StoreOwnerExtendedListingDurations = $_StoreOwnerExtendedListingDurations);
	}
	/**
	 * Get StoreOwnerExtendedListingDurations
	 * @return EbayTradingTypeStoreOwnerExtendedListingDurationsDefinitionType
	 */
	public function getStoreOwnerExtendedListingDurations()
	{
		return $this->StoreOwnerExtendedListingDurations;
	}
	/**
	 * Set PaymentMethod
	 * @param PaymentMethodDefinitionType PaymentMethod
	 * @return PaymentMethodDefinitionType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = $_PaymentMethod);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypePaymentMethodDefinitionType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set Group1MaxFlatShippingCost
	 * @param Group1MaxFlatShippingCostDefinitionType Group1MaxFlatShippingCost
	 * @return Group1MaxFlatShippingCostDefinitionType
	 */
	public function setGroup1MaxFlatShippingCost($_Group1MaxFlatShippingCost)
	{
		return ($this->Group1MaxFlatShippingCost = $_Group1MaxFlatShippingCost);
	}
	/**
	 * Get Group1MaxFlatShippingCost
	 * @return EbayTradingTypeGroup1MaxFlatShippingCostDefinitionType
	 */
	public function getGroup1MaxFlatShippingCost()
	{
		return $this->Group1MaxFlatShippingCost;
	}
	/**
	 * Set Group2MaxFlatShippingCost
	 * @param Group2MaxFlatShippingCostDefinitionType Group2MaxFlatShippingCost
	 * @return Group2MaxFlatShippingCostDefinitionType
	 */
	public function setGroup2MaxFlatShippingCost($_Group2MaxFlatShippingCost)
	{
		return ($this->Group2MaxFlatShippingCost = $_Group2MaxFlatShippingCost);
	}
	/**
	 * Get Group2MaxFlatShippingCost
	 * @return EbayTradingTypeGroup2MaxFlatShippingCostDefinitionType
	 */
	public function getGroup2MaxFlatShippingCost()
	{
		return $this->Group2MaxFlatShippingCost;
	}
	/**
	 * Set Group3MaxFlatShippingCost
	 * @param Group3MaxFlatShippingCostDefinitionType Group3MaxFlatShippingCost
	 * @return Group3MaxFlatShippingCostDefinitionType
	 */
	public function setGroup3MaxFlatShippingCost($_Group3MaxFlatShippingCost)
	{
		return ($this->Group3MaxFlatShippingCost = $_Group3MaxFlatShippingCost);
	}
	/**
	 * Get Group3MaxFlatShippingCost
	 * @return EbayTradingTypeGroup3MaxFlatShippingCostDefinitionType
	 */
	public function getGroup3MaxFlatShippingCost()
	{
		return $this->Group3MaxFlatShippingCost;
	}
	/**
	 * Set MaxFlatShippingCostCBTExempt
	 * @param MaxFlatShippingCostCBTExemptDefinitionType MaxFlatShippingCostCBTExempt
	 * @return MaxFlatShippingCostCBTExemptDefinitionType
	 */
	public function setMaxFlatShippingCostCBTExempt($_MaxFlatShippingCostCBTExempt)
	{
		return ($this->MaxFlatShippingCostCBTExempt = $_MaxFlatShippingCostCBTExempt);
	}
	/**
	 * Get MaxFlatShippingCostCBTExempt
	 * @return EbayTradingTypeMaxFlatShippingCostCBTExemptDefinitionType
	 */
	public function getMaxFlatShippingCostCBTExempt()
	{
		return $this->MaxFlatShippingCostCBTExempt;
	}
	/**
	 * Set MaxFlatShippingCost
	 * @param MaxFlatShippingCostDefinitionType MaxFlatShippingCost
	 * @return MaxFlatShippingCostDefinitionType
	 */
	public function setMaxFlatShippingCost($_MaxFlatShippingCost)
	{
		return ($this->MaxFlatShippingCost = $_MaxFlatShippingCost);
	}
	/**
	 * Get MaxFlatShippingCost
	 * @return EbayTradingTypeMaxFlatShippingCostDefinitionType
	 */
	public function getMaxFlatShippingCost()
	{
		return $this->MaxFlatShippingCost;
	}
	/**
	 * Set VariationsEnabled
	 * @param VariationsEnabledDefinitionType VariationsEnabled
	 * @return VariationsEnabledDefinitionType
	 */
	public function setVariationsEnabled($_VariationsEnabled)
	{
		return ($this->VariationsEnabled = $_VariationsEnabled);
	}
	/**
	 * Get VariationsEnabled
	 * @return EbayTradingTypeVariationsEnabledDefinitionType
	 */
	public function getVariationsEnabled()
	{
		return $this->VariationsEnabled;
	}
	/**
	 * Set AttributeConversionEnabled
	 * @param AttributeConversionEnabledFeatureDefinitionType AttributeConversionEnabled
	 * @return AttributeConversionEnabledFeatureDefinitionType
	 */
	public function setAttributeConversionEnabled($_AttributeConversionEnabled)
	{
		return ($this->AttributeConversionEnabled = $_AttributeConversionEnabled);
	}
	/**
	 * Get AttributeConversionEnabled
	 * @return EbayTradingTypeAttributeConversionEnabledFeatureDefinitionType
	 */
	public function getAttributeConversionEnabled()
	{
		return $this->AttributeConversionEnabled;
	}
	/**
	 * Set FreeGalleryPlusEnabled
	 * @param FreeGalleryPlusEnabledDefinitionType FreeGalleryPlusEnabled
	 * @return FreeGalleryPlusEnabledDefinitionType
	 */
	public function setFreeGalleryPlusEnabled($_FreeGalleryPlusEnabled)
	{
		return ($this->FreeGalleryPlusEnabled = $_FreeGalleryPlusEnabled);
	}
	/**
	 * Get FreeGalleryPlusEnabled
	 * @return EbayTradingTypeFreeGalleryPlusEnabledDefinitionType
	 */
	public function getFreeGalleryPlusEnabled()
	{
		return $this->FreeGalleryPlusEnabled;
	}
	/**
	 * Set FreePicturePackEnabled
	 * @param FreePicturePackEnabledDefinitionType FreePicturePackEnabled
	 * @return FreePicturePackEnabledDefinitionType
	 */
	public function setFreePicturePackEnabled($_FreePicturePackEnabled)
	{
		return ($this->FreePicturePackEnabled = $_FreePicturePackEnabled);
	}
	/**
	 * Get FreePicturePackEnabled
	 * @return EbayTradingTypeFreePicturePackEnabledDefinitionType
	 */
	public function getFreePicturePackEnabled()
	{
		return $this->FreePicturePackEnabled;
	}
	/**
	 * Set ItemCompatibilityEnabled
	 * @param ItemCompatibilityEnabledDefinitionType ItemCompatibilityEnabled
	 * @return ItemCompatibilityEnabledDefinitionType
	 */
	public function setItemCompatibilityEnabled($_ItemCompatibilityEnabled)
	{
		return ($this->ItemCompatibilityEnabled = $_ItemCompatibilityEnabled);
	}
	/**
	 * Get ItemCompatibilityEnabled
	 * @return EbayTradingTypeItemCompatibilityEnabledDefinitionType
	 */
	public function getItemCompatibilityEnabled()
	{
		return $this->ItemCompatibilityEnabled;
	}
	/**
	 * Set MaxItemCompatibility
	 * @param MaxItemCompatibilityDefinitionType MaxItemCompatibility
	 * @return MaxItemCompatibilityDefinitionType
	 */
	public function setMaxItemCompatibility($_MaxItemCompatibility)
	{
		return ($this->MaxItemCompatibility = $_MaxItemCompatibility);
	}
	/**
	 * Get MaxItemCompatibility
	 * @return EbayTradingTypeMaxItemCompatibilityDefinitionType
	 */
	public function getMaxItemCompatibility()
	{
		return $this->MaxItemCompatibility;
	}
	/**
	 * Set MinItemCompatibility
	 * @param MinItemCompatibilityDefinitionType MinItemCompatibility
	 * @return MinItemCompatibilityDefinitionType
	 */
	public function setMinItemCompatibility($_MinItemCompatibility)
	{
		return ($this->MinItemCompatibility = $_MinItemCompatibility);
	}
	/**
	 * Get MinItemCompatibility
	 * @return EbayTradingTypeMinItemCompatibilityDefinitionType
	 */
	public function getMinItemCompatibility()
	{
		return $this->MinItemCompatibility;
	}
	/**
	 * Set ConditionEnabled
	 * @param ConditionEnabledDefinitionType ConditionEnabled
	 * @return ConditionEnabledDefinitionType
	 */
	public function setConditionEnabled($_ConditionEnabled)
	{
		return ($this->ConditionEnabled = $_ConditionEnabled);
	}
	/**
	 * Get ConditionEnabled
	 * @return EbayTradingTypeConditionEnabledDefinitionType
	 */
	public function getConditionEnabled()
	{
		return $this->ConditionEnabled;
	}
	/**
	 * Set ConditionValues
	 * @param ConditionValuesDefinitionType ConditionValues
	 * @return ConditionValuesDefinitionType
	 */
	public function setConditionValues($_ConditionValues)
	{
		return ($this->ConditionValues = $_ConditionValues);
	}
	/**
	 * Get ConditionValues
	 * @return EbayTradingTypeConditionValuesDefinitionType
	 */
	public function getConditionValues()
	{
		return $this->ConditionValues;
	}
	/**
	 * Set ValueCategory
	 * @param ValueCategoryDefinitionType ValueCategory
	 * @return ValueCategoryDefinitionType
	 */
	public function setValueCategory($_ValueCategory)
	{
		return ($this->ValueCategory = $_ValueCategory);
	}
	/**
	 * Get ValueCategory
	 * @return EbayTradingTypeValueCategoryDefinitionType
	 */
	public function getValueCategory()
	{
		return $this->ValueCategory;
	}
	/**
	 * Set ProductCreationEnabled
	 * @param ProductCreationEnabledDefinitionType ProductCreationEnabled
	 * @return ProductCreationEnabledDefinitionType
	 */
	public function setProductCreationEnabled($_ProductCreationEnabled)
	{
		return ($this->ProductCreationEnabled = $_ProductCreationEnabled);
	}
	/**
	 * Get ProductCreationEnabled
	 * @return EbayTradingTypeProductCreationEnabledDefinitionType
	 */
	public function getProductCreationEnabled()
	{
		return $this->ProductCreationEnabled;
	}
	/**
	 * Set CompatibleVehicleType
	 * @param CompatibleVehicleTypeDefinitionType CompatibleVehicleType
	 * @return CompatibleVehicleTypeDefinitionType
	 */
	public function setCompatibleVehicleType($_CompatibleVehicleType)
	{
		return ($this->CompatibleVehicleType = $_CompatibleVehicleType);
	}
	/**
	 * Get CompatibleVehicleType
	 * @return EbayTradingTypeCompatibleVehicleTypeDefinitionType
	 */
	public function getCompatibleVehicleType()
	{
		return $this->CompatibleVehicleType;
	}
	/**
	 * Set MaxGranularFitmentCount
	 * @param MaxGranularFitmentCountDefinitionType MaxGranularFitmentCount
	 * @return MaxGranularFitmentCountDefinitionType
	 */
	public function setMaxGranularFitmentCount($_MaxGranularFitmentCount)
	{
		return ($this->MaxGranularFitmentCount = $_MaxGranularFitmentCount);
	}
	/**
	 * Get MaxGranularFitmentCount
	 * @return EbayTradingTypeMaxGranularFitmentCountDefinitionType
	 */
	public function getMaxGranularFitmentCount()
	{
		return $this->MaxGranularFitmentCount;
	}
	/**
	 * Set PaymentOptionsGroup
	 * @param PaymentOptionsGroupEnabledDefinitionType PaymentOptionsGroup
	 * @return PaymentOptionsGroupEnabledDefinitionType
	 */
	public function setPaymentOptionsGroup($_PaymentOptionsGroup)
	{
		return ($this->PaymentOptionsGroup = $_PaymentOptionsGroup);
	}
	/**
	 * Get PaymentOptionsGroup
	 * @return EbayTradingTypePaymentOptionsGroupEnabledDefinitionType
	 */
	public function getPaymentOptionsGroup()
	{
		return $this->PaymentOptionsGroup;
	}
	/**
	 * Set ShippingProfileCategoryGroup
	 * @param ProfileCategoryGroupDefinitionType ShippingProfileCategoryGroup
	 * @return ProfileCategoryGroupDefinitionType
	 */
	public function setShippingProfileCategoryGroup($_ShippingProfileCategoryGroup)
	{
		return ($this->ShippingProfileCategoryGroup = $_ShippingProfileCategoryGroup);
	}
	/**
	 * Get ShippingProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public function getShippingProfileCategoryGroup()
	{
		return $this->ShippingProfileCategoryGroup;
	}
	/**
	 * Set PaymentProfileCategoryGroup
	 * @param ProfileCategoryGroupDefinitionType PaymentProfileCategoryGroup
	 * @return ProfileCategoryGroupDefinitionType
	 */
	public function setPaymentProfileCategoryGroup($_PaymentProfileCategoryGroup)
	{
		return ($this->PaymentProfileCategoryGroup = $_PaymentProfileCategoryGroup);
	}
	/**
	 * Get PaymentProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public function getPaymentProfileCategoryGroup()
	{
		return $this->PaymentProfileCategoryGroup;
	}
	/**
	 * Set ReturnPolicyProfileCategoryGroup
	 * @param ProfileCategoryGroupDefinitionType ReturnPolicyProfileCategoryGroup
	 * @return ProfileCategoryGroupDefinitionType
	 */
	public function setReturnPolicyProfileCategoryGroup($_ReturnPolicyProfileCategoryGroup)
	{
		return ($this->ReturnPolicyProfileCategoryGroup = $_ReturnPolicyProfileCategoryGroup);
	}
	/**
	 * Get ReturnPolicyProfileCategoryGroup
	 * @return EbayTradingTypeProfileCategoryGroupDefinitionType
	 */
	public function getReturnPolicyProfileCategoryGroup()
	{
		return $this->ReturnPolicyProfileCategoryGroup;
	}
	/**
	 * Set VINSupported
	 * @param VINSupportedDefinitionType VINSupported
	 * @return VINSupportedDefinitionType
	 */
	public function setVINSupported($_VINSupported)
	{
		return ($this->VINSupported = $_VINSupported);
	}
	/**
	 * Get VINSupported
	 * @return EbayTradingTypeVINSupportedDefinitionType
	 */
	public function getVINSupported()
	{
		return $this->VINSupported;
	}
	/**
	 * Set VRMSupported
	 * @param VRMSupportedDefinitionType VRMSupported
	 * @return VRMSupportedDefinitionType
	 */
	public function setVRMSupported($_VRMSupported)
	{
		return ($this->VRMSupported = $_VRMSupported);
	}
	/**
	 * Get VRMSupported
	 * @return EbayTradingTypeVRMSupportedDefinitionType
	 */
	public function getVRMSupported()
	{
		return $this->VRMSupported;
	}
	/**
	 * Set SellerProvidedTitleSupported
	 * @param SellerProvidedTitleSupportedDefinitionType SellerProvidedTitleSupported
	 * @return SellerProvidedTitleSupportedDefinitionType
	 */
	public function setSellerProvidedTitleSupported($_SellerProvidedTitleSupported)
	{
		return ($this->SellerProvidedTitleSupported = $_SellerProvidedTitleSupported);
	}
	/**
	 * Get SellerProvidedTitleSupported
	 * @return EbayTradingTypeSellerProvidedTitleSupportedDefinitionType
	 */
	public function getSellerProvidedTitleSupported()
	{
		return $this->SellerProvidedTitleSupported;
	}
	/**
	 * Set DepositSupported
	 * @param DepositSupportedDefinitionType DepositSupported
	 * @return DepositSupportedDefinitionType
	 */
	public function setDepositSupported($_DepositSupported)
	{
		return ($this->DepositSupported = $_DepositSupported);
	}
	/**
	 * Get DepositSupported
	 * @return EbayTradingTypeDepositSupportedDefinitionType
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