<?php
/**
 * Class file for XWeb1003ServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceProcess
 * @date 09/07/2012
 */
class XWeb1003ServiceProcess extends XWeb1003WsdlClass
{
	/**
	 * Method to call ProcessApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeProcessApplicationRequest::getApplication()
	 * @param XWeb1003TypeProcessApplicationRequest ProcessApplicationRequest
	 * @return XWeb1003TypeUNKNOWN
	 */
	public function ProcessApplication(XWeb1003TypeProcessApplicationRequest $_XWeb1003TypeProcessApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessApplication(array('Application'=>$_XWeb1003TypeProcessApplicationRequest->getApplication())));
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