<?php
/**
 * Class file for SPAuthenticationServiceMode
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationServiceMode
 * @date 06/07/2012
 */
class SPAuthenticationServiceMode extends SPAuthenticationWsdlClass
{
	/**
	 * Method to call Mode
	 * @uses SPAuthenticationWsdlClass::getSoapClient()
	 * @uses SPAuthenticationWsdlClass::setResult()
	 * @uses SPAuthenticationWsdlClass::getResult()
	 * @uses SPAuthenticationWsdlClass::saveLastError()
	 * @param SPAuthenticationTypeMode Mode
	 * @return SPAuthenticationTypeModeResponse
	 */
	public function Mode(SPAuthenticationTypeMode $_SPAuthenticationTypeMode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Mode(array()));
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
	 * @return SPAuthenticationTypeModeResponse
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