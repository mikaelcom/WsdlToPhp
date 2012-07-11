<?php
/**
 * Class file for SPAlertsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPAlertsServiceDelete
 * @date 06/07/2012
 */
class SPAlertsServiceDelete extends SPAlertsWsdlClass
{
	/**
	 * Method to call DeleteAlerts
	 * @uses SPAlertsWsdlClass::getSoapClient()
	 * @uses SPAlertsWsdlClass::setResult()
	 * @uses SPAlertsWsdlClass::getResult()
	 * @uses SPAlertsWsdlClass::saveLastError()
	 * @uses SPAlertsTypeDeleteAlerts::getIDs()
	 * @param SPAlertsTypeDeleteAlerts DeleteAlerts
	 * @return SPAlertsTypeDeleteAlertsResponse
	 */
	public function DeleteAlerts(SPAlertsTypeDeleteAlerts $_SPAlertsTypeDeleteAlerts)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteAlerts(array('IDs'=>$_SPAlertsTypeDeleteAlerts->getIDs())));
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
	 * @return SPAlertsTypeDeleteAlertsResponse
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