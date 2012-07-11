<?php
/**
 * Class file for XiScreenerServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceSearch
 * @date 08/07/2012
 */
class XiScreenerServiceSearch extends XiScreenerWsdlClass
{
	/**
	 * Method to call SearchFundamentals
	 * Meta informations :
	 * 	- documentation : Search fundamental names and description.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeSearchFundamentals::getPattern()
	 * @param XiScreenerTypeSearchFundamentals SearchFundamentals
	 * @return XiScreenerTypeSearchFundamentalsResponse
	 */
	public function SearchFundamentals(XiScreenerTypeSearchFundamentals $_XiScreenerTypeSearchFundamentals)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchFundamentals(array('Pattern'=>$_XiScreenerTypeSearchFundamentals->getPattern())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Search
	 * Meta informations :
	 * 	- documentation : Search securities based on a set of criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeSearch::getCriteria()
	 * @uses XiScreenerTypeSearch::getCount()
	 * @param XiScreenerTypeSearch Search
	 * @return XiScreenerTypeSearchResponse
	 */
	public function Search(XiScreenerTypeSearch $_XiScreenerTypeSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Search(array('Criteria'=>$_XiScreenerTypeSearch->getCriteria(),'Count'=>$_XiScreenerTypeSearch->getCount())));
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
	 * @return XiScreenerTypeSearchResponse
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