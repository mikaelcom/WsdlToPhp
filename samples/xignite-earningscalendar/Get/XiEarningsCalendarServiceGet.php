<?php
/**
 * Class file for XiEarningsCalendarServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarServiceGet
 * @date 08/07/2012
 */
class XiEarningsCalendarServiceGet extends XiEarningsCalendarWsdlClass
{
	/**
	 * Method to call GetEarningCalendarItem
	 * Meta informations :
	 * 	- documentation : Returns the list of companies covered by the service.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItem::getType()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItem::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItem::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetEarningCalendarItem GetEarningCalendarItem
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemResponse
	 */
	public function GetEarningCalendarItem(XiEarningsCalendarTypeGetEarningCalendarItem $_XiEarningsCalendarTypeGetEarningCalendarItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCalendarItem(array('Type'=>$_XiEarningsCalendarTypeGetEarningCalendarItem->getType(),'Identifier'=>$_XiEarningsCalendarTypeGetEarningCalendarItem->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetEarningCalendarItem->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningCalendarItems
	 * Meta informations :
	 * 	- documentation : Returns multiple earning calendar data items.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItems::getTypes()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItems::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItems::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetEarningCalendarItems GetEarningCalendarItems
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemsResponse
	 */
	public function GetEarningCalendarItems(XiEarningsCalendarTypeGetEarningCalendarItems $_XiEarningsCalendarTypeGetEarningCalendarItems)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCalendarItems(array('Types'=>$_XiEarningsCalendarTypeGetEarningCalendarItems->getTypes(),'Identifier'=>$_XiEarningsCalendarTypeGetEarningCalendarItems->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetEarningCalendarItems->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningCalendarItemsAsString
	 * Meta informations :
	 * 	- documentation : Returns multiple earning calendar data items.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItemsAsString::getTypes()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItemsAsString::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarItemsAsString::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetEarningCalendarItemsAsString GetEarningCalendarItemsAsString
	 * @return XiEarningsCalendarTypeGetEarningCalendarItemsAsStringResponse
	 */
	public function GetEarningCalendarItemsAsString(XiEarningsCalendarTypeGetEarningCalendarItemsAsString $_XiEarningsCalendarTypeGetEarningCalendarItemsAsString)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCalendarItemsAsString(array('Types'=>$_XiEarningsCalendarTypeGetEarningCalendarItemsAsString->getTypes(),'Identifier'=>$_XiEarningsCalendarTypeGetEarningCalendarItemsAsString->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetEarningCalendarItemsAsString->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetConferenceCallInformation
	 * Meta informations :
	 * 	- documentation : Returns conference call information for an earning call.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetConferenceCallInformation::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetConferenceCallInformation::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetConferenceCallInformation GetConferenceCallInformation
	 * @return XiEarningsCalendarTypeGetConferenceCallInformationResponse
	 */
	public function GetConferenceCallInformation(XiEarningsCalendarTypeGetConferenceCallInformation $_XiEarningsCalendarTypeGetConferenceCallInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetConferenceCallInformation(array('Identifier'=>$_XiEarningsCalendarTypeGetConferenceCallInformation->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetConferenceCallInformation->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetReplayInformation
	 * Meta informations :
	 * 	- documentation : Returns replay information for an earning call.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetReplayInformation::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetReplayInformation::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetReplayInformation GetReplayInformation
	 * @return XiEarningsCalendarTypeGetReplayInformationResponse
	 */
	public function GetReplayInformation(XiEarningsCalendarTypeGetReplayInformation $_XiEarningsCalendarTypeGetReplayInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetReplayInformation(array('Identifier'=>$_XiEarningsCalendarTypeGetReplayInformation->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetReplayInformation->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningDates
	 * Meta informations :
	 * 	- documentation : Return the earning dates for a company.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningDates::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetEarningDates::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetEarningDates GetEarningDates
	 * @return XiEarningsCalendarTypeGetEarningDatesResponse
	 */
	public function GetEarningDates(XiEarningsCalendarTypeGetEarningDates $_XiEarningsCalendarTypeGetEarningDates)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningDates(array('Identifier'=>$_XiEarningsCalendarTypeGetEarningDates->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetEarningDates->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningCall
	 * Meta informations :
	 * 	- documentation : Return the next earning call information for a company.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCall::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetEarningCall::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetEarningCall GetEarningCall
	 * @return XiEarningsCalendarTypeGetEarningCallResponse
	 */
	public function GetEarningCall(XiEarningsCalendarTypeGetEarningCall $_XiEarningsCalendarTypeGetEarningCall)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCall(array('Identifier'=>$_XiEarningsCalendarTypeGetEarningCall->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetEarningCall->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBoardMeeting
	 * Meta informations :
	 * 	- documentation : Return the next board meeting information for a company.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetBoardMeeting::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetBoardMeeting::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetBoardMeeting GetBoardMeeting
	 * @return XiEarningsCalendarTypeGetBoardMeetingResponse
	 */
	public function GetBoardMeeting(XiEarningsCalendarTypeGetBoardMeeting $_XiEarningsCalendarTypeGetBoardMeeting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBoardMeeting(array('Identifier'=>$_XiEarningsCalendarTypeGetBoardMeeting->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetBoardMeeting->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAnnouncement
	 * Meta informations :
	 * 	- documentation : Return the next earning call information for a company including conference call details.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetAnnouncement::getIdentifier()
	 * @uses XiEarningsCalendarTypeGetAnnouncement::getIdentifierType()
	 * @param XiEarningsCalendarTypeGetAnnouncement GetAnnouncement
	 * @return XiEarningsCalendarTypeGetAnnouncementResponse
	 */
	public function GetAnnouncement(XiEarningsCalendarTypeGetAnnouncement $_XiEarningsCalendarTypeGetAnnouncement)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAnnouncement(array('Identifier'=>$_XiEarningsCalendarTypeGetAnnouncement->getIdentifier(),'IdentifierType'=>$_XiEarningsCalendarTypeGetAnnouncement->getIdentifierType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningCalendarRange
	 * Meta informations :
	 * 	- documentation : Returns an earning calendar.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarRange::getStartDate()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarRange::getEndDate()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarRange::getMinimumMarketCap()
	 * @param XiEarningsCalendarTypeGetEarningCalendarRange GetEarningCalendarRange
	 * @return XiEarningsCalendarTypeGetEarningCalendarRangeResponse
	 */
	public function GetEarningCalendarRange(XiEarningsCalendarTypeGetEarningCalendarRange $_XiEarningsCalendarTypeGetEarningCalendarRange)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCalendarRange(array('StartDate'=>$_XiEarningsCalendarTypeGetEarningCalendarRange->getStartDate(),'EndDate'=>$_XiEarningsCalendarTypeGetEarningCalendarRange->getEndDate(),'MinimumMarketCap'=>$_XiEarningsCalendarTypeGetEarningCalendarRange->getMinimumMarketCap())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetEarningCalendarDay
	 * Meta informations :
	 * 	- documentation : Returns a single date for an earning calendar.
	 * @uses XiEarningsCalendarWsdlClass::getSoapClient()
	 * @uses XiEarningsCalendarWsdlClass::setResult()
	 * @uses XiEarningsCalendarWsdlClass::getResult()
	 * @uses XiEarningsCalendarWsdlClass::saveLastError()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarDay::getAsOfDate()
	 * @uses XiEarningsCalendarTypeGetEarningCalendarDay::getMinimumMarketCap()
	 * @param XiEarningsCalendarTypeGetEarningCalendarDay GetEarningCalendarDay
	 * @return XiEarningsCalendarTypeGetEarningCalendarDayResponse
	 */
	public function GetEarningCalendarDay(XiEarningsCalendarTypeGetEarningCalendarDay $_XiEarningsCalendarTypeGetEarningCalendarDay)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetEarningCalendarDay(array('AsOfDate'=>$_XiEarningsCalendarTypeGetEarningCalendarDay->getAsOfDate(),'MinimumMarketCap'=>$_XiEarningsCalendarTypeGetEarningCalendarDay->getMinimumMarketCap())));
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
	 * @return XiEarningsCalendarTypeGetEarningCalendarDayResponse
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