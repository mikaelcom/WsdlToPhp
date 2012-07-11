<?php
/**
 * Class file for EbayTradingTypeOfferType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOfferType
 * Documentation : Contains information pertaining to an offer made on an item listing and the current bidding or purchase state of the listing.
 * @date 04/07/2012
 */
class EbayTradingTypeOfferType extends EbayTradingWsdlClass
{
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of offer being made on the specified listing. If the item is best-offer enabled and the buyer makes a best offer (or counter-offer, etc.), then after the <b>PlaceOffer</b> call, the buyer can get the status of the best offer (and of a possible seller-counter-offer, etc.) using the <b>GetBestOffers</b> call. See the Trading Web Services Guide for information about best-offer enabled items and about <b>GetBestOffers</b>.
	 * @var EbayTradingTypeBidActionCodeType
	 */
	public $Action;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric ID for the currency type for the auction. Valid values are enumerated in the <b>CurrencyCodeType</b> code list.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an item listed on the eBay site. Returned by eBay when the item is created.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The MaxBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of the offer placed. For auction listings, the amount bid on the item (subject to outbid by other buyers). For fixed-price listings, the fixed sale price at which the item is purchased. For auction listings with an active Buy It Now option, this amount will be either the Buy It Now price for purchase or the amount of a bid, depending on the offer type (as specified in <b>Action</b>). For <b>PlaceOffer</b>, the <b>CurrencyID</b> attribute is ignored if provided. Regarding Value-Added Tax (VAT): Even if VAT applies, you do not need to add VAT to the <b>MaxBid</b> value. If VAT applies to the listing, the seller can specify a VAT percent value when they list the item.
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxBid;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of items from the specified listing the user tendering the offer intends to purchase, bid on, or make a best offer on. For auctions, the value may not exceed one. For multi-item listings, must be greater than zero and not exceeding the number of items offered for sale in the listing.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The SecondChanceEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the user's preference to accept second chance offers. If true, the user is willing to be the recipient of second chance offers.
	 * @var boolean
	 */
	public $SecondChanceEnabled;
	/**
	 * The SiteCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID identifying the currency in which the localized offer amounts are expressed.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $SiteCurrency;
	/**
	 * The TimeBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time the offer or bid was placed.
	 * @var dateTime
	 */
	public $TimeBid;
	/**
	 * The HighestBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount the highest bidder has bid on the item. Applicable to only auction listings where there is progressive bidding and winning bidders are determined based on the highest bid.
	 * @var EbayTradingTypeAmountType
	 */
	public $HighestBid;
	/**
	 * The ConvertedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Localized amount for the item's current price.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedPrice;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the order line item (transaction). An order line item is created when a winning bidder commits to purchasing an item.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The User
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Bidder information. See the schema documentation for <b>UserType</b> for details on its properties and their meanings.
	 * @var EbayTradingTypeUserType
	 */
	public $User;
	/**
	 * The UserConsent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, confirms that the bidder read and agrees to eBay's privacy policy. Applies if the subject item is in a category that requires user consent. If user consent (that is, confirmation that a bidder read and agrees to eBay's privacy policy) is required for a category that the subject item is in, this value must be true for a bid to occur.
	 * @var boolean
	 */
	public $UserConsent;
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of offers the user has made on the item.
	 * @var int
	 */
	public $BidCount;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A message from the buyer to the seller. Applies if the buyer is using <b>PlaceOffer</b> to perform a best-offer-related action (best offer, counter-offer, etc.).
	 * @var string
	 */
	public $Message;
	/**
	 * The BestOfferID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of a best offer on an item. Must be specified as input to <b>PlaceOffer</b> only if a buyer is accepting or declining a seller's counter offer (and is not required for a buyer's offer or counter offer).
	 * @var EbayTradingTypeBestOfferIDType
	 */
	public $BestOfferID;
	/**
	 * The MyMaxBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum bid placed by the user making the call.
	 * @var EbayTradingTypeAmountType
	 */
	public $MyMaxBid;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeBidActionCodeType Action
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeAmountType MaxBid
	 * @param int Quantity
	 * @param boolean SecondChanceEnabled
	 * @param EbayTradingTypeCurrencyCodeType SiteCurrency
	 * @param dateTime TimeBid
	 * @param EbayTradingTypeAmountType HighestBid
	 * @param EbayTradingTypeAmountType ConvertedPrice
	 * @param string TransactionID
	 * @param EbayTradingTypeUserType User
	 * @param boolean UserConsent
	 * @param int BidCount
	 * @param string Message
	 * @param EbayTradingTypeBestOfferIDType BestOfferID
	 * @param EbayTradingTypeAmountType MyMaxBid
	 * @param DOMDocument any
	 * @return EbayTradingTypeOfferType
	 */
	public function __construct($_Action = null,$_Currency = null,$_ItemID = null,$_MaxBid = null,$_Quantity = null,$_SecondChanceEnabled = null,$_SiteCurrency = null,$_TimeBid = null,$_HighestBid = null,$_ConvertedPrice = null,$_TransactionID = null,$_User = null,$_UserConsent = null,$_BidCount = null,$_Message = null,$_BestOfferID = null,$_MyMaxBid = null,$_any = null)
	{
		parent::__construct(array('Action'=>$_Action,'Currency'=>$_Currency,'ItemID'=>$_ItemID,'MaxBid'=>$_MaxBid,'Quantity'=>$_Quantity,'SecondChanceEnabled'=>$_SecondChanceEnabled,'SiteCurrency'=>$_SiteCurrency,'TimeBid'=>$_TimeBid,'HighestBid'=>$_HighestBid,'ConvertedPrice'=>$_ConvertedPrice,'TransactionID'=>$_TransactionID,'User'=>$_User,'UserConsent'=>$_UserConsent,'BidCount'=>$_BidCount,'Message'=>$_Message,'BestOfferID'=>$_BestOfferID,'MyMaxBid'=>$_MyMaxBid,'any'=>$_any));
	}
	/**
	 * Set Action
	 * @param BidActionCodeType Action
	 * @return BidActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeBidActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeBidActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
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
	 * Set MaxBid
	 * @param AmountType MaxBid
	 * @return AmountType
	 */
	public function setMaxBid($_MaxBid)
	{
		return ($this->MaxBid = $_MaxBid);
	}
	/**
	 * Get MaxBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getMaxBid()
	{
		return $this->MaxBid;
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
	 * Set SecondChanceEnabled
	 * @param boolean SecondChanceEnabled
	 * @return boolean
	 */
	public function setSecondChanceEnabled($_SecondChanceEnabled)
	{
		return ($this->SecondChanceEnabled = $_SecondChanceEnabled);
	}
	/**
	 * Get SecondChanceEnabled
	 * @return boolean
	 */
	public function getSecondChanceEnabled()
	{
		return $this->SecondChanceEnabled;
	}
	/**
	 * Set SiteCurrency
	 * @param CurrencyCodeType SiteCurrency
	 * @return CurrencyCodeType
	 */
	public function setSiteCurrency($_SiteCurrency)
	{
		return ($this->SiteCurrency = EbayTradingTypeCurrencyCodeType::valueIsValid($_SiteCurrency)?$_SiteCurrency:null);
	}
	/**
	 * Get SiteCurrency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getSiteCurrency()
	{
		return $this->SiteCurrency;
	}
	/**
	 * Set TimeBid
	 * @param dateTime TimeBid
	 * @return dateTime
	 */
	public function setTimeBid($_TimeBid)
	{
		return ($this->TimeBid = $_TimeBid);
	}
	/**
	 * Get TimeBid
	 * @return dateTime
	 */
	public function getTimeBid()
	{
		return $this->TimeBid;
	}
	/**
	 * Set HighestBid
	 * @param AmountType HighestBid
	 * @return AmountType
	 */
	public function setHighestBid($_HighestBid)
	{
		return ($this->HighestBid = $_HighestBid);
	}
	/**
	 * Get HighestBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getHighestBid()
	{
		return $this->HighestBid;
	}
	/**
	 * Set ConvertedPrice
	 * @param AmountType ConvertedPrice
	 * @return AmountType
	 */
	public function setConvertedPrice($_ConvertedPrice)
	{
		return ($this->ConvertedPrice = $_ConvertedPrice);
	}
	/**
	 * Get ConvertedPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedPrice()
	{
		return $this->ConvertedPrice;
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
	 * Set User
	 * @param UserType User
	 * @return UserType
	 */
	public function setUser($_User)
	{
		return ($this->User = $_User);
	}
	/**
	 * Get User
	 * @return EbayTradingTypeUserType
	 */
	public function getUser()
	{
		return $this->User;
	}
	/**
	 * Set UserConsent
	 * @param boolean UserConsent
	 * @return boolean
	 */
	public function setUserConsent($_UserConsent)
	{
		return ($this->UserConsent = $_UserConsent);
	}
	/**
	 * Get UserConsent
	 * @return boolean
	 */
	public function getUserConsent()
	{
		return $this->UserConsent;
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
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set BestOfferID
	 * @param BestOfferIDType BestOfferID
	 * @return BestOfferIDType
	 */
	public function setBestOfferID($_BestOfferID)
	{
		return ($this->BestOfferID = EbayTradingTypeBestOfferIDType::valueIsValid($_BestOfferID)?$_BestOfferID:null);
	}
	/**
	 * Get BestOfferID
	 * @return EbayTradingTypeBestOfferIDType
	 */
	public function getBestOfferID()
	{
		return $this->BestOfferID;
	}
	/**
	 * Set MyMaxBid
	 * @param AmountType MyMaxBid
	 * @return AmountType
	 */
	public function setMyMaxBid($_MyMaxBid)
	{
		return ($this->MyMaxBid = $_MyMaxBid);
	}
	/**
	 * Get MyMaxBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getMyMaxBid()
	{
		return $this->MyMaxBid;
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