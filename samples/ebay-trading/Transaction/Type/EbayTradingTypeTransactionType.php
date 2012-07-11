<?php
/**
 * Class file for EbayTradingTypeTransactionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTransactionType
 * Documentation : This type defines the Transaction container, which consists of detailed information about a single line item in an order. The eBay system creates an order line item when a buyer has committed to make a purchase in an auction or fixed-price listing. A multiple-quantity, fixed-priced listing can spawn one or more order line items. Auction listings and single-quantity, fixed-price listings can only spawn one order line item. <br>
 * @date 04/07/2012
 */
class EbayTradingTypeTransactionType extends EbayTradingWsdlClass
{
	/**
	 * The AmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the total amount of the line item. This amount includes the sale price, shipping and handling charges, shipping insurance (if offered and selected by the buyer), additional services, and any applied sales tax. This value is returned after the buyer has completed checkout (the <b>CheckoutStatus.Status</b> output field reads "Complete"). If the seller allowed the buyer to change the total for an order, the buyer is able to change the total up until the time when checkout status is Complete. Determine whether the buyer changed the amount by retrieving the order line item data and comparing the <b>AmountPaid</b> value to what the seller expected. If multiple order line items between the same buyer and seller have been combined into a Combined Payment order, the <b>AmountPaid</b> value returned in <b>GetSellerTransactions</b> and <b>GetItemTransactions</b> reflects the amount paid for the Combined Payment order and not the individual order line item. You can determine the order line items that belong to the same Combined Payment order by checking to see if the <b>ContainingOrder.OrderID</b> value is the same. For Motors items, <b>AmountPaid</b> is the amount paid by the buyer for the deposit.<br/> <br /> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPaid;
	/**
	 * The AdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, shipping insurance, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $AdjustmentAmount;
	/**
	 * The ConvertedAdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the converted value of <b>AdjustmentAmount</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br /> <br /> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedAdjustmentAmount;
	/**
	 * The Buyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : UserType container consisting of eBay user data for the buyer. See <b>UserType</b> for its child elements. Returned by <b>GetItemsAwaitingFeedback</b> if the seller is making the request. <br><br> Applicable to Half.com (for <b>GetOrders</b> only).
	 * @var EbayTradingTypeUserType
	 */
	public $Buyer;
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of shipping-related details for an order. Shipping details include shipping rates, package dimensions, handling costs, excluded shipping locations (if specified), shipping service options, shipping insurance information, sales tax information (if applicable), and shipment tracking details (if shipped). <br><br> For <b>GetSellerTransactions</b> and <b>GetItemTransactions</b>, the <b>ShippingDetails</b> container is returned in the <b>Transaction</b> container. For <b>GetOrders</b> and <b>GetOrderTransactions</b>, the <b>ShippingDetails</b> container is returned at the Order level. <br><br> Applicable to Half.com (for <b>GetOrders</b> only).
	 * @var EbayTradingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ConvertedAmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the converted value of <b>AmountPaid</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedAmountPaid;
	/**
	 * The ConvertedTransactionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the converted value of <b>TransactionPrice</b> in the currency of the site that returned the response. Refresh this value every 24 hours to pick up the current conversion rates. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedTransactionPrice;
	/**
	 * The CreatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the creation time of the order line item. For auction listings, an order line item is created when that listing ends with a high bidder whose bid meets or exceeds the Reserve Price (if set). For a fixed-price listing or a Buy It Now auction listing, an order line item is created once the buyer clicks the Buy button. <br><br> Applicable to Half.com (for <b>GetOrders</b> only).
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * The DepositType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates whether or not the seller requires a deposit for the vehicle. This field is only applicable to US eBay Motors Vehicle listings. Otherwise, this field is returned as an empty value. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeDepositTypeCodeType
	 */
	public $DepositType;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of details about an item in a listing. The child fields returned are dependent on the call, the type of item or listing, and the listing site. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The QuantityPurchased
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the number of identical items purchased at the same time by the same buyer from one listing. For auction listings, this value is always 1. For fixed-price, non-variation listings, this value can be greater than 1. In either case, this field is tied to the same order line item. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var int
	 */
	public $QuantityPurchased;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of status details of an order line item, including payment information. Several of these fields change values during the checkout flow. See <b>TransactionStatusType</b> for its child elements. <br><br> For <b>GetOrders</b>, only the <b> IntegratedMerchantCreditCardEnabled</b> and <b>PaymentMethodUsed</b> child elements are returned. The <b>PaymentHoldStatus</b> container will be returned for those sellers subject to the new eBay payment process. The fields indicating the status of the order are actually found in the <b>OrderArray.Order.CheckoutStatus</b> container. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeTransactionStatusType
	 */
	public $Status;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item. An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. <br><br> Applicable to Half.com (for <b>GetOrders</b> only).
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The TransactionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The price of the order line item. This amount does not take into account shipping, sales tax, and other costs related to the order line item. If multiple units were purchased through a non-variation, fixed-price listing, consider this value the per-unit price. In this case, the <b>TransactionPrice</b> would be multiplied by the <b>Transaction.QuantityPurchased</b> value. <br><br> For eBay Motors Vehicle listings, <b>TransactionPrice</b> is the deposit amount. For Best Offers, this is the seller-accepted per-item price. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAmountType
	 */
	public $TransactionPrice;
	/**
	 * The BestOfferSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the order line item was created as the result of the seller accepting a Best Offer from a buyer. <br><br> Not applicable to Half.com.
	 * @var boolean
	 */
	public $BestOfferSale;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT rate for the item. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored. <br><br> Not applicable to Half.com.
	 * @var decimal
	 */
	public $VATPercent;
	/**
	 * The ExternalTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of details for the electronic payment of an eBay order line item. PayPal transactions may include a buyer payment or refund, or a fee or credit applied to the seller's account. This field is only returned after payment for the order line item has occurred. For DE and AT orders going through the new eBay payment process, the <b>PaymentHoldDetails</b> container and <b>PaymentHoldStatus</b> field will be returned instead of the <b>ExternalTransaction</b> container. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeExternalTransactionType
	 */
	public $ExternalTransaction;
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container consists of Selling Manager product details and is only returned if the item was listed through Selling Manager. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The ShippingServiceSelected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of details about the domestic or international shipping service selected by the buyer. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeShippingServiceOptionsType
	 */
	public $ShippingServiceSelected;
	/**
	 * The BuyerMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display message from buyer. This field holds transient data that is only being returned in Checkout related notifications. <br><br> Not applicable to Half.com.
	 * @var string
	 */
	public $BuyerMessage;
	/**
	 * The DutchAuctionBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field holds the Dutch Auction Offer Bid by the buyer in this transaction, if this is a Dutch (multi-item) auction. This field will only be returned if caller has set IncludeDutchAuctionBid to true. <br><br> Not applicable to Half.com. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var EbayTradingTypeAmountType
	 */
	public $DutchAuctionBid;
	/**
	 * The BuyerPaidStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the paid status of the order. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypePaidStatusCodeType
	 */
	public $BuyerPaidStatus;
	/**
	 * The SellerPaidStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the paid status of the order. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypePaidStatusCodeType
	 */
	public $SellerPaidStatus;
	/**
	 * The PaidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the time when the order was marked paid. This value will only be visible to the user on either side of the order. An order can be marked as paid in the following ways: <ul> <li>Automatically when a payment is made via PayPal </li> <li>Seller marks the item as paid in My eBay or through Selling Manager Pro </li> <li>Programmatically by the seller through the <b>ReviseCheckoutStatus</b> or <b>CompleteSale</b> calls.</li> </ul> <br><br> Not applicable to Half.com.
	 * @var dateTime
	 */
	public $PaidTime;
	/**
	 * The ShippedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the time when the item(s) associated with the order were marked as shipped. This value will only be visible to the user on either side of the order. An order can be marked as shipped in My eBay or through Selling Manager Pro, or programmatically by the seller through the <b>CompleteSale</b> call. <br><br> Applicable to Half.com (for <b>GetOrders</b> only).
	 * @var dateTime
	 */
	public $ShippedTime;
	/**
	 * The TotalPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates the total price for an order line item. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalPrice;
	/**
	 * The FeedbackLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container consists of Feedback left by the caller for their order partner. This container is only returned if the order is complete and feedback on the order line item has been left by the caller. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeFeedbackInfoType
	 */
	public $FeedbackLeft;
	/**
	 * The FeedbackReceived
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container consists of Feedback received by the caller from their order partner. This container is only returned if the order is complete and feedback on the order line item has been received by the caller. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeFeedbackInfoType
	 */
	public $FeedbackReceived;
	/**
	 * The ContainingOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Combined Payment order to which the order line item belongs. This container is only returned if <b>IncludeContainingOrder</b> is included and set to true in a <b>GetItemTransactions</b> or <b>GetSellerTransactions</b> request. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeOrderType
	 */
	public $ContainingOrder;
	/**
	 * The FinalValueFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A Final Value Fee is calculated and charged to a seller's account immediately upon creation of an order line item. Note that this fee is created before the buyer makes a payment.The Final Value Fee for each order line item is returned by <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b>, regardless of the checkout status. <br><br> If a seller requests a Final Value Fee credit, the value of <b>Transaction.FinalValueFee</b> will not change if a credit is issued. The credit only appears in the seller's account data. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $FinalValueFee;
	/**
	 * The ListingCheckoutRedirectPreference
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ProStores listing level preferences regarding the store to which checkout should be redirected for the listing if <b>Item.ThirdPartyCheckout</b> is true.
	 * @var EbayTradingTypeListingCheckoutRedirectPreferenceType
	 */
	public $ListingCheckoutRedirectPreference;
	/**
	 * The RefundArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of one or more refund transactions to Half.com buyers. Container consisting of one or more refund transactions for eBay's new payment process. This container is only returned if a refund to a Half.com buyer has occurred or an refund was issued through eBay's new payment process
	 * @var EbayTradingTypeRefundArrayType
	 */
	public $RefundArray;
	/**
	 * The TransactionSiteID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The site upon which the order line item (transaction) was created.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $TransactionSiteID;
	/**
	 * The Platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the eBay co-branded site upon which the order line item (transaction) was created.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $Platform;
	/**
	 * The CartID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an instance of Shopping.com shopping cart. This field is only returned for Shopping.com order line items (transactions).
	 * @var string
	 */
	public $CartID;
	/**
	 * The SellerContactBuyerByEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the buyer has opted to accept emails from all the selling partners on Shopping.com. This field is only returned for order line items purchased through the Shopping.com shopping cart.
	 * @var boolean
	 */
	public $SellerContactBuyerByEmail;
	/**
	 * The PayPalEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller's Paypal email address. This value is only revealed if it is the seller making the call.
	 * @var string
	 */
	public $PayPalEmailAddress;
	/**
	 * The PaisaPayID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a PaisaPay transaction. Only applicable for the India site (203) if PaisaPay was the payment method used.
	 * @var string
	 */
	public $PaisaPayID;
	/**
	 * The BuyerGuaranteePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For the Australia site, <b>BuyerGuaranteePrice</b> is the PayPal Buyer Protection coverage, offered for the item at the time of purchase. Details of coverage are in the following sections of the View Item page: the Buy Safely section and the Payment Details section.
	 * @var EbayTradingTypeAmountType
	 */
	public $BuyerGuaranteePrice;
	/**
	 * The Variation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process orders should always check to see if this node is present.
	 * @var EbayTradingTypeVariationType
	 */
	public $Variation;
	/**
	 * The BuyerCheckoutMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned if a buyer left a comment for the seller during the left by buyer during the checkout flow.
	 * @var string
	 */
	public $BuyerCheckoutMessage;
	/**
	 * The Taxes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var EbayTradingTypeTaxesType
	 */
	public $Taxes;
	/**
	 * The BundlePurchase
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Boolean value indicating whether or not an order line item is part of a bundle purchase using Product Configurator.
	 * @var boolean
	 */
	public $BundlePurchase;
	/**
	 * The ActualShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping cost for the order line item. This field is always returned but defaults to 0.00 until payment has been made on the order.
	 * @var EbayTradingTypeAmountType
	 */
	public $ActualShippingCost;
	/**
	 * The ActualHandlingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The handling cost for the order line item. The value of this field is returned as zero dollars if the seller did not specify a handling cost for the listing. It also will show as 0.00 dollars until payment has been made on the order.
	 * @var EbayTradingTypeAmountType
	 */
	public $ActualHandlingCost;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The PaymentHoldDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping hold details
	 * @var EbayTradingTypePaymentHoldDetailType
	 */
	public $PaymentHoldDetails;
	/**
	 * The SellerDiscounts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller Discounts
	 * @var EbayTradingTypeSellerDiscountsType
	 */
	public $SellerDiscounts;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Partial or Full refund amount from seller to the buyer
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundAmount;
	/**
	 * The RefundStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Refund Status Notification to Seller (Success, Failure, Pending)
	 * @var string
	 */
	public $RefundStatus;
	/**
	 * The CodiceFiscale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the CodiceFiscale code for the user.<br /> Returned when CodiceFiscale is set to true.
	 * @var string
	 */
	public $CodiceFiscale;
	/**
	 * The IsMultiLegShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If <strong>IsMultilegShipping</strong> is true, the order or transaction uses the Global Exchange program, in which the shipment has a domestic leg and an international leg. The buyer's shipping address is in a country other than the country where the items were listed, and the seller has specified InternationalPriorityShipping as the default international shipping service in the listings of all the items in the shipment. <br/><br/> If <strong>IsMultilegShipping</strong> is false, the order or transaction doesn't use the Global Exchange program. The shipment might use a different international shipping service, or it might be domestic. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var boolean
	 */
	public $IsMultiLegShipping;
	/**
	 * The MultiLegShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the domestic and international legs of a Global Exchange shipment. This information includes the shipping service, total shipping cost, address and shipping time applicable to each leg of the shipment. <br/><br/> This information is not returned if <strong>IsMultilegShipping</strong> is false. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeMultiLegShippingDetailsType
	 */
	public $MultiLegShippingDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType AmountPaid
	 * @param EbayTradingTypeAmountType AdjustmentAmount
	 * @param EbayTradingTypeAmountType ConvertedAdjustmentAmount
	 * @param EbayTradingTypeUserType Buyer
	 * @param EbayTradingTypeShippingDetailsType ShippingDetails
	 * @param EbayTradingTypeAmountType ConvertedAmountPaid
	 * @param EbayTradingTypeAmountType ConvertedTransactionPrice
	 * @param dateTime CreatedDate
	 * @param EbayTradingTypeDepositTypeCodeType DepositType
	 * @param EbayTradingTypeItemType Item
	 * @param int QuantityPurchased
	 * @param EbayTradingTypeTransactionStatusType Status
	 * @param string TransactionID
	 * @param EbayTradingTypeAmountType TransactionPrice
	 * @param boolean BestOfferSale
	 * @param decimal VATPercent
	 * @param EbayTradingTypeExternalTransactionType ExternalTransaction
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @param EbayTradingTypeShippingServiceOptionsType ShippingServiceSelected
	 * @param string BuyerMessage
	 * @param EbayTradingTypeAmountType DutchAuctionBid
	 * @param EbayTradingTypePaidStatusCodeType BuyerPaidStatus
	 * @param EbayTradingTypePaidStatusCodeType SellerPaidStatus
	 * @param dateTime PaidTime
	 * @param dateTime ShippedTime
	 * @param EbayTradingTypeAmountType TotalPrice
	 * @param EbayTradingTypeFeedbackInfoType FeedbackLeft
	 * @param EbayTradingTypeFeedbackInfoType FeedbackReceived
	 * @param EbayTradingTypeOrderType ContainingOrder
	 * @param EbayTradingTypeAmountType FinalValueFee
	 * @param EbayTradingTypeListingCheckoutRedirectPreferenceType ListingCheckoutRedirectPreference
	 * @param EbayTradingTypeRefundArrayType RefundArray
	 * @param EbayTradingTypeSiteCodeType TransactionSiteID
	 * @param EbayTradingTypeTransactionPlatformCodeType Platform
	 * @param string CartID
	 * @param boolean SellerContactBuyerByEmail
	 * @param string PayPalEmailAddress
	 * @param string PaisaPayID
	 * @param EbayTradingTypeAmountType BuyerGuaranteePrice
	 * @param EbayTradingTypeVariationType Variation
	 * @param string BuyerCheckoutMessage
	 * @param EbayTradingTypeTaxesType Taxes
	 * @param boolean BundlePurchase
	 * @param EbayTradingTypeAmountType ActualShippingCost
	 * @param EbayTradingTypeAmountType ActualHandlingCost
	 * @param string OrderLineItemID
	 * @param EbayTradingTypePaymentHoldDetailType PaymentHoldDetails
	 * @param EbayTradingTypeSellerDiscountsType SellerDiscounts
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param string RefundStatus
	 * @param string CodiceFiscale
	 * @param boolean IsMultiLegShipping
	 * @param EbayTradingTypeMultiLegShippingDetailsType MultiLegShippingDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeTransactionType
	 */
	public function __construct($_AmountPaid = null,$_AdjustmentAmount = null,$_ConvertedAdjustmentAmount = null,$_Buyer = null,$_ShippingDetails = null,$_ConvertedAmountPaid = null,$_ConvertedTransactionPrice = null,$_CreatedDate = null,$_DepositType = null,$_Item = null,$_QuantityPurchased = null,$_Status = null,$_TransactionID = null,$_TransactionPrice = null,$_BestOfferSale = null,$_VATPercent = null,$_ExternalTransaction = null,$_SellingManagerProductDetails = null,$_ShippingServiceSelected = null,$_BuyerMessage = null,$_DutchAuctionBid = null,$_BuyerPaidStatus = null,$_SellerPaidStatus = null,$_PaidTime = null,$_ShippedTime = null,$_TotalPrice = null,$_FeedbackLeft = null,$_FeedbackReceived = null,$_ContainingOrder = null,$_FinalValueFee = null,$_ListingCheckoutRedirectPreference = null,$_RefundArray = null,$_TransactionSiteID = null,$_Platform = null,$_CartID = null,$_SellerContactBuyerByEmail = null,$_PayPalEmailAddress = null,$_PaisaPayID = null,$_BuyerGuaranteePrice = null,$_Variation = null,$_BuyerCheckoutMessage = null,$_Taxes = null,$_BundlePurchase = null,$_ActualShippingCost = null,$_ActualHandlingCost = null,$_OrderLineItemID = null,$_PaymentHoldDetails = null,$_SellerDiscounts = null,$_RefundAmount = null,$_RefundStatus = null,$_CodiceFiscale = null,$_IsMultiLegShipping = null,$_MultiLegShippingDetails = null,$_any = null)
	{
		parent::__construct(array('AmountPaid'=>$_AmountPaid,'AdjustmentAmount'=>$_AdjustmentAmount,'ConvertedAdjustmentAmount'=>$_ConvertedAdjustmentAmount,'Buyer'=>$_Buyer,'ShippingDetails'=>$_ShippingDetails,'ConvertedAmountPaid'=>$_ConvertedAmountPaid,'ConvertedTransactionPrice'=>$_ConvertedTransactionPrice,'CreatedDate'=>$_CreatedDate,'DepositType'=>$_DepositType,'Item'=>$_Item,'QuantityPurchased'=>$_QuantityPurchased,'Status'=>$_Status,'TransactionID'=>$_TransactionID,'TransactionPrice'=>$_TransactionPrice,'BestOfferSale'=>$_BestOfferSale,'VATPercent'=>$_VATPercent,'ExternalTransaction'=>$_ExternalTransaction,'SellingManagerProductDetails'=>$_SellingManagerProductDetails,'ShippingServiceSelected'=>$_ShippingServiceSelected,'BuyerMessage'=>$_BuyerMessage,'DutchAuctionBid'=>$_DutchAuctionBid,'BuyerPaidStatus'=>$_BuyerPaidStatus,'SellerPaidStatus'=>$_SellerPaidStatus,'PaidTime'=>$_PaidTime,'ShippedTime'=>$_ShippedTime,'TotalPrice'=>$_TotalPrice,'FeedbackLeft'=>$_FeedbackLeft,'FeedbackReceived'=>$_FeedbackReceived,'ContainingOrder'=>$_ContainingOrder,'FinalValueFee'=>$_FinalValueFee,'ListingCheckoutRedirectPreference'=>$_ListingCheckoutRedirectPreference,'RefundArray'=>$_RefundArray,'TransactionSiteID'=>$_TransactionSiteID,'Platform'=>$_Platform,'CartID'=>$_CartID,'SellerContactBuyerByEmail'=>$_SellerContactBuyerByEmail,'PayPalEmailAddress'=>$_PayPalEmailAddress,'PaisaPayID'=>$_PaisaPayID,'BuyerGuaranteePrice'=>$_BuyerGuaranteePrice,'Variation'=>$_Variation,'BuyerCheckoutMessage'=>$_BuyerCheckoutMessage,'Taxes'=>$_Taxes,'BundlePurchase'=>$_BundlePurchase,'ActualShippingCost'=>$_ActualShippingCost,'ActualHandlingCost'=>$_ActualHandlingCost,'OrderLineItemID'=>$_OrderLineItemID,'PaymentHoldDetails'=>$_PaymentHoldDetails,'SellerDiscounts'=>$_SellerDiscounts,'RefundAmount'=>$_RefundAmount,'RefundStatus'=>$_RefundStatus,'CodiceFiscale'=>$_CodiceFiscale,'IsMultiLegShipping'=>$_IsMultiLegShipping,'MultiLegShippingDetails'=>$_MultiLegShippingDetails,'any'=>$_any));
	}
	/**
	 * Set AmountPaid
	 * @param AmountType AmountPaid
	 * @return AmountType
	 */
	public function setAmountPaid($_AmountPaid)
	{
		return ($this->AmountPaid = $_AmountPaid);
	}
	/**
	 * Get AmountPaid
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * Set AdjustmentAmount
	 * @param AmountType AdjustmentAmount
	 * @return AmountType
	 */
	public function setAdjustmentAmount($_AdjustmentAmount)
	{
		return ($this->AdjustmentAmount = $_AdjustmentAmount);
	}
	/**
	 * Get AdjustmentAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * Set ConvertedAdjustmentAmount
	 * @param AmountType ConvertedAdjustmentAmount
	 * @return AmountType
	 */
	public function setConvertedAdjustmentAmount($_ConvertedAdjustmentAmount)
	{
		return ($this->ConvertedAdjustmentAmount = $_ConvertedAdjustmentAmount);
	}
	/**
	 * Get ConvertedAdjustmentAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedAdjustmentAmount()
	{
		return $this->ConvertedAdjustmentAmount;
	}
	/**
	 * Set Buyer
	 * @param UserType Buyer
	 * @return UserType
	 */
	public function setBuyer($_Buyer)
	{
		return ($this->Buyer = $_Buyer);
	}
	/**
	 * Get Buyer
	 * @return EbayTradingTypeUserType
	 */
	public function getBuyer()
	{
		return $this->Buyer;
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
	 * Set ConvertedAmountPaid
	 * @param AmountType ConvertedAmountPaid
	 * @return AmountType
	 */
	public function setConvertedAmountPaid($_ConvertedAmountPaid)
	{
		return ($this->ConvertedAmountPaid = $_ConvertedAmountPaid);
	}
	/**
	 * Get ConvertedAmountPaid
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}
	/**
	 * Set ConvertedTransactionPrice
	 * @param AmountType ConvertedTransactionPrice
	 * @return AmountType
	 */
	public function setConvertedTransactionPrice($_ConvertedTransactionPrice)
	{
		return ($this->ConvertedTransactionPrice = $_ConvertedTransactionPrice);
	}
	/**
	 * Get ConvertedTransactionPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}
	/**
	 * Set CreatedDate
	 * @param dateTime CreatedDate
	 * @return dateTime
	 */
	public function setCreatedDate($_CreatedDate)
	{
		return ($this->CreatedDate = $_CreatedDate);
	}
	/**
	 * Get CreatedDate
	 * @return dateTime
	 */
	public function getCreatedDate()
	{
		return $this->CreatedDate;
	}
	/**
	 * Set DepositType
	 * @param DepositTypeCodeType DepositType
	 * @return DepositTypeCodeType
	 */
	public function setDepositType($_DepositType)
	{
		return ($this->DepositType = EbayTradingTypeDepositTypeCodeType::valueIsValid($_DepositType)?$_DepositType:null);
	}
	/**
	 * Get DepositType
	 * @return EbayTradingTypeDepositTypeCodeType
	 */
	public function getDepositType()
	{
		return $this->DepositType;
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set QuantityPurchased
	 * @param int QuantityPurchased
	 * @return int
	 */
	public function setQuantityPurchased($_QuantityPurchased)
	{
		return ($this->QuantityPurchased = $_QuantityPurchased);
	}
	/**
	 * Get QuantityPurchased
	 * @return int
	 */
	public function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}
	/**
	 * Set Status
	 * @param TransactionStatusType Status
	 * @return TransactionStatusType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeTransactionStatusType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TransactionPrice
	 * @param AmountType TransactionPrice
	 * @return AmountType
	 */
	public function setTransactionPrice($_TransactionPrice)
	{
		return ($this->TransactionPrice = $_TransactionPrice);
	}
	/**
	 * Get TransactionPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
	/**
	 * Set BestOfferSale
	 * @param boolean BestOfferSale
	 * @return boolean
	 */
	public function setBestOfferSale($_BestOfferSale)
	{
		return ($this->BestOfferSale = $_BestOfferSale);
	}
	/**
	 * Get BestOfferSale
	 * @return boolean
	 */
	public function getBestOfferSale()
	{
		return $this->BestOfferSale;
	}
	/**
	 * Set VATPercent
	 * @param decimal VATPercent
	 * @return decimal
	 */
	public function setVATPercent($_VATPercent)
	{
		return ($this->VATPercent = $_VATPercent);
	}
	/**
	 * Get VATPercent
	 * @return decimal
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * Set ExternalTransaction
	 * @param ExternalTransactionType ExternalTransaction
	 * @return ExternalTransactionType
	 */
	public function setExternalTransaction($_ExternalTransaction)
	{
		return ($this->ExternalTransaction = $_ExternalTransaction);
	}
	/**
	 * Get ExternalTransaction
	 * @return EbayTradingTypeExternalTransactionType
	 */
	public function getExternalTransaction()
	{
		return $this->ExternalTransaction;
	}
	/**
	 * Set SellingManagerProductDetails
	 * @param SellingManagerProductDetailsType SellingManagerProductDetails
	 * @return SellingManagerProductDetailsType
	 */
	public function setSellingManagerProductDetails($_SellingManagerProductDetails)
	{
		return ($this->SellingManagerProductDetails = $_SellingManagerProductDetails);
	}
	/**
	 * Get SellingManagerProductDetails
	 * @return EbayTradingTypeSellingManagerProductDetailsType
	 */
	public function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * Set ShippingServiceSelected
	 * @param ShippingServiceOptionsType ShippingServiceSelected
	 * @return ShippingServiceOptionsType
	 */
	public function setShippingServiceSelected($_ShippingServiceSelected)
	{
		return ($this->ShippingServiceSelected = $_ShippingServiceSelected);
	}
	/**
	 * Get ShippingServiceSelected
	 * @return EbayTradingTypeShippingServiceOptionsType
	 */
	public function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}
	/**
	 * Set BuyerMessage
	 * @param string BuyerMessage
	 * @return string
	 */
	public function setBuyerMessage($_BuyerMessage)
	{
		return ($this->BuyerMessage = $_BuyerMessage);
	}
	/**
	 * Get BuyerMessage
	 * @return string
	 */
	public function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}
	/**
	 * Set DutchAuctionBid
	 * @param AmountType DutchAuctionBid
	 * @return AmountType
	 */
	public function setDutchAuctionBid($_DutchAuctionBid)
	{
		return ($this->DutchAuctionBid = $_DutchAuctionBid);
	}
	/**
	 * Get DutchAuctionBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getDutchAuctionBid()
	{
		return $this->DutchAuctionBid;
	}
	/**
	 * Set BuyerPaidStatus
	 * @param PaidStatusCodeType BuyerPaidStatus
	 * @return PaidStatusCodeType
	 */
	public function setBuyerPaidStatus($_BuyerPaidStatus)
	{
		return ($this->BuyerPaidStatus = EbayTradingTypePaidStatusCodeType::valueIsValid($_BuyerPaidStatus)?$_BuyerPaidStatus:null);
	}
	/**
	 * Get BuyerPaidStatus
	 * @return EbayTradingTypePaidStatusCodeType
	 */
	public function getBuyerPaidStatus()
	{
		return $this->BuyerPaidStatus;
	}
	/**
	 * Set SellerPaidStatus
	 * @param PaidStatusCodeType SellerPaidStatus
	 * @return PaidStatusCodeType
	 */
	public function setSellerPaidStatus($_SellerPaidStatus)
	{
		return ($this->SellerPaidStatus = EbayTradingTypePaidStatusCodeType::valueIsValid($_SellerPaidStatus)?$_SellerPaidStatus:null);
	}
	/**
	 * Get SellerPaidStatus
	 * @return EbayTradingTypePaidStatusCodeType
	 */
	public function getSellerPaidStatus()
	{
		return $this->SellerPaidStatus;
	}
	/**
	 * Set PaidTime
	 * @param dateTime PaidTime
	 * @return dateTime
	 */
	public function setPaidTime($_PaidTime)
	{
		return ($this->PaidTime = $_PaidTime);
	}
	/**
	 * Get PaidTime
	 * @return dateTime
	 */
	public function getPaidTime()
	{
		return $this->PaidTime;
	}
	/**
	 * Set ShippedTime
	 * @param dateTime ShippedTime
	 * @return dateTime
	 */
	public function setShippedTime($_ShippedTime)
	{
		return ($this->ShippedTime = $_ShippedTime);
	}
	/**
	 * Get ShippedTime
	 * @return dateTime
	 */
	public function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * Set TotalPrice
	 * @param AmountType TotalPrice
	 * @return AmountType
	 */
	public function setTotalPrice($_TotalPrice)
	{
		return ($this->TotalPrice = $_TotalPrice);
	}
	/**
	 * Get TotalPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalPrice()
	{
		return $this->TotalPrice;
	}
	/**
	 * Set FeedbackLeft
	 * @param FeedbackInfoType FeedbackLeft
	 * @return FeedbackInfoType
	 */
	public function setFeedbackLeft($_FeedbackLeft)
	{
		return ($this->FeedbackLeft = $_FeedbackLeft);
	}
	/**
	 * Get FeedbackLeft
	 * @return EbayTradingTypeFeedbackInfoType
	 */
	public function getFeedbackLeft()
	{
		return $this->FeedbackLeft;
	}
	/**
	 * Set FeedbackReceived
	 * @param FeedbackInfoType FeedbackReceived
	 * @return FeedbackInfoType
	 */
	public function setFeedbackReceived($_FeedbackReceived)
	{
		return ($this->FeedbackReceived = $_FeedbackReceived);
	}
	/**
	 * Get FeedbackReceived
	 * @return EbayTradingTypeFeedbackInfoType
	 */
	public function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}
	/**
	 * Set ContainingOrder
	 * @param OrderType ContainingOrder
	 * @return OrderType
	 */
	public function setContainingOrder($_ContainingOrder)
	{
		return ($this->ContainingOrder = $_ContainingOrder);
	}
	/**
	 * Get ContainingOrder
	 * @return EbayTradingTypeOrderType
	 */
	public function getContainingOrder()
	{
		return $this->ContainingOrder;
	}
	/**
	 * Set FinalValueFee
	 * @param AmountType FinalValueFee
	 * @return AmountType
	 */
	public function setFinalValueFee($_FinalValueFee)
	{
		return ($this->FinalValueFee = $_FinalValueFee);
	}
	/**
	 * Get FinalValueFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getFinalValueFee()
	{
		return $this->FinalValueFee;
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
	 * Set RefundArray
	 * @param RefundArrayType RefundArray
	 * @return RefundArrayType
	 */
	public function setRefundArray($_RefundArray)
	{
		return ($this->RefundArray = $_RefundArray);
	}
	/**
	 * Get RefundArray
	 * @return EbayTradingTypeRefundArrayType
	 */
	public function getRefundArray()
	{
		return $this->RefundArray;
	}
	/**
	 * Set TransactionSiteID
	 * @param SiteCodeType TransactionSiteID
	 * @return SiteCodeType
	 */
	public function setTransactionSiteID($_TransactionSiteID)
	{
		return ($this->TransactionSiteID = EbayTradingTypeSiteCodeType::valueIsValid($_TransactionSiteID)?$_TransactionSiteID:null);
	}
	/**
	 * Get TransactionSiteID
	 * @return EbayTradingTypeSiteCodeType
	 */
	public function getTransactionSiteID()
	{
		return $this->TransactionSiteID;
	}
	/**
	 * Set Platform
	 * @param TransactionPlatformCodeType Platform
	 * @return TransactionPlatformCodeType
	 */
	public function setPlatform($_Platform)
	{
		return ($this->Platform = EbayTradingTypeTransactionPlatformCodeType::valueIsValid($_Platform)?$_Platform:null);
	}
	/**
	 * Get Platform
	 * @return EbayTradingTypeTransactionPlatformCodeType
	 */
	public function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * Set CartID
	 * @param string CartID
	 * @return string
	 */
	public function setCartID($_CartID)
	{
		return ($this->CartID = $_CartID);
	}
	/**
	 * Get CartID
	 * @return string
	 */
	public function getCartID()
	{
		return $this->CartID;
	}
	/**
	 * Set SellerContactBuyerByEmail
	 * @param boolean SellerContactBuyerByEmail
	 * @return boolean
	 */
	public function setSellerContactBuyerByEmail($_SellerContactBuyerByEmail)
	{
		return ($this->SellerContactBuyerByEmail = $_SellerContactBuyerByEmail);
	}
	/**
	 * Get SellerContactBuyerByEmail
	 * @return boolean
	 */
	public function getSellerContactBuyerByEmail()
	{
		return $this->SellerContactBuyerByEmail;
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
	 * Set PaisaPayID
	 * @param string PaisaPayID
	 * @return string
	 */
	public function setPaisaPayID($_PaisaPayID)
	{
		return ($this->PaisaPayID = $_PaisaPayID);
	}
	/**
	 * Get PaisaPayID
	 * @return string
	 */
	public function getPaisaPayID()
	{
		return $this->PaisaPayID;
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
	 * Set Variation
	 * @param VariationType Variation
	 * @return VariationType
	 */
	public function setVariation($_Variation)
	{
		return ($this->Variation = $_Variation);
	}
	/**
	 * Get Variation
	 * @return EbayTradingTypeVariationType
	 */
	public function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * Set BuyerCheckoutMessage
	 * @param string BuyerCheckoutMessage
	 * @return string
	 */
	public function setBuyerCheckoutMessage($_BuyerCheckoutMessage)
	{
		return ($this->BuyerCheckoutMessage = $_BuyerCheckoutMessage);
	}
	/**
	 * Get BuyerCheckoutMessage
	 * @return string
	 */
	public function getBuyerCheckoutMessage()
	{
		return $this->BuyerCheckoutMessage;
	}
	/**
	 * Set Taxes
	 * @param TaxesType Taxes
	 * @return TaxesType
	 */
	public function setTaxes($_Taxes)
	{
		return ($this->Taxes = $_Taxes);
	}
	/**
	 * Get Taxes
	 * @return EbayTradingTypeTaxesType
	 */
	public function getTaxes()
	{
		return $this->Taxes;
	}
	/**
	 * Set BundlePurchase
	 * @param boolean BundlePurchase
	 * @return boolean
	 */
	public function setBundlePurchase($_BundlePurchase)
	{
		return ($this->BundlePurchase = $_BundlePurchase);
	}
	/**
	 * Get BundlePurchase
	 * @return boolean
	 */
	public function getBundlePurchase()
	{
		return $this->BundlePurchase;
	}
	/**
	 * Set ActualShippingCost
	 * @param AmountType ActualShippingCost
	 * @return AmountType
	 */
	public function setActualShippingCost($_ActualShippingCost)
	{
		return ($this->ActualShippingCost = $_ActualShippingCost);
	}
	/**
	 * Get ActualShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getActualShippingCost()
	{
		return $this->ActualShippingCost;
	}
	/**
	 * Set ActualHandlingCost
	 * @param AmountType ActualHandlingCost
	 * @return AmountType
	 */
	public function setActualHandlingCost($_ActualHandlingCost)
	{
		return ($this->ActualHandlingCost = $_ActualHandlingCost);
	}
	/**
	 * Get ActualHandlingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getActualHandlingCost()
	{
		return $this->ActualHandlingCost;
	}
	/**
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * Set PaymentHoldDetails
	 * @param PaymentHoldDetailType PaymentHoldDetails
	 * @return PaymentHoldDetailType
	 */
	public function setPaymentHoldDetails($_PaymentHoldDetails)
	{
		return ($this->PaymentHoldDetails = $_PaymentHoldDetails);
	}
	/**
	 * Get PaymentHoldDetails
	 * @return EbayTradingTypePaymentHoldDetailType
	 */
	public function getPaymentHoldDetails()
	{
		return $this->PaymentHoldDetails;
	}
	/**
	 * Set SellerDiscounts
	 * @param SellerDiscountsType SellerDiscounts
	 * @return SellerDiscountsType
	 */
	public function setSellerDiscounts($_SellerDiscounts)
	{
		return ($this->SellerDiscounts = $_SellerDiscounts);
	}
	/**
	 * Get SellerDiscounts
	 * @return EbayTradingTypeSellerDiscountsType
	 */
	public function getSellerDiscounts()
	{
		return $this->SellerDiscounts;
	}
	/**
	 * Set RefundAmount
	 * @param AmountType RefundAmount
	 * @return AmountType
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * Set RefundStatus
	 * @param string RefundStatus
	 * @return string
	 */
	public function setRefundStatus($_RefundStatus)
	{
		return ($this->RefundStatus = $_RefundStatus);
	}
	/**
	 * Get RefundStatus
	 * @return string
	 */
	public function getRefundStatus()
	{
		return $this->RefundStatus;
	}
	/**
	 * Set CodiceFiscale
	 * @param string CodiceFiscale
	 * @return string
	 */
	public function setCodiceFiscale($_CodiceFiscale)
	{
		return ($this->CodiceFiscale = $_CodiceFiscale);
	}
	/**
	 * Get CodiceFiscale
	 * @return string
	 */
	public function getCodiceFiscale()
	{
		return $this->CodiceFiscale;
	}
	/**
	 * Set IsMultiLegShipping
	 * @param boolean IsMultiLegShipping
	 * @return boolean
	 */
	public function setIsMultiLegShipping($_IsMultiLegShipping)
	{
		return ($this->IsMultiLegShipping = $_IsMultiLegShipping);
	}
	/**
	 * Get IsMultiLegShipping
	 * @return boolean
	 */
	public function getIsMultiLegShipping()
	{
		return $this->IsMultiLegShipping;
	}
	/**
	 * Set MultiLegShippingDetails
	 * @param MultiLegShippingDetailsType MultiLegShippingDetails
	 * @return MultiLegShippingDetailsType
	 */
	public function setMultiLegShippingDetails($_MultiLegShippingDetails)
	{
		return ($this->MultiLegShippingDetails = $_MultiLegShippingDetails);
	}
	/**
	 * Get MultiLegShippingDetails
	 * @return EbayTradingTypeMultiLegShippingDetailsType
	 */
	public function getMultiLegShippingDetails()
	{
		return $this->MultiLegShippingDetails;
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