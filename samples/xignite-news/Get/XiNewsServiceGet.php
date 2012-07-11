<?php
/**
 * Class file for XiNewsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiNewsServiceGet
 * @date 08/07/2012
 */
class XiNewsServiceGet extends XiNewsWsdlClass
{
	/**
	 * Method to call GetBriefings
	 * Meta informations :
	 * 	- documentation : Get market briefings from Briefing.Com.
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @param XiNewsTypeGetBriefings GetBriefings
	 * @return XiNewsTypeGetBriefingsResponse
	 */
	public function GetBriefings(XiNewsTypeGetBriefings $_XiNewsTypeGetBriefings)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBriefings(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLastBriefing
	 * Meta informations :
	 * 	- documentation : Get last market briefing from Briefing.Com.
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @param XiNewsTypeGetLastBriefing GetLastBriefing
	 * @return XiNewsTypeGetLastBriefingResponse
	 */
	public function GetLastBriefing(XiNewsTypeGetLastBriefing $_XiNewsTypeGetLastBriefing)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLastBriefing(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMarketNewsHeadlines
	 * Meta informations :
	 * 	- documentation : <br>Get most recent market news headlines.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @param XiNewsTypeGetMarketNewsHeadlines GetMarketNewsHeadlines
	 * @return XiNewsTypeGetMarketNewsHeadlinesResponse
	 */
	public function GetMarketNewsHeadlines(XiNewsTypeGetMarketNewsHeadlines $_XiNewsTypeGetMarketNewsHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMarketNewsHeadlines(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReutersMarketNewsHeadlines
	 * Meta informations :
	 * 	- documentation : <br>Get most recent market news headlines from Reuters and other sources.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @param XiNewsTypeGetReutersMarketNewsHeadlines GetReutersMarketNewsHeadlines
	 * @return XiNewsTypeGetReutersMarketNewsHeadlinesResponse
	 */
	public function GetReutersMarketNewsHeadlines(XiNewsTypeGetReutersMarketNewsHeadlines $_XiNewsTypeGetReutersMarketNewsHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReutersMarketNewsHeadlines(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMarketNewsDetails
	 * Meta informations :
	 * 	- documentation : <br>Get the content of a market news item based on the reference provided in GetMarketNewsHeadlines.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetMarketNewsDetails::getReference()
	 * @param XiNewsTypeGetMarketNewsDetails GetMarketNewsDetails
	 * @return XiNewsTypeGetMarketNewsDetailsResponse
	 */
	public function GetMarketNewsDetails(XiNewsTypeGetMarketNewsDetails $_XiNewsTypeGetMarketNewsDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMarketNewsDetails(array('Reference'=>$_XiNewsTypeGetMarketNewsDetails->getReference())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReutersMarketNewsDetails
	 * Meta informations :
	 * 	- documentation : <br>Get the content of a market news item from Reuters and other sources based on the reference provided in GetReutersMarketNewsHeadlines.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetReutersMarketNewsDetails::getReference()
	 * @param XiNewsTypeGetReutersMarketNewsDetails GetReutersMarketNewsDetails
	 * @return XiNewsTypeGetReutersMarketNewsDetailsResponse
	 */
	public function GetReutersMarketNewsDetails(XiNewsTypeGetReutersMarketNewsDetails $_XiNewsTypeGetReutersMarketNewsDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReutersMarketNewsDetails(array('Reference'=>$_XiNewsTypeGetReutersMarketNewsDetails->getReference())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStockHeadlines
	 * Meta informations :
	 * 	- documentation : Get headlines for a list of US Domestic equities.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetStockHeadlines::getSymbols()
	 * @uses XiNewsTypeGetStockHeadlines::getHeadlineCount()
	 * @param XiNewsTypeGetStockHeadlines GetStockHeadlines
	 * @return XiNewsTypeGetStockHeadlinesResponse
	 */
	public function GetStockHeadlines(XiNewsTypeGetStockHeadlines $_XiNewsTypeGetStockHeadlines)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockHeadlines(array('Symbols'=>$_XiNewsTypeGetStockHeadlines->getSymbols(),'HeadlineCount'=>$_XiNewsTypeGetStockHeadlines->getHeadlineCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStockHeadlinesRange
	 * Meta informations :
	 * 	- documentation : Get headlines with the given date range for a list of US Domestic equities.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetStockHeadlinesRange::getDate()
	 * @uses XiNewsTypeGetStockHeadlinesRange::getStartTime()
	 * @uses XiNewsTypeGetStockHeadlinesRange::getEndTime()
	 * @param XiNewsTypeGetStockHeadlinesRange GetStockHeadlinesRange
	 * @return XiNewsTypeGetStockHeadlinesRangeResponse
	 */
	public function GetStockHeadlinesRange(XiNewsTypeGetStockHeadlinesRange $_XiNewsTypeGetStockHeadlinesRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockHeadlinesRange(array('Date'=>$_XiNewsTypeGetStockHeadlinesRange->getDate(),'StartTime'=>$_XiNewsTypeGetStockHeadlinesRange->getStartTime(),'EndTime'=>$_XiNewsTypeGetStockHeadlinesRange->getEndTime())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStockHeadlinesTopFromClass
	 * Meta informations :
	 * 	- documentation : Get top 5 recent headlines for a list of US Domestic equities. <b>Soap Only</b>&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetStockHeadlinesTopFromClass::getSymbols()
	 * @param XiNewsTypeGetStockHeadlinesTopFromClass GetStockHeadlinesTopFromClass
	 * @return XiNewsTypeGetStockHeadlinesTopFromClassResponse
	 */
	public function GetStockHeadlinesTopFromClass(XiNewsTypeGetStockHeadlinesTopFromClass $_XiNewsTypeGetStockHeadlinesTopFromClass)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockHeadlinesTopFromClass(array('Symbols'=>$_XiNewsTypeGetStockHeadlinesTopFromClass->getSymbols())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetStockHeadlinesFromClass
	 * Meta informations :
	 * 	- documentation : Get headlines for a list of US Domestic equities. <b>Soap Only</b>&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetStockHeadlinesFromClass::getSymbols()
	 * @uses XiNewsTypeGetStockHeadlinesFromClass::getHeadlineCount()
	 * @param XiNewsTypeGetStockHeadlinesFromClass GetStockHeadlinesFromClass
	 * @return XiNewsTypeGetStockHeadlinesFromClassResponse
	 */
	public function GetStockHeadlinesFromClass(XiNewsTypeGetStockHeadlinesFromClass $_XiNewsTypeGetStockHeadlinesFromClass)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetStockHeadlinesFromClass(array('Symbols'=>$_XiNewsTypeGetStockHeadlinesFromClass->getSymbols(),'HeadlineCount'=>$_XiNewsTypeGetStockHeadlinesFromClass->getHeadlineCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningAnnouncements
	 * Meta informations :
	 * 	- documentation : Get earning announcement summary for the previous and next few days.&#183; Source: <b>Yahoo! Finance</b>. Also subject to their Terms of Use.<br>
	 * @uses XiNewsWsdlClass::getSoapClient()
	 * @uses XiNewsWsdlClass::setResult()
	 * @uses XiNewsWsdlClass::getResult()
	 * @uses XiNewsWsdlClass::saveLastError()
	 * @uses XiNewsTypeGetEarningAnnouncements::getAnnouncementDate()
	 * @param XiNewsTypeGetEarningAnnouncements GetEarningAnnouncements
	 * @return XiNewsTypeGetEarningAnnouncementsResponse
	 */
	public function GetEarningAnnouncements(XiNewsTypeGetEarningAnnouncements $_XiNewsTypeGetEarningAnnouncements)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningAnnouncements(array('AnnouncementDate'=>$_XiNewsTypeGetEarningAnnouncements->getAnnouncementDate())));
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
	 * @return XiNewsTypeGetEarningAnnouncementsResponse
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