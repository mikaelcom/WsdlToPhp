<?php
/**
 * Class file for EccDomainIpServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccDomainIpServiceGet
 * @date 03/07/2012
 */
class EccDomainIpServiceGet extends EccDomainIpWsdlClass
{
	/**
	 * Method to call GetURL
	 * Meta informations :
	 * 	- documentation : Finds sites that are hosted by a specific IP address.
	 * @uses EccDomainIpWsdlClass::getSoapClient()
	 * @uses EccDomainIpWsdlClass::setResult()
	 * @uses EccDomainIpWsdlClass::getResult()
	 * @uses EccDomainIpWsdlClass::saveLastError()
	 * @uses EccDomainIpTypeGetURL::getKeyID()
	 * @uses EccDomainIpTypeGetURL::getDomainID()
	 * @uses EccDomainIpTypeGetURL::getIPAddress()
	 * @param EccDomainIpTypeGetURL GetURL
	 * @return EccDomainIpTypeGetURLResponse
	 */
	public function GetURL(EccDomainIpTypeGetURL $_EccDomainIpTypeGetURL)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetURL(array('KeyID'=>$_EccDomainIpTypeGetURL->getKeyID(),'DomainID'=>$_EccDomainIpTypeGetURL->getDomainID(),'IPAddress'=>$_EccDomainIpTypeGetURL->getIPAddress())));
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
	 * @return EccDomainIpTypeGetURLResponse
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