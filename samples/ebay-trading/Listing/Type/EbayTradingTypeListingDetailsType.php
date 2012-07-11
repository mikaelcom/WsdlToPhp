<?php
/**
 * Class file for EbayTradingTypeListingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingDetailsType
 * Documentation : Various details about a listing. Some of the details are calculated or derived after an item is listed. The details in this type include the start and end time and the converted (localized) prices. The details in this type also include input values applicable to the Best Offer feature. Additional details in this type include flags indicating if a seller specified fields whose values are not visible to the requesting user.
 * @date 04/07/2012
 */
class EbayTradingTypeListingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Adult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item is listed in a Mature category. Users must accept the Mature Category agreement on the eBay site to retrieve items listed in Mature categories. (Users do not need to sign this agreement to be able to list items in Mature Categories.)
	 * @var boolean
	 */
	public $Adult;
	/**
	 * The BindingAuction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable for Real Estate auctions only. If true, buyers and sellers are expected to follow through on the sale. If false, bids for the Real Estate auction are only expressions of interest.
	 * @var boolean
	 */
	public $BindingAuction;
	/**
	 * The CheckoutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether checkout is enabled for this item. If true, indicates that the seller elects to allow the item purchase to go through the checkout process, if the buyer chooses to do so.
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The ConvertedBuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the BuyItNowPrice in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedBuyItNowPrice;
	/**
	 * The ConvertedStartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the StartPrice in the currency of the site that returned this response. For active items, refresh this value every 24 hours to pick up the current conversion rates.<br> <br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedStartPrice;
	/**
	 * The ConvertedReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the ReservePrice in the currency of the site that returned this response. Only returned for listings with a reserve price when the requesting user is the listing's seller. For active items, refresh this value every 24 hours to pick up the current conversion rates. Not applicable to Fixed Price and Store Inventory listings.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedReservePrice;
	/**
	 * The HasReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the seller specified a value in ReservePrice.
	 * @var boolean
	 */
	public $HasReservePrice;
	/**
	 * The RelistedItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the new item ID for a re-listed item. When an item is re-listed, the item ID for the new item is added to the old listing, so buyers can navigate to the new listing. This value only appears when the old listing is retrieved. The RelistedItemID of the original item should reflect the last relist.
	 * @var EbayTradingTypeItemIDType
	 */
	public $RelistedItemID;
	/**
	 * The SecondChanceOriginalItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID for the original listing from which a second chance offer is made. This value is only returned when the data for the second chance offer listing is retrieved. Output only.
	 * @var EbayTradingTypeItemIDType
	 */
	public $SecondChanceOriginalItemID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The StartTime value returned by non-search calls such as GetItem is the time stamp (in GMT) for when the item was listed.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp (in GMT) when the listing is scheduled to end (calculated based on the values of StartTime and ListingDuration) or the actual end time if the item has ended.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The ViewItemURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the Web page where a user can view the listing. On the US site, this is called the "View Item" page. If you enabled affiliate tracking in a search-related call (for example, if you used the AffiliateTrackingDetails container in an applicable call), ViewItemURL contains a string that includes affiliate tracking information (see the <a href= "https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>).
	 * @var anyURI
	 */
	public $ViewItemURL;
	/**
	 * The HasUnansweredQuestions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item has any unanswered questions. Use GetMemberMessages to retrieve unanswered questions for the item if this flag indicates that there are any.
	 * @var boolean
	 */
	public $HasUnansweredQuestions;
	/**
	 * The HasPublicMessages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item has any publicly displayed messages. Use GetMemberMessages to retrieve public messages for the item if this flag indicates that there are any.
	 * @var boolean
	 */
	public $HasPublicMessages;
	/**
	 * The BuyItNowAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether Buy It Now is available for the competitive-bid auction listing. As a general rule, once a Chinese auction has bids (and the high bid exceeds the reserve price, if any), the listing is no longer eligible for Buy It Now. <br><br> On some sites, the Buy It Now price for a Chinese auction may remain available for certain categories even after a bid is placed. See the "Longer Lasting Buy It Now" link below for more details and the latest list of eBay US categories that support this behavior. The eBay Spain site supports this behavior for all categories.
	 * @var boolean
	 */
	public $BuyItNowAvailable;
	/**
	 * The SellerBusinessType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of seller account. This value is not returned for most sites. This value is not returned for the German site (site ID 77) or eBay Motors site (site ID 100).
	 * @var EbayTradingTypeSellerBusinessCodeType
	 */
	public $SellerBusinessType;
	/**
	 * The MinimumBestOfferPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the minimum acceptable best offer price. If a buyer submits a best offer that is below this value, the offer is automatically declined by the seller. Applies only to items listed in categories that support the Best Offer Auto-Decline feature. Best Offer must be enabled for the item, and only the seller who listed the item can see this value. To remove this value when revising or relisting an item, use DeletedField.
	 * @var EbayTradingTypeAmountType
	 */
	public $MinimumBestOfferPrice;
	/**
	 * The MinimumBestOfferMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the message sent from the seller to the buyer when a submitted best offer is automatically declined by the seller. A best offer is automatically declined if it does not meet the minimum acceptable best offer price specified by the seller with MinimumBestOfferPrice. Applies only to items listed in categories that support the Best Offer Auto-Decline feature. Best Offer must be enabled for the item. To remove this value when revising or relisting an item, use DeletedField.
	 * @var string
	 */
	public $MinimumBestOfferMessage;
	/**
	 * The LocalListingDistance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies a distance (in miles) used as the radius of the area about the supplied postal code that constitutes the local market. Use GetCategoryFeatures to determine the local listing distances supported by a given site, category, and Local Market subscription level.
	 * @var string
	 */
	public $LocalListingDistance;
	/**
	 * The TCROriginalItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the item ID of the original item listing from which a Transaction Confirmation Request (TCR) was created. This value is only returned when the data for a TCR is retrieved.
	 * @var EbayTradingTypeItemIDType
	 */
	public $TCROriginalItemID;
	/**
	 * The ViewItemURLForNaturalSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This URL takes you to the same View Item page as ViewItemURL, but this URL is optimized to support natural search. That is, this URL is designed to make items on eBay easier to find via popular Internet search engines. The URL includes the item title along with other optimizations. To note, "?" (question mark) optimizes to "_W0QQ", "&" (ampersand) optimizes to "QQ", and "=" (equals sign) optimizes to "Z". <br><br> If you are an eBAy affiliate, use this URL to promote your affiliate information. <br><br> <span class="tablenote"><b>Note:</b> This URL may include additional query parameters that don't appear in ViewItemURL and vice versa. You should not modify the query syntax. For example, eBay won't recognize the URL if you change QQ to ?. </span>
	 * @var anyURI
	 */
	public $ViewItemURLForNaturalSearch;
	/**
	 * The PayPerLeadEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true as an input or output field, the item is pay-per-lead-enabled. This field applies to the pay-per-lead feature, which is planned for availability on the US site in upcoming months.
	 * @var boolean
	 */
	public $PayPerLeadEnabled;
	/**
	 * The BestOfferAutoAcceptPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The price at which best offers are automatically accepted. Similar in use to MinimumBestOfferPrice. If a buyer submits a best offer that is above this value, the offer is automatically accepted by the seller. Applies only to items listed in categories that support the BestOfferAutoAcceptPrice feature. Best Offer must be enabled for the item, and only the seller who listed the item will see BestOfferAutoAcceptPrice in a call response. On the US eBay Motors site (site ID 100), you cannot use the API to add a minimum best offer price. For a ReviseItem call with site ID 100, prior use of a minimum best offer price on eBay.com is ignored.
	 * @var EbayTradingTypeAmountType
	 */
	public $BestOfferAutoAcceptPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean Adult
	 * @param boolean BindingAuction
	 * @param boolean CheckoutEnabled
	 * @param EbayTradingTypeAmountType ConvertedBuyItNowPrice
	 * @param EbayTradingTypeAmountType ConvertedStartPrice
	 * @param EbayTradingTypeAmountType ConvertedReservePrice
	 * @param boolean HasReservePrice
	 * @param EbayTradingTypeItemIDType RelistedItemID
	 * @param EbayTradingTypeItemIDType SecondChanceOriginalItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param anyURI ViewItemURL
	 * @param boolean HasUnansweredQuestions
	 * @param boolean HasPublicMessages
	 * @param boolean BuyItNowAvailable
	 * @param EbayTradingTypeSellerBusinessCodeType SellerBusinessType
	 * @param EbayTradingTypeAmountType MinimumBestOfferPrice
	 * @param string MinimumBestOfferMessage
	 * @param string LocalListingDistance
	 * @param EbayTradingTypeItemIDType TCROriginalItemID
	 * @param anyURI ViewItemURLForNaturalSearch
	 * @param boolean PayPerLeadEnabled
	 * @param EbayTradingTypeAmountType BestOfferAutoAcceptPrice
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingDetailsType
	 */
	public function __construct($_Adult = null,$_BindingAuction = null,$_CheckoutEnabled = null,$_ConvertedBuyItNowPrice = null,$_ConvertedStartPrice = null,$_ConvertedReservePrice = null,$_HasReservePrice = null,$_RelistedItemID = null,$_SecondChanceOriginalItemID = null,$_StartTime = null,$_EndTime = null,$_ViewItemURL = null,$_HasUnansweredQuestions = null,$_HasPublicMessages = null,$_BuyItNowAvailable = null,$_SellerBusinessType = null,$_MinimumBestOfferPrice = null,$_MinimumBestOfferMessage = null,$_LocalListingDistance = null,$_TCROriginalItemID = null,$_ViewItemURLForNaturalSearch = null,$_PayPerLeadEnabled = null,$_BestOfferAutoAcceptPrice = null,$_any = null)
	{
		parent::__construct(array('Adult'=>$_Adult,'BindingAuction'=>$_BindingAuction,'CheckoutEnabled'=>$_CheckoutEnabled,'ConvertedBuyItNowPrice'=>$_ConvertedBuyItNowPrice,'ConvertedStartPrice'=>$_ConvertedStartPrice,'ConvertedReservePrice'=>$_ConvertedReservePrice,'HasReservePrice'=>$_HasReservePrice,'RelistedItemID'=>$_RelistedItemID,'SecondChanceOriginalItemID'=>$_SecondChanceOriginalItemID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'ViewItemURL'=>$_ViewItemURL,'HasUnansweredQuestions'=>$_HasUnansweredQuestions,'HasPublicMessages'=>$_HasPublicMessages,'BuyItNowAvailable'=>$_BuyItNowAvailable,'SellerBusinessType'=>$_SellerBusinessType,'MinimumBestOfferPrice'=>$_MinimumBestOfferPrice,'MinimumBestOfferMessage'=>$_MinimumBestOfferMessage,'LocalListingDistance'=>$_LocalListingDistance,'TCROriginalItemID'=>$_TCROriginalItemID,'ViewItemURLForNaturalSearch'=>$_ViewItemURLForNaturalSearch,'PayPerLeadEnabled'=>$_PayPerLeadEnabled,'BestOfferAutoAcceptPrice'=>$_BestOfferAutoAcceptPrice,'any'=>$_any));
	}
	/**
	 * Set Adult
	 * @param boolean Adult
	 * @return boolean
	 */
	public function setAdult($_Adult)
	{
		return ($this->Adult = $_Adult);
	}
	/**
	 * Get Adult
	 * @return boolean
	 */
	public function getAdult()
	{
		return $this->Adult;
	}
	/**
	 * Set BindingAuction
	 * @param boolean BindingAuction
	 * @return boolean
	 */
	public function setBindingAuction($_BindingAuction)
	{
		return ($this->BindingAuction = $_BindingAuction);
	}
	/**
	 * Get BindingAuction
	 * @return boolean
	 */
	public function getBindingAuction()
	{
		return $this->BindingAuction;
	}
	/**
	 * Set CheckoutEnabled
	 * @param boolean CheckoutEnabled
	 * @return boolean
	 */
	public function setCheckoutEnabled($_CheckoutEnabled)
	{
		return ($this->CheckoutEnabled = $_CheckoutEnabled);
	}
	/**
	 * Get CheckoutEnabled
	 * @return boolean
	 */
	public function getCheckoutEnabled()
	{
		return $this->CheckoutEnabled;
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
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedBuyItNowPrice()
	{
		return $this->ConvertedBuyItNowPrice;
	}
	/**
	 * Set ConvertedStartPrice
	 * @param AmountType ConvertedStartPrice
	 * @return AmountType
	 */
	public function setConvertedStartPrice($_ConvertedStartPrice)
	{
		return ($this->ConvertedStartPrice = $_ConvertedStartPrice);
	}
	/**
	 * Get ConvertedStartPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedStartPrice()
	{
		return $this->ConvertedStartPrice;
	}
	/**
	 * Set ConvertedReservePrice
	 * @param AmountType ConvertedReservePrice
	 * @return AmountType
	 */
	public function setConvertedReservePrice($_ConvertedReservePrice)
	{
		return ($this->ConvertedReservePrice = $_ConvertedReservePrice);
	}
	/**
	 * Get ConvertedReservePrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedReservePrice()
	{
		return $this->ConvertedReservePrice;
	}
	/**
	 * Set HasReservePrice
	 * @param boolean HasReservePrice
	 * @return boolean
	 */
	public function setHasReservePrice($_HasReservePrice)
	{
		return ($this->HasReservePrice = $_HasReservePrice);
	}
	/**
	 * Get HasReservePrice
	 * @return boolean
	 */
	public function getHasReservePrice()
	{
		return $this->HasReservePrice;
	}
	/**
	 * Set RelistedItemID
	 * @param ItemIDType RelistedItemID
	 * @return ItemIDType
	 */
	public function setRelistedItemID($_RelistedItemID)
	{
		return ($this->RelistedItemID = EbayTradingTypeItemIDType::valueIsValid($_RelistedItemID)?$_RelistedItemID:null);
	}
	/**
	 * Get RelistedItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getRelistedItemID()
	{
		return $this->RelistedItemID;
	}
	/**
	 * Set SecondChanceOriginalItemID
	 * @param ItemIDType SecondChanceOriginalItemID
	 * @return ItemIDType
	 */
	public function setSecondChanceOriginalItemID($_SecondChanceOriginalItemID)
	{
		return ($this->SecondChanceOriginalItemID = EbayTradingTypeItemIDType::valueIsValid($_SecondChanceOriginalItemID)?$_SecondChanceOriginalItemID:null);
	}
	/**
	 * Get SecondChanceOriginalItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getSecondChanceOriginalItemID()
	{
		return $this->SecondChanceOriginalItemID;
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
	 * Set ViewItemURL
	 * @param anyURI ViewItemURL
	 * @return anyURI
	 */
	public function setViewItemURL($_ViewItemURL)
	{
		return ($this->ViewItemURL = $_ViewItemURL);
	}
	/**
	 * Get ViewItemURL
	 * @return anyURI
	 */
	public function getViewItemURL()
	{
		return $this->ViewItemURL;
	}
	/**
	 * Set HasUnansweredQuestions
	 * @param boolean HasUnansweredQuestions
	 * @return boolean
	 */
	public function setHasUnansweredQuestions($_HasUnansweredQuestions)
	{
		return ($this->HasUnansweredQuestions = $_HasUnansweredQuestions);
	}
	/**
	 * Get HasUnansweredQuestions
	 * @return boolean
	 */
	public function getHasUnansweredQuestions()
	{
		return $this->HasUnansweredQuestions;
	}
	/**
	 * Set HasPublicMessages
	 * @param boolean HasPublicMessages
	 * @return boolean
	 */
	public function setHasPublicMessages($_HasPublicMessages)
	{
		return ($this->HasPublicMessages = $_HasPublicMessages);
	}
	/**
	 * Get HasPublicMessages
	 * @return boolean
	 */
	public function getHasPublicMessages()
	{
		return $this->HasPublicMessages;
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
	 * Set SellerBusinessType
	 * @param SellerBusinessCodeType SellerBusinessType
	 * @return SellerBusinessCodeType
	 */
	public function setSellerBusinessType($_SellerBusinessType)
	{
		return ($this->SellerBusinessType = EbayTradingTypeSellerBusinessCodeType::valueIsValid($_SellerBusinessType)?$_SellerBusinessType:null);
	}
	/**
	 * Get SellerBusinessType
	 * @return EbayTradingTypeSellerBusinessCodeType
	 */
	public function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * Set MinimumBestOfferPrice
	 * @param AmountType MinimumBestOfferPrice
	 * @return AmountType
	 */
	public function setMinimumBestOfferPrice($_MinimumBestOfferPrice)
	{
		return ($this->MinimumBestOfferPrice = $_MinimumBestOfferPrice);
	}
	/**
	 * Get MinimumBestOfferPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getMinimumBestOfferPrice()
	{
		return $this->MinimumBestOfferPrice;
	}
	/**
	 * Set MinimumBestOfferMessage
	 * @param string MinimumBestOfferMessage
	 * @return string
	 */
	public function setMinimumBestOfferMessage($_MinimumBestOfferMessage)
	{
		return ($this->MinimumBestOfferMessage = $_MinimumBestOfferMessage);
	}
	/**
	 * Get MinimumBestOfferMessage
	 * @return string
	 */
	public function getMinimumBestOfferMessage()
	{
		return $this->MinimumBestOfferMessage;
	}
	/**
	 * Set LocalListingDistance
	 * @param string LocalListingDistance
	 * @return string
	 */
	public function setLocalListingDistance($_LocalListingDistance)
	{
		return ($this->LocalListingDistance = $_LocalListingDistance);
	}
	/**
	 * Get LocalListingDistance
	 * @return string
	 */
	public function getLocalListingDistance()
	{
		return $this->LocalListingDistance;
	}
	/**
	 * Set TCROriginalItemID
	 * @param ItemIDType TCROriginalItemID
	 * @return ItemIDType
	 */
	public function setTCROriginalItemID($_TCROriginalItemID)
	{
		return ($this->TCROriginalItemID = EbayTradingTypeItemIDType::valueIsValid($_TCROriginalItemID)?$_TCROriginalItemID:null);
	}
	/**
	 * Get TCROriginalItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getTCROriginalItemID()
	{
		return $this->TCROriginalItemID;
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
	 * Set PayPerLeadEnabled
	 * @param boolean PayPerLeadEnabled
	 * @return boolean
	 */
	public function setPayPerLeadEnabled($_PayPerLeadEnabled)
	{
		return ($this->PayPerLeadEnabled = $_PayPerLeadEnabled);
	}
	/**
	 * Get PayPerLeadEnabled
	 * @return boolean
	 */
	public function getPayPerLeadEnabled()
	{
		return $this->PayPerLeadEnabled;
	}
	/**
	 * Set BestOfferAutoAcceptPrice
	 * @param AmountType BestOfferAutoAcceptPrice
	 * @return AmountType
	 */
	public function setBestOfferAutoAcceptPrice($_BestOfferAutoAcceptPrice)
	{
		return ($this->BestOfferAutoAcceptPrice = $_BestOfferAutoAcceptPrice);
	}
	/**
	 * Get BestOfferAutoAcceptPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getBestOfferAutoAcceptPrice()
	{
		return $this->BestOfferAutoAcceptPrice;
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