<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoRelistType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoRelistType
 * Documentation : Provides information about an automated relisting rule. Automated relisting rules cannot be combined with automated listing rules. A template can have one set of information per automated relisting rule specified.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoRelistType extends EbayTradingWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of auto-relist rule for the item.
	 * @var EbayTradingTypeSellingManagerAutoRelistTypeCodeType
	 */
	public $Type;
	/**
	 * The RelistCondition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The condition under which relist occurs.
	 * @var EbayTradingTypeSellingManagerAutoRelistOptionCodeType
	 */
	public $RelistCondition;
	/**
	 * The RelistAfterDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used when RelistCondition equals RelistAfterDaysHours; specifies the number days after the item ends that it should be relisted.
	 * @var int
	 */
	public $RelistAfterDays;
	/**
	 * The RelistAfterHours
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used when RelistCondition equals RelistAfterDaysHours; specifies the number hours after the item ends that it should be relisted.
	 * @var int
	 */
	public $RelistAfterHours;
	/**
	 * The RelistAtSpecificTimeOfDay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time of day the item should be relisted.
	 * @var time
	 */
	public $RelistAtSpecificTimeOfDay;
	/**
	 * The BestOfferDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether best offer should be enabled on the auto-relisted item.
	 * @var EbayTradingTypeBestOfferDetailsType
	 */
	public $BestOfferDetails;
	/**
	 * The ListingHoldInventoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies that item is not listed if inventory levels on the associated product are at or below the specified level.
	 * @var int
	 */
	public $ListingHoldInventoryLevel;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerAutoRelistTypeCodeType Type
	 * @param EbayTradingTypeSellingManagerAutoRelistOptionCodeType RelistCondition
	 * @param int RelistAfterDays
	 * @param int RelistAfterHours
	 * @param time RelistAtSpecificTimeOfDay
	 * @param EbayTradingTypeBestOfferDetailsType BestOfferDetails
	 * @param int ListingHoldInventoryLevel
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAutoRelistType
	 */
	public function __construct($_Type = null,$_RelistCondition = null,$_RelistAfterDays = null,$_RelistAfterHours = null,$_RelistAtSpecificTimeOfDay = null,$_BestOfferDetails = null,$_ListingHoldInventoryLevel = null,$_any = null)
	{
		parent::__construct(array('Type'=>$_Type,'RelistCondition'=>$_RelistCondition,'RelistAfterDays'=>$_RelistAfterDays,'RelistAfterHours'=>$_RelistAfterHours,'RelistAtSpecificTimeOfDay'=>$_RelistAtSpecificTimeOfDay,'BestOfferDetails'=>$_BestOfferDetails,'ListingHoldInventoryLevel'=>$_ListingHoldInventoryLevel,'any'=>$_any));
	}
	/**
	 * Set Type
	 * @param SellingManagerAutoRelistTypeCodeType Type
	 * @return SellingManagerAutoRelistTypeCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeSellingManagerAutoRelistTypeCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeSellingManagerAutoRelistTypeCodeType
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set RelistCondition
	 * @param SellingManagerAutoRelistOptionCodeType RelistCondition
	 * @return SellingManagerAutoRelistOptionCodeType
	 */
	public function setRelistCondition($_RelistCondition)
	{
		return ($this->RelistCondition = EbayTradingTypeSellingManagerAutoRelistOptionCodeType::valueIsValid($_RelistCondition)?$_RelistCondition:null);
	}
	/**
	 * Get RelistCondition
	 * @return EbayTradingTypeSellingManagerAutoRelistOptionCodeType
	 */
	public function getRelistCondition()
	{
		return $this->RelistCondition;
	}
	/**
	 * Set RelistAfterDays
	 * @param int RelistAfterDays
	 * @return int
	 */
	public function setRelistAfterDays($_RelistAfterDays)
	{
		return ($this->RelistAfterDays = $_RelistAfterDays);
	}
	/**
	 * Get RelistAfterDays
	 * @return int
	 */
	public function getRelistAfterDays()
	{
		return $this->RelistAfterDays;
	}
	/**
	 * Set RelistAfterHours
	 * @param int RelistAfterHours
	 * @return int
	 */
	public function setRelistAfterHours($_RelistAfterHours)
	{
		return ($this->RelistAfterHours = $_RelistAfterHours);
	}
	/**
	 * Get RelistAfterHours
	 * @return int
	 */
	public function getRelistAfterHours()
	{
		return $this->RelistAfterHours;
	}
	/**
	 * Set RelistAtSpecificTimeOfDay
	 * @param time RelistAtSpecificTimeOfDay
	 * @return time
	 */
	public function setRelistAtSpecificTimeOfDay($_RelistAtSpecificTimeOfDay)
	{
		return ($this->RelistAtSpecificTimeOfDay = $_RelistAtSpecificTimeOfDay);
	}
	/**
	 * Get RelistAtSpecificTimeOfDay
	 * @return time
	 */
	public function getRelistAtSpecificTimeOfDay()
	{
		return $this->RelistAtSpecificTimeOfDay;
	}
	/**
	 * Set BestOfferDetails
	 * @param BestOfferDetailsType BestOfferDetails
	 * @return BestOfferDetailsType
	 */
	public function setBestOfferDetails($_BestOfferDetails)
	{
		return ($this->BestOfferDetails = $_BestOfferDetails);
	}
	/**
	 * Get BestOfferDetails
	 * @return EbayTradingTypeBestOfferDetailsType
	 */
	public function getBestOfferDetails()
	{
		return $this->BestOfferDetails;
	}
	/**
	 * Set ListingHoldInventoryLevel
	 * @param int ListingHoldInventoryLevel
	 * @return int
	 */
	public function setListingHoldInventoryLevel($_ListingHoldInventoryLevel)
	{
		return ($this->ListingHoldInventoryLevel = $_ListingHoldInventoryLevel);
	}
	/**
	 * Get ListingHoldInventoryLevel
	 * @return int
	 */
	public function getListingHoldInventoryLevel()
	{
		return $this->ListingHoldInventoryLevel;
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