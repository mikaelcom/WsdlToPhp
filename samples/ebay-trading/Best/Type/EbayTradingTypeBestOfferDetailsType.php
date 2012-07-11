<?php
/**
 * Class file for EbayTradingTypeBestOfferDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferDetailsType
 * Documentation : Type defining the <b>BestOfferDetails</b> container, which consists of Best Offer properties associated with an item.
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The BestOfferCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of best offers made for this item, if any. In other words, if there are no offers made, this container will not appear in the response.
	 * @var int
	 */
	public $BestOfferCount;
	/**
	 * The BestOfferEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates whether or not the Best Offer feature is enabled for this item. A seller of a fixed-price item (in a category for which Best Offer is also enabled) can opt that item into the Best Offer feature. This feature enables a buyer to make a lower priced binding offer on that item. If a listing has no active best offers, you can change this value (true to false, and vice versa). If a listing does have active best offers, you cannot change the value to false.
	 * @var boolean
	 */
	public $BestOfferEnabled;
	/**
	 * The BestOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (GetMyeBayBuying only) This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer.
	 * @var EbayTradingTypeAmountType
	 */
	public $BestOffer;
	/**
	 * The BestOfferStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (GetMyeBayBuying only) This enumeration value indicates the status of the latest Best Offer from the buyer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer.
	 * @var EbayTradingTypeBestOfferStatusCodeType
	 */
	public $BestOfferStatus;
	/**
	 * The BestOfferType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Note: this field is no longer used. The Best Offer type is only returned in the BestOfferCodeType field of the GetBestOffers call, and the applicable values for Best Offer type (BuyerBestOffer, BuyerCounterOffer, SellerCounterOffer, etc.) are defined in BestOfferTypeCodeType
	 * @var EbayTradingTypeBestOfferTypeCodeType
	 */
	public $BestOfferType;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int BestOfferCount
	 * @param boolean BestOfferEnabled
	 * @param EbayTradingTypeAmountType BestOffer
	 * @param EbayTradingTypeBestOfferStatusCodeType BestOfferStatus
	 * @param EbayTradingTypeBestOfferTypeCodeType BestOfferType
	 * @param DOMDocument any
	 * @return EbayTradingTypeBestOfferDetailsType
	 */
	public function __construct($_BestOfferCount = null,$_BestOfferEnabled = null,$_BestOffer = null,$_BestOfferStatus = null,$_BestOfferType = null,$_any = null)
	{
		parent::__construct(array('BestOfferCount'=>$_BestOfferCount,'BestOfferEnabled'=>$_BestOfferEnabled,'BestOffer'=>$_BestOffer,'BestOfferStatus'=>$_BestOfferStatus,'BestOfferType'=>$_BestOfferType,'any'=>$_any));
	}
	/**
	 * Set BestOfferCount
	 * @param int BestOfferCount
	 * @return int
	 */
	public function setBestOfferCount($_BestOfferCount)
	{
		return ($this->BestOfferCount = $_BestOfferCount);
	}
	/**
	 * Get BestOfferCount
	 * @return int
	 */
	public function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}
	/**
	 * Set BestOfferEnabled
	 * @param boolean BestOfferEnabled
	 * @return boolean
	 */
	public function setBestOfferEnabled($_BestOfferEnabled)
	{
		return ($this->BestOfferEnabled = $_BestOfferEnabled);
	}
	/**
	 * Get BestOfferEnabled
	 * @return boolean
	 */
	public function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}
	/**
	 * Set BestOffer
	 * @param AmountType BestOffer
	 * @return AmountType
	 */
	public function setBestOffer($_BestOffer)
	{
		return ($this->BestOffer = $_BestOffer);
	}
	/**
	 * Get BestOffer
	 * @return EbayTradingTypeAmountType
	 */
	public function getBestOffer()
	{
		return $this->BestOffer;
	}
	/**
	 * Set BestOfferStatus
	 * @param BestOfferStatusCodeType BestOfferStatus
	 * @return BestOfferStatusCodeType
	 */
	public function setBestOfferStatus($_BestOfferStatus)
	{
		return ($this->BestOfferStatus = EbayTradingTypeBestOfferStatusCodeType::valueIsValid($_BestOfferStatus)?$_BestOfferStatus:null);
	}
	/**
	 * Get BestOfferStatus
	 * @return EbayTradingTypeBestOfferStatusCodeType
	 */
	public function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}
	/**
	 * Set BestOfferType
	 * @param BestOfferTypeCodeType BestOfferType
	 * @return BestOfferTypeCodeType
	 */
	public function setBestOfferType($_BestOfferType)
	{
		return ($this->BestOfferType = EbayTradingTypeBestOfferTypeCodeType::valueIsValid($_BestOfferType)?$_BestOfferType:null);
	}
	/**
	 * Get BestOfferType
	 * @return EbayTradingTypeBestOfferTypeCodeType
	 */
	public function getBestOfferType()
	{
		return $this->BestOfferType;
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