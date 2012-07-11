<?php
/**
 * Class file for XiScreenerServiceCount
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceCount
 * @date 08/07/2012
 */
class XiScreenerServiceCount extends XiScreenerWsdlClass
{
	/**
	 * Method to call Count
	 * Meta informations :
	 * 	- documentation : Count securities matching a set of criteria.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @uses XiScreenerTypeCount::getCriteria()
	 * @param XiScreenerTypeCount Count
	 * @return XiScreenerTypeCountResponse
	 */
	public function Count(XiScreenerTypeCount $_XiScreenerTypeCount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Count(array('Criteria'=>$_XiScreenerTypeCount->getCriteria())));
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
	 * @return XiScreenerTypeCountResponse
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