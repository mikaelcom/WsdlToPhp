<?php
/**
 * Class file for SPSitesServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPSitesServiceGet
 * @date 06/07/2012
 */
class SPSitesServiceGet extends SPSitesWsdlClass
{
	/**
	 * Method to call GetSite
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeGetSite::getSiteUrl()
	 * @param SPSitesTypeGetSite GetSite
	 * @return SPSitesTypeGetSiteResponse
	 */
	public function GetSite(SPSitesTypeGetSite $_SPSitesTypeGetSite)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSite(array('SiteUrl'=>$_SPSitesTypeGetSite->getSiteUrl())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetSiteTemplates
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeGetSiteTemplates::getLCID()
	 * @param SPSitesTypeGetSiteTemplates GetSiteTemplates
	 * @return SPSitesTypeGetSiteTemplatesResponse
	 */
	public function GetSiteTemplates(SPSitesTypeGetSiteTemplates $_SPSitesTypeGetSiteTemplates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetSiteTemplates(array('LCID'=>$_SPSitesTypeGetSiteTemplates->getLCID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUpdatedFormDigest
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @param SPSitesTypeGetUpdatedFormDigest GetUpdatedFormDigest
	 * @return SPSitesTypeGetUpdatedFormDigestResponse
	 */
	public function GetUpdatedFormDigest(SPSitesTypeGetUpdatedFormDigest $_SPSitesTypeGetUpdatedFormDigest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUpdatedFormDigest(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetUpdatedFormDigestInformation
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeGetUpdatedFormDigestInformation::getUrl()
	 * @param SPSitesTypeGetUpdatedFormDigestInformation GetUpdatedFormDigestInformation
	 * @return SPSitesTypeGetUpdatedFormDigestInformationResponse
	 */
	public function GetUpdatedFormDigestInformation(SPSitesTypeGetUpdatedFormDigestInformation $_SPSitesTypeGetUpdatedFormDigestInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetUpdatedFormDigestInformation(array('url'=>$_SPSitesTypeGetUpdatedFormDigestInformation->getUrl())));
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
	 * @return SPSitesTypeGetUpdatedFormDigestInformationResponse
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