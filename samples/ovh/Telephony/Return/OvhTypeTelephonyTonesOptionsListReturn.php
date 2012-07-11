<?php
/**
 * Class file for OvhTypeTelephonyTonesOptionsListReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyTonesOptionsListReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyTonesOptionsListReturn extends OvhWsdlClass
{
	/**
	 * The toneRingback
	 * @var string
	 */
	public $toneRingback;
	/**
	 * The toneOnHold
	 * @var string
	 */
	public $toneOnHold;
	/**
	 * The toneOnClosure
	 * @var string
	 */
	public $toneOnClosure;
	/**
	 * The toneOnCallWaiting
	 * @var string
	 */
	public $toneOnCallWaiting;
	/**
	 * Constructor
	 * @param string toneRingback
	 * @param string toneOnHold
	 * @param string toneOnClosure
	 * @param string toneOnCallWaiting
	 * @return OvhTypeTelephonyTonesOptionsListReturn
	 */
	public function __construct($_toneRingback = null,$_toneOnHold = null,$_toneOnClosure = null,$_toneOnCallWaiting = null)
	{
		parent::__construct(array('toneRingback'=>$_toneRingback,'toneOnHold'=>$_toneOnHold,'toneOnClosure'=>$_toneOnClosure,'toneOnCallWaiting'=>$_toneOnCallWaiting));
	}
	/**
	 * Set toneRingback
	 * @param string toneRingback
	 * @return string
	 */
	public function setToneRingback($_toneRingback)
	{
		return ($this->toneRingback = $_toneRingback);
	}
	/**
	 * Get toneRingback
	 * @return string
	 */
	public function getToneRingback()
	{
		return $this->toneRingback;
	}
	/**
	 * Set toneOnHold
	 * @param string toneOnHold
	 * @return string
	 */
	public function setToneOnHold($_toneOnHold)
	{
		return ($this->toneOnHold = $_toneOnHold);
	}
	/**
	 * Get toneOnHold
	 * @return string
	 */
	public function getToneOnHold()
	{
		return $this->toneOnHold;
	}
	/**
	 * Set toneOnClosure
	 * @param string toneOnClosure
	 * @return string
	 */
	public function setToneOnClosure($_toneOnClosure)
	{
		return ($this->toneOnClosure = $_toneOnClosure);
	}
	/**
	 * Get toneOnClosure
	 * @return string
	 */
	public function getToneOnClosure()
	{
		return $this->toneOnClosure;
	}
	/**
	 * Set toneOnCallWaiting
	 * @param string toneOnCallWaiting
	 * @return string
	 */
	public function setToneOnCallWaiting($_toneOnCallWaiting)
	{
		return ($this->toneOnCallWaiting = $_toneOnCallWaiting);
	}
	/**
	 * Get toneOnCallWaiting
	 * @return string
	 */
	public function getToneOnCallWaiting()
	{
		return $this->toneOnCallWaiting;
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