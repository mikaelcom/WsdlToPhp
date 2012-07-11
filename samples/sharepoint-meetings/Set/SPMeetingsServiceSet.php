<?php
/**
 * Class file for SPMeetingsServiceSet
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceSet
 * @date 06/07/2012
 */
class SPMeetingsServiceSet extends SPMeetingsWsdlClass
{
	/**
	 * Method to call SetWorkspaceTitle
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeSetWorkspaceTitle::getTitle()
	 * @param SPMeetingsTypeSetWorkspaceTitle SetWorkspaceTitle
	 * @return SPMeetingsTypeSetWorkspaceTitleResponse
	 */
	public function SetWorkspaceTitle(SPMeetingsTypeSetWorkspaceTitle $_SPMeetingsTypeSetWorkspaceTitle)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetWorkspaceTitle(array('title'=>$_SPMeetingsTypeSetWorkspaceTitle->getTitle())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetAttendeeResponse
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getAttendeeEmail()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getRecurrenceId()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getUid()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getSequence()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getUtcDateTimeOrganizerCriticalChange()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getUtcDateTimeAttendeeCriticalChange()
	 * @uses SPMeetingsTypeSetAttendeeResponse::getResponse()
	 * @param SPMeetingsTypeSetAttendeeResponse SetAttendeeResponse
	 * @return SPMeetingsTypeSetAttendeeResponseResponse
	 */
	public function SetAttendeeResponse(SPMeetingsTypeSetAttendeeResponse $_SPMeetingsTypeSetAttendeeResponse)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetAttendeeResponse(array('attendeeEmail'=>$_SPMeetingsTypeSetAttendeeResponse->getAttendeeEmail(),'recurrenceId'=>$_SPMeetingsTypeSetAttendeeResponse->getRecurrenceId(),'uid'=>$_SPMeetingsTypeSetAttendeeResponse->getUid(),'sequence'=>$_SPMeetingsTypeSetAttendeeResponse->getSequence(),'utcDateTimeOrganizerCriticalChange'=>$_SPMeetingsTypeSetAttendeeResponse->getUtcDateTimeOrganizerCriticalChange(),'utcDateTimeAttendeeCriticalChange'=>$_SPMeetingsTypeSetAttendeeResponse->getUtcDateTimeAttendeeCriticalChange(),'response'=>$_SPMeetingsTypeSetAttendeeResponse->getResponse())));
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
	 * @return SPMeetingsTypeSetAttendeeResponseResponse
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