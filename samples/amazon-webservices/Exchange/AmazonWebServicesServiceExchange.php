<?php
/**
 * Class file for AmazonWebServicesServiceExchange
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceExchange
 * @date 10/07/2012
 */
class AmazonWebServicesServiceExchange extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call ExchangeSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeExchangeRequest::getExchange_id()
	 * @uses AmazonWebServicesTypeExchangeRequest::getTag()
	 * @uses AmazonWebServicesTypeExchangeRequest::getType()
	 * @uses AmazonWebServicesTypeExchangeRequest::getDevtag()
	 * @uses AmazonWebServicesTypeExchangeRequest::getLocale()
	 * @param AmazonWebServicesTypeExchangeRequest ExchangeRequest
	 * @return AmazonWebServicesTypeListingProductDetails
	 */
	public function ExchangeSearchRequest(AmazonWebServicesTypeExchangeRequest $_AmazonWebServicesTypeExchangeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExchangeSearchRequest(array('exchange_id'=>$_AmazonWebServicesTypeExchangeRequest->getExchange_id(),'tag'=>$_AmazonWebServicesTypeExchangeRequest->getTag(),'type'=>$_AmazonWebServicesTypeExchangeRequest->getType(),'devtag'=>$_AmazonWebServicesTypeExchangeRequest->getDevtag(),'locale'=>$_AmazonWebServicesTypeExchangeRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeListingProductDetails
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