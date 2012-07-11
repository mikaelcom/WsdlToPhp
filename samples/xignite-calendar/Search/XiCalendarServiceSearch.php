<?php
/**
 * Class file for XiCalendarServiceSearch
 * @date 08/07/2012
 */
/**
 * Class XiCalendarServiceSearch
 * @date 08/07/2012
 */
class XiCalendarServiceSearch extends XiCalendarWsdlClass
{
	/**
	 * Method to call SearchEvents
	 * Meta informations :
	 * 	- documentation : Perform a complex query on events.
	 * @uses XiCalendarWsdlClass::getSoapClient()
	 * @uses XiCalendarWsdlClass::setResult()
	 * @uses XiCalendarWsdlClass::getResult()
	 * @uses XiCalendarWsdlClass::saveLastError()
	 * @uses XiCalendarTypeSearchEvents::getEventName()
	 * @uses XiCalendarTypeSearchEvents::getEventCode()
	 * @uses XiCalendarTypeSearchEvents::getCountryCode()
	 * @uses XiCalendarTypeSearchEvents::getReleasedForStart()
	 * @uses XiCalendarTypeSearchEvents::getReleasedForEnd()
	 * @uses XiCalendarTypeSearchEvents::getReleasedOnStart()
	 * @uses XiCalendarTypeSearchEvents::getReleasedOnEnd()
	 * @uses XiCalendarTypeSearchEvents::getGetUS()
	 * @uses XiCalendarTypeSearchEvents::getGetInternational()
	 * @param XiCalendarTypeSearchEvents SearchEvents
	 * @return XiCalendarTypeSearchEventsResponse
	 */
	public function SearchEvents(XiCalendarTypeSearchEvents $_XiCalendarTypeSearchEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SearchEvents(array('EventName'=>$_XiCalendarTypeSearchEvents->getEventName(),'EventCode'=>$_XiCalendarTypeSearchEvents->getEventCode(),'CountryCode'=>$_XiCalendarTypeSearchEvents->getCountryCode(),'ReleasedForStart'=>$_XiCalendarTypeSearchEvents->getReleasedForStart(),'ReleasedForEnd'=>$_XiCalendarTypeSearchEvents->getReleasedForEnd(),'ReleasedOnStart'=>$_XiCalendarTypeSearchEvents->getReleasedOnStart(),'ReleasedOnEnd'=>$_XiCalendarTypeSearchEvents->getReleasedOnEnd(),'GetUS'=>$_XiCalendarTypeSearchEvents->getGetUS(),'GetInternational'=>$_XiCalendarTypeSearchEvents->getGetInternational())));
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
	 * @return XiCalendarTypeSearchEventsResponse
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