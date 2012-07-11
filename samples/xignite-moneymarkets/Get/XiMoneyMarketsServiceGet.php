<?php
/**
 * Class file for XiMoneyMarketsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsServiceGet
 * @date 08/07/2012
 */
class XiMoneyMarketsServiceGet extends XiMoneyMarketsWsdlClass
{
	/**
	 * Method to call GetForwardRateAgreement
	 * Meta informations :
	 * 	- documentation : Returns a calculated Forward Rate Agreement as of a date
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetForwardRateAgreement::getFirstType()
	 * @uses XiMoneyMarketsTypeGetForwardRateAgreement::getSecondType()
	 * @uses XiMoneyMarketsTypeGetForwardRateAgreement::getCurrency()
	 * @uses XiMoneyMarketsTypeGetForwardRateAgreement::getAsOfDate()
	 * @param XiMoneyMarketsTypeGetForwardRateAgreement GetForwardRateAgreement
	 * @return XiMoneyMarketsTypeGetForwardRateAgreementResponse
	 */
	public function GetForwardRateAgreement(XiMoneyMarketsTypeGetForwardRateAgreement $_XiMoneyMarketsTypeGetForwardRateAgreement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetForwardRateAgreement(array('FirstType'=>$_XiMoneyMarketsTypeGetForwardRateAgreement->getFirstType(),'SecondType'=>$_XiMoneyMarketsTypeGetForwardRateAgreement->getSecondType(),'Currency'=>$_XiMoneyMarketsTypeGetForwardRateAgreement->getCurrency(),'AsOfDate'=>$_XiMoneyMarketsTypeGetForwardRateAgreement->getAsOfDate())));
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
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @param XiMoneyMarketsTypeGetEuroDollarFRAStrip GetEuroDollarFRAStrip
	 * @return XiMoneyMarketsTypeGetEuroDollarFRAStripResponse
	 */
	public function GetEuroDollarFRAStrip(XiMoneyMarketsTypeGetEuroDollarFRAStrip $_XiMoneyMarketsTypeGetEuroDollarFRAStrip)
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
	 * Method to call GetSwaption
	 * Meta informations :
	 * 	- documentation : Returns a Swaption rate
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetSwaption::getFirstType()
	 * @uses XiMoneyMarketsTypeGetSwaption::getSecondType()
	 * @uses XiMoneyMarketsTypeGetSwaption::getCurrency()
	 * @param XiMoneyMarketsTypeGetSwaption GetSwaption
	 * @return XiMoneyMarketsTypeGetSwaptionResponse
	 */
	public function GetSwaption(XiMoneyMarketsTypeGetSwaption $_XiMoneyMarketsTypeGetSwaption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwaption(array('FirstType'=>$_XiMoneyMarketsTypeGetSwaption->getFirstType(),'SecondType'=>$_XiMoneyMarketsTypeGetSwaption->getSecondType(),'Currency'=>$_XiMoneyMarketsTypeGetSwaption->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSwaptionFamily
	 * Meta informations :
	 * 	- documentation : Returns a Swaption rate Family
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetSwaptionFamily::getCurrency()
	 * @param XiMoneyMarketsTypeGetSwaptionFamily GetSwaptionFamily
	 * @return XiMoneyMarketsTypeGetSwaptionFamilyResponse
	 */
	public function GetSwaptionFamily(XiMoneyMarketsTypeGetSwaptionFamily $_XiMoneyMarketsTypeGetSwaptionFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwaptionFamily(array('Currency'=>$_XiMoneyMarketsTypeGetSwaptionFamily->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwaption
	 * Meta informations :
	 * 	- documentation : Returns a Swaption as of a historical date
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaption::getFirstType()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaption::getSecondType()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaption::getCurrency()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaption::getAsOfDate()
	 * @param XiMoneyMarketsTypeGetHistoricalSwaption GetHistoricalSwaption
	 * @return XiMoneyMarketsTypeGetHistoricalSwaptionResponse
	 */
	public function GetHistoricalSwaption(XiMoneyMarketsTypeGetHistoricalSwaption $_XiMoneyMarketsTypeGetHistoricalSwaption)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwaption(array('FirstType'=>$_XiMoneyMarketsTypeGetHistoricalSwaption->getFirstType(),'SecondType'=>$_XiMoneyMarketsTypeGetHistoricalSwaption->getSecondType(),'Currency'=>$_XiMoneyMarketsTypeGetHistoricalSwaption->getCurrency(),'AsOfDate'=>$_XiMoneyMarketsTypeGetHistoricalSwaption->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSwaptionFamily
	 * Meta informations :
	 * 	- documentation : Returns a Swaption rate Family
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaptionFamily::getCurrency()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwaptionFamily::getAsOfDate()
	 * @param XiMoneyMarketsTypeGetHistoricalSwaptionFamily GetHistoricalSwaptionFamily
	 * @return XiMoneyMarketsTypeGetHistoricalSwaptionFamilyResponse
	 */
	public function GetHistoricalSwaptionFamily(XiMoneyMarketsTypeGetHistoricalSwaptionFamily $_XiMoneyMarketsTypeGetHistoricalSwaptionFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwaptionFamily(array('Currency'=>$_XiMoneyMarketsTypeGetHistoricalSwaptionFamily->getCurrency(),'AsOfDate'=>$_XiMoneyMarketsTypeGetHistoricalSwaptionFamily->getAsOfDate())));
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
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetSwapRate::getType()
	 * @uses XiMoneyMarketsTypeGetSwapRate::getCurrency()
	 * @param XiMoneyMarketsTypeGetSwapRate GetSwapRate
	 * @return XiMoneyMarketsTypeGetSwapRateResponse
	 */
	public function GetSwapRate(XiMoneyMarketsTypeGetSwapRate $_XiMoneyMarketsTypeGetSwapRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwapRate(array('Type'=>$_XiMoneyMarketsTypeGetSwapRate->getType(),'Currency'=>$_XiMoneyMarketsTypeGetSwapRate->getCurrency())));
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
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetSwapRateFamily::getCurrency()
	 * @param XiMoneyMarketsTypeGetSwapRateFamily GetSwapRateFamily
	 * @return XiMoneyMarketsTypeGetSwapRateFamilyResponse
	 */
	public function GetSwapRateFamily(XiMoneyMarketsTypeGetSwapRateFamily $_XiMoneyMarketsTypeGetSwapRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSwapRateFamily(array('Currency'=>$_XiMoneyMarketsTypeGetSwapRateFamily->getCurrency())));
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
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRate::getType()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRate::getCurrency()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRate::getAsOfDate()
	 * @param XiMoneyMarketsTypeGetHistoricalSwapRate GetHistoricalSwapRate
	 * @return XiMoneyMarketsTypeGetHistoricalSwapRateResponse
	 */
	public function GetHistoricalSwapRate(XiMoneyMarketsTypeGetHistoricalSwapRate $_XiMoneyMarketsTypeGetHistoricalSwapRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapRate(array('Type'=>$_XiMoneyMarketsTypeGetHistoricalSwapRate->getType(),'Currency'=>$_XiMoneyMarketsTypeGetHistoricalSwapRate->getCurrency(),'AsOfDate'=>$_XiMoneyMarketsTypeGetHistoricalSwapRate->getAsOfDate())));
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
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRateRange::getType()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRateRange::getCurrency()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRateRange::getStartDate()
	 * @uses XiMoneyMarketsTypeGetHistoricalSwapRateRange::getEndDate()
	 * @param XiMoneyMarketsTypeGetHistoricalSwapRateRange GetHistoricalSwapRateRange
	 * @return XiMoneyMarketsTypeGetHistoricalSwapRateRangeResponse
	 */
	public function GetHistoricalSwapRateRange(XiMoneyMarketsTypeGetHistoricalSwapRateRange $_XiMoneyMarketsTypeGetHistoricalSwapRateRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSwapRateRange(array('Type'=>$_XiMoneyMarketsTypeGetHistoricalSwapRateRange->getType(),'Currency'=>$_XiMoneyMarketsTypeGetHistoricalSwapRateRange->getCurrency(),'StartDate'=>$_XiMoneyMarketsTypeGetHistoricalSwapRateRange->getStartDate(),'EndDate'=>$_XiMoneyMarketsTypeGetHistoricalSwapRateRange->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTreasuryRate
	 * Meta informations :
	 * 	- documentation : Returns a real-time Treasury rate
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetTreasuryRate::getType()
	 * @uses XiMoneyMarketsTypeGetTreasuryRate::getCurrency()
	 * @param XiMoneyMarketsTypeGetTreasuryRate GetTreasuryRate
	 * @return XiMoneyMarketsTypeGetTreasuryRateResponse
	 */
	public function GetTreasuryRate(XiMoneyMarketsTypeGetTreasuryRate $_XiMoneyMarketsTypeGetTreasuryRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTreasuryRate(array('Type'=>$_XiMoneyMarketsTypeGetTreasuryRate->getType(),'Currency'=>$_XiMoneyMarketsTypeGetTreasuryRate->getCurrency())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTreasuryRateFamily
	 * Meta informations :
	 * 	- documentation : Returns a real-time Treasury rate family.
	 * @uses XiMoneyMarketsWsdlClass::getSoapClient()
	 * @uses XiMoneyMarketsWsdlClass::setResult()
	 * @uses XiMoneyMarketsWsdlClass::getResult()
	 * @uses XiMoneyMarketsWsdlClass::saveLastError()
	 * @uses XiMoneyMarketsTypeGetTreasuryRateFamily::getCurrency()
	 * @param XiMoneyMarketsTypeGetTreasuryRateFamily GetTreasuryRateFamily
	 * @return XiMoneyMarketsTypeGetTreasuryRateFamilyResponse
	 */
	public function GetTreasuryRateFamily(XiMoneyMarketsTypeGetTreasuryRateFamily $_XiMoneyMarketsTypeGetTreasuryRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTreasuryRateFamily(array('Currency'=>$_XiMoneyMarketsTypeGetTreasuryRateFamily->getCurrency())));
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
	 * @return XiMoneyMarketsTypeGetTreasuryRateFamilyResponse
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