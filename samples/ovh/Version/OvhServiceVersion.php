<?php
/**
 * Class file for OvhServiceVersion
 * @date 02/07/2012
 */
/**
 * Class OvhServiceVersion
 * @date 02/07/2012
 */
class OvhServiceVersion extends OvhWsdlClass
{
	/**
	 * Method to call version
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @param OvhTypeVersion Version
	 * @return OvhTypeVersionResponse
	 */
	public function version(OvhTypeVersion $_ovhTypeVersion)
	{
		try
		{
			$this->setResult(new OvhTypeVersionResponse(self::getSoapClient()->version()));
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
	 * @return OvhTypeVersionResponse
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