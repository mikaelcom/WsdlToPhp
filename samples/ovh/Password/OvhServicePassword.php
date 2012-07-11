<?php
/**
 * Class file for OvhServicePassword
 * @date 02/07/2012
 */
/**
 * Class OvhServicePassword
 * @date 02/07/2012
 */
class OvhServicePassword extends OvhWsdlClass
{
	/**
	 * Method to call password
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypePassword::getSession()
	 * @uses OvhTypePassword::getNic()
	 * @uses OvhTypePassword::getPassword()
	 * @param OvhTypePassword Password
	 * @return OvhTypePasswordResponse
	 */
	public function password(OvhTypePassword $_ovhTypePassword)
	{
		try
		{
			$this->setResult(new OvhTypePasswordResponse(self::getSoapClient()->password($_ovhTypePassword->getSession(),$_ovhTypePassword->getNic(),$_ovhTypePassword->getPassword())));
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
	 * @return OvhTypePasswordResponse
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