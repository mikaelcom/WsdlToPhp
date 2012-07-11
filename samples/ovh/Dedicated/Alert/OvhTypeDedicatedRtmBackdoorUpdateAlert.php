<?php
/**
 * Class file for OvhTypeDedicatedRtmBackdoorUpdateAlert
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmBackdoorUpdateAlert
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmBackdoorUpdateAlert extends OvhWsdlClass
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
	 * The backdoorId
	 * @var int
	 */
	public $backdoorId;
	/**
	 * The do_not_mail
	 * @var boolean
	 */
	public $do_not_mail;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param int backdoorId
	 * @param boolean do_not_mail
	 * @return OvhTypeDedicatedRtmBackdoorUpdateAlert
	 */
	public function __construct($_session = null,$_hostname = null,$_backdoorId = null,$_do_not_mail = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backdoorId'=>$_backdoorId,'do_not_mail'=>$_do_not_mail));
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
	 * Set backdoorId
	 * @param int backdoorId
	 * @return int
	 */
	public function setBackdoorId($_backdoorId)
	{
		return ($this->backdoorId = $_backdoorId);
	}
	/**
	 * Get backdoorId
	 * @return int
	 */
	public function getBackdoorId()
	{
		return $this->backdoorId;
	}
	/**
	 * Set do_not_mail
	 * @param boolean do_not_mail
	 * @return boolean
	 */
	public function setDo_not_mail($_do_not_mail)
	{
		return ($this->do_not_mail = $_do_not_mail);
	}
	/**
	 * Get do_not_mail
	 * @return boolean
	 */
	public function getDo_not_mail()
	{
		return $this->do_not_mail;
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