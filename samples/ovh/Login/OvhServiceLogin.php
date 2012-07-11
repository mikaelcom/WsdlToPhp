<?php
/**
 * Class file for OvhServiceLogin
 * @date 02/07/2012
 */
/**
 * Class OvhServiceLogin
 * @date 02/07/2012
 */
class OvhServiceLogin extends OvhWsdlClass
{
	/**
	 * Method to call login
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLogin::getNic()
	 * @uses OvhTypeLogin::getPassword()
	 * @uses OvhTypeLogin::getLanguage()
	 * @uses OvhTypeLogin::getMultisession()
	 * @param OvhTypeLogin Login
	 * @return OvhTypeLoginResponse
	 */
	public function login(OvhTypeLogin $_ovhTypeLogin)
	{
		try
		{
			$this->setResult(new OvhTypeLoginResponse(self::getSoapClient()->login($_ovhTypeLogin->getNic(),$_ovhTypeLogin->getPassword(),$_ovhTypeLogin->getLanguage(),$_ovhTypeLogin->getMultisession())));
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
	 * @return OvhTypeLoginResponse
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