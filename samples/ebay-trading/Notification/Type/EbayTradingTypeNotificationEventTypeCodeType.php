<?php
/**
 * Class file for EbayTradingTypeNotificationEventTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationEventTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationEventTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : Not a notification event.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'OutBid'
	 * Meta informations :
	 * 	- documentation : Sent to a user when another buyer has placed a higher maximum bid and the user is no longer the current high bidder. <br><br> Applies to Buyers.
	 * @return string 'OutBid'
	 */
	const VALUE_OUTBID = 'OutBid';
	/**
	 * Constant for value 'EndOfAuction'
	 * Meta informations :
	 * 	- documentation : Sent when an auction ends. An auction ends either when its duration expires or the buyer purchases an item with Buy It Now. Applies to all competitive-bid auctions. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'EndOfAuction'
	 */
	const VALUE_ENDOFAUCTION = 'EndOfAuction';
	/**
	 * Constant for value 'AuctionCheckoutComplete'
	 * Meta informations :
	 * 	- documentation : Sent to a seller when a buyer completes the checkout process for an item. Not sent when an auction ends without bids. <br><br> For checkouts that involve more than one item, AuctionCheckoutComplete is sent only for the first item. Because its payload is based on GetItemTransactions, only a single item is included in the notification. <br><br> Applies to Sellers.
	 * @return string 'AuctionCheckoutComplete'
	 */
	const VALUE_AUCTIONCHECKOUTCOMPLETE = 'AuctionCheckoutComplete';
	/**
	 * Constant for value 'CheckoutBuyerRequestsTotal'
	 * Meta informations :
	 * 	- documentation : Sent to a seller each time a buyer requests a total price. Occurs before checkout is complete. <br><br> Applies to Sellers.
	 * @return string 'CheckoutBuyerRequestsTotal'
	 */
	const VALUE_CHECKOUTBUYERREQUESTSTOTAL = 'CheckoutBuyerRequestsTotal';
	/**
	 * Constant for value 'Feedback'
	 * Meta informations :
	 * 	- documentation : When a user leaves feedback, this notification is sent to a third party who has subscribed on a user's behalf. The user can be a buyer who leaves feedback for a seller or a seller who leaves feedback for a buyer. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'Feedback'
	 */
	const VALUE_FEEDBACK = 'Feedback';
	/**
	 * Constant for value 'FeedbackForSeller'
	 * Meta informations :
	 * 	- documentation : If specified in SetNotificationPreferences, eBay drops this value and uses Feedback instead. Applications should remove any dependencies on this value. <br><br> Use Feedback Instead.
	 * @return string 'FeedbackForSeller'
	 */
	const VALUE_FEEDBACKFORSELLER = 'FeedbackForSeller';
	/**
	 * Constant for value 'FixedPriceTransaction'
	 * Meta informations :
	 * 	- documentation : Sent to a seller when a buyer purchases a fixed-price item. <br><br> Applies to Sellers.
	 * @return string 'FixedPriceTransaction'
	 */
	const VALUE_FIXEDPRICETRANSACTION = 'FixedPriceTransaction';
	/**
	 * Constant for value 'SecondChanceOffer'
	 * Meta informations :
	 * 	- documentation : Reserved for future use. <br><br> Applies to Buyers.
	 * @return string 'SecondChanceOffer'
	 */
	const VALUE_SECONDCHANCEOFFER = 'SecondChanceOffer';
	/**
	 * Constant for value 'AskSellerQuestion'
	 * Meta informations :
	 * 	- documentation : Sent to a seller when a question is posted about one of the seller's active listings. <br><br> Applies to Sellers.
	 * @return string 'AskSellerQuestion'
	 */
	const VALUE_ASKSELLERQUESTION = 'AskSellerQuestion';
	/**
	 * Constant for value 'ItemListed'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller lists or relists an item. Sent for each item the seller lists. <br><br> This notification is triggered by automatic relists. For example, a seller who has opted in to automated relisting of unpaid items using UnpaidItemAssistancePreferencesType.AutoRelist will receive this notification when an unpaid item is automatically relisted. <br><br> Applies to Sellers.
	 * @return string 'ItemListed'
	 */
	const VALUE_ITEMLISTED = 'ItemListed';
	/**
	 * Constant for value 'ItemRevised'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller has revised an item. <br><br> Applies to Sellers.
	 * @return string 'ItemRevised'
	 */
	const VALUE_ITEMREVISED = 'ItemRevised';
	/**
	 * Constant for value 'BuyerResponseDispute'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a buyer responds to a dispute the seller has opened. Sent for each response the buyer makes. <br><br> Applies to Sellers.
	 * @return string 'BuyerResponseDispute'
	 */
	const VALUE_BUYERRESPONSEDISPUTE = 'BuyerResponseDispute';
	/**
	 * Constant for value 'SellerOpenedDispute'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller opens a dispute. Sent for each dispute the seller opens. <br><br> Applies to Buyers.
	 * @return string 'SellerOpenedDispute'
	 */
	const VALUE_SELLEROPENEDDISPUTE = 'SellerOpenedDispute';
	/**
	 * Constant for value 'SellerRespondedToDispute'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller responds to a dispute they had opened. Sent for each response the seller makes. <br><br> Applies to Buyers.
	 * @return string 'SellerRespondedToDispute'
	 */
	const VALUE_SELLERRESPONDEDTODISPUTE = 'SellerRespondedToDispute';
	/**
	 * Constant for value 'SellerClosedDispute'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller closes a dispute they had opened. Sent for each closure the seller performs. <br><br> Applies to Sellers and Buyers.
	 * @return string 'SellerClosedDispute'
	 */
	const VALUE_SELLERCLOSEDDISPUTE = 'SellerClosedDispute';
	/**
	 * Constant for value 'BestOffer'
	 * Meta informations :
	 * 	- documentation : Sent to a seller when a bidder makes a best offer on an item opted into the Best Offer feature by the seller. <br><br> Applies to Sellers.
	 * @return string 'BestOffer'
	 */
	const VALUE_BESTOFFER = 'BestOffer';
	/**
	 * Constant for value 'MyMessagesAlertHeader'
	 * Meta informations :
	 * 	- documentation : This field was deprecated in 685, and is no longer returned. It was replaced with MyMessagesHighPriorityMessageHeader. SetNotificationPreferences requests for MyMessagesAlertHeader using versions lower than 685 will result in an informational warning. Such requests using versions 685 and higher will return an error response.
	 * @return string 'MyMessagesAlertHeader'
	 */
	const VALUE_MYMESSAGESALERTHEADER = 'MyMessagesAlertHeader';
	/**
	 * Constant for value 'MyMessagesAlert'
	 * Meta informations :
	 * 	- documentation : This field was deprecated in 685, and is no longer returned. It was replaced with MyMessagesHighPriorityMessage. SetNotificationPreferences requests for MyMessagesAlert using versions lower than 685 will result in an informational warning. Such requests using versions 685 and higher will return an error response.
	 * @return string 'MyMessagesAlert'
	 */
	const VALUE_MYMESSAGESALERT = 'MyMessagesAlert';
	/**
	 * Constant for value 'MyMessageseBayMessageHeader'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified when a message from eBay is sent to My Messages. This notification type sends a GetMyMessages response at a detail level of ReturnHeaders. MyMessageseBayMessageHeader and MyMessageseBayMessage cannot be subscribed to at the same time or specified in the same call. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'MyMessageseBayMessageHeader'
	 */
	const VALUE_MYMESSAGESEBAYMESSAGEHEADER = 'MyMessageseBayMessageHeader';
	/**
	 * Constant for value 'MyMessageseBayMessage'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified when a message from eBay is sent to My Messages. This notification type sends a GetMyMessages response at a detail level of ReturnMessages. MyMessageseBayMessageHeader and MyMessageseBayMessage cannot be subscribed to at the same time or specified in the same call. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'MyMessageseBayMessage'
	 */
	const VALUE_MYMESSAGESEBAYMESSAGE = 'MyMessageseBayMessage';
	/**
	 * Constant for value 'MyMessagesM2MMessageHeader'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified when a member to member (M2M) message is sent to My Messages. This notification type sends a GetMyMessages response at a detail level of ReturnHeaders. MyMessagesM2MMessageHeader and MyMessagesM2MMessage cannot be subscribed to at the same time or specified in the same call. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'MyMessagesM2MMessageHeader'
	 */
	const VALUE_MYMESSAGESM2MMESSAGEHEADER = 'MyMessagesM2MMessageHeader';
	/**
	 * Constant for value 'MyMessagesM2MMessage'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified when a member to member (M2M) message is sent to My Messages. This notification type sends a GetMyMessages response at a detail level of ReturnMessages. MyMessagesM2MMessageHeader and MyMessagesM2MMessage cannot be subscribed to at the same time or specified in the same call. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'MyMessagesM2MMessage'
	 */
	const VALUE_MYMESSAGESM2MMESSAGE = 'MyMessagesM2MMessage';
	/**
	 * Constant for value 'INRBuyerOpenedDispute'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified on behalf of a buyer when a buyer opens an Item Not Received dispute. Sent for each dispute the buyer opens. <br><br> Applies to Sellers.
	 * @return string 'INRBuyerOpenedDispute'
	 */
	const VALUE_INRBUYEROPENEDDISPUTE = 'INRBuyerOpenedDispute';
	/**
	 * Constant for value 'INRBuyerRespondedToDispute'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified on behalf of a buyer when a buyer responds to Item Not Received dispute that buyer had opened. Sent for each response the buyer makes. <br><br> Applies to Sellers.
	 * @return string 'INRBuyerRespondedToDispute'
	 */
	const VALUE_INRBUYERRESPONDEDTODISPUTE = 'INRBuyerRespondedToDispute';
	/**
	 * Constant for value 'INRBuyerClosedDispute'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified on behalf of a buyer when a buyer closes Item Not Received dispute that buyer had opened. Sent for each closure the buyer performs. <br><br> Applies to Sellers.
	 * @return string 'INRBuyerClosedDispute'
	 */
	const VALUE_INRBUYERCLOSEDDISPUTE = 'INRBuyerClosedDispute';
	/**
	 * Constant for value 'INRSellerRespondedToDispute'
	 * Meta informations :
	 * 	- documentation : A notification type where a specified user or application is notified on behalf of a seller when a seller responds to an Item Not Received dispute that buyer had opened. Sent for each response the seller makes. <br><br> Applies to Buyers.
	 * @return string 'INRSellerRespondedToDispute'
	 */
	const VALUE_INRSELLERRESPONDEDTODISPUTE = 'INRSellerRespondedToDispute';
	/**
	 * Constant for value 'Checkout'
	 * Meta informations :
	 * 	- documentation : Do not use. This notification event is tied to eBay Express functionality which no longer exists.
	 * @return string 'Checkout'
	 */
	const VALUE_CHECKOUT = 'Checkout';
	/**
	 * Constant for value 'WatchedItemEndingSoon'
	 * Meta informations :
	 * 	- documentation : A notification type where the listing of the watched item is about to end. This event has a property with which caller can specify the TimeLeft before the listing ends. <br><br> Applies to Buyers.
	 * @return string 'WatchedItemEndingSoon'
	 */
	const VALUE_WATCHEDITEMENDINGSOON = 'WatchedItemEndingSoon';
	/**
	 * Constant for value 'ItemClosed'
	 * Meta informations :
	 * 	- documentation : Specifies that an ItemClosed notification event has occurred. This event is triggered by ItemWon, ItemSold, and ItemUnsold events. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'ItemClosed'
	 */
	const VALUE_ITEMCLOSED = 'ItemClosed';
	/**
	 * Constant for value 'ItemSuspended'
	 * Meta informations :
	 * 	- documentation : Specifies an ItemSuspended notification event. Subscribe to this event to be notified when eBay has taken down a listing for a listing problem, for example, listing in the wrong category. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'ItemSuspended'
	 */
	const VALUE_ITEMSUSPENDED = 'ItemSuspended';
	/**
	 * Constant for value 'ItemSold'
	 * Meta informations :
	 * 	- documentation : Specifies an ItemSold notification event, triggered when an eBay listing ends in a sale. <br><br> Applies to Sellers.
	 * @return string 'ItemSold'
	 */
	const VALUE_ITEMSOLD = 'ItemSold';
	/**
	 * Constant for value 'ItemExtended'
	 * Meta informations :
	 * 	- documentation : Specifies an ItemExtended notification event, when a seller has extended the duration of a listing. <br><br> Applies to Sellers.
	 * @return string 'ItemExtended'
	 */
	const VALUE_ITEMEXTENDED = 'ItemExtended';
	/**
	 * Constant for value 'UserIDChanged'
	 * Meta informations :
	 * 	- documentation : The userid was changed. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'UserIDChanged'
	 */
	const VALUE_USERIDCHANGED = 'UserIDChanged';
	/**
	 * Constant for value 'EmailAddressChanged'
	 * Meta informations :
	 * 	- documentation : The email address was changed. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'EmailAddressChanged'
	 */
	const VALUE_EMAILADDRESSCHANGED = 'EmailAddressChanged';
	/**
	 * Constant for value 'PasswordChanged'
	 * Meta informations :
	 * 	- documentation : The password was changed. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to Sellers.
	 * @return string 'PasswordChanged'
	 */
	const VALUE_PASSWORDCHANGED = 'PasswordChanged';
	/**
	 * Constant for value 'PasswordHintChanged'
	 * Meta informations :
	 * 	- documentation : The password hint was changed. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to Sellers.
	 * @return string 'PasswordHintChanged'
	 */
	const VALUE_PASSWORDHINTCHANGED = 'PasswordHintChanged';
	/**
	 * Constant for value 'PaymentDetailChanged'
	 * Meta informations :
	 * 	- documentation : The payment detail was changed. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'PaymentDetailChanged'
	 */
	const VALUE_PAYMENTDETAILCHANGED = 'PaymentDetailChanged';
	/**
	 * Constant for value 'AccountSuspended'
	 * Meta informations :
	 * 	- documentation : The account was suspended. Available for SMS on the UK and Germany sites. Not applicable to Platform Notifications. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'AccountSuspended'
	 */
	const VALUE_ACCOUNTSUSPENDED = 'AccountSuspended';
	/**
	 * Constant for value 'AccountSummary'
	 * Meta informations :
	 * 	- documentation : An informational alert about account activity. A user can subscribe to receive an account activity summary via SMS. The user can specify the period (time range) for the account summary and can select how often the summary is to be sent. It is not triggered by an event but rather by an eBay daemon process that monitors a schedule database. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'AccountSummary'
	 */
	const VALUE_ACCOUNTSUMMARY = 'AccountSummary';
	/**
	 * Constant for value 'ThirdPartyCartCheckout'
	 * Meta informations :
	 * 	- documentation : Not functional. This notification event is tied to eBay Express functionality, which no longer exists. <br><br> Sent to a third party when their cart completes checkout on eBay Express. <br><br> Applies to Buyers.
	 * @return string 'ThirdPartyCartCheckout'
	 */
	const VALUE_THIRDPARTYCARTCHECKOUT = 'ThirdPartyCartCheckout';
	/**
	 * Constant for value 'ItemRevisedAddCharity'
	 * Meta informations :
	 * 	- documentation : Sent to an eBay partner on behalf of a seller when a seller has revised an item and added charity. <br><br> Applies to Sellers.
	 * @return string 'ItemRevisedAddCharity'
	 */
	const VALUE_ITEMREVISEDADDCHARITY = 'ItemRevisedAddCharity';
	/**
	 * Constant for value 'ItemAddedToWatchList'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party when a user adds an item to her or his watch list. <br><br> Applies to Buyers.
	 * @return string 'ItemAddedToWatchList'
	 */
	const VALUE_ITEMADDEDTOWATCHLIST = 'ItemAddedToWatchList';
	/**
	 * Constant for value 'ItemRemovedFromWatchList'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party when a user removes an item from her or his watch list. <br><br> Applies to Buyers.
	 * @return string 'ItemRemovedFromWatchList'
	 */
	const VALUE_ITEMREMOVEDFROMWATCHLIST = 'ItemRemovedFromWatchList';
	/**
	 * Constant for value 'ItemAddedToBidGroup'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party when a user adds an item to her or his bid group. <br><br> Applies to Buyers.
	 * @return string 'ItemAddedToBidGroup'
	 */
	const VALUE_ITEMADDEDTOBIDGROUP = 'ItemAddedToBidGroup';
	/**
	 * Constant for value 'ItemRemovedFromBidGroup'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party when a user removes an item from her or his bid group. <br><br> Applies to Buyers.
	 * @return string 'ItemRemovedFromBidGroup'
	 */
	const VALUE_ITEMREMOVEDFROMBIDGROUP = 'ItemRemovedFromBidGroup';
	/**
	 * Constant for value 'FeedbackLeft'
	 * Meta informations :
	 * 	- documentation : Sent to third parties subscribed on a user's behalf when feedback comments are left by that user. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'FeedbackLeft'
	 */
	const VALUE_FEEDBACKLEFT = 'FeedbackLeft';
	/**
	 * Constant for value 'FeedbackReceived'
	 * Meta informations :
	 * 	- documentation : Sent to third parties subscribed on a user's behalf when feedback comments are received by that user. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'FeedbackReceived'
	 */
	const VALUE_FEEDBACKRECEIVED = 'FeedbackReceived';
	/**
	 * Constant for value 'FeedbackStarChanged'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party when a user's feedback star level changes. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'FeedbackStarChanged'
	 */
	const VALUE_FEEDBACKSTARCHANGED = 'FeedbackStarChanged';
	/**
	 * Constant for value 'BidPlaced'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for the buyer when a user places a bid for an item. <br><br> Applies to Sellers.
	 * @return string 'BidPlaced'
	 */
	const VALUE_BIDPLACED = 'BidPlaced';
	/**
	 * Constant for value 'BidReceived'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for the seller when a user places a bid for an item. <br><br> Applies to Sellers.
	 * @return string 'BidReceived'
	 */
	const VALUE_BIDRECEIVED = 'BidReceived';
	/**
	 * Constant for value 'ItemWon'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for the buyer when a user bought an item. <br><br> Applies to Buyers.
	 * @return string 'ItemWon'
	 */
	const VALUE_ITEMWON = 'ItemWon';
	/**
	 * Constant for value 'ItemLost'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for the buyer when a user lost a bid for an item. <br><br> Applies to Buyers.
	 * @return string 'ItemLost'
	 */
	const VALUE_ITEMLOST = 'ItemLost';
	/**
	 * Constant for value 'ItemUnsold'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for the seller when an item was not sold. <br><br> Applies to Sellers.
	 * @return string 'ItemUnsold'
	 */
	const VALUE_ITEMUNSOLD = 'ItemUnsold';
	/**
	 * Constant for value 'CounterOfferReceived'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for a buyer when a seller makes a counter offer to the buyer's best offer on an item opted into the Best Offer feature by the seller. <br><br> Applies to Buyers.
	 * @return string 'CounterOfferReceived'
	 */
	const VALUE_COUNTEROFFERRECEIVED = 'CounterOfferReceived';
	/**
	 * Constant for value 'BestOfferDeclined'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third-party for a buyer when a seller rejects the buyer's best offer on an item opted into the Best Offer feature by the seller. Also sent to a buyer when the buyer rejects a seller's counteroffer. <br><br> Applies to Buyers.
	 * @return string 'BestOfferDeclined'
	 */
	const VALUE_BESTOFFERDECLINED = 'BestOfferDeclined';
	/**
	 * Constant for value 'BestOfferPlaced'
	 * Meta informations :
	 * 	- documentation : Sent to a subscribing third party for a buyer who makes a best offer on an item opted into the Best Offer feature by a seller. <br><br> Applies to Sellers.
	 * @return string 'BestOfferPlaced'
	 */
	const VALUE_BESTOFFERPLACED = 'BestOfferPlaced';
	/**
	 * Constant for value 'AddToWatchList'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a user when an item is added to her or his watch list. DO NOT USE. This notification was REMOVED in 549.
	 * @return string 'AddToWatchList'
	 */
	const VALUE_ADDTOWATCHLIST = 'AddToWatchList';
	/**
	 * Constant for value 'PlaceOffer'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a user when he or she places an offer for an item. DO NOT USE. This notification was REMOVED in 549.
	 * @return string 'PlaceOffer'
	 */
	const VALUE_PLACEOFFER = 'PlaceOffer';
	/**
	 * Constant for value 'RemoveFromWatchList'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a user when an item is removed from her or his watch list. DO NOT USE. This notification was REMOVED in 549.
	 * @return string 'RemoveFromWatchList'
	 */
	const VALUE_REMOVEFROMWATCHLIST = 'RemoveFromWatchList';
	/**
	 * Constant for value 'AddToBidGroup'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a user when when an item is added to her or his bid group. DO NOT USE. This notification was REMOVED in 549.
	 * @return string 'AddToBidGroup'
	 */
	const VALUE_ADDTOBIDGROUP = 'AddToBidGroup';
	/**
	 * Constant for value 'RemoveFromBidGroup'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a user when an item is removed from her or his bid group. DO NOT USE. This notification was REMOVED in 549.
	 * @return string 'RemoveFromBidGroup'
	 */
	const VALUE_REMOVEFROMBIDGROUP = 'RemoveFromBidGroup';
	/**
	 * Constant for value 'ItemsCanceled'
	 * Meta informations :
	 * 	- documentation : This event is not functional.
	 * @return string 'ItemsCanceled'
	 */
	const VALUE_ITEMSCANCELED = 'ItemsCanceled';
	/**
	 * Constant for value 'TokenRevocation'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a subscribing application when a user token has been revoked. <br><br> Applies to both Buyers and Sellers.
	 * @return string 'TokenRevocation'
	 */
	const VALUE_TOKENREVOCATION = 'TokenRevocation';
	/**
	 * Constant for value 'BulkDataExchangeJobCompleted'
	 * Meta informations :
	 * 	- documentation : An informational alert sent to a subscribing application when the Bulk exchange job completes. <br><br> Applies to Sellers.
	 * @return string 'BulkDataExchangeJobCompleted'
	 */
	const VALUE_BULKDATAEXCHANGEJOBCOMPLETED = 'BulkDataExchangeJobCompleted';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'ItemMarkedShipped'
	 * Meta informations :
	 * 	- documentation : Alert sent to a subscribing buyer or seller when item marked as shipped by the seller. <br><br> Applies to Sellers and Buyers.
	 * @return string 'ItemMarkedShipped'
	 */
	const VALUE_ITEMMARKEDSHIPPED = 'ItemMarkedShipped';
	/**
	 * Constant for value 'ItemMarkedPaid'
	 * Meta informations :
	 * 	- documentation : Alert sent to a subscribing buyer or seller when item marked as paid by the seller. <br><br> Applies to Sellers and Buyers.
	 * @return string 'ItemMarkedPaid'
	 */
	const VALUE_ITEMMARKEDPAID = 'ItemMarkedPaid';
	/**
	 * Constant for value 'EBPMyResponseDue'
	 * Meta informations :
	 * 	- documentation : This notification is sent to a subscribing buyer or seller (or application) when a response to the eBP case is due from the call user. When a eBP case is opened, this notification is only sent to the seller involved in the case and not the buyer.
	 * @return string 'EBPMyResponseDue'
	 */
	const VALUE_EBPMYRESPONSEDUE = 'EBPMyResponseDue';
	/**
	 * Constant for value 'EBPOtherPartyResponseDue'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a response to the eBP case is due from the other party in the case.
	 * @return string 'EBPOtherPartyResponseDue'
	 */
	const VALUE_EBPOTHERPARTYRESPONSEDUE = 'EBPOtherPartyResponseDue';
	/**
	 * Constant for value 'EBPEscalatedCase'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when an eBP case is escalated.
	 * @return string 'EBPEscalatedCase'
	 */
	const VALUE_EBPESCALATEDCASE = 'EBPEscalatedCase';
	/**
	 * Constant for value 'EBPAppealedCase'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when the decision of an eBP case is appealed.
	 * @return string 'EBPAppealedCase'
	 */
	const VALUE_EBPAPPEALEDCASE = 'EBPAppealedCase';
	/**
	 * Constant for value 'EBPMyPaymentDue'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed seller (or application) when payment (to eBay or buyer) is due.
	 * @return string 'EBPMyPaymentDue'
	 */
	const VALUE_EBPMYPAYMENTDUE = 'EBPMyPaymentDue';
	/**
	 * Constant for value 'EBPPaymentDone'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed seller (or application) when payment (to eBay or buyer) is processed.
	 * @return string 'EBPPaymentDone'
	 */
	const VALUE_EBPPAYMENTDONE = 'EBPPaymentDone';
	/**
	 * Constant for value 'EBPClosedAppeal'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when an appeal of an eBP case decision has been closed.
	 * @return string 'EBPClosedAppeal'
	 */
	const VALUE_EBPCLOSEDAPPEAL = 'EBPClosedAppeal';
	/**
	 * Constant for value 'EBPClosedCase'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when an eBP case has been closed.
	 * @return string 'EBPClosedCase'
	 */
	const VALUE_EBPCLOSEDCASE = 'EBPClosedCase';
	/**
	 * Constant for value 'MyMessagesHighPriorityMessage'
	 * Meta informations :
	 * 	- documentation : A notification type in which a specified user or application is notified when a High Priority Message (of priority 1 or 2) is sent to My Messages. Only High Priority Message will be sent back as part of the Notification payload. This notification type sends a GetMyMessages response at a detail level of ReturnMessages.
	 * @return string 'MyMessagesHighPriorityMessage'
	 */
	const VALUE_MYMESSAGESHIGHPRIORITYMESSAGE = 'MyMessagesHighPriorityMessage';
	/**
	 * Constant for value 'MyMessagesHighPriorityMessageHeader'
	 * Meta informations :
	 * 	- documentation : A notification type in which a specified user or application is notified when a High Priority Message (of priority 1 or 2) is sent to My Messages. Only High Priority Messages will be sent back as part of the notification payload. This notification type sends a GetMyMessages response at a detail level of ReturnHeaders.
	 * @return string 'MyMessagesHighPriorityMessageHeader'
	 */
	const VALUE_MYMESSAGESHIGHPRIORITYMESSAGEHEADER = 'MyMessagesHighPriorityMessageHeader';
	/**
	 * Constant for value 'EBPOnHoldCase'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when an eBP case has been onholded by CS.
	 * @return string 'EBPOnHoldCase'
	 */
	const VALUE_EBPONHOLDCASE = 'EBPOnHoldCase';
	/**
	 * Constant for value 'ReadyToShip'
	 * Meta informations :
	 * 	- documentation : This notification is sent to a DE or AT seller when an order (subject to the new eBay payment process) has been paid for by the buyer. This notification is triggered and sent when Checkout status is complete in GetOrders and other order retrieval API calls. Shipping the item and providing proof of shipment can expedite the process of payout to the seller's account.
	 * @return string 'ReadyToShip'
	 */
	const VALUE_READYTOSHIP = 'ReadyToShip';
	/**
	 * Constant for value 'ReadyForPayout'
	 * Meta informations :
	 * 	- documentation : This notification is sent to a DE or AT seller when a seller payout for an order (subject to the new eBay payment process) is scheduled to be distributed to the seller's account in the next disbursement cycle. This notification is triggered and sent when the value of PaymentHoldStatus is 'Complete' in GetOrders and other order retrieval API calls.
	 * @return string 'ReadyForPayout'
	 */
	const VALUE_READYFORPAYOUT = 'ReadyForPayout';
	/**
	 * Constant for value 'BidItemEndingSoon'
	 * Meta informations :
	 * 	- documentation : A notification type where the listing of the bid item is about to end. This event has a property with which caller can specify the TimeLeft before the listing ends. <br><br> Applies to Buyers.
	 * @return string 'BidItemEndingSoon'
	 */
	const VALUE_BIDITEMENDINGSOON = 'BidItemEndingSoon';
	/**
	 * Constant for value 'ReturnCreated'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a return is created.
	 * @return string 'ReturnCreated'
	 */
	const VALUE_RETURNCREATED = 'ReturnCreated';
	/**
	 * Constant for value 'ReturnWaitingForSellerInfo'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed seller (or application) when a return is waiting for Seller information like RMA and Return Address.
	 * @return string 'ReturnWaitingForSellerInfo'
	 */
	const VALUE_RETURNWAITINGFORSELLERINFO = 'ReturnWaitingForSellerInfo';
	/**
	 * Constant for value 'ReturnSellerInfoOverdue'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when Seller information like RMA and Return Address is overdue.
	 * @return string 'ReturnSellerInfoOverdue'
	 */
	const VALUE_RETURNSELLERINFOOVERDUE = 'ReturnSellerInfoOverdue';
	/**
	 * Constant for value 'ReturnShipped'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a return is shipped.
	 * @return string 'ReturnShipped'
	 */
	const VALUE_RETURNSHIPPED = 'ReturnShipped';
	/**
	 * Constant for value 'ReturnDelivered'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a return is delivered.
	 * @return string 'ReturnDelivered'
	 */
	const VALUE_RETURNDELIVERED = 'ReturnDelivered';
	/**
	 * Constant for value 'ReturnRefundOverdue'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed seller (or application) when refund is overdue on a return.
	 * @return string 'ReturnRefundOverdue'
	 */
	const VALUE_RETURNREFUNDOVERDUE = 'ReturnRefundOverdue';
	/**
	 * Constant for value 'ReturnClosed'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a return is closed.
	 * @return string 'ReturnClosed'
	 */
	const VALUE_RETURNCLOSED = 'ReturnClosed';
	/**
	 * Constant for value 'ReturnEscalated'
	 * Meta informations :
	 * 	- documentation : This notification is sent to the subscribed buyer or seller (or application) when a return is escalated.
	 * @return string 'ReturnEscalated'
	 */
	const VALUE_RETURNESCALATED = 'ReturnEscalated';
	/**
	 * Constant for value 'UnmatchedPaymentReceived'
	 * Meta informations :
	 * 	- documentation : A notification type that is sent to German and Austrian sellers when eBay determines that a buyer has paid less than or more than the order amount using the EFT payment method. Upon receiving this notification, the seller can then either accept or reject the buyer's payment amount through the site or by using the AcceptAdjustment or RejectAdjustment call of the Order Adjustment API.
	 * @return string 'UnmatchedPaymentReceived'
	 */
	const VALUE_UNMATCHEDPAYMENTRECEIVED = 'UnmatchedPaymentReceived';
	/**
	 * Constant for value 'RefundSuccess'
	 * Meta informations :
	 * 	- documentation : A notification type where sellers are notified when voluntary refunds are successful. <br><br> This notification type is only applicable for DE/AT orders going through the new eBay payment process.
	 * @return string 'RefundSuccess'
	 */
	const VALUE_REFUNDSUCCESS = 'RefundSuccess';
	/**
	 * Constant for value 'RefundFailure'
	 * Meta informations :
	 * 	- documentation : A notification type where sellers are notified when voluntary refunds failed. <br><br> This notification type is only applicable for DE/AT orders going through the new eBay payment process.
	 * @return string 'RefundFailure'
	 */
	const VALUE_REFUNDFAILURE = 'RefundFailure';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationEventTypeCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_OUTBID,self::VALUE_ENDOFAUCTION,self::VALUE_AUCTIONCHECKOUTCOMPLETE,self::VALUE_CHECKOUTBUYERREQUESTSTOTAL,self::VALUE_FEEDBACK,self::VALUE_FEEDBACKFORSELLER,self::VALUE_FIXEDPRICETRANSACTION,self::VALUE_SECONDCHANCEOFFER,self::VALUE_ASKSELLERQUESTION,self::VALUE_ITEMLISTED,self::VALUE_ITEMREVISED,self::VALUE_BUYERRESPONSEDISPUTE,self::VALUE_SELLEROPENEDDISPUTE,self::VALUE_SELLERRESPONDEDTODISPUTE,self::VALUE_SELLERCLOSEDDISPUTE,self::VALUE_BESTOFFER,self::VALUE_MYMESSAGESALERTHEADER,self::VALUE_MYMESSAGESALERT,self::VALUE_MYMESSAGESEBAYMESSAGEHEADER,self::VALUE_MYMESSAGESEBAYMESSAGE,self::VALUE_MYMESSAGESM2MMESSAGEHEADER,self::VALUE_MYMESSAGESM2MMESSAGE,self::VALUE_INRBUYEROPENEDDISPUTE,self::VALUE_INRBUYERRESPONDEDTODISPUTE,self::VALUE_INRBUYERCLOSEDDISPUTE,self::VALUE_INRSELLERRESPONDEDTODISPUTE,self::VALUE_CHECKOUT,self::VALUE_WATCHEDITEMENDINGSOON,self::VALUE_ITEMCLOSED,self::VALUE_ITEMSUSPENDED,self::VALUE_ITEMSOLD,self::VALUE_ITEMEXTENDED,self::VALUE_USERIDCHANGED,self::VALUE_EMAILADDRESSCHANGED,self::VALUE_PASSWORDCHANGED,self::VALUE_PASSWORDHINTCHANGED,self::VALUE_PAYMENTDETAILCHANGED,self::VALUE_ACCOUNTSUSPENDED,self::VALUE_ACCOUNTSUMMARY,self::VALUE_THIRDPARTYCARTCHECKOUT,self::VALUE_ITEMREVISEDADDCHARITY,self::VALUE_ITEMADDEDTOWATCHLIST,self::VALUE_ITEMREMOVEDFROMWATCHLIST,self::VALUE_ITEMADDEDTOBIDGROUP,self::VALUE_ITEMREMOVEDFROMBIDGROUP,self::VALUE_FEEDBACKLEFT,self::VALUE_FEEDBACKRECEIVED,self::VALUE_FEEDBACKSTARCHANGED,self::VALUE_BIDPLACED,self::VALUE_BIDRECEIVED,self::VALUE_ITEMWON,self::VALUE_ITEMLOST,self::VALUE_ITEMUNSOLD,self::VALUE_COUNTEROFFERRECEIVED,self::VALUE_BESTOFFERDECLINED,self::VALUE_BESTOFFERPLACED,self::VALUE_ADDTOWATCHLIST,self::VALUE_PLACEOFFER,self::VALUE_REMOVEFROMWATCHLIST,self::VALUE_ADDTOBIDGROUP,self::VALUE_REMOVEFROMBIDGROUP,self::VALUE_ITEMSCANCELED,self::VALUE_TOKENREVOCATION,self::VALUE_BULKDATAEXCHANGEJOBCOMPLETED,self::VALUE_CUSTOMCODE,self::VALUE_ITEMMARKEDSHIPPED,self::VALUE_ITEMMARKEDPAID,self::VALUE_EBPMYRESPONSEDUE,self::VALUE_EBPOTHERPARTYRESPONSEDUE,self::VALUE_EBPESCALATEDCASE,self::VALUE_EBPAPPEALEDCASE,self::VALUE_EBPMYPAYMENTDUE,self::VALUE_EBPPAYMENTDONE,self::VALUE_EBPCLOSEDAPPEAL,self::VALUE_EBPCLOSEDCASE,self::VALUE_MYMESSAGESHIGHPRIORITYMESSAGE,self::VALUE_MYMESSAGESHIGHPRIORITYMESSAGEHEADER,self::VALUE_EBPONHOLDCASE,self::VALUE_READYTOSHIP,self::VALUE_READYFORPAYOUT,self::VALUE_BIDITEMENDINGSOON,self::VALUE_RETURNCREATED,self::VALUE_RETURNWAITINGFORSELLERINFO,self::VALUE_RETURNSELLERINFOOVERDUE,self::VALUE_RETURNSHIPPED,self::VALUE_RETURNDELIVERED,self::VALUE_RETURNREFUNDOVERDUE,self::VALUE_RETURNCLOSED,self::VALUE_RETURNESCALATED,self::VALUE_UNMATCHEDPAYMENTRECEIVED,self::VALUE_REFUNDSUCCESS,self::VALUE_REFUNDFAILURE));
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