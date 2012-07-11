<?php
/**
 * Class file for OvhServiceTicket
 * @date 02/07/2012
 */
/**
 * Class OvhServiceTicket
 * @date 02/07/2012
 */
class OvhServiceTicket extends OvhWsdlClass
{
	/**
	 * Method to call ticketListIncidentsByDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketListIncidentsByDomain::getSession()
	 * @uses OvhTypeTicketListIncidentsByDomain::getDomain()
	 * @param OvhTypeTicketListIncidentsByDomain TicketListIncidentsByDomain
	 * @return OvhTypeTicketListIncidentsByDomainResponse
	 */
	public function ticketListIncidentsByDomain(OvhTypeTicketListIncidentsByDomain $_ovhTypeTicketListIncidentsByDomain)
	{
		try
		{
			$this->setResult(new OvhTypeTicketListIncidentsByDomainResponse(self::getSoapClient()->ticketListIncidentsByDomain($_ovhTypeTicketListIncidentsByDomain->getSession(),$_ovhTypeTicketListIncidentsByDomain->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketListIncidents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketListIncidents::getSession()
	 * @uses OvhTypeTicketListIncidents::getStatus()
	 * @param OvhTypeTicketListIncidents TicketListIncidents
	 * @return OvhTypeTicketListIncidentsResponse
	 */
	public function ticketListIncidents(OvhTypeTicketListIncidents $_ovhTypeTicketListIncidents)
	{
		try
		{
			$this->setResult(new OvhTypeTicketListIncidentsResponse(self::getSoapClient()->ticketListIncidents($_ovhTypeTicketListIncidents->getSession(),$_ovhTypeTicketListIncidents->getStatus())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketReopen
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketReopen::getSession()
	 * @uses OvhTypeTicketReopen::getTicketId()
	 * @param OvhTypeTicketReopen TicketReopen
	 * @return OvhTypeTicketReopenResponse
	 */
	public function ticketReopen(OvhTypeTicketReopen $_ovhTypeTicketReopen)
	{
		try
		{
			$this->setResult(new OvhTypeTicketReopenResponse(self::getSoapClient()->ticketReopen($_ovhTypeTicketReopen->getSession(),$_ovhTypeTicketReopen->getTicketId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketListContact
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketListContact::getSession()
	 * @param OvhTypeTicketListContact TicketListContact
	 * @return OvhTypeTicketListContactResponse
	 */
	public function ticketListContact(OvhTypeTicketListContact $_ovhTypeTicketListContact)
	{
		try
		{
			$this->setResult(new OvhTypeTicketListContactResponse(self::getSoapClient()->ticketListContact($_ovhTypeTicketListContact->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketGet::getSession()
	 * @uses OvhTypeTicketGet::getTicketId()
	 * @param OvhTypeTicketGet TicketGet
	 * @return OvhTypeTicketGetResponse
	 */
	public function ticketGet(OvhTypeTicketGet $_ovhTypeTicketGet)
	{
		try
		{
			$this->setResult(new OvhTypeTicketGetResponse(self::getSoapClient()->ticketGet($_ovhTypeTicketGet->getSession(),$_ovhTypeTicketGet->getTicketId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketAnswer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketAnswer::getSession()
	 * @uses OvhTypeTicketAnswer::getTicketId()
	 * @uses OvhTypeTicketAnswer::getMessage()
	 * @param OvhTypeTicketAnswer TicketAnswer
	 * @return OvhTypeTicketAnswerResponse
	 */
	public function ticketAnswer(OvhTypeTicketAnswer $_ovhTypeTicketAnswer)
	{
		try
		{
			$this->setResult(new OvhTypeTicketAnswerResponse(self::getSoapClient()->ticketAnswer($_ovhTypeTicketAnswer->getSession(),$_ovhTypeTicketAnswer->getTicketId(),$_ovhTypeTicketAnswer->getMessage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketClose
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketClose::getSession()
	 * @uses OvhTypeTicketClose::getTicketId()
	 * @param OvhTypeTicketClose TicketClose
	 * @return OvhTypeTicketCloseResponse
	 */
	public function ticketClose(OvhTypeTicketClose $_ovhTypeTicketClose)
	{
		try
		{
			$this->setResult(new OvhTypeTicketCloseResponse(self::getSoapClient()->ticketClose($_ovhTypeTicketClose->getSession(),$_ovhTypeTicketClose->getTicketId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ticketCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeTicketCreate::getSession()
	 * @uses OvhTypeTicketCreate::getComponentType()
	 * @uses OvhTypeTicketCreate::getDomain()
	 * @uses OvhTypeTicketCreate::getEmail()
	 * @uses OvhTypeTicketCreate::getPhone()
	 * @uses OvhTypeTicketCreate::getSubject()
	 * @uses OvhTypeTicketCreate::getIncidentSummary()
	 * @uses OvhTypeTicketCreate::getIncidentDetails()
	 * @uses OvhTypeTicketCreate::getIncidentManip()
	 * @uses OvhTypeTicketCreate::getLevel()
	 * @param OvhTypeTicketCreate TicketCreate
	 * @return OvhTypeTicketCreateResponse
	 */
	public function ticketCreate(OvhTypeTicketCreate $_ovhTypeTicketCreate)
	{
		try
		{
			$this->setResult(new OvhTypeTicketCreateResponse(self::getSoapClient()->ticketCreate($_ovhTypeTicketCreate->getSession(),$_ovhTypeTicketCreate->getComponentType(),$_ovhTypeTicketCreate->getDomain(),$_ovhTypeTicketCreate->getEmail(),$_ovhTypeTicketCreate->getPhone(),$_ovhTypeTicketCreate->getSubject(),$_ovhTypeTicketCreate->getIncidentSummary(),$_ovhTypeTicketCreate->getIncidentDetails(),$_ovhTypeTicketCreate->getIncidentManip(),$_ovhTypeTicketCreate->getLevel())));
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
	 * @return OvhTypeTicketCreateResponse
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