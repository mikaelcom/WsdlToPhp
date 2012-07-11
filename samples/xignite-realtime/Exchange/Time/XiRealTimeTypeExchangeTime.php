<?php
/**
 * Class file for XiRealTimeTypeExchangeTime
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeExchangeTime
 * @date 08/07/2012
 */
class XiRealTimeTypeExchangeTime extends XiRealTimeTypeCommon
{
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * Constructor
	 * @param string Time
	 * @return XiRealTimeTypeExchangeTime
	 */
	public function __construct($_Time = null)
	{
		XiRealTimeWsdlClass::__construct(array('Time'=>$_Time));
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
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