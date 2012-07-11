<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The timeEnd
	 * @var string
	 */
	public $timeEnd;
	/**
	 * The timeStart
	 * @var string
	 */
	public $timeStart;
	/**
	 * The dayType
	 * @var string
	 */
	public $dayType;
	/**
	 * The forwardPolicyIndex
	 * @var string
	 */
	public $forwardPolicyIndex;
	/**
	 * Constructor
	 * @param string status
	 * @param string timeEnd
	 * @param string timeStart
	 * @param string dayType
	 * @param string forwardPolicyIndex
	 * @return OvhTypeTelephonyHuntingGenericScreenStruct
	 */
	public function __construct($_status = null,$_timeEnd = null,$_timeStart = null,$_dayType = null,$_forwardPolicyIndex = null)
	{
		parent::__construct(array('status'=>$_status,'timeEnd'=>$_timeEnd,'timeStart'=>$_timeStart,'dayType'=>$_dayType,'forwardPolicyIndex'=>$_forwardPolicyIndex));
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set timeEnd
	 * @param string timeEnd
	 * @return string
	 */
	public function setTimeEnd($_timeEnd)
	{
		return ($this->timeEnd = $_timeEnd);
	}
	/**
	 * Get timeEnd
	 * @return string
	 */
	public function getTimeEnd()
	{
		return $this->timeEnd;
	}
	/**
	 * Set timeStart
	 * @param string timeStart
	 * @return string
	 */
	public function setTimeStart($_timeStart)
	{
		return ($this->timeStart = $_timeStart);
	}
	/**
	 * Get timeStart
	 * @return string
	 */
	public function getTimeStart()
	{
		return $this->timeStart;
	}
	/**
	 * Set dayType
	 * @param string dayType
	 * @return string
	 */
	public function setDayType($_dayType)
	{
		return ($this->dayType = $_dayType);
	}
	/**
	 * Get dayType
	 * @return string
	 */
	public function getDayType()
	{
		return $this->dayType;
	}
	/**
	 * Set forwardPolicyIndex
	 * @param string forwardPolicyIndex
	 * @return string
	 */
	public function setForwardPolicyIndex($_forwardPolicyIndex)
	{
		return ($this->forwardPolicyIndex = $_forwardPolicyIndex);
	}
	/**
	 * Get forwardPolicyIndex
	 * @return string
	 */
	public function getForwardPolicyIndex()
	{
		return $this->forwardPolicyIndex;
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