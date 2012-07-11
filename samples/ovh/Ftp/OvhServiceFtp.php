<?php
/**
 * Class file for OvhServiceFtp
 * @date 02/07/2012
 */
/**
 * Class OvhServiceFtp
 * @date 02/07/2012
 */
class OvhServiceFtp extends OvhWsdlClass
{
	/**
	 * Method to call ftpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeFtpInfo::getSession()
	 * @uses OvhTypeFtpInfo::getDomain()
	 * @param OvhTypeFtpInfo FtpInfo
	 * @return OvhTypeFtpInfoResponse
	 */
	public function ftpInfo(OvhTypeFtpInfo $_ovhTypeFtpInfo)
	{
		try
		{
			$this->setResult(new OvhTypeFtpInfoResponse(self::getSoapClient()->ftpInfo($_ovhTypeFtpInfo->getSession(),$_ovhTypeFtpInfo->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ftpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeFtpChangePassword::getSession()
	 * @uses OvhTypeFtpChangePassword::getDomain()
	 * @uses OvhTypeFtpChangePassword::getPassword()
	 * @uses OvhTypeFtpChangePassword::getOldstate()
	 * @uses OvhTypeFtpChangePassword::getNewstate()
	 * @param OvhTypeFtpChangePassword FtpChangePassword
	 * @return OvhTypeFtpChangePasswordResponse
	 */
	public function ftpChangePassword(OvhTypeFtpChangePassword $_ovhTypeFtpChangePassword)
	{
		try
		{
			$this->setResult(new OvhTypeFtpChangePasswordResponse(self::getSoapClient()->ftpChangePassword($_ovhTypeFtpChangePassword->getSession(),$_ovhTypeFtpChangePassword->getDomain(),$_ovhTypeFtpChangePassword->getPassword(),$_ovhTypeFtpChangePassword->getOldstate(),$_ovhTypeFtpChangePassword->getNewstate())));
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
	 * @return OvhTypeFtpChangePasswordResponse
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