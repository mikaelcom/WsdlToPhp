<?php
/**
 * Class file for PayPalTypeSellingStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSellingStatusType
 * Documentation : Contains the listed items price details which consists of following information: BuyItNowPrice, ConvertedBuyItNowPrice, ConvertedPrice, ConvertedStartPrice, CurrentPrice, MinimumToBid, ReservePrice, and StartPrice. need to take in account get seller events when defining minoccurs = 0
 * @date 14/07/2012
 */
class PayPalTypeSellingStatusType extends PayPalWsdlClass
{
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of bids placed so far against the item. Not returned for International Fixed Price items.
	 * @var int
	 */
	public $BidCount;
	/**
	 * The BidIncrement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Smallest amount a bid must be above the current high bid. Not returned International Fixed Price items.
	 * @var PayPalTypeAmountType
	 */
	public $BidIncrement;
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted current price of listed item.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations :
	 * 	- documentation : For auction-format listings, current minimum asking price or the current highest bid for the item if bids have been placed. Shows minimum bid if no bids have been placed against the item. This field does not reflect the actual current price of the item if it's a Type=7 or Type=9 (Fixed Price) item and the price has been revised. (See StartPrice for revised asking price.)
	 * @var PayPalTypeAmountType
	 */
	public $CurrentPrice;
	/**
	 * The HighBidder
	 * @var PayPalTypeUserType
	 */
	public $HighBidder;
	/**
	 * The LeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable to ad-format items only. Indicates how many leads to potential buyers are associated with this item. For other item types (other than ad-format items), returns a value of 0 (zero).
	 * @var int
	 */
	public $LeadCount;
	/**
	 * The MinimumToBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Minimum acceptable bid for the item. Not returned for International Fixed Price items.
	 * @var PayPalTypeAmountType
	 */
	public $MinimumToBid;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- documentation : Number of items purchased so far. (Subtract from the value returned in the Quantity field to calculate the number of items remaining.)
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ReserveMet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns true if the reserve price was met or no reserve price was specified.
	 * @var boolean
	 */
	public $ReserveMet;
	/**
	 * The SecondChanceEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $SecondChanceEligible;
	/**
	 * Constructor
	 * @param int BidCount
	 * @param PayPalTypeAmountType BidIncrement
	 * @param PayPalTypeAmountType ConvertedCurrentPrice
	 * @param PayPalTypeAmountType CurrentPrice
	 * @param PayPalTypeUserType HighBidder
	 * @param int LeadCount
	 * @param PayPalTypeAmountType MinimumToBid
	 * @param int QuantitySold
	 * @param boolean ReserveMet
	 * @param boolean SecondChanceEligible
	 * @return PayPalTypeSellingStatusType
	 */
	public function __construct($_BidCount = null,$_BidIncrement = null,$_ConvertedCurrentPrice = null,$_CurrentPrice = null,$_HighBidder = null,$_LeadCount = null,$_MinimumToBid = null,$_QuantitySold = null,$_ReserveMet = null,$_SecondChanceEligible = null)
	{
		parent::__construct(array('BidCount'=>$_BidCount,'BidIncrement'=>$_BidIncrement,'ConvertedCurrentPrice'=>$_ConvertedCurrentPrice,'CurrentPrice'=>$_CurrentPrice,'HighBidder'=>$_HighBidder,'LeadCount'=>$_LeadCount,'MinimumToBid'=>$_MinimumToBid,'QuantitySold'=>$_QuantitySold,'ReserveMet'=>$_ReserveMet,'SecondChanceEligible'=>$_SecondChanceEligible));
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
	 * Set BidIncrement
	 * @param AmountType BidIncrement
	 * @return AmountType
	 */
	public function setBidIncrement($_BidIncrement)
	{
		return ($this->BidIncrement = $_BidIncrement);
	}
	/**
	 * Get BidIncrement
	 * @return PayPalTypeAmountType
	 */
	public function getBidIncrement()
	{
		return $this->BidIncrement;
	}
	/**
	 * Set ConvertedCurrentPrice
	 * @param AmountType ConvertedCurrentPrice
	 * @return AmountType
	 */
	public function setConvertedCurrentPrice($_ConvertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_ConvertedCurrentPrice);
	}
	/**
	 * Get ConvertedCurrentPrice
	 * @return PayPalTypeAmountType
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set CurrentPrice
	 * @param AmountType CurrentPrice
	 * @return AmountType
	 */
	public function setCurrentPrice($_CurrentPrice)
	{
		return ($this->CurrentPrice = $_CurrentPrice);
	}
	/**
	 * Get CurrentPrice
	 * @return PayPalTypeAmountType
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set HighBidder
	 * @param UserType HighBidder
	 * @return UserType
	 */
	public function setHighBidder($_HighBidder)
	{
		return ($this->HighBidder = $_HighBidder);
	}
	/**
	 * Get HighBidder
	 * @return PayPalTypeUserType
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set LeadCount
	 * @param int LeadCount
	 * @return int
	 */
	public function setLeadCount($_LeadCount)
	{
		return ($this->LeadCount = $_LeadCount);
	}
	/**
	 * Get LeadCount
	 * @return int
	 */
	public function getLeadCount()
	{
		return $this->LeadCount;
	}
	/**
	 * Set MinimumToBid
	 * @param AmountType MinimumToBid
	 * @return AmountType
	 */
	public function setMinimumToBid($_MinimumToBid)
	{
		return ($this->MinimumToBid = $_MinimumToBid);
	}
	/**
	 * Get MinimumToBid
	 * @return PayPalTypeAmountType
	 */
	public function getMinimumToBid()
	{
		return $this->MinimumToBid;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set ReserveMet
	 * @param boolean ReserveMet
	 * @return boolean
	 */
	public function setReserveMet($_ReserveMet)
	{
		return ($this->ReserveMet = $_ReserveMet);
	}
	/**
	 * Get ReserveMet
	 * @return boolean
	 */
	public function getReserveMet()
	{
		return $this->ReserveMet;
	}
	/**
	 * Set SecondChanceEligible
	 * @param boolean SecondChanceEligible
	 * @return boolean
	 */
	public function setSecondChanceEligible($_SecondChanceEligible)
	{
		return ($this->SecondChanceEligible = $_SecondChanceEligible);
	}
	/**
	 * Get SecondChanceEligible
	 * @return boolean
	 */
	public function getSecondChanceEligible()
	{
		return $this->SecondChanceEligible;
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