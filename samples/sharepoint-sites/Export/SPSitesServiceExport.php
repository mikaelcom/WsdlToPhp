<?php
/**
 * Class file for SPSitesServiceExport
 * @date 06/07/2012
 */
/**
 * Class SPSitesServiceExport
 * @date 06/07/2012
 */
class SPSitesServiceExport extends SPSitesWsdlClass
{
	/**
	 * Method to call ExportWeb
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeExportWeb::getJobName()
	 * @uses SPSitesTypeExportWeb::getWebUrl()
	 * @uses SPSitesTypeExportWeb::getDataPath()
	 * @uses SPSitesTypeExportWeb::getIncludeSubwebs()
	 * @uses SPSitesTypeExportWeb::getIncludeUserSecurity()
	 * @uses SPSitesTypeExportWeb::getOverWrite()
	 * @uses SPSitesTypeExportWeb::getCabSize()
	 * @param SPSitesTypeExportWeb ExportWeb
	 * @return SPSitesTypeExportWebResponse
	 */
	public function ExportWeb(SPSitesTypeExportWeb $_SPSitesTypeExportWeb)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExportWeb(array('jobName'=>$_SPSitesTypeExportWeb->getJobName(),'webUrl'=>$_SPSitesTypeExportWeb->getWebUrl(),'dataPath'=>$_SPSitesTypeExportWeb->getDataPath(),'includeSubwebs'=>$_SPSitesTypeExportWeb->getIncludeSubwebs(),'includeUserSecurity'=>$_SPSitesTypeExportWeb->getIncludeUserSecurity(),'overWrite'=>$_SPSitesTypeExportWeb->getOverWrite(),'cabSize'=>$_SPSitesTypeExportWeb->getCabSize())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ExportSolution
	 * @uses SPSitesWsdlClass::getSoapClient()
	 * @uses SPSitesWsdlClass::setResult()
	 * @uses SPSitesWsdlClass::getResult()
	 * @uses SPSitesWsdlClass::saveLastError()
	 * @uses SPSitesTypeExportSolution::getSolutionFileName()
	 * @uses SPSitesTypeExportSolution::getTitle()
	 * @uses SPSitesTypeExportSolution::getDescription()
	 * @uses SPSitesTypeExportSolution::getFullReuseExportMode()
	 * @uses SPSitesTypeExportSolution::getIncludeWebContent()
	 * @param SPSitesTypeExportSolution ExportSolution
	 * @return SPSitesTypeExportSolutionResponse
	 */
	public function ExportSolution(SPSitesTypeExportSolution $_SPSitesTypeExportSolution)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ExportSolution(array('solutionFileName'=>$_SPSitesTypeExportSolution->getSolutionFileName(),'title'=>$_SPSitesTypeExportSolution->getTitle(),'description'=>$_SPSitesTypeExportSolution->getDescription(),'fullReuseExportMode'=>$_SPSitesTypeExportSolution->getFullReuseExportMode(),'includeWebContent'=>$_SPSitesTypeExportSolution->getIncludeWebContent())));
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
	 * @return SPSitesTypeExportSolutionResponse
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