<?php
/**
 * Class file for XWeb1003ServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceUpdate
 * @date 09/07/2012
 */
class XWeb1003ServiceUpdate extends XWeb1003WsdlClass
{
	/**
	 * Method to call UpdateApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeUpdateApplicationRequest::getApplication()
	 * @param XWeb1003TypeUpdateApplicationRequest UpdateApplicationRequest
	 * @return XWeb1003TypeUNKNOWN
	 */
	public function UpdateApplication(XWeb1003TypeUpdateApplicationRequest $_XWeb1003TypeUpdateApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateApplication(array('Application'=>$_XWeb1003TypeUpdateApplicationRequest->getApplication())));
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