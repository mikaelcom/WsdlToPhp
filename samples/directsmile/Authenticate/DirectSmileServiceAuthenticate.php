<?php
/**
 * Class file for DirectSmileServiceAuthenticate
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceAuthenticate
 * @date 02/08/2012
 */
class DirectSmileServiceAuthenticate extends DirectSmileWsdlClass
{
	/**
	 * Method to call Authenticate
	 * Meta informations :
	 * 	- documentation : Standard Authentication. Initiates a session. All mathod names that don't end with -Auth or -DSM demand a valid session.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeAuthenticate::getUserName()
	 * @uses DirectSmileTypeAuthenticate::getPassword()
	 * @uses DirectSmileTypeAuthenticate::getLanguage()
	 * @param DirectSmileTypeAuthenticate Authenticate
	 * @return DirectSmileTypeAuthenticateResponse
	 */
	public function Authenticate(DirectSmileTypeAuthenticate $_DirectSmileTypeAuthenticate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Authenticate(array('UserName'=>$_DirectSmileTypeAuthenticate->getUserName(),'Password'=>$_DirectSmileTypeAuthenticate->getPassword(),'Language'=>$_DirectSmileTypeAuthenticate->getLanguage())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AuthenticateDSM
	 * Meta informations :
	 * 	- documentation : DSM internal Authentication.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeAuthenticateDSM::getUserName()
	 * @uses DirectSmileTypeAuthenticateDSM::getPassword()
	 * @param DirectSmileTypeAuthenticateDSM AuthenticateDSM
	 * @return DirectSmileTypeAuthenticateDSMResponse
	 */
	public function AuthenticateDSM(DirectSmileTypeAuthenticateDSM $_DirectSmileTypeAuthenticateDSM)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AuthenticateDSM(array('UserName'=>$_DirectSmileTypeAuthenticateDSM->getUserName(),'Password'=>$_DirectSmileTypeAuthenticateDSM->getPassword())));
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
	 * @return DirectSmileTypeAuthenticateResponse|DirectSmileTypeAuthenticateDSMResponse
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