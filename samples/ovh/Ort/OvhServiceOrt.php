<?php
/**
 * Class file for OvhServiceOrt
 * @date 02/07/2012
 */
/**
 * Class OvhServiceOrt
 * @date 02/07/2012
 */
class OvhServiceOrt extends OvhWsdlClass
{
	/**
	 * Method to call ortDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrtDomainDel::getSession()
	 * @uses OvhTypeOrtDomainDel::getDomain()
	 * @uses OvhTypeOrtDomainDel::getSubdomain()
	 * @uses OvhTypeOrtDomainDel::getTarget()
	 * @param OvhTypeOrtDomainDel OrtDomainDel
	 * @return OvhTypeOrtDomainDelResponse
	 */
	public function ortDomainDel(OvhTypeOrtDomainDel $_ovhTypeOrtDomainDel)
	{
		try
		{
			$this->setResult(new OvhTypeOrtDomainDelResponse(self::getSoapClient()->ortDomainDel($_ovhTypeOrtDomainDel->getSession(),$_ovhTypeOrtDomainDel->getDomain(),$_ovhTypeOrtDomainDel->getSubdomain(),$_ovhTypeOrtDomainDel->getTarget())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ortDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrtDomainList::getSession()
	 * @uses OvhTypeOrtDomainList::getDomain()
	 * @param OvhTypeOrtDomainList OrtDomainList
	 * @return OvhTypeOrtDomainListResponse
	 */
	public function ortDomainList(OvhTypeOrtDomainList $_ovhTypeOrtDomainList)
	{
		try
		{
			$this->setResult(new OvhTypeOrtDomainListResponse(self::getSoapClient()->ortDomainList($_ovhTypeOrtDomainList->getSession(),$_ovhTypeOrtDomainList->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ortDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrtDomainAdd::getSession()
	 * @uses OvhTypeOrtDomainAdd::getDomain()
	 * @uses OvhTypeOrtDomainAdd::getSubdomain()
	 * @uses OvhTypeOrtDomainAdd::getTarget()
	 * @uses OvhTypeOrtDomainAdd::getType()
	 * @uses OvhTypeOrtDomainAdd::getOverwrite()
	 * @param OvhTypeOrtDomainAdd OrtDomainAdd
	 * @return OvhTypeOrtDomainAddResponse
	 */
	public function ortDomainAdd(OvhTypeOrtDomainAdd $_ovhTypeOrtDomainAdd)
	{
		try
		{
			$this->setResult(new OvhTypeOrtDomainAddResponse(self::getSoapClient()->ortDomainAdd($_ovhTypeOrtDomainAdd->getSession(),$_ovhTypeOrtDomainAdd->getDomain(),$_ovhTypeOrtDomainAdd->getSubdomain(),$_ovhTypeOrtDomainAdd->getTarget(),$_ovhTypeOrtDomainAdd->getType(),$_ovhTypeOrtDomainAdd->getOverwrite())));
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
	 * @return OvhTypeOrtDomainAddResponse
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