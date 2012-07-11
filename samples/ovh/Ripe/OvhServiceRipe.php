<?php
/**
 * Class file for OvhServiceRipe
 * @date 02/07/2012
 */
/**
 * Class OvhServiceRipe
 * @date 02/07/2012
 */
class OvhServiceRipe extends OvhWsdlClass
{
	/**
	 * Method to call ripeGetRipeIds
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeGetRipeIds::getSession()
	 * @param OvhTypeRipeGetRipeIds RipeGetRipeIds
	 * @return OvhTypeRipeGetRipeIdsResponse
	 */
	public function ripeGetRipeIds(OvhTypeRipeGetRipeIds $_ovhTypeRipeGetRipeIds)
	{
		try
		{
			$this->setResult(new OvhTypeRipeGetRipeIdsResponse(self::getSoapClient()->ripeGetRipeIds($_ovhTypeRipeGetRipeIds->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ripeUpdateInetnum
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeUpdateInetnum::getSession()
	 * @uses OvhTypeRipeUpdateInetnum::getBlock()
	 * @uses OvhTypeRipeUpdateInetnum::getNetname()
	 * @uses OvhTypeRipeUpdateInetnum::getDescr()
	 * @uses OvhTypeRipeUpdateInetnum::getRipeId()
	 * @param OvhTypeRipeUpdateInetnum RipeUpdateInetnum
	 * @return OvhTypeRipeUpdateInetnumResponse
	 */
	public function ripeUpdateInetnum(OvhTypeRipeUpdateInetnum $_ovhTypeRipeUpdateInetnum)
	{
		try
		{
			$this->setResult(new OvhTypeRipeUpdateInetnumResponse(self::getSoapClient()->ripeUpdateInetnum($_ovhTypeRipeUpdateInetnum->getSession(),$_ovhTypeRipeUpdateInetnum->getBlock(),$_ovhTypeRipeUpdateInetnum->getNetname(),$_ovhTypeRipeUpdateInetnum->getDescr(),$_ovhTypeRipeUpdateInetnum->getRipeId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ripeQuery
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeQuery::getSession()
	 * @uses OvhTypeRipeQuery::getSearch()
	 * @uses OvhTypeRipeQuery::getType()
	 * @param OvhTypeRipeQuery RipeQuery
	 * @return OvhTypeRipeQueryResponse
	 */
	public function ripeQuery(OvhTypeRipeQuery $_ovhTypeRipeQuery)
	{
		try
		{
			$this->setResult(new OvhTypeRipeQueryResponse(self::getSoapClient()->ripeQuery($_ovhTypeRipeQuery->getSession(),$_ovhTypeRipeQuery->getSearch(),$_ovhTypeRipeQuery->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ripeDeleteOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeDeleteOrganisation::getSession()
	 * @uses OvhTypeRipeDeleteOrganisation::getRipeId()
	 * @uses OvhTypeRipeDeleteOrganisation::getComment()
	 * @param OvhTypeRipeDeleteOrganisation RipeDeleteOrganisation
	 * @return OvhTypeRipeDeleteOrganisationResponse
	 */
	public function ripeDeleteOrganisation(OvhTypeRipeDeleteOrganisation $_ovhTypeRipeDeleteOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeRipeDeleteOrganisationResponse(self::getSoapClient()->ripeDeleteOrganisation($_ovhTypeRipeDeleteOrganisation->getSession(),$_ovhTypeRipeDeleteOrganisation->getRipeId(),$_ovhTypeRipeDeleteOrganisation->getComment())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ripeUpdateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeUpdateOrganisation::getSession()
	 * @uses OvhTypeRipeUpdateOrganisation::getRipeId()
	 * @uses OvhTypeRipeUpdateOrganisation::getName()
	 * @uses OvhTypeRipeUpdateOrganisation::getAddress()
	 * @uses OvhTypeRipeUpdateOrganisation::getEmail()
	 * @uses OvhTypeRipeUpdateOrganisation::getAbuse()
	 * @uses OvhTypeRipeUpdateOrganisation::getDescr()
	 * @uses OvhTypeRipeUpdateOrganisation::getPhone()
	 * @uses OvhTypeRipeUpdateOrganisation::getFax()
	 * @uses OvhTypeRipeUpdateOrganisation::getRemarks()
	 * @param OvhTypeRipeUpdateOrganisation RipeUpdateOrganisation
	 * @return OvhTypeRipeUpdateOrganisationResponse
	 */
	public function ripeUpdateOrganisation(OvhTypeRipeUpdateOrganisation $_ovhTypeRipeUpdateOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeRipeUpdateOrganisationResponse(self::getSoapClient()->ripeUpdateOrganisation($_ovhTypeRipeUpdateOrganisation->getSession(),$_ovhTypeRipeUpdateOrganisation->getRipeId(),$_ovhTypeRipeUpdateOrganisation->getName(),$_ovhTypeRipeUpdateOrganisation->getAddress(),$_ovhTypeRipeUpdateOrganisation->getEmail(),$_ovhTypeRipeUpdateOrganisation->getAbuse(),$_ovhTypeRipeUpdateOrganisation->getDescr(),$_ovhTypeRipeUpdateOrganisation->getPhone(),$_ovhTypeRipeUpdateOrganisation->getFax(),$_ovhTypeRipeUpdateOrganisation->getRemarks())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ripeCreateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeRipeCreateOrganisation::getSession()
	 * @uses OvhTypeRipeCreateOrganisation::getName()
	 * @uses OvhTypeRipeCreateOrganisation::getAddress()
	 * @uses OvhTypeRipeCreateOrganisation::getEmail()
	 * @uses OvhTypeRipeCreateOrganisation::getAbuse()
	 * @uses OvhTypeRipeCreateOrganisation::getDescr()
	 * @uses OvhTypeRipeCreateOrganisation::getPhone()
	 * @uses OvhTypeRipeCreateOrganisation::getFax()
	 * @uses OvhTypeRipeCreateOrganisation::getRemarks()
	 * @param OvhTypeRipeCreateOrganisation RipeCreateOrganisation
	 * @return OvhTypeRipeCreateOrganisationResponse
	 */
	public function ripeCreateOrganisation(OvhTypeRipeCreateOrganisation $_ovhTypeRipeCreateOrganisation)
	{
		try
		{
			$this->setResult(new OvhTypeRipeCreateOrganisationResponse(self::getSoapClient()->ripeCreateOrganisation($_ovhTypeRipeCreateOrganisation->getSession(),$_ovhTypeRipeCreateOrganisation->getName(),$_ovhTypeRipeCreateOrganisation->getAddress(),$_ovhTypeRipeCreateOrganisation->getEmail(),$_ovhTypeRipeCreateOrganisation->getAbuse(),$_ovhTypeRipeCreateOrganisation->getDescr(),$_ovhTypeRipeCreateOrganisation->getPhone(),$_ovhTypeRipeCreateOrganisation->getFax(),$_ovhTypeRipeCreateOrganisation->getRemarks())));
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
	 * @return OvhTypeRipeCreateOrganisationResponse
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