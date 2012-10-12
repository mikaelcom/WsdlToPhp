<?php
/**
 * Class file for ScienceGovSearchTypeInterval
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeInterval
 * @date 13/10/2012
 */
class ScienceGovSearchTypeInterval extends ScienceGovSearchWsdlClass
{
	/**
	 * The period
	 * @var ScienceGovSearchTypePeriodType
	 */
	public $period;
	/**
	 * The timestamp
	 * @var dateTime
	 */
	public $timestamp;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypePeriodType period
	 * @param dateTime timestamp
	 * @return ScienceGovSearchTypeInterval
	 */
	public function __construct($_period = null,$_timestamp = null)
	{
		parent::__construct(array('period'=>$_period,'timestamp'=>$_timestamp));
	}
	/**
	 * Set period
	 * @param PeriodType period
	 * @return PeriodType
	 */
	public function setPeriod($_period)
	{
		return ($this->period = ScienceGovSearchTypePeriodType::valueIsValid($_period)?$_period:null);
	}
	/**
	 * Get period
	 * @return ScienceGovSearchTypePeriodType
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set timestamp
	 * @param dateTime timestamp
	 * @return dateTime
	 */
	public function setTimestamp($_timestamp)
	{
		return ($this->timestamp = $_timestamp);
	}
	/**
	 * Get timestamp
	 * @return dateTime
	 */
	public function getTimestamp()
	{
		return $this->timestamp;
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