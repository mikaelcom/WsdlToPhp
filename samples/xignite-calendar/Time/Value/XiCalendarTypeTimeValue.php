<?php
/**
 * Class file for XiCalendarTypeTimeValue
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeTimeValue
 * @date 08/07/2012
 */
class XiCalendarTypeTimeValue extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The DateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateTime;
	/**
	 * Constructor
	 * @param string DateTime
	 * @return XiCalendarTypeTimeValue
	 */
	public function __construct($_DateTime = null)
	{
		XiCalendarWsdlClass::__construct(array('DateTime'=>$_DateTime));
	}
	/**
	 * Set DateTime
	 * @param string DateTime
	 * @return string
	 */
	public function setDateTime($_DateTime)
	{
		return ($this->DateTime = $_DateTime);
	}
	/**
	 * Get DateTime
	 * @return string
	 */
	public function getDateTime()
	{
		return $this->DateTime;
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