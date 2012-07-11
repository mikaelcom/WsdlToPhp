<?php
/**
 * Class file for UsgsRequestServiceProcess
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestServiceProcess
 * @date 08/07/2012
 */
class UsgsRequestServiceProcess extends UsgsRequestWsdlClass
{
	/**
	 * Method to call processAOI
	 * @uses UsgsRequestWsdlClass::getSoapClient()
	 * @uses UsgsRequestWsdlClass::setResult()
	 * @uses UsgsRequestWsdlClass::getResult()
	 * @uses UsgsRequestWsdlClass::saveLastError()
	 * @uses UsgsRequestTypeProcessAOI::getRequestInfoXml()
	 * @param UsgsRequestTypeProcessAOI ProcessAOI
	 * @return UsgsRequestTypeProcessAOIResponse
	 */
	public function processAOI(UsgsRequestTypeProcessAOI $_UsgsRequestTypeProcessAOI)
	{
		try
		{
			$this->setResult(self::getSoapClient()->processAOI(array('requestInfoXml'=>$_UsgsRequestTypeProcessAOI->getRequestInfoXml())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call processAOI2
	 * @uses UsgsRequestWsdlClass::getSoapClient()
	 * @uses UsgsRequestWsdlClass::setResult()
	 * @uses UsgsRequestWsdlClass::getResult()
	 * @uses UsgsRequestWsdlClass::saveLastError()
	 * @uses UsgsRequestTypeProcessAOI2::getRequestInfoXml()
	 * @param UsgsRequestTypeProcessAOI2 ProcessAOI2
	 * @return UsgsRequestTypeProcessAOI2Response
	 */
	public function processAOI2(UsgsRequestTypeProcessAOI2 $_UsgsRequestTypeProcessAOI2)
	{
		try
		{
			$this->setResult(self::getSoapClient()->processAOI2(array('requestInfoXml'=>$_UsgsRequestTypeProcessAOI2->getRequestInfoXml())));
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
	 * @return UsgsRequestTypeProcessAOI2Response
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