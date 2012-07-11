<?php
/**
 * Class file for EbayTradingServiceSeller
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceSeller
 * @date 04/07/2012
 */
class EbayTradingServiceSeller extends EbayTradingWsdlClass
{
	/**
	 * Method to call SellerReverseDispute
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeSellerReverseDisputeRequestType::getDisputeID()
	 * @uses EbayTradingTypeSellerReverseDisputeRequestType::getDisputeResolutionReason()
	 * @param EbayTradingTypeSellerReverseDisputeRequestType SellerReverseDisputeRequestType
	 * @return EbayTradingTypeSellerReverseDisputeResponseType
	 */
	public function SellerReverseDispute(EbayTradingTypeSellerReverseDisputeRequestType $_EbayTradingTypeSellerReverseDisputeRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SellerReverseDispute(array('DisputeID'=>$_EbayTradingTypeSellerReverseDisputeRequestType->getDisputeID(),'DisputeResolutionReason'=>$_EbayTradingTypeSellerReverseDisputeRequestType->getDisputeResolutionReason())));
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
	 * @return EbayTradingTypeSellerReverseDisputeResponseType
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