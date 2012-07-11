<?php
/**
 * Class file for EbayTradingTypeShippingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingDetailsType
 * Documentation : Type defining the ShippingDetails container, which contains the shipping-related details for an item (pre-checkout) or order (post-checkout).
 * @date 04/07/2012
 */
class EbayTradingTypeShippingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The AllowPaymentEdit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is no longer returned and has been replaced by the ShippingDetails.PaymentEdited field. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $AllowPaymentEdit;
	/**
	 * The ApplyShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : No longer used. To be deprecated in late 2010.
	 * @var boolean
	 */
	public $ApplyShippingDiscount;
	/**
	 * The CalculatedShippingRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details pertinent to one or more items for which calculated shipping has been offered by the seller, such as package dimension and weight and packaging/handling costs. If your call specifies a large-dimension item listed with UPS, see <a href= "http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1159" >Dimensional Weight limit on UPS shipping services results in failure of shipping calculator</a>. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeCalculatedShippingRateType
	 */
	public $CalculatedShippingRate;
	/**
	 * The ChangePaymentInstructions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller specified payment and shipping instructions during checkout (for example, to update the details of an order). Valid for flat and calculated shipping. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $ChangePaymentInstructions;
	/**
	 * The InsuranceFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of shipping insurance set by the seller. If the buyer bought more than one of this item, this is the insurance for just a single item. Exception: for GetItemShipping, this is proportional to QuantitySold. Value should be greater than 0.00 if InsuranceOption is Optional or Required. For flat shipping only. Optional as input and only allowed if ChangePaymentInstructions is true. This field is ignored when InsuranceOption is not specified in the request. <br><br> Valid only on the following sites: FR and IT <br> Applicable to Half.com for GetOrders.
	 * @var EbayTradingTypeAmountType
	 */
	public $InsuranceFee;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Optional as input and only allowed if ChangePaymentInstructions is true. If this field is not included in the request, values specified in the InsuranceFee field will be ignored. <br><br> <span class="tablenote"><strong>Note:</strong> Note that sellers are responsible for the items they sell until they safely arrive in their customers' hands, and that offering buyer-paid insurance (either as an optional or required service) infers that the buyer is somehow responsible for the safe delivery of the items they purchase. This notion can reduce buyer confidence in the marketplace and the practice of including buyer- paid shipping insurance in your item listings is discouraged. </span> <br> This field is always returned with a request version lower than 635. With a request version of 635 or higher, this field is only returned if the value is other than NotOffered. <br><br> Valid only on the following sites: FR and IT <br> If you include buyer-paid shipping insurance for an item listed on one of the sites that supports this option, a buyer on a site that does not support buyer-paid shipping insurance can still purchase the item. In these cases, the buyer is responsible for all the shipping insurance terms that have been outlined in the item listing. <br><br> Applicable to Half.com
	 * @var EbayTradingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The InsuranceWanted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether or not the buyer selected to pay for insurance as an option offered by the seller. This only has a value after the buyer has gone through checkout and selected the insurance preference. <br><br> Valid only on the following sites: FR and IT <br> Applicable to Half.com for GetOrders.
	 * @var boolean
	 */
	public $InsuranceWanted;
	/**
	 * The PaymentEdited
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller allows the buyer to edit the payment amount for the order. (Sellers enable this property in their My eBay user preferences on the eBay site.) <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $PaymentEdited;
	/**
	 * The PaymentInstructions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payment instructions (or message) from the seller to the buyer. These instructions appear on eBay's View Item page and on eBay's checkout page when the buyer pays for the item. <br><br> Sellers usually use this field to specify payment instructions, how soon the item will shipped, feedback instructions, and other reminders that the buyer should be aware of when they bid on or buy an item. This field can be specified regardless of the shipping type eBay only allows 500 characters as input, but due to the way the eBay Web site UI treats characters, this field can return more than 500 characters in the response. Characters like & and ' (apostrophe/single quote) count as 5 characters each. Use DeletedField to remove this value when revising or relisting an item. <br><br> Applicable to eBay Motors (usually used to elaborate on the return policy). <br> Not applicable to Half.com.
	 * @var string
	 */
	public $PaymentInstructions;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sales tax details. US (site 0) and Motors (site 100) sites only, excluding vehicle listings. Flat and calculated shipping. <br><br> Applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The ShippingRateErrorMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For most applicable calls, returns the words No Error or returns an error message related to an attempt to calculate shipping rates. For calculated shipping only. <br><br> The message text explains that a postal code is needed to calculate shipping. Only returned when ItemDetails is set to Fine. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var string
	 */
	public $ShippingRateErrorMessage;
	/**
	 * The ShippingRateType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A shipping rate scale for shipping through UPS that affects the shipping cost calculated for UPS (lower if ShippingRateType is DailyPickup). ShippingRateType is only returned if ShippingService is one of the UPS shipping services. For calculated shipping only. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var EbayTradingTypeShippingRateTypeCodeType
	 */
	public $ShippingRateType;
	/**
	 * The ShippingServiceOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Shipping costs and options related to domestic shipping services offered by the seller. Flat and calculated shipping. Required if InternationalShippingServiceOption is specified. <br><br> For flat shipping, a maximum shipping cost may apply when listing. See Shipping documentation for details about Maximum Flat Rate Shipping Costs. <br><br> If you specify multiple ShippingServiceOptions nodes, the repeating nodes must be contiguous. For example, you can insert InternationalShippingServiceOption nodes after a list of repeating ShippingServiceOptions nodes, but not between them: <br><br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;ShippingServiceOptions&gt;...&lt;/ShippingServiceOptions&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt;<br> &lt;InternationalShippingServiceOption&gt;...&lt;/InternationalShippingServiceOption&gt; <br><br> If you specify ShippingDetails when you revise or relist an item but you omit ShippingServiceOptions, eBay will drop the domestic shipping services from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all ShippingDetails that you still want to include in the listing. <br><br> A seller can offer up to four domestic shipping services and up to five international shipping services. All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated). <br><br> <span class="tablenote"><b>Note:</b> As of June 2011, the number of domestic and international shipping services that a seller may offer the buyer has increased. The number of domestic shipping services that may be offered has increased from 3 to 4, and the number of international shipping service options has increased from 3 to 5. </span> <br> For GetItemShipping, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var EbayTradingTypeShippingServiceOptionsType
	 */
	public $ShippingServiceOptions;
	/**
	 * The InternationalShippingServiceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Shipping costs and options related to an international shipping service. If used, at least one domestic shipping service must also be provided in ShippingServiceOptions. <br><br> If you specify multiple InternationalShippingServiceOption nodes, the repeating nodes must be contiguous. That is, you cannot insert other nodes between InternationalShippingServiceOption nodes. <br><br> If you specify ShippingDetails when you revise or relist an item but you omit InternationalShippingServiceOption, eBay will drop the international shipping services from the listing. This may also have unintended side effects, as other fields that depend on this data may be dropped as well. To retain the shipping services and dependent fields when you modify other shipping details, it may be simplest to specify all ShippingDetails that you still want to include in the listing. <br><br> A seller can offer up to four domestic shipping services and up to five international shipping services. All specified domestic and international shipping services must be the same shipping type (for example, Flat versus Calculated). <br><br> <span class="tablenote"><b>Note:</b> As of June 2011, the number of domestic and international shipping services that a seller may offer the buyer has increased. The number of domestic shipping services that may be offered has increased from 3 to 4, and the number of international shipping service options has increased from 3 to 5. </span> <br> For GetItemShipping, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var EbayTradingTypeInternationalShippingServiceOptionsType
	 */
	public $InternationalShippingServiceOption;
	/**
	 * The ShippingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping cost model offered by the seller. This is not returned for various calls since shipping type can be deduced: if a CalculatedShippingRate structure is returned by the call, the shipping type is Calculated. Otherwise, it is one of the other non-Calculated shipping types. <br><br> <b>GetItemShipping and GetItemTransactions</b>: If the type was a mix of flat and calculated services, this is set simply to Flat or Calculated because it is the buyer's selection that results in one of these. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeShippingTypeCodeType
	 */
	public $ShippingType;
	/**
	 * The SellingManagerSalesRecordNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold view in Selling Manager. Each sale record has a sale record ID. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for a single or a multiple line item order. <br> Applicable to Half.com (for GetOrders).
	 * @var int
	 */
	public $SellingManagerSalesRecordNumber;
	/**
	 * The ThirdPartyCheckout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : As of July 1, 2011, third-party applications can no longer be used for checkout. All purchased items must go through the eBay Checkout flow. <br><br> This field can no longer be passed into the Add Item family of calls. <br><br> This field will be returned in some calls (that return the ShippingDetails container) if it was set to True at listing time (for listings created before July 1, 2011). If this field was set to True at listing time, the user must include this field and set it to False in the Relist and Revise Item family of calls. Otherwise, the caller may get an error.
	 * @var boolean
	 */
	public $ThirdPartyCheckout;
	/**
	 * The TaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Tax details for a jurisdiction, such as a state or province. If no tax table is associated with the item, a tax table is not returned. <br><br> For GetItem, a tax table is returned if it exists when: <br> - DetailLevel is set to ReturnAll or ItemReturnDescription (in this case, the value of IncludeTaxTable does not matter). <br> - IncludeTaxTable is set to true and DetailLevel is not set or it is set to ItemReturnAttributes. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeTaxTableType
	 */
	public $TaxTable;
	/**
	 * The GetItFast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller has opted the listing into the Get It Fast feature. If GetItFast is true and if at least one of the domestic shipping services offered by the seller is an expedited shipping service, every shipping service offered by the seller is considered a Get It Fast service, and the seller commits to delivering the item to the buyer-selected shipping service within one day. <br><br> Applicable to Half.com for GetOrders.
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The ShippingServiceUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping service actually used by the seller to ship the item(s) to the buyer. <br><br> Not applicable to Half.com.
	 * @var token
	 */
	public $ShippingServiceUsed;
	/**
	 * The DefaultShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The default shipping cost for the item. If the seller specified multiple shipping services, this is the "first" shipping service as specified by the seller when they listed the item. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $DefaultShippingCost;
	/**
	 * The InsuranceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for domestic insurance information. <br><br> Note that there are fields named InsuranceFee and InsuranceOption at the same level as this container. These were once used for representing both domestic and international insurance details. If this (newer) container is provided on input and if ShippingDetails.InsuranceFee or ShippingDetails.InsuranceOption are also provided, those two (older fields) are ignored. If this container is omitted on input, its InsuranceFee and InsuranceOption subfields are set to match whatever (the older fields) ShippingDetails.InsuranceFee and ShippingDetails.InsuranceOption are set to. For flat and calculated shipping, depending on which subfields are used. <br><br> Valid only on the following sites: FR and IT
	 * @var EbayTradingTypeInsuranceDetailsType
	 */
	public $InsuranceDetails;
	/**
	 * The InternationalInsuranceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for international insurance information. <br><br> Note that there are fields named InsuranceFee and InsuranceOption at the same level as this container. These were once used for representing both domestic and international insurance details. If this (newer) container is provided on input and if ShippingDetails.InsuranceFee or ShippingDetails.InsuranceOption are also provided, those two (older fields) are ignored. If this container is omitted on input, its InsuranceFee and InsuranceOption subfields are set to match whatever (the older fields) are set to for flat and calculated shipping, depending on which subfields are used. <br><br> Valid only on the following sites: FR and IT
	 * @var EbayTradingTypeInsuranceDetailsType
	 */
	public $InternationalInsuranceDetails;
	/**
	 * The ShippingDiscountProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On input, this is the ID of the shipping discount to offer for the domestic shipping services (where the shipping discount is either of type FlatShippingDiscount or CalculatedShippingDiscount). On output, this is the ID of the shipping discount offered and corresponds to whichever is returned: FlatShippingDiscount or CalculatedShippingDiscount. Only returned if the calling user is the seller. If the user created a shipping discount profile, use the ShippingDiscountProfileID. <br><br> In the RelistItem and ReviseItem family of calls, you can remove the existing ShippingDiscountProfileID associated with the item by supplying a value of 0 (zero). <br><br> Only returned if the calling user is the seller.
	 * @var string
	 */
	public $ShippingDiscountProfileID;
	/**
	 * The FlatShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a flat rate shipping discount was offered for the domestic shipping services, this contains the details of the flat rate shipping discount. Otherwise, it is not returned. Only returned if the calling user is the seller.
	 * @var EbayTradingTypeFlatShippingDiscountType
	 */
	public $FlatShippingDiscount;
	/**
	 * The CalculatedShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a calculated shipping discount was offered for the domestic shipping services, this contains the details of the calculated shipping discount. Otherwise, it is not returned. Only returned if the calling user is the seller.
	 * @var EbayTradingTypeCalculatedShippingDiscountType
	 */
	public $CalculatedShippingDiscount;
	/**
	 * The PromotionalShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On input, this specifies whether to offer the promotional shipping discount for the domestic shipping services of this listing (only applicable if the seller has a promotional shipping discount in effect at the moment). <br><br> Returned on output only if the seller is making the call. This indicates whether the promotional shipping discount is being offered for the domestic shipping services of this listing (if the listing is still active--this is only possible if the seller has a promotional shipping discount in effect at the moment) or whether the discount was offered at the time the listing ended.
	 * @var boolean
	 */
	public $PromotionalShippingDiscount;
	/**
	 * The InternationalShippingDiscountProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On input, this is the ID of the shipping discount to offer for the international shipping services (where the shipping discount is either of type FlatShippingDiscount or CalculatedShippingDiscount). <br><br> In the RelistItem and ReviseItem family of calls, you can remove the existing InternationalShippingDiscountProfileID associated with the item by supplying a value of 0 (zero). <br><br> Returned on output only if the seller is making the call. The value is the ID of the shipping discount offered and corresponds to whichever is returned: FlatShippingDiscount or CalculatedShippingDiscount. <br><br> If the user created a shipping discount profile, use InternationalShippingDiscountProfileID.
	 * @var string
	 */
	public $InternationalShippingDiscountProfileID;
	/**
	 * The InternationalFlatShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is returned only if the seller is making the call. If a flat rate shipping discount was offered for the international shipping services, this contains the details of the flat rate shipping discount. Otherwise, it is not returned.
	 * @var EbayTradingTypeFlatShippingDiscountType
	 */
	public $InternationalFlatShippingDiscount;
	/**
	 * The InternationalCalculatedShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is returned only if the seller is making the call. If a calculated shipping discount was offered for the international shipping services, this contains the details of the calculated shipping discount. Otherwise, it is not returned.
	 * @var EbayTradingTypeCalculatedShippingDiscountType
	 */
	public $InternationalCalculatedShippingDiscount;
	/**
	 * The InternationalPromotionalShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : On input, this specifies whether to offer the promotional shipping discount for the listing's international shipping services (only applicable if the seller has a promotional shipping discount in effect at the moment). <br><br> Returned on output only if the seller is making the call. This value indicates whether the promotional shipping discount is being offered for the international shipping services of this listing (if the listing is still active--this is only possible if the seller has a promotional shipping discount in effect at the moment) or whether the discount was offered at the time the listing ended.
	 * @var boolean
	 */
	public $InternationalPromotionalShippingDiscount;
	/**
	 * The PromotionalShippingDiscountDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is returned only if the seller is making the call. Contains details of the promotional shipping discount, if such is being offered while the listing is active or if it was offered at the time the listing ended.
	 * @var EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public $PromotionalShippingDiscountDetails;
	/**
	 * The CODCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Valid only for the Italy site (site ID 101); contains the cash-on-delivery (COD) cost for COD shipping.
	 * @var EbayTradingTypeAmountType
	 */
	public $CODCost;
	/**
	 * The ExcludeShipToLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Use this field to specify an international country or region, or a special domestic location, such as 'PO Box' (in US) or 'Packstation' (in DE), to where you will not ship the associated item. Repeat this element in the call request for each location that you want to exclude as a shipping destination for your item. <br><br> Set ShipToRegistrationCountry to true to have your ExcludeShipToLocation settings applied to your listing. The locations you have excluded display in the Shipping and Handling section of your item listing. <br><br> If a buyer's primary ship-to location is a location that you have listed as an excluded ship-to location (or if the buyer does not have a primary ship-to location), they will receive an error message if they attempt to buy or place a bid on your item. <br><br> The exclude ship-to location values are eBay regions and countries. To see the valid exclude ship-to locations for a specified site, call GeteBayDetails with DetailName set to ExcludeShippingLocationDetails. Repeat GeteBayDetails for each site on which you list. <br><br> This field works in conjunction with Item.ShipToLocations to create a set of international countries and regions to where you will, and will not, ship. You can list a region in the ShipToLocations field, then exclude specific countries within that region with this field (for example, you can specify Africa in ShipToLocations, yet exclude Chad with a ExcludeShipToLocation setting). In addition, if your ShipToLocations is Worldwide, you can use this field to specify both regions and countries that you want to exclude from your shipping destinations. <br><br> You can specify a default set of locations to where you will not ship in My eBay. If you create an Exclude Ship-To List, it is, by default, in effect when you list items. However, if you specify any value in this field on input, it nullifies the default settings in your Exclude Ship-To List. (If you use ExcludeShipToLocation when you list an item, you will need to list all the locations to where you will not ship the associated item, regardless of the default settings in your Exclude Ship-To List.) <br><br> Specify NONE in this field to override the default Exclude Ship-To List you might have set up in My eBay and indicate that you do not want to exclude any shipping locations from the respective item listing. <br><br> <span class="tablenote"><strong>Note:</strong> To enable your default Exclude Ship-To List, you must enable Exclude Shipping Locations and Buyer Requirements in your My eBay Site Preferences. For details, see the KnowledgeBase Article <a href= "https://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=1495" >HowTo: ExcludeShipToLocation</a>. </span>
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The SellerExcludeShipToLocationsPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sellers can set up a global Exclude Ship-To List through their My eBay account. The Exclude Ship-To List defines the countries to where the seller does not ship, by default. <br><br> This flag returns true if the Exclude Ship-To List is enabled by the seller for the associated item. If false, the seller's Exclude Ship-To List is either not set up, or it has been overridden by the seller when they listed the item with ExcludeShipToLocation fields. <br><br> In the response, ExcludeShipToLocation fields detail the locations to where the seller will not ship the item, regardless of the value returned in this field.
	 * @var boolean
	 */
	public $SellerExcludeShipToLocationsPreference;
	/**
	 * The ShipmentTrackingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for the shipping carrier and tracking information associated with the shipment of an order. <br><br> As each package has a unique tracking number, this container should be repeated for each package in the order. <br> <br> <span class="tablenote"><b>Note:</b> Starting June 20, 2012 Top-rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 90 percent of their order line items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more information on changes to eBay's Top-rated seller program, see the < a href="http://pages.ebay.com/sellerinformation/news/eTRSupdate.html">2012 Spring Seller Update</a> page. </span> <br>
	 * @var EbayTradingTypeShipmentTrackingDetailsType
	 */
	public $ShipmentTrackingDetails;
	/**
	 * The RateTableDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Note: Shipping rate table data cannot be retrieved using the API. The API only allows you to determine whether the user has set up a shipping rate table in the site preferences (see the GetUser return field called DomesticRateTable). <br><br> If supplied, this container indicates the shipping rate tables that are to be applied to this listing. (Currently, only the DomesticRateTable is supported.) If this container is used, the ShippingDetails.ShippingType must be set to Flat because only flat rate shipping can be used with the shipping rate tables feature. In addition, the seller must already have set up shipping rate tables in the My eBay site Preferences. (You can determine this by invoking GetUser: if the shipping rate table is available for this seller, the SellerInfo container from GetUSer will have the DomesticRateTable element set to true.) This feature is currently supported for DE, UK, and US sites. <br><br> Note that if you are modifying or relisting an item (using ReviseItem or RelistItem), you can delete the existing rate table setting applied to the item by using the empty tags: <RateTableDetails />. <br><br> The domestic rate tables allow a seller to assign different rates and service levels to special domestic locations. For example, in the US, the seller assigns a flat rate to one or more service levels (economy, standard, expedited, 1-day) that will apply to all of the 48 contiguous US states. The seller can then assign different rates and service levels to any or all of the other domestic locations: Alaska and Hawaii, US Protectorates, and APO/FPO. <br><br> If the DomesticRateTable is specified in the RateTableDetails container, the rates assigned to the various domestic locations are used depending on the location of the buyer. If only one service level and rate has been set for a given domestic location in the domestic rate table, buyers in that location will see only one shipping cost. If several service levels and rates are set up in the domestic shipping rate table for a given domestic location, buyers in that location will see the different shipping levels and rates and can choose one of them. (Buyers in a domestic location that does not have any service level and rate set in the domestic rate table for the current seller will not be able to bid or buy items from that seller.) <br><br> A seller may wish to exclude a domestic location for a particular item even though that domestic location has a service level and rate set up in the domestic shipping rate table. For example, a US seller might normally ship to Alaska and have Alaska shipping rates set up in the domestic rate table. However, if an item is too heavy and the shipping costs are too expensive, a seller might exclude Alaska for this item via the ShippingDetails.ExcludeShipToLocation element. <br><br> If the seller has set up shipping rate tables that contain a weight charge, you must prompt the seller to supply weight and specify the weight in the ShippingDetails.CalculatedShippingRate container's WeightMajor and WeightMinor fields. (Even though this is flat rate.) Do not use any elements in the ShippingDetails.CalculatedShippingRate container other than WeightMajor and WeightMinor because those are not supported in this scenario. <br><br> Remember that any value in the WeightMinor field is rounded UP to the next unit, that is, to the next pound or kg, when the shipping cost is calculated, so make sure you message your users appropriately. One way to do this kind of UI messaging is the way the US eBay UI does it, by presenting sellers with a pulldown of weight ranges, where the pulldown lists 0 lb to 1 lb as one selection (1 lb), over 1 lb to 2 lbs as another selection (2 lbs), over 2 lbs to 3 lbs as another selection (3 lbs) and so on. However, your application can ask for and use specific weights (WeightMajor and WeightMinor) if you wish. <br><br> Be aware that there is currently no way to determine through the API whether a seller's rate table uses weights, so you must do the appropriate messaging so the seller will supply the weights. If no weight is supplied in ShippingDetails.CalculatedShippingRate and the shipping table does require weights, a default weight of one unit (one lb or one kg) is used. Currently the weights used in this scenario are not returned from GetItem or GetItemShipping, although the values can be seen by the seller in the eBay UI. <br><br> To get a list of the domestic locations, call GeteBayDetails with DetailName set to ShippingLocationDetails. <br><br> This container is returned from the GetItem family of calls only for the seller who listed the item.
	 * @var EbayTradingTypeRateTableDetailsType
	 */
	public $RateTableDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean AllowPaymentEdit
	 * @param boolean ApplyShippingDiscount
	 * @param EbayTradingTypeCalculatedShippingRateType CalculatedShippingRate
	 * @param boolean ChangePaymentInstructions
	 * @param EbayTradingTypeAmountType InsuranceFee
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param boolean InsuranceWanted
	 * @param boolean PaymentEdited
	 * @param string PaymentInstructions
	 * @param EbayTradingTypeSalesTaxType SalesTax
	 * @param string ShippingRateErrorMessage
	 * @param EbayTradingTypeShippingRateTypeCodeType ShippingRateType
	 * @param EbayTradingTypeShippingServiceOptionsType ShippingServiceOptions
	 * @param EbayTradingTypeInternationalShippingServiceOptionsType InternationalShippingServiceOption
	 * @param EbayTradingTypeShippingTypeCodeType ShippingType
	 * @param int SellingManagerSalesRecordNumber
	 * @param boolean ThirdPartyCheckout
	 * @param EbayTradingTypeTaxTableType TaxTable
	 * @param boolean GetItFast
	 * @param token ShippingServiceUsed
	 * @param EbayTradingTypeAmountType DefaultShippingCost
	 * @param EbayTradingTypeInsuranceDetailsType InsuranceDetails
	 * @param EbayTradingTypeInsuranceDetailsType InternationalInsuranceDetails
	 * @param string ShippingDiscountProfileID
	 * @param EbayTradingTypeFlatShippingDiscountType FlatShippingDiscount
	 * @param EbayTradingTypeCalculatedShippingDiscountType CalculatedShippingDiscount
	 * @param boolean PromotionalShippingDiscount
	 * @param string InternationalShippingDiscountProfileID
	 * @param EbayTradingTypeFlatShippingDiscountType InternationalFlatShippingDiscount
	 * @param EbayTradingTypeCalculatedShippingDiscountType InternationalCalculatedShippingDiscount
	 * @param boolean InternationalPromotionalShippingDiscount
	 * @param EbayTradingTypePromotionalShippingDiscountDetailsType PromotionalShippingDiscountDetails
	 * @param EbayTradingTypeAmountType CODCost
	 * @param string ExcludeShipToLocation
	 * @param boolean SellerExcludeShipToLocationsPreference
	 * @param EbayTradingTypeShipmentTrackingDetailsType ShipmentTrackingDetails
	 * @param EbayTradingTypeRateTableDetailsType RateTableDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingDetailsType
	 */
	public function __construct($_AllowPaymentEdit = null,$_ApplyShippingDiscount = null,$_CalculatedShippingRate = null,$_ChangePaymentInstructions = null,$_InsuranceFee = null,$_InsuranceOption = null,$_InsuranceWanted = null,$_PaymentEdited = null,$_PaymentInstructions = null,$_SalesTax = null,$_ShippingRateErrorMessage = null,$_ShippingRateType = null,$_ShippingServiceOptions = null,$_InternationalShippingServiceOption = null,$_ShippingType = null,$_SellingManagerSalesRecordNumber = null,$_ThirdPartyCheckout = null,$_TaxTable = null,$_GetItFast = null,$_ShippingServiceUsed = null,$_DefaultShippingCost = null,$_InsuranceDetails = null,$_InternationalInsuranceDetails = null,$_ShippingDiscountProfileID = null,$_FlatShippingDiscount = null,$_CalculatedShippingDiscount = null,$_PromotionalShippingDiscount = null,$_InternationalShippingDiscountProfileID = null,$_InternationalFlatShippingDiscount = null,$_InternationalCalculatedShippingDiscount = null,$_InternationalPromotionalShippingDiscount = null,$_PromotionalShippingDiscountDetails = null,$_CODCost = null,$_ExcludeShipToLocation = null,$_SellerExcludeShipToLocationsPreference = null,$_ShipmentTrackingDetails = null,$_RateTableDetails = null,$_any = null)
	{
		parent::__construct(array('AllowPaymentEdit'=>$_AllowPaymentEdit,'ApplyShippingDiscount'=>$_ApplyShippingDiscount,'CalculatedShippingRate'=>$_CalculatedShippingRate,'ChangePaymentInstructions'=>$_ChangePaymentInstructions,'InsuranceFee'=>$_InsuranceFee,'InsuranceOption'=>$_InsuranceOption,'InsuranceWanted'=>$_InsuranceWanted,'PaymentEdited'=>$_PaymentEdited,'PaymentInstructions'=>$_PaymentInstructions,'SalesTax'=>$_SalesTax,'ShippingRateErrorMessage'=>$_ShippingRateErrorMessage,'ShippingRateType'=>$_ShippingRateType,'ShippingServiceOptions'=>$_ShippingServiceOptions,'InternationalShippingServiceOption'=>$_InternationalShippingServiceOption,'ShippingType'=>$_ShippingType,'SellingManagerSalesRecordNumber'=>$_SellingManagerSalesRecordNumber,'ThirdPartyCheckout'=>$_ThirdPartyCheckout,'TaxTable'=>$_TaxTable,'GetItFast'=>$_GetItFast,'ShippingServiceUsed'=>$_ShippingServiceUsed,'DefaultShippingCost'=>$_DefaultShippingCost,'InsuranceDetails'=>$_InsuranceDetails,'InternationalInsuranceDetails'=>$_InternationalInsuranceDetails,'ShippingDiscountProfileID'=>$_ShippingDiscountProfileID,'FlatShippingDiscount'=>$_FlatShippingDiscount,'CalculatedShippingDiscount'=>$_CalculatedShippingDiscount,'PromotionalShippingDiscount'=>$_PromotionalShippingDiscount,'InternationalShippingDiscountProfileID'=>$_InternationalShippingDiscountProfileID,'InternationalFlatShippingDiscount'=>$_InternationalFlatShippingDiscount,'InternationalCalculatedShippingDiscount'=>$_InternationalCalculatedShippingDiscount,'InternationalPromotionalShippingDiscount'=>$_InternationalPromotionalShippingDiscount,'PromotionalShippingDiscountDetails'=>$_PromotionalShippingDiscountDetails,'CODCost'=>$_CODCost,'ExcludeShipToLocation'=>$_ExcludeShipToLocation,'SellerExcludeShipToLocationsPreference'=>$_SellerExcludeShipToLocationsPreference,'ShipmentTrackingDetails'=>$_ShipmentTrackingDetails,'RateTableDetails'=>$_RateTableDetails,'any'=>$_any));
	}
	/**
	 * Set AllowPaymentEdit
	 * @param boolean AllowPaymentEdit
	 * @return boolean
	 */
	public function setAllowPaymentEdit($_AllowPaymentEdit)
	{
		return ($this->AllowPaymentEdit = $_AllowPaymentEdit);
	}
	/**
	 * Get AllowPaymentEdit
	 * @return boolean
	 */
	public function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * Set ApplyShippingDiscount
	 * @param boolean ApplyShippingDiscount
	 * @return boolean
	 */
	public function setApplyShippingDiscount($_ApplyShippingDiscount)
	{
		return ($this->ApplyShippingDiscount = $_ApplyShippingDiscount);
	}
	/**
	 * Get ApplyShippingDiscount
	 * @return boolean
	 */
	public function getApplyShippingDiscount()
	{
		return $this->ApplyShippingDiscount;
	}
	/**
	 * Set CalculatedShippingRate
	 * @param CalculatedShippingRateType CalculatedShippingRate
	 * @return CalculatedShippingRateType
	 */
	public function setCalculatedShippingRate($_CalculatedShippingRate)
	{
		return ($this->CalculatedShippingRate = $_CalculatedShippingRate);
	}
	/**
	 * Get CalculatedShippingRate
	 * @return EbayTradingTypeCalculatedShippingRateType
	 */
	public function getCalculatedShippingRate()
	{
		return $this->CalculatedShippingRate;
	}
	/**
	 * Set ChangePaymentInstructions
	 * @param boolean ChangePaymentInstructions
	 * @return boolean
	 */
	public function setChangePaymentInstructions($_ChangePaymentInstructions)
	{
		return ($this->ChangePaymentInstructions = $_ChangePaymentInstructions);
	}
	/**
	 * Get ChangePaymentInstructions
	 * @return boolean
	 */
	public function getChangePaymentInstructions()
	{
		return $this->ChangePaymentInstructions;
	}
	/**
	 * Set InsuranceFee
	 * @param AmountType InsuranceFee
	 * @return AmountType
	 */
	public function setInsuranceFee($_InsuranceFee)
	{
		return ($this->InsuranceFee = $_InsuranceFee);
	}
	/**
	 * Get InsuranceFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * Set InsuranceOption
	 * @param InsuranceOptionCodeType InsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInsuranceOption($_InsuranceOption)
	{
		return ($this->InsuranceOption = EbayTradingTypeInsuranceOptionCodeType::valueIsValid($_InsuranceOption)?$_InsuranceOption:null);
	}
	/**
	 * Get InsuranceOption
	 * @return EbayTradingTypeInsuranceOptionCodeType
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set InsuranceWanted
	 * @param boolean InsuranceWanted
	 * @return boolean
	 */
	public function setInsuranceWanted($_InsuranceWanted)
	{
		return ($this->InsuranceWanted = $_InsuranceWanted);
	}
	/**
	 * Get InsuranceWanted
	 * @return boolean
	 */
	public function getInsuranceWanted()
	{
		return $this->InsuranceWanted;
	}
	/**
	 * Set PaymentEdited
	 * @param boolean PaymentEdited
	 * @return boolean
	 */
	public function setPaymentEdited($_PaymentEdited)
	{
		return ($this->PaymentEdited = $_PaymentEdited);
	}
	/**
	 * Get PaymentEdited
	 * @return boolean
	 */
	public function getPaymentEdited()
	{
		return $this->PaymentEdited;
	}
	/**
	 * Set PaymentInstructions
	 * @param string PaymentInstructions
	 * @return string
	 */
	public function setPaymentInstructions($_PaymentInstructions)
	{
		return ($this->PaymentInstructions = $_PaymentInstructions);
	}
	/**
	 * Get PaymentInstructions
	 * @return string
	 */
	public function getPaymentInstructions()
	{
		return $this->PaymentInstructions;
	}
	/**
	 * Set SalesTax
	 * @param SalesTaxType SalesTax
	 * @return SalesTaxType
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return EbayTradingTypeSalesTaxType
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set ShippingRateErrorMessage
	 * @param string ShippingRateErrorMessage
	 * @return string
	 */
	public function setShippingRateErrorMessage($_ShippingRateErrorMessage)
	{
		return ($this->ShippingRateErrorMessage = $_ShippingRateErrorMessage);
	}
	/**
	 * Get ShippingRateErrorMessage
	 * @return string
	 */
	public function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * Set ShippingRateType
	 * @param ShippingRateTypeCodeType ShippingRateType
	 * @return ShippingRateTypeCodeType
	 */
	public function setShippingRateType($_ShippingRateType)
	{
		return ($this->ShippingRateType = EbayTradingTypeShippingRateTypeCodeType::valueIsValid($_ShippingRateType)?$_ShippingRateType:null);
	}
	/**
	 * Get ShippingRateType
	 * @return EbayTradingTypeShippingRateTypeCodeType
	 */
	public function getShippingRateType()
	{
		return $this->ShippingRateType;
	}
	/**
	 * Set ShippingServiceOptions
	 * @param ShippingServiceOptionsType ShippingServiceOptions
	 * @return ShippingServiceOptionsType
	 */
	public function setShippingServiceOptions($_ShippingServiceOptions)
	{
		return ($this->ShippingServiceOptions = $_ShippingServiceOptions);
	}
	/**
	 * Get ShippingServiceOptions
	 * @return EbayTradingTypeShippingServiceOptionsType
	 */
	public function getShippingServiceOptions()
	{
		return $this->ShippingServiceOptions;
	}
	/**
	 * Set InternationalShippingServiceOption
	 * @param InternationalShippingServiceOptionsType InternationalShippingServiceOption
	 * @return InternationalShippingServiceOptionsType
	 */
	public function setInternationalShippingServiceOption($_InternationalShippingServiceOption)
	{
		return ($this->InternationalShippingServiceOption = $_InternationalShippingServiceOption);
	}
	/**
	 * Get InternationalShippingServiceOption
	 * @return EbayTradingTypeInternationalShippingServiceOptionsType
	 */
	public function getInternationalShippingServiceOption()
	{
		return $this->InternationalShippingServiceOption;
	}
	/**
	 * Set ShippingType
	 * @param ShippingTypeCodeType ShippingType
	 * @return ShippingTypeCodeType
	 */
	public function setShippingType($_ShippingType)
	{
		return ($this->ShippingType = EbayTradingTypeShippingTypeCodeType::valueIsValid($_ShippingType)?$_ShippingType:null);
	}
	/**
	 * Get ShippingType
	 * @return EbayTradingTypeShippingTypeCodeType
	 */
	public function getShippingType()
	{
		return $this->ShippingType;
	}
	/**
	 * Set SellingManagerSalesRecordNumber
	 * @param int SellingManagerSalesRecordNumber
	 * @return int
	 */
	public function setSellingManagerSalesRecordNumber($_SellingManagerSalesRecordNumber)
	{
		return ($this->SellingManagerSalesRecordNumber = $_SellingManagerSalesRecordNumber);
	}
	/**
	 * Get SellingManagerSalesRecordNumber
	 * @return int
	 */
	public function getSellingManagerSalesRecordNumber()
	{
		return $this->SellingManagerSalesRecordNumber;
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
	 * Set TaxTable
	 * @param TaxTableType TaxTable
	 * @return TaxTableType
	 */
	public function setTaxTable($_TaxTable)
	{
		return ($this->TaxTable = $_TaxTable);
	}
	/**
	 * Get TaxTable
	 * @return EbayTradingTypeTaxTableType
	 */
	public function getTaxTable()
	{
		return $this->TaxTable;
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
	 * Set ShippingServiceUsed
	 * @param token ShippingServiceUsed
	 * @return token
	 */
	public function setShippingServiceUsed($_ShippingServiceUsed)
	{
		return ($this->ShippingServiceUsed = $_ShippingServiceUsed);
	}
	/**
	 * Get ShippingServiceUsed
	 * @return token
	 */
	public function getShippingServiceUsed()
	{
		return $this->ShippingServiceUsed;
	}
	/**
	 * Set DefaultShippingCost
	 * @param AmountType DefaultShippingCost
	 * @return AmountType
	 */
	public function setDefaultShippingCost($_DefaultShippingCost)
	{
		return ($this->DefaultShippingCost = $_DefaultShippingCost);
	}
	/**
	 * Get DefaultShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getDefaultShippingCost()
	{
		return $this->DefaultShippingCost;
	}
	/**
	 * Set InsuranceDetails
	 * @param InsuranceDetailsType InsuranceDetails
	 * @return InsuranceDetailsType
	 */
	public function setInsuranceDetails($_InsuranceDetails)
	{
		return ($this->InsuranceDetails = $_InsuranceDetails);
	}
	/**
	 * Get InsuranceDetails
	 * @return EbayTradingTypeInsuranceDetailsType
	 */
	public function getInsuranceDetails()
	{
		return $this->InsuranceDetails;
	}
	/**
	 * Set InternationalInsuranceDetails
	 * @param InsuranceDetailsType InternationalInsuranceDetails
	 * @return InsuranceDetailsType
	 */
	public function setInternationalInsuranceDetails($_InternationalInsuranceDetails)
	{
		return ($this->InternationalInsuranceDetails = $_InternationalInsuranceDetails);
	}
	/**
	 * Get InternationalInsuranceDetails
	 * @return EbayTradingTypeInsuranceDetailsType
	 */
	public function getInternationalInsuranceDetails()
	{
		return $this->InternationalInsuranceDetails;
	}
	/**
	 * Set ShippingDiscountProfileID
	 * @param string ShippingDiscountProfileID
	 * @return string
	 */
	public function setShippingDiscountProfileID($_ShippingDiscountProfileID)
	{
		return ($this->ShippingDiscountProfileID = $_ShippingDiscountProfileID);
	}
	/**
	 * Get ShippingDiscountProfileID
	 * @return string
	 */
	public function getShippingDiscountProfileID()
	{
		return $this->ShippingDiscountProfileID;
	}
	/**
	 * Set FlatShippingDiscount
	 * @param FlatShippingDiscountType FlatShippingDiscount
	 * @return FlatShippingDiscountType
	 */
	public function setFlatShippingDiscount($_FlatShippingDiscount)
	{
		return ($this->FlatShippingDiscount = $_FlatShippingDiscount);
	}
	/**
	 * Get FlatShippingDiscount
	 * @return EbayTradingTypeFlatShippingDiscountType
	 */
	public function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}
	/**
	 * Set CalculatedShippingDiscount
	 * @param CalculatedShippingDiscountType CalculatedShippingDiscount
	 * @return CalculatedShippingDiscountType
	 */
	public function setCalculatedShippingDiscount($_CalculatedShippingDiscount)
	{
		return ($this->CalculatedShippingDiscount = $_CalculatedShippingDiscount);
	}
	/**
	 * Get CalculatedShippingDiscount
	 * @return EbayTradingTypeCalculatedShippingDiscountType
	 */
	public function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}
	/**
	 * Set PromotionalShippingDiscount
	 * @param boolean PromotionalShippingDiscount
	 * @return boolean
	 */
	public function setPromotionalShippingDiscount($_PromotionalShippingDiscount)
	{
		return ($this->PromotionalShippingDiscount = $_PromotionalShippingDiscount);
	}
	/**
	 * Get PromotionalShippingDiscount
	 * @return boolean
	 */
	public function getPromotionalShippingDiscount()
	{
		return $this->PromotionalShippingDiscount;
	}
	/**
	 * Set InternationalShippingDiscountProfileID
	 * @param string InternationalShippingDiscountProfileID
	 * @return string
	 */
	public function setInternationalShippingDiscountProfileID($_InternationalShippingDiscountProfileID)
	{
		return ($this->InternationalShippingDiscountProfileID = $_InternationalShippingDiscountProfileID);
	}
	/**
	 * Get InternationalShippingDiscountProfileID
	 * @return string
	 */
	public function getInternationalShippingDiscountProfileID()
	{
		return $this->InternationalShippingDiscountProfileID;
	}
	/**
	 * Set InternationalFlatShippingDiscount
	 * @param FlatShippingDiscountType InternationalFlatShippingDiscount
	 * @return FlatShippingDiscountType
	 */
	public function setInternationalFlatShippingDiscount($_InternationalFlatShippingDiscount)
	{
		return ($this->InternationalFlatShippingDiscount = $_InternationalFlatShippingDiscount);
	}
	/**
	 * Get InternationalFlatShippingDiscount
	 * @return EbayTradingTypeFlatShippingDiscountType
	 */
	public function getInternationalFlatShippingDiscount()
	{
		return $this->InternationalFlatShippingDiscount;
	}
	/**
	 * Set InternationalCalculatedShippingDiscount
	 * @param CalculatedShippingDiscountType InternationalCalculatedShippingDiscount
	 * @return CalculatedShippingDiscountType
	 */
	public function setInternationalCalculatedShippingDiscount($_InternationalCalculatedShippingDiscount)
	{
		return ($this->InternationalCalculatedShippingDiscount = $_InternationalCalculatedShippingDiscount);
	}
	/**
	 * Get InternationalCalculatedShippingDiscount
	 * @return EbayTradingTypeCalculatedShippingDiscountType
	 */
	public function getInternationalCalculatedShippingDiscount()
	{
		return $this->InternationalCalculatedShippingDiscount;
	}
	/**
	 * Set InternationalPromotionalShippingDiscount
	 * @param boolean InternationalPromotionalShippingDiscount
	 * @return boolean
	 */
	public function setInternationalPromotionalShippingDiscount($_InternationalPromotionalShippingDiscount)
	{
		return ($this->InternationalPromotionalShippingDiscount = $_InternationalPromotionalShippingDiscount);
	}
	/**
	 * Get InternationalPromotionalShippingDiscount
	 * @return boolean
	 */
	public function getInternationalPromotionalShippingDiscount()
	{
		return $this->InternationalPromotionalShippingDiscount;
	}
	/**
	 * Set PromotionalShippingDiscountDetails
	 * @param PromotionalShippingDiscountDetailsType PromotionalShippingDiscountDetails
	 * @return PromotionalShippingDiscountDetailsType
	 */
	public function setPromotionalShippingDiscountDetails($_PromotionalShippingDiscountDetails)
	{
		return ($this->PromotionalShippingDiscountDetails = $_PromotionalShippingDiscountDetails);
	}
	/**
	 * Get PromotionalShippingDiscountDetails
	 * @return EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}
	/**
	 * Set CODCost
	 * @param AmountType CODCost
	 * @return AmountType
	 */
	public function setCODCost($_CODCost)
	{
		return ($this->CODCost = $_CODCost);
	}
	/**
	 * Get CODCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getCODCost()
	{
		return $this->CODCost;
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
	 * Set SellerExcludeShipToLocationsPreference
	 * @param boolean SellerExcludeShipToLocationsPreference
	 * @return boolean
	 */
	public function setSellerExcludeShipToLocationsPreference($_SellerExcludeShipToLocationsPreference)
	{
		return ($this->SellerExcludeShipToLocationsPreference = $_SellerExcludeShipToLocationsPreference);
	}
	/**
	 * Get SellerExcludeShipToLocationsPreference
	 * @return boolean
	 */
	public function getSellerExcludeShipToLocationsPreference()
	{
		return $this->SellerExcludeShipToLocationsPreference;
	}
	/**
	 * Set ShipmentTrackingDetails
	 * @param ShipmentTrackingDetailsType ShipmentTrackingDetails
	 * @return ShipmentTrackingDetailsType
	 */
	public function setShipmentTrackingDetails($_ShipmentTrackingDetails)
	{
		return ($this->ShipmentTrackingDetails = $_ShipmentTrackingDetails);
	}
	/**
	 * Get ShipmentTrackingDetails
	 * @return EbayTradingTypeShipmentTrackingDetailsType
	 */
	public function getShipmentTrackingDetails()
	{
		return $this->ShipmentTrackingDetails;
	}
	/**
	 * Set RateTableDetails
	 * @param RateTableDetailsType RateTableDetails
	 * @return RateTableDetailsType
	 */
	public function setRateTableDetails($_RateTableDetails)
	{
		return ($this->RateTableDetails = $_RateTableDetails);
	}
	/**
	 * Get RateTableDetails
	 * @return EbayTradingTypeRateTableDetailsType
	 */
	public function getRateTableDetails()
	{
		return $this->RateTableDetails;
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