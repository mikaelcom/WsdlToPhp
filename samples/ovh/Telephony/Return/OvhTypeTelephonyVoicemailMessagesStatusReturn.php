<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMessagesStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMessagesStatusReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMessagesStatusReturn extends OvhWsdlClass
{
	/**
	 * The unavailable
	 * @var boolean
	 */
	public $unavailable;
	/**
	 * The busy
	 * @var boolean
	 */
	public $busy;
	/**
	 * The temp
	 * @var boolean
	 */
	public $temp;
	/**
	 * The greet
	 * @var boolean
	 */
	public $greet;
	/**
	 * Constructor
	 * @param boolean unavailable
	 * @param boolean busy
	 * @param boolean temp
	 * @param boolean greet
	 * @return OvhTypeTelephonyVoicemailMessagesStatusReturn
	 */
	public function __construct($_unavailable = null,$_busy = null,$_temp = null,$_greet = null)
	{
		parent::__construct(array('unavailable'=>$_unavailable,'busy'=>$_busy,'temp'=>$_temp,'greet'=>$_greet));
	}
	/**
	 * Set unavailable
	 * @param boolean unavailable
	 * @return boolean
	 */
	public function setUnavailable($_unavailable)
	{
		return ($this->unavailable = $_unavailable);
	}
	/**
	 * Get unavailable
	 * @return boolean
	 */
	public function getUnavailable()
	{
		return $this->unavailable;
	}
	/**
	 * Set busy
	 * @param boolean busy
	 * @return boolean
	 */
	public function setBusy($_busy)
	{
		return ($this->busy = $_busy);
	}
	/**
	 * Get busy
	 * @return boolean
	 */
	public function getBusy()
	{
		return $this->busy;
	}
	/**
	 * Set temp
	 * @param boolean temp
	 * @return boolean
	 */
	public function setTemp($_temp)
	{
		return ($this->temp = $_temp);
	}
	/**
	 * Get temp
	 * @return boolean
	 */
	public function getTemp()
	{
		return $this->temp;
	}
	/**
	 * Set greet
	 * @param boolean greet
	 * @return boolean
	 */
	public function setGreet($_greet)
	{
		return ($this->greet = $_greet);
	}
	/**
	 * Get greet
	 * @return boolean
	 */
	public function getGreet()
	{
		return $this->greet;
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