<?php
/**
 * Class file for XiScreenerServiceCompare
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceCompare
 * @date 08/07/2012
 */
class XiScreenerServiceCompare extends XiScreenerWsdlClass
{
	/**
	 * Method to call Compare
	 * Meta informations :
	 * 	- documentation : Search securities based on a comparison of two criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeCompare::getCompareType1()
	 * @uses XiScreenerTypeCompare::getComparison()
	 * @uses XiScreenerTypeCompare::getCompareType2()
	 * @uses XiScreenerTypeCompare::getType()
	 * @uses XiScreenerTypeCompare::getSearchType()
	 * @uses XiScreenerTypeCompare::getFirstValue()
	 * @uses XiScreenerTypeCompare::getSecondValue()
	 * @uses XiScreenerTypeCompare::getCount()
	 * @param XiScreenerTypeCompare Compare
	 * @return XiScreenerTypeCompareResponse
	 */
	public function Compare(XiScreenerTypeCompare $_XiScreenerTypeCompare)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Compare(array('CompareType1'=>$_XiScreenerTypeCompare->getCompareType1(),'Comparison'=>$_XiScreenerTypeCompare->getComparison(),'CompareType2'=>$_XiScreenerTypeCompare->getCompareType2(),'Type'=>$_XiScreenerTypeCompare->getType(),'SearchType'=>$_XiScreenerTypeCompare->getSearchType(),'FirstValue'=>$_XiScreenerTypeCompare->getFirstValue(),'SecondValue'=>$_XiScreenerTypeCompare->getSecondValue(),'Count'=>$_XiScreenerTypeCompare->getCount())));
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
	 * @return XiScreenerTypeCompareResponse
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