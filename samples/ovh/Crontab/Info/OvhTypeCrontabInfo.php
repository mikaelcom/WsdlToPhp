<?php
/**
 * Class file for OvhTypeCrontabInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabInfo
 * @date 02/07/2012
 */
class OvhTypeCrontabInfo extends OvhWsdlClass
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
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param int id
	 * @return OvhTypeCrontabInfo
	 */
	public function __construct($_session = null,$_domain = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'id'=>$_id));
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
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
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