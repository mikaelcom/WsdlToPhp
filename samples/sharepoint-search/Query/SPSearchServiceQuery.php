<?php
/**
 * Class file for SPSearchServiceQuery
 * @date 06/07/2012
 */
/**
 * Class SPSearchServiceQuery
 * @date 06/07/2012
 */
class SPSearchServiceQuery extends SPSearchWsdlClass
{
	/**
	 * Method to call Query
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @uses SPSearchTypeQuery::getQueryXml()
	 * @param SPSearchTypeQuery Query
	 * @return SPSearchTypeQueryResponse
	 */
	public function Query(SPSearchTypeQuery $_SPSearchTypeQuery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Query(array('queryXml'=>$_SPSearchTypeQuery->getQueryXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call QueryEx
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @uses SPSearchTypeQueryEx::getQueryXml()
	 * @param SPSearchTypeQueryEx QueryEx
	 * @return SPSearchTypeQueryExResponse
	 */
	public function QueryEx(SPSearchTypeQueryEx $_SPSearchTypeQueryEx)
	{
		try
		{
			$this->setResult(self::getSoapClient()->QueryEx(array('queryXml'=>$_SPSearchTypeQueryEx->getQueryXml())));
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
	 * @return SPSearchTypeQueryExResponse
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