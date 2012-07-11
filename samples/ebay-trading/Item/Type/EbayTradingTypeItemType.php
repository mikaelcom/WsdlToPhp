<?php
/**
 * Class file for EbayTradingTypeItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemType
 * Documentation : Contains the data defining one item. A seller populates an object of this type at listing time with the definition of a new item. A seller also uses an object of this type to relist or revise an item. Calls that retrieve item data (such as the GetSellerList call) return an object of this type, filled with the item's data. Some fields are applicable both to eBay listings and Half.com listings. Some fields are only applicable to eBay listings, and others are only applicable to Half.com listings.
 * @date 04/07/2012
 */
class EbayTradingTypeItemType extends EbayTradingWsdlClass
{
	/**
	 * The ApplicationData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns custom, application-specific data associated with the item. The data you specify is stored by eBay with the item for your own reference, but it is not used by eBay in any way. Use ApplicationData to store special information for yourself, such as a part number. For a SKU in an eBay.com listing, use the SKU element instead. To remove this value when revising or relisting an item, use DeletedField. <br> <br> Not applicable to Half.com, use SellerInventoryID instead.
	 * @var string
	 */
	public $ApplicationData;
	/**
	 * The AttributeSetArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An older format for describing item specifics. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use ItemSpecifics for the newer Custom Item Specifics model.<br> <br> AttributeSetArray contains a maximum of two AttributeSet fields in a list (one for the primary category and one for the secondary category).<br> <br> <br>Use GetCategory2CS and GetAttributesCS to determine which attributes are required for a given category. But first check GetCategoryFeatures to determine whether the newer ItemSpecifics format is supported instead.<br> <br> <b>For ReviseItem only:</b> When you revise a listing, if the listing has bids and ends within 12 hours, you cannot change or add attributes. If the listing has bids but ends in more than 12 hours, you cannot change existing attribute data, but you can add attributes that were not previously specified. The most reliable way to do this is to pass in the entire AttributeSetArray with all the attributes you want in the listing (not just the ones you want to change, because that usually causes the others to be removed). To delete all attributes when you revise or relist, specify Item.AttributeSetArray in DeletedField and don't pass AttributeSetArray in the request. If the original listing's attributes are no longer valid and you get errors when you try to revise the listing, you can try to pass in the entire AttributeSetArray again with corrections. If that doesn't work, you can end the item and relist it with a set of valid attributes.<br> <br> <b>For GetItemRecommendations only:</b> In GetItemRecommendations, if you use the Suggested Attributes engine, the engine interprets attributes you pass in as attributes that do NOT need recommendations (i.e., attributes that the seller has already filled in as desired). The engine only returns recommendations for attributes that you do not specify, and only for attributes associated with the primary category.<br> <br> For Half.com, this is only returned in GetItem. It is not applicable in AddItem and other requests for Half.com items.
	 * @var EbayTradingTypeAttributeSetArrayType
	 */
	public $AttributeSetArray;
	/**
	 * The AttributeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container is used to specify one or more item attributes for a Half.com listing. This container is not applicable for eBay fixed-price or auction listings. <br><br> You can use <b>ReviseItem</b> to modify attribute values for Half.com listings. <br><br> Half.com listing attributes are not returned in <b>GetItem</b>.
	 * @var EbayTradingTypeAttributeArrayType
	 */
	public $AttributeArray;
	/**
	 * The LookupAttributeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : No longer recommended. Call GetCategoryFeatures to see if the category you're listing in supports ConditionID. If it does, then use ConditionID instead of LookupAttributeArray. <br> <br> LookupAttributeArray was previously used as a shortcut for specifying the Condition attribute by name instead of by ID in categories that support product details (catalog-enabled categories). Typically only used in combination with ProductListingDetails.<br> <br> <span class="tablenote"><b>Note:</b> If a category supports ConditionID, and you pass your item condition in LookupAttributeArray, eBay will not convert it to ConditionID, and your requests may fail if you specify the item condition in LookupAttributeArray. </span> <br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeLookupAttributeArrayType
	 */
	public $LookupAttributeArray;
	/**
	 * The AutoPay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : To create an immediate payment listing, <b>AutoPay</b> must be included and set to 'true' for the Add/Revise/Relist API calls. If the seller does not want to create an immediate payment item, this field is either omitted, or included and set to False. <br> <br> In the Trading API calls that return the <b>AutoPay</b> field, be aware that the field's appearance in the output does not necessarily indicate that the listing contains an immediate payment item, but only that the seller attempted to enable (by including and setting <b>AutoPay</b> to 'true' in the request) the immediate payment option. <br> <br> In order for a seller to apply an immediate payment policy for an item, the following must be true: <ul> <li>seller must have a Premier or Business PayPal account;</li> <li>seller must provide a valid <b>Item.PayPalEmailAddress</b> value;</li> <li>offer 'PayPal' as the only <b>Item.PaymentMethod</b> value;</li> <li>the listing site supports PayPal payments;</li> <li>the category supports PayPal payments;</li> <li>the listing type is fixed-price or auction (with Buy It Now option)</li> </ul> <br> <br> To discover if a category supports immediate payment for an item, use <b>GetCategories</b> and look for the appearance of the <b>AutoPayEnabled</b> boolean field in the output for that category (identified by <b>CategoryID</b>. <b>AutoPayEnabled</b> is returned as an empty element if the category supports immediate payment, and is not returned at all if the category does not support immediate payment. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container is used by the seller to specify amounts and due dates for deposits and full payment on motor vehicle listings. <br> <br> The PaymentDetails container and its child fields are only applicable to vehicle listings on eBay Motors (US and CA).
	 * @var EbayTradingTypePaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The BiddingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Detailed information about a bid. For GetMyeBayBuying, returned as a self-closed element if no bids meet the request criteria. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeBiddingDetailsType
	 */
	public $BiddingDetails;
	/**
	 * The MotorsGermanySearchable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Listing upgrade that features the item in eBay search results on the mobile.de partner site. Applicable to eBay Germany. <br> <br> If 'true' in listing requests and responses, the seller is purchasing or has purchased cross-promotional placement on the mobile.de site. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $MotorsGermanySearchable;
	/**
	 * The BuyerProtection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag to indicate an item's eligibility for the PayPal Buyer Protection program. This field is only returned if 'true'. If this field is not returned, the item is not eligible for PayPal Buyer Protection. For more information on items that are eligible for PayPal Buyer Protection, see the <a href="http://pages.ebay.com/help/buy/paypal-buyer-protection.html#paypal">PayPal Buyer Protection</a> help page. <br> <br> link Not applicable to Half.com.
	 * @var EbayTradingTypeBuyerProtectionCodeType
	 */
	public $BuyerProtection;
	/**
	 * The BuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For auction listings, the Buy It Now feature allows a user to purchase the item at a Buy It Now price and end the auction immediately. Use this field to specify the Buy It Now price. Including and specifying a <b>BuyItNowPrice</b> value enables the Buy It Now feature for the auction listing. <br><br> This feature is not applicable to fixed-price listings, Ad Format listings, or Half.com listings. <br><br> Once an auction has bids (and the high bid exceeds the Reserve Price, if specified), the listing is no longer eligible for Buy It Now (with some exceptions noted below). However, calls like GetItem still return the <b>BuyItNowPrice</b> that the seller originally set for the listing. Use the <b>GetItem</b> call and look for the inclusion of the <b>Item.ListingDetails.BuyItNowAvailable</b> flag in the output to determine whether the item can still be purchased using Buy It Now. You can also view the <b>Item.SellingStatus.BidCount</b> value in other item retrieval calls to determine whether an auction with Buy It Now has bids or not. <br><br> There might be price limits imposed for Buy It Now items, subject to the seller's PayPal account or the payment method used. Such limits cannot be determined via the eBay API and are not covered in eBay's API documentation because they can vary for each user. <br><br> To remove this value when revising or relisting an item, use <b>DeletedField</b>.
	 * @var EbayTradingTypeAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The CategoryMappingAllowed
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Controls how eBay handles cases in which an ID specified in <b>PrimaryCategory</b> and/or <b>SecondaryCategory</b> no longer exists in the current category structure: If you pass a value of 'true' in <b>CategoryMappingAllowed<b>, eBay will look up the current category ID that is mapped to the same category and use the new category ID for the listing (if any). The new category ID will be returned in the response as <b>CategoryID</b> (for the primary category) or <b>Category2ID</b> (for the secondary category). If <b>CategoryMappingAllowed</b> is not set or contains a value of 'false' (the default), an error will be returned if a selected category ID no longer exists. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $CategoryMappingAllowed;
	/**
	 * The Charity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifies a Giving Works listing and the benefiting nonprofit charity organization selected by the charity seller (if any). If specified, the seller must also accept PayPal as a payment method for the item (see <b>Item.PaymentMethods</b>). <br><br> When you revise an item, you can add a charity to a non-charity listing, but you cannot remove or change the charity designation. The rules for adding a charity to a listing depend on the listing type. For an auction listing, you can revise an item to add a charity if there are more than 12 hours left for the listing (whether or not the item has bids). For a fixed-price listing, you can revise an item to add a charity if there are more than 12 hours left for the listing, and the item has not been sold. <br><br> When you relist an item, use <b>DeletedField</b> to remove charity information. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeCharityType
	 */
	public $Charity;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Defines the 2-letter country code set. <br><br> Use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GeteBayDetails.html">GeteBayDetails</a> call to see the list of currently supported codes, and the English names associated with each code (e.g., KY="Cayman Islands"): <br><br> Most of the codes that eBay uses conform to the ISO 3166 standard, but some of the codes in the ISO 3166 standard are not used by eBay. Plus, there are some non-ISO codes in the eBay list. (Additional codes appear at the end of this code list and are noted as non-ISO.) <br><br> Also applicable as input to <b>AddItem</b> and related calls when you list items to Half.com (specify 'US').
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The CrossPromotion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for cross-promoted items related to a specific item ID. The items are either upsell or cross-sell, according to the promotion method passed in the request. Not applicable to Half.com.
	 * @var EbayTradingTypeCrossPromotionsType
	 */
	public $CrossPromotion;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currency associated with the item's price information. 3-letter ISO 4217 currency code that corresponds to the site specified in the listing request. Also applicable as input to <b>AddItem</b> and related calls when you list items to Half.com (specify USD). You cannot modify a listing's currency when you revise or relist an item.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller's description of the item. In listing requests, you can submit your description using CDATA if you want to use HTML or XML-reserved characters in the description. An error is returned if this contains malicious JavaScript content. (For more information on eBay's HTML and JavaScript policy, see the <a href="http://pages.ebay.com/help/policies/listing-javascript.html">HTML and JavaScript policy</a> help topic.) <br><br> If you embed pictures in the description (by using IMG tags) instead of using <b>PictureURL</b>, but you want a camera icon to appear in search and listing pages, specify the following null-image URL in PictureURL: http://pics.ebay.com/aw/pics/dot_clear.gif. See "Including Pictures in an Item Listing" in the Trading API Guide. <br><br> Required for all listings, except listings that include eBay catalog product details. Optional when you list with product details and Item.ProductListingDetails.IncludePrefilledItemInformation is true. <br><br> <b>For GetItem</b>: Item.Description can be empty when IncludePrefilledItemInformation is true and the seller did not write their own description. Item.Description doesn't return pre-filled descriptions from catalogs. The eBay site shows the catalog product description (if any) in the product details section of a listing. To retrieve a URL for the catalog product details page, see DetailsURL in GetProductSearchResults, GetProductFamilyMembers, or GetProductSellingPages. Or see DetailsURL in FindProducts in the Shopping API (which may be easier to use if your application doesn't support eBay Attributes). <br><br> Not applicable to Half.com. (For Half.com, use AttributeArray.Attribute with attributeLabel="Notes" to specify a brief description or note to the buyer.)
	 * @var string
	 */
	public $Description;
	/**
	 * The DescriptionReviseMode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If you are changing the description of an item, specifies whether the new next is an addition, a replacement, and so on.
	 * @var EbayTradingTypeDescriptionReviseModeCodeType
	 */
	public $DescriptionReviseMode;
	/**
	 * The Distance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The distance used in a proximity search distance calculation. <br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeDistanceType
	 */
	public $Distance;
	/**
	 * The GiftIcon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If turned on at listing time, this flag allows the seller to offer one or more gift services to buyers, and a generic gift icon displays next to the listing's title in search and view item pages. <b>GiftIcon</b> must be included at listing time and set to '1' to be able to use one or more <b>GiftServices</b> options. The value of '1' indicates that this feature is on, and the value of '0' indicates that the feature is off. <br><br> When the Top-Rated Seller program became operational, some enhanced listing features were removed or restricted to certain sellers on some sites. Use GeteBayDetails ListingFeatureDetails for more information. <br><br> Not applicable to Half.com.
	 * @var int
	 */
	public $GiftIcon;
	/**
	 * The GiftServices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Optional gift services that the seller is offering if the buyer chooses to purchase the item as a gift. Only returned if offered by the seller. <br><br> When the Top-Rated Seller program became operational, some enhanced listing features were removed or restricted to certain sellers on some sites. Use GeteBayDetails ListingFeatureDetails for more information. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeGiftServicesCodeType
	 */
	public $GiftServices;
	/**
	 * The HitCounter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether an optional hit counter is displayed on the item's listing page and, if so, what type. See HitCounterCodeType for specific values. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeHitCounterCodeType
	 */
	public $HitCounter;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID that uniquely identifies the item listing. The ID is generated by eBay after an item is listed. You cannot choose or revise this value.<br> <br> Also applicable to Half.com. For Half.com, you can specify either ItemID or SellerInventoryID in a ReviseItem request to uniquely identify the listing.<br> <br> In order retrieval calls (such as, GetOrders), use the OrderLineItemID (which is a concatenation of ItemID and TransactionID to uniquely identify an order line item. With multi-quantity listings, a single ItemID can be associated with more than one TransactionID. (For single-quantity listings, the TransactionID is 0.)<br> <br> In GetItemRecommendations, the item ID is required when the value of ListingFlow is ReviseItem or RelistItem, but it is not applicable when the value of ListingFlow is AddItem.<br> <span class="tablenote"><b>Note:</b> Although we represent item IDs as strings in the schema, we recommend you store them as 64-bit signed integers. If you choose to store item IDs as strings, allocate at least 19 characters (assuming decimal digits are used) to hold them. eBay will increase the size of IDs over time. Your code should be prepared to handle IDs of up to 19 digits. For more information about item IDs, see <a href="http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=468">Common FAQs on eBay Item IDs and other eBay IDs</a> in the Knowledge Base.</span>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ListingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Various details about a listing, some of which are calculated or derived after the item is listed. These include the start and end time, converted (localized) prices, and certain flags that indicate whether the seller specified fields whose values are not visible to the requesting user. For GetMyeBayBuying, returned as a self-closed element if no listings meet the request criteria. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeListingDetailsType
	 */
	public $ListingDetails;
	/**
	 * The ListingDesigner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the detail data for the Listing Designer theme and template (if either are used), which can optionally be used to enhance the appearance of the description area of an item's description. See ListingDesignerType for its child elements. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeListingDesignerType
	 */
	public $ListingDesigner;
	/**
	 * The ListingDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the number of days the seller wants the listing to be active (available for bidding/buying). The duration specifies the seller's initial intent at listing time. The end time for a listing is calculated by adding the duration to the item's start time. If the listing ends early, the value of the listing duration does not change. When a listing's duration is changed, any related fees (e.g., 10-day fee) may be debited or credited (as applicable). <br><br> The valid choice of values depends on the listing format (see Item.ListingType). For a list of valid values, call GetCategoryFeatures with DetailLevel set to ReturnAll and look for ListingDurations information. <br><br> When you revise a listing, the duration cannot be reduced if it will result in ending the listing within 24 hours of the current date-time. You are only allowed to increase the duration of the listing if fewer than 2 hours have passed since you initially listed the item and the listing has no bids. You can decrease the value of this field only if the listing has no bids (or no items have sold) and the listing does not end within 12 hours. <br><br> Required for Half.com (but only specify GTC).
	 * @var token
	 */
	public $ListingDuration;
	/**
	 * The ListingEnhancement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Describes listing upgrades that sellers can select for a fee, such as the BoldTitle upgrade. Also includes feature packs for saving on listing upgrades. See <a href="http://pages.ebay.com/help/sell/ia/promoting_your_item.html">Listing Upgrades</a> in the eBay Web site online help. <br><br> You cannot remove listing upgrades when you revise a listing. When you relist an item, use DeletedField to remove a listing upgrades. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeListingEnhancementsCodeType
	 */
	public $ListingEnhancement;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format of the listing the seller wants to use, such as auction style or fixed price.<br> <br> Optional for eBay.com listings (defaults to auction style) in AddItem and VerifyAddItem. Do not specify ListingType for eBay.com listings in ReviseItem. (You can't modify the listing type of an active eBay listing.<br> <br> Required for Half.com listings (and the value must be Half) in AddItem, VerifyAddItem, and ReviseItem. If you don't specify Half when revising Half.com listings, ReviseItem won't use the correct logic and you may get strange errors (or unwanted side effects in the listing, even if no errors are returned). <br><br>
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the geographical location of the item (along with Country). When you revise a listing, you can add or change this value only if the listing has no bids (or no items have sold) and it does not end within 12 hours. <br><br> If you do not specify Location, you must specify Item.PostalCode. If you specify a postal code, but do not specify a location, then the location is given a default value derived from the postal code. <br><br> For the Classified Ad format for eBay Motors vehicles, the value provided in the Location is used as item location only if the SellerContactDetails.Street and the SellerContactDetails.Street2 are empty. Else, the SellerContactDetails.Street and the SellerContactDetails.Street2 will be used for item location. <br><br> Also applicable as input to AddItem and related calls when you list items to Half.com.
	 * @var string
	 */
	public $Location;
	/**
	 * The LotSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A lot is a set of two or more similar items included in a single listing that must be purchased together in a single order line item. The Item.LotSize value is the number of items in the lot. This field is required if two or more items are including in one listing. <br><br> Lots can be used for auction and fixed price listings. Lot items can be listed only in lot-enabled categories. Call GetCategories to determine if a category supports lots. If the returned CategoryArray.Category.LSD (LotSize Disabled) value is true, the category does not support lots. <br><br> Not applicable to Half.com.
	 * @var int
	 */
	public $LotSize;
	/**
	 * The PartnerCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not currently operational.
	 * @var string
	 */
	public $PartnerCode;
	/**
	 * The PartnerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not currently operational.
	 * @var string
	 */
	public $PartnerName;
	/**
	 * The PaymentMethods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Identifies the payment method (such as PayPal) that the seller will accept when the buyer pays for the item. For the AddItem family of calls, at least one payment method is required. <br><br> Use GetCategoryFeatures to determine the payment methods that are allowed for a category on a site. For example, the response data of GetCategoryFeatures will show that on the US site, most categories only allow electronic payments. Also use GetCategoryFeatures to determine the default payment method for a site (see SiteDefaults.PaymentMethod). If a seller does not include at least one payment method in a Add/Revise/RelistItem API call, the default payment method is used for the listing. <br><br> Do not use GeteBayDetails to determine the payment methods for a site. <br><br> For a DE or AT seller's items that are subject to the new eBay payment process, only one PaymentMethod field will be returned, and the value will always be 'StandardPayment'. As of August 2011, new sellers listing on the German (DE) or Austrian (AT) sites are subject to the new eBay payment process, and beginning May 2012 all sellers listing on the DE or AT sites are subject to the new eBay payment process.. <br><br> If you specify multiple PaymentMethods fields, the repeating fields must be contiguous. For example, you can specify PayPalEmailAddress after a list of repeating PaymentMethods fields, but not between them:<br> <br> &lt;PaymentMethods&gt;VisaMC&lt;/PaymentMethods&gt;<br> &lt;PaymentMethods&gt;PayPal&lt;/PaymentMethods&gt;<br> &lt;PayPalEmailAddress&gt;mypaypalemail@ebay.com&lt;/PayPalEmailAddress&gt;<br><br> In general, if you separate repeating instances of a field, the results will be unpredictable. This rule applies to all repeating fields (maxOccurs="unbounded" or greater than 1) in the schema. See "Overview of the Schema" in the Trading API Guide.<br> <br> <span class="tablenote"><b>Note:</b> Required or allowed payment methods vary by site and category. Refer to <a href="http://developer.ebay.com/DevZone/XML/docs/WebHelp/wwhelp/wwhimpl/js/html/wwhelp.htm?context=eBay_XML_API&topic=PaymentMethodDifferences"> Payment Method Differences (PaymentMethod)</a> in the eBay Trading API Guide for information to help you determine which payment methods you are required or allowed to specify. </span><br> <br> This field is not applicable to eBay Real Estate Ad format, Classified Ad format, or Half.com listings. <br> <br> <b>For ReviseItem and RelistItem only:</b> A listing must have at least one valid payment method. When you revise or relist an item and you specify a payment method that is invalid for the target site, eBay ignores the invalid payment method, applies the other valid changes, and returns a warning to indicate that the invalid payment method was ignored. If multiple payment methods were invalid, the warning indicates that they were all ignored. If you modify the listing so that it includes no valid payment methods, an error is returned. This situation could occur when the seller removes all valid payment methods or when all the payment methods specified for the item are no longer valid on the target site.<br> <br><b>For GetProducts only:</b> Only PayPal is returned in product search results.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The PayPalEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Valid PayPal email address for the PayPal account that the seller will use if they offer PayPal as a payment method for the listing. eBay uses this to identify the correct PayPal account when the buyer pays via PayPal during the checkout process. (As a seller can have more than one PayPal account, you cannot necessarily rely on PayPal account data returned from GetUser for details about the account associated with the PayPal email address that the seller specifies.)<br> <br> Required if seller has chosen PayPal as a payment method (PaymentMethods) for the listing.<br> <br> For digital listings, the seller needs to use an email address that is associated with a PayPal Premier or PayPal business account. <br> <br> <b>For ReviseItem and RelistItem only:</b> To remove this value when you revise or relist an item, use DeletedField. When you revise a listing, if the listing has bids (or items have been sold) or it ends within 12 hours, you can add PayPalEmailAddress, but you cannot remove it.<br> <br> Not applicable to eBay Motors listings. <br> Not applicable to Half.com.
	 * @var string
	 */
	public $PayPalEmailAddress;
	/**
	 * The PrimaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category ID for the first (or only) category in which the item is listed (or will be listed, if the item is new). A number of listing features have dependencies on the primary category. We have pointed out a few of the notable dependencies below. See the descriptions of the fields you are using to determine whether the feature you're supporting depends on the listing's primary category.<br> <br> <b>For the AddItem family of calls:</b> Use calls like GetCategories and GetCategoryFeatures to determine valid values for the site on which you are listing (see the eBay Web Services Guide for information on working with categories). Also see Item.CategoryMappingAllowed and Item.CategoryBasedAttributesPrefill.<br> <br> There are a number of categories on some eBay sites that always add the Gallery feature (for free) when you include a picture in the listing and you don't specify the Gallery feature yourself. See GalleryType for information about fees that could be charged if you change the category in these cases.<br> <br> Coming soon: If you list with a catalog product, eBay may drop the primary category you specify and use the category that is associated with the product instead, if different.<br> <br> Not applicable to Half.com.<br> <br> <b>For ReviseItem only:</b> When revising a listing, you can change the primary category only if an item has no bids (or no items have sold) and the listing does not end within 12 hours. <br> <br> If you change the listing category, any Item Specifics (attributes) that were previously specified may be dropped from the listing if they aren't valid for the new category. See Item.AttributeSetArray. For the eBay US site, we suggest that you avoid including a category ID when you list with an external product ID, such as ISBN. See the KB article listed below for details.<br> <br> You cannot change the meta-categories for vehicles (i.e., you cannot change a truck to a motorcycle), but you can change the leaf category (e.g., change one motorcycle subcategory to another motorcycle subcategory). See the eBay Web Services Guide for additional rules. International sites (such as the eBay Germany site) have similar rules for revising vehicle categories. <br> <br> When you list an event ticket on the US site, you must specify the Event Tickets category as the primary category. Also, when revising a listing, you cannot change the primary category from another category to the Event Tickets category. (You need to specify the Event Tickets category when you initially list the item.)<br> <br> <b>For GetItemRecommendations only:</b> For GetItemRecommendations, use this value to control the category that is searched for recommendations. Specify the category in which the item will be listed. See <a href= "http://developer.ebay.com/DevZone/XML/docs/WebHelp/wwhelp/wwhimpl/js/html/wwhelp.htm?context=eBay_XML_API&topic=EngineRecs" >Getting Recommendations to Improve a Listing</a> in the eBay Web Services guide for differences in validation rules depending on whether you are using the Listing Analyzer engine, Product Pricing engine, or Suggested Attribute engine. <br> <b>For GetProducts:</b> Use GetCategories if you need to determine the name of the category.
	 * @var EbayTradingTypeCategoryType
	 */
	public $PrimaryCategory;
	/**
	 * The PrivateListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>PrivateListing</b> boolean field can be used by the seller in the Add/Relist/Revise family of calls to obscure item title, item ID, and item price from post-order Feedback comments left by buyers. Typically, it is not advisable that sellers use the Private Listing feature, but using this feature may be appropriate for sellers listing in Adults Only categories, or for high-priced and/or celebrity items. <br> <br> For <b>GetItem</b>, order retrieval calls, and other calls that retrieve the Item object, the <b>PrivateListing</b> field is only returned if 'true'. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $PrivateListing;
	/**
	 * The ProductListingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies stock product information to include in a listing. Only applicable when listing items with product details. See the eBay Trading API Guide for information on listing with product details.<br> <br> As ProductID and ProductReferenceID are defined by eBay, they provide the most reliable means to identify a product. If you use one of the other industry identifiers (e.g., UPC), eBay attempts to find a matching product on your behalf and use it in the listing. If no match is found, you can try using the catalog search calls (such as GetProductSearchResults or GetProducts) to find a ProductID or ProductReferenceID.<br> <br> When you specify ProductListingDetails, you must specify at least one of the available identifiers (e.g., UPC). If you specify more than one (such as UPC and BrandMPN), eBay uses the first one that matches a product in eBay's catalog system. (This may be useful if you aren't sure which identifier is more likely to result in a match.)<br> <br> When you specify TicketListingDetails, you must specify the Event Tickets category as the primary category. For other product identifiers: If you list in two categories and the primary and secondary categories are both catalog-enabled, this product identifier should correspond to the primary category (not the secondary category). If only one category is catalog-enabled, the product identifier should correspond to the catalog-enabled category. (Use GetCategory2CS to determine which categories are catalog-enabled.)<br> <br> <span class="tablenote"><b>Note:</b> As a general rule, the primary category is required. However, if you have trouble finding a catalog-enabled category, you may be able to omit the primary category (except for event tickets). If you do, eBay will attempt to determine an appropriate category based on the product ID (if we find a matching product). When you specify a category that corresponds to the product (according to GetCategory2CS), your category is used. </span> If we don't find a match in our catalogs, we will list the item in the primary category you specified, without product details. We will not pre-fill the listing's item specifics in this case, and the identifier won't be surfaced in View Item or returned in GetItem. However, it will still be indexed for search on eBay, and it will be searchable by more third-party natural search engines. As this can help buyers find your listing more easily, we strongly recommend that you always use ProductListingDetails to pass in these values. (This product indexing behavior is only available if you use UPC, ISBN, EAN, or GTIN in ProductListingDetails. It is not available if you use ExternalProductID, and it may not be available if you exclusively use Item Specifics.)<br> <br> Either Item.ExternalProductID or Item.ProductListingDetails can be specified in an AddItem request, but not both. (ExternalProductID is no longer recommended.) <br> <br> <b>For ReviseItem and RelistItem only:</b> If a listing includes product details and you change a category, the rules for continuing to include product details depend on whether or not the new category is mapped to a characteristic set associated with the same product ID. When you revise a listing, if it has bids or it ends within 12 hours, you cannot change the product ID and you cannot remove existing product data. However, you can change or add preferences such as IncludeStockPhotoURL, UseStockPhotoURLAsGallery, and IncludePrefilledItemInformation. To delete all catalog data when you revise or relist an item, specify Item.ProductListingDetails in DeletedField and don't pass ProductListingDetails in the request.<br> <br> <b>For GetItemRecommendations only:</b> For GetItemRecommendations, see the Trading API Guide for validation rule differences when using the Product Pricing engine.<br> <br> <b>For GetMyeBayBuying only:</b> When products have been added to a buyer's Wish List, the product information is returned in ItemArray.Item.ProductListingDetails within the UserDefinedList node. Products can be added to a buyer's Wish List only. Does not apply to any other user-defined list. The ProductListingDetails node is not included for items in the Wish List. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeProductListingDetailsType
	 */
	public $ProductListingDetails;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Note:</b> In late October 2010, for the US site, users who are registering as eBay sellers for the first time are subject to seller limits which limit the quantity of items and/or the total listing value of the items. This applies to new sellers, not currently to existing sellers. (The GetMyeBaySelling call returns the remaining item quantity and remaining total value under the limits for the seller, if any such limits exist for the seller.) If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. For auctions, the value limits apply to the start price, not the final sale amount. For more information, see the link to Seller Limits below. <br> <br> The meaning of this value depends on the context.<br> <br> <b>For AddItem family of calls:</b> The Quantity value for auction listings must always be 1. For a fixed-price listing, the Quantity value indicates the number of identical items the seller has available for sale in the listing. If variations are specified in <b>AddFixedPriceItem</b> or <b> VerifyAddFixedPriceItem</b>, the Item.Quantity is not required since the quantity of variations is specified in Variation.Quantity instead. See the <a href="http://pages.ebay.com/help/sell/listing-variations.html">Creating a listing with variations</a> eBay Help page for more information on variations. <br><br> <b>For ReviseItem and ReviseFixedPriceItem:</b> This value can only be changed for a fixed-price listing with no variations. The quantity of variations is controlled in the Variation.Quantity field and the Item.Quantity value for an auction-style listing should always be 1. <br><br> <b>For RelistItem and RelistFixedPriceItem:</b> Like most fields, when you use RelistItem or RelistFixedPriceItem, Quantity retains its original value unless you specifically change it. This means that the item is relisted with the value that was already in Quantity, not with the remaining quantity available. For example, if the original Quantity value was 10, and 3 items have been sold, eBay sets the relisted item's Quantity to 10 by default, and not 7. So, we strongly recommend that you always set Quantity to the correct value (your actual quantity available) in your relist requests.<br> <br> When eBay auto-renews a GTC listing (ListingDuration=GTC) on your behalf, eBay relists with correct quantity available. <br> <br> <b>For GetSellerEvents:</b> Quantity is only returned for listings where item quantity is greater than 1. <br><br> <b>For GetItem and related calls:</b> This is the total of the number of items available for sale plus the quantity already sold. To determine the number of items available, subtract SellingStatus.QuantitySold from this value. Even for items that supported Dutch auctions, where one of several items can be purchased during the auction, this number does not change. <br><br> <b>For order line item calls with variations:</b> In GetItemTransactions, Item.Quantity is the same as GetItem (the total quantity across all variations). In GetSellerTransactions, Transaction.Item.Quantity is the total quantity of the applicable variation (quantity available plus quantity sold). <br> <br> <b>For GetDispute:</b> Quantity is the number of items being raised in the dispute. <br> <br> For SetCart input, this is only required if the parent container is submitted. <br><br> Also applicable to Half.com (valid range 1 to 1000). You can revise this field for Half.com listings. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var int
	 */
	public $Quantity;
	/**
	 * The PrivateNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A note a user makes on an item in their My eBay account. The note is prefaced with the words My Note. For eBay.com, only GetMyeBayBuying and GetMyeBaySelling (not GetItem) return this field, and only if you pass IncludeNotes in the request. Only visible to the user who created the note. <br><br> Not supported as input in ReviseItem. Use SetUserNotes instead. <br><br> <b>For GetMyeBayBuying</b> In WatchList, notes for variations are only returned at the Item level, not the variation level. They are only set if you specified ItemID (if no purchases) or ItemID and VariationSpecifics (if there are purchases) in SetUserNotes (or selected the equivalent in the My eBay UI on the site). <br><br> In WonList, notes for variations are only returned at the Item level, not the variation level. They are only set if you specified ItemID and TransactionID in SetUserNotes (or selected the equivalent in the My eBay UI on the site). <br><br> Not applicable to Half.com (instead, use Item.AttributeArray.Attribute.Value.ValueLiteral for Half.com notes.)
	 * @var string
	 */
	public $PrivateNotes;
	/**
	 * The RegionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : No longer used by any site.
	 * @var string
	 */
	public $RegionID;
	/**
	 * The RelistLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable only to re-listing an item. If true, creates a link in the item's old listing for the item that points to the new relist page, which accommodates users who might still look for the item under its old item ID. Not applicable to Half.com.
	 * @var boolean
	 */
	public $RelistLink;
	/**
	 * The ReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The lowest price at which the seller is willing to sell the item. (StartPrice must be lower than ReservePrice.) Not all categories support a reserve price. See GetCategories and "Determining Whether a Category Supports Reserve Prices" in the Trading API Guide. In calls that retrieve item data, ReservePrice only has a non-zero value for listings with a reserve price and where the user requesting the item data is also the item's seller. Not applicable to fixed- price items or ad format listings.<br> <br> You can remove the reserve price of a US eBay Motors listing if the category allows it, the current reserve price has not been met, and the reserve price is at least $2.00 more than the current high bid. In this case, if the item has bids, the reserve price is set to $1.00 over the current high bid. The next bid meets the reserve and wins. See the Fees Overview on the eBay Web site for information about fee credits that may be available when the reserve price is removed for a Motors listing. See the Trading API Guide for validation rules when revising US Motors listings.<br> <br> If relisting an item, the seller must set the ReservePrice to a value equal or less than the value of of ReservePrice when the listing ended. If the ReservePrice is set higher than this value (such as the ReservePrice set when the item was first listed), an error will occur. <br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $ReservePrice;
	/**
	 * The ReviseStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An output value only, indicates whether an item has been revised since the listing became active and, if so, which among a subset of properties have been changed by the revision. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeReviseStatusType
	 */
	public $ReviseStatus;
	/**
	 * The ScheduleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Allows the user to specify the time that the listing becomes active on eBay. To schedule the listing start time, specify a time in the future in GMT format. In GetItem and related calls, the scheduled time is returned in StartTime. For ReviseItem, you can modify this value if the currently scheduled start time is in the future. <br><br> When you schedule a start time, the start time is randomized within 15-minute intervals. Randomized start times applies to the following sites: <br> <code>AT, BEFR, BENL, CH, DE, ES, FR, IE, IT, NL, PL, UK</code> <br><br> Also see the following article in the Knowledge Base: <a href= "http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1473" >Why scheduled time is sometimes getting reset</a>. <br><br> Not applicable to Half.com.
	 * @var dateTime
	 */
	public $ScheduleTime;
	/**
	 * The SecondaryCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID for second category in which the item is listed (also see Item.PrimaryCategory). <br><br> <b>For the AddItem family of calls:</b> Listing an item in a second category is optional. Also see Item.CategoryMappingAllowed and Item.CategoryBasedAttributesPrefill. <br> <br> Not applicable to Half.com. <br> <br> On the eBay UK, Ireland, Germany, Austria, Switzerland, and Italy sites you can list Store Inventory listings in two categories. On the eBay US and other sites, you cannot list Store Inventory listings in two categories.<br> <br> You cannot list US eBay Motors vehicles in two categories. However, you can list Parts & Accessories in two categories. The Final Value Fee is based on the primary category in which the item is listed. Furthermore, you can list the same item in an eBay Motors Parts & Accessories category and in an eligible eBay category, as long as the primary category is associated with the site on which you are listing. That is, the two categories can be a mix of Motors Parts & Accessories and eBay site categories. (Real Estate, Mature Audience (adult), and Business & Industrial categories are not eligible for listing in two categories in this manner.) For example, if you list on Motors, the primary category could be 6750 (eBay Motors > Parts & Accessories > Apparel & Merchandise > Motorcycle > Jackets & Leathers), and the secondary category could be 57988 (eBay > Clothing, Shoes > Accessories > Men's Clothing > Outerwear). If you list on the main eBay site, the primary category could be 57988 and the secondary category could be 6750. <br> <br> If eBay has designated a category as a value category (see ValueCategory in GetCategoryFeatures), items in that category cannot be listed in two categories. For example, if your AddItem request includes a primary or secondary category that is a value category, then eBay drops SecondaryCategory and lists the item with only the PrimaryCategory you selected. Also, if the listing request includes item specifics (in ItemSpecifics or AttributeSetArray) that are associated with SecondaryCategory, eBay drops those values when we drop SecondaryCategory. (The same logic is used if you revise an existing listing to add a secondary category or to change one of the categories: If either the primary or secondary category is a value category, eBay drops the secondary category from your request.)<br> <br> To remove this value when relisting an item, use DeletedField. <br><br> <b>For ReviseItem only:</b> When revising a listing, you can add, remove, or change the secondary category only if the listing has no bids (or no items have sold) and it does not end within 12 hours. If you change the secondary category, any corresponding Item Specifics (attributes) that were previously specified may be dropped from the listing if they aren't valid for the category. See Item.AttributeSetArray.<br> <br> When you revise an item, you can change the secondary category from a Motors Parts & Accessories category to an eBay category or vice versa if the listing has no bids (or no items have sold) and it does not end within 12 hours. <br> <br> <b>For GetItemRecommendations only:</b> For GetItemRecommendations, use this to control the category that will be searched for recommendations. Specify the category in which the item will be listed. See the Trading API Guide for differences in validation rules depending on whether you are using the Listing Analyzer engine, Product Pricing engine, or Suggested Attributes engine.
	 * @var EbayTradingTypeCategoryType
	 */
	public $SecondaryCategory;
	/**
	 * The FreeAddedCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID for a second category that eBay added as a free promotion. You cannot add this yourself. Only returned if the item was listed in a single category and eBay added a free second category. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeCategoryType
	 */
	public $FreeAddedCategory;
	/**
	 * The Seller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about this listing's seller. <br> <br> Not applicable to Half.com. <br><br> Returned by GetItemsAwaitingFeedback if Buyer is making the request.
	 * @var EbayTradingTypeUserType
	 */
	public $Seller;
	/**
	 * The SellingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Various details about the current status of the listing, such as the current number of bids and the current high bidder. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeSellingStatusType
	 */
	public $SellingStatus;
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.<br> <br> New users who list their first items in selected categories on the US site must specify at least one domestic shipping service. This applies to a category if GetCategoryFeatures returns true for Category.ShippingTermsRequired.<br> <br> For multi-quantity Store Inventory Format listings and for multi-quantity Fixed Price listings, a seller can revise all shipping details of the listing (except for sales tax and for shipping type of Freight) for all unsold items. This applies to both domestic and international shipping. Checkout is not affected for those who bought items prior to the seller's shipping changes--the shipping details that were in effect at the time of purchase are used for that buyer at the time of checkout.<br> <br> Shipping details are not applicable to Real Estate listings and Half.com. <br> To avoid loss of shipping details when revising a listing, you must include all ShippingDetails fields that were originally provided. <br> <br><b>GetMyeBayBuying, GetMyeBaySelling</b>: ShippingDetails is not returned (with a request version 677 or higher) if (a) the item is marked as local pickup only with a cost of 0 or (b) ShipToLocation is None. (With a request version lower than 677, ShippingDetails is returned.)
	 * @var EbayTradingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ShipToLocations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to which the seller is willing to ship, regardless of shipping service. The country of the listing site is added by eBay. Use GeteBayDetails with a DetailName of ShippingLocationDetails to determine which international locations are valid for the site. Omit ShipToLocations if you want to ship only within the country of the listing site. To state that you do not wish to ship at all, set ShipToLocations to None. ReviseItem can add a ShipToLocations. On output, ShipToLocations is the collection of all input item-level ShipToLocations plus international shipping service-level ShipToLocation values. <br><br> If you have specified a region to which you will ship (such as Asia), you can use ExcludeShipToLocation to exclude certain countries within that region to where you will not ship (such as Afghanistan). <br><br> Not applicable to Half.com.
	 * @var string
	 */
	public $ShipToLocations;
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the site on which the item is listed. The listing site affects the business logic and validation rules that are applied to the request, which in turn affect the values that are returned in the response, as well as values that appear on the eBay Web site. For example, the listing site can affect the validation of Category in listing requests, international business seller requirements, the values of converted (localized) prices in responses, the item-related time stamps that are displayed on the eBay Web site, the visibility of the item in some types of searches, and other information. In some cases, the rules are determined by a combination of the site, the user's registration address, and other information. You cannot change the site when you revise a listing.<br> <br> When you specify Item.Site in AddItem or AddFixedPriceItem, it must be consistent with the numeric site ID that you specify in the request URL (for the SOAP API) or the X-EBAY- API-SITEID header (for the XML API).<br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Note:</b> In late October 2010, for the US site, users who are registering as eBay sellers for the first time are subject to seller limits which limit the quantity of items and/or the total listing value of the items. This applies to new sellers, not currently to existing sellers. (The GetMyeBaySelling call returns the remaining item quantity and remaining total value under the limits for the seller, if any such limits exist for the seller.) If a call to add an item or revise an item would result in the exceeding of these limits, the add item or revise item call will fail. For auctions, the value limits apply to the start price, not the final sale amount. For more information, see the link to Seller Limits below. <br> <br> The original price of the item at listing or re-listing time. If this value changes when the item is revised, the new value becomes the original price. <br><br> <b>For auction listings:</b> Competitive bidding starts at this value. Once at least one bid has been placed, StartPrice remains the same but CurrentPrice is incremented to the amount of each succeeding bid. If ReservePrice is also specified, the value of StartPrice must be lower than the value of ReservePrice. <br><br> <b>For input on fixed-price listings: </b> This is the constant price at which a buyer may purchase the item. <br><br> <b>GetMyeBaySelling</b> does not return Item.StartPrice for fixed price items--it returns Item.SellingStatus.CurrentPrice. <br><br> <b>For AddFixedPriceItem and VerifyAddFixedPriceItem:</b> Required when no variations are specified. If variations are specified, use Variation.StartPrice for each variation instead. <br> <br> Also applicable to Half.com (valid range 0.75 to 9999.99). You can revise this field for Half.com listings.
	 * @var EbayTradingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The Storefront
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information related to the item in the context of a seller's eBay Store. Applicable for auction and fixed-price listings listed by eBay Stores sellers.<br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeStorefrontType
	 */
	public $Storefront;
	/**
	 * The SubTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subtitle to use in addition to the title. Provides more keywords when buyers search in titles and descriptions. You cannot use HTML in the Subtitle. (HTML characters will be interpreted literally as plain text.) If you pass any value, this feature is applied (with applicable fees).<br> <br> Not applicable to listings in US eBay Motors passenger vehicle, motorcycle, and "other vehicle" categories or to listings in CA eBay Motors passenger vehicle and motorcycle categories. For eBay Motors categories that do not support this field, use Item Specifics (AttributeSetArray) to specify the vehicle subtitle.<br> <br> When you revise a item, you can add, change, or remove the subtitle.<br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $SubTitle;
	/**
	 * The TimeLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). See Data Types in the Trading API Guide for information about this format. For ended listings, the time left is PT0S (zero seconds). Not applicable to Half.com.
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the item as it appears in the listing or search results. Title is required for most items. This field is only optional if you leverage Pre-filled Item Information by using the Item.ProductListingDetails or Item.ExternalProductID containers. <br><br> You cannot use HTML or JavaScript in the Title. (HTML characters will be interpreted literally as plain text.) <br><br> <b>For the AddItem family of calls</b>: Not applicable to Half.com. <br> <br> <b>For ReviseItem and ReviseFixedPriceItem</b> You can only add or change the item title if the listing has no bids (for auctions) or sales (for fixed-price listings) and the listing does not end within 12 hours.<br> <br> <b>For GetItemRecommendations</b>: More keywords in the title usually result in more relevant Listing Analyzer recommendations. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title has increased to 80 characters as of September 2011. </span>
	 * @var string
	 */
	public $Title;
	/**
	 * The UUID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Universally unique constraint tag. Use UUID to ensure that you only list a particular item once, particularly if you are listing many items at once. If you add an item and do not get a response, resend the request with the same UUID. If the item was successfully listed the first time, you will receive an error message for trying to use a UUID that you have already used. The error will also include the item ID for the duplicated item and a boolean value indicating whether the duplicate UUID was sent by the same application. <br><br> We recommend you use Item.UUID with calls that add item objects (for example, AddItem and RelistItem). For calls that modify an existing item, such as ReviseItem, use InvocationID instead. <br><br> The UUID can only contain digits from 0-9 and letters from A-F and must be 32 characters long. The UUID value must be unique across all item listings on all sites. <br><br> Also applicable as input to AddItem and related calls when you list items to Half.com.
	 * @var EbayTradingTypeUUIDType
	 */
	public $UUID;
	/**
	 * The VATDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for eBay's VAT features. A business seller can choose to offer an item exclusively to bidders and buyers that also represent businesses. Only applicable when the item is listed in a B2B-enabled category (on a site that supports B2B business features).<br> <br> <span class="tablenote"><strong>Note:</strong> The India site (Global ID 203) does not accept VAT values in item listings. If you submit an item to the India site with a VAT value, eBay generates a warning message that indicates the listing was accepted, but the VAT value was removed. To include the VAT, relist the item with a Price value that includes the VAT. Sellers are solely responsible for compliance relating to tax legislation in India. </span> <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeVATDetailsType
	 */
	public $VATDetails;
	/**
	 * The SellerVacationNote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller is on vacation (as determined by the seller's store preferences) in two cases: i.) the item is a Store Inventory item and the seller has chosen to hide Store Inventory items while on vacation, and ii.) the seller has chosen to add a message to listed items while on vacation. <br><br> Not applicable to Half.com.
	 * @var string
	 */
	public $SellerVacationNote;
	/**
	 * The WatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of watches placed on this item from buyers' My eBay accounts. Specify IncludeWatchCount as true in the request. Returned by GetMyeBaySelling only if greater than 0. <br> <br> Not applicable to Half.com.
	 * @var long
	 */
	public $WatchCount;
	/**
	 * The HitCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of page views for the item. This number is calculated by eBay and cannot be set via the API. Returned if the hit counter type is BasicStyle, RetroStyle, or HiddenStyle. For HiddenStyle, HitCount is returned only if the requestor is the item's seller.
	 * @var long
	 */
	public $HitCount;
	/**
	 * The DisableBuyerRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true: all buyer requirements (from <b>Item.BuyerRequirementDetails</b> or Buyer requirements preferences in My eBay) are ignored. <br> <br> If false (or omitted): <b>Item.BuyerRequirementDetails</b> or Buyer requirements preferences are used, with <b>Item.BuyerRequirementDetails</b> having the higher precedence.
	 * @var boolean
	 */
	public $DisableBuyerRequirements;
	/**
	 * The BestOfferDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for BestOffer properties associated with the item. <br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeBestOfferDetailsType
	 */
	public $BestOfferDetails;
	/**
	 * The LocationDefaulted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : True if eBay provided a central location as a result of the user not specifying a location. This typically occurs when the seller specifies PostalCode without Location. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $LocationDefaulted;
	/**
	 * The ThirdPartyCheckout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : As of July 1, 2011, third-party applications can no longer be used for checkout. All purchased items must go through the eBay Checkout flow. <br><br> This field can no longer be passed into the Add Item family of calls. <br><br> This field will be returned in some calls (that return the Item container) if it was set to True at listing time (for listings created before July 1, 2011). If this field was set to True at listing time, the user must include this field and set it to False in the Relist and Revise Item family of calls. Otherwise, the caller may get an error.
	 * @var boolean
	 */
	public $ThirdPartyCheckout;
	/**
	 * The UseTaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller's tax table is to be used when applying and calculating sales tax for an order line item. A sales tax table can be created programmatically using the SetTaxTable call, or it can be created manually in My eBay's Selling Preferences. If UseTaxTable is set to true, the values contained in the seller's sales tax table will supersede the values contained in the Item.ShippingDetails.SalesTax container (if included in the request).<br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $UseTaxTable;
	/**
	 * The GetItFast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller has committed to the GetItFast shipping rules for this listing. If the GetItFast field is set to true, and the seller's first priority domestic shipping service (the service that has the ShippingServicePriority field set to 1) is an expedited shipping service, then every shipping service offered for this listing is considered a GetItFast service. Therefore, the seller commits to delivering the item to the buyer-selected shipping service within one day. <br> <br> Not supported for UK Store Inventory format items. <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The BuyerResponsibleForShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable for listings in vehicle categories on the US eBay Motors site and eBay Canada site. (No business effect if specified for other categories or sites, as the Web site will not display the information to buyers.) If true, the buyer is responsible for vehicle pickup or shipping. If false, specify vehicle shipping arrangements in the item description. Default is true. (The description can also include vehicle shipping arrangements when this value is true.) If the item has bids or ends within 12 hours, you cannot modify this flag. Do not specify ShippingDetails.ShippingServiceOptions for vehicle listings. <br><br> If true and the listing is on the US eBay Motors site, and you want the listing to be visible on the eBay Canada site, set Item.ShipToLocations to CA. If true and the listing is on the eBay Canada site , and you want your listing to be visible on the US eBay Motors site, set Item.ShipToLocations to US. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $BuyerResponsibleForShipping;
	/**
	 * The LimitedWarrantyEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This feature is no longer supported. This field will be removed from the schema in an upcoming release. Applicable to US eBay Motors vehicle listings only. If false, the vehicle was not considered for a limited warranty by eBay. If your application lists Motors vehicles, you were required to provide the seller with an opportunity to indicate whether the vehicle has not been modified and is not a special type (e.g., Corvette ZR1). If LimitedWarrantyEligible was passed in, it meant the application presented the seller with checkboxes to indicate this information. If true, the seller verified that the vehicle has not been modified and is not a special type. If false, the seller verified that vehicle has been modified or it is a special type. Passing a value of true did not guarantee that eBay would offer a limited warranty. It only made the listing eligible for consideration. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $LimitedWarrantyEligible;
	/**
	 * The eBayNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns a note from eBay displayed below items in the user's My eBay account. <br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $eBayNotes;
	/**
	 * The QuestionCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of questions buyers have posted about the item. Returned only if greater than 0. <br> <br> Not applicable to Half.com.
	 * @var long
	 */
	public $QuestionCount;
	/**
	 * The Relisted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether or not the item is a relisted item. This value is determined by eBay and cannot be set. Only returned if the item was relisted. <br><br> Note that when an item is relisted and is given a new ItemID, the original item shows Relisted = true, but the new item does NOT show Relisted = true. In this context, the new item is a new listing, not a "Relisted" one.
	 * @var boolean
	 */
	public $Relisted;
	/**
	 * The QuantityAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how many of a certain item are available.<br> <br> Not applicable to Half.com.
	 * @var int
	 */
	public $QuantityAvailable;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. A seller can specify a SKU when listing an item with AddItem and related calls. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> A SKU is not required to be unique, when you track listings by their ItemID (the default tracking method). A seller can specify a particular SKU on one item or on multiple items. Different sellers can use the same SKUs.<br> <br> If you want to use SKU instead of ItemID as a unique identifier (such as when retrieving items and orders), you can set Item.InventoryTrackingMethod to SKU in AddFixedPriceItem and related calls. In this case, the SKU must be unique across your (the seller's) active listings. Note that if you relist the item, you must reset Item.InventoryTrackingMethod to SKU; otherwise the relisted item will default to ItemID as the tracking method. <br> <br> If both ItemID and SKU are specified in item-retrieval and order-retrieval calls that support the use of SKU as a unique identifier, the ItemID value takes precedence and is used to identify the listing.<br> <br> For multi-variation listings, the SKU can be used to uniquely identify a variation that is being revised or relisted. If InventoryTrackingMethod is ItemID, an ItemID is also required. When both SKU and VariationSpecifics are passed in the request, the variation specifics take precedence as the unique identifier. <br> <br> <span class="tablenote"><b>Note:</b> The eBay Web site UI cannot identify listings by SKU. For example, My eBay pages and Search pages all identify listings by item ID. When a buyer contacts you via eBay's messaging functionality, eBay uses the item ID as the identifier. Buyer-focused APIs (like the Shopping API) also do not support SKU as an identifier. </span> <b>For revising and relisting only:</b> To remove a SKU when you revise or relist an item, use DeletedField. (You cannot remove a SKU when Item.InventoryTrackingMethod is set to SKU.)<br> <br> For GetMyeBaySelling, this is only returned if set. <br> Not applicable to Half.com.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The CategoryBasedAttributesPrefill
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Allows eBay to auto-fill some of a listing's Item Specifics (attribute) values based on the listing's category (or categories). Auto-filling attributes based on a category is not the same as using Pre-filled Item Information based on a catalog product (see ProductListingDetails). If true, also specify Item.CategoryMappingAllowed with a value of true. (Alternatively, you can auto-fill attributes on the client side by using mapping meta-data returned by GetAttributesCS.) See the Trading API Guide for more information. Ignored if the category does not support auto-filling attributes.<br> <br> If you also pass in attributes in AttributeSetArray, your values will override any auto-filled values for the same attributes. Once you have overridden the value of an auto-filled attribute for a given listing, eBay will not auto-fill it on subsequent ReviseItem requests (even if you remove the overridden value). <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $CategoryBasedAttributesPrefill;
	/**
	 * The SearchDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for values that indicate whether a listing uses the Buy It Now feature, whether a listing is no more than one day old, and whether a listing has an image associated with it. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeSearchDetailsType
	 */
	public $SearchDetails;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Postal code of the place where the item is located. This value is used for proximity searches. To remove this value when revising or relisting an item, use DeletedField. If you do not specify PostalCode, you must specify Item.Location. If you specify PostalCode, but do not specify Item.Location, then Item.Location is given a default value derived from the postal code. <br><br> Not applicable to Half.com.
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The ShippingTermsInDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether details about shipping costs and arrangements are specified in the item description. <br> <br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $ShippingTermsInDescription;
	/**
	 * The ExternalProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>This field will be deprecated in a future project. New applications should use ProductListingDetails instead of ExternalProductID for AddItem and related calls.</b><br> <br> Contains an ISBN value, UPC value, EAN value, ticket keywords, or eBay catalog product ID. Causes eBay to list the item with Pre-filled Item Information based on the value you specify. Only applicable to certain categories. See the eBay Trading API Guide for information on the categories that currently support usage of this field. <br> <br> <b>For AddItem and VerifyAddItem only:</b> On the US site, if you are listing in a media category, eBay determines the primary category ID based on the product ID you specify (and CategoryID is usually ignored). To avoid confusion (e.g., at revise/relist time), it's a good idea to avoid specifying the primary category in combination with ExternalProductID. <br> <br> <span class="tablenote"><b>Note:</b> There may be cases when the category ID can't be determined and you get an error. If this does occur, then specify the category ID. </span><br> <br> If you are listing in two categories and both are catalog-enabled, the external ID should be for a product associated with the primary category. If only one category is catalog-enabled, the external ID should be for a product that is associated with the catalog-enabled category. <br> <br> If you are listing an event ticket, the primary category is required, and the external ID must be associated with the primary category.<br> <br> Either Item.ExternalProductID or Item.ProductListingDetails can be specified in an AddItem (or VerifyAddItem) request. Do not specify both. If you use Item.ExternalProductID instead of Item.ProductListingDetails, eBay sets IncludeStockPhotoURL and IncludePrefilledItemInformation to true automatically.<br> <br> Optional for eBay.com listings. Applicable to Half.com listings.<br> <br> <b>For ReviseItem and RelistItem only:</b> ExternalProductID is not applicable when revising and relisting items (use Item.ProductListingDetails instead).<br> <br> <b>For GetItemRecommendations only:</b> In GetItemRecommendations, only applicable when the value of ListingFlow is AddItem. Not applicable when the recommendation engine is ProductPricing.
	 * @var EbayTradingTypeExternalProductIDType
	 */
	public $ExternalProductID;
	/**
	 * The SellerInventoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a Half.com item. Must be an alphanumeric value (with no symbols) that is unique across the seller's active (unsold) inventory on Half.com. For Half.com, you can specify either ItemID or SellerInventoryID in a ReviseItem request to uniquely identify the listing. Only returned from GetOrders if the seller specified a value when the item was listed. You cannot revise this field. <br><br> Not applicable to eBay.com listings.
	 * @var string
	 */
	public $SellerInventoryID;
	/**
	 * The PictureDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data for a picture associated with an item. <br> <br> Not applicable to Half.com.<br> <br> <span class="tablenote"><b>Note:</b> PictureDetails replaces the deprecated SiteHostedPicture and VendorHostedPicture in the response with request version 439 or greater. As SiteHostedPicture and VendorHostedPicture are also no longer recommended on input, applications should use PictureDetails in the input as well. If SiteHostedPicture or VendorHostedPicture are passed in with PictureDetails, PictureDetails takes precedence. </span>
	 * @var EbayTradingTypePictureDetailsType
	 */
	public $PictureDetails;
	/**
	 * The DispatchTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. This time does not include the shipping time (the carrier's transit time).<br> <br> <b>For the AddItem family of calls:</b> Required for listings in certain categories when certain shipping services (with delivery) are offered. See HandlingTimeEnabled in GetCategoryFeatures.<br> <br> The seller sets this to a positive integer value corresponding to the number of days. For a list of allowed values on each eBay site, use DispatchTimeMaxDetails in GeteBayDetails. (Typical values are 1, 2, 3, 4, 5, 10, 15, or 20, but this can vary by site and these may change over time.)<br> <br> Valid for flat and calculated shipping. Does not apply when there is no shipping, when it is local pickup only or it is freight shipping. For example, when ShippingService=Pickup or ShipToLocations=None, then DispatchTimeMax is not required (or it can be 0).<br> <br> To add Get It Fast to listings (for domestic shipping), in addition to setting GetItFast to true, DispatchTimeMax must be set to 1 and the seller must specify at least one qualifying expedited shipping service. <br> <br> <span class="tablenote"><b>Note:</b> Starting June 1, 2012 Top-rated sellers must offer 1-day handling (<b>DispatchTimeMax=1</b>) and accept returns (<b>ReturnPolicy.ReturnsAcceptedOption=ReturnsAccepted</b>) for the item in order for that listing to qualify for the greatest average boost in Best Match and the 20 percent final value fee discount. For more information on changes to eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/sellerinformation/news/eTRSupdate.html">2012 Spring Seller Update</a> page. </span> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and it ends within 12 hours, you can't change this value. If the listing is a GTC listing that has sales or ends within 12 hours (one or the other, but not both), you can add or change this value. If the listing has no bids or sales and more than 12 hours remain before the listing ends, you can add or change the dispatch (handling) time.<br> <br> <b>For GetItem:</b> GetItem returns DispatchTimeMax only when shipping service options are specified for the item and the seller specified a dispatch time.
	 * @var int
	 */
	public $DispatchTimeMax;
	/**
	 * The SkypeEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies that Skype-related information is included with an item listing, including, for example, Skype Voice. Skype-related information provides buttons that enable potential buyers to contact sellers through Skype. Information about Skype is available at www.Skype.com. If all of the prerequisites for adding Skype buttons to listings are met (see the eBay Web Services Guide), you can make communication through Skype available in listings. SkypeEnabled must be true if SkypeID and SkypeContactOption are specified.
	 * @var boolean
	 */
	public $SkypeEnabled;
	/**
	 * The SkypeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Skype name of the seller. Requires that SkypeEnabled is set to true. Available if the seller has a Skype account and has linked it (on the eBay site) with his or her eBay account.
	 * @var string
	 */
	public $SkypeID;
	/**
	 * The SkypeContactOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the Skype contact options supported. Requires that SkypeEnabled is set to true. Available if the seller has a Skype account and has linked it (on the eBay site) with his or her eBay account.
	 * @var EbayTradingTypeSkypeContactOptionCodeType
	 */
	public $SkypeContactOption;
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates, when true, that an item is available by Best Offer.
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The LocalListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates, when true, that an item is available locally.
	 * @var boolean
	 */
	public $LocalListing;
	/**
	 * The ThirdPartyCheckoutIntegration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : As of July 1, 2011, third-party applications can no longer be used for checkout. All purchased items must go through the eBay Checkout flow. <br><br> This field can no longer be passed into the Add Item family of calls. <br><br> This field will be returned in some calls (that return the Item container) if it was set to True at listing time (for listings created before July 1, 2011). If this field was set to True at listing time, the user must include this field and set it to False in the Relist and Revise Item family of calls. Otherwise, the caller may get an error. <br><br> Be aware that you may need to use <b>SetNotificationPreferences</b> to change the <b>ApplicationURL</b> value if you were formerly having Checkout notifications sent to your third-party checkout application. <br><br>
	 * @var boolean
	 */
	public $ThirdPartyCheckoutIntegration;
	/**
	 * The ListingCheckoutRedirectPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the ProStores store name and user name.
	 * @var EbayTradingTypeListingCheckoutRedirectPreferenceType
	 */
	public $ListingCheckoutRedirectPreference;
	/**
	 * The SellerContactDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contact information for sellers using the Classified Ad format for eBay Motors vehicles categories. To remove seller contact information when revising or relisting an item, use DeletedField. The seller contact details for the primary and secondary phone numbers cannot be deleted individually. <br><br> To provide City, State, and Zip code information in SellerContactDetails use the following field:<br> Item.SellerContactDetails.Street2 <br><br> To delete the secondary phone number, for example, you must delete all of the secondary phone fields:<br> Item.SellerContactDetails.Phone2AreaOrCityCode<br> Item.SellerContactDetails.Phone2CountryCode<br> Item.SellerContactDetails.Phone2CountryPrefix<br> Item.SellerContactDetails.Phone2LocalNumber
	 * @var EbayTradingTypeAddressType
	 */
	public $SellerContactDetails;
	/**
	 * The TotalQuestionCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of questions asked about this item. Applies to eBay Motors Pro applications only.
	 * @var long
	 */
	public $TotalQuestionCount;
	/**
	 * The ProxyItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Some listings on the eBay platform originate from eBay affiliates. Depending on the relationship the affiliate has with eBay, there are times when the affiliate retains ownership of the listing. When this occurs the representation of the listing on eBay is considered a proxy item. Proxy items can only be edited using API requests from the applications that originally listed them.
	 * @var boolean
	 */
	public $ProxyItem;
	/**
	 * The ExtendedSellerContactDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Extended contact information for sellers using the Classified Ad format. Specifies the days and hours when the seller can be contacted. To remove seller contact information when revising or relisting an item, use DeletedField.
	 * @var EbayTradingTypeExtendedContactDetailsType
	 */
	public $ExtendedSellerContactDetails;
	/**
	 * The LeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of leads (emails) buyers have posted about the item. You must be the seller of the item to retrieve the lead count.
	 * @var int
	 */
	public $LeadCount;
	/**
	 * The NewLeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of new leads (unanswered emails) buyers have posted about the item.
	 * @var int
	 */
	public $NewLeadCount;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of Item Specific name and value pairs that the seller specified for the item.<br> <br> Item Specifics describe well-known aspects of an item or product in a standard way, to help buyers find that type of item or product more easily. or example, "Publication Year" is a typical aspect of books, and "Megapixels" is a typical aspect of digital cameras.<br> <br> In the AddItem family of calls, use Item.ItemSpecifics to specify custom Item Specifics.<br> <br> To determine which categories support custom Item Specifics, use GetCategoryFeatures.<br> <br> To retrieve recommended Item Specifics, use GetCategorySpecifics or GetItemRecommendations.<br> <br> In GetItemRecommendations, pass in the PrimaryCategory and (optionally) Title to retrieve recommended names and values. <br> <br> With GetItem, this is only returned when you specify IncludeItemSpecifics in the request (and the seller included custom Item Specifics in their listing).<br> <br> <b>For ReviseItem only:</b> When you revise a listing, if the listing has bids and ends within 12 hours, you cannot change or add Item Specifics. If the listing has bids but ends in more than 12 hours, you cannot change existing Item Specifics, but you can add Item Specifics that were not previously specified.<br> <br> To delete all Item Specifics when you revise or relist, specify Item.ItemSpecifics in DeletedField and don't pass ItemSpecifics in the request.<br> <br> With GetProducts, only the item condition is returned at the item level. Additional attributes that were pre-filled from the catalog are returned in Product.ItemSpecifics.<br> <br> <span class="tablenote"><b>Note:</b> To specify an item's condition, use the ConditionID field instead of a condition item specific. Use GetCategoryFeatures to see which categories support ConditionID and to get a list of valid condition IDs. (If you specify ConditionID and you also specify Condition as a custom item specific, eBay drops the condition item specific.) </span>
	 * @var EbayTradingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The GroupCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : GroupCategoryID is returned if there is a value of BestMatchCategoryGroup in the Order field for the GetSearchResults call. However, the results depend on the items and groups requested. <br> <br> The Best Match algorithm will try to evenly fit the items and return groups of 'Best Matching' Categories. A 'category group' can be a parent category that contains the best-matching items from several of its subcategories. Within each category group, items will be also sorted by best match. The only condition when you may not get a GroupCategoryID returned at all is when the request is for one group and there is more than one category that has matching items. Very rarely, the same item will appear once in the group for its primary category and once in another group for its secondary category, in the same result set. Also very occasionally, a Store Inventory Item can appear in the results before a regular listing.
	 * @var string
	 */
	public $GroupCategoryID;
	/**
	 * The ClassifiedAdPayPerLeadFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The email and phone lead fee for a pay-per-lead item.
	 * @var EbayTradingTypeAmountType
	 */
	public $ClassifiedAdPayPerLeadFee;
	/**
	 * The BidGroupItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This flag is set to true if a watched item belongs to a bid group. It will only be returned for the Watch container.
	 * @var boolean
	 */
	public $BidGroupItem;
	/**
	 * The ApplyBuyerProtection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Different Buyer protection schemes and the various status associated with each one of them.
	 * @var EbayTradingTypeBuyerProtectionDetailsType
	 */
	public $ApplyBuyerProtection;
	/**
	 * The ListingSubtype2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates a specific type of lead generation format listing, such as classified ad or local market best offer listing. Only applicable when ListingType=LeadGeneration. <span class="tablenote"><b>Note:</b> ListingSubtype2 replaces the deprecated ListingSubtype field. If both are specified in a request, ListingSubtype2 takes precedence. </span>
	 * @var EbayTradingTypeListingSubtypeCodeType
	 */
	public $ListingSubtype2;
	/**
	 * The MechanicalCheckAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller allows the bidder to request mechanical inspection services from RAC. For Car category listings on the UK site.
	 * @var boolean
	 */
	public $MechanicalCheckAccepted;
	/**
	 * The UpdateSellerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the following Business Seller fields have been updated for the item specified in the request: First Name, Last Name, Fax, Email Address, Additional Contact Information, Trade Registration Number, VAT Identification Number.
	 * @var boolean
	 */
	public $UpdateSellerInfo;
	/**
	 * The UpdateReturnPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag to indicate whether the item's Return Policy has been updated as part of the revised listing.
	 * @var boolean
	 */
	public $UpdateReturnPolicy;
	/**
	 * The ItemPolicyViolation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the details of policy violations if the item was administratively canceled.
	 * @var EbayTradingTypeItemPolicyViolationType
	 */
	public $ItemPolicyViolation;
	/**
	 * The CrossBorderTrade
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This field is used by sellers who want their listing to be returned in the search results for other eBay sites. This feature is currently only supported by the US, UK, eBay Canada, and eBay Ireland sites. See <a href=" http://pages.ebay.com/help/sell/globalexposure.html">Getting exposure on international sites</a> for full requirements on using this feature. There is a small listing fee for each country specified as a Cross Border Trade country. <br><br> US listings that offer shipping to Canada, North America, or worldwide are automatically returned on eBay.ca at no extra charge, so US listings that offer shipping to these locations do not need to specify Canada as a Cross Border Trade country.
	 * @var string
	 */
	public $CrossBorderTrade;
	/**
	 * The BusinessSellerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the seller's information (in a business card format) if the seller's SellerBusinessCodeType is set to 'Commercial'. This is only applicable for sites where Business Seller options are supported.
	 * @var EbayTradingTypeBusinessSellerDetailsType
	 */
	public $BusinessSellerDetails;
	/**
	 * The BuyerGuaranteePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, BuyerGuaranteePrice is the PayPal Buyer Protection coverage, offered for the item at the time of purchase. Details of coverage are in the following sections of the View Item page: the Buy Safely section and the Payment Details section.
	 * @var EbayTradingTypeAmountType
	 */
	public $BuyerGuaranteePrice;
	/**
	 * The BuyerRequirementDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When this container is present in an AddItem or AddFixedPriceItem call, all buyer requirements for the resulting listing are set by this container. Furthermore, individual buyer requirements cannot be modified or added when including this container in a ReviseItem call. The ReviseItem call needs to provide the entire set of buyer requirements to modify or add any of the requirements. Unless otherwise specified, most buyer requirements are only returned if the caller is the seller. All global My eBay Buyer Requirements are overridden by the contents of this container. This means that buyer requirements set in My eBay cannot be combined with buyer requirements included in this container. <br> <br> Not applicable to Half.com.
	 * @var EbayTradingTypeBuyerRequirementDetailsType
	 */
	public $BuyerRequirementDetails;
	/**
	 * The ReturnPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container that describes the seller's return policy. Most categories on most eBay sites require the seller to include a return policy through the ReturnPolicy container. <br> <br> <b>For the AddItem family of calls:</b> Required for most categories on most sites. Use ReturnPolicyEnabled in GetCategoryFeatures to determine which categories require this field. Also use ReturnPolicyDetails in GeteBayDetails to determine which ReturnPolicy fields can be used on each site.<br> <br> eBay India (IN), Australia (AU), and US eBay Motors Parts and Accessories categories typically support but do not require a return policy. (However, we strongly recommend that you specify a clear return policy whenever possible.)<br> <br> <b>For ReviseItem only:</b> If the listing has bids or sales and it ends within 12 hours, you can't change the return policy details. If the listing is a GTC listing that has sales or ends within 12 hours (one or the other, but not both), you can add a return policy to the GTC listing (but you can't change return policy details if already present). If the listing has no bids or sales and more than 12 hours remain before the listing ends, you can add or change the return policy. When you revise your return policy, you only need to specify the fields you want to add or change. You don't need to specify all the other ReturnPolicy fields again. The other fields will retain their existing settings.<br> <br> <b>For the GetItem family of calls:</b> Only returned if the site you sent the request to supports the seller's return policy. Typically, the return policy details are only returned when the request is sent to the listing site.
	 * @var EbayTradingTypeReturnPolicyType
	 */
	public $ReturnPolicy;
	/**
	 * The PaymentAllowedSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Enables you to view the sites on which an item can be purchased, based on the payment methods offered for the item.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $PaymentAllowedSite;
	/**
	 * The InventoryTrackingMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether you prefer to track your eBay listings by eBay Item ID or by your own SKU. <br> <br> If you want to use SKU instead of ItemID as a unique identifier (such as when retrieving items and orders), you can set Item.InventoryTrackingMethod to SKU in AddFixedPriceItem and related calls. In this case, the SKU must be unique across your (the seller's) active listings. Note that if you relist the item, you must reset Item.InventoryTrackingMethod to SKU; otherwise the relisted item will default to ItemID as the tracking method. <br> <br> If both ItemID and SKU are specified in item-retrieval and order-retrieval calls that support the use of SKU as a unique identifier, the ItemID value takes precedence and is used to identify the listing.<br> <b>For GetItem and related calls</b>: Only returned when the value is SKU; not returned when the value is ItemID. Not applicable to Half.com.
	 * @var EbayTradingTypeInventoryTrackingMethodCodeType
	 */
	public $InventoryTrackingMethod;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway (Payflow) account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account. A payment gateway account is used by sellers to accept online credit cards (Visa, MasterCard, American Express, and Discover).
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The Variations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Variations are multiple similar (but not identical) items in a single fixed-price listing. For example, a T-shirt listing could contain multiple items of the same brand that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation specifies a combination of one of these colors and sizes. Each variation can have a different quantity and price. You can buy multiple items from one variation at the same time. (That is, one order line item can contain multiple items from a single variation.) <br> <br> If you list in two categories, both categories must support listing with variations. See VariationsEnabled in GetCategoryFeatures to determine applicable categories.<br> <br> <b>For ReviseFixedPriceItem and RelistFixedPriceItem:</b> Once a listing has been submitted with variations, you can't delete all the variations when you revise or relist the listing (because it would be considered a different listing). You also can't add or change variation specifics (because they are unique identifiers). However, you can delete or replace individual variations as needed to match your current inventory. If a variation has no purchases, use the Variation.Delete field to delete the variation. If it has inventory, set the Quantity to 0.<br> <br> As a best practice, if you want to revise multiple variations in the same listing at the same time (i.e, within a very short period), use a single ReviseFixedPriceItem request and include all the variation revisions in the same request. If your application design requires you to revise each variation individually, then avoid using multiple parallel threads. Instead, use a serial, synchronous process. That is, wait until each revision has been processed by eBay before submitting the next revision request for another variation in the same listing.<br> <br> <b>For GetItem and related calls</b> Only returned when a listing has variations. <br><br> <b>For GetSellerList:</b> Only returned when a listing has variations, IncludeVariations was set to true in the request, the DetailLevel was set to ReturnAll, and an applicable pagination value and time range were specified.<br> <br> <b>For GetItemTransactions</b> Only returned in Item when a listing has variations and IncludeVariations was set to true in the request. (Also see Variation returned in Transaction for information about which variation was actually purchased.) <br> <br> <b>For GetSellerEvents, GetMyeBayBuying, and GetMyeBaySelling:</b> Only returned when a listing has variations and HideVariations was set to false or not specified in the request.
	 * @var EbayTradingTypeVariationsType
	 */
	public $Variations;
	/**
	 * The ItemCompatibilityList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of parts compatibility information specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle, the name (search name) would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would desribe the specific vehicle, such as a 2006 Honda Accord. Use the Product Metadata API to retrieve valid search names and corresponding values. <br><br> <b>For the AddItem family of calls:</b> Use this for specifying parts compatibility by application manually. This can only be used in categories that support parts compatibility by application. Use <b class="con">GetCategoryFeatures</b> with the "CompatibilityEnabled" feature ID to determine which categories support parts compatibility by application. <br> <span class="tablenote"><b>Note:</b> Starting with release 687, invalid item compatibility combinations will not cause the request to fail as long as <b class="con">ItemCompatibilityList</b> contains at least one valid item compatibility. Only valid compatibilities will be added to the listing. Any invalid compatibility combinations will be reported in the long error message in the response errors with a severity of Warning.</span> <br> <br><br> <b>For ReviseFixedPriceItem and ReviseItem:</b> When you revise a listing, if the listing has bids and/or ends within 12 hours, item compatibilities cannot be deleted. You may add item compatibilities at any time. <br><br> <b>For GetItem:</b> <b class="con">ItemCompatibilityList</b> is only returned if the seller included item compatibility in the listing and <b class="con">IncludeItemCompatibilityList</b> is set to true in the <b class="con">GetItem</b> request.
	 * @var EbayTradingTypeItemCompatibilityListType
	 */
	public $ItemCompatibilityList;
	/**
	 * The ItemCompatibilityCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of compatible applications specified for the given item. Applies to items listed with fitment by application only (either manually or with a catalog product that supports compatibility). <br><br> Not returned if the item has no specified compatible applications. Not returned if <b class="con">IncludeItemCompatibilityList</b> is specified in the request. <br><br> To retrieve the list of compatibility information, set <b class="con"> IncludeItemCompatibilityList</b> to "true" in the request.
	 * @var int
	 */
	public $ItemCompatibilityCount;
	/**
	 * The ConditionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The numeric ID (e.g., 1000) for the item condition. Sellers should also clarify the item's condition in their own item description.<br> <br> <b>For the AddItem family of calls:</b> Use GetCategoryFeatures for details about which categories support (or require) ConditionID, plus policies and help on choosing the right condition for the item (to reduce disputes). <br> <br> Please note the following behavior if you pass a ConditionID value that is not valid for the category: If ConditionID is disabled (or not applicable) for the category, the item is listed with no condition. If ConditionID is enabled or required for the category, the listing request fails.<br> <br> If you are listing in two categories, the primary category determines which condition model (ConditionID or item specifics) and which condition values can be used. <br> <br> Some categories may support ConditionID but also define conditions in GetAttributesCS or GetCategorySpecifics. Even if a category still seems to support passing item condition in AttributeSetArray, LookupAttributeArray, or ItemSpecifics fields, you should use ConditionID instead.<br> <br> As of May 9, 2011, US eBay Motors Parts & Accessories categories require ConditionID for new listings and re-listings, and no longer allow condition attributes. For US eBay Motors vehicle categories, use ConditionID instead of condition attributes, as support for condition attributes will end soon for vehicles. Keep an eye on the developer newsletter for updates.<br> <br> Not applicable to Half.com in listing requests (e.g., AddItem). However, ConditionID could be returned in responses for Half.com listings that are available to or sold on the eBay site (as appropriate for the corresponding eBay category).<br> <br> <b>For Revise/Relist calls:</b> In most cases, you can add or modify ConditionID when you revise or relist. If GetCategoryFeatures returns ConditionEnabled=Required for the listing's category, you cannot remove ConditionID from the listing.<br> <br> If an auction has bids or ends within 12 hours, you cannot remove or change its condition, and you cannot replace a condition attribute or custom item specific with ConditionID. In this case, you will still be able to modify other fields that are normally editable, even if ConditionID is not present.<br> <br> In most cases, you can add or modify ConditionID for multi-quantity fixed price listings. (If a multi-quantity fixed price listing has revision restrictions imposed by other choices the seller has made in the listing, you might not be able to remove or change the condition.)<br> <br> If you revise or relist a GTC listing that only has a condition attribute or custom item specific, you need to specify ConditionID (if the category requires it). ReviseInventoryStatus also fails if you attempt to revise listings that are missing ConditionID. (This rule does not apply during auto-renewal of a GTC listing. It only applies when you perform an action on the listing.) <br> <br> <b>For GetItem:</b> Only returned when the seller specified ConditionID in their listing. GetItem also returns a localized display name.<br> <br> <span class="tablenote"><b>Note:</b> For most categories, eBay does not convert item condition data in the older AttributeSetArray, LookupAttributeArray, or ItemSpecifics format to this format in older listings or when you revise or relist items. This means GTC listings and older ended or sold listings may still return the item condition in these other fields even after new listings only support ConditionID.<br> <br> There are a few categories in which automatic mapping does occur, where the old and newer conditions are identical. See the "Automatic Mapping" tab in the Item Condition Look-up Table link below for details.<br> <br> Also, if you specified ConditionID but the category also supports condition in item specifics, you may receive a "Dropped condition from Item specifics" warning. You can ignore this warning as long as you used ConditionID. </span>
	 * @var int
	 */
	public $ConditionID;
	/**
	 * The ConditionDisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> Most categories use the same display name for the same condition ID. Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another.<br> <br> Behind the scenes, eBay's search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished.<br> <br> Only returned when the seller specified ConditionID in their listing.
	 * @var string
	 */
	public $ConditionDisplayName;
	/**
	 * The TaxCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Tax exception category code. This is to be used only by sellers who have opted into sales tax being calculated by a sales tax calculation vendor. If you are interested in becoming a tax calculation vendor partner with eBay, contact developer-relations@ebay.com.
	 * @var string
	 */
	public $TaxCategory;
	/**
	 * The QuantityAvailableHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of message that will be returned describing the quantity available for the item.
	 * @var EbayTradingTypeQuantityAvailableHintCodeType
	 */
	public $QuantityAvailableHint;
	/**
	 * The QuantityThreshold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The quantity threshold above which the seller prefers not to show the actual quantity available. Returned when the quantity available is greater than the value of quantity threshold. Currently, 10 is the only available value for this threshold.
	 * @var int
	 */
	public $QuantityThreshold;
	/**
	 * The PostCheckoutExperienceEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var boolean
	 */
	public $PostCheckoutExperienceEnabled;
	/**
	 * The DiscountPriceInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP only applies to fixed price listings or to auction listings enabled with the Buy It Now feature. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br /> <br /> Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "special account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items. Sellers should contact their account manager or Customer Service to see if they qualify for the Strikethrough Pricing program. <br><br> As a seller listing Discount Price items, you are required to maintain records of your discount pricing in the event you are called upon to substantiate your item pricing. The following link details your legal obligations when you utilize Discount Pricing to sell items: <a href= "http://pages.ebay.com/help/sell/strike-through.html">Strikethrough Pricing Requirements </a> <br><br> <b>For AddFixedPriceItem, RelistFixedPriceItem, ReviseFixedPriceItem, and VerifyAddFixedPriceItem:</b> If you are listing variations (MSKU items), use Variation.DiscountPriceInfo for each variation.
	 * @var EbayTradingTypeDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The UseRecommendedProduct
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : If true, and the item details in the request match a product in the eBay catalog, the matching product is used to list the item. This is like using ProductListingDetails to list an item. Applies only to catalog-enabled categories. <br><br> This feature is available to a small subset of eBay-selected sellers. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $UseRecommendedProduct;
	/**
	 * The SellerProvidedTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A descriptive free-text title for a US or CA eBay Motors vehicle listing. This title appears below eBay's pre-filled listing title on the View Item page (not at the top of the View Item page). It's also appended to the listing title in search results (like a subtitle) on the US eBay Motors site. Keywords in this title help buyers find or distinguish your listing.<br> <br> Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some of the Powersport, Boats and RV campers categories; or to Cars and Trucks listings on CA eBay Motors.<br> <br> This replaces the older US and Canada eBay Motors Subtitle attribute (attribute ID 10246).<br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $SellerProvidedTitle;
	/**
	 * The VIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Vehicle Identification Number, which is a unique serial number for a motor vehicle.<br> <br> Applicable to listings in US eBay Motors Cars and Trucks (6001), Motorcycles (6024), Commercial Trucks (63732), RVs and Campers (50054), ATVs (6723), Snowmobiles (42595), and UTVs (173665); and to Cars and Trucks listings in CA, CAFR and AU eBay Motors. For vehicle categories that do not use VIN, call GetCategorySpecifics to determine applicable custom item specifics (such as "Hull ID Number" for Boats). <br> <br> For the US, CA, and CAFR eBay Motors sites, required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values as of 1981.)<br> <br> For the eBay Australia site, required for vehicles from model year 1989 or later. For the eBay Australia site, only appears on the View Item page if you also specify the date of first registration in the listing's item specifics. <br> <br> Appears in the VIN field in the Item Specifics section of eBay's View Item page.<br> <br> Not applicable to Half.com.<br> <br> Until May 2012, you can either specify Item.VIN or you can specify the VIN by using ID-based attributes (in Item.AttributeSetArray). If you specify the VIN attribute, eBay will migrate the value to this Item.VIN field for you. After this conversion happens, GetItem may only return the VIN in Item.VIN, not in Item.AttributeSetArray. If you list eBay Motors vehicles, we recommend that you begin adopting Item.VIN in your application immediately.
	 * @var string
	 */
	public $VIN;
	/**
	 * The VINLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Link to the Vehicle History Report for the vehicle whose VIN was specified in Item.VIN. If no vehicle history report is available, eBay may instead show a plain-text copy of the VIN.<br> <br> Applicable to listings in US eBay Motors Cars and Trucks, Motorcycle, and some Powersport, Boats and RV campers categories; and to Cars and Trucks listings in CA, CAFR and AU eBay Motors.<br> <br> For the eBay Australia site, only appears on the View Item page if you specify Item.VIN and you also specify the date of first registration in the listing's item specifics.<br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $VINLink;
	/**
	 * The VRM
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Vehicle Registration Mark, which is a unique identifier for a motor vehicle.<br> <br> Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories.<br> <br> Appears as a VRM field in the Item Specifics section of eBay's View Item page. On the View Item page, the VRM value is masked (i.e., only a portion of the value is shown to users). In the GetItem response, the VRM is only returned if the call is made by the seller (i.e., the AuthToken is associated with the vehicle's seller).<br> <br> Not applicable to Half.com.<br> <br> Until May 2012, you can either specify Item.VRM or you can specify the VRM by using ID-based attributes (in Item.AttributeSetArray). If you specify the VRM attribute, eBay will migrate the value to this Item.VRM field for you. After this conversion happens, GetItem may only return the VRM in Item.VRM, not in Item.AttributeSetArray. If you list eBay Motors vehicles, we recommend that you begin adopting Item.VRM in your application immediately.
	 * @var string
	 */
	public $VRM;
	/**
	 * The VRMLink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Link to the Vehicle History Report for the vehicle whose VRM was specified in Item.VRM. The report is visible to all users. If no vehicle history report is available, eBay may instead show a plain-text copy of the masked VRM.<br> <br> Applicable to listings in UK eBay Motors Cars and Trucks, Motorcycle, and some Powersport categories.<br> <br> Not applicable to Half.com.
	 * @var string
	 */
	public $VRMLink;
	/**
	 * The QuantityInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var EbayTradingTypeQuantityInfoType
	 */
	public $QuantityInfo;
	/**
	 * The SellerProfiles
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Root container consisting of references to one or more Business Policies profiles. Exactly one Payment Profile, one Shipping Profile, and one Return Policy Profile may be applied to the listing. <br/><br/> <span class="tablenote"><b>Note:</b> Business Policies are not yet available for use on the eBay platform. <span/>
	 * @var EbayTradingTypeSellerProfilesType
	 */
	public $SellerProfiles;
	/**
	 * The ShippingPackageDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of dimension and size details related to a shipping package in which an item will be sent. The information in this container is applicable if the seller is using calculated shipping or flat rate shipping using shipping rate tables with weight surcharges. This container is only returned in the "Get" calls if specified for the item.
	 * @var EbayTradingTypeShipPackageDetailsType
	 */
	public $ShippingPackageDetails;
	/**
	 * The TopRatedListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>This field is scheduled to start being returned in July 2012</b>. This field is only applicable to US sellers who qualify as Top-Rated Sellers. If this flag is returned for a listing, it indicates that the listing meets the new requirements for a Top-Rated Listing. A Top-Rated Listing must meet the following requirements: <ul> <li>14-day (or longer) return policy with Money Back option</li> <li>1-day Handling Time or better</li> </ul> <br/><br/> Currently, US Top-Rated Sellers get a 20 percent discount on their FVF for all domestic sales, and this will be the case through May 2012. From March through May 2012, US Top-Rated Sellers will get an additional 5 percent off of their FVF for listings that meet the above requirements. Beginning in June 2012, Top-Rated Sellers' listing must meet the above requirements to receive the 20 percent FVF discount. <br/><br/> Beginning in June 2012, US sellers will have to meet the following new requirements to qualify as Top-Rated Sellers: <ul> <li>GMV of $1,000 or greater</li> <li>Shipment tracking information provided to buyer withing handling time for at least 90 percent of their listings</li> </ul>
	 * @var boolean
	 */
	public $TopRatedListing;
	/**
	 * The FloorPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value sets the minimum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on eBay Value Box or Amazon listings, the seller's product price will not be reduced lower than this dollar value. <br/><br/> This value is only applicable to sellers using the Dynamic Pricing API, and if a dynamic pricing rule is assigned to the listing's product.
	 * @var EbayTradingTypeAmountType
	 */
	public $FloorPrice;
	/**
	 * The CeilingPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value sets the maximum price threshold for a seller's product price in a fixed-price listing. Regardless of the product price on Amazon or eBay Value Box, the seller's product price will not be raised higher than this dollar value. <br/><br/> This value is only applicable to sellers using the Dynamic Pricing API, and if a dynamic pricing rule is assigned to the listing's product. If this field is not specified through the Dynamic Pricing API, an eBay system-level threshold is used to avoid any undesirable results.
	 * @var EbayTradingTypeAmountType
	 */
	public $CeilingPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ApplicationData
	 * @param EbayTradingTypeAttributeSetArrayType AttributeSetArray
	 * @param EbayTradingTypeAttributeArrayType AttributeArray
	 * @param EbayTradingTypeLookupAttributeArrayType LookupAttributeArray
	 * @param boolean AutoPay
	 * @param EbayTradingTypePaymentDetailsType PaymentDetails
	 * @param EbayTradingTypeBiddingDetailsType BiddingDetails
	 * @param boolean MotorsGermanySearchable
	 * @param EbayTradingTypeBuyerProtectionCodeType BuyerProtection
	 * @param EbayTradingTypeAmountType BuyItNowPrice
	 * @param boolean CategoryMappingAllowed
	 * @param EbayTradingTypeCharityType Charity
	 * @param EbayTradingTypeCountryCodeType Country
	 * @param EbayTradingTypeCrossPromotionsType CrossPromotion
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param string Description
	 * @param EbayTradingTypeDescriptionReviseModeCodeType DescriptionReviseMode
	 * @param EbayTradingTypeDistanceType Distance
	 * @param int GiftIcon
	 * @param EbayTradingTypeGiftServicesCodeType GiftServices
	 * @param EbayTradingTypeHitCounterCodeType HitCounter
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeListingDetailsType ListingDetails
	 * @param EbayTradingTypeListingDesignerType ListingDesigner
	 * @param token ListingDuration
	 * @param EbayTradingTypeListingEnhancementsCodeType ListingEnhancement
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param string Location
	 * @param int LotSize
	 * @param string PartnerCode
	 * @param string PartnerName
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethods
	 * @param string PayPalEmailAddress
	 * @param EbayTradingTypeCategoryType PrimaryCategory
	 * @param boolean PrivateListing
	 * @param EbayTradingTypeProductListingDetailsType ProductListingDetails
	 * @param int Quantity
	 * @param string PrivateNotes
	 * @param string RegionID
	 * @param boolean RelistLink
	 * @param EbayTradingTypeAmountType ReservePrice
	 * @param EbayTradingTypeReviseStatusType ReviseStatus
	 * @param dateTime ScheduleTime
	 * @param EbayTradingTypeCategoryType SecondaryCategory
	 * @param EbayTradingTypeCategoryType FreeAddedCategory
	 * @param EbayTradingTypeUserType Seller
	 * @param EbayTradingTypeSellingStatusType SellingStatus
	 * @param EbayTradingTypeShippingDetailsType ShippingDetails
	 * @param string ShipToLocations
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param EbayTradingTypeAmountType StartPrice
	 * @param EbayTradingTypeStorefrontType Storefront
	 * @param string SubTitle
	 * @param duration TimeLeft
	 * @param string Title
	 * @param EbayTradingTypeUUIDType UUID
	 * @param EbayTradingTypeVATDetailsType VATDetails
	 * @param string SellerVacationNote
	 * @param long WatchCount
	 * @param long HitCount
	 * @param boolean DisableBuyerRequirements
	 * @param EbayTradingTypeBestOfferDetailsType BestOfferDetails
	 * @param boolean LocationDefaulted
	 * @param boolean ThirdPartyCheckout
	 * @param boolean UseTaxTable
	 * @param boolean GetItFast
	 * @param boolean BuyerResponsibleForShipping
	 * @param boolean LimitedWarrantyEligible
	 * @param string eBayNotes
	 * @param long QuestionCount
	 * @param boolean Relisted
	 * @param int QuantityAvailable
	 * @param EbayTradingTypeSKUType SKU
	 * @param boolean CategoryBasedAttributesPrefill
	 * @param EbayTradingTypeSearchDetailsType SearchDetails
	 * @param string PostalCode
	 * @param boolean ShippingTermsInDescription
	 * @param EbayTradingTypeExternalProductIDType ExternalProductID
	 * @param string SellerInventoryID
	 * @param EbayTradingTypePictureDetailsType PictureDetails
	 * @param int DispatchTimeMax
	 * @param boolean SkypeEnabled
	 * @param string SkypeID
	 * @param EbayTradingTypeSkypeContactOptionCodeType SkypeContactOption
	 * @param boolean BestOfferEnabled
	 * @param boolean LocalListing
	 * @param boolean ThirdPartyCheckoutIntegration
	 * @param EbayTradingTypeListingCheckoutRedirectPreferenceType ListingCheckoutRedirectPreference
	 * @param EbayTradingTypeAddressType SellerContactDetails
	 * @param long TotalQuestionCount
	 * @param boolean ProxyItem
	 * @param EbayTradingTypeExtendedContactDetailsType ExtendedSellerContactDetails
	 * @param int LeadCount
	 * @param int NewLeadCount
	 * @param EbayTradingTypeNameValueListArrayType ItemSpecifics
	 * @param string GroupCategoryID
	 * @param EbayTradingTypeAmountType ClassifiedAdPayPerLeadFee
	 * @param boolean BidGroupItem
	 * @param EbayTradingTypeBuyerProtectionDetailsType ApplyBuyerProtection
	 * @param EbayTradingTypeListingSubtypeCodeType ListingSubtype2
	 * @param boolean MechanicalCheckAccepted
	 * @param boolean UpdateSellerInfo
	 * @param boolean UpdateReturnPolicy
	 * @param EbayTradingTypeItemPolicyViolationType ItemPolicyViolation
	 * @param string CrossBorderTrade
	 * @param EbayTradingTypeBusinessSellerDetailsType BusinessSellerDetails
	 * @param EbayTradingTypeAmountType BuyerGuaranteePrice
	 * @param EbayTradingTypeBuyerRequirementDetailsType BuyerRequirementDetails
	 * @param EbayTradingTypeReturnPolicyType ReturnPolicy
	 * @param EbayTradingTypeSiteCodeType PaymentAllowedSite
	 * @param EbayTradingTypeInventoryTrackingMethodCodeType InventoryTrackingMethod
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param EbayTradingTypeVariationsType Variations
	 * @param EbayTradingTypeItemCompatibilityListType ItemCompatibilityList
	 * @param int ItemCompatibilityCount
	 * @param int ConditionID
	 * @param string ConditionDisplayName
	 * @param string TaxCategory
	 * @param EbayTradingTypeQuantityAvailableHintCodeType QuantityAvailableHint
	 * @param int QuantityThreshold
	 * @param boolean PostCheckoutExperienceEnabled
	 * @param EbayTradingTypeDiscountPriceInfoType DiscountPriceInfo
	 * @param boolean UseRecommendedProduct
	 * @param string SellerProvidedTitle
	 * @param string VIN
	 * @param string VINLink
	 * @param string VRM
	 * @param string VRMLink
	 * @param EbayTradingTypeQuantityInfoType QuantityInfo
	 * @param EbayTradingTypeSellerProfilesType SellerProfiles
	 * @param EbayTradingTypeShipPackageDetailsType ShippingPackageDetails
	 * @param boolean TopRatedListing
	 * @param EbayTradingTypeAmountType FloorPrice
	 * @param EbayTradingTypeAmountType CeilingPrice
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemType
	 */
	public function __construct($_ApplicationData = null,$_AttributeSetArray = null,$_AttributeArray = null,$_LookupAttributeArray = null,$_AutoPay = null,$_PaymentDetails = null,$_BiddingDetails = null,$_MotorsGermanySearchable = null,$_BuyerProtection = null,$_BuyItNowPrice = null,$_CategoryMappingAllowed = false,$_Charity = null,$_Country = null,$_CrossPromotion = null,$_Currency = null,$_Description = null,$_DescriptionReviseMode = null,$_Distance = null,$_GiftIcon = null,$_GiftServices = null,$_HitCounter = null,$_ItemID = null,$_ListingDetails = null,$_ListingDesigner = null,$_ListingDuration = null,$_ListingEnhancement = null,$_ListingType = null,$_Location = null,$_LotSize = null,$_PartnerCode = null,$_PartnerName = null,$_PaymentMethods = null,$_PayPalEmailAddress = null,$_PrimaryCategory = null,$_PrivateListing = null,$_ProductListingDetails = null,$_Quantity = null,$_PrivateNotes = null,$_RegionID = null,$_RelistLink = null,$_ReservePrice = null,$_ReviseStatus = null,$_ScheduleTime = null,$_SecondaryCategory = null,$_FreeAddedCategory = null,$_Seller = null,$_SellingStatus = null,$_ShippingDetails = null,$_ShipToLocations = null,$_Site = null,$_StartPrice = null,$_Storefront = null,$_SubTitle = null,$_TimeLeft = null,$_Title = null,$_UUID = null,$_VATDetails = null,$_SellerVacationNote = null,$_WatchCount = null,$_HitCount = null,$_DisableBuyerRequirements = null,$_BestOfferDetails = null,$_LocationDefaulted = null,$_ThirdPartyCheckout = null,$_UseTaxTable = null,$_GetItFast = null,$_BuyerResponsibleForShipping = null,$_LimitedWarrantyEligible = null,$_eBayNotes = null,$_QuestionCount = null,$_Relisted = null,$_QuantityAvailable = null,$_SKU = null,$_CategoryBasedAttributesPrefill = false,$_SearchDetails = null,$_PostalCode = null,$_ShippingTermsInDescription = null,$_ExternalProductID = null,$_SellerInventoryID = null,$_PictureDetails = null,$_DispatchTimeMax = null,$_SkypeEnabled = null,$_SkypeID = null,$_SkypeContactOption = null,$_BestOfferEnabled = null,$_LocalListing = null,$_ThirdPartyCheckoutIntegration = null,$_ListingCheckoutRedirectPreference = null,$_SellerContactDetails = null,$_TotalQuestionCount = null,$_ProxyItem = null,$_ExtendedSellerContactDetails = null,$_LeadCount = null,$_NewLeadCount = null,$_ItemSpecifics = null,$_GroupCategoryID = null,$_ClassifiedAdPayPerLeadFee = null,$_BidGroupItem = null,$_ApplyBuyerProtection = null,$_ListingSubtype2 = null,$_MechanicalCheckAccepted = null,$_UpdateSellerInfo = null,$_UpdateReturnPolicy = null,$_ItemPolicyViolation = null,$_CrossBorderTrade = null,$_BusinessSellerDetails = null,$_BuyerGuaranteePrice = null,$_BuyerRequirementDetails = null,$_ReturnPolicy = null,$_PaymentAllowedSite = null,$_InventoryTrackingMethod = null,$_IntegratedMerchantCreditCardEnabled = null,$_Variations = null,$_ItemCompatibilityList = null,$_ItemCompatibilityCount = null,$_ConditionID = null,$_ConditionDisplayName = null,$_TaxCategory = null,$_QuantityAvailableHint = null,$_QuantityThreshold = null,$_PostCheckoutExperienceEnabled = null,$_DiscountPriceInfo = null,$_UseRecommendedProduct = false,$_SellerProvidedTitle = null,$_VIN = null,$_VINLink = null,$_VRM = null,$_VRMLink = null,$_QuantityInfo = null,$_SellerProfiles = null,$_ShippingPackageDetails = null,$_TopRatedListing = null,$_FloorPrice = null,$_CeilingPrice = null,$_any = null)
	{
		parent::__construct(array('ApplicationData'=>$_ApplicationData,'AttributeSetArray'=>$_AttributeSetArray,'AttributeArray'=>$_AttributeArray,'LookupAttributeArray'=>$_LookupAttributeArray,'AutoPay'=>$_AutoPay,'PaymentDetails'=>$_PaymentDetails,'BiddingDetails'=>$_BiddingDetails,'MotorsGermanySearchable'=>$_MotorsGermanySearchable,'BuyerProtection'=>$_BuyerProtection,'BuyItNowPrice'=>$_BuyItNowPrice,'CategoryMappingAllowed'=>$_CategoryMappingAllowed,'Charity'=>$_Charity,'Country'=>$_Country,'CrossPromotion'=>$_CrossPromotion,'Currency'=>$_Currency,'Description'=>$_Description,'DescriptionReviseMode'=>$_DescriptionReviseMode,'Distance'=>$_Distance,'GiftIcon'=>$_GiftIcon,'GiftServices'=>$_GiftServices,'HitCounter'=>$_HitCounter,'ItemID'=>$_ItemID,'ListingDetails'=>$_ListingDetails,'ListingDesigner'=>$_ListingDesigner,'ListingDuration'=>$_ListingDuration,'ListingEnhancement'=>$_ListingEnhancement,'ListingType'=>$_ListingType,'Location'=>$_Location,'LotSize'=>$_LotSize,'PartnerCode'=>$_PartnerCode,'PartnerName'=>$_PartnerName,'PaymentMethods'=>$_PaymentMethods,'PayPalEmailAddress'=>$_PayPalEmailAddress,'PrimaryCategory'=>$_PrimaryCategory,'PrivateListing'=>$_PrivateListing,'ProductListingDetails'=>$_ProductListingDetails,'Quantity'=>$_Quantity,'PrivateNotes'=>$_PrivateNotes,'RegionID'=>$_RegionID,'RelistLink'=>$_RelistLink,'ReservePrice'=>$_ReservePrice,'ReviseStatus'=>$_ReviseStatus,'ScheduleTime'=>$_ScheduleTime,'SecondaryCategory'=>$_SecondaryCategory,'FreeAddedCategory'=>$_FreeAddedCategory,'Seller'=>$_Seller,'SellingStatus'=>$_SellingStatus,'ShippingDetails'=>$_ShippingDetails,'ShipToLocations'=>$_ShipToLocations,'Site'=>$_Site,'StartPrice'=>$_StartPrice,'Storefront'=>$_Storefront,'SubTitle'=>$_SubTitle,'TimeLeft'=>$_TimeLeft,'Title'=>$_Title,'UUID'=>$_UUID,'VATDetails'=>$_VATDetails,'SellerVacationNote'=>$_SellerVacationNote,'WatchCount'=>$_WatchCount,'HitCount'=>$_HitCount,'DisableBuyerRequirements'=>$_DisableBuyerRequirements,'BestOfferDetails'=>$_BestOfferDetails,'LocationDefaulted'=>$_LocationDefaulted,'ThirdPartyCheckout'=>$_ThirdPartyCheckout,'UseTaxTable'=>$_UseTaxTable,'GetItFast'=>$_GetItFast,'BuyerResponsibleForShipping'=>$_BuyerResponsibleForShipping,'LimitedWarrantyEligible'=>$_LimitedWarrantyEligible,'eBayNotes'=>$_eBayNotes,'QuestionCount'=>$_QuestionCount,'Relisted'=>$_Relisted,'QuantityAvailable'=>$_QuantityAvailable,'SKU'=>$_SKU,'CategoryBasedAttributesPrefill'=>$_CategoryBasedAttributesPrefill,'SearchDetails'=>$_SearchDetails,'PostalCode'=>$_PostalCode,'ShippingTermsInDescription'=>$_ShippingTermsInDescription,'ExternalProductID'=>$_ExternalProductID,'SellerInventoryID'=>$_SellerInventoryID,'PictureDetails'=>$_PictureDetails,'DispatchTimeMax'=>$_DispatchTimeMax,'SkypeEnabled'=>$_SkypeEnabled,'SkypeID'=>$_SkypeID,'SkypeContactOption'=>$_SkypeContactOption,'BestOfferEnabled'=>$_BestOfferEnabled,'LocalListing'=>$_LocalListing,'ThirdPartyCheckoutIntegration'=>$_ThirdPartyCheckoutIntegration,'ListingCheckoutRedirectPreference'=>$_ListingCheckoutRedirectPreference,'SellerContactDetails'=>$_SellerContactDetails,'TotalQuestionCount'=>$_TotalQuestionCount,'ProxyItem'=>$_ProxyItem,'ExtendedSellerContactDetails'=>$_ExtendedSellerContactDetails,'LeadCount'=>$_LeadCount,'NewLeadCount'=>$_NewLeadCount,'ItemSpecifics'=>$_ItemSpecifics,'GroupCategoryID'=>$_GroupCategoryID,'ClassifiedAdPayPerLeadFee'=>$_ClassifiedAdPayPerLeadFee,'BidGroupItem'=>$_BidGroupItem,'ApplyBuyerProtection'=>$_ApplyBuyerProtection,'ListingSubtype2'=>$_ListingSubtype2,'MechanicalCheckAccepted'=>$_MechanicalCheckAccepted,'UpdateSellerInfo'=>$_UpdateSellerInfo,'UpdateReturnPolicy'=>$_UpdateReturnPolicy,'ItemPolicyViolation'=>$_ItemPolicyViolation,'CrossBorderTrade'=>$_CrossBorderTrade,'BusinessSellerDetails'=>$_BusinessSellerDetails,'BuyerGuaranteePrice'=>$_BuyerGuaranteePrice,'BuyerRequirementDetails'=>$_BuyerRequirementDetails,'ReturnPolicy'=>$_ReturnPolicy,'PaymentAllowedSite'=>$_PaymentAllowedSite,'InventoryTrackingMethod'=>$_InventoryTrackingMethod,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'Variations'=>$_Variations,'ItemCompatibilityList'=>$_ItemCompatibilityList,'ItemCompatibilityCount'=>$_ItemCompatibilityCount,'ConditionID'=>$_ConditionID,'ConditionDisplayName'=>$_ConditionDisplayName,'TaxCategory'=>$_TaxCategory,'QuantityAvailableHint'=>$_QuantityAvailableHint,'QuantityThreshold'=>$_QuantityThreshold,'PostCheckoutExperienceEnabled'=>$_PostCheckoutExperienceEnabled,'DiscountPriceInfo'=>$_DiscountPriceInfo,'UseRecommendedProduct'=>$_UseRecommendedProduct,'SellerProvidedTitle'=>$_SellerProvidedTitle,'VIN'=>$_VIN,'VINLink'=>$_VINLink,'VRM'=>$_VRM,'VRMLink'=>$_VRMLink,'QuantityInfo'=>$_QuantityInfo,'SellerProfiles'=>$_SellerProfiles,'ShippingPackageDetails'=>$_ShippingPackageDetails,'TopRatedListing'=>$_TopRatedListing,'FloorPrice'=>$_FloorPrice,'CeilingPrice'=>$_CeilingPrice,'any'=>$_any));
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
	 * Set AttributeSetArray
	 * @param AttributeSetArrayType AttributeSetArray
	 * @return AttributeSetArrayType
	 */
	public function setAttributeSetArray($_AttributeSetArray)
	{
		return ($this->AttributeSetArray = $_AttributeSetArray);
	}
	/**
	 * Get AttributeSetArray
	 * @return EbayTradingTypeAttributeSetArrayType
	 */
	public function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
	}
	/**
	 * Set AttributeArray
	 * @param AttributeArrayType AttributeArray
	 * @return AttributeArrayType
	 */
	public function setAttributeArray($_AttributeArray)
	{
		return ($this->AttributeArray = $_AttributeArray);
	}
	/**
	 * Get AttributeArray
	 * @return EbayTradingTypeAttributeArrayType
	 */
	public function getAttributeArray()
	{
		return $this->AttributeArray;
	}
	/**
	 * Set LookupAttributeArray
	 * @param LookupAttributeArrayType LookupAttributeArray
	 * @return LookupAttributeArrayType
	 */
	public function setLookupAttributeArray($_LookupAttributeArray)
	{
		return ($this->LookupAttributeArray = $_LookupAttributeArray);
	}
	/**
	 * Get LookupAttributeArray
	 * @return EbayTradingTypeLookupAttributeArrayType
	 */
	public function getLookupAttributeArray()
	{
		return $this->LookupAttributeArray;
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
	 * Set PaymentDetails
	 * @param PaymentDetailsType PaymentDetails
	 * @return PaymentDetailsType
	 */
	public function setPaymentDetails($_PaymentDetails)
	{
		return ($this->PaymentDetails = $_PaymentDetails);
	}
	/**
	 * Get PaymentDetails
	 * @return EbayTradingTypePaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set BiddingDetails
	 * @param BiddingDetailsType BiddingDetails
	 * @return BiddingDetailsType
	 */
	public function setBiddingDetails($_BiddingDetails)
	{
		return ($this->BiddingDetails = $_BiddingDetails);
	}
	/**
	 * Get BiddingDetails
	 * @return EbayTradingTypeBiddingDetailsType
	 */
	public function getBiddingDetails()
	{
		return $this->BiddingDetails;
	}
	/**
	 * Set MotorsGermanySearchable
	 * @param boolean MotorsGermanySearchable
	 * @return boolean
	 */
	public function setMotorsGermanySearchable($_MotorsGermanySearchable)
	{
		return ($this->MotorsGermanySearchable = $_MotorsGermanySearchable);
	}
	/**
	 * Get MotorsGermanySearchable
	 * @return boolean
	 */
	public function getMotorsGermanySearchable()
	{
		return $this->MotorsGermanySearchable;
	}
	/**
	 * Set BuyerProtection
	 * @param BuyerProtectionCodeType BuyerProtection
	 * @return BuyerProtectionCodeType
	 */
	public function setBuyerProtection($_BuyerProtection)
	{
		return ($this->BuyerProtection = EbayTradingTypeBuyerProtectionCodeType::valueIsValid($_BuyerProtection)?$_BuyerProtection:null);
	}
	/**
	 * Get BuyerProtection
	 * @return EbayTradingTypeBuyerProtectionCodeType
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
	 * @return EbayTradingTypeAmountType
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
	}
	/**
	 * Set CategoryMappingAllowed
	 * @param boolean CategoryMappingAllowed
	 * @return boolean
	 */
	public function setCategoryMappingAllowed($_CategoryMappingAllowed)
	{
		return ($this->CategoryMappingAllowed = $_CategoryMappingAllowed);
	}
	/**
	 * Get CategoryMappingAllowed
	 * @return boolean
	 */
	public function getCategoryMappingAllowed()
	{
		return $this->CategoryMappingAllowed;
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
	 * @return EbayTradingTypeCharityType
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
		return ($this->Country = EbayTradingTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return EbayTradingTypeCountryCodeType
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
	 * @return EbayTradingTypeCrossPromotionsType
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
		return ($this->Currency = EbayTradingTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return EbayTradingTypeCurrencyCodeType
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
	 * Set DescriptionReviseMode
	 * @param DescriptionReviseModeCodeType DescriptionReviseMode
	 * @return DescriptionReviseModeCodeType
	 */
	public function setDescriptionReviseMode($_DescriptionReviseMode)
	{
		return ($this->DescriptionReviseMode = EbayTradingTypeDescriptionReviseModeCodeType::valueIsValid($_DescriptionReviseMode)?$_DescriptionReviseMode:null);
	}
	/**
	 * Get DescriptionReviseMode
	 * @return EbayTradingTypeDescriptionReviseModeCodeType
	 */
	public function getDescriptionReviseMode()
	{
		return $this->DescriptionReviseMode;
	}
	/**
	 * Set Distance
	 * @param DistanceType Distance
	 * @return DistanceType
	 */
	public function setDistance($_Distance)
	{
		return ($this->Distance = $_Distance);
	}
	/**
	 * Get Distance
	 * @return EbayTradingTypeDistanceType
	 */
	public function getDistance()
	{
		return $this->Distance;
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
		return ($this->GiftServices = EbayTradingTypeGiftServicesCodeType::valueIsValid($_GiftServices)?$_GiftServices:null);
	}
	/**
	 * Get GiftServices
	 * @return EbayTradingTypeGiftServicesCodeType
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
		return ($this->HitCounter = EbayTradingTypeHitCounterCodeType::valueIsValid($_HitCounter)?$_HitCounter:null);
	}
	/**
	 * Get HitCounter
	 * @return EbayTradingTypeHitCounterCodeType
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
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
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
	 * @return EbayTradingTypeListingDetailsType
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
	 * @return EbayTradingTypeListingDesignerType
	 */
	public function getListingDesigner()
	{
		return $this->ListingDesigner;
	}
	/**
	 * Set ListingDuration
	 * @param token ListingDuration
	 * @return token
	 */
	public function setListingDuration($_ListingDuration)
	{
		return ($this->ListingDuration = $_ListingDuration);
	}
	/**
	 * Get ListingDuration
	 * @return token
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
		return ($this->ListingEnhancement = EbayTradingTypeListingEnhancementsCodeType::valueIsValid($_ListingEnhancement)?$_ListingEnhancement:null);
	}
	/**
	 * Get ListingEnhancement
	 * @return EbayTradingTypeListingEnhancementsCodeType
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
		return ($this->ListingType = EbayTradingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayTradingTypeListingTypeCodeType
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
	 * Set LotSize
	 * @param int LotSize
	 * @return int
	 */
	public function setLotSize($_LotSize)
	{
		return ($this->LotSize = $_LotSize);
	}
	/**
	 * Get LotSize
	 * @return int
	 */
	public function getLotSize()
	{
		return $this->LotSize;
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
		return ($this->PaymentMethods = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethods)?$_PaymentMethods:null);
	}
	/**
	 * Get PaymentMethods
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
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
	 * @return EbayTradingTypeCategoryType
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
	 * Set ProductListingDetails
	 * @param ProductListingDetailsType ProductListingDetails
	 * @return ProductListingDetailsType
	 */
	public function setProductListingDetails($_ProductListingDetails)
	{
		return ($this->ProductListingDetails = $_ProductListingDetails);
	}
	/**
	 * Get ProductListingDetails
	 * @return EbayTradingTypeProductListingDetailsType
	 */
	public function getProductListingDetails()
	{
		return $this->ProductListingDetails;
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
	 * Set PrivateNotes
	 * @param string PrivateNotes
	 * @return string
	 */
	public function setPrivateNotes($_PrivateNotes)
	{
		return ($this->PrivateNotes = $_PrivateNotes);
	}
	/**
	 * Get PrivateNotes
	 * @return string
	 */
	public function getPrivateNotes()
	{
		return $this->PrivateNotes;
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
	 * @return EbayTradingTypeAmountType
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
	 * @return EbayTradingTypeReviseStatusType
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
	 * @return EbayTradingTypeCategoryType
	 */
	public function getSecondaryCategory()
	{
		return $this->SecondaryCategory;
	}
	/**
	 * Set FreeAddedCategory
	 * @param CategoryType FreeAddedCategory
	 * @return CategoryType
	 */
	public function setFreeAddedCategory($_FreeAddedCategory)
	{
		return ($this->FreeAddedCategory = $_FreeAddedCategory);
	}
	/**
	 * Get FreeAddedCategory
	 * @return EbayTradingTypeCategoryType
	 */
	public function getFreeAddedCategory()
	{
		return $this->FreeAddedCategory;
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
	 * @return EbayTradingTypeUserType
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
	 * @return EbayTradingTypeSellingStatusType
	 */
	public function getSellingStatus()
	{
		return $this->SellingStatus;
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
	 * @return EbayTradingTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShipToLocations
	 * @param string ShipToLocations
	 * @return string
	 */
	public function setShipToLocations($_ShipToLocations)
	{
		return ($this->ShipToLocations = $_ShipToLocations);
	}
	/**
	 * Get ShipToLocations
	 * @return string
	 */
	public function getShipToLocations()
	{
		return $this->ShipToLocations;
	}
	/**
	 * Set Site
	 * @param SiteCodeType Site
	 * @return SiteCodeType
	 */
	public function setSite($_Site)
	{
		return ($this->Site = EbayTradingTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return EbayTradingTypeSiteCodeType
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
	 * @return EbayTradingTypeAmountType
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
	 * @return EbayTradingTypeStorefrontType
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
		return ($this->UUID = EbayTradingTypeUUIDType::valueIsValid($_UUID)?$_UUID:null);
	}
	/**
	 * Get UUID
	 * @return EbayTradingTypeUUIDType
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
	 * @return EbayTradingTypeVATDetailsType
	 */
	public function getVATDetails()
	{
		return $this->VATDetails;
	}
	/**
	 * Set SellerVacationNote
	 * @param string SellerVacationNote
	 * @return string
	 */
	public function setSellerVacationNote($_SellerVacationNote)
	{
		return ($this->SellerVacationNote = $_SellerVacationNote);
	}
	/**
	 * Get SellerVacationNote
	 * @return string
	 */
	public function getSellerVacationNote()
	{
		return $this->SellerVacationNote;
	}
	/**
	 * Set WatchCount
	 * @param long WatchCount
	 * @return long
	 */
	public function setWatchCount($_WatchCount)
	{
		return ($this->WatchCount = $_WatchCount);
	}
	/**
	 * Get WatchCount
	 * @return long
	 */
	public function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * Set HitCount
	 * @param long HitCount
	 * @return long
	 */
	public function setHitCount($_HitCount)
	{
		return ($this->HitCount = $_HitCount);
	}
	/**
	 * Get HitCount
	 * @return long
	 */
	public function getHitCount()
	{
		return $this->HitCount;
	}
	/**
	 * Set DisableBuyerRequirements
	 * @param boolean DisableBuyerRequirements
	 * @return boolean
	 */
	public function setDisableBuyerRequirements($_DisableBuyerRequirements)
	{
		return ($this->DisableBuyerRequirements = $_DisableBuyerRequirements);
	}
	/**
	 * Get DisableBuyerRequirements
	 * @return boolean
	 */
	public function getDisableBuyerRequirements()
	{
		return $this->DisableBuyerRequirements;
	}
	/**
	 * Set BestOfferDetails
	 * @param BestOfferDetailsType BestOfferDetails
	 * @return BestOfferDetailsType
	 */
	public function setBestOfferDetails($_BestOfferDetails)
	{
		return ($this->BestOfferDetails = $_BestOfferDetails);
	}
	/**
	 * Get BestOfferDetails
	 * @return EbayTradingTypeBestOfferDetailsType
	 */
	public function getBestOfferDetails()
	{
		return $this->BestOfferDetails;
	}
	/**
	 * Set LocationDefaulted
	 * @param boolean LocationDefaulted
	 * @return boolean
	 */
	public function setLocationDefaulted($_LocationDefaulted)
	{
		return ($this->LocationDefaulted = $_LocationDefaulted);
	}
	/**
	 * Get LocationDefaulted
	 * @return boolean
	 */
	public function getLocationDefaulted()
	{
		return $this->LocationDefaulted;
	}
	/**
	 * Set ThirdPartyCheckout
	 * @param boolean ThirdPartyCheckout
	 * @return boolean
	 */
	public function setThirdPartyCheckout($_ThirdPartyCheckout)
	{
		return ($this->ThirdPartyCheckout = $_ThirdPartyCheckout);
	}
	/**
	 * Get ThirdPartyCheckout
	 * @return boolean
	 */
	public function getThirdPartyCheckout()
	{
		return $this->ThirdPartyCheckout;
	}
	/**
	 * Set UseTaxTable
	 * @param boolean UseTaxTable
	 * @return boolean
	 */
	public function setUseTaxTable($_UseTaxTable)
	{
		return ($this->UseTaxTable = $_UseTaxTable);
	}
	/**
	 * Get UseTaxTable
	 * @return boolean
	 */
	public function getUseTaxTable()
	{
		return $this->UseTaxTable;
	}
	/**
	 * Set GetItFast
	 * @param boolean GetItFast
	 * @return boolean
	 */
	public function setGetItFast($_GetItFast)
	{
		return ($this->GetItFast = $_GetItFast);
	}
	/**
	 * Get GetItFast
	 * @return boolean
	 */
	public function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * Set BuyerResponsibleForShipping
	 * @param boolean BuyerResponsibleForShipping
	 * @return boolean
	 */
	public function setBuyerResponsibleForShipping($_BuyerResponsibleForShipping)
	{
		return ($this->BuyerResponsibleForShipping = $_BuyerResponsibleForShipping);
	}
	/**
	 * Get BuyerResponsibleForShipping
	 * @return boolean
	 */
	public function getBuyerResponsibleForShipping()
	{
		return $this->BuyerResponsibleForShipping;
	}
	/**
	 * Set LimitedWarrantyEligible
	 * @param boolean LimitedWarrantyEligible
	 * @return boolean
	 */
	public function setLimitedWarrantyEligible($_LimitedWarrantyEligible)
	{
		return ($this->LimitedWarrantyEligible = $_LimitedWarrantyEligible);
	}
	/**
	 * Get LimitedWarrantyEligible
	 * @return boolean
	 */
	public function getLimitedWarrantyEligible()
	{
		return $this->LimitedWarrantyEligible;
	}
	/**
	 * Set eBayNotes
	 * @param string eBayNotes
	 * @return string
	 */
	public function setEBayNotes($_eBayNotes)
	{
		return ($this->eBayNotes = $_eBayNotes);
	}
	/**
	 * Get eBayNotes
	 * @return string
	 */
	public function getEBayNotes()
	{
		return $this->eBayNotes;
	}
	/**
	 * Set QuestionCount
	 * @param long QuestionCount
	 * @return long
	 */
	public function setQuestionCount($_QuestionCount)
	{
		return ($this->QuestionCount = $_QuestionCount);
	}
	/**
	 * Get QuestionCount
	 * @return long
	 */
	public function getQuestionCount()
	{
		return $this->QuestionCount;
	}
	/**
	 * Set Relisted
	 * @param boolean Relisted
	 * @return boolean
	 */
	public function setRelisted($_Relisted)
	{
		return ($this->Relisted = $_Relisted);
	}
	/**
	 * Get Relisted
	 * @return boolean
	 */
	public function getRelisted()
	{
		return $this->Relisted;
	}
	/**
	 * Set QuantityAvailable
	 * @param int QuantityAvailable
	 * @return int
	 */
	public function setQuantityAvailable($_QuantityAvailable)
	{
		return ($this->QuantityAvailable = $_QuantityAvailable);
	}
	/**
	 * Get QuantityAvailable
	 * @return int
	 */
	public function getQuantityAvailable()
	{
		return $this->QuantityAvailable;
	}
	/**
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set CategoryBasedAttributesPrefill
	 * @param boolean CategoryBasedAttributesPrefill
	 * @return boolean
	 */
	public function setCategoryBasedAttributesPrefill($_CategoryBasedAttributesPrefill)
	{
		return ($this->CategoryBasedAttributesPrefill = $_CategoryBasedAttributesPrefill);
	}
	/**
	 * Get CategoryBasedAttributesPrefill
	 * @return boolean
	 */
	public function getCategoryBasedAttributesPrefill()
	{
		return $this->CategoryBasedAttributesPrefill;
	}
	/**
	 * Set SearchDetails
	 * @param SearchDetailsType SearchDetails
	 * @return SearchDetailsType
	 */
	public function setSearchDetails($_SearchDetails)
	{
		return ($this->SearchDetails = $_SearchDetails);
	}
	/**
	 * Get SearchDetails
	 * @return EbayTradingTypeSearchDetailsType
	 */
	public function getSearchDetails()
	{
		return $this->SearchDetails;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set ShippingTermsInDescription
	 * @param boolean ShippingTermsInDescription
	 * @return boolean
	 */
	public function setShippingTermsInDescription($_ShippingTermsInDescription)
	{
		return ($this->ShippingTermsInDescription = $_ShippingTermsInDescription);
	}
	/**
	 * Get ShippingTermsInDescription
	 * @return boolean
	 */
	public function getShippingTermsInDescription()
	{
		return $this->ShippingTermsInDescription;
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
	 * Set SellerInventoryID
	 * @param string SellerInventoryID
	 * @return string
	 */
	public function setSellerInventoryID($_SellerInventoryID)
	{
		return ($this->SellerInventoryID = $_SellerInventoryID);
	}
	/**
	 * Get SellerInventoryID
	 * @return string
	 */
	public function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}
	/**
	 * Set PictureDetails
	 * @param PictureDetailsType PictureDetails
	 * @return PictureDetailsType
	 */
	public function setPictureDetails($_PictureDetails)
	{
		return ($this->PictureDetails = $_PictureDetails);
	}
	/**
	 * Get PictureDetails
	 * @return EbayTradingTypePictureDetailsType
	 */
	public function getPictureDetails()
	{
		return $this->PictureDetails;
	}
	/**
	 * Set DispatchTimeMax
	 * @param int DispatchTimeMax
	 * @return int
	 */
	public function setDispatchTimeMax($_DispatchTimeMax)
	{
		return ($this->DispatchTimeMax = $_DispatchTimeMax);
	}
	/**
	 * Get DispatchTimeMax
	 * @return int
	 */
	public function getDispatchTimeMax()
	{
		return $this->DispatchTimeMax;
	}
	/**
	 * Set SkypeEnabled
	 * @param boolean SkypeEnabled
	 * @return boolean
	 */
	public function setSkypeEnabled($_SkypeEnabled)
	{
		return ($this->SkypeEnabled = $_SkypeEnabled);
	}
	/**
	 * Get SkypeEnabled
	 * @return boolean
	 */
	public function getSkypeEnabled()
	{
		return $this->SkypeEnabled;
	}
	/**
	 * Set SkypeID
	 * @param string SkypeID
	 * @return string
	 */
	public function setSkypeID($_SkypeID)
	{
		return ($this->SkypeID = $_SkypeID);
	}
	/**
	 * Get SkypeID
	 * @return string
	 */
	public function getSkypeID()
	{
		return $this->SkypeID;
	}
	/**
	 * Set SkypeContactOption
	 * @param SkypeContactOptionCodeType SkypeContactOption
	 * @return SkypeContactOptionCodeType
	 */
	public function setSkypeContactOption($_SkypeContactOption)
	{
		return ($this->SkypeContactOption = EbayTradingTypeSkypeContactOptionCodeType::valueIsValid($_SkypeContactOption)?$_SkypeContactOption:null);
	}
	/**
	 * Get SkypeContactOption
	 * @return EbayTradingTypeSkypeContactOptionCodeType
	 */
	public function getSkypeContactOption()
	{
		return $this->SkypeContactOption;
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
	 * Set LocalListing
	 * @param boolean LocalListing
	 * @return boolean
	 */
	public function setLocalListing($_LocalListing)
	{
		return ($this->LocalListing = $_LocalListing);
	}
	/**
	 * Get LocalListing
	 * @return boolean
	 */
	public function getLocalListing()
	{
		return $this->LocalListing;
	}
	/**
	 * Set ThirdPartyCheckoutIntegration
	 * @param boolean ThirdPartyCheckoutIntegration
	 * @return boolean
	 */
	public function setThirdPartyCheckoutIntegration($_ThirdPartyCheckoutIntegration)
	{
		return ($this->ThirdPartyCheckoutIntegration = $_ThirdPartyCheckoutIntegration);
	}
	/**
	 * Get ThirdPartyCheckoutIntegration
	 * @return boolean
	 */
	public function getThirdPartyCheckoutIntegration()
	{
		return $this->ThirdPartyCheckoutIntegration;
	}
	/**
	 * Set ListingCheckoutRedirectPreference
	 * @param ListingCheckoutRedirectPreferenceType ListingCheckoutRedirectPreference
	 * @return ListingCheckoutRedirectPreferenceType
	 */
	public function setListingCheckoutRedirectPreference($_ListingCheckoutRedirectPreference)
	{
		return ($this->ListingCheckoutRedirectPreference = $_ListingCheckoutRedirectPreference);
	}
	/**
	 * Get ListingCheckoutRedirectPreference
	 * @return EbayTradingTypeListingCheckoutRedirectPreferenceType
	 */
	public function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}
	/**
	 * Set SellerContactDetails
	 * @param AddressType SellerContactDetails
	 * @return AddressType
	 */
	public function setSellerContactDetails($_SellerContactDetails)
	{
		return ($this->SellerContactDetails = $_SellerContactDetails);
	}
	/**
	 * Get SellerContactDetails
	 * @return EbayTradingTypeAddressType
	 */
	public function getSellerContactDetails()
	{
		return $this->SellerContactDetails;
	}
	/**
	 * Set TotalQuestionCount
	 * @param long TotalQuestionCount
	 * @return long
	 */
	public function setTotalQuestionCount($_TotalQuestionCount)
	{
		return ($this->TotalQuestionCount = $_TotalQuestionCount);
	}
	/**
	 * Get TotalQuestionCount
	 * @return long
	 */
	public function getTotalQuestionCount()
	{
		return $this->TotalQuestionCount;
	}
	/**
	 * Set ProxyItem
	 * @param boolean ProxyItem
	 * @return boolean
	 */
	public function setProxyItem($_ProxyItem)
	{
		return ($this->ProxyItem = $_ProxyItem);
	}
	/**
	 * Get ProxyItem
	 * @return boolean
	 */
	public function getProxyItem()
	{
		return $this->ProxyItem;
	}
	/**
	 * Set ExtendedSellerContactDetails
	 * @param ExtendedContactDetailsType ExtendedSellerContactDetails
	 * @return ExtendedContactDetailsType
	 */
	public function setExtendedSellerContactDetails($_ExtendedSellerContactDetails)
	{
		return ($this->ExtendedSellerContactDetails = $_ExtendedSellerContactDetails);
	}
	/**
	 * Get ExtendedSellerContactDetails
	 * @return EbayTradingTypeExtendedContactDetailsType
	 */
	public function getExtendedSellerContactDetails()
	{
		return $this->ExtendedSellerContactDetails;
	}
	/**
	 * Set LeadCount
	 * @param int LeadCount
	 * @return int
	 */
	public function setLeadCount($_LeadCount)
	{
		return ($this->LeadCount = $_LeadCount);
	}
	/**
	 * Get LeadCount
	 * @return int
	 */
	public function getLeadCount()
	{
		return $this->LeadCount;
	}
	/**
	 * Set NewLeadCount
	 * @param int NewLeadCount
	 * @return int
	 */
	public function setNewLeadCount($_NewLeadCount)
	{
		return ($this->NewLeadCount = $_NewLeadCount);
	}
	/**
	 * Get NewLeadCount
	 * @return int
	 */
	public function getNewLeadCount()
	{
		return $this->NewLeadCount;
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
	 * Set GroupCategoryID
	 * @param string GroupCategoryID
	 * @return string
	 */
	public function setGroupCategoryID($_GroupCategoryID)
	{
		return ($this->GroupCategoryID = $_GroupCategoryID);
	}
	/**
	 * Get GroupCategoryID
	 * @return string
	 */
	public function getGroupCategoryID()
	{
		return $this->GroupCategoryID;
	}
	/**
	 * Set ClassifiedAdPayPerLeadFee
	 * @param AmountType ClassifiedAdPayPerLeadFee
	 * @return AmountType
	 */
	public function setClassifiedAdPayPerLeadFee($_ClassifiedAdPayPerLeadFee)
	{
		return ($this->ClassifiedAdPayPerLeadFee = $_ClassifiedAdPayPerLeadFee);
	}
	/**
	 * Get ClassifiedAdPayPerLeadFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getClassifiedAdPayPerLeadFee()
	{
		return $this->ClassifiedAdPayPerLeadFee;
	}
	/**
	 * Set BidGroupItem
	 * @param boolean BidGroupItem
	 * @return boolean
	 */
	public function setBidGroupItem($_BidGroupItem)
	{
		return ($this->BidGroupItem = $_BidGroupItem);
	}
	/**
	 * Get BidGroupItem
	 * @return boolean
	 */
	public function getBidGroupItem()
	{
		return $this->BidGroupItem;
	}
	/**
	 * Set ApplyBuyerProtection
	 * @param BuyerProtectionDetailsType ApplyBuyerProtection
	 * @return BuyerProtectionDetailsType
	 */
	public function setApplyBuyerProtection($_ApplyBuyerProtection)
	{
		return ($this->ApplyBuyerProtection = $_ApplyBuyerProtection);
	}
	/**
	 * Get ApplyBuyerProtection
	 * @return EbayTradingTypeBuyerProtectionDetailsType
	 */
	public function getApplyBuyerProtection()
	{
		return $this->ApplyBuyerProtection;
	}
	/**
	 * Set ListingSubtype2
	 * @param ListingSubtypeCodeType ListingSubtype2
	 * @return ListingSubtypeCodeType
	 */
	public function setListingSubtype2($_ListingSubtype2)
	{
		return ($this->ListingSubtype2 = EbayTradingTypeListingSubtypeCodeType::valueIsValid($_ListingSubtype2)?$_ListingSubtype2:null);
	}
	/**
	 * Get ListingSubtype2
	 * @return EbayTradingTypeListingSubtypeCodeType
	 */
	public function getListingSubtype2()
	{
		return $this->ListingSubtype2;
	}
	/**
	 * Set MechanicalCheckAccepted
	 * @param boolean MechanicalCheckAccepted
	 * @return boolean
	 */
	public function setMechanicalCheckAccepted($_MechanicalCheckAccepted)
	{
		return ($this->MechanicalCheckAccepted = $_MechanicalCheckAccepted);
	}
	/**
	 * Get MechanicalCheckAccepted
	 * @return boolean
	 */
	public function getMechanicalCheckAccepted()
	{
		return $this->MechanicalCheckAccepted;
	}
	/**
	 * Set UpdateSellerInfo
	 * @param boolean UpdateSellerInfo
	 * @return boolean
	 */
	public function setUpdateSellerInfo($_UpdateSellerInfo)
	{
		return ($this->UpdateSellerInfo = $_UpdateSellerInfo);
	}
	/**
	 * Get UpdateSellerInfo
	 * @return boolean
	 */
	public function getUpdateSellerInfo()
	{
		return $this->UpdateSellerInfo;
	}
	/**
	 * Set UpdateReturnPolicy
	 * @param boolean UpdateReturnPolicy
	 * @return boolean
	 */
	public function setUpdateReturnPolicy($_UpdateReturnPolicy)
	{
		return ($this->UpdateReturnPolicy = $_UpdateReturnPolicy);
	}
	/**
	 * Get UpdateReturnPolicy
	 * @return boolean
	 */
	public function getUpdateReturnPolicy()
	{
		return $this->UpdateReturnPolicy;
	}
	/**
	 * Set ItemPolicyViolation
	 * @param ItemPolicyViolationType ItemPolicyViolation
	 * @return ItemPolicyViolationType
	 */
	public function setItemPolicyViolation($_ItemPolicyViolation)
	{
		return ($this->ItemPolicyViolation = $_ItemPolicyViolation);
	}
	/**
	 * Get ItemPolicyViolation
	 * @return EbayTradingTypeItemPolicyViolationType
	 */
	public function getItemPolicyViolation()
	{
		return $this->ItemPolicyViolation;
	}
	/**
	 * Set CrossBorderTrade
	 * @param string CrossBorderTrade
	 * @return string
	 */
	public function setCrossBorderTrade($_CrossBorderTrade)
	{
		return ($this->CrossBorderTrade = $_CrossBorderTrade);
	}
	/**
	 * Get CrossBorderTrade
	 * @return string
	 */
	public function getCrossBorderTrade()
	{
		return $this->CrossBorderTrade;
	}
	/**
	 * Set BusinessSellerDetails
	 * @param BusinessSellerDetailsType BusinessSellerDetails
	 * @return BusinessSellerDetailsType
	 */
	public function setBusinessSellerDetails($_BusinessSellerDetails)
	{
		return ($this->BusinessSellerDetails = $_BusinessSellerDetails);
	}
	/**
	 * Get BusinessSellerDetails
	 * @return EbayTradingTypeBusinessSellerDetailsType
	 */
	public function getBusinessSellerDetails()
	{
		return $this->BusinessSellerDetails;
	}
	/**
	 * Set BuyerGuaranteePrice
	 * @param AmountType BuyerGuaranteePrice
	 * @return AmountType
	 */
	public function setBuyerGuaranteePrice($_BuyerGuaranteePrice)
	{
		return ($this->BuyerGuaranteePrice = $_BuyerGuaranteePrice);
	}
	/**
	 * Get BuyerGuaranteePrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getBuyerGuaranteePrice()
	{
		return $this->BuyerGuaranteePrice;
	}
	/**
	 * Set BuyerRequirementDetails
	 * @param BuyerRequirementDetailsType BuyerRequirementDetails
	 * @return BuyerRequirementDetailsType
	 */
	public function setBuyerRequirementDetails($_BuyerRequirementDetails)
	{
		return ($this->BuyerRequirementDetails = $_BuyerRequirementDetails);
	}
	/**
	 * Get BuyerRequirementDetails
	 * @return EbayTradingTypeBuyerRequirementDetailsType
	 */
	public function getBuyerRequirementDetails()
	{
		return $this->BuyerRequirementDetails;
	}
	/**
	 * Set ReturnPolicy
	 * @param ReturnPolicyType ReturnPolicy
	 * @return ReturnPolicyType
	 */
	public function setReturnPolicy($_ReturnPolicy)
	{
		return ($this->ReturnPolicy = $_ReturnPolicy);
	}
	/**
	 * Get ReturnPolicy
	 * @return EbayTradingTypeReturnPolicyType
	 */
	public function getReturnPolicy()
	{
		return $this->ReturnPolicy;
	}
	/**
	 * Set PaymentAllowedSite
	 * @param SiteCodeType PaymentAllowedSite
	 * @return SiteCodeType
	 */
	public function setPaymentAllowedSite($_PaymentAllowedSite)
	{
		return ($this->PaymentAllowedSite = EbayTradingTypeSiteCodeType::valueIsValid($_PaymentAllowedSite)?$_PaymentAllowedSite:null);
	}
	/**
	 * Get PaymentAllowedSite
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getPaymentAllowedSite()
	{
		return $this->PaymentAllowedSite;
	}
	/**
	 * Set InventoryTrackingMethod
	 * @param InventoryTrackingMethodCodeType InventoryTrackingMethod
	 * @return InventoryTrackingMethodCodeType
	 */
	public function setInventoryTrackingMethod($_InventoryTrackingMethod)
	{
		return ($this->InventoryTrackingMethod = EbayTradingTypeInventoryTrackingMethodCodeType::valueIsValid($_InventoryTrackingMethod)?$_InventoryTrackingMethod:null);
	}
	/**
	 * Get InventoryTrackingMethod
	 * @return EbayTradingTypeInventoryTrackingMethodCodeType
	 */
	public function getInventoryTrackingMethod()
	{
		return $this->InventoryTrackingMethod;
	}
	/**
	 * Set IntegratedMerchantCreditCardEnabled
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function setIntegratedMerchantCreditCardEnabled($_IntegratedMerchantCreditCardEnabled)
	{
		return ($this->IntegratedMerchantCreditCardEnabled = $_IntegratedMerchantCreditCardEnabled);
	}
	/**
	 * Get IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * Set Variations
	 * @param VariationsType Variations
	 * @return VariationsType
	 */
	public function setVariations($_Variations)
	{
		return ($this->Variations = $_Variations);
	}
	/**
	 * Get Variations
	 * @return EbayTradingTypeVariationsType
	 */
	public function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * Set ItemCompatibilityList
	 * @param ItemCompatibilityListType ItemCompatibilityList
	 * @return ItemCompatibilityListType
	 */
	public function setItemCompatibilityList($_ItemCompatibilityList)
	{
		return ($this->ItemCompatibilityList = $_ItemCompatibilityList);
	}
	/**
	 * Get ItemCompatibilityList
	 * @return EbayTradingTypeItemCompatibilityListType
	 */
	public function getItemCompatibilityList()
	{
		return $this->ItemCompatibilityList;
	}
	/**
	 * Set ItemCompatibilityCount
	 * @param int ItemCompatibilityCount
	 * @return int
	 */
	public function setItemCompatibilityCount($_ItemCompatibilityCount)
	{
		return ($this->ItemCompatibilityCount = $_ItemCompatibilityCount);
	}
	/**
	 * Get ItemCompatibilityCount
	 * @return int
	 */
	public function getItemCompatibilityCount()
	{
		return $this->ItemCompatibilityCount;
	}
	/**
	 * Set ConditionID
	 * @param int ConditionID
	 * @return int
	 */
	public function setConditionID($_ConditionID)
	{
		return ($this->ConditionID = $_ConditionID);
	}
	/**
	 * Get ConditionID
	 * @return int
	 */
	public function getConditionID()
	{
		return $this->ConditionID;
	}
	/**
	 * Set ConditionDisplayName
	 * @param string ConditionDisplayName
	 * @return string
	 */
	public function setConditionDisplayName($_ConditionDisplayName)
	{
		return ($this->ConditionDisplayName = $_ConditionDisplayName);
	}
	/**
	 * Get ConditionDisplayName
	 * @return string
	 */
	public function getConditionDisplayName()
	{
		return $this->ConditionDisplayName;
	}
	/**
	 * Set TaxCategory
	 * @param string TaxCategory
	 * @return string
	 */
	public function setTaxCategory($_TaxCategory)
	{
		return ($this->TaxCategory = $_TaxCategory);
	}
	/**
	 * Get TaxCategory
	 * @return string
	 */
	public function getTaxCategory()
	{
		return $this->TaxCategory;
	}
	/**
	 * Set QuantityAvailableHint
	 * @param QuantityAvailableHintCodeType QuantityAvailableHint
	 * @return QuantityAvailableHintCodeType
	 */
	public function setQuantityAvailableHint($_QuantityAvailableHint)
	{
		return ($this->QuantityAvailableHint = EbayTradingTypeQuantityAvailableHintCodeType::valueIsValid($_QuantityAvailableHint)?$_QuantityAvailableHint:null);
	}
	/**
	 * Get QuantityAvailableHint
	 * @return EbayTradingTypeQuantityAvailableHintCodeType
	 */
	public function getQuantityAvailableHint()
	{
		return $this->QuantityAvailableHint;
	}
	/**
	 * Set QuantityThreshold
	 * @param int QuantityThreshold
	 * @return int
	 */
	public function setQuantityThreshold($_QuantityThreshold)
	{
		return ($this->QuantityThreshold = $_QuantityThreshold);
	}
	/**
	 * Get QuantityThreshold
	 * @return int
	 */
	public function getQuantityThreshold()
	{
		return $this->QuantityThreshold;
	}
	/**
	 * Set PostCheckoutExperienceEnabled
	 * @param boolean PostCheckoutExperienceEnabled
	 * @return boolean
	 */
	public function setPostCheckoutExperienceEnabled($_PostCheckoutExperienceEnabled)
	{
		return ($this->PostCheckoutExperienceEnabled = $_PostCheckoutExperienceEnabled);
	}
	/**
	 * Get PostCheckoutExperienceEnabled
	 * @return boolean
	 */
	public function getPostCheckoutExperienceEnabled()
	{
		return $this->PostCheckoutExperienceEnabled;
	}
	/**
	 * Set DiscountPriceInfo
	 * @param DiscountPriceInfoType DiscountPriceInfo
	 * @return DiscountPriceInfoType
	 */
	public function setDiscountPriceInfo($_DiscountPriceInfo)
	{
		return ($this->DiscountPriceInfo = $_DiscountPriceInfo);
	}
	/**
	 * Get DiscountPriceInfo
	 * @return EbayTradingTypeDiscountPriceInfoType
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}
	/**
	 * Set UseRecommendedProduct
	 * @param boolean UseRecommendedProduct
	 * @return boolean
	 */
	public function setUseRecommendedProduct($_UseRecommendedProduct)
	{
		return ($this->UseRecommendedProduct = $_UseRecommendedProduct);
	}
	/**
	 * Get UseRecommendedProduct
	 * @return boolean
	 */
	public function getUseRecommendedProduct()
	{
		return $this->UseRecommendedProduct;
	}
	/**
	 * Set SellerProvidedTitle
	 * @param string SellerProvidedTitle
	 * @return string
	 */
	public function setSellerProvidedTitle($_SellerProvidedTitle)
	{
		return ($this->SellerProvidedTitle = $_SellerProvidedTitle);
	}
	/**
	 * Get SellerProvidedTitle
	 * @return string
	 */
	public function getSellerProvidedTitle()
	{
		return $this->SellerProvidedTitle;
	}
	/**
	 * Set VIN
	 * @param string VIN
	 * @return string
	 */
	public function setVIN($_VIN)
	{
		return ($this->VIN = $_VIN);
	}
	/**
	 * Get VIN
	 * @return string
	 */
	public function getVIN()
	{
		return $this->VIN;
	}
	/**
	 * Set VINLink
	 * @param string VINLink
	 * @return string
	 */
	public function setVINLink($_VINLink)
	{
		return ($this->VINLink = $_VINLink);
	}
	/**
	 * Get VINLink
	 * @return string
	 */
	public function getVINLink()
	{
		return $this->VINLink;
	}
	/**
	 * Set VRM
	 * @param string VRM
	 * @return string
	 */
	public function setVRM($_VRM)
	{
		return ($this->VRM = $_VRM);
	}
	/**
	 * Get VRM
	 * @return string
	 */
	public function getVRM()
	{
		return $this->VRM;
	}
	/**
	 * Set VRMLink
	 * @param string VRMLink
	 * @return string
	 */
	public function setVRMLink($_VRMLink)
	{
		return ($this->VRMLink = $_VRMLink);
	}
	/**
	 * Get VRMLink
	 * @return string
	 */
	public function getVRMLink()
	{
		return $this->VRMLink;
	}
	/**
	 * Set QuantityInfo
	 * @param QuantityInfoType QuantityInfo
	 * @return QuantityInfoType
	 */
	public function setQuantityInfo($_QuantityInfo)
	{
		return ($this->QuantityInfo = $_QuantityInfo);
	}
	/**
	 * Get QuantityInfo
	 * @return EbayTradingTypeQuantityInfoType
	 */
	public function getQuantityInfo()
	{
		return $this->QuantityInfo;
	}
	/**
	 * Set SellerProfiles
	 * @param SellerProfilesType SellerProfiles
	 * @return SellerProfilesType
	 */
	public function setSellerProfiles($_SellerProfiles)
	{
		return ($this->SellerProfiles = $_SellerProfiles);
	}
	/**
	 * Get SellerProfiles
	 * @return EbayTradingTypeSellerProfilesType
	 */
	public function getSellerProfiles()
	{
		return $this->SellerProfiles;
	}
	/**
	 * Set ShippingPackageDetails
	 * @param ShipPackageDetailsType ShippingPackageDetails
	 * @return ShipPackageDetailsType
	 */
	public function setShippingPackageDetails($_ShippingPackageDetails)
	{
		return ($this->ShippingPackageDetails = $_ShippingPackageDetails);
	}
	/**
	 * Get ShippingPackageDetails
	 * @return EbayTradingTypeShipPackageDetailsType
	 */
	public function getShippingPackageDetails()
	{
		return $this->ShippingPackageDetails;
	}
	/**
	 * Set TopRatedListing
	 * @param boolean TopRatedListing
	 * @return boolean
	 */
	public function setTopRatedListing($_TopRatedListing)
	{
		return ($this->TopRatedListing = $_TopRatedListing);
	}
	/**
	 * Get TopRatedListing
	 * @return boolean
	 */
	public function getTopRatedListing()
	{
		return $this->TopRatedListing;
	}
	/**
	 * Set FloorPrice
	 * @param AmountType FloorPrice
	 * @return AmountType
	 */
	public function setFloorPrice($_FloorPrice)
	{
		return ($this->FloorPrice = $_FloorPrice);
	}
	/**
	 * Get FloorPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getFloorPrice()
	{
		return $this->FloorPrice;
	}
	/**
	 * Set CeilingPrice
	 * @param AmountType CeilingPrice
	 * @return AmountType
	 */
	public function setCeilingPrice($_CeilingPrice)
	{
		return ($this->CeilingPrice = $_CeilingPrice);
	}
	/**
	 * Get CeilingPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getCeilingPrice()
	{
		return $this->CeilingPrice;
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