<?php
/**
 * Class file for SPSitesServiceImport
 * @date 06/07/2012
 */
/**
 * Class SPSitesServiceImport
 * @date 06/07/2012
 */
class SPSitesServiceImport extends SPSitesWsdlClass
{
	/**
	 * Method to call ImportWeb
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeImportWeb::getJobName()
	 * @uses SPSitesTypeImportWeb::getWebUrl()
	 * @uses SPSitesTypeImportWeb::getDataFiles()
	 * @uses SPSitesTypeImportWeb::getLogPath()
	 * @uses SPSitesTypeImportWeb::getIncludeUserSecurity()
	 * @uses SPSitesTypeImportWeb::getOverWrite()
	 * @param SPSitesTypeImportWeb ImportWeb
	 * @return SPSitesTypeImportWebResponse
	 */
	public function ImportWeb(SPSitesTypeImportWeb $_SPSitesTypeImportWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ImportWeb(array('jobName'=>$_SPSitesTypeImportWeb->getJobName(),'webUrl'=>$_SPSitesTypeImportWeb->getWebUrl(),'dataFiles'=>$_SPSitesTypeImportWeb->getDataFiles(),'logPath'=>$_SPSitesTypeImportWeb->getLogPath(),'includeUserSecurity'=>$_SPSitesTypeImportWeb->getIncludeUserSecurity(),'overWrite'=>$_SPSitesTypeImportWeb->getOverWrite())));
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
	 * @return SPSitesTypeImportWebResponse
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