<?php
/**
 * Class file for XWebACHDirectoryServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryServiceGet
 * @date 09/07/2012
 */
class XWebACHDirectoryServiceGet extends XWebACHDirectoryWsdlClass
{
	/**
	 * Method to call GetParticipant
	 * Meta informations :
	 * 	- documentation : Returns a Participant based on a Routing Number.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeGetParticipantRequest::getRouting_Number()
	 * @param XWebACHDirectoryTypeGetParticipantRequest GetParticipantRequest
	 * @return XWebACHDirectoryTypeGetParticipantResponse
	 */
	public function GetParticipant(XWebACHDirectoryTypeGetParticipantRequest $_XWebACHDirectoryTypeGetParticipantRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetParticipant(array('Routing_Number'=>$_XWebACHDirectoryTypeGetParticipantRequest->getRouting_Number())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetParticipantsByServicingFRBNumber
	 * Meta informations :
	 * 	- documentation : Returns a collection of Participants that match a specific Servicing Federal Reserve Bank (FRB) Routing Number.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest::getRouting_Number()
	 * @param XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest GetParticipantsByServicingFRBNumberRequest
	 * @return XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberResponse
	 */
	public function GetParticipantsByServicingFRBNumber(XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest $_XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetParticipantsByServicingFRBNumber(array('Routing_Number'=>$_XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest->getRouting_Number())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetParticipantsByState
	 * Meta informations :
	 * 	- documentation : Returns a collection of Participants that match a specific State.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeGetParticipantsByStateRequest::getState()
	 * @param XWebACHDirectoryTypeGetParticipantsByStateRequest GetParticipantsByStateRequest
	 * @return XWebACHDirectoryTypeGetParticipantsByStateResponse
	 */
	public function GetParticipantsByState(XWebACHDirectoryTypeGetParticipantsByStateRequest $_XWebACHDirectoryTypeGetParticipantsByStateRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetParticipantsByState(array('State'=>$_XWebACHDirectoryTypeGetParticipantsByStateRequest->getState())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetParticipantsByZipCode
	 * Meta informations :
	 * 	- documentation : Returns a collection of Participants that match a specific Zip Code.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeGetParticipantsByZipCodeRequest::getZipCode()
	 * @param XWebACHDirectoryTypeGetParticipantsByZipCodeRequest GetParticipantsByZipCodeRequest
	 * @return XWebACHDirectoryTypeGetParticipantsByZipCodeResponse
	 */
	public function GetParticipantsByZipCode(XWebACHDirectoryTypeGetParticipantsByZipCodeRequest $_XWebACHDirectoryTypeGetParticipantsByZipCodeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetParticipantsByZipCode(array('ZipCode'=>$_XWebACHDirectoryTypeGetParticipantsByZipCodeRequest->getZipCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetParticipantsByTelephoneAreaCode
	 * Meta informations :
	 * 	- documentation : Returns a collection of Participants that match a specific Telephone Area Code.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest::getTelephone_Area_Code()
	 * @param XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest GetParticipantsByTelephoneAreaCodeRequest
	 * @return XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse
	 */
	public function GetParticipantsByTelephoneAreaCode(XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest $_XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetParticipantsByTelephoneAreaCode(array('Telephone_Area_Code'=>$_XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest->getTelephone_Area_Code())));
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
	 * @return XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse
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