<?php
/**
 * Class file for OvhTypePopUpgradeQuota
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopUpgradeQuota
 * @date 02/07/2012
 */
class OvhTypePopUpgradeQuota extends OvhWsdlClass
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
	 * The pop
	 * @var string
	 */
	public $pop;
	/**
	 * The size
	 * @var int
	 */
	public $size;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string pop
	 * @param int size
	 * @return OvhTypePopUpgradeQuota
	 */
	public function __construct($_session = null,$_domain = null,$_pop = null,$_size = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'size'=>$_size));
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
	 * Set pop
	 * @param string pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get pop
	 * @return string
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set size
	 * @param int size
	 * @return int
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return int
	 */
	public function getSize()
	{
		return $this->size;
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