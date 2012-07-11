<?php
/**
 * Class file for EbayShoppingTypeSimpleUserType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSimpleUserType
 * Documentation : Type to contain the data for one eBay user. Depending on the context, the user might be the seller or the buyer in a transaction, or the bidder or winning bidder in a listing. An object of this type is returned by a number of calls, including the GetUser call.
 * @date 05/07/2012
 */
class EbayShoppingTypeSimpleUserType extends EbayShoppingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's unique eBay user ID. <br /> <br /> When reporting UserIDs in bidding situations (such was when listing the high bidder in an auction), eBay replaces the UserID value with an anonymous bidder name value, such as "a***o".
	 * @var string
	 */
	public $UserID;
	/**
	 * The FeedbackPrivate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user has chosen to make their feedback score and feedback details private (hidden from other users). Note that the percentage of positive feedback can still be returned, even if other feedback details are private. If a bidder's user information is made anonymous, the value -99 is returned.
	 * @var boolean
	 */
	public $FeedbackPrivate;
	/**
	 * The FeedbackRatingStar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Visual indicator of user's feedback score.
	 * @var EbayShoppingTypeFeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The aggregate feedback score of a user. A user's feedback score is the net positive feedback minus the net negative feedback left for the user. <br> <br> Feedback scores are a quantitative expression of the desirability of dealing with a user as a buyer or a seller in transactions. Each transaction can result in one feedback entry for a given user. (The buyer can leave feedback for the seller, and the seller can leave feedback for the buyer.) That one feedback can be positive, negative, or neutral. The aggregate feedback score of a user represents that user's overall feedback score (referred to as a "feedback rating" on the eBay site). If the user has chosen to make their feedback private, then FeedbackScore is not returned and FeedbackPrivate is returned with a value of true. <br> <br> If a bidder's user information is made anonymous, the value -99 is returned.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The UserAnonymized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether eBay has made this user's information anonymous. This occurs when the listing prices (reserve, current, or Buy It Now) reach or exceed a certain amount (such as $200 USD at the time of this writing). <br> <br> If true, certain other fields about this user are not returned, or their values include no identifying characteristics. (The rules are explained in the description of each field.) If false, all user-specific fields contain the user's actual data.
	 * @var boolean
	 */
	public $UserAnonymized;
	/**
	 * The NewUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, identifies a new user who has been a registered eBay user for 30 days or less. Always false after the user has been registered for more than 30 days. Does not indicate an ID change.
	 * @var boolean
	 */
	public $NewUser;
	/**
	 * The RegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date the specified user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The RegistrationSite
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay site with which the user is registered. If a bidder's user information is made anonymous, the value -99 is returned.
	 * @var EbayShoppingTypeSiteCodeType
	 */
	public $RegistrationSite;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The registration-related status of the user.
	 * @var EbayShoppingTypeUserStatusCodeType
	 */
	public $Status;
	/**
	 * The SellerBusinessType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of seller account.
	 * @var EbayShoppingTypeSellerBusinessCodeType
	 */
	public $SellerBusinessType;
	/**
	 * The StoreURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the seller's eBay Store page.
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the seller's eBay Store.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The SellerItemsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for seller's other items.
	 * @var anyURI
	 */
	public $SellerItemsURL;
	/**
	 * The AboutMeURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A link to the user's AboutMe page.
	 * @var anyURI
	 */
	public $AboutMeURL;
	/**
	 * The MyWorldURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A link to the URL of the user's MyWorld page.
	 * @var anyURI
	 */
	public $MyWorldURL;
	/**
	 * The MyWorldSmallImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Location of a user's image on the MyWorld page (small version).
	 * @var anyURI
	 */
	public $MyWorldSmallImage;
	/**
	 * The MyWorldLargeImage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Location of a user's image on the MyWorld page (large version).
	 * @var anyURI
	 */
	public $MyWorldLargeImage;
	/**
	 * The ReviewsAndGuidesURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of reviews and guides.
	 * @var anyURI
	 */
	public $ReviewsAndGuidesURL;
	/**
	 * The FeedbackDetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of feedback details.
	 * @var anyURI
	 */
	public $FeedbackDetailsURL;
	/**
	 * The PositiveFeedbackPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A seller's positive feedback score. The percentage value of a seller's positive feedback is calculated by dividing the seller's positive feedback score by their negative feedback score. The last 12 months of feedback scores are taken into consideration for this calculation.
	 * @var float
	 */
	public $PositiveFeedbackPercent;
	/**
	 * The SellerLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's eBay PowerSeller tier. No longer returned for the US, DE/AT/CH, and UK/IE sites. Note that SellerLevel may be suppressed for other sites, as well.
	 * @var EbayShoppingTypeSellerLevelCodeType
	 */
	public $SellerLevel;
	/**
	 * The TopRatedSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returned when seller is certified as a top-rated seller, and is qualified for benefits such as final value fee discount and increased visibility in fixed-price searches.
	 * @var boolean
	 */
	public $TopRatedSeller;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string UserID
	 * @param boolean FeedbackPrivate
	 * @param EbayShoppingTypeFeedbackRatingStarCodeType FeedbackRatingStar
	 * @param int FeedbackScore
	 * @param boolean UserAnonymized
	 * @param boolean NewUser
	 * @param dateTime RegistrationDate
	 * @param EbayShoppingTypeSiteCodeType RegistrationSite
	 * @param EbayShoppingTypeUserStatusCodeType Status
	 * @param EbayShoppingTypeSellerBusinessCodeType SellerBusinessType
	 * @param anyURI StoreURL
	 * @param string StoreName
	 * @param anyURI SellerItemsURL
	 * @param anyURI AboutMeURL
	 * @param anyURI MyWorldURL
	 * @param anyURI MyWorldSmallImage
	 * @param anyURI MyWorldLargeImage
	 * @param anyURI ReviewsAndGuidesURL
	 * @param anyURI FeedbackDetailsURL
	 * @param float PositiveFeedbackPercent
	 * @param EbayShoppingTypeSellerLevelCodeType SellerLevel
	 * @param boolean TopRatedSeller
	 * @param DOMDocument any
	 * @return EbayShoppingTypeSimpleUserType
	 */
	public function __construct($_UserID = null,$_FeedbackPrivate = null,$_FeedbackRatingStar = null,$_FeedbackScore = null,$_UserAnonymized = null,$_NewUser = null,$_RegistrationDate = null,$_RegistrationSite = null,$_Status = null,$_SellerBusinessType = null,$_StoreURL = null,$_StoreName = null,$_SellerItemsURL = null,$_AboutMeURL = null,$_MyWorldURL = null,$_MyWorldSmallImage = null,$_MyWorldLargeImage = null,$_ReviewsAndGuidesURL = null,$_FeedbackDetailsURL = null,$_PositiveFeedbackPercent = null,$_SellerLevel = null,$_TopRatedSeller = null,$_any = null)
	{
		parent::__construct(array('UserID'=>$_UserID,'FeedbackPrivate'=>$_FeedbackPrivate,'FeedbackRatingStar'=>$_FeedbackRatingStar,'FeedbackScore'=>$_FeedbackScore,'UserAnonymized'=>$_UserAnonymized,'NewUser'=>$_NewUser,'RegistrationDate'=>$_RegistrationDate,'RegistrationSite'=>$_RegistrationSite,'Status'=>$_Status,'SellerBusinessType'=>$_SellerBusinessType,'StoreURL'=>$_StoreURL,'StoreName'=>$_StoreName,'SellerItemsURL'=>$_SellerItemsURL,'AboutMeURL'=>$_AboutMeURL,'MyWorldURL'=>$_MyWorldURL,'MyWorldSmallImage'=>$_MyWorldSmallImage,'MyWorldLargeImage'=>$_MyWorldLargeImage,'ReviewsAndGuidesURL'=>$_ReviewsAndGuidesURL,'FeedbackDetailsURL'=>$_FeedbackDetailsURL,'PositiveFeedbackPercent'=>$_PositiveFeedbackPercent,'SellerLevel'=>$_SellerLevel,'TopRatedSeller'=>$_TopRatedSeller,'any'=>$_any));
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
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
		return ($this->FeedbackRatingStar = EbayShoppingTypeFeedbackRatingStarCodeType::valueIsValid($_FeedbackRatingStar)?$_FeedbackRatingStar:null);
	}
	/**
	 * Get FeedbackRatingStar
	 * @return EbayShoppingTypeFeedbackRatingStarCodeType
	 */
	public function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
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
	 * Set RegistrationSite
	 * @param SiteCodeType RegistrationSite
	 * @return SiteCodeType
	 */
	public function setRegistrationSite($_RegistrationSite)
	{
		return ($this->RegistrationSite = EbayShoppingTypeSiteCodeType::valueIsValid($_RegistrationSite)?$_RegistrationSite:null);
	}
	/**
	 * Get RegistrationSite
	 * @return EbayShoppingTypeSiteCodeType
	 */
	public function getRegistrationSite()
	{
		return $this->RegistrationSite;
	}
	/**
	 * Set Status
	 * @param UserStatusCodeType Status
	 * @return UserStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayShoppingTypeUserStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayShoppingTypeUserStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set SellerBusinessType
	 * @param SellerBusinessCodeType SellerBusinessType
	 * @return SellerBusinessCodeType
	 */
	public function setSellerBusinessType($_SellerBusinessType)
	{
		return ($this->SellerBusinessType = EbayShoppingTypeSellerBusinessCodeType::valueIsValid($_SellerBusinessType)?$_SellerBusinessType:null);
	}
	/**
	 * Get SellerBusinessType
	 * @return EbayShoppingTypeSellerBusinessCodeType
	 */
	public function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * Set StoreURL
	 * @param anyURI StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_StoreURL)
	{
		return ($this->StoreURL = $_StoreURL);
	}
	/**
	 * Get StoreURL
	 * @return anyURI
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set SellerItemsURL
	 * @param anyURI SellerItemsURL
	 * @return anyURI
	 */
	public function setSellerItemsURL($_SellerItemsURL)
	{
		return ($this->SellerItemsURL = $_SellerItemsURL);
	}
	/**
	 * Get SellerItemsURL
	 * @return anyURI
	 */
	public function getSellerItemsURL()
	{
		return $this->SellerItemsURL;
	}
	/**
	 * Set AboutMeURL
	 * @param anyURI AboutMeURL
	 * @return anyURI
	 */
	public function setAboutMeURL($_AboutMeURL)
	{
		return ($this->AboutMeURL = $_AboutMeURL);
	}
	/**
	 * Get AboutMeURL
	 * @return anyURI
	 */
	public function getAboutMeURL()
	{
		return $this->AboutMeURL;
	}
	/**
	 * Set MyWorldURL
	 * @param anyURI MyWorldURL
	 * @return anyURI
	 */
	public function setMyWorldURL($_MyWorldURL)
	{
		return ($this->MyWorldURL = $_MyWorldURL);
	}
	/**
	 * Get MyWorldURL
	 * @return anyURI
	 */
	public function getMyWorldURL()
	{
		return $this->MyWorldURL;
	}
	/**
	 * Set MyWorldSmallImage
	 * @param anyURI MyWorldSmallImage
	 * @return anyURI
	 */
	public function setMyWorldSmallImage($_MyWorldSmallImage)
	{
		return ($this->MyWorldSmallImage = $_MyWorldSmallImage);
	}
	/**
	 * Get MyWorldSmallImage
	 * @return anyURI
	 */
	public function getMyWorldSmallImage()
	{
		return $this->MyWorldSmallImage;
	}
	/**
	 * Set MyWorldLargeImage
	 * @param anyURI MyWorldLargeImage
	 * @return anyURI
	 */
	public function setMyWorldLargeImage($_MyWorldLargeImage)
	{
		return ($this->MyWorldLargeImage = $_MyWorldLargeImage);
	}
	/**
	 * Get MyWorldLargeImage
	 * @return anyURI
	 */
	public function getMyWorldLargeImage()
	{
		return $this->MyWorldLargeImage;
	}
	/**
	 * Set ReviewsAndGuidesURL
	 * @param anyURI ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function setReviewsAndGuidesURL($_ReviewsAndGuidesURL)
	{
		return ($this->ReviewsAndGuidesURL = $_ReviewsAndGuidesURL);
	}
	/**
	 * Get ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
	}
	/**
	 * Set FeedbackDetailsURL
	 * @param anyURI FeedbackDetailsURL
	 * @return anyURI
	 */
	public function setFeedbackDetailsURL($_FeedbackDetailsURL)
	{
		return ($this->FeedbackDetailsURL = $_FeedbackDetailsURL);
	}
	/**
	 * Get FeedbackDetailsURL
	 * @return anyURI
	 */
	public function getFeedbackDetailsURL()
	{
		return $this->FeedbackDetailsURL;
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
	 * Set SellerLevel
	 * @param SellerLevelCodeType SellerLevel
	 * @return SellerLevelCodeType
	 */
	public function setSellerLevel($_SellerLevel)
	{
		return ($this->SellerLevel = EbayShoppingTypeSellerLevelCodeType::valueIsValid($_SellerLevel)?$_SellerLevel:null);
	}
	/**
	 * Get SellerLevel
	 * @return EbayShoppingTypeSellerLevelCodeType
	 */
	public function getSellerLevel()
	{
		return $this->SellerLevel;
	}
	/**
	 * Set TopRatedSeller
	 * @param boolean TopRatedSeller
	 * @return boolean
	 */
	public function setTopRatedSeller($_TopRatedSeller)
	{
		return ($this->TopRatedSeller = $_TopRatedSeller);
	}
	/**
	 * Get TopRatedSeller
	 * @return boolean
	 */
	public function getTopRatedSeller()
	{
		return $this->TopRatedSeller;
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