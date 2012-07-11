<?php
/**
 * Class file for XiScreenerServiceTriple
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceTriple
 * @date 08/07/2012
 */
class XiScreenerServiceTriple extends XiScreenerWsdlClass
{
	/**
	 * Method to call TripleSearch
	 * Meta informations :
	 * 	- documentation : Search securities based on three criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeTripleSearch::getType1()
	 * @uses XiScreenerTypeTripleSearch::getSearchType1()
	 * @uses XiScreenerTypeTripleSearch::getFirstValue1()
	 * @uses XiScreenerTypeTripleSearch::getSecondValue1()
	 * @uses XiScreenerTypeTripleSearch::getType2()
	 * @uses XiScreenerTypeTripleSearch::getSearchType2()
	 * @uses XiScreenerTypeTripleSearch::getFirstValue2()
	 * @uses XiScreenerTypeTripleSearch::getSecondValue2()
	 * @uses XiScreenerTypeTripleSearch::getType3()
	 * @uses XiScreenerTypeTripleSearch::getSearchType3()
	 * @uses XiScreenerTypeTripleSearch::getFirstValue3()
	 * @uses XiScreenerTypeTripleSearch::getSecondValue3()
	 * @uses XiScreenerTypeTripleSearch::getCount()
	 * @param XiScreenerTypeTripleSearch TripleSearch
	 * @return XiScreenerTypeTripleSearchResponse
	 */
	public function TripleSearch(XiScreenerTypeTripleSearch $_XiScreenerTypeTripleSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->TripleSearch(array('Type1'=>$_XiScreenerTypeTripleSearch->getType1(),'SearchType1'=>$_XiScreenerTypeTripleSearch->getSearchType1(),'FirstValue1'=>$_XiScreenerTypeTripleSearch->getFirstValue1(),'SecondValue1'=>$_XiScreenerTypeTripleSearch->getSecondValue1(),'Type2'=>$_XiScreenerTypeTripleSearch->getType2(),'SearchType2'=>$_XiScreenerTypeTripleSearch->getSearchType2(),'FirstValue2'=>$_XiScreenerTypeTripleSearch->getFirstValue2(),'SecondValue2'=>$_XiScreenerTypeTripleSearch->getSecondValue2(),'Type3'=>$_XiScreenerTypeTripleSearch->getType3(),'SearchType3'=>$_XiScreenerTypeTripleSearch->getSearchType3(),'FirstValue3'=>$_XiScreenerTypeTripleSearch->getFirstValue3(),'SecondValue3'=>$_XiScreenerTypeTripleSearch->getSecondValue3(),'Count'=>$_XiScreenerTypeTripleSearch->getCount())));
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
	 * @return XiScreenerTypeTripleSearchResponse
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