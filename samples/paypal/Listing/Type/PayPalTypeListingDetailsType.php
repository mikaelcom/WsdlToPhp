<?php
/**
 * Class file for PayPalTypeListingDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListingDetailsType
 * Documentation : Contains the listed item details which consists of following information: .
 * @date 14/07/2012
 */
class PayPalTypeListingDetailsType extends PayPalWsdlClass
{
	/**
	 * The Adult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var boolean
	 */
	public $Adult;
	/**
	 * The BindingAuction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var boolean
	 */
	public $BindingAuction;
	/**
	 * The CheckoutEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var boolean
	 */
	public $CheckoutEnabled;
	/**
	 * The ConvertedBuyItNowPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the BuyItNowPrice in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedBuyItNowPrice;
	/**
	 * The ConvertedStartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the StartPrice field in the currency indicated by SiteCurrency. This value must be refreshed every 24 hours to pick up the current conversion rates.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedStartPrice;
	/**
	 * The ConvertedReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the converted reserve price for a reserve auction. Returned only if DetailLevel = 4. ReservePrice is only returned for auctions with a reserve price where the user calling GetItem is the item's seller. Returned as null for International Fixed Price items. For more information on reserve price auctions, see http://pages.ebay.com/help/basics/f-format.html#1.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedReservePrice;
	/**
	 * The HasReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var boolean
	 */
	public $HasReservePrice;
	/**
	 * The RegionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $RegionName;
	/**
	 * The RelistedItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the new ItemID for a relisted item. When an item is relisted, the old (expired) listing is annotated with the new (relist) ItemID. This field only appears when the old listing is retrieved.
	 * @var PayPalTypeItemIDType
	 */
	public $RelistedItemID;
	/**
	 * The SecondChanceOriginalItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemID for the original listing (i.e., OriginalItemID specific to Second Chance Offer items).
	 * @var PayPalTypeItemIDType
	 */
	public $SecondChanceOriginalItemID;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp for the start of the listing (in GMT). For regular items, StartTime is not sent in at listing time.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Time stamp for the end of the listing (in GMT).
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The ViewItemURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var anyURI
	 */
	public $ViewItemURL;
	/**
	 * Constructor
	 * @param boolean Adult
	 * @param boolean BindingAuction
	 * @param boolean CheckoutEnabled
	 * @param PayPalTypeAmountType ConvertedBuyItNowPrice
	 * @param PayPalTypeAmountType ConvertedStartPrice
	 * @param PayPalTypeAmountType ConvertedReservePrice
	 * @param boolean HasReservePrice
	 * @param string RegionName
	 * @param PayPalTypeItemIDType RelistedItemID
	 * @param PayPalTypeItemIDType SecondChanceOriginalItemID
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param anyURI ViewItemURL
	 * @return PayPalTypeListingDetailsType
	 */
	public function __construct($_Adult = null,$_BindingAuction = null,$_CheckoutEnabled = null,$_ConvertedBuyItNowPrice = null,$_ConvertedStartPrice = null,$_ConvertedReservePrice = null,$_HasReservePrice = null,$_RegionName = null,$_RelistedItemID = null,$_SecondChanceOriginalItemID = null,$_StartTime = null,$_EndTime = null,$_ViewItemURL = null)
	{
		parent::__construct(array('Adult'=>$_Adult,'BindingAuction'=>$_BindingAuction,'CheckoutEnabled'=>$_CheckoutEnabled,'ConvertedBuyItNowPrice'=>$_ConvertedBuyItNowPrice,'ConvertedStartPrice'=>$_ConvertedStartPrice,'ConvertedReservePrice'=>$_ConvertedReservePrice,'HasReservePrice'=>$_HasReservePrice,'RegionName'=>$_RegionName,'RelistedItemID'=>$_RelistedItemID,'SecondChanceOriginalItemID'=>$_SecondChanceOriginalItemID,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'ViewItemURL'=>$_ViewItemURL));
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
	 * @return PayPalTypeAmountType
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
	 * @return PayPalTypeAmountType
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
	 * @return PayPalTypeAmountType
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
	 * Set RegionName
	 * @param string RegionName
	 * @return string
	 */
	public function setRegionName($_RegionName)
	{
		return ($this->RegionName = $_RegionName);
	}
	/**
	 * Get RegionName
	 * @return string
	 */
	public function getRegionName()
	{
		return $this->RegionName;
	}
	/**
	 * Set RelistedItemID
	 * @param ItemIDType RelistedItemID
	 * @return ItemIDType
	 */
	public function setRelistedItemID($_RelistedItemID)
	{
		return ($this->RelistedItemID = PayPalTypeItemIDType::valueIsValid($_RelistedItemID)?$_RelistedItemID:null);
	}
	/**
	 * Get RelistedItemID
	 * @return PayPalTypeItemIDType
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
		return ($this->SecondChanceOriginalItemID = PayPalTypeItemIDType::valueIsValid($_SecondChanceOriginalItemID)?$_SecondChanceOriginalItemID:null);
	}
	/**
	 * Get SecondChanceOriginalItemID
	 * @return PayPalTypeItemIDType
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>