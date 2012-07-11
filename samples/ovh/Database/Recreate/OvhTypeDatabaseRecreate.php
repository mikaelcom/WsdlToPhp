<?php
/**
 * Class file for OvhTypeDatabaseRecreate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDatabaseRecreate
 * @date 02/07/2012
 */
class OvhTypeDatabaseRecreate extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string db
	 * @return OvhTypeDatabaseRecreate
	 */
	public function __construct($_session = null,$_domain = null,$_db = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'db'=>$_db));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>