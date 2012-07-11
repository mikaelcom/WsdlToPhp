<?php
/**
 * Class file for XiOFACServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiOFACServiceSearch
 * @date 08/07/2012
 */
class XiOFACServiceSearch extends XiOFACWsdlClass
{
	/**
	 * Method to call SearchByName
	 * Meta informations :
	 * 	- documentation : Search the OFAC database by name.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearchByName::getName()
	 * @uses XiOFACTypeSearchByName::getType()
	 * @uses XiOFACTypeSearchByName::getSearchType()
	 * @param XiOFACTypeSearchByName SearchByName
	 * @return XiOFACTypeSearchByNameResponse
	 */
	public function SearchByName(XiOFACTypeSearchByName $_XiOFACTypeSearchByName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchByName(array('Name'=>$_XiOFACTypeSearchByName->getName(),'Type'=>$_XiOFACTypeSearchByName->getType(),'SearchType'=>$_XiOFACTypeSearchByName->getSearchType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SearchOrganization
	 * Meta informations :
	 * 	- documentation : Search the OFAC database by name.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearchOrganization::getName()
	 * @uses XiOFACTypeSearchOrganization::getSearchType()
	 * @param XiOFACTypeSearchOrganization SearchOrganization
	 * @return XiOFACTypeSearchOrganizationResponse
	 */
	public function SearchOrganization(XiOFACTypeSearchOrganization $_XiOFACTypeSearchOrganization)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchOrganization(array('Name'=>$_XiOFACTypeSearchOrganization->getName(),'SearchType'=>$_XiOFACTypeSearchOrganization->getSearchType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SearchIndividual
	 * Meta informations :
	 * 	- documentation : Search the OFAC database by name.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearchIndividual::getName()
	 * @uses XiOFACTypeSearchIndividual::getSearchType()
	 * @param XiOFACTypeSearchIndividual SearchIndividual
	 * @return XiOFACTypeSearchIndividualResponse
	 */
	public function SearchIndividual(XiOFACTypeSearchIndividual $_XiOFACTypeSearchIndividual)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchIndividual(array('Name'=>$_XiOFACTypeSearchIndividual->getName(),'SearchType'=>$_XiOFACTypeSearchIndividual->getSearchType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SearchVessel
	 * Meta informations :
	 * 	- documentation : Search the OFAC database for a vessel.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearchVessel::getName()
	 * @uses XiOFACTypeSearchVessel::getSearchType()
	 * @param XiOFACTypeSearchVessel SearchVessel
	 * @return XiOFACTypeSearchVesselResponse
	 */
	public function SearchVessel(XiOFACTypeSearchVessel $_XiOFACTypeSearchVessel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchVessel(array('Name'=>$_XiOFACTypeSearchVessel->getName(),'SearchType'=>$_XiOFACTypeSearchVessel->getSearchType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SearchByAddress
	 * Meta informations :
	 * 	- documentation : Search the OFAC database by address.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearchByAddress::getType()
	 * @uses XiOFACTypeSearchByAddress::getAddress()
	 * @uses XiOFACTypeSearchByAddress::getCity()
	 * @uses XiOFACTypeSearchByAddress::getCountry()
	 * @uses XiOFACTypeSearchByAddress::getSearchType()
	 * @param XiOFACTypeSearchByAddress SearchByAddress
	 * @return XiOFACTypeSearchByAddressResponse
	 */
	public function SearchByAddress(XiOFACTypeSearchByAddress $_XiOFACTypeSearchByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchByAddress(array('Type'=>$_XiOFACTypeSearchByAddress->getType(),'Address'=>$_XiOFACTypeSearchByAddress->getAddress(),'City'=>$_XiOFACTypeSearchByAddress->getCity(),'Country'=>$_XiOFACTypeSearchByAddress->getCountry(),'SearchType'=>$_XiOFACTypeSearchByAddress->getSearchType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Search
	 * Meta informations :
	 * 	- documentation : Search the OFAC database.
	 * @uses XiOFACWsdlClass::getSoapClient()
	 * @uses XiOFACWsdlClass::setResult()
	 * @uses XiOFACWsdlClass::getResult()
	 * @uses XiOFACWsdlClass::saveLastError()
	 * @uses XiOFACTypeSearch::getName()
	 * @uses XiOFACTypeSearch::getTitle()
	 * @uses XiOFACTypeSearch::getType()
	 * @uses XiOFACTypeSearch::getAddress()
	 * @uses XiOFACTypeSearch::getCity()
	 * @uses XiOFACTypeSearch::getCountry()
	 * @uses XiOFACTypeSearch::getSearchType()
	 * @param XiOFACTypeSearch Search
	 * @return XiOFACTypeSearchResponse
	 */
	public function Search(XiOFACTypeSearch $_XiOFACTypeSearch)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Search(array('Name'=>$_XiOFACTypeSearch->getName(),'Title'=>$_XiOFACTypeSearch->getTitle(),'Type'=>$_XiOFACTypeSearch->getType(),'Address'=>$_XiOFACTypeSearch->getAddress(),'City'=>$_XiOFACTypeSearch->getCity(),'Country'=>$_XiOFACTypeSearch->getCountry(),'SearchType'=>$_XiOFACTypeSearch->getSearchType())));
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
	 * @return XiOFACTypeSearchResponse
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