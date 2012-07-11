<?php
/**
 * Class file for XiRatesTypeGetRateAsOfTime
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateAsOfTime
 * @date 08/07/2012
 */
class XiRatesTypeGetRateAsOfTime extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
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
	 * @param XiRatesTypeRateTypes RateType
	 * @param string Time
	 * @return XiRatesTypeGetRateAsOfTime
	 */
	public function __construct($_RateType,$_Time = null)
	{
		parent::__construct(array('RateType'=>$_RateType,'Time'=>$_Time));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
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