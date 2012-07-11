<?php
/**
 * Class file for EbayShoppingTypeSimpleItemType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSimpleItemType
 * Documentation : Contains information for an item.
 * @date 05/07/2012
 */
class EbayShoppingTypeSimpleItemType extends EbayShoppingWsdlClass
{
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller will accept a best offer for this item. This feature enables a buyer to make a lower-priced binding offer on a fixed price item. Buyers can't see how many offers have been made (only the seller can see this information). To make a best offer on a listing, use the eBay Web site.
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The BuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Buy It Now price of the item, returned in the currency of the site on which the item was listed. <br /> <br /> For Chinese auctions (competitive bidding online auctions), Buy It Now lets a user purchase the item at a fixed price and end the auction immediately. On most sites, after a Chinese auction has bids, the listing is no longer eligible for Buy It Now. However, calls can return BuyItNowPrice if the seller originally listed the item with a Buy It Now option. Use the Item.BidCount field to determine whether an auction with Buy It Now has bids or not, and use Item.BuyItNowAvailable to see if the Buy It Now option is still available. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br> <br /> For fixed-price (FixedPriceItem) and Store Inventory listings (StoresFixedPrice), see CurrentPrice or ConvertedCurrentPrice instead. <br /> <br /> Returned only if an item was listed with a Buy It Now option.
	 * @var EbayShoppingTypeAmountType
	 */
	public $BuyItNowPrice;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller's description of the item, if any. This can include HTML markup and JavaScript. See <a href="types/simpleTypes.html#string">string</a> in Simple Schema Types. <br> <br> Some sellers don't specify their own listing description. Instead, they use a stock description from a catalog available through eBay. (GetSingleItem doesn't return this stock information.)
	 * @var string
	 */
	public $Description;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID that uniquely identifies the item listing. eBay generates this ID when an item is listed. This ID is unique across all eBay sites.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The BuyItNowAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item has an active Buy It Now option. On most sites, the Buy It Now option is disabled once a valid bid for the item has been accepted. To see if the item was listed with a Buy It Now option, see if the response includes Item.BuyItNowPrice. <br /> <br /> This field is returned only if the value is true.
	 * @var boolean
	 */
	public $BuyItNowAvailable;
	/**
	 * The ConvertedBuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent this request. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br /> <br /> Some eBay sites also support multi-item Buy It Now auctions, where you can buy multiple items from the same listing at a fixed price. See Item.BuyItNowAvailable. <br> <br> For fixed-price (FixedPriceItem) and Store Inventory listings (StoresFixedPrice), see CurrentPrice or ConvertedCurrentPrice instead. <br> <br> Returned only if an item was listed with a Buy It Now option. <br> <br> For active items, refresh this value every 24 hours to pick up the current conversion rates (if this value has been converted).
	 * @var EbayShoppingTypeAmountType
	 */
	public $ConvertedBuyItNowPrice;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp (in <a href="types/simpleTypes.html#dateTime">GMT</a>) of when the listing is scheduled to end, or time stamp of the actual end time (if the item ended).
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp (in <a href="types/simpleTypes.html#dateTime">GMT</a>) that eBay recorded as the moment that the listing was made available. The start time returned by a search call may vary from the value returned by GetSingleItem.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The ViewItemURLForNaturalSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL to view this listing on eBay. This URL is optimized to support natural search. That is, this URL is designed to make items on eBay easier to find via popular Internet search engines. For example, this URL specifies the item title, and it is optimized for natural search: "_W0QQ" is like "?" (question mark), "QQ" is like "&" (ampersand), and "Z" is like "=" (equals sign). You shouldn't modify the query syntax in your application. For example, eBay won't recognize the URL if you change QQ to ?.
	 * @var anyURI
	 */
	public $ViewItemURLForNaturalSearch;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format of the listing, such as online auction, fixed price, or advertisement format.
	 * @var EbayShoppingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Physical location of the item, as specified by the seller. (This gives a general indication of where the item will be shipped or delivered from.)
	 * @var string
	 */
	public $Location;
	/**
	 * The PaymentMethods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Identifies the payment method (such as PayPal) the seller will accept when the buyer pays for the item. <br> <br> <span class="tablenote"><b>Note:</b> If the seller only accepts PayPal, the buyer can still pay with a credit card. PayPal supports major credit cards. </span> <br> Payment methods are not applicable to eBay Real Estate advertisement listings, or other Classified Ad format listings.
	 * @var EbayShoppingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The GalleryURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for a picture used as the Gallery thumbnail, if any. The image uses one of the following graphics formats: JPEG, BMP, TIF, or GIF. Only returned if the seller chose to show a gallery image.
	 * @var anyURI
	 */
	public $GalleryURL;
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the URL for an image associated with the item, if any. Returned only if the seller included at least one picture in their listing. Note that this element does not return the URLs of pictures that the seller included in the Description via HTML IMG tags. <br> <br> Items listed the main eBay site can have a maximum of 12 picture URLs hosted by eBay Picture Services, or a maximum of 6 picture URLs hosted by a third party (such as the a photo site). Note that a listing can have up to 24 picture URLs on the US eBay Motors site (for all vehicle listings), and on the eBay Canada Motors site. <br> <br> eBay uses the seller's first picture at the top of the listing's View Item page.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Postal code indicating the physical location of the item, as specified by the seller. (This gives a general indication of where the item will be shipped or delivered from.)
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The PrimaryCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric ID of the first (or only) category in which the item is listed. (Listings can appear in more than one category.)
	 * @var string
	 */
	public $PrimaryCategoryID;
	/**
	 * The PrimaryCategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display name of the first (or only) category in which the item is listed. This is a fully qualified category breadcrumb (e.g., Computers & Networking:Laptops, Notebooks).
	 * @var string
	 */
	public $PrimaryCategoryName;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items the seller is offering in the listing. (Subtract Item.QuantitySold from this value to calculate the number of items currently available for sale.) <br> <br> An online, comptetitive-bidding auction with a Quantity of 1 is referred to as a < i>Chinese</i> auction. Basic fixed-price and Store Inventory listings can have a Quantity of 1 or more. <br /> <br /> The listing's current or Buy It Now price is the price of the item in the listing. <br /> <br /> <span class="tablenote"><strong>Note:</strong> A seller can also offer multiple items for sale with a single price for all the items. For example, instead of listing 10 lightbulbs for US 2.00 each, they might list 10 lightbulbs for USD 20.00 (where you have to buy all 10). This is called a "lot." <br /> <br /> If the listing includes a lot, Quantity does not specify the lot size; it reflects how many lots are being sold. For example, if the original listing included 5 lots of 10 lightbulbs each, Quantity would be 5. </span> <br />
	 * @var int
	 */
	public $Quantity;
	/**
	 * The Seller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about this listing's seller.
	 * @var EbayShoppingTypeSimpleUserType
	 */
	public $Seller;
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of bids that have been placed on the item. <br> <br> On most sites, the Buy It Now Option becomes unavailable once an auction has a valid bid. Note that the bid must be above any reserve price. <br> <br> <b>FindPopularItems: </b>For fixed-price listings, the BidCount value is the total number of items purchased so far (in the listing's lifetime).
	 * @var int
	 */
	public $BidCount;
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent this request. <br /> <br /> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br> <br /> Some eBay sites also support multi-item Buy It Now auctions, where you can buy multiple items from the same listing at a fixed price. See Item.BuyItNowAvailable. <br> <br> For fixed-price (FixedPriceItem) and Store Inventory listings (StoresFixedPrice), see CurrentPrice or ConvertedCurrentPrice instead. <br> <br> Returned only if an item was listed with a Buy It Now option. <br> <br> For active items, refresh this value every 24 hours to pick up the current conversion rates (if this value has been converted).
	 * @var EbayShoppingTypeAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current price of the item in the currency of the site on which the item was listed. That is, CurrentPrice is in the original listing currency. <br> <br> For competitive-bidding auction listings, this is the current minimum bid price (if the listing has no bids) or the current high bid (if the listing has bids). This does not reflect the BuyItNow price. <br> <br> For Basic Fixed-Price (FixedPriceItem), Store Inventory (StoresFixedPrice), and Ad format (AdType) listings, this is the current fixed price.
	 * @var EbayShoppingTypeAmountType
	 */
	public $CurrentPrice;
	/**
	 * The HighBidder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The high bidder for comptetitive-bidding auctions that have ended and have a winning bidder. This indicates the user who purchased the item. <br> <br> Not returned for auctions that have received no bids, or for fixed price and Store Inventory listings that are still active.
	 * @var EbayShoppingTypeSimpleUserType
	 */
	public $HighBidder;
	/**
	 * The ListingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies a listing's status in eBay's processing workflow. If an item's EndTime is in the past, but no details about the buyer or high bidder are shown (and the user is not anonymous), use this listing status information to determine whether eBay has finished processing the listing.
	 * @var EbayShoppingTypeListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items purchased so far from this listing. (Subtract this value from Item.Quantity to calculate the number of items currently available for sale.)
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ReserveMet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether any bids on this item are greater than the seller's reserve price for the listing (if any). <br> <br> A reserve is the lowest price at which the seller is willing to sell the item. The reserve price is higher than the listing's opening bid (minimum bid) and lower than the Buy It Now price, if any. (The reserve price is only known to the seller.) Some sellers don't set a reserve at all. If a listing does have a reserve price, the highest bidder will only win the item if their bid is also above that price. <br> <br> Only returned for online auctions that have a reserve price. (Fixed price, Store Inventory, and classified ad listings don't have reserve prices.)
	 * @var boolean
	 */
	public $ReserveMet;
	/**
	 * The ShipToLocations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to which the seller is willing to ship this item. Returned only for items that have ShipToLocations specified. <br> <br> <strong>Applicable values</strong>: <p class="ename">&bull;&nbsp;&nbsp; Americas</p> <p class="edef">(North, South, or Latin America)</p> <p class="ename">&bull;&nbsp;&nbsp; Asia</p> <p class="ename">&bull;&nbsp;&nbsp; Caribbean</p> <p class="ename">&bull;&nbsp;&nbsp; Europe</p> <p class="ename">&bull;&nbsp;&nbsp; EuropeanUnion</p> <p class="ename">&bull;&nbsp;&nbsp; LatinAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; MiddleEast</p> <p class="ename">&bull;&nbsp;&nbsp; NorthAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; Oceania</p> <p class="edef">(Pacific region other than Asia)</p> <p class="ename">&bull;&nbsp;&nbsp; SouthAmerica</p> <p class="ename">&bull;&nbsp;&nbsp; WillNotShip</p> <p class="edef">(No shipping, buyer must pick up the item)</p> <p class="ename">&bull;&nbsp;&nbsp; Worldwide</p> <p class="edef">(Seller will ship worldwide)</p> <p class="ename">&bull;&nbsp;&nbsp; 2-letter country identifier</p> <p class="edef">(See CountryCodeType for values)</p>
	 * @var string
	 */
	public $ShipToLocations;
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the eBay site on which the item was originally listed. For example, if the item is listed on the eBay US site, the value would be US. If it's listed on the eBay Germany site, the value would be Germany. <br> <br> The listing's original site can affect the values of converted (localized) prices (when your request specifies a site that is different from the listing's site).
	 * @var EbayShoppingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The TimeLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). For ended listings, the time left is PT0S (zero seconds).
	 * @var duration
	 */
	public $TimeLeft;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the item as it appears in the listing or in search and browse results. <br> <br> <b>For US eBay Motors vehicles only:</b> In item-retrieval calls (like GetSingleItem and GetMultipleItems), this value shows the vehicle Make and Model (e.g., "Buick : Skylark"). <br> <br> <span class="tablenote"><b>Note:</b> GetSingleItem does not return the same Item.Title value for US eBay Motors listings. Here's why: <br> <br> In general, GetSingleItem maps to eBay's View Item page. The eBay Motors Web site's View Item page shows two vehicle titles in the title bar: One title is a label based on the Year, Make, Model, and Submodel (e.g., "1996 Buick Skylark Limited"). The model is included unless it's "Other" or unspecified. The submodel is included if the seller specified a submodel. The other title is a path based on the Make and Model (e.g., "Buick : Skylark"). The Item.Title value in GetSingleItem maps to this path. </span> <br />
	 * @var string
	 */
	public $Title;
	/**
	 * The ShippingCostSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains basic shipping-related costs for the item. If Item.Quantity is greater than 1, this is the shipping cost for one item. If the seller offers a choice of more than one shipping service (such as UPS Ground and USPS Media mail), this is the cost of the "first" shipping option (usually the lowest cost option). <br> <br> If a listing has shipping costs, use GetShippingCosts if you want to get more details about the services and costs that the seller is offering.
	 * @var EbayShoppingTypeShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * The ItemSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Category-specific fields that the seller added to describe the listing. The names of these fields are different for items in different categories, so they're returned in a generic Name/Value structure. The field names are usually very well known within the category. <br> <br> For example, a book's item specifics might include a field like Publication Year=2007 (where Publication Year is returned in Name, and 2007 is returned in Value), and a field like Format=Hardcover. But a car's item specifics would be different from a book's, with fields like Make= Toyota and Model=Prius. And a ticket's item specifics would be different from those of books and cars, with fields like EventType=Concerts and Venue=The Fillmore. <br> <br> One of the most common uses for item specifics is the item condition. <br> <br> Only returned if the seller included Item Specifics in the listing.<br> <br> <span class="tablenote"><b>Note:</b> Starting in May 2010, many categories in Production and Sandbox will start returning the item condition in ConditionID and ConditionDisplayName instead, if the seller used ConditionID instead of ItemSpecifics. Monitor the eBay Developers Program newsletter for details and timing.</span>
	 * @var EbayShoppingTypeNameValueListArrayType
	 */
	public $ItemSpecifics;
	/**
	 * The HitCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of times the listing's View Item page has been viewed (as determined by eBay). Only returned if the seller has chosen to include a hit counter in the listing, and if the seller has also chosen to make the listing's hit count publicly visible. This field is retrieved asynchronously. If you believe the item has a publicly visible hit count, but this field is not returned, retry the call. <br> <br> Not applicable to Half.com
	 * @var long
	 */
	public $HitCount;
	/**
	 * The Subtitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subtitle of the item. Only returned if the seller included a subtitle for the listing. <br> <br> For US eBay Motors passenger vehicle, motorcycle, and "other vehicle" categories or listings in CA eBay Motors passenger vehicle and motorcycle categories, the seller's subtitle is only available in the Item.ItemSpecifics node. Call GetSingleItem with IncludeSelector=ItemSpecifics to retrieve a listing's Item Specifics.
	 * @var string
	 */
	public $Subtitle;
	/**
	 * The PrimaryCategoryIDPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fully qualified ID breadcrumb (path) of the first category. For example, if the primary category ID is 45678, and its parent category's ID is 123, the breadcrumb (path) would be 123:45678.
	 * @var string
	 */
	public $PrimaryCategoryIDPath;
	/**
	 * The SecondaryCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the second category in which the item is listed. Returned only if the seller listed a second category.
	 * @var string
	 */
	public $SecondaryCategoryID;
	/**
	 * The SecondaryCategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the second category in which the item is listed. Returned only if the seller listed a second category.
	 * @var string
	 */
	public $SecondaryCategoryName;
	/**
	 * The SecondaryCategoryIDPath
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The fully qualified ID breadcrumb (path) of the second category. For example, if the secondary category ID is 45678, and its parent category's ID is 123, the breadcrumb (path) would be 123:45678. Returned only if the seller listed a second category.
	 * @var string
	 */
	public $SecondaryCategoryIDPath;
	/**
	 * The Charity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Identifier for a Giving Works listing and the benefiting nonprofit charity organization.
	 * @var EbayShoppingTypeCharityType
	 */
	public $Charity;
	/**
	 * The GermanMotorsSearchable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item is featured in eBay search results on the mobile.de partner site. Applicable to eBay Germany.
	 * @var boolean
	 */
	public $GermanMotorsSearchable;
	/**
	 * The GetItFast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A Get It Fast listing.
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The Gift
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, a generic gift icon displays next the listing's title in search and browse pages.
	 * @var boolean
	 */
	public $Gift;
	/**
	 * The PictureExists
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns true if the item has an associated picture. Not returned if value is false.
	 * @var boolean
	 */
	public $PictureExists;
	/**
	 * The RecentListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns true if the item listing is no more than one day old. Not returned if value is false.
	 * @var boolean
	 */
	public $RecentListing;
	/**
	 * The Storefront
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the seller's store information if the seller has an eBay store. Returns a blank store if the seller does not have an eBay storefront.
	 * @var EbayShoppingTypeStorefrontType
	 */
	public $Storefront;
	/**
	 * The DistanceFromBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The distance of the item from the buyer. The DistanceFromBuyer unit (miles or kilometers) varies by site. If the country whose site you are searching, e.g. India, uses kilometers, then the DistanceFromBuyer unit is kilometers. Otherwise, e.g. if the country is US or UK, then the DistanceFromBuyer unit is miles. DistanceFromBuyer is returned if a value for PostalCode is supplied in the request.
	 * @var EbayShoppingTypeDistanceType
	 */
	public $DistanceFromBuyer;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Two-letter ISO 3166 country code to indicate the country where the item is located.
	 * @var EbayShoppingTypeCountryCodeType
	 */
	public $Country;
	/**
	 * The WatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of users who have placed the item on their Watch list.
	 * @var int
	 */
	public $WatchCount;
	/**
	 * The HalfItemCondition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the Half.com condition code for the item. For example, "brand new," "used," etc.
	 * @var EbayShoppingTypeHalfItemConditionCodeType
	 */
	public $HalfItemCondition;
	/**
	 * The SellerComments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Notes that the Seller made when they listed the item. Not returned if the Seller did not make any comments.
	 * @var string
	 */
	public $SellerComments;
	/**
	 * The ReturnPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a seller specified return policy details, then this container has fields with those details. The fields that can be returned in this container vary by site.
	 * @var EbayShoppingTypeReturnPolicyType
	 */
	public $ReturnPolicy;
	/**
	 * The MinimumToBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Smallest amount the next bid on the item can be. Returns same value as Item.StartPrice (if no bids have yet been placed) or CurrentPrice plus BidIncrement (if at least one bid has been placed). Only applicable to competitive-bid auction listings. Returns null for basic Fixed Price (FixedPriceItem),Store Inventory (StoresFixedPrice), and Ad type listings.
	 * @var EbayShoppingTypeAmountType
	 */
	public $MinimumToBid;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A prototype description of a well-known type of item, such as a popular book. <br> <br> When returned for GetSingleItem, is always of type Reference, and serves as a global reference ID for an eBay catalog product. <br> <br> When used as input, retrieves product details for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. <br> <br> The request requires either QueryKeywords or ProductID, but these fields cannot be used together.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The AutoPay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the seller requires immediate payment for the item. If false (or not specified), immediate payment is not requested. Buyers must have a PayPal account to purchase items that require immediate payment. <br><br> A seller can choose to require immediate payment for Fixed Price and Buy It Now listings, including eBay Stores Inventory listings. If a Buy It Now item ends as an auction (that is, if the Buy It Now option is removed due to bids being placed on the listing), the immediate payment requirement does not apply. <br><br> <span class="tablenote"><strong>Note:</strong> The value of the AutoPay flag indicates the seller's stated preference only. It does not indicate whether the listing is still a candidate for purchase via immediate payment. For example, if a listing receives bids and no longer qualifies for immediate payment, the value of the AutoPay flag does not change. </span> <br> Only applicable to items listed on PayPal-enabled sites and in categories that support immediate payment. Not applicable to Half.com.
	 * @var boolean
	 */
	public $AutoPay;
	/**
	 * The BusinessSellerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the seller's business information. Set the SellerBusinessCodeType to 'Commercial' in the request to return the related information. This is only applicable for sites where Business Seller options are supported.
	 * @var EbayShoppingTypeBusinessSellerDetailsType
	 */
	public $BusinessSellerDetails;
	/**
	 * The PaymentAllowedSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Enables you to view the sites on which an item can be purchased, based on the payment methods offered for the item.
	 * @var EbayShoppingTypeSiteCodeType
	 */
	public $PaymentAllowedSite;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway account. If IntegratedMerchantCreditCardEnabled is true, then integrated merchant credit card is enabled for credit cards because the seller has a payment gateway account. Therefore, if IntegratedMerchantCreditCardEnabled is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The Variations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Variations are multiple similar (but not identical) items in a single fixed-price (or Store Inventory Format) listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and price. Only returned if the listing contains multiple variations.
	 * @var EbayShoppingTypeVariationsType
	 */
	public $Variations;
	/**
	 * The HandlingTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of business days the seller commits to for preparing an item to be shipped after receiving a cleared payment. The seller sets this to a positive integer value (1, 2, 3, 4, 5, 10, 15, or 20) corresponding to the number of days. This time does not include the shipping time (the carrier's transit time). GetSingleItem or GetMultipleItems returns DispatchTimeMax only when shipping service options are specified for the item and the seller specified a dispatch time. <br> <br> Valid for flat and calculated shipping. Does not apply when there is no shipping, when it is local pickup only or it is freight shipping. <br> the listing ends, you can add or change the dispatch (handling) time.
	 * @var int
	 */
	public $HandlingTime;
	/**
	 * The LotSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A lot is a set of two or more similar items that must be purchased together in a single transaction. A listing can have multiple lots (instead of multiple items). When LotSize is specified, the listing price reflects the price of each lot (not each item within the lot). In this case, Quantity indicates the number of lots being listed, and LotSize indicates the number of items in each lot. (If a listing has no lots, Quantity indicates the number of separate items being listed.) Important: Lot items can be listed only in lot-enabled categories. GetCategories returns lot size disabled with a value of true for categories that do not support lots. <br /><br /> Not applicable to Half.com.
	 * @var int
	 */
	public $LotSize;
	/**
	 * The ConditionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="tablenote"><b>Note:</b> Starting in early March 2010, this will be supported for a few test categories in the Sandbox. In May 2010, ConditionID will be supported for many categories in Production and Sandbox. Monitor the eBay Developers Program newsletter for details and timing.</span> <br> <br> The numeric ID (e.g., 1000) for the item condition. Only returned when the seller specified ConditionID in their listing. Also see ItemSpecifics in case the seller used that field for the condition instead.
	 * @var int
	 */
	public $ConditionID;
	/**
	 * The ConditionDisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="tablenote"><b>Note:</b> Starting in early March 2010, this will be supported for a few test categories in the Sandbox. In May 2010, ConditionDisplayName will be supported for many categories in Production and Sandbox. Monitor the eBay Developers Program newsletter for details and timing.</span> <br> <br> The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> Most categories use the same display name for the same condition ID. Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another.<br> <br> Behind the scenes, eBay's search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished.<br> <br> Only returned when ConditionID is returned. Also see ItemSpecifics in case the seller used that field for the condition instead.
	 * @var string
	 */
	public $ConditionDisplayName;
	/**
	 * The QuantityAvailableHint
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of message that will be returned describing the quantity available for the item.
	 * @var EbayShoppingTypeQuantityAvailableHintCodeType
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
	 * The DiscountPriceInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container provides information for an item that has a Strikethrough Price (STP) or a Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and German (DE) sites, while MAP is available only on the US site. <br > <br > Discount pricing is available to qualified sellers (and their associated developers) who participate in the Discount Pricing Program. Once qualified, sellers receive a "sepcial account flag" (SAF) that allows them to apply Discount Pricing to both MSKU and Non-MSKU items.
	 * @var EbayShoppingTypeDiscountPriceInfoType
	 */
	public $DiscountPriceInfo;
	/**
	 * The ExcludeShipToLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Use this field to specify an international country or region, or a special domestic location (for sites supporting this feature, currently US, UK, DE) to where you will not ship the associated item. On input, repeat this element for each location that you want to exclude as a shipping destination for your item. <br><br> Set ShipToRegistrationCountry to true to have your ExcludeShipToLocation settings applied to your listing. The locations you have excluded display in the Shipping and Handling section of your item listing. <br><br> If a buyer's primary ship-to location is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on your item. <br><br> The exclude ship-to location values are eBay regions and countries. To see the valid exclude ship-to locations for a specified site, call GeteBayDetails with DetailName set to ExcludeShippingLocationDetails. Repeat GeteBayDetails for each site on which you list. <br><br> This field works in conjunction with Item.ShipToLocations to create a set of international countries and regions to where you will, and will not, ship. You can list a region in the ShipToLocations field, then exclude specific countries within that region with this field (for example, you can specify Africa in ShipToLocations, yet exclude Chad with a ExcludeShipToLocation setting). In addition, if your ShipToLocations is Worldwide, you can use this field to specify both regions and countries that you want to exclude from your shipping destinations. <br><br> You can specify a default set of locations to where you will not ship in My eBay. If you create an Exclude Ship-To List, it is, by default, in effect when you list items. However, if you specify any value in this field on input, it nullifies the default settings in your Exclude Ship-To List. (If you use ExcludeShipToLocation when you list an item, you will need to list all the locations to where you will not ship the associated item, regardless of the default settings in your Exclude Ship-To List.) <br><br> Specify NONE in this field to override the default Exclude Ship-To List you might have set up in My eBay and indicate that you do not want to exclude any shipping locations from the respective item listing. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you must enable Exclude Shipping Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href= "https://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1495" >HowTo: ExcludeShipToLocation</a>. </span>
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The TopRatedListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this field is returned as 'true', the listing meets eBay's Top-Rated 2.0 listing requirements. eBay's Top-Rated 2.0 program started in June 2012. <br/><br/> To be eligible for Top-Rated listings, the seller must: <ul> <li>have annual sales of $1,000 or more</li> <li>have an ongoing record of uploading shipment tracking information on at least 90 percent of their orders</li> </ul> To qualify as a Top-Rated listing, the listing must: <ul> <li>offer a one-day handling time (<b>Item.DispatchTimeMax=1</b>)</li> <li>accept returns (<b>Item.ReturnPolicy.ReturnsAcceptedOption=ReturnsAccepted</b>) </li> </ul>
	 * @var boolean
	 */
	public $TopRatedListing;
	/**
	 * The VhrUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL to the eBay Motors item's full Vehicle History Report. Only returned when the item has a Vehicle History Report.
	 * @var anyURI
	 */
	public $VhrUrl;
	/**
	 * The VhrAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the eBay Motors item has a Vehicle History Report associated with it.
	 * @var boolean
	 */
	public $VhrAvailable;
	/**
	 * The QuantityInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one or more tickets (but not all) from the listing. <br/><br/> This field is currently only applicable for event ticket listings in US and CA, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
	 * @var EbayShoppingTypeQuantityInfo
	 */
	public $QuantityInfo;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean BestOfferEnabled
	 * @param EbayShoppingTypeAmountType BuyItNowPrice
	 * @param string Description
	 * @param string ItemID
	 * @param boolean BuyItNowAvailable
	 * @param EbayShoppingTypeAmountType ConvertedBuyItNowPrice
	 * @param dateTime EndTime
	 * @param dateTime StartTime
	 * @param anyURI ViewItemURLForNaturalSearch
	 * @param EbayShoppingTypeListingTypeCodeType ListingType
	 * @param string Location
	 * @param EbayShoppingTypeBuyerPaymentMethodCodeType PaymentMethods
	 * @param anyURI GalleryURL
	 * @param anyURI PictureURL
	 * @param string PostalCode
	 * @param string PrimaryCategoryID
	 * @param string PrimaryCategoryName
	 * @param int Quantity
	 * @param EbayShoppingTypeSimpleUserType Seller
	 * @param int BidCount
	 * @param EbayShoppingTypeAmountType ConvertedCurrentPrice
	 * @param EbayShoppingTypeAmountType CurrentPrice
	 * @param EbayShoppingTypeSimpleUserType HighBidder
	 * @param EbayShoppingTypeListingStatusCodeType ListingStatus
	 * @param int QuantitySold
	 * @param boolean ReserveMet
	 * @param string ShipToLocations
	 * @param EbayShoppingTypeSiteCodeType Site
	 * @param duration TimeLeft
	 * @param string Title
	 * @param EbayShoppingTypeShippingCostSummaryType ShippingCostSummary
	 * @param EbayShoppingTypeNameValueListArrayType ItemSpecifics
	 * @param long HitCount
	 * @param string Subtitle
	 * @param string PrimaryCategoryIDPath
	 * @param string SecondaryCategoryID
	 * @param string SecondaryCategoryName
	 * @param string SecondaryCategoryIDPath
	 * @param EbayShoppingTypeCharityType Charity
	 * @param boolean GermanMotorsSearchable
	 * @param boolean GetItFast
	 * @param boolean Gift
	 * @param boolean PictureExists
	 * @param boolean RecentListing
	 * @param EbayShoppingTypeStorefrontType Storefront
	 * @param EbayShoppingTypeDistanceType DistanceFromBuyer
	 * @param EbayShoppingTypeCountryCodeType Country
	 * @param int WatchCount
	 * @param EbayShoppingTypeHalfItemConditionCodeType HalfItemCondition
	 * @param string SellerComments
	 * @param EbayShoppingTypeReturnPolicyType ReturnPolicy
	 * @param EbayShoppingTypeAmountType MinimumToBid
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param boolean AutoPay
	 * @param EbayShoppingTypeBusinessSellerDetailsType BusinessSellerDetails
	 * @param EbayShoppingTypeSiteCodeType PaymentAllowedSite
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param EbayShoppingTypeVariationsType Variations
	 * @param int HandlingTime
	 * @param int LotSize
	 * @param int ConditionID
	 * @param string ConditionDisplayName
	 * @param EbayShoppingTypeQuantityAvailableHintCodeType QuantityAvailableHint
	 * @param int QuantityThreshold
	 * @param EbayShoppingTypeDiscountPriceInfoType DiscountPriceInfo
	 * @param string ExcludeShipToLocation
	 * @param boolean TopRatedListing
	 * @param anyURI VhrUrl
	 * @param boolean VhrAvailable
	 * @param EbayShoppingTypeQuantityInfo QuantityInfo
	 * @param DOMDocument any
	 * @return EbayShoppingTypeSimpleItemType
	 */
	public function __construct($_BestOfferEnabled = null,$_BuyItNowPrice = null,$_Description = null,$_ItemID = null,$_BuyItNowAvailable = null,$_ConvertedBuyItNowPrice = null,$_EndTime = null,$_StartTime = null,$_ViewItemURLForNaturalSearch = null,$_ListingType = null,$_Location = null,$_PaymentMethods = null,$_GalleryURL = null,$_PictureURL = null,$_PostalCode = null,$_PrimaryCategoryID = null,$_PrimaryCategoryName = null,$_Quantity = null,$_Seller = null,$_BidCount = null,$_ConvertedCurrentPrice = null,$_CurrentPrice = null,$_HighBidder = null,$_ListingStatus = null,$_QuantitySold = null,$_ReserveMet = null,$_ShipToLocations = null,$_Site = null,$_TimeLeft = null,$_Title = null,$_ShippingCostSummary = null,$_ItemSpecifics = null,$_HitCount = null,$_Subtitle = null,$_PrimaryCategoryIDPath = null,$_SecondaryCategoryID = null,$_SecondaryCategoryName = null,$_SecondaryCategoryIDPath = null,$_Charity = null,$_GermanMotorsSearchable = null,$_GetItFast = null,$_Gift = null,$_PictureExists = null,$_RecentListing = null,$_Storefront = null,$_DistanceFromBuyer = null,$_Country = null,$_WatchCount = null,$_HalfItemCondition = null,$_SellerComments = null,$_ReturnPolicy = null,$_MinimumToBid = null,$_ProductID = null,$_AutoPay = null,$_BusinessSellerDetails = null,$_PaymentAllowedSite = null,$_IntegratedMerchantCreditCardEnabled = null,$_Variations = null,$_HandlingTime = null,$_LotSize = null,$_ConditionID = null,$_ConditionDisplayName = null,$_QuantityAvailableHint = null,$_QuantityThreshold = null,$_DiscountPriceInfo = null,$_ExcludeShipToLocation = null,$_TopRatedListing = null,$_VhrUrl = null,$_VhrAvailable = null,$_QuantityInfo = null,$_any = null)
	{
		parent::__construct(array('BestOfferEnabled'=>$_BestOfferEnabled,'BuyItNowPrice'=>$_BuyItNowPrice,'Description'=>$_Description,'ItemID'=>$_ItemID,'BuyItNowAvailable'=>$_BuyItNowAvailable,'ConvertedBuyItNowPrice'=>$_ConvertedBuyItNowPrice,'EndTime'=>$_EndTime,'StartTime'=>$_StartTime,'ViewItemURLForNaturalSearch'=>$_ViewItemURLForNaturalSearch,'ListingType'=>$_ListingType,'Location'=>$_Location,'PaymentMethods'=>$_PaymentMethods,'GalleryURL'=>$_GalleryURL,'PictureURL'=>$_PictureURL,'PostalCode'=>$_PostalCode,'PrimaryCategoryID'=>$_PrimaryCategoryID,'PrimaryCategoryName'=>$_PrimaryCategoryName,'Quantity'=>$_Quantity,'Seller'=>$_Seller,'BidCount'=>$_BidCount,'ConvertedCurrentPrice'=>$_ConvertedCurrentPrice,'CurrentPrice'=>$_CurrentPrice,'HighBidder'=>$_HighBidder,'ListingStatus'=>$_ListingStatus,'QuantitySold'=>$_QuantitySold,'ReserveMet'=>$_ReserveMet,'ShipToLocations'=>$_ShipToLocations,'Site'=>$_Site,'TimeLeft'=>$_TimeLeft,'Title'=>$_Title,'ShippingCostSummary'=>$_ShippingCostSummary,'ItemSpecifics'=>$_ItemSpecifics,'HitCount'=>$_HitCount,'Subtitle'=>$_Subtitle,'PrimaryCategoryIDPath'=>$_PrimaryCategoryIDPath,'SecondaryCategoryID'=>$_SecondaryCategoryID,'SecondaryCategoryName'=>$_SecondaryCategoryName,'SecondaryCategoryIDPath'=>$_SecondaryCategoryIDPath,'Charity'=>$_Charity,'GermanMotorsSearchable'=>$_GermanMotorsSearchable,'GetItFast'=>$_GetItFast,'Gift'=>$_Gift,'PictureExists'=>$_PictureExists,'RecentListing'=>$_RecentListing,'Storefront'=>$_Storefront,'DistanceFromBuyer'=>$_DistanceFromBuyer,'Country'=>$_Country,'WatchCount'=>$_WatchCount,'HalfItemCondition'=>$_HalfItemCondition,'SellerComments'=>$_SellerComments,'ReturnPolicy'=>$_ReturnPolicy,'MinimumToBid'=>$_MinimumToBid,'ProductID'=>$_ProductID,'AutoPay'=>$_AutoPay,'BusinessSellerDetails'=>$_BusinessSellerDetails,'PaymentAllowedSite'=>$_PaymentAllowedSite,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'Variations'=>$_Variations,'HandlingTime'=>$_HandlingTime,'LotSize'=>$_LotSize,'ConditionID'=>$_ConditionID,'ConditionDisplayName'=>$_ConditionDisplayName,'QuantityAvailableHint'=>$_QuantityAvailableHint,'QuantityThreshold'=>$_QuantityThreshold,'DiscountPriceInfo'=>$_DiscountPriceInfo,'ExcludeShipToLocation'=>$_ExcludeShipToLocation,'TopRatedListing'=>$_TopRatedListing,'VhrUrl'=>$_VhrUrl,'VhrAvailable'=>$_VhrAvailable,'QuantityInfo'=>$_QuantityInfo,'any'=>$_any));
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
	 * @return EbayShoppingTypeAmountType
	 */
	public function getBuyItNowPrice()
	{
		return $this->BuyItNowPrice;
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
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set BuyItNowAvailable
	 * @param boolean BuyItNowAvailable
	 * @return boolean
	 */
	public function setBuyItNowAvailable($_BuyItNowAvailable)
	{
		return ($this->BuyItNowAvailable = $_BuyItNowAvailable);
	}
	/**
	 * Get BuyItNowAvailable
	 * @return boolean
	 */
	public function getBuyItNowAvailable()
	{
		return $this->BuyItNowAvailable;
	}
	/**
	 * Set ConvertedBuyItNowPrice
	 * @param AmountType ConvertedBuyItNowPrice
	 * @return AmountType
	 */
	public function setConvertedBuyItNowPrice($_ConvertedBuyItNowPrice)
	{
		return ($this->ConvertedBuyItNowPrice = $_ConvertedBuyItNowPrice);
	}
	/**
	 * Get ConvertedBuyItNowPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set ViewItemURLForNaturalSearch
	 * @param anyURI ViewItemURLForNaturalSearch
	 * @return anyURI
	 */
	public function setViewItemURLForNaturalSearch($_ViewItemURLForNaturalSearch)
	{
		return ($this->ViewItemURLForNaturalSearch = $_ViewItemURLForNaturalSearch);
	}
	/**
	 * Get ViewItemURLForNaturalSearch
	 * @return anyURI
	 */
	public function getViewItemURLForNaturalSearch()
	{
		return $this->ViewItemURLForNaturalSearch;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = EbayShoppingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayShoppingTypeListingTypeCodeType
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
	 * Set PaymentMethods
	 * @param BuyerPaymentMethodCodeType PaymentMethods
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethods($_PaymentMethods)
	{
		return ($this->PaymentMethods = EbayShoppingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethods)?$_PaymentMethods:null);
	}
	/**
	 * Get PaymentMethods
	 * @return EbayShoppingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethods()
	{
		return $this->PaymentMethods;
	}
	/**
	 * Set GalleryURL
	 * @param anyURI GalleryURL
	 * @return anyURI
	 */
	public function setGalleryURL($_GalleryURL)
	{
		return ($this->GalleryURL = $_GalleryURL);
	}
	/**
	 * Get GalleryURL
	 * @return anyURI
	 */
	public function getGalleryURL()
	{
		return $this->GalleryURL;
	}
	/**
	 * Set PictureURL
	 * @param anyURI PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return anyURI
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
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
	 * Set PrimaryCategoryID
	 * @param string PrimaryCategoryID
	 * @return string
	 */
	public function setPrimaryCategoryID($_PrimaryCategoryID)
	{
		return ($this->PrimaryCategoryID = $_PrimaryCategoryID);
	}
	/**
	 * Get PrimaryCategoryID
	 * @return string
	 */
	public function getPrimaryCategoryID()
	{
		return $this->PrimaryCategoryID;
	}
	/**
	 * Set PrimaryCategoryName
	 * @param string PrimaryCategoryName
	 * @return string
	 */
	public function setPrimaryCategoryName($_PrimaryCategoryName)
	{
		return ($this->PrimaryCategoryName = $_PrimaryCategoryName);
	}
	/**
	 * Get PrimaryCategoryName
	 * @return string
	 */
	public function getPrimaryCategoryName()
	{
		return $this->PrimaryCategoryName;
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
	 * Set Seller
	 * @param SimpleUserType Seller
	 * @return SimpleUserType
	 */
	public function setSeller($_Seller)
	{
		return ($this->Seller = $_Seller);
	}
	/**
	 * Get Seller
	 * @return EbayShoppingTypeSimpleUserType
	 */
	public function getSeller()
	{
		return $this->Seller;
	}
	/**
	 * Set BidCount
	 * @param int BidCount
	 * @return int
	 */
	public function setBidCount($_BidCount)
	{
		return ($this->BidCount = $_BidCount);
	}
	/**
	 * Get BidCount
	 * @return int
	 */
	public function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * Set ConvertedCurrentPrice
	 * @param AmountType ConvertedCurrentPrice
	 * @return AmountType
	 */
	public function setConvertedCurrentPrice($_ConvertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_ConvertedCurrentPrice);
	}
	/**
	 * Get ConvertedCurrentPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set CurrentPrice
	 * @param AmountType CurrentPrice
	 * @return AmountType
	 */
	public function setCurrentPrice($_CurrentPrice)
	{
		return ($this->CurrentPrice = $_CurrentPrice);
	}
	/**
	 * Get CurrentPrice
	 * @return EbayShoppingTypeAmountType
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set HighBidder
	 * @param SimpleUserType HighBidder
	 * @return SimpleUserType
	 */
	public function setHighBidder($_HighBidder)
	{
		return ($this->HighBidder = $_HighBidder);
	}
	/**
	 * Get HighBidder
	 * @return EbayShoppingTypeSimpleUserType
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set ListingStatus
	 * @param ListingStatusCodeType ListingStatus
	 * @return ListingStatusCodeType
	 */
	public function setListingStatus($_ListingStatus)
	{
		return ($this->ListingStatus = EbayShoppingTypeListingStatusCodeType::valueIsValid($_ListingStatus)?$_ListingStatus:null);
	}
	/**
	 * Get ListingStatus
	 * @return EbayShoppingTypeListingStatusCodeType
	 */
	public function getListingStatus()
	{
		return $this->ListingStatus;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set ReserveMet
	 * @param boolean ReserveMet
	 * @return boolean
	 */
	public function setReserveMet($_ReserveMet)
	{
		return ($this->ReserveMet = $_ReserveMet);
	}
	/**
	 * Get ReserveMet
	 * @return boolean
	 */
	public function getReserveMet()
	{
		return $this->ReserveMet;
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
		return ($this->Site = EbayShoppingTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return EbayShoppingTypeSiteCodeType
	 */
	public function getSite()
	{
		return $this->Site;
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
	 * Set Subtitle
	 * @param string Subtitle
	 * @return string
	 */
	public function setSubtitle($_Subtitle)
	{
		return ($this->Subtitle = $_Subtitle);
	}
	/**
	 * Get Subtitle
	 * @return string
	 */
	public function getSubtitle()
	{
		return $this->Subtitle;
	}
	/**
	 * Set PrimaryCategoryIDPath
	 * @param string PrimaryCategoryIDPath
	 * @return string
	 */
	public function setPrimaryCategoryIDPath($_PrimaryCategoryIDPath)
	{
		return ($this->PrimaryCategoryIDPath = $_PrimaryCategoryIDPath);
	}
	/**
	 * Get PrimaryCategoryIDPath
	 * @return string
	 */
	public function getPrimaryCategoryIDPath()
	{
		return $this->PrimaryCategoryIDPath;
	}
	/**
	 * Set SecondaryCategoryID
	 * @param string SecondaryCategoryID
	 * @return string
	 */
	public function setSecondaryCategoryID($_SecondaryCategoryID)
	{
		return ($this->SecondaryCategoryID = $_SecondaryCategoryID);
	}
	/**
	 * Get SecondaryCategoryID
	 * @return string
	 */
	public function getSecondaryCategoryID()
	{
		return $this->SecondaryCategoryID;
	}
	/**
	 * Set SecondaryCategoryName
	 * @param string SecondaryCategoryName
	 * @return string
	 */
	public function setSecondaryCategoryName($_SecondaryCategoryName)
	{
		return ($this->SecondaryCategoryName = $_SecondaryCategoryName);
	}
	/**
	 * Get SecondaryCategoryName
	 * @return string
	 */
	public function getSecondaryCategoryName()
	{
		return $this->SecondaryCategoryName;
	}
	/**
	 * Set SecondaryCategoryIDPath
	 * @param string SecondaryCategoryIDPath
	 * @return string
	 */
	public function setSecondaryCategoryIDPath($_SecondaryCategoryIDPath)
	{
		return ($this->SecondaryCategoryIDPath = $_SecondaryCategoryIDPath);
	}
	/**
	 * Get SecondaryCategoryIDPath
	 * @return string
	 */
	public function getSecondaryCategoryIDPath()
	{
		return $this->SecondaryCategoryIDPath;
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
	 * @return EbayShoppingTypeCharityType
	 */
	public function getCharity()
	{
		return $this->Charity;
	}
	/**
	 * Set GermanMotorsSearchable
	 * @param boolean GermanMotorsSearchable
	 * @return boolean
	 */
	public function setGermanMotorsSearchable($_GermanMotorsSearchable)
	{
		return ($this->GermanMotorsSearchable = $_GermanMotorsSearchable);
	}
	/**
	 * Get GermanMotorsSearchable
	 * @return boolean
	 */
	public function getGermanMotorsSearchable()
	{
		return $this->GermanMotorsSearchable;
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
	 * Set Gift
	 * @param boolean Gift
	 * @return boolean
	 */
	public function setGift($_Gift)
	{
		return ($this->Gift = $_Gift);
	}
	/**
	 * Get Gift
	 * @return boolean
	 */
	public function getGift()
	{
		return $this->Gift;
	}
	/**
	 * Set PictureExists
	 * @param boolean PictureExists
	 * @return boolean
	 */
	public function setPictureExists($_PictureExists)
	{
		return ($this->PictureExists = $_PictureExists);
	}
	/**
	 * Get PictureExists
	 * @return boolean
	 */
	public function getPictureExists()
	{
		return $this->PictureExists;
	}
	/**
	 * Set RecentListing
	 * @param boolean RecentListing
	 * @return boolean
	 */
	public function setRecentListing($_RecentListing)
	{
		return ($this->RecentListing = $_RecentListing);
	}
	/**
	 * Get RecentListing
	 * @return boolean
	 */
	public function getRecentListing()
	{
		return $this->RecentListing;
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
	 * @return EbayShoppingTypeStorefrontType
	 */
	public function getStorefront()
	{
		return $this->Storefront;
	}
	/**
	 * Set DistanceFromBuyer
	 * @param DistanceType DistanceFromBuyer
	 * @return DistanceType
	 */
	public function setDistanceFromBuyer($_DistanceFromBuyer)
	{
		return ($this->DistanceFromBuyer = $_DistanceFromBuyer);
	}
	/**
	 * Get DistanceFromBuyer
	 * @return EbayShoppingTypeDistanceType
	 */
	public function getDistanceFromBuyer()
	{
		return $this->DistanceFromBuyer;
	}
	/**
	 * Set Country
	 * @param CountryCodeType Country
	 * @return CountryCodeType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = EbayShoppingTypeCountryCodeType::valueIsValid($_Country)?$_Country:null);
	}
	/**
	 * Get Country
	 * @return EbayShoppingTypeCountryCodeType
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set WatchCount
	 * @param int WatchCount
	 * @return int
	 */
	public function setWatchCount($_WatchCount)
	{
		return ($this->WatchCount = $_WatchCount);
	}
	/**
	 * Get WatchCount
	 * @return int
	 */
	public function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * Set HalfItemCondition
	 * @param HalfItemConditionCodeType HalfItemCondition
	 * @return HalfItemConditionCodeType
	 */
	public function setHalfItemCondition($_HalfItemCondition)
	{
		return ($this->HalfItemCondition = EbayShoppingTypeHalfItemConditionCodeType::valueIsValid($_HalfItemCondition)?$_HalfItemCondition:null);
	}
	/**
	 * Get HalfItemCondition
	 * @return EbayShoppingTypeHalfItemConditionCodeType
	 */
	public function getHalfItemCondition()
	{
		return $this->HalfItemCondition;
	}
	/**
	 * Set SellerComments
	 * @param string SellerComments
	 * @return string
	 */
	public function setSellerComments($_SellerComments)
	{
		return ($this->SellerComments = $_SellerComments);
	}
	/**
	 * Get SellerComments
	 * @return string
	 */
	public function getSellerComments()
	{
		return $this->SellerComments;
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
	 * @return EbayShoppingTypeReturnPolicyType
	 */
	public function getReturnPolicy()
	{
		return $this->ReturnPolicy;
	}
	/**
	 * Set MinimumToBid
	 * @param AmountType MinimumToBid
	 * @return AmountType
	 */
	public function setMinimumToBid($_MinimumToBid)
	{
		return ($this->MinimumToBid = $_MinimumToBid);
	}
	/**
	 * Get MinimumToBid
	 * @return EbayShoppingTypeAmountType
	 */
	public function getMinimumToBid()
	{
		return $this->MinimumToBid;
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
	 * @return EbayShoppingTypeBusinessSellerDetailsType
	 */
	public function getBusinessSellerDetails()
	{
		return $this->BusinessSellerDetails;
	}
	/**
	 * Set PaymentAllowedSite
	 * @param SiteCodeType PaymentAllowedSite
	 * @return SiteCodeType
	 */
	public function setPaymentAllowedSite($_PaymentAllowedSite)
	{
		return ($this->PaymentAllowedSite = EbayShoppingTypeSiteCodeType::valueIsValid($_PaymentAllowedSite)?$_PaymentAllowedSite:null);
	}
	/**
	 * Get PaymentAllowedSite
	 * @return EbayShoppingTypeSiteCodeType
	 */
	public function getPaymentAllowedSite()
	{
		return $this->PaymentAllowedSite;
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
	 * @return EbayShoppingTypeVariationsType
	 */
	public function getVariations()
	{
		return $this->Variations;
	}
	/**
	 * Set HandlingTime
	 * @param int HandlingTime
	 * @return int
	 */
	public function setHandlingTime($_HandlingTime)
	{
		return ($this->HandlingTime = $_HandlingTime);
	}
	/**
	 * Get HandlingTime
	 * @return int
	 */
	public function getHandlingTime()
	{
		return $this->HandlingTime;
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
	 * Set QuantityAvailableHint
	 * @param QuantityAvailableHintCodeType QuantityAvailableHint
	 * @return QuantityAvailableHintCodeType
	 */
	public function setQuantityAvailableHint($_QuantityAvailableHint)
	{
		return ($this->QuantityAvailableHint = EbayShoppingTypeQuantityAvailableHintCodeType::valueIsValid($_QuantityAvailableHint)?$_QuantityAvailableHint:null);
	}
	/**
	 * Get QuantityAvailableHint
	 * @return EbayShoppingTypeQuantityAvailableHintCodeType
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
	 * @return EbayShoppingTypeDiscountPriceInfoType
	 */
	public function getDiscountPriceInfo()
	{
		return $this->DiscountPriceInfo;
	}
	/**
	 * Set ExcludeShipToLocation
	 * @param string ExcludeShipToLocation
	 * @return string
	 */
	public function setExcludeShipToLocation($_ExcludeShipToLocation)
	{
		return ($this->ExcludeShipToLocation = $_ExcludeShipToLocation);
	}
	/**
	 * Get ExcludeShipToLocation
	 * @return string
	 */
	public function getExcludeShipToLocation()
	{
		return $this->ExcludeShipToLocation;
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
	 * Set VhrUrl
	 * @param anyURI VhrUrl
	 * @return anyURI
	 */
	public function setVhrUrl($_VhrUrl)
	{
		return ($this->VhrUrl = $_VhrUrl);
	}
	/**
	 * Get VhrUrl
	 * @return anyURI
	 */
	public function getVhrUrl()
	{
		return $this->VhrUrl;
	}
	/**
	 * Set VhrAvailable
	 * @param boolean VhrAvailable
	 * @return boolean
	 */
	public function setVhrAvailable($_VhrAvailable)
	{
		return ($this->VhrAvailable = $_VhrAvailable);
	}
	/**
	 * Get VhrAvailable
	 * @return boolean
	 */
	public function getVhrAvailable()
	{
		return $this->VhrAvailable;
	}
	/**
	 * Set QuantityInfo
	 * @param QuantityInfo QuantityInfo
	 * @return QuantityInfo
	 */
	public function setQuantityInfo($_QuantityInfo)
	{
		return ($this->QuantityInfo = $_QuantityInfo);
	}
	/**
	 * Get QuantityInfo
	 * @return EbayShoppingTypeQuantityInfo
	 */
	public function getQuantityInfo()
	{
		return $this->QuantityInfo;
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