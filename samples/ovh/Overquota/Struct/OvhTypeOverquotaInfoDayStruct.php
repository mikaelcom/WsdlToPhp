<?php
/**
 * Class file for OvhTypeOverquotaInfoDayStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOverquotaInfoDayStruct
 * @date 02/07/2012
 */
class OvhTypeOverquotaInfoDayStruct extends OvhWsdlClass
{
	/**
	 * The day
	 * @var int
	 */
	public $day;
	/**
	 * The value
	 * @var int
	 */
	public $value;
	/**
	 * Constructor
	 * @param int day
	 * @param int value
	 * @return OvhTypeOverquotaInfoDayStruct
	 */
	public function __construct($_day = null,$_value = null)
	{
		parent::__construct(array('day'=>$_day,'value'=>$_value));
	}
	/**
	 * Set day
	 * @param int day
	 * @return int
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get day
	 * @return int
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set value
	 * @param int value
	 * @return int
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return int
	 */
	public function getValue()
	{
		return $this->value;
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