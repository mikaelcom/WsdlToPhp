<?php
/**
 * Class file for EbayTradingTypeBestOfferArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBestOfferArrayType
 * Documentation : A collection of Best Offers. Empty if there are no best offers.
 * @date 04/07/2012
 */
class EbayTradingTypeBestOfferArrayType extends EbayTradingWsdlClass
{
	/**
	 * The BestOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A container of details about a best offer.
	 * @var EbayTradingTypeBestOfferType
	 */
	public $BestOffer;
	/**
	 * Constructor
	 * @param EbayTradingTypeBestOfferType BestOffer
	 * @return EbayTradingTypeBestOfferArrayType
	 */
	public function __construct($_BestOffer = null)
	{
		parent::__construct(array('BestOffer'=>$_BestOffer));
	}
	/**
	 * Set BestOffer
	 * @param BestOfferType BestOffer
	 * @return BestOfferType
	 */
	public function setBestOffer($_BestOffer)
	{
		return ($this->BestOffer = $_BestOffer);
	}
	/**
	 * Get BestOffer
	 * @return EbayTradingTypeBestOfferType
	 */
	public function getBestOffer()
	{
		return $this->BestOffer;
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