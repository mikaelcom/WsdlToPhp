<?php
/**
 * Class file for OvhTypeServiceList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceList
 * @date 02/07/2012
 */
class OvhTypeServiceList extends OvhWsdlClass
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
	 * The componentSubType
	 * @var string
	 */
	public $componentSubType;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string component
	 * @param string group
	 * @param string componentSubType
	 * @return OvhTypeServiceList
	 */
	public function __construct($_session = null,$_domain = null,$_component = null,$_group = null,$_componentSubType = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'component'=>$_component,'group'=>$_group,'componentSubType'=>$_componentSubType));
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
	 * Set componentSubType
	 * @param string componentSubType
	 * @return string
	 */
	public function setComponentSubType($_componentSubType)
	{
		return ($this->componentSubType = $_componentSubType);
	}
	/**
	 * Get componentSubType
	 * @return string
	 */
	public function getComponentSubType()
	{
		return $this->componentSubType;
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