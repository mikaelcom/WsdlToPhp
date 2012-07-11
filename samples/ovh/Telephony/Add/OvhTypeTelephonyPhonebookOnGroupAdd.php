<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupAdd
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param string name
	 * @return OvhTypeTelephonyPhonebookOnGroupAdd
	 */
	public function __construct($_session = null,$_group = null,$_name = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'name'=>$_name));
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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