<?php
/**
 * Class file for OvhTypeMailingListSubscriberListByEmail
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListSubscriberListByEmail
 * @date 02/07/2012
 */
class OvhTypeMailingListSubscriberListByEmail extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The ml
	 * @var string
	 */
	public $ml;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string ml
	 * @param string email
	 * @return OvhTypeMailingListSubscriberListByEmail
	 */
	public function __construct($_session = null,$_domain = null,$_ml = null,$_email = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'ml'=>$_ml,'email'=>$_email));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set ml
	 * @param string ml
	 * @return string
	 */
	public function setMl($_ml)
	{
		return ($this->ml = $_ml);
	}
	/**
	 * Get ml
	 * @return string
	 */
	public function getMl()
	{
		return $this->ml;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
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