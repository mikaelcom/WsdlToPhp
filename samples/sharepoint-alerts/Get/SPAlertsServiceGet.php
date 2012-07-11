<?php
/**
 * Class file for SPAlertsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPAlertsServiceGet
 * @date 06/07/2012
 */
class SPAlertsServiceGet extends SPAlertsWsdlClass
{
	/**
	 * Method to call GetAlerts
	 * @uses SPAlertsWsdlClass::getSoapClient()
	 * @uses SPAlertsWsdlClass::setResult()
	 * @uses SPAlertsWsdlClass::getResult()
	 * @uses SPAlertsWsdlClass::saveLastError()
	 * @param SPAlertsTypeGetAlerts GetAlerts
	 * @return SPAlertsTypeGetAlertsResponse
	 */
	public function GetAlerts(SPAlertsTypeGetAlerts $_SPAlertsTypeGetAlerts)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAlerts(array()));
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
	 * @return SPAlertsTypeGetAlertsResponse
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