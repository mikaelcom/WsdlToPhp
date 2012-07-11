<?php
/**
 * Class file for XWeb1003ServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceDelete
 * @date 09/07/2012
 */
class XWeb1003ServiceDelete extends XWeb1003WsdlClass
{
	/**
	 * Method to call DeleteApplication
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeDeleteApplicationRequest::getApplication_ID()
	 * @param XWeb1003TypeDeleteApplicationRequest DeleteApplicationRequest
	 * @return XWeb1003TypeUNKNOWN
	 */
	public function DeleteApplication(XWeb1003TypeDeleteApplicationRequest $_XWeb1003TypeDeleteApplicationRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteApplication(array('Application_ID'=>$_XWeb1003TypeDeleteApplicationRequest->getApplication_ID())));
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