<?php
/**
 * Class file for EbayTradingTypeFeatureIDCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeatureIDCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeFeatureIDCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ListingDurations'
	 * Meta informations :
	 * 	- documentation : Returns information about the durations of listings you can use in a given category. <br><br> <bold>Note:</bold> Durations for Local Market listings are not supported by GetCategoryFeatures. Refer to the Local Market Listing documentation in the Web Services Guide for valid listing durations.
	 * @return string 'ListingDurations'
	 */
	const VALUE_LISTINGDURATIONS = 'ListingDurations';
	/**
	 * Constant for value 'BestOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports best offers.
	 * @return string 'BestOfferEnabled'
	 */
	const VALUE_BESTOFFERENABLED = 'BestOfferEnabled';
	/**
	 * Constant for value 'DutchBINEnabled'
	 * Meta informations :
	 * 	- documentation : Returned if a site and category allow Buy It Now for Dutch auctions. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'DutchBINEnabled'
	 */
	const VALUE_DUTCHBINENABLED = 'DutchBINEnabled';
	/**
	 * Constant for value 'ShippingTermsRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a seller is required to specify at least one domestic shipping service and associated cost in order to list the item.
	 * @return string 'ShippingTermsRequired'
	 */
	const VALUE_SHIPPINGTERMSREQUIRED = 'ShippingTermsRequired';
	/**
	 * Constant for value 'UserConsentRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
	 * @return string 'UserConsentRequired'
	 */
	const VALUE_USERCONSENTREQUIRED = 'UserConsentRequired';
	/**
	 * Constant for value 'HomePageFeaturedEnabled'
	 * Meta informations :
	 * 	- documentation : Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
	 * @return string 'HomePageFeaturedEnabled'
	 */
	const VALUE_HOMEPAGEFEATUREDENABLED = 'HomePageFeaturedEnabled';
	/**
	 * Constant for value 'AdFormatEnabled'
	 * Meta informations :
	 * 	- documentation : Indicates whether a category supports ad-format.
	 * @return string 'AdFormatEnabled'
	 */
	const VALUE_ADFORMATENABLED = 'AdFormatEnabled';
	/**
	 * Constant for value 'DigitalDeliveryEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports digital delivery items. The digital delivery feature has been disabled.
	 * @return string 'DigitalDeliveryEnabled'
	 */
	const VALUE_DIGITALDELIVERYENABLED = 'DigitalDeliveryEnabled';
	/**
	 * Constant for value 'BestOfferCounterEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports counter-offers for Best Offers.
	 * @return string 'BestOfferCounterEnabled'
	 */
	const VALUE_BESTOFFERCOUNTERENABLED = 'BestOfferCounterEnabled';
	/**
	 * Constant for value 'BestOfferAutoDeclineEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports auto-decline for Best Offers.
	 * @return string 'BestOfferAutoDeclineEnabled'
	 */
	const VALUE_BESTOFFERAUTODECLINEENABLED = 'BestOfferAutoDeclineEnabled';
	/**
	 * Constant for value 'ProPack'
	 * Meta informations :
	 * 	- documentation : Returns information about ProPackBundle (a feature pack). Applies only to US and Canadian eBay motor vehicle sellers. Contains the Bold, Border, Featured and Highlight features.
	 * @return string 'ProPack'
	 */
	const VALUE_PROPACK = 'ProPack';
	/**
	 * Constant for value 'BasicUpgradePack'
	 * Meta informations :
	 * 	- documentation : Not applicable to any site. Formerly, Australia site (site ID 15, abbreviation AU) only, and returned information about the BasicUpgradePack bundle (a feature pack), which combined the features Gallery and Subtitle for a discounted price.
	 * @return string 'BasicUpgradePack'
	 */
	const VALUE_BASICUPGRADEPACK = 'BasicUpgradePack';
	/**
	 * Constant for value 'ValuePack'
	 * Meta informations :
	 * 	- documentation : Returns information about the ValuePack bundle (a feature pack), which combines the features Gallery, Subtitle, and Listing Designer for a discounted price. Support for this feature varies by site and category.
	 * @return string 'ValuePack'
	 */
	const VALUE_VALUEPACK = 'ValuePack';
	/**
	 * Constant for value 'ProPackPlus'
	 * Meta informations :
	 * 	- documentation : Returns information about the ProPackPlus bundle (a feature pack), which combines the features BoldTitle, Border, Highlight, Featured, and Gallery for a discounted price. Support for this feature varies by site and category.
	 * @return string 'ProPackPlus'
	 */
	const VALUE_PROPACKPLUS = 'ProPackPlus';
	/**
	 * Constant for value 'LocalMarketSpecialitySubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers subscribed to Local Market for Specialty Vehicles.
	 * @return string 'LocalMarketSpecialitySubscription'
	 */
	const VALUE_LOCALMARKETSPECIALITYSUBSCRIPTION = 'LocalMarketSpecialitySubscription';
	/**
	 * Constant for value 'LocalMarketRegularSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers subscribed to Local Market for Vehicles.
	 * @return string 'LocalMarketRegularSubscription'
	 */
	const VALUE_LOCALMARKETREGULARSUBSCRIPTION = 'LocalMarketRegularSubscription';
	/**
	 * Constant for value 'LocalMarketPremiumSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers with a premium Local Market subscription.
	 * @return string 'LocalMarketPremiumSubscription'
	 */
	const VALUE_LOCALMARKETPREMIUMSUBSCRIPTION = 'LocalMarketPremiumSubscription';
	/**
	 * Constant for value 'LocalMarketNonSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers without a Local Market subscription.
	 * @return string 'LocalMarketNonSubscription'
	 */
	const VALUE_LOCALMARKETNONSUBSCRIPTION = 'LocalMarketNonSubscription';
	/**
	 * Constant for value 'ExpressEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category is eligible for eBay Express.
	 * @return string 'ExpressEnabled'
	 */
	const VALUE_EXPRESSENABLED = 'ExpressEnabled';
	/**
	 * Constant for value 'ExpressPicturesRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category requires pictures to be listed on Express.
	 * @return string 'ExpressPicturesRequired'
	 */
	const VALUE_EXPRESSPICTURESREQUIRED = 'ExpressPicturesRequired';
	/**
	 * Constant for value 'ExpressConditionRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category requires item condition to be listed on Express.
	 * @return string 'ExpressConditionRequired'
	 */
	const VALUE_EXPRESSCONDITIONREQUIRED = 'ExpressConditionRequired';
	/**
	 * Constant for value 'SellerContactDetailsEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows seller-level contact information for Classified Ad listings.
	 * @return string 'SellerContactDetailsEnabled'
	 */
	const VALUE_SELLERCONTACTDETAILSENABLED = 'SellerContactDetailsEnabled';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'MinimumReservePrice'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Minimum Reserve Price.
	 * @return string 'MinimumReservePrice'
	 */
	const VALUE_MINIMUMRESERVEPRICE = 'MinimumReservePrice';
	/**
	 * Constant for value 'TransactionConfirmationRequestEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports the Transaction Confirmation Request feature.
	 * @return string 'TransactionConfirmationRequestEnabled'
	 */
	const VALUE_TRANSACTIONCONFIRMATIONREQUESTENABLED = 'TransactionConfirmationRequestEnabled';
	/**
	 * Constant for value 'StoreInventoryEnabled'
	 * Meta informations :
	 * 	- documentation : Indicates whether the category supports Store Inventory Format.
	 * @return string 'StoreInventoryEnabled'
	 */
	const VALUE_STOREINVENTORYENABLED = 'StoreInventoryEnabled';
	/**
	 * Constant for value 'LocalListingDistances'
	 * Meta informations :
	 * 	- documentation : Returns information about the supported local listing distances for different levels of Local Market subscription.
	 * @return string 'LocalListingDistances'
	 */
	const VALUE_LOCALLISTINGDISTANCES = 'LocalListingDistances';
	/**
	 * Constant for value 'SkypeMeTransactionalEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports the addition of Skype buttons to sale listings.
	 * @return string 'SkypeMeTransactionalEnabled'
	 */
	const VALUE_SKYPEMETRANSACTIONALENABLED = 'SkypeMeTransactionalEnabled';
	/**
	 * Constant for value 'SkypeMeNonTransactionalEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports the addition of Skype buttons to ad listings.
	 * @return string 'SkypeMeNonTransactionalEnabled'
	 */
	const VALUE_SKYPEMENONTRANSACTIONALENABLED = 'SkypeMeNonTransactionalEnabled';
	/**
	 * Constant for value 'ClassifiedAdPaymentMethodEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether the payment method is displayed to the user for Classified Ad listings in a category. Even if payment method is displayed, checkout may or may not be enabled.
	 * @return string 'ClassifiedAdPaymentMethodEnabled'
	 */
	const VALUE_CLASSIFIEDADPAYMENTMETHODENABLED = 'ClassifiedAdPaymentMethodEnabled';
	/**
	 * Constant for value 'ClassifiedAdShippingMethodEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether shipping options are available for Classified Ad listings in this category.
	 * @return string 'ClassifiedAdShippingMethodEnabled'
	 */
	const VALUE_CLASSIFIEDADSHIPPINGMETHODENABLED = 'ClassifiedAdShippingMethodEnabled';
	/**
	 * Constant for value 'ClassifiedAdBestOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether Best Offer is enabled for Classified Ad listings.
	 * @return string 'ClassifiedAdBestOfferEnabled'
	 */
	const VALUE_CLASSIFIEDADBESTOFFERENABLED = 'ClassifiedAdBestOfferEnabled';
	/**
	 * Constant for value 'ClassifiedAdCounterOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether counter offers are allowed on Classified Ad listings for a category. Returned only if this category overrides the site default.
	 * @return string 'ClassifiedAdCounterOfferEnabled'
	 */
	const VALUE_CLASSIFIEDADCOUNTEROFFERENABLED = 'ClassifiedAdCounterOfferEnabled';
	/**
	 * Constant for value 'ClassifiedAdAutoDeclineEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether automatic decline for best offers are allowed for Classified Ad listings in a category. Returned only if this category overrides the site default.
	 * @return string 'ClassifiedAdAutoDeclineEnabled'
	 */
	const VALUE_CLASSIFIEDADAUTODECLINEENABLED = 'ClassifiedAdAutoDeclineEnabled';
	/**
	 * Constant for value 'ClassifiedAdContactByEmailEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an email address in the seller's contact information.
	 * @return string 'ClassifiedAdContactByEmailEnabled'
	 */
	const VALUE_CLASSIFIEDADCONTACTBYEMAILENABLED = 'ClassifiedAdContactByEmailEnabled';
	/**
	 * Constant for value 'ClassifiedAdContactByPhoneEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including a telephone number in the seller's contact information.
	 * @return string 'ClassifiedAdContactByPhoneEnabled'
	 */
	const VALUE_CLASSIFIEDADCONTACTBYPHONEENABLED = 'ClassifiedAdContactByPhoneEnabled';
	/**
	 * Constant for value 'SafePaymentRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category requires a safe payment method. If a seller has a 'SafePaymentExempt' status (see GetUser), they are exempt from the requirement to offer at least one safe payment method when listing an item.
	 * @return string 'SafePaymentRequired'
	 */
	const VALUE_SAFEPAYMENTREQUIRED = 'SafePaymentRequired';
	/**
	 * Constant for value 'MaximumBestOffersAllowed'
	 * Meta informations :
	 * 	- documentation : Returns information about the number of Best Offers allowed for a non-Ad-Format-Listings buyer.
	 * @return string 'MaximumBestOffersAllowed'
	 */
	const VALUE_MAXIMUMBESTOFFERSALLOWED = 'MaximumBestOffersAllowed';
	/**
	 * Constant for value 'ClassifiedAdMaximumBestOffersAllowed'
	 * Meta informations :
	 * 	- documentation : Returns information about the number of Best Offers allowed for a Classified-Ad-Format-Listings buyer.
	 * @return string 'ClassifiedAdMaximumBestOffersAllowed'
	 */
	const VALUE_CLASSIFIEDADMAXIMUMBESTOFFERSALLOWED = 'ClassifiedAdMaximumBestOffersAllowed';
	/**
	 * Constant for value 'ClassifiedAdContactByEmailAvailable'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an email address in the seller's contact information for classified-ad listings.
	 * @return string 'ClassifiedAdContactByEmailAvailable'
	 */
	const VALUE_CLASSIFIEDADCONTACTBYEMAILAVAILABLE = 'ClassifiedAdContactByEmailAvailable';
	/**
	 * Constant for value 'ClassifiedAdPayPerLeadEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports pay-per-lead listings.
	 * @return string 'ClassifiedAdPayPerLeadEnabled'
	 */
	const VALUE_CLASSIFIEDADPAYPERLEADENABLED = 'ClassifiedAdPayPerLeadEnabled';
	/**
	 * Constant for value 'ItemSpecificsEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether categories support custom Item Specifics, and whether categories have been converted from the older ID-based attribute format to custom Item Specifics. (That is, this retrieves both ItemSpecificsEnabled and AttributeConversionEnabled settings.)
	 * @return string 'ItemSpecificsEnabled'
	 */
	const VALUE_ITEMSPECIFICSENABLED = 'ItemSpecificsEnabled';
	/**
	 * Constant for value 'PaisaPayFullEscrowEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether PaisaPayEscrow payment method is enabled.
	 * @return string 'PaisaPayFullEscrowEnabled'
	 */
	const VALUE_PAISAPAYFULLESCROWENABLED = 'PaisaPayFullEscrowEnabled';
	/**
	 * Constant for value 'ISBNIdentifierEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports ISBN.
	 * @return string 'ISBNIdentifierEnabled'
	 */
	const VALUE_ISBNIDENTIFIERENABLED = 'ISBNIdentifierEnabled';
	/**
	 * Constant for value 'UPCIdentifierEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports UPC.
	 * @return string 'UPCIdentifierEnabled'
	 */
	const VALUE_UPCIDENTIFIERENABLED = 'UPCIdentifierEnabled';
	/**
	 * Constant for value 'EANIdentifierEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports EAN.
	 * @return string 'EANIdentifierEnabled'
	 */
	const VALUE_EANIDENTIFIERENABLED = 'EANIdentifierEnabled';
	/**
	 * Constant for value 'BrandMPNIdentifierEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports BrandMPN.
	 * @return string 'BrandMPNIdentifierEnabled'
	 */
	const VALUE_BRANDMPNIDENTIFIERENABLED = 'BrandMPNIdentifierEnabled';
	/**
	 * Constant for value 'ClassifiedAdAutoAcceptEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether auto-accept for Best Offers is allowed for Classified Ad listings in this category.
	 * @return string 'ClassifiedAdAutoAcceptEnabled'
	 */
	const VALUE_CLASSIFIEDADAUTOACCEPTENABLED = 'ClassifiedAdAutoAcceptEnabled';
	/**
	 * Constant for value 'BestOfferAutoAcceptEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether auto-accept for Best Offers is allowed for listings in a category.
	 * @return string 'BestOfferAutoAcceptEnabled'
	 */
	const VALUE_BESTOFFERAUTOACCEPTENABLED = 'BestOfferAutoAcceptEnabled';
	/**
	 * Constant for value 'CrossBorderTradeEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows listings to be displayed in another site's default search results.
	 * @return string 'CrossBorderTradeEnabled'
	 */
	const VALUE_CROSSBORDERTRADEENABLED = 'CrossBorderTradeEnabled';
	/**
	 * Constant for value 'PayPalBuyerProtectionEnabled'
	 * Meta informations :
	 * 	- documentation : On the Australia site, returns information about whether a category allows PayPal buyer protection.
	 * @return string 'PayPalBuyerProtectionEnabled'
	 */
	const VALUE_PAYPALBUYERPROTECTIONENABLED = 'PayPalBuyerProtectionEnabled';
	/**
	 * Constant for value 'BuyerGuaranteeEnabled'
	 * Meta informations :
	 * 	- documentation : On the Australia site, returns information about whether a category allows PayPal buyer protection.
	 * @return string 'BuyerGuaranteeEnabled'
	 */
	const VALUE_BUYERGUARANTEEENABLED = 'BuyerGuaranteeEnabled';
	/**
	 * Constant for value 'INEscrowWorkflowTimeline'
	 * Meta informations :
	 * 	- documentation : On the India site, returns information about the escrow workflow version applicable to the given category, if the category supports PaisaPayFullEscrow.
	 * @return string 'INEscrowWorkflowTimeline'
	 */
	const VALUE_INESCROWWORKFLOWTIMELINE = 'INEscrowWorkflowTimeline';
	/**
	 * Constant for value 'CombinedFixedPriceTreatment'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows combined fixed price treatment of the following two listing types: Store Inventory Format and Basic Fixed Price.
	 * @return string 'CombinedFixedPriceTreatment'
	 */
	const VALUE_COMBINEDFIXEDPRICETREATMENT = 'CombinedFixedPriceTreatment';
	/**
	 * Constant for value 'GalleryFeaturedDurations'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows durations for "Gallery Featured".
	 * @return string 'GalleryFeaturedDurations'
	 */
	const VALUE_GALLERYFEATUREDDURATIONS = 'GalleryFeaturedDurations';
	/**
	 * Constant for value 'PayPalRequired'
	 * Meta informations :
	 * 	- documentation : Returns information about whether listings in a category require PayPal as a payment method.
	 * @return string 'PayPalRequired'
	 */
	const VALUE_PAYPALREQUIRED = 'PayPalRequired';
	/**
	 * Constant for value 'eBayMotorsProAdFormatEnabled'
	 * Meta informations :
	 * 	- documentation : Indicates whether the category supports ad-format. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProAdFormatEnabled'
	 */
	const VALUE_EBAYMOTORSPROADFORMATENABLED = 'eBayMotorsProAdFormatEnabled';
	/**
	 * Constant for value 'eBayMotorsProContactByPhoneEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether the telephone can be a contact method for the category. Added for eBay Motorss Pro users.
	 * @return string 'eBayMotorsProContactByPhoneEnabled'
	 */
	const VALUE_EBAYMOTORSPROCONTACTBYPHONEENABLED = 'eBayMotorsProContactByPhoneEnabled';
	/**
	 * Constant for value 'eBayMotorsProContactByAddressEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an address in the seller's contact information. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProContactByAddressEnabled'
	 */
	const VALUE_EBAYMOTORSPROCONTACTBYADDRESSENABLED = 'eBayMotorsProContactByAddressEnabled';
	/**
	 * Constant for value 'eBayMotorsProCompanyNameEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including a company name in the seller's contact information. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProCompanyNameEnabled'
	 */
	const VALUE_EBAYMOTORSPROCOMPANYNAMEENABLED = 'eBayMotorsProCompanyNameEnabled';
	/**
	 * Constant for value 'eBayMotorsProContactByEmailEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an email address in the seller's contact information. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProContactByEmailEnabled'
	 */
	const VALUE_EBAYMOTORSPROCONTACTBYEMAILENABLED = 'eBayMotorsProContactByEmailEnabled';
	/**
	 * Constant for value 'eBayMotorsProBestOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Best Offers. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProBestOfferEnabled'
	 */
	const VALUE_EBAYMOTORSPROBESTOFFERENABLED = 'eBayMotorsProBestOfferEnabled';
	/**
	 * Constant for value 'eBayMotorsProAutoAcceptEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports auto accept. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProAutoAcceptEnabled'
	 */
	const VALUE_EBAYMOTORSPROAUTOACCEPTENABLED = 'eBayMotorsProAutoAcceptEnabled';
	/**
	 * Constant for value 'eBayMotorsProAutoDeclineEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports auto decline. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProAutoDeclineEnabled'
	 */
	const VALUE_EBAYMOTORSPROAUTODECLINEENABLED = 'eBayMotorsProAutoDeclineEnabled';
	/**
	 * Constant for value 'eBayMotorsProPaymentMethodCheckOutEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports payment method checkout. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProPaymentMethodCheckOutEnabled'
	 */
	const VALUE_EBAYMOTORSPROPAYMENTMETHODCHECKOUTENABLED = 'eBayMotorsProPaymentMethodCheckOutEnabled';
	/**
	 * Constant for value 'eBayMotorsProShippingMethodEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether shipping options are available in the category. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProShippingMethodEnabled'
	 */
	const VALUE_EBAYMOTORSPROSHIPPINGMETHODENABLED = 'eBayMotorsProShippingMethodEnabled';
	/**
	 * Constant for value 'eBayMotorsProCounterOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether counter offers are allowed for a category. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProCounterOfferEnabled'
	 */
	const VALUE_EBAYMOTORSPROCOUNTEROFFERENABLED = 'eBayMotorsProCounterOfferEnabled';
	/**
	 * Constant for value 'eBayMotorsProSellerContactDetailsEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows seller-level contact information for Classified Ad listings. Added for eBay Motors Pro users.
	 * @return string 'eBayMotorsProSellerContactDetailsEnabled'
	 */
	const VALUE_EBAYMOTORSPROSELLERCONTACTDETAILSENABLED = 'eBayMotorsProSellerContactDetailsEnabled';
	/**
	 * Constant for value 'LocalMarketAdFormatEnabled'
	 * Meta informations :
	 * 	- documentation : Indicates whether a category supports ad-format. Added for Local Market users.
	 * @return string 'LocalMarketAdFormatEnabled'
	 */
	const VALUE_LOCALMARKETADFORMATENABLED = 'LocalMarketAdFormatEnabled';
	/**
	 * Constant for value 'LocalMarketContactByPhoneEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including a telephone number in the seller's contact information. Added for Local Market users.
	 * @return string 'LocalMarketContactByPhoneEnabled'
	 */
	const VALUE_LOCALMARKETCONTACTBYPHONEENABLED = 'LocalMarketContactByPhoneEnabled';
	/**
	 * Constant for value 'LocalMarketContactByAddressEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an address in the seller's contact information. Added for Local Market users.
	 * @return string 'LocalMarketContactByAddressEnabled'
	 */
	const VALUE_LOCALMARKETCONTACTBYADDRESSENABLED = 'LocalMarketContactByAddressEnabled';
	/**
	 * Constant for value 'LocalMarketCompanyNameEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including a company name in the seller's contact information. Added for Local Market users.
	 * @return string 'LocalMarketCompanyNameEnabled'
	 */
	const VALUE_LOCALMARKETCOMPANYNAMEENABLED = 'LocalMarketCompanyNameEnabled';
	/**
	 * Constant for value 'LocalMarketContactByEmailEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including an email address in the seller's contact information. Added for Local Market users.
	 * @return string 'LocalMarketContactByEmailEnabled'
	 */
	const VALUE_LOCALMARKETCONTACTBYEMAILENABLED = 'LocalMarketContactByEmailEnabled';
	/**
	 * Constant for value 'LocalMarketBestOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Best Offers for Classified Ad listings. Added for Local Market users.
	 * @return string 'LocalMarketBestOfferEnabled'
	 */
	const VALUE_LOCALMARKETBESTOFFERENABLED = 'LocalMarketBestOfferEnabled';
	/**
	 * Constant for value 'LocalMarketAutoAcceptEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports auto accept. Added for Local Market users.
	 * @return string 'LocalMarketAutoAcceptEnabled'
	 */
	const VALUE_LOCALMARKETAUTOACCEPTENABLED = 'LocalMarketAutoAcceptEnabled';
	/**
	 * Constant for value 'LocalMarketAutoDeclineEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports auto decline. Added for Local Market users.
	 * @return string 'LocalMarketAutoDeclineEnabled'
	 */
	const VALUE_LOCALMARKETAUTODECLINEENABLED = 'LocalMarketAutoDeclineEnabled';
	/**
	 * Constant for value 'LocalMarketPaymentMethodCheckOutEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports payment method checkout. Added for Local Market users.
	 * @return string 'LocalMarketPaymentMethodCheckOutEnabled'
	 */
	const VALUE_LOCALMARKETPAYMENTMETHODCHECKOUTENABLED = 'LocalMarketPaymentMethodCheckOutEnabled';
	/**
	 * Constant for value 'LocalMarketShippingMethodEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether shipping options are available for listings in a category. Added for Local Market users.
	 * @return string 'LocalMarketShippingMethodEnabled'
	 */
	const VALUE_LOCALMARKETSHIPPINGMETHODENABLED = 'LocalMarketShippingMethodEnabled';
	/**
	 * Constant for value 'LocalMarketCounterOfferEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether counter offers are allowed for a category . Added for Local Market users.
	 * @return string 'LocalMarketCounterOfferEnabled'
	 */
	const VALUE_LOCALMARKETCOUNTEROFFERENABLED = 'LocalMarketCounterOfferEnabled';
	/**
	 * Constant for value 'LocalMarketSellerContactDetailsEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category allows seller-level contact information. Added for Local Market users.
	 * @return string 'LocalMarketSellerContactDetailsEnabled'
	 */
	const VALUE_LOCALMARKETSELLERCONTACTDETAILSENABLED = 'LocalMarketSellerContactDetailsEnabled';
	/**
	 * Constant for value 'ClassifiedAdContactByAddressEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether the contact by address is enabled. Added for For Sale By Owner.
	 * @return string 'ClassifiedAdContactByAddressEnabled'
	 */
	const VALUE_CLASSIFIEDADCONTACTBYADDRESSENABLED = 'ClassifiedAdContactByAddressEnabled';
	/**
	 * Constant for value 'ClassifiedAdCompanyNameEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports including a company name in the seller's contact information. Added for For Sale By Owmer.
	 * @return string 'ClassifiedAdCompanyNameEnabled'
	 */
	const VALUE_CLASSIFIEDADCOMPANYNAMEENABLED = 'ClassifiedAdCompanyNameEnabled';
	/**
	 * Constant for value 'SpecialitySubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers subscribed to Local Market for Specialty Vehicles. Added for subscription.
	 * @return string 'SpecialitySubscription'
	 */
	const VALUE_SPECIALITYSUBSCRIPTION = 'SpecialitySubscription';
	/**
	 * Constant for value 'RegularSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers subscribed to Local Market for Vehicles. Added for subscription.
	 * @return string 'RegularSubscription'
	 */
	const VALUE_REGULARSUBSCRIPTION = 'RegularSubscription';
	/**
	 * Constant for value 'PremiumSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers with a premium Local Market subscription. Added for subscription.
	 * @return string 'PremiumSubscription'
	 */
	const VALUE_PREMIUMSUBSCRIPTION = 'PremiumSubscription';
	/**
	 * Constant for value 'NonSubscription'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Local Market listings for sellers without a Local Market subscription. Added for subscription.
	 * @return string 'NonSubscription'
	 */
	const VALUE_NONSUBSCRIPTION = 'NonSubscription';
	/**
	 * Constant for value 'IntangibleEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether Intangible flag is set or not
	 * @return string 'IntangibleEnabled'
	 */
	const VALUE_INTANGIBLEENABLED = 'IntangibleEnabled';
	/**
	 * Constant for value 'PayPalRequiredForStoreOwner'
	 * Meta informations :
	 * 	- documentation : Defines if PayPal is required for Store Owners on fixed price listings (FixedPriceItem and StoresFixedPrice).
	 * @return string 'PayPalRequiredForStoreOwner'
	 */
	const VALUE_PAYPALREQUIREDFORSTOREOWNER = 'PayPalRequiredForStoreOwner';
	/**
	 * Constant for value 'ReviseQuantityAllowed'
	 * Meta informations :
	 * 	- documentation : Defines if quantity can be revised while a listing is in semi or fully restricted mode.
	 * @return string 'ReviseQuantityAllowed'
	 */
	const VALUE_REVISEQUANTITYALLOWED = 'ReviseQuantityAllowed';
	/**
	 * Constant for value 'RevisePriceAllowed'
	 * Meta informations :
	 * 	- documentation : Defines if price can be revised while a listing is in semi or fully restricted mode.
	 * @return string 'RevisePriceAllowed'
	 */
	const VALUE_REVISEPRICEALLOWED = 'RevisePriceAllowed';
	/**
	 * Constant for value 'StoreOwnerExtendedListingDurationsEnabled'
	 * Meta informations :
	 * 	- documentation : Defines if extended store owner listing durations are enabled on fixed price listings (FixedPriceItem and StoreFormatItems).
	 * @return string 'StoreOwnerExtendedListingDurationsEnabled'
	 */
	const VALUE_STOREOWNEREXTENDEDLISTINGDURATIONSENABLED = 'StoreOwnerExtendedListingDurationsEnabled';
	/**
	 * Constant for value 'StoreOwnerExtendedListingDurations'
	 * Meta informations :
	 * 	- documentation : Provides additional listing durations that are supported by store owners.
	 * @return string 'StoreOwnerExtendedListingDurations'
	 */
	const VALUE_STOREOWNEREXTENDEDLISTINGDURATIONS = 'StoreOwnerExtendedListingDurations';
	/**
	 * Constant for value 'ReturnPolicyEnabled'
	 * Meta informations :
	 * 	- documentation : Defines if listings in a category support a return policy.
	 * @return string 'ReturnPolicyEnabled'
	 */
	const VALUE_RETURNPOLICYENABLED = 'ReturnPolicyEnabled';
	/**
	 * Constant for value 'HandlingTimeEnabled'
	 * Meta informations :
	 * 	- documentation : Defines if listings require a handling time (dispatch time). The handling time is the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time).
	 * @return string 'HandlingTimeEnabled'
	 */
	const VALUE_HANDLINGTIMEENABLED = 'HandlingTimeEnabled';
	/**
	 * Constant for value 'PaymentMethods'
	 * Meta informations :
	 * 	- documentation : Returns information about applicable payment methods.
	 * @return string 'PaymentMethods'
	 */
	const VALUE_PAYMENTMETHODS = 'PaymentMethods';
	/**
	 * Constant for value 'MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Returns elements related to the maximum cost the seller can charge for the first domestic flat rate shipping service for a category (or a combination of category and shipping service group).
	 * @return string 'MaxFlatShippingCost'
	 */
	const VALUE_MAXFLATSHIPPINGCOST = 'MaxFlatShippingCost';
	/**
	 * Constant for value 'MaxFlatShippingCostCBTExempt'
	 * Meta informations :
	 * 	- documentation : Specifies the default site setting for whether a maximum flat rate shipping cost is imposed on sellers who list in categories on this site yet are shipping an item into the country of this site from another country.
	 * @return string 'MaxFlatShippingCostCBTExempt'
	 */
	const VALUE_MAXFLATSHIPPINGCOSTCBTEXEMPT = 'MaxFlatShippingCostCBTExempt';
	/**
	 * Constant for value 'Group1MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group1.
	 * @return string 'Group1MaxFlatShippingCost'
	 */
	const VALUE_GROUP1MAXFLATSHIPPINGCOST = 'Group1MaxFlatShippingCost';
	/**
	 * Constant for value 'Group2MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group2.
	 * @return string 'Group2MaxFlatShippingCost'
	 */
	const VALUE_GROUP2MAXFLATSHIPPINGCOST = 'Group2MaxFlatShippingCost';
	/**
	 * Constant for value 'Group3MaxFlatShippingCost'
	 * Meta informations :
	 * 	- documentation : Returns the applicable max cap per shipping cost for shipping service group3.
	 * @return string 'Group3MaxFlatShippingCost'
	 */
	const VALUE_GROUP3MAXFLATSHIPPINGCOST = 'Group3MaxFlatShippingCost';
	/**
	 * Constant for value 'VariationsEnabled'
	 * Meta informations :
	 * 	- documentation : Returns settings that indicate which categories support multi-variation listings. Variations are items within the same listing that are logically the same product, but that vary in their manufacturing details or packaging.
	 * @return string 'VariationsEnabled'
	 */
	const VALUE_VARIATIONSENABLED = 'VariationsEnabled';
	/**
	 * Constant for value 'AttributeConversionEnabled'
	 * Meta informations :
	 * 	- documentation : Not operational. Pass ItemSpecificsEnabled to retrieve AttributeConversionEnabled settings.
	 * @return string 'AttributeConversionEnabled'
	 */
	const VALUE_ATTRIBUTECONVERSIONENABLED = 'AttributeConversionEnabled';
	/**
	 * Constant for value 'FreeGalleryPlusEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether free, automatic upgrades to Gallery Plus occur a category.
	 * @return string 'FreeGalleryPlusEnabled'
	 */
	const VALUE_FREEGALLERYPLUSENABLED = 'FreeGalleryPlusEnabled';
	/**
	 * Constant for value 'FreePicturePackEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about whether free, automatic upgrades to Picture Pack occur a category.
	 * @return string 'FreePicturePackEnabled'
	 */
	const VALUE_FREEPICTUREPACKENABLED = 'FreePicturePackEnabled';
	/**
	 * Constant for value 'CompatibilityEnabled'
	 * Meta informations :
	 * 	- documentation : Returns whether parts compatibility is enabled for the given category and, if so, the mode of compatibility (by application or by specification).
	 * @return string 'CompatibilityEnabled'
	 */
	const VALUE_COMPATIBILITYENABLED = 'CompatibilityEnabled';
	/**
	 * Constant for value 'MinCompatibleApplications'
	 * Meta informations :
	 * 	- documentation : Returns the minimum number of compatible applications that must be specified when listing in the given category. This is relevant for specifying parts compatibility by application only.
	 * @return string 'MinCompatibleApplications'
	 */
	const VALUE_MINCOMPATIBLEAPPLICATIONS = 'MinCompatibleApplications';
	/**
	 * Constant for value 'MaxCompatibleApplications'
	 * Meta informations :
	 * 	- documentation : Returns the maximum number of compatible applications that can be specified when listing in the given category. This is relevant for specifying parts compatibility by application manually (<b class="con">Item.ItemCompatibilityList</b>) only.
	 * @return string 'MaxCompatibleApplications'
	 */
	const VALUE_MAXCOMPATIBLEAPPLICATIONS = 'MaxCompatibleApplications';
	/**
	 * Constant for value 'ConditionEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about which categories support (or require) Item.ConditionID to specify an item's condition in listings.
	 * @return string 'ConditionEnabled'
	 */
	const VALUE_CONDITIONENABLED = 'ConditionEnabled';
	/**
	 * Constant for value 'ConditionValues'
	 * Meta informations :
	 * 	- documentation : Returns information about the list of conditions that categories support (for categories that support Item.ConditionID in listings).
	 * @return string 'ConditionValues'
	 */
	const VALUE_CONDITIONVALUES = 'ConditionValues';
	/**
	 * Constant for value 'ValueCategory'
	 * Meta informations :
	 * 	- documentation : Returns information about which categories are designated as value categories. (If you list in a value category, you cannot specify a secondary category for your listing.)
	 * @return string 'ValueCategory'
	 */
	const VALUE_VALUECATEGORY = 'ValueCategory';
	/**
	 * Constant for value 'ProductCreationEnabled'
	 * Meta informations :
	 * 	- documentation : Returns information about which categories support (or require) product creation to list an item.
	 * @return string 'ProductCreationEnabled'
	 */
	const VALUE_PRODUCTCREATIONENABLED = 'ProductCreationEnabled';
	/**
	 * Constant for value 'MaxGranularFitmentCount'
	 * Meta informations :
	 * 	- documentation : Returns information about the maximum number of parts compatibilities at the lowest level of granularity that can be associated with a listing.
	 * @return string 'MaxGranularFitmentCount'
	 */
	const VALUE_MAXGRANULARFITMENTCOUNT = 'MaxGranularFitmentCount';
	/**
	 * Constant for value 'CompatibleVehicleType'
	 * Meta informations :
	 * 	- documentation : Returns information to indicate which vehicle type, Cars and Trucks or Motorcycles, is supported by parts compatibility.
	 * @return string 'CompatibleVehicleType'
	 */
	const VALUE_COMPATIBLEVEHICLETYPE = 'CompatibleVehicleType';
	/**
	 * Constant for value 'PaymentOptionsGroup'
	 * Meta informations :
	 * 	- documentation : This value is passed into the <b>FeatureID</b> field of the <b>GetCategoryFeatures</b> request to see if the category supports the new eBay payment process. This feature is only applicable to DE or AT listings.
	 * @return string 'PaymentOptionsGroup'
	 */
	const VALUE_PAYMENTOPTIONSGROUP = 'PaymentOptionsGroup';
	/**
	 * Constant for value 'ShippingProfileCategoryGroup'
	 * Meta informations :
	 * 	- documentation : This value is passed into the <b>FeatureID</b> field of the <b>GetCategoryFeatures</b> request to see if Business Policies shipping profiles are supported for one or more categories. The <b>ShippingProfileCategoryGroup</b> field is not returned for categories that do not support Business Policies shipping profiles. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @return string 'ShippingProfileCategoryGroup'
	 */
	const VALUE_SHIPPINGPROFILECATEGORYGROUP = 'ShippingProfileCategoryGroup';
	/**
	 * Constant for value 'PaymentProfileCategoryGroup'
	 * Meta informations :
	 * 	- documentation : This value is passed into the <b>FeatureID</b> field of the <b>GetCategoryFeatures</b> request to see if Business Policies payment profiles are supported for one or more categories. The <b>PaymentProfileCategoryGroup</b> field is not returned for categories that do not support Business Policies payment profiles. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @return string 'PaymentProfileCategoryGroup'
	 */
	const VALUE_PAYMENTPROFILECATEGORYGROUP = 'PaymentProfileCategoryGroup';
	/**
	 * Constant for value 'ReturnPolicyProfileCategoryGroup'
	 * Meta informations :
	 * 	- documentation : This value is passed into the <b>FeatureID</b> field of the <b>GetCategoryFeatures</b> request to see if Business Policies return policy profiles are supported for one or more categories. The <b>PaymentProfileCategoryGroup</b> field is not returned for categories that do not support Business Policies return policy profiles. <br><br> <span class="tablenote"><strong>Note:</strong> Business Policies are not yet available for use on the eBay platform. </span>
	 * @return string 'ReturnPolicyProfileCategoryGroup'
	 */
	const VALUE_RETURNPOLICYPROFILECATEGORYGROUP = 'ReturnPolicyProfileCategoryGroup';
	/**
	 * Constant for value 'VINSupported'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Vehicle Identification Numbers (VIN) for US, CA, and CAFR eBay Motors listings.
	 * @return string 'VINSupported'
	 */
	const VALUE_VINSUPPORTED = 'VINSupported';
	/**
	 * Constant for value 'VRMSupported'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports Vehicle Registration Marks (VRM) for UK eBay Motors listings.
	 * @return string 'VRMSupported'
	 */
	const VALUE_VRMSUPPORTED = 'VRMSupported';
	/**
	 * Constant for value 'SellerProvidedTitleSupported'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports custom titles for US or CA eBay Motors listings.
	 * @return string 'SellerProvidedTitleSupported'
	 */
	const VALUE_SELLERPROVIDEDTITLESUPPORTED = 'SellerProvidedTitleSupported';
	/**
	 * Constant for value 'DepositSupported'
	 * Meta informations :
	 * 	- documentation : Returns information about whether a category supports vehicle deposits for US eBay Motors listings.
	 * @return string 'DepositSupported'
	 */
	const VALUE_DEPOSITSUPPORTED = 'DepositSupported';
	/**
	 * Constructor
	 * @return EbayTradingTypeFeatureIDCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_LISTINGDURATIONS,self::VALUE_BESTOFFERENABLED,self::VALUE_DUTCHBINENABLED,self::VALUE_SHIPPINGTERMSREQUIRED,self::VALUE_USERCONSENTREQUIRED,self::VALUE_HOMEPAGEFEATUREDENABLED,self::VALUE_ADFORMATENABLED,self::VALUE_DIGITALDELIVERYENABLED,self::VALUE_BESTOFFERCOUNTERENABLED,self::VALUE_BESTOFFERAUTODECLINEENABLED,self::VALUE_PROPACK,self::VALUE_BASICUPGRADEPACK,self::VALUE_VALUEPACK,self::VALUE_PROPACKPLUS,self::VALUE_LOCALMARKETSPECIALITYSUBSCRIPTION,self::VALUE_LOCALMARKETREGULARSUBSCRIPTION,self::VALUE_LOCALMARKETPREMIUMSUBSCRIPTION,self::VALUE_LOCALMARKETNONSUBSCRIPTION,self::VALUE_EXPRESSENABLED,self::VALUE_EXPRESSPICTURESREQUIRED,self::VALUE_EXPRESSCONDITIONREQUIRED,self::VALUE_SELLERCONTACTDETAILSENABLED,self::VALUE_CUSTOMCODE,self::VALUE_MINIMUMRESERVEPRICE,self::VALUE_TRANSACTIONCONFIRMATIONREQUESTENABLED,self::VALUE_STOREINVENTORYENABLED,self::VALUE_LOCALLISTINGDISTANCES,self::VALUE_SKYPEMETRANSACTIONALENABLED,self::VALUE_SKYPEMENONTRANSACTIONALENABLED,self::VALUE_CLASSIFIEDADPAYMENTMETHODENABLED,self::VALUE_CLASSIFIEDADSHIPPINGMETHODENABLED,self::VALUE_CLASSIFIEDADBESTOFFERENABLED,self::VALUE_CLASSIFIEDADCOUNTEROFFERENABLED,self::VALUE_CLASSIFIEDADAUTODECLINEENABLED,self::VALUE_CLASSIFIEDADCONTACTBYEMAILENABLED,self::VALUE_CLASSIFIEDADCONTACTBYPHONEENABLED,self::VALUE_SAFEPAYMENTREQUIRED,self::VALUE_MAXIMUMBESTOFFERSALLOWED,self::VALUE_CLASSIFIEDADMAXIMUMBESTOFFERSALLOWED,self::VALUE_CLASSIFIEDADCONTACTBYEMAILAVAILABLE,self::VALUE_CLASSIFIEDADPAYPERLEADENABLED,self::VALUE_ITEMSPECIFICSENABLED,self::VALUE_PAISAPAYFULLESCROWENABLED,self::VALUE_ISBNIDENTIFIERENABLED,self::VALUE_UPCIDENTIFIERENABLED,self::VALUE_EANIDENTIFIERENABLED,self::VALUE_BRANDMPNIDENTIFIERENABLED,self::VALUE_CLASSIFIEDADAUTOACCEPTENABLED,self::VALUE_BESTOFFERAUTOACCEPTENABLED,self::VALUE_CROSSBORDERTRADEENABLED,self::VALUE_PAYPALBUYERPROTECTIONENABLED,self::VALUE_BUYERGUARANTEEENABLED,self::VALUE_INESCROWWORKFLOWTIMELINE,self::VALUE_COMBINEDFIXEDPRICETREATMENT,self::VALUE_GALLERYFEATUREDDURATIONS,self::VALUE_PAYPALREQUIRED,self::VALUE_EBAYMOTORSPROADFORMATENABLED,self::VALUE_EBAYMOTORSPROCONTACTBYPHONEENABLED,self::VALUE_EBAYMOTORSPROCONTACTBYADDRESSENABLED,self::VALUE_EBAYMOTORSPROCOMPANYNAMEENABLED,self::VALUE_EBAYMOTORSPROCONTACTBYEMAILENABLED,self::VALUE_EBAYMOTORSPROBESTOFFERENABLED,self::VALUE_EBAYMOTORSPROAUTOACCEPTENABLED,self::VALUE_EBAYMOTORSPROAUTODECLINEENABLED,self::VALUE_EBAYMOTORSPROPAYMENTMETHODCHECKOUTENABLED,self::VALUE_EBAYMOTORSPROSHIPPINGMETHODENABLED,self::VALUE_EBAYMOTORSPROCOUNTEROFFERENABLED,self::VALUE_EBAYMOTORSPROSELLERCONTACTDETAILSENABLED,self::VALUE_LOCALMARKETADFORMATENABLED,self::VALUE_LOCALMARKETCONTACTBYPHONEENABLED,self::VALUE_LOCALMARKETCONTACTBYADDRESSENABLED,self::VALUE_LOCALMARKETCOMPANYNAMEENABLED,self::VALUE_LOCALMARKETCONTACTBYEMAILENABLED,self::VALUE_LOCALMARKETBESTOFFERENABLED,self::VALUE_LOCALMARKETAUTOACCEPTENABLED,self::VALUE_LOCALMARKETAUTODECLINEENABLED,self::VALUE_LOCALMARKETPAYMENTMETHODCHECKOUTENABLED,self::VALUE_LOCALMARKETSHIPPINGMETHODENABLED,self::VALUE_LOCALMARKETCOUNTEROFFERENABLED,self::VALUE_LOCALMARKETSELLERCONTACTDETAILSENABLED,self::VALUE_CLASSIFIEDADCONTACTBYADDRESSENABLED,self::VALUE_CLASSIFIEDADCOMPANYNAMEENABLED,self::VALUE_SPECIALITYSUBSCRIPTION,self::VALUE_REGULARSUBSCRIPTION,self::VALUE_PREMIUMSUBSCRIPTION,self::VALUE_NONSUBSCRIPTION,self::VALUE_INTANGIBLEENABLED,self::VALUE_PAYPALREQUIREDFORSTOREOWNER,self::VALUE_REVISEQUANTITYALLOWED,self::VALUE_REVISEPRICEALLOWED,self::VALUE_STOREOWNEREXTENDEDLISTINGDURATIONSENABLED,self::VALUE_STOREOWNEREXTENDEDLISTINGDURATIONS,self::VALUE_RETURNPOLICYENABLED,self::VALUE_HANDLINGTIMEENABLED,self::VALUE_PAYMENTMETHODS,self::VALUE_MAXFLATSHIPPINGCOST,self::VALUE_MAXFLATSHIPPINGCOSTCBTEXEMPT,self::VALUE_GROUP1MAXFLATSHIPPINGCOST,self::VALUE_GROUP2MAXFLATSHIPPINGCOST,self::VALUE_GROUP3MAXFLATSHIPPINGCOST,self::VALUE_VARIATIONSENABLED,self::VALUE_ATTRIBUTECONVERSIONENABLED,self::VALUE_FREEGALLERYPLUSENABLED,self::VALUE_FREEPICTUREPACKENABLED,self::VALUE_COMPATIBILITYENABLED,self::VALUE_MINCOMPATIBLEAPPLICATIONS,self::VALUE_MAXCOMPATIBLEAPPLICATIONS,self::VALUE_CONDITIONENABLED,self::VALUE_CONDITIONVALUES,self::VALUE_VALUECATEGORY,self::VALUE_PRODUCTCREATIONENABLED,self::VALUE_MAXGRANULARFITMENTCOUNT,self::VALUE_COMPATIBLEVEHICLETYPE,self::VALUE_PAYMENTOPTIONSGROUP,self::VALUE_SHIPPINGPROFILECATEGORYGROUP,self::VALUE_PAYMENTPROFILECATEGORYGROUP,self::VALUE_RETURNPOLICYPROFILECATEGORYGROUP,self::VALUE_VINSUPPORTED,self::VALUE_VRMSUPPORTED,self::VALUE_SELLERPROVIDEDTITLESUPPORTED,self::VALUE_DEPOSITSUPPORTED));
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