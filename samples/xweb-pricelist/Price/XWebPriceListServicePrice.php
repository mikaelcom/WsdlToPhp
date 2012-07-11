<?php
/**
 * Class file for XWebPriceListServicePrice
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListServicePrice
 * @date 09/07/2012
 */
class XWebPriceListServicePrice extends XWebPriceListWsdlClass
{
	/**
	 * Method to call PriceList
	 * @uses XWebPriceListWsdlClass::getSoapClient()
	 * @uses XWebPriceListWsdlClass::setResult()
	 * @uses XWebPriceListWsdlClass::getResult()
	 * @uses XWebPriceListWsdlClass::saveLastError()
	 * @uses XWebPriceListTypePriceListRequest::getRequestPriceList()
	 * @param XWebPriceListTypePriceListRequest PriceListRequest
	 * @return XWebPriceListTypePriceListResponse
	 */
	public function PriceList(XWebPriceListTypePriceListRequest $_XWebPriceListTypePriceListRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->PriceList(array('RequestPriceList'=>$_XWebPriceListTypePriceListRequest->getRequestPriceList())));
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
	 * @return XWebPriceListTypePriceListResponse
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