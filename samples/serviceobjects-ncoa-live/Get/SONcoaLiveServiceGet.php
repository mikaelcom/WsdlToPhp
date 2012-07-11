<?php
/**
 * Class file for SONcoaLiveServiceGet
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveServiceGet
 * @date 06/07/2012
 */
class SONcoaLiveServiceGet extends SONcoaLiveWsdlClass
{
	/**
	 * Method to call GetCASSSummaryReport
	 * @uses SONcoaLiveWsdlClass::getSoapClient()
	 * @uses SONcoaLiveWsdlClass::setResult()
	 * @uses SONcoaLiveWsdlClass::getResult()
	 * @uses SONcoaLiveWsdlClass::saveLastError()
	 * @uses SONcoaLiveTypeGetCASSSummaryReport::getJobId()
	 * @uses SONcoaLiveTypeGetCASSSummaryReport::getLicenseKey()
	 * @param SONcoaLiveTypeGetCASSSummaryReport GetCASSSummaryReport
	 * @return SONcoaLiveTypeGetCASSSummaryReportResponse
	 */
	public function GetCASSSummaryReport(SONcoaLiveTypeGetCASSSummaryReport $_SONcoaLiveTypeGetCASSSummaryReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCASSSummaryReport(array('JobId'=>$_SONcoaLiveTypeGetCASSSummaryReport->getJobId(),'LicenseKey'=>$_SONcoaLiveTypeGetCASSSummaryReport->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetNCOALinkSummaryReport
	 * @uses SONcoaLiveWsdlClass::getSoapClient()
	 * @uses SONcoaLiveWsdlClass::setResult()
	 * @uses SONcoaLiveWsdlClass::getResult()
	 * @uses SONcoaLiveWsdlClass::saveLastError()
	 * @uses SONcoaLiveTypeGetNCOALinkSummaryReport::getJobId()
	 * @uses SONcoaLiveTypeGetNCOALinkSummaryReport::getLicenseKey()
	 * @param SONcoaLiveTypeGetNCOALinkSummaryReport GetNCOALinkSummaryReport
	 * @return SONcoaLiveTypeGetNCOALinkSummaryReportResponse
	 */
	public function GetNCOALinkSummaryReport(SONcoaLiveTypeGetNCOALinkSummaryReport $_SONcoaLiveTypeGetNCOALinkSummaryReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNCOALinkSummaryReport(array('JobId'=>$_SONcoaLiveTypeGetNCOALinkSummaryReport->getJobId(),'LicenseKey'=>$_SONcoaLiveTypeGetNCOALinkSummaryReport->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetJobSummaryReport
	 * @uses SONcoaLiveWsdlClass::getSoapClient()
	 * @uses SONcoaLiveWsdlClass::setResult()
	 * @uses SONcoaLiveWsdlClass::getResult()
	 * @uses SONcoaLiveWsdlClass::saveLastError()
	 * @uses SONcoaLiveTypeGetJobSummaryReport::getLicenseKey()
	 * @param SONcoaLiveTypeGetJobSummaryReport GetJobSummaryReport
	 * @return SONcoaLiveTypeGetJobSummaryReportResponse
	 */
	public function GetJobSummaryReport(SONcoaLiveTypeGetJobSummaryReport $_SONcoaLiveTypeGetJobSummaryReport)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetJobSummaryReport(array('LicenseKey'=>$_SONcoaLiveTypeGetJobSummaryReport->getLicenseKey())));
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
	 * @return SONcoaLiveTypeGetJobSummaryReportResponse
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