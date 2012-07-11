<?php
/**
 * Class file for SPMeetingsTypeTimeZoneInf
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsTypeTimeZoneInf
 * @date 06/07/2012
 */
class SPMeetingsTypeTimeZoneInf extends SPMeetingsWsdlClass
{
	/**
	 * The bias
	 * @var int
	 */
	public $bias;
	/**
	 * The standardDate
	 * @var SPMeetingsTypeSysTime
	 */
	public $standardDate;
	/**
	 * The standardBias
	 * @var int
	 */
	public $standardBias;
	/**
	 * The daylightDate
	 * @var SPMeetingsTypeSysTime
	 */
	public $daylightDate;
	/**
	 * The daylightBias
	 * @var int
	 */
	public $daylightBias;
	/**
	 * Constructor
	 * @param int bias
	 * @param SPMeetingsTypeSysTime standardDate
	 * @param int standardBias
	 * @param SPMeetingsTypeSysTime daylightDate
	 * @param int daylightBias
	 * @return SPMeetingsTypeTimeZoneInf
	 */
	public function __construct($_bias = null,$_standardDate = null,$_standardBias = null,$_daylightDate = null,$_daylightBias = null)
	{
		parent::__construct(array('bias'=>$_bias,'standardDate'=>$_standardDate,'standardBias'=>$_standardBias,'daylightDate'=>$_daylightDate,'daylightBias'=>$_daylightBias));
	}
	/**
	 * Set bias
	 * @param int bias
	 * @return int
	 */
	public function setBias($_bias)
	{
		return ($this->bias = $_bias);
	}
	/**
	 * Get bias
	 * @return int
	 */
	public function getBias()
	{
		return $this->bias;
	}
	/**
	 * Set standardDate
	 * @param SysTime standardDate
	 * @return SysTime
	 */
	public function setStandardDate($_standardDate)
	{
		return ($this->standardDate = $_standardDate);
	}
	/**
	 * Get standardDate
	 * @return SPMeetingsTypeSysTime
	 */
	public function getStandardDate()
	{
		return $this->standardDate;
	}
	/**
	 * Set standardBias
	 * @param int standardBias
	 * @return int
	 */
	public function setStandardBias($_standardBias)
	{
		return ($this->standardBias = $_standardBias);
	}
	/**
	 * Get standardBias
	 * @return int
	 */
	public function getStandardBias()
	{
		return $this->standardBias;
	}
	/**
	 * Set daylightDate
	 * @param SysTime daylightDate
	 * @return SysTime
	 */
	public function setDaylightDate($_daylightDate)
	{
		return ($this->daylightDate = $_daylightDate);
	}
	/**
	 * Get daylightDate
	 * @return SPMeetingsTypeSysTime
	 */
	public function getDaylightDate()
	{
		return $this->daylightDate;
	}
	/**
	 * Set daylightBias
	 * @param int daylightBias
	 * @return int
	 */
	public function setDaylightBias($_daylightBias)
	{
		return ($this->daylightBias = $_daylightBias);
	}
	/**
	 * Get daylightBias
	 * @return int
	 */
	public function getDaylightBias()
	{
		return $this->daylightBias;
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