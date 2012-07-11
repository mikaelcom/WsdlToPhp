<?php
/**
 * Class file for EccDomainHostServiceGet
 * @date 03/07/2012
 */
/**
 * Class EccDomainHostServiceGet
 * @date 03/07/2012
 */
class EccDomainHostServiceGet extends EccDomainHostWsdlClass
{
	/**
	 * Method to call GetHostInfo
	 * Meta informations :
	 * 	- documentation : Retrieve information about a specific host from the Internet Domain Name System (DNS).
	 * @uses EccDomainHostWsdlClass::getSoapClient()
	 * @uses EccDomainHostWsdlClass::setResult()
	 * @uses EccDomainHostWsdlClass::getResult()
	 * @uses EccDomainHostWsdlClass::saveLastError()
	 * @uses EccDomainHostTypeGetHostInfo::getKeyID()
	 * @uses EccDomainHostTypeGetHostInfo::getDomainID()
	 * @uses EccDomainHostTypeGetHostInfo::getAddress()
	 * @param EccDomainHostTypeGetHostInfo GetHostInfo
	 * @return EccDomainHostTypeGetHostInfoResponse
	 */
	public function GetHostInfo(EccDomainHostTypeGetHostInfo $_EccDomainHostTypeGetHostInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHostInfo(array('KeyID'=>$_EccDomainHostTypeGetHostInfo->getKeyID(),'DomainID'=>$_EccDomainHostTypeGetHostInfo->getDomainID(),'Address'=>$_EccDomainHostTypeGetHostInfo->getAddress())));
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
	 * @return EccDomainHostTypeGetHostInfoResponse
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