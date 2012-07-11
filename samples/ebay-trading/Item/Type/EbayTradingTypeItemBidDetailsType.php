<?php
/**
 * Class file for EbayTradingTypeItemBidDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemBidDetailsType
 * Documentation : Contains bidding details information of a user on an item.
 * @date 04/07/2012
 */
class EbayTradingTypeItemBidDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an item listed on the eBay site. For GetAllBidders, an anonymous user ID is returned. <br><br> Since a bidder's user info is anonymous, this tag will contain the real ID value only for that bidder, and the seller of an item that the user is bidding on. For all other users, the real ID value will be replaced with the anonymous value, according to these rules: <br><br> When bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br> Note that in this format, the anonymous bidder ID stays the same for every auction. <br><br> (GetMyeBayBuying only) when bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. <br><br> When bidding on items listed on the the UK and AU sites: UserID is replaced with the value "Bidder X" where X is a number indicating the order of that user's first bid. For example, if the user was the third bidder, UserID = Bidder 3. <br> Note that in this format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1", not "Bidder 3". <br><br> (GetMyeBayBuying only) when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder". <br><br> (GetBestOffers only) - all sites: The last part of the user ID is replaced with asterisks for users that submit best offers on an item. The seller of the item will be able to see the full UserID. See <a href="http://developer.ebay.com/DevZone/XML/docs/WebHelp/index.htm?context=eBay_XML_API&topic=AnonymousUserInfo">Working with Anonymous User Information</a> in the eBay Web Services Guide for more information.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric ID for the category that the item belongs to.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of bids the user placed on the item.
	 * @var int
	 */
	public $BidCount;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay ID of the seller who listed the item. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous, this tag will be returned with the anonymous value "Seller X", where X indicates where the seller falls in the sequence of sellers that the user has purchased items from. For example, if the seller is the third seller that the user has purchased items from, the value "Seller 3" is returned.
	 * @var EbayTradingTypeUserIDType
	 */
	public $SellerID;
	/**
	 * The LastBidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time at which the user placed the last bid on the item.
	 * @var dateTime
	 */
	public $LastBidTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string CategoryID
	 * @param int BidCount
	 * @param EbayTradingTypeUserIDType SellerID
	 * @param dateTime LastBidTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemBidDetailsType
	 */
	public function __construct($_ItemID = null,$_CategoryID = null,$_BidCount = null,$_SellerID = null,$_LastBidTime = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'CategoryID'=>$_CategoryID,'BidCount'=>$_BidCount,'SellerID'=>$_SellerID,'LastBidTime'=>$_LastBidTime,'any'=>$_any));
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
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
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
	 * Set SellerID
	 * @param UserIDType SellerID
	 * @return UserIDType
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = EbayTradingTypeUserIDType::valueIsValid($_SellerID)?$_SellerID:null);
	}
	/**
	 * Get SellerID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set LastBidTime
	 * @param dateTime LastBidTime
	 * @return dateTime
	 */
	public function setLastBidTime($_LastBidTime)
	{
		return ($this->LastBidTime = $_LastBidTime);
	}
	/**
	 * Get LastBidTime
	 * @return dateTime
	 */
	public function getLastBidTime()
	{
		return $this->LastBidTime;
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