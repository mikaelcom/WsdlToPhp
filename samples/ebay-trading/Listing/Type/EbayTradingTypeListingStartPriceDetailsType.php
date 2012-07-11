<?php
/**
 * Class file for EbayTradingTypeListingStartPriceDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingStartPriceDetailsType
 * Documentation : The lowest (beginning) price that can be associated with an item for each type of eBay listing.
 * @date 04/07/2012
 */
class EbayTradingTypeListingStartPriceDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The lowest (beginning) price that can be associated with an item for each type of eBay listing.
	 * @var string
	 */
	public $Description;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of eBay listing, such as 'Chinese', 'AdType', 'StoresFixedPrice', 'FixedPriceItem', and others.
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : StartPrice for a specific listing type.
	 * @var EbayTradingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The MinBuyItNowPricePercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum in the percentage difference between the start price and the Buy It Now price for a listing, defined in the site parameters. On the US eBay Motors site (100), requirements for Motor Vehicles are different from those for Parts and Accessories. On the US eBay Motors site (100), for MinBuyItNowPricePercent, the value returned by GeteBayDetails only applies to Parts and Accessories.
	 * @var float
	 */
	public $MinBuyItNowPricePercent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Description
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypeAmountType StartPrice
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param float MinBuyItNowPricePercent
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingStartPriceDetailsType
	 */
	public function __construct($_Description = null,$_ListingType = null,$_StartPrice = null,$_DetailVersion = null,$_UpdateTime = null,$_MinBuyItNowPricePercent = null,$_any = null)
	{
		parent::__construct(array('Description'=>$_Description,'ListingType'=>$_ListingType,'StartPrice'=>$_StartPrice,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'MinBuyItNowPricePercent'=>$_MinBuyItNowPricePercent,'any'=>$_any));
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = EbayTradingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayTradingTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set StartPrice
	 * @param AmountType StartPrice
	 * @return AmountType
	 */
	public function setStartPrice($_StartPrice)
	{
		return ($this->StartPrice = $_StartPrice);
	}
	/**
	 * Get StartPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * Set MinBuyItNowPricePercent
	 * @param float MinBuyItNowPricePercent
	 * @return float
	 */
	public function setMinBuyItNowPricePercent($_MinBuyItNowPricePercent)
	{
		return ($this->MinBuyItNowPricePercent = $_MinBuyItNowPricePercent);
	}
	/**
	 * Get MinBuyItNowPricePercent
	 * @return float
	 */
	public function getMinBuyItNowPricePercent()
	{
		return $this->MinBuyItNowPricePercent;
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