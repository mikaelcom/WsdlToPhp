<?php
/**
 * Class file for EbayTradingTypeCancelOfferArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCancelOfferArrayType
 * Documentation : Container for a list of offers. May contain zero, one, or multiple OfferType objects, each of which represents one offer extended by a user on a listing.
 * @date 04/07/2012
 */
class EbayTradingTypeCancelOfferArrayType extends EbayTradingWsdlClass
{
	/**
	 * The CancelOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one offer. This includes: data for the user making the offer, the amount of the offer, the quantity of items being bought from the listing, the type of offer being made, and more.
	 * @var EbayTradingTypeCancelOfferType
	 */
	public $CancelOffer;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCancelOfferType CancelOffer
	 * @param DOMDocument any
	 * @return EbayTradingTypeCancelOfferArrayType
	 */
	public function __construct($_CancelOffer = null,$_any = null)
	{
		parent::__construct(array('CancelOffer'=>$_CancelOffer,'any'=>$_any));
	}
	/**
	 * Set CancelOffer
	 * @param CancelOfferType CancelOffer
	 * @return CancelOfferType
	 */
	public function setCancelOffer($_CancelOffer)
	{
		return ($this->CancelOffer = $_CancelOffer);
	}
	/**
	 * Get CancelOffer
	 * @return EbayTradingTypeCancelOfferType
	 */
	public function getCancelOffer()
	{
		return $this->CancelOffer;
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