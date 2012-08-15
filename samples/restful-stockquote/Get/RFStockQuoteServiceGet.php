<?php
/**
 * Class file for RFStockQuoteServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFStockQuoteServiceGet
 * @date 15/08/2012
 */
class RFStockQuoteServiceGet extends RFStockQuoteWsdlClass
{
	/**
	 * Method to call GetStockQuote
	 * @uses RFStockQuoteWsdlClass::getSoapClient()
	 * @uses RFStockQuoteWsdlClass::setResult()
	 * @uses RFStockQuoteWsdlClass::getResult()
	 * @uses RFStockQuoteWsdlClass::saveLastError()
	 * @uses RFStockQuoteTypeGetStockQuote::getRequest()
	 * @param RFStockQuoteTypeGetStockQuote GetStockQuote
	 * @return RFStockQuoteTypeGetStockQuoteResponse
	 */
	public function GetStockQuote(RFStockQuoteTypeGetStockQuote $_RFStockQuoteTypeGetStockQuote)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockQuote(array('request'=>$_RFStockQuoteTypeGetStockQuote->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWorldMajorIndices
	 * @uses RFStockQuoteWsdlClass::getSoapClient()
	 * @uses RFStockQuoteWsdlClass::setResult()
	 * @uses RFStockQuoteWsdlClass::getResult()
	 * @uses RFStockQuoteWsdlClass::saveLastError()
	 * @param RFStockQuoteTypeGetWorldMajorIndices GetWorldMajorIndices
	 * @return RFStockQuoteTypeGetWorldMajorIndicesResponse
	 */
	public function GetWorldMajorIndices(RFStockQuoteTypeGetWorldMajorIndices $_RFStockQuoteTypeGetWorldMajorIndices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWorldMajorIndices(array()));
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
	 * @return RFStockQuoteTypeGetStockQuoteResponse|RFStockQuoteTypeGetWorldMajorIndicesResponse
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