<?php
/**
 * Class file for SPSearchServiceRegistration
 * @date 06/07/2012
 */
/**
 * Class SPSearchServiceRegistration
 * @date 06/07/2012
 */
class SPSearchServiceRegistration extends SPSearchWsdlClass
{
	/**
	 * Method to call Registration
	 * @uses SPSearchWsdlClass::getSoapClient()
	 * @uses SPSearchWsdlClass::setResult()
	 * @uses SPSearchWsdlClass::getResult()
	 * @uses SPSearchWsdlClass::saveLastError()
	 * @uses SPSearchTypeRegistration::getRegistrationXml()
	 * @param SPSearchTypeRegistration Registration
	 * @return SPSearchTypeRegistrationResponse
	 */
	public function Registration(SPSearchTypeRegistration $_SPSearchTypeRegistration)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Registration(array('registrationXml'=>$_SPSearchTypeRegistration->getRegistrationXml())));
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
	 * @return SPSearchTypeRegistrationResponse
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