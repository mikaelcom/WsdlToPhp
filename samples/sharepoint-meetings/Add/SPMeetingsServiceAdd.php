<?php
/**
 * Class file for SPMeetingsServiceAdd
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceAdd
 * @date 06/07/2012
 */
class SPMeetingsServiceAdd extends SPMeetingsWsdlClass
{
	/**
	 * Method to call AddMeetingFromICal
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeAddMeetingFromICal::getOrganizerEmail()
	 * @uses SPMeetingsTypeAddMeetingFromICal::getIcalText()
	 * @param SPMeetingsTypeAddMeetingFromICal AddMeetingFromICal
	 * @return SPMeetingsTypeAddMeetingFromICalResponse
	 */
	public function AddMeetingFromICal(SPMeetingsTypeAddMeetingFromICal $_SPMeetingsTypeAddMeetingFromICal)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMeetingFromICal(array('organizerEmail'=>$_SPMeetingsTypeAddMeetingFromICal->getOrganizerEmail(),'icalText'=>$_SPMeetingsTypeAddMeetingFromICal->getIcalText())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddMeeting
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeAddMeeting::getOrganizerEmail()
	 * @uses SPMeetingsTypeAddMeeting::getUid()
	 * @uses SPMeetingsTypeAddMeeting::getSequence()
	 * @uses SPMeetingsTypeAddMeeting::getUtcDateStamp()
	 * @uses SPMeetingsTypeAddMeeting::getTitle()
	 * @uses SPMeetingsTypeAddMeeting::getLocation()
	 * @uses SPMeetingsTypeAddMeeting::getUtcDateStart()
	 * @uses SPMeetingsTypeAddMeeting::getUtcDateEnd()
	 * @uses SPMeetingsTypeAddMeeting::getNonGregorian()
	 * @param SPMeetingsTypeAddMeeting AddMeeting
	 * @return SPMeetingsTypeAddMeetingResponse
	 */
	public function AddMeeting(SPMeetingsTypeAddMeeting $_SPMeetingsTypeAddMeeting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddMeeting(array('organizerEmail'=>$_SPMeetingsTypeAddMeeting->getOrganizerEmail(),'uid'=>$_SPMeetingsTypeAddMeeting->getUid(),'sequence'=>$_SPMeetingsTypeAddMeeting->getSequence(),'utcDateStamp'=>$_SPMeetingsTypeAddMeeting->getUtcDateStamp(),'title'=>$_SPMeetingsTypeAddMeeting->getTitle(),'location'=>$_SPMeetingsTypeAddMeeting->getLocation(),'utcDateStart'=>$_SPMeetingsTypeAddMeeting->getUtcDateStart(),'utcDateEnd'=>$_SPMeetingsTypeAddMeeting->getUtcDateEnd(),'nonGregorian'=>$_SPMeetingsTypeAddMeeting->getNonGregorian())));
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
	 * @return SPMeetingsTypeAddMeetingResponse
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