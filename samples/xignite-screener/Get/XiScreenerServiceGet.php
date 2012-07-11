<?php
/**
 * Class file for XiScreenerServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceGet
 * @date 08/07/2012
 */
class XiScreenerServiceGet extends XiScreenerWsdlClass
{
	/**
	 * Method to call GetTop
	 * Meta informations :
	 * 	- documentation : Search securities based on a set of criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeGetTop::getOrderBy()
	 * @uses XiScreenerTypeGetTop::getDirection()
	 * @uses XiScreenerTypeGetTop::getCriteria()
	 * @uses XiScreenerTypeGetTop::getCount()
	 * @param XiScreenerTypeGetTop GetTop
	 * @return XiScreenerTypeGetTopResponse
	 */
	public function GetTop(XiScreenerTypeGetTop $_XiScreenerTypeGetTop)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTop(array('OrderBy'=>$_XiScreenerTypeGetTop->getOrderBy(),'Direction'=>$_XiScreenerTypeGetTop->getDirection(),'Criteria'=>$_XiScreenerTypeGetTop->getCriteria(),'Count'=>$_XiScreenerTypeGetTop->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopSingle
	 * Meta informations :
	 * 	- documentation : Search securities based on a single criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeGetTopSingle::getOrderBy()
	 * @uses XiScreenerTypeGetTopSingle::getDirection()
	 * @uses XiScreenerTypeGetTopSingle::getType()
	 * @uses XiScreenerTypeGetTopSingle::getSearchType()
	 * @uses XiScreenerTypeGetTopSingle::getFirstValue()
	 * @uses XiScreenerTypeGetTopSingle::getSecondValue()
	 * @uses XiScreenerTypeGetTopSingle::getCount()
	 * @param XiScreenerTypeGetTopSingle GetTopSingle
	 * @return XiScreenerTypeGetTopSingleResponse
	 */
	public function GetTopSingle(XiScreenerTypeGetTopSingle $_XiScreenerTypeGetTopSingle)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopSingle(array('OrderBy'=>$_XiScreenerTypeGetTopSingle->getOrderBy(),'Direction'=>$_XiScreenerTypeGetTopSingle->getDirection(),'Type'=>$_XiScreenerTypeGetTopSingle->getType(),'SearchType'=>$_XiScreenerTypeGetTopSingle->getSearchType(),'FirstValue'=>$_XiScreenerTypeGetTopSingle->getFirstValue(),'SecondValue'=>$_XiScreenerTypeGetTopSingle->getSecondValue(),'Count'=>$_XiScreenerTypeGetTopSingle->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetails
	 * Meta informations :
	 * 	- documentation : Returns the details for security.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeGetDetails::getSymbol()
	 * @param XiScreenerTypeGetDetails GetDetails
	 * @return XiScreenerTypeGetDetailsResponse
	 */
	public function GetDetails(XiScreenerTypeGetDetails $_XiScreenerTypeGetDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetails(array('Symbol'=>$_XiScreenerTypeGetDetails->getSymbol())));
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
	 * @return XiScreenerTypeGetDetailsResponse
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