<?php
/**
 * Class file for EbayTradingTypeRespondToBestOfferResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRespondToBestOfferResponseType
 * Documentation : Contains a list of BestOffers that were either accepted or declined.
 * @date 04/07/2012
 */
class EbayTradingTypeRespondToBestOfferResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The RespondToBestOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of BestOffers that were either accepted or declined.
	 * @var EbayTradingTypeBestOfferArrayType
	 */
	public $RespondToBestOffer;
	/**
	 * Constructor
	 * @param EbayTradingTypeBestOfferArrayType RespondToBestOffer
	 * @return EbayTradingTypeRespondToBestOfferResponseType
	 */
	public function __construct($_RespondToBestOffer = null)
	{
		EbayTradingWsdlClass::__construct(array('RespondToBestOffer'=>$_RespondToBestOffer));
	}
	/**
	 * Set RespondToBestOffer
	 * @param BestOfferArrayType RespondToBestOffer
	 * @return BestOfferArrayType
	 */
	public function setRespondToBestOffer($_RespondToBestOffer)
	{
		return ($this->RespondToBestOffer = $_RespondToBestOffer);
	}
	/**
	 * Get RespondToBestOffer
	 * @return EbayTradingTypeBestOfferArrayType
	 */
	public function getRespondToBestOffer()
	{
		return $this->RespondToBestOffer;
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