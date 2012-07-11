<?php
/**
 * Class file for EbayTradingTypeMyeBaySecondChanceOfferListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBaySecondChanceOfferListType
 * Documentation : A list of possible My eBay Second Chance Offers.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBaySecondChanceOfferListType extends EbayTradingWsdlClass
{
	/**
	 * The TotalAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of My eBay Second Chance Offers available.
	 * @var int
	 */
	public $TotalAvailable;
	/**
	 * The SecondChanceOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Second Chance Offer item.
	 * @var EbayTradingTypeItemType
	 */
	public $SecondChanceOffer;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int TotalAvailable
	 * @param EbayTradingTypeItemType SecondChanceOffer
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBaySecondChanceOfferListType
	 */
	public function __construct($_TotalAvailable = null,$_SecondChanceOffer = null,$_any = null)
	{
		parent::__construct(array('TotalAvailable'=>$_TotalAvailable,'SecondChanceOffer'=>$_SecondChanceOffer,'any'=>$_any));
	}
	/**
	 * Set TotalAvailable
	 * @param int TotalAvailable
	 * @return int
	 */
	public function setTotalAvailable($_TotalAvailable)
	{
		return ($this->TotalAvailable = $_TotalAvailable);
	}
	/**
	 * Get TotalAvailable
	 * @return int
	 */
	public function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * Set SecondChanceOffer
	 * @param ItemType SecondChanceOffer
	 * @return ItemType
	 */
	public function setSecondChanceOffer($_SecondChanceOffer)
	{
		return ($this->SecondChanceOffer = $_SecondChanceOffer);
	}
	/**
	 * Get SecondChanceOffer
	 * @return EbayTradingTypeItemType
	 */
	public function getSecondChanceOffer()
	{
		return $this->SecondChanceOffer;
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