<?php
/**
 * Class file for EbayTradingTypeItemSortTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemSortTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemSortTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemID'
	 * Meta informations :
	 * 	- documentation : Sort by Item ID (ascending).
	 * @return string 'ItemID'
	 */
	const VALUE_ITEMID = 'ItemID';
	/**
	 * Constant for value 'Price'
	 * Meta informations :
	 * 	- documentation : Sort by price (ascending).
	 * @return string 'Price'
	 */
	const VALUE_PRICE = 'Price';
	/**
	 * Constant for value 'StartPrice'
	 * Meta informations :
	 * 	- documentation : Sort by start price (ascending).
	 * @return string 'StartPrice'
	 */
	const VALUE_STARTPRICE = 'StartPrice';
	/**
	 * Constant for value 'Title'
	 * Meta informations :
	 * 	- documentation : Sort by item title (ascending).
	 * @return string 'Title'
	 */
	const VALUE_TITLE = 'Title';
	/**
	 * Constant for value 'BidCount'
	 * Meta informations :
	 * 	- documentation : Sort by number of bids on the item (ascending).
	 * @return string 'BidCount'
	 */
	const VALUE_BIDCOUNT = 'BidCount';
	/**
	 * Constant for value 'Quantity'
	 * Meta informations :
	 * 	- documentation : Sort by quantity (ascending).
	 * @return string 'Quantity'
	 */
	const VALUE_QUANTITY = 'Quantity';
	/**
	 * Constant for value 'StartTime'
	 * Meta informations :
	 * 	- documentation : Sort by listing start time (ascending).
	 * @return string 'StartTime'
	 */
	const VALUE_STARTTIME = 'StartTime';
	/**
	 * Constant for value 'EndTime'
	 * Meta informations :
	 * 	- documentation : Sort by listing end time (ascending).
	 * @return string 'EndTime'
	 */
	const VALUE_ENDTIME = 'EndTime';
	/**
	 * Constant for value 'SellerUserID'
	 * Meta informations :
	 * 	- documentation : Sort by the seller's user ID, in alphabetical order.
	 * @return string 'SellerUserID'
	 */
	const VALUE_SELLERUSERID = 'SellerUserID';
	/**
	 * Constant for value 'TimeLeft'
	 * Meta informations :
	 * 	- documentation : Sort by the time left for the item's listing, in ascending order: active items, good-til-cancelled items, and completed items.
	 * @return string 'TimeLeft'
	 */
	const VALUE_TIMELEFT = 'TimeLeft';
	/**
	 * Constant for value 'ListingDuration'
	 * Meta informations :
	 * 	- documentation : Sort by listing duration (ascending).
	 * @return string 'ListingDuration'
	 */
	const VALUE_LISTINGDURATION = 'ListingDuration';
	/**
	 * Constant for value 'ListingType'
	 * Meta informations :
	 * 	- documentation : Sort by listing type (ascending).
	 * @return string 'ListingType'
	 */
	const VALUE_LISTINGTYPE = 'ListingType';
	/**
	 * Constant for value 'CurrentPrice'
	 * Meta informations :
	 * 	- documentation : Sort by current price (ascending).
	 * @return string 'CurrentPrice'
	 */
	const VALUE_CURRENTPRICE = 'CurrentPrice';
	/**
	 * Constant for value 'ReservePrice'
	 * Meta informations :
	 * 	- documentation : Sort by reserve price (ascending).
	 * @return string 'ReservePrice'
	 */
	const VALUE_RESERVEPRICE = 'ReservePrice';
	/**
	 * Constant for value 'MaxBid'
	 * Meta informations :
	 * 	- documentation : Sort by maximum bid price (ascending).
	 * @return string 'MaxBid'
	 */
	const VALUE_MAXBID = 'MaxBid';
	/**
	 * Constant for value 'BidderCount'
	 * Meta informations :
	 * 	- documentation : Sort by number of bidders (ascending).
	 * @return string 'BidderCount'
	 */
	const VALUE_BIDDERCOUNT = 'BidderCount';
	/**
	 * Constant for value 'HighBidderUserID'
	 * Meta informations :
	 * 	- documentation : Sort by the user ID of the highest bidder (ascending).
	 * @return string 'HighBidderUserID'
	 */
	const VALUE_HIGHBIDDERUSERID = 'HighBidderUserID';
	/**
	 * Constant for value 'BuyerUserID'
	 * Meta informations :
	 * 	- documentation : Sort by the user ID of the buyer (ascending).
	 * @return string 'BuyerUserID'
	 */
	const VALUE_BUYERUSERID = 'BuyerUserID';
	/**
	 * Constant for value 'BuyerPostalCode'
	 * Meta informations :
	 * 	- documentation : Sort by the buyer's postal code (ascending).
	 * @return string 'BuyerPostalCode'
	 */
	const VALUE_BUYERPOSTALCODE = 'BuyerPostalCode';
	/**
	 * Constant for value 'BuyerEmail'
	 * Meta informations :
	 * 	- documentation : Sort by the buyer's email address, in alphabetical order.
	 * @return string 'BuyerEmail'
	 */
	const VALUE_BUYEREMAIL = 'BuyerEmail';
	/**
	 * Constant for value 'SellerEmail'
	 * Meta informations :
	 * 	- documentation : Sort by the seller's email address, in alphabetical order.
	 * @return string 'SellerEmail'
	 */
	const VALUE_SELLEREMAIL = 'SellerEmail';
	/**
	 * Constant for value 'TotalPrice'
	 * Meta informations :
	 * 	- documentation : Sort by total price (ascending).
	 * @return string 'TotalPrice'
	 */
	const VALUE_TOTALPRICE = 'TotalPrice';
	/**
	 * Constant for value 'WatchCount'
	 * Meta informations :
	 * 	- documentation : Sort by the number of items being watched (ascending). The WatchCount of an item is the number of watches that buyers have placed on an item using their eBay accounts.
	 * @return string 'WatchCount'
	 */
	const VALUE_WATCHCOUNT = 'WatchCount';
	/**
	 * Constant for value 'BestOfferCount'
	 * Meta informations :
	 * 	- documentation : Sort by the number of best offers (ascending).
	 * @return string 'BestOfferCount'
	 */
	const VALUE_BESTOFFERCOUNT = 'BestOfferCount';
	/**
	 * Constant for value 'QuestionCount'
	 * Meta informations :
	 * 	- documentation : Sort by the number of questions (ascending).
	 * @return string 'QuestionCount'
	 */
	const VALUE_QUESTIONCOUNT = 'QuestionCount';
	/**
	 * Constant for value 'ShippingServiceCost'
	 * Meta informations :
	 * 	- documentation : Sort by the cost indicated for shipping (ascending).
	 * @return string 'ShippingServiceCost'
	 */
	const VALUE_SHIPPINGSERVICECOST = 'ShippingServiceCost';
	/**
	 * Constant for value 'FeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Sort by type of feedback received, positive, negative, or neutral. In ascending order - negative, neutral, positive.
	 * @return string 'FeedbackReceived'
	 */
	const VALUE_FEEDBACKRECEIVED = 'FeedbackReceived';
	/**
	 * Constant for value 'FeedbackLeft'
	 * Meta informations :
	 * 	- documentation : Sort by type of feedback received, positive, negative, or neutral. In ascending order - negative, neutral, positive.
	 * @return string 'FeedbackLeft'
	 */
	const VALUE_FEEDBACKLEFT = 'FeedbackLeft';
	/**
	 * Constant for value 'UserID'
	 * Meta informations :
	 * 	- documentation : Sort by user ID, in alphabetical order.
	 * @return string 'UserID'
	 */
	const VALUE_USERID = 'UserID';
	/**
	 * Constant for value 'QuantitySold'
	 * Meta informations :
	 * 	- documentation : Sort by the number of items sold (ascending).
	 * @return string 'QuantitySold'
	 */
	const VALUE_QUANTITYSOLD = 'QuantitySold';
	/**
	 * Constant for value 'BestOffer'
	 * Meta informations :
	 * 	- documentation : Sort items with Best Offers first.
	 * @return string 'BestOffer'
	 */
	const VALUE_BESTOFFER = 'BestOffer';
	/**
	 * Constant for value 'QuantityAvailable'
	 * Meta informations :
	 * 	- documentation : Sort by the number of items available (ascending).
	 * @return string 'QuantityAvailable'
	 */
	const VALUE_QUANTITYAVAILABLE = 'QuantityAvailable';
	/**
	 * Constant for value 'QuantityPurchased'
	 * Meta informations :
	 * 	- documentation : Sort by the number of items purchased (ascending).
	 * @return string 'QuantityPurchased'
	 */
	const VALUE_QUANTITYPURCHASED = 'QuantityPurchased';
	/**
	 * Constant for value 'WonPlatform'
	 * Meta informations :
	 * 	- documentation : Sort by the platform on which the item was won (eBay items last).
	 * @return string 'WonPlatform'
	 */
	const VALUE_WONPLATFORM = 'WonPlatform';
	/**
	 * Constant for value 'SoldPlatform'
	 * Meta informations :
	 * 	- documentation : Sort by the platform on which the item was sold (eBay items last).
	 * @return string 'SoldPlatform'
	 */
	const VALUE_SOLDPLATFORM = 'SoldPlatform';
	/**
	 * Constant for value 'ListingDurationDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the duration of the listing (descending).
	 * @return string 'ListingDurationDescending'
	 */
	const VALUE_LISTINGDURATIONDESCENDING = 'ListingDurationDescending';
	/**
	 * Constant for value 'ListingTypeDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the listing type (descending).
	 * @return string 'ListingTypeDescending'
	 */
	const VALUE_LISTINGTYPEDESCENDING = 'ListingTypeDescending';
	/**
	 * Constant for value 'CurrentPriceDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the current price of the listed item (descending).
	 * @return string 'CurrentPriceDescending'
	 */
	const VALUE_CURRENTPRICEDESCENDING = 'CurrentPriceDescending';
	/**
	 * Constant for value 'ReservePriceDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the listing's reserve price (descending).
	 * @return string 'ReservePriceDescending'
	 */
	const VALUE_RESERVEPRICEDESCENDING = 'ReservePriceDescending';
	/**
	 * Constant for value 'MaxBidDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the highest bid on the item (descending).
	 * @return string 'MaxBidDescending'
	 */
	const VALUE_MAXBIDDESCENDING = 'MaxBidDescending';
	/**
	 * Constant for value 'BidderCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by number of bidders (descending).
	 * @return string 'BidderCountDescending'
	 */
	const VALUE_BIDDERCOUNTDESCENDING = 'BidderCountDescending';
	/**
	 * Constant for value 'HighBidderUserIDDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the user ID of the highest bidder (descending).
	 * @return string 'HighBidderUserIDDescending'
	 */
	const VALUE_HIGHBIDDERUSERIDDESCENDING = 'HighBidderUserIDDescending';
	/**
	 * Constant for value 'BuyerUserIDDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the user ID of the buyer, in reverse alphabetical order.
	 * @return string 'BuyerUserIDDescending'
	 */
	const VALUE_BUYERUSERIDDESCENDING = 'BuyerUserIDDescending';
	/**
	 * Constant for value 'BuyerPostalCodeDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the buyer's postal code, in descending order.
	 * @return string 'BuyerPostalCodeDescending'
	 */
	const VALUE_BUYERPOSTALCODEDESCENDING = 'BuyerPostalCodeDescending';
	/**
	 * Constant for value 'BuyerEmailDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the buyer's email address, in reverse alphabetical order.
	 * @return string 'BuyerEmailDescending'
	 */
	const VALUE_BUYEREMAILDESCENDING = 'BuyerEmailDescending';
	/**
	 * Constant for value 'SellerEmailDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the seller's email address, in reverse alphabetical order.
	 * @return string 'SellerEmailDescending'
	 */
	const VALUE_SELLEREMAILDESCENDING = 'SellerEmailDescending';
	/**
	 * Constant for value 'TotalPriceDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the total price of the order, (descending).
	 * @return string 'TotalPriceDescending'
	 */
	const VALUE_TOTALPRICEDESCENDING = 'TotalPriceDescending';
	/**
	 * Constant for value 'WatchCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by watch count (descending).
	 * @return string 'WatchCountDescending'
	 */
	const VALUE_WATCHCOUNTDESCENDING = 'WatchCountDescending';
	/**
	 * Constant for value 'QuestionCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by number of questions (descending).
	 * @return string 'QuestionCountDescending'
	 */
	const VALUE_QUESTIONCOUNTDESCENDING = 'QuestionCountDescending';
	/**
	 * Constant for value 'ShippingServiceCostDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the cost of shipping (descending).
	 * @return string 'ShippingServiceCostDescending'
	 */
	const VALUE_SHIPPINGSERVICECOSTDESCENDING = 'ShippingServiceCostDescending';
	/**
	 * Constant for value 'FeedbackReceivedDescending'
	 * Meta informations :
	 * 	- documentation : Sort by type of feedback received, positive, negative, or neutral. In descending order - positive, neutral, negative.
	 * @return string 'FeedbackReceivedDescending'
	 */
	const VALUE_FEEDBACKRECEIVEDDESCENDING = 'FeedbackReceivedDescending';
	/**
	 * Constant for value 'FeedbackLeftDescending'
	 * Meta informations :
	 * 	- documentation : Sort by type of feedback received, positive, negative, or neutral. In descending order - positive, neutral, negative.
	 * @return string 'FeedbackLeftDescending'
	 */
	const VALUE_FEEDBACKLEFTDESCENDING = 'FeedbackLeftDescending';
	/**
	 * Constant for value 'UserIDDescending'
	 * Meta informations :
	 * 	- documentation : Sort by user ID, in descending order.
	 * @return string 'UserIDDescending'
	 */
	const VALUE_USERIDDESCENDING = 'UserIDDescending';
	/**
	 * Constant for value 'QuantitySoldDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the number of items sold, in descending order.
	 * @return string 'QuantitySoldDescending'
	 */
	const VALUE_QUANTITYSOLDDESCENDING = 'QuantitySoldDescending';
	/**
	 * Constant for value 'BestOfferCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort items by the number of Best Offers on an item, in descending order.
	 * @return string 'BestOfferCountDescending'
	 */
	const VALUE_BESTOFFERCOUNTDESCENDING = 'BestOfferCountDescending';
	/**
	 * Constant for value 'QuantityAvailableDescending'
	 * Meta informations :
	 * 	- documentation : Sort items by the number there are available, in descending order.
	 * @return string 'QuantityAvailableDescending'
	 */
	const VALUE_QUANTITYAVAILABLEDESCENDING = 'QuantityAvailableDescending';
	/**
	 * Constant for value 'QuantityPurchasedDescending'
	 * Meta informations :
	 * 	- documentation : Sort items by the number that have been purchased, in descending order.
	 * @return string 'QuantityPurchasedDescending'
	 */
	const VALUE_QUANTITYPURCHASEDDESCENDING = 'QuantityPurchasedDescending';
	/**
	 * Constant for value 'BestOfferDescending'
	 * Meta informations :
	 * 	- documentation : Sort items with Best Offers last.
	 * @return string 'BestOfferDescending'
	 */
	const VALUE_BESTOFFERDESCENDING = 'BestOfferDescending';
	/**
	 * Constant for value 'ItemIDDescending'
	 * Meta informations :
	 * 	- documentation : Sort by Item ID (descending).
	 * @return string 'ItemIDDescending'
	 */
	const VALUE_ITEMIDDESCENDING = 'ItemIDDescending';
	/**
	 * Constant for value 'PriceDescending'
	 * Meta informations :
	 * 	- documentation : Sort by price (descending).
	 * @return string 'PriceDescending'
	 */
	const VALUE_PRICEDESCENDING = 'PriceDescending';
	/**
	 * Constant for value 'StartPriceDescending'
	 * Meta informations :
	 * 	- documentation : Sort by start price (descending).
	 * @return string 'StartPriceDescending'
	 */
	const VALUE_STARTPRICEDESCENDING = 'StartPriceDescending';
	/**
	 * Constant for value 'TitleDescending'
	 * Meta informations :
	 * 	- documentation : Sort by item title (descending).
	 * @return string 'TitleDescending'
	 */
	const VALUE_TITLEDESCENDING = 'TitleDescending';
	/**
	 * Constant for value 'BidCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by number of bids on the item (descending).
	 * @return string 'BidCountDescending'
	 */
	const VALUE_BIDCOUNTDESCENDING = 'BidCountDescending';
	/**
	 * Constant for value 'QuantityDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the quantity of items sold (descending).
	 * @return string 'QuantityDescending'
	 */
	const VALUE_QUANTITYDESCENDING = 'QuantityDescending';
	/**
	 * Constant for value 'StartTimeDescending'
	 * Meta informations :
	 * 	- documentation : Sort by listing start time (descending).
	 * @return string 'StartTimeDescending'
	 */
	const VALUE_STARTTIMEDESCENDING = 'StartTimeDescending';
	/**
	 * Constant for value 'EndTimeDescending'
	 * Meta informations :
	 * 	- documentation : Sort by listing end time (descending).
	 * @return string 'EndTimeDescending'
	 */
	const VALUE_ENDTIMEDESCENDING = 'EndTimeDescending';
	/**
	 * Constant for value 'SellerUserIDDescending'
	 * Meta informations :
	 * 	- documentation : Sort by seller user ID, in reverse alphabetical order.
	 * @return string 'SellerUserIDDescending'
	 */
	const VALUE_SELLERUSERIDDESCENDING = 'SellerUserIDDescending';
	/**
	 * Constant for value 'TimeLeftDescending'
	 * Meta informations :
	 * 	- documentation : Sort by time left on the listing, in descending order: completed items, good-til-cancelled items, and active items.
	 * @return string 'TimeLeftDescending'
	 */
	const VALUE_TIMELEFTDESCENDING = 'TimeLeftDescending';
	/**
	 * Constant for value 'WonPlatformDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the platform on which the item was won.
	 * @return string 'WonPlatformDescending'
	 */
	const VALUE_WONPLATFORMDESCENDING = 'WonPlatformDescending';
	/**
	 * Constant for value 'SoldPlatformDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the platform on which the item was sold.
	 * @return string 'SoldPlatformDescending'
	 */
	const VALUE_SOLDPLATFORMDESCENDING = 'SoldPlatformDescending';
	/**
	 * Constant for value 'LeadCount'
	 * Meta informations :
	 * 	- documentation : Sort by the lead (emails) count (ascending).
	 * @return string 'LeadCount'
	 */
	const VALUE_LEADCOUNT = 'LeadCount';
	/**
	 * Constant for value 'NewLeadCount'
	 * Meta informations :
	 * 	- documentation : Sort by the new lead (new emails) count (ascending).
	 * @return string 'NewLeadCount'
	 */
	const VALUE_NEWLEADCOUNT = 'NewLeadCount';
	/**
	 * Constant for value 'LeadCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the lead count (descending).
	 * @return string 'LeadCountDescending'
	 */
	const VALUE_LEADCOUNTDESCENDING = 'LeadCountDescending';
	/**
	 * Constant for value 'NewLeadCountDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the new contact count (descending).
	 * @return string 'NewLeadCountDescending'
	 */
	const VALUE_NEWLEADCOUNTDESCENDING = 'NewLeadCountDescending';
	/**
	 * Constant for value 'ClassifiedAdPayPerLeadFee'
	 * Meta informations :
	 * 	- documentation : Sort by the total pay-per-lead fee for this item (ascending).
	 * @return string 'ClassifiedAdPayPerLeadFee'
	 */
	const VALUE_CLASSIFIEDADPAYPERLEADFEE = 'ClassifiedAdPayPerLeadFee';
	/**
	 * Constant for value 'ClassifiedAdPayPerLeadFeeDescending'
	 * Meta informations :
	 * 	- documentation : Sort by the total pay-per-lead fee for this item (descending).
	 * @return string 'ClassifiedAdPayPerLeadFeeDescending'
	 */
	const VALUE_CLASSIFIEDADPAYPERLEADFEEDESCENDING = 'ClassifiedAdPayPerLeadFeeDescending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemSortTypeCodeType
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
		return in_array($_value,array(self::VALUE_ITEMID,self::VALUE_PRICE,self::VALUE_STARTPRICE,self::VALUE_TITLE,self::VALUE_BIDCOUNT,self::VALUE_QUANTITY,self::VALUE_STARTTIME,self::VALUE_ENDTIME,self::VALUE_SELLERUSERID,self::VALUE_TIMELEFT,self::VALUE_LISTINGDURATION,self::VALUE_LISTINGTYPE,self::VALUE_CURRENTPRICE,self::VALUE_RESERVEPRICE,self::VALUE_MAXBID,self::VALUE_BIDDERCOUNT,self::VALUE_HIGHBIDDERUSERID,self::VALUE_BUYERUSERID,self::VALUE_BUYERPOSTALCODE,self::VALUE_BUYEREMAIL,self::VALUE_SELLEREMAIL,self::VALUE_TOTALPRICE,self::VALUE_WATCHCOUNT,self::VALUE_BESTOFFERCOUNT,self::VALUE_QUESTIONCOUNT,self::VALUE_SHIPPINGSERVICECOST,self::VALUE_FEEDBACKRECEIVED,self::VALUE_FEEDBACKLEFT,self::VALUE_USERID,self::VALUE_QUANTITYSOLD,self::VALUE_BESTOFFER,self::VALUE_QUANTITYAVAILABLE,self::VALUE_QUANTITYPURCHASED,self::VALUE_WONPLATFORM,self::VALUE_SOLDPLATFORM,self::VALUE_LISTINGDURATIONDESCENDING,self::VALUE_LISTINGTYPEDESCENDING,self::VALUE_CURRENTPRICEDESCENDING,self::VALUE_RESERVEPRICEDESCENDING,self::VALUE_MAXBIDDESCENDING,self::VALUE_BIDDERCOUNTDESCENDING,self::VALUE_HIGHBIDDERUSERIDDESCENDING,self::VALUE_BUYERUSERIDDESCENDING,self::VALUE_BUYERPOSTALCODEDESCENDING,self::VALUE_BUYEREMAILDESCENDING,self::VALUE_SELLEREMAILDESCENDING,self::VALUE_TOTALPRICEDESCENDING,self::VALUE_WATCHCOUNTDESCENDING,self::VALUE_QUESTIONCOUNTDESCENDING,self::VALUE_SHIPPINGSERVICECOSTDESCENDING,self::VALUE_FEEDBACKRECEIVEDDESCENDING,self::VALUE_FEEDBACKLEFTDESCENDING,self::VALUE_USERIDDESCENDING,self::VALUE_QUANTITYSOLDDESCENDING,self::VALUE_BESTOFFERCOUNTDESCENDING,self::VALUE_QUANTITYAVAILABLEDESCENDING,self::VALUE_QUANTITYPURCHASEDDESCENDING,self::VALUE_BESTOFFERDESCENDING,self::VALUE_ITEMIDDESCENDING,self::VALUE_PRICEDESCENDING,self::VALUE_STARTPRICEDESCENDING,self::VALUE_TITLEDESCENDING,self::VALUE_BIDCOUNTDESCENDING,self::VALUE_QUANTITYDESCENDING,self::VALUE_STARTTIMEDESCENDING,self::VALUE_ENDTIMEDESCENDING,self::VALUE_SELLERUSERIDDESCENDING,self::VALUE_TIMELEFTDESCENDING,self::VALUE_WONPLATFORMDESCENDING,self::VALUE_SOLDPLATFORMDESCENDING,self::VALUE_LEADCOUNT,self::VALUE_NEWLEADCOUNT,self::VALUE_LEADCOUNTDESCENDING,self::VALUE_NEWLEADCOUNTDESCENDING,self::VALUE_CLASSIFIEDADPAYPERLEADFEE,self::VALUE_CLASSIFIEDADPAYPERLEADFEEDESCENDING,self::VALUE_CUSTOMCODE));
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