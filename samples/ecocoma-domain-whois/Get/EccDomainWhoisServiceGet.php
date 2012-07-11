<?php
/**
 * Class file for EccDomainWhoisServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccDomainWhoisServiceGet
 * @date 03/07/2012
 */
class EccDomainWhoisServiceGet extends EccDomainWhoisWsdlClass
{
	/**
	 * Method to call GetWhois
	 * Meta informations :
	 * 	- documentation : The whois service is used to check domain name availability, or to find out who owns a particular domain name.
	 * @uses EccDomainWhoisWsdlClass::getSoapClient()
	 * @uses EccDomainWhoisWsdlClass::setResult()
	 * @uses EccDomainWhoisWsdlClass::getResult()
	 * @uses EccDomainWhoisWsdlClass::saveLastError()
	 * @uses EccDomainWhoisTypeGetWhois::getKeyID()
	 * @uses EccDomainWhoisTypeGetWhois::getDomainID()
	 * @uses EccDomainWhoisTypeGetWhois::getAddress()
	 * @param EccDomainWhoisTypeGetWhois GetWhois
	 * @return EccDomainWhoisTypeGetWhoisResponse
	 */
	public function GetWhois(EccDomainWhoisTypeGetWhois $_EccDomainWhoisTypeGetWhois)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetWhois(array('KeyID'=>$_EccDomainWhoisTypeGetWhois->getKeyID(),'DomainID'=>$_EccDomainWhoisTypeGetWhois->getDomainID(),'Address'=>$_EccDomainWhoisTypeGetWhois->getAddress())));
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
	 * @return EccDomainWhoisTypeGetWhoisResponse
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