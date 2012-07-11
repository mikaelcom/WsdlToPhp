<?php
/**
 * Class file for XiScreenerServiceSingle
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceSingle
 * @date 08/07/2012
 */
class XiScreenerServiceSingle extends XiScreenerWsdlClass
{
	/**
	 * Method to call SingleSearch
	 * Meta informations :
	 * 	- documentation : Search securities based on a single criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeSingleSearch::getType()
	 * @uses XiScreenerTypeSingleSearch::getSearchType()
	 * @uses XiScreenerTypeSingleSearch::getFirstValue()
	 * @uses XiScreenerTypeSingleSearch::getSecondValue()
	 * @uses XiScreenerTypeSingleSearch::getCount()
	 * @param XiScreenerTypeSingleSearch SingleSearch
	 * @return XiScreenerTypeSingleSearchResponse
	 */
	public function SingleSearch(XiScreenerTypeSingleSearch $_XiScreenerTypeSingleSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SingleSearch(array('Type'=>$_XiScreenerTypeSingleSearch->getType(),'SearchType'=>$_XiScreenerTypeSingleSearch->getSearchType(),'FirstValue'=>$_XiScreenerTypeSingleSearch->getFirstValue(),'SecondValue'=>$_XiScreenerTypeSingleSearch->getSecondValue(),'Count'=>$_XiScreenerTypeSingleSearch->getCount())));
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
	 * @return XiScreenerTypeSingleSearchResponse
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