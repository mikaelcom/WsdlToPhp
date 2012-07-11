<?php
/**
 * Class file for EbayTradingTypeOfferArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOfferArrayType
 * Documentation : Container for a list of offers. May contain zero, one, or multiple OfferType objects, each of which represents one offer extended by a user on a listing.
 * @date 04/07/2012
 */
class EbayTradingTypeOfferArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Offer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one offer. This includes: data for the user making the offer, the amount of the offer, the quantity of items being bought from the listing, the type of offer being made, and more.
	 * @var EbayTradingTypeOfferType
	 */
	public $Offer;
	/**
	 * Constructor
	 * @param EbayTradingTypeOfferType Offer
	 * @return EbayTradingTypeOfferArrayType
	 */
	public function __construct($_Offer = null)
	{
		parent::__construct(array('Offer'=>$_Offer));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>