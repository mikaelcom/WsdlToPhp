<?php
/**
 * Class file for XiCalendarServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiCalendarServiceGet
 * @date 08/07/2012
 */
class XiCalendarServiceGet extends XiCalendarWsdlClass
{
	/**
	 * Method to call GetEventDetails
	 * Meta informations :
	 * 	- documentation : Get the details for the specified event.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventDetails::getEventID()
	 * @param XiCalendarTypeGetEventDetails GetEventDetails
	 * @return XiCalendarTypeGetEventDetailsResponse
	 */
	public function GetEventDetails(XiCalendarTypeGetEventDetails $_XiCalendarTypeGetEventDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventDetails(array('EventID'=>$_XiCalendarTypeGetEventDetails->getEventID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMultipleEventDetails
	 * Meta informations :
	 * 	- documentation : Get the details for the specified events.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetMultipleEventDetails::getEventIDs()
	 * @param XiCalendarTypeGetMultipleEventDetails GetMultipleEventDetails
	 * @return XiCalendarTypeGetMultipleEventDetailsResponse
	 */
	public function GetMultipleEventDetails(XiCalendarTypeGetMultipleEventDetails $_XiCalendarTypeGetMultipleEventDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMultipleEventDetails(array('EventIDs'=>$_XiCalendarTypeGetMultipleEventDetails->getEventIDs())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsByCountryCode
	 * Meta informations :
	 * 	- documentation : Get events based on the country code and optionally within a specified released range.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsByCountryCode::getCountryCode()
	 * @uses XiCalendarTypeGetEventsByCountryCode::getReleasedOnStart()
	 * @uses XiCalendarTypeGetEventsByCountryCode::getReleasedOnEnd()
	 * @param XiCalendarTypeGetEventsByCountryCode GetEventsByCountryCode
	 * @return XiCalendarTypeGetEventsByCountryCodeResponse
	 */
	public function GetEventsByCountryCode(XiCalendarTypeGetEventsByCountryCode $_XiCalendarTypeGetEventsByCountryCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsByCountryCode(array('CountryCode'=>$_XiCalendarTypeGetEventsByCountryCode->getCountryCode(),'ReleasedOnStart'=>$_XiCalendarTypeGetEventsByCountryCode->getReleasedOnStart(),'ReleasedOnEnd'=>$_XiCalendarTypeGetEventsByCountryCode->getReleasedOnEnd())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMostRecentEventsByEventCode
	 * Meta informations :
	 * 	- documentation : Get the most recent events based on the event code and count.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetMostRecentEventsByEventCode::getEventCode()
	 * @uses XiCalendarTypeGetMostRecentEventsByEventCode::getCount()
	 * @param XiCalendarTypeGetMostRecentEventsByEventCode GetMostRecentEventsByEventCode
	 * @return XiCalendarTypeGetMostRecentEventsByEventCodeResponse
	 */
	public function GetMostRecentEventsByEventCode(XiCalendarTypeGetMostRecentEventsByEventCode $_XiCalendarTypeGetMostRecentEventsByEventCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMostRecentEventsByEventCode(array('EventCode'=>$_XiCalendarTypeGetMostRecentEventsByEventCode->getEventCode(),'Count'=>$_XiCalendarTypeGetMostRecentEventsByEventCode->getCount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsByEventCode
	 * Meta informations :
	 * 	- documentation : Get events based on the event code and optionally within a specified released range.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsByEventCode::getEventCode()
	 * @uses XiCalendarTypeGetEventsByEventCode::getReleasedOnStart()
	 * @uses XiCalendarTypeGetEventsByEventCode::getReleasedOnEnd()
	 * @param XiCalendarTypeGetEventsByEventCode GetEventsByEventCode
	 * @return XiCalendarTypeGetEventsByEventCodeResponse
	 */
	public function GetEventsByEventCode(XiCalendarTypeGetEventsByEventCode $_XiCalendarTypeGetEventsByEventCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsByEventCode(array('EventCode'=>$_XiCalendarTypeGetEventsByEventCode->getEventCode(),'ReleasedOnStart'=>$_XiCalendarTypeGetEventsByEventCode->getReleasedOnStart(),'ReleasedOnEnd'=>$_XiCalendarTypeGetEventsByEventCode->getReleasedOnEnd())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsByEventName
	 * Meta informations :
	 * 	- documentation : Get events based on the event name and optionally within a specified released range.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsByEventName::getEventName()
	 * @uses XiCalendarTypeGetEventsByEventName::getReleasedOnStart()
	 * @uses XiCalendarTypeGetEventsByEventName::getReleasedOnEnd()
	 * @param XiCalendarTypeGetEventsByEventName GetEventsByEventName
	 * @return XiCalendarTypeGetEventsByEventNameResponse
	 */
	public function GetEventsByEventName(XiCalendarTypeGetEventsByEventName $_XiCalendarTypeGetEventsByEventName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsByEventName(array('EventName'=>$_XiCalendarTypeGetEventsByEventName->getEventName(),'ReleasedOnStart'=>$_XiCalendarTypeGetEventsByEventName->getReleasedOnStart(),'ReleasedOnEnd'=>$_XiCalendarTypeGetEventsByEventName->getReleasedOnEnd())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForDate
	 * Meta informations :
	 * 	- documentation : Get events for the specified date.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForDate::getForDate()
	 * @param XiCalendarTypeGetEventsForDate GetEventsForDate
	 * @return XiCalendarTypeGetEventsForDateResponse
	 */
	public function GetEventsForDate(XiCalendarTypeGetEventsForDate $_XiCalendarTypeGetEventsForDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForDate(array('ForDate'=>$_XiCalendarTypeGetEventsForDate->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForMonth
	 * Meta informations :
	 * 	- documentation : Get events for the specified date.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForMonth::getForDate()
	 * @param XiCalendarTypeGetEventsForMonth GetEventsForMonth
	 * @return XiCalendarTypeGetEventsForMonthResponse
	 */
	public function GetEventsForMonth(XiCalendarTypeGetEventsForMonth $_XiCalendarTypeGetEventsForMonth)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForMonth(array('ForDate'=>$_XiCalendarTypeGetEventsForMonth->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForNextNumberOfDays
	 * Meta informations :
	 * 	- documentation : Get events for the next number of days into the future.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForNextNumberOfDays::getNextNumberOfDays()
	 * @param XiCalendarTypeGetEventsForNextNumberOfDays GetEventsForNextNumberOfDays
	 * @return XiCalendarTypeGetEventsForNextNumberOfDaysResponse
	 */
	public function GetEventsForNextNumberOfDays(XiCalendarTypeGetEventsForNextNumberOfDays $_XiCalendarTypeGetEventsForNextNumberOfDays)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForNextNumberOfDays(array('NextNumberOfDays'=>$_XiCalendarTypeGetEventsForNextNumberOfDays->getNextNumberOfDays())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForRange
	 * Meta informations :
	 * 	- documentation : Get events for the specified range.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForRange::getReleasedOnStart()
	 * @uses XiCalendarTypeGetEventsForRange::getReleasedOnEnd()
	 * @param XiCalendarTypeGetEventsForRange GetEventsForRange
	 * @return XiCalendarTypeGetEventsForRangeResponse
	 */
	public function GetEventsForRange(XiCalendarTypeGetEventsForRange $_XiCalendarTypeGetEventsForRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForRange(array('ReleasedOnStart'=>$_XiCalendarTypeGetEventsForRange->getReleasedOnStart(),'ReleasedOnEnd'=>$_XiCalendarTypeGetEventsForRange->getReleasedOnEnd())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForRangeLength
	 * Meta informations :
	 * 	- documentation : Get events for the date specified and next number of days past it.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForRangeLength::getReleasedOnStart()
	 * @uses XiCalendarTypeGetEventsForRangeLength::getNumberOfDays()
	 * @param XiCalendarTypeGetEventsForRangeLength GetEventsForRangeLength
	 * @return XiCalendarTypeGetEventsForRangeLengthResponse
	 */
	public function GetEventsForRangeLength(XiCalendarTypeGetEventsForRangeLength $_XiCalendarTypeGetEventsForRangeLength)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForRangeLength(array('ReleasedOnStart'=>$_XiCalendarTypeGetEventsForRangeLength->getReleasedOnStart(),'NumberOfDays'=>$_XiCalendarTypeGetEventsForRangeLength->getNumberOfDays())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForToday
	 * Meta informations :
	 * 	- documentation : Get all the events released today.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeGetEventsForToday GetEventsForToday
	 * @return XiCalendarTypeGetEventsForTodayResponse
	 */
	public function GetEventsForToday(XiCalendarTypeGetEventsForToday $_XiCalendarTypeGetEventsForToday)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForToday(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForTomorrow
	 * Meta informations :
	 * 	- documentation : Get all the events released tomorrow.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeGetEventsForTomorrow GetEventsForTomorrow
	 * @return XiCalendarTypeGetEventsForTomorrowResponse
	 */
	public function GetEventsForTomorrow(XiCalendarTypeGetEventsForTomorrow $_XiCalendarTypeGetEventsForTomorrow)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForTomorrow(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsForWeek
	 * Meta informations :
	 * 	- documentation : Get all the events released during the week specified. Weeks are Monday - Sunday.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsForWeek::getForDate()
	 * @param XiCalendarTypeGetEventsForWeek GetEventsForWeek
	 * @return XiCalendarTypeGetEventsForWeekResponse
	 */
	public function GetEventsForWeek(XiCalendarTypeGetEventsForWeek $_XiCalendarTypeGetEventsForWeek)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsForWeek(array('ForDate'=>$_XiCalendarTypeGetEventsForWeek->getForDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsReleasedForRange
	 * Meta informations :
	 * 	- documentation : Get events released for the specified range.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsReleasedForRange::getReleasedForStart()
	 * @uses XiCalendarTypeGetEventsReleasedForRange::getReleasedForEnd()
	 * @param XiCalendarTypeGetEventsReleasedForRange GetEventsReleasedForRange
	 * @return XiCalendarTypeGetEventsReleasedForRangeResponse
	 */
	public function GetEventsReleasedForRange(XiCalendarTypeGetEventsReleasedForRange $_XiCalendarTypeGetEventsReleasedForRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsReleasedForRange(array('ReleasedForStart'=>$_XiCalendarTypeGetEventsReleasedForRange->getReleasedForStart(),'ReleasedForEnd'=>$_XiCalendarTypeGetEventsReleasedForRange->getReleasedForEnd())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEventsReleasedForRangeLength
	 * Meta informations :
	 * 	- documentation : Get events released for the date specified and next number of days past it.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeGetEventsReleasedForRangeLength::getReleasedForStart()
	 * @uses XiCalendarTypeGetEventsReleasedForRangeLength::getNumberOfDays()
	 * @param XiCalendarTypeGetEventsReleasedForRangeLength GetEventsReleasedForRangeLength
	 * @return XiCalendarTypeGetEventsReleasedForRangeLengthResponse
	 */
	public function GetEventsReleasedForRangeLength(XiCalendarTypeGetEventsReleasedForRangeLength $_XiCalendarTypeGetEventsReleasedForRangeLength)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEventsReleasedForRangeLength(array('ReleasedForStart'=>$_XiCalendarTypeGetEventsReleasedForRangeLength->getReleasedForStart(),'NumberOfDays'=>$_XiCalendarTypeGetEventsReleasedForRangeLength->getNumberOfDays())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestUpdateTimeStamp
	 * Meta informations :
	 * 	- documentation : Get latest update TimeStamp for this service.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeGetLatestUpdateTimeStamp GetLatestUpdateTimeStamp
	 * @return XiCalendarTypeGetLatestUpdateTimeStampResponse
	 */
	public function GetLatestUpdateTimeStamp(XiCalendarTypeGetLatestUpdateTimeStamp $_XiCalendarTypeGetLatestUpdateTimeStamp)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestUpdateTimeStamp(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetServiceDemonstration
	 * Meta informations :
	 * 	- documentation : Get demonstration for this service.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @param XiCalendarTypeGetServiceDemonstration GetServiceDemonstration
	 * @return XiCalendarTypeGetServiceDemonstrationResponse
	 */
	public function GetServiceDemonstration(XiCalendarTypeGetServiceDemonstration $_XiCalendarTypeGetServiceDemonstration)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetServiceDemonstration(array()));
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
	 * @return XiCalendarTypeGetServiceDemonstrationResponse
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