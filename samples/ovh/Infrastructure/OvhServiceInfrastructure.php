<?php
/**
 * Class file for OvhServiceInfrastructure
 * @date 02/07/2012
 */
/**
 * Class OvhServiceInfrastructure
 * @date 02/07/2012
 */
class OvhServiceInfrastructure extends OvhWsdlClass
{
	/**
	 * Method to call infrastructureReverseModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeInfrastructureReverseModify::getSession()
	 * @uses OvhTypeInfrastructureReverseModify::getHostname()
	 * @uses OvhTypeInfrastructureReverseModify::getIp()
	 * @uses OvhTypeInfrastructureReverseModify::getReverse()
	 * @param OvhTypeInfrastructureReverseModify InfrastructureReverseModify
	 * @return OvhTypeInfrastructureReverseModifyResponse
	 */
	public function infrastructureReverseModify(OvhTypeInfrastructureReverseModify $_ovhTypeInfrastructureReverseModify)
	{
		try
		{
			$this->setResult(new OvhTypeInfrastructureReverseModifyResponse(self::getSoapClient()->infrastructureReverseModify($_ovhTypeInfrastructureReverseModify->getSession(),$_ovhTypeInfrastructureReverseModify->getHostname(),$_ovhTypeInfrastructureReverseModify->getIp(),$_ovhTypeInfrastructureReverseModify->getReverse())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call infrastructureIpListGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeInfrastructureIpListGet::getSession()
	 * @uses OvhTypeInfrastructureIpListGet::getHostname()
	 * @param OvhTypeInfrastructureIpListGet InfrastructureIpListGet
	 * @return OvhTypeInfrastructureIpListGetResponse
	 */
	public function infrastructureIpListGet(OvhTypeInfrastructureIpListGet $_ovhTypeInfrastructureIpListGet)
	{
		try
		{
			$this->setResult(new OvhTypeInfrastructureIpListGetResponse(self::getSoapClient()->infrastructureIpListGet($_ovhTypeInfrastructureIpListGet->getSession(),$_ovhTypeInfrastructureIpListGet->getHostname())));
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
	 * @return OvhTypeInfrastructureIpListGetResponse
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