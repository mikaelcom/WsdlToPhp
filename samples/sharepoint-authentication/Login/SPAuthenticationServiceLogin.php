<?php
/**
 * Class file for SPAuthenticationServiceLogin
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationServiceLogin
 * @date 06/07/2012
 */
class SPAuthenticationServiceLogin extends SPAuthenticationWsdlClass
{
	/**
	 * Method to call Login
	 * @uses SPAuthenticationWsdlClass::getSoapClient()
	 * @uses SPAuthenticationWsdlClass::setResult()
	 * @uses SPAuthenticationWsdlClass::getResult()
	 * @uses SPAuthenticationWsdlClass::saveLastError()
	 * @uses SPAuthenticationTypeLogin::getUsername()
	 * @uses SPAuthenticationTypeLogin::getPassword()
	 * @param SPAuthenticationTypeLogin Login
	 * @return SPAuthenticationTypeLoginResponse
	 */
	public function Login(SPAuthenticationTypeLogin $_SPAuthenticationTypeLogin)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Login(array('username'=>$_SPAuthenticationTypeLogin->getUsername(),'password'=>$_SPAuthenticationTypeLogin->getPassword())));
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
	 * @return SPAuthenticationTypeLoginResponse
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