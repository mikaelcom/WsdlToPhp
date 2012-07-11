<?php
/**
 * Class file for UsgsRequestServiceValidate
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestServiceValidate
 * @date 08/07/2012
 */
class UsgsRequestServiceValidate extends UsgsRequestWsdlClass
{
	/**
	 * Method to call validateChunks
	 * @uses UsgsRequestWsdlClass::getSoapClient()
	 * @uses UsgsRequestWsdlClass::setResult()
	 * @uses UsgsRequestWsdlClass::getResult()
	 * @uses UsgsRequestWsdlClass::saveLastError()
	 * @uses UsgsRequestTypeValidateChunks::getRequestInfoXml()
	 * @param UsgsRequestTypeValidateChunks ValidateChunks
	 * @return UsgsRequestTypeValidateChunksResponse
	 */
	public function validateChunks(UsgsRequestTypeValidateChunks $_UsgsRequestTypeValidateChunks)
	{
		try
		{
			$this->setResult(self::getSoapClient()->validateChunks(array('requestInfoXml'=>$_UsgsRequestTypeValidateChunks->getRequestInfoXml())));
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
	 * @return UsgsRequestTypeValidateChunksResponse
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