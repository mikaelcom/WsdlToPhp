<?php
/**
 * Class file for EbayFindTypeSellingStatus
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeSellingStatus
 * Documentation : Selling details pertaining to the respective item.
 * @date 04/07/2012
 */
class EbayFindTypeSellingStatus extends EbayFindWsdlClass
{
	/**
	 * The currentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current price of the item given in the currency of the site on which the item is listed. That is, currentPrice is returned in the original listing currency. <br><br> For competitive-bid item listings, currentPrice is the current minimum bid price if the listing has no bids, or the current high bid if the listing has bids. A Buy It Now price has no effect on currentPrice. <br><br> For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad Format (AdFormat), and Classified Ad (Classified) listings, currentPrice is the current fixed price.
	 * @var EbayFindTypeAmount
	 */
	public $currentPrice;
	/**
	 * The convertedCurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing's current price converted to the currency of the site specified in the find request (globalId).
	 * @var EbayFindTypeAmount
	 */
	public $convertedCurrentPrice;
	/**
	 * The bidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of bids that have been placed on the item.
	 * @var int
	 */
	public $bidCount;
	/**
	 * The sellingState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the listing's status in eBay's processing workflow. If an item's EndTime is in the past, but there are no details about the buyer or high bidder (and the user is not anonymous), you can use sellingState information to determine whether eBay has finished processing the listing. <dl> <dt> <strong>sellingState values:</strong> </dt> <dt> Active </dt> <dd> The listing is still live. It is also possible that the auction has recently ended, but eBay has not completed the final processing (e.g., the high bidder is still being determined). </dd> <dt> Canceled </dt> <dd> The listing has been canceled by either the seller or eBay. </dd> <dt> Ended </dt> <dd> The listing has ended and eBay has completed the processing of the sale (if any). </dd> <dt> EndedWithSales </dt> <dd> The listing has been ended with sales. </dd> <dt> EndedWithoutSales </dt> <dd> The listing has been ended without sales. </dd> </dl>
	 * @var token
	 */
	public $sellingState;
	/**
	 * The timeLeft
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). For listings that have ended, the time left is PT0S (zero seconds). See the "duration" type for information about this time format.
	 * @var duration
	 */
	public $timeLeft;
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
	 * @param EbayFindTypeAmount currentPrice
	 * @param EbayFindTypeAmount convertedCurrentPrice
	 * @param int bidCount
	 * @param token sellingState
	 * @param duration timeLeft
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeSellingStatus
	 */
	public function __construct($_currentPrice = null,$_convertedCurrentPrice = null,$_bidCount = null,$_sellingState = null,$_timeLeft = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('currentPrice'=>$_currentPrice,'convertedCurrentPrice'=>$_convertedCurrentPrice,'bidCount'=>$_bidCount,'sellingState'=>$_sellingState,'timeLeft'=>$_timeLeft,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set currentPrice
	 * @param Amount currentPrice
	 * @return Amount
	 */
	public function setCurrentPrice($_currentPrice)
	{
		return ($this->currentPrice = $_currentPrice);
	}
	/**
	 * Get currentPrice
	 * @return EbayFindTypeAmount
	 */
	public function getCurrentPrice()
	{
		return $this->currentPrice;
	}
	/**
	 * Set convertedCurrentPrice
	 * @param Amount convertedCurrentPrice
	 * @return Amount
	 */
	public function setConvertedCurrentPrice($_convertedCurrentPrice)
	{
		return ($this->convertedCurrentPrice = $_convertedCurrentPrice);
	}
	/**
	 * Get convertedCurrentPrice
	 * @return EbayFindTypeAmount
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->convertedCurrentPrice;
	}
	/**
	 * Set bidCount
	 * @param int bidCount
	 * @return int
	 */
	public function setBidCount($_bidCount)
	{
		return ($this->bidCount = $_bidCount);
	}
	/**
	 * Get bidCount
	 * @return int
	 */
	public function getBidCount()
	{
		return $this->bidCount;
	}
	/**
	 * Set sellingState
	 * @param token sellingState
	 * @return token
	 */
	public function setSellingState($_sellingState)
	{
		return ($this->sellingState = $_sellingState);
	}
	/**
	 * Get sellingState
	 * @return token
	 */
	public function getSellingState()
	{
		return $this->sellingState;
	}
	/**
	 * Set timeLeft
	 * @param duration timeLeft
	 * @return duration
	 */
	public function setTimeLeft($_timeLeft)
	{
		return ($this->timeLeft = $_timeLeft);
	}
	/**
	 * Get timeLeft
	 * @return duration
	 */
	public function getTimeLeft()
	{
		return $this->timeLeft;
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