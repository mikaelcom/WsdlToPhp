<?php
/**
 * Class file for XiCalendarTypeEventSummary
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventSummary
 * @date 08/07/2012
 */
class XiCalendarTypeEventSummary extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The EventID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventID;
	/**
	 * The EventCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventCode;
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The EventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventName;
	/**
	 * The ReleasedOn
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ReleasedOn;
	/**
	 * The Values
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfEventValue
	 */
	public $Values;
	/**
	 * Constructor
	 * @param string EventID
	 * @param string EventCode
	 * @param string CountryCode
	 * @param string EventName
	 * @param dateTime ReleasedOn
	 * @param XiCalendarTypeArrayOfEventValue Values
	 * @return XiCalendarTypeEventSummary
	 */
	public function __construct($_EventID = null,$_EventCode = null,$_CountryCode = null,$_EventName = null,$_ReleasedOn,$_Values = null)
	{
		XiCalendarWsdlClass::__construct(array('EventID'=>$_EventID,'EventCode'=>$_EventCode,'CountryCode'=>$_CountryCode,'EventName'=>$_EventName,'ReleasedOn'=>$_ReleasedOn,'Values'=>new XiCalendarTypeArrayOfEventValue($_Values)));
	}
	/**
	 * Set EventID
	 * @param string EventID
	 * @return string
	 */
	public function setEventID($_EventID)
	{
		return ($this->EventID = $_EventID);
	}
	/**
	 * Get EventID
	 * @return string
	 */
	public function getEventID()
	{
		return $this->EventID;
	}
	/**
	 * Set EventCode
	 * @param string EventCode
	 * @return string
	 */
	public function setEventCode($_EventCode)
	{
		return ($this->EventCode = $_EventCode);
	}
	/**
	 * Get EventCode
	 * @return string
	 */
	public function getEventCode()
	{
		return $this->EventCode;
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set EventName
	 * @param string EventName
	 * @return string
	 */
	public function setEventName($_EventName)
	{
		return ($this->EventName = $_EventName);
	}
	/**
	 * Get EventName
	 * @return string
	 */
	public function getEventName()
	{
		return $this->EventName;
	}
	/**
	 * Set ReleasedOn
	 * @param dateTime ReleasedOn
	 * @return dateTime
	 */
	public function setReleasedOn($_ReleasedOn)
	{
		return ($this->ReleasedOn = $_ReleasedOn);
	}
	/**
	 * Get ReleasedOn
	 * @return dateTime
	 */
	public function getReleasedOn()
	{
		return $this->ReleasedOn;
	}
	/**
	 * Set Values
	 * @param ArrayOfEventValue Values
	 * @return ArrayOfEventValue
	 */
	public function setValues($_Values)
	{
		return ($this->Values = $_Values);
	}
	/**
	 * Get Values
	 * @return XiCalendarTypeArrayOfEventValue
	 */
	public function getValues()
	{
		return $this->Values;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>