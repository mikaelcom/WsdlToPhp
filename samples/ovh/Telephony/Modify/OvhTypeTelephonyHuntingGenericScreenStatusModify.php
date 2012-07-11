<?php
/**
 * Class file for OvhTypeTelephonyHuntingGenericScreenStatusModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingGenericScreenStatusModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingGenericScreenStatusModify extends OvhWsdlClass
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
	 * The status
	 * @var boolean
	 */
	public $status;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param boolean status
	 * @return OvhTypeTelephonyHuntingGenericScreenStatusModify
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_status = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'status'=>$_status));
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
	 * Set status
	 * @param boolean status
	 * @return boolean
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return boolean
	 */
	public function getStatus()
	{
		return $this->status;
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