<?php
/**
 * Class file for SPListDataRetrievalServiceQuery
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalServiceQuery
 * @date 06/07/2012
 */
class SPListDataRetrievalServiceQuery extends SPListDataRetrievalWsdlClass
{
	/**
	 * Method to call Query
	 * @uses SPListDataRetrievalWsdlClass::getSoapClient()
	 * @uses SPListDataRetrievalWsdlClass::setResult()
	 * @uses SPListDataRetrievalWsdlClass::getResult()
	 * @uses SPListDataRetrievalWsdlClass::saveLastError()
	 * @uses SPListDataRetrievalTypeQueryRequest::getDsQuery()
	 * @uses SPListDataRetrievalTypeQueryRequest::getPtQuery()
	 * @param SPListDataRetrievalTypeQueryRequest QueryRequest
	 * @return SPListDataRetrievalTypeQueryResponse
	 */
	public function Query(SPListDataRetrievalTypeQueryRequest $_SPListDataRetrievalTypeQueryRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Query(array('dsQuery'=>$_SPListDataRetrievalTypeQueryRequest->getDsQuery(),'ptQuery'=>$_SPListDataRetrievalTypeQueryRequest->getPtQuery())));
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
	 * @return SPListDataRetrievalTypeQueryResponse
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