<?php
/**
 * Class file for OvhTypeDedicatedFailoverAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedFailoverAdd
 * @date 02/07/2012
 */
class OvhTypeDedicatedFailoverAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The wantedIp
	 * @var string
	 */
	public $wantedIp;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string comment
	 * @param string wantedIp
	 * @param string routedTo
	 * @param string country
	 * @return OvhTypeDedicatedFailoverAdd
	 */
	public function __construct($_session = null,$_hostname = null,$_comment = null,$_wantedIp = null,$_routedTo = null,$_country = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'comment'=>$_comment,'wantedIp'=>$_wantedIp,'routedTo'=>$_routedTo,'country'=>$_country));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set wantedIp
	 * @param string wantedIp
	 * @return string
	 */
	public function setWantedIp($_wantedIp)
	{
		return ($this->wantedIp = $_wantedIp);
	}
	/**
	 * Get wantedIp
	 * @return string
	 */
	public function getWantedIp()
	{
		return $this->wantedIp;
	}
	/**
	 * Set routedTo
	 * @param string routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get routedTo
	 * @return string
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>