<?php
/**
 * Class file for RFAirportServiceGet
 * @date 15/08/2012
 */
/**
 * Class RFAirportServiceGet
 * @date 15/08/2012
 */
class RFAirportServiceGet extends RFAirportWsdlClass
{
	/**
	 * Method to call GetDetailsByCity
	 * @uses RFAirportWsdlClass::getSoapClient()
	 * @uses RFAirportWsdlClass::setResult()
	 * @uses RFAirportWsdlClass::getResult()
	 * @uses RFAirportWsdlClass::saveLastError()
	 * @uses RFAirportTypeGetDetailsByCity::getRequest()
	 * @param RFAirportTypeGetDetailsByCity GetDetailsByCity
	 * @return RFAirportTypeGetDetailsByCityResponse
	 */
	public function GetDetailsByCity(RFAirportTypeGetDetailsByCity $_RFAirportTypeGetDetailsByCity)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByCity(array('request'=>$_RFAirportTypeGetDetailsByCity->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByAirportName
	 * @uses RFAirportWsdlClass::getSoapClient()
	 * @uses RFAirportWsdlClass::setResult()
	 * @uses RFAirportWsdlClass::getResult()
	 * @uses RFAirportWsdlClass::saveLastError()
	 * @uses RFAirportTypeGetDetailsByAirportName::getRequest()
	 * @param RFAirportTypeGetDetailsByAirportName GetDetailsByAirportName
	 * @return RFAirportTypeGetDetailsByAirportNameResponse
	 */
	public function GetDetailsByAirportName(RFAirportTypeGetDetailsByAirportName $_RFAirportTypeGetDetailsByAirportName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByAirportName(array('request'=>$_RFAirportTypeGetDetailsByAirportName->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByICAOCode
	 * @uses RFAirportWsdlClass::getSoapClient()
	 * @uses RFAirportWsdlClass::setResult()
	 * @uses RFAirportWsdlClass::getResult()
	 * @uses RFAirportWsdlClass::saveLastError()
	 * @uses RFAirportTypeGetDetailsByICAOCode::getRequest()
	 * @param RFAirportTypeGetDetailsByICAOCode GetDetailsByICAOCode
	 * @return RFAirportTypeGetDetailsByICAOCodeResponse
	 */
	public function GetDetailsByICAOCode(RFAirportTypeGetDetailsByICAOCode $_RFAirportTypeGetDetailsByICAOCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByICAOCode(array('request'=>$_RFAirportTypeGetDetailsByICAOCode->getRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetDetailsByIATACode
	 * @uses RFAirportWsdlClass::getSoapClient()
	 * @uses RFAirportWsdlClass::setResult()
	 * @uses RFAirportWsdlClass::getResult()
	 * @uses RFAirportWsdlClass::saveLastError()
	 * @uses RFAirportTypeGetDetailsByIATACode::getRequest()
	 * @param RFAirportTypeGetDetailsByIATACode GetDetailsByIATACode
	 * @return RFAirportTypeGetDetailsByIATACodeResponse
	 */
	public function GetDetailsByIATACode(RFAirportTypeGetDetailsByIATACode $_RFAirportTypeGetDetailsByIATACode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetDetailsByIATACode(array('request'=>$_RFAirportTypeGetDetailsByIATACode->getRequest())));
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
	 * @return RFAirportTypeGetDetailsByCityResponse|RFAirportTypeGetDetailsByAirportNameResponse|RFAirportTypeGetDetailsByICAOCodeResponse|RFAirportTypeGetDetailsByIATACodeResponse
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