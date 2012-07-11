<?php
/**
 * Class file for OvhServiceAnonymous
 * @date 02/07/2012
 */
/**
 * Class OvhServiceAnonymous
 * @date 02/07/2012
 */
class OvhServiceAnonymous extends OvhWsdlClass
{
	/**
	 * Method to call anonymousFtpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAnonymousFtpInfo::getSession()
	 * @uses OvhTypeAnonymousFtpInfo::getDomain()
	 * @param OvhTypeAnonymousFtpInfo AnonymousFtpInfo
	 * @return OvhTypeAnonymousFtpInfoResponse
	 */
	public function anonymousFtpInfo(OvhTypeAnonymousFtpInfo $_ovhTypeAnonymousFtpInfo)
	{
		try
		{
			$this->setResult(new OvhTypeAnonymousFtpInfoResponse(self::getSoapClient()->anonymousFtpInfo($_ovhTypeAnonymousFtpInfo->getSession(),$_ovhTypeAnonymousFtpInfo->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call anonymousFtpActivate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAnonymousFtpActivate::getSession()
	 * @uses OvhTypeAnonymousFtpActivate::getDomain()
	 * @param OvhTypeAnonymousFtpActivate AnonymousFtpActivate
	 * @return OvhTypeAnonymousFtpActivateResponse
	 */
	public function anonymousFtpActivate(OvhTypeAnonymousFtpActivate $_ovhTypeAnonymousFtpActivate)
	{
		try
		{
			$this->setResult(new OvhTypeAnonymousFtpActivateResponse(self::getSoapClient()->anonymousFtpActivate($_ovhTypeAnonymousFtpActivate->getSession(),$_ovhTypeAnonymousFtpActivate->getDomain())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call anonymousFtpChangePassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeAnonymousFtpChangePassword::getSession()
	 * @uses OvhTypeAnonymousFtpChangePassword::getDomain()
	 * @uses OvhTypeAnonymousFtpChangePassword::getPassword()
	 * @param OvhTypeAnonymousFtpChangePassword AnonymousFtpChangePassword
	 * @return OvhTypeAnonymousFtpChangePasswordResponse
	 */
	public function anonymousFtpChangePassword(OvhTypeAnonymousFtpChangePassword $_ovhTypeAnonymousFtpChangePassword)
	{
		try
		{
			$this->setResult(new OvhTypeAnonymousFtpChangePasswordResponse(self::getSoapClient()->anonymousFtpChangePassword($_ovhTypeAnonymousFtpChangePassword->getSession(),$_ovhTypeAnonymousFtpChangePassword->getDomain(),$_ovhTypeAnonymousFtpChangePassword->getPassword())));
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
	 * @return OvhTypeAnonymousFtpChangePasswordResponse
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