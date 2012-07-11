<?php
/**
 * Class file for XiRatesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiRatesServiceGet
 * @date 08/07/2012
 */
class XiRatesServiceGet extends XiRatesWsdlClass
{
	/**
	 * Method to call GetLIBORSecure
	 * Meta informations :
	 * 	- documentation : Returns Libor as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLIBORSecure::getUsername()
	 * @uses XiRatesTypeGetLIBORSecure::getType()
	 * @uses XiRatesTypeGetLIBORSecure::getCurrency()
	 * @uses XiRatesTypeGetLIBORSecure::getAsOfDate()
	 * @param XiRatesTypeGetLIBORSecure GetLIBORSecure
	 * @return XiRatesTypeGetLIBORSecureResponse
	 */
	public function GetLIBORSecure(XiRatesTypeGetLIBORSecure $_XiRatesTypeGetLIBORSecure)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLIBORSecure(array('Username'=>$_XiRatesTypeGetLIBORSecure->getUsername(),'Type'=>$_XiRatesTypeGetLIBORSecure->getType(),'Currency'=>$_XiRatesTypeGetLIBORSecure->getCurrency(),'AsOfDate'=>$_XiRatesTypeGetLIBORSecure->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLIBOR
	 * Meta informations :
	 * 	- documentation : Returns Libor as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLIBOR::getType()
	 * @uses XiRatesTypeGetLIBOR::getCurrency()
	 * @uses XiRatesTypeGetLIBOR::getAsOfDate()
	 * @param XiRatesTypeGetLIBOR GetLIBOR
	 * @return XiRatesTypeGetLIBORResponse
	 */
	public function GetLIBOR(XiRatesTypeGetLIBOR $_XiRatesTypeGetLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLIBOR(array('Type'=>$_XiRatesTypeGetLIBOR->getType(),'Currency'=>$_XiRatesTypeGetLIBOR->getCurrency(),'AsOfDate'=>$_XiRatesTypeGetLIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStateRate
	 * Meta informations :
	 * 	- documentation : Returns a state rate
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetStateRate::getType()
	 * @uses XiRatesTypeGetStateRate::getAsOfDate()
	 * @param XiRatesTypeGetStateRate GetStateRate
	 * @return XiRatesTypeGetStateRateResponse
	 */
	public function GetStateRate(XiRatesTypeGetStateRate $_XiRatesTypeGetStateRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStateRate(array('Type'=>$_XiRatesTypeGetStateRate->getType(),'AsOfDate'=>$_XiRatesTypeGetStateRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStateRates
	 * Meta informations :
	 * 	- documentation : Returns state rates for a date range.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetStateRates::getType()
	 * @uses XiRatesTypeGetStateRates::getFromDate()
	 * @uses XiRatesTypeGetStateRates::getToDate()
	 * @param XiRatesTypeGetStateRates GetStateRates
	 * @return XiRatesTypeGetStateRatesResponse
	 */
	public function GetStateRates(XiRatesTypeGetStateRates $_XiRatesTypeGetStateRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStateRates(array('Type'=>$_XiRatesTypeGetStateRates->getType(),'FromDate'=>$_XiRatesTypeGetStateRates->getFromDate(),'ToDate'=>$_XiRatesTypeGetStateRates->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFederalRate
	 * Meta informations :
	 * 	- documentation : Returns a federal discount borrowing rate
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetFederalRate::getType()
	 * @uses XiRatesTypeGetFederalRate::getAsOfDate()
	 * @param XiRatesTypeGetFederalRate GetFederalRate
	 * @return XiRatesTypeGetFederalRateResponse
	 */
	public function GetFederalRate(XiRatesTypeGetFederalRate $_XiRatesTypeGetFederalRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFederalRate(array('Type'=>$_XiRatesTypeGetFederalRate->getType(),'AsOfDate'=>$_XiRatesTypeGetFederalRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFederalRates
	 * Meta informations :
	 * 	- documentation : Returns federal discount borrowing for a date range.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetFederalRates::getType()
	 * @uses XiRatesTypeGetFederalRates::getFromDate()
	 * @uses XiRatesTypeGetFederalRates::getToDate()
	 * @param XiRatesTypeGetFederalRates GetFederalRates
	 * @return XiRatesTypeGetFederalRatesResponse
	 */
	public function GetFederalRates(XiRatesTypeGetFederalRates $_XiRatesTypeGetFederalRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFederalRates(array('Type'=>$_XiRatesTypeGetFederalRates->getType(),'FromDate'=>$_XiRatesTypeGetFederalRates->getFromDate(),'ToDate'=>$_XiRatesTypeGetFederalRates->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetForwardRateAgreement
	 * Meta informations :
	 * 	- documentation : Returns a calculated Forward Rate Agreement as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetForwardRateAgreement::getFirstType()
	 * @uses XiRatesTypeGetForwardRateAgreement::getSecondType()
	 * @uses XiRatesTypeGetForwardRateAgreement::getCurrency()
	 * @uses XiRatesTypeGetForwardRateAgreement::getAsOfDate()
	 * @param XiRatesTypeGetForwardRateAgreement GetForwardRateAgreement
	 * @return XiRatesTypeGetForwardRateAgreementResponse
	 */
	public function GetForwardRateAgreement(XiRatesTypeGetForwardRateAgreement $_XiRatesTypeGetForwardRateAgreement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetForwardRateAgreement(array('FirstType'=>$_XiRatesTypeGetForwardRateAgreement->getFirstType(),'SecondType'=>$_XiRatesTypeGetForwardRateAgreement->getSecondType(),'Currency'=>$_XiRatesTypeGetForwardRateAgreement->getCurrency(),'AsOfDate'=>$_XiRatesTypeGetForwardRateAgreement->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEuroDollarFRAStrip
	 * Meta informations :
	 * 	- documentation : Returns an IMM EuroDollar Synthetic Forward Rate strip
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @param XiRatesTypeGetEuroDollarFRAStrip GetEuroDollarFRAStrip
	 * @return XiRatesTypeGetEuroDollarFRAStripResponse
	 */
	public function GetEuroDollarFRAStrip(XiRatesTypeGetEuroDollarFRAStrip $_XiRatesTypeGetEuroDollarFRAStrip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEuroDollarFRAStrip(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSwapRate
	 * Meta informations :
	 * 	- documentation : Returns a Swap rate
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetSwapRate::getType()
	 * @uses XiRatesTypeGetSwapRate::getCurrency()
	 * @param XiRatesTypeGetSwapRate GetSwapRate
	 * @return XiRatesTypeGetSwapRateResponse
	 */
	public function GetSwapRate(XiRatesTypeGetSwapRate $_XiRatesTypeGetSwapRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwapRate(array('Type'=>$_XiRatesTypeGetSwapRate->getType(),'Currency'=>$_XiRatesTypeGetSwapRate->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSwapRateFamily
	 * Meta informations :
	 * 	- documentation : Returns a Swap rate Family
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetSwapRateFamily::getCurrency()
	 * @param XiRatesTypeGetSwapRateFamily GetSwapRateFamily
	 * @return XiRatesTypeGetSwapRateFamilyResponse
	 */
	public function GetSwapRateFamily(XiRatesTypeGetSwapRateFamily $_XiRatesTypeGetSwapRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwapRateFamily(array('Currency'=>$_XiRatesTypeGetSwapRateFamily->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwapRate
	 * Meta informations :
	 * 	- documentation : Returns a Swap rate as of a historical date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalSwapRate::getType()
	 * @uses XiRatesTypeGetHistoricalSwapRate::getCurrency()
	 * @uses XiRatesTypeGetHistoricalSwapRate::getAsOfDate()
	 * @param XiRatesTypeGetHistoricalSwapRate GetHistoricalSwapRate
	 * @return XiRatesTypeGetHistoricalSwapRateResponse
	 */
	public function GetHistoricalSwapRate(XiRatesTypeGetHistoricalSwapRate $_XiRatesTypeGetHistoricalSwapRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapRate(array('Type'=>$_XiRatesTypeGetHistoricalSwapRate->getType(),'Currency'=>$_XiRatesTypeGetHistoricalSwapRate->getCurrency(),'AsOfDate'=>$_XiRatesTypeGetHistoricalSwapRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwapRateRange
	 * Meta informations :
	 * 	- documentation : Returns a Swap rate as of a historical date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalSwapRateRange::getType()
	 * @uses XiRatesTypeGetHistoricalSwapRateRange::getCurrency()
	 * @uses XiRatesTypeGetHistoricalSwapRateRange::getStartDate()
	 * @uses XiRatesTypeGetHistoricalSwapRateRange::getEndDate()
	 * @param XiRatesTypeGetHistoricalSwapRateRange GetHistoricalSwapRateRange
	 * @return XiRatesTypeGetHistoricalSwapRateRangeResponse
	 */
	public function GetHistoricalSwapRateRange(XiRatesTypeGetHistoricalSwapRateRange $_XiRatesTypeGetHistoricalSwapRateRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapRateRange(array('Type'=>$_XiRatesTypeGetHistoricalSwapRateRange->getType(),'Currency'=>$_XiRatesTypeGetHistoricalSwapRateRange->getCurrency(),'StartDate'=>$_XiRatesTypeGetHistoricalSwapRateRange->getStartDate(),'EndDate'=>$_XiRatesTypeGetHistoricalSwapRateRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetREIBOR
	 * Meta informations :
	 * 	- documentation : Returns a REIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetREIBOR::getType()
	 * @uses XiRatesTypeGetREIBOR::getAsOfDate()
	 * @param XiRatesTypeGetREIBOR GetREIBOR
	 * @return XiRatesTypeGetREIBORResponse
	 */
	public function GetREIBOR(XiRatesTypeGetREIBOR $_XiRatesTypeGetREIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetREIBOR(array('Type'=>$_XiRatesTypeGetREIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetREIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHIBOR
	 * Meta informations :
	 * 	- documentation : Returns a HIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHIBOR::getType()
	 * @uses XiRatesTypeGetHIBOR::getAsOfDate()
	 * @param XiRatesTypeGetHIBOR GetHIBOR
	 * @return XiRatesTypeGetHIBORResponse
	 */
	public function GetHIBOR(XiRatesTypeGetHIBOR $_XiRatesTypeGetHIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHIBOR(array('Type'=>$_XiRatesTypeGetHIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetHIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSOFIBOR
	 * Meta informations :
	 * 	- documentation : Returns a SOFIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetSOFIBOR::getType()
	 * @uses XiRatesTypeGetSOFIBOR::getAsOfDate()
	 * @param XiRatesTypeGetSOFIBOR GetSOFIBOR
	 * @return XiRatesTypeGetSOFIBORResponse
	 */
	public function GetSOFIBOR(XiRatesTypeGetSOFIBOR $_XiRatesTypeGetSOFIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSOFIBOR(array('Type'=>$_XiRatesTypeGetSOFIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetSOFIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetREIBID
	 * Meta informations :
	 * 	- documentation : Returns a REIBID as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetREIBID::getType()
	 * @uses XiRatesTypeGetREIBID::getAsOfDate()
	 * @param XiRatesTypeGetREIBID GetREIBID
	 * @return XiRatesTypeGetREIBIDResponse
	 */
	public function GetREIBID(XiRatesTypeGetREIBID $_XiRatesTypeGetREIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetREIBID(array('Type'=>$_XiRatesTypeGetREIBID->getType(),'AsOfDate'=>$_XiRatesTypeGetREIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOIBOR
	 * Meta informations :
	 * 	- documentation : Returns a OIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetOIBOR::getType()
	 * @uses XiRatesTypeGetOIBOR::getAsOfDate()
	 * @param XiRatesTypeGetOIBOR GetOIBOR
	 * @return XiRatesTypeGetOIBORResponse
	 */
	public function GetOIBOR(XiRatesTypeGetOIBOR $_XiRatesTypeGetOIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOIBOR(array('Type'=>$_XiRatesTypeGetOIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetOIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSIBOR
	 * Meta informations :
	 * 	- documentation : Returns a SIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetSIBOR::getType()
	 * @uses XiRatesTypeGetSIBOR::getAsOfDate()
	 * @param XiRatesTypeGetSIBOR GetSIBOR
	 * @return XiRatesTypeGetSIBORResponse
	 */
	public function GetSIBOR(XiRatesTypeGetSIBOR $_XiRatesTypeGetSIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSIBOR(array('Type'=>$_XiRatesTypeGetSIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetSIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCIBOR
	 * Meta informations :
	 * 	- documentation : Returns a CIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetCIBOR::getType()
	 * @uses XiRatesTypeGetCIBOR::getAsOfDate()
	 * @param XiRatesTypeGetCIBOR GetCIBOR
	 * @return XiRatesTypeGetCIBORResponse
	 */
	public function GetCIBOR(XiRatesTypeGetCIBOR $_XiRatesTypeGetCIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCIBOR(array('Type'=>$_XiRatesTypeGetCIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetCIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSTIBOR
	 * Meta informations :
	 * 	- documentation : Returns a STIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetSTIBOR::getType()
	 * @uses XiRatesTypeGetSTIBOR::getAsOfDate()
	 * @param XiRatesTypeGetSTIBOR GetSTIBOR
	 * @return XiRatesTypeGetSTIBORResponse
	 */
	public function GetSTIBOR(XiRatesTypeGetSTIBOR $_XiRatesTypeGetSTIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSTIBOR(array('Type'=>$_XiRatesTypeGetSTIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetSTIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVILIBOR
	 * Meta informations :
	 * 	- documentation : Returns a VILIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetVILIBOR::getType()
	 * @uses XiRatesTypeGetVILIBOR::getAsOfDate()
	 * @param XiRatesTypeGetVILIBOR GetVILIBOR
	 * @return XiRatesTypeGetVILIBORResponse
	 */
	public function GetVILIBOR(XiRatesTypeGetVILIBOR $_XiRatesTypeGetVILIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVILIBOR(array('Type'=>$_XiRatesTypeGetVILIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetVILIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWIBOR
	 * Meta informations :
	 * 	- documentation : Returns a WIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetWIBOR::getType()
	 * @uses XiRatesTypeGetWIBOR::getAsOfDate()
	 * @param XiRatesTypeGetWIBOR GetWIBOR
	 * @return XiRatesTypeGetWIBORResponse
	 */
	public function GetWIBOR(XiRatesTypeGetWIBOR $_XiRatesTypeGetWIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWIBOR(array('Type'=>$_XiRatesTypeGetWIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetWIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEURIBOR
	 * Meta informations :
	 * 	- documentation : Returns a EURIBOR as of a date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetEURIBOR::getType()
	 * @uses XiRatesTypeGetEURIBOR::getAsOfDate()
	 * @param XiRatesTypeGetEURIBOR GetEURIBOR
	 * @return XiRatesTypeGetEURIBORResponse
	 */
	public function GetEURIBOR(XiRatesTypeGetEURIBOR $_XiRatesTypeGetEURIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEURIBOR(array('Type'=>$_XiRatesTypeGetEURIBOR->getType(),'AsOfDate'=>$_XiRatesTypeGetEURIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalLIBOR
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalLIBOR::getType()
	 * @uses XiRatesTypeGetHistoricalLIBOR::getCurrency()
	 * @uses XiRatesTypeGetHistoricalLIBOR::getFromDate()
	 * @uses XiRatesTypeGetHistoricalLIBOR::getToDate()
	 * @param XiRatesTypeGetHistoricalLIBOR GetHistoricalLIBOR
	 * @return XiRatesTypeGetHistoricalLIBORResponse
	 */
	public function GetHistoricalLIBOR(XiRatesTypeGetHistoricalLIBOR $_XiRatesTypeGetHistoricalLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalLIBOR(array('Type'=>$_XiRatesTypeGetHistoricalLIBOR->getType(),'Currency'=>$_XiRatesTypeGetHistoricalLIBOR->getCurrency(),'FromDate'=>$_XiRatesTypeGetHistoricalLIBOR->getFromDate(),'ToDate'=>$_XiRatesTypeGetHistoricalLIBOR->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetWSJRate
	 * Meta informations :
	 * 	- documentation : Returns a specific interest rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetWSJRate::getType()
	 * @uses XiRatesTypeGetWSJRate::getAsOfDate()
	 * @uses XiRatesTypeGetWSJRate::getQualifier()
	 * @param XiRatesTypeGetWSJRate GetWSJRate
	 * @return XiRatesTypeGetWSJRateResponse
	 */
	public function GetWSJRate(XiRatesTypeGetWSJRate $_XiRatesTypeGetWSJRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWSJRate(array('Type'=>$_XiRatesTypeGetWSJRate->getType(),'AsOfDate'=>$_XiRatesTypeGetWSJRate->getAsOfDate(),'Qualifier'=>$_XiRatesTypeGetWSJRate->getQualifier())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTelerate3750
	 * Meta informations :
	 * 	- documentation : Returns LIBOR rates as published daily on the Telerate 3750 screen at about 11:00 AM London time.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetTelerate3750::getAsOfDate()
	 * @param XiRatesTypeGetTelerate3750 GetTelerate3750
	 * @return XiRatesTypeGetTelerate3750Response
	 */
	public function GetTelerate3750(XiRatesTypeGetTelerate3750 $_XiRatesTypeGetTelerate3750)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTelerate3750(array('AsOfDate'=>$_XiRatesTypeGetTelerate3750->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastLondonFixing
	 * Meta informations :
	 * 	- documentation : Returns last UK Gold or Silver Fixings.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLastLondonFixing::getType()
	 * @uses XiRatesTypeGetLastLondonFixing::getCurrency()
	 * @param XiRatesTypeGetLastLondonFixing GetLastLondonFixing
	 * @return XiRatesTypeGetLastLondonFixingResponse
	 */
	public function GetLastLondonFixing(XiRatesTypeGetLastLondonFixing $_XiRatesTypeGetLastLondonFixing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastLondonFixing(array('Type'=>$_XiRatesTypeGetLastLondonFixing->getType(),'Currency'=>$_XiRatesTypeGetLastLondonFixing->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateSymbol
	 * Meta informations :
	 * 	- documentation : Returns the symbol for a rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateSymbol::getRateType()
	 * @uses XiRatesTypeGetRateSymbol::getCurrency()
	 * @param XiRatesTypeGetRateSymbol GetRateSymbol
	 * @return XiRatesTypeGetRateSymbolResponse
	 */
	public function GetRateSymbol(XiRatesTypeGetRateSymbol $_XiRatesTypeGetRateSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateSymbol(array('RateType'=>$_XiRatesTypeGetRateSymbol->getRateType(),'Currency'=>$_XiRatesTypeGetRateSymbol->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateFromSymbol
	 * Meta informations :
	 * 	- documentation : Returns the symbol for a rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateFromSymbol::getSymbol()
	 * @param XiRatesTypeGetRateFromSymbol GetRateFromSymbol
	 * @return XiRatesTypeGetRateFromSymbolResponse
	 */
	public function GetRateFromSymbol(XiRatesTypeGetRateFromSymbol $_XiRatesTypeGetRateFromSymbol)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateFromSymbol(array('Symbol'=>$_XiRatesTypeGetRateFromSymbol->getSymbol())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRate
	 * Meta informations :
	 * 	- documentation : Returns a rate as of a specific date.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRate::getRateType()
	 * @uses XiRatesTypeGetRate::getAsOfDate()
	 * @param XiRatesTypeGetRate GetRate
	 * @return XiRatesTypeGetRateResponse
	 */
	public function GetRate(XiRatesTypeGetRate $_XiRatesTypeGetRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRate(array('RateType'=>$_XiRatesTypeGetRate->getRateType(),'AsOfDate'=>$_XiRatesTypeGetRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateFamilyTable
	 * Meta informations :
	 * 	- documentation : Returns a rate table for a rate family.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateFamilyTable::getRateFamilyType()
	 * @param XiRatesTypeGetRateFamilyTable GetRateFamilyTable
	 * @return XiRatesTypeGetRateFamilyTableResponse
	 */
	public function GetRateFamilyTable(XiRatesTypeGetRateFamilyTable $_XiRatesTypeGetRateFamilyTable)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateFamilyTable(array('RateFamilyType'=>$_XiRatesTypeGetRateFamilyTable->getRateFamilyType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAverageRate
	 * Meta informations :
	 * 	- documentation : Returns an average rate as of a specific date.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetAverageRate::getRateType()
	 * @uses XiRatesTypeGetAverageRate::getPeriodType()
	 * @uses XiRatesTypeGetAverageRate::getAsOfDate()
	 * @param XiRatesTypeGetAverageRate GetAverageRate
	 * @return XiRatesTypeGetAverageRateResponse
	 */
	public function GetAverageRate(XiRatesTypeGetAverageRate $_XiRatesTypeGetAverageRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAverageRate(array('RateType'=>$_XiRatesTypeGetAverageRate->getRateType(),'PeriodType'=>$_XiRatesTypeGetAverageRate->getPeriodType(),'AsOfDate'=>$_XiRatesTypeGetAverageRate->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAverageRates
	 * Meta informations :
	 * 	- documentation : Returns average rate for a period.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetAverageRates::getRateType()
	 * @uses XiRatesTypeGetAverageRates::getPeriodType()
	 * @uses XiRatesTypeGetAverageRates::getFromDate()
	 * @uses XiRatesTypeGetAverageRates::getToDate()
	 * @param XiRatesTypeGetAverageRates GetAverageRates
	 * @return XiRatesTypeGetAverageRatesResponse
	 */
	public function GetAverageRates(XiRatesTypeGetAverageRates $_XiRatesTypeGetAverageRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAverageRates(array('RateType'=>$_XiRatesTypeGetAverageRates->getRateType(),'PeriodType'=>$_XiRatesTypeGetAverageRates->getPeriodType(),'FromDate'=>$_XiRatesTypeGetAverageRates->getFromDate(),'ToDate'=>$_XiRatesTypeGetAverageRates->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateMovingAverage
	 * Meta informations :
	 * 	- documentation : Returns a moving average rate as of a specific date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateMovingAverage::getRateType()
	 * @uses XiRatesTypeGetRateMovingAverage::getPeriodType()
	 * @uses XiRatesTypeGetRateMovingAverage::getAveragePeriods()
	 * @uses XiRatesTypeGetRateMovingAverage::getFromDate()
	 * @uses XiRatesTypeGetRateMovingAverage::getToDate()
	 * @param XiRatesTypeGetRateMovingAverage GetRateMovingAverage
	 * @return XiRatesTypeGetRateMovingAverageResponse
	 */
	public function GetRateMovingAverage(XiRatesTypeGetRateMovingAverage $_XiRatesTypeGetRateMovingAverage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateMovingAverage(array('RateType'=>$_XiRatesTypeGetRateMovingAverage->getRateType(),'PeriodType'=>$_XiRatesTypeGetRateMovingAverage->getPeriodType(),'AveragePeriods'=>$_XiRatesTypeGetRateMovingAverage->getAveragePeriods(),'FromDate'=>$_XiRatesTypeGetRateMovingAverage->getFromDate(),'ToDate'=>$_XiRatesTypeGetRateMovingAverage->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDailyAverage
	 * Meta informations :
	 * 	- documentation : Returns a daily average rate as of a specific date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetDailyAverage::getRateType()
	 * @uses XiRatesTypeGetDailyAverage::getCalendarDays()
	 * @uses XiRatesTypeGetDailyAverage::getAsOfDate()
	 * @param XiRatesTypeGetDailyAverage GetDailyAverage
	 * @return XiRatesTypeGetDailyAverageResponse
	 */
	public function GetDailyAverage(XiRatesTypeGetDailyAverage $_XiRatesTypeGetDailyAverage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDailyAverage(array('RateType'=>$_XiRatesTypeGetDailyAverage->getRateType(),'CalendarDays'=>$_XiRatesTypeGetDailyAverage->getCalendarDays(),'AsOfDate'=>$_XiRatesTypeGetDailyAverage->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMonthlyTreasuryAverage
	 * Meta informations :
	 * 	- documentation : Returns a daily average rate as of a specific date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetMonthlyTreasuryAverage::getRateType()
	 * @uses XiRatesTypeGetMonthlyTreasuryAverage::getMonth()
	 * @uses XiRatesTypeGetMonthlyTreasuryAverage::getYear()
	 * @param XiRatesTypeGetMonthlyTreasuryAverage GetMonthlyTreasuryAverage
	 * @return XiRatesTypeGetMonthlyTreasuryAverageResponse
	 */
	public function GetMonthlyTreasuryAverage(XiRatesTypeGetMonthlyTreasuryAverage $_XiRatesTypeGetMonthlyTreasuryAverage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMonthlyTreasuryAverage(array('RateType'=>$_XiRatesTypeGetMonthlyTreasuryAverage->getRateType(),'Month'=>$_XiRatesTypeGetMonthlyTreasuryAverage->getMonth(),'Year'=>$_XiRatesTypeGetMonthlyTreasuryAverage->getYear())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateFamily
	 * Meta informations :
	 * 	- documentation : Returns a collection of related rate as of a specific date
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateFamily::getRateFamilyType()
	 * @uses XiRatesTypeGetRateFamily::getAsOfDate()
	 * @param XiRatesTypeGetRateFamily GetRateFamily
	 * @return XiRatesTypeGetRateFamilyResponse
	 */
	public function GetRateFamily(XiRatesTypeGetRateFamily $_XiRatesTypeGetRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateFamily(array('RateFamilyType'=>$_XiRatesTypeGetRateFamily->getRateFamilyType(),'AsOfDate'=>$_XiRatesTypeGetRateFamily->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTodaysRate
	 * Meta informations :
	 * 	- documentation : Returns end of day closing value for a rate
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetTodaysRate::getRateType()
	 * @param XiRatesTypeGetTodaysRate GetTodaysRate
	 * @return XiRatesTypeGetTodaysRateResponse
	 */
	public function GetTodaysRate(XiRatesTypeGetTodaysRate $_XiRatesTypeGetTodaysRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysRate(array('RateType'=>$_XiRatesTypeGetTodaysRate->getRateType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestRate
	 * Meta informations :
	 * 	- documentation : Returns latest value for a rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLatestRate::getRateType()
	 * @param XiRatesTypeGetLatestRate GetLatestRate
	 * @return XiRatesTypeGetLatestRateResponse
	 */
	public function GetLatestRate(XiRatesTypeGetLatestRate $_XiRatesTypeGetLatestRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestRate(array('RateType'=>$_XiRatesTypeGetLatestRate->getRateType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestRateSpecial
	 * Meta informations :
	 * 	- documentation : Returns latest value for a rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLatestRateSpecial::getRateType()
	 * @param XiRatesTypeGetLatestRateSpecial GetLatestRateSpecial
	 * @return XiRatesTypeGetLatestRateSpecialResponse
	 */
	public function GetLatestRateSpecial(XiRatesTypeGetLatestRateSpecial $_XiRatesTypeGetLatestRateSpecial)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestRateSpecial(array('RateType'=>$_XiRatesTypeGetLatestRateSpecial->getRateType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestRateFamily
	 * Meta informations :
	 * 	- documentation : Returns latest values for a rate family.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetLatestRateFamily::getRateFamilyType()
	 * @param XiRatesTypeGetLatestRateFamily GetLatestRateFamily
	 * @return XiRatesTypeGetLatestRateFamilyResponse
	 */
	public function GetLatestRateFamily(XiRatesTypeGetLatestRateFamily $_XiRatesTypeGetLatestRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestRateFamily(array('RateFamilyType'=>$_XiRatesTypeGetLatestRateFamily->getRateFamilyType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRealTimeRate
	 * Meta informations :
	 * 	- documentation : Returns the value for a rate as of a specific time in the day.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRealTimeRate::getRateType()
	 * @uses XiRatesTypeGetRealTimeRate::getTime()
	 * @param XiRatesTypeGetRealTimeRate GetRealTimeRate
	 * @return XiRatesTypeGetRealTimeRateResponse
	 */
	public function GetRealTimeRate(XiRatesTypeGetRealTimeRate $_XiRatesTypeGetRealTimeRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRealTimeRate(array('RateType'=>$_XiRatesTypeGetRealTimeRate->getRateType(),'Time'=>$_XiRatesTypeGetRealTimeRate->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateAsOfTime
	 * Meta informations :
	 * 	- documentation : Returns the value for a rate as of a specific time in the day.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateAsOfTime::getRateType()
	 * @uses XiRatesTypeGetRateAsOfTime::getTime()
	 * @param XiRatesTypeGetRateAsOfTime GetRateAsOfTime
	 * @return XiRatesTypeGetRateAsOfTimeResponse
	 */
	public function GetRateAsOfTime(XiRatesTypeGetRateAsOfTime $_XiRatesTypeGetRateAsOfTime)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateAsOfTime(array('RateType'=>$_XiRatesTypeGetRateAsOfTime->getRateType(),'Time'=>$_XiRatesTypeGetRateAsOfTime->getTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalRates
	 * Meta informations :
	 * 	- documentation : Returns a rate for a range of dates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalRates::getRateType()
	 * @uses XiRatesTypeGetHistoricalRates::getPeriodType()
	 * @uses XiRatesTypeGetHistoricalRates::getFromDate()
	 * @uses XiRatesTypeGetHistoricalRates::getToDate()
	 * @param XiRatesTypeGetHistoricalRates GetHistoricalRates
	 * @return XiRatesTypeGetHistoricalRatesResponse
	 */
	public function GetHistoricalRates(XiRatesTypeGetHistoricalRates $_XiRatesTypeGetHistoricalRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalRates(array('RateType'=>$_XiRatesTypeGetHistoricalRates->getRateType(),'PeriodType'=>$_XiRatesTypeGetHistoricalRates->getPeriodType(),'FromDate'=>$_XiRatesTypeGetHistoricalRates->getFromDate(),'ToDate'=>$_XiRatesTypeGetHistoricalRates->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalWeeklyRates
	 * Meta informations :
	 * 	- documentation : Returns a rate for a range of dates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalWeeklyRates::getRateType()
	 * @uses XiRatesTypeGetHistoricalWeeklyRates::getPeriodType()
	 * @uses XiRatesTypeGetHistoricalWeeklyRates::getFromDate()
	 * @uses XiRatesTypeGetHistoricalWeeklyRates::getToDate()
	 * @param XiRatesTypeGetHistoricalWeeklyRates GetHistoricalWeeklyRates
	 * @return XiRatesTypeGetHistoricalWeeklyRatesResponse
	 */
	public function GetHistoricalWeeklyRates(XiRatesTypeGetHistoricalWeeklyRates $_XiRatesTypeGetHistoricalWeeklyRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalWeeklyRates(array('RateType'=>$_XiRatesTypeGetHistoricalWeeklyRates->getRateType(),'PeriodType'=>$_XiRatesTypeGetHistoricalWeeklyRates->getPeriodType(),'FromDate'=>$_XiRatesTypeGetHistoricalWeeklyRates->getFromDate(),'ToDate'=>$_XiRatesTypeGetHistoricalWeeklyRates->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalRateFamily
	 * Meta informations :
	 * 	- documentation : Returns a rate family and for a range of dates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetHistoricalRateFamily::getRateFamilyType()
	 * @uses XiRatesTypeGetHistoricalRateFamily::getFromDate()
	 * @uses XiRatesTypeGetHistoricalRateFamily::getToDate()
	 * @param XiRatesTypeGetHistoricalRateFamily GetHistoricalRateFamily
	 * @return XiRatesTypeGetHistoricalRateFamilyResponse
	 */
	public function GetHistoricalRateFamily(XiRatesTypeGetHistoricalRateFamily $_XiRatesTypeGetHistoricalRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalRateFamily(array('RateFamilyType'=>$_XiRatesTypeGetHistoricalRateFamily->getRateFamilyType(),'FromDate'=>$_XiRatesTypeGetHistoricalRateFamily->getFromDate(),'ToDate'=>$_XiRatesTypeGetHistoricalRateFamily->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateDescription
	 * Meta informations :
	 * 	- documentation : Returns a description for a rate.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetRateDescription::getRateType()
	 * @param XiRatesTypeGetRateDescription GetRateDescription
	 * @return XiRatesTypeGetRateDescriptionResponse
	 */
	public function GetRateDescription(XiRatesTypeGetRateDescription $_XiRatesTypeGetRateDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateDescription(array('RateType'=>$_XiRatesTypeGetRateDescription->getRateType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRateStatistics
	 * Meta informations :
	 * 	- documentation : Returns statistics for available rates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @param XiRatesTypeGetRateStatistics GetRateStatistics
	 * @return XiRatesTypeGetRateStatisticsResponse
	 */
	public function GetRateStatistics(XiRatesTypeGetRateStatistics $_XiRatesTypeGetRateStatistics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateStatistics(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default design class for the rate Chart.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @param XiRatesTypeGetChartDesign GetChartDesign
	 * @return XiRatesTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiRatesTypeGetChartDesign $_XiRatesTypeGetChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartDesign(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetFHLBankRates
	 * Meta informations :
	 * 	- documentation : Returns Federal Home Loan Bank rates.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetFHLBankRates::getFHLBankType()
	 * @uses XiRatesTypeGetFHLBankRates::getFHLBankRateType()
	 * @uses XiRatesTypeGetFHLBankRates::getAsOfDate()
	 * @uses XiRatesTypeGetFHLBankRates::getFHLBankTerm()
	 * @param XiRatesTypeGetFHLBankRates GetFHLBankRates
	 * @return XiRatesTypeGetFHLBankRatesResponse
	 */
	public function GetFHLBankRates(XiRatesTypeGetFHLBankRates $_XiRatesTypeGetFHLBankRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFHLBankRates(array('FHLBankType'=>$_XiRatesTypeGetFHLBankRates->getFHLBankType(),'FHLBankRateType'=>$_XiRatesTypeGetFHLBankRates->getFHLBankRateType(),'AsOfDate'=>$_XiRatesTypeGetFHLBankRates->getAsOfDate(),'FHLBankTerm'=>$_XiRatesTypeGetFHLBankRates->getFHLBankTerm())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAuctionResult
	 * Meta informations :
	 * 	- documentation : Returns an auction result by cusip.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetAuctionResult::getCUSIP()
	 * @param XiRatesTypeGetAuctionResult GetAuctionResult
	 * @return XiRatesTypeGetAuctionResultResponse
	 */
	public function GetAuctionResult(XiRatesTypeGetAuctionResult $_XiRatesTypeGetAuctionResult)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAuctionResult(array('CUSIP'=>$_XiRatesTypeGetAuctionResult->getCUSIP())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAuctionResults
	 * Meta informations :
	 * 	- documentation : Returns auction results by date.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeGetAuctionResults::getStartDate()
	 * @uses XiRatesTypeGetAuctionResults::getEndDate()
	 * @param XiRatesTypeGetAuctionResults GetAuctionResults
	 * @return XiRatesTypeGetAuctionResultsResponse
	 */
	public function GetAuctionResults(XiRatesTypeGetAuctionResults $_XiRatesTypeGetAuctionResults)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAuctionResults(array('StartDate'=>$_XiRatesTypeGetAuctionResults->getStartDate(),'EndDate'=>$_XiRatesTypeGetAuctionResults->getEndDate())));
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
	 * @return XiRatesTypeGetAuctionResultsResponse
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