<?php
/**
 * Class file for OvhTypeAutomatedMailGetErrors
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetErrors
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetErrors extends OvhWsdlClass
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
	 * The deep
	 * @var int
	 */
	public $deep;
	/**
	 * The limit
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param int deep
	 * @param int limit
	 * @return OvhTypeAutomatedMailGetErrors
	 */
	public function __construct($_session = null,$_domain = null,$_deep = null,$_limit = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'deep'=>$_deep,'limit'=>$_limit));
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
	 * Set deep
	 * @param int deep
	 * @return int
	 */
	public function setDeep($_deep)
	{
		return ($this->deep = $_deep);
	}
	/**
	 * Get deep
	 * @return int
	 */
	public function getDeep()
	{
		return $this->deep;
	}
	/**
	 * Set limit
	 * @param int limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get limit
	 * @return int
	 */
	public function getLimit()
	{
		return $this->limit;
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