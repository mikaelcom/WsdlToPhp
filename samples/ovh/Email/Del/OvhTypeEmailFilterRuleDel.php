<?php
/**
 * Class file for OvhTypeEmailFilterRuleDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailFilterRuleDel
 * @date 02/07/2012
 */
class OvhTypeEmailFilterRuleDel extends OvhWsdlClass
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
	 * The filter
	 * @var string
	 */
	public $filter;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string pop
	 * @param string filter
	 * @param int id
	 * @return OvhTypeEmailFilterRuleDel
	 */
	public function __construct($_session = null,$_domain = null,$_pop = null,$_filter = null,$_id = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'filter'=>$_filter,'id'=>$_id));
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
	 * Set filter
	 * @param string filter
	 * @return string
	 */
	public function setFilter($_filter)
	{
		return ($this->filter = $_filter);
	}
	/**
	 * Get filter
	 * @return string
	 */
	public function getFilter()
	{
		return $this->filter;
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