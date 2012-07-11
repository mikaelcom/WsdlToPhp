<?php
/**
 * Class file for OvhTypeTelephonyTonesOptionsModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyTonesOptionsModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyTonesOptionsModify extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
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
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string toneRingback
	 * @param string toneOnHold
	 * @param string toneOnClosure
	 * @param string toneOnCallWaiting
	 * @return OvhTypeTelephonyTonesOptionsModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_toneRingback = null,$_toneOnHold = null,$_toneOnClosure = null,$_toneOnCallWaiting = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'toneRingback'=>$_toneRingback,'toneOnHold'=>$_toneOnHold,'toneOnClosure'=>$_toneOnClosure,'toneOnCallWaiting'=>$_toneOnCallWaiting));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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