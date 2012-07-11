<?php
/**
 * Class file for SPMeetingsServiceRestore
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceRestore
 * @date 06/07/2012
 */
class SPMeetingsServiceRestore extends SPMeetingsWsdlClass
{
	/**
	 * Method to call RestoreMeeting
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeRestoreMeeting::getUid()
	 * @param SPMeetingsTypeRestoreMeeting RestoreMeeting
	 * @return SPMeetingsTypeRestoreMeetingResponse
	 */
	public function RestoreMeeting(SPMeetingsTypeRestoreMeeting $_SPMeetingsTypeRestoreMeeting)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RestoreMeeting(array('uid'=>$_SPMeetingsTypeRestoreMeeting->getUid())));
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
	 * @return SPMeetingsTypeRestoreMeetingResponse
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