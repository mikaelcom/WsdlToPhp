<?php
/**
 * Class file for AmazonWebServicesServiceBrowse
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesServiceBrowse
 * @date 10/07/2012
 */
class AmazonWebServicesServiceBrowse extends AmazonWebServicesWsdlClass
{
	/**
	 * Method to call BrowseNodeSearchRequest
	 * @uses AmazonWebServicesWsdlClass::getSoapClient()
	 * @uses AmazonWebServicesWsdlClass::setResult()
	 * @uses AmazonWebServicesWsdlClass::getResult()
	 * @uses AmazonWebServicesWsdlClass::saveLastError()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getBrowse_node()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getPage()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getMode()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getTag()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getType()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getDevtag()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getSort()
	 * @uses AmazonWebServicesTypeBrowseNodeRequest::getLocale()
	 * @param AmazonWebServicesTypeBrowseNodeRequest BrowseNodeRequest
	 * @return AmazonWebServicesTypeProductInfo
	 */
	public function BrowseNodeSearchRequest(AmazonWebServicesTypeBrowseNodeRequest $_AmazonWebServicesTypeBrowseNodeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BrowseNodeSearchRequest(array('browse_node'=>$_AmazonWebServicesTypeBrowseNodeRequest->getBrowse_node(),'page'=>$_AmazonWebServicesTypeBrowseNodeRequest->getPage(),'mode'=>$_AmazonWebServicesTypeBrowseNodeRequest->getMode(),'tag'=>$_AmazonWebServicesTypeBrowseNodeRequest->getTag(),'type'=>$_AmazonWebServicesTypeBrowseNodeRequest->getType(),'devtag'=>$_AmazonWebServicesTypeBrowseNodeRequest->getDevtag(),'sort'=>$_AmazonWebServicesTypeBrowseNodeRequest->getSort(),'locale'=>$_AmazonWebServicesTypeBrowseNodeRequest->getLocale())));
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
	 * @return AmazonWebServicesTypeProductInfo
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