<?php
/**
 * Class file for OvhServiceOverquota
 * @date 02/07/2012
 */
/**
 * Class OvhServiceOverquota
 * @date 02/07/2012
 */
class OvhServiceOverquota extends OvhWsdlClass
{
	/**
	 * Method to call overquotaInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOverquotaInfo::getSession()
	 * @uses OvhTypeOverquotaInfo::getDomain()
	 * @param OvhTypeOverquotaInfo OverquotaInfo
	 * @return OvhTypeOverquotaInfoResponse
	 */
	public function overquotaInfo(OvhTypeOverquotaInfo $_ovhTypeOverquotaInfo)
	{
		try
		{
			$this->setResult(new OvhTypeOverquotaInfoResponse(self::getSoapClient()->overquotaInfo($_ovhTypeOverquotaInfo->getSession(),$_ovhTypeOverquotaInfo->getDomain())));
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
	 * @return OvhTypeOverquotaInfoResponse
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