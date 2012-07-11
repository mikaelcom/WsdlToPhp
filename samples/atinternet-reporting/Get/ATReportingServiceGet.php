<?php
/**
 * Class file for ATReportingServiceGet
 * @date 03/07/2012
 */
/**
 * Class ATReportingServiceGet
 * @date 03/07/2012
 */
class ATReportingServiceGet extends ATReportingWsdlClass
{
	/**
	 * Method to call getDownloadUrl
	 * Meta informations :
	 * 	- documentation : Get the download url for a specified job
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @uses ATReportingTypeGetDownloadUrl::getJobid()
	 * @param ATReportingTypeGetDownloadUrl GetDownloadUrl
	 * @return ATReportingTypeGetDownloadUrlResponse
	 */
	public function getDownloadUrl(ATReportingTypeGetDownloadUrl $_ATReportingTypeGetDownloadUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getDownloadUrl(array('jobid'=>$_ATReportingTypeGetDownloadUrl->getJobid())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getAllJobInfo
	 * Meta informations :
	 * 	- documentation : List all the job linked to your GUID
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @param ATReportingTypeGetAllJobInfo GetAllJobInfo
	 * @return ATReportingTypeGetAllJobInfoResponse
	 */
	public function getAllJobInfo(ATReportingTypeGetAllJobInfo $_ATReportingTypeGetAllJobInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getAllJobInfo(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getLevel2Sites
	 * Meta informations :
	 * 	- documentation : List all level 2 sites with your current GUID.
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @param ATReportingTypeGetLevel2Sites GetLevel2Sites
	 * @return ATReportingTypeGetLevel2SitesResponse
	 */
	public function getLevel2Sites(ATReportingTypeGetLevel2Sites $_ATReportingTypeGetLevel2Sites)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getLevel2Sites(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getAPISegments
	 * Meta informations :
	 * 	- documentation : Get the list of API complient segment of the site found in the Soap Header
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @param ATReportingTypeGetAPISegments GetAPISegments
	 * @return ATReportingTypeGetAPISegmentsResponse
	 */
	public function getAPISegments(ATReportingTypeGetAPISegments $_ATReportingTypeGetAPISegments)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getAPISegments(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call getLastMinute
	 * Meta informations :
	 * 	- documentation : Get the last minute available for real time queries
	 * @uses ATReportingWsdlClass::getSoapClient()
	 * @uses ATReportingWsdlClass::setResult()
	 * @uses ATReportingWsdlClass::getResult()
	 * @uses ATReportingWsdlClass::saveLastError()
	 * @uses ATReportingTypeGetLastMinute::getFormat()
	 * @param ATReportingTypeGetLastMinute GetLastMinute
	 * @return ATReportingTypeGetLastMinuteResponse
	 */
	public function getLastMinute(ATReportingTypeGetLastMinute $_ATReportingTypeGetLastMinute)
	{
		try
		{
			$this->setResult(self::getSoapClient()->getLastMinute(array('format'=>$_ATReportingTypeGetLastMinute->getFormat())));
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
	 * @return ATReportingTypeGetLastMinuteResponse
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