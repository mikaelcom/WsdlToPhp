<?php
/**
 * Class file for OvhTypeServiceListPaginated
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceListPaginated
 * @date 02/07/2012
 */
class OvhTypeServiceListPaginated extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The start
	 * @var int
	 */
	public $start;
	/**
	 * The limit
	 * @var int
	 */
	public $limit;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * Constructor
	 * @param string session
	 * @param int start
	 * @param int limit
	 * @param string domain
	 * @param string component
	 * @param string group
	 * @return OvhTypeServiceListPaginated
	 */
	public function __construct($_session = null,$_start = null,$_limit = null,$_domain = null,$_component = null,$_group = null)
	{
		parent::__construct(array('session'=>$_session,'start'=>$_start,'limit'=>$_limit,'domain'=>$_domain,'component'=>$_component,'group'=>$_group));
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
	 * Set start
	 * @param int start
	 * @return int
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get start
	 * @return int
	 */
	public function getStart()
	{
		return $this->start;
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
	 * Set component
	 * @param string component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get component
	 * @return string
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set group
	 * @param string group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Get group
	 * @return string
	 */
	public function getGroup()
	{
		return $this->group;
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