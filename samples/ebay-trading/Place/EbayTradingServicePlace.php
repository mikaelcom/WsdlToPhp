<?php
/**
 * Class file for EbayTradingServicePlace
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServicePlace
 * @date 04/07/2012
 */
class EbayTradingServicePlace extends EbayTradingWsdlClass
{
	/**
	 * Method to call PlaceOffer
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypePlaceOfferRequestType::getOffer()
	 * @uses EbayTradingTypePlaceOfferRequestType::getItemID()
	 * @uses EbayTradingTypePlaceOfferRequestType::getBlockOnWarning()
	 * @uses EbayTradingTypePlaceOfferRequestType::getAffiliateTrackingDetails()
	 * @uses EbayTradingTypePlaceOfferRequestType::getVariationSpecifics()
	 * @param EbayTradingTypePlaceOfferRequestType PlaceOfferRequestType
	 * @return EbayTradingTypePlaceOfferResponseType
	 */
	public function PlaceOffer(EbayTradingTypePlaceOfferRequestType $_EbayTradingTypePlaceOfferRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PlaceOffer(array('Offer'=>$_EbayTradingTypePlaceOfferRequestType->getOffer(),'ItemID'=>$_EbayTradingTypePlaceOfferRequestType->getItemID(),'BlockOnWarning'=>$_EbayTradingTypePlaceOfferRequestType->getBlockOnWarning(),'AffiliateTrackingDetails'=>$_EbayTradingTypePlaceOfferRequestType->getAffiliateTrackingDetails(),'VariationSpecifics'=>$_EbayTradingTypePlaceOfferRequestType->getVariationSpecifics())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return EbayTradingTypePlaceOfferResponseType
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>