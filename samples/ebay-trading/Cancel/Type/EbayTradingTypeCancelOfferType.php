<?php
/**
 * Class file for EbayTradingTypeCancelOfferType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCancelOfferType
 * Documentation : Container for a list of offers. May contain zero, one, or multiple OfferType objects, each of which represents one offer extended by a user on a listing.
 * @date 04/07/2012
 */
class EbayTradingTypeCancelOfferType extends EbayTradingWsdlClass
{
	/**
	 * The Offer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data for one offer. This includes: data for the user making the offer, the amount of the offer, the quantity of items being bought from the listing, the type of offer being made, and more.
	 * @var EbayTradingTypeOfferType
	 */
	public $Offer;
	/**
	 * The Explanation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : 
	 * @var string
	 */
	public $Explanation;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeOfferType Offer
	 * @param string Explanation
	 * @param DOMDocument any
	 * @return EbayTradingTypeCancelOfferType
	 */
	public function __construct($_Offer = null,$_Explanation = null,$_any = null)
	{
		parent::__construct(array('Offer'=>$_Offer,'Explanation'=>$_Explanation,'any'=>$_any));
	}
	/**
	 * Set Offer
	 * @param OfferType Offer
	 * @return OfferType
	 */
	public function setOffer($_Offer)
	{
		return ($this->Offer = $_Offer);
	}
	/**
	 * Get Offer
	 * @return EbayTradingTypeOfferType
	 */
	public function getOffer()
	{
		return $this->Offer;
	}
	/**
	 * Set Explanation
	 * @param string Explanation
	 * @return string
	 */
	public function setExplanation($_Explanation)
	{
		return ($this->Explanation = $_Explanation);
	}
	/**
	 * Get Explanation
	 * @return string
	 */
	public function getExplanation()
	{
		return $this->Explanation;
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