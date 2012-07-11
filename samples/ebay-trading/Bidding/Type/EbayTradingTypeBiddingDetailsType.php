<?php
/**
 * Class file for EbayTradingTypeBiddingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBiddingDetailsType
 * Documentation : Contains detailed information about a bid.
 * @date 04/07/2012
 */
class EbayTradingTypeBiddingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ConvertedMaxBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the amount in MaxBidAmount, in the currency indicated by SiteCurrency. For active items, refresh the listing's data every 24 hours to pick up the current conversion rates. Under conditions where this value would be N/A on the eBay site, this element is not returned at all.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedMaxBid;
	/**
	 * The MaxBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the maximum amount the user has agreed to pay for the item when the user last submitted a bid. Under conditions where this value would be N/A on the eBay site, this element is not returned at all.
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxBid;
	/**
	 * The QuantityBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items from the listing the user agreed to purchase with a bid. For single-item listings, always 1. For multi-item (Dutch) listings, the value will be between 1 and the number of items offered in the auction, indicating the number of items purchased so far. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var int
	 */
	public $QuantityBid;
	/**
	 * The QuantityWon
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used mainly for multi-item auctions (Dutch). For an active listing, indicates the number of items the user stands to win if their bid wins. For a listing that has ended, indicates the number of items the user actually won. In both cases, the number may be less than that returned in QuantityBid, the user with the lowest winning bid in a Dutch auction might not win all the items on which they bid. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var int
	 */
	public $QuantityWon;
	/**
	 * The Winning
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (GetMyeBay only) Indicates whether the user is the current high bidder in a currently active listing.
	 * @var boolean
	 */
	public $Winning;
	/**
	 * The BidAssistant
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the current bid was placed by BidAssistant. Only returns if true.
	 * @var boolean
	 */
	public $BidAssistant;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType ConvertedMaxBid
	 * @param EbayTradingTypeAmountType MaxBid
	 * @param int QuantityBid
	 * @param int QuantityWon
	 * @param boolean Winning
	 * @param boolean BidAssistant
	 * @param DOMDocument any
	 * @return EbayTradingTypeBiddingDetailsType
	 */
	public function __construct($_ConvertedMaxBid = null,$_MaxBid = null,$_QuantityBid = null,$_QuantityWon = null,$_Winning = null,$_BidAssistant = null,$_any = null)
	{
		parent::__construct(array('ConvertedMaxBid'=>$_ConvertedMaxBid,'MaxBid'=>$_MaxBid,'QuantityBid'=>$_QuantityBid,'QuantityWon'=>$_QuantityWon,'Winning'=>$_Winning,'BidAssistant'=>$_BidAssistant,'any'=>$_any));
	}
	/**
	 * Set ConvertedMaxBid
	 * @param AmountType ConvertedMaxBid
	 * @return AmountType
	 */
	public function setConvertedMaxBid($_ConvertedMaxBid)
	{
		return ($this->ConvertedMaxBid = $_ConvertedMaxBid);
	}
	/**
	 * Get ConvertedMaxBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedMaxBid()
	{
		return $this->ConvertedMaxBid;
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
	 * Set QuantityBid
	 * @param int QuantityBid
	 * @return int
	 */
	public function setQuantityBid($_QuantityBid)
	{
		return ($this->QuantityBid = $_QuantityBid);
	}
	/**
	 * Get QuantityBid
	 * @return int
	 */
	public function getQuantityBid()
	{
		return $this->QuantityBid;
	}
	/**
	 * Set QuantityWon
	 * @param int QuantityWon
	 * @return int
	 */
	public function setQuantityWon($_QuantityWon)
	{
		return ($this->QuantityWon = $_QuantityWon);
	}
	/**
	 * Get QuantityWon
	 * @return int
	 */
	public function getQuantityWon()
	{
		return $this->QuantityWon;
	}
	/**
	 * Set Winning
	 * @param boolean Winning
	 * @return boolean
	 */
	public function setWinning($_Winning)
	{
		return ($this->Winning = $_Winning);
	}
	/**
	 * Get Winning
	 * @return boolean
	 */
	public function getWinning()
	{
		return $this->Winning;
	}
	/**
	 * Set BidAssistant
	 * @param boolean BidAssistant
	 * @return boolean
	 */
	public function setBidAssistant($_BidAssistant)
	{
		return ($this->BidAssistant = $_BidAssistant);
	}
	/**
	 * Get BidAssistant
	 * @return boolean
	 */
	public function getBidAssistant()
	{
		return $this->BidAssistant;
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