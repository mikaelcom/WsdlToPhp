<?php
/**
 * Class file for AmazonAlexaServiceSites
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaServiceSites
 * @date 10/07/2012
 */
class AmazonAlexaServiceSites extends AmazonAlexaWsdlClass
{
	/**
	 * Method to call SitesLinkingIn
	 * @uses AmazonAlexaWsdlClass::getSoapClient()
	 * @uses AmazonAlexaWsdlClass::setResult()
	 * @uses AmazonAlexaWsdlClass::getResult()
	 * @uses AmazonAlexaWsdlClass::saveLastError()
	 * @uses AmazonAlexaTypeSitesLinkingIn::getRequest()
	 * @param AmazonAlexaTypeSitesLinkingIn SitesLinkingIn
	 * @return AmazonAlexaTypeSitesLinkingInResponse
	 */
	public function SitesLinkingIn(AmazonAlexaTypeSitesLinkingIn $_AmazonAlexaTypeSitesLinkingIn)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SitesLinkingIn(array('Request'=>$_AmazonAlexaTypeSitesLinkingIn->getRequest())));
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
	 * @return AmazonAlexaTypeSitesLinkingInResponse
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