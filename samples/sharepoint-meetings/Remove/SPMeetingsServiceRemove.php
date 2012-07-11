<?php
/**
 * Class file for SPMeetingsServiceRemove
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceRemove
 * @date 06/07/2012
 */
class SPMeetingsServiceRemove extends SPMeetingsWsdlClass
{
	/**
	 * Method to call RemoveMeeting
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeRemoveMeeting::getRecurrenceId()
	 * @uses SPMeetingsTypeRemoveMeeting::getUid()
	 * @uses SPMeetingsTypeRemoveMeeting::getSequence()
	 * @uses SPMeetingsTypeRemoveMeeting::getUtcDateStamp()
	 * @uses SPMeetingsTypeRemoveMeeting::getCancelMeeting()
	 * @param SPMeetingsTypeRemoveMeeting RemoveMeeting
	 * @return SPMeetingsTypeRemoveMeetingResponse
	 */
	public function RemoveMeeting(SPMeetingsTypeRemoveMeeting $_SPMeetingsTypeRemoveMeeting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RemoveMeeting(array('recurrenceId'=>$_SPMeetingsTypeRemoveMeeting->getRecurrenceId(),'uid'=>$_SPMeetingsTypeRemoveMeeting->getUid(),'sequence'=>$_SPMeetingsTypeRemoveMeeting->getSequence(),'utcDateStamp'=>$_SPMeetingsTypeRemoveMeeting->getUtcDateStamp(),'cancelMeeting'=>$_SPMeetingsTypeRemoveMeeting->getCancelMeeting())));
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
	 * @return SPMeetingsTypeRemoveMeetingResponse
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