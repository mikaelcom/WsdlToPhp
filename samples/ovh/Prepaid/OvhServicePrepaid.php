<?php
/**
 * Class file for OvhServicePrepaid
 * @date 02/07/2012
 */
/**
 * Class OvhServicePrepaid
 * @date 02/07/2012
 */
class OvhServicePrepaid extends OvhWsdlClass
{
	/**
	 * Method to call prepaidDomainCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidDomainCreate::getSession()
	 * @uses OvhTypePrepaidDomainCreate::getDomain()
	 * @uses OvhTypePrepaidDomainCreate::getNicowner()
	 * @uses OvhTypePrepaidDomainCreate::getNicadmin()
	 * @uses OvhTypePrepaidDomainCreate::getNictech()
	 * @uses OvhTypePrepaidDomainCreate::getNicbilling()
	 * @uses OvhTypePrepaidDomainCreate::getDns1()
	 * @uses OvhTypePrepaidDomainCreate::getDns2()
	 * @uses OvhTypePrepaidDomainCreate::getDns3()
	 * @uses OvhTypePrepaidDomainCreate::getDns4()
	 * @uses OvhTypePrepaidDomainCreate::getDns5()
	 * @uses OvhTypePrepaidDomainCreate::getFrpartBirthday()
	 * @uses OvhTypePrepaidDomainCreate::getFrpartBirthCountry()
	 * @uses OvhTypePrepaidDomainCreate::getFrpartBirthDepartment()
	 * @uses OvhTypePrepaidDomainCreate::getFrpartBirthTown()
	 * @uses OvhTypePrepaidDomainCreate::getDryRun()
	 * @param OvhTypePrepaidDomainCreate PrepaidDomainCreate
	 * @return OvhTypePrepaidDomainCreateResponse
	 */
	public function prepaidDomainCreate(OvhTypePrepaidDomainCreate $_ovhTypePrepaidDomainCreate)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidDomainCreateResponse(self::getSoapClient()->prepaidDomainCreate($_ovhTypePrepaidDomainCreate->getSession(),$_ovhTypePrepaidDomainCreate->getDomain(),$_ovhTypePrepaidDomainCreate->getNicowner(),$_ovhTypePrepaidDomainCreate->getNicadmin(),$_ovhTypePrepaidDomainCreate->getNictech(),$_ovhTypePrepaidDomainCreate->getNicbilling(),$_ovhTypePrepaidDomainCreate->getDns1(),$_ovhTypePrepaidDomainCreate->getDns2(),$_ovhTypePrepaidDomainCreate->getDns3(),$_ovhTypePrepaidDomainCreate->getDns4(),$_ovhTypePrepaidDomainCreate->getDns5(),$_ovhTypePrepaidDomainCreate->getFrpartBirthday(),$_ovhTypePrepaidDomainCreate->getFrpartBirthCountry(),$_ovhTypePrepaidDomainCreate->getFrpartBirthDepartment(),$_ovhTypePrepaidDomainCreate->getFrpartBirthTown(),$_ovhTypePrepaidDomainCreate->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidDomainTransfer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidDomainTransfer::getSession()
	 * @uses OvhTypePrepaidDomainTransfer::getDomain()
	 * @uses OvhTypePrepaidDomainTransfer::getNicowner()
	 * @uses OvhTypePrepaidDomainTransfer::getNicadmin()
	 * @uses OvhTypePrepaidDomainTransfer::getNictech()
	 * @uses OvhTypePrepaidDomainTransfer::getNicbilling()
	 * @uses OvhTypePrepaidDomainTransfer::getDns1()
	 * @uses OvhTypePrepaidDomainTransfer::getDns2()
	 * @uses OvhTypePrepaidDomainTransfer::getDns3()
	 * @uses OvhTypePrepaidDomainTransfer::getDns4()
	 * @uses OvhTypePrepaidDomainTransfer::getDns5()
	 * @uses OvhTypePrepaidDomainTransfer::getFrpartBirthday()
	 * @uses OvhTypePrepaidDomainTransfer::getFrpartBirthCountry()
	 * @uses OvhTypePrepaidDomainTransfer::getFrpartBirthDepartment()
	 * @uses OvhTypePrepaidDomainTransfer::getFrpartBirthTown()
	 * @uses OvhTypePrepaidDomainTransfer::getDryRun()
	 * @param OvhTypePrepaidDomainTransfer PrepaidDomainTransfer
	 * @return OvhTypePrepaidDomainTransferResponse
	 */
	public function prepaidDomainTransfer(OvhTypePrepaidDomainTransfer $_ovhTypePrepaidDomainTransfer)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidDomainTransferResponse(self::getSoapClient()->prepaidDomainTransfer($_ovhTypePrepaidDomainTransfer->getSession(),$_ovhTypePrepaidDomainTransfer->getDomain(),$_ovhTypePrepaidDomainTransfer->getNicowner(),$_ovhTypePrepaidDomainTransfer->getNicadmin(),$_ovhTypePrepaidDomainTransfer->getNictech(),$_ovhTypePrepaidDomainTransfer->getNicbilling(),$_ovhTypePrepaidDomainTransfer->getDns1(),$_ovhTypePrepaidDomainTransfer->getDns2(),$_ovhTypePrepaidDomainTransfer->getDns3(),$_ovhTypePrepaidDomainTransfer->getDns4(),$_ovhTypePrepaidDomainTransfer->getDns5(),$_ovhTypePrepaidDomainTransfer->getFrpartBirthday(),$_ovhTypePrepaidDomainTransfer->getFrpartBirthCountry(),$_ovhTypePrepaidDomainTransfer->getFrpartBirthDepartment(),$_ovhTypePrepaidDomainTransfer->getFrpartBirthTown(),$_ovhTypePrepaidDomainTransfer->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidSetThreshold
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidSetThreshold::getSession()
	 * @uses OvhTypePrepaidSetThreshold::getNic()
	 * @uses OvhTypePrepaidSetThreshold::getThreshold()
	 * @param OvhTypePrepaidSetThreshold PrepaidSetThreshold
	 * @return OvhTypePrepaidSetThresholdResponse
	 */
	public function prepaidSetThreshold(OvhTypePrepaidSetThreshold $_ovhTypePrepaidSetThreshold)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidSetThresholdResponse(self::getSoapClient()->prepaidSetThreshold($_ovhTypePrepaidSetThreshold->getSession(),$_ovhTypePrepaidSetThreshold->getNic(),$_ovhTypePrepaidSetThreshold->getThreshold())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidGetSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidGetSummary::getSession()
	 * @uses OvhTypePrepaidGetSummary::getNic()
	 * @param OvhTypePrepaidGetSummary PrepaidGetSummary
	 * @return OvhTypePrepaidGetSummaryResponse
	 */
	public function prepaidGetSummary(OvhTypePrepaidGetSummary $_ovhTypePrepaidGetSummary)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidGetSummaryResponse(self::getSoapClient()->prepaidGetSummary($_ovhTypePrepaidGetSummary->getSession(),$_ovhTypePrepaidGetSummary->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidDomainRenew
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidDomainRenew::getSession()
	 * @uses OvhTypePrepaidDomainRenew::getDomain()
	 * @uses OvhTypePrepaidDomainRenew::getDryRun()
	 * @param OvhTypePrepaidDomainRenew PrepaidDomainRenew
	 * @return OvhTypePrepaidDomainRenewResponse
	 */
	public function prepaidDomainRenew(OvhTypePrepaidDomainRenew $_ovhTypePrepaidDomainRenew)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidDomainRenewResponse(self::getSoapClient()->prepaidDomainRenew($_ovhTypePrepaidDomainRenew->getSession(),$_ovhTypePrepaidDomainRenew->getDomain(),$_ovhTypePrepaidDomainRenew->getDryRun())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidGetThreshold
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidGetThreshold::getSession()
	 * @uses OvhTypePrepaidGetThreshold::getNic()
	 * @param OvhTypePrepaidGetThreshold PrepaidGetThreshold
	 * @return OvhTypePrepaidGetThresholdResponse
	 */
	public function prepaidGetThreshold(OvhTypePrepaidGetThreshold $_ovhTypePrepaidGetThreshold)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidGetThresholdResponse(self::getSoapClient()->prepaidGetThreshold($_ovhTypePrepaidGetThreshold->getSession(),$_ovhTypePrepaidGetThreshold->getNic())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidGetHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidGetHistory::getSession()
	 * @uses OvhTypePrepaidGetHistory::getNic()
	 * @uses OvhTypePrepaidGetHistory::getPage()
	 * @param OvhTypePrepaidGetHistory PrepaidGetHistory
	 * @return OvhTypePrepaidGetHistoryResponse
	 */
	public function prepaidGetHistory(OvhTypePrepaidGetHistory $_ovhTypePrepaidGetHistory)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidGetHistoryResponse(self::getSoapClient()->prepaidGetHistory($_ovhTypePrepaidGetHistory->getSession(),$_ovhTypePrepaidGetHistory->getNic(),$_ovhTypePrepaidGetHistory->getPage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call prepaidGetBalance
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePrepaidGetBalance::getSession()
	 * @uses OvhTypePrepaidGetBalance::getNic()
	 * @param OvhTypePrepaidGetBalance PrepaidGetBalance
	 * @return OvhTypePrepaidGetBalanceResponse
	 */
	public function prepaidGetBalance(OvhTypePrepaidGetBalance $_ovhTypePrepaidGetBalance)
	{
		try
		{
			$this->setResult(new OvhTypePrepaidGetBalanceResponse(self::getSoapClient()->prepaidGetBalance($_ovhTypePrepaidGetBalance->getSession(),$_ovhTypePrepaidGetBalance->getNic())));
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
	 * @return OvhTypePrepaidGetBalanceResponse
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