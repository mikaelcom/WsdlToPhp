<?php
/**
 * Class file for OvhTypeTelephonyRedirectInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRedirectInfoReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyRedirectInfoReturn extends OvhWsdlClass
{
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
	 * The noReplyTimer
	 * @var int
	 */
	public $noReplyTimer;
	/**
	 * The logged
	 * @var boolean
	 */
	public $logged;
	/**
	 * Constructor
	 * @param string number
	 * @param string country
	 * @param int noReplyTimer
	 * @param boolean logged
	 * @return OvhTypeTelephonyRedirectInfoReturn
	 */
	public function __construct($_number = null,$_country = null,$_noReplyTimer = null,$_logged = null)
	{
		parent::__construct(array('number'=>$_number,'country'=>$_country,'noReplyTimer'=>$_noReplyTimer,'logged'=>$_logged));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>