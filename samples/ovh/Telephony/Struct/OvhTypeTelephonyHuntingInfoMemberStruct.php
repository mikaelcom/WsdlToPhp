<?php
/**
 * Class file for OvhTypeTelephonyHuntingInfoMemberStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingInfoMemberStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingInfoMemberStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The logged
	 * @var boolean
	 */
	public $logged;
	/**
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * Constructor
	 * @param string number
	 * @param string status
	 * @param boolean logged
	 * @param int noReplyTimer
	 * @return OvhTypeTelephonyHuntingInfoMemberStruct
	 */
	public function __construct($_number = null,$_status = null,$_logged = null,$_noReplyTimer = null)
	{
		parent::__construct(array('number'=>$_number,'status'=>$_status,'logged'=>$_logged,'noReplyTimer'=>$_noReplyTimer));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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
	 * Set logged
	 * @param boolean logged
	 * @return boolean
	 */
	public function setLogged($_logged)
	{
		return ($this->logged = $_logged);
	}
	/**
	 * Get logged
	 * @return boolean
	 */
	public function getLogged()
	{
		return $this->logged;
	}
	/**
	 * Set noReplyTimer
	 * @param int noReplyTimer
	 * @return int
	 */
	public function setNoReplyTimer($_noReplyTimer)
	{
		return ($this->noReplyTimer = $_noReplyTimer);
	}
	/**
	 * Get noReplyTimer
	 * @return int
	 */
	public function getNoReplyTimer()
	{
		return $this->noReplyTimer;
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