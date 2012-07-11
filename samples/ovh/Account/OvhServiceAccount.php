<?php
/**
 * Class file for OvhServiceAccount
 * @date 02/07/2012
 */
/**
 * Class OvhServiceAccount
 * @date 02/07/2012
 */
class OvhServiceAccount extends OvhWsdlClass
{
	/**
	 * Method to call accountSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAccountSummary::getSession()
	 * @param OvhTypeAccountSummary AccountSummary
	 * @return OvhTypeAccountSummaryResponse
	 */
	public function accountSummary(OvhTypeAccountSummary $_ovhTypeAccountSummary)
	{
		try
		{
			$this->setResult(new OvhTypeAccountSummaryResponse(self::getSoapClient()->accountSummary($_ovhTypeAccountSummary->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call accountHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAccountHistory::getSession()
	 * @uses OvhTypeAccountHistory::getMonth()
	 * @uses OvhTypeAccountHistory::getYear()
	 * @param OvhTypeAccountHistory AccountHistory
	 * @return OvhTypeAccountHistoryResponse
	 */
	public function accountHistory(OvhTypeAccountHistory $_ovhTypeAccountHistory)
	{
		try
		{
			$this->setResult(new OvhTypeAccountHistoryResponse(self::getSoapClient()->accountHistory($_ovhTypeAccountHistory->getSession(),$_ovhTypeAccountHistory->getMonth(),$_ovhTypeAccountHistory->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call accountAlertThresholdSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAccountAlertThresholdSet::getSession()
	 * @uses OvhTypeAccountAlertThresholdSet::getThreshold()
	 * @param OvhTypeAccountAlertThresholdSet AccountAlertThresholdSet
	 * @return OvhTypeAccountAlertThresholdSetResponse
	 */
	public function accountAlertThresholdSet(OvhTypeAccountAlertThresholdSet $_ovhTypeAccountAlertThresholdSet)
	{
		try
		{
			$this->setResult(new OvhTypeAccountAlertThresholdSetResponse(self::getSoapClient()->accountAlertThresholdSet($_ovhTypeAccountAlertThresholdSet->getSession(),$_ovhTypeAccountAlertThresholdSet->getThreshold())));
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
	 * @return OvhTypeAccountAlertThresholdSetResponse
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