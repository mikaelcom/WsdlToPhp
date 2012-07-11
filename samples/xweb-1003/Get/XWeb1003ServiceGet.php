<?php
/**
 * Class file for XWeb1003ServiceGet
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceGet
 * @date 09/07/2012
 */
class XWeb1003ServiceGet extends XWeb1003WsdlClass
{
	/**
	 * Method to call GetFannieMaeApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeGetFannieMaeApplicationRequest::getApplication_ID()
	 * @param XWeb1003TypeGetFannieMaeApplicationRequest GetFannieMaeApplicationRequest
	 * @return XWeb1003TypeGetFannieMaeApplicationResponse
	 */
	public function GetFannieMaeApplication(XWeb1003TypeGetFannieMaeApplicationRequest $_XWeb1003TypeGetFannieMaeApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetFannieMaeApplication(array('Application_ID'=>$_XWeb1003TypeGetFannieMaeApplicationRequest->getApplication_ID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMISMOApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeGetMISMOApplicationRequest::getApplication_ID()
	 * @param XWeb1003TypeGetMISMOApplicationRequest GetMISMOApplicationRequest
	 * @return XWeb1003TypeGetMISMOApplicationResponse
	 */
	public function GetMISMOApplication(XWeb1003TypeGetMISMOApplicationRequest $_XWeb1003TypeGetMISMOApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMISMOApplication(array('Application_ID'=>$_XWeb1003TypeGetMISMOApplicationRequest->getApplication_ID())));
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
	 * @return XWeb1003TypeGetMISMOApplicationResponse
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