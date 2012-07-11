<?php
/**
 * Class file for SPSitesServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPSitesServiceCreate
 * @date 06/07/2012
 */
class SPSitesServiceCreate extends SPSitesWsdlClass
{
	/**
	 * Method to call CreateWeb
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeCreateWeb::getUrl()
	 * @uses SPSitesTypeCreateWeb::getTitle()
	 * @uses SPSitesTypeCreateWeb::getDescription()
	 * @uses SPSitesTypeCreateWeb::getTemplateName()
	 * @uses SPSitesTypeCreateWeb::getLanguage()
	 * @uses SPSitesTypeCreateWeb::getLocale()
	 * @uses SPSitesTypeCreateWeb::getCollationLocale()
	 * @uses SPSitesTypeCreateWeb::getUniquePermissions()
	 * @uses SPSitesTypeCreateWeb::getAnonymous()
	 * @uses SPSitesTypeCreateWeb::getPresence()
	 * @param SPSitesTypeCreateWeb CreateWeb
	 * @return SPSitesTypeCreateWebResponse
	 */
	public function CreateWeb(SPSitesTypeCreateWeb $_SPSitesTypeCreateWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateWeb(array('url'=>$_SPSitesTypeCreateWeb->getUrl(),'title'=>$_SPSitesTypeCreateWeb->getTitle(),'description'=>$_SPSitesTypeCreateWeb->getDescription(),'templateName'=>$_SPSitesTypeCreateWeb->getTemplateName(),'language'=>$_SPSitesTypeCreateWeb->getLanguage(),'locale'=>$_SPSitesTypeCreateWeb->getLocale(),'collationLocale'=>$_SPSitesTypeCreateWeb->getCollationLocale(),'uniquePermissions'=>$_SPSitesTypeCreateWeb->getUniquePermissions(),'anonymous'=>$_SPSitesTypeCreateWeb->getAnonymous(),'presence'=>$_SPSitesTypeCreateWeb->getPresence())));
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
	 * @return SPSitesTypeCreateWebResponse
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