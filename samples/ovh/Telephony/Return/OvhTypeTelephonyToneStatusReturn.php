<?php
/**
 * Class file for OvhTypeTelephonyToneStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyToneStatusReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyToneStatusReturn extends OvhWsdlClass
{
	/**
	 * The ringback
	 * @var boolean
	 */
	public $ringback;
	/**
	 * The onhold
	 * @var boolean
	 */
	public $onhold;
	/**
	 * The onclosure
	 * @var boolean
	 */
	public $onclosure;
	/**
	 * The callwaiting
	 * @var boolean
	 */
	public $callwaiting;
	/**
	 * Constructor
	 * @param boolean ringback
	 * @param boolean onhold
	 * @param boolean onclosure
	 * @param boolean callwaiting
	 * @return OvhTypeTelephonyToneStatusReturn
	 */
	public function __construct($_ringback = null,$_onhold = null,$_onclosure = null,$_callwaiting = null)
	{
		parent::__construct(array('ringback'=>$_ringback,'onhold'=>$_onhold,'onclosure'=>$_onclosure,'callwaiting'=>$_callwaiting));
	}
	/**
	 * Set ringback
	 * @param boolean ringback
	 * @return boolean
	 */
	public function setRingback($_ringback)
	{
		return ($this->ringback = $_ringback);
	}
	/**
	 * Get ringback
	 * @return boolean
	 */
	public function getRingback()
	{
		return $this->ringback;
	}
	/**
	 * Set onhold
	 * @param boolean onhold
	 * @return boolean
	 */
	public function setOnhold($_onhold)
	{
		return ($this->onhold = $_onhold);
	}
	/**
	 * Get onhold
	 * @return boolean
	 */
	public function getOnhold()
	{
		return $this->onhold;
	}
	/**
	 * Set onclosure
	 * @param boolean onclosure
	 * @return boolean
	 */
	public function setOnclosure($_onclosure)
	{
		return ($this->onclosure = $_onclosure);
	}
	/**
	 * Get onclosure
	 * @return boolean
	 */
	public function getOnclosure()
	{
		return $this->onclosure;
	}
	/**
	 * Set callwaiting
	 * @param boolean callwaiting
	 * @return boolean
	 */
	public function setCallwaiting($_callwaiting)
	{
		return ($this->callwaiting = $_callwaiting);
	}
	/**
	 * Get callwaiting
	 * @return boolean
	 */
	public function getCallwaiting()
	{
		return $this->callwaiting;
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