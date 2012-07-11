<?php
/**
 * Class file for XiCalendarTypeSearchEvents
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeSearchEvents
 * @date 08/07/2012
 */
class XiCalendarTypeSearchEvents extends XiCalendarWsdlClass
{
	/**
	 * The EventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventName;
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
	 * The ReleasedForStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedForStart;
	/**
	 * The ReleasedForEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedForEnd;
	/**
	 * The ReleasedOnStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedOnStart;
	/**
	 * The ReleasedOnEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedOnEnd;
	/**
	 * The GetUS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetUS;
	/**
	 * The GetInternational
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetInternational;
	/**
	 * Constructor
	 * @param string EventName
	 * @param string EventCode
	 * @param string CountryCode
	 * @param string ReleasedForStart
	 * @param string ReleasedForEnd
	 * @param string ReleasedOnStart
	 * @param string ReleasedOnEnd
	 * @param string GetUS
	 * @param string GetInternational
	 * @return XiCalendarTypeSearchEvents
	 */
	public function __construct($_EventName = null,$_EventCode = null,$_CountryCode = null,$_ReleasedForStart = null,$_ReleasedForEnd = null,$_ReleasedOnStart = null,$_ReleasedOnEnd = null,$_GetUS = null,$_GetInternational = null)
	{
		parent::__construct(array('EventName'=>$_EventName,'EventCode'=>$_EventCode,'CountryCode'=>$_CountryCode,'ReleasedForStart'=>$_ReleasedForStart,'ReleasedForEnd'=>$_ReleasedForEnd,'ReleasedOnStart'=>$_ReleasedOnStart,'ReleasedOnEnd'=>$_ReleasedOnEnd,'GetUS'=>$_GetUS,'GetInternational'=>$_GetInternational));
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
	 * Set ReleasedForStart
	 * @param string ReleasedForStart
	 * @return string
	 */
	public function setReleasedForStart($_ReleasedForStart)
	{
		return ($this->ReleasedForStart = $_ReleasedForStart);
	}
	/**
	 * Get ReleasedForStart
	 * @return string
	 */
	public function getReleasedForStart()
	{
		return $this->ReleasedForStart;
	}
	/**
	 * Set ReleasedForEnd
	 * @param string ReleasedForEnd
	 * @return string
	 */
	public function setReleasedForEnd($_ReleasedForEnd)
	{
		return ($this->ReleasedForEnd = $_ReleasedForEnd);
	}
	/**
	 * Get ReleasedForEnd
	 * @return string
	 */
	public function getReleasedForEnd()
	{
		return $this->ReleasedForEnd;
	}
	/**
	 * Set ReleasedOnStart
	 * @param string ReleasedOnStart
	 * @return string
	 */
	public function setReleasedOnStart($_ReleasedOnStart)
	{
		return ($this->ReleasedOnStart = $_ReleasedOnStart);
	}
	/**
	 * Get ReleasedOnStart
	 * @return string
	 */
	public function getReleasedOnStart()
	{
		return $this->ReleasedOnStart;
	}
	/**
	 * Set ReleasedOnEnd
	 * @param string ReleasedOnEnd
	 * @return string
	 */
	public function setReleasedOnEnd($_ReleasedOnEnd)
	{
		return ($this->ReleasedOnEnd = $_ReleasedOnEnd);
	}
	/**
	 * Get ReleasedOnEnd
	 * @return string
	 */
	public function getReleasedOnEnd()
	{
		return $this->ReleasedOnEnd;
	}
	/**
	 * Set GetUS
	 * @param string GetUS
	 * @return string
	 */
	public function setGetUS($_GetUS)
	{
		return ($this->GetUS = $_GetUS);
	}
	/**
	 * Get GetUS
	 * @return string
	 */
	public function getGetUS()
	{
		return $this->GetUS;
	}
	/**
	 * Set GetInternational
	 * @param string GetInternational
	 * @return string
	 */
	public function setGetInternational($_GetInternational)
	{
		return ($this->GetInternational = $_GetInternational);
	}
	/**
	 * Get GetInternational
	 * @return string
	 */
	public function getGetInternational()
	{
		return $this->GetInternational;
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