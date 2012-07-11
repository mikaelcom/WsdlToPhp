<?php
/**
 * Class file for OvhTypeDedicatedMailinglistSubscribe
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedMailinglistSubscribe
 * @date 02/07/2012
 */
class OvhTypeDedicatedMailinglistSubscribe extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The mailingList
	 * @var string
	 */
	public $mailingList;
	/**
	 * Constructor
	 * @param string session
	 * @param string email
	 * @param string mailingList
	 * @return OvhTypeDedicatedMailinglistSubscribe
	 */
	public function __construct($_session = null,$_email = null,$_mailingList = null)
	{
		parent::__construct(array('session'=>$_session,'email'=>$_email,'mailingList'=>$_mailingList));
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
	 * Set mailingList
	 * @param string mailingList
	 * @return string
	 */
	public function setMailingList($_mailingList)
	{
		return ($this->mailingList = $_mailingList);
	}
	/**
	 * Get mailingList
	 * @return string
	 */
	public function getMailingList()
	{
		return $this->mailingList;
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