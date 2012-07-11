<?php
/**
 * Class file for XiCompensationServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiCompensationServiceGet
 * @date 08/07/2012
 */
class XiCompensationServiceGet extends XiCompensationWsdlClass
{
	/**
	 * Method to call GetOfficerCompensations
	 * Meta informations :
	 * 	- documentation : Returns compensations for an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficerCompensations::getOfficerID()
	 * @uses XiCompensationTypeGetOfficerCompensations::getIdentifier()
	 * @uses XiCompensationTypeGetOfficerCompensations::getIdentifierType()
	 * @param XiCompensationTypeGetOfficerCompensations GetOfficerCompensations
	 * @return XiCompensationTypeGetOfficerCompensationsResponse
	 */
	public function GetOfficerCompensations(XiCompensationTypeGetOfficerCompensations $_XiCompensationTypeGetOfficerCompensations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficerCompensations(array('OfficerID'=>$_XiCompensationTypeGetOfficerCompensations->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetOfficerCompensations->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficerCompensations->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCurrentOfficers
	 * Meta informations :
	 * 	- documentation : Returns all current officers for a company.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetCurrentOfficers::getIdentifier()
	 * @uses XiCompensationTypeGetCurrentOfficers::getIdentifierType()
	 * @param XiCompensationTypeGetCurrentOfficers GetCurrentOfficers
	 * @return XiCompensationTypeGetCurrentOfficersResponse
	 */
	public function GetCurrentOfficers(XiCompensationTypeGetCurrentOfficers $_XiCompensationTypeGetCurrentOfficers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCurrentOfficers(array('Identifier'=>$_XiCompensationTypeGetCurrentOfficers->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetCurrentOfficers->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficer
	 * Meta informations :
	 * 	- documentation : Returns an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficer::getOfficerID()
	 * @uses XiCompensationTypeGetOfficer::getIdentifier()
	 * @uses XiCompensationTypeGetOfficer::getIdentifierType()
	 * @param XiCompensationTypeGetOfficer GetOfficer
	 * @return XiCompensationTypeGetOfficerResponse
	 */
	public function GetOfficer(XiCompensationTypeGetOfficer $_XiCompensationTypeGetOfficer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficer(array('OfficerID'=>$_XiCompensationTypeGetOfficer->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetOfficer->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficer->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficerOptionsGranted
	 * Meta informations :
	 * 	- documentation : Returns options granted for an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficerOptionsGranted::getOfficerID()
	 * @uses XiCompensationTypeGetOfficerOptionsGranted::getIdentifier()
	 * @uses XiCompensationTypeGetOfficerOptionsGranted::getIdentifierType()
	 * @param XiCompensationTypeGetOfficerOptionsGranted GetOfficerOptionsGranted
	 * @return XiCompensationTypeGetOfficerOptionsGrantedResponse
	 */
	public function GetOfficerOptionsGranted(XiCompensationTypeGetOfficerOptionsGranted $_XiCompensationTypeGetOfficerOptionsGranted)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficerOptionsGranted(array('OfficerID'=>$_XiCompensationTypeGetOfficerOptionsGranted->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetOfficerOptionsGranted->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficerOptionsGranted->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficerOptions
	 * Meta informations :
	 * 	- documentation : Returns options granted/exercised for an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficerOptions::getOfficerID()
	 * @uses XiCompensationTypeGetOfficerOptions::getIdentifier()
	 * @uses XiCompensationTypeGetOfficerOptions::getIdentifierType()
	 * @param XiCompensationTypeGetOfficerOptions GetOfficerOptions
	 * @return XiCompensationTypeGetOfficerOptionsResponse
	 */
	public function GetOfficerOptions(XiCompensationTypeGetOfficerOptions $_XiCompensationTypeGetOfficerOptions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficerOptions(array('OfficerID'=>$_XiCompensationTypeGetOfficerOptions->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetOfficerOptions->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficerOptions->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficerOptionsExercised
	 * Meta informations :
	 * 	- documentation : Returns options exercised for an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficerOptionsExercised::getOfficerID()
	 * @uses XiCompensationTypeGetOfficerOptionsExercised::getIdentifier()
	 * @uses XiCompensationTypeGetOfficerOptionsExercised::getIdentifierType()
	 * @param XiCompensationTypeGetOfficerOptionsExercised GetOfficerOptionsExercised
	 * @return XiCompensationTypeGetOfficerOptionsExercisedResponse
	 */
	public function GetOfficerOptionsExercised(XiCompensationTypeGetOfficerOptionsExercised $_XiCompensationTypeGetOfficerOptionsExercised)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficerOptionsExercised(array('OfficerID'=>$_XiCompensationTypeGetOfficerOptionsExercised->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetOfficerOptionsExercised->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficerOptionsExercised->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastCompensation
	 * Meta informations :
	 * 	- documentation : Returns the last compensations for an officer.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetLastCompensation::getOfficerID()
	 * @uses XiCompensationTypeGetLastCompensation::getIdentifier()
	 * @uses XiCompensationTypeGetLastCompensation::getIdentifierType()
	 * @param XiCompensationTypeGetLastCompensation GetLastCompensation
	 * @return XiCompensationTypeGetLastCompensationResponse
	 */
	public function GetLastCompensation(XiCompensationTypeGetLastCompensation $_XiCompensationTypeGetLastCompensation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastCompensation(array('OfficerID'=>$_XiCompensationTypeGetLastCompensation->getOfficerID(),'Identifier'=>$_XiCompensationTypeGetLastCompensation->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetLastCompensation->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastCompensations
	 * Meta informations :
	 * 	- documentation : Returns the last compensations for all officers for a security.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetLastCompensations::getIdentifier()
	 * @uses XiCompensationTypeGetLastCompensations::getIdentifierType()
	 * @param XiCompensationTypeGetLastCompensations GetLastCompensations
	 * @return XiCompensationTypeGetLastCompensationsResponse
	 */
	public function GetLastCompensations(XiCompensationTypeGetLastCompensations $_XiCompensationTypeGetLastCompensations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastCompensations(array('Identifier'=>$_XiCompensationTypeGetLastCompensations->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetLastCompensations->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficers
	 * Meta informations :
	 * 	- documentation : Returns all officers for a company.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficers::getIdentifier()
	 * @uses XiCompensationTypeGetOfficers::getIdentifierType()
	 * @param XiCompensationTypeGetOfficers GetOfficers
	 * @return XiCompensationTypeGetOfficersResponse
	 */
	public function GetOfficers(XiCompensationTypeGetOfficers $_XiCompensationTypeGetOfficers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficers(array('Identifier'=>$_XiCompensationTypeGetOfficers->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficers->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOfficersByYear
	 * Meta informations :
	 * 	- documentation : Returns all officers for a company as of a given year.
	 * @uses XiCompensationWsdlClass::getSoapClient()
	 * @uses XiCompensationWsdlClass::setResult()
	 * @uses XiCompensationWsdlClass::getResult()
	 * @uses XiCompensationWsdlClass::saveLastError()
	 * @uses XiCompensationTypeGetOfficersByYear::getIdentifier()
	 * @uses XiCompensationTypeGetOfficersByYear::getIdentifierType()
	 * @uses XiCompensationTypeGetOfficersByYear::getYear()
	 * @param XiCompensationTypeGetOfficersByYear GetOfficersByYear
	 * @return XiCompensationTypeGetOfficersByYearResponse
	 */
	public function GetOfficersByYear(XiCompensationTypeGetOfficersByYear $_XiCompensationTypeGetOfficersByYear)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOfficersByYear(array('Identifier'=>$_XiCompensationTypeGetOfficersByYear->getIdentifier(),'IdentifierType'=>$_XiCompensationTypeGetOfficersByYear->getIdentifierType(),'Year'=>$_XiCompensationTypeGetOfficersByYear->getYear())));
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
	 * @return XiCompensationTypeGetOfficersByYearResponse
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