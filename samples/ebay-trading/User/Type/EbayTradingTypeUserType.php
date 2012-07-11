<?php
/**
 * Class file for EbayTradingTypeUserType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUserType
 * Documentation : Type to contain the data for one eBay user. Depending on the context, the user might be the seller or the buyer on either side of an order, or the bidder or winning bidder in a listing. An object of this type is returned by a number of calls, including the GetUser call.
 * @date 04/07/2012
 */
class EbayTradingTypeUserType extends EbayTradingWsdlClass
{
	/**
	 * The AboutMePage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the user has set up an About Me page.
	 * @var boolean
	 */
	public $AboutMePage;
	/**
	 * The EIASToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user.
	 * @var string
	 */
	public $EIASToken;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address for the user. Please see the links below to the topics related to anonymous user information and static email addresses. You cannot retrieve an email address for any user with whom you do not have an order relationship, regardless of site. An email address of another user is only returned if you and the other user are in an order relationship, within a certain time of order line item creation (although this limitation isn't applicable to the GetAllBidders call in the case of motor vehicles categories.) Based on Trust and Safety policies, the time is unspecified and can vary by site. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on. <br><br> For the order retrieval calls, the buyer's registration email address is only returned if the buyer is registered on the DE, AT, or CH sites, regardless of the seller's registration site and the site to which the seller sends the request.
	 * @var string
	 */
	public $Email;
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The aggregate feedback score for a user. A user's feedback score is the net positive feedback minus the net negative feedback left for the user. Feedback scores are a quantitative expression of the desirability of dealing with a user as a buyer or a seller in either side of an order. Each order line item can result in one feedback entry for a given user (the buyer can leave feedback for the seller, and the seller can leave feedback for the buyer.). That one feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback score (referred to as a "feedback rating" on the eBay site). If the user has chosen to make their feedback private and that user is not the user identified in the request's authentication token, FeedbackScore is not returned and FeedbackPrivate is returned with a value of true.<br> <br> In GetMyeBayBuying and GetMyeBaySelling, feedback information (FeedbackScore and FeedbackRatingStar) is returned in BidList.ItemArray.Item.Seller. For GetMyeBayBuying, the feedback score of each seller with an item having received a bid from the buyer is returned. For GetMyeBaySelling, the feedback score of the seller is returned. <br> <br> GetMyeBayBuying and GetMyeBaySelling also return feedback information (FeedbackScore and FeedbackRatingStar) in BidList.ItemArray.Item.SellingStatus.HighBidder. GetMyeBayBuying returns feedback information on the high bidder of each item the buyer is bidding on. GetMyeBaySelling returns feedback information on the high bidder of each item the seller is selling.<br> <br> Since a bidder's user info is anonymous, the real feedback score will be returned only to that bidder, and to the seller of an item that the user is bidding on. For all other users, the value -99 is returned.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The UniqueNegativeFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of negative Feedback entries received by the user, including weekly repeats.
	 * @var int
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * The UniquePositiveFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of positive Feedback entries received by the user, including weekly repeats. Contains the aggregate feedback score for a user. A member's feedback score is the net positive feedback minus the net negative feedback left for the member. Feedback scores are a quantitative expression of the desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for a given user (the buyer can leave feedback for the seller, and the seller can leave feedback for the buyer.). That one feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular user represent that user's overall feedback score (referred to as a "feedback rating" on the eBay site). This rating is commonly expressed as the eBay Feedback score for the user.
	 * @var int
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * The PositiveFeedbackPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percent of total feedback that is positive. For example, if the member has 50 feedbacks, where 49 are positive and 1 is neutral or negative, the positive feedback percent could be 98.0. The value uses a max precision of 4 and a scale of 1. If the user has feedback, this value can be returned regardless of whether the member has chosen to make their feedback private. Not returned if the user has no feedback.
	 * @var float
	 */
	public $PositiveFeedbackPercent;
	/**
	 * The FeedbackPrivate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user has chosen to make their feedback score and feedback details private (hidden from other users). Note that the percentage of positive feedback can still be returned, even if other feedback details are private. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var boolean
	 */
	public $FeedbackPrivate;
	/**
	 * The FeedbackRatingStar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Visual indicator of user's feedback score. See FeedbackRatingStarCodeType for specific values.
	 * @var EbayTradingTypeFeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;
	/**
	 * The IDVerified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user has been verified. For more information about the ID Verify program, see: http://pages.ebay.com/help/policies/identity-idverify.html
	 * @var boolean
	 */
	public $IDVerified;
	/**
	 * The eBayGoodStanding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the user is in good standing with eBay.
	 * @var boolean
	 */
	public $eBayGoodStanding;
	/**
	 * The NewUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, identifies a new user who has been a registered eBay user for 30 days or less. Always false after the user has been registered for more than 30 days. Does not indicate an ID change (see UserIdChanged).
	 * @var boolean
	 */
	public $NewUser;
	/**
	 * The RegistrationAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Registration address for a user.<br> <br> <b>GetUser:</b> eBay returns complete RegistrationAddress details (including Phone), as applicable to the registration site, when you retrieve your own user data. <br> <br> <b>GetItem:</b> RegistrationAddress for another user (except for Phone) is only returned if you have an order relationship with that user AND that user is registered on DE/AT/CH, regardless of your registration site and the site to which you send the request. For example, the seller can see the buyer's registration address if the buyer is registered on DE/AT/CH, or the buyer can see the seller's registration address if the seller is registered on DE/AT/CH. (The buyer and seller won't see their own registration addresses in GetItem.)
	 * @var EbayTradingTypeAddressType
	 */
	public $RegistrationAddress;
	/**
	 * The RegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the date the specified user originally registered with eBay. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The Site
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay site the user is registered with. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var EbayTradingTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the user's registration/user status.
	 * @var EbayTradingTypeUserStatusCodeType
	 */
	public $Status;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique eBay user ID for the user.<br> <br> Since a bidder's user info is anonymous, this tag contains the actual value of an ID only for that bidder, and for the seller of an item that the user is bidding on. For other users, the actual value is replaced by an anonymous value, according to these rules: <br><br> When bidding on items, UserID is replaced with the value "a****b" where a and b are random characters from the UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br><br> Note that in this format, the anonymous bidder ID can change for each auction. <br><br> For GetMyeBayBuying only, when bidding on items: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. <br><br> When bidding on items listed on the the Philippines site: UserID is replaced with the value "Bidder X" where X is a number indicating the order of that user's first bid. For example, if the user was the third bidder, UserID = Bidder 3. <br><br> Note that in this Philippines site format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1", not "Bidder 3". <br><br> For GetMyeBayBuying only, when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder". <br><br> For PlaceOffer, see also SellingStatus.HighBidder.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The UserIDChanged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, identifies a user whose ID has changed within the last 30 days. Does not indicate a new user (see NewUser). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var boolean
	 */
	public $UserIDChanged;
	/**
	 * The UserIDLastChanged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time the user's data was last changed (in GMT). <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var dateTime
	 */
	public $UserIDLastChanged;
	/**
	 * The VATStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See documentation on Value-Added Tax (VAT).
	 * @var EbayTradingTypeVATStatusCodeType
	 */
	public $VATStatus;
	/**
	 * The BuyerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the user as a buyer, such as the shipping address. See BuyerType for its child elements. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var EbayTradingTypeBuyerType
	 */
	public $BuyerInfo;
	/**
	 * The SellerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about a seller, including listing settings, listing preferences, seller rankings, and seller type. <br><br> This field is replaced by the SellerBusinessType field if the user is a business seller with a site ID of 77 (Germany), 3 (UK), 205 (Ireland) or 100 (Motors). <br><br> See SellerType or SellerBusinessCodeType for the child elements.
	 * @var EbayTradingTypeSellerType
	 */
	public $SellerInfo;
	/**
	 * The BusinessRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates whether the user's account is enabled for buying and selling (indicated by 'FullMarketPlaceParticipant') on eBay, or if the account is a Partially Provisioned Account (indicated by 'Shopper') without selling and buying privileges on eBay.
	 * @var EbayTradingTypeBusinessRoleType
	 */
	public $BusinessRole;
	/**
	 * The CharityAffiliations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the seller's charity affliations. Returned if the user is affiliated with one or more charities. Seller must be registered with the eBay Giving Works provider to be affiliated with a charity non-profit organization.
	 * @var EbayTradingTypeCharityAffiliationsType
	 */
	public $CharityAffiliations;
	/**
	 * The PayPalAccountLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's PayPal account level. Only returned for the user identified in eBayAuthToken. That is, you cannot see someone else's PayPal account level. Use this information to check whether a seller is eligible to list digital downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
	 * @var EbayTradingTypePayPalAccountLevelCodeType
	 */
	public $PayPalAccountLevel;
	/**
	 * The PayPalAccountType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's PayPal account type. Only returned for the user identified in eBayAuthToken. That is, you cannot see someone else's PayPal account type. Use this information to check whether a seller is likely to be eligible to list digital downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
	 * @var EbayTradingTypePayPalAccountTypeCodeType
	 */
	public $PayPalAccountType;
	/**
	 * The PayPalAccountStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's PayPal account status. Only returned for the user identified in eBayAuthToken. That is, you cannot see someone else's PayPal account status. Use this information to check whether a seller is eligible to list digital downloadable items. See the eBay Web site online help for current PayPal requirements for listing digital items.
	 * @var EbayTradingTypePayPalAccountStatusCodeType
	 */
	public $PayPalAccountStatus;
	/**
	 * The UserSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the subscription level for a user.
	 * @var EbayTradingTypeEBaySubscriptionTypeCodeType
	 */
	public $UserSubscription;
	/**
	 * The SiteVerified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : No longer used.
	 * @var boolean
	 */
	public $SiteVerified;
	/**
	 * The SkypeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Indicates the Skype name of the user. Available if the seller has a Skype account and has linked it (on the eBay site) with his or her eBay account.
	 * @var string
	 */
	public $SkypeID;
	/**
	 * The eBayWikiReadOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether a user has read-only access to the eBay Wiki (true) or whether the user is able contribute or edit articles on the eBay Wiki (false). By default, all registered eBay users have access to contribute and edit articles on the eBay Wiki. All content contributed to the eBay Wiki is subject to the Community Content Policy.
	 * @var boolean
	 */
	public $eBayWikiReadOnly;
	/**
	 * The TUVLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : TUV level is a number allocated to a user based on various characteristics such as buyer, seller, new buyer, new seller, high risk, or bid limit. Applies to eBay Motors Pro applications only.
	 * @var int
	 */
	public $TUVLevel;
	/**
	 * The VATID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value added tax identifier (VATID) is applicable to the VAT-enabled sites. Applies to eBay Motors Pro applications only.
	 * @var string
	 */
	public $VATID;
	/**
	 * The MotorsDealer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if item is listed for sale by owner (FSBO) or listed by a dealer. Applies to eBay Motors Pro applications only.
	 * @var boolean
	 */
	public $MotorsDealer;
	/**
	 * The SellerPaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not used by any call.
	 * @var EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public $SellerPaymentMethod;
	/**
	 * The BiddingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the user as a bidder on a certain item. Returned for GetAllBidders if IncludeBiddingSummary = true is included in the request.
	 * @var EbayTradingTypeBiddingSummaryType
	 */
	public $BiddingSummary;
	/**
	 * The UserAnonymized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the User container has been made anonymous. If true, some elements in the User container have either been removed, or had their values changed to remove identifying characteristics. If false, all expected elements are returned, and no values are changed. <br><br> Since a bidder's user info is anonymous, this tag is returned as false only to the bidder, and to the seller of an item that the user is bidding on. For all other users, this tag is returned as true.
	 * @var boolean
	 */
	public $UserAnonymized;
	/**
	 * The UniqueNeutralFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of neutral Feedback entries received by the user, including weekly repeats.
	 * @var int
	 */
	public $UniqueNeutralFeedbackCount;
	/**
	 * The EnterpriseSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for internal or future use.
	 * @var boolean
	 */
	public $EnterpriseSeller;
	/**
	 * The BillingEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When a user has their billing option set to 'email', they can include this element in a GetUser request to retrieve their own email bills.
	 * @var string
	 */
	public $BillingEmail;
	/**
	 * The QualifiesForSelling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicate whether user is eligible to list item or not.
	 * @var boolean
	 */
	public $QualifiesForSelling;
	/**
	 * The StaticAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the static email address of an eBay member, used within the "reply to" email address when the eBay member sends a message. (Each eBay member is assigned a static alias. The alias is used within a static email address.)
	 * @var string
	 */
	public $StaticAlias;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean AboutMePage
	 * @param string EIASToken
	 * @param string Email
	 * @param int FeedbackScore
	 * @param int UniqueNegativeFeedbackCount
	 * @param int UniquePositiveFeedbackCount
	 * @param float PositiveFeedbackPercent
	 * @param boolean FeedbackPrivate
	 * @param EbayTradingTypeFeedbackRatingStarCodeType FeedbackRatingStar
	 * @param boolean IDVerified
	 * @param boolean eBayGoodStanding
	 * @param boolean NewUser
	 * @param EbayTradingTypeAddressType RegistrationAddress
	 * @param dateTime RegistrationDate
	 * @param EbayTradingTypeSiteCodeType Site
	 * @param EbayTradingTypeUserStatusCodeType Status
	 * @param EbayTradingTypeUserIDType UserID
	 * @param boolean UserIDChanged
	 * @param dateTime UserIDLastChanged
	 * @param EbayTradingTypeVATStatusCodeType VATStatus
	 * @param EbayTradingTypeBuyerType BuyerInfo
	 * @param EbayTradingTypeSellerType SellerInfo
	 * @param EbayTradingTypeBusinessRoleType BusinessRole
	 * @param EbayTradingTypeCharityAffiliationsType CharityAffiliations
	 * @param EbayTradingTypePayPalAccountLevelCodeType PayPalAccountLevel
	 * @param EbayTradingTypePayPalAccountTypeCodeType PayPalAccountType
	 * @param EbayTradingTypePayPalAccountStatusCodeType PayPalAccountStatus
	 * @param EbayTradingTypeEBaySubscriptionTypeCodeType UserSubscription
	 * @param boolean SiteVerified
	 * @param string SkypeID
	 * @param boolean eBayWikiReadOnly
	 * @param int TUVLevel
	 * @param string VATID
	 * @param boolean MotorsDealer
	 * @param EbayTradingTypeSellerPaymentMethodCodeType SellerPaymentMethod
	 * @param EbayTradingTypeBiddingSummaryType BiddingSummary
	 * @param boolean UserAnonymized
	 * @param int UniqueNeutralFeedbackCount
	 * @param boolean EnterpriseSeller
	 * @param string BillingEmail
	 * @param boolean QualifiesForSelling
	 * @param string StaticAlias
	 * @param DOMDocument any
	 * @return EbayTradingTypeUserType
	 */
	public function __construct($_AboutMePage = null,$_EIASToken = null,$_Email = null,$_FeedbackScore = null,$_UniqueNegativeFeedbackCount = null,$_UniquePositiveFeedbackCount = null,$_PositiveFeedbackPercent = null,$_FeedbackPrivate = null,$_FeedbackRatingStar = null,$_IDVerified = null,$_eBayGoodStanding = null,$_NewUser = null,$_RegistrationAddress = null,$_RegistrationDate = null,$_Site = null,$_Status = null,$_UserID = null,$_UserIDChanged = null,$_UserIDLastChanged = null,$_VATStatus = null,$_BuyerInfo = null,$_SellerInfo = null,$_BusinessRole = null,$_CharityAffiliations = null,$_PayPalAccountLevel = null,$_PayPalAccountType = null,$_PayPalAccountStatus = null,$_UserSubscription = null,$_SiteVerified = null,$_SkypeID = null,$_eBayWikiReadOnly = null,$_TUVLevel = null,$_VATID = null,$_MotorsDealer = null,$_SellerPaymentMethod = null,$_BiddingSummary = null,$_UserAnonymized = null,$_UniqueNeutralFeedbackCount = null,$_EnterpriseSeller = null,$_BillingEmail = null,$_QualifiesForSelling = null,$_StaticAlias = null,$_any = null)
	{
		parent::__construct(array('AboutMePage'=>$_AboutMePage,'EIASToken'=>$_EIASToken,'Email'=>$_Email,'FeedbackScore'=>$_FeedbackScore,'UniqueNegativeFeedbackCount'=>$_UniqueNegativeFeedbackCount,'UniquePositiveFeedbackCount'=>$_UniquePositiveFeedbackCount,'PositiveFeedbackPercent'=>$_PositiveFeedbackPercent,'FeedbackPrivate'=>$_FeedbackPrivate,'FeedbackRatingStar'=>$_FeedbackRatingStar,'IDVerified'=>$_IDVerified,'eBayGoodStanding'=>$_eBayGoodStanding,'NewUser'=>$_NewUser,'RegistrationAddress'=>$_RegistrationAddress,'RegistrationDate'=>$_RegistrationDate,'Site'=>$_Site,'Status'=>$_Status,'UserID'=>$_UserID,'UserIDChanged'=>$_UserIDChanged,'UserIDLastChanged'=>$_UserIDLastChanged,'VATStatus'=>$_VATStatus,'BuyerInfo'=>$_BuyerInfo,'SellerInfo'=>$_SellerInfo,'BusinessRole'=>$_BusinessRole,'CharityAffiliations'=>$_CharityAffiliations,'PayPalAccountLevel'=>$_PayPalAccountLevel,'PayPalAccountType'=>$_PayPalAccountType,'PayPalAccountStatus'=>$_PayPalAccountStatus,'UserSubscription'=>$_UserSubscription,'SiteVerified'=>$_SiteVerified,'SkypeID'=>$_SkypeID,'eBayWikiReadOnly'=>$_eBayWikiReadOnly,'TUVLevel'=>$_TUVLevel,'VATID'=>$_VATID,'MotorsDealer'=>$_MotorsDealer,'SellerPaymentMethod'=>$_SellerPaymentMethod,'BiddingSummary'=>$_BiddingSummary,'UserAnonymized'=>$_UserAnonymized,'UniqueNeutralFeedbackCount'=>$_UniqueNeutralFeedbackCount,'EnterpriseSeller'=>$_EnterpriseSeller,'BillingEmail'=>$_BillingEmail,'QualifiesForSelling'=>$_QualifiesForSelling,'StaticAlias'=>$_StaticAlias,'any'=>$_any));
	}
	/**
	 * Set AboutMePage
	 * @param boolean AboutMePage
	 * @return boolean
	 */
	public function setAboutMePage($_AboutMePage)
	{
		return ($this->AboutMePage = $_AboutMePage);
	}
	/**
	 * Get AboutMePage
	 * @return boolean
	 */
	public function getAboutMePage()
	{
		return $this->AboutMePage;
	}
	/**
	 * Set EIASToken
	 * @param string EIASToken
	 * @return string
	 */
	public function setEIASToken($_EIASToken)
	{
		return ($this->EIASToken = $_EIASToken);
	}
	/**
	 * Get EIASToken
	 * @return string
	 */
	public function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set UniqueNegativeFeedbackCount
	 * @param int UniqueNegativeFeedbackCount
	 * @return int
	 */
	public function setUniqueNegativeFeedbackCount($_UniqueNegativeFeedbackCount)
	{
		return ($this->UniqueNegativeFeedbackCount = $_UniqueNegativeFeedbackCount);
	}
	/**
	 * Get UniqueNegativeFeedbackCount
	 * @return int
	 */
	public function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * Set UniquePositiveFeedbackCount
	 * @param int UniquePositiveFeedbackCount
	 * @return int
	 */
	public function setUniquePositiveFeedbackCount($_UniquePositiveFeedbackCount)
	{
		return ($this->UniquePositiveFeedbackCount = $_UniquePositiveFeedbackCount);
	}
	/**
	 * Get UniquePositiveFeedbackCount
	 * @return int
	 */
	public function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * Set PositiveFeedbackPercent
	 * @param float PositiveFeedbackPercent
	 * @return float
	 */
	public function setPositiveFeedbackPercent($_PositiveFeedbackPercent)
	{
		return ($this->PositiveFeedbackPercent = $_PositiveFeedbackPercent);
	}
	/**
	 * Get PositiveFeedbackPercent
	 * @return float
	 */
	public function getPositiveFeedbackPercent()
	{
		return $this->PositiveFeedbackPercent;
	}
	/**
	 * Set FeedbackPrivate
	 * @param boolean FeedbackPrivate
	 * @return boolean
	 */
	public function setFeedbackPrivate($_FeedbackPrivate)
	{
		return ($this->FeedbackPrivate = $_FeedbackPrivate);
	}
	/**
	 * Get FeedbackPrivate
	 * @return boolean
	 */
	public function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}
	/**
	 * Set FeedbackRatingStar
	 * @param FeedbackRatingStarCodeType FeedbackRatingStar
	 * @return FeedbackRatingStarCodeType
	 */
	public function setFeedbackRatingStar($_FeedbackRatingStar)
	{
		return ($this->FeedbackRatingStar = EbayTradingTypeFeedbackRatingStarCodeType::valueIsValid($_FeedbackRatingStar)?$_FeedbackRatingStar:null);
	}
	/**
	 * Get FeedbackRatingStar
	 * @return EbayTradingTypeFeedbackRatingStarCodeType
	 */
	public function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}
	/**
	 * Set IDVerified
	 * @param boolean IDVerified
	 * @return boolean
	 */
	public function setIDVerified($_IDVerified)
	{
		return ($this->IDVerified = $_IDVerified);
	}
	/**
	 * Get IDVerified
	 * @return boolean
	 */
	public function getIDVerified()
	{
		return $this->IDVerified;
	}
	/**
	 * Set eBayGoodStanding
	 * @param boolean eBayGoodStanding
	 * @return boolean
	 */
	public function setEBayGoodStanding($_eBayGoodStanding)
	{
		return ($this->eBayGoodStanding = $_eBayGoodStanding);
	}
	/**
	 * Get eBayGoodStanding
	 * @return boolean
	 */
	public function getEBayGoodStanding()
	{
		return $this->eBayGoodStanding;
	}
	/**
	 * Set NewUser
	 * @param boolean NewUser
	 * @return boolean
	 */
	public function setNewUser($_NewUser)
	{
		return ($this->NewUser = $_NewUser);
	}
	/**
	 * Get NewUser
	 * @return boolean
	 */
	public function getNewUser()
	{
		return $this->NewUser;
	}
	/**
	 * Set RegistrationAddress
	 * @param AddressType RegistrationAddress
	 * @return AddressType
	 */
	public function setRegistrationAddress($_RegistrationAddress)
	{
		return ($this->RegistrationAddress = $_RegistrationAddress);
	}
	/**
	 * Get RegistrationAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getRegistrationAddress()
	{
		return $this->RegistrationAddress;
	}
	/**
	 * Set RegistrationDate
	 * @param dateTime RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_RegistrationDate)
	{
		return ($this->RegistrationDate = $_RegistrationDate);
	}
	/**
	 * Get RegistrationDate
	 * @return dateTime
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
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
	 * Set Status
	 * @param UserStatusCodeType Status
	 * @return UserStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeUserStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeUserStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set UserIDChanged
	 * @param boolean UserIDChanged
	 * @return boolean
	 */
	public function setUserIDChanged($_UserIDChanged)
	{
		return ($this->UserIDChanged = $_UserIDChanged);
	}
	/**
	 * Get UserIDChanged
	 * @return boolean
	 */
	public function getUserIDChanged()
	{
		return $this->UserIDChanged;
	}
	/**
	 * Set UserIDLastChanged
	 * @param dateTime UserIDLastChanged
	 * @return dateTime
	 */
	public function setUserIDLastChanged($_UserIDLastChanged)
	{
		return ($this->UserIDLastChanged = $_UserIDLastChanged);
	}
	/**
	 * Get UserIDLastChanged
	 * @return dateTime
	 */
	public function getUserIDLastChanged()
	{
		return $this->UserIDLastChanged;
	}
	/**
	 * Set VATStatus
	 * @param VATStatusCodeType VATStatus
	 * @return VATStatusCodeType
	 */
	public function setVATStatus($_VATStatus)
	{
		return ($this->VATStatus = EbayTradingTypeVATStatusCodeType::valueIsValid($_VATStatus)?$_VATStatus:null);
	}
	/**
	 * Get VATStatus
	 * @return EbayTradingTypeVATStatusCodeType
	 */
	public function getVATStatus()
	{
		return $this->VATStatus;
	}
	/**
	 * Set BuyerInfo
	 * @param BuyerType BuyerInfo
	 * @return BuyerType
	 */
	public function setBuyerInfo($_BuyerInfo)
	{
		return ($this->BuyerInfo = $_BuyerInfo);
	}
	/**
	 * Get BuyerInfo
	 * @return EbayTradingTypeBuyerType
	 */
	public function getBuyerInfo()
	{
		return $this->BuyerInfo;
	}
	/**
	 * Set SellerInfo
	 * @param SellerType SellerInfo
	 * @return SellerType
	 */
	public function setSellerInfo($_SellerInfo)
	{
		return ($this->SellerInfo = $_SellerInfo);
	}
	/**
	 * Get SellerInfo
	 * @return EbayTradingTypeSellerType
	 */
	public function getSellerInfo()
	{
		return $this->SellerInfo;
	}
	/**
	 * Set BusinessRole
	 * @param BusinessRoleType BusinessRole
	 * @return BusinessRoleType
	 */
	public function setBusinessRole($_BusinessRole)
	{
		return ($this->BusinessRole = EbayTradingTypeBusinessRoleType::valueIsValid($_BusinessRole)?$_BusinessRole:null);
	}
	/**
	 * Get BusinessRole
	 * @return EbayTradingTypeBusinessRoleType
	 */
	public function getBusinessRole()
	{
		return $this->BusinessRole;
	}
	/**
	 * Set CharityAffiliations
	 * @param CharityAffiliationsType CharityAffiliations
	 * @return CharityAffiliationsType
	 */
	public function setCharityAffiliations($_CharityAffiliations)
	{
		return ($this->CharityAffiliations = $_CharityAffiliations);
	}
	/**
	 * Get CharityAffiliations
	 * @return EbayTradingTypeCharityAffiliationsType
	 */
	public function getCharityAffiliations()
	{
		return $this->CharityAffiliations;
	}
	/**
	 * Set PayPalAccountLevel
	 * @param PayPalAccountLevelCodeType PayPalAccountLevel
	 * @return PayPalAccountLevelCodeType
	 */
	public function setPayPalAccountLevel($_PayPalAccountLevel)
	{
		return ($this->PayPalAccountLevel = EbayTradingTypePayPalAccountLevelCodeType::valueIsValid($_PayPalAccountLevel)?$_PayPalAccountLevel:null);
	}
	/**
	 * Get PayPalAccountLevel
	 * @return EbayTradingTypePayPalAccountLevelCodeType
	 */
	public function getPayPalAccountLevel()
	{
		return $this->PayPalAccountLevel;
	}
	/**
	 * Set PayPalAccountType
	 * @param PayPalAccountTypeCodeType PayPalAccountType
	 * @return PayPalAccountTypeCodeType
	 */
	public function setPayPalAccountType($_PayPalAccountType)
	{
		return ($this->PayPalAccountType = EbayTradingTypePayPalAccountTypeCodeType::valueIsValid($_PayPalAccountType)?$_PayPalAccountType:null);
	}
	/**
	 * Get PayPalAccountType
	 * @return EbayTradingTypePayPalAccountTypeCodeType
	 */
	public function getPayPalAccountType()
	{
		return $this->PayPalAccountType;
	}
	/**
	 * Set PayPalAccountStatus
	 * @param PayPalAccountStatusCodeType PayPalAccountStatus
	 * @return PayPalAccountStatusCodeType
	 */
	public function setPayPalAccountStatus($_PayPalAccountStatus)
	{
		return ($this->PayPalAccountStatus = EbayTradingTypePayPalAccountStatusCodeType::valueIsValid($_PayPalAccountStatus)?$_PayPalAccountStatus:null);
	}
	/**
	 * Get PayPalAccountStatus
	 * @return EbayTradingTypePayPalAccountStatusCodeType
	 */
	public function getPayPalAccountStatus()
	{
		return $this->PayPalAccountStatus;
	}
	/**
	 * Set UserSubscription
	 * @param EBaySubscriptionTypeCodeType UserSubscription
	 * @return EBaySubscriptionTypeCodeType
	 */
	public function setUserSubscription($_UserSubscription)
	{
		return ($this->UserSubscription = EbayTradingTypeEBaySubscriptionTypeCodeType::valueIsValid($_UserSubscription)?$_UserSubscription:null);
	}
	/**
	 * Get UserSubscription
	 * @return EbayTradingTypeEBaySubscriptionTypeCodeType
	 */
	public function getUserSubscription()
	{
		return $this->UserSubscription;
	}
	/**
	 * Set SiteVerified
	 * @param boolean SiteVerified
	 * @return boolean
	 */
	public function setSiteVerified($_SiteVerified)
	{
		return ($this->SiteVerified = $_SiteVerified);
	}
	/**
	 * Get SiteVerified
	 * @return boolean
	 */
	public function getSiteVerified()
	{
		return $this->SiteVerified;
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
	 * Set eBayWikiReadOnly
	 * @param boolean eBayWikiReadOnly
	 * @return boolean
	 */
	public function setEBayWikiReadOnly($_eBayWikiReadOnly)
	{
		return ($this->eBayWikiReadOnly = $_eBayWikiReadOnly);
	}
	/**
	 * Get eBayWikiReadOnly
	 * @return boolean
	 */
	public function getEBayWikiReadOnly()
	{
		return $this->eBayWikiReadOnly;
	}
	/**
	 * Set TUVLevel
	 * @param int TUVLevel
	 * @return int
	 */
	public function setTUVLevel($_TUVLevel)
	{
		return ($this->TUVLevel = $_TUVLevel);
	}
	/**
	 * Get TUVLevel
	 * @return int
	 */
	public function getTUVLevel()
	{
		return $this->TUVLevel;
	}
	/**
	 * Set VATID
	 * @param string VATID
	 * @return string
	 */
	public function setVATID($_VATID)
	{
		return ($this->VATID = $_VATID);
	}
	/**
	 * Get VATID
	 * @return string
	 */
	public function getVATID()
	{
		return $this->VATID;
	}
	/**
	 * Set MotorsDealer
	 * @param boolean MotorsDealer
	 * @return boolean
	 */
	public function setMotorsDealer($_MotorsDealer)
	{
		return ($this->MotorsDealer = $_MotorsDealer);
	}
	/**
	 * Get MotorsDealer
	 * @return boolean
	 */
	public function getMotorsDealer()
	{
		return $this->MotorsDealer;
	}
	/**
	 * Set SellerPaymentMethod
	 * @param SellerPaymentMethodCodeType SellerPaymentMethod
	 * @return SellerPaymentMethodCodeType
	 */
	public function setSellerPaymentMethod($_SellerPaymentMethod)
	{
		return ($this->SellerPaymentMethod = EbayTradingTypeSellerPaymentMethodCodeType::valueIsValid($_SellerPaymentMethod)?$_SellerPaymentMethod:null);
	}
	/**
	 * Get SellerPaymentMethod
	 * @return EbayTradingTypeSellerPaymentMethodCodeType
	 */
	public function getSellerPaymentMethod()
	{
		return $this->SellerPaymentMethod;
	}
	/**
	 * Set BiddingSummary
	 * @param BiddingSummaryType BiddingSummary
	 * @return BiddingSummaryType
	 */
	public function setBiddingSummary($_BiddingSummary)
	{
		return ($this->BiddingSummary = $_BiddingSummary);
	}
	/**
	 * Get BiddingSummary
	 * @return EbayTradingTypeBiddingSummaryType
	 */
	public function getBiddingSummary()
	{
		return $this->BiddingSummary;
	}
	/**
	 * Set UserAnonymized
	 * @param boolean UserAnonymized
	 * @return boolean
	 */
	public function setUserAnonymized($_UserAnonymized)
	{
		return ($this->UserAnonymized = $_UserAnonymized);
	}
	/**
	 * Get UserAnonymized
	 * @return boolean
	 */
	public function getUserAnonymized()
	{
		return $this->UserAnonymized;
	}
	/**
	 * Set UniqueNeutralFeedbackCount
	 * @param int UniqueNeutralFeedbackCount
	 * @return int
	 */
	public function setUniqueNeutralFeedbackCount($_UniqueNeutralFeedbackCount)
	{
		return ($this->UniqueNeutralFeedbackCount = $_UniqueNeutralFeedbackCount);
	}
	/**
	 * Get UniqueNeutralFeedbackCount
	 * @return int
	 */
	public function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
	}
	/**
	 * Set EnterpriseSeller
	 * @param boolean EnterpriseSeller
	 * @return boolean
	 */
	public function setEnterpriseSeller($_EnterpriseSeller)
	{
		return ($this->EnterpriseSeller = $_EnterpriseSeller);
	}
	/**
	 * Get EnterpriseSeller
	 * @return boolean
	 */
	public function getEnterpriseSeller()
	{
		return $this->EnterpriseSeller;
	}
	/**
	 * Set BillingEmail
	 * @param string BillingEmail
	 * @return string
	 */
	public function setBillingEmail($_BillingEmail)
	{
		return ($this->BillingEmail = $_BillingEmail);
	}
	/**
	 * Get BillingEmail
	 * @return string
	 */
	public function getBillingEmail()
	{
		return $this->BillingEmail;
	}
	/**
	 * Set QualifiesForSelling
	 * @param boolean QualifiesForSelling
	 * @return boolean
	 */
	public function setQualifiesForSelling($_QualifiesForSelling)
	{
		return ($this->QualifiesForSelling = $_QualifiesForSelling);
	}
	/**
	 * Get QualifiesForSelling
	 * @return boolean
	 */
	public function getQualifiesForSelling()
	{
		return $this->QualifiesForSelling;
	}
	/**
	 * Set StaticAlias
	 * @param string StaticAlias
	 * @return string
	 */
	public function setStaticAlias($_StaticAlias)
	{
		return ($this->StaticAlias = $_StaticAlias);
	}
	/**
	 * Get StaticAlias
	 * @return string
	 */
	public function getStaticAlias()
	{
		return $this->StaticAlias;
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