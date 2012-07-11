<?php
/**
 * Class file for OvhTypeDatabaseChangePassword
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDatabaseChangePassword
 * @date 02/07/2012
 */
class OvhTypeDatabaseChangePassword extends OvhWsdlClass
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
	 * The db
	 * @var string
	 */
	public $db;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string db
	 * @param string password
	 * @return OvhTypeDatabaseChangePassword
	 */
	public function __construct($_session = null,$_domain = null,$_db = null,$_password = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'db'=>$_db,'password'=>$_password));
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
	 * Set db
	 * @param string db
	 * @return string
	 */
	public function setDb($_db)
	{
		return ($this->db = $_db);
	}
	/**
	 * Get db
	 * @return string
	 */
	public function getDb()
	{
		return $this->db;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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