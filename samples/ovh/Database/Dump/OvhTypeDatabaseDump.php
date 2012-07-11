<?php
/**
 * Class file for OvhTypeDatabaseDump
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDatabaseDump
 * @date 02/07/2012
 */
class OvhTypeDatabaseDump extends OvhWsdlClass
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
	 * The backup
	 * @var string
	 */
	public $backup;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string db
	 * @param string backup
	 * @return OvhTypeDatabaseDump
	 */
	public function __construct($_session = null,$_domain = null,$_db = null,$_backup = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'db'=>$_db,'backup'=>$_backup));
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
	 * Set backup
	 * @param string backup
	 * @return string
	 */
	public function setBackup($_backup)
	{
		return ($this->backup = $_backup);
	}
	/**
	 * Get backup
	 * @return string
	 */
	public function getBackup()
	{
		return $this->backup;
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