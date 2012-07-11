<?php
/**
 * Class file for EbayTradingTypeSellingManagerAutoSecondChanceOfferType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerAutoSecondChanceOfferType
 * Documentation : Defines the options available for an automated second chance offer rule.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerAutoSecondChanceOfferType extends EbayTradingWsdlClass
{
	/**
	 * The SecondChanceOfferCondition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The condition under which a second chance offer should be sent.
	 * @var EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType
	 */
	public $SecondChanceOfferCondition;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used when SecondChanceOfferCondition is equal to BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies the amount associated with the SecondChanceOfferCondition.
	 * @var EbayTradingTypeAmountType
	 */
	public $Amount;
	/**
	 * The ProfitPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used when SecondChanceOfferCondition is equal to BidsGreaterThanCostPlusPercentage to specify the amount of profit associated with the SecondChanceOfferCondition.
	 * @var float
	 */
	public $ProfitPercent;
	/**
	 * The Duration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the length of time the second chance offer listing will be active. The recipient bidder has that much time to purchase the item or the offer expires.
	 * @var EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public $Duration;
	/**
	 * The ListingHoldInventoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Do not list if inventory levels on the associated product are at or below the specified amount.
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
	 * @param EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType SecondChanceOfferCondition
	 * @param EbayTradingTypeAmountType Amount
	 * @param float ProfitPercent
	 * @param EbayTradingTypeSecondChanceOfferDurationCodeType Duration
	 * @param int ListingHoldInventoryLevel
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerAutoSecondChanceOfferType
	 */
	public function __construct($_SecondChanceOfferCondition = null,$_Amount = null,$_ProfitPercent = null,$_Duration = null,$_ListingHoldInventoryLevel = null,$_any = null)
	{
		parent::__construct(array('SecondChanceOfferCondition'=>$_SecondChanceOfferCondition,'Amount'=>$_Amount,'ProfitPercent'=>$_ProfitPercent,'Duration'=>$_Duration,'ListingHoldInventoryLevel'=>$_ListingHoldInventoryLevel,'any'=>$_any));
	}
	/**
	 * Set SecondChanceOfferCondition
	 * @param SellingManagerAutoSecondChanceOfferTypeCodeType SecondChanceOfferCondition
	 * @return SellingManagerAutoSecondChanceOfferTypeCodeType
	 */
	public function setSecondChanceOfferCondition($_SecondChanceOfferCondition)
	{
		return ($this->SecondChanceOfferCondition = EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType::valueIsValid($_SecondChanceOfferCondition)?$_SecondChanceOfferCondition:null);
	}
	/**
	 * Get SecondChanceOfferCondition
	 * @return EbayTradingTypeSellingManagerAutoSecondChanceOfferTypeCodeType
	 */
	public function getSecondChanceOfferCondition()
	{
		return $this->SecondChanceOfferCondition;
	}
	/**
	 * Set Amount
	 * @param AmountType Amount
	 * @return AmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set ProfitPercent
	 * @param float ProfitPercent
	 * @return float
	 */
	public function setProfitPercent($_ProfitPercent)
	{
		return ($this->ProfitPercent = $_ProfitPercent);
	}
	/**
	 * Get ProfitPercent
	 * @return float
	 */
	public function getProfitPercent()
	{
		return $this->ProfitPercent;
	}
	/**
	 * Set Duration
	 * @param SecondChanceOfferDurationCodeType Duration
	 * @return SecondChanceOfferDurationCodeType
	 */
	public function setDuration($_Duration)
	{
		return ($this->Duration = EbayTradingTypeSecondChanceOfferDurationCodeType::valueIsValid($_Duration)?$_Duration:null);
	}
	/**
	 * Get Duration
	 * @return EbayTradingTypeSecondChanceOfferDurationCodeType
	 */
	public function getDuration()
	{
		return $this->Duration;
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