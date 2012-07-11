<?php
/**
 * Class file for XiCalendarTypeGetEventsByCountryCode
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeGetEventsByCountryCode
 * @date 08/07/2012
 */
class XiCalendarTypeGetEventsByCountryCode extends XiCalendarWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
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
	 * Constructor
	 * @param string CountryCode
	 * @param string ReleasedOnStart
	 * @param string ReleasedOnEnd
	 * @return XiCalendarTypeGetEventsByCountryCode
	 */
	public function __construct($_CountryCode = null,$_ReleasedOnStart = null,$_ReleasedOnEnd = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'ReleasedOnStart'=>$_ReleasedOnStart,'ReleasedOnEnd'=>$_ReleasedOnEnd));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>