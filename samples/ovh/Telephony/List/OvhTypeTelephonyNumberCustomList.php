<?php
/**
 * Class file for OvhTypeTelephonyNumberCustomList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberCustomList
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberCustomList extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * Constructor
	 * @param string session
	 * @param string country
	 * @param string prefix
	 * @return OvhTypeTelephonyNumberCustomList
	 */
	public function __construct($_session = null,$_country = null,$_prefix = null)
	{
		parent::__construct(array('session'=>$_session,'country'=>$_country,'prefix'=>$_prefix));
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
	 * Set prefix
	 * @param string prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Get prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
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