<?php
/**
 * Class file for XiReleasesServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiReleasesServiceGet
 * @date 08/07/2012
 */
class XiReleasesServiceGet extends XiReleasesWsdlClass
{
	/**
	 * Method to call GetTodaysSecurityHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases for a security for today.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetTodaysSecurityHeadlines::getIdentifier()
	 * @uses XiReleasesTypeGetTodaysSecurityHeadlines::getIdentifierType()
	 * @param XiReleasesTypeGetTodaysSecurityHeadlines GetTodaysSecurityHeadlines
	 * @return XiReleasesTypeGetTodaysSecurityHeadlinesResponse
	 */
	public function GetTodaysSecurityHeadlines(XiReleasesTypeGetTodaysSecurityHeadlines $_XiReleasesTypeGetTodaysSecurityHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysSecurityHeadlines(array('Identifier'=>$_XiReleasesTypeGetTodaysSecurityHeadlines->getIdentifier(),'IdentifierType'=>$_XiReleasesTypeGetTodaysSecurityHeadlines->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTodaysMarketHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases for today.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @param XiReleasesTypeGetTodaysMarketHeadlines GetTodaysMarketHeadlines
	 * @return XiReleasesTypeGetTodaysMarketHeadlinesResponse
	 */
	public function GetTodaysMarketHeadlines(XiReleasesTypeGetTodaysMarketHeadlines $_XiReleasesTypeGetTodaysMarketHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTodaysMarketHeadlines(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopSecurityHeadlines
	 * Meta informations :
	 * 	- documentation : Return the top press releases for a security.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetTopSecurityHeadlines::getIdentifier()
	 * @uses XiReleasesTypeGetTopSecurityHeadlines::getIdentifierType()
	 * @uses XiReleasesTypeGetTopSecurityHeadlines::getCount()
	 * @param XiReleasesTypeGetTopSecurityHeadlines GetTopSecurityHeadlines
	 * @return XiReleasesTypeGetTopSecurityHeadlinesResponse
	 */
	public function GetTopSecurityHeadlines(XiReleasesTypeGetTopSecurityHeadlines $_XiReleasesTypeGetTopSecurityHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopSecurityHeadlines(array('Identifier'=>$_XiReleasesTypeGetTopSecurityHeadlines->getIdentifier(),'IdentifierType'=>$_XiReleasesTypeGetTopSecurityHeadlines->getIdentifierType(),'Count'=>$_XiReleasesTypeGetTopSecurityHeadlines->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopMarketHeadlines
	 * Meta informations :
	 * 	- documentation : Return the top press releases.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetTopMarketHeadlines::getCount()
	 * @param XiReleasesTypeGetTopMarketHeadlines GetTopMarketHeadlines
	 * @return XiReleasesTypeGetTopMarketHeadlinesResponse
	 */
	public function GetTopMarketHeadlines(XiReleasesTypeGetTopMarketHeadlines $_XiReleasesTypeGetTopMarketHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopMarketHeadlines(array('Count'=>$_XiReleasesTypeGetTopMarketHeadlines->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastSecurityHeadlines
	 * Meta informations :
	 * 	- documentation : Return the last press releases for a security since a certain time.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetLastSecurityHeadlines::getIdentifier()
	 * @uses XiReleasesTypeGetLastSecurityHeadlines::getIdentifierType()
	 * @uses XiReleasesTypeGetLastSecurityHeadlines::getSinceDate()
	 * @param XiReleasesTypeGetLastSecurityHeadlines GetLastSecurityHeadlines
	 * @return XiReleasesTypeGetLastSecurityHeadlinesResponse
	 */
	public function GetLastSecurityHeadlines(XiReleasesTypeGetLastSecurityHeadlines $_XiReleasesTypeGetLastSecurityHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastSecurityHeadlines(array('Identifier'=>$_XiReleasesTypeGetLastSecurityHeadlines->getIdentifier(),'IdentifierType'=>$_XiReleasesTypeGetLastSecurityHeadlines->getIdentifierType(),'SinceDate'=>$_XiReleasesTypeGetLastSecurityHeadlines->getSinceDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastMarketHeadlines
	 * Meta informations :
	 * 	- documentation : Return the last press releases since a certain time.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetLastMarketHeadlines::getSinceDate()
	 * @param XiReleasesTypeGetLastMarketHeadlines GetLastMarketHeadlines
	 * @return XiReleasesTypeGetLastMarketHeadlinesResponse
	 */
	public function GetLastMarketHeadlines(XiReleasesTypeGetLastMarketHeadlines $_XiReleasesTypeGetLastMarketHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastMarketHeadlines(array('SinceDate'=>$_XiReleasesTypeGetLastMarketHeadlines->getSinceDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalSecurityHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases headlines for a security and a date range.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetHistoricalSecurityHeadlines::getIdentifier()
	 * @uses XiReleasesTypeGetHistoricalSecurityHeadlines::getIdentifierType()
	 * @uses XiReleasesTypeGetHistoricalSecurityHeadlines::getSource()
	 * @uses XiReleasesTypeGetHistoricalSecurityHeadlines::getStartDate()
	 * @uses XiReleasesTypeGetHistoricalSecurityHeadlines::getEndDate()
	 * @param XiReleasesTypeGetHistoricalSecurityHeadlines GetHistoricalSecurityHeadlines
	 * @return XiReleasesTypeGetHistoricalSecurityHeadlinesResponse
	 */
	public function GetHistoricalSecurityHeadlines(XiReleasesTypeGetHistoricalSecurityHeadlines $_XiReleasesTypeGetHistoricalSecurityHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalSecurityHeadlines(array('Identifier'=>$_XiReleasesTypeGetHistoricalSecurityHeadlines->getIdentifier(),'IdentifierType'=>$_XiReleasesTypeGetHistoricalSecurityHeadlines->getIdentifierType(),'Source'=>$_XiReleasesTypeGetHistoricalSecurityHeadlines->getSource(),'StartDate'=>$_XiReleasesTypeGetHistoricalSecurityHeadlines->getStartDate(),'EndDate'=>$_XiReleasesTypeGetHistoricalSecurityHeadlines->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetHistoricalMarketHeadlines
	 * Meta informations :
	 * 	- documentation : Return press releases headlines for a date range.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetHistoricalMarketHeadlines::getSource()
	 * @uses XiReleasesTypeGetHistoricalMarketHeadlines::getStartDate()
	 * @uses XiReleasesTypeGetHistoricalMarketHeadlines::getEndDate()
	 * @param XiReleasesTypeGetHistoricalMarketHeadlines GetHistoricalMarketHeadlines
	 * @return XiReleasesTypeGetHistoricalMarketHeadlinesResponse
	 */
	public function GetHistoricalMarketHeadlines(XiReleasesTypeGetHistoricalMarketHeadlines $_XiReleasesTypeGetHistoricalMarketHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetHistoricalMarketHeadlines(array('Source'=>$_XiReleasesTypeGetHistoricalMarketHeadlines->getSource(),'StartDate'=>$_XiReleasesTypeGetHistoricalMarketHeadlines->getStartDate(),'EndDate'=>$_XiReleasesTypeGetHistoricalMarketHeadlines->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReleaseContent
	 * Meta informations :
	 * 	- documentation : Return the content of a press release.
	 * @uses XiReleasesWsdlClass::getSoapClient()
	 * @uses XiReleasesWsdlClass::setResult()
	 * @uses XiReleasesWsdlClass::getResult()
	 * @uses XiReleasesWsdlClass::saveLastError()
	 * @uses XiReleasesTypeGetReleaseContent::getReleaseID()
	 * @param XiReleasesTypeGetReleaseContent GetReleaseContent
	 * @return XiReleasesTypeGetReleaseContentResponse
	 */
	public function GetReleaseContent(XiReleasesTypeGetReleaseContent $_XiReleasesTypeGetReleaseContent)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReleaseContent(array('ReleaseID'=>$_XiReleasesTypeGetReleaseContent->getReleaseID())));
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
	 * @return XiReleasesTypeGetReleaseContentResponse
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