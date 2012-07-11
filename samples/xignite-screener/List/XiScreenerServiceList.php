<?php
/**
 * Class file for XiScreenerServiceList
 * @date 08/07/2012
 */
/**
 * Class XiScreenerServiceList
 * @date 08/07/2012
 */
class XiScreenerServiceList extends XiScreenerWsdlClass
{
	/**
	 * Method to call ListCriteria
	 * Meta informations :
	 * 	- documentation : Lists valid search criteria for securities.
	 * @uses XiScreenerWsdlClass::getSoapClient()
	 * @uses XiScreenerWsdlClass::setResult()
	 * @uses XiScreenerWsdlClass::getResult()
	 * @uses XiScreenerWsdlClass::saveLastError()
	 * @param XiScreenerTypeListCriteria ListCriteria
	 * @return XiScreenerTypeListCriteriaResponse
	 */
	public function ListCriteria(XiScreenerTypeListCriteria $_XiScreenerTypeListCriteria)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ListCriteria(array()));
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
	 * @return XiScreenerTypeListCriteriaResponse
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