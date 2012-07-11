<?php
/**
 * Class file for XiHoldingsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsServiceGet
 * @date 08/07/2012
 */
class XiHoldingsServiceGet extends XiHoldingsWsdlClass
{
	/**
	 * Method to call GetFormSC13XDetails
	 * Meta informations :
	 * 	- documentation : Get detailed information on a SEC 13 D or G form.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetFormSC13XDetails::getHTMLUrl()
	 * @param XiHoldingsTypeGetFormSC13XDetails GetFormSC13XDetails
	 * @return XiHoldingsTypeGetFormSC13XDetailsResponse
	 */
	public function GetFormSC13XDetails(XiHoldingsTypeGetFormSC13XDetails $_XiHoldingsTypeGetFormSC13XDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFormSC13XDetails(array('HTMLUrl'=>$_XiHoldingsTypeGetFormSC13XDetails->getHTMLUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestHoldings
	 * Meta informations :
	 * 	- documentation : Returns latest holding information for an investment manager.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetLatestHoldings::getManagerCIK()
	 * @param XiHoldingsTypeGetLatestHoldings GetLatestHoldings
	 * @return XiHoldingsTypeGetLatestHoldingsResponse
	 */
	public function GetLatestHoldings(XiHoldingsTypeGetLatestHoldings $_XiHoldingsTypeGetLatestHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetLatestHoldings->getManagerCIK())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopHoldings
	 * Meta informations :
	 * 	- documentation : Returns Top holding information for an investment manager.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetTopHoldings::getManagerCIK()
	 * @uses XiHoldingsTypeGetTopHoldings::getTopCount()
	 * @param XiHoldingsTypeGetTopHoldings GetTopHoldings
	 * @return XiHoldingsTypeGetTopHoldingsResponse
	 */
	public function GetTopHoldings(XiHoldingsTypeGetTopHoldings $_XiHoldingsTypeGetTopHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetTopHoldings->getManagerCIK(),'TopCount'=>$_XiHoldingsTypeGetTopHoldings->getTopCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalHoldings
	 * Meta informations :
	 * 	- documentation : Returns holding information for an investment manager as of a historical date.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHistoricalHoldings::getManagerCIK()
	 * @uses XiHoldingsTypeGetHistoricalHoldings::getAsOfDate()
	 * @param XiHoldingsTypeGetHistoricalHoldings GetHistoricalHoldings
	 * @return XiHoldingsTypeGetHistoricalHoldingsResponse
	 */
	public function GetHistoricalHoldings(XiHoldingsTypeGetHistoricalHoldings $_XiHoldingsTypeGetHistoricalHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetHistoricalHoldings->getManagerCIK(),'AsOfDate'=>$_XiHoldingsTypeGetHistoricalHoldings->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHoldersChanges
	 * Meta informations :
	 * 	- documentation : return an array of Ids the user can use to get the holders
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHoldersChanges::getFromDate()
	 * @uses XiHoldingsTypeGetHoldersChanges::getToDate()
	 * @param XiHoldingsTypeGetHoldersChanges GetHoldersChanges
	 * @return XiHoldingsTypeGetHoldersChangesResponse
	 */
	public function GetHoldersChanges(XiHoldingsTypeGetHoldersChanges $_XiHoldingsTypeGetHoldersChanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHoldersChanges(array('FromDate'=>$_XiHoldingsTypeGetHoldersChanges->getFromDate(),'ToDate'=>$_XiHoldingsTypeGetHoldersChanges->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHoldingsChanges
	 * Meta informations :
	 * 	- documentation : return an array of Ids the user can use to get the holdings
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHoldingsChanges::getFromDate()
	 * @uses XiHoldingsTypeGetHoldingsChanges::getToDate()
	 * @param XiHoldingsTypeGetHoldingsChanges GetHoldingsChanges
	 * @return XiHoldingsTypeGetHoldingsChangesResponse
	 */
	public function GetHoldingsChanges(XiHoldingsTypeGetHoldingsChanges $_XiHoldingsTypeGetHoldingsChanges)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHoldingsChanges(array('FromDate'=>$_XiHoldingsTypeGetHoldingsChanges->getFromDate(),'ToDate'=>$_XiHoldingsTypeGetHoldingsChanges->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFivePercentHoldings
	 * Meta informations :
	 * 	- documentation : Returns 5% (13D) holding information for an investment manager as of a historical date.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetFivePercentHoldings::getManagerCIK()
	 * @uses XiHoldingsTypeGetFivePercentHoldings::getAsOfDate()
	 * @param XiHoldingsTypeGetFivePercentHoldings GetFivePercentHoldings
	 * @return XiHoldingsTypeGetFivePercentHoldingsResponse
	 */
	public function GetFivePercentHoldings(XiHoldingsTypeGetFivePercentHoldings $_XiHoldingsTypeGetFivePercentHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFivePercentHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetFivePercentHoldings->getManagerCIK(),'AsOfDate'=>$_XiHoldingsTypeGetFivePercentHoldings->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestHolders
	 * Meta informations :
	 * 	- documentation : Returns latest holding information for a security.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetLatestHolders::getIdentifier()
	 * @uses XiHoldingsTypeGetLatestHolders::getIdentifierType()
	 * @param XiHoldingsTypeGetLatestHolders GetLatestHolders
	 * @return XiHoldingsTypeGetLatestHoldersResponse
	 */
	public function GetLatestHolders(XiHoldingsTypeGetLatestHolders $_XiHoldingsTypeGetLatestHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestHolders(array('Identifier'=>$_XiHoldingsTypeGetLatestHolders->getIdentifier(),'IdentifierType'=>$_XiHoldingsTypeGetLatestHolders->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopHolders
	 * Meta informations :
	 * 	- documentation : Returns latest holding information for a security.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetTopHolders::getIdentifier()
	 * @uses XiHoldingsTypeGetTopHolders::getIdentifierType()
	 * @uses XiHoldingsTypeGetTopHolders::getCount()
	 * @param XiHoldingsTypeGetTopHolders GetTopHolders
	 * @return XiHoldingsTypeGetTopHoldersResponse
	 */
	public function GetTopHolders(XiHoldingsTypeGetTopHolders $_XiHoldingsTypeGetTopHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopHolders(array('Identifier'=>$_XiHoldingsTypeGetTopHolders->getIdentifier(),'IdentifierType'=>$_XiHoldingsTypeGetTopHolders->getIdentifierType(),'Count'=>$_XiHoldingsTypeGetTopHolders->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalHolders
	 * Meta informations :
	 * 	- documentation : Returns historical holding information for a security.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHistoricalHolders::getIdentifier()
	 * @uses XiHoldingsTypeGetHistoricalHolders::getIdentifierType()
	 * @uses XiHoldingsTypeGetHistoricalHolders::getAsOfDate()
	 * @param XiHoldingsTypeGetHistoricalHolders GetHistoricalHolders
	 * @return XiHoldingsTypeGetHistoricalHoldersResponse
	 */
	public function GetHistoricalHolders(XiHoldingsTypeGetHistoricalHolders $_XiHoldingsTypeGetHistoricalHolders)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalHolders(array('Identifier'=>$_XiHoldingsTypeGetHistoricalHolders->getIdentifier(),'IdentifierType'=>$_XiHoldingsTypeGetHistoricalHolders->getIdentifierType(),'AsOfDate'=>$_XiHoldingsTypeGetHistoricalHolders->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalAmendedHoldings
	 * Meta informations :
	 * 	- documentation : Returns holding information for an investment manager as of a historical date.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHistoricalAmendedHoldings::getManagerCIK()
	 * @uses XiHoldingsTypeGetHistoricalAmendedHoldings::getAsOfDate()
	 * @param XiHoldingsTypeGetHistoricalAmendedHoldings GetHistoricalAmendedHoldings
	 * @return XiHoldingsTypeGetHistoricalAmendedHoldingsResponse
	 */
	public function GetHistoricalAmendedHoldings(XiHoldingsTypeGetHistoricalAmendedHoldings $_XiHoldingsTypeGetHistoricalAmendedHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalAmendedHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetHistoricalAmendedHoldings->getManagerCIK(),'AsOfDate'=>$_XiHoldingsTypeGetHistoricalAmendedHoldings->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalOriginalHoldings
	 * Meta informations :
	 * 	- documentation : Returns holding information for an investment manager as of a historical date.
	 * @uses XiHoldingsWsdlClass::getSoapClient()
	 * @uses XiHoldingsWsdlClass::setResult()
	 * @uses XiHoldingsWsdlClass::getResult()
	 * @uses XiHoldingsWsdlClass::saveLastError()
	 * @uses XiHoldingsTypeGetHistoricalOriginalHoldings::getManagerCIK()
	 * @uses XiHoldingsTypeGetHistoricalOriginalHoldings::getAsOfDate()
	 * @param XiHoldingsTypeGetHistoricalOriginalHoldings GetHistoricalOriginalHoldings
	 * @return XiHoldingsTypeGetHistoricalOriginalHoldingsResponse
	 */
	public function GetHistoricalOriginalHoldings(XiHoldingsTypeGetHistoricalOriginalHoldings $_XiHoldingsTypeGetHistoricalOriginalHoldings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalOriginalHoldings(array('ManagerCIK'=>$_XiHoldingsTypeGetHistoricalOriginalHoldings->getManagerCIK(),'AsOfDate'=>$_XiHoldingsTypeGetHistoricalOriginalHoldings->getAsOfDate())));
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
	 * @return XiHoldingsTypeGetHistoricalOriginalHoldingsResponse
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