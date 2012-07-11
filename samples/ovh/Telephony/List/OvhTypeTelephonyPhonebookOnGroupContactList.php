<?php
/**
 * Class file for OvhTypeTelephonyPhonebookOnGroupContactList
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookOnGroupContactList
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookOnGroupContactList extends OvhWsdlClass
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
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string session
	 * @param string group
	 * @param int id
	 * @param string groupName
	 * @return OvhTypeTelephonyPhonebookOnGroupContactList
	 */
	public function __construct($_session = null,$_group = null,$_id = null,$_groupName = null)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'id'=>$_id,'groupName'=>$_groupName));
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
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
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