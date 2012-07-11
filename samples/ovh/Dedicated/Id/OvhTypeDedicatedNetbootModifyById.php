<?php
/**
 * Class file for OvhTypeDedicatedNetbootModifyById
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedNetbootModifyById
 * @date 02/07/2012
 */
class OvhTypeDedicatedNetbootModifyById extends OvhWsdlClass
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
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The root
	 * @var string
	 */
	public $root;
	/**
	 * The rescueEmail
	 * @var string
	 */
	public $rescueEmail;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string id
	 * @param string root
	 * @param string rescueEmail
	 * @return OvhTypeDedicatedNetbootModifyById
	 */
	public function __construct($_session = null,$_hostname = null,$_id = null,$_root = null,$_rescueEmail = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'id'=>$_id,'root'=>$_root,'rescueEmail'=>$_rescueEmail));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set root
	 * @param string root
	 * @return string
	 */
	public function setRoot($_root)
	{
		return ($this->root = $_root);
	}
	/**
	 * Get root
	 * @return string
	 */
	public function getRoot()
	{
		return $this->root;
	}
	/**
	 * Set rescueEmail
	 * @param string rescueEmail
	 * @return string
	 */
	public function setRescueEmail($_rescueEmail)
	{
		return ($this->rescueEmail = $_rescueEmail);
	}
	/**
	 * Get rescueEmail
	 * @return string
	 */
	public function getRescueEmail()
	{
		return $this->rescueEmail;
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