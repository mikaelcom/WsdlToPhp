<?php
/**
 * Class file for CdyneIp2geoServiceResolve
 * @date 02/07/2012
 */
/**
 * Class CdyneIp2geoServiceResolve
 * @date 02/07/2012
 */
class CdyneIp2geoServiceResolve extends CdyneIp2geoWsdlClass
{
	/**
	 * Method to call ResolveIP
	 * Meta informations :
	 * 	- documentation : Use a License Key of 0 for Testing
	 * @uses CdyneIp2geoWsdlClass::getSoapClient()
	 * @uses CdyneIp2geoWsdlClass::setResult()
	 * @uses CdyneIp2geoWsdlClass::getResult()
	 * @uses CdyneIp2geoWsdlClass::saveLastError()
	 * @uses CdyneIp2geoTypeResolveIP::getIpAddress()
	 * @uses CdyneIp2geoTypeResolveIP::getLicenseKey()
	 * @param CdyneIp2geoTypeResolveIP ResolveIP
	 * @return CdyneIp2geoTypeResolveIPResponse
	 */
	public function ResolveIP(CdyneIp2geoTypeResolveIP $_CdyneIp2geoTypeResolveIP)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ResolveIP(array('ipAddress'=>$_CdyneIp2geoTypeResolveIP->getIpAddress(),'licenseKey'=>$_CdyneIp2geoTypeResolveIP->getLicenseKey())));
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
	 * @return CdyneIp2geoTypeResolveIPResponse
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