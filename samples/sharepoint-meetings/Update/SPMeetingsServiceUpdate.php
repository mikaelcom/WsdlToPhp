<?php
/**
 * Class file for SPMeetingsServiceUpdate
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceUpdate
 * @date 06/07/2012
 */
class SPMeetingsServiceUpdate extends SPMeetingsWsdlClass
{
	/**
	 * Method to call UpdateMeetingFromICal
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeUpdateMeetingFromICal::getIcalText()
	 * @uses SPMeetingsTypeUpdateMeetingFromICal::getIgnoreAttendees()
	 * @param SPMeetingsTypeUpdateMeetingFromICal UpdateMeetingFromICal
	 * @return SPMeetingsTypeUpdateMeetingFromICalResponse
	 */
	public function UpdateMeetingFromICal(SPMeetingsTypeUpdateMeetingFromICal $_SPMeetingsTypeUpdateMeetingFromICal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateMeetingFromICal(array('icalText'=>$_SPMeetingsTypeUpdateMeetingFromICal->getIcalText(),'ignoreAttendees'=>$_SPMeetingsTypeUpdateMeetingFromICal->getIgnoreAttendees())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateMeeting
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeUpdateMeeting::getUid()
	 * @uses SPMeetingsTypeUpdateMeeting::getSequence()
	 * @uses SPMeetingsTypeUpdateMeeting::getUtcDateStamp()
	 * @uses SPMeetingsTypeUpdateMeeting::getTitle()
	 * @uses SPMeetingsTypeUpdateMeeting::getLocation()
	 * @uses SPMeetingsTypeUpdateMeeting::getUtcDateStart()
	 * @uses SPMeetingsTypeUpdateMeeting::getUtcDateEnd()
	 * @uses SPMeetingsTypeUpdateMeeting::getNonGregorian()
	 * @param SPMeetingsTypeUpdateMeeting UpdateMeeting
	 * @return SPMeetingsTypeUpdateMeetingResponse
	 */
	public function UpdateMeeting(SPMeetingsTypeUpdateMeeting $_SPMeetingsTypeUpdateMeeting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateMeeting(array('uid'=>$_SPMeetingsTypeUpdateMeeting->getUid(),'sequence'=>$_SPMeetingsTypeUpdateMeeting->getSequence(),'utcDateStamp'=>$_SPMeetingsTypeUpdateMeeting->getUtcDateStamp(),'title'=>$_SPMeetingsTypeUpdateMeeting->getTitle(),'location'=>$_SPMeetingsTypeUpdateMeeting->getLocation(),'utcDateStart'=>$_SPMeetingsTypeUpdateMeeting->getUtcDateStart(),'utcDateEnd'=>$_SPMeetingsTypeUpdateMeeting->getUtcDateEnd(),'nonGregorian'=>$_SPMeetingsTypeUpdateMeeting->getNonGregorian())));
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
	 * @return SPMeetingsTypeUpdateMeetingResponse
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