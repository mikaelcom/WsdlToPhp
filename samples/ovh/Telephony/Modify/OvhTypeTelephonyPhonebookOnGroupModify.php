<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupModify
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupModify extends OvhWsdlClass
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
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param int id
	 * @param string name
	 * @return OvhTypeTelephonyPhonebookOnGroupModify
	 */
	public function __construct($_session = null,$_group = null,$_id = null,$_name = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'id'=>$_id,'name'=>$_name));
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