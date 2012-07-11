<?php
/**
 * Class file for XiScreenerServiceDouble
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceDouble
 * @date 08/07/2012
 */
class XiScreenerServiceDouble extends XiScreenerWsdlClass
{
	/**
	 * Method to call DoubleSearch
	 * Meta informations :
	 * 	- documentation : Search securities based on two criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeDoubleSearch::getType1()
	 * @uses XiScreenerTypeDoubleSearch::getSearchType1()
	 * @uses XiScreenerTypeDoubleSearch::getFirstValue1()
	 * @uses XiScreenerTypeDoubleSearch::getSecondValue1()
	 * @uses XiScreenerTypeDoubleSearch::getType2()
	 * @uses XiScreenerTypeDoubleSearch::getSearchType2()
	 * @uses XiScreenerTypeDoubleSearch::getFirstValue2()
	 * @uses XiScreenerTypeDoubleSearch::getSecondValue2()
	 * @uses XiScreenerTypeDoubleSearch::getCount()
	 * @param XiScreenerTypeDoubleSearch DoubleSearch
	 * @return XiScreenerTypeDoubleSearchResponse
	 */
	public function DoubleSearch(XiScreenerTypeDoubleSearch $_XiScreenerTypeDoubleSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoubleSearch(array('Type1'=>$_XiScreenerTypeDoubleSearch->getType1(),'SearchType1'=>$_XiScreenerTypeDoubleSearch->getSearchType1(),'FirstValue1'=>$_XiScreenerTypeDoubleSearch->getFirstValue1(),'SecondValue1'=>$_XiScreenerTypeDoubleSearch->getSecondValue1(),'Type2'=>$_XiScreenerTypeDoubleSearch->getType2(),'SearchType2'=>$_XiScreenerTypeDoubleSearch->getSearchType2(),'FirstValue2'=>$_XiScreenerTypeDoubleSearch->getFirstValue2(),'SecondValue2'=>$_XiScreenerTypeDoubleSearch->getSecondValue2(),'Count'=>$_XiScreenerTypeDoubleSearch->getCount())));
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
	 * @return XiScreenerTypeDoubleSearchResponse
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