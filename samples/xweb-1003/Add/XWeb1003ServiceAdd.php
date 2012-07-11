<?php
/**
 * Class file for XWeb1003ServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceAdd
 * @date 09/07/2012
 */
class XWeb1003ServiceAdd extends XWeb1003WsdlClass
{
	/**
	 * Method to call AddApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeAddApplicationRequest::getApplication()
	 * @param XWeb1003TypeAddApplicationRequest AddApplicationRequest
	 * @return XWeb1003TypeUNKNOWN
	 */
	public function AddApplication(XWeb1003TypeAddApplicationRequest $_XWeb1003TypeAddApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddApplication(array('Application'=>$_XWeb1003TypeAddApplicationRequest->getApplication())));
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
	 * @return XWeb1003TypeUNKNOWN
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