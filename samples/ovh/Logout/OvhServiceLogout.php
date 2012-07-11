<?php
/**
 * Class file for OvhServiceLogout
 * @date 02/07/2012
 */
/**
 * Class OvhServiceLogout
 * @date 02/07/2012
 */
class OvhServiceLogout extends OvhWsdlClass
{
	/**
	 * Method to call logout
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeLogout::getSession()
	 * @param OvhTypeLogout Logout
	 * @return OvhTypeLogoutResponse
	 */
	public function logout(OvhTypeLogout $_ovhTypeLogout)
	{
		try
		{
			$this->setResult(new OvhTypeLogoutResponse(self::getSoapClient()->logout($_ovhTypeLogout->getSession())));
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
	 * @return OvhTypeLogoutResponse
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