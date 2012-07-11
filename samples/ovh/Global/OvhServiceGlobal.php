<?php
/**
 * Class file for OvhServiceGlobal
 * @date 02/07/2012
 */
/**
 * Class OvhServiceGlobal
 * @date 02/07/2012
 */
class OvhServiceGlobal extends OvhWsdlClass
{
	/**
	 * Method to call globalAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeGlobalAccessByNic::getSession()
	 * @param OvhTypeGlobalAccessByNic GlobalAccessByNic
	 * @return OvhTypeGlobalAccessByNicResponse
	 */
	public function globalAccessByNic(OvhTypeGlobalAccessByNic $_ovhTypeGlobalAccessByNic)
	{
		try
		{
			$this->setResult(new OvhTypeGlobalAccessByNicResponse(self::getSoapClient()->globalAccessByNic($_ovhTypeGlobalAccessByNic->getSession())));
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
	 * @return OvhTypeGlobalAccessByNicResponse
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