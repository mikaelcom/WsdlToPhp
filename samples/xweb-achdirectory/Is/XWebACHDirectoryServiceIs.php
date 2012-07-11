<?php
/**
 * Class file for XWebACHDirectoryServiceIs
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryServiceIs
 * @date 09/07/2012
 */
class XWebACHDirectoryServiceIs extends XWebACHDirectoryWsdlClass
{
	/**
	 * Method to call IsRoutingNumberValid
	 * Meta informations :
	 * 	- documentation : Validates whether the Routing Number provided belongs to a Participant in the Directory.
	 * @uses XWebACHDirectoryWsdlClass::getSoapClient()
	 * @uses XWebACHDirectoryWsdlClass::setResult()
	 * @uses XWebACHDirectoryWsdlClass::getResult()
	 * @uses XWebACHDirectoryWsdlClass::saveLastError()
	 * @uses XWebACHDirectoryTypeIsRoutingNumberValidRequest::getRouting_Number()
	 * @param XWebACHDirectoryTypeIsRoutingNumberValidRequest IsRoutingNumberValidRequest
	 * @return XWebACHDirectoryTypeIsRoutingNumberValidResponse
	 */
	public function IsRoutingNumberValid(XWebACHDirectoryTypeIsRoutingNumberValidRequest $_XWebACHDirectoryTypeIsRoutingNumberValidRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IsRoutingNumberValid(array('Routing_Number'=>$_XWebACHDirectoryTypeIsRoutingNumberValidRequest->getRouting_Number())));
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
	 * @return XWebACHDirectoryTypeIsRoutingNumberValidResponse
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