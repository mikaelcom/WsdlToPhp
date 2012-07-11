<?php
/**
 * Class file for XiInterBanksServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksServiceGet
 * @date 08/07/2012
 */
class XiInterBanksServiceGet extends XiInterBanksWsdlClass
{
	/**
	 * Method to call GetLIBORSecure
	 * Meta informations :
	 * 	- documentation : Returns Libor as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetLIBORSecure::getUsername()
	 * @uses XiInterBanksTypeGetLIBORSecure::getType()
	 * @uses XiInterBanksTypeGetLIBORSecure::getCurrency()
	 * @uses XiInterBanksTypeGetLIBORSecure::getAsOfDate()
	 * @param XiInterBanksTypeGetLIBORSecure GetLIBORSecure
	 * @return XiInterBanksTypeGetLIBORSecureResponse
	 */
	public function GetLIBORSecure(XiInterBanksTypeGetLIBORSecure $_XiInterBanksTypeGetLIBORSecure)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLIBORSecure(array('Username'=>$_XiInterBanksTypeGetLIBORSecure->getUsername(),'Type'=>$_XiInterBanksTypeGetLIBORSecure->getType(),'Currency'=>$_XiInterBanksTypeGetLIBORSecure->getCurrency(),'AsOfDate'=>$_XiInterBanksTypeGetLIBORSecure->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetLIBOR::getType()
	 * @uses XiInterBanksTypeGetLIBOR::getCurrency()
	 * @uses XiInterBanksTypeGetLIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetLIBOR GetLIBOR
	 * @return XiInterBanksTypeGetLIBORResponse
	 */
	public function GetLIBOR(XiInterBanksTypeGetLIBOR $_XiInterBanksTypeGetLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLIBOR(array('Type'=>$_XiInterBanksTypeGetLIBOR->getType(),'Currency'=>$_XiInterBanksTypeGetLIBOR->getCurrency(),'AsOfDate'=>$_XiInterBanksTypeGetLIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetREIBOR::getType()
	 * @uses XiInterBanksTypeGetREIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetREIBOR GetREIBOR
	 * @return XiInterBanksTypeGetREIBORResponse
	 */
	public function GetREIBOR(XiInterBanksTypeGetREIBOR $_XiInterBanksTypeGetREIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetREIBOR(array('Type'=>$_XiInterBanksTypeGetREIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetREIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetHIBOR::getType()
	 * @uses XiInterBanksTypeGetHIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetHIBOR GetHIBOR
	 * @return XiInterBanksTypeGetHIBORResponse
	 */
	public function GetHIBOR(XiInterBanksTypeGetHIBOR $_XiInterBanksTypeGetHIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHIBOR(array('Type'=>$_XiInterBanksTypeGetHIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetHIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBUBOR
	 * Meta informations :
	 * 	- documentation : Returns a BUBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBUBOR::getType()
	 * @uses XiInterBanksTypeGetBUBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetBUBOR GetBUBOR
	 * @return XiInterBanksTypeGetBUBORResponse
	 */
	public function GetBUBOR(XiInterBanksTypeGetBUBOR $_XiInterBanksTypeGetBUBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBUBOR(array('Type'=>$_XiInterBanksTypeGetBUBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBUBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetSOFIBOR::getType()
	 * @uses XiInterBanksTypeGetSOFIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetSOFIBOR GetSOFIBOR
	 * @return XiInterBanksTypeGetSOFIBORResponse
	 */
	public function GetSOFIBOR(XiInterBanksTypeGetSOFIBOR $_XiInterBanksTypeGetSOFIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSOFIBOR(array('Type'=>$_XiInterBanksTypeGetSOFIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetSOFIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetREIBID::getType()
	 * @uses XiInterBanksTypeGetREIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetREIBID GetREIBID
	 * @return XiInterBanksTypeGetREIBIDResponse
	 */
	public function GetREIBID(XiInterBanksTypeGetREIBID $_XiInterBanksTypeGetREIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetREIBID(array('Type'=>$_XiInterBanksTypeGetREIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetREIBID->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetOIBOR::getType()
	 * @uses XiInterBanksTypeGetOIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetOIBOR GetOIBOR
	 * @return XiInterBanksTypeGetOIBORResponse
	 */
	public function GetOIBOR(XiInterBanksTypeGetOIBOR $_XiInterBanksTypeGetOIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOIBOR(array('Type'=>$_XiInterBanksTypeGetOIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetOIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetSIBOR::getType()
	 * @uses XiInterBanksTypeGetSIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetSIBOR GetSIBOR
	 * @return XiInterBanksTypeGetSIBORResponse
	 */
	public function GetSIBOR(XiInterBanksTypeGetSIBOR $_XiInterBanksTypeGetSIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSIBOR(array('Type'=>$_XiInterBanksTypeGetSIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetSIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetCIBOR::getType()
	 * @uses XiInterBanksTypeGetCIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetCIBOR GetCIBOR
	 * @return XiInterBanksTypeGetCIBORResponse
	 */
	public function GetCIBOR(XiInterBanksTypeGetCIBOR $_XiInterBanksTypeGetCIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCIBOR(array('Type'=>$_XiInterBanksTypeGetCIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetCIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetSTIBOR::getType()
	 * @uses XiInterBanksTypeGetSTIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetSTIBOR GetSTIBOR
	 * @return XiInterBanksTypeGetSTIBORResponse
	 */
	public function GetSTIBOR(XiInterBanksTypeGetSTIBOR $_XiInterBanksTypeGetSTIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSTIBOR(array('Type'=>$_XiInterBanksTypeGetSTIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetSTIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetWIBOR::getType()
	 * @uses XiInterBanksTypeGetWIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetWIBOR GetWIBOR
	 * @return XiInterBanksTypeGetWIBORResponse
	 */
	public function GetWIBOR(XiInterBanksTypeGetWIBOR $_XiInterBanksTypeGetWIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWIBOR(array('Type'=>$_XiInterBanksTypeGetWIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetWIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetVILIBOR::getType()
	 * @uses XiInterBanksTypeGetVILIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetVILIBOR GetVILIBOR
	 * @return XiInterBanksTypeGetVILIBORResponse
	 */
	public function GetVILIBOR(XiInterBanksTypeGetVILIBOR $_XiInterBanksTypeGetVILIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVILIBOR(array('Type'=>$_XiInterBanksTypeGetVILIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetVILIBOR->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetEURIBOR::getType()
	 * @uses XiInterBanksTypeGetEURIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetEURIBOR GetEURIBOR
	 * @return XiInterBanksTypeGetEURIBORResponse
	 */
	public function GetEURIBOR(XiInterBanksTypeGetEURIBOR $_XiInterBanksTypeGetEURIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEURIBOR(array('Type'=>$_XiInterBanksTypeGetEURIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetEURIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPRIBOR
	 * Meta informations :
	 * 	- documentation : Returns a PRIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetPRIBOR::getType()
	 * @uses XiInterBanksTypeGetPRIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetPRIBOR GetPRIBOR
	 * @return XiInterBanksTypeGetPRIBORResponse
	 */
	public function GetPRIBOR(XiInterBanksTypeGetPRIBOR $_XiInterBanksTypeGetPRIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPRIBOR(array('Type'=>$_XiInterBanksTypeGetPRIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetPRIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKORIBOR
	 * Meta informations :
	 * 	- documentation : Returns a KORIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetKORIBOR::getType()
	 * @uses XiInterBanksTypeGetKORIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetKORIBOR GetKORIBOR
	 * @return XiInterBanksTypeGetKORIBORResponse
	 */
	public function GetKORIBOR(XiInterBanksTypeGetKORIBOR $_XiInterBanksTypeGetKORIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKORIBOR(array('Type'=>$_XiInterBanksTypeGetKORIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetKORIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMIBOR
	 * Meta informations :
	 * 	- documentation : Returns a MIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetMIBOR::getType()
	 * @uses XiInterBanksTypeGetMIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetMIBOR GetMIBOR
	 * @return XiInterBanksTypeGetMIBORResponse
	 */
	public function GetMIBOR(XiInterBanksTypeGetMIBOR $_XiInterBanksTypeGetMIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMIBOR(array('Type'=>$_XiInterBanksTypeGetMIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetMIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMIBID
	 * Meta informations :
	 * 	- documentation : Returns a MIBOID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetMIBID::getType()
	 * @uses XiInterBanksTypeGetMIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetMIBID GetMIBID
	 * @return XiInterBanksTypeGetMIBIDResponse
	 */
	public function GetMIBID(XiInterBanksTypeGetMIBID $_XiInterBanksTypeGetMIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMIBID(array('Type'=>$_XiInterBanksTypeGetMIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetMIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSABOR
	 * Meta informations :
	 * 	- documentation : Returns a SABOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetSABOR::getType()
	 * @uses XiInterBanksTypeGetSABOR::getAsOfDate()
	 * @param XiInterBanksTypeGetSABOR GetSABOR
	 * @return XiInterBanksTypeGetSABORResponse
	 */
	public function GetSABOR(XiInterBanksTypeGetSABOR $_XiInterBanksTypeGetSABOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSABOR(array('Type'=>$_XiInterBanksTypeGetSABOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetSABOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTAIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TAIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTAIBOR::getType()
	 * @uses XiInterBanksTypeGetTAIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTAIBOR GetTAIBOR
	 * @return XiInterBanksTypeGetTAIBORResponse
	 */
	public function GetTAIBOR(XiInterBanksTypeGetTAIBOR $_XiInterBanksTypeGetTAIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTAIBOR(array('Type'=>$_XiInterBanksTypeGetTAIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTAIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTURKIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TURKIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTURKIBOR::getType()
	 * @uses XiInterBanksTypeGetTURKIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTURKIBOR GetTURKIBOR
	 * @return XiInterBanksTypeGetTURKIBORResponse
	 */
	public function GetTURKIBOR(XiInterBanksTypeGetTURKIBOR $_XiInterBanksTypeGetTURKIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTURKIBOR(array('Type'=>$_XiInterBanksTypeGetTURKIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTURKIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMEXIBOR
	 * Meta informations :
	 * 	- documentation : Returns a MEXIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetMEXIBOR::getType()
	 * @uses XiInterBanksTypeGetMEXIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetMEXIBOR GetMEXIBOR
	 * @return XiInterBanksTypeGetMEXIBORResponse
	 */
	public function GetMEXIBOR(XiInterBanksTypeGetMEXIBOR $_XiInterBanksTypeGetMEXIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMEXIBOR(array('Type'=>$_XiInterBanksTypeGetMEXIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetMEXIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTELBOR
	 * Meta informations :
	 * 	- documentation : Returns a TELBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTELBOR::getType()
	 * @uses XiInterBanksTypeGetTELBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTELBOR GetTELBOR
	 * @return XiInterBanksTypeGetTELBORResponse
	 */
	public function GetTELBOR(XiInterBanksTypeGetTELBOR $_XiInterBanksTypeGetTELBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTELBOR(array('Type'=>$_XiInterBanksTypeGetTELBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTELBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCHILIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TELBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetCHILIBOR::getType()
	 * @uses XiInterBanksTypeGetCHILIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetCHILIBOR GetCHILIBOR
	 * @return XiInterBanksTypeGetCHILIBORResponse
	 */
	public function GetCHILIBOR(XiInterBanksTypeGetCHILIBOR $_XiInterBanksTypeGetCHILIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCHILIBOR(array('Type'=>$_XiInterBanksTypeGetCHILIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetCHILIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCHIBOR
	 * Meta informations :
	 * 	- documentation : Returns a CHIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetCHIBOR::getType()
	 * @uses XiInterBanksTypeGetCHIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetCHIBOR GetCHIBOR
	 * @return XiInterBanksTypeGetCHIBORResponse
	 */
	public function GetCHIBOR(XiInterBanksTypeGetCHIBOR $_XiInterBanksTypeGetCHIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCHIBOR(array('Type'=>$_XiInterBanksTypeGetCHIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetCHIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKAIBOR
	 * Meta informations :
	 * 	- documentation : Returns a KAIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetKAIBOR::getType()
	 * @uses XiInterBanksTypeGetKAIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetKAIBOR GetKAIBOR
	 * @return XiInterBanksTypeGetKAIBORResponse
	 */
	public function GetKAIBOR(XiInterBanksTypeGetKAIBOR $_XiInterBanksTypeGetKAIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKAIBOR(array('Type'=>$_XiInterBanksTypeGetKAIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetKAIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKIBOR
	 * Meta informations :
	 * 	- documentation : Returns a KIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetKIBOR::getType()
	 * @uses XiInterBanksTypeGetKIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetKIBOR GetKIBOR
	 * @return XiInterBanksTypeGetKIBORResponse
	 */
	public function GetKIBOR(XiInterBanksTypeGetKIBOR $_XiInterBanksTypeGetKIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKIBOR(array('Type'=>$_XiInterBanksTypeGetKIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetKIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKIBID
	 * Meta informations :
	 * 	- documentation : Returns a KIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetKIBID::getType()
	 * @uses XiInterBanksTypeGetKIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetKIBID GetKIBID
	 * @return XiInterBanksTypeGetKIBIDResponse
	 */
	public function GetKIBID(XiInterBanksTypeGetKIBID $_XiInterBanksTypeGetKIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKIBID(array('Type'=>$_XiInterBanksTypeGetKIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetKIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSHIBOR
	 * Meta informations :
	 * 	- documentation : Returns a SHIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetSHIBOR::getType()
	 * @uses XiInterBanksTypeGetSHIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetSHIBOR GetSHIBOR
	 * @return XiInterBanksTypeGetSHIBORResponse
	 */
	public function GetSHIBOR(XiInterBanksTypeGetSHIBOR $_XiInterBanksTypeGetSHIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSHIBOR(array('Type'=>$_XiInterBanksTypeGetSHIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetSHIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetJIBOR
	 * Meta informations :
	 * 	- documentation : Returns a JIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetJIBOR::getType()
	 * @uses XiInterBanksTypeGetJIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetJIBOR GetJIBOR
	 * @return XiInterBanksTypeGetJIBORResponse
	 */
	public function GetJIBOR(XiInterBanksTypeGetJIBOR $_XiInterBanksTypeGetJIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetJIBOR(array('Type'=>$_XiInterBanksTypeGetJIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetJIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetKLIBOR
	 * Meta informations :
	 * 	- documentation : Returns a KLIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetKLIBOR::getType()
	 * @uses XiInterBanksTypeGetKLIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetKLIBOR GetKLIBOR
	 * @return XiInterBanksTypeGetKLIBORResponse
	 */
	public function GetKLIBOR(XiInterBanksTypeGetKLIBOR $_XiInterBanksTypeGetKLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetKLIBOR(array('Type'=>$_XiInterBanksTypeGetKLIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetKLIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTIBOR::getType()
	 * @uses XiInterBanksTypeGetTIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTIBOR GetTIBOR
	 * @return XiInterBanksTypeGetTIBORResponse
	 */
	public function GetTIBOR(XiInterBanksTypeGetTIBOR $_XiInterBanksTypeGetTIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTIBOR(array('Type'=>$_XiInterBanksTypeGetTIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPHIBOR
	 * Meta informations :
	 * 	- documentation : Returns a PHIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetPHIBOR::getType()
	 * @uses XiInterBanksTypeGetPHIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetPHIBOR GetPHIBOR
	 * @return XiInterBanksTypeGetPHIBORResponse
	 */
	public function GetPHIBOR(XiInterBanksTypeGetPHIBOR $_XiInterBanksTypeGetPHIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPHIBOR(array('Type'=>$_XiInterBanksTypeGetPHIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetPHIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBKIBOR
	 * Meta informations :
	 * 	- documentation : Returns a BKIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBKIBOR::getType()
	 * @uses XiInterBanksTypeGetBKIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetBKIBOR GetBKIBOR
	 * @return XiInterBanksTypeGetBKIBORResponse
	 */
	public function GetBKIBOR(XiInterBanksTypeGetBKIBOR $_XiInterBanksTypeGetBKIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBKIBOR(array('Type'=>$_XiInterBanksTypeGetBKIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBKIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetVNIBOR
	 * Meta informations :
	 * 	- documentation : Returns a VNIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetVNIBOR::getType()
	 * @uses XiInterBanksTypeGetVNIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetVNIBOR GetVNIBOR
	 * @return XiInterBanksTypeGetVNIBORResponse
	 */
	public function GetVNIBOR(XiInterBanksTypeGetVNIBOR $_XiInterBanksTypeGetVNIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetVNIBOR(array('Type'=>$_XiInterBanksTypeGetVNIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetVNIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMOSIBOR
	 * Meta informations :
	 * 	- documentation : Returns a MOSIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetMOSIBOR::getType()
	 * @uses XiInterBanksTypeGetMOSIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetMOSIBOR GetMOSIBOR
	 * @return XiInterBanksTypeGetMOSIBORResponse
	 */
	public function GetMOSIBOR(XiInterBanksTypeGetMOSIBOR $_XiInterBanksTypeGetMOSIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMOSIBOR(array('Type'=>$_XiInterBanksTypeGetMOSIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetMOSIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMOSIBID
	 * Meta informations :
	 * 	- documentation : Returns a MOSIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetMOSIBID::getType()
	 * @uses XiInterBanksTypeGetMOSIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetMOSIBID GetMOSIBID
	 * @return XiInterBanksTypeGetMOSIBIDResponse
	 */
	public function GetMOSIBID(XiInterBanksTypeGetMOSIBID $_XiInterBanksTypeGetMOSIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMOSIBID(array('Type'=>$_XiInterBanksTypeGetMOSIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetMOSIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalLIBOR
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetHistoricalLIBOR::getType()
	 * @uses XiInterBanksTypeGetHistoricalLIBOR::getCurrency()
	 * @uses XiInterBanksTypeGetHistoricalLIBOR::getFromDate()
	 * @uses XiInterBanksTypeGetHistoricalLIBOR::getToDate()
	 * @param XiInterBanksTypeGetHistoricalLIBOR GetHistoricalLIBOR
	 * @return XiInterBanksTypeGetHistoricalLIBORResponse
	 */
	public function GetHistoricalLIBOR(XiInterBanksTypeGetHistoricalLIBOR $_XiInterBanksTypeGetHistoricalLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalLIBOR(array('Type'=>$_XiInterBanksTypeGetHistoricalLIBOR->getType(),'Currency'=>$_XiInterBanksTypeGetHistoricalLIBOR->getCurrency(),'FromDate'=>$_XiInterBanksTypeGetHistoricalLIBOR->getFromDate(),'ToDate'=>$_XiInterBanksTypeGetHistoricalLIBOR->getToDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBRAZIBOR
	 * Meta informations :
	 * 	- documentation : Returns a BRAZIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBRAZIBOR::getType()
	 * @uses XiInterBanksTypeGetBRAZIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetBRAZIBOR GetBRAZIBOR
	 * @return XiInterBanksTypeGetBRAZIBORResponse
	 */
	public function GetBRAZIBOR(XiInterBanksTypeGetBRAZIBOR $_XiInterBanksTypeGetBRAZIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBRAZIBOR(array('Type'=>$_XiInterBanksTypeGetBRAZIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBRAZIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTRLIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TRLIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTRLIBOR::getType()
	 * @uses XiInterBanksTypeGetTRLIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTRLIBOR GetTRLIBOR
	 * @return XiInterBanksTypeGetTRLIBORResponse
	 */
	public function GetTRLIBOR(XiInterBanksTypeGetTRLIBOR $_XiInterBanksTypeGetTRLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTRLIBOR(array('Type'=>$_XiInterBanksTypeGetTRLIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTRLIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTRLIBID
	 * Meta informations :
	 * 	- documentation : Returns a TRLIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTRLIBID::getType()
	 * @uses XiInterBanksTypeGetTRLIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetTRLIBID GetTRLIBID
	 * @return XiInterBanksTypeGetTRLIBIDResponse
	 */
	public function GetTRLIBID(XiInterBanksTypeGetTRLIBID $_XiInterBanksTypeGetTRLIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTRLIBID(array('Type'=>$_XiInterBanksTypeGetTRLIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTRLIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBRIBOR
	 * Meta informations :
	 * 	- documentation : Returns a BRIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBRIBOR::getType()
	 * @uses XiInterBanksTypeGetBRIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetBRIBOR GetBRIBOR
	 * @return XiInterBanksTypeGetBRIBORResponse
	 */
	public function GetBRIBOR(XiInterBanksTypeGetBRIBOR $_XiInterBanksTypeGetBRIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBRIBOR(array('Type'=>$_XiInterBanksTypeGetBRIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBRIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBRIBID
	 * Meta informations :
	 * 	- documentation : Returns a BRIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBRIBID::getType()
	 * @uses XiInterBanksTypeGetBRIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetBRIBID GetBRIBID
	 * @return XiInterBanksTypeGetBRIBIDResponse
	 */
	public function GetBRIBID(XiInterBanksTypeGetBRIBID $_XiInterBanksTypeGetBRIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBRIBID(array('Type'=>$_XiInterBanksTypeGetBRIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBRIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRIGIBOR
	 * Meta informations :
	 * 	- documentation : Returns a RIGIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRIGIBOR::getType()
	 * @uses XiInterBanksTypeGetRIGIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetRIGIBOR GetRIGIBOR
	 * @return XiInterBanksTypeGetRIGIBORResponse
	 */
	public function GetRIGIBOR(XiInterBanksTypeGetRIGIBOR $_XiInterBanksTypeGetRIGIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRIGIBOR(array('Type'=>$_XiInterBanksTypeGetRIGIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetRIGIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRIGIBID
	 * Meta informations :
	 * 	- documentation : Returns a RIGIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRIGIBID::getType()
	 * @uses XiInterBanksTypeGetRIGIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetRIGIBID GetRIGIBID
	 * @return XiInterBanksTypeGetRIGIBIDResponse
	 */
	public function GetRIGIBID(XiInterBanksTypeGetRIGIBID $_XiInterBanksTypeGetRIGIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRIGIBID(array('Type'=>$_XiInterBanksTypeGetRIGIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetRIGIBID->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAIDIBOR
	 * Meta informations :
	 * 	- documentation : Returns a AIDIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetAIDIBOR::getType()
	 * @uses XiInterBanksTypeGetAIDIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetAIDIBOR GetAIDIBOR
	 * @return XiInterBanksTypeGetAIDIBORResponse
	 */
	public function GetAIDIBOR(XiInterBanksTypeGetAIDIBOR $_XiInterBanksTypeGetAIDIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAIDIBOR(array('Type'=>$_XiInterBanksTypeGetAIDIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetAIDIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetJIBAR
	 * Meta informations :
	 * 	- documentation : Returns a JIBAR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetJIBAR::getType()
	 * @uses XiInterBanksTypeGetJIBAR::getAsOfDate()
	 * @param XiInterBanksTypeGetJIBAR GetJIBAR
	 * @return XiInterBanksTypeGetJIBARResponse
	 */
	public function GetJIBAR(XiInterBanksTypeGetJIBAR $_XiInterBanksTypeGetJIBAR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetJIBAR(array('Type'=>$_XiInterBanksTypeGetJIBAR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetJIBAR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBAIBOR
	 * Meta informations :
	 * 	- documentation : Returns a BAIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetBAIBOR::getType()
	 * @uses XiInterBanksTypeGetBAIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetBAIBOR GetBAIBOR
	 * @return XiInterBanksTypeGetBAIBORResponse
	 */
	public function GetBAIBOR(XiInterBanksTypeGetBAIBOR $_XiInterBanksTypeGetBAIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBAIBOR(array('Type'=>$_XiInterBanksTypeGetBAIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetBAIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCOLIBOR
	 * Meta informations :
	 * 	- documentation : Returns a COLIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetCOLIBOR::getType()
	 * @uses XiInterBanksTypeGetCOLIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetCOLIBOR GetCOLIBOR
	 * @return XiInterBanksTypeGetCOLIBORResponse
	 */
	public function GetCOLIBOR(XiInterBanksTypeGetCOLIBOR $_XiInterBanksTypeGetCOLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCOLIBOR(array('Type'=>$_XiInterBanksTypeGetCOLIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetCOLIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTALIBOR
	 * Meta informations :
	 * 	- documentation : Returns a TALIBOR as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTALIBOR::getType()
	 * @uses XiInterBanksTypeGetTALIBOR::getAsOfDate()
	 * @param XiInterBanksTypeGetTALIBOR GetTALIBOR
	 * @return XiInterBanksTypeGetTALIBORResponse
	 */
	public function GetTALIBOR(XiInterBanksTypeGetTALIBOR $_XiInterBanksTypeGetTALIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTALIBOR(array('Type'=>$_XiInterBanksTypeGetTALIBOR->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTALIBOR->getAsOfDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTALIBID
	 * Meta informations :
	 * 	- documentation : Returns a TALIBID as of a date
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTALIBID::getType()
	 * @uses XiInterBanksTypeGetTALIBID::getAsOfDate()
	 * @param XiInterBanksTypeGetTALIBID GetTALIBID
	 * @return XiInterBanksTypeGetTALIBIDResponse
	 */
	public function GetTALIBID(XiInterBanksTypeGetTALIBID $_XiInterBanksTypeGetTALIBID)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTALIBID(array('Type'=>$_XiInterBanksTypeGetTALIBID->getType(),'AsOfDate'=>$_XiInterBanksTypeGetTALIBID->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRate::getRateType()
	 * @uses XiInterBanksTypeGetRate::getAsOfDate()
	 * @param XiInterBanksTypeGetRate GetRate
	 * @return XiInterBanksTypeGetRateResponse
	 */
	public function GetRate(XiInterBanksTypeGetRate $_XiInterBanksTypeGetRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRate(array('RateType'=>$_XiInterBanksTypeGetRate->getRateType(),'AsOfDate'=>$_XiInterBanksTypeGetRate->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRateFamilyTable::getRateFamilyType()
	 * @param XiInterBanksTypeGetRateFamilyTable GetRateFamilyTable
	 * @return XiInterBanksTypeGetRateFamilyTableResponse
	 */
	public function GetRateFamilyTable(XiInterBanksTypeGetRateFamilyTable $_XiInterBanksTypeGetRateFamilyTable)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateFamilyTable(array('RateFamilyType'=>$_XiInterBanksTypeGetRateFamilyTable->getRateFamilyType())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRateFamily::getRateFamilyType()
	 * @uses XiInterBanksTypeGetRateFamily::getAsOfDate()
	 * @param XiInterBanksTypeGetRateFamily GetRateFamily
	 * @return XiInterBanksTypeGetRateFamilyResponse
	 */
	public function GetRateFamily(XiInterBanksTypeGetRateFamily $_XiInterBanksTypeGetRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateFamily(array('RateFamilyType'=>$_XiInterBanksTypeGetRateFamily->getRateFamilyType(),'AsOfDate'=>$_XiInterBanksTypeGetRateFamily->getAsOfDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetTodaysRate::getRateType()
	 * @param XiInterBanksTypeGetTodaysRate GetTodaysRate
	 * @return XiInterBanksTypeGetTodaysRateResponse
	 */
	public function GetTodaysRate(XiInterBanksTypeGetTodaysRate $_XiInterBanksTypeGetTodaysRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysRate(array('RateType'=>$_XiInterBanksTypeGetTodaysRate->getRateType())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetLatestRate::getRateType()
	 * @param XiInterBanksTypeGetLatestRate GetLatestRate
	 * @return XiInterBanksTypeGetLatestRateResponse
	 */
	public function GetLatestRate(XiInterBanksTypeGetLatestRate $_XiInterBanksTypeGetLatestRate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestRate(array('RateType'=>$_XiInterBanksTypeGetLatestRate->getRateType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestLIBOR
	 * Meta informations :
	 * 	- documentation : Returns latest value for a LIBOR rate.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetLatestLIBOR::getRateType()
	 * @uses XiInterBanksTypeGetLatestLIBOR::getCurrency()
	 * @param XiInterBanksTypeGetLatestLIBOR GetLatestLIBOR
	 * @return XiInterBanksTypeGetLatestLIBORResponse
	 */
	public function GetLatestLIBOR(XiInterBanksTypeGetLatestLIBOR $_XiInterBanksTypeGetLatestLIBOR)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestLIBOR(array('RateType'=>$_XiInterBanksTypeGetLatestLIBOR->getRateType(),'Currency'=>$_XiInterBanksTypeGetLatestLIBOR->getCurrency())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetLatestRateFamily::getRateFamilyType()
	 * @param XiInterBanksTypeGetLatestRateFamily GetLatestRateFamily
	 * @return XiInterBanksTypeGetLatestRateFamilyResponse
	 */
	public function GetLatestRateFamily(XiInterBanksTypeGetLatestRateFamily $_XiInterBanksTypeGetLatestRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestRateFamily(array('RateFamilyType'=>$_XiInterBanksTypeGetLatestRateFamily->getRateFamilyType())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetHistoricalRates::getRateType()
	 * @uses XiInterBanksTypeGetHistoricalRates::getFromDate()
	 * @uses XiInterBanksTypeGetHistoricalRates::getToDate()
	 * @param XiInterBanksTypeGetHistoricalRates GetHistoricalRates
	 * @return XiInterBanksTypeGetHistoricalRatesResponse
	 */
	public function GetHistoricalRates(XiInterBanksTypeGetHistoricalRates $_XiInterBanksTypeGetHistoricalRates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalRates(array('RateType'=>$_XiInterBanksTypeGetHistoricalRates->getRateType(),'FromDate'=>$_XiInterBanksTypeGetHistoricalRates->getFromDate(),'ToDate'=>$_XiInterBanksTypeGetHistoricalRates->getToDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetHistoricalRateFamily::getRateFamilyType()
	 * @uses XiInterBanksTypeGetHistoricalRateFamily::getFromDate()
	 * @uses XiInterBanksTypeGetHistoricalRateFamily::getToDate()
	 * @param XiInterBanksTypeGetHistoricalRateFamily GetHistoricalRateFamily
	 * @return XiInterBanksTypeGetHistoricalRateFamilyResponse
	 */
	public function GetHistoricalRateFamily(XiInterBanksTypeGetHistoricalRateFamily $_XiInterBanksTypeGetHistoricalRateFamily)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalRateFamily(array('RateFamilyType'=>$_XiInterBanksTypeGetHistoricalRateFamily->getRateFamilyType(),'FromDate'=>$_XiInterBanksTypeGetHistoricalRateFamily->getFromDate(),'ToDate'=>$_XiInterBanksTypeGetHistoricalRateFamily->getToDate())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeGetRateDescription::getRateType()
	 * @param XiInterBanksTypeGetRateDescription GetRateDescription
	 * @return XiInterBanksTypeGetRateDescriptionResponse
	 */
	public function GetRateDescription(XiInterBanksTypeGetRateDescription $_XiInterBanksTypeGetRateDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRateDescription(array('RateType'=>$_XiInterBanksTypeGetRateDescription->getRateType())));
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
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @param XiInterBanksTypeGetChartDesign GetChartDesign
	 * @return XiInterBanksTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiInterBanksTypeGetChartDesign $_XiInterBanksTypeGetChartDesign)
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
	 * Method returning the result content
	 *
	 * @return XiInterBanksTypeGetChartDesignResponse
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