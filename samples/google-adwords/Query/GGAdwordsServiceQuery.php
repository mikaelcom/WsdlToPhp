<?php
/**
 * Class file for GGAdwordsServiceQuery
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsServiceQuery
 * @date 03/07/2012
 */
class GGAdwordsServiceQuery extends GGAdwordsWsdlClass
{
	/**
	 * Method to call query
	 * Meta informations :
	 * 	- documentation : Returns the list of campaigns that match the query. @param query The SQL-like AWQL query string. @return A list of campaigns. @throws ApiException if problems occur while parsing the query or fetching campaign information.
	 * @uses GGAdwordsWsdlClass::getSoapClient()
	 * @uses GGAdwordsWsdlClass::setResult()
	 * @uses GGAdwordsWsdlClass::getResult()
	 * @uses GGAdwordsWsdlClass::saveLastError()
	 * @uses GGAdwordsTypeQuery::getQuery()
	 * @param GGAdwordsTypeQuery Query
	 * @return GGAdwordsTypeQueryResponse
	 */
	public function query(GGAdwordsTypeQuery $_GGAdwordsTypeQuery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->query(array('query'=>$_GGAdwordsTypeQuery->getQuery())));
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
	 * @return GGAdwordsTypeQueryResponse
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