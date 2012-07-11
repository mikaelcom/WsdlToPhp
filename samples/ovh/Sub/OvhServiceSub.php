<?php
/**
 * Class file for OvhServiceSub
 * @date 02/07/2012
 */
/**
 * Class OvhServiceSub
 * @date 02/07/2012
 */
class OvhServiceSub extends OvhWsdlClass
{
	/**
	 * Method to call subDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSubDomainDel::getSession()
	 * @uses OvhTypeSubDomainDel::getDomain()
	 * @uses OvhTypeSubDomainDel::getSubdomain()
	 * @param OvhTypeSubDomainDel SubDomainDel
	 * @return OvhTypeSubDomainDelResponse
	 */
	public function subDomainDel(OvhTypeSubDomainDel $_ovhTypeSubDomainDel)
	{
		try
		{
			$this->setResult(new OvhTypeSubDomainDelResponse(self::getSoapClient()->subDomainDel($_ovhTypeSubDomainDel->getSession(),$_ovhTypeSubDomainDel->getDomain(),$_ovhTypeSubDomainDel->getSubdomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call subDomainModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSubDomainModify::getSession()
	 * @uses OvhTypeSubDomainModify::getDomain()
	 * @uses OvhTypeSubDomainModify::getSubdomain()
	 * @uses OvhTypeSubDomainModify::getTarget()
	 * @uses OvhTypeSubDomainModify::getCountry()
	 * @param OvhTypeSubDomainModify SubDomainModify
	 * @return OvhTypeSubDomainModifyResponse
	 */
	public function subDomainModify(OvhTypeSubDomainModify $_ovhTypeSubDomainModify)
	{
		try
		{
			$this->setResult(new OvhTypeSubDomainModifyResponse(self::getSoapClient()->subDomainModify($_ovhTypeSubDomainModify->getSession(),$_ovhTypeSubDomainModify->getDomain(),$_ovhTypeSubDomainModify->getSubdomain(),$_ovhTypeSubDomainModify->getTarget(),$_ovhTypeSubDomainModify->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call subDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSubDomainAdd::getSession()
	 * @uses OvhTypeSubDomainAdd::getDomain()
	 * @uses OvhTypeSubDomainAdd::getSubdomain()
	 * @uses OvhTypeSubDomainAdd::getTarget()
	 * @uses OvhTypeSubDomainAdd::getCountry()
	 * @param OvhTypeSubDomainAdd SubDomainAdd
	 * @return OvhTypeSubDomainAddResponse
	 */
	public function subDomainAdd(OvhTypeSubDomainAdd $_ovhTypeSubDomainAdd)
	{
		try
		{
			$this->setResult(new OvhTypeSubDomainAddResponse(self::getSoapClient()->subDomainAdd($_ovhTypeSubDomainAdd->getSession(),$_ovhTypeSubDomainAdd->getDomain(),$_ovhTypeSubDomainAdd->getSubdomain(),$_ovhTypeSubDomainAdd->getTarget(),$_ovhTypeSubDomainAdd->getCountry())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call subDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeSubDomainList::getSession()
	 * @uses OvhTypeSubDomainList::getDomain()
	 * @param OvhTypeSubDomainList SubDomainList
	 * @return OvhTypeSubDomainListResponse
	 */
	public function subDomainList(OvhTypeSubDomainList $_ovhTypeSubDomainList)
	{
		try
		{
			$this->setResult(new OvhTypeSubDomainListResponse(self::getSoapClient()->subDomainList($_ovhTypeSubDomainList->getSession(),$_ovhTypeSubDomainList->getDomain())));
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
	 * @return OvhTypeSubDomainListResponse
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