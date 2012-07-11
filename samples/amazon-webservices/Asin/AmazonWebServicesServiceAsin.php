<?php
/**
 * Class file for AmazonWebServicesServiceAsin
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceAsin
 * @date 10/07/2012
 */
class AmazonWebServicesServiceAsin extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call AsinSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeAsinRequest::getAsin()
	 * @uses AmazonWebServicesTypeAsinRequest::getTag()
	 * @uses AmazonWebServicesTypeAsinRequest::getType()
	 * @uses AmazonWebServicesTypeAsinRequest::getDevtag()
	 * @uses AmazonWebServicesTypeAsinRequest::getOffer()
	 * @uses AmazonWebServicesTypeAsinRequest::getOfferpage()
	 * @uses AmazonWebServicesTypeAsinRequest::getLocale()
	 * @param AmazonWebServicesTypeAsinRequest AsinRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function AsinSearchRequest(AmazonWebServicesTypeAsinRequest $_AmazonWebServicesTypeAsinRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AsinSearchRequest(array('asin'=>$_AmazonWebServicesTypeAsinRequest->getAsin(),'tag'=>$_AmazonWebServicesTypeAsinRequest->getTag(),'type'=>$_AmazonWebServicesTypeAsinRequest->getType(),'devtag'=>$_AmazonWebServicesTypeAsinRequest->getDevtag(),'offer'=>$_AmazonWebServicesTypeAsinRequest->getOffer(),'offerpage'=>$_AmazonWebServicesTypeAsinRequest->getOfferpage(),'locale'=>$_AmazonWebServicesTypeAsinRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeProductInfo
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