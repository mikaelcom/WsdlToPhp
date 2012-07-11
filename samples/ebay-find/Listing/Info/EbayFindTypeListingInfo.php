<?php
/**
 * Class file for EbayFindTypeListingInfo
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeListingInfo
 * Documentation : Contains information specific to the item listing.
 * @date 04/07/2012
 */
class EbayFindTypeListingInfo extends EbayFindWsdlClass
{
	/**
	 * The bestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shows whether or not the seller will accept a best offer for the associated item. Best Offer allows a buyer to make a lower-priced binding offer on a fixed price item. Buyers cannot see how many offers have been made (only the seller can see this information). To make a best offer on a listing, use the eBay Web site.
	 * @var boolean
	 */
	public $bestOfferEnabled;
	/**
	 * The buyItNowAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applies only to auction listings that were listed with a Buy It Now price. Buy It Now lets a user purchase the item at a fixed price, effectively ending the auction. On most sites, the Buy It Now option is removed (and this value returns false) once a valid bid is made on the associated item (a valid bid could be a bid above the reserve price). <br><br> buyItNowAvailable will return "false" if the listing type is anything but "AuctionWithBIN". Please ignore buyItNowAvailable for fixed-price listings.
	 * @var boolean
	 */
	public $buyItNowAvailable;
	/**
	 * The buyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Buy It Now Price of the item (if any), in the currency of the site on which the item was listed. You can use this field to determine if the item was originally listed with Buy It Now, even if the Buy It Now option is no longer available for the item. <br><br> For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad Format (AdFormat), and Classified Ad (Classified) listings, currentPrice is the current fixed price. <br><br> Only returned if an item was listed with Buy It Now.
	 * @var EbayFindTypeAmount
	 */
	public $buyItNowPrice;
	/**
	 * The convertedBuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing's Buy It Now Price (if any), converted into the currency of the site to which you sent your search request. For active items, refresh this value every 24 hours to pick up changes in conversion rates (if this value has been converted). <br><br> Price fields are returned as doubles, not necessarily in the traditional monetary format of the site's country. For example, a US Dollar value might be returned as 3.880001 instead of 3.88. <br><br> Only returned if an item was listed with Buy It Now.
	 * @var EbayFindTypeAmount
	 */
	public $convertedBuyItNowPrice;
	/**
	 * The startTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp that eBay recorded as the moment the listing was made available. This value is returned in GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the time format, and for details on converting to and from the GMT time zone. Note that it is possible for startTime to be different from the value returned by GetSingleItem.
	 * @var dateTime
	 */
	public $startTime;
	/**
	 * The endTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp specifying when the listing is scheduled to end, or the actual end time if the item listing has ended. This value is returned in GMT, the ISO 8601 date and time format (YYYY-MM- DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about the time format, and for details on converting to and from the GMT time zone. <br><br> <span class="tablenote"><strong>Note:</strong> For items that are "Good Till Canceled," this value is 5 minutes later than the actual end time of the item. This difference in time is intended to facilitate the renewal of these items' end times (which occurs every 30 days). </span>
	 * @var dateTime
	 */
	public $endTime;
	/**
	 * The listingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The format of the listing, such as online auction, fixed price, or advertisement. <dl> <dt> <strong>listingType values:</strong> </dt> <dt> AdFormat </dt> <dd> Advertisement to solicit inquiries on listings such as real estate. Permits no bidding on that item, service, or property. To express interest, a buyer fills out a contact form that eBay forwards to the seller as a lead. This format does not enable buyers and sellers to transact online through eBay and eBay Feedback is not available for ad format listings. </dd> <dt> Auction </dt> <dd> Competitive-bid online auction format. Buyers engage in competitive bidding, although Buy It Now may be offered as long as no valid bids have been placed. Online auctions are listed on eBay.com; they can also be listed in a seller's eBay Store if the seller is a Store owner. </dd> <dt> AuctionWithBIN </dt> <dd> Same as Auction format, but Buy It Now is enabled. AuctionWithBIN changes to Auction if a valid bid has been placed on the item. Valid bids include bids that are equal to or above any specified reserve price. </dd> <dt> Classified </dt> <dd> Classified Ads connect buyers and sellers, who then complete the sale outside of eBay. This format does not enable buyers and sellers to transact online through eBay and eBay Feedback is not available for these listing types. </dd> <dt> FixedPrice </dt> <dd> A fixed-price listing. Auction-style bidding is not allowed. On some sites, this auction format is also known as "Buy It Now Only" (not to be confused with the Buy It Now option available with competitive- bidding auctions). Fixed-price listings appear on eBay.com; they can also be listed in a seller's eBay Store if the seller is a Store owner. </dd> <dt> StoreInventory </dt> <dd> A fixed-price format for eBay Store sellers. Store Inventory listings appear after other listings in regular browse and search item listings on eBay. Store items have a lower Insertion Fee and longer listing durations. This selling type can only be specified by sellers who have an eBay Store. Store Inventory listings are listed on eBay.com as well as in the seller's eBay Store. </dd> </dl>
	 * @var token
	 */
	public $listingType;
	/**
	 * The gift
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, a generic gift icon displays next the listing's title in search and browse pages.
	 * @var boolean
	 */
	public $gift;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean bestOfferEnabled
	 * @param boolean buyItNowAvailable
	 * @param EbayFindTypeAmount buyItNowPrice
	 * @param EbayFindTypeAmount convertedBuyItNowPrice
	 * @param dateTime startTime
	 * @param dateTime endTime
	 * @param token listingType
	 * @param boolean gift
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeListingInfo
	 */
	public function __construct($_bestOfferEnabled = null,$_buyItNowAvailable = null,$_buyItNowPrice = null,$_convertedBuyItNowPrice = null,$_startTime = null,$_endTime = null,$_listingType = null,$_gift = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('bestOfferEnabled'=>$_bestOfferEnabled,'buyItNowAvailable'=>$_buyItNowAvailable,'buyItNowPrice'=>$_buyItNowPrice,'convertedBuyItNowPrice'=>$_convertedBuyItNowPrice,'startTime'=>$_startTime,'endTime'=>$_endTime,'listingType'=>$_listingType,'gift'=>$_gift,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set bestOfferEnabled
	 * @param boolean bestOfferEnabled
	 * @return boolean
	 */
	public function setBestOfferEnabled($_bestOfferEnabled)
	{
		return ($this->bestOfferEnabled = $_bestOfferEnabled);
	}
	/**
	 * Get bestOfferEnabled
	 * @return boolean
	 */
	public function getBestOfferEnabled()
	{
		return $this->bestOfferEnabled;
	}
	/**
	 * Set buyItNowAvailable
	 * @param boolean buyItNowAvailable
	 * @return boolean
	 */
	public function setBuyItNowAvailable($_buyItNowAvailable)
	{
		return ($this->buyItNowAvailable = $_buyItNowAvailable);
	}
	/**
	 * Get buyItNowAvailable
	 * @return boolean
	 */
	public function getBuyItNowAvailable()
	{
		return $this->buyItNowAvailable;
	}
	/**
	 * Set buyItNowPrice
	 * @param Amount buyItNowPrice
	 * @return Amount
	 */
	public function setBuyItNowPrice($_buyItNowPrice)
	{
		return ($this->buyItNowPrice = $_buyItNowPrice);
	}
	/**
	 * Get buyItNowPrice
	 * @return EbayFindTypeAmount
	 */
	public function getBuyItNowPrice()
	{
		return $this->buyItNowPrice;
	}
	/**
	 * Set convertedBuyItNowPrice
	 * @param Amount convertedBuyItNowPrice
	 * @return Amount
	 */
	public function setConvertedBuyItNowPrice($_convertedBuyItNowPrice)
	{
		return ($this->convertedBuyItNowPrice = $_convertedBuyItNowPrice);
	}
	/**
	 * Get convertedBuyItNowPrice
	 * @return EbayFindTypeAmount
	 */
	public function getConvertedBuyItNowPrice()
	{
		return $this->convertedBuyItNowPrice;
	}
	/**
	 * Set startTime
	 * @param dateTime startTime
	 * @return dateTime
	 */
	public function setStartTime($_startTime)
	{
		return ($this->startTime = $_startTime);
	}
	/**
	 * Get startTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->startTime;
	}
	/**
	 * Set endTime
	 * @param dateTime endTime
	 * @return dateTime
	 */
	public function setEndTime($_endTime)
	{
		return ($this->endTime = $_endTime);
	}
	/**
	 * Get endTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->endTime;
	}
	/**
	 * Set listingType
	 * @param token listingType
	 * @return token
	 */
	public function setListingType($_listingType)
	{
		return ($this->listingType = $_listingType);
	}
	/**
	 * Get listingType
	 * @return token
	 */
	public function getListingType()
	{
		return $this->listingType;
	}
	/**
	 * Set gift
	 * @param boolean gift
	 * @return boolean
	 */
	public function setGift($_gift)
	{
		return ($this->gift = $_gift);
	}
	/**
	 * Get gift
	 * @return boolean
	 */
	public function getGift()
	{
		return $this->gift;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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